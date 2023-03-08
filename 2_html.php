<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Listy</h4>
    <ul>
        <li>wielkoposlskie
        <ol>
            <li>Poznan</li>
            <li>Gniezno</li>
        </ol>
        </li>
        <li>dolnoslosniek
        <ol>
            <li>Krakow</li>
            <?php 
            $city = "<li>Legnica</li>";
            echo $city;
            echo "<li>Boleslawice</li>";           
            ?>
            <li>Cos</li>
        </ol>
        </li>
        <li>mazury</li>
    </ul>

</body>
</html>     