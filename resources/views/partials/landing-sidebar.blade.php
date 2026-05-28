<link rel="stylesheet" type="text/css" href="{{ asset('css/share.css') }}">
<style>
    .landing-sidebar-shell .leftside_img {
        z-index: 3000;
    }

    .landing-sidebar-shell ~ .wrap {
        margin-left: 455px;
        width: calc(100% - 455px);
    }

    .landing-sidebar-shell .categorydiv:hover .hidden_a,
    .landing-sidebar-shell .categorydiv:focus-within .hidden_a {
        display: block;
    }

    body.laboratory-page .landing-sidebar-shell .leftside_img {
        background: transparent;
        display: block;
        height: 0;
        margin: 0;
        position: static;
        width: 0;
    }

    body.laboratory-page .landing-sidebar-shell #menu_btn {
        background: transparent;
        box-shadow: none;
        left: 16px;
        position: fixed;
        top: 18px;
        z-index: 4000;
    }

    body.laboratory-page .landing-sidebar-shell #menu_btn span {
        background: #000;
    }

    body.laboratory-page .landing-sidebar-shell .menu_homepage,
    body.laboratory-page .landing-sidebar-shell .context_img {
        display: none;
    }

    body.laboratory-page .landing-sidebar-shell ~ .wrap {
        margin-left: 0;
        width: 100%;
    }

    body.laboratory-page .lab-navbar__inner {
        padding-left: 84px;
    }

    @media (max-width: 991px) {
        .landing-sidebar-shell .leftside_img {
            position: relative;
            width: 100%;
            height: 86px;
            display: block;
            background-size: cover;
        }

        .landing-sidebar-shell .context_img {
            display: none;
        }

        .landing-sidebar-shell .menu_homepage {
            left: 88px;
        }

        .landing-sidebar-shell ~ .wrap {
            margin-left: 0;
            width: 100%;
        }

        body.laboratory-page .landing-sidebar-shell .leftside_img {
            height: 0;
            position: static;
            width: 0;
        }
    }
</style>

<div class="landing-sidebar-shell">
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="document.getElementById('myNav').style.width = '0'">&times;</a>
        <div class="overlay-content">
            <a href="https://iebi.rg.telkomuniversity.ac.id/dashboard_dosen_iebi/" id="s_about" class="category_name">
                <div id="s_about_con" class="categorydiv">
                    <span>
                        <img class="icon" src="{{ asset('img/menu/Icon_About.png') }}">Dashboard
                    </span>
                </div>
            </a>
            <a href="{{ url('laboratory') }}" class="category_name">
                <div id="s_academic_con" class="categorydiv">
                    <span>
                        <img class="icon" src="{{ asset('img/menu/Icon_Academics.png') }}">Laboratory
                    </span>
                    <div class="hidden_a hidden_a_academic first_hidden_a"><a href=""></a></div>
                    <div class="hidden_a hidden_a_academic"><a href=""></a></div>
                </div>
            </a>
            <a href="https://iebi.rg.telkomuniversity.ac.id/portal/komunitas-mahasiswa" class="category_name">
                <div id="s_academic_con" class="categorydiv">
                    <span>
                        <img class="icon" src="{{ asset('img/menu/Icon_Student.png') }}">Community
                    </span>
                    <div class="hidden_a hidden_a_academic first_hidden_a"><a href=""></a></div>
                    <div class="hidden_a hidden_a_academic"><a href=""></a></div>
                </div>
            </a>
            <div class="category_name">
                <div id="s_faculty_con" class="categorydiv">
                    <span>
                        <img class="icon" src="{{ asset('img/menu/Icon_Faculty.png') }}">Faculty
                    </span>
                    <div class="hidden_a hidden_a_faculty first_hidden_a"><a href="https://bis-sby.telkomuniversity.ac.id/staf-pengajar/">Information Systems</a></div>
                    <div class="hidden_a hidden_a_faculty"><a href="https://bie-sby.telkomuniversity.ac.id/kategori-tenaga-pengajar/tenaga-pengajar/">Industrial Engineering</a></div>
                    <div class="hidden_a hidden_a_faculty"><a href="https://bdb-sby.telkomuniversity.ac.id/akademik">Digital Business</a></div>
                    <div class="hidden_a hidden_a_faculty"><a href="https://ble-sby.telkomuniversity.ac.id/staf-pengajar/">Logistics Engineering</a></div>
                </div>
            </div>
            <a href="https://iebi.rg.telkomuniversity.ac.id/portal/pengajuan-sertifikasi" class="category_name">
                <div id="s_academic_con" class="categorydiv">
                    <span>
                        <img class="icon" src="{{ asset('img/menu/Icon_Academics.png') }}">Certification
                    </span>
                    <div class="hidden_a hidden_a_academic first_hidden_a"><a href="https://iebi.rg.telkomuniversity.ac.id/portal/pengajuan-sertifikasi">Portal Sertifikasi</a></div>
                    <div class="hidden_a hidden_a_academic"><a href="https://iebi.rg.telkomuniversity.ac.id/portal/pengajuan-sertifikasi">Formulir Sertifikasi</a></div>
                </div>
            </a>
            <a href="https://iebi.rg.telkomuniversity.ac.id/sparring/" class="category_name">
                <div id="s_academic_con" class="categorydiv">
                    <span>
                        <img class="icon" src="{{ asset('img/menu/Icon_Admission.png') }}">Search
                    </span>
                    <div class="hidden_a hidden_a_academic first_hidden_a"><a href="{{ url('/sparring') }}">SPARRING</a></div>
                </div>
            </a>
        </div>
    </div>
    
    <aside class="leftside_img">
        <div id="menu_btn" onclick="document.getElementById('myNav').style.width = '455px'">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <a href="{{ url('/') }}">
            <div class="menu_homepage">
                <h1 id="logo_title">IEBI</h1>
                <img id="logo_bg" src="{{ asset('img/menu/logo_bg.png') }}">
                <img id="logo_slash" src="{{ asset('img/logo_slash.png') }}">
                <img id="logo_icon" src="{{ asset('img/laboratory/iebi logo.png') }}">
            </div>
        </a>
        <img class="context_img img1" src="{{ asset('img/about/about_1.png') }}">
        <img class="context_img img2" src="{{ asset('img/about/about_2.png') }}">
        <img class="context_img img3" src="{{ asset('img/about/about_3.png') }}">
        <img class="context_img img4" src="{{ asset('img/about/about_4.png') }}">
        <img class="context_img img5" src="{{ asset('img/about/about_5.png') }}">
        <img class="context_img img6" src="{{ asset('img/about/about_6.png') }}">
        <img class="context_img img7" src="{{ asset('img/about/about_7.png') }}">
        <img class="context_img img8" src="{{ asset('img/about/about_8.png') }}">
    </aside>
</div>
