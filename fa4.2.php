<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Document</title>
</head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 2px black;
    }
    table {
        border-collapse: collapse;
        border: 1px solid;   
    }

    th, td{
        border: 2px solid;
        text-align: center;
        padding: 2px;
    }
</style>
<body>
    <?php
    $names = array('rosmarie tan', 'diwata pares overload', 'daddy tyga', 'fernando the flexer', 'sophia ysabelle tambalong', 'john paul besagas', 'kween lenglang', 'sam angela', 'junjun salarzon', 'kween dura', 'jape tolenda', 'joshua ponenda', 'mr simpatiko', 'michael teodosio','solid nagngangawngaw' );
    ?>
    <table>
        <tr>
            <th colspan = '6'><?php 
            print "List of Names: ";
            foreach ($names as $n){
                print $n . ",";
            }
            ?>
            </th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Number of Characters</th>
            <th>Uppercase First Letter</th>
            <th>Replace Vowels with @</th>
            <th>Check Position of "a"</th>
            <th>Reverse Name</th>
        </tr>
        <?php 
        <?php foreach ($names as  $n): ?>
            <tr>
            <td><?php print $n["name"]; ?></td>
            <td><img src="<?php print $contacts["image"]; ?>"></td>            
            <td><?php print $contacts["age"]; ?></td>
            <td><?php print $contacts["birthday"]; ?></td>
            <td><?php print $contacts["contact_number"]; ?></td>
            </tr>
        <?php endforeach; ?>
</body>
</html>