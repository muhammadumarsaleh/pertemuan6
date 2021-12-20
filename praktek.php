<?php

$daftar_pakaian = [
    ["Nama" => "Gamis",
    "Harga" => "Rp. 80.000",
    "Warna" => "Biru",
    "Ukuran" => "XL"],

    ["Nama" => "Khimar",
    "Harga" => "Rp. 150.000",
    "Warna" => "Black",
    "Ukuran" => "XL"],

    ["Nama" => "Jass Pesta",
    "Harga" => "Rp. 1.000.000",
    "Warna" => "Hitam",
    "Ukuran" => "XXL"],

    ["Nama" => "Khimar",
    "Harga" => "Rp. 150.000",
    "Warna" => "Black",
    "Ukuran" => "XL"],

    ["Nama" => "Khimar",
    "Harga" => "Rp. 150.000",
    "Warna" => "Black",
    "Ukuran" => "XL"],

    ["Nama" => "Khimar",
    "Harga" => "Rp. 150.000",
    "Warna" => "Black",
    "Ukuran" => "XL"],
];

// echo $daftar_pakaian[1]["Nama"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>TOKO BAHAGIA</title>
</head>
<body>
    <h1>Daftar Harga Barang</h1>

    <?php foreach($daftar_pakaian as $data) : ?>
        <ul>
            <li><?php echo $data["Nama"]; ?></li>
            <li><?php echo $data["Harga"]; ?></li>
            <li><?php echo $data["Warna"]; ?></li>
            <li><?php echo $data["Ukuran"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html> 