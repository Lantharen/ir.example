@extends('layouts.base')

@section('page-title', 'Contact :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-10 page-type-contact pg-overview-contact ir has-sub-nav fl-builder-breakpoint-large', \Termwind\style('padding-top: 125px;')
)

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Contact</h1>
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
                                <li class="active active-landing">
                                    <a href="/contact" target="_self">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <main id="mainContent">
                <noscript>
                    <div class="alert alert-warning">
                        <strong>We're sorry</strong>, but this form has spam protection that requires
                        JavaScript to be enabled to work correctly. If you'd like to contact us
                        via this form, please
                        <a href="https://support.google.com/adsense/answer/12654?hl=en" target="_blank" rel="noopener">enable scripts in your browser</a>
                        and reload the page.
                    </div>
                </noscript>
                <div class="module module-contact-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="module-content text center">
                                    <h2>Get In Touch With Us</h2></div>


                                <div class="module-contact-info">
                                    <div class="row">
                                        <div class="col-sm-4 contact-info-col">
                                            <h4>Address</h4>
                                            <p>
                                                1180 North Town Center Drive<br> Suite 100<br> Las Vegas, NV 89144 </p>
                                        </div>
                                        <div class="col-sm-4 contact-info-col">
                                            <h4>Phone &amp; Fax</h4>
                                            <p>
                                                Toll-Free: 800-804-1690<br>
                                                Fax: 703-997-7320
                                            </p>
                                        </div>

                                        <div class="col-sm-4 contact-info-col">
                                            <h4>Email</h4>
                                            <p>
                                                info
                                                <wbr>
                                                @mara.com
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div data-name="recaptcha" class="contact-form-wrapper">
                                    <form method="post" action="/form-submit" id="contact-form" class="contact-form validate-form" novalidate="novalidate">
                                        <input type="hidden" name="f" value="contact-form">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="first_name">First Name*</label>
                                                <input type="text" name="first_name" id="first_name" value="" minlength="2" maxlength="40" class="required form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name">Last Name*</label>
                                                <input type="text" name="last_name" id="last_name" value="" minlength="2" maxlength="40" class="required form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email*</label>
                                                <input type="email" name="email" id="email" value="" maxlength="40" class="required form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="comments">Comments:</label>
                                                <textarea name="comments" id="comments" cols="30" rows="6" class="form-control"></textarea>
                                            </div>
                                            <div class="g-recaptcha" data-sitekey="6LciiZUaAAAAAHcmI5b4boscqn3xez8biSbu-_7I" data-callback="onInvisibleRecaptchaSubmit" data-size="invisible">
                                                <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                                    <div class="grecaptcha-logo">
                                                        <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LciiZUaAAAAAHcmI5b4boscqn3xez8biSbu-_7I&amp;co=aHR0cHM6Ly9pci5tYXJhdGhvbmRoLmNvbTo0NDM.&amp;hl=ru&amp;v=Km9gKuG06He-isPsP6saG8cn&amp;size=invisible&amp;cb=g5aiooly155g" width="256" height="60" role="presentation" name="a-qnkc1fruyfud" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                    </div>
                                                    <div class="grecaptcha-error"></div>
                                                    <label for="g-recaptcha-response" class="sr-only" aria-hidden="true">Captcha</label><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;" aria-hidden="true"></textarea>
                                                </div>
                                                <iframe style="display: none;"></iframe>
                                            </div>
                                            <button class="btn" type="submit">Submit<span class="material-icons">arrow_forward</span>
                                            </button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script id="recaptcha" src="https://www.google.com/recaptcha/api.js?onload=recaptchaOnloadCallback" async="" defer=""></script>
            </main>
        </div>
        <div class="eq-container"><div class="module-quick-links">
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
