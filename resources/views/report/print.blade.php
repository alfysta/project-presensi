{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Report Presensi Per GTK</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <style>
        @page {
            size: A4
        }

        table.blueTable {
            border: 1px solid #000000;
            width: 100%;
            height: 100px;
            text-align: left;
            border-collapse: collapse;
        }

        table.blueTable td,
        table.blueTable th {
            border: 1px solid #000000;
            padding: 3px 2px;
        }

        table.blueTable tbody td {
            font-size: 10px;
            color: #000000;
        }


        table.blueTable thead {
            border-bottom: 1px solid #000000;
        }

        table.blueTable thead th {
            font-size: 10px;
            font-weight: bold;
            color: #000000;
            border-left: 1px solid #000000;
        }

        table.blueTable thead th:first-child {
            border-left: none;
        }

        table.blueTable tfoot td {
            font-size: 10px;
        }

        table.blueTable tfoot .links {
            text-align: right;
        }

        table.blueTable tfoot .links a {
            display: inline-block;
            color: #000000;
            padding: 2px 5px;
            border-radius: 5px;
        }
    </style>
</head>


<body class="A4 landscape">
    <section class="sheet padding-10mm">

        <article><strong>
                <table>
                    <thead>
                        <tr style="text-align: center">
                            <td style="width:100px">
                                <center><img src="{{ asset('vendor/assets/images/SULTENG.png') }}" style="width: 65px"
                                        alt="Logo Provinsi">
                                </center>
                            </td>
                            <td style="width:900px">
                                <center>PEMERINTAH PROVINSI SULAWESI TENGAH</center>
                                <center style="font-size: 20px">DINAS PENDIDIKAN</center>
                                <center>CABANG DINAS PENDIDIKAN MENENGAH WILAYAH V</center>
                                <center style="font-size: 22px">SMK NEGERI 1 MOILONG</center>
                                <center style="font-size: 10px">Jl. Siswa No 01 Mulyoharjo Kec. Moilong Kab. Banggai
                                    Email:
                                    smknegerimoilong@gmail.com</center>
                            </td>
                            <td style="width:100px">
                                <center><img src="{{ asset('vendor/assets/images/photo/smkn1moilong.png') }}"
                                        style="width: 75px" alt="Logo Provinsi">
                                </center>
                            </td>
                        </tr>
                    </thead>

                </table>
            </strong></article>
        <hr>
        <article>
            <center><strong>LAPORAN KEHADIRAN</strong></center>
            <center><strong>GURU DAN TENAGA KEPENDIDIKAN</strong></center>
            <center><strong>BULAN {{ strtoupper($month[$bulan] . ' ' . $tahun) }}</strong></center>
        </article>

        <article>
            <table class="blueTable">
                <thead>
                    <tr>
                        <th rowspan="2">#</th>
                        <th rowspan="2">Nama</th>
                        <th colspan="31">Tanggal</th>
                    </tr>
                    <tr>
                        @for ($i = 1; $i <= 31; $i++)
                            <th>{{ $i }}
                            </th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rekap as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            @for ($i = 1; $i <= 31; $i++)
                                <?php $tgl = 'tgl_' . $i; ?>
                                <th>{{ $item->$tgl }}
                                </th>
                            @endfor
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </article>

        <article>
            <td>
                <center style="margin-top:50px">Moilong, {{ date('d F Y') }}
                </center>
            </td>
            <td style="width:600px">
                <center>KEPALA SEKOLAH</center>
                <center style="margin-top: 50px"><strong>SAFIUDDIN, S.Pd., M.A.P.</strong></center>
                <center>NIP : 198787883 0298789 1 001</center>
            </td>
        </article>
    </section>



</body>

</html> --}}
<html lang="en">
<script src="blob:https://preview.tabler.io/ddb094f9-ff21-4605-8a85-b5e41d782803"></script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <script defer="" data-api="/stats/api/event" data-domain="preview.tabler.io" src="/stats/js/script.js"></script>
    <meta name="msapplication-TileColor" content="">
    <meta name="theme-color" content="">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <meta name="description"
        content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!">
    <meta name="canonical" content="https://preview.tabler.io/invoice.html">
    <meta name="twitter:image:src" content="https://preview.tabler.io/static/og.png">
    <meta name="twitter:site" content="@tabler_ui">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title"
        content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI.">
    <meta name="twitter:description"
        content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!">
    <meta property="og:image" content="https://preview.tabler.io/static/og.png">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="640">
    <meta property="og:site_name" content="Tabler">
    <meta property="og:type" content="object">
    <meta property="og:title"
        content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI.">
    <meta property="og:url" content="https://preview.tabler.io/static/og.png">
    <meta property="og:description"
        content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!">
    <!-- CSS files -->
    @include('layouts.components.head')
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    <style type="text/css">
        .mm_download_button .byd_plus_button {
            width: 8px;
            height: 8px;
            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAICAYAAADED76LAAAACXBIWXMAAAsTAAALEwEAmpwYAAAKpmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarZZ3UJPpFsbP933pBQgJEZASekeKQACB0AmgIB1EJSShhhhDgogNlcUVXAsqIqCs6CJFwbUAshbEgoVFsWFfkIuKui4WbKjcP7jEe+/c+8eduWfmnfnNmWee95z3/ecBoFULZDIJqgGQI1XIo4L9OAmJSRziA0CBBGTAgC0Q5sp8IyPD4b/W+9uAAADcsBPIZBL434ohEucKAZBIAEgV5QpzAJCjAEiRUCZXAGBcADBdopApALBkAGDJExKTADAZALDSJ7kIAFipk1wBACx5TJQ/AHYAgEQTCOTpANR2AODkCdMVANQ7AOAgFWVKAWgkAPAWZghEALQQALDNyVkkAqApAMAy9Z980v/FM1XlKRCkq3hyFwAAIAVk5sokgqXw/64ciXLqDgMAoOVmR4cBAA0AyRcKAqOnOEPMD59imcIvaoozFfwYlUYZEjvFyuxY3ynOXhSm0ktT50So/HP9k6a4ICMmfopF4oDAKZYvilLpc/OiA7/r/edMcZYgNHKKBXKAKRZLgqO+zxypmlMqmaPaJU0epNKIc7/vq8iICVGxPEalScsM4qv2lYd895dEqjzlyijVO4ilsSpPkSBA9bYQCU7gAK4QAnEKcb4CAMB/kWypPDM9Q8HxlckkYlsOXyq0t+U4OTg6QUJiEmfym97eAQQAEDbpe08GAO4MAKzrey/VDaCtEkCH8b1nWgOgHgvQmiRUyvMmezgAADxQQB1YoAMGYAKWYAdO4AqewINACIUIiIFEWABCyIAckMMSWA6roRhKYTNsh0qogb1QDwfhMLTBCTgDF+AKXINbcB8GYBhewCi8h3EEQYgIHWEiOoghYobYIE4IF/FGApFwJApJRFKQdESKKJHlyFqkFClDKpE9SAPyK3IcOYNcQvqQu8ggMoK8QT6jGEpDWag+ao7OQLmoLxqGxqDz0XR0MVqAFqEb0Qq0Fj2AtqJn0CvoLXQAfYGOYYBRMTZmhNlhXMwfi8CSsDRMjq3ESrByrBZrxjqwbuwGNoC9xD7hCDgmjoOzw3niQnCxOCFuMW4lbgOuElePa8Wdw93ADeJGcd/wdLwe3gbvgefjE/Dp+CX4Ynw5vg5/DH8efws/jH9PIBDYBAuCGyGEkEjIIiwjbCDsIrQQOgl9hCHCGJFI1CHaEL2IEUQBUUEsJu4kHiCeJl4nDhM/kqgkQ5ITKYiURJKS1pDKSY2kU6TrpKekcbIG2YzsQY4gi8hLyZvI+8gd5KvkYfI4hUGxoHhRYihZlNWUCkoz5TzlAeUtlUo1prpT51IzqYXUCuoh6kXqIPUTTZNmTfOnJdOUtI20/bRO2l3aWzqdbk7n0ZPoCvpGegP9LP0R/aMaU81eja8mUlulVqXWqnZd7ZU6Wd1M3Vd9gXqBern6EfWr6i81yBrmGv4aAo2VGlUaxzX6NcYYTIYjI4KRw9jAaGRcYjzTJGqaawZqijSLNPdqntUcYmJME6Y/U8hcy9zHPM8cZhFYFiw+K4tVyjrI6mWNamlqzdSK08rXqtI6qTXAxtjmbD5bwt7EPsy+zf48TX+a7zTxtPXTmqddn/ZBe7o2T1usXaLdon1L+7MORydQJ1tni06bzkNdnK617lzdJbq7dc/rvpzOmu45XTi9ZPrh6ff0UD1rvSi9ZXp79Xr0xvQN9IP1Zfo79c/qvzRgG/AMsgy2GZwyGDFkGnobZhpuMzxt+JyjxfHlSDgVnHOcUSM9oxAjpdEeo16jcWML41jjNcYtxg9NKCZckzSTbSZdJqOmhqazTZebNpneMyObcc0yzHaYdZt9MLcwjzdfZ95m/sxC24JvUWDRZPHAkm7pY7nYstbyphXBimuVbbXL6po1au1inWFdZX3VBrVxtcm02WXTZ4u3dbeV2tba9tvR7Hzt8uya7Abt2fbh9mvs2+xfzTCdkTRjy4zuGd8cXBwkDvsc7jtqOoY6rnHscHzjZO0kdKpyuulMdw5yXuXc7vx6ps1M8czdM++4MF1mu6xz6XL56urmKndtdh1xM3VLcat26+eyuJHcDdyL7nh3P/dV7ifcP3m4eig8Dnv85Wnnme3Z6PlslsUs8ax9s4a8jL0EXnu8Brw53ineP3sP+Bj5CHxqfR7zTHgiXh3vqa+Vb5bvAd9Xfg5+cr9jfh/8PfxX+HcGYAHBASUBvYGagbGBlYGPgoyD0oOagkaDXYKXBXeG4EPCQraE9PP1+UJ+A3801C10Rei5MFpYdFhl2ONw63B5eMdsdHbo7K2zH8wxmyOd0xYBEfyIrREPIy0iF0f+NpcwN3Ju1dwnUY5Ry6O6o5nRC6Mbo9/H+MVsirkfaxmrjO2KU49LjmuI+xAfEF8WP5AwI2FFwpVE3cTMxPYkYlJcUl3S2LzAedvnDSe7JBcn355vMT9//qUFugskC04uVF8oWHgkBZ8Sn9KY8kUQIagVjKXyU6tTR4X+wh3CFyKeaJtoROwlLhM/TfNKK0t7lu6VvjV9JMMnozzjZaZ/ZmXm66yQrJqsD9kR2fuzJyTxkpYcUk5KznGppjRbem6RwaL8RX0yG1mxbGCxx+Lti0flYfK6XCR3fm67gqWQKXqUlsoflIN53nlVeR+XxC05ks/Il+b3LLVeun7p04Kggl+W4ZYJl3UtN1q+evngCt8Ve1YiK1NXdq0yWVW0argwuLB+NWV19urf1zisKVvzbm382o4i/aLCoqEfgn9oKlYrlhf3r/NcV/Mj7sfMH3vXO6/fuf5biajkcqlDaXnplw3CDZd/cvyp4qeJjWkbeze5btq9mbBZuvn2Fp8t9WWMsoKyoa2zt7Zu42wr2fZu+8Ltl8pnltfsoOxQ7hioCK9o32m6c/POL5UZlbeq/KpaqvWq11d/2CXadX03b3dzjX5Nac3nnzN/vrMneE9rrXlt+V7C3ry9T/bF7ev+hftLQ51uXWnd1/3S/QP1UfXnGtwaGhr1Gjc1oU3KppEDyQeuHQw42N5s17ynhd1SeggOKQ89/zXl19uHww53HeEeaT5qdrT6GPNYSSvSurR1tC2jbaA9sb3veOjxrg7PjmO/2f+2/4TRiaqTWic3naKcKjo1cbrg9FinrPPlmfQzQ10Lu+6fTTh789zcc73nw85fvBB04Wy3b/fpi14XT1zyuHT8Mvdy2xXXK609Lj3Hfnf5/Viva2/rVber7dfcr3X0zeo7dd3n+pkbATcu3OTfvHJrzq2+27G37/Qn9w/cEd15dldy9/W9vHvj9wsf4B+UPNR4WP5I71HtH1Z/tAy4DpwcDBjseRz9+P6QcOjF33L/9mW46An9SflTw6cNz5yenRgJGrn2fN7z4ReyF+Mvi/9k/Fn9yvLV0b94f/WMJowOv5a/nniz4a3O2/3vZr7rGosce/Q+5/34h5KPOh/rP3E/dX+O//x0fMkX4peKr1ZfO76FfXswkTMxIRPIBQAAgAEAmpYG8GY/AD0RgHkNgKI2mXMBAACZzOYAkxnkP/NkFgYAAFeAvZ0AMTyA8E6AnYUA5oUA6jyASB5ADA9QZ2fV+Uflpjk7TXpR2wDw5RMTb+MBiFYAX/snJsbbJia+1gFg9wA630/mawAAnBwA+RNzOP72Yol5z7/n3L8DSAvyNioEoawAAAAgY0hSTQAAbicAAHOvAAD2YwAAgGQAAHCTAADi/gAAMakAABOdMziJSQAAACxJREFUeNpi/P//PwMSgHEYYQJMDAQAQQUsSMZis4o4Exhp60gAAAAA//8DAJKyBxBDGtuAAAAAAElFTkSuQmCC') 0 0 no-repeat scroll transparent;
            display: inline-block
        }

        .mm_download_button .byd_arrow_button {
            width: 8px;
            height: 8px;
            background: url('data:image/png;base64,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') 0 0 no-repeat scroll transparent;display:inline-block;margin-left:3px;margin-right:0;padding-top:2px}.mm_download_button{border:1px solid transparent!important;-moz-border-radius:2px!important;-webkit-border-radius:2px!important;border-radius:2px!important;margin-left:3px!important;margin-top:6px!important;margin-right:8px!important;background-color:#e62117!important;height:24px!important;box-shadow:none!important;line-height:22px!important;outline:none!important}ytd-menu-renderer .mm_download_button.short .addto-label{font-size:0}#watch7-main .mm_download_button{margin-top:0!important}.mm_download_button span{color:#fff!important;text-shadow:none!important}.mm_download_button .icon{width:12px!important;height:12px!important;float:left!important;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAAXNSR0IArs4c6QAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9sMCwwSC0DgfHMAAABrSURBVCjPlZAxDsAgDAMdxPNYmHkfMwu/80AnEIK4ai2xOPE5wkopA45qreb5pgJKUREVKCqSAsSvp0zAa2A/awVIyoA3C/gptyHnPM6G6bkNrTVTvqWUrv/uvRsA7LPpBZI4375Eci0DwANhhUXG8VDsOwAAAABJRU5ErkJggg==') !important;
            background-repeat: no-repeat !important;
            margin-right: 7px;
            margin-top: 3px
        }

        .mm_download_button .arrow {
            margin-left: 2px !important
        }

        .mm_download_menu {
            min-width: 110px !important;
            position: absolute !important;
            background-color: #ebebeb !important;
            visibility: hidden;
            z-index: 1000
        }

        .mm_download_menu .content {
            font-weight: bold !important;
            padding-left: 8px !important;
            padding-right: 8px !important;
            list-style-type: none !important
        }

        .mm_download_menu .content span {
            border-radius: 3px !important;
            padding-left: 6px !important;
            padding-right: 6px !important;
            font: 14px tahoma, sans-serif !important;
            text-shadow: none !important;
            background-image: linear-gradient(to bottom, #ebebeb 0, #ebebeb 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #ebebeb), color-stop(100%, #ebebeb));
            background-image: -o-linear-gradient(top, #ebebeb 0, #ebebeb 100%);
            background-image: -moz-linear-gradient(top, #ebebeb 0, #ebebeb 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ebebeb', endColorstr='#ebebeb')
        }

        .mm_download_menu .content span:hover {
            background-image: linear-gradient(to bottom, #c22126 0, #ed3d3e 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #c22126), color-stop(100%, #ed3d3e));
            background-image: -o-linear-gradient(top, #c22126 0, #ed3d3e 100%);
            background-image: -moz-linear-gradient(top, #c22126 0, #ed3d3e 100%);
            filter: progid:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c22126', endColorstr='#ed3d3e');
            cursor: pointer !important
        }
    </style>
</head>

<body>
    <div class="page">
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <button type="button" class="btn btn-primary" onclick="javascript:window.print();">
                                <!-- Download SVG icon from http://tabler-icons.io/i/printer -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2">
                                    </path>
                                    <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
                                    <path
                                        d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z">
                                    </path>
                                </svg>
                                Print
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="card card-lg">
                    <div class="card-body">
                        <div class="row">
                            <table>
                                <thead>
                                    <tr style="text-align: center">
                                        <td style="width:100px">
                                            <center><img src="{{ asset('vendor/assets/images/SULTENG.png') }}"
                                                    style="width: 65px" alt="Logo Provinsi">
                                            </center>
                                        </td>
                                        <td style="width:900px">
                                            <strong>
                                                <center>PEMERINTAH PROVINSI SULAWESI TENGAH</center>
                                                <center style="font-size: 20px">DINAS PENDIDIKAN</center>
                                                <center>CABANG DINAS PENDIDIKAN MENENGAH WILAYAH V</center>
                                                <center style="font-size: 22px">SMK NEGERI 1 MOILONG</center>
                                            </strong>
                                            <center style="font-size: 10px">Jl. Siswa No 01 Mulyoharjo Kec. Moilong
                                                Kab. Banggai
                                                Email:
                                                smknegerimoilong@gmail.com</center>
                                        </td>
                                        <td style="width:100px">
                                            <center><img
                                                    src="{{ asset('vendor/assets/images/photo/smkn1moilong.png') }}"
                                                    style="width: 80px" alt="Logo Provinsi">
                                            </center>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <center><strong>LAPORAN KEHADIRAN</strong></center>
                                            <center><strong>GURU DAN TENAGA KEPENDIDIKAN</strong></center>
                                            <center><strong>BULAN
                                                    {{ strtoupper($month[$bulan] . ' ' . $tahun) }}</strong>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 my-3">
                                <div class="card">
                                    <div class="table">
                                        <table class="table table-vcenter card-table">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">#</th>
                                                    <th rowspan="2">Nama</th>
                                                    <th colspan="31">
                                                        <center>Tanggal</center>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    @for ($i = 1; $i <= 31; $i++)
                                                        <th>{{ $i }}
                                                        </th>
                                                    @endfor
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($rekap as $item)
                                                    <tr>
                                                        <td class="ext-muted small lh-base">
                                                            <small>{{ $loop->iteration }}</small>
                                                        </td>
                                                        <td class="ext-muted small lh-base">
                                                            <small>{{ $item->name }}</small>
                                                        </td>
                                                        @for ($i = 1; $i <= 31; $i++)
                                                            <?php $tgl = 'tgl_' . $i; ?>
                                                            <td class="text-muted small lh-base">
                                                                <small>{{ $item->$tgl }}</small>
                                                            </td>
                                                        @endfor
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <td>
                                <center style="margin-top:50px">Moilong, {{ date('d F Y') }}
                                </center>
                            </td>
                            <td style="width:600px">
                                <center>KEPALA SEKOLAH</center>
                                <center style="margin-top: 50px"><strong>SAFIUDDIN, S.Pd., M.A.P.</strong></center>
                                <center>NIP : 198787883 0298789 1 001</center>
                            </td>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.components.footer')
        </div>
    </div>
    @include('layouts.components.scripts')
</body>

</html>
