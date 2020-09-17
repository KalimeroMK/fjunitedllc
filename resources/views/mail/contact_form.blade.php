@component('mail::message')
    <p>Hi, This is {{ $data['name'] }}</p>
    <p>Hi, This is {{ $data['last_name'] }}</p>
    <p>Hi, This is {{ $data['email'] }}</p>
    <p>I have some query like {{ $data['message'] }}.</p>
    <p>It would be appriciative, if you gone through this feedback.</p>
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
