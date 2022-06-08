<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        Maximum Number: <input type="number" name="maxNumber"><br>
        <button type="submit">שלח/י</button>
    </form>

    <?php
    if (isset($_GET["maxNumber"])) {
        require_once "./array.php";
        echo "<br>";
        $arrSum = arrayNumber($_GET["maxNumber"]);
        echo $arrSum;
    }

    ?>


    <?php
    require_once "./iphone.php";
    require_once "./samsung.php";


    echo "<br>";
    echo "<br>";

    $iphoneX = new Iphone("Iphone X", "Apple", "coral", 18, 20);
    $note10 = new Samsung("Note 10", "Samsung", "Cyan", 19, true);
    $galaxyS20 = new Samsung("Galaxy S20", "Samsung", "black", 6.7, false);

    echo $iphoneX;
    echo $iphoneX->checkScreenSize();
    echo "<br>";
    echo "<br>";
    echo $note10;
    echo $note10->checkScreenSize();
    echo "<br>";
    echo "<br>";
    echo $galaxyS20;
    echo $galaxyS20->checkScreenSize();
    echo "<br>";



    ?>


</body>

</html>