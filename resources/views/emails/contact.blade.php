@component('mail::message')
# New Contact Form Message

You have received a new message from your portfolio contact form.

**Name:** {{ $name }}

**Email:** {{ $email }}

**Message:**

{{ $message }}

---

Thanks,
{{ config('app.name') }}
@endcomponent
