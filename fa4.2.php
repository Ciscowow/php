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
        font-size: 4px black;
        align-items: center;
    }
    table {
        border-collapse: collapse;
        border: 1px solid;  
        
    }

    th, td{
        border: 2px solid;
        text-align: center;
        padding: 4px;
    }
</style>
<body>
    <?php
    $names = array('rosmarie tan', 'diwata pares overload', 'daddy tyga', 'fernando the flexer', 'sophia ysabelle tambalong', 'john paul besagas', 'kween lenglang', 'sam angela', 'junjun salarzon', 'kween dura', 'jape tolenda', 'joshua ponenda', 'mr simpatiko', 
    'michael teodosio','solid nagngangawngaw', 'steven smitty', 'evan nganou', 'tyrese haliburton', 'lebron james', 'anthony edwards');
    ?>
    <table>
        <tr>
            <th colspan = '6'><?php 
            print "Array List: ";
            foreach ($names as $n) {
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
        <?php foreach ($names as  $n): ?>
            <tr>
            <td><?php print $n; ?></td>
            <td><?php print strlen($n); ?></td>
            <td><?php print ucfirst($n); ?></td>
            <td><?php print str_replace(array('a', 'e', 'i', 'o', 'u'), '@', $n); ?></td>
            <td><?php $pos = strpos ($n, 'a');
                      print $pos !== false ? $pos : 0 ?> </td>
            <td><?php print strrev($n); ?></td>
            </tr>
        <?php endforeach; ?>
</body>
</html>
