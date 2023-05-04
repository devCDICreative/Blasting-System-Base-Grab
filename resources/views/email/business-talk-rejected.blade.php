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
Registrasi Business Talk telah melebihi kuota
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
    Terima kasih atas ketertarikan Anda untuk menghadiri <b>Grab Business Forum 2023 – Business Talk</b>.
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
    Kami informasikan bahwa registrasi Anda <b>belum berhasil</b>.
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
    Saat ini, permintaan registrasi yang kami terima telah melebihi kuota sehingga belum bisa mengakomodir
    registrasi Anda. Mohon maaf atas ketidaknyamanan ini
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
    Semoga kita bisa bertemu di Grab Business Forum selanjutnya atau di acara-acara Grab lainnya.
</p>

<p style="
font-weight: 400;
;
font-size: 13px;
">
    Terima kasih.
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
