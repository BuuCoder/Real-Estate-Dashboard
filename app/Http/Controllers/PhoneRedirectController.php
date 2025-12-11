<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneRedirectController extends Controller
{
    public function redirect($phone)
    {
        // Clean phone number
        $cleanPhone = preg_replace('/[^0-9+]/', '', $phone);
        
        // Log the click for analytics
        \Log::info('Phone link clicked', [
            'phone' => $cleanPhone,
            'user_agent' => request()->userAgent(),
            'ip' => request()->ip(),
            'timestamp' => now()
        ]);

        // Detect mobile device
        $isMobile = $this->isMobileDevice();
        
        if ($isMobile) {
            // On mobile, redirect to tel: link
            return redirect('tel:' . $cleanPhone);
        } else {
            // On desktop, show contact page with phone number
            return view('phone-contact', [
                'phone' => $cleanPhone,
                'formatted_phone' => $this->formatPhoneDisplay($cleanPhone)
            ]);
        }
    }

    private function isMobileDevice()
    {
        $userAgent = request()->userAgent();
        return preg_match('/Mobile|Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i', $userAgent);
    }

    private function formatPhoneDisplay($phone)
    {
        // Remove +84 and format nicely
        $clean = str_replace('+84', '', $phone);
        return '[+84] ' . $clean;
    }
}