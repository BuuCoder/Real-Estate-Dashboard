<?php

namespace App\Services;

use App\Repositories\ContactRepository;

class ContactService
{
    protected $contactRepository;
    protected $brevoEmailService;

    public function __construct(ContactRepository $contactRepository, BrevoEmailService $brevoEmailService)
    {
        $this->contactRepository = $contactRepository;
        $this->brevoEmailService = $brevoEmailService;
    }

    public function createContact(array $data)
    {
        // Tạo contact trong database
        $contact = $this->contactRepository->create($data);

        // Gửi email qua Brevo (gửi cho customer và CC cho admin)
        $emailResult = [];
        if ($contact) {
            $emailResult = $this->brevoEmailService->sendContactConfirmationEmail($data);
        }

        return [
            'contact' => $contact,
            'email_result' => $emailResult
        ];
    }
}
