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
        }
        .content {
            text-align: center;
            color: #f5f5dc;
            font-size: 48px;
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
    <div class="content">
        <?php
        echo "Hello Tera World!<br>";
        echo "The server is running smoothly! Kind of...<br>";
        echo "Server: " . gethostname();
        echo "Did you got the SNS?<br>";
        ?>
    </div>
    <div class="footer">
        Powered by Teracloud 🚀
    </div>
</body>
</html>
