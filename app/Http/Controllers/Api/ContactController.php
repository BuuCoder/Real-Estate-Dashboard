<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ContactService;

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

            $contact = $this->contactService->createContact($validated);

            return response()->json([
                'success' => true,
                'message' => 'Your contact request has been submitted successfully.'
            ], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred.'
            ], 500);
        }
    }
    }
}
