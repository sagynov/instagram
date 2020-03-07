@component('mail::message')
# Welcome to Instagram

This is copy of Instagram.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
