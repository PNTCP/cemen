<?php include('menu.php'); ?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แม่พิมพ์ลายพื้น</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }
        .section img{
            width: 50%;
            height: auto;
            margin-bottom: 20px;
        }
        .highlight {
            color: red;
            font-weight: bold;
        }
        .section {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
        }
        .section > div {
            flex: 1 1 300px;
        }
        .big-text {
            font-size: 48px;
            font-weight: bold;
            color: #333;
        }
        .sub-text {
            font-size: 24px;
            color: #555;
        }
        .title {
            font-size: 20px;
            color: red;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .content {
            font-size: 16px;
            color: #333;
            line-height: 1.8;
        }
        .step-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin: 30px 100px;
        }

        .step-item {
            text-align: center;
            font-family: 'Kanit', sans-serif;
            margin-right: 20px;
        }

        .step-item img {
            width: 100%;
            height: 220px; /* กำหนดความสูงตายตัว */
            object-fit: cover; /* ครอบภาพให้เต็มโดยไม่เสียสัดส่วน */
            transition: transform 0.3s;
            cursor: pointer;
        }


        .step-item img:hover {
            transform: scale(1.03);
        }

        .step-item p {
            margin-top: 8px;
            font-size: 20px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="section">
            <img src="menu1pic/1.png" alt="">

        <div>
            <p class="title">แม่พิมพ์พื้นพิมพ์ลาย ลายคอนกรีตพิมพ์ลาย</p>
            <p class="content" style="text-indent: 25px;">
                แม่พิมพ์สำหรับพื้นคอนกรีตพิมพ์ลาย พื้นถนน พื้นจอดรถ พื้นคอนกรีตทุกชนิด
                ใช้สำหรับพิมพ์ลายสร้างผิวหิน ใช้ปูนกดเพื่อให้เกิดลวดลายสมจริงเหมือนหินธรรมชาติ
                แม่พิมพ์ออกแบบมาให้ใช้งานได้กับพื้นคอนกรีต ทุกด้านทุกมุม สามารถวางต่อกันได้อย่างสนิท
                เพื่อให้ได้งานที่สวยสมจริง ลดปัญหาร่องหินที่ห่าง มีทั้งแบบแข็งและแบบอ่อน
                เป็นแม่พิมพ์สำหรับช่างผู้รับเหมาแบบมืออาชีพ ใช้งานง่าย วัสดุคุณภาพสูง
            </p>

            <p class="title">คุณสมบัติแม่พิมพ์</p>
            <p class="content" style="text-indent: 25px;">
                แม่พิมพ์ทำจากวัสดุ Polyurethane ทำให้แม่พิมพ์มีความคงทนสูง ใช้งานได้นาน
                พิมพ์ลายซ้ำได้มากกว่า 50,000 ครั้ง อายุการใช้งานมากกว่า 2 ปี
                แม่พิมพ์ออกแบบมาให้สร้างลายลึก ผิวหินเก็บรายละเอียดได้เหมือนจริง ผิวคมชัดลวดลายชัดระดับ HD
                การหล่อแม่พิมพ์ ใช้เครื่องจักร และผู้เชี่ยวชาญการด้าน Polyurethane ประสบการณ์กว่า 20 ปี
            </p>
        </div>
    </div>
    <img src="menu1pic/2.png" alt="">
</div>
<div class="step-gallery">
    <div class="step-item">
        <img src="menu1pic/3.png" alt="เทคอนกรีต">
        <p>River Stone</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/4.png" alt="เทคอนกรีต">
        <p>Random Floor</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/5.png" alt="เทคอนกรีต">
        <p>River rock</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/6.png" alt="เทคอนกรีต">
        <p>New Random</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/7.png" alt="เทคอนกรีต">
        <p>Garden Stone</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/8.png" alt="เทคอนกรีต">
        <p>Ashlar Cut Slate V1</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/9.png" alt="เทคอนกรีต">
        <p>Ashlar Cut Slate V2</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/10.png" alt="เทคอนกรีต">
        <p>XL Ashlar</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/11.png" alt="เทคอนกรีต">
        <p>New Ashlar</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/12.png" alt="เทคอนกรีต">
        <p>Circle Square</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/13.png" alt="เทคอนกรีต">
        <p>California Wave</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/14.png" alt="เทคอนกรีต">
        <p>Slate Tile Grouted</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/15.png" alt="เทคอนกรีต">
        <p>Roman Slate</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/16.png" alt="เทคอนกรีต">
        <p>Slate Texture</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/17.png" alt="เทคอนกรีต">
        <p>Flag Stone Floor M</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/18.png" alt="เทคอนกรีต">
        <p>Ragal Ashlar</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/19.png" alt="เทคอนกรีต">
        <p>Castle Stone</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/20.png" alt="เทคอนกรีต">
        <p>Rough Stone</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/ei.png" alt="เทคอนกรีต">
        <p>Cobble Circle</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/21.png" alt="เทคอนกรีต">
        <p>Cobble Stone Compass</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/22.png" alt="เทคอนกรีต">
        <p>Arzizono Flag</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/23.png" alt="เทคอนกรีต">
        <p>Puzzle Circle</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/24.png" alt="เทคอนกรีต">
        <p>Circle S</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/25.png" alt="เทคอนกรีต">
        <p>Circle Lotus Plate</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/26.png" alt="เทคอนกรีต">
        <p>Compass Plate</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/27.png" alt="เทคอนกรีต">
        <p>European Fan</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/28.png" alt="เทคอนกรีต">
        <p>Danish Fan</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/29.png" alt="เทคอนกรีต">
        <p>Opa Locka Stone</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/30.png" alt="เทคอนกรีต">
        <p>Verona Stone</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/31.png" alt="เทคอนกรีต">
        <p>Cobble Stone Floor</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/32.png" alt="เทคอนกรีต">
        <p>European Cobble</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/33.png" alt="เทคอนกรีต">
        <p>English</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/34.png" alt="เทคอนกรีต">
        <p>Banglajang</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/35.png" alt="เทคอนกรีต">
        <p>Wooden</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/36.png" alt="เทคอนกรีต">
        <p>Granite Sets</p>
    </div>
    <div class="step-item">
        <img src="menu1pic/37.png" alt="เทคอนกรีต">
        <p>London Cobble Floor</p>
    </div>
</div>
</div>
<a href="" style="margin-left: 41%;"><button style="background-color: red; color: white; border: solid white; padding: 10px; font-size: 20px; font-weight: bold;">กลับหน้าหลัก</button></a>
</body>
</html>
