<?php 
$mahasiswa = [
        [ "0203034593","Muhammad Umar Saleh", "01muh.umar@gmail.com", "Teknik Komputer Dan Jaringan"
        ],
        [ "Muhammad Yusuf", "02459334934", "yusuf@gmail.com", "Wirausaha"
        ],
        [ "Sitti Aminah", "0984845893", "Aminah@gmail.com",  "Kebidanan",
        ]
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php foreach($mahasiswa as $a ) : ?>
        <ul>
        NAMA=    <?= $a[0] ?>
        NRP=    <?= $a[1] ?>
        EMAIL    <?= $a[2] ?>
        JURUSAN     <?= $a[3] ?>
        </ul>
    
<?php endforeach; ?>
</body>
</html>

