@component('mail::message')
# Bem-vindo à MySNS Comunidade!


Obrigado por se juntar à MySNS Comunidade!

Apenas necessitamos que confirme o seu endereço de e-mail:


@component('mail::button', ['url' => route('email.confirm', [$user->emailAddress(), $user->confirmationCode()])])
Confirmar e-mail
@endcomponent


Muito Obrigado,<br>
{{ config('app.name') }}
@endcomponent
