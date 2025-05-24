<?php
    include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap">

</head>
<body>
    <div class="border-main">พื้นคอนกรีตพิมพ์ลาย <span style="color: red;">ผลิต ขาย รับเหมา สอน</span> <br> จำหน่ายอุปกรณ์ แบบแม่พิมพ์ ลายคอนกรีต</div>

    <style>
        .border-main {
            text-align: center;
            font-size: 35px;
            /* border-radius: ; */
        }
        .slider-container {
            max-width: 800px;
            margin: 50px auto;
            position: relative;
            
        }

        .slider-image {
            width: 120%;
            height: auto;
            border-radius: 20px;
            display: none;
            margin-left: -68px;
        }

        .slider-image.active {
            display: block;
        }

        .slider-buttons {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .slider-buttons button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 50%;
        }
        .image-container {
            display: flex;
            flex-wrap: wrap;
        }
        .image-container img {
            width: 100%;
            max-width: 300px;
            height: auto;
            margin: 10px;
            border-radius: 20px;
        }
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            /* gap: 30px; */
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
            flex-wrap: wrap;
            margin-right: 100px;
        }
        .content-wrapper p {
            font-family: Kanit;
        }

        .left-image {
            flex: 1;
            min-width: 300px;
            max-width: 600px;
        }

        .left-image img {
            width: 100%;
            border-radius: 15px;
        }

        .right-features {
            flex: 1;
            min-width: 300px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* gap: 20px; */
        }

        .feature {
            text-align: center;
        }

        .feature img {
            width: 280px;
            height: auto;
            /* padding: -100px; */
        }
        .three-image {
            text-align: center;
            margin-top: -60px;
        }
        .three-image img {
            width: 100%;
            height: auto;
        }
        .four-image {
            text-align: center;
            margin-top: 10px;
        }
        .four-image img {
            width: 100%;
            height: auto;
        }
        .category-title {
        text-align: center;
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 30px;
        color: #d70000;
        margin-top: 50px;
    }

    .category-title::before {
        content: "⬣ ";
        color: #2e7d32;
    }

    .category-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 40px;
        max-width: 1000px;
        margin: 0 auto;
        text-align: center;
    }

    .category-grid img {
        width: 100%;
        max-width: 150px;
        height: auto;
        margin-bottom: 10px;
    }

    .category-item {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .category-item p {
        font-size: 18px;
        font-weight: 500;
        margin: 0;
    }
    .category-grid a {
        text-decoration: none;
        color: #000;
    }
    .category-grid p:hover {
        color: #d70000;
    }
    .category-grid img:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }
    .image-cemen1 {
        text-align: center;
        margin-top: 10px;
    }
    .image-cemen1 img {
        width: 100%;
        height: auto;
    }
    .group-items {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .items {
        text-align: center;
        width: 30%;
    }

    .items img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .items p {
        font-size: 20px;
        margin-top: 10px;
        font-family: Kanit;
    }
    .num1 {
        text-align: center;
        margin-top: 20px;
    }
    .num1 img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
    .cemen-video {
        text-align: center;
        margin-top: 20px;
        font-size: 30px;
        font-family: Kanit;
        font-weight: bold;
        background-color:rgb(193, 193, 193);
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .cemen-video p {
        color: #B30000;
    }
    .video-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
        margin: 20px
    }
    .card-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
    }
    .guilde-container {
        text-align: center;
        margin-top: 20px;
        font-size: 20px;
        font-family: Kanit;
        font-weight: bold;
    }
    .card-guilde {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
        background-color: rgb(193, 193, 193);
        padding: 20px;
        border-radius: 20px;
        margin-left: auto;
        margin-right: auto;
        max-width: 1200px;
        flex-wrap: wrap;   
    }
    .card {
        /* margin-right: 20px; */
        text-align: center;
        width: 200px;
        /* border-radius: 20px; */
        background-color: white;
    }
    .card img {
        width: 100%;
        height: auto;
        border-radius: 20px;
    }
    .card p {
        font-size: 16px;
        margin-top: 10px;
        color:rgb(0, 0, 0);
    }
    .card p:hover {
        color: #d70000;
    }
    .card a {
        text-decoration: none;
        color: #000;
    }

    </style>

