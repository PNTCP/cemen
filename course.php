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
    <div class="border-main">เปิดสอนอาชีพช่าง ตกแต่งคอนกรีต</div>

    <style>
        .border-main {
            display: inline-block;
            justify-content: space-around;
            border: 2px solid black;
            border-radius: 50px;
            padding: 20px;
            text-align: center;
            font-size: 2.2rem;
            margin-left: 10vw;
            margin-right: 10vw;
            margin-top: 50px;
            width: auto;
            max-width: 90vw;
        }
        .sec-text {
            font-size: 1.1rem;
            margin-top: 40px;
            margin-left: 10vw;
            margin-right: 10vw;
        }
        .sec-text p {
            color: grey;
            margin-top: 10px;
            margin-bottom: 0px;
        }
        .border-contact {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            border: 1px solid gray;
            font-size: 1.1rem;
            margin-left: 10vw;
            margin-right: 10vw;
            margin-top: 40px;
            gap: 30px;
            padding: 0px;
            position: relative;
            max-width: 90vw;
        }
        .border-contact img {
            max-width: 90vw;
            width: 300px;
            height: auto;
        }
        .contact-text {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .contact-text p {
            color: grey;
            margin: 0;
            font-size: 1.1rem;
            margin-top: 10px;
        }
        .contact-button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 5px;
            padding-top: 50px;
        }
        .contact-button a {
            color: blue;
            text-decoration: none;
            font-size: 1rem;
            border: 1px;
            padding: 8px;
            border-radius: 20px;
            margin-top: -20px;
        }
        .border-exam {
            text-align: center;
            font-size: 2.2rem;
        }
        .video {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            max-width: 100%;
            height: auto;
        }
        #scrollBtn {
            position: fixed;
            bottom: 40px;
            right: 40px;
            z-index: 1000;
            font-size: 20px;
            border: none;
            outline: none;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            padding: 12px 16px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            opacity: 0;
            visibility: hidden;
            transform: translateY(50px);
            transition: all 0.4s ease;
        }
        #scrollBtn.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        #scrollBtn:hover {
            background-color: #0056b3;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .border-main,
            .border-contact,
            .sec-text {
                margin-left: 5vw;
                margin-right: 5vw;
                font-size: 1rem;
            }
            .border-main,
            .border-exam {
                font-size: 1.3rem;
                padding: 10px;
            }
            .border-contact {
                flex-direction: column;
                align-items: stretch;
                gap: 10px;
                padding: 10px;
            }
            .border-contact img {
                width: 100%;
                max-width: 100%;
                margin-bottom: 10px;
            }
            .contact-button {
                position: static;
                align-items: stretch;
                padding-top: 10px;
            }
            .video {
                width: 100%;
                height: auto;
                max-width: 100vw;
            }
            #scrollBtn {
                bottom: 20px;
                right: 20px;
                font-size: 18px;
                padding: 10px 12px;
            }
        }
        @media (max-width: 480px) {
            .border-main,
            .border-exam {
                font-size: 1rem;
                margin-left: 2vw;
                margin-right: 2vw;
                padding: 8px;
            }
            .sec-text {
                font-size: 0.95rem;
                margin-left: 2vw;
                margin-right: 2vw;
            }
            .border-contact {
                font-size: 0.95rem;
                margin-left: 2vw;
                margin-right: 2vw;
            }
            .contact-button a {
                font-size: 0.95rem;
                padding: 6px;
            }
        }

        

        .video-responsive {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            max-width: 100%;
        }
        .video-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>

<div class="border-contact">
    <img src="https://static.wixstatic.com/media/51972b_c457a9ce261f4bf6b7d9f6d35d1e2028~mv2.jpg/v1/fill/w_403,h_399,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/คอนกรีตพิมพ์ลาย-Display-1.jpg" alt="" width="300">
    
    <div class="contact-text">
        <p>คอร์สอบรม อาชีพผู้เหมาทำพื้น</p>
        <p>คอนกรีตพิมพ์ลาย รุ่น 14</p>
        <p>สถานที่ : ชลบุรี อ.บางละมุง</p> 12 กรกฎาคม 2568</p>
    </div>

    <div class="contact-button">
        <a href="detail.php" style="color: white; background-color: blue;">ดูรายละเอียดเพิ่มเติม</a><br>
        <a href="https://line.me/ti/p/eAmTWa8mkc" style="color: white; background-color: green;" >สมัครทางไลน์</a>
    </div>
