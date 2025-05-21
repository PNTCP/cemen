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
        <h1>คอนกรีตพิมพ์ลาย ไอเดียการตกแต่งพื้นเพื่อความสวยงามและทนทาน</h1> 
            <div class="gallery">
                <img src="how5pic/5.1.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
            </div>
        <p style="text-indent: 50px; margin-top: 0;">ในยุคที่การตกแต่งบ้านกำลังได้รับความนิยม “คอนกรีตพิมพ์ลาย” กลายเป็นทางเลือกที่น่าสนใจสำหรับผู้ที่ต้องการสร้างบรรยากาศที่ไม่เหมือนใคร ทั้งภายในและภายนอกบ้าน ด้วยความหลากหลายของลายและสีสันที่สามารถเลือกได้ตามความชอบ</p>
        <h2 style="margin-bottom: 0; margin-top: 50px;">1. คอนกรีตพิมพ์ลายคืออะไร?</h2>
        <p style="margin-top: 0;">คอนกรีตพิมพ์ลาย คือ การทำคอนกรีตที่หล่อขึ้นรูปทรงเป็นลวดลายหินธรรมชาติ โดยใช้แม่พิมพ์ คอนกรีตพิมพ์ลาย โดยเป็นแม่พิมพ์เฉพาะ เพื่อให้ได้พื้นผิวที่มีลักษณะเหมือนวัสดุตกแต่งอื่น ๆ เช่น หินธรรมชาติ อิฐ หรือไม้ ทำให้ได้ความสวยงามในราคาที่คุ้มค่า</p>
        <h2>2. ทำไมต้องเลือกคอนกรีตพิมพ์ลาย?</h2>
        <li><strong>ความทนทาน:</strong> คอนกรีตพิมพ์ลายมีความแข็งแรงและทนทานต่อสภาพอากาศ </li>
        <li><strong>การบำรุงรักษาง่าย:</strong> ไม่จำเป็นต้องดูแลรักษาเหมือนวัสดุอื่น ๆ</li>
        <li><strong>หลากหลายสไตล์:</strong> สามารถเลือกลายและสีได้ตามต้องการ</li>
        <li><strong>เป็นมิตรกับสิ่งแวดล้อม:</strong> วัสดุที่ใช้ผลิตมักเป็นมิตรกับธรรมชาติ</li>
        <h2>3. ไอเดียการตกแต่งด้วยคอนกรีตพิมพ์ลาย</h2>
        <li><strong>ลานบ้าน :</strong> สร้างลานสำหรับพักผ่อนโดยใช้คอนกรีตพิมพ์ลายที่มีลวดลายสวยงาม</li>
        <li><strong>ทางเดิน :</strong> ใช้คอนกรีตพิมพ์ลายเพื่อสร้างทางเดินในสวน เพิ่มความน่าสนใจให้กับพื้นที่</li>
        <li><strong>โรงจอดรถ :</strong> ปรับปรุงโรงจอดรถให้ดูทันสมัยและสวยงามด้วยคอนกรีตพิมพ์ลาย</li>
        <h2>4. วิธีการติดตั้งคอนกรีตพิมพ์ลาย</h2>
        <p>การติดตั้งคอนกรีตพิมพ์ลายควรดำเนินการโดยผู้เชี่ยวชาญ เพื่อให้ได้คุณภาพที่ดีที่สุด และยังต้องคำนึงที่วัสดุที่เลือกใช้ในงานติดตั้งพื้นคอนกรีตพิมพ์ลาย ทั้งสีซีเมนต์ ผงลอกบบ แม่พิมพ์ น้ำยาเคลือบ โดยทั่วไปมีขั้นตอนดังนี้ :</p>
        <ol>
            <li>
                <ul>
                    เตรียมพื้นที่ผิวปูนให้สะอาด 
                </ul>
            </li>
            <li>
                <ul>
                    เทคอนกรีตและรอให้ปูนเริ่มหมาด
                </ul>
            </li>
            <li>
                <ul>
                    ใช้สี Color Seasons โรยขัดมัน
                </ul>
            </li>
             <li>
                <ul>
                    ใช้แม่พิมพ์ในการพิมพ์ลายหิน
                </ul>
            </li>
            <li>
                <ul>
                    ปรับแต่งและเคลือบผิวเพื่อป้องกันรอยขีดข่วน
                </ul>
            </li>
        </ol>
        <h2>5. การดูแลรักษาคอนกรีตพิมพ์ลาย</h2>
        <p>การดูแลรักษาไม่ยุ่งยาก สามารถทำความสะอาดได้ด้วยน้ำสะอาด หรือฉีดน้ำแรงดับสูงห่างๆ ทำความสะอาดเฉพาะฝุ่น และควรเคลือบผิวใหม่เป็นระยะ 3-5 ปี เพื่อรักษาความสวยงามและยืดอายุการใช้งาน</p>
        <h2 style="color: red;">สรุป</h2>
        <p>คอนกรีตพิมพ์ลายเป็นทางเลือกที่ยอดเยี่ยมสำหรับการตกแต่งพื้น ทั้งยังมีความทนทานและหลากหลายสไตล์ที่ตอบโจทย์ทุกความต้องการ การเลือกใช้คอนกรีตพิมพ์ลายจะช่วยเพิ่มมูลค่าให้กับบ้านและทำให้พื้นที่ของคุณมีเสน่ห์อย่างยั่งยืน หากคุณสนใจข้อมูลเพิ่มเติมเกี่ยวกับคอนกรีตพิมพ์ลาย หรือต้องการคำแนะนำในการตกแต่งบ้าน สามารถติดต่อเราได้เลย! </p>
        </div>

