@extends('layouts.base')

@section('page-title', 'Corporate Governance :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107636 page-type-ir-landing---governance-at-a-glance pg-overview-corporate-governance ir has-sub-nav fl-builder-breakpoint-large', \Termwind\style('padding-top: 125px;')
)

@section('page-content')

    <div class="general-wrapper">


        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Corporate Governance</h1>
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
                                <li class="has-children active active-landing dropdown">
                                    <a href="/corporate-governance" target="_self">Governance</a>
                                    <ul class="dropdown-menu">
                                        <li class="active active-landing">
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
                                        <h3>Governance</h3>
                                    </li>
                                    <li class="active active-landing">
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
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <h2>Governance at a Glance</h2>
                            <div class="header">
                                <div class="legend content-table clearfix pull-right">
                                    <div class="chair">
            <span class="role chair"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs></defs>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-170.000000, -50.000000)">
        <polygon points="180 50 190 70 170 70"></polygon>
    </g>
</svg></span>
                                        <span class="value">Chair</span>
                                    </div>
                                    <div class="member">
            <span class="role member"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs></defs>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-140.000000, -50.000000)">
        <circle cx="150" cy="60" r="10"></circle>
    </g>
</svg></span>
                                        <span class="value">Member</span>
                                    </div>
                                </div>
                            </div>
                            <table class="content-table borders committee-list">
                                <thead>
                                <tr>
                                    <th class="col-title">Board Members</th>
                                    <th class="col-role">Audit</th>
                                    <th class="col-role">Compensation</th>
                                    <th class="col-role">Nominating and Corporate Governance</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-title">
                                        <p class="name">
                                            <a href="#board-bio-3968" class="fancybox-bio">
                                                Fred Thiel </a></p>
                                    </td>
                                    <td class="col-committee-roles non-member">
                                    </td>
                                    <td class="col-committee-roles non-member">
                                    </td>
                                    <td class="col-committee-roles non-member">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-title">
                                        <p class="name">
                                            <a href="#board-bio-4012" class="fancybox-bio">
                                                Georges Antoun </a></p>
                                    </td>
                                    <td class="col-committee-roles ">
                                        <div class="committee-role">
                    <span class="role member"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs></defs>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-140.000000, -50.000000)">
        <circle cx="150" cy="60" r="10"></circle>
    </g>
</svg></span>
                                            <span class="role-label hidden-lg hidden-md hidden-sm">Audit</span>
                                        </div>
                                    </td>
                                    <td class="col-committee-roles ">
                                        <div class="committee-role">
                    <span class="role chair"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs></defs>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-170.000000, -50.000000)">
        <polygon points="180 50 190 70 170 70"></polygon>
    </g>
</svg></span>
                                            <span class="role-label hidden-lg hidden-md hidden-sm">Compensation</span>
                                        </div>
                                    </td>
                                    <td class="col-committee-roles ">
                                        <div class="committee-role">
                    <span class="role member"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs></defs>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-140.000000, -50.000000)">
        <circle cx="150" cy="60" r="10"></circle>
    </g>
</svg></span>
                                            <span class="role-label hidden-lg hidden-md hidden-sm">Nominating and Corporate Governance</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-title">
                                        <p class="name">
                                            <a href="#board-bio-3971" class="fancybox-bio">
                                                Kevin A. DeNuccio </a></p>
                                    </td>
                                    <td class="col-committee-roles non-member">
                                    </td>
                                    <td class="col-committee-roles non-member">
                                    </td>
                                    <td class="col-committee-roles non-member">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-title">
                                        <p class="name">
                                            <a href="#board-bio-4028" class="fancybox-bio">
                                                Sarita James </a></p>
                                    </td>
                                    <td class="col-committee-roles non-member">
                                    </td>
                                    <td class="col-committee-roles non-member">
                                    </td>
                                    <td class="col-committee-roles ">
                                        <div class="committee-role">
                    <span class="role chair"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs></defs>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-170.000000, -50.000000)">
        <polygon points="180 50 190 70 170 70"></polygon>
    </g>
