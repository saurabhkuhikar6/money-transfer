<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="table.css">
     <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h3 class="text-center pt-4">Transaction History</h3>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include_once 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

        while($rows = mysqli_fetch_assoc($query)) { ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo number_format($rows['balance']); ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>                
                
        <?php } ?>
        </tbody>
    </table>

    </div>
</div>
         <!-- footer page -->
<?php include_once('footer.php');?>  


</body>
</html>