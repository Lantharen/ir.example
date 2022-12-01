@extends('layouts.base')

@section('page-title', 'Quote :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107627 page-type-qmod---quote pg-stock-data-quote ir has-sub-nav fl-builder-breakpoint-large', \Termwind\style('padding-top: 125px;')
)

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Quote</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                        </div>
                    </div>
                </div>
            </header>            <nav id="sectionNav" class="sub-navigation-wrapper" aria-label="Investors Section">
                <div class="sub-navigation affixed affix-top">
                    <div class="container">
                        <a class="visible-xs visible-sm mobile-sub-nav-trigger collapsed" data-toggle="collapse" data-target="#sub-navigation">
                            <div class="trigger-container">
                                <div class="meat"></div>
                                <div class="meat"></div>
                                <div class="meat"></div>
                            </div>
                            Investors            </a>
                        <div class="collapse sb-nav clearfix" id="sub-navigation">
                            <h3>Investors</h3>
                            <ul>
                                <li class="">
                                    <a href="/" target="_self">Overview</a>
                                </li>
                                <li class="has-children dropdown">
                                    <a href="/news-events" target="_self">News &amp; Events</a>
                                    <ul class="dropdown-menu">
                                        <li class="">
                                            <a href="/news-events" target="_self">Overview</a>
                                        </li>
                                        <li class="">
                                            <a href="/news-events/press-releases" target="_self">Press Releases</a>
                                        </li>
                                        <li class="">
                                            <a href="/news-events/in-the-news" target="_self">In The News</a>
                                        </li>
                                        <li class="">
                                            <a href="/news-events/ir-calendar" target="_self">IR Calendar</a>
                                        </li>
                                        <li class="">
                                            <a href="/news-events/email-alerts" target="_self">Email Alerts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children dropdown">
                                    <a href="/company-information" target="_self">Company Info</a>
                                    <ul class="dropdown-menu">
                                        <li class="">
                                            <a href="/company-information" target="_self">Overview</a>
                                        </li>
                                        <li class="">
                                            <a href="/company-information/presentations" target="_self">Presentations</a>
                                        </li>
                                        <li class="">
                                            <a href="/company-information/management-team" target="_self">Management Team</a>
                                        </li>
                                        <li class="">
                                            <a href="/company-information/contacts" target="_self">Contacts</a>
                                        </li>
                                        <li class="">
                                            <a href="/company-information/faq" target="_self">FAQ</a>
                                        </li>
                                        <li class="">
                                            <a href="/company-information/analyst-coverage" target="_self">Analyst Coverage</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children dropdown">
                                    <a href="/financial-information" target="_self">Financial Info</a>
                                    <ul class="dropdown-menu">
                                        <li class="">
                                            <a href="/financial-information" target="_self">Overview</a>
                                        </li>
                                        <li class="">
                                            <a href="/financial-information/financial-results" target="_self">Financial Results</a>
                                        </li>
                                        <li class="">
                                            <a href="/financial-information/income-statement" target="_self">Income Statement</a>
                                        </li>
                                        <li class="">
                                            <a href="/financial-information/balance-sheet" target="_self">Balance Sheet</a>
                                        </li>
                                        <li class="">
                                            <a href="/financial-information/cash-flow" target="_self">Cash Flow</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children active dropdown">
                                    <a href="/stock-data" target="_self">Stock Data</a>
                                    <ul class="dropdown-menu">
                                        <li class="active active-landing">
                                            <a href="/stock-data/quote" target="_self">Quote</a>
                                        </li>
                                        <li class="">
                                            <a href="/stock-data/charts" target="_self">Charts</a>
                                        </li>
                                        <li class="">
                                            <a href="/stock-data/historical-data" target="_self">Historical Data</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children dropdown">
                                    <a href="/sec-filings" target="_self">SEC Filings</a>
                                    <ul class="dropdown-menu">
                                        <li class="">
                                            <a href="/sec-filings" target="_self">Overview</a>
                                        </li>
                                        <li class="">
                                            <a href="/sec-filings/all-sec-filings" target="_self">All SEC Filings</a>
                                        </li>
                                        <li class="">
                                            <a href="/sec-filings/annual-reports" target="_self">Annual Reports</a>
                                        </li>
                                        <li class="">
                                            <a href="/sec-filings/quarterly-reports" target="_self">Quarterly Reports</a>
                                        </li>
                                        <li class="">
                                            <a href="/sec-filings/section-16-filings" target="_self">Section 16 Filings</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children dropdown">
                                    <a href="/corporate-governance" target="_self">Governance</a>
                                    <ul class="dropdown-menu">
                                        <li class="">
                                            <a href="/corporate-governance" target="_self">Overview</a>
                                        </li>
                                        <li class="">
                                            <a href="/corporate-governance/board-of-directors" target="_self">Board of Directors</a>
                                        </li>
                                        <li class="">
                                            <a href="/corporate-governance/board-committees" target="_self">Board Committees</a>
                                        </li>
                                        <li class="">
                                            <a href="/corporate-governance/governance-documents" target="_self">Governance Documents</a>
                                        </li>
                                        <li class="">
                                            <a href="/corporate-governance/board-diversity-matrix" target="_self">Board Diversity Matrix</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="/contact" target="_self">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-md-offset-2 clearfix">
                        <aside id="tertiaryNav">
                            <nav id="tertiary-navigation" class="visible-sm visible-xs">
                                <ul>
                                    <li class="sidebar-title">
                                        <h3>Stock Data</h3>
                                    </li>
                                    <li class="active active-landing">
                                        <a href="/stock-data/quote" target="_self">Quote</a>

                                    </li>
                                    <li class="">
                                        <a href="/stock-data/charts" target="_self">Charts</a>

                                    </li>
                                    <li class="">
                                        <a href="/stock-data/historical-data" target="_self">Historical Data</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <div class="detailed-quote" data-name="qmod">
                                <div data-qmod-tool="interactivechart" data-qmod-params="{&quot;lang&quot;:&quot;en&quot;,&quot;symbol&quot;:&quot;MARA&quot;,&quot;volumeEnabled&quot;:false,&quot;chartType&quot;:0,&quot;chartTypeEnabled&quot;:false,&quot;marketSessionEnabled&quot;:false,&quot;compareEnabled&quot;:false,&quot;compareOptionsEnabled&quot;:false,&quot;eventsEnabled&quot;:false,&quot;dateRange&quot;:1,&quot;marketSession&quot;:1,&quot;compareOption&quot;:0,&quot;dateRangeList&quot;:[{&quot;visible&quot;:true},{&quot;visible&quot;:true},{&quot;visible&quot;:true},{&quot;visible&quot;:true},{&quot;visible&quot;:true},{&quot;visible&quot;:true},{&quot;visible&quot;:true},{&quot;visible&quot;:false},{&quot;visible&quot;:true},{&quot;visible&quot;:false},{&quot;visible&quot;:false}]}" class="qtool" data-template-i-d="1669900516287"><div class="qmod-ui-tool qmod-simplechart"><div class="qmod-header"><h2>Stock Quote</h2><h3 class="company">Marathon Digital Holdings Inc.</h3><p class="symbol">NASDAQ Capital Market: MARA</p><div class="clear"></div></div><!--end quote-header--><div class="qmod-main-chart" data-highcharts-chart="0" role="region" aria-label="Frequency:10M. Use up and down arrows to navigate."><div role="region" aria-label="Chart screen reader information." style="position: absolute; left: -9999px; top: auto; width: 1px; height: 1px; overflow: hidden;"><div tabindex="0">Use regions/landmarks to skip ahead to chart.</div><h3>Summary.</h3><div>Frequency:10M</div><h3>Long description.</h3><div>No description available.</div><h3>Structure.</h3><div>Chart type: Empty chart.</div><div>The chart has 1 X axis displaying values.</div><div>The chart has 2 Y axes displaying values and values.</div></div><h3 style="position: absolute; left: -9999px; top: auto; width: 1px; height: 1px; overflow: hidden;">Chart graphic.</h3><div id="highcharts-k138son-0" class="highcharts-container " style="position: relative; overflow: hidden; width: 720px; height: 220px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="720" height="220"><title id="highcharts-title-0">Frequency:10M</title><desc>Interactive stock chart provided by quotemedia</desc><defs><clipPath id="highcharts-k138son-1"><rect x="0" y="0" width="642" height="158" fill="none"></rect></clipPath><clipPath id="highcharts-k138son-3"><rect x="0" y="0" width="642" height="158" fill="none"></rect></clipPath></defs><rect fill="none" class="highcharts-background" x="0" y="0" width="720" height="220" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="10" y="20" width="642" height="158"></rect><rect fill="none" class="highcharts-plot-border" x="10" y="20" width="642" height="158"></rect><g class="highcharts-grid highcharts-xaxis-grid "><path fill="none" class="highcharts-grid-line" d="M 168.5 20 L 168.5 178 M 168.5 154 L 168.5 178" opacity="1"></path><path fill="none" class="highcharts-grid-line" d="M 329.5 20 L 329.5 178 M 329.5 154 L 329.5 178" opacity="1"></path><path fill="none" class="highcharts-grid-line" d="M 491.5 20 L 491.5 178 M 491.5 154 L 491.5 178" opacity="1"></path></g><g class="highcharts-grid highcharts-yaxis-grid "><path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 123.5 L 652 123.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" opacity="1" class="highcharts-grid-line" d="M 10 55.5 L 652 55.5"></path></g><g class="highcharts-axis highcharts-xaxis "><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 168.5 178 L 168.5 188" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 329.5 178 L 329.5 188" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 491.5 178 L 491.5 188" opacity="1"></path><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" d="M 10 178.5 L 652 178.5"></path></g><g class="highcharts-axis highcharts-yaxis "><text x="692" text-anchor="middle" transform="translate(0,0) rotate(90 692 99)" class="highcharts-axis-title" style="color:null;font-size:null;" y="99">Price</text><path fill="none" class="highcharts-axis-line" d="M 682 20 L 682 178"></path></g><g class="highcharts-series-group"><g class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-undefined " transform="translate(10,20) scale(1 1)" clip-path="url(#highcharts-k138son-3)"><path fill="none" d="M 2.0188679245283 26.402895326810324 L 6.0566037734533 20.746406909855494 L 10.094339622714 7.31911158999668 L 14.132075471639 12.673554508958773 L 18.169811320899 7.181818181818215 L 22.207547169824 23.27260562034016 L 26.245283018749 26.402895326810324 L 30.283018868009 19.538224917884662 L 34.320754716934 15.419422672529038 L 38.358490566195 30.521697572165976 L 42.39622641512 48.36984063537295 L 46.433962264045 51.11570879894322 L 50.471698113305 51.11570879894322 L 54.50943396223 51.555047705114674 L 58.547169811155 51.11570879894322 L 62.584905660416 44.251038390017555 L 66.622641509341 48.36984063537295 L 70.660377358601 44.251038390017555 L 74.698113207526 46.99690655358782 L 78.735849056451 44.251038390017555 L 82.773584905711 42.87810430823242 L 86.811320754636 37.38636798109165 L 90.849056603897 40.13223614466192 L 94.886792452822 51.11570879894322 L 98.924528301747 51.11570879894322 L 102.96226415101 48.36984063537295 L 106.99999999993 53.86157696251374 L 111.03773584919 40.13223614466192 L 115.07547169812 40.13223614466192 L 119.11320754704 40.13223614466192 L 123.1509433963 40.159694826297795 L 127.18867924523 42.90556298986806 L 131.22641509449 42.87810430823242 L 135.26415094341 42.90556298986806 L 139.30188679234 48.36984063537295 L 143.3396226416 42.87810430823242 L 147.37735849052 34.97000399714979 L 151.41509433978 40.13223614466192 L 155.45283018871 34.64049981752137 L 159.49056603763 67.5909177803653 L 163.52830188689 86.78453624372177 L 167.56603773582 86.15298656610061 L 171.60377358474 119.76241288820134 L 175.641509434 136.23762186962344 L 179.67924528293 122.50828105177186 L 183.71698113219 107.40600615213489 L 187.75471698112 115.64361064284594 L 191.79245283004 124.81481030917092 L 195.8301886793 130.74588554248265 L 199.86792452823 129.37295146069752 L 203.90566037749 126.62708329712726 L 207.94339622641 128.0000173789124 L 211.98113207534 114.27067656106081 L 216.0188679246 106.03307207034976 L 220.05660377352 104.66013798856463 L 224.09433962278 92.3037312524982 L 228.13207547171 89.11852418275673 L 232.16981132063 78.57439043464662 L 236.20754716989 84.06612676178715 L 240.24528301882 74.45558818929098 L 244.28301886808 78.32726229992514 L 248.320754717 82.69319268000201 L 252.35849056593 86.81199492535767 L 256.39622641519 89.55786308892793 L 260.43396226411 101.91426982499436 L 264.47169811337 106.06053075198565 L 268.5094339623 116.30261900210274 L 272.54716981122 122.50828105177186 L 276.58490566048 121.13534696998673 L 280.62264150941 114.27067656106081 L 284.66037735833 112.89774247927568 L 288.69811320759 118.38947880641621 L 292.73584905652 112.89774247927568 L 296.77358490578 111.52480839749055 L 300.8113207547 118.38947880641621 L 304.84905660363 111.52480839749055 L 308.88679245289 115.64361064284594 L 312.92452830181 103.2872039067795 L 316.96226415107 108.77894023392003 L 321 124.92464503571372 L 325.03773584893 85.43906084357228 L 329.07547169819 115.64361064284594 L 333.11320754711 107.40600615213489 L 337.15094339637 112.89774247927568 L 341.1886792453 92.3037312524982 L 345.22641509422 93.67666533428333 L 349.26415094348 75.82852227107635 L 353.30188679241 104.66013798856463 L 357.33962264167 134.8646877878383 L 361.37735849059 135.93557637163067 L 365.41509433952 130.74588554248265 L 369.45283018878 119.76241288820134 L 373.4905660377 122.50828105177186 L 377.52830188663 111.05801080968345 L 381.56603773589 114.27067656106081 L 385.60377358481 118.38947880641621 L 389.64150943407 122.50828105177186 L 393.679245283 117.78538781043093 L 397.71698113192 116.98908604299544 L 401.75471698118 122.50828105177186 L 405.79245283011 124.430388766271 L 409.83018867937 126.62708329712726 L 413.86792452829 136.23762186962344 L 417.90566037722 134.8646877878383 L 421.94339622648 130.74588554248265 L 425.9811320754 130.74588554248265 L 430.01886792466 123.5242522722927 L 434.05660377359 125.83078152969176 L 438.09433962251 128.0000173789124 L 442.13207547177 138.9834900331937 L 446.1698113207 137.61055595140857 L 450.20754716996 137.61055595140857 L 454.24528301888 130.27908795467582 L 458.28301886781 129.37295146069752 L 462.32075471707 127.67051319928399 L 466.358490566 130.74588554248265 L 470.39622641526 126.62708329712726 L 474.43396226418 132.11881962426804 L 478.47169811311 128.0000173789124 L 482.50943396237 114.27067656106081 L 486.54716981129 132.11881962426804 L 490.58490566022 133.6290471142316 L 494.62264150948 128.0000173789124 L 498.6603773584 136.23762186962344 L 502.69811320766 122.50828105177186 L 506.73584905659 134.8646877878383 L 510.77358490551 143.1022922785491 L 514.81132075477 133.49175370605317 L 518.8490566037 123.88121513355699 L 522.88679245296 115.64361064284594 L 526.92452830188 119.76241288820134 L 530.96226415081 111.52480839749055 L 535.00000000007 117.0714620879026 L 539.03773584899 132.11881962426804 L 543.07547169825 140.35642411497884 L 547.11320754718 150.81818181818178 L 551.1509433961 148.59402860568989 L 555.18867924536 145.8481604421196 L 559.22641509429 138.13227090248694 L 563.26415094355 138.62652717192967 L 567.30188679247 129.37295146069752 L 571.3396226414 147.22109452390475 L 575.37735849066 149.71983455275375 L 579.41509433958 113.66658556507528 L 583.45283018884 117.01654472463107 L 587.49056603777 88.98123077457804 L 591.52830188669 62.09918145322453 L 595.56603773596 12.673554508958773 L 599.60377358488 31.89463165395111 L 603.64150943381 53.86157696251374 L 607.67924528307 59.35331328965427 L 611.71698113199 58.7217636120331 L 615.75471698125 51.390295615300346 L 619.79245283018 36.01343389930652 L 623.8301886791 23.65702716324006 L 627.86792452836 31.89463165395111 L 631.90566037729 26.402895326810324 L 635.94339622655 14.046488590743905 L 639.98113207547 12.673554508958773" class="highcharts-graph" stroke="#0a64a6" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" role="region" tabindex="-1" aria-label="MARA, series 1 of 2. line with 159 data points. line series for MARA. Y axis, Price"></path><path fill="none" d="M -7.981132075471701 26.402895326810324 L 2.0188679245283 26.402895326810324 L 6.0566037734533 20.746406909855494 L 10.094339622714 7.31911158999668 L 14.132075471639 12.673554508958773 L 18.169811320899 7.181818181818215 L 22.207547169824 23.27260562034016 L 26.245283018749 26.402895326810324 L 30.283018868009 19.538224917884662 L 34.320754716934 15.419422672529038 L 38.358490566195 30.521697572165976 L 42.39622641512 48.36984063537295 L 46.433962264045 51.11570879894322 L 50.471698113305 51.11570879894322 L 54.50943396223 51.555047705114674 L 58.547169811155 51.11570879894322 L 62.584905660416 44.251038390017555 L 66.622641509341 48.36984063537295 L 70.660377358601 44.251038390017555 L 74.698113207526 46.99690655358782 L 78.735849056451 44.251038390017555 L 82.773584905711 42.87810430823242 L 86.811320754636 37.38636798109165 L 90.849056603897 40.13223614466192 L 94.886792452822 51.11570879894322 L 98.924528301747 51.11570879894322 L 102.96226415101 48.36984063537295 L 106.99999999993 53.86157696251374 L 111.03773584919 40.13223614466192 L 115.07547169812 40.13223614466192 L 119.11320754704 40.13223614466192 L 123.1509433963 40.159694826297795 L 127.18867924523 42.90556298986806 L 131.22641509449 42.87810430823242 L 135.26415094341 42.90556298986806 L 139.30188679234 48.36984063537295 L 143.3396226416 42.87810430823242 L 147.37735849052 34.97000399714979 L 151.41509433978 40.13223614466192 L 155.45283018871 34.64049981752137 L 159.49056603763 67.5909177803653 L 163.52830188689 86.78453624372177 L 167.56603773582 86.15298656610061 L 171.60377358474 119.76241288820134 L 175.641509434 136.23762186962344 L 179.67924528293 122.50828105177186 L 183.71698113219 107.40600615213489 L 187.75471698112 115.64361064284594 L 191.79245283004 124.81481030917092 L 195.8301886793 130.74588554248265 L 199.86792452823 129.37295146069752 L 203.90566037749 126.62708329712726 L 207.94339622641 128.0000173789124 L 211.98113207534 114.27067656106081 L 216.0188679246 106.03307207034976 L 220.05660377352 104.66013798856463 L 224.09433962278 92.3037312524982 L 228.13207547171 89.11852418275673 L 232.16981132063 78.57439043464662 L 236.20754716989 84.06612676178715 L 240.24528301882 74.45558818929098 L 244.28301886808 78.32726229992514 L 248.320754717 82.69319268000201 L 252.35849056593 86.81199492535767 L 256.39622641519 89.55786308892793 L 260.43396226411 101.91426982499436 L 264.47169811337 106.06053075198565 L 268.5094339623 116.30261900210274 L 272.54716981122 122.50828105177186 L 276.58490566048 121.13534696998673 L 280.62264150941 114.27067656106081 L 284.66037735833 112.89774247927568 L 288.69811320759 118.38947880641621 L 292.73584905652 112.89774247927568 L 296.77358490578 111.52480839749055 L 300.8113207547 118.38947880641621 L 304.84905660363 111.52480839749055 L 308.88679245289 115.64361064284594 L 312.92452830181 103.2872039067795 L 316.96226415107 108.77894023392003 L 321 124.92464503571372 L 325.03773584893 85.43906084357228 L 329.07547169819 115.64361064284594 L 333.11320754711 107.40600615213489 L 337.15094339637 112.89774247927568 L 341.1886792453 92.3037312524982 L 345.22641509422 93.67666533428333 L 349.26415094348 75.82852227107635 L 353.30188679241 104.66013798856463 L 357.33962264167 134.8646877878383 L 361.37735849059 135.93557637163067 L 365.41509433952 130.74588554248265 L 369.45283018878 119.76241288820134 L 373.4905660377 122.50828105177186 L 377.52830188663 111.05801080968345 L 381.56603773589 114.27067656106081 L 385.60377358481 118.38947880641621 L 389.64150943407 122.50828105177186 L 393.679245283 117.78538781043093 L 397.71698113192 116.98908604299544 L 401.75471698118 122.50828105177186 L 405.79245283011 124.430388766271 L 409.83018867937 126.62708329712726 L 413.86792452829 136.23762186962344 L 417.90566037722 134.8646877878383 L 421.94339622648 130.74588554248265 L 425.9811320754 130.74588554248265 L 430.01886792466 123.5242522722927 L 434.05660377359 125.83078152969176 L 438.09433962251 128.0000173789124 L 442.13207547177 138.9834900331937 L 446.1698113207 137.61055595140857 L 450.20754716996 137.61055595140857 L 454.24528301888 130.27908795467582 L 458.28301886781 129.37295146069752 L 462.32075471707 127.67051319928399 L 466.358490566 130.74588554248265 L 470.39622641526 126.62708329712726 L 474.43396226418 132.11881962426804 L 478.47169811311 128.0000173789124 L 482.50943396237 114.27067656106081 L 486.54716981129 132.11881962426804 L 490.58490566022 133.6290471142316 L 494.62264150948 128.0000173789124 L 498.6603773584 136.23762186962344 L 502.69811320766 122.50828105177186 L 506.73584905659 134.8646877878383 L 510.77358490551 143.1022922785491 L 514.81132075477 133.49175370605317 L 518.8490566037 123.88121513355699 L 522.88679245296 115.64361064284594 L 526.92452830188 119.76241288820134 L 530.96226415081 111.52480839749055 L 535.00000000007 117.0714620879026 L 539.03773584899 132.11881962426804 L 543.07547169825 140.35642411497884 L 547.11320754718 150.81818181818178 L 551.1509433961 148.59402860568989 L 555.18867924536 145.8481604421196 L 559.22641509429 138.13227090248694 L 563.26415094355 138.62652717192967 L 567.30188679247 129.37295146069752 L 571.3396226414 147.22109452390475 L 575.37735849066 149.71983455275375 L 579.41509433958 113.66658556507528 L 583.45283018884 117.01654472463107 L 587.49056603777 88.98123077457804 L 591.52830188669 62.09918145322453 L 595.56603773596 12.673554508958773 L 599.60377358488 31.89463165395111 L 603.64150943381 53.86157696251374 L 607.67924528307 59.35331328965427 L 611.71698113199 58.7217636120331 L 615.75471698125 51.390295615300346 L 619.79245283018 36.01343389930652 L 623.8301886791 23.65702716324006 L 627.86792452836 31.89463165395111 L 631.90566037729 26.402895326810324 L 635.94339622655 14.046488590743905 L 639.98113207547 12.673554508958773 L 649.98113207547 12.673554508958773" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class="highcharts-tracker"></path></g><g class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-undefined highcharts-tracker" transform="translate(10,20) scale(1 1)" clip-path="none"></g></g><text x="10" text-anchor="start" class="highcharts-title" style="color:#666;font-size:13px;fill:#666;" y="20" aria-hidden="true"><tspan>Frequency:10M</tspan></text><g class="highcharts-axis-labels highcharts-xaxis-labels "><text x="169.27535676659966" style="color:null;cursor:default;font-size:null;" text-anchor="middle" transform="translate(0,0)" y="203" opacity="1"><tspan>Nov 28</tspan></text><text x="330.19245283028204" style="color:null;cursor:default;font-size:null;" text-anchor="middle" transform="translate(0,0)" y="203" opacity="1"><tspan>Nov 29</tspan></text><text x="491.7018867923128" style="color:null;cursor:default;font-size:null;" text-anchor="middle" transform="translate(0,0)" y="203" opacity="1"><tspan>Nov 30</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels "><text x="679" style="color:null;cursor:default;font-size:null;" text-anchor="end" transform="translate(0,0)" y="120" opacity="1"><tspan>6</tspan></text><text x="679" style="color:null;cursor:default;font-size:null;" text-anchor="end" transform="translate(0,0)" y="52" opacity="1"><tspan>6.25</tspan></text></g><text x="715" class="highcharts-credits" text-anchor="end" style="cursor:pointer;color:#7d7d7d;font-size:11px;fill:#7d7d7d;" y="215" aria-hidden="true"><tspan>© </tspan><tspan class="qmod-copy-quote" dx="0">quote</tspan><tspan class="qmod-copy-media" dx="0">media</tspan></text></svg></div></div><!--end main-chart--><div class="qmod-chart-buttons-rs chart-tabs"><ul class="qmod-legend"><!-- rivets: each-time --><li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected"><span class="qmod-btn-text">1D</span></li><li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected" class=" qmod-active"><span class="qmod-btn-text">5D</span></li><li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected"><span class="qmod-btn-text">1M</span></li><li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected"><span class="qmod-btn-text">3M</span></li><li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected"><span class="qmod-btn-text">6M</span></li><li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected"><span class="qmod-btn-text">1Y</span></li><li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected"><span class="qmod-btn-text">2Y</span></li><li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected" style="display: none;"><span class="qmod-btn-text">3Y</span></li><li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected"><span class="qmod-btn-text">5Y</span></li><li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected" style="display: none;"><span class="qmod-btn-text">10Y</span></li><li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected" style="display: none;"><span class="qmod-btn-text"></span></li></ul></div><!--end chart tabs--></div></div>
                                <div data-qmod-tool="detailedquotetab" data-qmod-params="{&quot;lang&quot;:&quot;en&quot;,&quot;showLogo&quot;:false,&quot;lowHigh&quot;:false,&quot;symbol&quot;:&quot;MARA&quot;}" class="qtool" data-template-i-d="1669900516544"><div class="qmod-ui-tool qmod-detailedquote"><div class="qmod-quotehead"><!-- rivets: unless data.datatype | = 'n/a' --><div class="qmod-block-wrapper"><div class="pure-g"><!-- rivets: if data.qhShowRight --></div></div></div><div class="qmod-block-wrapper detailed-quote-information"><h2>Detailed Information</h2><div class="quote-stat-module"><div class="header has-date"><h4>Today</h4><!-- rivets: if data.pricedata.lasttradedatetime --><div class="date-time date"><p><span rv-html="data.pricedata.lasttradedatetime | momentjs 'true' 'LLL' tLang">November 30, 2022 4:00 PM</span> <span class="qmod-datetimezone">EST</span></p></div><div class="clear"></div></div><!--end header--><div class="row"><!-- rivets: if data.pricedata.last --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Last</div><div class="stat">6.32</div></div></div><!-- rivets: if data.pricedata.sharevolume --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Volume</div><div class="stat">23.05m</div></div></div><!-- rivets: if data.pricedata.change --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">$ Chg</div><div class="stat"><span rv-qmodchange="data.pricedata.change" class="qmod-change qmod-ch-up">0.43</span></div></div></div><!-- rivets: if data.pricedata.changepercent --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">% Chg</div><div rv-html="data.pricedata.changepercent | numeraljs '0.00' '0.00' | postFix '%'" class="stat">7.30%</div></div></div><!-- rivets: if data.pricedata.open --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Open</div><div class="stat">6.05</div></div></div><!-- rivets: if data.pricedata.prevclose --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Prev. Close</div><div class="stat">5.89</div></div></div><!-- rivets: if data.pricedata.high --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">High</div><div class="stat">6.35</div></div></div><!-- rivets: if data.pricedata.low --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Low</div><div class="stat">5.78</div></div></div><!-- rivets: if data.pricedata.bid --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Bid</div><div class="stat">6.36</div></div></div><!-- rivets: if data.pricedata.bidsize --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Bid Size</div><div class="stat">900</div></div></div><!-- rivets: if data.pricedata.ask --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Ask</div><div class="stat">6.40</div></div></div><!-- rivets: if data.pricedata.asksize --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Ask Size</div><div class="stat">3100</div></div></div></div><!--end row--></div><!--end stat-module--><!-- rivets: unless data.afterhours.last | = 'N/A' --><div class="quote-stat-module"><div class="header has-date"><h4>After Hours</h4><div class="date-time"><p><span rv-html="data.afterhours.lasttradedatetime | momentjs 'true' 'LLL' tLang">November 30, 2022 7:59 PM</span>&nbsp;EST</p></div></div><!--end header--><div class="clear"></div><div class="row"><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Price</div><div class="stat"><span rv-html="data.afterhours.last | asQHLast tLang | asCurrency data.key.currency tLang" class="qmod-last">$6.36</span></div></div></div><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Change</div><div class="stat">0.04</div></div></div><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">% Chg</div><div class="stat"><span rv-html="data.afterhours.changepercent | numeraljs '0.00' | postFix '%' tLang">0.63%</span></div></div></div><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Volume</div><div class="stat"><!-- rivets: if data.afterhours.sharevolume --><span class="qmod-volume"><span class="qmod-sm-hide">1,065,534</span></span></div></div></div></div><!--end row--></div><!--end quote-stat-module--><!-- rivets: if data.fundamental.dividend --><!--end stat-module--><div class="quote-stat-module"><div class="header"><h4>Share Information</h4></div><div class="clear"></div><!--end header--><div class="row"><!-- rivets: if data.fundamental.week52high --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Year High</div><div class="stat">57.70</div></div></div><!-- rivets: if data.fundamental.week52low --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Year Low</div><div class="stat">5.20</div></div></div><!-- rivets: if data.key.exShName --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Exchange</div><div class="stat"><a rv-title="data.key.exLgName" rv-on-mouseenter="data.qmtooltip" class="qmod-tooltip" title="NASDAQ Capital Market">NCM</a></div></div></div><!-- rivets: if data.fundamental.sharesoutstanding --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Shares Out</div><div class="stat">116.84m</div></div></div><!-- rivets: if data.fundamental.marketcap --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">Marketcap</div><div class="stat">738.44m</div></div></div><!-- rivets: if data.fundamental.eps --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">EPS</div><div class="stat">-2.40</div></div></div><!-- rivets: if data.fundamental.peratio --><!-- rivets: if data.fundamental.pbratio --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">PB Ratio</div><div class="stat">0.92</div></div></div><!-- rivets: if data.pricedata.vwap --><div class="col-md-4 col-sm-6 col-xs-12"><div class="qmod-line"><div class="title">VWAP</div><div class="stat">6.08767</div></div></div></div><!--end row--></div><!--end stat-module--></div></div></div>
                            </div>
                        </main>
                    </div>
                </div>
            </div><!-- //container-->
        </div>
        <div class="eq-container">
            <div class="module-quick-links">
                <ul>
                    <li><a href="/news-events/email-alerts" class="email">Email Alerts</a></li>
                    <li><a href="/company-information/contacts" class="contacts">Contacts</a></li>
                    <li><a href="https://ir.marathondh.com/news-events/press-releases/rss" class="rss" target="_blank" rel="noopener">RSS News Feed</a></li>
                </ul>
            </div>
        </div>

        @include('pages.includes.footer')

    </div>

@endsection
