<?php
$mySQLconect = new mysqli("localhost", "root", "", "crud");

if ($mySQLconect->connect_error) {
    echo "wystąpil bląd i nie udalo sie polaczyc z bazą danych". $mySQLconect->connect_error;
    $mySQLconect->connect_error;

}else {
    echo "polączono z bazą danych! </br>";

    $sql = 'SELECT * FROM users';
    $result = $mySQLconect->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <?php
        if ($result) { 
            while($row = mysqli_fetch_assoc
            ($result)) {
            echo
            '<div class="user-card">' .
            '<img src="' .$row
            ['avatar'] . '">' . 
            '<span>' . $row['name'] .
            '</span>' .
            '<span>' . $row
            ['lastname'] . '</span>' .
            '</div>';
       }
    }
    ?>
    </main>
</body>
</html>