<div class="slider-container">
    <a href="course.php">
        <img src="indexpic/cemen1.png" class="slider-image active" alt="Slide 1">
        <img src="indexpic/cemen2.png" class="slider-image" alt="Slide 2">
    </a>
    <div class="slider-buttons">
        <button onclick="changeSlide(-1)">❮</button>
        <button onclick="changeSlide(1)">❯</button>
    </div>
</div>

<div class="border-main" style="color: red; font-weight: bold; font-family: Kanit;">รับเหมา ติดตั้ง พื้นคอนกรีตพิมพ์ลาย <br> พื้น แสตมป์ คอนกรีต
</div>

<script>
let currentSlide = 0;
const slides = document.querySelectorAll(".slider-image");

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove("active");
        if (i === index) slide.classList.add("active");
    });
}

function changeSlide(step) {
    currentSlide += step;
    if (currentSlide < 0) currentSlide = slides.length - 1;
    if (currentSlide >= slides.length) currentSlide = 0;
    showSlide(currentSlide);
}
</script>



<div class="content-wrapper">
    <div class="left-image">
        <img src="https://static.wixstatic.com/media/51972b_ea5d783b45774ae6b18d483bd37f452c~mv2.jpg/v1/fill/w_600,h_558,al_c,lg_1,q_80,enc_avif,quality_auto/รับเหมาติดตั้งพื้นคอนกรีตพิมพ์ลาย.jpg" alt="พื้นคอนกรีตพิมพ์ลาย">
    </div>
    <div class="right-features">
        <div class="feature">
            <img src="https://static.wixstatic.com/media/51972b_948d731e9ed5469fb5b56268df86ea6e~mv2.png" alt="">
        </div>
        <div class="feature">
            <img src="https://static.wixstatic.com/media/51972b_0d7503f74ed14937b6635798d8ffe3af~mv2.png" alt="">
        </div>
        <div class="feature">
            <img src="https://static.wixstatic.com/media/51972b_e47d830fd1114a849d7afde390087536~mv2.png" alt="">
        </div>
        <div class="feature">
            <img src="https://static.wixstatic.com/media/51972b_d95eeebf99774079adf9d506d0effcc0~mv2.png" alt="">
        </div>
    </div>
        <div class="" style="border-radius: 100px; margin-top: 10px; margin-left: -12px;">
                <a href="https://page.line.me/ytr6210q?oat_content=url&openQrModal=true"><img src="indexpic/cemen3.png" alt="" style="width: 400px;"></a>
                <p style="text-align: center; font-weight: bold; font-size: 35px; color: red;">สำรวจหน้างานฟรี</>
        </div>
            <div class="right-features" style="margin-left: 0;">
                <a href="https://page.line.me/ytr6210q?oat_content=url&openQrModal=true"><img src="indexpic/cemen4.png" alt="" style="width: 540px;"></a> <br>
                <p style="text-align: center; font-weight: bold; font-size: 35px; margin-top: 20px;"><span style="color: red;">ฟรี</span> ทำภาพตัวอย่างจำลอง</p>
        </div>
</div>
<div class="three-image">
    <img src="https://static.wixstatic.com/media/51972b_548b2fbfa3ac4facb19a8851fd3dc01e~mv2.png/v1/fill/w_1677,h_139,al_c,lg_1,q_85,enc_avif,quality_auto/มั่นใจเรื่องคุณภาพ.png" alt="">
</div>
<div class="four-image">
    <img src="https://static.wixstatic.com/media/51972b_d055ff181bd9430d91fe3ba17b7f59f7~mv2.png/v1/fill/w_1440,h_244,al_c,q_85,enc_avif,quality_auto/6%20สิทธิประโยชน์.png" alt="">
