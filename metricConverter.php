<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-image: url(806443.jpg);
            background-size: cover;
            color: white;
        }
        .container1 {
            margin: auto;
            margin-top: 100px;
            margin-bottom: 100px;
            width: 40%; 
            background-color: rgba(50, 50, 50, 0.5);
            border: 3px solid black;
            border-color: white;
            border-radius: 30px;
            padding: 10px;
        }

        .container1 h1{
            border-bottom: 2px solid white;
            padding-bottom: 7px;
            font-size: 35px;
            text-align: center;
        }

        .container2 {
            margin: auto;
            border: 2px solid;
            width: 60%;
            font-size: 40px;
            color: white;
            text-align: center;
            padding: 2px;
        }
        .container3 {
            margin: auto;
            margin-bottom: 30px;
            border: 2px solid;
            width: 50%;
            font-size: 20px;
            color: white;
            text-align: center;
            padding: 2px;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        lable1 {
            text-align: center;
            font-size: 20px;
        }
        label {
            text-align: center;
            font-size: 13px;
        }
        input {
            color: white;
            background: transparent;
            border: 2px solid;
            width: 20%;
            margin-bottom: 10px;
            font-size: 20px;
            padding: 3px;
        }
        select {
            background: #242526;
            color: white;
            width: 30%;
            margin-bottom: 10px;
            border: 2px;
            font-size: 20px;
            padding: 2px;
        }

        input[type="submit"] {
            font-size: 20px;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container1">
            <h1>METRIC CONVERTER</h1>
        <form method="post">
            <label1 for="value">ENTER VALUE:</label1>
            <input type="text" id="value" name="value">
            <br>
            <label for="from_unit">FROM:
            <select name="from_unit" id="from_unit">
                <option value="m">Meter (m)</option>
                <option value="cm">Centimeter (cm)</option>
                <option value="mm">Millimeter (mm)</option>
                <option value="km">Kilometer (km)</option> 
                <option value="dm">Decimeter (dm)</option>
                <option value="yd">Yard (yd)</option>
                <option value="ft">Foot (ft)</option>
            </select>
            <label for="to_unit">TO:</label>
            <select name="to_unit" id="to_unit">
                <option value="m">Meter (m)</option>
                <option value="cm">Centimeter (cm)</option>
                <option value="mm">Millimeter (mm)</option>
                <option value="km">Kilometer (km)</option> 
                <option value="dm">Decimeter (dm)</option>
                <option value="yd">Yard (yd)</option>
                <option value="ft">Foot (ft)</option>
            </select>
            </label>
            <br>
            <input type="submit" value="Convert">
        </form>
        <br>
    <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                $value = $_POST["value"];
                $from_unit = $_POST["from_unit"];
                $to_unit = $_POST["to_unit"];
                
                $result = 0;    
                switch ($from_unit) {
                    case "m":
                        switch ($to_unit) {
                            case "m":
                                $result = $value;
                                break;
                            case "cm":
                                $result = $value * 100;
                                break;
                            case "mm":
                                $result = $value * 1000;
                                break;
                            case "km":
                                $result = $value / 1000;
                                break;
                            case "dm":
                                $result = $value * 10;
                                break;
                            case "yd":
                                $result = $value * 1.09361; 
                                break;
                            case "ft":
                                $result = $value * 3.28084; 
                                break;
                        }
                        break;
                    case "cm":
                        switch ($to_unit) {
                            case "m":
                                $result = $value / 100;
                                break;
                            case "cm":
                                $result = $value;
                                break;
                            case "mm":
                                $result = $value * 10;
                                break;
                            case "km":
                                $result = $value / 100000;
                                break;
                            case "dm":
                                $result = $value / 10;
                                break;
                            case "yd":
                                $result = $value * 0.0109361; 
                                break;
                            case "ft":
                                $result = $value * 0.0328084; 
                                break;
                        }
                        break;
                    case "mm":
                        switch ($to_unit) {
                            case "m":
                                $result = $value / 1000;
                                break;
                            case "cm":
                                $result = $value / 10;
                                break;
                            case "mm":
                                $result = $value;
                                break;
                            case "km":
                                $result = $value / 1000000;
                                break;
                            case "dm":
                                $result = $value / 100;
                                break;
                            case "yd":
                                $result = $value * 0.00109361; 
                                break;
                            case "ft":
                                $result = $value * 0.00328084; 
                                break;
                        }
                        break;
                    case "km":
                        switch ($to_unit) {
                            case "m":
                                $result = $value * 1000;
                                break;
                            case "cm":
                                $result = $value * 100000;
                                break;
                            case "mm":
                                $result = $value * 1000000;
                                break;
                            case "km":
                                $result = $value;
                                break;
                            case "dm":
                                $result = $value * 10000;
                                break;
                            case "yd":
                                $result = $value * 1093.61; 
                                break;
                            case "ft":
                                $result = $value * 3280.84; 
                                break;
                        }
                        break;
                    case "dm":
                        switch ($to_unit) {
                            case "m":
                                $result = $value / 10;
                                break;
                            case "cm":
                                $result = $value * 10;
                                break;
                            case "mm":
                                $result = $value * 100;
                                break;
                            case "km":
                                $result = $value / 10000;
                                break;
                            case "dm":
                                $result = $value;
                                break;
                            case "yd":
                                $result = $value * 0.109361; 
                                break;
                            case "ft":
                                $result = $value * 0.328084; 
                                break;
                        }
                        break;
                    case "yd":
                        switch ($to_unit) {
                            case "m":
                                $result = $value * 0.9144; 
                                break;
                            case "cm":
                                $result = $value * 91.44; 
                                break;
                            case "mm":
                                $result = $value * 914.4; 
                                break;
                            case "km":
                                $result = $value * 0.0009144; 
                                break;
                            case "dm":
                                $result = $value * 9.144; 
                                break;
                            case "ft":
                                $result = $value * 3; 
                                break;
                            case "yd":
                                $result = $value; 
                                break;
                        }
                        break;
                    case "ft":
                        switch ($to_unit) {
                            case "m":
                                $result = $value * 0.3048; 
                                break;
                            case "cm":
                                $result = $value * 30.48; 
                                break;
                            case "mm":
                                $result = $value * 304.8; 
                                break;
                            case "km":
                                $result = $value * 0.0003048; 
                                break;
                            case "dm":
                                $result = $value * 3.048; 
                                break;
                            case "yd":
                                $result = $value * 0.333333; 
                                break;
                            case "ft":
                                $result = $value; 
                                break;
                        }
                        break;
                }
                echo "<div class='container3'>";
                echo "RESULT: " . $result . " " . $to_unit;
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>
