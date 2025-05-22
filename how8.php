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
        <h1>เปลี่ยนพื้นที่นอกบ้านของคุณด้วยลาย สแตมป์คอนกรีตลายไม้</h1>
        <div class="gallery">
            <img src="how8pic/8.1.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <h1 style="color: red">เปลี่ยนพื้นที่นอกบ้านของคุณด้วยลายสแตมป์คอนกรีตลายไม้</h1>
        <h2>การแนะนำ</h2>
        <p>คุณกำลังพิจารณาที่จะปรับปรุงพื้นที่กลางแจ้งของคุณและต้องการที่จะรวมกลิ่นอายของประเพณีเข้ากับการออกแบบบ้านของคุณหรือไม่? 
            เปลี่ยนชานบ้าน ทางเดิน และลานสระว่ายน้ำของคุณให้กลายเป็นพื้นที่ที่งดงามและได้รับแรงบันดาลใจจากวัฒนธรรมด้วยลวดลายสแตมป์คอนกรีตลายไม้ 
            ในบล็อกนี้ เราจะมาสำรวจความงามอันเป็นเอกลักษณ์ของลายไม้และความอเนกประสงค์ของแสตมป์คอนกรีต เพื่อช่วยให้คุณเปลี่ยนพื้นที่กลางแจ้งของคุณให้กลายเป็นพื้นที่ใช้งานที่สวยงาม</p>
        <h2>ทำไมต้องเลือก Stamp Concrete ลายไม้ ?</h2>
        <p>ลายไม้เป็นองค์ประกอบสำคัญของงานสถาปัตยกรรม การเลือกลายสแตมป์คอนกรีตลายไม้:</p>
        <li>การบำรุงรักษาต่ำและความทนทานที่ยาวนาน สามารถคงรูปลักษณ์ไว้ได้นานหลายปี</li>
        <li>ความคุ้มค่า: ลวดลายคอนกรีตแสตมป์พร้อมใช้มีราคาย่อมเยากว่าเทคนิคลายไม้แบบดั้งเดิม เนื่องจากไม่ต้องใช้ฝีมือและเวลาเท่ากัน</li>
        <li>เป็นมิตรกับสิ่งแวดล้อม: ด้วยการใช้คอนกรีตแสตมป์ ที่สร้างลายไม้จาก คอนกรีต</li>
        <h2>วิธีการเลือกแบบแสตมป์คอนกรีตลายไม้ที่สมบูรณ์แบบสำหรับบ้านของคุณ</h2>
        <p>ในการเลือกรูปแบบคอนกรีตแสตมป์ลายไม้ที่เหมาะสมสำหรับพื้นที่กลางแจ้งภายนอกบ้าน ให้คำนึงถึงปัจจัยต่อไปนี้:</p>
        <li>สถาปัตยกรรมและภูมิทัศน์ที่มีอยู่: เลือกการออกแบบที่เข้ากับสไตล์บ้านโดยรวม เฉดสี และวัสดุของสถานที่ และเลือกลวดลายไม้ การจัดวางรูปแบบที่ทำให้กลมกลืนกับภูมิทัศน์โดยรอบ</li>
        <li>การจัดวางและการใช้งานเชิงพื้นที่: เลือกรูปแบบลายไม้ที่เหมาะกับขนาด รูปร่าง และวัตถุประสงค์ของพื้นที่ที่คุณวางแผนจะปรับปรุง</li>
        <li>ความชอบส่วนบุคคล: สุดท้ายแล้ว การเลือกลายไม้อาจจะไม่ได้มี ลวดลายสำหรับแสตมป์คอนกรีต มากนักซึ่งโดยมากจะมีลายไม้ให้เลือก 3-4 แบบเท่านั้น แต่จะมีเฉดสีให้เลือกมากถึง 25 เฉดสี 
            หากจะให้เหมือนไม้จริงๆก็คงเหลือเฉดสีให้เลือก 4-5 เฉดสี ทั้งนี้อย่าไปจำกัดการเลือกเฉดสีให้เหมือนจริงให้เลือกตามที่ชอบ และเข้ากับสถานที่รอบบ้านจะดีที่สุด</li>
        <h2>สรุป</h2>
        <p>ความงามเหนือกาลเวลาของลายไม้ในงานแสตมป์คอนกรีต เพื่อสร้างบรรยากาศที่มีเอกลักษณ์และน่าหลงใหลในพื้นที่กลางแจ้งของคุณ ด้วยการวางแผน ออกแบบ 
            และดำเนินการอย่างเหมาะสม แสตมป์คอนกรีตพิมพ์ลายลายไม้จะกลายเป็นแรงบันดาลใจ ความผ่อนคลายของคุณเมื่อได้เห็นพื้นที่รอบบ้านนั้นสวยงาม</p>
        <div class="gallery">
            <img src="how8pic/8.2.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
    </div>


<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <img src="how8pic/8.1.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how8pic/8.2.png" style="width:100%">
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
        .contact p:hover {
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

    </style>
</body>
</html>