<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Mail\ContactMessageReceived;
use App\Models\ContactMessage;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactMessageController extends Controller
{
    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        $back = redirect()->to(route('home') . '#contact');
        $success = 'Thanks! Your message has been sent. I will reply as soon as I can.';

        // Honeypot: kolom ini tersembunyi untuk manusia. Bot yang mengisinya
        // dianggap berhasil (supaya tidak mencoba lagi), tapi tidak disimpan.
        if ($request->filled('website')) {
            return $back->with('contact_status', $success);
        }

        // Simpan dulu. Pesan tidak hilang walaupun email gagal terkirim.
        $contact = ContactMessage::create([
            ...$request->validated(),
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 255),
        ]);

        $recipient = Profile::first()?->email;

        if ($recipient) {
            try {
                Mail::to($recipient)->send(new ContactMessageReceived($contact));
                $contact->update(['emailed_at' => now()]);
            } catch (Throwable $e) {
                report($e); // tercatat di storage/logs, pesan tetap tersimpan di database
            }
        }

        return $back->with('contact_status', $success);
    }
}
