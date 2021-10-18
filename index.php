<?php
if (isset($_POST['submit-time'])) {
   $url = 'submitted.php?time1='.$_POST['time1'].'&time2='.$_POST['time2'];
   header("Location:$url");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Time Diff</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="time1">Time 1</label>
        <input type="time" name="time1" id="" required><br><br>
        <label for="time2">Time 2</label>
        <input type="time" name="time2" id="" required><br><br>
        <button type="submit" name="submit-time">Submit Time</button>
    </form>
</body>
</html>