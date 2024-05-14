<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freeman&display=swap" rel="stylesheet">
    <style>
body {
    font-family: "Freeman", sans-serif;
    background-image: url(wew.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
.container1 {
    margin: auto;
    margin-top: 100px;
    width: 1500px; 
    height: 950px; 
    background-color: rgba(173, 216, 230, 0.5);;
    border: 1px solid black;
    border-radius: 30px;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;

}
.container2 {
    font-size: 20px;
    margin-top: 200px;
    margin-left: 100px;
    width: 800px;
    background-color: rgba(173, 216, 230, 0.5);;
    border: 1px solid black;
    border-radius: 40px;
    border-width: 2px;
    padding: 2px;
}

.container3 {
    font-size: 50px;
    margin-top: 40px;
    margin-left: 100px;
    width: 375px; 
    height: 390px; 
    background-color: rgba(173, 216, 230, 0.5);;
    border: 1px solid black;
    border-radius: 40px;
    border-width: 2px;
    padding: 2px;
}

.container4 {
    align-items: center;
    font-size: 50px;
    margin-top: -398px;
    margin-left: 520px;
    width: 375px;
    height: 390px;
    background-color: rgba(173, 216, 230, 0.5);
    border: 1px solid black;
    border-radius: 40px;
    border-width: 2px;
    padding: 2px;
}


input[type="text"] {
    font-family: "Freeman", sans-serif;
    background-color: transparent;
    border: 0px;
    border-radius: 20px;
    width: 140px; 
    height: 70px; 
    padding: 10px; 
    font-size: 100px; 
    position: relative;
}
img {
    margin-top: -1000px;
    margin-left: 800px;
    margin-bottom: 13px;
    border-radius: 20px;
    width: 375px;
    height: 560px;
}
    </style>
</head>
<body>
<?php
function GradetoRank ($grade) {
    if ($grade >= 93 && $grade <= 100) {
        return 'A';
    } elseif ($grade >= 90 && $grade <= 92) {
        return 'A-';
    } elseif ($grade >= 87 && $grade <= 89) {
        return 'B+';
    } elseif ($grade >= 83 && $grade <= 86) {
        return 'B';
    } elseif ($grade >= 80 && $grade <= 82) {
        return 'B-';
    } elseif ($grade >= 77 && $grade <= 79) {
        return 'C+';
    } elseif ($grade >= 73 && $grade <= 76) {
        return 'C';
    } elseif ($grade >= 70 && $grade <= 72) {
        return 'C-';
    } elseif ($grade >= 67 && $grade <= 69) {
        return 'D+';
    } elseif ($grade >= 63 && $grade <= 66) {
        return 'D';
    } elseif ($grade >= 60 && $grade <= 62) {
        return 'D-';
    } elseif ($grade < 60) {
        return 'F';
    } else {
        return 'Unknown';
    }
}
?>
    <div class="container1">
        <div class="container2">
            <h1>Name: Ambong, Darren Jake A. </h1> 
        </div>
        <div class="container3">
            <h1>Rank: <br>
            <?php echo isset($_POST['rank']) ? GradetoRank ($_POST['rank']) : ''; ?>
            </h1>
        </div>
        <div class="container4">
    <h1>Grade: <br> 
        <form method="post">
            <input type="text" name="rank" value="<?php echo isset($_POST['rank']) ? $_POST['rank'] : ''; ?>">
        </form>
            
    </h1>
</div>
                        <div class="img">
                            <img src="darren1.jpg">
                        </div>
    </div>
</body>
</html>