</svg></span>
                                            <span class="role-label hidden-lg hidden-md hidden-sm">Nominating and Corporate Governance</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-title">
                                        <p class="name">
                                            <a href="#board-bio-4013" class="fancybox-bio">
                                                Jay Leupp </a></p>
                                    </td>
                                    <td class="col-committee-roles ">
                                        <div class="committee-role">
                    <span class="role chair"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs></defs>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-170.000000, -50.000000)">
        <polygon points="180 50 190 70 170 70"></polygon>
    </g>
</svg></span>
                                            <span class="role-label hidden-lg hidden-md hidden-sm">Audit</span>
                                        </div>
                                    </td>
                                    <td class="col-committee-roles ">
                                        <div class="committee-role">
                    <span class="role member"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs></defs>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-140.000000, -50.000000)">
        <circle cx="150" cy="60" r="10"></circle>
    </g>
</svg></span>
                                            <span class="role-label hidden-lg hidden-md hidden-sm">Compensation</span>
                                        </div>
                                    </td>
                                    <td class="col-committee-roles ">
                                        <div class="committee-role">
                    <span class="role member"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs></defs>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-140.000000, -50.000000)">
        <circle cx="150" cy="60" r="10"></circle>
    </g>
</svg></span>
                                            <span class="role-label hidden-lg hidden-md hidden-sm">Nominating and Corporate Governance</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-title">
                                        <p class="name">
                                            <a href="#board-bio-4029" class="fancybox-bio">
                                                Said Ouissal </a></p>
                                    </td>
                                    <td class="col-committee-roles ">
                                        <div class="committee-role">
                    <span class="role member"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs></defs>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-140.000000, -50.000000)">
        <circle cx="150" cy="60" r="10"></circle>
    </g>
</svg></span>
                                            <span class="role-label hidden-lg hidden-md hidden-sm">Audit</span>
                                        </div>
                                    </td>
                                    <td class="col-committee-roles ">
                                        <div class="committee-role">
                    <span class="role member"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs></defs>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-140.000000, -50.000000)">
        <circle cx="150" cy="60" r="10"></circle>
    </g>
</svg></span>
                                            <span class="role-label hidden-lg hidden-md hidden-sm">Compensation</span>
                                        </div>
                                    </td>
                                    <td class="col-committee-roles ">
                                        <div class="committee-role">
                    <span class="role member"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs></defs>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-140.000000, -50.000000)">
        <circle cx="150" cy="60" r="10"></circle>
    </g>
