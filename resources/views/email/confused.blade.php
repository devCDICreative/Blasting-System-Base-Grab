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
Your Registration is Successful!
</p>
<p style=" 
font-weight: 400;
font-size: 13px;
">
    Dear Bapak/Ibu {{$name}},
</p>
<p style=" 
font-weight: 400;
font-size: 13px;
">
    Terima kasih telah mendaftar acara <b>Grab Business Forum 2023</b>.
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
Melalui email resmi ini, kami ingin menginformasikan bahwa proses registrasi Anda telah <b>berhasil</b> dan <b>dapat menghadiri</b> acara Grab Business Forum 2023. 
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
text-decoration: underline;
">
Mohon abaikan jika Anda menerima email yang menginformasikan bahwa proses reistrasi Anda belum berhasil. 
</p>


<p style=" 
font-weight: 400;
font-size: 13px;
">
    Dimohon untuk menunjukkan <b>QR Code yang kami kirimkan di email kedua</b> pada saat registrasi.
</p>

<p style="
font-weight: 400;
font-size: 13px;
margin-top:16px;
">
Silahkan gunakan kode voucher <b>“GBF23KEMPINSKI”</b> untuk mendapatkan potongan
sebesar Rp10rb untuk keberangkatan ke dan dari Grand Ballroom Kempinski di
tanggal 16 Maret 2023 menggunakan transportasi Grab.
</p>

<p style="
font-weight: 400;
 !important;
font-size: 13px;
">
    Sekali lagi mohon maaf atas ketidaknyamanannya. Kunjungi website kami untuk info lebih lanjut: <a href="https://grabbusinessforum.com" target="_blank" style="color:#0000EE;">https://grabbusinessforum.com</a>.
    <br/>
    Sampai berjumpa di <b>Grab Business Forum 2023!</b>

</p>

<p style="
font-weight: 400;
;
font-size: 13px;
">
    Terima kasih.
</p>

<p style="
font-weight: 400;
;
font-size: 13px;
">
    Regards,<br/>
    Grab Business Forum 2023 Committee.
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
