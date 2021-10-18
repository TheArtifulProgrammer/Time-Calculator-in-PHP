<?php
$start_time = $_GET['time1'];
$end_time = $_GET['time2'];
$st_t = strtotime($start_time);
$en_t = strtotime($end_time);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi, Everyone</h1>
    <h3>Start Time: <?php echo $start_time;?></h3>
    <h3>End Time: <?php echo $end_time;?></h3>
    <h3>Difference: <?php echo 'Hours: '.floor(($en_t- $st_t)/3600). ' Minutes: '.round( ((($en_t- $st_t)%3600)/3600)*60 );?></h3>

</body>
</html>