</div>
<div class="four-image">
    <img src="indexpic/cemen5.png" alt="">
</div>
<div class="four-image">
    <img src="indexpic/cemen6.png" alt="">
</div>

<div class="category-title">หมวดหมู่สินค้า</div>

<div class="category-grid">
    <div class="category-item">
        <img src="indexpic/pic1.png" alt="ชุดพิมพ์ลาย">
        <a href=""><p>ชุดพิมพ์ลาย</p></a>
    </div>
    <div class="category-item">
        <img src="indexpic/pic2.png" alt="แม่พิมพ์แสตมป์คอนกรีต">
        <a href=""><p style="margin-top: 18px;">แม่พิมพ์แสตมป์คอนกรีต</p></a>
    </div>
    <div class="category-item">
        <img src="indexpic/pic3.png" alt="แม่พิมพ์ทางเดินเท้า">
        <a href=""><p style="margin-top: 18px;">แม่พิมพ์ทางเดินเท้า</p></a>
    </div>
    <div class="category-item">
        <img src="indexpic/pic4.png" alt="แม่พิมพ์หินเทียม">
        <a href=""><p style="margin-top: 38px;">แม่พิมพ์หินเทียม</p></a>
    </div>
    <div class="category-item">
        <img src="indexpic/pic5.png" alt="แม่พิมพ์สร้างลายไม้">
        <a href=""><p style="margin-top: 26px;">แม่พิมพ์สร้างลายไม้</p></a>
    </div>
    <div class="category-item">
        <img src="indexpic/pic6.png" alt="คอนกรีตลอกลาย">
        <a href=""><p>คอนกรีตลอกลาย</p></a>
    </div>
    <div class="category-item">
        <img src="indexpic/pic7.png" alt="สีตกแต่งคอนกรีต">
        <a href=""><p style="margin-top: 13px;">สีตกแต่งคอนกรีต</p></a>
    </div>
    <div class="category-item">
        <img src="indexpic/pic8.png" alt="เคมีกันซึม">
        <a href=""><p style="margin-top: 22px;">เคมีภัณฑ์</p></a>
    </div>
    <div class="category-item">
        <img src="indexpic/pic9.png" alt="เคมีกันซึม">
        <a href=""><p style="margin-top: -18px;">เครื่องจักรและอุปกรณ์เสริม</p></a>
    </div>
    <div class="category-item">
        <img src="indexpic/pic10.png" alt="เคมีกันซึม">
        <a href=""><p>แผ่นตกแต่งผนัง</p></a>
    </div>
    <div class="category-item">
        <img src="indexpic/pic11.png" alt="เคมีกันซึม">
        <a href=""><p>ชุดสร้างอาชีพ</p></a>
    </div>
    <div class="category-item">
        <img src="indexpic/pic12.png" alt="เคมีกันซึม">
        <a href=""><p>DIY</p></a>
    </div>
</div>
<br>
<br>
<hr>
<div class="image-cemen1">
    <img src="indexpic/allcemen.png" alt="">
    <p style="font-size: 30px; margin-top: 0; color: #B30000; font-family: Kanit; font-weight: bold;">คอนกรีตพิมพ์ลาย ซีเมนต์พิมพ์ลาย แสตมป์คอนกรีต <br>แม่พิมพ์พื้นพิมพ์ลาย พิมพ์ลายพื้นปูน</p>
