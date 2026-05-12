<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Research Group of Industrial Engineering and Business Innovation" />
    <meta property="og:description" content="Faculty" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="{{ asset('img/home/Banner-01.png') }}" />
    <title>IEBI Faculty</title>
    <link rel="icon" href="{{ asset('img/icon iebi.png') }}">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/share.css') }}">
    <style>
        body {
            background: #f5f8fb;
            color: #1c2433;
            font-family: "Source Sans Pro", Arial, sans-serif;
        }

        .faculty-page {
            max-width: 960px;
            margin: 0 auto;
            padding: 64px 24px;
        }

        .faculty-logo {
            display: inline-flex;
            align-items: center;
            gap: 16px;
            color: #1c2433;
            text-decoration: none;
        }

        .faculty-logo img {
            height: 50px;
        }

        .faculty-logo strong {
            font-size: 22px;
            letter-spacing: .04em;
        }

        .faculty-title {
            margin: 48px 0 12px;
            font-size: 42px;
            font-weight: 700;
        }

        .faculty-lead {
            max-width: 720px;
            margin-bottom: 36px;
            font-size: 18px;
            line-height: 1.6;
        }

        .faculty-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
        }

        .faculty-card {
            display: block;
            min-height: 128px;
            padding: 24px;
            border: 1px solid #dbe5f2;
            border-radius: 8px;
            background: #fff;
            color: #1c2433;
            text-decoration: none;
            transition: transform .16s ease, border-color .16s ease, box-shadow .16s ease;
        }

        .faculty-card:hover,
        .faculty-card:focus {
            border-color: #c23b32;
            box-shadow: 0 12px 30px rgba(28, 36, 51, .12);
            color: #1c2433;
            text-decoration: none;
            transform: translateY(-2px);
        }

        .faculty-card span {
            display: block;
            margin-bottom: 12px;
            color: #c23b32;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .faculty-card strong {
            display: block;
            font-size: 22px;
            line-height: 1.25;
        }

        .faculty-actions {
            margin-top: 36px;
        }

        .faculty-actions a {
            color: #c23b32;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <main class="faculty-page">
        <a class="faculty-logo" href="{{ url('/') }}">
            <img src="{{ asset('img/laboratory/ok.png') }}?v=20260512" alt="IEBI" style="height: 50px;">
            <strong>IEBI</strong>
        </a>

        <h1 class="faculty-title">Faculty</h1>
        <p class="faculty-lead">
            Research Group of Industrial Engineering and Business Innovation terhubung dengan dosen dan program studi
            terkait di Telkom University Surabaya.
        </p>

        <section class="faculty-grid" aria-label="Faculty links">
            <a class="faculty-card" href="https://bis-sby.telkomuniversity.ac.id/staf-pengajar/">
                <span>Program Studi</span>
                <strong>Information Systems</strong>
            </a>
            <a class="faculty-card" href="https://bit-sby.telkomuniversity.ac.id/staf-pengajar/">
                <span>Program Studi</span>
                <strong>Information Technology</strong>
            </a>
            <a class="faculty-card" href="https://bse-sby.telkomuniversity.ac.id/staf-pengajar/">
                <span>Program Studi</span>
                <strong>Software Engineering</strong>
            </a>
            <a class="faculty-card" href="https://bds-sby.telkomuniversity.ac.id/staf-pengajar/">
                <span>Program Studi</span>
                <strong>Data Science</strong>
            </a>
        </section>

        <div class="faculty-actions">
            <a href="{{ url('/about') }}">Kembali ke halaman utama</a>
        </div>
    </main>
</body>

</html>
