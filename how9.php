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
        <h1>พื้นคอนกรีตพิมพ์ลาย แตกร้าว สาเหตุและวิธีป้องกัน ทำยังไง ?</h1>
        <div class="gallery">
            <img src="how9pic/9.1.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <p>ปัญหาพื้นคอนกรีตพิมพ์ลายแตกร้าว เกิดจากงานปูนพิมพ์ลายที่ไม่ได้มาตรฐาน มีระดับการแตกร้าวที่ต่างกันไป และสามารถสร้างผลกระทบให้กับเจ้าของบ้านได้ทั้งเรื่องงบประมาณ จนถึงความปลอดภัยในการใช้งาน ซึ่งสาเหตุที่ทำให้พื้นพิมพ์ลายแตกร้าวมีหลายปัจจัยด้วยกัน</p>
        <h2>พื้นคอนกรีตพิมพ์ลายแตกร้าว เกิดจากอะไร ป้องกันได้อย่างไร</h2>
        <div class="gallery">
            <img src="how9pic/9.2.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <h2>การเทปรับระดับต่ำกว่ามาตรฐาน</h2>
        <p>โดยปกติการ<a href="" style="color: blue;">ทำพื้นคอนกรีตพิมพ์ลาย</a>ควรเทปูนปรับระดับอย่างต่ำที่ 5 ซม.ขึ้นไป สำหรับพื้นหน้าบ้านหรือโรงจอดรถยนต์ 4 ล้อทั่วไป</p>
        <div class="gallery">
            <img src="how9pic/9.3.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <h2>ค่า strength คอนกรีตต่ำกว่ามาตรฐาน</h2>
        <p>เพราะพื้นพิมพ์ลายจำเป็นต้องถูกใช้งานรับน้ำหนักทั้งคนทั้งรถ และทนแรงขูดขีดบ่อย ค่า strength คอนกรีตไม่ควรต่ำกว่า 240 - 280 ksc. เพราะถ้าต่ำกว่ามาตรฐานนี้จะทนรับน้ำหนักไม่ไหว</p>
        <div class="gallery">
            <img src="how9pic/9.4.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <h2>โครงสร้างเดิมของพื้นไม่แข็งแรง</h2>
        <p style="text-indent: 40px;">สาเหตุนี้มักพบบ่อยกรณีบ้านจัดสรรที่พื้นนอกบ้าน รอบบ้าน หรือโรงจอดรถ ไม่ได้ทำการลงเสาเข็ม รวมถึงการบดอัดพื้นยังไม่แน่นพอ 
            เมื่อใช้งานไม่นานพื้นจะทรุดตัว ดังนั้นหากโครงสร้างเดิมของพื้นไม่แข็งแรงอยู่ก่อนแล้ว เมื่อมีการทำพื้นพิมพ์ลาย ก็ทำให้เกิดการแตกร้าวตามมาได้</p>
        <div class="gallery">
            <img src="how9pic/9.5.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <h2>การไม่ตัดจอยต์</h2>
        <p style="text-indent: 40px;">มาตรฐานการทำพื้นคอนกรีตพิมพ์ลายต้องทำการตัดจอยต์เพื่อควบคุมการแตกร้าว เพราะคอนกรีตจะมีการยืดหดตัวจากสภาพอากาศ 
            การมีร่องรอยต่อจากการตัดจอยต์ไว้จึงช่วยรองรับการขยับยืดหดตัวของคอนกรีต และเพื่อป้องกันเมื่อมีการแตกร้าวขึ้นจะได้อยู่แค่ในส่วนที่ตัดจอยต์ไว้ ไม่ร้าวเสียหายลุกลามไปทั้งหมด</p>
        <div class="gallery">
            <img src="how9pic/9.6.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <h2>การไม่เสริมเหล็กไวร์เมช</h2>
        <p>เจ้าของบ้านควรตรวจสอบช่างรับเหมาให้ดี ว่าช่างใส่ใจมากพอในการวางเหล็กไวร์เมชไว้ก่อนการเทปูนหรือไม่ เพราะงานแสตมป์คอนกรีตหากพื้นมีการวางเสริมเหล็กไว้ จะมีส่วนช่วยให้พื้นแข็งแรงขึ้น</p>
        <div class="gallery">
            <img src="how9pic/9.7.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <h2>การขัดมันไม่ดี</h2>
        <p style="text-indent: 40px;">ขั้นตอนสำคัญอีกอย่างหนึ่งของการทำคอนกรีตพิมพ์ลายให้ออกมาสวย และแข็งแรงคือ การขัดมัน ต้องขัดให้เรียบเนียน สม่ำเสมอ ระวังอย่าขัดมันมากเกินไปจนสีจม เพราะจะทำให้ปูนกับทรายขึ้นมา
             ทำให้ผิวหน้าไม่แข็งแรง และควรเลือก<a href="">ใช้สีซีเมนต์มีมาตรฐาน</a> ผ่าน มอก. จะช่วยให้ขัดมันง่ายขึ้น สีมีคุณภาพยึดเกาะปูนได้ดี ปิดผิวได้เรียบเนียน</p>
        <div class="gallery">
            <img src="how9pic/9.8.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <h2>การโรยสีเยอะเกินไป</h2>
        <p style="text-indent: 40px;">หากโรยสีซีเมนต์มากเกินไป และไม่สม่ำเสมอกัน มีผลทำให้ผิวงานแสตมป์คอนกรีตเกิดแตกลายงาได้ ช่างควรใช้ตะแกรงร่อนสีที่ได้มาตรฐานช่วยโรยสี 
            ที่สำคัญคือช่างต้องมีความรู้เรื่องการควบคุมปริมาณการใช้สีซีเมนต์ต่อพื้นที่ ตร.ม. ให้เป็น เพราะนอกจากจะคุมคุณภาพงานได้แล้ว ยังช่วยคุมงบประมาณได้ด้วย</p>
        <div class="gallery">
            <img src="how9pic/9.9.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <p style="text-indent: 40px;">ใครที่เคยผ่านประสบการณ์พื้นคอนกรีตพิมพ์ลายแตกร้าวมาแล้ว จะรู้ดีว่าความเสียหายมีมากกว่าแค่เรื่องความสวยงาม แต่ต้องเสียเวลาซ่อมแซม และออกมาไม่เนียน บานปลายต้องแย็กทิ้งทำใหม่ 
            เสียเงินซ้ำซ้อน เจ้าของบ้านจึงควรศึกษาเรื่อง <a href="">มาตรฐานทำคอนกรีตพิมพ์ลาย</a> และเลือกจ้างช่างรับเหมาที่มีความรู้ มีประสบการณ์ และตรวจสอบได้</p>
        <br>
            <hr>
        <br>
        <h1>หางานรับเหมาให้ช่าง หาช่างให้เจ้าของบ้าน</h1>
        <h2 style="color: black;">ปรึกษาเรา ช่างเดคคอร์.คอม</h2>
        <h2 style="color: black;">คลิกแอดไลน์ : <a href="" style="color: blue; font-size: 25px;">https://lin.ee/gs4lMFX</a> </h2>
        <h2 style="color: black;">ไอดีไลน์ : @concretedecor</h2>
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