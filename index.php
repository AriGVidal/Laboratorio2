<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        body {
            background-color: #228B22;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            color: black;
            font-size: 48px; 
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 40px; 
        }
        .content {
            text-align: center;
            color: #f5f5dc;
            font-size: 48px;
            font-weight: bold;
        }
        .server-info {
            color: #2E8B57; 
            font-size: 36px; 
            font-weight: bold;
        }
        .footer {
            position: absolute;
            bottom: 10px;
            font-size: 20px;
            text-align: center;
            color: #f5f5dc;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        Laboratory 2 Presentation in progress... 📊
    </div>
    <div class="content">
        <?php
        echo "Hello Tera World!🚀<br>";
        echo "The server is running smoothly! Kind of...<br>";
        echo "<span class='server-info'>Server: " . gethostname() . " 🖥️</span><br>";
        ?>
    </div>
    <div class="footer">
        Powered by Teracloud 🚀
    </div>
</body>
</html>

