<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kholil Irsyad Marwan — LaraPress</title>

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
           HERO
        ========================= */

        .hero {
            max-width: 1200px;
            min-height: 78vh;

            margin: auto;

            padding: 100px 40px 60px;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }


        /* Small title */

        .small-title {
            color: #2563EB;

            font-size: 11px;
            letter-spacing: 4px;

            margin-bottom: 28px;
        }


        /* Main heading */

        .hero h1 {
            font-size: clamp(55px, 8vw, 105px);

            line-height: 0.95;

            letter-spacing: -6px;

            font-weight: 500;

            max-width: 900px;
        }

        .hero h1 span {
            color: #2563EB;
        }


        /* Job */

        .role {
            margin-top: 30px;

            font-size: 19px;

            color: #2563EB;

            font-weight: 500;
        }


        /* Description */

        .description {
            max-width: 560px;

            margin-top: 22px;

            color: #777;

            font-size: 15px;

            line-height: 1.8;
        }


        /* =========================
           BUTTON
        ========================= */

        .buttons {
            display: flex;

            gap: 12px;

            margin-top: 35px;
        }

        .btn {
            padding: 13px 23px;

            font-size: 12px;

            text-decoration: none;

            border-radius: 4px;

            transition: 0.3s;
        }


        /* Primary */

        .btn-primary {
            background: #2563EB;

            color: white;
        }

        .btn-primary:hover {
            background: #1D4ED8;
        }


        /* Secondary */

        .btn-secondary {
            border: 1px solid #d5d5d5;

            color: #333;

            background: transparent;
        }

        .btn-secondary:hover {
            background: #f0f0f0;

            border-color: #bbb;
        }


        /* =========================
           INFORMATION
        ========================= */

        .bottom {
            margin-top: 90px;

            padding-top: 20px;

            border-top: 1px solid #dedede;

            display: flex;

            justify-content: space-between;

            align-items: center;

            color: #999;

            font-size: 11px;
        }

        .details {
            display: flex;

            gap: 50px;
        }

        .details strong {
            display: block;

            color: #333;

            font-size: 12px;

            font-weight: 500;

            margin-bottom: 5px;
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


            .hero {
                padding: 70px 20px 40px;
            }


            .hero h1 {
                font-size: 55px;

                letter-spacing: -3px;
            }


            .description {
                font-size: 14px;
            }


            .buttons {
                flex-wrap: wrap;
            }


            .bottom {
                margin-top: 60px;

                flex-direction: column;

                align-items: flex-start;

                gap: 25px;
            }


            .details {
                gap: 25px;

                flex-wrap: wrap;
            }


            footer {
                padding: 20px;
            }
        }
    </style>
</head>


<body>


    <!-- =========================
         NAVIGATION
    ========================= -->

    <nav>

        <div class="brand">
            Lara<span>Press</span>
        </div>


        <ul class="nav-links">

            <li>
                <a href="/" class="active">
                    Dashboard
                </a>
            </li>

            <li>
                <a href="/tentang-kami">
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



    <!-- =========================
         HERO SECTION
    ========================= -->

    <main class="hero">


        <!-- Label -->

        <div class="small-title">
            LARAPRESS · PERSONAL BLOG
        </div>



        <!-- Name -->

        <h1>
            Kholil Irsyad
            <span>Marwan.</span>
        </h1>



        <!-- Profession -->

        <div class="role">
            Web Developer
        </div>



        <!-- Description -->

        <p class="description">

            Saya adalah Kholil Irsyad Marwan.
            Selamat datang di LaraPress, sebuah project
            personal blog yang dibuat menggunakan Laravel 12
            untuk belajar dan mengembangkan kemampuan
            web development.

        </p>



        <!-- Buttons -->

        <div class="buttons">

            <a
                href="/tentang-kami"
                class="btn btn-primary"
            >
                Tentang Saya
            </a>


            <a
                href="/kontak"
                class="btn btn-secondary"
            >
                Hubungi Saya
            </a>

        </div>



        <!-- =========================
             INFORMATION
        ========================= -->

        <div class="bottom">


            <div class="details">


                <div>

                    <strong>
                        Laravel 12
                    </strong>

                    Framework

                </div>



                <div>

                    <strong>
                        Web Development
                    </strong>

                    Focus

                </div>



                <div>

                    <strong>
                        2026
                    </strong>

                    LaraPress

                </div>


            </div>



            <div>
                Based in Indonesia
            </div>


        </div>


    </main>



    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        <span>
            © 2026 Kholil Irsyad Marwan
        </span>


        <span>
            LaraPress
        </span>

    </footer>


</body>

</html><?php /**PATH C:\xampp\htdocs\LaraPress\resources\views/welcome.blade.php ENDPATH**/ ?>