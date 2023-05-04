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
 Your Registration Has Been Confirmed!
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
">Terima kasih telah mendaftar acara <b>Grab Business Forum 2023 – Executive Forum.</b></p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
    Melalui email resmi ini, kami ingin menginformasikan bahwa proses registrasi
    Anda telah <b>berhasil.</b>
</p>

<table style=" 
font-weight: 400;
font-size: 13px;
">
    <tr>
        <td colspan="3" style="font-weight:bold">Digital Forward: Bracing for Market Uncertainties</td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td align="left">:</td>
        <td align="left">
            Kamis, 16 Maret 2023
        </td>
    </tr>
    <tr>
        <td>Waktu</td>
        <td align="left">:</td>
        <td align="left">
            08:00 – 18:45 WIB
        </td>
    </tr>
    <tr>
        <td style="width: 20%;">Tempat</td>
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
    Untuk kedatangan, Anda bisa masuk melalui:
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
    1. Kempinski Grand Ballroom Lobby (West Mall, Grand Indonesia)<br/>
    2. Naik menggunakan lift menuju lantai 11, Kempinski Grand Ballroom
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
Temui berbagai pembicara terkemuka dari pemimpin bisnis hingga pejabat
pemerintah untuk berbagi wawasan bisnis yang relevan guna mendorong inovasi
digital dan membantu perusahaan untuk lebih mudah beradaptasi menanggapi
perubahan kondisi pasar dan tantangan bisnis dalam sesi <b><i>Executive Forum.</i></b>
Anda dapat memperoleh pengetahuan lebih lanjut dalam sesi <b><i>Panel Discussion
    “Digital Acceleration for Business Resilience and Sustainability”</i></b>  yang
menampilkan pembicara terkemuka dari perusahaan ternama.
</p>

<p style="
font-weight: 400;
font-size: 13px;
">
Untuk C-Levels/Directors, kami menganjurkan Anda untuk menghadiri acara
<b>Executive Forum</b> dengan Keynote Speech, Panel Discussion, dan Corporate
Awarding <b>(09:00 - 12:00 WIB)</b> sampai di <b>Private Executive Lunch (12.00 -
    13.00 WIB)</b> untuk berjejaring (Networking) dengan para pembicara dan
Audiens/peserta dari jajaran C-Level/Directors perusahaan lainnya.
</p>

<p style="
font-weight: 400;
font-size: 13px;
">
<i>C-Level/Directors</i> juga dipersilakan untuk menghadiri sesi Business Talk (13:00 -
17:00 WIB) dan Entertainment Session (17:30 - 18:45 WIB).
</p>

<p style="
font-weight: 400;
font-size: 13px;
">Dimohon untuk menunjukkan QR Code berikut pada saat registrasi:</p>

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
font-size: 13px;
margin-top:16px;
">
Gunakan kode voucher <b>“GBF23KEMPINSKI”</b> untuk mendapatkan potongan
sebesar Rp10rb untuk keberangkatan ke dan dari Grand Ballroom Kempinski di
tanggal 16 Maret 2023 menggunakan transportasi Grab.
</p>

<p style="
font-weight: 400;
font-size: 13px;
margin-top:16px;
">
Pada akhir sesi Executive Forum akan ada pembagian doorprize untuk Bapak/Ibu
yang beruntung, dengan begitu kami harap Anda dapat mengikuti acara hingga
akhir.
</p>

<p style="
font-weight: 400;
font-size: 13px;
margin-top:16px;
">
Kami berharap dapat bertemu dengan Anda segera di Grab Business Forum
2023!
</p>

<p style="
font-weight: 400;
 !important;
font-size: 13px;
">
    Kunjungi website kami untuk info lebih lanjut:  <a href="https://grabbusinessforum.com" target="_blank" style="color:#0000EE;">https://grabbusinessforum.com</a>.
    <br/>
    Sampai berjumpa di Grab Business Forum 2023!
</p>

<p style="
font-weight: 400;
font-size: 13px;
">
    Terima kasih.
</p>

<p style="
font-weight: 400;
font-size: 13px;
">
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