</div>
<div class="group-items">
    <div class="items">
        <img src="https://static.wixstatic.com/media/51972b_0133ade712fe4ae390eb1dd136246282~mv2.png/v1/fill/w_408,h_234,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/ศูนย์รวมวัสดุอุปกรณ์งานตกแต่ง.png" alt="">
        <p  style="color: #B30000;">ศูนย์รวมวัสดุอุปกรณ์งานตกแต่งคอนกรีตแนวใหม่ครบวงจร</p>
        <p  style="margin-top: -15px;">(Tools & Equipment)</p>
    </div>
    <div class="items">
        <img src="https://static.wixstatic.com/media/51972b_8e451a2048164e0e84fedae951a00cf0~mv2.png/v1/fill/w_408,h_234,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/บริการงานรับเหมา.png" alt="">
        <p  style="color: #B30000;">บริการงานรับเหมา</p>
        <p  style="margin-top: -15px;">(Contracting Services)</p>
    </div>
    <div class="items">
        <img src="https://static.wixstatic.com/media/51972b_78d90ce7cebb4c4da6c04dfd9a391aca~mv2.png/v1/fill/w_408,h_234,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/ผู้ฝึกสอนสร้างอาชีพ.png" alt="">
        <p  style="color: #B30000;">ศูนย์รวมวัสดุอุปกรณ์งานตกแต่งคอนกรีตแนวใหม่ครบวงจร</p>
        <p  style="margin-top: -15px;">(Training Class)</p>
    </div>
</div>
<div class="num1">
    <img src="indexpic/number1.png" alt="">
</div>
<hr>
<div class="cemen-video">
    <p>ขั้นตอนและเทคนิคการทำแสตมป์คอนกรีต <br> พื้นพิมพ์ลาย การใช้แม่พิมพ์ พื้นพิมพ์ลาย</p>
    <hr>
    <div class="video-container">
        <iframe width="560" height="315" class="video"
            src="https://www.youtube.com/embed/pflsQxfCxX4?si=lQXxax9HK0V_Ob34" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
        <iframe width="560" height="315" class="video"
            src="https://www.youtube.com/embed/pflsQxfCxX4?si=lQXxax9HK0V_Ob34" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
    <div class="video-container">
        <iframe width="560" height="315" class="video"
            src="https://www.youtube.com/embed/pflsQxfCxX4?si=lQXxax9HK0V_Ob34" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
        <iframe width="560" height="315" class="video"
            src="https://www.youtube.com/embed/pflsQxfCxX4?si=lQXxax9HK0V_Ob34" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
    <div class="video-container">
        <iframe width="560" height="315" class="video"
            src="https://www.youtube.com/embed/pflsQxfCxX4?si=lQXxax9HK0V_Ob34" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
        <iframe width="560" height="315" class="video"
            src="https://www.youtube.com/embed/pflsQxfCxX4?si=lQXxax9HK0V_Ob34" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
</div>
<div class="guilde-container">
        <h2>คลังความรู้</h2>
        <hr>
        <div class="card-guilde">
            <div class="card">
                <a href="how1.php">
                    <img src="indexpic/g1.png" alt="">
                    <p>แบบพิมพ์ลายคอนกรีต ลาย Random ทำไมถึงได้รับความนิยม?</p>
                </a>
             </div>
            
            <div class="card">
                <a href="how2.php">
                    <img src="indexpic/g2.png" alt="">
                    <p>พื้นคอนกรีตพิมพ์ลาย ใช้เวลาทำกี่วัน ??</p>
                </a>
            </div>
            <div class="card">
                <a href="how3.php">
                    <img src="indexpic/g3.png" alt="">
                    <p>พื้นคอนกรีตพิมพ์ลาย มีกี่แบบ ??</p>
                </a>
            </div>
            <div class="card">
                <a href="how4.php">
                    <img src="indexpic/g4.png" alt="">
                    <p>คอนกรีตพิมพ์ลาย : ราคา และ ข้อมูลที่คุณควรรู้</p>
                </a>
            </div>
            <div class="card">
                <a href="how5.php">
                    <img src="indexpic/g5.png" alt="">
                    <p>คอนกรีตพิมพ์ลาย ไอเดียการตกแต่งพื้นเพื่อความสวยงามและทนทาน</p>
                </a>
            </div>
            <div class="card">
                <a href="how6.php">
                    <img src="indexpic/g6.png" alt="">
                    <p>5 อาชีพช่างตกแต่งผิวปูน</p>
                </a>
            </div>
            <div class="card">
                <a href="how7.php">
                    <img src="indexpic/g7.png" alt="">
                    <p>ปฏิวัติพื้นที่ใช้สอยของคุณ: แสตมป์คอนกรีตสามารถเปลี่ยนประสบการณ์งาน พื้นบ้านของคุณได้อย่างไร</p>
                </a>
            </div>
            <div class="card">
                <a href="how8.php">
                    <img src="indexpic/g8.png" alt="">
                    <p>เปลี่ยนพื้นที่นอกบ้านของคุณด้วยลาย สแตมป์คอนกรีตลายไม้</p>
                </a>
            </div>
            <div class="card">
                <a href="how9.php">
                    <img src="indexpic/g9.png" alt="">
                    <p>พื้นคอนกรีตพิมพ์ลาย แตกร้าว สาเหตุและวิธีป้องกัน ทำยังไง ?</p>
                </a>
            </div>
        </div>
    </div>

