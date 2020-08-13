@component('mail::message')
# Bonjour

Vous avez reçu un mail de la part de {{ $data['fsurname'] }} {{ $data['fname'] }}

@component('mail::button', ['url' => ''])
    {{ $data['message'] }}
@endcomponent


## Voici son mail pour le ou la recontacter : {{ $data['mail'] }}
Merci,<br>
Site Web ALCKCT
@endcomponent
