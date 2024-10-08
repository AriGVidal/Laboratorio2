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
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            position: relative;
        }
        .header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%; 
            text-align: center;
            background-color: #006400;
            color: white;
            font-size: 48px; 
            font-weight: bold;
            padding: 10px 0; 
        }
        .content {
            text-align: center;
            color: #f5f5dc;
            font-size: 48px;
            font-weight: bold;
            margin-top: 80px; 
        }
        .server-info {
            color: #2C2C2C; 
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
        echo "Hello TeraWorld!🚀<br>";
        echo "Welcome Nico and Martin!🚀<br>";
        echo "The server is running smoothly!<br>";
        echo "<span class='server-info'>Server: " . gethostname() . " 🖥️</span><br>";
        
        $instanceIp = file_get_contents('http://169.254.169.254/latest/meta-data/local-ipv4');
        echo "<span class='server-info'>Server IP: " . $instanceIp . " 🖥️</span><br>";
        echo "<span class='server-info'>Container IP: " . $_SERVER['SERVER_ADDR'] . " 🌐</span><br>";
        ?>
    </div>
    <div class="footer">
        Powered by Teracloud 🚀
    </div>
</body>
</html>