<x-home-master>
    @push('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    @endpush
    @section('content')
    <div class="hero-wrapper">
        <img class="hero-img" src="{{ asset('assets/img/hero-section.png') }}" />
        <img class="hero-left-decor" src="{{ asset('assets/img/aksen_kiri.png') }}">
        <img class="hero-right-decor" src="{{ asset('assets/img/aksen_kanan.png') }}">
        <a href="https://grb.to/GBF_EF" target="_blank">
            <div class="hero-button">Registration for Executive Forum</div>
        </a>
    </div>
    <div class="conference-wrapper">
        <div class="conference-left">
            <div class="section-title">CONFERENCE DETAIL</div>
            <div class="conference-text1">
                Discover the
                conference agenda
                and speakers
            </div>

            <div class="conference-text2">Click <a class="conference-span" href="{{route('detail')}}">here</a> to access
                the complete agenda
                and speakers for Grab Business Forum
                2023</div>
            <div class="conference-button1" onclick="openAgenda()">Agenda</div>
            <div class="conference-button2" onclick="openSpeaker()">Speakers</div>
        </div>

        <div class="conference-right">
            <div class="AS-wrapper collapse show " id="collapseAgenda">
                <div class="AS-header">
                    <div class="AS-header-title">Agenda</div>
                    <div class="AS-header-date">Thursday, 16 March 2023</div>
                </div>
                <div class="divider"></div>
                <div class="AS-content">
                    <div class="AS-content-wrapper">
                        <div class="AS-content-time">08:00-12:00 WIB</div>
                        <div class="AS-content-sub-title">Executive Forum & Corporate Awarding</div>
                        <div class="AS-content-location"> <img
                                src="{{ asset('assets/img/ic_icon_location.png') }}">Grand
                            Ballroom, Kempinski Hotel Jakarta</div>

                        <div class="AS-content-schedule">
                            <div class="schedule-title">Opening Remarks by Ibu Neneng Goenadi, Country Managing Director
                                of Grab Indonesia</div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">08:35 -
                                08:45 WIB</div>
                        </div>
                        <div class="AS-content-schedule">
                            <div class="schedule-title">
                                Keynote Speech #1 | Indonesia Economy Outlook 2023 by Bapak Suahasil Nazara, Vice
                                Minister of Finance, Republic of Indonesia
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                08:45 - 09:05 WIB
                            </div>
                        </div>
                        <div class="AS-content-schedule">
                            <div class="schedule-title">
                                Keynote Speech #2 | Digital Economy Innovation and Sustainability in 2023 by Bapak M.
                                Chatib Basri, Indonesia Senior Economist
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                09:05 - 09:35 WIB
                            </div>
                        </div>
                        <div class="AS-content-schedule">
                            <div class="schedule-title">
                                Keynote Speech #3 | Marketing 5.0: Technology for Humanity by Bapak Iwan Setiawan, Chief
                                Executive Officer, Marketeers
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                09:35 - 10:05 WIB
                            </div>
                        </div>
                        <div class="AS-content-schedule">
                            <div class="schedule-title">
                                Digital Forward by Bapak Roy Nugroho, Director of GrabForBusiness, Grab Indonesia
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                10:05 - 10:20 WIB
                            </div>
                        </div>
                        <div class="AS-content-schedule">
                            <div class="schedule-title">
                                Panel Discussion: Digital Acceleration for Business Resilience and Sustainability
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                10:20 - 11:20 WIB
                            </div>
                            <div class="schedule-panelist">
                                <img src="{{ asset('assets/img/ic_group.png') }}">
                                <div>
                                    <div>Panelist:</div>
                                    <div>• Ibu Neneng Goenadi, Country Managing Director Grab Indonesia</div>
                                    <div>• Bapak Roy Nugroho, Director of GrabForBusiness, Grab Indonesia</div>
                                    <div>• Bapak Yusuf Didi Setiarto, Director of Legal and Human Resources, PT PLN (Persero)</div>
                                    <div>• Ibu Rian Eriana Kaslan, Senior Executive Vice President of Digital Business,
                                        PT Bank Negara Indonesia (Persero)
                                    </div>
                                    <div>• Bapak Rivanda Idiyanto, President Director, PT Sanghiang Perkasa (KALBE
                                        Nutritionals)</div>
                                </div>
                            </div>
                            <div class="schedule-panelist">
                                {{-- <img class="schedule-panelist2-img" src="{{ asset('assets/img/ic_person.png') }}">
                                --}}
                                <div style="margin-left: 38px">
                                    <div>Moderator:</div>
                                    <div>• Amelia Yachya, Independent Journalist</div>
                                </div>
                            </div>
                        </div>
                        <div class="AS-content-schedule">
                            <div class="schedule-title">
                                Corporate Awarding
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                11:20 - 11:50 WIB
                            </div>
                        </div>
                        <div class="AS-content-schedule">
                            <div class="schedule-title">
                                Door Prize Announcement
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                11:50 - 11:55 WIB
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>

                    <div class="AS-content-wrapper">
                        <div class="AS-content-time">13:00-17:00 WIB</div>
                        <div class="AS-content-sub-title">Business Talk #1
                            Accelerate Business Growth: Driving Efficiencies and Control in
                            Uncertainty Era
                        </div>
                        <div class="AS-content-location"> <img src="{{ asset('assets/img/ic_icon_location.png') }}">
                            Room 1</div>
                        <div class="AS-content-schedule">
                            <div class="schedule-title">Optimizing Efficiency to Reach Financial Stability
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                13:00 to 14:00 WIB
                            </div>
                            <div class="schedule-amount"> <img src="{{ asset('assets/img/ic_person.png') }}">
                                100 Seats
                            </div>
                        </div>

                        <div class="AS-content-schedule">
                            <div class="schedule-title">Adapt to Digital Culture and Achieving Better Business Outcomes
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                14:30 - 15:30 WIB
                            </div>
                            <div class="schedule-amount"> <img src="{{ asset('assets/img/ic_person.png') }}">
                                100 Seats
                            </div>
                        </div>

                        <div class="AS-content-schedule">
                            <div class="schedule-title">Balancing Control and Productivity for Sustainable Business
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                16:00 to 17:00 WIB
                            </div>
                            <div class="schedule-amount"> <img src="{{ asset('assets/img/ic_person.png') }}">
                                100 Seats
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>

                    <div class="AS-content-wrapper">
                        <div class="AS-content-time">13.00-17.00 WIB</div>
                        <div class="AS-content-sub-title">Business Talk #2
                            Winning the Market: Better Customer Acquisition and
                            Retention in The Uncertainties Market
                        </div>
                        <div class="AS-content-location"> <img src="{{ asset('assets/img/ic_icon_location.png') }}">
                            Room 2</div>
                        <div class="AS-content-schedule">
                            <div class="schedule-title">Accelerate Customer Acquisition & Conversion in Digital World
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                13:00 to 14:00 WIB
                            </div>
                            <div class="schedule-amount"> <img src="{{ asset('assets/img/ic_person.png') }}">
                                100 Seats
                            </div>
                        </div>

                        <div class="AS-content-schedule">
                            <div class="schedule-title">Expanding Customer Reach for Better Engagement and Retention
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                14:30 - 15:30 WIB
                            </div>
                            <div class="schedule-amount"> <img src="{{ asset('assets/img/ic_person.png') }}">
                                100 Seats
                            </div>
                        </div>

                        <div class="AS-content-schedule">
                            <div class="schedule-title">Tailored Solutions for Better Customer Experience</div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                16:00 to 17:00 WIB
                            </div>
                            <div class="schedule-amount"> <img src="{{ asset('assets/img/ic_person.png') }}">
                                100 Seats
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>

                    <div class="AS-content-wrapper">
                        <div class="AS-content-time">13.00-17.00 WIB</div>
                        <div class="AS-content-sub-title">Business Talk #3
                            Connecting Ecosystem: Empowering Collaboration through
                            Technology Integration
                        </div>
                        <div class="AS-content-location"> <img src="{{ asset('assets/img/ic_icon_location.png') }}">
                            Room 3</div>
                        <div class="AS-content-schedule">
                            <div class="schedule-title">Empowering Government and SOE Marketplace through Public-Private
                                Partnership</div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                13:00 to 14:00 WIB
                            </div>
                            <div class="schedule-amount"> <img src="{{ asset('assets/img/ic_person.png') }}">
                                100 Seats
                            </div>
                        </div>

                        <div class="AS-content-schedule">
                            <div class="schedule-title">Fintech Adoption to Serve Ever-growing Customer Need
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                14:30 - 15:30 WIB
                            </div>
                            <div class="schedule-amount"> <img src="{{ asset('assets/img/ic_person.png') }}">
                                100 Seats
                            </div>
                        </div>

                        <div class="AS-content-schedule">
                            <div class="schedule-title">Unlocking Innovations with Advanced Map Platform
                            </div>
                            <div class="schedule-time"> <img src="{{ asset('assets/img/ic_time_jam.png') }}">
                                16:00 to 17:00 WIB
                            </div>
                            <div class="schedule-amount"> <img src="{{ asset('assets/img/ic_person.png') }}">
                                100 Seats
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>

                    <div class="AS-content-wrapper">
                        <div class="AS-content-time">17:30 - 18:45 WIB</div>
                        <div class="AS-content-sub-title">Entertainment:
                            Entertainment session, door prizes announcement, and special performance by HIVI!
                        </div>

                        <div class="AS-content-schedule">

                        </div>


                    </div>
                    <div class="divider"></div>

                </div>
            </div>

            <div class="AS-wrapper collapse" id="collapseSpeaker">
                <div class="AS-header">
                    <div class="AS-header-title">Speaker</div>
                    <div class="AS-header-date">Thursday, 16 March 2023</div>
                </div>
                <div class="AS-content">
                    <div class="speaker-content-wrapper">
                        <div class="speaker-row">
                            <div class="speaker-section">Opening Remark</div>
                            <div class="speaker-card">
                                <div class="speaker-box">
                                    <img class="speaker-img"
                                        src="{{ asset('assets/img/speaker/01 Neneng Gunadi.png') }}" />
                                    <div class="speaker-name">Neneng Goenadi</div>
                                    <div class="speaker-title">
                                        <div>
                                            <div>Country Managing Director</div>
                                            <div>Grab Indonesia</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="speaker-row">
                                <div class="speaker-section">Keynote Speech</div>
                                <div class="speaker-card">
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Suahasil-Nazara.png') }}" />
                                        <div class="speaker-name">Suahasil Nazara</div>
                                        <div class="speaker-title">
                                            <div>Vice Minister of Finance</div>
                                            <div>Republic of Indonesia</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/03 Chatib Basri.png') }}" />
                                        <div class="speaker-name">M. Chatib Basri</div>
                                        <div class="speaker-title">
                                            <div>Indonesia Senior Economist</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Iwan-Setiawan.png') }}" />
                                        <div class="speaker-name">Iwan Setiawan</div>
                                        <div class="speaker-title">
                                            <div>Chief Executive Officer</div>
                                            <div>Marketeers</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="speaker-row">
                                <div class="speaker-section">Digital Forward</div>
                                <div class="speaker-card">
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/05 Roy Nugroho.png') }}" />
                                        <div class="speaker-name">Roy Nugroho</div>
                                        <div class="speaker-title">
                                            <div>Director of</div>
                                            <div>GrabForBusiness,</div>
                                            <div>Grab Indonesia</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="speaker-row">
                                <div class="speaker-section">Panel Discussion: Digital Acceleration for Business
                                    Resilience
                                    and Sustainability</div>
                                <div class="speaker-card">
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/09-Yusuf-Didi-S.png') }}" />
                                        <div class="speaker-name">Yusuf Didi Setiarto</div>
                                        <div class="speaker-title">
                                            <div>Director of Legal and Human Resources</div>
                                            <div>PT PLN (Persero)</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Rian-Eriana-Kaslan.png') }}" />
                                        <div class="speaker-name">Rian Eriana Kaslan</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Senior Executive Vice President of Digital Business</div>
                                                <div>PT Bank Negara Indonesia (Persero)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Irvanda-Idiyanto.png') }}" />
                                        <div class="speaker-name">Rivanda Idiyanto</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>President Director</div>
                                                <div>PT Sanghiang Perkasa (KALBE Nutritionals)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line-break"></div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/01 Neneng Gunadi.png') }}" />
                                        <div class="speaker-name">Neneng Goenadi</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Country Managing Director</div>
                                                <div>Grab Indonesia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/05 Roy Nugroho.png') }}" />
                                        <div class="speaker-name">Roy Nugroho</div>
                                        <div class="speaker-title">
                                            <div>Director of</div>
                                            <div>GrabForBusiness,</div>
                                            <div>Grab Indonesia</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Business Talk#1 --}}
                            <div class="speaker-row">
                                <div class="speaker-section">
                                    <div>Business Talk #1</div>
                                    <div>Accelerate Business Growth:</div>
                                    <div>Driving Efficiencies and control in Uncertainty Era</div>
                                </div>

                                <div class="speaker-section-2">
                                    Optimizing Efficiency to Reach Financial Stability
                                </div>
                                <div class="speaker-card">
                                    <div class="speaker-box">
                                        <div class="speaker-moderator">Moderator</div>
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Dion-Soetadi.png') }}" />
                                        <div class="speaker-name">Dion Soetadi</div>
                                        <div class="speaker-title">
                                            <div>Chief Financial Officer</div>
                                            <div>Grab Indonesia</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Herry-Hykmanto.png') }}" />
                                        <div class="speaker-name">Herry Hykmanto</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Director of Syariah & Operation</div>
                                                <div>PT Bank Danamon Indonesia Tbk</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Adrian-Dimitri.png') }}" />
                                        <div class="speaker-name">Adrian Dimitri</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Partner</div>
                                                <div>Boston Consulting Group</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-row">
                                <div class="speaker-section-2">
                                    Adapt to Digital Culture and Achieving Better Business Outcomes
                                </div>

                                <div class="speaker-card">
                                    <div class="speaker-box">
                                        <div class="speaker-moderator">Moderator</div>
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/31 Astri-Yunfia.png') }}" />
                                        <div class="speaker-name">Astri Yunfia</div>
                                        <div class="speaker-title">
                                            <div>Director of 4-Wheels and</div>
                                            <div>Corporate Strategy</div>
                                            <div>Grab Indonesia</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Yessie-D.-Yosetya.png') }}" />
                                        <div class="speaker-name">Yessie D. Yosetya</div>
                                        <div class="speaker-title">
                                            <div>Director & Chief Digital Transformation and Enterprise Business Officer
                                            </div>
                                            <div>PT. XL Axiata Tbk</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Sugiyanto-Wibawa.png') }}" />
                                        <div class="speaker-name">Sugiyanto Wibawa</div>
                                        <div class="speaker-title">
                                            <div>Director of Business Development</div>
                                            <div>Kawan Lama Retail</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-row">
                                <div class="speaker-section-2">
                                    Balancing Control and Productivity for Sustainable Business
                                </div>

                                <div class="speaker-card">
                                    <div class="speaker-box">
                                        <div class="speaker-moderator">Moderator</div>
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Radhi-Juniantino.png') }}" />
                                        <div class="speaker-name">Radhi Juniantino</div>
                                        <div class="speaker-title">
                                            <div>Director of Business Improvement & Risk Management</div>
                                            <div>Grab Indonesia</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Adi-Pratikto.png') }}" />
                                        <div class="speaker-name">Adi Pratikto</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Human Capital Leader and Partner (Foreign Investment Advisory)
                                                </div>
                                                <div>PwC Indonesia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Ari-Rahmat-Indra-Cahyadi.png') }}" />
                                        <div class="speaker-name">Ari Rahmat Indra Cahyadi</div>
                                        <div class="speaker-title">
                                            <div>Chief Executive officer</div>
                                            <div>PLN Icon Plus</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Business Talk#2 --}}
                            <div class="speaker-row">
                                <div class="speaker-section">
                                    <div>Business Talk #2</div>
                                    <div>Winning the Market: Better Customer Acquisition</div>
                                    <div>and Retention in The Uncertainties Market</div>
                                </div>

                                <div class="speaker-section-2">
                                    Accelerate Customer Acquisition & Conversion in Digital World
                                </div>
                                <div class="speaker-card">
                                    <div class="speaker-box">
                                        <div class="speaker-moderator">Moderator</div>
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Rivana-Mezaya.png') }}" />
                                        <div class="speaker-name">Rivana Mezaya</div>
                                        <div class="speaker-title">
                                            <div>Director of Digital and Sustainability</div>
                                            <div>Grab Indonesia</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Grace-Situmeang.png') }}" />
                                        <div class="speaker-name">Grace Situmeang</div>
                                        <div class="speaker-title">
                                            <div>Division Head Card Business</div>
                                            <div>PT Bank Negara
                                                Indonesia (Persero)</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Vivi-Nidia-Kurniawati.png') }}" />
                                        <div class="speaker-name">Vivi Nidia Kurniawati</div>
                                        <div class="speaker-title">
                                            <div>Director of Sales and Operations, Healthcare
                                                Indonesia
                                            </div>
                                            <div>Procter & Gamble</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="speaker-row">
                                <div class="speaker-section-2">
                                    Expanding Customer Reach for Better Engagement and Retention
                                </div>

                                <div class="speaker-card">
                                    <div class="speaker-box">
                                        <div class="speaker-moderator">Moderator</div>
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Rizkie-Maulana-Putra.png') }}" />
                                        <div class="speaker-name">Rizkie Maulana Putra</div>
                                        <div class="speaker-title">
                                            <div>Director of Commercial</div>
                                            <div>Grab Indonesia</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/17 Ivan Oh.png') }}" />
                                        <div class="speaker-name">Ivan Oh</div>
                                        <div class="speaker-title">
                                            <div>Sales Director</div>
                                            <div>Mondelez International</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Dewi-Andjarsari.png') }}" />
                                        <div class="speaker-name">Dewi Andjarsari</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Senior Vice President</div>
                                                <div>PT Bank Rakyat Indonesia (Persero)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Adi-Hardiana-Samsudin.png') }}" />
                                        <div class="speaker-name">Adi Hardiana Samsudin</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Head of Client Partner</div>
                                                <div>GrabAds Indonesia</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-row">
                                <div class="speaker-section-2">
                                    Tailored Solutions for Better Customer Experience
                                </div>

                                <div class="speaker-card">
                                    <div class="speaker-box">
                                        <div class="speaker-moderator">Moderator</div>
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Tyas-Widyastuti.png') }}" />
                                        <div class="speaker-name">Tyas Widyastuti</div>
                                        <div class="speaker-title">
                                            <div>Director of 2-wheels & Logistics</div>
                                            <div>Grab Indonesia</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Kiki-Randall.png') }}" />
                                        <div class="speaker-name">Kiki Randall</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Country CEO</div>
                                                <div>Sodexo Benefits and Rewards Services Indonesia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/19 Lisa Widodo.png') }}" />
                                        <div class="speaker-name">Lisa Widodo</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Chief Operating Officer</div>
                                                <div>Blibli</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Business Talk #3 --}}
                            <div class="speaker-row">
                                <div class="speaker-section">
                                    <div>Business Talk #3</div>
                                    <div>Connecting Ecosystem: Empowering Collaboration</div>
                                    <div>through Technology Integration</div>
                                </div>

                                <div class="speaker-section-2">
                                    Empowering Government and SOE Marketplace through Public-Private Partnership
                                </div>
                                <div class="speaker-card">
                                    <div class="speaker-box">
                                        <div class="speaker-moderator">Moderator</div>
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/22 Uun Ainurofiq.png') }}" />
                                        <div class="speaker-name">Uun Ainurrofiq</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Director of Government Affairs & Strategic Collaborations</div>
                                                <div>Grab Indonesia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/23 Hendrar Penki.png') }}" />
                                        <div class="speaker-name">Hendrar Prihadi</div>
                                        <div class="speaker-title">
                                            <div>Chairman of National Public Procurement Agency</div>
                                            <div>(LKPP)</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/24 Muhamad Fajrin.png') }}" />
                                        <div class="speaker-name">Muhamad Fajrin Rasyid</div>
                                        <div class="speaker-title">
                                            <div>Director of Digital Business</div>
                                            <div>Telkom Indonesia</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-row">
                                <div class="speaker-section-2">
                                    Fintech Adoption to Serve Ever-growing Customer Need
                                </div>

                                <div class="speaker-card">
                                    <div class="speaker-box">
                                        <div class="speaker-moderator">Moderator</div>
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/33 Edi-Martono.png') }}" />
                                        <div class="speaker-name">Eddie Martono</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Chief Operating Officer</div>
                                                <div>OVO</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Rima-Tanago.png') }}" />
                                        <div class="speaker-name">Rima Tanago</div>
                                        <div class="speaker-title">
                                            <div>Director</div>
                                            <div>PT. SRC Indonesia Sembilan</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Harsono-Budi-Santoso.png') }}" />
                                        <div class="speaker-name">Harsono Budi Santoso</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Director of Business Planning & Development</div>
                                                <div>PT Pertamina Patra Niaga</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-row">
                                <div class="speaker-section-2">
                                    Unlocking Innovations with Advanced Map Platform
                                </div>

                                <div class="speaker-card">
                                    <div class="speaker-box">
                                        <div class="speaker-moderator">Moderator</div>
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Hanief-Meinanda.png') }}" />
                                        <div class="speaker-name">Hanief Meinanda</div>
                                        <div class="speaker-title">
                                            <div>
                                                <div>Director Territory Strategy and CX ID</div>
                                                <div>Grab Indonesia</div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Sriram-Iyer.png') }}" />
                                        <div class="speaker-name">Sriram Iyer</div>
                                        <div class="speaker-title">
                                            <div>Head GrabMaps Regional</div>
                                            <div>Grab</div>
                                        </div>
                                    </div> --}}
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/26 Ariek Wisnu.png') }}" />
                                        <div class="speaker-name">Ariek Wisnu</div>
                                        <div class="speaker-title">
                                            <div>Senior Map Ops Manager</div>
                                            <div>Grab Indonesia</div>
                                        </div>
                                    </div>
                                    <div class="speaker-box">
                                        <img class="speaker-img"
                                            src="{{ asset('assets/img/speaker/Mega-Tarigan.png') }}" />
                                        <div class="speaker-name">Mega Indahwati Tarigan</div>
                                        <div class="speaker-title">
                                            <div>President Director</div>
                                            <div>PT JakLingko Indonesia</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="disclaimer-text">*Waiting for Confirmation</div> --}}
                            </div>



                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div id="venue" class="event-wrapper">
        <div class="event-left">
            <div class="section-title">EVENT VENUE</div>
            <div class="conference-text1">
                Grand Ballroom
                Kempinski Hotel Jakarta
            </div>

            <div class="conference-text2">Hotel Indonesia Kempinski Jakarta has become a historic landmark, a national
                pride. Right in front of the hotel stands the “Welcome Statue”, intended to welcome the guests who
                visited Jakarta on the occasion of the Fourth Asian Games in 1962.
            </div>
            <div class="event-text3">
                You can reach the grand ballroom by entering through the mall's entrance
            </div>
        </div>

        <div class="event-right">
            <div class="event-img-wrapper">
                <img class="event-img1" src="{{ asset('assets/img/event2.jpg') }}" />
                <div class="event-img-footer">
                    {{-- <img class="event-img2" src="{{ asset('assets/img/event2.jpg') }}" /> --}}

                    <img class="event-img2" src="{{ asset('assets/img/event3.png') }}" />
                    <a href='https://goo.gl/maps/VaKNZjuDVyP7n3kLA' target="_blank">
                        <img style="width:100%" class="event-img2" src="{{ asset('assets/img/event4.png') }}" />
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="forum-wrapper">
        <div class="forum-title">Grab Business Forum Milestone</div>
        <div id="carouselForum" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselForum" data-slide-to="0" class="active"></li>
                {{-- <li data-target="#carouselForum" data-slide-to="1"></li> --}}
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <iframe class="d-block w-100" src="https://www.youtube.com/embed/YhuK5yIMad4"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>

                    {{-- <img class="d-block w-100" src="{{ asset('assets/img/event2.png') }}" alt="First slide"> --}}
                </div>
                {{-- <div class="carousel-item">
                    <iframe class="d-block w-100" src="https://www.youtube.com/embed/YhuK5yIMad4"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div> --}}
            </div>
            {{-- <a class="carousel-control-prev" href="#carouselForum" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselForum" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> --}}
        </div>
        <div class="forum-footer">Grab Business Forum 2022</div>
    </div>

    <div id="faq" class="FAQ-wrapper" style="display:none">
        <div class="FAQ-left">
            <div class="FAQ-title">Frequently Asked Questions</div>
            <img class="FAQ-left-img" src="{{ asset('assets/img/ic_tanya.png') }}">
        </div>
        <div class="FAQ-right">
            <div class="FAQ-card">
                <div class="FAQ-card-header" data-toggle="collapse" data-target="#question1" aria-expanded="false"
                    aria-controls="question1">
                    <div>
                        Lorem Ipsum Dolor sit Amet ?
                    </div>
                    <div class="question-expand-symbol">+</div>
                </div>
                <div class="FAQ-card-content collapse" id="question1">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
            <div class="FAQ-card">
                <div class="FAQ-card-header" data-toggle="collapse" data-target="#question2" aria-expanded="false"
                    aria-controls="question2">
                    <div>
                        Lorem Ipsum Dolor sit Amet ?
                    </div>
                    <div class="question-expand-symbol">+</div>
                </div>
                <div class="FAQ-card-content collapse" id="question2">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
            <div class="FAQ-card">
                <div class="FAQ-card-header" data-toggle="collapse" data-target="#question3" aria-expanded="false"
                    aria-controls="question3">
                    <div>
                        Lorem Ipsum Dolor sit Amet ?
                    </div>
                    <div class="question-expand-symbol">+</div>
                </div>
                <div class="FAQ-card-content collapse" id="question3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
            <div class="FAQ-card">
                <div class="FAQ-card-header" data-toggle="collapse" data-target="#question4" aria-expanded="false"
                    aria-controls="question4">
                    <div>
                        Lorem Ipsum Dolor sit Amet ?
                    </div>
                    <div class="question-expand-symbol">+</div>
                </div>
                <div class="FAQ-card-content collapse" id="question4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
        </div>


    </div>

    <div class="business-wrapper">
        <div class="business-title">Business Talk</div>
        <div class="business-content">
            <img class="business-card" src="{{ asset('assets/img/Landing Page_Tumbnail BT 1.png') }}" />
            <img class="business-card" src="{{ asset('assets/img/Landing Page_Tumbnail BT 2.png') }}" />
            <img class="business-card" src="{{ asset('assets/img/Landing Page_Tumbnail BT 3.png') }}" />

            {{-- <div class="business-card">
                <div class="business-text1">Business Talk #1</div>
                <div class="business-text2">Accelerate Business Growth:</div>
                <div class="business-text3">Driving Efficiencies and Control in Uncertainty Era</div>
            </div>
            <div class="business-card">
                <div class="business-text1">Business Talk #2</div>
                <div class="business-text2">Winning The Market:</div>
                <div class="business-text3">Better Customer Acquisition and Retention in The Uncertainties Market</div>
            </div>
            <div class="business-card">
                <div class="business-text1">Business Talk #3</div>
                <div class="business-text2">Connecting Ecosystem:</div>
                <div class="business-text3">Empowering Collaboration Through Technology Integration</div>
            </div> --}}
        </div>
        <a class="business-button-wrapper" href="{{route('business-talk')}}">
            <div class="business-button">Learn More</div>
        </a>
    </div>

    <div id="virtual" class="virtual-wrapper">
        <div class="virtual-left">
            <div class="virtual-title">Virtual Photobooth</div>
            <div class="virtual-text1">
                CREATE YOUR CUSTOM PHOTO
                OR SOCIAL MEDIA POST!
            </div>
            <a class="business-button-wrapper" target="_blank"
                href="https://awwnderful.myboothpic.co/virtual/capture/1KEWJ">
                <div class="virtual-button">Create Virtual Photobooth</div>
            </a>
        </div>
        <div class="virtual-right">
            <img class="virtual-img" src="{{ asset('assets/img/Photobooth Frame.png') }}" />
        </div>

    </div>

    @endsection
    @push('js')
    <script>
        function openAgenda() {
            $('#collapseSpeaker').collapse('hide')
        }

        function openSpeaker() {
            $('#collapseAgenda').collapse('hide')
        }

        $('#collapseAgenda').on('hidden.bs.collapse', function () {
            $('#collapseSpeaker').collapse('show')
        })
        $('#collapseSpeaker').on('hidden.bs.collapse', function () {
            $('#collapseAgenda').collapse('show')
        })

        var symbols = document.getElementsByClassName('question-expand-symbol');
        var headers = document.getElementsByClassName('FAQ-card-header');
        for (let i = 0; i < headers.length; i++) {
            $(`#question${i+1}`).on('show.bs.collapse', function () {
                symbols[i].firstChild.data = "-"
                for (let j = 0; j < headers.length; j++) {
                    if (i !== j) {
                        $(`#question${j+1}`).collapse('hide')
                    }
                }
            })

            $(`#question${i+1}`).on('hide.bs.collapse', function () {
                symbols[i].firstChild.data = "+"
            })
        }

        // var faq = document.getElementsByClassName('FAQ-card-content')

    </script>
    @endpush

</x-home-master>
