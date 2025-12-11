<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ContactService;
use App\Services\BrevoEmailService;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'email|max:255',
                'phone' => 'required|string|max:20',
                'message' => 'required|string|max:1000',
            ], [
                'name.required' => 'Vui lòng nhập tên.',
                'name.string' => 'Tên không hợp lệ.',
                'name.max' => 'Tên không được vượt quá 255 ký tự.',
                'email.email' => 'Email không hợp lệ.',
                'email.max' => 'Email không được vượt quá 255 ký tự.',
                'phone.required' => 'Vui lòng nhập số điện thoại.',
                'phone.string' => 'Số điện thoại không hợp lệ.',
                'phone.max' => 'Số điện thoại không được vượt quá 20 ký tự.',
                'message.required' => 'Vui lòng nhập nội dung.',
                'message.string' => 'Nội dung không hợp lệ.',
                'message.max' => 'Nội dung không được vượt quá 1000 ký tự.',
            ]);

            $result = $this->contactService->createContact($validated);

            $emailResult = $result['email_result'] ?? [];

            return response()->json([
                'success' => true,
                'message' => 'Yêu cầu liên hệ của bạn đã được gửi thành công. Chúng tôi sẽ liên hệ lại trong vòng 24h.',
                'data' => [
                    'contact_id' => $result['contact']->id ?? null,
                    'email_sent' => $emailResult['success'] ?? false,
                    'message_id' => $emailResult['message_id'] ?? null
                ]
            ], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            \Log::error('Contact creation failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Đã xảy ra lỗi không mong muốn. Vui lòng thử lại sau.'
            ], 500);
        }
    }

    public function sendEmail(Request $request)
    {
        try {
            $validated = $request->validate([
                'sender' => 'required|array',
                'sender.name' => 'required|string|max:255',
                'sender.email' => 'required|email|max:255',
                'to' => 'required|array|min:1',
                'to.*.email' => 'required|email|max:255',
                'to.*.name' => 'required|string|max:255',
                'htmlContent' => 'required|string',
                'subject' => 'required|string|max:255',
                'replyTo' => 'sometimes|array',
                'replyTo.email' => 'required_with:replyTo|email|max:255',
                'replyTo.name' => 'required_with:replyTo|string|max:255',
                'tags' => 'sometimes|array',
                'tags.*' => 'string|max:50'
            ], [
                'sender.required' => 'Thông tin người gửi là bắt buộc.',
                'sender.name.required' => 'Tên người gửi là bắt buộc.',
                'sender.email.required' => 'Email người gửi là bắt buộc.',
                'sender.email.email' => 'Email người gửi không hợp lệ.',
                'to.required' => 'Danh sách người nhận là bắt buộc.',
                'to.min' => 'Phải có ít nhất 1 người nhận.',
                'to.*.email.required' => 'Email người nhận là bắt buộc.',
                'to.*.email.email' => 'Email người nhận không hợp lệ.',
                'to.*.name.required' => 'Tên người nhận là bắt buộc.',
                'htmlContent.required' => 'Nội dung email là bắt buộc.',
                'subject.required' => 'Tiêu đề email là bắt buộc.',
                'replyTo.email.email' => 'Email reply-to không hợp lệ.',
                'tags.*.string' => 'Tag phải là chuỗi ký tự.'
            ]);

            $brevoEmailService = app(BrevoEmailService::class);
            $result = $brevoEmailService->sendEmail($validated);

            if ($result['success']) {
                return response()->json([
                    'success' => true,
                    'message' => 'Email đã được gửi thành công.',
                    'data' => [
                        'message_id' => $result['message_id'],
                        'recipients' => count($validated['to'])
                    ]
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Không thể gửi email.',
                    'error' => $result['error'] ?? 'Unknown error'
                ], 500);
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            \Log::error('Email sending failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Đã xảy ra lỗi không mong muốn. Vui lòng thử lại sau.'
            ], 500);
        }
    }
}
