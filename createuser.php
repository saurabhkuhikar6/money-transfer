<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="createuser.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head> 

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
       echo "<script> alert('Hurray! User created');
       window.location='transfermoney.php';</script>";                    
    }
  }
?>
<!-- header of page -->
<?php  include 'navbar.php';?>

<!-- body of page -->
<div class="container">
<div class="col-md-2"></div>
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-success">
        <div class="panel-heading">Add New User</div>
        <div class="panel-body">
          <form class="app-form" method="post">               
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input class="form-control" placeholder="Enter Your Name" type="text" name="name" required>                         
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i> </span><input class="form-control" placeholder="Enter Your Email" type="email" name="email" required>
            </div>
            <div class="form-group input-group">
              <input class="form-control" placeholder=" Enter Account Money" type="number" name="balance" required>
               <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
            </div>
              <div class="form-group">
              <input class="btn btn-success mr-20" type="submit" value="CREATE" name="submit"></input>
              <input class="btn btn-primary" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>  
        </div>          
      </div>
    </div>     
  </div>
<div class="col-md-2"></div>

</div> 

<!-- footer of page -->
<?php include_once('footer.php');?>  
</body>
</html>