<style>
/* โทรศัพท์โหมด */
@media (max-width: 768px) {
    body {
        margin: 0 !important;
        padding: 0 !important;
    }
    .border-main {
        font-size: 20px;
        padding: 10px 5px;
    }
    .slider-container {
        max-width: 100vw;
        margin: 20px 0 10px 0;
        padding: 0;
    }
    .slider-image {
        width: 100vw !important;
        max-width: 100vw !important;
        margin: 0 !important;
        border-radius: 10px;
    }
    .slider-buttons {
        top: 45%;
    }
    .content-wrapper {
        flex-direction: column;
        align-items: center;
        margin: 10px auto;
        padding: 0 5px;
        max-width: 100vw;
    }
    .left-image,
    .right-features {
        max-width: 100vw;
        min-width: 0;
        width: 100%;
    }
    .left-image img,
    .right-features img {
        width: 100%;
        max-width: 100vw;
        border-radius: 10px;
    }
    .feature img {
        width: 100%;
        max-width: 120px;
        margin: 0 auto;
    }
    .three-image,
    .four-image,
    .image-cemen1 {
        margin: 10px 0;
    }
    .three-image img,
    .four-image img,
    .image-cemen1 img {
        width: 100vw;
        max-width: 100vw;
        border-radius: 10px;
    }
    .category-title {
        font-size: 22px;
        margin-top: 20px;
        margin-bottom: 15px;
    }
    .category-grid {
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        max-width: 100vw;
        padding: 0 5px;
    }
    .category-grid img {
        max-width: 90px;
    }
    .category-item p {
        font-size: 13px;
    }
    .group-items {
        flex-direction: column;
        gap: 10px;
        margin: 10px 0;
    }
    .items {
        display: flex;
        align-items: center;
        width: 100%;
        margin-bottom: 10px;
        background: #fff;
        border-radius: 10px;
        padding: 8px 0;
        text-align: left;
    }
    .items img {
        width: 300px;
        height: auto;
        border-radius: 8px;
        margin-right: 12px;
        flex-shrink: 0;
    }
    .items p {
        margin: 0;
        font-size: 20px;
        text-align: left;
    }
    .num1 img {
        width: 100vw;
        max-width: 100vw;
        border-radius: 10px;
    }
    .cemen-video {
        font-size: 18px;
        padding: 10px 0;
    }
    .video-container {
        flex-direction: column;
        gap: 10px;
        margin: 10px 0;
    }
    .video-container iframe {
        width: 100vw !important;
        max-width: 100vw !important;
        height: 220px !important;
    }
    .guilde-container {
        font-size: 16px;
        margin-top: 10px;
    }
    .card-guilde {
        flex-direction: column;
        gap: 10px;
        padding: 10px;
    }
    .card {
        width: 100%;
        margin-bottom: 10px;
    }
    .card img {
        border-radius: 10px;
    }
    .image-cemen1 img {
        border-radius: 10px;
    }
}
</style>
    
</body>
</html>