@extends('layouts.base')

@section('page-title', 'SEC Filings :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107630 page-type-ir-landing---sec-filings pg-overview-sec-filings ir has-sub-nav fl-builder-breakpoint-large', \Termwind\style('padding-top: 125px;')
)

@section('page-content')

    <div class="general-wrapper">


        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>SEC Filings</h1>
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
                                <li class="has-children active active-landing dropdown">
                                    <a href="/sec-filings" target="_self">SEC Filings</a>
                                    <ul class="dropdown-menu">
                                        <li class="active active-landing">
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
                                        <h3>SEC Filings</h3>
                                    </li>
                                    <li class="active active-landing">
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
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <h2 class="icon-bg-filing">Latest Quarterly or Annual Filing</h2>
                            <div class="document-report">
                                <div class="flex-row">
                                    <div class="flex flex-full">
                                        <div class="header">
                                        </div>
                                    </div>
                                    <div class="flex filing-type">
                                        <a class="filing-type fancybox fancybox.iframe fancybox-sec-filing" href="https://content.equisolve.net/sec/0001493152-22-031756/form10-q.htm">
                                            10-Q </a>
                                    </div>
                                    <div class="flex flex-wide">
                                        <div class="date">
                                            <time datetime="2022-11-14T00:00:00">
                                                November 14, 2022
                                            </time>
                                        </div>
                                        <p>Quarterly report pursuant to Section 13 or 15(d)</p>
                                        <div id="doc-list-1">
                                            <div>

                                                <div class="quarterly-results">
                                                    <h3 class="related-link">
                                                        <a class="collapsed" data-toggle="collapse" data-target="#resulttag4070">
                                                            Related Documents
                                                            <span class="eqicon eqicon-trigger"></span>
                                                        </a>
                                                    </h3>
                                                    <div class="collapse" id="resulttag4070">
                                                        <h3 class="sr-only">3 2022<br>Quarter Results</h3>
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
                                    <div class="flex flex-short">
                                        <div class="links-row">
                                            <div class="pull-left">
                                                <a class="btn" aria-label="10-Q Filing PDF" href="/sec-filings/all-sec-filings/content/0001493152-22-031756/0001493152-22-031756.pdf" target="_blank" rel="noopener">
                                                    View PDF
                                                    <span class="material-icons">arrow_forward</span></a>
                                                <a class="btn fancybox fancybox.iframe fancybox-sec-filing" aria-label="10-Q Filing Viewer" href="https://content.equisolve.net/sec/0001493152-22-031756/form10-q.htm">
                                                    View HTML
                                                    <span class="material-icons">arrow_forward</span></a>
                                            </div>
                                            <div class="pull-right">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="icon-bg-filing">Latest Current Report</h2>
                            <div class="document-report">
                                <div class="flex-row">
                                    <div class="flex flex-full">
                                        <div class="header">
                                        </div>
                                    </div>
                                    <div class="flex filing-type">
                                        <a class="filing-type fancybox fancybox.iframe fancybox-sec-filing" href="https://content.equisolve.net/sec/0001493152-22-033853/form8-k.htm">
                                            8-K </a>
                                    </div>
                                    <div class="flex flex-wide">
                                        <div class="date">
                                            <time datetime="2022-11-28T00:00:00">
                                                November 28, 2022
                                            </time>
                                        </div>
                                        <p>Current report filing</p>
                                    </div>
                                    <div class="flex flex-short">
                                        <div class="links-row">
                                            <div class="pull-left">
                                                <a class="btn" aria-label="8-K Filing PDF" href="/sec-filings/all-sec-filings/content/0001493152-22-033853/0001493152-22-033853.pdf" target="_blank" rel="noopener">
                                                    View PDF
                                                    <span class="material-icons">arrow_forward</span></a>
                                                <a class="btn fancybox fancybox.iframe fancybox-sec-filing" aria-label="8-K Filing Viewer" href="https://content.equisolve.net/sec/0001493152-22-033853/form8-k.htm">
                                                    View HTML
                                                    <span class="material-icons">arrow_forward</span></a>
                                            </div>
                                            <div class="pull-right"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>Latest Proxy Statement</h2>
                            <div class="document-report">
                                <div class="flex-row">
                                    <div class="flex filing-type">
                                        <a class="filing-type fancybox fancybox.iframe fancybox-sec-filing" href="https://content.equisolve.net/sec/0001493152-22-025646/formdef14a.htm">
                                            DEF 14A </a>
                                    </div>
                                    <div class="flex flex-wide">
                                        <div class="date">
                                            <time datetime="2022-09-12T00:00:00">
                                                September 12, 2022
                                            </time>
                                        </div>
                                        <p>Definitive proxy statements</p>
                                    </div>
                                    <div class="flex flex-short">
                                        <div class="links-row">
                                            <div class="pull-left">
                                                <a class="btn" aria-label="DEF 14A Filing PDF" href="/sec-filings/all-sec-filings/content/0001493152-22-025646/0001493152-22-025646.pdf" target="_blank" rel="noopener">
                                                    View PDF
                                                    <span class="material-icons">arrow_forward</span></a>
                                                <a class="btn fancybox fancybox.iframe fancybox-sec-filing" aria-label="DEF 14A Filing Viewer" href="https://content.equisolve.net/sec/0001493152-22-025646/formdef14a.htm">
                                                    View HTML
                                                    <span class="material-icons">arrow_forward</span></a>
                                            </div>
                                            <div class="pull-right"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>View All SEC Filings</h2>
                            <p>View and filter by group or type</p>
                            <a href="/sec-filings/all-sec-filings" class="btn">View All Filings<span class="material-icons">arrow_forward</span></a>
                        </main>
                    </div>
                </div>
            </div>
            <!-- //container-->
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
