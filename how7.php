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
        <h1>ปฏิวัติพื้นที่ใช้สอยของคุณ: แสตมป์คอนกรีตสามารถเปลี่ยนประสบการณ์งาน พื้นบ้านของคุณได้อย่างไร</h1>
        <div class="gallery">
            <img src="how7pic/7.1.png" alt="รูปพิมพ์ลายคอนกรีต" onclick="openModal();currentSlide(1)" class="thumbnail">
        </div>
        <h2>ปฏิวัติพื้นที่อยู่อาศัยของคุณ: Stamp Concrete สามารถเปลี่ยนประสบการณ์การรีโนเวทบ้านของคุณได้อย่างไร</h2>
        <p>เมื่อพูดถึงการปรับปรุงบ้าน ตัวเลือกการปูพื้นอาจดูล้นหลาม แต่ด้วยสแตมป์คอนกรีต คุณสามารถหลุดพ้นจากตัวเลือกการปูนพื้นแบบเดิมๆ และปฏิวัติพื้นที่อยู่อาศัยของคุณได้ง่ายในบล็อกนี้ 
            เราจะพาดูงานของคอนกรีตพิมพ์ลายและค้นพบว่าคอนกรีตนี้ไม่เพียงเพิ่มความน่าดึงดูดให้กับบ้านของคุณเท่านั้น แต่ยังเปลี่ยนประสบการณ์การปรับปรุงบ้านของคุณอีกด้วย</p>
        <h2>พื้นฐานของคอนกรีตพิมพ์ลาย</h2>
        <p>คอนกรีตพิมพ์ลายหรือที่เรียกว่าคอนกรีตพิมพ์ลาย สร้างขึ้นโดยการปั๊มคอนกรีตสดด้วยลวดลายหรือการออกแบบ
                 ผลลัพธ์ที่ได้คือทางเลือกที่สวยงาม ทนทาน และคุ้มราคาสำหรับตัวเลือกงานปูพื้นแบบดั้งเดิม เช่น ปูนมันหยาบ อิฐตัวหนอน และกระเบื้อง</p>
        <h2>กระบวนการปั๊ม</h2>
        <p>ขั้นตอนการปั๊มคอนกรีตประกอบด้วยการเทคอนกรีตในพื้นที่ที่ต้องการ โรยสีขัดมันโดยใช้สีซีเมนต์ 
            จากนั้นใช้เครื่องมือปั๊มลวดลายเพื่อพิมพ์ลวดลาย แสตมป์คอนกรีตมีรูปแบบและพื้นผิวที่หลากหลาย ช่วยให้คุณสร้างรูปลักษณ์ที่เป็นเอกลักษณ์และเป็นส่วนตัวสำหรับโครงการของคุณ</p>
        <h2>คอนกรีตพิมพ์ลายช่วยเพิ่มประสบการณ์การรีโนเวทบ้านของคุณได้อย่างไร</h2>
        <p>ตอนนี้เรามีความเข้าใจพื้นฐานเกี่ยวกับคอนกรีตพิมพ์ลายแล้ว เรามาสำรวจหลายๆ วิธีที่วัสดุอเนกประสงค์นี้สามารถเปลี่ยนประสบการณ์การรีโนเวทบ้านของคุณ:</p>
        <p><strong>1. ความเป็นไปได้ในการออกแบบที่กำหนดเอง</strong></p>
        <p>ข้อได้เปรียบที่สำคัญที่สุดอย่างหนึ่งของคอนกรีตพิมพ์ลายคือความสามารถในการให้รูปลักษณ์ที่ปรับแต่งได้สูง ลวดลายและสีที่มีอยู่มากมายช่วยให้คุณสร้างสไตล์ให้กับพื้นของคุณได้ 
            ตั้งแต่หินธรรมชาติไปจนถึงการออกแบบรูปทรงเรขาคณิตที่สลับซับซ้อน อิสระในการออกแบบนี้ทำให้ง่ายต่อการสร้างพื้นที่ที่สอดคล้องกับตัวบ้านของคุณ</p>
        <p><strong>2. ความทนทาน</strong></p>
        <p>คอนกรีตพิมพ์ลายไม่เพียง แต่สวยงามเท่านั้น แต่ยังทนแดด ทนฝน 
            สามารถทนทานต่อองค์ประกอบต่างๆ เช่น การเดินเท้าหนัก รังสียูวี และสภาพอากาศที่รุนแรง สิ่งนี้ทำให้เป็นตัวเลือกการปูพื้นที่เหมาะสำหรับพื้นที่ทั้งในร่มและกลางแจ้ง</p>
        <p><strong>3. ความคุ้มทุน</strong></p>
        <p>เมื่อเทียบกับตัวเลือกการปูพื้นแบบดั้งเดิม คอนกรีตพิมพ์ลายเป็นทางเลือกที่ราคาย่อมเยาที่ให้รูปลักษณ์ระดับไฮเอนด์ นอกจากนี้ อายุการใช้งานที่ยาวนาน</p>

        <h2 style="color: red;">การเพิ่มพื้นคอนกรีตพิมพ์ลายสวยงามช่วยเพิ่มความน่าดึงดูดให้กับบ้านของคุณ สิ่งนี้ไม่เพียงทำให้บ้านของคุณโดดเด่นในละแวกของคุณเท่านั้น แต่ยังทำให้มูลค่าการขายต่อสูงขึ้นอีกด้วย ทำให้เป็นตัวเลือกการลงทุนที่ยอดเยี่ยมสำหรับโครงการปรับปรุงบ้านของคุณ</h2>
        <h2>ผสมผสานคอนกรีตพิมพ์ลายเข้ากับโครงการปรับปรุงบ้านของคุณ</h2>
        <p>คอนกรีตพิมพ์ลายสามารถผสานเข้ากับพื้นที่ต่างๆ ในบ้านของคุณได้อย่างลงตัว ต่อไปนี้เป็นแนวคิดบางประการที่ควรพิจารณาสำหรับโครงการปรับปรุงบ้านของคุณ:</p>
        <ol>
            <li style="text-indent: 5px;">
                ถนนและทางเดิน : คอนกรีตพิมพ์ลายสามารถสร้างทางเข้าบ้านที่ดึงดูดใจด้วยการออกแบบและลวดลายที่สวยงาม
            </li>
            <li style="text-indent: 5px;">
                ลานบ้านและพื้นที่ใช้สอยกลางแจ้ง: เปลี่ยนพื้นที่นั่งเล่นกลางแจ้งของคุณให้เป็นโอเอซิสด้วยพื้นคอนกรีตพิมพ์ลาย
            </li>
            <li style="text-indent: 5px;">
                พื้นในร่ม: คอนกรีตพิมพ์ลายสามารถใช้ได้ทั่วทั้งบ้าน ตั้งแต่ห้องนั่งเล่นหรูหราไปจนถึงห้องครัวและห้องน้ำที่ใช้งานได้จริง
            </li>
        </ol>
        <h2>สรุป</h2>
        <p>โดยสรุป คอนกรีตพิมพ์ลายเป็นตัวเปลี่ยนเกมสำหรับประสบการณ์การรีโนเวทบ้านของคุณ ความเป็นไปได้ในการออกแบบที่ไม่สิ้นสุด ความทนทาน 
            และความคุ้มค่าทำให้เป็นตัวเลือกที่เหมาะสำหรับเจ้าของบ้านสมัยใหม่ในปัจจุบัน หากคุณพร้อมที่จะปฏิวัติพื้นที่อยู่อาศัยของคุณ 
            ลองพิจารณาผสมผสานคอนกรีตพิมพ์ลายเข้ากับโครงการปรับปรุงใหม่ของคุณ และเพลิดเพลินไปกับประโยชน์ที่จะได้รับในอีกหลายปีข้างหน้า</p>
            
    </div>
