<?php

$nama = "Elsa";

//PERULANGAN
/*
$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1 ;
    echo $n." ".$nama."</br>";
}
*/

/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1 ;
    echo $n." ".$nama."</br>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;

do {
    $n = $i + 1 ;
    echo $n." ".$nama."</br>";
    $i++;
} while ($i < $no)
*/

/*
$data = array('Porsche','Tesla','Ferrari','Jazz','Brio','Juke');

foreach($data as $value) {
    echo $value."<br>";
}
*/

//PERCABANGAN
/*
if ($nama == "Elsa") {
    echo $nama." adalah orang Sidoarjo";
} else if ($nama == "Danang") {
    echo $nama." berasal dari kota Gresik";
} else {
    echo $nama." darimana ya?";
}
*/

/*
switch($nama) {
    case "Elsa":
        $pesan = $nama." adalah orang Sidoarjo";
    break;
    case "Danang":
        $pesan = $nama." berasal dari kota Gresik";
    break;
    default:
        $pesan = $nama." darimana ya?";
}

echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulanh</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {
            switch($_POST ['nama']) {
                case "Elsa":
                    $pesan = $_POST ['nama']." adalah orang Sidoarjo";
                break;
                case "Danang":
                    $pesan = $_POST ['nama']." berasal dari kota Gresik";
                break;
                default:
                    $pesan = $_POST ['nama']." darimana ya?";
            }
            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah";
        }
    ?>
</body>
</html>