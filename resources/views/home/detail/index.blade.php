<x-home-master>
    @push('css')
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
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

    <div class="detail-wrapper">
        <div class="detail-content">
            <div class="executive-wrapper">
                <div class="title">Executive Forum | 08:00 - 12:00 WIB</div>
                <div class="sub-title">Keynote Speech & Panel Discussion</div>
                <div class="title-content">Presenting business leaders to government officials, this time The Executive
                    Forum raised the main theme of Digital Forward: Bracing for Market Uncertainties</div>
                <div class="speaker-text">Speakers</div>
                <div class="executive-image">
                    <div class="speaker-box">
                        <img class="speaker-img"
                            src="{{ asset('assets/img/speaker-detail/Suahasil-Nazara_line.png') }}" />
                        <div class="speaker-name">Suahasil Nazara</div>
                        <div class="speaker-title">
                            <div>Vice Minister of Finance</div>
                            <div>Republic of Indonesia</div>
                        </div>
                    </div>
                    <div class="speaker-box">
                        <img class="speaker-img" src="{{ asset('assets/img/speaker-detail/Chatib Basri.png') }}" />
                        <div class="speaker-name">M. Chatib Basri</div>
                        <div class="speaker-title">
                            <div>Indonesia Senior Economist</div>
                        </div>
                    </div>
                    <div class="speaker-box">
                        <img class="speaker-img"
                            src="{{ asset('assets/img/speaker-detail/Iwan-Setiawan_line.png') }}" />
                        <div class="speaker-name">Iwan Setiawan</div>
                        <div class="speaker-title">
                            <div>Chief Executive Officer</div>
                            <div>Marketeers</div>
                        </div>
                    </div>
                    <div class="speaker-box">
                        <img class="speaker-img" src="{{ asset('assets/img/speaker-detail/Neneng Goenadi.png') }}" />
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
                            src="{{ asset('assets/img/speaker-detail/Yusuf Didi Setiarto.png') }}" />
                        <div class="speaker-name">Yusuf Didi Setiarto</div>
                        <div class="speaker-title">
                            <div>Director of Legal and Human Resources</div>
                            <div>PT PLN (Persero)</div>
                        </div>
                    </div>
                    <div class="speaker-box">
                        <img class="speaker-img"
                            src="{{ asset('assets/img/speaker-detail/Rian-Eriana-Kaslan_line.png') }}" />
                        <div class="speaker-name">Rian Eriana Kaslan</div>
                        <div class="speaker-title">
                            <div>
                                <div>Senior Executive Vice President of Digital Business</div>
                                <div>PT Bank Negara Indonesia (Persero)</div>
                            </div>
                        </div>
                    </div>
                    <div class="speaker-box">
                        <img class="speaker-img" src="{{ asset('assets/img/speaker-detail/Rivanda Idiyanto.png') }}" />
                        <div class="speaker-name">Rivanda Idiyanto</div>
                        <div class="speaker-title">
                            <div>
                                <div>President Director</div>
                                <div>PT Sanghiang Perkasa (KALBE Nutritionals)</div>
                            </div>
                        </div>
                    </div>
                    <div class="speaker-box">
                        <img class="speaker-img" src="{{ asset('assets/img/speaker-detail/Roy Nugroho.png') }}" />
                        <div class="speaker-name">Roy Nugroho</div>
                        <div class="speaker-title">
                            <div>Director of</div>
                            <div>GrabForBusiness,</div>
                            <div>Grab Indonesia</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="agenda-wrapper">
                <div class="agenda-title">Executive Forum | Full Agenda:</div>
                <div class="schedule-wrapper">
                    <div class="divider"></div>
                    <div class="schedule-content">
                        <div class="time">08:30 WIB</div>
                        <div class="content-detail">
                            <div class="content-title">Opening by the MC</div>
                        </div>
                    </div>
                    <div class="schedule-content">
                        <div class="time">08:35 WIB</div>
                        <div class="content-detail">
                            <div class="content-title">Opening Remarks</div>
                            <div class="content-speaker-name">• Neneng Goenadi</div>
                            <div class="content-speaker-title">Country Managing Director of Grab
                                Indonesia
                            </div>
                        </div>
                    </div>

                    <div class="schedule-content">
                        <div class="time">08:45 WIB</div>
                        <div class="content-detail">
                            <div class="content-title">Keynote Speech</div>
                            <div class="content-speaker-name">• Suahasil Nazara</div>
                            <div class="content-speaker-title">Vice Minister of Finance, Republic of Indonesia</div>
                            <div class="content-speaker-name">• M. Chatib Basri</div>
                            <div class="content-speaker-title">Indonesia Senior Economist</div>
                            <div class="content-speaker-name">• Iwan Setiawan</div>
                            <div class="content-speaker-title">Chief Executive Officer, Marketeers</div>
                        </div>
                    </div>

                    <div class="schedule-content">
                        <div class="time">10:05 WIB</div>
                        <div class="content-detail">
                            <div class="content-title">Digital Forward</div>
                            <div class="content-speaker-name">• Roy Nugroho</div>
                            <div class="content-speaker-title">
                                <div>Director of</div>
                                <div>GrabForBusiness,</div>
                                <div>Grab Indonesia</div>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-content">
                        <div class="time">10:20 WIB</div>
                        <div class="content-detail">
                            <div class="content-title">Panel Discussion: Digital Acceleration for Business Resilience
                                and Sustainability</div>
                            <div class="content-speaker-name">• Neneng Goenadi</div>
                            <div class="content-speaker-title">Country Managing Director of Grab Indonesia </div>
                            <div class="content-speaker-name">• Roy Nugroho</div>
                            <div class="content-speaker-title">
                                <div>Director of</div>
                                <div>GrabForBusiness,</div>
                                <div>Grab Indonesia</div>
                            </div>
                            <div class="content-speaker-name">• Yusuf Didi Setiarto</div>
                            <div class="content-speaker-title">Director of Legal and Human Resources, PT PLN (Persero)</div>
                            <div class="content-speaker-name">• Rian Eriana Kaslan</div>
                            <div class="content-speaker-title">Senior Executive Vice President of Digital Business, PT
                                Bank Negara Indonesia (Persero)
                            </div>
                            <div class="content-speaker-name">• Rivanda Idiyanto</div>
                            <div class="content-speaker-title">President Director, PT Sanghiang Perkasa (KALBE
                                Nutritionals)
                            </div>
                        </div>
                    </div>
                    <div class="schedule-content">
                        <div class="time"></div>
                        <div class="content-detail">
                            <div class="content-speaker-name" style="color:white">Moderator</div>
                            <div class="content-speaker-name">• Amelia Yachya</div>
                            <div class="content-speaker-title">Independent Journalist</div>
                        </div>
                    </div>
                    <div class="schedule-content">
                        <div class="time">11:20 WIB</div>
                        <div class="content-detail">
                            <div class="content-title">Corporate Awarding
                            </div>
                        </div>
                    </div>
                    <div class="schedule-content">
                        <div class="time">11:50 WIB</div>
                        <div class="content-detail">
                            <div class="content-title">Door Prize Announcement
                            </div>
                        </div>
                    </div>
                    {{-- <div class="schedule-content">
                        <div class="time"></div>
                        <div class="content-detail">
                            <div class="agenda-note">*Waiting for confirmation</div>
                        </div>
                    </div> --}}

                </div>
            </div>
            {{-- bt1 --}}
            <div class="business-talk-wrapper">
                <div class="business-title">Business Talk #1 | 13:00 - 17:00 WIB</div>
                <div class="business-subtitle">Accelerate Business Growth:
                    Driving Efficiencies and Control in Uncertainty Era
                </div>
                <div class="business-card">
                    <div class="business-card-title">Optimizing Efficiency to Reach Financial Stability</div>
                    <div class="business-card-speaker">
                        <div class="card-left-content">
                            <img src="{{ asset('assets/img/session_1.png') }}" />
                        </div>
                        <div class="card-right-content">
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Dion Soetadi.png') }}" />
                                <div class="speaker-name">Dion Soetadi</div>
                                <div class="speaker-title">
                                    <div>Chief Financial Officer</div>
                                    <div>Grab Indonesia</div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Herry-Hykmanto_line.png') }}" />
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
                                    src="{{ asset('assets/img/speaker-detail/Adrian Dimitri.png') }}" />
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
                </div>
                <div class="business-card">
                    <div class="business-card-title">Adapt to Digital Culture and Achieving Better Business Outcomes
                    </div>
                    <div class="business-card-speaker">
                        <div class="card-left-content">
                            <img src="{{ asset('assets/img/session_2.png') }}" />
                        </div>
                        <div class="card-right-content">
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Astri Yunfia.png') }}" />
                                <div class="speaker-name">Astri Yunfia</div>
                                <div class="speaker-title">
                                    <div>Director of 4-Wheels and</div>
                                    <div>Corporate Strategy</div>
                                    <div>Grab Indonesia</div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Yessie-D.-Yosetya_line.png') }}" />
                                <div class="speaker-name">Yessie D. Yosetya</div>
                                <div class="speaker-title">
                                    <div>Director & Chief Digital Transformation and Enterprise Business Officer</div>
                                    <div>PT. XL Axiata Tbk</div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Sugiyanto-Wibawa_line.png') }}" />
                                <div class="speaker-name">Sugiyanto Wibawa</div>
                                <div class="speaker-title">
                                    <div>Director of Business Development</div>
                                    <div>Kawan Lama Retail</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="business-card">
                    <div class="business-card-title">Balancing Control and Productivity for Sustainable Business</div>
                    <div class="business-card-speaker">
                        <div class="card-left-content">
                            <img src="{{ asset('assets/img/session_3.png') }}" />
                        </div>
                        <div class="card-right-content">
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Radhi Juniantino.png') }}" />
                                <div class="speaker-name">Radhi Juniantino</div>
                                <div class="speaker-title">
                                    <div>Director of Business Improvement & Risk Management</div>
                                    <div>Grab Indonesia</div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Adi Pratikto.png') }}" />
                                <div class="speaker-name">Adi Pratikto</div>
                                <div class="speaker-title">
                                    <div>
                                        <div>Human Capital Leader and Partner (Foreign Investment Advisory)</div>
                                        <div>PwC Indonesia</div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Ari-Rahmat-Indra-Cahyadi_line.png') }}" />
                                <div class="speaker-name">Ari Rahmat Indra Cahyadi</div>
                                <div class="speaker-title">
                                    <div>Chief Executive officer</div>
                                    <div>PLN Icon Plus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- bt2 --}}
            <div class="business-talk-wrapper">
                <div class="business-title">Business Talk #2 | 13:00 - 17:00 WIB</div>
                <div class="business-subtitle">Winning the Market:
                    Better Customer Acquisition and Retention in
                    The Uncertainties Market
                </div>
                <div class="business-card">
                    <div class="business-card-title">Accelerate Customer Acquisition & Conversion in Digital World</div>
                    <div class="business-card-speaker">
                        <div class="card-left-content">
                            <img src="{{ asset('assets/img/session_1.png') }}" />
                        </div>
                        <div class="card-right-content">
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Rivana Mezaya.png') }}" />
                                <div class="speaker-name">Rivana Mezaya</div>
                                <div class="speaker-title">
                                    <div>Director of Digital and Sustainability</div>
                                    <div>Grab Indonesia</div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Grace-Situmeang-line.png') }}" />
                                <div class="speaker-name">Grace Situmeang</div>
                                <div class="speaker-title">
                                    <div>
                                        <div>Division Head Card Business</div>
                                        <div>PT Bank Negara Indonesia (Persero)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Vivi-Nidia-Kurniawati-line.png') }}" />
                                <div class="speaker-name">Vivi Nidia Kurniawati</div>
                                <div class="speaker-title">
                                    <div>
                                        <div>Director of Sales and Operations, Healthcare
                                            Indonesia</div>
                                        <div>Procter & Gamble</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="business-card">
                    <div class="business-card-title">Expanding Customer Reach for Better Engagement and Retention </div>
                    <div class="business-card-speaker">
                        <div class="card-left-content">
                            <img src="{{ asset('assets/img/session_2.png') }}" />
                        </div>
                        <div class="card-right-content">
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Rizkie Maulana Putra.png') }}" />
                                <div class="speaker-name">Rizkie Maulana Putra</div>
                                <div class="speaker-title">
                                    <div>Director of Commercial</div>
                                    <div>Grab Indonesia</div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img" src="{{ asset('assets/img/speaker-detail/Ivan Oh.png') }}" />
                                <div class="speaker-name">Ivan Oh</div>
                                <div class="speaker-title">
                                    <div>Sales Director</div>
                                    <div>Mondelez International</div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Dewi-Andjarsari-line.png') }}" />
                                <div class="speaker-name">Dewi Andjarsari</div>
                                <div class="speaker-title">
                                    <div>
                                        <div>Senior Vice President</div>
                                        <div>PT Bank Rakyat Indonesia (Persero)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img" src="{{ asset('assets/img/speaker-detail/Adi-Hardiana-Samsudin_line.png') }}" />
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
                </div>
                <div class="business-card">
                    <div class="business-card-title">Tailored Solutions for Better Customer Experience</div>
                    <div class="business-card-speaker">
                        <div class="card-left-content">
                            <img src="{{ asset('assets/img/session_3.png') }}" />
                        </div>
                        <div class="card-right-content">
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Tyas Widyastuti.png') }}" />
                                <div class="speaker-name">Tyas Widyastuti</div>
                                <div class="speaker-title">
                                    <div>Director of 2-wheels & Logistics</div>
                                    <div>Grab Indonesia</div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Kiki-Randall-1.png') }}" />
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
                                    src="{{ asset('assets/img/speaker-detail/Lisa Widodo.png') }}" />
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
                </div>
            </div>
            {{-- bt3 --}}
            <div class="business-talk-wrapper">
                <div class="business-title">Business Talk #3 | 13:00 - 17:00 WIB</div>
                <div class="business-subtitle">Connecting Ecosystem:
                    Empowering
                    Collaboration through Technology Integration
                </div>
                <div class="business-card">
                    <div class="business-card-title">Empowering Government and SOE Marketplace
                        Through Public-Private Partnership</div>
                    <div class="business-card-speaker">
                        <div class="card-left-content">
                            <img src="{{ asset('assets/img/session_1.png') }}" />
                        </div>
                        <div class="card-right-content">
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Uun Ainur Rofiq.png') }}" />
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
                                    src="{{ asset('assets/img/speaker-detail/Hendrar Prihadi.png') }}" />
                                <div class="speaker-name">Hendrar Prihadi</div>
                                <div class="speaker-title">
                                    <div>Chairman of National Public Procurement Agency</div>
                                    <div>(LKPP)</div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Muhamad Fajrin Rasyid.png') }}" />
                                <div class="speaker-name">Muhamad Fajrin Rasyid</div>
                                <div class="speaker-title">
                                    <div>Director of Digital Business</div>
                                    <div>Telkom Indonesia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="business-card">
                    <div class="business-card-title">Fintech Adoption to Serve Ever-growing Customer Need</div>
                    <div class="business-card-speaker">
                        <div class="card-left-content">
                            <img src="{{ asset('assets/img/session_2.png') }}" />
                        </div>
                        <div class="card-right-content">
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Eddie Martono.png') }}" />
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
                                    src="{{ asset('assets/img/speaker-detail/Rima Tanago.png') }}" />
                                <div class="speaker-name">Rima Tanago</div>
                                <div class="speaker-title">
                                    <div>Director</div>
                                    <div>PT. SRC Indonesia Sembilan</div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Harsono Budi Santoso.png') }}" />
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
                </div>
                <div class="business-card">
                    <div class="business-card-title">Unlocking Innovations with Advanced Map Platform</div>
                    <div class="business-card-speaker">
                        <div class="card-left-content">
                            <img src="{{ asset('assets/img/session_3.png') }}" />
                        </div>
                        <div class="card-right-content">
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Hanief Meinanda.png') }}" />
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
                                    src="{{ asset('assets/img/speaker-detail/Sriram Iyer.png') }}" />
                                <div class="speaker-name">Sriram Iyer</div>
                                <div class="speaker-title">
                                    <div>Head GrabMaps Regional</div>
                                    <div>Grab</div>
                                </div>
                            </div> --}}
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Ariek Wisnu.png') }}" />
                                <div class="speaker-name">Ariek Wisnu</div>
                                <div class="speaker-title">
                                    <div>Senior Map Ops Manager</div>
                                    <div>Grab Indonesia</div>
                                </div>
                            </div>
                            <div class="speaker-box">
                                <img class="speaker-img"
                                    src="{{ asset('assets/img/speaker-detail/Mega-Tarigan_line.png') }}" />
                                <div class="speaker-name">Mega Indahwati Tarigan</div>
                                <div class="speaker-title">
                                    <div>President Director</div>
                                    <div>PT JakLingko Indonesia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="business-card">
                    <div class="card-note1">And other prominent speakers</div>
                    {{-- <div class="card-note2">*Waiting for confirmation</div> --}}
                </div>
                <div class="business-card">
                    <div class="business-card-title">Entertainment | 17:30 - 18:45 WIB</div>
                    <div class="business-card-subtitle">Entertainment session, door prizes announcement, and special
                        performance by</div>
                    <div class="business-card-speaker hivi-wrapper">
                        <div class="card-left-img">
                            <img style="width: 100%" src="{{ asset('assets/img/hivi_logo2x.png') }}" />
                        </div>
                        <div class="card-right-img">
                            <img style="width: 100%" src="{{ asset('assets/img/hivi_image2x.png') }}" />

                        </div>
                    </div>
                </div>
                {{-- <div> --}}
                <img class='desktop' style="width: 100%" src="{{ asset('assets/img/img_logo_group.png') }}" />
                <img class='mobile' style="width: 100%" src="{{ asset('assets/img/img_logo_group_mobile.png') }}" />

                {{-- </div> --}}
            </div>


        </div>
    </div>
    @endsection
    @push('js')
    {{-- <script>
        const agenda = document.getElementById('agenda-button')
        const speaker = document.getElementById('speaker-button')
        agenda.classList.add('selected-button')

        function openAgenda() {
            $('#collapseSpeaker').collapse('hide')
            speaker.classList.remove('selected-button')
            agenda.classList.add('selected-button')

        }

        function openSpeaker() {
            $('#collapseAgenda').collapse('hide')
            agenda.classList.remove('selected-button')
            speaker.classList.add('selected-button')

        }

        $('#collapseAgenda').on('hidden.bs.collapse', function () {
            $('#collapseSpeaker').collapse('show')
        })
        $('#collapseSpeaker').on('hidden.bs.collapse', function () {
            $('#collapseAgenda').collapse('show')
        })

        // var symbols = document.getElementsByClassName('question-expand-symbol');
        // var headers = document.getElementsByClassName('FAQ-card-header');

        // for (let i = 0; i < headers.length; i++) {
        //     $(`#question${i+1}`).on('show.bs.collapse', function () {
        //         symbols[i].firstChild.data = "-"
        //     })

        //     $(`#question${i+1}`).on('hide.bs.collapse', function () {
        //         symbols[i].firstChild.data = "+"
        //     })

        // }

    </script> --}}
    @endpush

</x-home-master>
