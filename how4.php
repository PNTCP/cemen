<?php
    include "menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap">
</head>
<script>
    function openModal() {
    document.getElementById("myModal").style.display = "block";
    }
    function closeModal() {
    document.getElementById("myModal").style.display = "none";
    }

    let slideIndex = 1;

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }
    function currentSlide(n) {
    showSlides(slideIndex = n);
    }
    function showSlides(n) {
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
    }
</script>

<body>
    <div class="border-main">
        <h1>คอนกรีตพิมพ์ลาย : ราคา และ ข้อมูลที่คุณควรรู้</h1>
            <div class="gallery">
            <img src="how4pic/4.1.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
            <p style="margin-top: 0; margin-bottom: 50px;">เมื่อพูดถึงการตกแต่งพื้นที่ภายนอกหรือภายในบ้าน “คอนกรีตพิมพ์ลาย” ถือเป็นทางเลือกที่น่าสนใจและคุ้มค่า ซึ่งไม่เพียงแต่มีความสวยงาม แต่ยังมีคุณสมบัติที่โดดเด่นอีกมากมาย</p>
            <h2>ราคาคอนกรีตพิมพ์ลาย</h2>
            <p>ราคาคอนกรีตพิมพ์ลาย (Stamped Concrete) อยู่ในช่วงประมาณ <strong>550-650 บาทต่อตารางเมตร</strong> ซึ่งขึ้นอยู่จำนวนพื้นที่มากน้อย ความยากง่ายของหน้างาน หากต้องการลวดลายที่มีการออกแบบที่ซับซ้อน ราคานั้นอาจแตกต่างออกไป</p>
            <div class="gallery">
            <img src="how4pic/4.2.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
            <h2>คุณสมบัติและความคงทนของคอนกรีตพิมพ์ลาย</h2>
            <p>คอนกรีตพิมพ์ลายมีความคงทนและแข็งแรง สามารถรับแรงอัดได้ <strong>240 - 280 KSC</strong> ทำให้มั่นใจในความทนทานต่อการใช้งานในระยะยาว ไม่ว่าจะเป็นลานบ้าน ทางเดิน หรือพื้นที่จอดรถ พื้นรอบตัวบ้าน พื้นทางเดินในสวน พื้นที่ทางเดินใช้งานทั่วไป ลานกิจกรรม</p>
            <div class="gallery">
            <img src="how4pic/4.3.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
            <h2>ระยะเวลาในการติดตั้งคอนกรีตพิมพ์ลาย</h2>
            <p>การติดตั้งคอนกรีตพิมพ์ลายสำหรับพื้นที่ขนาดเล็ก ลานหน้างานพื้นที่จอดรถประมาณ 1 คัน พื้นที่ 30-60 ตร.ม. จะใช้เวลาการทำงาน 1-2 วัน ส่วนพื้นที่ขนาด <strong>60 - 150 ตารางเมตร</strong> จะใช้เวลา <strong>2-3 วัน</strong> ขึ้นอยู่กับสภาพอากาศและลวดลายที่เลือก โดยการติดตั้งโดยช่างผู้มีประสบการณ์จะช่วยให้ได้ผลลัพธ์ที่มีคุณภาพและสวยงาม</p>
            <div class="gallery">
            <img src="how4pic/4.4.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
            <h2>การบำรุงรักษาคอนกรีตพิมพ์ลาย</h2>
            <p>การดูแลรักษาคอนกรีตพิมพ์ลายทำได้ง่าย เพียงแค่ใช้เครื่องฉีดน้ำแรงดันสูงในการทำความสะอาดเพื่อชำระสิ่งสกปรกออกไป ควรหลีกเลี่ยงการใช้สารเคมีที่มีฤทธิ์กัดกร่อนเพื่อรักษาความสวยงามและอายุการใช้งาน</p>
            <div class="gallery">
            <img src="how4pic/4.5.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
            <h2 style="margin-top: 0">สรุป</h2>
            <p>คอนกรีตพิมพ์ลายไม่เพียงแต่เพิ่มความสวยงามให้กับบ้านของคุณ แต่ยังเป็นทางเลือกที่คุ้มค่าและทนทาน โดยมีราคาเริ่มต้นที่ <span style="color: red;">550 - 650</span> บาท/ตารางเมตร คุณสามารถสร้างพื้นที่ที่น่าประทับใจได้อย่างง่ายดาย
                หากคุณสนใจหรือมีคำถามเพิ่มเติมเกี่ยวกับคอนกรีตพิมพ์ลาย สามารถติดต่อเราเพื่อขอคำแนะนำและข้อมูลเพิ่มเติมได้เลย!</p>


<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <img src="how3pic/3.1.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how3pic/3.2.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how3pic/3.3.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how3pic/3.4.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how3pic/3.5.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how3pic/3.5.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how3pic/3.6.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how3pic/3.7.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how3pic/3.8.png" style="width:100%">
    </div>
    
    
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>


    <style>
        .step-gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
        margin: 30px 100px;
    }

    .step-item {
        text-align: center;
        font-family: 'Kanit', sans-serif;
    }

    .step-item img {
        width: 100%;
        height: 220px; /* กำหนดความสูงตายตัว */
        object-fit: cover; /* ครอบภาพให้เต็มโดยไม่เสียสัดส่วน */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s;
        cursor: pointer;
    }


    .step-item img:hover {
        transform: scale(1.03);
    }

    .step-item p {
        margin-top: 8px;
        font-size: 16px;
        color: #333;
    }

        .border-main {
            padding: 20px;
            margin: 20px;
            font-family: Kanit;
            justify-content: center;
            margin-left: 100px;
            margin-right: 100px;
            
        }
        .border-main img {
            width: 100%;
            height: auto;
            margin-bottom: 30px;
            margin-top: 30px;
        }
        .border-main p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            font-weight: none;
        }
        .border-main li {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            font-weight: none;
        }
        .border-main h2{
            font-size: 26px;
            margin-top: 20px;
            margin-bottom: 10px;
            color: grey;
        }
        .border-main a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            line-height: 1.6;
        }
        .contact a:hover {
            color: red;
        }
        .thumbnail {
            width: 100%;
            cursor: pointer;
            border-radius: 8px;
            transition: 0.3s;
        }
        .thumbnail:hover {
            opacity: 0.8;
        }
        .border-img {
            display: flex;
            flex-wrap: wrap;
        /* grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); */


        }
        .border-img img {
            width: 10%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 100;
            padding-top: 60px;
            left: 0; top: 0;
            width: 100%; height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.9);
        }

        .modal-content {
            position: relative;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 80%;
            max-height: 80%;
        }

        .mySlides {
            display: none;
        }

        .mySlides img {
            margin-top: 28px;
            width: 100%;
            height: 700px;
            border-radius: 8px;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 40px;
            user-select: none;
            transform: translateY(-50%);
        }

        .prev { left: 0; }
        .next { right: 0; }
    /*for MB*/
    @media (max-width: 768px) {
        .border-main {
            margin: 20px;
        }
        .border-main img {
            width: 100%;
            height: auto;
        }
        .border-img img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .modal-content {
            max-width: 90%;
            max-height: 90%;
        }
    }

    </style>
</body>
</html>