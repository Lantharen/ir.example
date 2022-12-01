@extends('layouts.base')

@section('page-title', 'Investor Relations :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107607 page-type-ir-overview pg-overview-overview ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')


    <div class="general-wrapper">

    @include('pages.includes.header')



        <div class="eq-container">
            <div class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="vertical-align">
                        <div class="wrapper text">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <h1>Investor Relations </h1>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav id="sectionNav" class="sub-navigation-wrapper" aria-label="Investors Section">
                <div class="sub-navigation affixed affix-top">
                    <div class="container">
                        <a class="visible-xs visible-sm mobile-sub-nav-trigger collapsed" data-toggle="collapse" data-target="#sub-navigation">
                            <div class="trigger-container">
                                <div class="meat"></div>
                                <div class="meat"></div>
                                <div class="meat"></div>
                            </div>
                            Investors </a>
                        <div class="collapse sb-nav clearfix" id="sub-navigation">
                            <h3>Investors</h3>
                            <ul>
                                <li class="active active-landing">
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
                                <li class="has-children dropdown">
                                    <a href="/stock-data" target="_self">Stock Data</a>
                                    <ul class="dropdown-menu">
                                        <li class="">
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
            <main id="mainContent">


                <section class="module module-featured-news-blocks dark overlay">
                    <div class="container">
                        <div class="featured-news-block primary-color-bg dark">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="header">
                                        <a href="https://ir.marathondh.com/news-events/press-releases" class="btn desktop-all">View All News<span class="material-icons">arrow-forward</span></a>
                                        <h2>Latest News</h2>
                                        <time class="date" datetime="2022-11-08T16:05:00">Nov 8, 2022 • 4:05pm EST</time>
                                    </div><!--end header-->
                                    <div class="text">
                                        <h3>
                                            <a href="https://ir.marathondh.com/news-events/press-releases/detail/1297/marathon-digital-holdings-reports-third-quarter-2022-results">Marathon Digital Holdings Reports Third Quarter 2022 Results</a>
                                        </h3>
                                        <div class="inline-block-links">
                                            <a href="https://ir.marathondh.com/news-events/press-releases/detail/1297/marathon-digital-holdings-reports-third-quarter-2022-results" class="block-link">Read Press Release</a>

                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end featured-->
                        <div class="news-blocks">
                            <div class="news-block">
                                <a href="https://ir.marathondh.com/news-events/press-releases/detail/1296/marathon-digital-holdings-announces-bitcoin-production-and">
                                    <article class="text">
                                        <time class="date" datetime="2022-11-02T16:05:00">Nov 2, 2022 • 4:05pm EDT</time>
                                        <h3 data-mh="news-block" style="height: 80.0156px;">Marathon Digital Holdings Announces Bitcoin Production and Mining Operation Updates for October 2022</h3>
                                        <span class="block-link">View Press Release</span>
                                    </article>
                                </a>
                            </div><!--end cell-->
                            <div class="news-block">
                                <a href="https://ir.marathondh.com/news-events/press-releases/detail/1295/marathon-digital-holdings-schedules-conference-call-for">
                                    <article class="text">
                                        <time class="date" datetime="2022-10-26T16:05:00">Oct 26, 2022 • 4:05pm EDT</time>
                                        <h3 data-mh="news-block" style="height: 80.0156px;">Marathon Digital Holdings Schedules Conference Call for Third Quarter 2022 Financial Results</h3>
                                        <span class="block-link">View Press Release</span>
                                    </article>
                                </a>
                            </div><!--end cell-->
                            <div class="news-block">
                                <a href="https://ir.marathondh.com/news-events/press-releases/detail/1294/marathon-digital-holdings-announces-bitcoin-production-and">
                                    <article class="text">
                                        <time class="date" datetime="2022-10-06T08:35:00">Oct 6, 2022 • 8:35am EDT</time>
                                        <h3 data-mh="news-block" style="height: 80.0156px;">Marathon Digital Holdings Announces Bitcoin Production and Mining Operation Updates for September 2022</h3>
                                        <span class="block-link">View Press Release</span>
                                    </article>
                                </a>
                            </div><!--end cell-->
                            <a href="https://ir.marathondh.com/news-events/press-releases" class="btn mobile-all">View All News<span class="material-icons">arrow_forward</span></a>
                        </div><!--end news-blocks-->
                    </div>
                </section>
                <div class="module module-presentation-event dark">
                    <div class="container">
                        <div class="presentation-events">
                            <article class="item presentation ">
                                <div class="header" data-mh="presentation-event-header" style="height: 65.0938px;">
                                    <h2>Latest Presentation</h2>
                                    <time datetime="2022-10-19T00:00:00" class="date">
                                        Oct 19, 2022
                                    </time>
                                </div><!-- /header-->
                                <div class="text">
                                    <p>
                                        <a href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/db/212/3886/pdf/2022+October+-+MARA+IR+Presentation+FINAL.pdf" target="_blank" rel="noopener">
                                            Investor Presentation </a>
                                    </p>
                                    <div class="inline-block-links">
                                        <a href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/db/212/3886/pdf/2022+October+-+MARA+IR+Presentation+FINAL.pdf" target="_blank" rel="noopener" class="block-link">View Presentation</a>
                                    </div>
                                </div><!-- /text-->
                            </article><!-- /item-->

                            <article class="item event ">
                                <div class="header" data-mh="presentation-event-header" style="height: 65.0938px;">
                                    <h2>Recent Event</h2>
                                    <time datetime="2022-11-08T16:30:00" class="date">
                                        Nov 8, 2022 4:30 pm EST
                                    </time>
                                </div><!-- /header-->
                                <div class="text">
                                    <p>Q3 2022 Financial Results Conference Call</p>
                                    <div class="inline-block-links">
                                        <a href="/news-events/ir-calendar/detail/4069/q3-2022-financial-results-conference-call" target="_self" class="block-link">View
                                            Event</a>
                                        <a href="/news-events/ir-calendar" class="block-link">View All Events</a>
                                    </div>
                                </div><!-- /text-->
                            </article><!-- /item-->
                        </div>
                    </div>
                </div>
                <div id="financial-results" class="module module-overview-financial-results dark overlay overlay overlay--dark dark" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/db/275/3787/background_image.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header"><h2>Latest Financial Results</h2></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="fin-col results">
                                    <div class="text">
                                        <div class="  ">
                                            <div class="result-row results-info">
                                                <h3>Q3 2022</h3>
                                                <div class="date">Quarter Ended Sep 30, 2022</div>


                                            </div>

                                            <div class="result-row">
                                                <div class="result-line">
                                                    <a href="https://ir.marathondh.com/news-events/press-releases/detail/1297/marathon-digital-holdings-reports-third-quarter-2022-results/">Earnings Release</a>
                                                    <div class="pull-right">
                                                        <a href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/news/2022-11-08_Marathon_Digital_Holdings_Reports_Third_Quarter_1297.pdf" class="link" title="PDF: Marathon Digital Holdings Reports Third Quarter 2022 Results" target="_blank" rel="noopener">
                                                            <span class="eqicon-PDF"></span> PDF
                                                        </a>
                                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1297/marathon-digital-holdings-reports-third-quarter-2022-results" title="Marathon Digital Holdings Reports Third Quarter 2022 Results" class="link">
                                                            <span class="eqicon-HTML"></span> HTML
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="result-line">
                                                    <div class="pull-right">
                                                        <a href="https://event.webcasts.com/starthere.jsp?ei=1577037&amp;tp_key=ec6087aa13" class="result-link link" target="_blank" rel="noopener">
                                                            <span class="eqicon-MP3"></span> Audio
                                                        </a>
                                                    </div>

                                                    <a href="https://event.webcasts.com/starthere.jsp?ei=1577037&amp;tp_key=ec6087aa13" target="_blank" rel="noopener">Earnings Webcast</a>
                                                </div>

                                                <div class="result-line">
                                                    <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/form10-q.htm" title="10-Q Filing Viewer" class="fancybox fancybox.iframe">10-Q
                                                        <span class="sr-only">Filing</span></a>
                                                    <div class="pull-right">
                                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/0001493152-22-031756.pdf" title="10-Q" class="link" target="_blank" rel="noopener"><span class="eqicon-PDF"></span> PDF</a>
                                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/form10-q.htm" title="10-Q Filing Viewer" class="link fancybox fancybox.iframe"><span class="eqicon-HTML"></span> HTML</a>
                                                    </div>
                                                </div>
                                                <div class="result-line">
                                                    <a href="/sec-filings/all-sec-filings/xbrl_doc_only/10020" title="XBRL Viewer" target="_blank" rel="noopener" class="fancybox fancybox.iframe">XBRL</a>
                                                    <div class="pull-right">
                                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/0001493152-22-031756-xbrl.zip" title="Download Raw XBRL Files" class="link" target="_blank" rel="noopener"><span class="eqicon-ZIP"></span> ZIP</a>
                                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-22-031756/Financial_Report.xlsx" title="XBRL Spreadsheet" class="link" target="_blank" rel="noopener"><span class="eqicon-PDF"></span> XLS</a>
                                                        <a href="/sec-filings/all-sec-filings/xbrl_doc_only/10020" title="XBRL Viewer" class="link fancybox fancybox.iframe" target="_blank" rel="noopener"><span class="eqicon-HTML"></span> HTML</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="side-item filings">
                                    <section>
                                        <h2>Latest Annual Filing</h2>
                                        <p>For Fiscal Year Ending Dec 31, 2021</p>
                                    </section>
                                    <section class="report-links">
                                        <h3 class="sr-only">Report Links</h3>
                                        <nav class="inline-btns right" aria-labelledby="document-navigation">
                                            <h4 id="document-navigation" class="sr-only">Annual Report Document Links</h4>
                                            <a href="/sec-filings/all-sec-filings/content/0001493152-22-006446/0001493152-22-006446.pdf" class="block-link" target="_blank" rel="noopener">View 10-K</a>
                                        </nav>
                                    </section>
                                </div>
                                <div class="side-item alerts">
                                    <h2>Email Alerts</h2>
                                    <p>Receive updates straight into your inbox</p>
                                    <a href="/news-events/email-alerts" class="block-link">Sign Up Today</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <section class="ir-quote-box">
                    <div class="stock-info module ir-overview-stock-info">
                        <div class="container">

                            <div class="stock-info quote-box qtool" data-qmod-tool="detailedquotetab" data-qmod-params="{&quot;lang&quot;:&quot;en&quot;,&quot;showLogo&quot;:false,&quot;lowHigh&quot;:false,&quot;symbol&quot;:&quot;MARA&quot;}" data-template-i-d="1669722778113">
                                <div class="flex-row">
                                    <div class="flex-item">
                                        <div class="stock-box same-height"><h3 class="value-title">Market/Symbol</h3>
                                            <span class="symbol">Nasdaq: MARA</span></div>
                                    </div>
                                    <div class="flex-item">
                                        <div class="stock-box price same-height"><h3 class="value-title">Last</h3>
                                            <span class="value">5.98</span></div>
                                    </div>
                                    <div class="flex-item">
                                        <div class="stock-box change same-height"><h3 class="value-title">$ Chg</h3>
                                            <span><span class="value"><span rv-qmodchange="data.pricedata.change" class="qmod-change qmod-ch-down"><span class="number">-0.24</span><span class="percent"> (-3.86%)</span></span></span></span>
                                        </div>
                                    </div>
                                    <div class="flex-item">
                                        <div class="stock-box volume same-height"><h3 class="value-title">Volume</h3>
                                            <span class="value">14.29m</span></div>
                                    </div>
                                    <div class="flex-item">
                                        <div class="stock-box day-range same-height">
                                            <h3 class="value-title">Day Range</h3>
                                            <p class="value">5.83 - 6.18</p></div> <!-- .stock-box --></div>
                                    <div class="flex-item">
                                        <div class="stock-box week-range same-height">
                                            <h3 class="value-title">52 week Low/High</h3>
                                            <p class="value">5.20 - 57.70</p></div> <!-- .stock-box --></div>
                                </div>
                            </div><!--end stock-info-->
                        </div>
                    </div>
                </section>
                <section class="module module-company-overview neutral-bg background overlay dark" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/db/275/3799/background_image.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="module-content">
                                    <div class="vertical-align text-area" data-mh="default-full-width">
                                        <div class="wrapper text dark">
                                            <h2>Company Overview</h2>
                                            <p>Marathon is a digital asset technology company that mines cryptocurrencies, with a focus on the blockchain ecosystem and the generation of digital assets. We currently operate our proprietary Data Center in Hardin MT with a maximum power capacity of 105 Megawatts. The Company also owns 2,060 advanced ASIC Bitcoin Miners at a co-hosted facility in North Dakota.</p>
                                            <p>Marathon is on-track to deploy&nbsp;133,000 miners, which are expected to generate approximately&nbsp;13.3 Exahash&nbsp;by mid 2022.</p>
                                            <div class="inline-btn">
                                                <a href="/company-information/management-team" class="btn">View Management Team<span class="material-icons">arrow_forward</span></a>
                                                <a href="/corporate-governance/board-of-directors" class="btn">View Board of Directors<span class="material-icons">arrow_forward</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="contact-info overview-contact-info module ">
                    <div class="container">
                        <div class="text">
                            <h2>IR Contacts</h2>
                            <div class="flex-row">
                                <div class="flex-item contact-col dark">
                                    <div class="wrapper">
                                        <h3 class="heading--h4">Company</h3>
                                        <p>
                                            Marathon Digital Holdings<br>
                                            1180 North Town Center Drive<br> Suite 100<br> Las Vegas, NV 89144 <br>
                                            Toll-Free: 800-804-1690<br>
                                            F: 703-997-7320
                                            <br><a href="mailto:info@mara.com">info@mara.com</a></p>
                                    </div>
                                </div>
                                <div class="flex-item contact-col dark">
                                    <div class="wrapper">
                                        <h3 class="heading--h4">Investor Relations</h3>
                                        <p>
                                            T: 800-804-1690<br> <a href="mailto:ir@mara.com">ir@mara.com</a><br></p>
                                    </div>
                                </div>
                                <div class="flex-item contact-col dark">
                                    <div class="wrapper">
                                        <h3 class="heading--h4">Transfer Agent</h3>
                                        <p>
                                            Equity Stock Transfer<br> Nora Marckwordt<br> T: 917-746-4595<br> F: 347-584-3644<br>
                                            <a href="https://www.equitystock.com" target="_blank" rel="noopener">https://www.equitystock.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <div class="eq-container">
            <div class="module-quick-links">
                <ul>
                    <li><a href="/news-events/email-alerts" class="email">Email Alerts</a></li>
                    <li><a href="/company-information/contacts" class="contacts">Contacts</a></li>
                    <li>
                        <a href="https://ir.marathondh.com/news-events/press-releases/rss" class="rss" target="_blank" rel="noopener">RSS News Feed</a>
                    </li>
                </ul>
            </div>
        </div>

        @include('pages.includes.footer')

        <div class="eq-container">
            <div class="qmod-attribution">
                <div class="container">
                    <div class="q-mod-attribution disclaimer">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 center">
                                <p>
                                    Market Data copyright © 2022
                                    <a href="http://www.quotemedia.com" target="_blank" rel="nofollow noopener">QuoteMedia</a>. Data delayed
                                    15 minutes unless otherwise indicated (view
                                    <a href="http://www.quotemedia.com/legal/tos/#times" target="_blank" rel="nofollow noopener">delay times</a> for all exchanges).
                                    <span class="qmf-rt">RT</span>=Real-Time,
                                    <span class="qmf-non-rt">EOD</span>=End of Day,
                                    <span class="qmf-non-rt">PD</span>=Previous Day. Market Data powered by
                                    <a href="http://www.quotemedia.com" target="_blank" rel="nofollow noopener">QuoteMedia</a>.
                                    <a href="http://www.quotemedia.com/legal/tos/" target="_blank" rel="nofollow noopener">Terms of Use</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/plugins/bb-plugin/js/jquery.ba-throttle-debounce.min.js') }}" id="jquery-throttle-js"></script>
        <script src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/plugins/bb-plugin/js/jquery.fitvids.min.js') }}" id="jquery-fitvids-js"></script>
        <script src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/uploads/bb-plugin/cache/7adfab9c7acb1602aa8838f69f63e8d7-layout-bundle.js') }}" id="fl-builder-layout-bundle-7adfab9c7acb1602aa8838f69f63e8d7-js"></script>
        <script src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/plugins/bb-plugin/js/jquery.magnificpopup.js') }}" id="jquery-magnificpopup-js"></script>
        <script id="fl-automator-js-extra">
            var themeopts = {"medium_breakpoint": "992", "mobile_breakpoint": "768"};
        </script>
        <script src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/themes/bb-theme/js/theme.js') }}" id="fl-automator-js"></script>
        <script src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-includes/js/wp-embed.min.js') }}" id="wp-embed-js"></script>
        <script id="companyVars" type="application/json">
{
    "asset_url": "https:\/\/d1io3yog0oux5.cloudfront.net\/_640653e429ebf8728c194bd275de5597\/marathondh",
    "website_base_url": "https:\/\/ir.marathondh.com",
    "ir_base_url": "",
    "isQmod": true}

        </script>


        <script src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/js/_js/all.js') }}"></script>

        <script id="qmod" src="https://qmod.quotemedia.com/js/qmodLoader.js" data-qmod-wmid="93303" data-qmod-env="app" data-qmod-version="v1.26.0" defer=""></script>
        <script src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/js/aside/_js/browser-check.min.js') }}" async=""></script>
    </div>

@endsection

