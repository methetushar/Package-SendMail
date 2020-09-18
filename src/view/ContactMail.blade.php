@component('mail::message')
# Introduction

The body of your message.
<h3>{{ $name }}</h3>
<p>From: {{ $email }}</p>
<p><b>Subject:</b>{{ $message }}</p>
@component('mail::button', ['url' => 'https://packagist.org/packages/tusharahmed/contact'])
Go the package
@endcomponent

Thanks,<br>
{{ 'Tushar ahmed '}}
@endcomponent
