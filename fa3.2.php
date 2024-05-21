<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .container1 {
        border: 4px solid;
        padding: 2px;
        width: 80%;
        margin: auto;
        align-self: center;
    }
    .container2 {
        border: 1px solid;
        padding: 1px;
        text-align: center;
        margin-bottom: 3px;
    }
    table {
        border-collapse: collapse;
        border: 1px solid;
        width: 100%;
    }
    td, th {
        border: 1px solid;
        padding: 5px;
        text-align: center;
    }
</style>
<body>
    <?php
    $num = array(1,2,3,4,5,6,7,8,9,10);
    ?>
    <div class="container1">
        <div class="container2">
            <?php 
            print "Array List: ";
            foreach ($num as $n) {
                print $n . ",";
            }
            ?>
        </div>
        <table>
            <tr>
                <td>Addition</td>
                <td>
                    <?php 
                    $sum = array_sum($num);
                    print $sum;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Subtraction (Sum)</td>
                <td>
                    <?php
                    $difference = $num[0]; 
                    for ($i = 1; $i < count($num); $i++) {
                        $difference -= $num[$i];
                    }
                    print $difference;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Multiplication (Product)</td>
                <td>
                    <?php 
                    $product = array_product($num);
                    print $product;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Division</td>
                <td>
                <?php
                    $quotient = $num[0]; 
                    for ($i = 1; $i < count($num); $i++) {
                        $quotient /= $num[$i];
                    }
                    print $quotient;
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
