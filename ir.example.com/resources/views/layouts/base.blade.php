<html lang="en" class="chrome chrome107">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('page-title')</title>


    <meta name="viewport" content="initial-scale=1.0, width=device-width">

    {{-- <link rel="preconnect" href="https://d1io3yog0oux5.cloudfront.net"> --}}
    {{--<link rel="preconnect" href="https://qmod.quotemedia.com">--}}
    {{--<link rel="preload" href="https://qmod.quotemedia.com/static/v1.12.0/dayyearrange,detailedquotetab.js" as="script">--}}

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" id="fl-builder-google-fonts-964e367b7cedf780d9e7e3a9b919d048-css" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP%3A300%2C400%2C700%2C300&amp;ver=5.6.2" media="all">

    <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-includes/css/dist/block-library/style.min.css') }}" media="all">
    <link rel="stylesheet" id="wp-block-library-theme-css" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-includes/css/dist/block-library/theme.min.css') }}" media="all">
    <link rel="stylesheet" id="fl-builder-layout-bundle-dce3cc70b9beb2faf64526bbb16e323e-css" href="{{ asset('_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/uploads/bb-plugin/cache/dce3cc70b9beb2faf64526bbb16e323e-layout-bundle.css') }}" media="all">
    <link rel="stylesheet" id="gforms_reset_css-css" href="{{ asset('_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/plugins/gravityforms/css/formreset.min.css') }}" media="all">
    <link rel="stylesheet" id="gforms_formsmain_css-css" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/plugins/gravityforms/css/formsmain.min.css') }}" media="all">
    <link rel="stylesheet" id="gforms_ready_class_css-css" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/plugins/gravityforms/css/readyclass.min.css') }}" media="all">
    <link rel="stylesheet" id="gforms_browsers_css-css" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/plugins/gravityforms/css/browsers.min.css') }}" media="all">
    <link rel="stylesheet" id="jquery-magnificpopup-css" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/plugins/bb-plugin/css/jquery.magnificpopup.css') }}" media="all">
    <link rel="stylesheet" id="base-css" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/themes/bb-theme/css/base.min.css') }}" media="all">
    <link rel="stylesheet" id="fl-automator-skin-css" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/uploads/bb-theme/skin-603e3d0cb1323.css') }}" media="all">
    <link rel="stylesheet" id="fl-child-theme-css" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-content/themes/marathon-child/style.css') }}" media="all">
    <link href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/css/ir.stockpr.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/css/style.css') }}">

    <link rel="shortcut icon" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/favicons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/favicons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/favicons/favicon-16x16.png') }}" sizes="16x16">
    <link rel="mask-icon" href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/favicons/safari-pinned-tab.svg') }}">
    <meta name="theme-color" content="#ffffff">

    <script src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-includes/js/jquery/jquery.min.js') }}" id="jquery-core-js"></script>
    <script src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-includes/js/jquery/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script>
    <script src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/site-files/20210330/wp-includes/js/imagesloaded.min.js') }}" id="imagesloaded-js"></script>

    <script type="text/javascript" src="{{ asset('/static/v1.26.0/vendors.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/static/v1.26.0/commons.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/static/v1.26.0/detailedquotetab.js') }}"></script>
    <style id="fit-vids-style">.fluid-width-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }

        .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }</style>
    <style>.pure-g {
            display: -webkit-flex;
            -webkit-flex-flow: row wrap;
            display: -ms-flexbox;
            -ms-flex-flow: row wrap;
            -ms-align-content: flex-start;
            -webkit-align-content: flex-start;
            align-content: flex-start;
        }

        .opera-only :-o-prefocus,
        .pure-g {
            word-spacing: -0.43em;
        }

        .pure-u {
            display: inline-block;
            *display: inline;
            zoom: 1;
            letter-spacing: normal;
            word-spacing: normal;
            vertical-align: top;
            text-rendering: auto;
        }

        .pure-g [class*="pure-u"] {
            font-family: sans-serif;
        }

        .pure-u-1,
        .pure-u-1-1,
        .pure-u-1-2,
        .pure-u-1-3,
        .pure-u-2-3,
        .pure-u-1-4,
        .pure-u-3-4,
        .pure-u-1-5,
        .pure-u-2-5,
        .pure-u-3-5,
        .pure-u-4-5,
        .pure-u-5-5,
        .pure-u-1-6,
        .pure-u-5-6,
        .pure-u-1-8,
        .pure-u-3-8,
        .pure-u-5-8,
        .pure-u-7-8,
        .pure-u-1-12,
        .pure-u-5-12,
        .pure-u-7-12,
        .pure-u-11-12,
        .pure-u-1-24,
        .pure-u-2-24,
        .pure-u-3-24,
        .pure-u-4-24,
        .pure-u-5-24,
        .pure-u-6-24,
        .pure-u-7-24,
        .pure-u-8-24,
        .pure-u-9-24,
        .pure-u-10-24,
        .pure-u-11-24,
        .pure-u-12-24,
        .pure-u-13-24,
        .pure-u-14-24,
        .pure-u-15-24,
        .pure-u-16-24,
        .pure-u-17-24,
        .pure-u-18-24,
        .pure-u-19-24,
        .pure-u-20-24,
        .pure-u-21-24,
        .pure-u-22-24,
        .pure-u-23-24,
        .pure-u-24-24 {
            display: inline-block;
            *display: inline;
            zoom: 1;
            letter-spacing: normal;
            word-spacing: normal;
            vertical-align: top;
            text-rendering: auto;
        }

        .pure-u-1-24 {
            width: 4.1667%;
            *width: 4.1357%;
        }

        .pure-u-1-12,
        .pure-u-2-24 {
            width: 8.3333%;
            *width: 8.3023%;
        }

        .pure-u-1-8,
        .pure-u-3-24 {
            width: 12.5%;
            *width: 12.469%;
        }

        .pure-u-1-6,
        .pure-u-4-24 {
            width: 16.6667%;
            *width: 16.6357%;
        }

        .pure-u-1-5 {
            width: 20%;
            *width: 19.969%;
        }

        .pure-u-5-24 {
            width: 20.8333%;
            *width: 20.8023%;
        }

        .pure-u-1-4,
        .pure-u-6-24 {
            width: 25%;
            *width: 24.969%;
        }

        .pure-u-7-24 {
            width: 29.1667%;
            *width: 29.1357%;
        }

        .pure-u-1-3,
        .pure-u-8-24 {
            width: 33.3333%;
            *width: 33.3023%;
        }

        .pure-u-3-8,
        .pure-u-9-24 {
            width: 37.5%;
            *width: 37.469%;
        }

        .pure-u-2-5 {
            width: 40%;
            *width: 39.969%;
        }

        .pure-u-5-12,
        .pure-u-10-24 {
            width: 41.6667%;
            *width: 41.6357%;
        }

        .pure-u-11-24 {
            width: 45.8333%;
            *width: 45.8023%;
        }

        .pure-u-1-2,
        .pure-u-12-24 {
            width: 50%;
            *width: 49.969%;
        }

        .pure-u-13-24 {
            width: 54.1667%;
            *width: 54.1357%;
        }

        .pure-u-7-12,
        .pure-u-14-24 {
            width: 58.3333%;
            *width: 58.3023%;
        }

        .pure-u-3-5 {
            width: 60%;
            *width: 59.969%;
        }

        .pure-u-5-8,
        .pure-u-15-24 {
            width: 62.5%;
            *width: 62.469%;
        }

        .pure-u-2-3,
        .pure-u-16-24 {
            width: 66.6667%;
            *width: 66.6357%;
        }

        .pure-u-17-24 {
            width: 70.8333%;
            *width: 70.8023%;
        }

        .pure-u-3-4,
        .pure-u-18-24 {
            width: 75%;
            *width: 74.969%;
        }

        .pure-u-19-24 {
            width: 79.1667%;
            *width: 79.1357%;
        }

        .pure-u-4-5 {
            width: 80%;
            *width: 79.969%;
        }

        .pure-u-5-6,
        .pure-u-20-24 {
            width: 83.3333%;
            *width: 83.3023%;
        }

        .pure-u-7-8,
        .pure-u-21-24 {
            width: 87.5%;
            *width: 87.469%;
        }

        .pure-u-11-12,
        .pure-u-22-24 {
            width: 91.6667%;
            *width: 91.6357%;
        }

        .pure-u-23-24 {
            width: 95.8333%;
            *width: 95.8023%;
        }

        .pure-u-1,
        .pure-u-1-1,
        .pure-u-5-5,
        .pure-u-24-24 {
            width: 100%;
        }

        @media screen and (min-width: 35.5em) {
            .pure-u-sm-1,
            .pure-u-sm-1-1,
            .pure-u-sm-1-2,
            .pure-u-sm-1-3,
            .pure-u-sm-2-3,
            .pure-u-sm-1-4,
            .pure-u-sm-3-4,
            .pure-u-sm-1-5,
            .pure-u-sm-2-5,
            .pure-u-sm-3-5,
            .pure-u-sm-4-5,
            .pure-u-sm-5-5,
            .pure-u-sm-1-6,
            .pure-u-sm-5-6,
            .pure-u-sm-1-8,
            .pure-u-sm-3-8,
            .pure-u-sm-5-8,
            .pure-u-sm-7-8,
            .pure-u-sm-1-12,
            .pure-u-sm-5-12,
            .pure-u-sm-7-12,
            .pure-u-sm-11-12,
            .pure-u-sm-1-24,
            .pure-u-sm-2-24,
            .pure-u-sm-3-24,
            .pure-u-sm-4-24,
            .pure-u-sm-5-24,
            .pure-u-sm-6-24,
            .pure-u-sm-7-24,
            .pure-u-sm-8-24,
            .pure-u-sm-9-24,
            .pure-u-sm-10-24,
            .pure-u-sm-11-24,
            .pure-u-sm-12-24,
            .pure-u-sm-13-24,
            .pure-u-sm-14-24,
            .pure-u-sm-15-24,
            .pure-u-sm-16-24,
            .pure-u-sm-17-24,
            .pure-u-sm-18-24,
            .pure-u-sm-19-24,
            .pure-u-sm-20-24,
            .pure-u-sm-21-24,
            .pure-u-sm-22-24,
            .pure-u-sm-23-24,
            .pure-u-sm-24-24 {
                display: inline-block;
                *display: inline;
                zoom: 1;
                letter-spacing: normal;
                word-spacing: normal;
                vertical-align: top;
                text-rendering: auto;
            }

            .pure-u-sm-1-24 {
                width: 4.1667%;
                *width: 4.1357%;
            }

            .pure-u-sm-1-12,
            .pure-u-sm-2-24 {
                width: 8.3333%;
                *width: 8.3023%;
            }

            .pure-u-sm-1-8,
            .pure-u-sm-3-24 {
                width: 12.5%;
                *width: 12.469%;
            }

            .pure-u-sm-1-6,
            .pure-u-sm-4-24 {
                width: 16.6667%;
                *width: 16.6357%;
            }

            .pure-u-sm-1-5 {
                width: 20%;
                *width: 19.969%;
            }

            .pure-u-sm-5-24 {
                width: 20.8333%;
                *width: 20.8023%;
            }

            .pure-u-sm-1-4,
            .pure-u-sm-6-24 {
                width: 25%;
                *width: 24.969%;
            }

            .pure-u-sm-7-24 {
                width: 29.1667%;
                *width: 29.1357%;
            }

            .pure-u-sm-1-3,
            .pure-u-sm-8-24 {
                width: 33.3333%;
                *width: 33.3023%;
            }

            .pure-u-sm-3-8,
            .pure-u-sm-9-24 {
                width: 37.5%;
                *width: 37.469%;
            }

            .pure-u-sm-2-5 {
                width: 40%;
                *width: 39.969%;
            }

            .pure-u-sm-5-12,
            .pure-u-sm-10-24 {
                width: 41.6667%;
                *width: 41.6357%;
            }

            .pure-u-sm-11-24 {
                width: 45.8333%;
                *width: 45.8023%;
            }

            .pure-u-sm-1-2,
            .pure-u-sm-12-24 {
                width: 50%;
                *width: 49.969%;
            }

            .pure-u-sm-13-24 {
                width: 54.1667%;
                *width: 54.1357%;
            }

            .pure-u-sm-7-12,
            .pure-u-sm-14-24 {
                width: 58.3333%;
                *width: 58.3023%;
            }

            .pure-u-sm-3-5 {
                width: 60%;
                *width: 59.969%;
            }

            .pure-u-sm-5-8,
            .pure-u-sm-15-24 {
                width: 62.5%;
                *width: 62.469%;
            }

            .pure-u-sm-2-3,
            .pure-u-sm-16-24 {
                width: 66.6667%;
                *width: 66.6357%;
            }

            .pure-u-sm-17-24 {
                width: 70.8333%;
                *width: 70.8023%;
            }

            .pure-u-sm-3-4,
            .pure-u-sm-18-24 {
                width: 75%;
                *width: 74.969%;
            }

            .pure-u-sm-19-24 {
                width: 79.1667%;
                *width: 79.1357%;
            }

            .pure-u-sm-4-5 {
                width: 80%;
                *width: 79.969%;
            }

            .pure-u-sm-5-6,
            .pure-u-sm-20-24 {
                width: 83.3333%;
                *width: 83.3023%;
            }

            .pure-u-sm-7-8,
            .pure-u-sm-21-24 {
                width: 87.5%;
                *width: 87.469%;
            }

            .pure-u-sm-11-12,
            .pure-u-sm-22-24 {
                width: 91.6667%;
                *width: 91.6357%;
            }

            .pure-u-sm-23-24 {
                width: 95.8333%;
                *width: 95.8023%;
            }

            .pure-u-sm-1,
            .pure-u-sm-1-1,
            .pure-u-sm-5-5,
            .pure-u-sm-24-24 {
                width: 100%;
            }
        }

        @media screen and (min-width: 48em) {
            .pure-u-md-1,
            .pure-u-md-1-1,
            .pure-u-md-1-2,
            .pure-u-md-1-3,
            .pure-u-md-2-3,
            .pure-u-md-1-4,
            .pure-u-md-3-4,
            .pure-u-md-1-5,
            .pure-u-md-2-5,
            .pure-u-md-3-5,
            .pure-u-md-4-5,
            .pure-u-md-5-5,
            .pure-u-md-1-6,
            .pure-u-md-5-6,
            .pure-u-md-1-8,
            .pure-u-md-3-8,
            .pure-u-md-5-8,
            .pure-u-md-7-8,
            .pure-u-md-1-12,
            .pure-u-md-5-12,
            .pure-u-md-7-12,
            .pure-u-md-11-12,
            .pure-u-md-1-24,
            .pure-u-md-2-24,
            .pure-u-md-3-24,
            .pure-u-md-4-24,
            .pure-u-md-5-24,
            .pure-u-md-6-24,
            .pure-u-md-7-24,
            .pure-u-md-8-24,
            .pure-u-md-9-24,
            .pure-u-md-10-24,
            .pure-u-md-11-24,
            .pure-u-md-12-24,
            .pure-u-md-13-24,
            .pure-u-md-14-24,
            .pure-u-md-15-24,
            .pure-u-md-16-24,
            .pure-u-md-17-24,
            .pure-u-md-18-24,
            .pure-u-md-19-24,
            .pure-u-md-20-24,
            .pure-u-md-21-24,
            .pure-u-md-22-24,
            .pure-u-md-23-24,
            .pure-u-md-24-24 {
                display: inline-block;
                *display: inline;
                zoom: 1;
                letter-spacing: normal;
                word-spacing: normal;
                vertical-align: top;
                text-rendering: auto;
            }

            .pure-u-md-1-24 {
                width: 4.1667%;
                *width: 4.1357%;
            }

            .pure-u-md-1-12,
            .pure-u-md-2-24 {
                width: 8.3333%;
                *width: 8.3023%;
            }

            .pure-u-md-1-8,
            .pure-u-md-3-24 {
                width: 12.5%;
                *width: 12.469%;
            }

            .pure-u-md-1-6,
            .pure-u-md-4-24 {
                width: 16.6667%;
                *width: 16.6357%;
            }

            .pure-u-md-1-5 {
                width: 20%;
                *width: 19.969%;
            }

            .pure-u-md-5-24 {
                width: 20.8333%;
                *width: 20.8023%;
            }

            .pure-u-md-1-4,
            .pure-u-md-6-24 {
                width: 25%;
                *width: 24.969%;
            }

            .pure-u-md-7-24 {
                width: 29.1667%;
                *width: 29.1357%;
            }

            .pure-u-md-1-3,
            .pure-u-md-8-24 {
                width: 33.3333%;
                *width: 33.3023%;
            }

            .pure-u-md-3-8,
            .pure-u-md-9-24 {
                width: 37.5%;
                *width: 37.469%;
            }

            .pure-u-md-2-5 {
                width: 40%;
                *width: 39.969%;
            }

            .pure-u-md-5-12,
            .pure-u-md-10-24 {
                width: 41.6667%;
                *width: 41.6357%;
            }

            .pure-u-md-11-24 {
                width: 45.8333%;
                *width: 45.8023%;
            }

            .pure-u-md-1-2,
            .pure-u-md-12-24 {
                width: 50%;
                *width: 49.969%;
            }

            .pure-u-md-13-24 {
                width: 54.1667%;
                *width: 54.1357%;
            }

            .pure-u-md-7-12,
            .pure-u-md-14-24 {
                width: 58.3333%;
                *width: 58.3023%;
            }

            .pure-u-md-3-5 {
                width: 60%;
                *width: 59.969%;
            }

            .pure-u-md-5-8,
            .pure-u-md-15-24 {
                width: 62.5%;
                *width: 62.469%;
            }

            .pure-u-md-2-3,
            .pure-u-md-16-24 {
                width: 66.6667%;
                *width: 66.6357%;
            }

            .pure-u-md-17-24 {
                width: 70.8333%;
                *width: 70.8023%;
            }

            .pure-u-md-3-4,
            .pure-u-md-18-24 {
                width: 75%;
                *width: 74.969%;
            }

            .pure-u-md-19-24 {
                width: 79.1667%;
                *width: 79.1357%;
            }

            .pure-u-md-4-5 {
                width: 80%;
                *width: 79.969%;
            }

            .pure-u-md-5-6,
            .pure-u-md-20-24 {
                width: 83.3333%;
                *width: 83.3023%;
            }

            .pure-u-md-7-8,
            .pure-u-md-21-24 {
                width: 87.5%;
                *width: 87.469%;
            }

            .pure-u-md-11-12,
            .pure-u-md-22-24 {
                width: 91.6667%;
                *width: 91.6357%;
            }

            .pure-u-md-23-24 {
                width: 95.8333%;
                *width: 95.8023%;
            }

            .pure-u-md-1,
            .pure-u-md-1-1,
            .pure-u-md-5-5,
            .pure-u-md-24-24 {
                width: 100%;
            }
        }

        @media screen and (min-width: 64em) {
            .pure-u-lg-1,
            .pure-u-lg-1-1,
            .pure-u-lg-1-2,
            .pure-u-lg-1-3,
            .pure-u-lg-2-3,
            .pure-u-lg-1-4,
            .pure-u-lg-3-4,
            .pure-u-lg-1-5,
            .pure-u-lg-2-5,
            .pure-u-lg-3-5,
            .pure-u-lg-4-5,
            .pure-u-lg-5-5,
            .pure-u-lg-1-6,
            .pure-u-lg-5-6,
            .pure-u-lg-1-8,
            .pure-u-lg-3-8,
            .pure-u-lg-5-8,
            .pure-u-lg-7-8,
            .pure-u-lg-1-12,
            .pure-u-lg-5-12,
            .pure-u-lg-7-12,
            .pure-u-lg-11-12,
            .pure-u-lg-1-24,
            .pure-u-lg-2-24,
            .pure-u-lg-3-24,
            .pure-u-lg-4-24,
            .pure-u-lg-5-24,
            .pure-u-lg-6-24,
            .pure-u-lg-7-24,
            .pure-u-lg-8-24,
            .pure-u-lg-9-24,
            .pure-u-lg-10-24,
            .pure-u-lg-11-24,
            .pure-u-lg-12-24,
            .pure-u-lg-13-24,
            .pure-u-lg-14-24,
            .pure-u-lg-15-24,
            .pure-u-lg-16-24,
            .pure-u-lg-17-24,
            .pure-u-lg-18-24,
            .pure-u-lg-19-24,
            .pure-u-lg-20-24,
            .pure-u-lg-21-24,
            .pure-u-lg-22-24,
            .pure-u-lg-23-24,
            .pure-u-lg-24-24 {
                display: inline-block;
                *display: inline;
                zoom: 1;
                letter-spacing: normal;
                word-spacing: normal;
                vertical-align: top;
                text-rendering: auto;
            }

            .pure-u-lg-1-24 {
                width: 4.1667%;
                *width: 4.1357%;
            }

            .pure-u-lg-1-12,
            .pure-u-lg-2-24 {
                width: 8.3333%;
                *width: 8.3023%;
            }

            .pure-u-lg-1-8,
            .pure-u-lg-3-24 {
                width: 12.5%;
                *width: 12.469%;
            }

            .pure-u-lg-1-6,
            .pure-u-lg-4-24 {
                width: 16.6667%;
                *width: 16.6357%;
            }

            .pure-u-lg-1-5 {
                width: 20%;
                *width: 19.969%;
            }

            .pure-u-lg-5-24 {
                width: 20.8333%;
                *width: 20.8023%;
            }

            .pure-u-lg-1-4,
            .pure-u-lg-6-24 {
                width: 25%;
                *width: 24.969%;
            }

            .pure-u-lg-7-24 {
                width: 29.1667%;
                *width: 29.1357%;
            }

            .pure-u-lg-1-3,
            .pure-u-lg-8-24 {
                width: 33.3333%;
                *width: 33.3023%;
            }

            .pure-u-lg-3-8,
            .pure-u-lg-9-24 {
                width: 37.5%;
                *width: 37.469%;
            }

            .pure-u-lg-2-5 {
                width: 40%;
                *width: 39.969%;
            }

            .pure-u-lg-5-12,
            .pure-u-lg-10-24 {
                width: 41.6667%;
                *width: 41.6357%;
            }

            .pure-u-lg-11-24 {
                width: 45.8333%;
                *width: 45.8023%;
            }

            .pure-u-lg-1-2,
            .pure-u-lg-12-24 {
                width: 50%;
                *width: 49.969%;
            }

            .pure-u-lg-13-24 {
                width: 54.1667%;
                *width: 54.1357%;
            }

            .pure-u-lg-7-12,
            .pure-u-lg-14-24 {
                width: 58.3333%;
                *width: 58.3023%;
            }

            .pure-u-lg-3-5 {
                width: 60%;
                *width: 59.969%;
            }

            .pure-u-lg-5-8,
            .pure-u-lg-15-24 {
                width: 62.5%;
                *width: 62.469%;
            }

            .pure-u-lg-2-3,
            .pure-u-lg-16-24 {
                width: 66.6667%;
                *width: 66.6357%;
            }

            .pure-u-lg-17-24 {
                width: 70.8333%;
                *width: 70.8023%;
            }

            .pure-u-lg-3-4,
            .pure-u-lg-18-24 {
                width: 75%;
                *width: 74.969%;
            }

            .pure-u-lg-19-24 {
                width: 79.1667%;
                *width: 79.1357%;
            }

            .pure-u-lg-4-5 {
                width: 80%;
                *width: 79.969%;
            }

            .pure-u-lg-5-6,
            .pure-u-lg-20-24 {
                width: 83.3333%;
                *width: 83.3023%;
            }

            .pure-u-lg-7-8,
            .pure-u-lg-21-24 {
                width: 87.5%;
                *width: 87.469%;
            }

            .pure-u-lg-11-12,
            .pure-u-lg-22-24 {
                width: 91.6667%;
                *width: 91.6357%;
            }

            .pure-u-lg-23-24 {
                width: 95.8333%;
                *width: 95.8023%;
            }

            .pure-u-lg-1,
            .pure-u-lg-1-1,
            .pure-u-lg-5-5,
            .pure-u-lg-24-24 {
                width: 100%;
            }
        }

        @media screen and (min-width: 80em) {
            .pure-u-xl-1,
            .pure-u-xl-1-1,
            .pure-u-xl-1-2,
            .pure-u-xl-1-3,
            .pure-u-xl-2-3,
            .pure-u-xl-1-4,
            .pure-u-xl-3-4,
            .pure-u-xl-1-5,
            .pure-u-xl-2-5,
            .pure-u-xl-3-5,
            .pure-u-xl-4-5,
            .pure-u-xl-5-5,
            .pure-u-xl-1-6,
            .pure-u-xl-5-6,
            .pure-u-xl-1-8,
            .pure-u-xl-3-8,
            .pure-u-xl-5-8,
            .pure-u-xl-7-8,
            .pure-u-xl-1-12,
            .pure-u-xl-5-12,
            .pure-u-xl-7-12,
            .pure-u-xl-11-12,
            .pure-u-xl-1-24,
            .pure-u-xl-2-24,
            .pure-u-xl-3-24,
            .pure-u-xl-4-24,
            .pure-u-xl-5-24,
            .pure-u-xl-6-24,
            .pure-u-xl-7-24,
            .pure-u-xl-8-24,
            .pure-u-xl-9-24,
            .pure-u-xl-10-24,
            .pure-u-xl-11-24,
            .pure-u-xl-12-24,
            .pure-u-xl-13-24,
            .pure-u-xl-14-24,
            .pure-u-xl-15-24,
            .pure-u-xl-16-24,
            .pure-u-xl-17-24,
            .pure-u-xl-18-24,
            .pure-u-xl-19-24,
            .pure-u-xl-20-24,
            .pure-u-xl-21-24,
            .pure-u-xl-22-24,
            .pure-u-xl-23-24,
            .pure-u-xl-24-24 {
                display: inline-block;
                *display: inline;
                zoom: 1;
                letter-spacing: normal;
                word-spacing: normal;
                vertical-align: top;
                text-rendering: auto;
            }

            .pure-u-xl-1-24 {
                width: 4.1667%;
                *width: 4.1357%;
            }

            .pure-u-xl-1-12,
            .pure-u-xl-2-24 {
                width: 8.3333%;
                *width: 8.3023%;
            }

            .pure-u-xl-1-8,
            .pure-u-xl-3-24 {
                width: 12.5%;
                *width: 12.469%;
            }

            .pure-u-xl-1-6,
            .pure-u-xl-4-24 {
                width: 16.6667%;
                *width: 16.6357%;
            }

            .pure-u-xl-1-5 {
                width: 20%;
                *width: 19.969%;
            }

            .pure-u-xl-5-24 {
                width: 20.8333%;
                *width: 20.8023%;
            }

            .pure-u-xl-1-4,
            .pure-u-xl-6-24 {
                width: 25%;
                *width: 24.969%;
            }

            .pure-u-xl-7-24 {
                width: 29.1667%;
                *width: 29.1357%;
            }

            .pure-u-xl-1-3,
            .pure-u-xl-8-24 {
                width: 33.3333%;
                *width: 33.3023%;
            }

            .pure-u-xl-3-8,
            .pure-u-xl-9-24 {
                width: 37.5%;
                *width: 37.469%;
            }

            .pure-u-xl-2-5 {
                width: 40%;
                *width: 39.969%;
            }

            .pure-u-xl-5-12,
            .pure-u-xl-10-24 {
                width: 41.6667%;
                *width: 41.6357%;
            }

            .pure-u-xl-11-24 {
                width: 45.8333%;
                *width: 45.8023%;
            }

            .pure-u-xl-1-2,
            .pure-u-xl-12-24 {
                width: 50%;
                *width: 49.969%;
            }

            .pure-u-xl-13-24 {
                width: 54.1667%;
                *width: 54.1357%;
            }

            .pure-u-xl-7-12,
            .pure-u-xl-14-24 {
                width: 58.3333%;
                *width: 58.3023%;
            }

            .pure-u-xl-3-5 {
                width: 60%;
                *width: 59.969%;
            }

            .pure-u-xl-5-8,
            .pure-u-xl-15-24 {
                width: 62.5%;
                *width: 62.469%;
            }

            .pure-u-xl-2-3,
            .pure-u-xl-16-24 {
                width: 66.6667%;
                *width: 66.6357%;
            }

            .pure-u-xl-17-24 {
                width: 70.8333%;
                *width: 70.8023%;
            }

            .pure-u-xl-3-4,
            .pure-u-xl-18-24 {
                width: 75%;
                *width: 74.969%;
            }

            .pure-u-xl-19-24 {
                width: 79.1667%;
                *width: 79.1357%;
            }

            .pure-u-xl-4-5 {
                width: 80%;
                *width: 79.969%;
            }

            .pure-u-xl-5-6,
            .pure-u-xl-20-24 {
                width: 83.3333%;
                *width: 83.3023%;
            }

            .pure-u-xl-7-8,
            .pure-u-xl-21-24 {
                width: 87.5%;
                *width: 87.469%;
            }

            .pure-u-xl-11-12,
            .pure-u-xl-22-24 {
                width: 91.6667%;
                *width: 91.6357%;
            }

            .pure-u-xl-23-24 {
                width: 95.8333%;
                *width: 95.8023%;
            }

            .pure-u-xl-1,
            .pure-u-xl-1-1,
            .pure-u-xl-5-5,
            .pure-u-xl-24-24 {
                width: 100%;
            }
        }

        .qmod-btn {
            background: #ddd;
            padding: 10px;
            color: #000;
            font: 14px Arial, Tahoma, serif;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid #ddd;
            outline: 0;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .qmod-btn:active {
            outline: 0;
        }

        .qmod-btn.qmod-btn-main {
            color: #fff;
            background-color: #0b73be;
            border-color: #0b73be;
        }

        .qmod-btn.qmod-btn-main:hover {
            background-color: #0c82d6;
            border-color: #0c82d6;
            color: #fff;
        }

        .qmod-btn.qmod-btn-main:active {
            background-color: #0a64a6;
            border-color: #0a64a6;
            color: #fff;
        }

        .qmod-btn.qmod-btn-main.qmod-btn-active {
            background-color: #08568e;
            border-color: #08568e;
            color: #fff;
        }

        .qmod-btn.qmod-btn-alt {
            color: #fff;
            background-color: #000;
            border-color: #000;
        }

        .qmod-btn.qmod-btn-alt:hover {
            background-color: #333;
            border-color: #333;
            color: #fff;
        }

        .qmod-btn.qmod-btn-alt:active {
            background-color: grey;
            border-color: grey;
            color: #fff;
        }

        .qmod-btn.qmod-btn-alt.qmod-btn-active {
            background-color: #000;
            border-color: #000;
            color: #fff;
        }

        .qmod-btn.qmod-btn-invert {
            color: #0b73be;
            background-color: #fff;
            border-color: #0b73be;
        }

        .qmod-btn.qmod-btn-invert:hover {
            background-color: #0b73be;
            color: #fff;
            border-color: #0b73be;
        }

        .qmod-btn.qmod-btn-invert:active {
            background-color: #0a64a6;
            border-color: #0a64a6;
            color: #fff;
        }

        .qmod-btn.qmod-btn-invert.qmod-btn-active {
            background-color: #e6e6e6;
            border-color: #e6e6e6;
            color: #000;
        }

        .qmod-btn.qmod-btn-rnd {
            border-radius: 5px;
        }

        .qmod-btn.qmod-btn-shadow {
            -webkit-box-shadow: 3px 3px 5px 0 rgba(100, 100, 100, 0.6);
            box-shadow: 3px 3px 5px 0 rrgba(100, 100, 100, 0.6);
        }

        .qmod-btn.qmod-btn-glow {
            -webkit-box-shadow: 0 0 3px 2px rgba(100, 100, 100, 0.6);
            box-shadow: 0 0 3px 2px rgba(100, 100, 100, 0.6);
        }

        .qmod-btn:hover {
            background-color: #eaeaea;
            border-color: #eaeaea;
            color: #000;
        }

        .qmod-btn:active {
            background-color: #d0d0d0;
            border-color: #d0d0d0;
            color: #000;
        }

        .qmod-btn.qmod-btn-active {
            background-color: #c4c4c4;
            border-color: #c4c4c4;
            color: #000;
        }

        .qmod-btn.qmod-btn-link {
            border: 0;
            padding: 0;
            text-decoration: underline;
            color: #0b73be;
            background-color: transparent;
        }

        .qmod-btn.qmod-btn-link:hover {
            color: #0e90ee;
        }

        .qmod-btn-ok {
            margin: 0 20px 20px 0;
        }

        .qmod-btn.qmod-green {
            vertical-align: top;
            color: white;
            text-align: center;
            background: #27ae60;
            border: 0;
            cursor: pointer;
            min-width: 70px;
            border-radius: 4px;
        }

        .qmod-btn.qmod-green:hover {
            background: #36d278;
        }

        .qmod-btn.qmod-green:active {
            top: 1px;
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .qmod-btn.qmod-lightblue {
            vertical-align: top;
            color: white;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
            background: #3498db;
            border: 0;
            border-bottom: 2px solid #2a8bcc;
            cursor: pointer;
            -webkit-box-shadow: inset 0 -2px #2a8bcc;
            box-shadow: inset 0 -2px #2a8bcc;
        }

        .qmod-btn.qmod-lightblue:active {
            top: 1px;
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .fa + .qmod-btn-text {
            margin-left: 3px;
        }

        .qmod-btn.qmod-darkblue {
            vertical-align: top;
            color: white;
            text-align: center;
            background: #2980b9;
            border: 0;
            cursor: pointer;
            min-width: 70px;
            border-radius: 4px;
        }

        .qmod-btn.qmod-darkblue:hover {
            background: #409ad5;
        }

        .qmod-btn.qmod-darkblue:active {
            top: 1px;
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .qmod-btn.qmod-red {
            vertical-align: top;
            color: white;
            text-align: center;
            background: #c0392b;
            border: 0;
            cursor: pointer;
            min-width: 70px;
            border-radius: 4px;
        }

        .qmod-btn.qmod-red:hover {
            background: #d65548;
        }

        .qmod-btn.qmod-red:active {
            top: 1px;
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .qmod-btn.qmod-dark {
            vertical-align: top;
            color: white;
            text-align: center;
            background: #454545;
            border: 0;
            cursor: pointer;
            min-width: 70px;
            border-radius: 4px;
        }

        .qmod-btn.qmod-dark:hover {
            background: #5f5f5f;
        }

        .qmod-btn.qmod-dark:active {
            top: 1px;
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .qmod-btn.qmod-disabled {
            box-shadow: 0px -2px #666 inset;
            pointer-events: none;
            cursor: not-allowed;
            background-color: #BDC3C7;
            border-bottom: 2px solid #666;
            text-shadow: none;
            opacity: 0.6;
            color: #222;
        }

        .qmod-btn.qmod-disabled:hover {
            background-color: #BDC3C7;
        }

        .qmod-button-group {
            display: table;
            border-collapse: collapse;
            table-layout: fixed;
            width: 100%;
        }

        .qmod-button-group li {
            display: table-cell;
            border-right: 1px solid #ccc;
        }

        .qmod-button-group li button {
            width: 100%;
        }

        .qmod-button-group li:not(:empty) button {
            border-top-left-radius: 7px;
            border-bottom-left-radius: 7px;
        }

        .qmod-button-group li button,
        .qmod-button-group li:not(:empty) ~ li button {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .qmod-button-group li:last-child {
            border-right: 0;
        }

        .qmod-button-group li:last-child button {
            border-top-right-radius: 7px;
            border-bottom-right-radius: 7px;
        }

        .qmod-ui-tool {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            letter-spacing: normal;
        }

        .qmod-ui-tool a {
            color: #0b73be;
            text-decoration: underline;
            cursor: pointer;
        }

        .qmod-ui-tool .qmod-postfix-script,
        .qmod-ui-tool .qmod-prefix-script {
            font-size: 50%;
            vertical-align: super;
            top: 0;
        }

        .qmod-ui-tool .dataTables_info,
        .qmod-ui-tool .dataTables_paginate {
            padding: 20px 25px 0px 25px;
        }

        .copied-effect {
            opacity: 0.3;
        }

        .qmod-story {
            transition-property: background-color;
            transition-duration: 0.3s;
            transition-timing-function: ease;
        }

        .qmod-ent-item + .qmod-ent-item::before,
        .qmod-ent-item-optional-last::before {
            content: '|';
            padding: 0 4px;
            font-size: 85%;
            vertical-align: text-top;
            color: #666;
            line-height: normal;
        }

        .qmod-modal-overlay {
            width: 100vw;
            width: calc(100vw - (100vw - 100%));
            height: 100vh;
            top: 0;
            left: 0;
            display: flex;
            z-index: 9999;
            position: fixed;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.4);
        }

        .qmod-ui-modal {
            z-index: 9998;
            border: 1px solid #ccc;
            background-color: #fff;
            border-radius: 0;
            visibility: visible;
            max-width: 1024px;
            margin: auto;
            max-height: 98%;
            min-height: 48%;
            width: 100%;
            overflow: auto;
        }

        .qmod-ui-modal .qmod-modal-loading {
            text-align: center;
            height: 60px;
        }

        .qmod-ui-modal .qmod-ui-modal-titlebar {
            padding: 5px;
            padding-left: 20px;
            border-bottom: 1px solid #ccc;
            background-color: #f0f0f0;
            line-height: 24px;
        }

        .qmod-ui-modal .qmod-ui-modal-titlebar .qmod-ui-modal-title {
            float: left;
            font-size: 1.5em;
        }

        .qmod-ui-modal .qmod-ui-modal-titlebar .qmod-ui-titlebar-buttons {
            float: right;
        }

        .qmod-ui-modal .qmod-ui-modal-titlebar .qmod-ui-titlebar-buttons .qmod-btn {
            padding: 3px 5px;
        }

        .qmod-ui-modal .qmod-ui-modal-titlebar .qmod-icon-cancel:before {
            margin: 0;
        }

        .qmod-ui-modal .qmod-ui-modal-titlebar:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }

        .qmod-ui-modal .qmod-ui-modal-body {
            padding: 20px;
            cursor: default;
        }

        .qmod-ui-modal .qmod-ui-modal-body .qmod-heading {
            display: block !important;
        }

        .qmod-block-settings {
            float: right;
        }

        .qmod-dd-cont {
            position: relative;
            color: #6e6e6e;
            font-size: 14px;
            display: inline-block;
            clear: both;
        }

        .qmod-dd-cont .qmod-dd-header {
            cursor: pointer;
        }

        .qmod-dd-cont .qmod-dd-header .qmod-dd-header-icon {
            font-size: 10px;
            vertical-align: 2px;
            padding-left: 5px;
        }

        .qmod-dd-cont .qmod-dd-header .qmod-dd-header-icon .qmod-fa-icon {
            transition: 150ms;
        }

        .qmod-dd-cont .qmod-dd-header .qmod-dd-iopen {
            transform: rotate(180deg);
            color: #0b92e7;
        }

        .qmod-dd-cont .qmod-dd-header .qmod-dd-header-name {
            transition: 150ms;
            padding-right: 5px;
        }

        .qmod-dd-cont .qmod-dd-header .qmod-dd-header-lbl {
            transition: 150ms;
            padding: 0;
            border-bottom: 1px solid;
        }

        .qmod-dd-cont .qmod-dd-ul {
            border: 1px solid #404040;
            background-color: #f0f0f0;
            color: #404040;
            right: 0;
            top: 100%;
            position: absolute;
            clear: both;
            margin: 0;
            padding: 0;
            list-style-type: none;
            z-index: -1;
            opacity: 0;
            transition: opacity 300ms ease-in-out;
        }

        .qmod-dd-cont .qmod-dd-ul.qmod-dd-open {
            opacity: 1;
            transition-delay: 100ms;
            z-index: 9999;
        }

        .qmod-dd-cont .qmod-dd-li {
            cursor: pointer;
            display: block;
        }

        .qmod-dd-cont .qmod-dd-li .qmod-dd-li-lbl {
            display: inline-block;
            padding: 2px 5px;
        }

        .qmod-dd-cont .qmod-dd-li + .qmod-dd-li {
            border-top: 1px solid #FFFFFF;
        }

        .qmod-dd-cont .qmod-dd-li.qmod-dd-li-active {
            color: #fff;
            background-color: #404040;
            cursor: default;
        }

        .qmod-dd-cont .qmod-dd-li:hover {
            color: #fff;
            background-color: #505050;
        }

        .qmod-group:after {
            content: "";
            display: table;
            clear: both;
        }

        .qmod-table {
            width: 100%;
            border-collapse: collapse;
        }

        .qmod-heading {
            font-weight: 500;
            margin: 0;
            padding: 5px 20px;
        }

        .qmod-heading:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }

        h1.qmod-heading {
            font-size: 140%;
        }

        h2.qmod-heading {
            font-size: 135%;
        }

        h3.qmod-heading {
            font-size: 130%;
        }

        h4.qmod-heading {
            font-size: 125%;
        }

        h5.qmod-heading {
            font-size: 120%;
        }

        h6.qmod-heading {
            font-size: 110%;
        }

        .qmod-heading i + span {
            padding-left: 4px;
        }

        .qmod-heading.qmod-hline {
            border-bottom: 1px solid #ccc;
            padding-bottom: .1em;
        }

        .qmod-hbg {
            background-color: #f0f0f0;
            border: 0;
        }

        .qmod-heading.qmod-hrnd {
            background-color: #f0f0f0;
            padding: .3em;
            border: 0;
            border-radius: 10px;
        }

        .qmod-heading.qmod-hrnd.qmod-hstag1 {
            border-radius: 10px 0;
        }

        .qmod-heading.qmod-hrnd.qmod-hstag2 {
            border-radius: 0 10px;
        }

        .qmod-heading.qmod-hrnd.qmod-hrtop {
            border-radius: 10px 10px 0 0;
        }

        .qmod-heading.qmod-hrnd.qmod-hrleft {
            border-radius: 10px 0 0 10px;
        }

        .qmod-heading.qmod-hrnd.qmod-hrright {
            border-radius: 0 10px 10px 0;
        }

        .qmod-heading.qmod-hrnd.qmod-hrbot {
            border-radius: 0 0 10px 10px;
        }

        h3[class*="qmod-date-"] {
            background-color: transparent;
        }

        .qmod-date- * {
            background-color: transparent;
        }

        .qmod-paginator {
            text-align: center;
        }

        .qmod-paginator .qmod-paginator-prev,
        .qmod-paginator .qmod-paginator-first {
            float: left;
        }

        .qmod-paginator .qmod-paginator-next,
        .qmod-paginator .qmod-paginator-last {
            float: right;
        }

        .qmod-paginator .qmod-btn {
            padding: 5px;
        }

        .qmod-paginator:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }

        .qmod-pagin-bottom {
            margin-top: 15px;
        }

        .qmod-pagin-top {
            margin-bottom: 15px;
        }

        .qmod-entitlement {
            font-style: oblique;
            text-transform: uppercase;
            font-size: 7pt;
        }

        .qmod-ch-up {
            color: #080;
        }

        .qmod-ch-down {
            color: #ff0000;
        }

        .qmod-pull-right {
            text-align: right;
        }

        .qmod-img-resize {
            width: 100%;
        }

        .loading-indicator {
            font-family: qmod;
            color: #bbb;
        }

        .loading-indicator:before {
            content: '\e945';
        }

        .qmod-loading-indicator {
            position: fixed;
            z-index: 999999;
            font-family: qmod;
            font-size: 52px;
            width: 100%;
            height: 100%;
            color: #a6a6a6;
            top: 42%;
            left: 0;
            text-align: center;
        }

        .qmod-loading-overlay {
            width: 100%;
            height: 100%;
            background: #fff;
            top: 0;
            left: 0;
            opacity: .8;
            z-index: 2900;
            display: none;
            position: fixed;
        }

        .qmod-resize-handler {
            width: 0;
            height: 0;
            border-top: 12px solid transparent;
            border-left: 12px solid transparent;
            border-bottom: 12px solid #ccc;
            margin-left: 10px;
            cursor: nwse-resize;
        }

        .qmod-file-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .qmod-file-list li {
            padding: 10px;
            border-bottom: 1px solid #d9d9d9;
        }

        .qmod-file-list li:last-child {
            border-bottom: 0;
        }

        .qmod-block-wrapper {
            margin-bottom: 20px;
            background-color: #FFFFFF;
        }

        .qmod-block-wrapper .qmod-heading i + span {
            padding-left: 4px;
        }

        .qmod-block-wrapper .qmod-block-wrapper-header {
            padding-left: 15px;
            padding-right: 15px;
        }

        .qmod-block-wrapper .qmod-block-wrapper-body {
            padding-left: 15px;
            padding-right: 15px;
            position: relative;
        }

        @media screen and (max-width: 35.5em) {
            .qmod-block-wrapper .qmod-block-wrapper-body {
                padding-left: 0;
                padding-right: 0;
            }
        }

        .qmod_realtime {
            color: #008000;
            font-style: italic;
        }

        .qmod_norealtime {
            color: #465665;
            font-style: italic;
        }

        .qmod-disclaimer {
            padding: 10px;
            padding-bottom: 0;
            text-align: left;
            font-size: 80%;
            min-height: 25px;
        }

        .qmod-disclaimer .qmod-disclaimer-logo {
            float: right;
            color: #333;
            font-family: Verdana, "Trebuchet MS", Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 20px;
            letter-spacing: -0.06em;
            display: inline-block;
            transform: scale(1.2, 1);
            background: #FFF none repeat scroll 0% 0%;
            width: auto;
            margin-right: 1.2em;
            margin-left: 20px;
        }

        .qmod-disclaimer .qmod-disclaimer-logo a {
            color: #333;
            text-decoration: none;
        }

        .qmod-disclaimer .qmod-disclaimer-logo a span {
            color: #0071BB;
        }

        .qmod-tab-container {
            display: inline-block;
            position: relative;
            top: 1px;
            padding: 0;
            width: 100%;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .qmod-tab-container .qmod-tab-list {
            display: inline-block;
            padding: 0;
            margin: 0;
        }

        .qmod-tab-container .qmod-tab-list .qmod-tab-item {
            list-style: none;
            display: inline-block;
            padding: 0;
            border-color: #DDD;
            border-width: 1px;
            border-style: solid;
            border-radius: 4px 4px 0 0;
            border-bottom-color: transparent;
            margin: 5px 0 0 5px;
            background-color: #eaeef1;
            text-align: center;
        }

        .qmod-tab-container .qmod-tab-list .qmod-tab-item .qmod-tab-item-link {
            color: inherit;
            text-decoration: none;
        }

        .qmod-tab-container .qmod-tab-list .qmod-tab-item .qmod-tab-item-link .qmod-tab-text {
            padding: 8px 16px;
            min-width: 100px;
        }

        .qmod-tab-container .qmod-tab-list .qmod-tab-item.qmod-active {
            background-color: #fff;
            border-bottom-width: 2px;
            font-weight: 700;
        }

        .qmod-tab-container-bottom {
            border-bottom-color: #DDD;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            width: 100%;
        }

        .qmod-invalid {
            text-align: center;
            padding: 20px;
        }

        .qmod-dropdown-label {
            padding-right: 15px;
            padding-top: 3px;
            display: inline-block;
        }

        .qmod-dropdown-label.qmod-block-label {
            display: block;
            padding-bottom: 4px;
            padding-top: 0;
        }

        div.qmod-dropdown {
            position: relative;
            min-width: 165px;
            display: inline-block;
            text-align: left;
        }

        div.qmod-dropdown:hover ul.qmod-dropdown-menu {
            display: block;
        }

        div.qmod-dropdown:hover .qmod-dropdown_toggle {
            background: #DDD none repeat scroll 0% 0%;
            text-decoration: none;
        }

        .qmod-dropdown-menu {
            left: auto;
            min-width: 100%;
            padding: 0;
            margin: 0;
            position: absolute;
            list-style: outside none none;
            z-index: 1000;
            display: none;
            border: 1px solid #DDD;
            background-color: #FFF;
            max-height: 400px;
            overflow-y: auto;
        }

        .qmod-dropdown-menu li.qmod-custom.qmod-first {
            border-top: 1px solid black;
        }

        .qmod-dropdown-menu li > a {
            text-decoration: none;
            display: block;
            color: #333;
            white-space: nowrap;
            line-height: 35px;
            padding: 0 12px;
        }

        .qmod-dropdown-sm.qmod-dropdown-menu li > a {
            line-height: 25px;
        }

        .qmod-dropdown-menu li > a:hover {
            background-color: #DDD;
            text-decoration: none;
        }

        .qmod-dropdown-menu li > a.qmod-active {
            background-color: #0b73be;
            color: #fff;
        }

        .qmod-dropdown-menu.qmod-dropdown-sm input[type="text"] {
            padding: 5px;
        }

        .qmod-dropdown-menu.qmod-dropdown-sm .inner-addon i {
            padding: 5px;
        }

        .qmod-dropdown-menu.qmod-dropdown-menu-toggles li {
            width: 100%;
        }

        .qmod-dropdown-menu.qmod-dropdown-menu-toggles li > div {
            padding: 5px 10px;
        }

        .qmod-dropdown-menu.qmod-dropdown-menu-toggles li > div .qmod-icon-toggle-icon {
            float: right;
            cursor: pointer;
        }

        a.qmod-dropdown_toggle {
            color: #222;
            background-color: #F0F0F0;
            border: 1px solid #DDD;
            display: block;
            line-height: 30px;
            padding: 0 0 0 12px;
            text-decoration: none;
        }

        a.qmod-dropdown_toggle span {
            padding-right: 10px;
        }

        a.qmod-dropdown_toggle .fa {
            padding-right: 10px;
            line-height: 30px;
            float: right;
        }

        a.qmod-dropdown_toggle .qmod-dd-icon {
            vertical-align: top;
            display: inline-block;
            height: 30px;
            width: 30px;
            text-align: center;
            float: right;
            line-height: 30px;
        }

        a.qmod-dropdown_toggle.qmod-dropdown-sm {
            line-height: 15px;
            padding: 2px 2px 2px 12px;
        }

        a.qmod-dropdown_toggle.qmod-dropdown-sm i {
            height: auto;
            width: auto;
        }

        .qmod-modifiers {
            padding: 10px 20px;
        }

        @media screen and (max-width: 35.5em) {
            .qmod-modifiers {
                padding: 10px 5px;
            }
        }

        .qmod-textr {
            text-align: right;
        }

        .qmod-textl {
            text-align: left;
        }

        .qmod-textc {
            text-align: center;
        }

        div.qmod-label,
        div.qmod-desc {
            padding: 5px 10px;
        }

        .qmod-ui-tool input[type=date],
        .qmod-ui-tool input[type=text],
        .qmod-ui-tool input[type=password] {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            border: solid 1px #cccccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            background-color: #ffffff;
            color: #333;
            transition: border 0.3s;
            width: 100%;
            padding: 10px;
        }

        .qmod-ui-tool .inner-addon {
            position: relative;
        }

        .qmod-btn-icon {
            width: 48%;
            display: inline-block;
        }

        .qmod-ui-tool .inner-addon i {
            position: absolute;
            padding: 11px;
            cursor: pointer;
            transition: all 500ms ease;
        }

        .qmod-ui-tool .inner-addon i:hover {
            color: #0078e7;
            transform: scale3d(1.3, 1.3, 1.3);
        }

        .qmod-ui-tool .left-addon i {
            left: 0px;
        }

        .qmod-ui-tool .right-addon i {
            right: 3px;
            top: 1px;
        }

        .qmod-ui-tool .left-addon input {
            padding-left: 30px;
        }

        .qmod-ui-tool .right-addon input {
            padding-right: 30px;
        }

        .qmod-ui-tool input[type="text"]:focus,
        .qmod-ui-tool input[type="text"].focus {
            border: solid 1px #4D4D4D;
        }

        .qmod-ui-tool input {
            box-sizing: border-box;
            display: block;
        }

        .qmod-animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .qmod-animated.infinite {
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
        }

        .qmod-btn:hover .qmod-animated.infinite {
            animation-iteration-count: 0;
        }

        .qmod-animated.hinge {
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
        }

        @keyframes qmod-pulse {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
            50% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        .qmod-pulse {
            -webkit-animation-name: qmod-pulse;
            animation-name: qmod-pulse;
        }

        .fa-rotate-45 {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .qmod-data-point {
            padding: 5px 10px;
        }

        .qmod-lookup-results tr {
            height: 22px;
        }

        .qm_main {
            margin-bottom: 5px;
        }

        .qmod-symbolhelp-modal {
            z-index: 100000;
        }

        .qmod-tab-header .qmod-tab {
            display: inline-block;
            padding: 5px 15px;
            border: 1px solid;
            border-radius: 3px 3px 0px 0px;
            background-color: #f0f0f0;
            border-color: #E0E0E0;
            cursor: pointer;
        }

        .qmod-tab-header .qmod-tab:hover {
            border-color: #666;
            background-color: #E0E0E0;
        }

        .qmod-tab-header .qmod-tab.qmod-tab-active {
            border-bottom: 1px solid white;
            background-color: #E0E0E0;
            cursor: auto;
        }

        .qm-load-indicator {
            margin: 15px auto 0;
            width: 70px;
            text-align: center;
        }

        .qm-load-indicator > div {
            width: 18px;
            height: 18px;
            background-color: rgba(100, 100, 100, 0.15);
            border-radius: 100%;
            display: inline-block;
            -webkit-animation: qm-bouncedelay 1.4s infinite ease-in-out both;
            animation: qm-bouncedelay 1.4s infinite ease-in-out both;
        }

        .qm-load-indicator .qm-bouncer1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .qm-load-indicator .qm-bouncer2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }

        @-webkit-keyframes qm-bouncedelay {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
            }
            40% {
                -webkit-transform: scale(1);
            }
        }

        @keyframes qm-bouncedelay {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            40% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        .pure-g [class*="pure-u"] {
            font-family: "Helvetica Neue", Helvetica, Arial;
        }

        .pure-g [class*="pure-u"] .qmod-panel {
            padding: 5px;
        }

        .pure-g [class*="pure-u"] .qmod-panel .qmod-panel-title {
            font-weight: bold;
            font-size: 95%;
        }

        .pure-g [class*="pure-u"] .qmod-panel .qmod-panel-title .qmod-panel-settings {
            float: right;
            color: #0b73be;
        }

        .pure-g [class*="pure-u"] .qmod-panel .qmod-panel-title > span {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            display: inline-block;
        }

        .pure-g [class*="pure-u"] .qmod-panel .qmod-panel-title > span.qmod-inline {
            display: inline;
        }

        .pure-g [class*="pure-u"] .qmod-panel .qmod-panel-title > span i + span {
            padding-left: 3px;
        }

        .pure-g [class*="pure-u"] .qmod-panel .qmod-panel-body {
            padding: 5px 0;
        }

        @media screen and (max-width: 35.5em) {
            .pure-g [class*="pure-u"]:first-of-type .qmod-panel,
            .pure-g [class*="pure-u"]:last-of-type .qmod-panel {
                padding: 5px;
            }

            .qmod-btn-icon {
                width: 100%;
                margin-bottom: 10px;
            }

            .qmod-heading {
                padding: 5px;
            }

            div.qmod-label,
            div.qmod-desc {
                padding: 5px;
            }

            .qmod-ui-modal .qmod-ui-modal-titlebar {
                padding-left: 5px;
            }

            .qmod-ui-modal .qmod-ui-modal-body {
                padding: 5px;
            }

            .qmod-disclaimer .qmod-disclaimer-logo {
                float: none;
                display: block;
                text-align: center;
            }
        }

        a.qmod-tooltip {
            color: #555 !important;
            border-bottom: 1px dotted #555;
            text-decoration: none;
        }

        a.qmod-tooltip:hover {
            text-decoration: none !important;
        }

        #qmod-tooltip {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            letter-spacing: normal;
            border: 2px solid #ccc;
            border-radius: 3px;
            color: #000;
            background: #fff;
            position: absolute;
            z-index: 100000;
            padding: 15px;
            max-width: 350px;
        }

        #qmod-tooltip:after {
            top: 100%;
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        #qmod-tooltip:before {
            top: 100%;
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        #qmod-tooltip:after {
            border-color: rgba(255, 255, 255, 0);
            border-top-color: #fff;
            border-width: 10px;
            margin-left: -10px;
        }

        #qmod-tooltip:before {
            border-color: rgba(204, 204, 204, 0);
            border-top-color: #ccc;
            border-width: 13px;
            margin-left: -13px;
        }

        #qmod-tooltip.top:after {
            top: auto;
            bottom: 100%;
        }

        #qmod-tooltip.top:before {
            top: auto;
            bottom: 100%;
        }

        #qmod-tooltip.top:after {
            border-color: rgba(255, 255, 255, 0);
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px;
        }

        #qmod-tooltip.top:before {
            border-color: rgba(204, 204, 204, 0);
            border-bottom-color: #ccc;
            border-width: 13px;
            margin-left: -13px;
        }

        #qmod-tooltip.left:after {
            right: 100%;
            top: 50%;
            bottom: auto;
        }

        #qmod-tooltip.left:before {
            right: 100%;
            top: 50%;
            bottom: auto;
        }

        #qmod-tooltip.left:after {
            border-color: rgba(255, 255, 255, 0);
            border-right-color: #fff;
            border-width: 10px;
            margin-top: -10px;
        }

        #qmod-tooltip.left:before {
            border-color: rgba(204, 204, 204, 0);
            border-right-color: #ccc;
            border-width: 13px;
            margin-top: -13px;
        }

        #qmod-tooltip.right:after {
            right: auto;
            left: 100%;
            top: 50%;
            bottom: auto;
        }

        #qmod-tooltip.right:before {
            right: auto;
            left: 100%;
            top: 50%;
            bottom: auto;
        }

        #qmod-tooltip.right:after {
            border-color: rgba(255, 255, 255, 0);
            border-left-color: #fff;
            border-width: 10px;
            margin-top: -10px;
            margin-left: 0;
        }

        #qmod-tooltip.right:before {
            border-color: rgba(204, 204, 204, 0);
            border-left-color: #ccc;
            border-width: 13px;
            margin-top: -13px;
            margin-left: 0;
        }

        .qmod-detailedquote {
            /*
 * Table styles
 */
            /*
 * Control feature layout
 */
            /*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
            /* FONT PATH
 * -------------------------- */
            /* makes the font 33% larger relative to the icon container */
            /* Deprecated as of 4.4.0 */
            /* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
        }

        .qmod-detailedquote table.dataTable {
            width: 100%;
            margin: 0 auto;
            clear: both;
            border-collapse: separate;
            border-spacing: 0;
            /*
   * Header and footer styles
   */
            /*
   * Body styles
   */
        }

        .qmod-detailedquote table.dataTable thead th,
        .qmod-detailedquote table.dataTable tfoot th {
            font-weight: bold;
        }

        .qmod-detailedquote table.dataTable thead th,
        .qmod-detailedquote table.dataTable thead td {
            padding: 10px 18px;
            border-bottom: 1px solid #111111;
        }

        .qmod-detailedquote table.dataTable thead th:active,
        .qmod-detailedquote table.dataTable thead td:active {
            outline: none;
        }

        .qmod-detailedquote table.dataTable tfoot th,
        .qmod-detailedquote table.dataTable tfoot td {
            padding: 10px 18px 6px 18px;
            border-top: 1px solid #111111;
        }

        .qmod-detailedquote table.dataTable thead .sorting,
        .qmod-detailedquote table.dataTable thead .sorting_asc,
        .qmod-detailedquote table.dataTable thead .sorting_desc,
        .qmod-detailedquote table.dataTable thead .sorting_asc_disabled,
        .qmod-detailedquote table.dataTable thead .sorting_desc_disabled {
            cursor: pointer;
            *cursor: hand;
            background-repeat: no-repeat;
            background-position: center right;
        }

        .qmod-detailedquote table.dataTable thead .sorting {
            background-image: url("../../../../node_modules/datatables.net-dt/images/sort_both.png");
        }

        .qmod-detailedquote table.dataTable thead .sorting_asc {
            background-image: url("../../../../node_modules/datatables.net-dt/images/sort_asc.png");
        }

        .qmod-detailedquote table.dataTable thead .sorting_desc {
            background-image: url("../../../../node_modules/datatables.net-dt/images/sort_desc.png");
        }

        .qmod-detailedquote table.dataTable thead .sorting_asc_disabled {
            background-image: url("../../../../node_modules/datatables.net-dt/images/sort_asc_disabled.png");
        }

        .qmod-detailedquote table.dataTable thead .sorting_desc_disabled {
            background-image: url("../../../../node_modules/datatables.net-dt/images/sort_desc_disabled.png");
        }

        .qmod-detailedquote table.dataTable tbody tr {
            background-color: white;
        }

        .qmod-detailedquote table.dataTable tbody trselected {
            background-color: #b0bed9;
        }

        .qmod-detailedquote table.dataTable tbody th,
        .qmod-detailedquote table.dataTable tbody td {
            padding: 8px 10px;
        }

        .qmod-detailedquote table.dataTable.row-border tbody th,
        .qmod-detailedquote table.dataTable.row-border tbody td,
        .qmod-detailedquote table.dataTable.display tbody th,
        .qmod-detailedquote table.dataTable.display tbody td {
            border-top: 1px solid #dddddd;
        }

        .qmod-detailedquote table.dataTable.row-border tbody tr:first-child th,
        .qmod-detailedquote table.dataTable.row-border tbody tr:first-child td,
        .qmod-detailedquote table.dataTable.display tbody tr:first-child th,
        .qmod-detailedquote table.dataTable.display tbody tr:first-child td {
            border-top: none;
        }

        .qmod-detailedquote table.dataTable.cell-border tbody th,
        .qmod-detailedquote table.dataTable.cell-border tbody td {
            border-top: 1px solid #dddddd;
            border-right: 1px solid #dddddd;
        }

        .qmod-detailedquote table.dataTable.cell-border tbody tr th:first-child,
        .qmod-detailedquote table.dataTable.cell-border tbody tr td:first-child {
            border-left: 1px solid #dddddd;
        }

        .qmod-detailedquote table.dataTable.cell-border tbody tr:first-child th,
        .qmod-detailedquote table.dataTable.cell-border tbody tr:first-child td {
            border-top: none;
        }

        .qmod-detailedquote table.dataTable.stripe tbody tr.odd,
        .qmod-detailedquote table.dataTable.display tbody tr.odd {
            background-color: #f9f9f9;
        }

        .qmod-detailedquote table.dataTable.stripe tbody tr.odd.selected,
        .qmod-detailedquote table.dataTable.display tbody tr.odd.selected {
            background-color: #abb9d3;
        }

        .qmod-detailedquote table.dataTable.hover tbody tr:hover,
        .qmod-detailedquote table.dataTable.display tbody tr:hover {
            background-color: whitesmoke;
        }

        .qmod-detailedquote table.dataTable.hover tbody tr:hover.selected,
        .qmod-detailedquote table.dataTable.display tbody tr:hover.selected {
            background-color: #a9b7d1;
        }

        .qmod-detailedquote table.dataTable.order-column tbody tr > .sorting_1,
        .qmod-detailedquote table.dataTable.order-column tbody tr > .sorting_2,
        .qmod-detailedquote table.dataTable.order-column tbody tr > .sorting_3,
        .qmod-detailedquote table.dataTable.display tbody tr > .sorting_1,
        .qmod-detailedquote table.dataTable.display tbody tr > .sorting_2,
        .qmod-detailedquote table.dataTable.display tbody tr > .sorting_3 {
            background-color: #f9f9f9;
        }

        .qmod-detailedquote table.dataTable.order-column tbody tr.selected > .sorting_1,
        .qmod-detailedquote table.dataTable.order-column tbody tr.selected > .sorting_2,
        .qmod-detailedquote table.dataTable.order-column tbody tr.selected > .sorting_3,
        .qmod-detailedquote table.dataTable.display tbody tr.selected > .sorting_1,
        .qmod-detailedquote table.dataTable.display tbody tr.selected > .sorting_2,
        .qmod-detailedquote table.dataTable.display tbody tr.selected > .sorting_3 {
            background-color: #acbad4;
        }

        .qmod-detailedquote table.dataTable.display tbody tr.odd > .sorting_1,
        .qmod-detailedquote table.dataTable.order-column.stripe tbody tr.odd > .sorting_1 {
            background-color: #f1f1f1;
        }

        .qmod-detailedquote table.dataTable.display tbody tr.odd > .sorting_2,
        .qmod-detailedquote table.dataTable.order-column.stripe tbody tr.odd > .sorting_2 {
            background-color: #f3f3f3;
        }

        .qmod-detailedquote table.dataTable.display tbody tr.odd > .sorting_3,
        .qmod-detailedquote table.dataTable.order-column.stripe tbody tr.odd > .sorting_3 {
            background-color: whitesmoke;
        }

        .qmod-detailedquote table.dataTable.display tbody tr.odd.selected > .sorting_1,
        .qmod-detailedquote table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_1 {
            background-color: #a6b3cd;
        }

        .qmod-detailedquote table.dataTable.display tbody tr.odd.selected > .sorting_2,
        .qmod-detailedquote table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_2 {
            background-color: #a7b5ce;
        }

        .qmod-detailedquote table.dataTable.display tbody tr.odd.selected > .sorting_3,
        .qmod-detailedquote table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_3 {
            background-color: #a9b6d0;
        }

        .qmod-detailedquote table.dataTable.display tbody tr.even > .sorting_1,
        .qmod-detailedquote table.dataTable.order-column.stripe tbody tr.even > .sorting_1 {
            background-color: #f9f9f9;
        }

        .qmod-detailedquote table.dataTable.display tbody tr.even > .sorting_2,
        .qmod-detailedquote table.dataTable.order-column.stripe tbody tr.even > .sorting_2 {
            background-color: #fbfbfb;
        }

        .qmod-detailedquote table.dataTable.display tbody tr.even > .sorting_3,
        .qmod-detailedquote table.dataTable.order-column.stripe tbody tr.even > .sorting_3 {
            background-color: #fdfdfd;
        }

        .qmod-detailedquote table.dataTable.display tbody tr.even.selected > .sorting_1,
        .qmod-detailedquote table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_1 {
            background-color: #acbad4;
        }

        .qmod-detailedquote table.dataTable.display tbody tr.even.selected > .sorting_2,
        .qmod-detailedquote table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_2 {
            background-color: #adbbd6;
        }

        .qmod-detailedquote table.dataTable.display tbody tr.even.selected > .sorting_3,
        .qmod-detailedquote table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_3 {
            background-color: #afbdd8;
        }

        .qmod-detailedquote table.dataTable.display tbody tr:hover > .sorting_1,
        .qmod-detailedquote table.dataTable.order-column.hover tbody tr:hover > .sorting_1 {
            background-color: #eaeaea;
        }

        .qmod-detailedquote table.dataTable.display tbody tr:hover > .sorting_2,
        .qmod-detailedquote table.dataTable.order-column.hover tbody tr:hover > .sorting_2 {
            background-color: #ebebeb;
        }

        .qmod-detailedquote table.dataTable.display tbody tr:hover > .sorting_3,
        .qmod-detailedquote table.dataTable.order-column.hover tbody tr:hover > .sorting_3 {
            background-color: #eeeeee;
        }

        .qmod-detailedquote table.dataTable.display tbody tr:hover.selected > .sorting_1,
        .qmod-detailedquote table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_1 {
            background-color: #a1aec7;
        }

        .qmod-detailedquote table.dataTable.display tbody tr:hover.selected > .sorting_2,
        .qmod-detailedquote table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_2 {
            background-color: #a2afc8;
        }

        .qmod-detailedquote table.dataTable.display tbody tr:hover.selected > .sorting_3,
        .qmod-detailedquote table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_3 {
            background-color: #a4b2cb;
        }

        .qmod-detailedquote table.dataTable.no-footer {
            border-bottom: 1px solid #111111;
        }

        .qmod-detailedquote table.dataTable.nowrap th,
        .qmod-detailedquote table.dataTable.nowrap td {
            white-space: nowrap;
        }

        .qmod-detailedquote table.dataTable.compact thead th,
        .qmod-detailedquote table.dataTable.compact thead td {
            padding: 4px 17px 4px 4px;
        }

        .qmod-detailedquote table.dataTable.compact tfoot th,
        .qmod-detailedquote table.dataTable.compact tfoot td {
            padding: 4px;
        }

        .qmod-detailedquote table.dataTable.compact tbody th,
        .qmod-detailedquote table.dataTable.compact tbody td {
            padding: 4px;
        }

        .qmod-detailedquote table.dataTable th.dt-left,
        .qmod-detailedquote table.dataTable td.dt-left {
            text-align: left;
        }

        .qmod-detailedquote table.dataTable th.dt-center,
        .qmod-detailedquote table.dataTable td.dt-center,
        .qmod-detailedquote table.dataTable td.dataTables_empty {
            text-align: center;
        }

        .qmod-detailedquote table.dataTable th.dt-right,
        .qmod-detailedquote table.dataTable td.dt-right {
            text-align: right;
        }

        .qmod-detailedquote table.dataTable th.dt-justify,
        .qmod-detailedquote table.dataTable td.dt-justify {
            text-align: justify;
        }

        .qmod-detailedquote table.dataTable th.dt-nowrap,
        .qmod-detailedquote table.dataTable td.dt-nowrap {
            white-space: nowrap;
        }

        .qmod-detailedquote table.dataTable thead th.dt-head-left,
        .qmod-detailedquote table.dataTable thead td.dt-head-left,
        .qmod-detailedquote table.dataTable tfoot th.dt-head-left,
        .qmod-detailedquote table.dataTable tfoot td.dt-head-left {
            text-align: left;
        }

        .qmod-detailedquote table.dataTable thead th.dt-head-center,
        .qmod-detailedquote table.dataTable thead td.dt-head-center,
        .qmod-detailedquote table.dataTable tfoot th.dt-head-center,
        .qmod-detailedquote table.dataTable tfoot td.dt-head-center {
            text-align: center;
        }

        .qmod-detailedquote table.dataTable thead th.dt-head-right,
        .qmod-detailedquote table.dataTable thead td.dt-head-right,
        .qmod-detailedquote table.dataTable tfoot th.dt-head-right,
        .qmod-detailedquote table.dataTable tfoot td.dt-head-right {
            text-align: right;
        }

        .qmod-detailedquote table.dataTable thead th.dt-head-justify,
        .qmod-detailedquote table.dataTable thead td.dt-head-justify,
        .qmod-detailedquote table.dataTable tfoot th.dt-head-justify,
        .qmod-detailedquote table.dataTable tfoot td.dt-head-justify {
            text-align: justify;
        }

        .qmod-detailedquote table.dataTable thead th.dt-head-nowrap,
        .qmod-detailedquote table.dataTable thead td.dt-head-nowrap,
        .qmod-detailedquote table.dataTable tfoot th.dt-head-nowrap,
        .qmod-detailedquote table.dataTable tfoot td.dt-head-nowrap {
            white-space: nowrap;
        }

        .qmod-detailedquote table.dataTable tbody th.dt-body-left,
        .qmod-detailedquote table.dataTable tbody td.dt-body-left {
            text-align: left;
        }

        .qmod-detailedquote table.dataTable tbody th.dt-body-center,
        .qmod-detailedquote table.dataTable tbody td.dt-body-center {
            text-align: center;
        }

        .qmod-detailedquote table.dataTable tbody th.dt-body-right,
        .qmod-detailedquote table.dataTable tbody td.dt-body-right {
            text-align: right;
        }

        .qmod-detailedquote table.dataTable tbody th.dt-body-justify,
        .qmod-detailedquote table.dataTable tbody td.dt-body-justify {
            text-align: justify;
        }

        .qmod-detailedquote table.dataTable tbody th.dt-body-nowrap,
        .qmod-detailedquote table.dataTable tbody td.dt-body-nowrap {
            white-space: nowrap;
        }

        .qmod-detailedquote table.dataTable,
        .qmod-detailedquote table.dataTable th,
        .qmod-detailedquote table.dataTable td {
            box-sizing: content-box;
        }

        .qmod-detailedquote .dataTables_wrapper {
            position: relative;
            clear: both;
            *zoom: 1;
            zoom: 1;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_length {
            float: left;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_filter input {
            margin-left: 0.5em;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_info {
            clear: both;
            float: left;
            padding-top: 0.755em;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate {
            float: right;
            text-align: right;
            padding-top: 0.25em;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button {
            box-sizing: border-box;
            display: inline-block;
            min-width: 1.5em;
            padding: 0.5em 1em;
            margin-left: 2px;
            text-align: center;
            text-decoration: none !important;
            cursor: pointer;
            *cursor: hand;
            color: #333333 !important;
            border: 1px solid transparent;
            border-radius: 2px;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            color: #333333 !important;
            border: 1px solid #979797;
            background-color: white;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, gainsboro));
            /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, white 0%, gainsboro 100%);
            /* Chrome10+,Safari5.1+ */
            background: -moz-linear-gradient(top, white 0%, gainsboro 100%);
            /* FF3.6+ */
            background: -ms-linear-gradient(top, white 0%, gainsboro 100%);
            /* IE10+ */
            background: -o-linear-gradient(top, white 0%, gainsboro 100%);
            /* Opera 11.10+ */
            background: linear-gradient(to bottom, white 0%, gainsboro 100%);
            /* W3C */
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
            cursor: default;
            color: #666 !important;
            border: 1px solid transparent;
            background: transparent;
            box-shadow: none;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: white !important;
            border: 1px solid #111111;
            background-color: #585858;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #585858), color-stop(100%, #111111));
            /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #585858 0%, #111111 100%);
            /* Chrome10+,Safari5.1+ */
            background: -moz-linear-gradient(top, #585858 0%, #111111 100%);
            /* FF3.6+ */
            background: -ms-linear-gradient(top, #585858 0%, #111111 100%);
            /* IE10+ */
            background: -o-linear-gradient(top, #585858 0%, #111111 100%);
            /* Opera 11.10+ */
            background: linear-gradient(to bottom, #585858 0%, #111111 100%);
            /* W3C */
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button:active {
            outline: none;
            background-color: #2b2b2b;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));
            /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
            /* Chrome10+,Safari5.1+ */
            background: -moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
            /* FF3.6+ */
            background: -ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
            /* IE10+ */
            background: -o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
            /* Opera 11.10+ */
            background: linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);
            /* W3C */
            box-shadow: inset 0 0 3px #111;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .ellipsis {
            padding: 0 1em;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_processing {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 40px;
            margin-left: -50%;
            margin-top: -25px;
            padding-top: 20px;
            text-align: center;
            font-size: 1.2em;
            background-color: white;
            background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(25%, rgba(255, 255, 255, 0.9)), color-stop(75%, rgba(255, 255, 255, 0.9)), color-stop(100%, rgba(255, 255, 255, 0)));
            background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
            background: -moz-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
            background: -ms-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
            background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
            background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_length,
        .qmod-detailedquote .dataTables_wrapper .dataTables_filter,
        .qmod-detailedquote .dataTables_wrapper .dataTables_info,
        .qmod-detailedquote .dataTables_wrapper .dataTables_processing,
        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate {
            color: #333333;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_scroll {
            clear: both;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody {
            *margin-top: -1px;
            -webkit-overflow-scrolling: touch;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > thead > tr > th,
        .qmod-detailedquote .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > thead > tr > td,
        .qmod-detailedquote .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > tbody > tr > th,
        .qmod-detailedquote .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > tbody > tr > td {
            vertical-align: middle;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > thead > tr > th > div.dataTables_sizing,
        .qmod-detailedquote .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > thead > tr > td > div.dataTables_sizing,
        .qmod-detailedquote .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > tbody > tr > th > div.dataTables_sizing,
        .qmod-detailedquote .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > tbody > tr > td > div.dataTables_sizing {
            height: 0;
            overflow: hidden;
            margin: 0 !important;
            padding: 0 !important;
        }

        .qmod-detailedquote .dataTables_wrapper.no-footer .dataTables_scrollBody {
            border-bottom: 1px solid #111111;
        }

        .qmod-detailedquote .dataTables_wrapper.no-footer div.dataTables_scrollHead table.dataTable,
        .qmod-detailedquote .dataTables_wrapper.no-footer div.dataTables_scrollBody > table {
            border-bottom: none;
        }

        .qmod-detailedquote .dataTables_wrapper:after {
            visibility: hidden;
            display: block;
            content: "";
            clear: both;
            height: 0;
        }

        @media screen and (max-width: 767px) {
            .qmod-detailedquote .dataTables_wrapper .dataTables_info,
            .qmod-detailedquote .dataTables_wrapper .dataTables_paginate {
                float: none;
                text-align: center;
            }

            .qmod-detailedquote .dataTables_wrapper .dataTables_paginate {
                margin-top: 0.5em;
            }
        }

        @media screen and (max-width: 640px) {
            .qmod-detailedquote .dataTables_wrapper .dataTables_length,
            .qmod-detailedquote .dataTables_wrapper .dataTables_filter {
                float: none;
                text-align: center;
            }

            .qmod-detailedquote .dataTables_wrapper .dataTables_filter {
                margin-top: 0.5em;
            }
        }

        .qmod-detailedquote table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,
        .qmod-detailedquote table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,
        .qmod-detailedquote table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {
            cursor: default !important;
        }

        .qmod-detailedquote table.dataTable.dtr-inline.collapsed > tbody > tr > td.child:before,
        .qmod-detailedquote table.dataTable.dtr-inline.collapsed > tbody > tr > th.child:before,
        .qmod-detailedquote table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty:before {
            display: none !important;
        }

        .qmod-detailedquote table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child,
        .qmod-detailedquote table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
        }

        .qmod-detailedquote table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child:before,
        .qmod-detailedquote table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child:before {
            top: 9px;
            left: 4px;
            height: 14px;
            width: 14px;
            display: block;
            position: absolute;
            color: white;
            border: 2px solid white;
            border-radius: 14px;
            box-shadow: 0 0 3px #444;
            box-sizing: content-box;
            text-align: center;
            text-indent: 0 !important;
            font-family: 'Courier New', Courier, monospace;
            line-height: 14px;
            content: '+';
            background-color: #31b131;
        }

        .qmod-detailedquote table.dataTable.dtr-inline.collapsed > tbody > tr.parent > td:first-child:before,
        .qmod-detailedquote table.dataTable.dtr-inline.collapsed > tbody > tr.parent > th:first-child:before {
            content: '-';
            background-color: #d33333;
        }

        .qmod-detailedquote table.dataTable.dtr-inline.collapsed.compact > tbody > tr > td:first-child,
        .qmod-detailedquote table.dataTable.dtr-inline.collapsed.compact > tbody > tr > th:first-child {
            padding-left: 27px;
        }

        .qmod-detailedquote table.dataTable.dtr-inline.collapsed.compact > tbody > tr > td:first-child:before,
        .qmod-detailedquote table.dataTable.dtr-inline.collapsed.compact > tbody > tr > th:first-child:before {
            top: 5px;
            left: 4px;
            height: 14px;
            width: 14px;
            border-radius: 14px;
            line-height: 14px;
            text-indent: 3px;
        }

        .qmod-detailedquote table.dataTable.dtr-column > tbody > tr > td.control,
        .qmod-detailedquote table.dataTable.dtr-column > tbody > tr > th.control {
            position: relative;
            cursor: pointer;
        }

        .qmod-detailedquote table.dataTable.dtr-column > tbody > tr > td.control:before,
        .qmod-detailedquote table.dataTable.dtr-column > tbody > tr > th.control:before {
            top: 50%;
            left: 50%;
            height: 16px;
            width: 16px;
            margin-top: -10px;
            margin-left: -10px;
            display: block;
            position: absolute;
            color: white;
            border: 2px solid white;
            border-radius: 14px;
            box-shadow: 0 0 3px #444;
            box-sizing: content-box;
            text-align: center;
            text-indent: 0 !important;
            font-family: 'Courier New', Courier, monospace;
            line-height: 14px;
            content: '+';
            background-color: #31b131;
        }

        .qmod-detailedquote table.dataTable.dtr-column > tbody > tr.parent td.control:before,
        .qmod-detailedquote table.dataTable.dtr-column > tbody > tr.parent th.control:before {
            content: '-';
            background-color: #d33333;
        }

        .qmod-detailedquote table.dataTable > tbody > tr.child {
            padding: 0.5em 1em;
        }

        .qmod-detailedquote table.dataTable > tbody > tr.child:hover {
            background: transparent !important;
        }

        .qmod-detailedquote table.dataTable > tbody > tr.child ul.dtr-details {
            display: inline-block;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .qmod-detailedquote table.dataTable > tbody > tr.child ul.dtr-details > li {
            border-bottom: 1px solid #efefef;
            padding: 0.5em 0;
        }

        .qmod-detailedquote table.dataTable > tbody > tr.child ul.dtr-details > li:first-child {
            padding-top: 0;
        }

        .qmod-detailedquote table.dataTable > tbody > tr.child ul.dtr-details > li:last-child {
            border-bottom: none;
        }

        .qmod-detailedquote table.dataTable > tbody > tr.child span.dtr-title {
            display: inline-block;
            min-width: 75px;
            font-weight: bold;
        }

        .qmod-detailedquote div.dtr-modal {
            position: fixed;
            box-sizing: border-box;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 100;
            padding: 10em 1em;
        }

        .qmod-detailedquote div.dtr-modal div.dtr-modal-display {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 50%;
            height: 50%;
            margin: auto;
            z-index: 102;
            overflow: auto;
            background-color: #f5f5f7;
            border: 1px solid black;
            border-radius: 0.5em;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6);
        }

        .qmod-detailedquote div.dtr-modal div.dtr-modal-content {
            position: relative;
            padding: 1em;
        }

        .qmod-detailedquote div.dtr-modal div.dtr-modal-close {
            position: absolute;
            top: 6px;
            right: 6px;
            width: 22px;
            height: 22px;
            border: 1px solid #eaeaea;
            background-color: #f9f9f9;
            text-align: center;
            border-radius: 3px;
            cursor: pointer;
            z-index: 12;
        }

        .qmod-detailedquote div.dtr-modal div.dtr-modal-close:hover {
            background-color: #eaeaea;
        }

        .qmod-detailedquote div.dtr-modal div.dtr-modal-background {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 101;
            background: rgba(0, 0, 0, 0.6);
        }

        @media screen and (max-width: 767px) {
            .qmod-detailedquote div.dtr-modal div.dtr-modal-display {
                width: 95%;
            }
        }

        @font-face {
            font-family: 'FontAwesome';
            src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts//fontawesome-webfont.eot?v=4.7.0');
            src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts//fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts//fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts//fontawesome-webfont.woff?v=4.7.0') format('woff'), url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts//fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts//fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        .qmod-detailedquote .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .qmod-detailedquote .fa-lg {
            font-size: 1.33333333em;
            line-height: 0.75em;
            vertical-align: -15%;
        }

        .qmod-detailedquote .fa-2x {
            font-size: 2em;
        }

        .qmod-detailedquote .fa-3x {
            font-size: 3em;
        }

        .qmod-detailedquote .fa-4x {
            font-size: 4em;
        }

        .qmod-detailedquote .fa-5x {
            font-size: 5em;
        }

        .qmod-detailedquote .fa-fw {
            width: 1.28571429em;
            text-align: center;
        }

        .qmod-detailedquote .fa-ul {
            padding-left: 0;
            margin-left: 2.14285714em;
            list-style-type: none;
        }

        .qmod-detailedquote .fa-ul > li {
            position: relative;
        }

        .qmod-detailedquote .fa-li {
            position: absolute;
            left: -2.14285714em;
            width: 2.14285714em;
            top: 0.14285714em;
            text-align: center;
        }

        .qmod-detailedquote .fa-li.fa-lg {
            left: -1.85714286em;
        }

        .qmod-detailedquote .fa-border {
            padding: .2em .25em .15em;
            border: solid 0.08em #eee;
            border-radius: .1em;
        }

        .qmod-detailedquote .fa-pull-left {
            float: left;
        }

        .qmod-detailedquote .fa-pull-right {
            float: right;
        }

        .qmod-detailedquote .fa.fa-pull-left {
            margin-right: .3em;
        }

        .qmod-detailedquote .fa.fa-pull-right {
            margin-left: .3em;
        }

        .qmod-detailedquote .pull-right {
            float: right;
        }

        .qmod-detailedquote .pull-left {
            float: left;
        }

        .qmod-detailedquote .fa.pull-left {
            margin-right: .3em;
        }

        .qmod-detailedquote .fa.pull-right {
            margin-left: .3em;
        }

        .qmod-detailedquote .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear;
        }

        .qmod-detailedquote .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8);
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }

        .qmod-detailedquote .fa-rotate-90 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .qmod-detailedquote .fa-rotate-180 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .qmod-detailedquote .fa-rotate-270 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
            -webkit-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .qmod-detailedquote .fa-flip-horizontal {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
            -webkit-transform: scale(-1, 1);
            -ms-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .qmod-detailedquote .fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
            -webkit-transform: scale(1, -1);
            -ms-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        .qmod-detailedquote :root .fa-rotate-90,
        .qmod-detailedquote :root .fa-rotate-180,
        .qmod-detailedquote :root .fa-rotate-270,
        .qmod-detailedquote :root .fa-flip-horizontal,
        .qmod-detailedquote :root .fa-flip-vertical {
            filter: none;
        }

        .qmod-detailedquote .fa-stack {
            position: relative;
            display: inline-block;
            width: 2em;
            height: 2em;
            line-height: 2em;
            vertical-align: middle;
        }

        .qmod-detailedquote .fa-stack-1x,
        .qmod-detailedquote .fa-stack-2x {
            position: absolute;
            left: 0;
            width: 100%;
            text-align: center;
        }

        .qmod-detailedquote .fa-stack-1x {
            line-height: inherit;
        }

        .qmod-detailedquote .fa-stack-2x {
            font-size: 2em;
        }

        .qmod-detailedquote .fa-inverse {
            color: #fff;
        }

        .qmod-detailedquote .fa-glass:before {
            content: "\f000";
        }

        .qmod-detailedquote .fa-music:before {
            content: "\f001";
        }

        .qmod-detailedquote .fa-search:before {
            content: "\f002";
        }

        .qmod-detailedquote .fa-envelope-o:before {
            content: "\f003";
        }

        .qmod-detailedquote .fa-heart:before {
            content: "\f004";
        }

        .qmod-detailedquote .fa-star:before {
            content: "\f005";
        }

        .qmod-detailedquote .fa-star-o:before {
            content: "\f006";
        }

        .qmod-detailedquote .fa-user:before {
            content: "\f007";
        }

        .qmod-detailedquote .fa-film:before {
            content: "\f008";
        }

        .qmod-detailedquote .fa-th-large:before {
            content: "\f009";
        }

        .qmod-detailedquote .fa-th:before {
            content: "\f00a";
        }

        .qmod-detailedquote .fa-th-list:before {
            content: "\f00b";
        }

        .qmod-detailedquote .fa-check:before {
            content: "\f00c";
        }

        .qmod-detailedquote .fa-remove:before,
        .qmod-detailedquote .fa-close:before,
        .qmod-detailedquote .fa-times:before {
            content: "\f00d";
        }

        .qmod-detailedquote .fa-search-plus:before {
            content: "\f00e";
        }

        .qmod-detailedquote .fa-search-minus:before {
            content: "\f010";
        }

        .qmod-detailedquote .fa-power-off:before {
            content: "\f011";
        }

        .qmod-detailedquote .fa-signal:before {
            content: "\f012";
        }

        .qmod-detailedquote .fa-gear:before,
        .qmod-detailedquote .fa-cog:before {
            content: "\f013";
        }

        .qmod-detailedquote .fa-trash-o:before {
            content: "\f014";
        }

        .qmod-detailedquote .fa-home:before {
            content: "\f015";
        }

        .qmod-detailedquote .fa-file-o:before {
            content: "\f016";
        }

        .qmod-detailedquote .fa-clock-o:before {
            content: "\f017";
        }

        .qmod-detailedquote .fa-road:before {
            content: "\f018";
        }

        .qmod-detailedquote .fa-download:before {
            content: "\f019";
        }

        .qmod-detailedquote .fa-arrow-circle-o-down:before {
            content: "\f01a";
        }

        .qmod-detailedquote .fa-arrow-circle-o-up:before {
            content: "\f01b";
        }

        .qmod-detailedquote .fa-inbox:before {
            content: "\f01c";
        }

        .qmod-detailedquote .fa-play-circle-o:before {
            content: "\f01d";
        }

        .qmod-detailedquote .fa-rotate-right:before,
        .qmod-detailedquote .fa-repeat:before {
            content: "\f01e";
        }

        .qmod-detailedquote .fa-refresh:before {
            content: "\f021";
        }

        .qmod-detailedquote .fa-list-alt:before {
            content: "\f022";
        }

        .qmod-detailedquote .fa-lock:before {
            content: "\f023";
        }

        .qmod-detailedquote .fa-flag:before {
            content: "\f024";
        }

        .qmod-detailedquote .fa-headphones:before {
            content: "\f025";
        }

        .qmod-detailedquote .fa-volume-off:before {
            content: "\f026";
        }

        .qmod-detailedquote .fa-volume-down:before {
            content: "\f027";
        }

        .qmod-detailedquote .fa-volume-up:before {
            content: "\f028";
        }

        .qmod-detailedquote .fa-qrcode:before {
            content: "\f029";
        }

        .qmod-detailedquote .fa-barcode:before {
            content: "\f02a";
        }

        .qmod-detailedquote .fa-tag:before {
            content: "\f02b";
        }

        .qmod-detailedquote .fa-tags:before {
            content: "\f02c";
        }

        .qmod-detailedquote .fa-book:before {
            content: "\f02d";
        }

        .qmod-detailedquote .fa-bookmark:before {
            content: "\f02e";
        }

        .qmod-detailedquote .fa-print:before {
            content: "\f02f";
        }

        .qmod-detailedquote .fa-camera:before {
            content: "\f030";
        }

        .qmod-detailedquote .fa-font:before {
            content: "\f031";
        }

        .qmod-detailedquote .fa-bold:before {
            content: "\f032";
        }

        .qmod-detailedquote .fa-italic:before {
            content: "\f033";
        }

        .qmod-detailedquote .fa-text-height:before {
            content: "\f034";
        }

        .qmod-detailedquote .fa-text-width:before {
            content: "\f035";
        }

        .qmod-detailedquote .fa-align-left:before {
            content: "\f036";
        }

        .qmod-detailedquote .fa-align-center:before {
            content: "\f037";
        }

        .qmod-detailedquote .fa-align-right:before {
            content: "\f038";
        }

        .qmod-detailedquote .fa-align-justify:before {
            content: "\f039";
        }

        .qmod-detailedquote .fa-list:before {
            content: "\f03a";
        }

        .qmod-detailedquote .fa-dedent:before,
        .qmod-detailedquote .fa-outdent:before {
            content: "\f03b";
        }

        .qmod-detailedquote .fa-indent:before {
            content: "\f03c";
        }

        .qmod-detailedquote .fa-video-camera:before {
            content: "\f03d";
        }

        .qmod-detailedquote .fa-photo:before,
        .qmod-detailedquote .fa-image:before,
        .qmod-detailedquote .fa-picture-o:before {
            content: "\f03e";
        }

        .qmod-detailedquote .fa-pencil:before {
            content: "\f040";
        }

        .qmod-detailedquote .fa-map-marker:before {
            content: "\f041";
        }

        .qmod-detailedquote .fa-adjust:before {
            content: "\f042";
        }

        .qmod-detailedquote .fa-tint:before {
            content: "\f043";
        }

        .qmod-detailedquote .fa-edit:before,
        .qmod-detailedquote .fa-pencil-square-o:before {
            content: "\f044";
        }

        .qmod-detailedquote .fa-share-square-o:before {
            content: "\f045";
        }

        .qmod-detailedquote .fa-check-square-o:before {
            content: "\f046";
        }

        .qmod-detailedquote .fa-arrows:before {
            content: "\f047";
        }

        .qmod-detailedquote .fa-step-backward:before {
            content: "\f048";
        }

        .qmod-detailedquote .fa-fast-backward:before {
            content: "\f049";
        }

        .qmod-detailedquote .fa-backward:before {
            content: "\f04a";
        }

        .qmod-detailedquote .fa-play:before {
            content: "\f04b";
        }

        .qmod-detailedquote .fa-pause:before {
            content: "\f04c";
        }

        .qmod-detailedquote .fa-stop:before {
            content: "\f04d";
        }

        .qmod-detailedquote .fa-forward:before {
            content: "\f04e";
        }

        .qmod-detailedquote .fa-fast-forward:before {
            content: "\f050";
        }

        .qmod-detailedquote .fa-step-forward:before {
            content: "\f051";
        }

        .qmod-detailedquote .fa-eject:before {
            content: "\f052";
        }

        .qmod-detailedquote .fa-chevron-left:before {
            content: "\f053";
        }

        .qmod-detailedquote .fa-chevron-right:before {
            content: "\f054";
        }

        .qmod-detailedquote .fa-plus-circle:before {
            content: "\f055";
        }

        .qmod-detailedquote .fa-minus-circle:before {
            content: "\f056";
        }

        .qmod-detailedquote .fa-times-circle:before {
            content: "\f057";
        }

        .qmod-detailedquote .fa-check-circle:before {
            content: "\f058";
        }

        .qmod-detailedquote .fa-question-circle:before {
            content: "\f059";
        }

        .qmod-detailedquote .fa-info-circle:before {
            content: "\f05a";
        }

        .qmod-detailedquote .fa-crosshairs:before {
            content: "\f05b";
        }

        .qmod-detailedquote .fa-times-circle-o:before {
            content: "\f05c";
        }

        .qmod-detailedquote .fa-check-circle-o:before {
            content: "\f05d";
        }

        .qmod-detailedquote .fa-ban:before {
            content: "\f05e";
        }

        .qmod-detailedquote .fa-arrow-left:before {
            content: "\f060";
        }

        .qmod-detailedquote .fa-arrow-right:before {
            content: "\f061";
        }

        .qmod-detailedquote .fa-arrow-up:before {
            content: "\f062";
        }

        .qmod-detailedquote .fa-arrow-down:before {
            content: "\f063";
        }

        .qmod-detailedquote .fa-mail-forward:before,
        .qmod-detailedquote .fa-share:before {
            content: "\f064";
        }

        .qmod-detailedquote .fa-expand:before {
            content: "\f065";
        }

        .qmod-detailedquote .fa-compress:before {
            content: "\f066";
        }

        .qmod-detailedquote .fa-plus:before {
            content: "\f067";
        }

        .qmod-detailedquote .fa-minus:before {
            content: "\f068";
        }

        .qmod-detailedquote .fa-asterisk:before {
            content: "\f069";
        }

        .qmod-detailedquote .fa-exclamation-circle:before {
            content: "\f06a";
        }

        .qmod-detailedquote .fa-gift:before {
            content: "\f06b";
        }

        .qmod-detailedquote .fa-leaf:before {
            content: "\f06c";
        }

        .qmod-detailedquote .fa-fire:before {
            content: "\f06d";
        }

        .qmod-detailedquote .fa-eye:before {
            content: "\f06e";
        }

        .qmod-detailedquote .fa-eye-slash:before {
            content: "\f070";
        }

        .qmod-detailedquote .fa-warning:before,
        .qmod-detailedquote .fa-exclamation-triangle:before {
            content: "\f071";
        }

        .qmod-detailedquote .fa-plane:before {
            content: "\f072";
        }

        .qmod-detailedquote .fa-calendar:before {
            content: "\f073";
        }

        .qmod-detailedquote .fa-random:before {
            content: "\f074";
        }

        .qmod-detailedquote .fa-comment:before {
            content: "\f075";
        }

        .qmod-detailedquote .fa-magnet:before {
            content: "\f076";
        }

        .qmod-detailedquote .fa-chevron-up:before {
            content: "\f077";
        }

        .qmod-detailedquote .fa-chevron-down:before {
            content: "\f078";
        }

        .qmod-detailedquote .fa-retweet:before {
            content: "\f079";
        }

        .qmod-detailedquote .fa-shopping-cart:before {
            content: "\f07a";
        }

        .qmod-detailedquote .fa-folder:before {
            content: "\f07b";
        }

        .qmod-detailedquote .fa-folder-open:before {
            content: "\f07c";
        }

        .qmod-detailedquote .fa-arrows-v:before {
            content: "\f07d";
        }

        .qmod-detailedquote .fa-arrows-h:before {
            content: "\f07e";
        }

        .qmod-detailedquote .fa-bar-chart-o:before,
        .qmod-detailedquote .fa-bar-chart:before {
            content: "\f080";
        }

        .qmod-detailedquote .fa-twitter-square:before {
            content: "\f081";
        }

        .qmod-detailedquote .fa-facebook-square:before {
            content: "\f082";
        }

        .qmod-detailedquote .fa-camera-retro:before {
            content: "\f083";
        }

        .qmod-detailedquote .fa-key:before {
            content: "\f084";
        }

        .qmod-detailedquote .fa-gears:before,
        .qmod-detailedquote .fa-cogs:before {
            content: "\f085";
        }

        .qmod-detailedquote .fa-comments:before {
            content: "\f086";
        }

        .qmod-detailedquote .fa-thumbs-o-up:before {
            content: "\f087";
        }

        .qmod-detailedquote .fa-thumbs-o-down:before {
            content: "\f088";
        }

        .qmod-detailedquote .fa-star-half:before {
            content: "\f089";
        }

        .qmod-detailedquote .fa-heart-o:before {
            content: "\f08a";
        }

        .qmod-detailedquote .fa-sign-out:before {
            content: "\f08b";
        }

        .qmod-detailedquote .fa-linkedin-square:before {
            content: "\f08c";
        }

        .qmod-detailedquote .fa-thumb-tack:before {
            content: "\f08d";
        }

        .qmod-detailedquote .fa-external-link:before {
            content: "\f08e";
        }

        .qmod-detailedquote .fa-sign-in:before {
            content: "\f090";
        }

        .qmod-detailedquote .fa-trophy:before {
            content: "\f091";
        }

        .qmod-detailedquote .fa-github-square:before {
            content: "\f092";
        }

        .qmod-detailedquote .fa-upload:before {
            content: "\f093";
        }

        .qmod-detailedquote .fa-lemon-o:before {
            content: "\f094";
        }

        .qmod-detailedquote .fa-phone:before {
            content: "\f095";
        }

        .qmod-detailedquote .fa-square-o:before {
            content: "\f096";
        }

        .qmod-detailedquote .fa-bookmark-o:before {
            content: "\f097";
        }

        .qmod-detailedquote .fa-phone-square:before {
            content: "\f098";
        }

        .qmod-detailedquote .fa-twitter:before {
            content: "\f099";
        }

        .qmod-detailedquote .fa-facebook-f:before,
        .qmod-detailedquote .fa-facebook:before {
            content: "\f09a";
        }

        .qmod-detailedquote .fa-github:before {
            content: "\f09b";
        }

        .qmod-detailedquote .fa-unlock:before {
            content: "\f09c";
        }

        .qmod-detailedquote .fa-credit-card:before {
            content: "\f09d";
        }

        .qmod-detailedquote .fa-feed:before,
        .qmod-detailedquote .fa-rss:before {
            content: "\f09e";
        }

        .qmod-detailedquote .fa-hdd-o:before {
            content: "\f0a0";
        }

        .qmod-detailedquote .fa-bullhorn:before {
            content: "\f0a1";
        }

        .qmod-detailedquote .fa-bell:before {
            content: "\f0f3";
        }

        .qmod-detailedquote .fa-certificate:before {
            content: "\f0a3";
        }

        .qmod-detailedquote .fa-hand-o-right:before {
            content: "\f0a4";
        }

        .qmod-detailedquote .fa-hand-o-left:before {
            content: "\f0a5";
        }

        .qmod-detailedquote .fa-hand-o-up:before {
            content: "\f0a6";
        }

        .qmod-detailedquote .fa-hand-o-down:before {
            content: "\f0a7";
        }

        .qmod-detailedquote .fa-arrow-circle-left:before {
            content: "\f0a8";
        }

        .qmod-detailedquote .fa-arrow-circle-right:before {
            content: "\f0a9";
        }

        .qmod-detailedquote .fa-arrow-circle-up:before {
            content: "\f0aa";
        }

        .qmod-detailedquote .fa-arrow-circle-down:before {
            content: "\f0ab";
        }

        .qmod-detailedquote .fa-globe:before {
            content: "\f0ac";
        }

        .qmod-detailedquote .fa-wrench:before {
            content: "\f0ad";
        }

        .qmod-detailedquote .fa-tasks:before {
            content: "\f0ae";
        }

        .qmod-detailedquote .fa-filter:before {
            content: "\f0b0";
        }

        .qmod-detailedquote .fa-briefcase:before {
            content: "\f0b1";
        }

        .qmod-detailedquote .fa-arrows-alt:before {
            content: "\f0b2";
        }

        .qmod-detailedquote .fa-group:before,
        .qmod-detailedquote .fa-users:before {
            content: "\f0c0";
        }

        .qmod-detailedquote .fa-chain:before,
        .qmod-detailedquote .fa-link:before {
            content: "\f0c1";
        }

        .qmod-detailedquote .fa-cloud:before {
            content: "\f0c2";
        }

        .qmod-detailedquote .fa-flask:before {
            content: "\f0c3";
        }

        .qmod-detailedquote .fa-cut:before,
        .qmod-detailedquote .fa-scissors:before {
            content: "\f0c4";
        }

        .qmod-detailedquote .fa-copy:before,
        .qmod-detailedquote .fa-files-o:before {
            content: "\f0c5";
        }

        .qmod-detailedquote .fa-paperclip:before {
            content: "\f0c6";
        }

        .qmod-detailedquote .fa-save:before,
        .qmod-detailedquote .fa-floppy-o:before {
            content: "\f0c7";
        }

        .qmod-detailedquote .fa-square:before {
            content: "\f0c8";
        }

        .qmod-detailedquote .fa-navicon:before,
        .qmod-detailedquote .fa-reorder:before,
        .qmod-detailedquote .fa-bars:before {
            content: "\f0c9";
        }

        .qmod-detailedquote .fa-list-ul:before {
            content: "\f0ca";
        }

        .qmod-detailedquote .fa-list-ol:before {
            content: "\f0cb";
        }

        .qmod-detailedquote .fa-strikethrough:before {
            content: "\f0cc";
        }

        .qmod-detailedquote .fa-underline:before {
            content: "\f0cd";
        }

        .qmod-detailedquote .fa-table:before {
            content: "\f0ce";
        }

        .qmod-detailedquote .fa-magic:before {
            content: "\f0d0";
        }

        .qmod-detailedquote .fa-truck:before {
            content: "\f0d1";
        }

        .qmod-detailedquote .fa-pinterest:before {
            content: "\f0d2";
        }

        .qmod-detailedquote .fa-pinterest-square:before {
            content: "\f0d3";
        }

        .qmod-detailedquote .fa-google-plus-square:before {
            content: "\f0d4";
        }

        .qmod-detailedquote .fa-google-plus:before {
            content: "\f0d5";
        }

        .qmod-detailedquote .fa-money:before {
            content: "\f0d6";
        }

        .qmod-detailedquote .fa-caret-down:before {
            content: "\f0d7";
        }

        .qmod-detailedquote .fa-caret-up:before {
            content: "\f0d8";
        }

        .qmod-detailedquote .fa-caret-left:before {
            content: "\f0d9";
        }

        .qmod-detailedquote .fa-caret-right:before {
            content: "\f0da";
        }

        .qmod-detailedquote .fa-columns:before {
            content: "\f0db";
        }

        .qmod-detailedquote .fa-unsorted:before,
        .qmod-detailedquote .fa-sort:before {
            content: "\f0dc";
        }

        .qmod-detailedquote .fa-sort-down:before,
        .qmod-detailedquote .fa-sort-desc:before {
            content: "\f0dd";
        }

        .qmod-detailedquote .fa-sort-up:before,
        .qmod-detailedquote .fa-sort-asc:before {
            content: "\f0de";
        }

        .qmod-detailedquote .fa-envelope:before {
            content: "\f0e0";
        }

        .qmod-detailedquote .fa-linkedin:before {
            content: "\f0e1";
        }

        .qmod-detailedquote .fa-rotate-left:before,
        .qmod-detailedquote .fa-undo:before {
            content: "\f0e2";
        }

        .qmod-detailedquote .fa-legal:before,
        .qmod-detailedquote .fa-gavel:before {
            content: "\f0e3";
        }

        .qmod-detailedquote .fa-dashboard:before,
        .qmod-detailedquote .fa-tachometer:before {
            content: "\f0e4";
        }

        .qmod-detailedquote .fa-comment-o:before {
            content: "\f0e5";
        }

        .qmod-detailedquote .fa-comments-o:before {
            content: "\f0e6";
        }

        .qmod-detailedquote .fa-flash:before,
        .qmod-detailedquote .fa-bolt:before {
            content: "\f0e7";
        }

        .qmod-detailedquote .fa-sitemap:before {
            content: "\f0e8";
        }

        .qmod-detailedquote .fa-umbrella:before {
            content: "\f0e9";
        }

        .qmod-detailedquote .fa-paste:before,
        .qmod-detailedquote .fa-clipboard:before {
            content: "\f0ea";
        }

        .qmod-detailedquote .fa-lightbulb-o:before {
            content: "\f0eb";
        }

        .qmod-detailedquote .fa-exchange:before {
            content: "\f0ec";
        }

        .qmod-detailedquote .fa-cloud-download:before {
            content: "\f0ed";
        }

        .qmod-detailedquote .fa-cloud-upload:before {
            content: "\f0ee";
        }

        .qmod-detailedquote .fa-user-md:before {
            content: "\f0f0";
        }

        .qmod-detailedquote .fa-stethoscope:before {
            content: "\f0f1";
        }

        .qmod-detailedquote .fa-suitcase:before {
            content: "\f0f2";
        }

        .qmod-detailedquote .fa-bell-o:before {
            content: "\f0a2";
        }

        .qmod-detailedquote .fa-coffee:before {
            content: "\f0f4";
        }

        .qmod-detailedquote .fa-cutlery:before {
            content: "\f0f5";
        }

        .qmod-detailedquote .fa-file-text-o:before {
            content: "\f0f6";
        }

        .qmod-detailedquote .fa-building-o:before {
            content: "\f0f7";
        }

        .qmod-detailedquote .fa-hospital-o:before {
            content: "\f0f8";
        }

        .qmod-detailedquote .fa-ambulance:before {
            content: "\f0f9";
        }

        .qmod-detailedquote .fa-medkit:before {
            content: "\f0fa";
        }

        .qmod-detailedquote .fa-fighter-jet:before {
            content: "\f0fb";
        }

        .qmod-detailedquote .fa-beer:before {
            content: "\f0fc";
        }

        .qmod-detailedquote .fa-h-square:before {
            content: "\f0fd";
        }

        .qmod-detailedquote .fa-plus-square:before {
            content: "\f0fe";
        }

        .qmod-detailedquote .fa-angle-double-left:before {
            content: "\f100";
        }

        .qmod-detailedquote .fa-angle-double-right:before {
            content: "\f101";
        }

        .qmod-detailedquote .fa-angle-double-up:before {
            content: "\f102";
        }

        .qmod-detailedquote .fa-angle-double-down:before {
            content: "\f103";
        }

        .qmod-detailedquote .fa-angle-left:before {
            content: "\f104";
        }

        .qmod-detailedquote .fa-angle-right:before {
            content: "\f105";
        }

        .qmod-detailedquote .fa-angle-up:before {
            content: "\f106";
        }

        .qmod-detailedquote .fa-angle-down:before {
            content: "\f107";
        }

        .qmod-detailedquote .fa-desktop:before {
            content: "\f108";
        }

        .qmod-detailedquote .fa-laptop:before {
            content: "\f109";
        }

        .qmod-detailedquote .fa-tablet:before {
            content: "\f10a";
        }

        .qmod-detailedquote .fa-mobile-phone:before,
        .qmod-detailedquote .fa-mobile:before {
            content: "\f10b";
        }

        .qmod-detailedquote .fa-circle-o:before {
            content: "\f10c";
        }

        .qmod-detailedquote .fa-quote-left:before {
            content: "\f10d";
        }

        .qmod-detailedquote .fa-quote-right:before {
            content: "\f10e";
        }

        .qmod-detailedquote .fa-spinner:before {
            content: "\f110";
        }

        .qmod-detailedquote .fa-circle:before {
            content: "\f111";
        }

        .qmod-detailedquote .fa-mail-reply:before,
        .qmod-detailedquote .fa-reply:before {
            content: "\f112";
        }

        .qmod-detailedquote .fa-github-alt:before {
            content: "\f113";
        }

        .qmod-detailedquote .fa-folder-o:before {
            content: "\f114";
        }

        .qmod-detailedquote .fa-folder-open-o:before {
            content: "\f115";
        }

        .qmod-detailedquote .fa-smile-o:before {
            content: "\f118";
        }

        .qmod-detailedquote .fa-frown-o:before {
            content: "\f119";
        }

        .qmod-detailedquote .fa-meh-o:before {
            content: "\f11a";
        }

        .qmod-detailedquote .fa-gamepad:before {
            content: "\f11b";
        }

        .qmod-detailedquote .fa-keyboard-o:before {
            content: "\f11c";
        }

        .qmod-detailedquote .fa-flag-o:before {
            content: "\f11d";
        }

        .qmod-detailedquote .fa-flag-checkered:before {
            content: "\f11e";
        }

        .qmod-detailedquote .fa-terminal:before {
            content: "\f120";
        }

        .qmod-detailedquote .fa-code:before {
            content: "\f121";
        }

        .qmod-detailedquote .fa-mail-reply-all:before,
        .qmod-detailedquote .fa-reply-all:before {
            content: "\f122";
        }

        .qmod-detailedquote .fa-star-half-empty:before,
        .qmod-detailedquote .fa-star-half-full:before,
        .qmod-detailedquote .fa-star-half-o:before {
            content: "\f123";
        }

        .qmod-detailedquote .fa-location-arrow:before {
            content: "\f124";
        }

        .qmod-detailedquote .fa-crop:before {
            content: "\f125";
        }

        .qmod-detailedquote .fa-code-fork:before {
            content: "\f126";
        }

        .qmod-detailedquote .fa-unlink:before,
        .qmod-detailedquote .fa-chain-broken:before {
            content: "\f127";
        }

        .qmod-detailedquote .fa-question:before {
            content: "\f128";
        }

        .qmod-detailedquote .fa-info:before {
            content: "\f129";
        }

        .qmod-detailedquote .fa-exclamation:before {
            content: "\f12a";
        }

        .qmod-detailedquote .fa-superscript:before {
            content: "\f12b";
        }

        .qmod-detailedquote .fa-subscript:before {
            content: "\f12c";
        }

        .qmod-detailedquote .fa-eraser:before {
            content: "\f12d";
        }

        .qmod-detailedquote .fa-puzzle-piece:before {
            content: "\f12e";
        }

        .qmod-detailedquote .fa-microphone:before {
            content: "\f130";
        }

        .qmod-detailedquote .fa-microphone-slash:before {
            content: "\f131";
        }

        .qmod-detailedquote .fa-shield:before {
            content: "\f132";
        }

        .qmod-detailedquote .fa-calendar-o:before {
            content: "\f133";
        }

        .qmod-detailedquote .fa-fire-extinguisher:before {
            content: "\f134";
        }

        .qmod-detailedquote .fa-rocket:before {
            content: "\f135";
        }

        .qmod-detailedquote .fa-maxcdn:before {
            content: "\f136";
        }

        .qmod-detailedquote .fa-chevron-circle-left:before {
            content: "\f137";
        }

        .qmod-detailedquote .fa-chevron-circle-right:before {
            content: "\f138";
        }

        .qmod-detailedquote .fa-chevron-circle-up:before {
            content: "\f139";
        }

        .qmod-detailedquote .fa-chevron-circle-down:before {
            content: "\f13a";
        }

        .qmod-detailedquote .fa-html5:before {
            content: "\f13b";
        }

        .qmod-detailedquote .fa-css3:before {
            content: "\f13c";
        }

        .qmod-detailedquote .fa-anchor:before {
            content: "\f13d";
        }

        .qmod-detailedquote .fa-unlock-alt:before {
            content: "\f13e";
        }

        .qmod-detailedquote .fa-bullseye:before {
            content: "\f140";
        }

        .qmod-detailedquote .fa-ellipsis-h:before {
            content: "\f141";
        }

        .qmod-detailedquote .fa-ellipsis-v:before {
            content: "\f142";
        }

        .qmod-detailedquote .fa-rss-square:before {
            content: "\f143";
        }

        .qmod-detailedquote .fa-play-circle:before {
            content: "\f144";
        }

        .qmod-detailedquote .fa-ticket:before {
            content: "\f145";
        }

        .qmod-detailedquote .fa-minus-square:before {
            content: "\f146";
        }

        .qmod-detailedquote .fa-minus-square-o:before {
            content: "\f147";
        }

        .qmod-detailedquote .fa-level-up:before {
            content: "\f148";
        }

        .qmod-detailedquote .fa-level-down:before {
            content: "\f149";
        }

        .qmod-detailedquote .fa-check-square:before {
            content: "\f14a";
        }

        .qmod-detailedquote .fa-pencil-square:before {
            content: "\f14b";
        }

        .qmod-detailedquote .fa-external-link-square:before {
            content: "\f14c";
        }

        .qmod-detailedquote .fa-share-square:before {
            content: "\f14d";
        }

        .qmod-detailedquote .fa-compass:before {
            content: "\f14e";
        }

        .qmod-detailedquote .fa-toggle-down:before,
        .qmod-detailedquote .fa-caret-square-o-down:before {
            content: "\f150";
        }

        .qmod-detailedquote .fa-toggle-up:before,
        .qmod-detailedquote .fa-caret-square-o-up:before {
            content: "\f151";
        }

        .qmod-detailedquote .fa-toggle-right:before,
        .qmod-detailedquote .fa-caret-square-o-right:before {
            content: "\f152";
        }

        .qmod-detailedquote .fa-euro:before,
        .qmod-detailedquote .fa-eur:before {
            content: "\f153";
        }

        .qmod-detailedquote .fa-gbp:before {
            content: "\f154";
        }

        .qmod-detailedquote .fa-dollar:before,
        .qmod-detailedquote .fa-usd:before {
            content: "\f155";
        }

        .qmod-detailedquote .fa-rupee:before,
        .qmod-detailedquote .fa-inr:before {
            content: "\f156";
        }

        .qmod-detailedquote .fa-cny:before,
        .qmod-detailedquote .fa-rmb:before,
        .qmod-detailedquote .fa-yen:before,
        .qmod-detailedquote .fa-jpy:before {
            content: "\f157";
        }

        .qmod-detailedquote .fa-ruble:before,
        .qmod-detailedquote .fa-rouble:before,
        .qmod-detailedquote .fa-rub:before {
            content: "\f158";
        }

        .qmod-detailedquote .fa-won:before,
        .qmod-detailedquote .fa-krw:before {
            content: "\f159";
        }

        .qmod-detailedquote .fa-bitcoin:before,
        .qmod-detailedquote .fa-btc:before {
            content: "\f15a";
        }

        .qmod-detailedquote .fa-file:before {
            content: "\f15b";
        }

        .qmod-detailedquote .fa-file-text:before {
            content: "\f15c";
        }

        .qmod-detailedquote .fa-sort-alpha-asc:before {
            content: "\f15d";
        }

        .qmod-detailedquote .fa-sort-alpha-desc:before {
            content: "\f15e";
        }

        .qmod-detailedquote .fa-sort-amount-asc:before {
            content: "\f160";
        }

        .qmod-detailedquote .fa-sort-amount-desc:before {
            content: "\f161";
        }

        .qmod-detailedquote .fa-sort-numeric-asc:before {
            content: "\f162";
        }

        .qmod-detailedquote .fa-sort-numeric-desc:before {
            content: "\f163";
        }

        .qmod-detailedquote .fa-thumbs-up:before {
            content: "\f164";
        }

        .qmod-detailedquote .fa-thumbs-down:before {
            content: "\f165";
        }

        .qmod-detailedquote .fa-youtube-square:before {
            content: "\f166";
        }

        .qmod-detailedquote .fa-youtube:before {
            content: "\f167";
        }

        .qmod-detailedquote .fa-xing:before {
            content: "\f168";
        }

        .qmod-detailedquote .fa-xing-square:before {
            content: "\f169";
        }

        .qmod-detailedquote .fa-youtube-play:before {
            content: "\f16a";
        }

        .qmod-detailedquote .fa-dropbox:before {
            content: "\f16b";
        }

        .qmod-detailedquote .fa-stack-overflow:before {
            content: "\f16c";
        }

        .qmod-detailedquote .fa-instagram:before {
            content: "\f16d";
        }

        .qmod-detailedquote .fa-flickr:before {
            content: "\f16e";
        }

        .qmod-detailedquote .fa-adn:before {
            content: "\f170";
        }

        .qmod-detailedquote .fa-bitbucket:before {
            content: "\f171";
        }

        .qmod-detailedquote .fa-bitbucket-square:before {
            content: "\f172";
        }

        .qmod-detailedquote .fa-tumblr:before {
            content: "\f173";
        }

        .qmod-detailedquote .fa-tumblr-square:before {
            content: "\f174";
        }

        .qmod-detailedquote .fa-long-arrow-down:before {
            content: "\f175";
        }

        .qmod-detailedquote .fa-long-arrow-up:before {
            content: "\f176";
        }

        .qmod-detailedquote .fa-long-arrow-left:before {
            content: "\f177";
        }

        .qmod-detailedquote .fa-long-arrow-right:before {
            content: "\f178";
        }

        .qmod-detailedquote .fa-apple:before {
            content: "\f179";
        }

        .qmod-detailedquote .fa-windows:before {
            content: "\f17a";
        }

        .qmod-detailedquote .fa-android:before {
            content: "\f17b";
        }

        .qmod-detailedquote .fa-linux:before {
            content: "\f17c";
        }

        .qmod-detailedquote .fa-dribbble:before {
            content: "\f17d";
        }

        .qmod-detailedquote .fa-skype:before {
            content: "\f17e";
        }

        .qmod-detailedquote .fa-foursquare:before {
            content: "\f180";
        }

        .qmod-detailedquote .fa-trello:before {
            content: "\f181";
        }

        .qmod-detailedquote .fa-female:before {
            content: "\f182";
        }

        .qmod-detailedquote .fa-male:before {
            content: "\f183";
        }

        .qmod-detailedquote .fa-gittip:before,
        .qmod-detailedquote .fa-gratipay:before {
            content: "\f184";
        }

        .qmod-detailedquote .fa-sun-o:before {
            content: "\f185";
        }

        .qmod-detailedquote .fa-moon-o:before {
            content: "\f186";
        }

        .qmod-detailedquote .fa-archive:before {
            content: "\f187";
        }

        .qmod-detailedquote .fa-bug:before {
            content: "\f188";
        }

        .qmod-detailedquote .fa-vk:before {
            content: "\f189";
        }

        .qmod-detailedquote .fa-weibo:before {
            content: "\f18a";
        }

        .qmod-detailedquote .fa-renren:before {
            content: "\f18b";
        }

        .qmod-detailedquote .fa-pagelines:before {
            content: "\f18c";
        }

        .qmod-detailedquote .fa-stack-exchange:before {
            content: "\f18d";
        }

        .qmod-detailedquote .fa-arrow-circle-o-right:before {
            content: "\f18e";
        }

        .qmod-detailedquote .fa-arrow-circle-o-left:before {
            content: "\f190";
        }

        .qmod-detailedquote .fa-toggle-left:before,
        .qmod-detailedquote .fa-caret-square-o-left:before {
            content: "\f191";
        }

        .qmod-detailedquote .fa-dot-circle-o:before {
            content: "\f192";
        }

        .qmod-detailedquote .fa-wheelchair:before {
            content: "\f193";
        }

        .qmod-detailedquote .fa-vimeo-square:before {
            content: "\f194";
        }

        .qmod-detailedquote .fa-turkish-lira:before,
        .qmod-detailedquote .fa-try:before {
            content: "\f195";
        }

        .qmod-detailedquote .fa-plus-square-o:before {
            content: "\f196";
        }

        .qmod-detailedquote .fa-space-shuttle:before {
            content: "\f197";
        }

        .qmod-detailedquote .fa-slack:before {
            content: "\f198";
        }

        .qmod-detailedquote .fa-envelope-square:before {
            content: "\f199";
        }

        .qmod-detailedquote .fa-wordpress:before {
            content: "\f19a";
        }

        .qmod-detailedquote .fa-openid:before {
            content: "\f19b";
        }

        .qmod-detailedquote .fa-institution:before,
        .qmod-detailedquote .fa-bank:before,
        .qmod-detailedquote .fa-university:before {
            content: "\f19c";
        }

        .qmod-detailedquote .fa-mortar-board:before,
        .qmod-detailedquote .fa-graduation-cap:before {
            content: "\f19d";
        }

        .qmod-detailedquote .fa-yahoo:before {
            content: "\f19e";
        }

        .qmod-detailedquote .fa-google:before {
            content: "\f1a0";
        }

        .qmod-detailedquote .fa-reddit:before {
            content: "\f1a1";
        }

        .qmod-detailedquote .fa-reddit-square:before {
            content: "\f1a2";
        }

        .qmod-detailedquote .fa-stumbleupon-circle:before {
            content: "\f1a3";
        }

        .qmod-detailedquote .fa-stumbleupon:before {
            content: "\f1a4";
        }

        .qmod-detailedquote .fa-delicious:before {
            content: "\f1a5";
        }

        .qmod-detailedquote .fa-digg:before {
            content: "\f1a6";
        }

        .qmod-detailedquote .fa-pied-piper-pp:before {
            content: "\f1a7";
        }

        .qmod-detailedquote .fa-pied-piper-alt:before {
            content: "\f1a8";
        }

        .qmod-detailedquote .fa-drupal:before {
            content: "\f1a9";
        }

        .qmod-detailedquote .fa-joomla:before {
            content: "\f1aa";
        }

        .qmod-detailedquote .fa-language:before {
            content: "\f1ab";
        }

        .qmod-detailedquote .fa-fax:before {
            content: "\f1ac";
        }

        .qmod-detailedquote .fa-building:before {
            content: "\f1ad";
        }

        .qmod-detailedquote .fa-child:before {
            content: "\f1ae";
        }

        .qmod-detailedquote .fa-paw:before {
            content: "\f1b0";
        }

        .qmod-detailedquote .fa-spoon:before {
            content: "\f1b1";
        }

        .qmod-detailedquote .fa-cube:before {
            content: "\f1b2";
        }

        .qmod-detailedquote .fa-cubes:before {
            content: "\f1b3";
        }

        .qmod-detailedquote .fa-behance:before {
            content: "\f1b4";
        }

        .qmod-detailedquote .fa-behance-square:before {
            content: "\f1b5";
        }

        .qmod-detailedquote .fa-steam:before {
            content: "\f1b6";
        }

        .qmod-detailedquote .fa-steam-square:before {
            content: "\f1b7";
        }

        .qmod-detailedquote .fa-recycle:before {
            content: "\f1b8";
        }

        .qmod-detailedquote .fa-automobile:before,
        .qmod-detailedquote .fa-car:before {
            content: "\f1b9";
        }

        .qmod-detailedquote .fa-cab:before,
        .qmod-detailedquote .fa-taxi:before {
            content: "\f1ba";
        }

        .qmod-detailedquote .fa-tree:before {
            content: "\f1bb";
        }

        .qmod-detailedquote .fa-spotify:before {
            content: "\f1bc";
        }

        .qmod-detailedquote .fa-deviantart:before {
            content: "\f1bd";
        }

        .qmod-detailedquote .fa-soundcloud:before {
            content: "\f1be";
        }

        .qmod-detailedquote .fa-database:before {
            content: "\f1c0";
        }

        .qmod-detailedquote .fa-file-pdf-o:before {
            content: "\f1c1";
        }

        .qmod-detailedquote .fa-file-word-o:before {
            content: "\f1c2";
        }

        .qmod-detailedquote .fa-file-excel-o:before {
            content: "\f1c3";
        }

        .qmod-detailedquote .fa-file-powerpoint-o:before {
            content: "\f1c4";
        }

        .qmod-detailedquote .fa-file-photo-o:before,
        .qmod-detailedquote .fa-file-picture-o:before,
        .qmod-detailedquote .fa-file-image-o:before {
            content: "\f1c5";
        }

        .qmod-detailedquote .fa-file-zip-o:before,
        .qmod-detailedquote .fa-file-archive-o:before {
            content: "\f1c6";
        }

        .qmod-detailedquote .fa-file-sound-o:before,
        .qmod-detailedquote .fa-file-audio-o:before {
            content: "\f1c7";
        }

        .qmod-detailedquote .fa-file-movie-o:before,
        .qmod-detailedquote .fa-file-video-o:before {
            content: "\f1c8";
        }

        .qmod-detailedquote .fa-file-code-o:before {
            content: "\f1c9";
        }

        .qmod-detailedquote .fa-vine:before {
            content: "\f1ca";
        }

        .qmod-detailedquote .fa-codepen:before {
            content: "\f1cb";
        }

        .qmod-detailedquote .fa-jsfiddle:before {
            content: "\f1cc";
        }

        .qmod-detailedquote .fa-life-bouy:before,
        .qmod-detailedquote .fa-life-buoy:before,
        .qmod-detailedquote .fa-life-saver:before,
        .qmod-detailedquote .fa-support:before,
        .qmod-detailedquote .fa-life-ring:before {
            content: "\f1cd";
        }

        .qmod-detailedquote .fa-circle-o-notch:before {
            content: "\f1ce";
        }

        .qmod-detailedquote .fa-ra:before,
        .qmod-detailedquote .fa-resistance:before,
        .qmod-detailedquote .fa-rebel:before {
            content: "\f1d0";
        }

        .qmod-detailedquote .fa-ge:before,
        .qmod-detailedquote .fa-empire:before {
            content: "\f1d1";
        }

        .qmod-detailedquote .fa-git-square:before {
            content: "\f1d2";
        }

        .qmod-detailedquote .fa-git:before {
            content: "\f1d3";
        }

        .qmod-detailedquote .fa-y-combinator-square:before,
        .qmod-detailedquote .fa-yc-square:before,
        .qmod-detailedquote .fa-hacker-news:before {
            content: "\f1d4";
        }

        .qmod-detailedquote .fa-tencent-weibo:before {
            content: "\f1d5";
        }

        .qmod-detailedquote .fa-qq:before {
            content: "\f1d6";
        }

        .qmod-detailedquote .fa-wechat:before,
        .qmod-detailedquote .fa-weixin:before {
            content: "\f1d7";
        }

        .qmod-detailedquote .fa-send:before,
        .qmod-detailedquote .fa-paper-plane:before {
            content: "\f1d8";
        }

        .qmod-detailedquote .fa-send-o:before,
        .qmod-detailedquote .fa-paper-plane-o:before {
            content: "\f1d9";
        }

        .qmod-detailedquote .fa-history:before {
            content: "\f1da";
        }

        .qmod-detailedquote .fa-circle-thin:before {
            content: "\f1db";
        }

        .qmod-detailedquote .fa-header:before {
            content: "\f1dc";
        }

        .qmod-detailedquote .fa-paragraph:before {
            content: "\f1dd";
        }

        .qmod-detailedquote .fa-sliders:before {
            content: "\f1de";
        }

        .qmod-detailedquote .fa-share-alt:before {
            content: "\f1e0";
        }

        .qmod-detailedquote .fa-share-alt-square:before {
            content: "\f1e1";
        }

        .qmod-detailedquote .fa-bomb:before {
            content: "\f1e2";
        }

        .qmod-detailedquote .fa-soccer-ball-o:before,
        .qmod-detailedquote .fa-futbol-o:before {
            content: "\f1e3";
        }

        .qmod-detailedquote .fa-tty:before {
            content: "\f1e4";
        }

        .qmod-detailedquote .fa-binoculars:before {
            content: "\f1e5";
        }

        .qmod-detailedquote .fa-plug:before {
            content: "\f1e6";
        }

        .qmod-detailedquote .fa-slideshare:before {
            content: "\f1e7";
        }

        .qmod-detailedquote .fa-twitch:before {
            content: "\f1e8";
        }

        .qmod-detailedquote .fa-yelp:before {
            content: "\f1e9";
        }

        .qmod-detailedquote .fa-newspaper-o:before {
            content: "\f1ea";
        }

        .qmod-detailedquote .fa-wifi:before {
            content: "\f1eb";
        }

        .qmod-detailedquote .fa-calculator:before {
            content: "\f1ec";
        }

        .qmod-detailedquote .fa-paypal:before {
            content: "\f1ed";
        }

        .qmod-detailedquote .fa-google-wallet:before {
            content: "\f1ee";
        }

        .qmod-detailedquote .fa-cc-visa:before {
            content: "\f1f0";
        }

        .qmod-detailedquote .fa-cc-mastercard:before {
            content: "\f1f1";
        }

        .qmod-detailedquote .fa-cc-discover:before {
            content: "\f1f2";
        }

        .qmod-detailedquote .fa-cc-amex:before {
            content: "\f1f3";
        }

        .qmod-detailedquote .fa-cc-paypal:before {
            content: "\f1f4";
        }

        .qmod-detailedquote .fa-cc-stripe:before {
            content: "\f1f5";
        }

        .qmod-detailedquote .fa-bell-slash:before {
            content: "\f1f6";
        }

        .qmod-detailedquote .fa-bell-slash-o:before {
            content: "\f1f7";
        }

        .qmod-detailedquote .fa-trash:before {
            content: "\f1f8";
        }

        .qmod-detailedquote .fa-copyright:before {
            content: "\f1f9";
        }

        .qmod-detailedquote .fa-at:before {
            content: "\f1fa";
        }

        .qmod-detailedquote .fa-eyedropper:before {
            content: "\f1fb";
        }

        .qmod-detailedquote .fa-paint-brush:before {
            content: "\f1fc";
        }

        .qmod-detailedquote .fa-birthday-cake:before {
            content: "\f1fd";
        }

        .qmod-detailedquote .fa-area-chart:before {
            content: "\f1fe";
        }

        .qmod-detailedquote .fa-pie-chart:before {
            content: "\f200";
        }

        .qmod-detailedquote .fa-line-chart:before {
            content: "\f201";
        }

        .qmod-detailedquote .fa-lastfm:before {
            content: "\f202";
        }

        .qmod-detailedquote .fa-lastfm-square:before {
            content: "\f203";
        }

        .qmod-detailedquote .fa-toggle-off:before {
            content: "\f204";
        }

        .qmod-detailedquote .fa-toggle-on:before {
            content: "\f205";
        }

        .qmod-detailedquote .fa-bicycle:before {
            content: "\f206";
        }

        .qmod-detailedquote .fa-bus:before {
            content: "\f207";
        }

        .qmod-detailedquote .fa-ioxhost:before {
            content: "\f208";
        }

        .qmod-detailedquote .fa-angellist:before {
            content: "\f209";
        }

        .qmod-detailedquote .fa-cc:before {
            content: "\f20a";
        }

        .qmod-detailedquote .fa-shekel:before,
        .qmod-detailedquote .fa-sheqel:before,
        .qmod-detailedquote .fa-ils:before {
            content: "\f20b";
        }

        .qmod-detailedquote .fa-meanpath:before {
            content: "\f20c";
        }

        .qmod-detailedquote .fa-buysellads:before {
            content: "\f20d";
        }

        .qmod-detailedquote .fa-connectdevelop:before {
            content: "\f20e";
        }

        .qmod-detailedquote .fa-dashcube:before {
            content: "\f210";
        }

        .qmod-detailedquote .fa-forumbee:before {
            content: "\f211";
        }

        .qmod-detailedquote .fa-leanpub:before {
            content: "\f212";
        }

        .qmod-detailedquote .fa-sellsy:before {
            content: "\f213";
        }

        .qmod-detailedquote .fa-shirtsinbulk:before {
            content: "\f214";
        }

        .qmod-detailedquote .fa-simplybuilt:before {
            content: "\f215";
        }

        .qmod-detailedquote .fa-skyatlas:before {
            content: "\f216";
        }

        .qmod-detailedquote .fa-cart-plus:before {
            content: "\f217";
        }

        .qmod-detailedquote .fa-cart-arrow-down:before {
            content: "\f218";
        }

        .qmod-detailedquote .fa-diamond:before {
            content: "\f219";
        }

        .qmod-detailedquote .fa-ship:before {
            content: "\f21a";
        }

        .qmod-detailedquote .fa-user-secret:before {
            content: "\f21b";
        }

        .qmod-detailedquote .fa-motorcycle:before {
            content: "\f21c";
        }

        .qmod-detailedquote .fa-street-view:before {
            content: "\f21d";
        }

        .qmod-detailedquote .fa-heartbeat:before {
            content: "\f21e";
        }

        .qmod-detailedquote .fa-venus:before {
            content: "\f221";
        }

        .qmod-detailedquote .fa-mars:before {
            content: "\f222";
        }

        .qmod-detailedquote .fa-mercury:before {
            content: "\f223";
        }

        .qmod-detailedquote .fa-intersex:before,
        .qmod-detailedquote .fa-transgender:before {
            content: "\f224";
        }

        .qmod-detailedquote .fa-transgender-alt:before {
            content: "\f225";
        }

        .qmod-detailedquote .fa-venus-double:before {
            content: "\f226";
        }

        .qmod-detailedquote .fa-mars-double:before {
            content: "\f227";
        }

        .qmod-detailedquote .fa-venus-mars:before {
            content: "\f228";
        }

        .qmod-detailedquote .fa-mars-stroke:before {
            content: "\f229";
        }

        .qmod-detailedquote .fa-mars-stroke-v:before {
            content: "\f22a";
        }

        .qmod-detailedquote .fa-mars-stroke-h:before {
            content: "\f22b";
        }

        .qmod-detailedquote .fa-neuter:before {
            content: "\f22c";
        }

        .qmod-detailedquote .fa-genderless:before {
            content: "\f22d";
        }

        .qmod-detailedquote .fa-facebook-official:before {
            content: "\f230";
        }

        .qmod-detailedquote .fa-pinterest-p:before {
            content: "\f231";
        }

        .qmod-detailedquote .fa-whatsapp:before {
            content: "\f232";
        }

        .qmod-detailedquote .fa-server:before {
            content: "\f233";
        }

        .qmod-detailedquote .fa-user-plus:before {
            content: "\f234";
        }

        .qmod-detailedquote .fa-user-times:before {
            content: "\f235";
        }

        .qmod-detailedquote .fa-hotel:before,
        .qmod-detailedquote .fa-bed:before {
            content: "\f236";
        }

        .qmod-detailedquote .fa-viacoin:before {
            content: "\f237";
        }

        .qmod-detailedquote .fa-train:before {
            content: "\f238";
        }

        .qmod-detailedquote .fa-subway:before {
            content: "\f239";
        }

        .qmod-detailedquote .fa-medium:before {
            content: "\f23a";
        }

        .qmod-detailedquote .fa-yc:before,
        .qmod-detailedquote .fa-y-combinator:before {
            content: "\f23b";
        }

        .qmod-detailedquote .fa-optin-monster:before {
            content: "\f23c";
        }

        .qmod-detailedquote .fa-opencart:before {
            content: "\f23d";
        }

        .qmod-detailedquote .fa-expeditedssl:before {
            content: "\f23e";
        }

        .qmod-detailedquote .fa-battery-4:before,
        .qmod-detailedquote .fa-battery:before,
        .qmod-detailedquote .fa-battery-full:before {
            content: "\f240";
        }

        .qmod-detailedquote .fa-battery-3:before,
        .qmod-detailedquote .fa-battery-three-quarters:before {
            content: "\f241";
        }

        .qmod-detailedquote .fa-battery-2:before,
        .qmod-detailedquote .fa-battery-half:before {
            content: "\f242";
        }

        .qmod-detailedquote .fa-battery-1:before,
        .qmod-detailedquote .fa-battery-quarter:before {
            content: "\f243";
        }

        .qmod-detailedquote .fa-battery-0:before,
        .qmod-detailedquote .fa-battery-empty:before {
            content: "\f244";
        }

        .qmod-detailedquote .fa-mouse-pointer:before {
            content: "\f245";
        }

        .qmod-detailedquote .fa-i-cursor:before {
            content: "\f246";
        }

        .qmod-detailedquote .fa-object-group:before {
            content: "\f247";
        }

        .qmod-detailedquote .fa-object-ungroup:before {
            content: "\f248";
        }

        .qmod-detailedquote .fa-sticky-note:before {
            content: "\f249";
        }

        .qmod-detailedquote .fa-sticky-note-o:before {
            content: "\f24a";
        }

        .qmod-detailedquote .fa-cc-jcb:before {
            content: "\f24b";
        }

        .qmod-detailedquote .fa-cc-diners-club:before {
            content: "\f24c";
        }

        .qmod-detailedquote .fa-clone:before {
            content: "\f24d";
        }

        .qmod-detailedquote .fa-balance-scale:before {
            content: "\f24e";
        }

        .qmod-detailedquote .fa-hourglass-o:before {
            content: "\f250";
        }

        .qmod-detailedquote .fa-hourglass-1:before,
        .qmod-detailedquote .fa-hourglass-start:before {
            content: "\f251";
        }

        .qmod-detailedquote .fa-hourglass-2:before,
        .qmod-detailedquote .fa-hourglass-half:before {
            content: "\f252";
        }

        .qmod-detailedquote .fa-hourglass-3:before,
        .qmod-detailedquote .fa-hourglass-end:before {
            content: "\f253";
        }

        .qmod-detailedquote .fa-hourglass:before {
            content: "\f254";
        }

        .qmod-detailedquote .fa-hand-grab-o:before,
        .qmod-detailedquote .fa-hand-rock-o:before {
            content: "\f255";
        }

        .qmod-detailedquote .fa-hand-stop-o:before,
        .qmod-detailedquote .fa-hand-paper-o:before {
            content: "\f256";
        }

        .qmod-detailedquote .fa-hand-scissors-o:before {
            content: "\f257";
        }

        .qmod-detailedquote .fa-hand-lizard-o:before {
            content: "\f258";
        }

        .qmod-detailedquote .fa-hand-spock-o:before {
            content: "\f259";
        }

        .qmod-detailedquote .fa-hand-pointer-o:before {
            content: "\f25a";
        }

        .qmod-detailedquote .fa-hand-peace-o:before {
            content: "\f25b";
        }

        .qmod-detailedquote .fa-trademark:before {
            content: "\f25c";
        }

        .qmod-detailedquote .fa-registered:before {
            content: "\f25d";
        }

        .qmod-detailedquote .fa-creative-commons:before {
            content: "\f25e";
        }

        .qmod-detailedquote .fa-gg:before {
            content: "\f260";
        }

        .qmod-detailedquote .fa-gg-circle:before {
            content: "\f261";
        }

        .qmod-detailedquote .fa-tripadvisor:before {
            content: "\f262";
        }

        .qmod-detailedquote .fa-odnoklassniki:before {
            content: "\f263";
        }

        .qmod-detailedquote .fa-odnoklassniki-square:before {
            content: "\f264";
        }

        .qmod-detailedquote .fa-get-pocket:before {
            content: "\f265";
        }

        .qmod-detailedquote .fa-wikipedia-w:before {
            content: "\f266";
        }

        .qmod-detailedquote .fa-safari:before {
            content: "\f267";
        }

        .qmod-detailedquote .fa-chrome:before {
            content: "\f268";
        }

        .qmod-detailedquote .fa-firefox:before {
            content: "\f269";
        }

        .qmod-detailedquote .fa-opera:before {
            content: "\f26a";
        }

        .qmod-detailedquote .fa-internet-explorer:before {
            content: "\f26b";
        }

        .qmod-detailedquote .fa-tv:before,
        .qmod-detailedquote .fa-television:before {
            content: "\f26c";
        }

        .qmod-detailedquote .fa-contao:before {
            content: "\f26d";
        }

        .qmod-detailedquote .fa-500px:before {
            content: "\f26e";
        }

        .qmod-detailedquote .fa-amazon:before {
            content: "\f270";
        }

        .qmod-detailedquote .fa-calendar-plus-o:before {
            content: "\f271";
        }

        .qmod-detailedquote .fa-calendar-minus-o:before {
            content: "\f272";
        }

        .qmod-detailedquote .fa-calendar-times-o:before {
            content: "\f273";
        }

        .qmod-detailedquote .fa-calendar-check-o:before {
            content: "\f274";
        }

        .qmod-detailedquote .fa-industry:before {
            content: "\f275";
        }

        .qmod-detailedquote .fa-map-pin:before {
            content: "\f276";
        }

        .qmod-detailedquote .fa-map-signs:before {
            content: "\f277";
        }

        .qmod-detailedquote .fa-map-o:before {
            content: "\f278";
        }

        .qmod-detailedquote .fa-map:before {
            content: "\f279";
        }

        .qmod-detailedquote .fa-commenting:before {
            content: "\f27a";
        }

        .qmod-detailedquote .fa-commenting-o:before {
            content: "\f27b";
        }

        .qmod-detailedquote .fa-houzz:before {
            content: "\f27c";
        }

        .qmod-detailedquote .fa-vimeo:before {
            content: "\f27d";
        }

        .qmod-detailedquote .fa-black-tie:before {
            content: "\f27e";
        }

        .qmod-detailedquote .fa-fonticons:before {
            content: "\f280";
        }

        .qmod-detailedquote .fa-reddit-alien:before {
            content: "\f281";
        }

        .qmod-detailedquote .fa-edge:before {
            content: "\f282";
        }

        .qmod-detailedquote .fa-credit-card-alt:before {
            content: "\f283";
        }

        .qmod-detailedquote .fa-codiepie:before {
            content: "\f284";
        }

        .qmod-detailedquote .fa-modx:before {
            content: "\f285";
        }

        .qmod-detailedquote .fa-fort-awesome:before {
            content: "\f286";
        }

        .qmod-detailedquote .fa-usb:before {
            content: "\f287";
        }

        .qmod-detailedquote .fa-product-hunt:before {
            content: "\f288";
        }

        .qmod-detailedquote .fa-mixcloud:before {
            content: "\f289";
        }

        .qmod-detailedquote .fa-scribd:before {
            content: "\f28a";
        }

        .qmod-detailedquote .fa-pause-circle:before {
            content: "\f28b";
        }

        .qmod-detailedquote .fa-pause-circle-o:before {
            content: "\f28c";
        }

        .qmod-detailedquote .fa-stop-circle:before {
            content: "\f28d";
        }

        .qmod-detailedquote .fa-stop-circle-o:before {
            content: "\f28e";
        }

        .qmod-detailedquote .fa-shopping-bag:before {
            content: "\f290";
        }

        .qmod-detailedquote .fa-shopping-basket:before {
            content: "\f291";
        }

        .qmod-detailedquote .fa-hashtag:before {
            content: "\f292";
        }

        .qmod-detailedquote .fa-bluetooth:before {
            content: "\f293";
        }

        .qmod-detailedquote .fa-bluetooth-b:before {
            content: "\f294";
        }

        .qmod-detailedquote .fa-percent:before {
            content: "\f295";
        }

        .qmod-detailedquote .fa-gitlab:before {
            content: "\f296";
        }

        .qmod-detailedquote .fa-wpbeginner:before {
            content: "\f297";
        }

        .qmod-detailedquote .fa-wpforms:before {
            content: "\f298";
        }

        .qmod-detailedquote .fa-envira:before {
            content: "\f299";
        }

        .qmod-detailedquote .fa-universal-access:before {
            content: "\f29a";
        }

        .qmod-detailedquote .fa-wheelchair-alt:before {
            content: "\f29b";
        }

        .qmod-detailedquote .fa-question-circle-o:before {
            content: "\f29c";
        }

        .qmod-detailedquote .fa-blind:before {
            content: "\f29d";
        }

        .qmod-detailedquote .fa-audio-description:before {
            content: "\f29e";
        }

        .qmod-detailedquote .fa-volume-control-phone:before {
            content: "\f2a0";
        }

        .qmod-detailedquote .fa-braille:before {
            content: "\f2a1";
        }

        .qmod-detailedquote .fa-assistive-listening-systems:before {
            content: "\f2a2";
        }

        .qmod-detailedquote .fa-asl-interpreting:before,
        .qmod-detailedquote .fa-american-sign-language-interpreting:before {
            content: "\f2a3";
        }

        .qmod-detailedquote .fa-deafness:before,
        .qmod-detailedquote .fa-hard-of-hearing:before,
        .qmod-detailedquote .fa-deaf:before {
            content: "\f2a4";
        }

        .qmod-detailedquote .fa-glide:before {
            content: "\f2a5";
        }

        .qmod-detailedquote .fa-glide-g:before {
            content: "\f2a6";
        }

        .qmod-detailedquote .fa-signing:before,
        .qmod-detailedquote .fa-sign-language:before {
            content: "\f2a7";
        }

        .qmod-detailedquote .fa-low-vision:before {
            content: "\f2a8";
        }

        .qmod-detailedquote .fa-viadeo:before {
            content: "\f2a9";
        }

        .qmod-detailedquote .fa-viadeo-square:before {
            content: "\f2aa";
        }

        .qmod-detailedquote .fa-snapchat:before {
            content: "\f2ab";
        }

        .qmod-detailedquote .fa-snapchat-ghost:before {
            content: "\f2ac";
        }

        .qmod-detailedquote .fa-snapchat-square:before {
            content: "\f2ad";
        }

        .qmod-detailedquote .fa-pied-piper:before {
            content: "\f2ae";
        }

        .qmod-detailedquote .fa-first-order:before {
            content: "\f2b0";
        }

        .qmod-detailedquote .fa-yoast:before {
            content: "\f2b1";
        }

        .qmod-detailedquote .fa-themeisle:before {
            content: "\f2b2";
        }

        .qmod-detailedquote .fa-google-plus-circle:before,
        .qmod-detailedquote .fa-google-plus-official:before {
            content: "\f2b3";
        }

        .qmod-detailedquote .fa-fa:before,
        .qmod-detailedquote .fa-font-awesome:before {
            content: "\f2b4";
        }

        .qmod-detailedquote .fa-handshake-o:before {
            content: "\f2b5";
        }

        .qmod-detailedquote .fa-envelope-open:before {
            content: "\f2b6";
        }

        .qmod-detailedquote .fa-envelope-open-o:before {
            content: "\f2b7";
        }

        .qmod-detailedquote .fa-linode:before {
            content: "\f2b8";
        }

        .qmod-detailedquote .fa-address-book:before {
            content: "\f2b9";
        }

        .qmod-detailedquote .fa-address-book-o:before {
            content: "\f2ba";
        }

        .qmod-detailedquote .fa-vcard:before,
        .qmod-detailedquote .fa-address-card:before {
            content: "\f2bb";
        }

        .qmod-detailedquote .fa-vcard-o:before,
        .qmod-detailedquote .fa-address-card-o:before {
            content: "\f2bc";
        }

        .qmod-detailedquote .fa-user-circle:before {
            content: "\f2bd";
        }

        .qmod-detailedquote .fa-user-circle-o:before {
            content: "\f2be";
        }

        .qmod-detailedquote .fa-user-o:before {
            content: "\f2c0";
        }

        .qmod-detailedquote .fa-id-badge:before {
            content: "\f2c1";
        }

        .qmod-detailedquote .fa-drivers-license:before,
        .qmod-detailedquote .fa-id-card:before {
            content: "\f2c2";
        }

        .qmod-detailedquote .fa-drivers-license-o:before,
        .qmod-detailedquote .fa-id-card-o:before {
            content: "\f2c3";
        }

        .qmod-detailedquote .fa-quora:before {
            content: "\f2c4";
        }

        .qmod-detailedquote .fa-free-code-camp:before {
            content: "\f2c5";
        }

        .qmod-detailedquote .fa-telegram:before {
            content: "\f2c6";
        }

        .qmod-detailedquote .fa-thermometer-4:before,
        .qmod-detailedquote .fa-thermometer:before,
        .qmod-detailedquote .fa-thermometer-full:before {
            content: "\f2c7";
        }

        .qmod-detailedquote .fa-thermometer-3:before,
        .qmod-detailedquote .fa-thermometer-three-quarters:before {
            content: "\f2c8";
        }

        .qmod-detailedquote .fa-thermometer-2:before,
        .qmod-detailedquote .fa-thermometer-half:before {
            content: "\f2c9";
        }

        .qmod-detailedquote .fa-thermometer-1:before,
        .qmod-detailedquote .fa-thermometer-quarter:before {
            content: "\f2ca";
        }

        .qmod-detailedquote .fa-thermometer-0:before,
        .qmod-detailedquote .fa-thermometer-empty:before {
            content: "\f2cb";
        }

        .qmod-detailedquote .fa-shower:before {
            content: "\f2cc";
        }

        .qmod-detailedquote .fa-bathtub:before,
        .qmod-detailedquote .fa-s15:before,
        .qmod-detailedquote .fa-bath:before {
            content: "\f2cd";
        }

        .qmod-detailedquote .fa-podcast:before {
            content: "\f2ce";
        }

        .qmod-detailedquote .fa-window-maximize:before {
            content: "\f2d0";
        }

        .qmod-detailedquote .fa-window-minimize:before {
            content: "\f2d1";
        }

        .qmod-detailedquote .fa-window-restore:before {
            content: "\f2d2";
        }

        .qmod-detailedquote .fa-times-rectangle:before,
        .qmod-detailedquote .fa-window-close:before {
            content: "\f2d3";
        }

        .qmod-detailedquote .fa-times-rectangle-o:before,
        .qmod-detailedquote .fa-window-close-o:before {
            content: "\f2d4";
        }

        .qmod-detailedquote .fa-bandcamp:before {
            content: "\f2d5";
        }

        .qmod-detailedquote .fa-grav:before {
            content: "\f2d6";
        }

        .qmod-detailedquote .fa-etsy:before {
            content: "\f2d7";
        }

        .qmod-detailedquote .fa-imdb:before {
            content: "\f2d8";
        }

        .qmod-detailedquote .fa-ravelry:before {
            content: "\f2d9";
        }

        .qmod-detailedquote .fa-eercast:before {
            content: "\f2da";
        }

        .qmod-detailedquote .fa-microchip:before {
            content: "\f2db";
        }

        .qmod-detailedquote .fa-snowflake-o:before {
            content: "\f2dc";
        }

        .qmod-detailedquote .fa-superpowers:before {
            content: "\f2dd";
        }

        .qmod-detailedquote .fa-wpexplorer:before {
            content: "\f2de";
        }

        .qmod-detailedquote .fa-meetup:before {
            content: "\f2e0";
        }

        .qmod-detailedquote .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        .qmod-detailedquote .sr-only-focusable:active,
        .qmod-detailedquote .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            clip: auto;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
            display: none;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_info {
            padding: 12px 0 0 0;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate {
            padding: 5px 0 0 0;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button {
            background-color: #0b73be;
            color: #FFF !important;
            font: 14px Arial, Tahoma, serif;
            text-decoration: none;
            cursor: pointer;
            border-radius: 4px;
            padding: 8px 16px;
            margin-left: 1px;
            margin-right: 1px;
            border: none;
            text-shadow: none;
            box-shadow: none;
            outline: 0;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.previous {
            margin-right: 10px;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.next {
            margin-left: 10px;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.previous,
        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.next {
            background: #ddd;
            color: #333333 !important;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: linear-gradient(#0c82d6, #0c82d6);
            border: none;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.previous:hover,
        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.next:hover {
            background: linear-gradient(#eaeaea, #eaeaea);
            color: #333333 !important;
            border: none;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button:active,
        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: linear-gradient(#08568e, #08568e);
            color: #fff !important;
            border: none;
            box-shadow: none;
        }

        .qmod-detailedquote .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background: linear-gradient(#08568e, #08568e);
            color: #fff !important;
            border: none;
        }

        .qmod-detailedquote table.qmod-table.dataTable {
            border-collapse: collapse;
        }

        .qmod-detailedquote table.qmod-table.dataTable tr {
            border-bottom: 1px solid #ddd;
        }

        .qmod-detailedquote table.qmod-table.dataTable .qmod-resp-table {
            max-width: 100%;
            border: 1px solid #d3d3d3;
            border-radius: 3px;
            background-color: #EAEEF1;
        }

        .qmod-detailedquote table.qmod-table.dataTable .qmod-resp-table tr {
            background-color: inherit;
        }

        .qmod-detailedquote table.qmod-table.dataTable .qmod-resp-table td {
            text-align: left;
        }

        .qmod-detailedquote table.qmod-table.dataTable tr.child td.child {
            padding-left: 2px;
            padding-right: 2px;
        }

        .qmod-detailedquote table.dataTable tbody td {
            padding: 8px 12px;
        }

        .qmod-detailedquote table.dataTable thead th {
            position: relative;
            background-image: none !important;
            padding-right: 15px;
            outline: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .qmod-detailedquote table.dataTable thead th:nth-child(2) {
            padding-left: 10px;
        }

        .qmod-detailedquote table.dataTable thead th.sorting,
        .qmod-detailedquote table.dataTable thead th.sorting_asc,
        .qmod-detailedquote table.dataTable thead th.sorting_desc {
            cursor: pointer;
        }

        .qmod-detailedquote table.dataTable thead th.sorting:after,
        .qmod-detailedquote table.dataTable thead th.sorting_asc:after,
        .qmod-detailedquote table.dataTable thead th.sorting_desc:after {
            position: absolute;
            top: 4px;
            right: 0;
            font-family: FontAwesome;
            font-size: 12px;
        }

        .qmod-detailedquote table.dataTable thead th.sorting:after {
            content: "\f0dc";
            color: #ddd;
            font-size: inherit;
        }

        .qmod-detailedquote table.dataTable thead th.sorting_asc:after {
            content: "\f0de";
            top: 6px;
        }

        .qmod-detailedquote table.dataTable thead th.sorting_desc:after {
            content: "\f0dd";
            top: 6px;
        }

        .qmod-detailedquote table.qmod-table.dataTable.dtr-column > thead > tr > th {
            padding: 4px 12px 4px 4px;
            border-bottom: 1px solid #ccc;
        }

        .qmod-detailedquote table.qmod-table.dataTable.dtr-column > thead > tr > th.sorting:hover {
            border-bottom: 1px solid #222;
        }

        .qmod-detailedquote table.qmod-table.dataTable.dtr-column > thead > tr > th.sorting_desc,
        .qmod-detailedquote table.qmod-table.dataTable.dtr-column > thead > tr > th.sorting_asc {
            border-bottom: 1px solid #222;
        }

        .qmod-detailedquote table.qmod-table.dataTable.dtr-column > thead > tr > th.control {
            padding: 0;
            max-width: 25px;
        }

        .qmod-detailedquote table.qmod-table.dataTable.dtr-column > tbody > tr > td.control,
        .qmod-detailedquote table.qmod-table.dataTable.dtr-column > tbody > tr > th.control {
            position: relative;
            cursor: pointer;
            padding: 0px 5px;
        }

        .qmod-detailedquote table.qmod-table.dataTable.dtr-column > tbody > tr > td.control:before,
        .qmod-detailedquote table.qmod-table.dataTable.dtr-column > tbody > tr > th.control:before {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            position: relative;
            box-sizing: content-box;
            text-align: left;
            text-indent: 0;
            padding: 2px;
            line-height: normal;
            top: auto;
            left: auto;
            height: auto;
            width: auto;
            content: "\f078";
            background-color: unset;
            color: #333;
            border: 0;
            border-radius: 0;
            box-shadow: none;
            margin-top: 0;
            margin-left: 0;
        }

        .qmod-detailedquote table.qmod-table.dataTable.dtr-column > tbody > tr.parent td.control:before,
        .qmod-detailedquote table.qmod-table.dataTable.dtr-column > tbody > tr.parent th.control:before {
            content: "\f077";
            background-color: unset;
        }

        .qmod-detailedquote table.qmod-table.dataTable > tbody > tr.child ul li {
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .qmod-detailedquote table.qmod-table.dataTable.dtr-inline.collapsed > tbody > tr > td.child {
            text-align: left;
        }

        .qmod-detailedquote td.child > table > tr > td > div {
            float: none;
        }

        .qmod-detailedquote td.child > table {
            border-collapse: collapse;
        }

        .qmod-detailedquote td.child > table tr {
            border-bottom: 1px solid #ddd;
            border-top: 0;
        }

        .qmod-detailedquote td.child > table tr:last-child {
            border-bottom: 0;
        }

        .qmod-detailedquote .flag-icon-background {
            background-size: contain;
            background-position: 50%;
            background-repeat: no-repeat;
        }

        .qmod-detailedquote .flag {
            display: inline-block;
            width: 26px;
            height: 16px;
            vertical-align: middle;
            margin: 1px;
        }

        .qmod-detailedquote .flag.flag-big {
            width: 34px;
            height: 24px;
            background-size: 34px 24px;
            margin: 0;
        }

        .qmod-detailedquote .undefined {
            text-align: center;
        }

        .qmod-detailedquote .undefined:after {
            content: '-';
        }

        .qmod-detailedquote .USD,
        .qmod-detailedquote .USA,
        .qmod-detailedquote .US,
        .qmod-detailedquote .United.States {
            background: url('{{ asset('/img/flags/4x3/us.svg') }}') no-repeat;
            background-size: 24px 14px;
            background-position: 1px 1px;
        }

        .qmod-detailedquote .TUR {
            background: url('{{ asset('/img/flags/4x3/tr.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .FRA {
            background: url('{{ asset('/img/flags/4x3/fr.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .NLD {
            background: url('{{ asset('/img/flags/4x3/nl.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .IDN {
            background: url('{{ asset('/img/flags/4x3/id.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .IRL {
            background: url('{{ asset('/img/flags/4x3/ie.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .LUX {
            background: url('{{ asset('/img/flags/4x3/lu.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .ITA {
            background: url('{{ asset('/img/flags/4x3/it.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .BMU {
            background: url('{{ asset('/img/flags/4x3/bm.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .TWN {
            background: url('{{ asset('/img/flags/4x3/tw.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .AED {
            background: url('{{ asset('/img/flags/4x3/ae.svg')  }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .ALL {
            background: url('{{ asset('/img/flags/4x3/al.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .ARS,
        .qmod-detailedquote .ARG {
            background: url('{{ asset('/img/flags/4x3/ar.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .AUT {
            background: url('{{ asset('/img/flags/4x3/at.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .AUD,
        .qmod-detailedquote .AUS,
        .qmod-detailedquote .\$CADAUD {
            background: url('{{ asset('/img/flags/4x3/au.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .ZAR,
        .qmod-detailedquote .ZAF {
            background: url('{{ asset('/img/flags/4x3/za.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .BBD {
            background: url('{{ asset('/img/flags/4x3/bb.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .BDT {
            background: url('{{ asset('/img/flags/4x3/bd.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .BGN {
            background: url('{{ asset('/img/flags/4x3/bg.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .BHD {
            background: url('{{ asset('/img/flags/4x3/bh.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .\$USDBRL {
            background: url('{{ asset('/img/flags/4x3/br.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .CAD,
        .qmod-detailedquote .CAN,
        .qmod-detailedquote .CA,
        .qmod-detailedquote .CND {
            background: url('{{ asset('/img/flags/4x3/ca.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .XAF {
            background: url('{{ asset('/img/flags/4x3/xa.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .CHF,
        .qmod-detailedquote .\$CADCHF {
            background: url('{{ asset('/img/flags/4x3/ch.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .CLP {
            background: url('{{ asset('/img/flags/4x3/cl.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .CNY,
        .qmod-detailedquote .CHN {
            background: url('{{ asset('/img/flags/4x3/cn.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .COP {
            background: url('{{ asset('/img/flags/4x3/co.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .CRC {
            background: url('{{ asset('/img/flags/4x3/cr.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .GRC {
            background: url('{{ asset('/img/flags/4x3/gr.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .CZK {
            background: url('{{ asset('/img/flags/4x3/cz.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .DKK,
        .qmod-detailedquote .DNK {
            background: url('{{ asset('/img/flags/4x3/dk.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .DZD {
            background: url('{{ asset('/img/flags/4x3/dz.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .EGP {
            background: url('{{ asset('/img/flags/4x3/eg.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .EURO,
        .qmod-detailedquote .\$CADEUR {
            background: url('{{ asset('/img/flags/4x3/eu.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .GBP,
        .qmod-detailedquote .GBR,
        .qmod-detailedquote .GBX,
        .qmod-detailedquote .\$CADGBP {
            background: url('{{ asset('/img/flags/4x3/gb.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .HKD,
        .qmod-detailedquote .HKG,
        .qmod-detailedquote .\$CADHKD {
            background: url('{{ asset('/img/flags/4x3/hk.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .HRK {
            background: url('{{ asset('/img/flags/4x3/hr.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .HUF {
            background: url('{{ asset('/img/flags/4x3/hu.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .PRT {
            background: url('{{ asset('/img/flags/4x3/pt.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .DEU {
            background: url('{{ asset('/img/flags/4x3/de.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .ILS,
        .qmod-detailedquote .ISR {
            background: url('{{ asset('/img/flags/4x3/il.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .CHE {
            background: url('{{ asset('/img/flags/4x3/sz.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .INR,
        .qmod-detailedquote .IND {
            background: url('{{ asset('/img/flags/4x3/in.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .IQD {
            background: url('{{ asset('/img/flags/4x3/iq.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .JMD {
            background: url('{{ asset('/img/flags/4x3/jmd.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .JOD {
            background: url('{{ asset('/img/flags/4x3/jo.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .JPY,
        .qmod-detailedquote .JPN,
        .qmod-detailedquote .\$CADJPY {
            background: url('{{ asset('/img/flags/4x3/jp.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .ESP {
            background: url('{{ asset('/img/flags/4x3/es.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .KES {
            background: url('{{ asset('/img/flags/4x3/ke.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .KPW {
            background: url('{{ asset('/img/flags/4x3/kp.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .KWD {
            background: url('{{ asset('/img/flags/4x3/kw.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .LBP {
            background: url('{{ asset('/img/flags/4x3/lb.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .LKR {
            background: url('{{ asset('/img/flags/4x3/lk.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .MAD {
            background: url('{{ asset('/img/flags/4x3/ma.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .MUR {
            background: url('{{ asset('/img/flags/4x3/mu.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .MXN {
            background: url('{{ asset('/img/flags/4x3/mx.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .MYR {
            background: url('{{ asset('/img/flags/4x3/my.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .XOF {
            background: url('{{ asset('/img/flags/4x3/xo.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .NOK {
            background: url('{{ asset('/img/flags/4x3/no.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .NZD,
        .qmod-detailedquote .NZL,
        .qmod-detailedquote .\$CADNZD {
            background: url('{{ asset('/img/flags/4x3/nz.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .OMR {
            background: url('{{ asset('/img/flags/4x3/om.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .PEN {
            background: url('{{ asset('/img/flags/4x3/pe.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .XPF {
            background: url('{{ asset('/img/flags/4x3/xp.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .PHP {
            background: url('{{ asset('/img/flags/4x3/ph.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .PLN {
            background: url('{{ asset('/img/flags/4x3/pl.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .QAR {
            background: url('{{ asset('/img/flags/4x3/qa.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .RON {
            background: url('{{ asset('/img/flags/4x3/ro.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .\$USDRUB,
        .qmod-detailedquote .RUS {
            background: url('{{ asset('/img/flags/4x3/ru.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .SAR {
            background: url('{{ asset('/img/flags/4x3/sa.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .SDD {
            background: url('{{ asset('/img/flags/4x3/sd.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .SEK {
            background: url('{{ asset('/img/flags/4x3/se.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .SGD,
        .qmod-detailedquote .SGP {
            background: url('{{ asset('/img/flags/4x3/sg.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .SKK {
            background: url('{{ asset('/img/flags/4x3/sk.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .THB {
            background: url('{{ asset('/img/flags/4x3/th.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .TND {
            background: url('{{ asset('/img/flags/4x3/tn.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .VND {
            background: url('{{ asset('/img/flags/4x3/vn.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .BEL {
            background: url('{{ asset('/img/flags/4x3/be.svg') }}') no-repeat;
            background-position: 1px 1px;
            background-size: 24px 14px;
        }

        .qmod-detailedquote .flag-icon:before {
            content: "\00a0";
        }

        .qmod-detailedquote .qmod-quotehead .qmod-lang-fr .qmod-datetime-date {
            text-transform: capitalize;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-inline-ul {
            float: right;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-inline-ul ul {
            display: inline-block;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-inline-ul ul:nth-child(2) {
            padding-left: 25px;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-inline-ul li {
            padding: 0 4px;
            display: inline-block;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-inline-ul li button {
            text-decoration: none;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-inline-ul .qmod-frm-wrap {
            padding-top: 4px;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-bid > .qmod-dp {
            color: #080;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-ask > .qmod-dp {
            color: #ff0000;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-reghalt .qmod-tooltip {
            color: #ff0000 !important;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-datetimezone {
            margin-left: 5px;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-icon-space {
            padding: 10px;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-change-icon {
            margin-left: 5px;
            margin-right: 5px;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-separator {
            margin-bottom: 1rem;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-mkt-hours > div + div,
        .qmod-detailedquote .qmod-quotehead .qmod-after-hours,
        .qmod-detailedquote .qmod-quotehead .qmod-entline {
            line-height: 20px;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-mkt-hours .qmod-last,
        .qmod-detailedquote .qmod-quotehead .qmod-mkt-hours .qmod-change {
            font-size: 190%;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-pipe-sep {
            font-size: 85%;
            vertical-align: text-top;
            color: #666;
            line-height: normal;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-bid,
        .qmod-detailedquote .qmod-quotehead .qmod-datetime,
        .qmod-detailedquote .qmod-quotehead .qmod-afh {
            margin-right: 20px;
            display: inline-block;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-volume,
        .qmod-detailedquote .qmod-quotehead .qmod-ask,
        .qmod-detailedquote .qmod-quotehead .qmod-ah-bottom {
            display: inline-block;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-heading .flag {
            margin-right: 5px;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-heading .qmod-t-text {
            vertical-align: bottom;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-head-left,
        .qmod-detailedquote .qmod-quotehead .qmod-head-right {
            margin-left: 20px;
            margin-top: 13px;
            margin-right: 20px;
            height: 100%;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-entline {
            text-transform: uppercase;
            font-size: 10px;
        }

        .qmod-detailedquote .qmod-quotehead .textr {
            text-align: right;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-daylow ~ .qmod-daylow {
            border-top: 1px solid #eee;
            margin-top: 10px;
            padding-top: 10px;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-day-high {
            float: right;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-daylowbar {
            font-size: 12px;
            position: relative;
            margin-top: 15px;
            background-color: #cccccc;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-barpct {
            background-color: #0a64a6;
            display: inline-block;
            color: #fff;
            margin-right: 5px;
            text-align: right;
            white-space: nowrap;
            max-width: 100%;
            height: 100%;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-cplogo {
            text-align: right;
        }

        @media (max-width: 767px) {
            .qmod-detailedquote .qmod-quotehead .qmod-cplogo {
                display: none;
            }
        }

        .qmod-detailedquote .qmod-quotehead .qmod-tradecont {
            text-align: right;
        }

        @media (max-width: 568px) {
            .qmod-detailedquote .qmod-quotehead .qmod-tradecont {
                text-align: center;
            }
        }

        .qmod-detailedquote .qmod-quotehead .qmod-tradecont a {
            text-decoration: none;
            color: #fff;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-tradecont a ~ a {
            margin-left: 10px;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-tradecont .qmod-btn {
            padding: 10px 5px;
            font-size: 18px;
            display: inline-block;
        }

        @media (max-width: 568px) {
            .qmod-detailedquote .qmod-quotehead .qmod-tradecont .qmod-btn {
                width: 45%;
                padding: 10px;
            }
        }

        .qmod-detailedquote .qmod-quotehead .qmod-hl-arrow {
            position: absolute;
            top: -16px;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-hl-label {
            white-space: nowrap;
        }

        .qmod-detailedquote .qmod-quotehead .qmod-hl-label.qmod-hl-left {
            position: absolute;
            left: -115px;
        }

        @media (max-width: 480px) {
            .qmod-detailedquote .qmod-quotehead .qmod-head-left,
            .qmod-detailedquote .qmod-quotehead .qmod-head-right {
                margin-left: 10px;
                margin-right: 10px;
            }
        }

        .qmod-detailedquote .qmod-quotegrid {
            text-align: center;
            margin-left: 20px;
            margin-right: 20px;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-heading {
            padding-left: 4px;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-futures-table-con {
            margin-top: 20px;
        }

        .qmod-detailedquote .qmod-quotegrid table.dataTable.qmod-table.no-footer {
            border-bottom: none;
        }

        .qmod-detailedquote .qmod-quotegrid table.dataTable.qmod-table.no-footer th {
            padding: 4px 14px;
        }

        .qmod-detailedquote .qmod-quotegrid table.dataTable.qmod-table.no-footer th:after {
            top: 20%;
        }

        .qmod-detailedquote .qmod-quotegrid table.dataTable.qmod-table.no-footer td {
            padding: 4px 14px;
        }

        .qmod-detailedquote .qmod-quotegrid table.dataTable.qmod-table td.qmod-td-1 {
            padding-left: 0;
        }

        .qmod-detailedquote .qmod-quotegrid table.dataTable.qmod-table .qmod-th-1 {
            padding-left: 0;
        }

        .qmod-detailedquote .qmod-quotegrid h4.qmod-heading.qmod-hbg {
            padding-left: 0;
            background-color: transparent;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-option-column-r {
            padding-left: 0;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-label {
            color: #666;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-weekh-con {
            text-align: right;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-weekh {
            white-space: nowrap;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-weekh-chart {
            margin-top: 5px;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-box-wrap-l,
        .qmod-detailedquote .qmod-quotegrid .qmod-box-wrap-md-l {
            margin-right: 20px;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-box-wrap-r,
        .qmod-detailedquote .qmod-quotegrid .qmod-box-wrap-md-r {
            margin-left: 20px;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-line-sep {
            border-bottom: 1px solid #eee;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-label,
        .qmod-detailedquote .qmod-quotegrid .qmod-data-point {
            padding: 2px 0;
            margin: 2px 0 2px 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-popup {
            background-color: #FFFFFF;
            border: 1px solid #c4c4c4;
            min-height: 45px;
            min-width: 300px;
            max-width: 400px;
            width: 33vw;
            z-index: 9999;
            transition: all 0.2s ease-in-out 0s;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-popup .qmod-popup-body {
            padding: 15px;
            text-align: left;
            clear: both;
            border-top: 1px solid #c4c4c4;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-popup .qmod-popup-title {
            background-color: #4d4d4d;
            font-size: 110%;
            color: #fff;
            padding: 5px;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-popup .qmod-popup-titlebar-buttons {
            float: right;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-popup .qmod-popup-titlebar-buttons .qmod-btn {
            cursor: pointer;
            background-color: transparent;
            padding: 0em;
            color: #fff;
            border: none;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-popup.anim {
            transform: translate(-50%, -50%) scale(1);
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-option-extra {
            margin-top: 20px;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-option-extra .qmod-option-column .qmod-option-column-cell {
            margin-bottom: 20px;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-option-extra .qmod-option-column-l {
            margin-right: 20px;
        }

        .qmod-detailedquote .qmod-quotegrid .qmod-option-extra .qmod-option-column-r {
            margin-left: 20px;
        }

        @media (max-width: 1279px) {
            .qmod-detailedquote .qmod-quotegrid .qmod-option-extra .qmod-option-column-l {
                margin-right: 0;
            }

            .qmod-detailedquote .qmod-quotegrid .qmod-option-extra .qmod-option-column-r {
                margin-left: 0;
            }
        }

        @media (max-width: 767px) {
            .qmod-detailedquote .qmod-quotegrid .qmod-box-wrap-md-r {
                margin-left: 0;
            }

            .qmod-detailedquote .qmod-quotegrid .qmod-box-wrap-md-l {
                margin-right: 0;
            }
        }

        @media (max-width: 567px) {
            .qmod-detailedquote .qmod-quotegrid .qmod-box-wrap-r {
                margin-left: 0;
            }

            .qmod-detailedquote .qmod-quotegrid .qmod-box-wrap-l {
                margin-right: 0;
            }
        }

        @media (max-width: 480px) {
            .qmod-detailedquote .qmod-quotegrid {
                margin-left: 5px;
                margin-right: 5px;
            }
        }

        .qmod-detailedquote .qmod-futures-table-con {
            margin-top: 20px;
        }
    </style>
    <style>.qmod-actio-menu {
            cursor: pointer;
        }

        .qmod-actio-menu .qmod-more-wrap {
            position: relative;
        }

        .qmod-actio-menu .qmod-more-wrap .qmod-more-div {
            border-top: 1px solid #CCCCCC;
            margin-top: 4px;
            margin-bottom: 4px;
        }

        .qmod-actio-menu .qmod-more-wrap .qmod-more-cont {
            border: 1px solid #ccc;
            position: absolute;
            right: 19px;
            box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
            background-color: #fff;
            border-radius: 4px;
        }

        .qmod-actio-menu .qmod-more-wrap .qmod-more-dd {
            margin: 0;
            padding: 0px;
            list-style: none;
            z-index: 9999;
            background-color: #fff;
        }

        .qmod-actio-menu .qmod-more-wrap .qmod-more-dd + .qmod-more-dd {
            border-top: 1px solid #ccc;
        }

        .qmod-actio-menu .qmod-more-wrap .qmod-more-d {
            padding: 6px 10px;
        }

        .qmod-actio-menu .qmod-more-wrap .qmod-more-link {
            text-decoration: none;
        }

        .qmod-actio-menu .qmod-more-wrap .qmod-more-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="@yield('page-class')">


@yield('page-content')


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
<!-- //general-wrapper -->
<script src="https://browser-update.org/update.min.js"></script>
</body>
</html>