<div class="step-gallery">
    <div class="step-item">
        <img src="how5pic/5.1.png" alt="เทคอนกรีต">
    </div>
    <div class="step-item">
        <img src="how5pic/5.2.png" alt="เกลี่ยผิว">
    </div>
    <div class="step-item">
        <img src="how5pic/5.3.png" alt="เตรียมสี">
    </div>
    <div class="step-item">
        <img src="how5pic/5.4.png" alt="ลงแม่พิมพ์">
    </div>
    <div class="step-item">
        <img src="how5pic/5.5.png" alt="แม่พิมพ์ Random">
    </div>
    <div class="step-item">
        <img src="how5pic/5.6.png" alt="พื้นหลังปั๊มเสร็จ">
    </div>
    <div class="step-item">
        <img src="how5pic/5.7.png" alt="เคลือบผิว">
    </div>
    <div class="step-item">
        <img src="how5pic/5.8.png" alt="ภาพรวมงานเสร็จ">
    </div>
    <div class="step-item">
        <img src="how5pic/5.9.png" alt="ภาพรวมงานเสร็จ">
    </div>
        <div class="step-item">
        <img src="how5pic/5.10.png" alt="ภาพรวมงานเสร็จ">
    </div>
        <div class="step-item">
        <img src="how5pic/5.11.png" alt="ภาพรวมงานเสร็จ">
    </div>
        <div class="step-item">
        <img src="how5pic/5.12.png" alt="ภาพรวมงานเสร็จ">
    </div>  
        <div class="step-item">
        <img src="how5pic/5.13.png" alt="ภาพรวมงานเสร็จ">
    </div>
        <div class="step-item">
        <img src="how5pic/5.14.png" alt="ภาพรวมงานเสร็จ">
    </div>
        <div class="step-item">
        <img src="how5pic/5.15.png" alt="ภาพรวมงานเสร็จ">
    </div>
        <div class="step-item">
        <img src="how5pic/5.16.png" alt="ภาพรวมงานเสร็จ">
    </div>
        <div class="step-item">
        <img src="how5pic/5.17.png" alt="ภาพรวมงานเสร็จ">
    </div>
        <div class="step-item">
        <img src="how5pic/5.18.png" alt="ภาพรวมงานเสร็จ">
    </div>
</div>


<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <img src="how5pic/5.1.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.2.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.3.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.4.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.5.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.6.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.6.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.7.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.8.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.9.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.10.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.11.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.12.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.13.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.14.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.15.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.16.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.17.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.18.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how5pic/5.19.png" style="width:100%">
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
            margin-top: 0;

        }
        .border-main li {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            font-weight: none;
        }
        .border-main h2{
            font-size: 26px;
            margin-top: 50px;
            margin-bottom: 0;
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