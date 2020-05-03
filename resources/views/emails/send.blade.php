@component('mail::message')
From: {{ $fullName }}
<br>
Email: {{ $email }}
<br><br>
{{ $content }}
@endcomponent

