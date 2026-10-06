<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact — Kholil Irsyad Marwan</title>

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
            min-height: 78vh;

            margin: auto;

            padding: 90px 40px 60px;
        }


        /* =========================
           HEADER
        ========================= */

        .small-title {
            color: #2563EB;

            font-size: 11px;

            letter-spacing: 4px;

            margin-bottom: 28px;
        }

        h1 {
            font-size: clamp(55px, 8vw, 100px);

            line-height: 0.95;

            letter-spacing: -6px;

            font-weight: 500;

            max-width: 900px;
        }

        h1 span {
            color: #2563EB;
        }

        .intro {
            max-width: 560px;

            margin-top: 30px;

            color: #777;

            font-size: 15px;

            line-height: 1.8;
        }


        /* =========================
           CONTACT AREA
        ========================= */

        .contact-area {
            margin-top: 85px;

            padding-top: 30px;

            border-top: 1px solid #dedede;

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 100px;
        }


        /* =========================
           CONTACT INFORMATION
        ========================= */

        .label {
            color: #2563EB;

            font-size: 10px;

            letter-spacing: 3px;

            margin-bottom: 25px;
        }

        .contact-list {
            display: flex;

            flex-direction: column;
        }

        .contact-item {
            padding: 22px 0;

            border-bottom: 1px solid #e1e1e1;
        }

        .contact-item:first-child {
            border-top: 1px solid #e1e1e1;
        }

        .contact-type {
            font-size: 10px;

            letter-spacing: 1.5px;

            color: #999;

            margin-bottom: 8px;

            text-transform: uppercase;
        }

        .contact-value {
            font-size: 17px;

            color: #222;

            text-decoration: none;

            transition: 0.3s;
        }

        a.contact-value:hover {
            color: #2563EB;
        }


        /* =========================
           MESSAGE
        ========================= */

        .message {
            padding-left: 20px;
        }

        .message-text {
            font-size: 25px;

            line-height: 1.45;

            font-weight: 400;

            color: #333;

            max-width: 430px;
        }

        .message-text span {
            color: #2563EB;
        }

        .message-note {
            margin-top: 30px;

            color: #999;

            font-size: 12px;

            line-height: 1.7;

            max-width: 380px;
        }


        /* =========================
           BUTTON
        ========================= */

        .button {
            display: inline-block;

            margin-top: 30px;

            padding: 14px 24px;

            background: #2563EB;

            color: white;

            text-decoration: none;

            font-size: 12px;

            border-radius: 4px;

            transition: 0.3s;
        }

        .button:hover {
            background: #1D4ED8;

            transform: translateY(-2px);
        }


        /* =========================
           BOTTOM
        ========================= */

        .bottom {
            margin-top: 75px;

            padding-top: 20px;

            border-top: 1px solid #dedede;

            display: flex;

            justify-content: space-between;

            color: #999;

            font-size: 11px;
        }

        .bottom strong {
            color: #333;

            font-weight: 500;
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

            .container {
                padding: 70px 20px 40px;
            }

            h1 {
                font-size: 55px;

                letter-spacing: -3px;
            }

            .contact-area {
                grid-template-columns: 1fr;

                gap: 55px;

                margin-top: 60px;
            }

            .message {
                padding-left: 0;
            }

            .message-text {
                font-size: 21px;
            }

            .bottom {
                flex-direction: column;

                gap: 15px;

                align-items: flex-start;
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


    <!-- =========================
         NAVIGATION
    ========================= -->

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
                <a href="/tentang-kami">
                    About
                </a>
            </li>

            <li>
                <a href="/kontak" class="active">
                    Contact
                </a>
            </li>

        </ul>

    </nav>



    <!-- =========================
         MAIN
    ========================= -->

    <main class="container">


        <!-- HEADER -->

        <div class="small-title">
            CONTACT · LARAPRESS
        </div>


        <h1>
            Let's
            <span>Connect.</span>
        </h1>


        <p class="intro">
            Punya pertanyaan, ide, atau ingin berdiskusi mengenai
            web development? Jangan ragu untuk menghubungi saya.
        </p>



        <!-- =========================
             CONTACT AREA
        ========================= -->

        <section class="contact-area">


            <!-- CONTACT INFORMATION -->

            <div>

                <div class="label">
                    01 · GET IN TOUCH
                </div>


                <div class="contact-list">


                    <div class="contact-item">

                        <div class="contact-type">
                            Email
                        </div>

                        <a
                            href="mailto:kholil@example.com"
                            class="contact-value"
                        >
                            marwansijabat29@gmail.com
                        </a>

                    </div>



                    <div class="contact-item">

                        <div class="contact-type">
                            Phone
                        </div>

                        <a
                            href="tel:+6281234567890"
                            class="contact-value"
                        >
                            +62 812-3456-7890
                        </a>

                    </div>



                    <div class="contact-item">

                        <div class="contact-type">
                            Location
                        </div>

                        <div class="contact-value">
                            Indonesia
                        </div>

                    </div>


                </div>

            </div>



            <!-- MESSAGE -->

            <div class="message">

                <div class="label">
                    02 · SAY HELLO
                </div>


                <div class="message-text">

                    Let's build something
                    <span>meaningful</span>
                    together.

                </div>


                <p class="message-note">

                    Saya terbuka untuk berdiskusi mengenai project,
                    pembelajaran web development, maupun sekadar
                    bertukar ide mengenai teknologi.

                </p>


                <a
                    href="mailto:kholil@example.com"
                    class="button"
                >
                    Kirim Email →
                </a>

            </div>


        </section>



        <!-- =========================
             BOTTOM INFO
        ========================= -->

        <div class="bottom">

            <div>
                <strong>
                    LaraPress
                </strong>
                · Personal Blog
            </div>

            <div>
                Laravel 12 · 2026
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

</html><?php /**PATH C:\xampp\htdocs\LaraPress\resources\views/contact.blade.php ENDPATH**/ ?>