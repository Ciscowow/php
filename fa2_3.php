<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 20px;
            text-align: left;
            line-height: 30px;
            background-color: black;
            background-size: cover;
            color: white;
        }
        .container1{
            margin: auto;
            margin-top: 100px;
            margin-bottom: 100px;
            width: 40%; 
            background-color: rgba(50, 50, 50, 0.5);
            border: 3px solid black;
            border-color: white;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container1">
        <?php 
            for ($a = 0; $a < 10; $a++) { 
                for ($b = 0; $b < 10; $b++) {
                    echo $a . $b . ", "; 
                }
            }
            echo ("\n");
        ?>
    </div>
</body>
</html>