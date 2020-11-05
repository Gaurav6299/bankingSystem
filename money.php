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
    <li><a href="index.php">Home</a></li>
    <li><a href="">About</a></li>
    <li><a href="table.php">User List</a></li>
    <li><a href="transaction.php">Transaction History</a></li>
    </ul>
    </div>
    </nav>

    <div class="container">
		<form action="transfer.php" method="get">
			<label><b>Sender </b></label>
			<input list="names" type="text" name="sender_name", placeholder="Enter name here" required>
			<datalist id="names">
            <option value="Gaurav"></option>
            <option value="Kushal"></option>
            <option value="Ankit"></option>
            <option value="Sujit"></option>
            <option value="Vikash"></option>
            <option value="Aman"></option>
            <option value="Payal"></option>
            <option value="Vishal"></option>
            <option value="Kunal"></option>
            <option value="Aprna"></option>
				
				
			</datalist>
		</br>
			<label><b>Receiver </b></label>
			<input list="namess" type="" name="receiver_name" placeholder="Enter email here" required>
			<datalist id="namess">
            <option value="Gaurav"></option>
            <option value="Kushal"></option>
            <option value="Ankit"></option>
            <option value="Sujit"></option>
            <option value="Vikash"></option>
            <option value="Aman"></option>
            <option value="Payal"></option>
            <option value="Vishal"></option>
            <option value="Kunal"></option>
            <option value="Aprna"></option>
			</datalist>
              </br>

              <label><b>Amount: </b></label>
			<input type="" name="amount" placeholder="Enter amount here" required>
			<input class="click" type="submit" name="" value="Send Money">
       </form>
      

    </div>
    
</body>
</html>