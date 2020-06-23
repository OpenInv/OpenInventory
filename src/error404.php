<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>

    <style>
        html, body {
            margin-top: 0;
            padding: 0;
        }


        div.mainDiv {
            position: absolute;
            top: 0%;
            left: 50%;
            transform: translate(-50%,0%);

            width: 75%;
            height: auto;

            border-style: solid;
            border-width: 10px;
            border-radius: 30px;
        }
        .bigText {
            position: relative;
            left: 50%;
            transform: translate(-50%,0%);
            font-size: 80px;
            text-align: center;
            color: red; 
        }
        .mainText {
            position: relative;
            left: 50%;
            transform: translate(-50%,0%);
            font-size: 30px;
            text-align: center;
            color: red;
        }
        .image {
            position: relative;
            left: 50%;
            transform: translate(-50%,0%);
            width: 20%;
        }

    </style>
</head>
<body>
    <div class="mainDiv">
        <p class="bigText">Error 404</p>
        <img src="frontend/content/scanner.jpg" class="image"></img> 
        <p class="mainText">Oops! Looks like we forgot to take inventory...</p>
    </div>
</body>
</html>