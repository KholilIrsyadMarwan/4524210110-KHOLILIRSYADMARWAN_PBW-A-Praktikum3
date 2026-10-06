<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About — Kholil Irsyad Marwan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #fafaf9;
            color: #181818;
        }


        /* =========================
           NAVBAR
        ========================= */

        nav {
            max-width: 1200px;
            margin: auto;
            padding: 30px 40px;

            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .brand {
            font-size: 18px;
            font-weight: 600;
            letter-spacing: -0.5px;
        }

        .brand span {
            color: #999;
            font-weight: 400;
        }

        .nav-links {
            display: flex;
            gap: 35px;
            list-style: none;
        }

        .nav-links a {
            color: #777;
            text-decoration: none;
            font-size: 13px;
            transition: 0.3s;
        }

        .nav-links a:hover,
        .nav-links .active {
            color: #2563EB;
        }


        /* =========================
           MAIN
        ========================= */

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 80px 40px 60px;
        }


        /* =========================
           HEADER
        ========================= */

        .small-title {
            color: #2563EB;

            font-size: 11px;
            letter-spacing: 4px;

            margin-bottom: 25px;
        }

        h1 {
            font-size: clamp(50px, 7vw, 90px);

            line-height: 0.95;

            letter-spacing: -5px;

            font-weight: 500;

            max-width: 900px;
        }

        h1 span {
            color: #2563EB;
        }


        /* =========================
           INTRO
        ========================= */

        .intro {
            max-width: 650px;

            margin-top: 35px;

            color: #777;

            font-size: 15px;

            line-height: 1.9;
        }


        /* =========================
           CONTENT
        ========================= */

        .content {
            margin-top: 80px;

            display: grid;

            grid-template-columns: 1.2fr 0.8fr;

            gap: 70px;

            border-top: 1px solid #dedede;

            padding-top: 50px;
        }

        .section-title {
            font-size: 12px;

            color: #2563EB;

            letter-spacing: 2px;

            margin-bottom: 20px;
        }

        .about-text {
            color: #666;

            font-size: 14px;

            line-height: 1.9;

            max-width: 600px;
        }


        /* =========================
           SKILLS
        ========================= */

        .skills {
            display: flex;

            flex-direction: column;

            gap: 18px;
        }

        .skill {
            display: flex;

            justify-content: space-between;

            padding-bottom: 15px;

            border-bottom: 1px solid #e5e5e5;

            font-size: 13px;
        }

        .skill span:first-child {
            color: #333;
        }

        .skill span:last-child {
            color: #999;
        }


        /* =========================
           CARDS
        ========================= */

        .cards {
            margin-top: 80px;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }

        .card {
            padding: 30px;

            border: 1px solid #e1e1e1;

            background: #fff;

            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);

            border-color: #2563EB;
        }

        .card-number {
            color: #2563EB;

            font-size: 11px;

            letter-spacing: 2px;

            margin-bottom: 30px;
        }

        .card h3 {
            font-size: 17px;

            font-weight: 500;

            margin-bottom: 12px;
        }

        .card p {
            color: #888;

            font-size: 13px;

            line-height: 1.7;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            max-width: 1200px;

            margin: auto;

            padding: 20px 40px 30px;

            display: flex;

            justify-content: space-between;

            color: #aaa;

            font-size: 10px;

            border-top: 1px solid #dedede;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 700px) {

            nav {
                padding: 25px 20px;
            }

            .nav-links {
                gap: 15px;
            }

            .nav-links a {
                font-size: 11px;
            }

            .container {
                padding: 60px 20px 40px;
            }

            h1 {
                font-size: 55px;

                letter-spacing: -3px;
            }

            .content {
                grid-template-columns: 1fr;

                gap: 50px;

                margin-top: 60px;
            }

            .cards {
                grid-template-columns: 1fr;

                margin-top: 60px;
            }

            footer {
                padding: 20px;

                gap: 15px;

                flex-direction: column;
            }
        }
    </style>
</head>


<body>


    <!-- NAVIGATION -->

    <nav>

        <div class="brand">
            Lara<span>Press</span>
        </div>

        <ul class="nav-links">

            <li>
                <a href="/">
                    Home
                </a>
            </li>

            <li>
                <a href="/tentang-kami" class="active">
                    About
                </a>
            </li>

            <li>
                <a href="/kontak">
                    Contact
                </a>
            </li>

        </ul>

    </nav>



    <!-- MAIN -->

    <main class="container">


        <!-- HEADER -->

        <div class="small-title">
            ABOUT · LARAPRESS
        </div>

        <h1>
            Tentang
            <span>Saya.</span>
        </h1>

        <p class="intro">
            Saya adalah Kholil Irsyad Marwan, seorang yang sedang
            mempelajari dan mengembangkan kemampuan dalam bidang
            web development. LaraPress merupakan project yang
            dibuat menggunakan Laravel 12 sebagai bagian dari
            proses pembelajaran dan pengembangan web.
        </p>



        <!-- CONTENT -->

        <section class="content">


            <div>

                <div class="section-title">
                    01 · WHO I AM
                </div>

                <p class="about-text">
                    LaraPress menjadi tempat untuk mempelajari
                    bagaimana sebuah aplikasi web dibangun mulai
                    dari routing, view, struktur project hingga
                    tampilan antarmuka.

                    <br><br>

                    Melalui project ini, saya belajar menggunakan
                    Laravel serta memahami bagaimana setiap bagian
                    aplikasi saling terhubung untuk menghasilkan
                    sebuah website yang sederhana dan terstruktur.
                </p>

            </div>



            <div>

                <div class="section-title">
                    02 · FOCUS
                </div>

                <div class="skills">

                    <div class="skill">
                        <span>Laravel</span>
                        <span>12</span>
                    </div>

                    <div class="skill">
                        <span>Web Development</span>
                        <span>Focus</span>
                    </div>

                    <div class="skill">
                        <span>Frontend</span>
                        <span>Learning</span>
                    </div>

                    <div class="skill">
                        <span>Backend</span>
                        <span>Learning</span>
                    </div>

                </div>

            </div>

        </section>



        <!-- CARDS -->

        <section class="cards">


            <div class="card">

                <div class="card-number">
                    01
                </div>

                <h3>
                    Laravel
                </h3>

                <p>
                    Mempelajari framework Laravel dan memahami
                    struktur dasar aplikasi web.
                </p>

            </div>



            <div class="card">

                <div class="card-number">
                    02
                </div>

                <h3>
                    Web Development
                </h3>

                <p>
                    Mengembangkan kemampuan dalam membangun
                    website dengan tampilan yang sederhana
                    dan modern.
                </p>

            </div>



            <div class="card">

                <div class="card-number">
                    03
                </div>

                <h3>
                    Continuous Learning
                </h3>

                <p>
                    Terus belajar dan mengembangkan kemampuan
                    melalui berbagai project dan praktik.
                </p>

            </div>


        </section>


    </main>



    <!-- FOOTER -->

    <footer>

        <span>
            © 2026 Kholil Irsyad Marwan
        </span>

        <span>
            LaraPress
        </span>

    </footer>


</body>

</html>