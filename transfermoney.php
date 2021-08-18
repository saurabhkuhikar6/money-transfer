<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php   include_once 'navbar.php';?>

<div class="container">    
    <div class="row">
        <h3 class="text-center">Transfer Money</h3>
        <br>
        <div class="col-md-12 mb-80">
            <div class="table-responsive-sm">
                <table class="table table-hover table-sm table-striped table-condensed table-bordered" >
                    <thead>
                        <tr>
                        <th scope="col" class="text-center py-2">Sr.no</th>
                        <th scope="col" class="text-center py-2">Name</th>
                        <th scope="col" class="text-center py-2">E-Mail</th>
                        <th scope="col" class="text-center py-2">Balance</th>
                        <th scope="col" class="text-center py-2">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                        ?>
                            <tr style="color : black;">
                                <td class="py-2"><?php echo $rows['id'] ?></td>
                                <td class="py-2"><?php echo $rows['name']?></td>
                                <td class="py-2"><?php echo $rows['email']?></td>
                                <td class="py-2"><?php echo number_format($rows['balance'])?></td>
                                <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-info">Transact</button></a></td> 
                            </tr>
                        <?php
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>

 <!-- footer page -->
<?php include_once('footer.php');?>  
    
</body>
</html>