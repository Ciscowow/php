<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        
    }
    table{
        margin: auto;
        align-self: center;
        border-collapse: collapse;
        border: 2px solid;
        width: 70%;
    }
    th, td {
            border: 1px solid;
            padding: 4px;
            text-align: center;
        }
    img{
        width: 100px;
        height: 100px;
    }
</style>
<body>
    <?php 
    $contactinfo = array(
        array(
            "name" => "Sam Angela",
            "image" => "sa.jpeg",
            "age" => "20",
            "birthday" => "2004-05-16",
            "contact_number" => "09123456728"
        ),
        array(
            "name" => "Daddy Tyga",
            "image" => "dt.jpeg",
            "age" => "20",
            "birthday" => "2004-09-02",
            "contact_number" => "09982750293"
        ),
        array(
            "name" => "Rasc Binuya",
            "image" => "rb.jpeg",
            "age" => "30",
            "birthday" => "1994-06-23",
            "contact_number" => "09827555498"
        ),
        array(
            "name" => "Golem",
            "image" => "golem.jpg",
            "age" => "21",
            "birthday" => "2003-09-13",
            "contact_number" => "09755564629" 
        ),
        array(
            "name" => "Fernando The Flexer",
            "image" => "fernando.jpeg",
            "age" => "20",
            "birthday" => "2024-01-15",
            "contact_number" => "09124423592" 
        ),
        array(
            "name" => "Michael Teodosio",
            "image" => "michael.jpeg",
            "age" => "40",
            "birthday" => "1984-10-22",
            "contact_number" => "09998722467" 
        ),
        array(
            "name" => "Mr Simpatiko",
            "image" => "simpatiko.jpeg",
            "age" => "37",
            "birthday" => "1987-04-17",
            "contact_number" => "09123234897" 
        ),
        array(
            "name" => "Meong Lipbite",
            "image" => "meong.jpeg",
            "age" => "29",
            "birthday" => "1995-05-20",
            "contact_number" => "09332567890" 
        ),
        array(
            "name" => "Malupiton",
            "image" => "malupiton.jpeg",
            "age" => "23",
            "birthday" => "2001-02-21",
            "contact_number" => "09232452678" 
        ),
        array(
            "name" => "Diwata Pares Overload",
            "image" => "diwata.jpeg",
            "age" => "33",
            "birthday" => "1991-06-11",
            "contact_number" => "09254287621" 
        )
    );
    usort($contactinfo, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
    ?>
    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact Number</th>
        </tr>
        <?php foreach ($contactinfo as $index => $contacts): ?>
            <tr>
            <td><?php print $index + 1; ?></td>
            <td><?php print $contacts["name"]; ?></td>
            <td><img src="<?php print $contacts["image"]; ?>"></td>            
            <td><?php print $contacts["age"]; ?></td>
            <td><?php print $contacts["birthday"]; ?></td>
            <td><?php print $contacts["contact_number"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>