</div>



    <div class="sec-text">
        <h3>สอนทำ คอนกรีตพิมพ์ลาย รุ่นที่14</h3>
        <p>📅 เปิดสอนอาชีพช่าง ตกแต่งคอนกรีต</p>
        <p>✅ สอนทำ คอนกรีตพิมพ์ลาย รุ่นที่14</p>
    </div>
    <div class="sec-text">
        <p>📌 พิกัด : คอนกรีตเดคคอร์ ชลบุรี (บางละมุง)</p>
        <p>🔻 รับจำนวนจำกัด เรียน 1 วันเต็ม</p>
        <p>✅ ค่าเรียน : 2,000 บ. / ท่าน</p>
        <p>✅ ค่าเรียน/พร้อมอุปกรณ์งานพื้นพิมพ์ลาย 5,000 บ. / ท่าน</p>
    </div>
    <div class="sec-text">
        <p>✅ เรียน คอนกรีตพิมพ์ลาย เน้นๆ</p>
        <p>✅ เรียน 6 อาชีพตกแต่งผิวปูน</p>
        <p>✅ สำหรับมือใหม่ อยากทำอาชีพ</p>
        <p>✅ ความรู้เพียบ เทคนิคเน้น ๆ ไม่มีกั๊ก</p>
    </div>
    <div class="sec-text">
        <h3>หลักสูตรสร้างอาชีพรับเหมาแบ่งการเรียนเป็น 2 ช่วง เช้า-บ่าย</h3>
    </div>
    <div class="sec-text">
        <p>✅ ช่วงเช้า ภาคทฤษฎี 8.30 น.</p>
        <p>🔸 เรียนรู้คอนกรีตพิมพ์ลายคืออะไร</p>
        <p>🔸 อธิบายการใช้งานอุปกรณ์</p>
        <p>🔸 สอนขั้นตอนการทำงานที่ถูกต้อง</p>
        <p>🔸 ราคาขาย ต้นทุนรับเหมา</p>
        <p>🔸 ราคาขาย ต้นทุนรับเหมา</p>
    </div>
    <div class="sec-text">
        <p>✅ ช่วงบ่าย ปฏิบัติ 13.00 น</p>
        <p>🔸 สอนทำแผ่นทางเท้าพิมพ์ลาย</p>
        <p>🔸 สอนทำ พื้นคอนกรีตพิมพ์ลาย</p>
        <p>🔸 สอนทำ ผนังปูนพิมพ์ลายหิน</p>
        <p>🔸 สอนทำ ซีเมนต์พ่นลายหิน</p>
        <p>🔸 สอนทำ สีเท็กเจอร์ ผนัง</p>
        <p>🔸 สอนทำ พื้นทรายล้าง แบบไม่ใช้ปูน</p>
    </div>
    <div class="sec-text">
        <p>⏱️ เวลาเรียน : 8.00-17.00 น</p>
        <p>🗺️ พิกัดสถานที่เรียน :<a href="https://maps.app.goo.gl/pEWFMCNU7qgbx94c6">คอนกรีต เดคคอร์ ชลบุรี - Google Maps</a></p>
    </div>
    <div class="sec-text">
        <p>📝 สมัครเรียนได้ที่</p>
        <p>🗺️ แอดไลน์ :<a href="https://line.me/ti/p/eAmTWa8mkc">คลิกได้ที่นี้เลย</a></p>
    </div>
<br>
    <hr style="margin: 50px">
    <div class="border-exam">คลิปตัวอย่างการเรียน</div>

    <style>
        .border-exam {
            text-align: center;
            font-size: 2.2rem;
        }
        .video {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            max-width: 100%;
            height: auto;
        }
    </style>
    
    <!-- Responsive video wrapper -->
<div class="video-responsive">
    <iframe
        src="https://www.youtube.com/embed/pflsQxfCxX4?si=lQXxax9HK0V_Ob34"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
        class="video"
    ></iframe>
</div>











    
    <!-- button scrool mouse * 200 kub bro ready with animation java script -->
<button onclick="scrollToTop()" id="scrollBtn" title="เลื่อนขึ้นบนสุด">⬆️</button>

<script>
    const scrollBtn = document.getElementById("scrollBtn");

    window.onscroll = function () {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            scrollBtn.classList.add("show");
        } else {
            scrollBtn.classList.remove("show");
        }
    };

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

<style>
    #scrollBtn {
        position: fixed;
        bottom: 40px;
        right: 40px;
        z-index: 1000;
        font-size: 20px;
        border: none;
        outline: none;
        background-color: #007BFF;
        color: white;
        cursor: pointer;
        padding: 12px 16px;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        opacity: 0;
        visibility: hidden;
        transform: translateY(50px);
        transition: all 0.4s ease;
    }

    #scrollBtn.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    #scrollBtn:hover {
        background-color: #0056b3;
    }
</style>


    
</body>
</html>