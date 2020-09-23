@component('mail::message')
    <p>Hi, This is {{ $data['name'] }} {{ $data['last_name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Message: {{ $data['message'] }}.</p>
    <p>It would be appriciative, if you gone through this feedback.</p>
    Thanks,<br>

    {{ config('app.name') }}
@endcomponent
