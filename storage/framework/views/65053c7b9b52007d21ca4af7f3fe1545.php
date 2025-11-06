<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Essay: Document Object Model</title>
    <script src="<?php echo e(asset('js/dom.js')); ?>" defer></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            line-height: 1.6;
            font-size: 14px;
            font-weight: bold;
        }

        h1 {
            margin-top: 0;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }

        #bd > div:nth-child(2) {
            margin: 15px 0;
        }

        form {
            margin: 15px 0;
        }

        input[type="button"] {
            padding: 8px 16px;
            margin-right: 10px;
            font-weight: bold;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f0f0f0;
        }

        #basket {
            padding: 10px;
            margin: 15px 0;
        }

        /* --- Navigation Buttons --- */
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
<body id="bd">
    <h1>Soal Essay: Document Object Model</h1>
    <div>
        <img id="img1" src="<?php echo e(asset('images/flo1.jpg')); ?>" alt="Flower 1">
        <img id="img2" src="<?php echo e(asset('images/flo2.jpg')); ?>" alt="Flower 2">
        <img id="img3" src="<?php echo e(asset('images/flo3.jpg')); ?>" alt="Flower 3">
    </div>

    <div>
        <p id="text1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <form action="#">
        <input type="button" id="chtext" value="Change Text Color">
        <input type="button" id="bccol" value="Change Background Color">
    </form>

    <div id="basket" style="border-style:solid">
        <p id="basketstat">The flower basket currently contains 0 flowers.</p>
    </div>

    <!-- Navigation Buttons - styled identically to reference -->
    <div class="navigation-buttons">
        <a href="http://127.0.0.1:8000/bunga" class="nav-btn">KEMBALI</a>
        <a href="http://127.0.0.1:8000/" class="nav-btn">NEXT</a>
    </div>
</body>
</html>

<?php /**PATH C:\laragon\www\UTSPEMWEB2\resources\views/Bunga.blade.php ENDPATH**/ ?>