@component('mail::layout')
{{-- Header --}}
@slot('header')
{{-- @component('mail::header', ['url' => config('app.url')])
<img src="{{config('app.url').'/assets/img/img_logo.png'}}" style="width:40%" />
@endcomponent --}}
@endslot
{{-- @slot('backgroundUrl')
{{config('app.url').'/assets/img/ef_email_bg@2x.png'}}
@endslot --}}
{{-- Body --}}

<p style=" 
font-weight: bold;
font-size: 13px;
">
We’re sorry the registration is already full
</p>
<p style=" 
font-weight: 400;
font-size: 13px;
">
    Dear {{$name}},
</p>
<p style=" 
font-weight: 400;
font-size: 13px;
">
    Thank you for your interest in <b>Grab Business Forum 2023 – Executive Forum</b>.
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
    Apologies, we can’t accommodate your registration due to the event already reaching the maximum quota.
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
    We understand that you are keen to join the Executive Forum and we hope we can meet you in the next Grab Business Forum or other GrabforBusiness events.
</p>

<p style="
font-weight: 400;
;
font-size: 13px;
">
    Thank you.
</p>

{{-- <table width=100% align="center" style="
text-align: center; 
">
    <tr>
        <td>
            <div style="margin: auto;">
                <img src="{{config('app.url').'/assets/img/footer-img.png'}}">
            </div>
        </td>
    </tr>
</table> --}}
{{-- <img src="http://grab.stagingpurpose.online/storage/QR/handofmidas404@gmail.com"> --}}
{{-- <img src="{{$qr}}"> --}}
{{-- <img src="{{ $message->embed($qr) }}"> --}}
{{-- @component('mail::button', ['color' => 'blue' ,'url' => $qr])
    @endcomponent --}}

{{-- Subcopy --}}
{{-- @isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
<img src="{{$url}}">
@endcomponent
@endslot
@endisset --}}

{{-- <div style="
position: absolute;
bottom:0;">
    <img width="20%" src="{{config('app.url').'/assets/img/element_kiri@2x.png'}}">

</div> --}}
{{-- Footer --}}
@slot('footer')
@component('mail::footer')

<img width="20%" src="{{config('app.url').'/assets/img/element_kiri@2x.png'}}">
@endcomponent
@endslot
@endcomponent
