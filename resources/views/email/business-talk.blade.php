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
Registrasi Anda Berhasil!
</p>
<p style=" 
font-weight: 400;
font-size: 13px;
">
    Dear  Bapak/Ibu {{$name}},
</p>
<p style=" 
font-weight: 400;
font-size: 13px;
">Terima kasih telah mendaftar acara <b>Grab Business Forum 2023 – Business Talk.</b></p>

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
    Untuk kedatangan di pagi hari (07:00-10:00 WIB), Anda bisa masuk melalui:
</p>


<p style=" 
font-weight: 400;
font-size: 13px;
">
1. Masuk West Mall, Grand Indonesia<br/>
2. Parkir / Drop-off di P9 atau P10 West Mall, Grand Indonesia<br/>
3. Naik lift menuju lantai 11, Kempinski Grand Ballroom
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
Untuk kedatangan diatas pukul 10.00 WIB, Anda bisa masuk melalui:
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
1. Masuk West Mall, Grand Indonesia<br/>
2. Drop-off di Lobby "Amarta" (dekat Starbucks)<br/>
3. Naik menggunakan lift di dekat lobby "Amarta" menuju lantai 11, Kempinski
Grand Ballroom
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
    <b>Grab Business Forum 2023</b> akan dibagi menjadi tiga sesi besar, yakni Executive
    Forum, Business Talk, dan Entertainment Session. Meski mendaftar pada sesi
    Business Talk, Anda juga bisa mengikuti sesi Executive Forum pada pagi hari dan
    Entertainment di sore hari.
</p>

<p style=" 
font-weight: 400;
font-size: 13px;
">
Rundown kegiatan :<br/>

</p>

<ul style="padding-left:0; font-weight:bold; font-style:italic; margin-left:40px">
    <li>08:30 - 12:00 Executive Forum</li>
    <li>13:00 - 17:00 Business Talks</li>
    <li>17:30 - 18:45 Entertainment and Doorprize Session</li>
  </ul>  

<p style=" 
font-weight: 400;
font-size: 13px;
">
    Pada sesi Business Talk, Anda dapat memilih salah satu dari tiga topik yang
    sesuai dengan kebutuhan Anda saat ini bersama para narasumber dari berbagai
    perusahaan terkemuka di Indonesia:
</p>
{{-- <p style=" 
font-weight: 400;
font-size: 13px;
"> --}}
<ol style="padding-left:0; font-weight:bold; font-style:italic; margin-left:40px">
    <li>Accelerating Business Growth: Driving Efficiencies and Control in Uncertainty Era</li>
    <li>Winning the Market: Better Customer Acquisition and Retention in The Uncertainties Market</li>
    <li>Connecting Ecosystem: Empowering Collaboration through Technology Integration.</li>
  </ol>  
{{-- </p> --}}
<p style="
font-weight: 400;
;
font-size: 13px;
">
Dimohon untuk menunjukkan QR Code pada saat registrasi.
</p>

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
Pada sesi Entertainment akan ada pembagian doorprize untuk Bapak/Ibu yang
beruntung, dengan begitu kami harap Anda dapat mengikuti acara hingga akhir.
</p>

<p style="
font-weight: 400;
 !important;
font-size: 13px;
">
    Kunjungi website kami untuk info lebih lanjut: <a href="https://grabbusinessforum.com" target="_blank" style="color:#0000EE;">https://grabbusinessforum.com</a>.
    <br/>
    Sampai berjumpa di <b>Grab Business Forum 2023!</b>

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
    <b>Grab Business Forum 2023 Committee.</b>
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
