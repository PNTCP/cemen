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
        <h1>แบบพิมพ์ลายคอนกรีต ลาย Random ทำไมถึงได้รับความนิยม?</h1>
        <div class="gallery">
            <img src="how1pic/how1.1.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <p style="text-indent: 50px;">ในปัจจุบัน <strong>แบบพิมพ์ลายคอนกรีต</strong> ได้รับความนิยมเป็นอย่างมาก โดยเฉพาะในงานตกแต่งพื้นทั้งภายนอกและภายในอาคาร
             ซึ่งช่วยให้พื้นดูมีมิติสวยงามและให้ความรู้สึกเป็นธรรมชาติ หนึ่งในลายที่ได้รับความนิยมสูงสุดคือ <strong>ลาย Random</strong>
              ซึ่งเป็นลายหินธรรมชาติที่ให้ความรู้สึกเป็นเอกลักษณ์และไม่ซ้ำใคร วันนี้เราจะมาดูกันว่า 
              ทำไมลายนี้ถึงเป็นที่นิยมและเหมาะกับการตกแต่งพื้นคอนกรีตพิมพ์ลาย</p>
        <div class="gallery">
            <img src="how1pic/how1.2.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <h2>ทำไมแบบพิมพ์ลายคอนกรีตถึงได้รับความนิยม?</h2>
        <ol>
            <li>
                <ul>
                    <strong>ความสวยงามที่เลียนแบบธรรมชาติ</strong>
                    <li style="margin-left: 30px; margin-top: 5px; margin-bottom: 5px;">
                        <strong>แบบพิมพ์ลายคอนกรีต</strong> สามารถสร้างลวดลายที่ดูเหมือนวัสดุธรรมชาติ เช่น หินธรรมชาติ ไม้ หรือกระเบื้องหินอ่อน โดยเฉพาะลาย Random ที่ให้ความรู้สึกเหมือนหินธรรมชาติแบบกระจัดกระจาย ทำให้พื้นที่มีเอกลักษณ์ไม่จำเจ
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <strong>ความทนทานและการบำรุงรักษาง่าย</strong>
                    <li style="margin-left: 30px; margin-top: 5px; margin-bottom: 5px;">
                        พื้นคอนกรีตพิมพ์ลายมีความแข็งแรง ทนทานต่อสภาพอากาศและการใช้งานหนัก ไม่แตกหักง่ายเหมือนกระเบื้องหินหรือแผ่นไม้ อีกทั้งยังสามารถทำความสะอาดได้ง่าย ไม่ต้องใช้สารเคมีพิเศษในการดูแลรักษา
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <strong>ค่าใช้จ่ายที่คุ้มค่า</strong>
                    <li style="margin-left: 30px; margin-top: 5px; margin-bottom: 5px;">
                        เมื่อเทียบกับการใช้วัสดุจริง เช่น หินธรรมชาติ หรือกระเบื้องลายหิน ค่าใช้จ่ายของ <strong>แบบพิมพ์ลายคอนกรีต</strong> นั้นถูกกว่ามาก และยังสามารถติดตั้งได้รวดเร็วกว่าด้วย
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <strong>ความยืดหยุ่นในการออกแบบ</strong>
                    <li style="margin-left: 30px; margin-top: 5px; margin-bottom: 5px;">
                        การใช้ <strong>ลาย Random</strong> ในพื้นคอนกรีตพิมพ์ลายช่วยให้สามารถออกแบบพื้นที่ให้เข้ากับบรรยากาศของสถานที่ได้หลากหลาย ไม่ว่าจะเป็นบ้านพักอาศัย รีสอร์ต คาเฟ่ หรือแม้แต่ลานจอดรถก็ตาม
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <strong>เป็นมิตรกับสิ่งแวดล้อม</strong>
                    <li style="margin-left: 30px; margin-top: 5px; margin-bottom: 5px;">
                        การใช้ <strong>คอนกรีตพิมพ์ลาย</strong> แทนวัสดุธรรมชาติช่วยลดการใช้ทรัพยากรธรรมชาติ และยังช่วยลดการเกิดฝุ่นละอองที่เกิดจากการก่อสร้างแบบดั้งเดิมอีกด้วย
                    </li>
                </ul>
            </li>
        </ol>
         <div class="gallery">
            <img src="how1pic/how1.3.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <h2>ลาย Random ในแบบพิมพ์ลายคอนกรีต มีลักษณะอย่างไร?</h2>
        <p>ลาย <strong>Random</strong> เป็นลายหินที่ให้ความรู้สึกเป็นธรรมชาติอย่างแท้จริง โดยมีการจัดวางลวดลายแบบไม่เป็นระเบียบ (Random) คล้ายกับหินธรรมชาติที่พบในธรรมชาติ ทำให้ได้ลวดลายที่ดูสวยงามและไม่ซ้ำกัน ซึ่งเหมาะกับการใช้งานในพื้นที่ต่างๆ เช่น</p>
        <li>ลานหน้าบ้าน หรือลานกลางแจ้ง</li>
        <li>พื้นทางเดินในสวน</li>
        <li>รอบสระว่ายน้ำ</li>
        <li>ลานจอดรถ</li>
        <li>พื้นรีสอร์ต หรือโรงแรมที่ต้องการความรู้สึกเป็นธรรมชาติ</li>
        <div class="gallery">
            <img src="how1pic/how1.4.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <h2>สรุป</h2>
        <p><strong>แบบพิมพ์ลายคอนกรีต</strong> โดยเฉพาะลาย <strong>Random</strong> เป็นตัวเลือกที่เหมาะสำหรับผู้ที่ต้องการพื้นที่สวยงาม ทนทาน และมีเอกลักษณ์ การใช้ลายแบบสุ่มทำให้พื้นดูมีชีวิตชีวาและไม่จำเจ อีกทั้งยังช่วยเพิ่มความสวยงามให้กับพื้นที่โดยไม่ต้องใช้วัสดุธรรมชาติที่มีราคาสูง ดังนั้น หากคุณกำลังมองหาตัวเลือกสำหรับตกแต่งพื้น ลาย <strong>Random</strong> ในคอนกรีตพิมพ์ลายถือเป็นตัวเลือกที่คุ้มค่าและน่าสนใจอย่างยิ่ง!</p>
        <div class="gallery">
            <img src="how1pic/how1.5.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <div class="contact">
            <p>ต้องการสอบถามเกี่ยวกับงานคอนกรีตพิมพ์ลาย ปรึกษา พูดคุยกับช่างหมู สามารถติดต่ได้ช่องทาง</p>
            <p>ไลน์ไอดี : <a href="https://lin.ee/SKcx5b8">@concretedecor</a></p>
            <p>โทร : 093-254-6566</p>
        </div>
    </div>



<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <img src="how1pic/how1.1.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how1pic/how1.2.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how1pic/how1.3.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how1pic/how1.4.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how1pic/how1.5.png" style="width:100%">
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