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
    </style>
</head>
<body>
    <div class="content">
        <?php
        echo "Hello Tera World!<br>";
        echo "The server is running smoothly! Kind of...<br>";
        echo "Server: " . gethostname();
        ?>
    </div>
</body>
</html>