<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body class="d-flex flex-column h-100">
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
<a href ="" class="navbar-brand"><img src="bank.jpeg" alt="bankofindia" class="logo"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    <div class=" collapse navbar-collapse" id="mynavbar">
    <ul class="nav navbar-nav navbar-dark ml-auto">
    <li><a href="#home">Home</a></li>
    <li><a href="">About</a></li>
    <li><a href="table.php">User List</a></li>
    <li><a href="transaction.php">Transaction History</a></li>
    </ul>
    </div>
    </nav>

<?php include 'connection.php' ?>

<?php
$sender_name=$_GET["sender_name"];
$receiver_name=$_GET["receiver_name"];
$amount=$_GET["amount"];

?>

<?php $sql5="SELECT Name, Current Balance FROM bank WHERE Name='$sender_name' ";
 error_reporting(0);
	$result5=mysqli_query($conn, $sql5); 
    $row=mysqli_fetch_assoc($result5);
    $money=$row['Current Balance'];

    


?>

  

<?php $sql3 = "SELECT Name,Id  FROM bank WHERE Name='$receiver_name' ";
    $result3 = mysqli_query($conn, $sql3); 
    

    if (mysqli_fetch_assoc($result3)<1){ 
        include 'user.php';
    } 

    //  elseif ($money < $amount) {
    //     include 'user2.php';
        
    // }
    else{
        $sql4 = "UPDATE bank SET Current Balance=Current Balance-$amount WHERE Name='$sender_name'";
		$sql2= "UPDATE bank SET Current Balance=Current Balance+$amount WHERE Name='$receiver_name'";
 		$result2 = mysqli_query($conn, $sql2); 
        $result3 = mysqli_query($conn, $sql4);
 		$sql = "INSERT INTO history_transaction (Sender,Receiver,Amount) VALUES ('$sender_name',                '$receiver_name',  $amount)";
		$result = mysqli_query($conn, $sql); 
 		include 'firstuser.php';
 		

    }
?>

</body>
</html>