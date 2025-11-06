<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Concept</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            line-height: 1.6;
            font-size: 14px;
            font-weight: bold;
        }
        
        .frame-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            max-width: 100%;
        }
        
        .first-frame {
            background-color: #fe8637;
            padding: 15px;
            color: black;
            font-weight: bold;
            font-size: 16px;
        }
        
        .second-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }
        
        .second-frame, .third-frame {
            background-color: #ffd9ce;
            padding: 15px;
            border: 1px solid #ddd;
            font-size: 14px;
            font-weight: bold;
        }
        
        .third-frame {
            position: relative;
        }
        

        .third-row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 10px;
        }
        
        .fourth-frame, .fifth-frame, .sixth-frame {
            background-color: #ffede8;
            padding: 15px;
            border: 1px solid #ddd;
            font-size: 14px;
            font-weight: bold;
        }
        
        .fourth-frame {
            position: relative;
        }
        
        
        .scrolling-container {
            width: 100%;
            height: 60px;
            overflow: hidden;
            position: relative;
            background-color: #ffede8; 
            margin-top: 10px;
           
        }
        
        .scrolling-text {
            position: absolute;
            white-space: nowrap;
            animation: scroll 10s linear infinite;
            padding: 10px;
            font-size: 12px;
            font-weight: bold;
            color: #000000;
        }
        
        @keyframes scroll {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        
        .blink-message {
            animation: blink 1s linear infinite;
            color: #000000;
            font-weight: bold;
        }
        
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
        
        .links-list {
            margin-top: 10px;
        }
        
        .links-list a {
            display: block;
            color: #000000;
            text-decoration: none;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        .links-list a:hover {
            text-decoration: underline;
        }
        
        .qualifications-list {
            margin-top: 10px;
            padding-left: 20px;
        }
        
        .qualifications-list li {
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        .sixth-frame img {
            width: 100%;
            height: auto;
            max-height: 150px;
            object-fit: cover;
            margin-top: 10px;
        }
        
        h1 {
            margin-top: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }

        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding: 10px 0;
        }

        .nav-btn {
            background-color: #fe8637;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .nav-btn:hover {
            background-color: #e5722a;
        }
    </style>
</head>
<body>
    
    <div class="frame-container">
        <div class="first-frame">
            NAMA: SABILA ALYA NAFISA dan ALAMAT: JL. HAJI JUHRI. 123, JAKARTA <br>
            
        </div>
        
        <div class="second-row">
            <div class="second-frame">
                SECOND FRAME<br><br>
                BULLETED LIST OF QUALIFICATIONS 
                <ul class="qualifications-list">
                    <li>BACHELOR DEGREE IN COMPUTER SCIENCE</li>
                    <li>5+ YEARS EXPERIENCE IN WEB DEVELOPMENT</li>
                    <li>PROFICIENT IN HTML, CSS, JAVASCRIPT</li>
                    <li>EXPERIENCE WITH LARAVEL FRAMEWORK</li>
                </ul>
            </div>
            <div class="third-frame">
                THIRD FRAME<br><br>
                LINKS TO FAVOURITE SITES
                <div class="links-list">
                    <a href="https://github.com" target="_blank">GITHUB</a>
                    <a href="https://stackoverflow.com" target="_blank">STACK OVERFLOW</a>
                    <a href="https://laravel.com" target="_blank">LARAVEL DOCUMENTATION</a>
                    <a href="https://tailwindcss.com" target="_blank">TAILWIND CSS</a>
                </div>
            </div>
        </div>
        
        <div class="third-row">
            <div class="fourth-frame">
                FOURTH FRAME<br><br>
                SCROLLING MESSAGE
                <div class="scrolling-container">
                    <div class="scrolling-text">WELCOME TO MY PORTFOLIO WEBSITE! CHECK OUT MY PROJECTS AND CONTACT ME FOR COLLABORATION.</div>
                </div>
            </div>
            <div class="fifth-frame">
                FIFTH FRAME<br><br>
                BLINKING REMINDERS<br><br>
                <span class="blink-message">DON'T FORGET TO SUBMIT YOUR ASSIGNMENT!</span><br>
                <span class="blink-message">MEETING SCHEDULED FOR TOMORROW AT 2 PM</span>
            </div>
            <div class="sixth-frame">
                SIXTH FRAME<br><br>
                IMAGES<br><br>
                <img src="images/pict1.jpg" alt="Portfolio Image">
            </div>
        </div>

        <div class="navigation-buttons">
            <a href="http://127.0.0.1:8000/" class="nav-btn">KEMBALI</a>
            <a href="http://127.0.0.1:8000/bunga" class="nav-btn">NEXT</a>
        </div>
    </div>
</body>
</html>

<?php /**PATH C:\laragon\www\UTSPEMWEB2\resources\views/welcome.blade.php ENDPATH**/ ?>