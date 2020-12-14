@component('mail::message')
# Beste lezer,

Klik op de knop hieronder om de nieuwe blog berichten te zien.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/blogs'])
Bekijk de nieuwe blog berichten
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