<div class="step-gallery">
    <div class="step-item">
        <img src="how7pic/7.1.png" alt="เทคอนกรีต">
    </div>
    <div class="step-item">
        <img src="how7pic/7.2.png" alt="เกลี่ยผิว">
    </div>
    <div class="step-item">
        <img src="how7pic/7.3.png" alt="เตรียมสี">
    </div>
    <div class="step-item">
        <img src="how7pic/7.4.png" alt="ลงแม่พิมพ์">
    </div>
    <div class="step-item">
        <img src="how7pic/7.5.png" alt="แม่พิมพ์ Random">
    </div>
    <div class="step-item">
        <img src="how7pic/7.6.png" alt="พื้นหลังปั๊มเสร็จ">
    </div>
    <div class="step-item">
        <img src="how7pic/7.7.png" alt="เคลือบผิว">
    </div>
    <div class="step-item">
        <img src="how7pic/7.8.png" alt="ภาพรวมงานเสร็จ">
    </div>
    <div class="step-item">
        <img src="how7pic/7.9.png" alt="ภาพรวมงานเสร็จ">
    </div>
    <div class="step-item">
        <img src="how7pic/7.10.png" alt="ภาพรวมงานเสร็จ">
    </div>
</div>


<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <img src="how7pic/7.1.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how7pic/7.2.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how7pic/7.3.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how7pic/7.4.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how7pic/7.5.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how7pic/7.5.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how7pic/7.6.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how7pic/7.7.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how7pic/7.8.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how7pic/7.9.png" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="how7pic/7.10.png" style="width:100%">
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
    /* For MB */
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
            }
            .step-item img {
                height: 150px; /* ปรับความสูงให้เหมาะสมกับหน้าจอเล็ก */
            }
        }
    </style>
</body>
</html>