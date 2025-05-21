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
        <h1>พื้นคอนกรีตพิมพ์ลาย มีกี่แบบ ??</h1>
        <h1 style="color: red; font-size: 25px; font-weight: 1;">ไอเดีย พื้นคอนกรีตพิมพ์ลาย 8 ลายยอดนิยมสูงสุดตลอดปี 2024 ที่ใช้ในการใช้รับเหมา ติดตั้งงานบ้านพักอาศัย</h1>
        <br>
        <hr>
        <ol>
            <li>
                <ul>
                    <strong>แบบพิมพ์ ลายคอนกรีต</strong> แรนด้อม สโตน ( Random Stone ) - แบบพิมพ์ ลายคอนกรีต ที่นิยมมากที่สุดตลอดกาลก็ว่าได้ เป็นที่รู้จักกันมาก เห็นได้ง่ายตามสถานที่ ปั้มน้ำมัน โรงแรม ห้าง ทำให้มีการเอาไปรับเหมาติดตั้งกันอย่างมากมาย จึงเป็นแม่พิมพ์อันดับหนึ่งที่เลือกใช้กันมากที่สุด
                </ul>
            </li>
            <div class="gallery">
            <img src="how3pic/3.1.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
            <li>
                <ul>
                    <strong>แบบพิมพ์ ลายคอนกรีต</strong> แอสร่า คัทสเลท ( Ashlar Cut Slate ) - แบบพิมพ์ ลายคอนกรีต ที่ยอดนิยมตามมาเป็นอันดับที่ 2 ด้วยความที่พื้นคอนกรีตพิมพ์ลาย ทรงสี่เหลี่ยมทำให้ดูมีความเรียบหรู สไตล์ Modern ที่ยังคงความเป็นก้อนหินธรรมชาติได้ดี เข้ากับตัวบ้านได้หลากหลายสไตล์
                </ul>
            </li>
            <div class="gallery">
            <img src="how3pic/3.2.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
            <li>
                <ul>
                    <strong>แบบพิมพ์ ลายคอนกรีต</strong> ลอนดอน คอบเบิล สโตน ( London Cobble Stone ) - แบบพิมพ์ ลายคอนกรีต ที่โดดเด่นในเรื่องของรูปทรงก้อนหินที่เป็นรูปแบบ อิฐโชว์แนว ทำให้เวลาติดตั้งพื้นคอนกรีตพิมพ์ลาย จะได้ความสวยเรียบทรงดูมีสไตล์ที่ยังคงความ คลาสสิกอยู่ได้ทุกสมัย
                </ul>
            </li>
            <div class="gallery">
            <img src="how3pic/3.3.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
            <li>
                <ul>
                    <strong>แบบพิมพ์ ลายคอนกรีต</strong> Granite sets - แบบพิมพ์ ลายคอนกรีตที่ได้ความธรรมชาติที่รูปทรงสี่เหลี่ยม ขนาดก้อนหินที่มาต่อๆกัน แนวตรงทุกด้าน ก้อนหินขนาด 4 นิ้ว งานติดตั้งพื้นคอนกรีตพิมพ์ลาย กับแม่พิมพ์ทรงนี้ ทำให้ได้ความเรียบหรูขั้นสุด ได้กลิ่นไอสไตล์เหมือนอยู่เหมือนนอก
                </ul>
            </li>
            <div class="gallery">
            <img src="how3pic/3.4.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
            <li>
                <ul>
                    <strong>แบบพิมพ์ ลายคอนกรีต</strong> ( Cobble Stone ) - แบบพิมพ์ ลายคอนกรีต ที่มีความสวยงามของทรงก้อนหินที่มาต่อเรียงตัวกันแบบ อิฐ โชว์แนว ซึ่งได้ก้อนหินแบบอิฐขนาดใหญ่ร่องกว้าง ทำให้ความมีความ คลาสสิกเป็นอย่างมาก ให้ความรู้สึกเหมือนพื้นใน ประเทศอิตาลี
                </ul>
            </li>
            <div class="gallery">
            <img src="how3pic/3.5.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
            <li>
                <ul>
                    <strong>แบบพิมพ์ ลายคอนกรีต</strong> ( Banglajang ) - แบบพิมพ์ ลายคอนกรีต ที่ตั้งชื่อให้โบราณด้วยความที่ก้อนหินรูปทรงหลายหลากแบบมาต่อกันวางให้เหมือนหินธรรมชาติแบบยุคเก่า ทำให้ติดตั้งพื้นพิมพ์ลายออกมาแล้วเข้ากับต้นไม้และธรรมชาติได้ดี
                </ul>
            </li>
            <div class="gallery">
            <img src="how3pic/3.6.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
            <li>
                <ul>
                    <strong>แบบพิมพ์ ลายคอนกรีต</strong> ( California Weave ) - แบบพิมพ์ ลายคอนกรีต ที่ได้รูปทรแบบหินก้อนสี่เหลียมมาต่อกับ 4 ชิ้นและยังออกมาเป็นสี่เเหลี่ยมด้านเท่าติดตั้งมาจะได้ความเป็นเหมือนปูกระเบื้องที่ยังได้เท็กเจอร์ลายก้อนหินสวยๆ
                </ul>
            </li>
            <div class="gallery">
            <img src="how3pic/3.7.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
            <li>
                <ul>
                    <strong>แบบพิมพ์ ลายคอนกรีต</strong> อิงริช ( English ) แบบพิมพ์ ลายคอนกรีต โดยมีการเลือกใช้ติดตั้งพื้นพิมพ์ลายในสวนเป็นส่วนใหญ่ ลวดลายจะเป็นก้อนหินทรงยาว ผสม กับก้อนหินทรงด้านเท่า การวางหินทั้งแนวตั้ง แนวนอน ทำให้งานออกมาวางลายได้มีสไตล์เฉพาะตัว
                </ul>
            </li>
            <div class="gallery">
            <img src="how3pic/3.8.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
        
        </ol>

        <div style="margin-left: 50px; margin-right: 20px;text-align: center;">
            <p>หากสนใจปรึกษาการเลือกลาย แบบพิมพ์ ลายคอนกรีต ที่ให้สวยงามเข้ากับตัวบ้าน ให้เราทีมงาน คอนคอนกรีต เดคคอร์ ไทยแลนด์ ช่วยเลือกให้ได้สอบถามได้ฟรี พร้อมช่วยเหลืออย่างเต็มที่</p>
            <p>ติดต่อสอบถาม : 063-932-2993</p>
            <div class="contact">
                <p>แอดไลน์ : <a href="https://lin.ee/SKcx5b8">https://lin.ee/SKcx5b8</a></p>
            </div>
        </div>
    </div>


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

    </style>
</body>
</html>