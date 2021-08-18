<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="table.css">   
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Basic Banking System</title>
</head>

<body>
  <!-- header of page -->
<?php
include_once 'navbar.php';
?>
<!-- page body -->
<div class="container">
  <div class="row">
    <div class="col-md-4 center mt-25">
      <img src="user.jpg" width = 196px; height=188px; >
      <div class="">
          <a href="createuser.php" class="btn btn-info ">Add User</a>
      </div>            
    </div>
    <div class="col-md-4 center">
      <img src="transfer.png" width = 196px; height =188px; >
      <div>
        <a href="transfermoney.php" class="btn btn-success mt-25">Make a Transaction</a>
      </div>
    </div>
    <div class="col-md-4 center ">
      <img src="history.jpg" width = 196px; height =188px;>
      <div>
        <a href="transactionhistory.php" class="btn btn-info mt-25">Transaction History</a>
      </div>
    </div>
  </div>
</div> 
<!-- footer of page --> 
    
<?php include_once('footer.php');?>

</body>
</html>