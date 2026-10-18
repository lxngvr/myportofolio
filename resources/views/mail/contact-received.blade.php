{{-- Email teks biasa, jadi pakai {!! !!} agar karakter seperti & tidak di-escape. --}}
New message from your portfolio

Name:  {!! $contact->name !!}
Email: {!! $contact->email !!}
Sent:  {{ $contact->created_at->timezone(config('app.timezone'))->format('d M Y, H:i') }}

{!! $contact->message !!}

--
Reply to this email to answer {!! $contact->name !!} directly.
