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
 Your Registration Has Been Confirmed! Early Participant
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
">Thank you for your interest in <b>Grab Business Forum 2023 – Executive Forum.</b></p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
    Your registration <b>has been confirmed!</b>
</p>

<table style=" 
font-weight: 400;
font-size: 13px;
">
    <tr>
        <td colspan="3" style="font-weight:bold">Digital Forward: Bracing for Market Uncertainties</td>
    </tr>
    <tr>
        <td>Date</td>
        <td align="left">:</td>
        <td align="left">
            Thursday, March 16, 2023
        </td>
    </tr>
    <tr>
        <td>Time</td>
        <td align="left">:</td>
        <td align="left">
            08.00 AM – 18.45 PM, JKT Time
        </td>
    </tr>
    <tr>
        <td style="width: 20%;">Venue</td>
        <td align="left">:</td>
        <td align="left">
            Grand Ballroom Kempinski Hotel Jakarta
        </td>
    </tr>
</table>
<br />
<p style=" 
font-weight: 400;
font-size: 13px;
">
    Meet Grab leaders, policymakers, and business partners to get insights on the Executive
    Forum. <br />You can gain further knowledge from the <b>“Digital Acceleration for Business Resilience and
        Sustainability”</b> panel discussion featuring distinguished speakers.
</p>
<p style="
font-weight: 400;
;
font-size: 13px;
">For C-Levels/Directors, we encourage you to attend the Executive Forum (Keynote Speech,
    Panel Discussion, and Corporate Awarding) until the Private Lunch (08.00 - 13.00) for
    networking with other Speakers and C-Level/Directors Audience.</p>
<p style="
font-weight: 400;
;
font-size: 13px;
">C-Levels/Directors are also welcome to attend the Business Talk and Entertainment Session.</p>
<p style="
font-weight: 400;
;
font-size: 13px;
">Please show the following QR code during registration</p>

<table width=50% align="center" style="
text-align: center; 
font-family: grab-en-bold; 
font-size: 13px;
line-height: 22px;
letter-spacing: 0em;
text-align: center;
">
    <tr>
        <td>
            <div style="
    padding: 25px;
    background-color: white;
    display: flex;
    width: 150px;
    height: 150px;
    margin: auto;
    border-radius: 14px;
    justify-content: center;">
                <img src="{{$qr}}">
            </div>
        </td>
    </tr>
</table>
<p style="
font-weight: 400;
 !important;
font-size: 13px;
margin-top:16px;
">
    Please find more detail about the agenda in here:  <a href="https://grabbusinessforum.com" target="_blank" style="color:#FFFFFF;">https://grabbusinessforum.com</a>
</p>
<p style="
font-weight: 400;
;
font-size: 13px;
">
    We will provide you with interesting door prizes at the end of the Executive Forum.
</p>
<p style="
font-weight: 400;
;
font-size: 13px;
">
    We are looking forward to meeting you at Grab Business Forum 2023!
</p>
<p style="
font-weight: 400;
;
font-size: 13px;
">
    Thank you
    Regards,
    <br />
    Grab Business Forum 2023 Committee
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
