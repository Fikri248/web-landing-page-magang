<!DOCTYPE html>
<html lang="en">

<head>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=1, minimum-scale=1.0, maximum-scale=3.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="keywords" content="keywords ,seperated with (,)" />
    <meta name="description" content="Brief description" />

    <meta content="index,follow" name="robots">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <meta property="og:image" content="/var/file/14/1014/msys_1014_3087027_16703.ico" />
    <title>Logistic Supply Chain Engineering Laboratory</title>
    <link rel="icon" href="img/icon iebi.png">
    <link rel="bookmark" href="/var/file/14/1014/msys_1014_3087027_16703.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="/var/file/14/1014/msys_1014_3087027_16703.ico">
    <link rel="apple-touch-icon" href="/var/file/14/1014/msys_1014_3087027_16703.ico">
    <link rel="stylesheet" href="{{ asset('css/combine-en.css') }}?v=20260512" type="text/css" />
    <style>
        body.laboratory-page .lab-navbar__link,
        body.laboratory-page .lab-navbar__dropdown a {
            font-size: 1.6rem;
        }

        body.laboratory-page .laboratory-detail-description {
            display: block;
            text-align: justify;
        }

        body.laboratory-page .lab-navbar,
        body.laboratory-page .lab-navbar * {
            box-sizing: border-box;
        }

        body.laboratory-page .lab-navbar {
            background: #f7fafb;
            border-bottom: 1px solid #dde7ee;
            padding: 8px 6px;
            position: relative;
            width: 100%;
            z-index: 50;
        }

        body.laboratory-page .lab-navbar__inner {
            align-items: center;
            background: #fff;
            border: 1px solid #dce7ee;
            border-radius: 8px;
            display: flex;
            gap: 18px;
            justify-content: space-between;
            margin: 0;
            max-width: none;
            min-height: 76px;
            padding: 12px 14px 12px 18px;
            width: 100%;
        }

        body.laboratory-page .lab-navbar__brand {
            align-items: center;
            display: inline-flex;
            flex: 0 1 560px;
            min-width: 0;
            text-decoration: none;
        }

        body.laboratory-page .lab-navbar__logo {
            display: block;
            height: 46px;
            max-width: 100%;
            object-fit: contain;
            width: auto;
        }

        body.laboratory-page .lab-navbar__toggle {
            align-items: center;
            background: #f8fbfc;
            border: 1px solid #dbe6ec;
            border-radius: 8px;
            display: none;
            height: 44px;
            justify-content: center;
            padding: 0;
            width: 44px;
        }

        body.laboratory-page .lab-navbar__toggle-lines,
        body.laboratory-page .lab-navbar__toggle-lines span {
            display: block;
        }

        body.laboratory-page .lab-navbar__toggle-lines {
            width: 18px;
        }

        body.laboratory-page .lab-navbar__toggle-lines span {
            background: #0f766e;
            border-radius: 2px;
            height: 2px;
            margin: 4px 0;
            width: 18px;
        }

        body.laboratory-page .lab-navbar__menu {
            align-items: center;
            display: flex;
            justify-content: flex-end;
            min-width: 0;
        }

        body.laboratory-page .lab-navbar__list {
            align-items: center;
            background: #f7fafb;
            border-radius: 8px;
            display: flex;
            gap: 4px;
            list-style: none;
            margin: 0;
            padding: 5px;
        }

        body.laboratory-page .lab-navbar__item {
            margin: 0;
            position: relative;
        }

        body.laboratory-page .lab-navbar__link {
            align-items: center;
            background: transparent;
            border: 0;
            border-radius: 8px;
            color: #304050;
            display: inline-flex;
            font-weight: 600;
            gap: 7px;
            line-height: 1.25;
            padding: 12px 16px;
            text-decoration: none;
            transition: background-color 0.18s ease, box-shadow 0.18s ease, color 0.18s ease;
            white-space: nowrap;
        }

        body.laboratory-page .lab-navbar__link:hover,
        body.laboratory-page .lab-navbar__link:focus,
        body.laboratory-page .lab-navbar__item.is-open > .lab-navbar__link {
            background: #fff;
            box-shadow: 0 8px 20px rgba(18, 38, 63, 0.08);
            color: #0f766e;
            outline: none;
        }

        body.laboratory-page .lab-navbar__caret {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 4px solid currentColor;
            display: inline-block;
            height: 0;
            margin-top: 2px;
            width: 0;
        }

        body.laboratory-page .lab-navbar__dropdown {
            background: #fff;
            border: 1px solid rgba(213, 226, 232, 0.95);
            border-radius: 8px;
            box-shadow: 0 22px 50px rgba(18, 38, 63, 0.16);
            display: none;
            left: 50%;
            list-style: none;
            margin: 10px 0 0;
            min-width: 300px;
            padding: 8px;
            position: absolute;
            top: 100%;
            transform: translateX(-50%);
            z-index: 60;
        }

        body.laboratory-page .lab-navbar__item.is-open > .lab-navbar__dropdown {
            display: block;
        }

        body.laboratory-page .lab-navbar__dropdown a {
            border-radius: 6px;
            color: #304050;
            display: block;
            font-weight: 500;
            line-height: 1.38;
            padding: 10px 12px;
            text-decoration: none;
            white-space: normal;
        }

        body.laboratory-page .lab-navbar__dropdown a:hover,
        body.laboratory-page .lab-navbar__dropdown a:focus {
            background: #f1f8f7;
            color: #0f766e;
            outline: none;
        }

        body.laboratory-page .qbi-sheet-panel {
            background: #fff;
            border: 1px solid #d8e5eb;
            border-radius: 8px;
            box-shadow: 0 18px 45px rgba(18, 38, 63, 0.08);
            clear: both;
            display: block;
            margin: 24px auto 0;
            max-width: 1120px;
            overflow: visible;
            padding: 0;
            position: relative;
            width: 100%;
        }

        body.laboratory-page .qbi-sheet-dashboard {
            display: block;
            overflow: visible;
        }

        body.laboratory-page .qbi-sheet-table-wrap {
            display: block;
            overflow-x: auto;
            overflow-y: visible;
            width: 100%;
        }

        body.laboratory-page .qbi-sheet-table {
            background: #fff;
            border-collapse: separate;
            border-spacing: 0;
            color: #243241;
            display: table;
            font-size: 1.45rem;
            line-height: 1.45;
            min-width: 760px;
            width: 100%;
        }

        body.laboratory-page .qbi-sheet-table th,
        body.laboratory-page .qbi-sheet-table td {
            border-bottom: 1px solid #e4edf2;
            padding: 13px 16px;
            text-align: left;
            vertical-align: top;
        }

        body.laboratory-page .qbi-sheet-table th {
            background: #f6fafb;
            color: #536475;
            font-size: 1.25rem;
            font-weight: 700;
            letter-spacing: 0;
            position: sticky;
            text-transform: uppercase;
            top: 0;
            z-index: 1;
        }

        body.laboratory-page .qbi-sheet-table tbody tr:hover {
            background: #f8fbfb;
        }

        body.laboratory-page .qbi-sheet-table tbody tr:last-child td {
            border-bottom: 0;
        }

        body.laboratory-page .qbi-sheet-message {
            align-items: center;
            color: #536475;
            display: flex;
            font-size: 1.45rem;
            justify-content: center;
            line-height: 1.45;
            min-height: 180px;
            padding: 28px 18px;
            text-align: center;
        }

        body.laboratory-page .qbi-sheet-actions {
            align-items: center;
            border-top: 1px solid #e4edf2;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: space-between;
            margin-top: 0;
            padding: 12px 16px;
        }

        body.laboratory-page .qbi-sheet-status {
            color: #536475;
            font-size: 1.35rem;
            font-weight: 500;
            line-height: 1.35;
            margin-right: auto;
        }

        body.laboratory-page .qbi-sheet-controls {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: flex-end;
        }

        body.laboratory-page .qbi-sheet-button {
            align-items: center;
            border: 1px solid transparent;
            border-radius: 8px;
            cursor: pointer;
            display: inline-flex;
            font-size: 1.45rem;
            font-weight: 600;
            justify-content: center;
            line-height: 1.2;
            min-height: 42px;
            padding: 10px 16px;
            text-decoration: none;
            transition: background-color 0.18s ease, border-color 0.18s ease, box-shadow 0.18s ease, color 0.18s ease, transform 0.18s ease;
        }

        body.laboratory-page .qbi-sheet-button:hover,
        body.laboratory-page .qbi-sheet-button:focus {
            box-shadow: 0 10px 24px rgba(18, 38, 63, 0.12);
            outline: none;
            transform: translateY(-1px);
        }

        body.laboratory-page .qbi-sheet-button--secondary {
            background: #fff;
            border-color: #cfdce4;
            color: #304050;
        }

        body.laboratory-page .qbi-sheet-button--secondary:hover,
        body.laboratory-page .qbi-sheet-button--secondary:focus {
            background: #f7fafb;
            border-color: #b9cbd6;
            color: #0f766e;
        }

        body.laboratory-page .qbi-sheet-button--primary {
            background: #0f766e;
            border-color: #0f766e;
            color: #fff;
        }

        body.laboratory-page .qbi-sheet-button--primary:hover,
        body.laboratory-page .qbi-sheet-button--primary:focus {
            background: #0b625c;
            border-color: #0b625c;
            color: #fff;
        }

        @media (max-width: 767px) {
            body.laboratory-page .lab-navbar {
                padding: 6px;
            }

            body.laboratory-page .lab-navbar__inner {
                flex-wrap: wrap;
                gap: 12px;
                min-height: 68px;
                padding: 10px 12px;
            }

            body.laboratory-page .lab-navbar__brand {
                flex: 1 1 auto;
            }

            body.laboratory-page .lab-navbar__logo {
                height: 36px;
                max-width: 230px;
            }

            body.laboratory-page .lab-navbar__toggle {
                display: inline-flex;
            }

            body.laboratory-page .lab-navbar__menu {
                background: #fff;
                border: 1px solid #dbe6ec;
                border-radius: 8px;
                display: none;
                flex: 0 0 100%;
                margin-top: 8px;
                overflow: hidden;
                width: 100%;
            }

            body.laboratory-page .lab-navbar__menu.is-open {
                display: block;
            }

            body.laboratory-page .lab-navbar__list {
                align-items: stretch;
                background: #fff;
                display: block;
                padding: 8px;
                width: 100%;
            }

            body.laboratory-page .lab-navbar__item {
                width: 100%;
            }

            body.laboratory-page .lab-navbar__link {
                justify-content: space-between;
                padding: 13px 12px;
                white-space: normal;
                width: 100%;
            }

            body.laboratory-page .lab-navbar__link:hover,
            body.laboratory-page .lab-navbar__link:focus,
            body.laboratory-page .lab-navbar__item.is-open > .lab-navbar__link {
                background: #f4faf8;
                box-shadow: none;
            }

            body.laboratory-page .lab-navbar__dropdown {
                background: #f8fbfb;
                border: 0;
                box-shadow: none;
                left: auto;
                margin: 2px 0 8px;
                min-width: 0;
                padding: 4px 0 4px 12px;
                position: static;
                transform: none;
                width: 100%;
            }

            body.laboratory-page .qbi-sheet-panel {
                margin-top: 18px;
            }

            body.laboratory-page .qbi-sheet-table {
                font-size: 1.3rem;
                min-width: 680px;
            }

            body.laboratory-page .qbi-sheet-table th,
            body.laboratory-page .qbi-sheet-table td {
                padding: 11px 12px;
            }

            body.laboratory-page .qbi-sheet-actions {
                justify-content: stretch;
                padding: 12px;
            }

            body.laboratory-page .qbi-sheet-status,
            body.laboratory-page .qbi-sheet-controls {
                width: 100%;
            }

            body.laboratory-page .qbi-sheet-button {
                flex: 1 1 150px;
            }
        }
    </style>

    <script language="javascript">
        <!--
        var isHome = false
        -->
    </script>
    <script language="javascript">
        <!--
        var isExpanMenu = false
        -->
    </script>
    <script type="text/javascript" src="{{ asset('js/m_20251017.js') }}?v=20260512"></script>
