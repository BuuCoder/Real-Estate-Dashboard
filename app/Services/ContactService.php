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
            // Thêm contact ID vào data để tạo mã liên hệ
            $dataWithId = array_merge($data, ['contact_id' => $contact->id]);
            $emailResult = $this->brevoEmailService->sendContactConfirmationEmail($dataWithId);
        }

        return [
            'contact' => $contact,
            'email_result' => $emailResult
        ];
    }
}
