<x-home-master>
    @push('css')
    <link rel="stylesheet" href="{{asset('css/business-talk.css')}}">
    @endpush
    @section('content')
    <!-- Modal -->
    <div class="modal fade" id="businessModal" tabindex="-1" role="dialog" aria-labelledby="businessModal"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> --}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="modalSection"></div>
                    <div id="modalMainTitle"></div>
                    <div id="modalSub"></div>
                    <div id="modalLocationWrapper"> <img src="{{ asset('assets/img/ic_icon_location.png') }}">
                        <div id="modalLocation"></div>
                    </div>
                    <div id="modalTimeWrapper"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                        <div id="modalTime"></div>
                    </div>
                    <div id="modalSpeakerWrapper"><img src="{{ asset('assets/img/ic_person.png') }}">
                        <div>Speakers:</div>
                    </div>
                    <div class='modal-speaker-wrapper' id='speakerWrapper'>
                        <div class='modal-speaker'>
                            <img class="speaker-img" />
                            <div class="speaker-name"></div>
                            <div class="speaker-title"></div>
                            <div class="speaker-company"></div>
                        </div>
                        <div class='modal-speaker'>
                            <img class="speaker-img" />
                            <div class="speaker-name"></div>
                            <div class="speaker-title"></div>
                            <div class="speaker-company"></div>

                        </div>
                        <div class='modal-speaker'>
                            <img class="speaker-img" />
                            <div class="speaker-name"></div>
                            <div class="speaker-title"></div>
                            <div class="speaker-company"></div>

                        </div>
                        <div class='modal-speaker'>
                            <img class="speaker-img" />
                            <div class="speaker-name"></div>
                            <div class="speaker-title"></div>
                            <div class="speaker-company"></div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="hero-wrapper">
        <img class="hero-img" src="{{ asset('assets/img/Landing Page_BT.png') }}" />
        <img class="hero-left-decor" src="{{ asset('assets/img/aksen_kiri.png') }}">
        <img class="hero-right-decor" src="{{ asset('assets/img/aksen_kanan.png') }}">
        <a href="https://grb.to/GBF-BT" target="_blank">
            <div class="hero-button">Registration for Business Talk</div>
        </a>
    </div>

    <div class="business-wrapper">
        <div class="card-wrappper bs-talk1">
            <div class="wrapper-title">Business Talk #1</div>
            <div class="wrapper-sub">Accelerate Business Growth:
                Driving Efficiencies and Control in Uncertainty Era</div>
            <div class="business-card-wrapper">
                <div class="business-card">
                    <div class="card-session">Session 1</div>
                    <div class="card-title">
                        <div>Optimizing Efficiency to</div>
                        <div>Reach Financial</div>
                        <div>Stability</div>
                    </div>
                    <div class="card-speaker">
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Dion-Soetadi.png') }}" />
                            <div class="card-speaker-name">Dion Soetadi</div>
                            <div class="card-speaker-title">
                                <div>Chief Financial Officer</div>
                                <div>Grab Indonesia</div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Herry-Hykmanto.png') }}" />
                            <div class="card-speaker-name">Herry Hykmanto</div>
                            <div class="card-speaker-title">
                                <div>
                                    <div>Director of Syariah & Operation</div>
                                    <div>PT Bank Danamon Indonesia Tbk</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Adrian-Dimitri.png') }}" />
                            <div class="card-speaker-name">Adrian Dimitri</div>
                            <div class="card-speaker-title">
                                <div>
                                    <div>Partner</div>
                                    <div>Boston Consulting Group</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="card-button" onclick="openModal(0,0)">Details</div>
                </div>
                <div class="business-card">
                    <div class="card-session">Session 2</div>
                    <div class="card-title">
                        <div>Adapt to Digital Culture</div>
                        <div>and Achieving Better</div>
                        <div>Business Outcomes</div>
                    </div>
                    <div class="card-speaker">
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/31 Astri-Yunfia.png') }}" />
                            <div class="card-speaker-name">Astri Yunfia</div>
                            <div class="card-speaker-title">
                                <div>Director of 4-Wheels and</div>
                                <div>Corporate Strategy</div>
                                <div>Grab Indonesia</div>
                            </div>
                        </div>

                        <div class="card-speaker-box">
                            <img class="card-speaker-img"
                                src="{{ asset('assets/img/speaker/Yessie-D.-Yosetya.png') }}" />
                            <div class="card-speaker-name">Yessie D. Yosetya</div>
                            <div class="card-speaker-title">
                                <div>Director & Chief Digital Transformation and Enterprise Business Officer</div>
                                <div>PT. XL Axiata Tbk</div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Sugiyanto-Wibawa.png') }}" />
                            <div class="card-speaker-name">Sugiyanto Wibawa</div>
                            <div class="card-speaker-title">
                                <div>Director of Business Development</div>
                                <div>Kawan Lama Retail</div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="card-button" onclick="openModal(0,1)">Details</div>
                </div>
                <div class="business-card">
                    <div class="card-session">Session 3</div>
                    <div class="card-title">
                        <div>Balancing Control and</div>
                        <div>Productivity for</div>
                        <div>Sustainable Business</div>
                    </div>
                    <div class="card-speaker">
                        <div class="card-speaker-box">
                            <img class="card-speaker-img"
                                src="{{ asset('assets/img/speaker/Radhi-Juniantino.png') }}" />
                            <div class="card-speaker-name">Radhi Juniantino</div>
                            <div class="card-speaker-title">
                                <div>Director of Business Improvement & Risk Management</div>
                                <div>Grab Indonesia</div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Adi-Pratikto.png') }}" />
                            <div class="card-speaker-name">Adi Pratikto</div>
                            <div class="card-speaker-title">
                                <div>Human Capital Leader and Partner (Foreign Investment Advisory)</div>
                                <div>PwC Indonesia</div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Ari-Rahmat-Indra-Cahyadi.png') }}" />
                            <div class="card-speaker-name">Ari Rahmat Indra Cahyadi</div>
                            <div class="card-speaker-title">
                                <div>Chief Executive officer</div>
                                <div>PLN Icon Plus</div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="card-button" onclick="openModal(0,2)">Details</div>
                </div>
            </div>


        </div>
        <div class="card-wrappper bs-talk2">
            <div class="wrapper-title">Business Talk #2</div>
            <div class="wrapper-sub">Winning the Market:
                Better Customer Acquisition and Retention
                in The Uncertainties Market</div>
            <div class="business-card-wrapper">
                <div class="business-card">
                    <div class="card-session">Session 1</div>
                    <div class="card-title">
                        <div>Accelerate Customer Acquisition &</div>
                        <div>Conversion in Digital World</div>
                    </div>
                    <div class="card-speaker">
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Rivana-Mezaya.png') }}" />
                            <div class="card-speaker-name">Rivana Mezaya</div>
                            <div class="card-speaker-title">
                                <div>Director of Digital and Sustainability</div>
                                <div>Grab Indonesia</div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Grace-Situmeang.png') }}" />
                            <div class="card-speaker-name">Grace Situmeang</div>
                            <div class="card-speaker-title">
                                <div>Division Head Card Business</div>
                                <div>PT Bank Negara
                                    Indonesia (Persero)</div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img"
                                src="{{ asset('assets/img/speaker/Vivi-Nidia-Kurniawati.png') }}" />
                            <div class="card-speaker-name">Vivi Nidia Kurniawati</div>
                            <div class="card-speaker-title">
                                <div>Director of Sales and Operations, Healthcare
                                    Indonesia
                                </div>
                                <div>Procter & Gamble</div>
                            </div>
                        </div>

                    </div>
                    <div class="divider"></div>
                    <div class="card-button" onclick="openModal(1,3)">Details</div>
                </div>
                <div class="business-card">
                    <div class="card-session">Session 2</div>
                    <div class="card-title">
                        <div>Expanding Customer</div>
                        <div>Reach for Better Engagement</div>
                        <div>and Retention</div>
                    </div>
                    <div class="card-speaker">
                        <div class="card-speaker-box">
                            <img class="card-speaker-img"
                                src="{{ asset('assets/img/speaker/Rizkie-Maulana-Putra.png') }}" />
                            <div class="card-speaker-name">Rizkie Maulana Putra</div>
                            <div class="card-speaker-title">
                                <div>Director of Commercial</div>
                                <div>Grab Indonesia</div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/17 Ivan Oh.png') }}" />
                            <div class="card-speaker-name">Ivan Oh</div>
                            <div class="card-speaker-title">
                                <div>Sales Director</div>
                                <div>Mondelez International</div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Dewi-Andjarsari.png') }}" />
                            <div class="card-speaker-name">Dewi Andjarsari</div>
                            <div class="card-speaker-title">
                                <div>
                                    <div>Senior Vice President</div>
                                    <div>PT Bank Rakyat Indonesia (Persero)</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Adi-Hardiana-Samsudin.png') }}" />
                            <div class="card-speaker-name">Adi Hardiana Samsudin</div>
                            <div class="card-speaker-title">
                                <div>
                                    <div>Head of Client Partner</div>
                                    <div>GrabAds Indonesia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="card-button" onclick="openModal(1,4)">Details</div>
                </div>
                <div class="business-card">
                    <div class="card-session">Session 3</div>
                    <div class="card-title">
                        <div>Tailored Solutions for</div>
                        <div>Better Customer</div>
                        <div>Experience</div>
                    </div>
                    <div class="card-speaker">
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Tyas-Widyastuti.png') }}" />
                            <div class="card-speaker-name">Tyas Widyastuti</div>
                            <div class="card-speaker-title">
                                <div>Director of 2-wheels & Logistics</div>
                                <div>Grab Indonesia</div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Kiki-Randall.png') }}" />
                            <div class="card-speaker-name">Kiki Randall</div>
                            <div class="card-speaker-title">
                                <div>
                                    <div>Country CEO</div>
                                    <div>Sodexo Benefits and Rewards Services Indonesia</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/19 Lisa Widodo.png') }}" />
                            <div class="card-speaker-name">Lisa Widodo</div>
                            <div class="card-speaker-title">
                                <div>
                                    <div>Chief Operating Officer</div>
                                    <div>Blibli</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="card-button" onclick="openModal(1,5)">Details</div>
                </div>
            </div>

        </div>
        <div class="card-wrappper bs-talk3">
            <div class="wrapper-title">Business Talk #3</div>
            <div class="wrapper-sub">Connecting Ecosystem: Empowering Collaboration through Technology Integration</div>
            <div class="business-card-wrapper">

                <div class="business-card">
                    <div class="card-session">Session 1</div>
                    <div class="card-title">
                        <div>Empowering Government</div>
                        <div>and SOE Marketplace</div>
                        <div>through Public-Private</div>
                        <div>Partnership</div>
                    </div>
                    <div class="card-speaker">
                        <div class="card-speaker-box">
                            <img class="card-speaker-img"
                                src="{{ asset('assets/img/speaker/22 Uun Ainurofiq.png') }}" />
                            <div class="card-speaker-name">Uun Ainurrofiq</div>
                            <div class="card-speaker-title">
                                <div>Director of Government Affairs & Strategic Collaborations</div>
                                <div>Grab Indonesia</div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img"
                                src="{{ asset('assets/img/speaker/23 Hendrar Penki.png') }}" />
                            <div class="card-speaker-name">Hendrar Prihadi</div>
                            <div class="card-speaker-title">
                                <div>Chairman of National Public Procurement Agency</div>
                                <div>(LKPP)</div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img"
                                src="{{ asset('assets/img/speaker/24 Muhamad Fajrin.png') }}" />
                            <div class="card-speaker-name">Muhamad Fajrin Rasyid</div>
                            <div class="card-speaker-title">
                                <div>Director of Digital Business</div>
                                <div>Telkom Indonesia</div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="card-button" onclick="openModal(2,6)">Details</div>
                </div>
                <div class="business-card">
                    <div class="card-session">Session 2</div>
                    <div class="card-title">
                        <div>Fintech Adoption</div>
                        <div>to Serve Ever-growing Customer Need</div>
                    </div>
                    <div class="card-speaker">
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/33 Edi-Martono.png') }}" />
                            <div class="card-speaker-name">Eddie Martono</div>
                            <div class="card-speaker-title">
                                <div>
                                    <div>Chief Operating Officer</div>
                                    <div>OVO</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Rima-Tanago.png') }}" />
                            <div class="card-speaker-name">Rima Tanago</div>
                            <div class="card-speaker-title">
                                <div>Director</div>
                                <div>PT. SRC Indonesia Sembilan</div>
                            </div>
                        </div>
                        <div class="card-speaker-box">
                            <img class="card-speaker-img"
                                src="{{ asset('assets/img/speaker/Harsono-Budi-Santoso.png') }}" />
                            <div class="card-speaker-name">Harsono Budi Santoso</div>
                            <div class="card-speaker-title">
                                <div>
                                    <div>Director of Business Planning & Development</div>
                                    <div>PT Pertamina Patra Niaga</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="card-button" onclick="openModal(2,7)">Details</div>
                </div>
                <div class="business-card">
                    <div class="card-session">Session 3</div>
                    <div class="card-title">
                        <div>Unlocking Innovations</div>
                        <div>with Advanced Map Platform</div>
                    </div>
                    <div class="card-speaker">
                        <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Hanief-Meinanda.png') }}" />
                            <div class="card-speaker-name">Hanief Meinanda</div>
                            <div class="card-speaker-title">
                                <div>
                                    <div>Director Territory Strategy and CX ID</div>
                                    <div>Grab Indonesia</div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card-speaker-box">
                            <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Sriram-Iyer.png') }}" />
                        <div class="card-speaker-name">Sriram Iyer</div>
                        <div class="card-speaker-title">
                            <div>Head GrabMaps Regional</div>
                            <div>Grab</div>
                        </div>
                    </div> --}}
                    <div class="card-speaker-box">
                        <img class="card-speaker-img" src="{{ asset('assets/img/speaker/26 Ariek Wisnu.png') }}" />
                        <div class="card-speaker-name">Ariek Wisnu</div>
                        <div class="card-speaker-title">
                            <div>Senior Map Ops Manager</div>
                            <div>Grab Indonesia</div>
                        </div>
                    </div>
                    {{-- <div class="divider-speaker"></div> --}}
                    <div class="card-speaker-box">
                        <img class="card-speaker-img" src="{{ asset('assets/img/speaker/Mega-Tarigan.png') }}" />
                        <div class="card-speaker-name">Mega Indahwati Tarigan</div>
                        <div class="card-speaker-title">
                            <div>President Director</div>
                            <div>PT JakLingko Indonesia</div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="card-button" onclick="openModal(2,8)">Details</div>
            </div>
        </div>
    </div>
    </div>
    @endsection

    @push('js')
    <script>
        const contentdata = [{
                title: 'Optimizing Efficiency to Reach Financial Stability',
                location: 'Room 1 - Accelerate Business Growth: Driving efficiencies and control in Uncertainty Era',
                time: 'Thursday, 16 March 2023 | 13:00-14:00 WIB',
                speaker: [{
                        picture: '{{ URL::asset("assets/img/speaker/Dion-Soetadi.png")}}',
                        name: 'Dion Soetadi',
                        title: 'Chief Financial Officer',
                        company: 'Grab Indonesia'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Herry-Hykmanto.png")}}',
                        name: 'Herry Hykmanto',
                        title: 'Director of Syariah & Operation',
                        company: 'PT Bank Danamon Indonesia Tbk'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Adrian-Dimitri.png")}}',
                        name: 'Adrian Dimitri',
                        title: 'Partner',
                        company: 'Boston Consulting Group'
                    },
                ]
            },
            {
                title: 'Adapt to Digital Culture and Achieving Better Business Outcomes',
                location: 'Room 1 - Accelerate Business Growth: Driving efficiencies and control in Uncertainty Era',
                time: 'Thursday, 16 March 2023 | 14:30-15:30 WIB',
                speaker: [{
                        picture: '{{ URL::asset("assets/img/speaker/31 Astri-Yunfia.png")}}',
                        name: 'Astri Yunfia',
                        title: 'Director of 4-Wheels and Corporate Strategy',
                        company: 'Grab Indonesia'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Yessie-D.-Yosetya.png")}}',
                        name: 'Yessie D. Yosetya',
                        title: 'Director & Chief Digital Transformation and Enterprise Business Officer',
                        company: 'PT. XL Axiata Tbk'
                    },
                    {

                        picture: '{{ URL::asset("assets/img/speaker/Sugiyanto-Wibawa.png")}}',
                        name: 'Sugiyanto Wibawa',
                        title: 'Director of Business Development',
                        company: "Kawan Lama Retail"
                    },

                ]
            },
            {
                title: 'Balancing Control and Productivity for Sustainable Business',
                location: 'Room 1 - Accelerate Business Growth: Driving efficiencies and control in Uncertainty Era',
                time: 'Thursday, 16 March 2023 | 16:00-17:00 WIB',
                speaker: [{
                        picture: '{{ URL::asset("assets/img/speaker/Radhi-Juniantino.png")}}',
                        name: 'Radhi Juniantino',
                        title: 'Director of Business Improvement & Risk Management',
                        company: 'Grab Indonesia'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Adi-Pratikto.png")}}',
                        name: 'Adi Pratikto',
                        title: 'Human Capital Leader and Partner (Foreign Investment Advisory)',
                        company: 'PwC Indonesia'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Ari-Rahmat-Indra-Cahyadi.png")}}',
                        name: 'Ari Rahmat Indra Cahyadi',
                        title: 'Chief Executive officer',
                        company: 'PLN Icon Plus'
                    },
                ]
            },

            {
                title: 'Accelerate Customer Acquisition & Conversion in Digital World',
                location: 'Room 2 - Winning the Market: Better Customer Acquisition and Retention in The Uncertainties Market',
                time: 'Thursday, 16 March 2023 | 13:00-14:00 WIB',
                speaker: [{
                        picture: '{{ URL::asset("assets/img/speaker/Rivana-Mezaya.png")}}',
                        name: 'Rivana Mezaya',
                        title: 'Director of Digital and Sustainability',
                        company: 'Grab Indonesia'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Grace-Situmeang.png")}}',
                        name: 'Grace Situmeang',
                        title: 'Division Head Card Business',
                        company: 'PT Bank Negara Indonesia (Persero)'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Vivi-Nidia-Kurniawati.png")}}',
                        name: 'Vivi Nidia Kurniawati',
                        title: 'Director of Sales and Operations, Healthcare Indonesia',
                        company: 'Procter & Gamble'
                    },

                ]
            },
            {
                title: 'Expanding Customer Reach for Better Engagement and Retention',
                location: 'Room 2 - Winning the Market: Better Customer Acquisition and Retention in The Uncertainties Market',
                time: 'Thursday, 16 March 2023 | 14:30-15:30 WIB',
                speaker: [{
                        picture: '{{ URL::asset("assets/img/speaker/Rizkie-Maulana-Putra.png")}}',
                        name: 'Rizkie Maulana Putra',
                        title: 'Director of Commercial',
                        company: 'Grab Indonesia'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/17 Ivan Oh.png")}}',
                        name: 'Ivan Oh',
                        title: 'Sales Director',
                        company: 'Mondelez International'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Dewi-Andjarsari.png")}}',
                        name: 'Dewi Andjarsari',
                        title: 'Senior Vice President',
                        company: 'PT Bank Rakyat Indonesia (Persero)'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Adi-Hardiana-Samsudin.png")}}',
                        name: 'Adi Hardiana Samsudin',
                        title: 'Head of Client Partner',
                        company: 'GrabAds Indonesia'
                    },
                ]
            },
            {
                title: 'Tailored Solutions for Better Customer Experience',
                location: 'Room 2 - Winning the Market: Better Customer Acquisition and Retention in The Uncertainties Market',
                time: 'Thursday, 16 March 2023 | 16:00-17:00 WIB',
                speaker: [{
                        picture: '{{ URL::asset("assets/img/speaker/Tyas-Widyastuti.png")}}',
                        name: 'Tyas Widyastuti',
                        title: 'Director of 2-wheels & Logistics',
                        company: 'Grab Indonesia'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Kiki-Randall.png")}}',
                        name: 'Kiki Randall',
                        title: 'Country CEO',
                        company: 'Sodexo Benefits and Rewards Services Indonesia'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/19 Lisa Widodo.png")}}',
                        name: 'Lisa Widodo',
                        title: 'Chief Operating Officer',
                        company: 'Blibli'
                    },
                ]
            },

            {
                title: 'Empowering Government and SOE Marketplace through Public-Private Partnership',
                location: 'Room 2 - Connecting Ecosystem: Empowering Collaboration through Technology Integration',
                time: 'Thursday, 16 March 2023 | 13:00-14:00 WIB',
                speaker: [{
                        picture: '{{ URL::asset("assets/img/speaker/22 Uun Ainurofiq.png")}}',
                        name: 'Uun Ainurrofiq',
                        title: 'Director of Government Affairs & Strategic Collaborations',
                        company: 'Grab Indonesia'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/23 Hendrar Penki.png")}}',
                        name: 'Hendrar Prihadi',
                        title: 'Chairman of National Public Procurement Agency',
                        company: '(LKPP)'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/24 Muhamad Fajrin.png")}}',
                        name: 'Muhamad Fajrin Rasyid',
                        title: 'Director of Digital Business',
                        company: 'Telkom Indonesia'
                    },
                ]
            },
            {
                title: 'Fintech Adoption to Serve Ever-growing Customer Need',
                location: 'Room 2 - Connecting Ecosystem: Empowering Collaboration through Technology Integration',
                time: 'Thursday, 16 March 2023 | 14:30-15:30 WIB',
                speaker: [{
                        picture: '{{ URL::asset("assets/img/speaker/33 Edi-Martono.png")}}',
                        name: 'Eddie Martono',
                        title: 'Chief Operating Officer',
                        company: 'OVO'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Rima-Tanago.png")}}',
                        name: 'Rima Tanago',
                        title: 'Director',
                        company: 'PT. SRC Indonesia Sembilan'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Harsono-Budi-Santoso.png")}}',
                        name: 'Harsono Budi Santoso',
                        title: 'Director of Business Planning & Development',
                        company: 'PT Pertamina Patra Niaga'
                    },
                ]
            },
            {
                title: 'Unlocking Innovations with Advanced Map Platform',
                location: 'Room 2 - Connecting Ecosystem: Empowering Collaboration through Technology Integration',
                time: 'Thursday, 16 March 2023 | 16:00-17:00 WIB',
                speaker: [{
                        picture: '{{ URL::asset("assets/img/speaker/Hanief-Meinanda.png")}}',
                        name: 'Hanief Meinanda',
                        title: 'Director Territory Strategy and CX ID',
                        company: 'Grab Indonesia'
                    },
                    // {
                    //     picture: '{{ URL::asset("assets/img/speaker/Sriram-Iyer.png")}}',
                    //     name: 'Sriram Iyer',
                    //     title: 'Head GrabMaps Regional',
                    //     company: 'Grab'
                    // },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/26 Ariek Wisnu.png")}}',
                        name: 'Ariek Wisnu',
                        title: 'Senior Map Ops Manager',
                        company: 'Grab Indonesia'
                    },
                    {
                        picture: '{{ URL::asset("assets/img/speaker/Mega-Tarigan.png")}}',
                        name: 'Mega Indahwati Tarigan',
                        title: 'President Director',
                        company: 'PT JakLingko Indonesia'
                    },
                ]
            },
        ]
        const sectionData = [{
                mainTitle: 'Business Talk #1',
                subTitle: 'Accelerate Business Growth: Driving efficiencies and control in Uncertainty Era'
            },
            {
                mainTitle: 'Business Talk #2',
                subTitle: 'Winning the Market: Better Customer Acquisition and Retention in The Uncertainties Market'
            },
            {
                mainTitle: 'Business Talk #3',
                subTitle: 'Connecting Ecosystem: Empowering Collaboration through Technology Integration'
            },
        ]
        const modalSection = document.getElementById("modalSection")
        const modalMainTitle = document.getElementById("modalMainTitle")
        const modalSub = document.getElementById("modalSub")
        const modalLocation = document.getElementById("modalLocation")
        const modalTime = document.getElementById("modalTime")

        const modalSpeaker = document.getElementsByClassName('modal-speaker')
        const speakerImg = document.getElementsByClassName("speaker-img")
        const speakerName = document.getElementsByClassName("speaker-name")
        const speakerTitle = document.getElementsByClassName("speaker-title")
        const speakerCompany = document.getElementsByClassName("speaker-company")

        const speakerWrapper = document.getElementById('speakerWrapper')

        function openModal(sectionNumber, contentNumber) {
            const {
                title,
                location,
                time,
                speaker,
                company
            } = contentdata[contentNumber]
            const {
                mainTitle,
                subTitle
            } = sectionData[sectionNumber]

            modalSection.textContent = mainTitle
            modalMainTitle.textContent = subTitle
            modalSub.textContent = title
            modalLocation.textContent = location
            modalTime.textContent = time

            const speakerLength = speaker.length

            speakerWrapper.innerHTML = '';

            for (let i = 0; i < speakerLength; i++) {

                const divElement = document.createElement("div");
                divElement.classList.add("modal-speaker")
                const imageElement = document.createElement("img");
                imageElement.classList.add("speaker-img")

                const nameElement = document.createElement("div");
                nameElement.classList.add("speaker-name")

                const titleElement = document.createElement("div");
                titleElement.classList.add("speaker-title")
                const companyElement = document.createElement("div");
                companyElement.classList.add("speaker-company")

                imageElement.src = speaker[i].picture
                nameElement.textContent = speaker[i].name
                titleElement.textContent = speaker[i].title
                companyElement.textContent = speaker[i].company

                divElement.appendChild(imageElement)
                divElement.appendChild(nameElement)
                divElement.appendChild(titleElement)
                divElement.appendChild(companyElement)

                speakerWrapper.appendChild(divElement);

            }



            $('#businessModal').modal('show')
        }

    </script>
    @endpush

</x-home-master>
