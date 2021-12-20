<!DOCTYPE html>
<html>
<head>
    <title>ARRAY MULTIDIMENSI</title>
</head>
<body>
<?php
$angka = [[1,2,3],[4,5,6],[7,8,9]];
?>


<?php foreach($angka as $a) : ?>
    <?php foreach($a as $b ) : ?>
        <?php echo $b ?>
    <?php endforeach; ?>
<?php endforeach; ?>



</body>

</html>