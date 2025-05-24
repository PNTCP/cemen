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
        <h1>พื้นคอนกรีตพิมพ์ลาย ใช้เวลาทำกี่วัน ??</h1>
        <div class="gallery">
            <img src="how2pic/how2.1.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <p> <strong>ระยะเวลา และ ราคา ในการติดตั้งพื้นคอนกรีตพิมพ์ลาย : ข้อมูลที่ควรรู้</strong>
            การติดตั้งพื้นคอนกรีตพิมพ์ลายเป็นกระบวนการที่ต้องคำนึงถึงหลายปัจจัย โดยเฉพาะในเรื่องของระยะเวลาและราคาที่อาจแตกต่างไปตามลักษณะงาน</p>
        <h2>ระยะเวลาในการติดตั้ง</h2>
        <p>ระยะเวลาในการติดตั้งพื้นคอนกรีตพิมพ์ลายขึ้นอยู่กับ 2 ปัจจัยหลัก ได้แก่ :</p>
        <p><strong>ขนาดพื้นที่ 🔎</strong></p>
        <li>สำหรับพื้นที่ขนาดเล็ก เช่น 30 – 60 ตารางเมตร (รองรับการจอดรถยนต์ 1 คัน) ใช้เวลาประมาณ 1 – 2 วัน</li>
        <li>พื้นที่ขนาดกลาง เช่น 60 – 150 ตารางเมตร จะใช้เวลา 2 – 3 วัน</li>
        <p><strong>สภาพอากาศ 🌦</strong></p>
        <li>การติดตั้งพื้นคอนกรีตพิมพ์ลายเป็นงานภายนอกที่ต้องการการเทปูนใหม่ สภาพอากาศจึงมีผลสำคัญโดยตรง หากสภาพอากาศร้อนจัดหรือมีฝนตก อาจทำให้ต้องปรับระยะเวลาการทำงานเพื่อให้พื้นคอนกรีตแห้งสนิทและได้มาตรฐานตามที่กำหนด</li>
        <h2>ราคาในการติดตั้ง💸</h2>
        <p>ราคาคอนกรีตพิมพ์ลายมีหลากหลายเกรดตามวัสดุและคุณภาพที่เลือก สำหรับทีมช่างเดคคอร์จาก CDT <strong>ราคามาตรฐานอยู่ที่ประมาณ 550-650 บาทต่อตารางเมตร </strong>
            โดยใช้สีซีเมนต์ Color Seasons ที่มี มอก. และแม่พิมพ์ที่ได้มาตรฐาน ISO 9001:2015 รวมถึงการทำงานตามขั้นตอน 10 ข้อที่ได้มาตรฐาน</p>
        <h2>เกร็ดเพิ่มเติม ✨</h2>
        <li><strong>ระยะเวลา :</strong> สำหรับการพิมพ์ลายที่ซับซ้อนหรือลายที่ต้องใช้ความละเอียด การทำงานอาจใช้เวลามากขึ้น โดยเฉพาะหากเป็นทีมช่างใหม่ที่ยังไม่มีความชำนาญ 
            แต่สำหรับทีมที่มีประสบการณ์สูงจะสามารถทำงานได้อย่างรวดเร็ว พร้อมผลลัพธ์ที่ได้คุณภาพและสวยงามตามมาตรฐาน</li>
        <li><strong>ราคา :</strong> ราคายังอาจเปลี่ยนแปลงได้ตามขนาดพื้นที่ ความยากง่ายของหน้างาน รวมถึงลวดลายที่ออกแบบเป็นพิเศษ ยิ่งหากเป็นลายที่ต้องใช้เทคนิคสูง ราคาก็อาจแตกต่างออกไปตามความซับซ้อนของงาน</li>
    </div>
<div class="step-gallery">
    <div class="step-item">
        <img src="how2pic/how2.1.png" alt="เทคอนกรีต">
    </div>
    <div class="step-item">
        <img src="how2pic/how2.2.png" alt="เกลี่ยผิว">
    </div>
    <div class="step-item">
        <img src="how2pic/how2.3.png" alt="เตรียมสี">
    </div>
    <div class="step-item">
        <img src="how2pic/how2.4.png" alt="ลงแม่พิมพ์">
    </div>
    <div class="step-item">
        <img src="how2pic/how2.5.png" alt="แม่พิมพ์ Random">
    </div>
    <div class="step-item">
        <img src="how2pic/how2.6.png" alt="พื้นหลังปั๊มเสร็จ">
    </div>
    <div class="step-item">
        <img src="how2pic/how2.7.png" alt="เคลือบผิว">
    </div>
    <div class="step-item">
        <img src="how2pic/how2.8.png" alt="ภาพรวมงานเสร็จ">
    </div>
    <div class="step-item">
        <img src="how2pic/how2.9.png" alt="ภาพรวมงานเสร็จ">
    </div>
</div>


<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <img src="how2pic/how2.1.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how2pic/how2.2.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how2pic/how2.3.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how2pic/how2.4.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how2pic/how2.5.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how2pic/how2.5.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how2pic/how2.6.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how2pic/how2.7.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how2pic/how2.8.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how2pic/how2.9.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how2pic/how2.10.png" style="width:100%">
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


    /*for MB*/
    @media (max-width: 768px) {
        .border-main {
            margin: 10px;
            padding: 10px;
        }
        .border-main img {
            width: 100%;
            height: auto;
        }
        .step-gallery {
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            margin: 20px;
        }
        .step-item img {
            height: 150px; 
        }
        .modal-content img {
            height: auto; 
        }
}

        .modal-content {
            flex-direction: column; 
        }
        .mySlides img {
            height: auto; 
        }
    }
    </style>



</style>
</body>
</html>