</head>

<body class="page_mobilecgmolist webfree laboratory-page">
    @include('partials.landing-sidebar')
    <div class="wrap">
        <a href="#start-C" class="focusable" title="Jump to the main content block">Jump to the main content block</a>
        <div class="fpbgvideo"></div>
        <div class="minner">

            <div id="Dyn_head">
                <div class="header">
                    <div class="minner ">
                        <div class="selfhead">
                            <div class="meditor">
                                <!-- logo / navigation -->
                                <nav class="lab-navbar">
                                    <div class="lab-navbar__inner">
                                        <a class="lab-navbar__brand" href="{{ url('/') }}">
                                            <img src="{{ asset('img/laboratory/ok.png') }}?v=20260512" class="lab-navbar__logo" style="height: 50px;" alt="">
                                        </a>

                                        <button class="lab-navbar__toggle" type="button"
                                            aria-controls="laboratoryNavbar" aria-expanded="false">
                                            <span class="lab-navbar__toggle-lines" aria-hidden="true">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </button>

                                        <div class="lab-navbar__menu" id="laboratoryNavbar">
                                            <ul class="lab-navbar__list">
                                                <li class="lab-navbar__item">
                                                    <a class="lab-navbar__link" href="laboratory"
                                                        title="Click to go Home">Home</a>
                                                </li>

                                                <li class="lab-navbar__item lab-navbar__item--has-dropdown">
                                                    <a class="lab-navbar__link" href="javascript:void(0)"
                                                        aria-expanded="false" aria-haspopup="true"
                                                        data-lab-dropdown-toggle
                                                        title="Click to go Laboratory">Laboratory
                                                        <span class="lab-navbar__caret" aria-hidden="true"></span></a>
                                                    <ul class="lab-navbar__dropdown" id="submenu1_2538">
                                                        <li><a href="qbi">Quantitative Modelling
                                                                for Business and Industry Lab</a></li>
                                                        <li><a href="mansys">Manufacturing System Lab</a></li>
                                                        <li><a href="lsce">Logistic Supply Chain
                                                                Enginering Lab</a></li>
                                                        <li><a href="eid">Ergonomic and Innovation
                                                                Design Lab</a></li>
                                                        <li><a href="se">Enterprise System Lab</a></li>
                                                        <li><a href="em">Engineering
                                                                Management Lab</a></li>
                                                        <li><a href="digital">Digital Start-Up Lab</a></li>
                                                    </ul>
                                                </li>

                                                <li class="lab-navbar__item">
                                                    <a class="lab-navbar__link"
                                                        href="https://surabaya.telkomuniversity.ac.id/"
                                                        title="Click to go TEL-U">TEL-U</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>

                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        var nav = document.querySelector('.lab-navbar');
                                        if (!nav) return;

                                        var toggle = nav.querySelector('.lab-navbar__toggle');
                                        var menu = nav.querySelector('#laboratoryNavbar');
                                        var dropdownToggle = nav.querySelector('[data-lab-dropdown-toggle]');
                                        var dropdownItem = dropdownToggle ? dropdownToggle.closest('.lab-navbar__item') : null;

                                        function setMenu(open) {
                                            menu.classList.toggle('is-open', open);
                                            toggle.classList.toggle('is-open', open);
                                            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
                                        }

                                        function setDropdown(open) {
                                            if (!dropdownItem) return;
                                            dropdownItem.classList.toggle('is-open', open);
                                            dropdownToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
                                        }

                                        toggle.addEventListener('click', function() {
                                            setMenu(!menu.classList.contains('is-open'));
                                        });

                                        if (dropdownToggle) {
                                            dropdownToggle.addEventListener('click', function(event) {
                                                event.preventDefault();
                                                setDropdown(!dropdownItem.classList.contains('is-open'));
                                            });
                                        }

                                        nav.querySelectorAll('.lab-navbar__dropdown a, .lab-navbar__list > .lab-navbar__item:not(.lab-navbar__item--has-dropdown) a')
                                            .forEach(function(link) {
                                                link.addEventListener('click', function() {
                                                    setDropdown(false);
                                                    if (window.innerWidth < 768) setMenu(false);
                                                });
                                            });

                                        document.addEventListener('click', function(event) {
                                            if (!nav.contains(event.target)) setDropdown(false);
                                        });

                                        document.addEventListener('keydown', function(event) {
                                            if (event.key === 'Escape') {
                                                setDropdown(false);
                                                setMenu(false);
                                            }
                                        });
                                    });
                                </script>
                                <script>
                                    $(document).ready(function() {
                                        $.hajaxOpenUrl("/app/index.php?Action=mobileloadmod&Type=mobile_rcg_mstr&Nbr=1220", '#banner');
                                        $('.focusable,.lab-navbar a,.lab-navbar button').attr('tabindex', '1');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>

                <noscript>This function need to use the browser to support JavaScript normal operation</noscript>

                <!-- generated at Fri Oct 31 2025 15:18:04 -->
            </div>

            <main id="main-content">
                <div class="main">
                    <div class="minner">
                        <div class="row col1 row_0">
                            <div class="mrow container">
                                <div class="col col_02">
                                    <div class="mcol">

                                        <div id="Dyn_2_1" class="M42  ">
                                            <div class="module module-um md_style99">
                                                <div class="mouter">
                                                    <header class="mt mthide "></header>

                                                    <!-- <section class="mb">
                                                            <div class="minner">
                                                                <div class="meditor">
                                                                    <a href="#start-C" title='Main content block' accesskey="C" style="text-decoration:none" id="start-C">:::</a>
                                                                </div>
                                                            </div>
                                                        </section> -->

                                                </div>
                                            </div>
                                        </div>

                                        <div id="Dyn_2_2" class="M3  ">
                                            <!-- <div class="module module-path md_style1">
                                                    <div class="minner">
                                                        <section class="mb">
                                                            <ol class="breadcrumb">
                                                                <li><a href="/index.php">Home</a></li>
                                                                <li><a href="https://www.im.ntust.edu.tw/p/412-1014-10696.php?Lang=en">Research</a></li>
                                                                <li class="active"><a href="https://www.im.ntust.edu.tw/p/412-1014-11254.php?Lang=en">Research Centres and Facilities</a></li>
                                                            </ol>
                                                        </section>
                                                    </div>
                                                </div> -->
                                        </div>

                                        <div id="Dyn_2_3" class="M4  ">
                                            <div class="module module-cglist md_style1">
                                                <div class="minner">
                                                    <header class="mt ">
                                                        <h2 class="mt-title">Research Laboratories</h2>
                                                    </header>
                                                    <section class="mb">
                                                        <div class="mcont">
                                                            <div class="mpgdetail">
                                                                <div class="meditor">
                                                                    <table align="left" border="0"
                                                                        cellpadding="4" cellspacing="1"
                                                                        style="width:1500px;">
                                                                        <thead>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="1" rowspan="3"
                                                                                    style="text-align: left; width: 40%; background-color: rgb(255, 255, 255); vertical-align: top; padding-right: 1cm;">
                                                                                    <img alt="Logistic Supply Chain Engineering Laboratory"
                                                                                        src="{{ asset('img/laboratory/lsce.jpg') }}?v=20260512"
                                                                                        style="width: 100%; height: auto; display: block;" />
                                                                                </td>
                                                                                <td colspan="1" rowspan="3"
                                                                                    style="text-align: left; vertical-align: top; width: 60%; background-color: rgb(255, 255, 255);">
                                                                                    <p>
                                                                                        <span
                                                                                            style="font-family:Arial,Helvetica,sans-serif;">
                                                                                            <span
                                                                                                style="font-size:0.875em;"><strong>Logistic
                                                                                                    Supply Chain
                                                                                                    Engineering
                                                                                                    (LSCE) - 2.14</strong></span><br />
                                                                                            <span class="laboratory-detail-description"
                                                                                                style="font-size:0.75em;">The
                                                                                                LSCE Laboratory focuses
                                                                                                on managing and
                                                                                                optimizing the flow of
                                                                                                goods, information, and
                                                                                                resources from suppliers
                                                                                                to end consumers. As
                                                                                                global market complexity
                                                                                                increases, supply chain
                                                                                                and logistics play a
                                                                                                crucial role in
                                                                                                improving operational
                                                                                                efficiency, reducing
                                                                                                costs, and fulfilling
                                                                                                customer demand on
                                                                                                time.<br />
                                                                                                <strong>Research areas
                                                                                                    include:</strong>
                                                                                                Supply Chain Management,
                                                                                                Logistics and
                                                                                                Distribution, and
                                                                                                Warehousing
                                                                                                Systems.
                                                                                                <br />
                                                                                                <strong>Location:</strong>
                                                                                                ManSys - LSCE Building, G Floor</span>
                                                                                        </span>
                                                                                    </p>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="qbi-sheet-panel">
                                                                        <div id="lsceSheetDashboard" class="qbi-sheet-dashboard">
                                                                            <div class="qbi-sheet-table-wrap" id="lsceSheetTableWrap">
                                                                                <div class="qbi-sheet-message">Loading schedule...</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="qbi-sheet-actions">
                                                                            <div class="qbi-sheet-status" id="lsceSheetLastUpdated">
                                                                                Last Updated: loading...</div>
                                                                            <div class="qbi-sheet-controls">
                                                                                {{--
                                                                                <button type="button"
                                                                                    class="qbi-sheet-button qbi-sheet-button--secondary"
                                                                                    id="lsceSheetRefresh">Refresh</button>
                                                                                --}}
                                                                                {{--
                                                                                <a class="qbi-sheet-button qbi-sheet-button--primary"
                                                                                    href="https://docs.google.com/spreadsheets/d/1mGNjSwhFOU08V7eUrlGNPx-WhxYP_unk7b__efF8Cjg/edit?usp=sharing"
                                                                                    target="_blank" rel="noopener noreferrer">Edit Jadwal</a>
                                                                                --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        (function() {
                                                                            const LSCE_SHEET_API_URL = 'https://script.google.com/macros/s/AKfycbzcKfEsXwK94GIUe6CqROFeSuGsYxn-r9CCkJlRsE7TAny_4aY0wfHmDLYq_-97MaS-zg/exec';
                                                                            var dashboard = document.getElementById('lsceSheetDashboard');
                                                                            var tableWrap = document.getElementById('lsceSheetTableWrap');
                                                                            var refreshButton = document.getElementById('lsceSheetRefresh');
                                                                            var lastUpdated = document.getElementById('lsceSheetLastUpdated');
                                                                            var sheetRequestSeq = 0;

                                                                            if (!dashboard || !tableWrap) {
                                                                                return;
                                                                            }

                                                                            function buildFreshUrl(source) {
                                                                                var separator = source.indexOf('?') === -1 ? '?' : '&';

                                                                                return source + separator + 'cacheBust=' + Date.now();
                                                                            }

                                                                            function hasContent(value) {
                                                                                return String(value || '').trim() !== '';
                                                                            }

                                                                            function isPlaceholderUrl(source) {
                                                                                return !source || source === 'PASTE_LSCE_APPS_SCRIPT_WEB_APP_URL_HERE';
                                                                            }

                                                                            function clearTableWrap() {
                                                                                while (tableWrap.firstChild) {
                                                                                    tableWrap.removeChild(tableWrap.firstChild);
                                                                                }
                                                                            }

                                                                            function showTableMessage(message) {
                                                                                var messageElement = document.createElement('div');

                                                                                clearTableWrap();
                                                                                messageElement.className = 'qbi-sheet-message';
                                                                                messageElement.textContent = message;
                                                                                tableWrap.appendChild(messageElement);
                                                                            }

                                                                            function showTableError(message) {
                                                                                showTableMessage(message);
                                                                            }

                                                                            function getVisibleColumnIndexes(headers) {
                                                                                var indexes = [];

                                                                                headers.forEach(function(header, index) {
                                                                                    if (hasContent(header)) {
                                                                                        indexes.push(index);
                                                                                    }
                                                                                });

                                                                                return indexes;
                                                                            }

                                                                            function normalizeRows(rows) {
                                                                                if (!Array.isArray(rows)) {
                                                                                    return [];
                                                                                }

                                                                                return rows.filter(function(row) {
                                                                                    return Array.isArray(row) && row.some(hasContent);
                                                                                });
                                                                            }

                                                                            function renderTable(headers, rows) {
                                                                                var visibleColumnIndexes = getVisibleColumnIndexes(headers);
                                                                                var bodyRows = normalizeRows(rows);

                                                                                if (!headers.length || !visibleColumnIndexes.length || !bodyRows.length) {
                                                                                    showTableError('Schedule data is unavailable.');
                                                                                    return;
                                                                                }

                                                                                var table = document.createElement('table');
                                                                                var thead = document.createElement('thead');
                                                                                var headerRow = document.createElement('tr');
                                                                                var tbody = document.createElement('tbody');

                                                                                table.className = 'qbi-sheet-table';

                                                                                visibleColumnIndexes.forEach(function(index) {
                                                                                    var th = document.createElement('th');

                                                                                    th.scope = 'col';
                                                                                    th.textContent = (headers[index] || '').trim();
                                                                                    headerRow.appendChild(th);
                                                                                });

                                                                                thead.appendChild(headerRow);

                                                                                bodyRows.forEach(function(row) {
                                                                                    var tr = document.createElement('tr');

                                                                                    visibleColumnIndexes.forEach(function(index) {
                                                                                        var td = document.createElement('td');

                                                                                        td.textContent = (row[index] || '').trim();
                                                                                        tr.appendChild(td);
                                                                                    });

                                                                                    tbody.appendChild(tr);
                                                                                });

                                                                                table.appendChild(thead);
                                                                                table.appendChild(tbody);
                                                                                clearTableWrap();
                                                                                tableWrap.appendChild(table);
                                                                            }

                                                                            function updateLastUpdated(timestamp) {
                                                                                if (!lastUpdated) {
                                                                                    return;
                                                                                }

                                                                                timestamp = String(timestamp || '').trim();

                                                                                lastUpdated.textContent = timestamp ?
                                                                                    'Last Updated: ' + timestamp :
                                                                                    'Last Updated: unavailable';
                                                                            }

                                                                            function loadSheetData() {
                                                                                var freshApiUrl = isPlaceholderUrl(LSCE_SHEET_API_URL) ? '' : buildFreshUrl(LSCE_SHEET_API_URL);
                                                                                var requestSeq = ++sheetRequestSeq;

                                                                                if (isPlaceholderUrl(LSCE_SHEET_API_URL)) {
                                                                                    showTableError('Schedule API URL is not configured.');
                                                                                    if (lastUpdated) {
                                                                                        lastUpdated.textContent = 'Last Updated: unavailable';
                                                                                    }
                                                                                    return;
                                                                                }

                                                                                if (!window.fetch) {
                                                                                    showTableError('Schedule data is unavailable.');
                                                                                    if (lastUpdated) {
                                                                                        lastUpdated.textContent = 'Last Updated: unavailable';
                                                                                    }
                                                                                    return;
                                                                                }

                                                                                showTableMessage('Loading schedule...');
                                                                                if (lastUpdated) {
                                                                                    lastUpdated.textContent = 'Last Updated: loading...';
                                                                                }

                                                                                fetch(freshApiUrl, {
                                                                                        cache: 'no-store'
                                                                                    })
                                                                                    .then(function(response) {
                                                                                        if (!response.ok) {
                                                                                            throw new Error('Schedule request failed');
                                                                                        }

                                                                                        return response.json();
                                                                                    })
                                                                                    .then(function(sheetData) {
                                                                                        if (requestSeq !== sheetRequestSeq) {
                                                                                            return;
                                                                                        }

                                                                                        if (!sheetData || !Array.isArray(sheetData.headers) || !Array.isArray(sheetData.rows)) {
                                                                                            throw new Error('Invalid schedule response');
                                                                                        }

                                                                                        renderTable(sheetData.headers, sheetData.rows);
                                                                                        updateLastUpdated(sheetData.lastUpdated);
                                                                                    })
                                                                                    .catch(function() {
                                                                                        if (requestSeq !== sheetRequestSeq) {
                                                                                            return;
                                                                                        }

                                                                                        showTableError('Schedule data failed to load.');
                                                                                        if (lastUpdated) {
                                                                                            lastUpdated.textContent = 'Last Updated: unavailable';
                                                                                        }
                                                                                    });
                                                                            }

                                                                            function refreshSheetSection() {
                                                                                loadSheetData();
                                                                            }

                                                                            if (refreshButton) {
                                                                                refreshButton.addEventListener('click', refreshSheetSection);
                                                                            }

                                                                            refreshSheetSection();
                                                                        }());
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <style>
                @media (min-width: 481px) {
                    .row_0 .col_01 {
                        width: 0%;
                    }

                    .row_0 .col_02 {
                        width: 100%;
                    }

                    .row_0 .col_03 {
                        width: 0%;
                    }
                }
            </style>
            <!-- footer -->
            <div id="Dyn_footer">
                <div class="footer">
                    <div class="minner container">

                        <ul class="langbar">

                            <li><a href="#" onclick="openLangUrl('zh-tw');return false;"
                                    title="繁體"><span>繁體</span></a></li>

                            <li><a class="active" title="English"><span>English</span></a></li>

                        </ul>
                        <script>
                            function openLangUrl(p_lang) {
                                var curlang = getUrlParam("Lang");
                                if (curlang != "") {
                                    var str = window.location + "";
                                    window.location = str.replace("Lang=" + curlang, "Lang=" + p_lang);
                                } else {
                                    if (window.location.href.indexOf("?") > 0)
                                        window.location = window.location + '&Lang=' + p_lang;
                                    else
                                        window.location = window.location + '?Lang=' + p_lang;
                                }
                            }

                            function getUrlParam(paramName, url) {
                                if (typeof url == "undefined") url = window.location;
                                var oRegex = new RegExp('[\?&]' + paramName + '=([^&]+)', 'i');
                                var oMatch = oRegex.exec(url);
                                if (oMatch && oMatch.length > 1)
                                    return oMatch[1];
                                else
                                    return '';
                            }
                        </script>

                        <div class="copyright">
                            <div class="meditor">
                                <style type="text/css">
                                    /*二級選單向左延伸*/
                                    .dropdown-menu {
                                        min-width: 235px;
                                        right: 0;
                                        /*    left: auto; */
                                    }

                                    /*選單下級文字大小*/
                                    .dropdown-menu>li>a {
                                        font-size: 1.6rem;
                                        white-space: normal;
                                    }

                                    /*NEWS文字大小*/
                                    .tab-content .d-item .d-txt .mtitle {
                                        font-size: 1.6rem;
                                    }

                                    /*links文字大小*/
                                    .module-link .d-item .d-txt a {
                                        font-size: 1.5rem;
                                    }

                                    .M10020 .mtitle {
                                        position: absolute;
                                        bottom: -.2em;
                                        left: .5em;
                                    }

                                    .M10020 .mdate.after {
                                        float: left;
                                        position: relative;
                                        top: 1.5em;
                                        left: .5em;
                                    }

                                    .M10020 .more {
                                        margin-top: 3em;
                                    }

                                    /* 行動版 */
                                    @media (max-width: 767px) {

                                        .footTitle,
                                        .nav-tabs>li>a,
                                        .mt>* {
                                            font-size: 1.8rem;
                                            /* News模組標題大小 */
                                        }

                                        .d-item .d-txt .mtitle i.mdate.before {
                                            font-size: 1.5rem;
                                            /* News日期文字 大小 */
                                        }

                                        .tab-content .d-item .d-txt .mtitle a {
                                            font-size: 1.5rem;
                                            /* News標題文字大小 */
                                            white-space: normal;
                                            /* 標題折行 */
                                        }

                                        .module-link .mbox .d-txt a {
                                            white-space: normal;
                                            /* LINKS折行 */
                                        }
                                    }
                                </style>
                                <div class="contact col-md-6">
                                    <div class="footTitle"><a accesskey="B" href="#start-B" id="start-B"
                                            style="text-decoration:none" title="下方內容區"></a>Contact</div>
                                    <ul>
                                        <li>Tel: </li>
                                        <li>Address:&nbsp;<span
                                                style="font-family: verdana, arial, verdana; text-align: center;">Jl.
                                                Ketintang No.156, Ketintang, Kec. Gayungan, Surabaya, Jawa Timur
                                                60231</span></li>
                                    </ul>
                                </div>
                                <div class="contact col-md-6">
                                    <div class="footTitle">Campus Map</div>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3797403374724!2d112.72634007477424!3d-7.311166492696749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd1cb925a1d%3A0x1dbecb0b2e9b059f!2sUniversitas%20Telkom%20Surabaya!5e0!3m2!1sid!2sid!4v1767231187233!5m2!1sid!2sid"
                                        width="300" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="reserver" style="text-align: start;">Copyright @
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>&nbsp;IEBI All rights reserved.
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- generated at Fri Oct 31 2025 15:18:04 -->
            </div>


        </div>
    </div>
    <div class="fpbgvideo"></div>

    <div id="_pop_login" class="mpopdiv">
        <script>
            $(document).ready(function() {
                $.hajaxOpenUrl('/app/index.php?Action=mobileloadmod&Type=mobilepoplogin&Nbr=0', '#_pop_login', '',
                    function() {
                        menuDropAct();
                    });
            })
        </script>
    </div>

    <div id="_pop_tips" class="mtips">
        <div class="mbox">
        </div>
    </div>
    <div id="_pop_dialog" class="mdialog">
        <div class="minner">
            <div class="mcont">
            </div>
            <footer class="mdialog-foot">
                <button type="submit" class="mbtn mbtn-s">OK</button>
                <button type="submit" class="mbtn mbtn-c">Cancel</button>
            </footer>
        </div>
    </div>

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <!-- Background of PhotoSwipe.
 It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>
        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">
            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <!--  Controls are self-explanatory. Order can be changed. -->
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)">Close (Esc)</button>
                    <button class="pswp__button pswp__button--share" title="Share">Share</button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen">Toggle fullscreen</button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out">Zoom in/out</button>
                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader-active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">Previous (arrow
                    left)</button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">Next (arrow
                    right)</button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>



    <!--<script>
        NProgress.done();
    </script>-->
    <script>
        function popChkLogin() {
            if (typeof(loginStat) == 'undefined') {
                var chkstat = 0;
                var chkUrl = '/app/index.php?Action=mobilelogin';
                var chkData = {
                    Op: 'chklogin'
                };
                var chkObj = $.hajaxReturn(chkUrl, chkData);
                chkstat = chkObj.stat;
                if (chkstat) {
                    loginStat = "login";
                    return true;
                } else {
                    loginStat = "logout";
                    return false;
                }
            } else {
                if (loginStat == "login") return true;
                else return false;
            }
        }
    </script>
    <!-- generated at Fri Oct 31 2025 15:18:00 -->
</body>

</html>
