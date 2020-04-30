@component('mail::message')
From: {{ $fullName }}
<br>
Email: {{ $email }}
<br>
{{ $content }}
<br>
{{ config('app.name') }}
@endcomponent
