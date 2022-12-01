@extends('layouts.base')

@section('page-title', 'Financial Information :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107619 page-type-ir-landing---financial-information pg-overview-financial-information ir has-sub-nav fl-builder-breakpoint-large', \Termwind\style('padding-top: 125px;')
)

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Financial Information</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                        </div>
                    </div>
                </div>
            </header>
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
                                <li class="has-children active active-landing dropdown">
                                    <a href="/financial-information" target="_self">Financial Info</a>
                                    <ul class="dropdown-menu">
                                        <li class="active active-landing">
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
            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-md-offset-2 clearfix">
                        <aside id="tertiaryNav">
                            <nav id="tertiary-navigation" class="visible-sm visible-xs">
                                <ul>
                                    <li class="sidebar-title">
                                        <h3>Financial Info</h3>
                                    </li>
                                    <li class="active active-landing">
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
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <h2>Latest Financial Results</h2>
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
                            <h2>Latest 10-K</h2>
                            <div class="inline-btn">
                                <a class="btn fancybox fancybox.iframe" href="/sec-filings/all-sec-filings/content/0001493152-22-006446/form10-k.htm" rel="noopener">View HTML<span class="material-icons">arrow_forward</span></a>
                                <a class="btn" href="/sec-filings/all-sec-filings/content/0001493152-22-006446/0001493152-22-006446.pdf" target="_blank" rel="noopener">View PDF<span class="material-icons">arrow_forward</span></a>
                            </div>
                            <h2>Financials</h2>
                            <p>View the latest financials</p>
                            <div class="inline-btn">
                                <a href="/financial-information/balance-sheet" class="btn">Balance Sheet <span class="material-icons">arrow_forward</span></a>
                                <a href="/financial-information/income-statement" class="btn">Income Statement <span class="material-icons">arrow_forward</span></a>
                                <a href="/financial-information/cash-flow" class="btn">Cash Flow <span class="material-icons">arrow_forward</span></a>
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
                    <li>
                        <a href="https://ir.marathondh.com/news-events/press-releases/rss" class="rss" target="_blank" rel="noopener">RSS News Feed</a>
                    </li>
                </ul>
            </div>
        </div>

        @include('pages.includes.footer')

    </div>

@endsection

