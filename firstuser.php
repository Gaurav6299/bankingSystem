<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfull</title>
</head>
<body>
    <?php include 'connection.php' ?>

    <?php
    $sender_name = $_GET["sender_name"];
    $receiver_name = $_GET["receiver_name"];
    $amount = $_GET["amount"];
    ?>
    <h2>Congratulations!! transfer to <?php echo $receiver_name ?> Successfull</h2>
</body>
</html>