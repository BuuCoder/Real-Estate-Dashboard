<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BrevoEmailService
{
    protected $apiKey;
    protected $apiUrl;
    protected $adminEmail = 'phatdatbatdongsan.com@gmail.com';

    public function __construct()
    {
        $this->apiKey = config('services.brevo.api_key');
        $this->apiUrl = 'https://api.sendinblue.com/v3';
    }

    public function sendContactConfirmationEmail($contactData)
    {
        // Kiểm tra API key trước khi gửi
        if (empty($this->apiKey) || $this->apiKey === 'your_brevo_api_key_here') {
            Log::error('Brevo API key not configured properly');
            return [
                'success' => false,
                'error' => 'API key not configured'
            ];
        }

        // Gửi 1 email duy nhất đến người dùng và CC cho admin
        if (!empty($contactData['email'])) {
            return $this->sendConfirmationEmailWithCC($contactData);
        }

        return [
            'success' => false,
            'error' => 'Customer email is required'
        ];
    }

    public function sendEmail($emailData)
    {
        // Kiểm tra API key trước khi gửi
        if (empty($this->apiKey) || $this->apiKey === 'your_brevo_api_key_here') {
            Log::error('Brevo API key not configured properly');
            return false;
        }

        try {
            $response = Http::withHeaders([
                'api-key' => $this->apiKey,
                'Content-Type' => 'application/json'
            ])->post($this->apiUrl . '/smtp/email', $emailData);

            $responseData = $response->json();

            Log::info('Brevo API Response', $responseData);

            if ($response->successful() && isset($responseData['messageId'])) {
                Log::info('Email sent successfully via Brevo', [
                    'message_id' => $responseData['messageId'],
                    'to' => $emailData['to'],
                    'subject' => $emailData['subject']
                ]);
                return [
                    'success' => true,
                    'message_id' => $responseData['messageId'],
                    'response' => $responseData
                ];
            } else {
                Log::error('Failed to send email via Brevo', [
                    'response' => $response->body(),
                    'status' => $response->status(),
                    'email_data' => $emailData,
                    'api_key_configured' => !empty($this->apiKey)
                ]);
                return [
                    'success' => false,
                    'error' => $response->body(),
                    'status' => $response->status()
                ];
            }
        } catch (\Exception $e) {
            Log::error('Brevo email service error', ['error' => $e->getMessage()]);
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }

    private function sendConfirmationEmailWithCC($contactData)
    {
        try {
            $emailData = [
                'sender' => [
                    'name' => 'Phát Đạt',
                    'email' => 'contact@phatdatbatdongsan.com'
                ],
                'to' => [
                    [
                        'email' => $contactData['email'],
                        'name' => $contactData['name']
                    ]
                ],
                'cc' => [
                    [
                        'email' => $this->adminEmail,
                        'name' => 'Phát Đạt Bất Động Sản'
                    ]
                ],
                'subject' => 'Xác nhận đã nhận được yêu cầu liên hệ',
                'htmlContent' => $this->generateEmailTemplate($contactData)
            ];

            $response = Http::withHeaders([
                'api-key' => $this->apiKey,
                'Content-Type' => 'application/json'
            ])->post($this->apiUrl . '/smtp/email', $emailData);

            $responseData = $response->json();

            Log::info('Brevo API Response', $responseData);

            if ($response->successful() && isset($responseData['messageId'])) {
                Log::info('Confirmation email sent successfully via Brevo', [
                    'customer_email' => $contactData['email'],
                    'cc_admin' => $this->adminEmail,
                    'message_id' => $responseData['messageId']
                ]);
                return [
                    'success' => true,
                    'message_id' => $responseData['messageId'],
                    'customer_email' => $contactData['email'],
                    'admin_cc' => $this->adminEmail
                ];
            } else {
                Log::error('Failed to send confirmation email via Brevo', [
                    'response' => $response->body(),
                    'status' => $response->status(),
                    'contact_email' => $contactData['email'],
                    'api_key_configured' => !empty($this->apiKey)
                ]);
                return [
                    'success' => false,
                    'error' => $response->body(),
                    'status' => $response->status()
                ];
            }
        } catch (\Exception $e) {
            Log::error('Brevo email service error', ['error' => $e->getMessage()]);
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }

    private function generateEmailTemplate($contactData)
    {
        $name = htmlspecialchars($contactData['name']);
        $email = htmlspecialchars($contactData['email']);
        $phone = htmlspecialchars($contactData['phone']);
        $message = nl2br(htmlspecialchars($contactData['message']));

        return '<!DOCTYPE html><html lang="vi"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Xác nhận liên hệ</title></head><body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f9fafb;"><div style="max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);"><!-- Header --><div style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); padding: 40px 30px; text-align: center;"><h1 style="color: #ffffff; margin: 0; font-size: 26px; font-weight: bold;">Cảm ơn Anh/Chị đã liên hệ!</h1><p style="color: #d1fae5; margin: 10px 0 0; font-size: 16px;">Chúng tôi đã nhận được yêu cầu của Anh/Chị.</p></div><!-- Content --><div style="padding: 30px 30px;"><!-- Confirm meeting section --><div style="background-color: #ecfdf5; border-left: 4px solid #10b981; padding: 20px; border-radius: 8px; margin-bottom: 30px;"><h2 style="color: #065f46; margin: 0 0 15px; font-size: 20px;">✔️ Xác nhận hẹn gặp</h2><p style="color: #047857; margin: 0; font-size: 16px; line-height: 1.6;">Xin chào Anh/Chị <strong>' . $name . '</strong>,<br>Chúng tôi đã nhận được yêu cầu liên hệ của Anh Chị và rất vui được hỗ trợ Anh Chị!</p></div><!-- Contact details section --><div style="margin-bottom: 30px;"><h3 style="color: #374151; margin: 0 0 20px; font-size: 18px; border-bottom: 2px solid #10b981; padding-bottom: 10px;">Thông tin liên hệ của Anh/Chị:</h3><table style="width: 100%; border-collapse: collapse;"><tr><td style="padding: 8px 0; color: #6b7280; font-weight: bold; width: 120px;">Họ tên:</td><td style="padding: 8px 0; color: #374151;">' . $name . '</td></tr><tr><td style="padding: 8px 0; color: #6b7280; font-weight: bold;">Email:</td><td style="padding: 8px 0; color: #374151;">' . $email . '</td></tr><tr><td style="padding: 8px 0; color: #6b7280; font-weight: bold;">Điện thoại:</td><td style="padding: 8px 0; color: #374151;">' . $phone . '</td></tr><tr><td style="padding: 8px 0; color: #6b7280; font-weight: bold; vertical-align: top;">Nội dung:</td><td style="padding: 8px 0; color: #374151; line-height: 1.6;">' . $message . '</td></tr></table></div><!-- Next steps section --><div style="text-align: center; margin-bottom: 30px;"><div style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; padding: 20px; border-radius: 8px;"><h3 style="margin: 0 0 10px; font-size: 18px; text-align: center;">🤝 Bước tiếp theo</h3><p style="margin: 0; font-size: 16px; line-height: 1.6; text-align: center;">Chúng tôi sẽ liên hệ lại với Anh/Chị trong vòng <strong>24 giờ</strong> để sắp xếp cuộc hẹn gặp phù hợp.</p></div></div><!-- Contact Info --><div style="background-color: #f0fdf4; border-radius: 8px; padding: 20px; text-align: center;"><p style="color: #065f46; margin: 0 0 10px; font-size: 14px;">Nếu Anh/Chị có thắc mắc gì, vui lòng liên hệ:</p><p style="color: #047857; margin: 0 0 5px; font-size: 14px;">📧 phatdatbatdongsan.com@gmail.com</p><p style="color: #047857; margin: 0; font-size: 14px;">📞 097-432-6036</p></div><!-- Footer --><div style="background-color: #065f46; padding: 25px 30px; text-align: center;"><p style="color: #d1fae5; margin: 0 0 10px; font-size: 16px; font-weight: bold;">Phát Đạt Bất Động Sản</p><p style="color: #a7f3d0; margin: 0; font-size: 14px;">Cảm ơn Anh/Chị đã tin tưởng và lựa chọn dịch vụ của chúng tôi!</p></div></div></body></html>';
    }
}
