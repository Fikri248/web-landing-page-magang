<style>
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

    @media (max-width: 767px) {
        body.laboratory-page .lab-sidebar-toggle {
            display: none;
            left: 12px;
        }
    }
</style>

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
