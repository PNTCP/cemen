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
    <div class="container">
        <div class="border-main">คอร์สอบรม อาชีพผู้เหมาทำพื้นคอนกรีตพิมพ์ลาย รุ่น 13สถานที่ : ชลบุรี อ.บางละมุง <br> <br> วันเสาร์ที่ : 22 มีนาคม 2568</div>

        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: 'Segoe UI', Arial, sans-serif;
                background: #fafbfc;
            }
            .container {
                max-width: 900px;
                margin: 0 auto;
                padding: 24px 24px 0 24px;
                background: #fff;
                border-radius: 18px;
                box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            }
            .border-main {
                display: block;
                border: 2px solid #222;
                border-radius: 40px;
                padding: 24px 16px;
                text-align: center;
                font-size: 2.1rem;
                margin: 40px 0 32px 0;
                background: #f5f7fa;
            }
            .sec-text {
                font-size: 1.15rem;
                margin: 32px 0 0 0;
                color: #222;
            }
            .sec-text h3 {
                font-size: 1.3em;
                margin-bottom: 8px;
            }
            .sec-text p {
                color: #555;
                margin-top: 10px;
                margin-bottom: 0px;
                line-height: 1.6;
            }
            .image-container {
                position: relative;
                width: 100%;
                max-width: 500px;
                margin: 40px auto 0 auto;
            }
            .image-container img {
                width: 100%;
                max-width: 500px;
                height: auto;
                border-radius: 18px;
                box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            }
            .contact-button-on-image {
                position: absolute;
                bottom: 10px;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
                flex-direction: column;
                gap: 10px;
                align-items: center;
            }
            .contact-button-on-image a {
                color: #fff;
                text-decoration: none;
                font-size: 1.1rem;
                padding: 12px 24px;
                border-radius: 24px;
                box-shadow: 0 2px 6px rgba(0,0,0,0.18);
                background: #1db954;
                transition: background 0.2s;
            }
            .contact-button-on-image a:hover {
                background: #168f3e;
            }
            .sec-image {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 18px;
                margin-top: 40px;
                padding: 0 12px 24px 12px;
                box-sizing: border-box;
            }
            .sec-image > div {
                flex: 1 1 160px;
                max-width: 200px;
                min-width: 120px;
                display: flex;
                justify-content: center;
                box-sizing: border-box;
            }
            .sec-image img {
                width: 100%;
                max-width: 200px;
                height: auto;
                border-radius: 16px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.13);
                margin: 0;
                display: block;
                box-sizing: border-box;
                transition: transform 0.3s ease-in-out;
            }
            .sec-image img:hover {
                transform: scale(1.05);
                z-index: 1;
            }
            @media (max-width: 900px) {
                .container {
                    max-width: 98vw;
                    padding: 12px 4vw 0 4vw;
                }
                .border-main {
                    font-size: 1.3rem;
                    padding: 16px 8px;
                }
                .image-container {
                    max-width: 98vw;
                }
                .sec-image {
                    gap: 14px;
                    padding: 0 4vw 18px 4vw;
                }
                .sec-image > div {
                    max-width: 48vw;
                }
            }
            @media (max-width: 768px) {
                .container {
                    max-width: 100vw;
                    padding: 8px 2vw 0 2vw;
                }
                .border-main {
                    font-size: 1.1rem;
                    padding: 10px 4px;
                    border-radius: 18px;
                }
                .sec-text {
                    font-size: 1rem;
                    margin-top: 18px;
                }
                .image-container {
                    max-width: 100vw;
                }
                .sec-image {
                    gap: 8px;
                    padding: 0 2vw 12px 2vw;
                }
                .sec-image > div {
                    max-width: 98vw;
                    min-width: 0;
                }
                .sec-image img {
                    max-width: 100vw;
                }
            }
            @media (max-width: 480px) {
                .container {
                    padding: 2vw 1vw 0 1vw;
                }
                .border-main {
                    font-size: 0.95rem;
                    padding: 8px 2px;
                }
                .sec-text {
                    font-size: 0.95rem;
                }
                .contact-button-on-image a {
                    font-size: 1rem;
                    padding: 10px 10px;
                }
            }
        </style>

        <div class="image-container">
            <img src="https://static.wixstatic.com/media/51972b_c457a9ce261f4bf6b7d9f6d35d1e2028~mv2.jpg/v1/fill/w_403,h_399,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/คอนกรีตพิมพ์ลาย-Display-1.jpg" alt="ภาพคอร์สอบรม">
            <div class="contact-button-on-image">
                <a href="https://lin.ee/HqRQQAB" class="green-btn">สมัครทางไลน์</a>
            </div>
        </div>

        <div class="sec-text">
            <h3>สอนทำ คอนกรีตพิมพ์ลาย รุ่นที่13</h3>
            <p>📅 วันเสาร์ที่ : 22 มีนาคม 2568</p>
            <p>✅ สอนงานจริง ลงมือทำ 100%</p>
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
            <p>🗺️ แอดไลน์ :<a href="https://lin.ee/HqRQQAB">คลิกได้ที่นี้เลย</a></p>
        </div>
    <br>
        <hr style="margin: 50px">
        <div class="sec-image">
            <div>
                <img src="https://i.pinimg.com/originals/b5/73/e4/b573e466a9ca6598b2cc587a5bca65a5.jpg" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/originals/b5/73/e4/b573e466a9ca6598b2cc587a5bca65a5.jpg" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/originals/b5/73/e4/b573e466a9ca6598b2cc587a5bca65a5.jpg" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/originals/b5/73/e4/b573e466a9ca6598b2cc587a5bca65a5.jpg" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/originals/b5/73/e4/b573e466a9ca6598b2cc587a5bca65a5.jpg" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/originals/b5/73/e4/b573e466a9ca6598b2cc587a5bca65a5.jpg" alt="">
            </div>
            
        </div>

        <style>
            /* Responsive image gallery at the bottom */
            .sec-image {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 18px;
                margin-top: 40px;
                padding: 0 12px 24px 12px;
                box-sizing: border-box;
            }
            .sec-image > div {
                flex: 1 1 160px;
                max-width: 200px;
                min-width: 120px;
                display: flex;
                justify-content: center;
                box-sizing: border-box;
            }
            .sec-image img {
                width: 100%;
                max-width: 200px;
                height: auto;
                border-radius: 16px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.13);
                margin: 0;
                display: block;
                box-sizing: border-box;
                transition: transform 0.3s ease-in-out;
            }
            .sec-image img:hover {
                transform: scale(1.05);
                z-index: 1;
            }
            @media (max-width: 600px) {
                .sec-image {
                    gap: 8px;
                    padding: 0 4vw 12px 4vw;
                }
                .sec-image > div {
                    max-width: 100vw;
                    min-width: 0;
                }
                .sec-image img {
                    max-width: 100vw;
                }
            }
        </style>














        
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


        
    </div>
</body>
</html>