</svg></span>
                                            <span class="role-label hidden-lg hidden-md hidden-sm">Nominating and Corporate Governance</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-title">
                                        <p class="name">
                                            <a href="#board-bio-4058" class="fancybox-bio">
                                                Doug Mellinger </a></p>
                                    </td>
                                    <td class="col-committee-roles non-member">
                                    </td>
                                    <td class="col-committee-roles non-member">
                                    </td>
                                    <td class="col-committee-roles non-member">
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <h2>Committee Charters</h2>
                            <div class="module-asset-list">
                                <div class="asset">
                                    <a href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/db/223/3991/file/c26c4189ada13bf4ce20885773048bf5.pdf" target="_blank" rel="noopener">
                                        <h4>Audit </h4>
                                    </a>
                                    <a href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/db/223/3991/file/c26c4189ada13bf4ce20885773048bf5.pdf" target="_blank" rel="noopener" class="btn">View Charter<span class="material-icons">arrow_forward</span></a>
                                    <div class="clear"></div>
                                </div>
                                <div class="asset">
                                    <a href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/db/223/3992/file/fe003bba9009dbdf635a35e7762350da.pdf" target="_blank" rel="noopener">
                                        <h4>Compensation </h4>
                                    </a>
                                    <a href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/db/223/3992/file/fe003bba9009dbdf635a35e7762350da.pdf" target="_blank" rel="noopener" class="btn">View Charter<span class="material-icons">arrow_forward</span></a>
                                    <div class="clear"></div>
                                </div>
                                <div class="asset">
                                    <a href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/db/223/3993/file/5f2e2f26b9d78c4d509475d25a6821af.pdf" target="_blank" rel="noopener">
                                        <h4>Nominating and Corporate Governance </h4>
                                    </a>
                                    <a href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/db/223/3993/file/5f2e2f26b9d78c4d509475d25a6821af.pdf" target="_blank" rel="noopener" class="btn">View Charter<span class="material-icons">arrow_forward</span></a>
                                    <div class="clear"></div>
                                </div>
                            </div>

                            <div class="hide" id="board-bios">
                                <div class="board-bio" id="board-bio-3968">
                                    <div class="eq-container">
                                        <div class="personnel-listing">
                                            <div class=" member" id="fred-thiel">
                                                <div class="info">
                                                    <h2>Fred Thiel</h2>
                                                </div>
                                                <div class="member-info" id="member-bio-3968">
                                                    <div class="member-description">
                                                        <p>Prior to serving as Marathon’s chief executive officer, Thiel co-founded and served as chairman of Sprocket, a blockchain and cryptocurrency technology and financial services company whose mission is to reduce the risk and friction of cryptocurrency trading across marketplaces, regions and exchanges by establishing a federation of exchanges that together create a single aggregated global trading marketplace with large scale liquidity, rapid execution, minimal counter-party risk, and price transparency. Prior to that, Thiel served as chairman and chief executive officer of Local Corporation, an $80 million Nasdaq-listed leader in online local search and digital media, mobile search monetization and programmatic retargeting markets with over 240 million unique annual visitors.</p>
                                                        <p>During his career while holding the title of CEO across multiple companies, Thiel successfully created in excess of $750 million in shareholder value, efficiently raised more than $150 million through both public (IPO and secondary offerings) and private capital sources, led multiple successful corporate transformations resulting in highly accretive exits, built high output agile product development organizations, and established corporate innovation groups resulting in the creation of new product businesses that generated significant new revenues in their first year.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-bio" id="board-bio-4012">
                                    <div class="eq-container">
                                        <div class="personnel-listing">
                                            <div class=" member" id="georges-antoun">
                                                <div class="info">
                                                    <h2>Georges Antoun</h2>
                                                </div>
                                                <div class="member-info" id="member-bio-4012">
                                                    <div class="member-description">
                                                        <p>Georges Antoun brings to Marathon over 30 years of operational and technical experience, having served in various leadership positions at several global technology companies, including as a member of the board of directors of two publicly traded companies: Ruckus Wireless, Inc. and Violin Memory, Inc. He currently serves as the president of First Solar where he was chief operating officer before being appointed to president, U.S. in July 2015. Prior to joining First Solar, Mr. Antoun served as a venture partner at Technology Crossover Ventures (“TCV”), a private equity and venture firm, which he joined in July 2011. Before joining TCV, he was the head of product area IP &amp; broadband networks for Ericsson. Mr. Antoun joined Ericsson in 2007, when Ericsson acquired Redback Networks, a telecommunications equipment company, where Mr. Antoun served as the senior vice president of worldwide sales &amp; operations. After the acquisition, Mr. Antoun was promoted to chief executive officer of the Redback Networks subsidiary. Prior to Redback Networks, Mr. Antoun spent five years at Cisco Systems, where he served as vice president of worldwide systems engineering and field marketing, vice president of worldwide optical operations, and vice president of carrier sales. Prior to Cisco, he was the director of systems engineering at Newbridge Networks, a data and voice networking company. Mr. Antoun started his career as a member of the technical staff at NYNEX (now Verizon Communications), where he was part of the company’s science and technology division. Mr. Antoun earned a Bachelor of Science degree in engineering from the University of Louisiana at Lafayette and a master’s in information systems engineering from NYU Poly.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-bio" id="board-bio-3971">
                                    <div class="eq-container">
                                        <div class="personnel-listing">
                                            <div class=" member" id="kevin-a-denuccio">
                                                <div class="info">
                                                    <h2>Kevin A. DeNuccio</h2>
                                                </div>
                                                <div class="member-info" id="member-bio-3971">
                                                    <div class="member-description">
                                                        <p>Mr. DeNuccio is the Founder and General Partner of Wild West Capital LLC since 2012 where he focused on angel investments, primarily in SAAS software start-ups.</p>
                                                        <p>He brings to Marathon more than 25 years of experience as a chief executive, global sales leader, public and private board member, and more than a dozen angel investments, managing and growing leading technology businesses. He served in senior executive positions with Verizon, Cisco Systems, Ericsson, Redback Networks, Wang Laboratories and Unisys Corporation.</p>
                                                        <p>He recently served as Executive Chairman and major investor of SevOne, a Bain Capital company, since 2017, until its sale to Turbonomics in November 2019. Prior to that, he was Director, Chief Executive Officer and President at NYSE listed Violin Memory from 2014 to 2017, restructured the company and sold it to the largest bondholder the Soros Group, in April 2017.</p>
                                                        <p>Prior to that, Mr. DeNuccio served as Director and Chief Executive Officer of Metaswitch Networks from 2010 to 2012, a Sequoia Capital company, where he migrated the company headquarters from London to San Francisco and re-developed its product offerings to SAAS for growth in a Software Defined World of Networking. Metaswitch was sold to Microsoft in 2020 for its SAAS offerings.</p>
                                                        <p>He also served as the Director, President and Chief Executive Officer at Nasdaq listed Redback Networks from 2001 to 2006, where he led the company successfully through a major restructuring, renewed growth, and ultimately a $2.1B sale. Sold to L.M. Ericsson in 2006, the transaction represented one of the highest sales multiples of its time, and a 100% stock premium.</p>
                                                        <p>Earlier in his career, he served as Senior Vice President of Worldwide Service Provider Operations, Worldwide Channels, and Worldwide Sales Operations with Cisco Systems Inc., from August 1995 to August 2001. At Cisco, he was one of the first 10 VP’s and one of the first promoted to Senior Vice President. At Cisco he hired over 3000 people, managed over 5000 people worldwide, and led the Service Provider Division revenue growth from $500 Million to nearly $8 Billion in annual revenue in a 4-year run.</p>
                                                        <p>Mr. DeNuccio has served on the Public Board of Juniper Networks since February 2014, and Calix since October 2012. He is an Angel Investor and Board Member of Zededa and an Angel Investor in Theatro, Deeyook, Byogy and Q-Sensei. He also previously served as a public Director of SanDisk Corp. and a Director of JDS Uniphase Corp.</p>
                                                        <p>He holds a BSBA with Honors in Finance from Northeastern University and served on its Board from 2012 to 2018. He also holds his MBA with Honors from Columbia University.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-bio" id="board-bio-4028">
                                    <div class="eq-container">
                                        <div class="personnel-listing">
                                            <div class=" member" id="sarita-james">
                                                <div class="info">
                                                    <h2>Sarita James</h2>
                                                </div>
                                                <div class="member-info" id="member-bio-4028">
                                                    <div class="member-description">
                                                        <p>Sarita James is the CEO ofEmbark, a leading college admissions software company, who brings to Marathon unique expertise in technology, finance, and government affairs.Prior to Embark, she held executive roles at Citigroup, including chief operating officer of Citi Ventures. After beginning her career in product development at Microsoft Corporation, where she was awarded two patents, she worked as a management consultant at McKinsey &amp; Company and served in various positions within federal and local government. In 2008, she was awarded one of fourteen White House Fellowships and, under the Obama administration, was appointed acting branch chief of the Small Business Administration’s domestic Microloan program. After winning the 1994 International Science and Engineering Fair, she contributed a chapter to the book<em>Girls and Young Women Inventing</em>.She previouslyservedon the board of theAsian American Writers’ Workshop. James holds a bachelor's degree in computer science from Harvard College and an MBA from Oxford University.
                                                        </p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-bio" id="board-bio-4013">
                                    <div class="eq-container">
                                        <div class="personnel-listing">
                                            <div class=" member" id="jay-leupp">
                                                <div class="info">
                                                    <h2>Jay Leupp</h2>
                                                </div>
                                                <div class="member-info" id="member-bio-4013">
                                                    <div class="member-description">
                                                        <p>Jay Leupp is the managing partner of Terra Firma Asset Management, LLC. Prior to co-founding Terra Firma, Mr. Leupp served as a managing director in various roles at Lazard Asset Management, Grubb &amp; Ellis Alesco Global Advisors, RBC Capital Markets and Robertson Stephens &amp; Co. During his career, he has also held positions at The Staubach Company, Trammell Crow Company, and KPMG Peat Marwick. Mr. Leupp is also a member of the American Institute of Certified Public Accountants (AICPA) and serves on the boards of both non-profit and corporate organizations. Mr. Leupp earned a Bachelor of Science in business administration from Santa Clara University, and an MBA from Harvard Business School.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-bio" id="board-bio-4029">
                                    <div class="eq-container">
                                        <div class="personnel-listing">
                                            <div class=" member" id="said-ouissal">
                                                <div class="info">
                                                    <h2>Said Ouissal</h2>
                                                </div>
                                                <div class="member-info" id="member-bio-4029">
                                                    <div class="member-description">
                                                        <p>Said Ouissal brings to Marathon extensive experience in senior leadership positions across IP networking (routing, switching, and security), telecommunications, cloud, and mobile broadband. Currently, he is the CEO and founder of ZEDEDA. Prior to ZEDEDA, he held executive product management and (technical) sales roles at various infrastructure companies, including Ericsson, Juniper Networks, Redback Networks, and Violin Memory. Throughout his career, he has also served in engineering and development roles at Lucent, Versatel, and Conxion. Ouissal holds a bachelor’s degree in computer science, is the author of two patents, and speaks five languages.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-bio" id="board-bio-4058">
                                    <div class="eq-container">
                                        <div class="personnel-listing">
                                            <div class=" member" id="doug-mellinger">
                                                <div class="info">
                                                    <h2>Doug Mellinger</h2>
                                                </div>
                                                <div class="member-info" id="member-bio-4058">
                                                    <div class="member-description">
                                                        <p>Doug Mellinger is an active entrepreneur, philanthropist, impact investor, and board member, with extensive experience building and leading public and private companies in the technology and financial industries. Mellinger is a managing director at Clarion Capital Partners, a lower middle market private equity and structured credit asset management company. He currently serves on the board of directors of Foundation Source, a leading provider of outsourced services and technology for private foundations which he co-founded in 2000; the board of directors of Campden Wealth and IPI (Institute for Private Investors), the largest global membership organization for wealthy families and their family offices; and the board of directors of International Education Corporation (IEC), one of the nation’s largest career education colleges. Prior to Clarion Capital Partners, Mellinger was a partner at Palm Ventures and a managing partner at Zeno Ventures. He founded and served as the chairman and CEO of enherent Corp, a global software development and services company that was listed as an Inc. 500 company twice and was featured on Deloitte &amp; Touche’s Technology Fast 500 and Fast 50 lists. Throughout his career, Mellinger has served on the boards of numerous companies and organizations, including Edgar Online, Sequest Technologies, Producteev, Schiller International, Young Entrepreneur’s Organization (YEO), and Young President’s Organization (YPO), among others. He has also served on several advisory boards and boards to government agencies, universities, and non-profit organizations over the past 40 years. Mellinger holds a degree in entrepreneurial science from Syracuse University.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
