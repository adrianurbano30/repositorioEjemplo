@component('mail::message')
# Tu post fue bien visto

a {{$liker->name}} le gusto tu post amigo.

@component('mail::button', ['url' => route('post.show',$post)])
Ver Post
@endcomponent

Muchas gracias,<br>
{{ config('app.name') }}
@endcomponent
