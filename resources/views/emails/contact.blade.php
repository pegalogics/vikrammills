@component('mail::message')
# Confirmation mail

Thank for you input, we receive you detail.

@component('mail::button', ['url' => ''])
Return to site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
