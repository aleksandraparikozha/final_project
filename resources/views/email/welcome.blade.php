@component('mail::message')
    {{$data['text']}}

    @component('mail::button', ['url' => ''])
        I Like It!
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
