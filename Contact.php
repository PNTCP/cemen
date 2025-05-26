<?php
    include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <title>Contact Us</title>
    <style>
        body {
            margin: 0;
            padding: 0 0 100px 0; /* Add space at the bottom for all screens */
            box-sizing: border-box;
        }

        .border-main {
            display: block;
            border: 2px solid black;
            border-radius: 50px;
            padding: 20px;
            text-align: center;
            font-size: 35px;
            margin: 40px auto 0 auto;
            max-width: 95vw;
        }

        .sec-text {
            font-size: 20px;
            margin: 40px auto 0 auto;
            max-width: 95vw;
            padding: 0 10px;
        }

        .sec-text p {
            color: grey;
            margin-top: 10px;
            margin-bottom: 0px;
            word-break: break-word;
        }

        .border-contact {
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            border: 1px solid gray;
            font-size: 20px;
            margin: 40px auto 0 auto;
            max-width: 1000px;
            gap: 30px;
            padding: 0px;
        }

        .contact-flex {
            display: flex;
            align-items: flex-start;
            gap: 32px;
            margin: 40px auto 30px auto;
            flex-wrap: wrap;
            max-width: 1000px;
            justify-content: center;
            width: 100%;
        }

        .contact-address {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-width: 180px;
            max-width: 340px;
            flex: 1 1 260px;
            margin: 0 auto;
        }

        .contact-logo {
            width: 300px;
            height: 300px;
            margin-bottom: 18px;
            object-fit: contain;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .address-block {
            text-align: center;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .redpin-icon {
            color: #d70000;
            font-size: 2em;
            vertical-align: middle;
            margin-right: 8px;
            display: inline-block;
        }

        .address-block p {
            margin: 0;
            font-size: 20px;
            color: #222;
            font-family: Kanit, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            width: 100%;
            text-align: center;
            word-break: break-word;
        }

        .map-responsive {
            flex: 0 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 220px;
            max-width: 480px;
            width: 100%;
        }

        .map-responsive iframe {
            width: 420px;   /* Increase this value for a bigger map */
            height: 380px;  /* Increase this value for a bigger map */
            border-radius: 16px;
            border: 1.5px solid #eee;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            background: #fff;
            max-width: 100%;
        }

        @media (max-width: 900px) {
            .border-main,
            .sec-text,
            .border-contact,
            .contact-flex {
                margin-left: 10px !important;
                margin-right: 10px !important;
                max-width: 100vw;
            }
            .contact-flex {
                flex-direction: column;
                align-items: center;
                gap: 18px;
                overflow: visible; /* Ensure children can overflow if needed */
            }
            .contact-address, .map-responsive {
                max-width: 100%;
                min-width: 0;
            }
            .map-responsive {
                width: 100%;
                box-sizing: border-box;
                padding-bottom: 70px; /* Add space for bottom nav */
                margin-bottom: 0;
                overflow: visible;
            }
            .map-responsive iframe {
                width: 100% !important;
                min-width: 0;
                max-width: 100vw;
                height: 220px;
                display: block;
                border-radius: 16px;
                border: 1.5px solid #eee;
                box-sizing: border-box;
                background: #fff;
                margin-bottom: 0;
            }
            .contact-logo {
                width: 90px;
                height: 90px;
            }
            .address-block p {
                font-size: 16px;
            }
        }

        @media (max-width: 600px) {
            .border-main {
                font-size: 32px;
                padding: 20px;
            }
            .sec-text {
                font-size: 24px;
                margin-top: 20px;
            }
            .contact-logo {
                width: 300px;
                height: 300px;
            }
            .address-block p {
                font-size: 20px;
            }
            .map-responsive iframe {
                height: 300px;
            }
        }
    </style>
    <div class="border-main">Contact us</div>
    <div class="sec-text">
        <p><span class="sec-icon">📞</span> Tel : 096-893-5544</p>
        <p><span class="sec-icon">📘</span> FB : concretedecorchonburi</p>
        <p><span class="sec-icon">📧</span> E-mail : Noom.vorapong99@gmail.com</p>
        <p>
        <span class="sec-icon">💬</span>
        <a href="https://line.me/ti/p/eAmTWa8mkc" target="_blank" rel="noopener">Line : Dr.Vorapong Noom</a>
        </p>
        <p><span class="sec-icon">⏰</span> เวลาทำการ : จันทร์ - ศุกร์ 8.00-17.00 น.</p>
    </div>
    <div class="contact-flex">
      <div class="contact-address">
        <img src="https://cdi.co.th/wp-content/uploads/2020/03/S__6258772-removebg-preview.png" alt="Store Logo" class="contact-logo">
        <div class="address-block">
          <p>
            <span class="redpin-icon">📍</span>
            24/40 หมู่ 6 ต.หนองปลาไหล อำเภอบางละมุง ชลบุรี 20150
          </p>
        </div>
      </div>
      <div class="map-responsive">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.017868857365!2d100.9417363!3d12.990668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102bfa0a97908e7%3A0xa5ce4e2d115cc600!2z4Liq4Li44LiZ4LmA4LiC4Li14Lii4Liy4Lij4LiwIOC4quC4suC4meC4o-C4tOC4o-C4seC4o-C4tQ!5e0!3m2!1sth!2sth!4v1716900000000!5m2!1sth!2sth"
          width="300"
          height="200"
          style="border:1.5px solid #eee; border-radius:16px;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
        <noscript>
          <p>Sorry, your browser does not support embedded maps.</p>
        </noscript>
      </div>
    </div>
    
</body>
</html>