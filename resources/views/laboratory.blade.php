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
    <title>IEBI Laboratory</title>
    <link rel="icon" href="img/icon iebi.png">
    <link rel="bookmark" href="/var/file/14/1014/msys_1014_3087027_16703.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="/var/file/14/1014/msys_1014_3087027_16703.ico">
    <link rel="apple-touch-icon" href="/var/file/14/1014/msys_1014_3087027_16703.ico">
    <link rel="stylesheet" href="{{ asset('css/combine-en.css') }}?v=20260528" type="text/css" />
    <style>
        body.laboratory-page {
            font-size: 1.7rem;
        }

        body.laboratory-page .meditor {
            font-size: 0.92em;
        }

        body.laboratory-page .mt-title {
            font-size: 2.8rem;
            line-height: 1.2;
        }

        body.laboratory-page .lab-navbar__link,
        body.laboratory-page .lab-navbar__dropdown a {
            font-size: 1.6rem;
        }

        body.laboratory-page .copyright,
        body.laboratory-page .contact,
        body.laboratory-page .contact li,
        body.laboratory-page .contact a {
            font-size: 1.6rem;
        }

        body.laboratory-page .contact .footTitle {
            font-size: 2rem;
        }

        body.laboratory-page #Dyn_2_3 table[align="left"] {
            width: 100% !important;
            max-width: 1180px;
        }

        body.laboratory-page .laboratory-explanation p,
        body.laboratory-page .laboratory-table-explanation {
            text-align: justify;
        }

        @media (max-width: 991px) {
            body.laboratory-page {
                font-size: 1.55rem;
            }

            body.laboratory-page .mt-title {
                font-size: 2.4rem;
            }
        }

        body.laboratory-page .lab-navbar,
        body.laboratory-page .lab-navbar * {
            box-sizing: border-box;
        }

        body.laboratory-page .lab-navbar {
            background: #f7fafb;
            border-bottom: 1px solid #dde7ee;
            overflow: visible;
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
            box-shadow: none;
            display: flex;
            gap: 18px;
            justify-content: space-between;
            margin: 0;
            max-width: none;
            min-height: 76px;
            overflow: visible;
            padding: 12px 14px 12px 18px;
            position: relative;
            width: 100%;
        }

        body.laboratory-page .lab-navbar__brand {
            align-items: center;
            display: inline-flex;
            flex: 0 1 560px;
            min-width: 0;
            padding-left: 50px;
            text-decoration: none;
        }

        body.laboratory-page .lab-navbar__logo {
            display: block;
            height: 46px;
            max-width: 100%;
            object-fit: contain;
            width: auto;
        }

        body.laboratory-page .lab-sidebar-overlay {
            background-color: #2f2f2f;
            height: 100%;
            left: 0;
            opacity: 0.94;
            overflow-x: hidden;
            position: fixed;
            top: 0;
            transition: 0.5s;
            width: 0;
            z-index: 9999;
        }

        body.laboratory-page .lab-sidebar-content {
            left: 10%;
            margin-top: 30px;
            position: relative;
            text-align: left;
            top: 10%;
            width: 100%;
        }

        body.laboratory-page .lab-sidebar-close {
            background: transparent;
            border: 0;
            color: #fff;
            cursor: pointer;
            font-size: 50px;
            line-height: 1;
            padding: 0;
            position: absolute;
            right: 45px;
            top: 20px;
        }

        body.laboratory-page .lab-sidebar-category {
            color: #fff;
            display: block;
            font-size: 24px;
            font-weight: 700;
            margin: 0;
            padding: 0;
            text-decoration: none;
            transition: 0.3s;
        }

        body.laboratory-page .lab-sidebar-category:hover,
        body.laboratory-page .lab-sidebar-category:focus {
            color: #fff;
            font-size: 26px;
            text-decoration: none;
        }

        body.laboratory-page .lab-sidebar-category-box {
            max-width: 400px;
        }

        body.laboratory-page .lab-sidebar-category-box span {
            align-items: center;
            display: inline-flex;
            padding-top: 20px;
        }

        body.laboratory-page .lab-sidebar-icon {
            height: 40px;
            padding-right: 5px;
            width: 45px;
        }

        body.laboratory-page .lab-sidebar-subitem {
            display: none;
        }

        body.laboratory-page .lab-sidebar-category-box:hover .lab-sidebar-subitem,
        body.laboratory-page .lab-sidebar-category-box:focus-within .lab-sidebar-subitem {
            display: block;
        }

        body.laboratory-page .lab-sidebar-subitem a {
            color: #fff;
            display: block;
            font-size: 20px;
            font-weight: 500;
            margin-left: 50px;
            padding-top: 20px;
            text-decoration: none;
        }

        body.laboratory-page .lab-sidebar-subitem a:hover,
        body.laboratory-page .lab-sidebar-subitem a:focus {
            color: #a2a2a2;
            outline: none;
        }

        body.laboratory-page .lab-sidebar-toggle {
            align-items: center;
            background: #f8fbfc;
            border: 1px solid #dbe6ec;
            border-radius: 8px;
            cursor: pointer;
            display: inline-flex;
            flex: none;
            height: 44px;
            justify-content: center;
            left: 12px;
            padding: 0;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 44px;
            z-index: 2;
        }

        body.laboratory-page .lab-sidebar-toggle:hover,
        body.laboratory-page .lab-sidebar-toggle:focus {
            background: #fff;
            box-shadow: 0 8px 20px rgba(18, 38, 63, 0.08);
            outline: none;
        }

        body.laboratory-page .lab-sidebar-toggle-lines,
        body.laboratory-page .lab-sidebar-toggle-lines span {
            display: block;
        }

        body.laboratory-page .lab-sidebar-toggle-lines {
            width: 18px;
        }

        body.laboratory-page .lab-sidebar-toggle-lines span {
            background: #0f766e;
            border-radius: 2px;
            height: 2px;
            margin: 4px 0;
            width: 18px;
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
                padding-left: 0;
            }

            body.laboratory-page .lab-navbar__logo {
                height: 36px;
                max-width: 230px;
            }

            body.laboratory-page .lab-sidebar-toggle {
                display: none;
                left: 12px;
            }

            body.laboratory-page .lab-navbar__toggle {
                display: inline-flex;
            }

            body.laboratory-page .lab-navbar__menu {
                background: #fff;
                border: 1px solid #dbe6ec;
                border-radius: 8px;
                box-shadow: none;
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
    <script type="text/javascript" src="{{ asset('js/m_20251017.js') }}?v=20260528"></script>
</head>

<body class="page_mobilecgmolist webfree laboratory-page">
    <div id="myNav" class="lab-sidebar-overlay" aria-hidden="true">
        <button class="lab-sidebar-close" type="button" aria-label="Close sidebar">&times;</button>
        <div class="lab-sidebar-content">
            <a href="https://iebi.rg.telkomuniversity.ac.id/dashboard_dosen_iebi/" class="lab-sidebar-category">
                <div class="lab-sidebar-category-box">
                    <span>
                        <img class="lab-sidebar-icon" src="{{ asset('img/menu/Icon_About.png') }}" alt="">Dashboard
                    </span>
                </div>
            </a>
            <a href="{{ url('/laboratory') }}" class="lab-sidebar-category">
                <div class="lab-sidebar-category-box">
                    <span>
                        <img class="lab-sidebar-icon" src="{{ asset('img/menu/Icon_Academics.png') }}" alt="">Laboratory
                    </span>
                </div>
            </a>
            <a href="https://iebi.rg.telkomuniversity.ac.id/portal/komunitas-mahasiswa" class="lab-sidebar-category">
                <div class="lab-sidebar-category-box">
                    <span>
                        <img class="lab-sidebar-icon" src="{{ asset('img/menu/Icon_Student.png') }}" alt="">Community
                    </span>
                </div>
            </a>
            <div class="lab-sidebar-category">
                <div class="lab-sidebar-category-box">
                    <span>
                        <img class="lab-sidebar-icon" src="{{ asset('img/menu/Icon_Faculty.png') }}" alt="">Faculty
                    </span>
                    <div class="lab-sidebar-subitem"><a href="https://bis-sby.telkomuniversity.ac.id/staf-pengajar/">Information Systems</a></div>
                    <div class="lab-sidebar-subitem"><a href="https://bie-sby.telkomuniversity.ac.id/kategori-tenaga-pengajar/tenaga-pengajar/">Industrial Engineering</a></div>
                    <div class="lab-sidebar-subitem"><a href="https://bdb-sby.telkomuniversity.ac.id/akademik">Digital Business</a></div>
                    <div class="lab-sidebar-subitem"><a href="https://ble-sby.telkomuniversity.ac.id/staf-pengajar/">Logistics Engineering</a></div>
                </div>
            </div>
            <a href="https://iebi.rg.telkomuniversity.ac.id/portal/pengajuan-sertifikasi" class="lab-sidebar-category">
                <div class="lab-sidebar-category-box">
                    <span>
                        <img class="lab-sidebar-icon" src="{{ asset('img/menu/Icon_Academics.png') }}" alt="">Certification
                    </span>
                </div>
            </a>
            <a href="https://iebi.rg.telkomuniversity.ac.id/sparring/" class="lab-sidebar-category">
                <div class="lab-sidebar-category-box">
                    <span>
                        <img class="lab-sidebar-icon" src="{{ asset('img/menu/Icon_Admission.png') }}" alt="">Search
                    </span>
                </div>
            </a>
            <a href="https://iebi.rg.telkomuniversity.ac.id/master_data/roadmap" class="lab-sidebar-category">
                <div class="lab-sidebar-category-box">
                    <span>
                        <img class="lab-sidebar-icon" src="{{ asset('img/menu/Icon_Courses.png') }}" alt="">Roadmap
                    </span>
                </div>
            </a>
        </div>
    </div>

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
                                        <button class="lab-sidebar-toggle" type="button"
                                            aria-controls="myNav" aria-expanded="false" aria-label="Open sidebar">
                                            <span class="lab-sidebar-toggle-lines" aria-hidden="true">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </button>

                                        <a class="lab-navbar__brand" href="{{ url('/') }}">
                                            <img src="{{ asset('img/laboratory/ok.png') }}?v=20260528" class="lab-navbar__logo" style="height: 50px;" alt="">
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
                                                    <a class="lab-navbar__link" href="{{ url('/laboratory') }}"
                                                        title="Click to go Home">Home</a>
                                                </li>

                                                <li class="lab-navbar__item lab-navbar__item--has-dropdown">
                                                    <a class="lab-navbar__link" href="javascript:void(0)"
                                                        aria-expanded="false" aria-haspopup="true"
                                                        data-lab-dropdown-toggle
                                                        title="Click to go Laboratory">Laboratory
                                                        <span class="lab-navbar__caret" aria-hidden="true"></span></a>
                                                    <ul class="lab-navbar__dropdown" id="submenu1_2538">
                                                        <li><a href="qbi"
                                                                title="Click to go Quantitative Modelling for Business and Industry">Quantitative
                                                                Modelling for Business and Industry Lab</a></li>
                                                        <li><a href="mansys"
                                                                title="Click to go Manufacturing System">Manufacturing
                                                                System Lab</a></li>
                                                        <li><a href="lsce"
                                                                title="Click to go Logistic Supply Chain Engineering">Logistic
                                                                Supply Chain Engineering Lab</a></li>
                                                        <li><a href="eid"
                                                                title="Click to go Ergonomic and Innovation Design">Ergonomic
                                                                and Innovation Design Lab</a></li>
                                                        <li><a href="se"
                                                                title="Click to go Enterprise System">Enterprise
                                                                System Lab</a></li>
                                                        <li><a href="em"
                                                                title="Click to go Engineering Management">Engineering
                                                                Management Lab</a></li>
                                                        <li><a href="digital"
                                                                title="Click to go Digital Start-Up">Digital
                                                                Start-Up Lab</a></li>
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
                                        var sidebar = document.getElementById('myNav');
                                        var sidebarToggle = document.querySelector('.lab-sidebar-toggle');
                                        var sidebarClose = document.querySelector('.lab-sidebar-close');

                                        if (!sidebar || !sidebarToggle || !sidebarClose) return;

                                        function setSidebar(open) {
                                            sidebar.style.width = open ? '455px' : '0%';
                                            sidebar.setAttribute('aria-hidden', open ? 'false' : 'true');
                                            sidebarToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
                                        }

                                        sidebarToggle.addEventListener('click', function() {
                                            setSidebar(true);
                                        });

                                        sidebarClose.addEventListener('click', function() {
                                            setSidebar(false);
                                        });
                                    });
                                </script>

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
                                        <!-- slide show -->
                                        <div id="banner">
                                            <div class="module module-special md_style1">
                                                <div class="mouter">
                                                    <header class="mt mthide "></header>
                                                    <section class="mb">
                                                        <div
                                                            class="_special_listSlide___a942ffd5cb93f8df033cc3d808797d96b row listBS listSlide owl-carousel owl-loaded owl-drag">
                                                            <div class="owl-stage-outer">
                                                                <div class="owl-stage"
                                                                    style="transform: translate3d(-3732px, 0px, 0px); transition: 0.25s; width: 5972px;">
                                                                    <div class="owl-item cloned"
                                                                        style="width: 746.4px;">
                                                                        <table width="100%" border="0"
                                                                            cellpadding="0" cellspacing="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="100%">
                                                                                        <div
                                                                                            class="d-item h-ir-td col-sm-12">
                                                                                            <div class="mbox">
                                                                                                <div class="d-img">
                                                                                                    <!-- GAMBAR SLIDE SHOW -->
                                                                                                    <a tabindex="-1">
                                                                                                        <img src="{{ asset('img/laboratory/1.jpg') }}?v=20260528"
                                                                                                            class="img-responsive"
                                                                                                            alt="工業管理系Image">
                                                                                                    </a>
                                                                                                </div>
                                                                                                <!-- text pada banner -->
                                                                                                <div class="d-txt">
                                                                                                    <div
                                                                                                        class="mtitle">
                                                                                                        <a href="https://www.im.ntust.edu.tw/p/406-1014-76316,r1220.php?Lang=en"
                                                                                                            title="工業管理系(Current windowOpen)"
                                                                                                            tabindex="-1">
                                                                                                            Telkom
                                                                                                            University
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mdetail">
                                                                                                        <div
                                                                                                            class="meditor">
                                                                                                            Surabaya
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- gambar 2 -->
                                                                    <div class="owl-item" style="width: 746.4px;">
                                                                        <table class="listTB" width="100%"
                                                                            border="0" cellpadding="0"
                                                                            cellspacing="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="100%">
                                                                                        <div
                                                                                            class="d-item h-ir-td col-sm-12">
                                                                                            <div class="mbox">
                                                                                                <div class="d-img">
                                                                                                    <a>
                                                                                                        <img src="{{ asset('img/laboratory/2.jpg') }}?v=20260528"
                                                                                                            class="img-responsive"
                                                                                                            alt="工業管理系Image">
                                                                                                    </a>
                                                                                                </div>
                                                                                                <!-- text pada banner -->
                                                                                                <div class="d-txt">
                                                                                                    <div
                                                                                                        class="mtitle">
                                                                                                        <a href="https://www.im.ntust.edu.tw/p/406-1014-76316,r1220.php?Lang=en"
                                                                                                            title="工業管理系(Current windowOpen)"
                                                                                                            tabindex="-1">
                                                                                                            Telkom
                                                                                                            University
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mdetail">
                                                                                                        <div
                                                                                                            class="meditor">
                                                                                                            Surabaya
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- gambar 3 -->
                                                                    <div class="owl-item" style="width: 746.4px;">
                                                                        <table class="listTB" width="100%"
                                                                            border="0" cellpadding="0"
                                                                            cellspacing="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="100%">
                                                                                        <div
                                                                                            class="d-item h-ir-td col-sm-12">
                                                                                            <div class="mbox">
                                                                                                <div class="d-img">
                                                                                                    <a>
                                                                                                        <img src="{{ asset('img/laboratory/3.jpg') }}?v=20260528"
                                                                                                            class="img-responsive"
                                                                                                            alt="工業管理系Image">
                                                                                                    </a>
                                                                                                </div>
                                                                                                <!-- text pada banner -->
                                                                                                <div class="d-txt">
                                                                                                    <div
                                                                                                        class="mtitle">
                                                                                                        <a href="https://www.im.ntust.edu.tw/p/406-1014-76316,r1220.php?Lang=en"
                                                                                                            title="工業管理系(Current windowOpen)"
                                                                                                            tabindex="-1">
                                                                                                            Telkom
                                                                                                            University
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mdetail">
                                                                                                        <div
                                                                                                            class="meditor">
                                                                                                            Surabaya
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- GAMBAR KE 4 -->
                                                                    <!-- <div class="owl-item" style="width: 746.4px;">
                                                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width="100%">
                                                                                    <div class="d-item h-ir-td col-sm-12">
                                                                                        <div class="mbox">
                                                                                            <div class="d-img">
                                                                                                <a><img src="{{ asset('img/laboratory/4.png') }}?v=20260528" class="img-responsive" alt="工業管理系Image"></a>
                                                                                            </div>
                                                                                            <div class="d-txt">
                                                                                                <div class="mtitle">
                                                                                                    <a href="https://www.im.ntust.edu.tw/p/406-1014-76316,r1220.php?Lang=en" title="工業管理系(Current windowOpen)" tabindex="-1">
                                                                                                        Telkom University
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="mdetail">
                                                                                                    <div class="meditor">
                                                                                                        Surabaya
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div> -->
                                                                    <div class="owl-nav">
                                                                        <button type="button" role="button"
                                                                            class="owl-prev" aria-label="Move Left">
                                                                            <span class="carouselPre">
                                                                                < </span>
                                                                        </button>
                                                                        <button type="button" role="button"
                                                                            class="owl-next" aria-label="Move Right">
                                                                            <span class="carouselNext">
                                                                                >
                                                                            </span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <script type="text/javascript" defer="">
                                                                    if (4 > 1) {
                                                                        $(document).ready(function() {
                                                                            var special_owl = $('._special_listSlide___a942ffd5cb93f8df033cc3d808797d96b').owlCarousel({
                                                                                items: 1,
                                                                                loop: true,
                                                                                nav: true,

                                                                                autoplay: true,
                                                                                autoplayTimeout: 5.0 * 1000,
                                                                                autoplayHoverPause: true,

                                                                                dots: true,

                                                                            });

                                                                            tabCarousel(special_owl, '._special_listSlide___a942ffd5cb93f8df033cc3d808797d96b', 'Move Left',
                                                                                'Move Right', "工業管理系Image~@~@~@工業管理系Image~@~@~@工業管理系Image~@~@~@工業管理系Image~@~@~@", '', 1)
                                                                        });
                                                                    } else {
                                                                        $('._special_listSlide___a942ffd5cb93f8df033cc3d808797d96b').removeClass("owl-carousel");
                                                                    }
                                                                </script>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                /* Legacy mobile banner module disabled: source /app/index.php is not part of this Laravel deploy. */
                                                $('.focusable,.lab-navbar a,.lab-navbar button').attr('tabindex', '1');
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <noscript>This function need to use the browser to support JavaScript normal
                            operation</noscript>

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
                                                                            <div class="laboratory-explanation">
                                                                                <p>
                                                                                    The <strong>Industrial Engineering &amp;
                                                                                        Business Innovation (IEBI) Research
                                                                                        Group</strong> is an
                                                                                    interdisciplinary research group at
                                                                                    Telkom University Surabaya that
                                                                                    integrates industrial engineering
                                                                                    principles with business innovation
                                                                                    concepts. Its primary focus is
                                                                                    developing and implementing efficient
                                                                                    solutions to enhance productivity,
                                                                                    quality, and organizational
                                                                                    competitiveness in facing the challenges
                                                                                    of the Industry 4.0 era and dynamic
                                                                                    global economy. The group aims to
                                                                                    produce solutions that not only improve
                                                                                    operational efficiency but also drive
                                                                                    sustainable innovation — preparing
                                                                                    individuals and organizations to adapt
                                                                                    and compete at the global level.
                                                                                </p>
                                                                                <p style="margin-top: 10px;">
                                                                                    IEBI consists of seven dedicated
                                                                                    research laboratories:
                                                                                    <strong>Quantitative Modelling for
                                                                                        Business and Industry
                                                                                        (QBI)</strong>,
                                                                                    <strong>Manufacturing System
                                                                                        (MANSYS)</strong>,
                                                                                    <strong>Logistic Supply Chain
                                                                                        Engineering (LSCE)</strong>,
                                                                                    <strong>Ergonomic and Innovation Design
                                                                                        (EID)</strong>,
                                                                                    <strong>Enterprise System (SE)</strong>,
                                                                                    <strong>Engineering Management
                                                                                        (EM)</strong>, and
                                                                                    <strong>Digital Start-Up
                                                                                        (DIGITAL)</strong>.
                                                                                </p>
                                                                            </div>
                                                                            <table align="left" border="0"
                                                                                cellpadding="4" cellspacing="1"
                                                                                style="width:1500px;">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <td colspan="1"
                                                                                            style="text-align: left; white-space: nowrap; width: 5%; background-color: rgb(204, 204, 204); vertical-align: top;">
                                                                                            <span
                                                                                                style="font-size:0.875em;"><span
                                                                                                    style="color:#000066;"><strong><span
                                                                                                            style="font-family:Arial,Helvetica,sans-serif;">Laboratories&nbsp;</span></strong></span></span>
                                                                                        </td>
                                                                                        <td colspan="1"
                                                                                            style="text-align: left; vertical-align: top; width: 20%; background-color: rgb(204, 204, 204);">
                                                                                            <span
                                                                                                style="font-size:0.875em;"><span
                                                                                                    style="color:#000066;"><strong><span
                                                                                                            style="font-family:Arial,Helvetica,sans-serif;">&nbsp;Introduction
                                                                                                        </span></strong></span></span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <!-- Quantitative Modelling for Business and Industry QBI -->
                                                                                    <tr>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; white-space: nowrap; width: 5%; background-color: rgb(197, 224, 180); vertical-align: top;">
                                                                                            <strong>
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.75em;">Quantitative
                                                                                                        Modelling for
                                                                                                        Business and
                                                                                                        Industry (QBI)
                                                                                                        (C 5.06)</span>
                                                                                                </span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <img
                                                                                                src="{{ asset('img/laboratory/qbi.jpg') }}?v=20260528">
                                                                                            <br>
                                                                                            <strong
                                                                                                style="font-size: 0.75em;">
                                                                                                <span
                                                                                                    style="line-height:23.65pt">Head of Laboratory:
                                                                                                    Paramaditya Arismawati, S.T., M.T.</span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <span
                                                                                                style="font-size:0.75em;">email:
                                                                                                paramadityaars@telkomuniversity.ac.id </span>
                                                                                        </td>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; vertical-align: top; width: 20%; background-color: rgb(226, 240, 217);">
                                                                                            <p class="laboratory-table-explanation"
                                                                                                style="margin-bottom:10px">
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.625em;">
                                                                                                        The QBI
                                                                                                        Laboratory
                                                                                                        focuses on
                                                                                                        applying
                                                                                                        mathematics and
                                                                                                        statistics to
                                                                                                        solve real-world
                                                                                                        problems in
                                                                                                        industry and
                                                                                                        business.
                                                                                                        Through
                                                                                                        quantitative and
                                                                                                        data-driven
                                                                                                        approaches, it
                                                                                                        aims to improve
                                                                                                        efficiency,
                                                                                                        optimize
                                                                                                        decision-making,
                                                                                                        and design
                                                                                                        business
                                                                                                        strategies
                                                                                                        supported by
                                                                                                        mathematical and
                                                                                                        statistical
                                                                                                        analysis.
                                                                                                        Research areas
                                                                                                        include
                                                                                                        Mathematical
                                                                                                        Optimization,
                                                                                                        Modeling and
                                                                                                        Simulation,
                                                                                                        Queueing Theory,
                                                                                                        Operations
                                                                                                        Research,
                                                                                                        Regression and
                                                                                                        Predictive
                                                                                                        Analysis, Data
                                                                                                        Mining and
                                                                                                        Machine
                                                                                                        Learning, and
                                                                                                        Probabilistic
                                                                                                        Analysis.
                                                                                                    </span>
                                                                                                </span>
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr></tr>
                                                                                    <tr></tr>

                                                                                    <!-- Manufacturing System MANSYS -->
                                                                                    <tr>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; white-space: nowrap; width: 5%; background-color: rgb(197, 224, 180); vertical-align: top;">
                                                                                            <strong>
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.75em;">Manufacturing
                                                                                                        System
                                                                                                        (MANSYS)</span>
                                                                                                </span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <img
                                                                                                src="{{ asset('img/laboratory/mansys.jpg') }}?v=20260528">
                                                                                            <br>
                                                                                            <strong
                                                                                                style="font-size: 0.75em;">
                                                                                                <span
                                                                                                    style="line-height:23.65pt">Head of Laboratory:
                                                                                                    Aufar Fikri Dimyati, S.T., M.T.</span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <span
                                                                                                style="font-size:0.75em;">email:
                                                                                                aufarfd@telkomuniversity.ac.id </span>
                                                                                        </td>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; vertical-align: top; width: 20%; background-color: rgb(226, 240, 217);">
                                                                                            <p class="laboratory-table-explanation"
                                                                                                style="margin-bottom:10px">
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.625em;">
                                                                                                        The MANSYS
                                                                                                        Laboratory
                                                                                                        combines
                                                                                                        technical
                                                                                                        approaches in
                                                                                                        managing and
                                                                                                        optimizing
                                                                                                        production
                                                                                                        systems with
                                                                                                        ergonomic
                                                                                                        principles to
                                                                                                        create
                                                                                                        efficient, safe,
                                                                                                        and
                                                                                                        people-centered
                                                                                                        industrial work
                                                                                                        systems.
                                                                                                        Research areas
                                                                                                        include
                                                                                                        Automation and
                                                                                                        Manufacturing
                                                                                                        Technology,
                                                                                                        Production
                                                                                                        System
                                                                                                        Management,
                                                                                                        Quality
                                                                                                        Management,
                                                                                                        Sustainable
                                                                                                        Manufacturing,
                                                                                                        Design for X,
                                                                                                        Physical
                                                                                                        Ergonomics,
                                                                                                        Cognitive
                                                                                                        Ergonomics,
                                                                                                        Organizational
                                                                                                        Ergonomics,
                                                                                                        Occupational
                                                                                                        Health and
                                                                                                        Safety, and
                                                                                                        Product
                                                                                                        Development.
                                                                                                    </span>
                                                                                                </span>
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr></tr>
                                                                                    <tr></tr>

                                                                                    <!-- Logistic Supply Chain Engineering LSCE -->
                                                                                    <tr>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; white-space: nowrap; width: 5%; background-color: rgb(197, 224, 180); vertical-align: top;">
                                                                                            <strong>
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.75em;">Logistic
                                                                                                        Supply Chain
                                                                                                        Engineering
                                                                                                        (LSCE) (2.14)</span>
                                                                                                </span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <img
                                                                                                src="{{ asset('img/laboratory/lsce.jpg') }}?v=20260528">
                                                                                            <br>
                                                                                            <strong
                                                                                                style="font-size: 0.75em;">
                                                                                                <span
                                                                                                    style="line-height:23.65pt">Head of Laboratory:
                                                                                                    Desita Nur Rachmaniar, S.T., M.Sc.</span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <span
                                                                                                style="font-size:0.75em;">email:
                                                                                                desitanurr@telkomuniversity.ac.id </span>
                                                                                        </td>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; vertical-align: top; width: 20%; background-color: rgb(226, 240, 217);">
                                                                                            <p class="laboratory-table-explanation"
                                                                                                style="margin-bottom:10px">
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.625em;">
                                                                                                        The LSCE
                                                                                                        Laboratory
                                                                                                        focuses on
                                                                                                        managing and
                                                                                                        optimizing the
                                                                                                        flow of goods,
                                                                                                        information, and
                                                                                                        resources from
                                                                                                        suppliers to end
                                                                                                        consumers. As
                                                                                                        global market
                                                                                                        complexity
                                                                                                        increases,
                                                                                                        supply chain and
                                                                                                        logistics play a
                                                                                                        crucial role in
                                                                                                        improving
                                                                                                        operational
                                                                                                        efficiency,
                                                                                                        reducing costs,
                                                                                                        and fulfilling
                                                                                                        customer demand
                                                                                                        on time.
                                                                                                        Research areas
                                                                                                        include Supply
                                                                                                        Chain
                                                                                                        Management,
                                                                                                        Logistics and
                                                                                                        Distribution,
                                                                                                        and Warehousing
                                                                                                        Systems.
                                                                                                    </span>
                                                                                                </span>
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr></tr>
                                                                                    <tr></tr>

                                                                                    <!-- Ergonomic and Innovation Design EID -->
                                                                                    <tr>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; white-space: nowrap; width: 5%; background-color: rgb(197, 224, 180); vertical-align: top;">
                                                                                            <strong>
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.75em;">Ergonomic
                                                                                                        and Innovation
                                                                                                        Design (EID) (C
                                                                                                        1.07)</span>
                                                                                                </span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <img
                                                                                                src="{{ asset('img/laboratory/eid.jpg') }}?v=20260528">
                                                                                            <br>
                                                                                            <strong
                                                                                                style="font-size: 0.75em;">
                                                                                                <span
                                                                                                    style="line-height:23.65pt">Head of Laboratory:
                                                                                                    Huki Chandra, S.T., M.Sc.</span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <span
                                                                                                style="font-size:0.75em;">email:
                                                                                                hukichandra@telkomuniversity.ac.id </span>
                                                                                        </td>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; vertical-align: top; width: 20%; background-color: rgb(226, 240, 217);">
                                                                                            <p class="laboratory-table-explanation"
                                                                                                style="margin-bottom:10px">
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.625em;">
                                                                                                        The EID
                                                                                                        Laboratory
                                                                                                        applies
                                                                                                        ergonomic
                                                                                                        principles to
                                                                                                        design products
                                                                                                        and work systems
                                                                                                        that are
                                                                                                        efficient, safe,
                                                                                                        and comfortable
                                                                                                        for users.
                                                                                                        Research areas
                                                                                                        include Physical
                                                                                                        Ergonomics,
                                                                                                        Cognitive
                                                                                                        Ergonomics,
                                                                                                        Organizational
                                                                                                        Ergonomics,
                                                                                                        Occupational
                                                                                                        Health and
                                                                                                        Safety, and
                                                                                                        Product
                                                                                                        Development.
                                                                                                    </span>
                                                                                                </span>
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr></tr>
                                                                                    <tr></tr>

                                                                                    <!-- Enterprise System SE -->
                                                                                    <tr>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; white-space: nowrap; width: 5%; background-color: rgb(197, 224, 180); vertical-align: top;">
                                                                                            <strong>
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.75em;">Enterprise
                                                                                                        System (SE) (C
                                                                                                        3.07)</span>
                                                                                                </span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <img
                                                                                                src="{{ asset('img/laboratory/se.jpeg') }}?v=20260528">
                                                                                            <br>
                                                                                            <strong
                                                                                                style="font-size: 0.75em;">
                                                                                                <span
                                                                                                    style="line-height:23.65pt">Head of Laboratory:
                                                                                                    Alifiansyah Arrizqy Hidayat, S.Kom., M.Kom.</span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <span
                                                                                                style="font-size:0.75em;">email:
                                                                                                deandrys@telkomuniversity.ac.id </span>
                                                                                        </td>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; vertical-align: top; width: 20%; background-color: rgb(226, 240, 217);">
                                                                                            <p class="laboratory-table-explanation"
                                                                                                style="margin-bottom:10px">
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.625em;">
                                                                                                        The SE
                                                                                                        Laboratory
                                                                                                        focuses on
                                                                                                        applying
                                                                                                        management
                                                                                                        principles,
                                                                                                        information
                                                                                                        technology, and
                                                                                                        systems to
                                                                                                        improve
                                                                                                        operational
                                                                                                        efficiency and
                                                                                                        effectiveness
                                                                                                        within
                                                                                                        organizations.
                                                                                                        Research areas
                                                                                                        include
                                                                                                        Management
                                                                                                        Information
                                                                                                        Systems,
                                                                                                        Customer
                                                                                                        Relationship
                                                                                                        Management
                                                                                                        (CRM),
                                                                                                        Enterprise
                                                                                                        Resource
                                                                                                        Planning (ERP),
                                                                                                        Data Analysis
                                                                                                        and Decision
                                                                                                        Making, and IT
                                                                                                        Project
                                                                                                        Management.
                                                                                                    </span>
                                                                                                </span>
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr></tr>
                                                                                    <tr></tr>

                                                                                    <!-- Engineering Management EM -->
                                                                                    <tr>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; white-space: nowrap; width: 5%; background-color: rgb(197, 224, 180); vertical-align: top;">
                                                                                            <strong>
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.75em;">Engineering
                                                                                                        Management (EM)
                                                                                                        (C 3.01)</span>
                                                                                                </span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <img
                                                                                                src="{{ asset('img/laboratory/em.jpeg') }}?v=20260528">
                                                                                            <br>
                                                                                            <strong
                                                                                                style="font-size: 0.75em;">
                                                                                                <span
                                                                                                    style="line-height:23.65pt">Head of Laboratory: Ayu Endah Wahyuni, S.T., M.T.</span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <span
                                                                                                style="font-size:0.75em;">email:
                                                                                                ayuendah@telkomuniversity.ac.id </span>
                                                                                        </td>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; vertical-align: top; width: 20%; background-color: rgb(226, 240, 217);">
                                                                                            <p class="laboratory-table-explanation"
                                                                                                style="margin-bottom:10px">
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.625em;">
                                                                                                        The EM
                                                                                                        Laboratory
                                                                                                        integrates
                                                                                                        engineering
                                                                                                        management,
                                                                                                        business
                                                                                                        management, and
                                                                                                        economic theory
                                                                                                        to create
                                                                                                        efficient and
                                                                                                        innovative
                                                                                                        solutions in
                                                                                                        organizational
                                                                                                        management. It
                                                                                                        focuses on
                                                                                                        applying
                                                                                                        economic
                                                                                                        analysis in
                                                                                                        engineering and
                                                                                                        business
                                                                                                        contexts to
                                                                                                        optimize
                                                                                                        resources,
                                                                                                        increase
                                                                                                        productivity,
                                                                                                        and create added
                                                                                                        value. Research
                                                                                                        areas include
                                                                                                        Engineering
                                                                                                        Management,
                                                                                                        Business
                                                                                                        Management,
                                                                                                        Micro and Macro
                                                                                                        Economics,
                                                                                                        Cost-Benefit
                                                                                                        Analysis, and
                                                                                                        Product
                                                                                                        Innovation and
                                                                                                        Development.
                                                                                                    </span>
                                                                                                </span>
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr></tr>
                                                                                    <tr></tr>

                                                                                    <!-- Digital Start-Up DIGITAL -->
                                                                                    <tr>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; white-space: nowrap; width: 5%; background-color: rgb(197, 224, 180); vertical-align: top;">
                                                                                            <strong>
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span
                                                                                                        style="font-size:0.75em;">Digital
                                                                                                        Start-Up
                                                                                                        (DIGITAL) (C
                                                                                                        5.01)</span>
                                                                                                </span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <img
                                                                                                src="{{ asset('img/laboratory/digital.jpeg') }}?v=20260528">
                                                                                            <br>
                                                                                            <strong
                                                                                                style="font-size: 0.75em;">
                                                                                                <span
                                                                                                    style="line-height:23.65pt">Head of Laboratory:
                                                                                                    Krisnayanti Aditasari, S.M., M.MT.</span>
                                                                                            </strong>
                                                                                            <br>
                                                                                            <span
                                                                                                style="font-size:0.75em;">email:
                                                                                                krisnaaditasari@telkomuniversity.ac.id </span>
                                                                                        </td>
                                                                                        <td colspan="1"
                                                                                            rowspan="3"
                                                                                            style="text-align: left; vertical-align: top; width: 20%; background-color: rgb(226, 240, 217);">
                                                                                            <p class="laboratory-table-explanation"
                                                                                                style="margin-bottom:10px">
                                                                                                <span
                                                                                                    style="font-family:Arial,Helvetica,sans-serif;">
                                                                                                    <span style="font-size:0.625em;">
    The Digital Start-Up Laboratory focuses on developing digital entrepreneurship and startup ecosystems within the context of industrial engineering and business innovation, bridging technology with business strategies to create sustainable digital ventures.
    Research areas include Digital Business Model Innovation, Technology-Based Entrepreneurship, Startup Ecosystem Development, Digital Marketing Strategy, and New Product and Service Development.
</span>
                                                                                                </span>
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr></tr>
                                                                                    <tr></tr>
                                                                                </tbody>
                                                                            </table>

                                                                            <p>&nbsp;</p>

                                                                            <p>&nbsp;</p>

                                                                            <p>&nbsp;</p>

                                                                            <p>&nbsp;</p>

                                                                            <p>&nbsp;</p>

                                                                            <p>&nbsp;</p>
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
                        if (typeof menuDropAct === 'function') {
                            menuDropAct();
                        }
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
                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen">Toggle
                                fullscreen</button>
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
                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">Previous
                            (arrow left)</button>
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
</body>

</html>
