<?php include 'partials/_dbconnect.php'?> 


<div class="container" style="margin-top:98px;background: aliceblue;">
    <div class="table-wrapper">
        <div class="table-title" style="border-radius: 14px;">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Work <b>Details</b></h2>
                    <a href="./backup.php">
                        back up data
                    </a>
                </div>
                <div class="col-sm-8">
                    <a href="" class="btn btn-primary"><i class="material-icons">&#xE863;</i> <span>Refresh List</span></a>
                    <a href="#" onclick="window.print()" class="btn btn-info"><i class="material-icons">&#xE24D;</i> <span>Print</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover text-center" id="NoOrder">
            <thead style="background-color: rgb(111 202 203);">
                <tr>
                    <th>order Id</th>
                    <th>order amount </th>
                    <th>price </th>
                    <th>order </th>
                    <th>Order Date</th>
                </tr>
            </thead>



   <?php
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

                $sql = "SELECT orders.*, item.*, orderitems.*
FROM orderitems 
JOIN item ON orderitems.itemId = item.itemId  
JOIN orders ON orderitems.orderId = orders.orderId";
        $result = mysqli_query($conn, $sql);
        $totalAmount = 0;
        $totalPrice = 0;




        //get the data from the table  using while loop 
        while(
            $row = mysqli_fetch_assoc($result)){
            $orderAmount = $row['amount'];
            $orderDate = $row['orderDate'];
            $itemPrice = $row['itemPrice'];
            $orderId =$row ['orderId'];

           //total amount 
            $totalAmount = $totalAmount + $orderAmount;

            //total price 
            $totalPrice = $totalPrice + $itemPrice;
              ?>
              <tbody>


                <tr> 
                   <td> <?php echo $row ['orderId'] ?></td>
                     <td> <?php echo $row ['amount'] ?></td>
                        <td> <?php echo $row ['itemPrice'] ?></td>
                        <td> <?php echo $row ['itemName'] ?></td>
                        <td> <?php echo $row ['orderDate'] ?></td>
                </tr>

                
              </tbody>




<?php }?>

        
        <h3>TotalPrice :<?php echo $totalPrice ?></h3>
        <h3>TotalAmount :<?php echo $totalAmount ?></h3>
    </div>
</div>
 

    
<?php
    include 'partials/_orderItemModal.php';
    include 'partials/_orderStatusModal.php';
?>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
    .tooltip.show {
        top: -62px !important;
    }
    
    .table-wrapper .btn {
        float: right;
        color: #333;
        background-color: #fff;
        border-radius: 3px;
        border: none;
        outline: none !important;
        margin-left: 10px;
    }
    .table-wrapper .btn:hover {
        color: #333;
        background: #f2f2f2;
    }
    .table-wrapper .btn.btn-primary {
        color: #fff;
        background: #03A9F4;
    }
    .table-wrapper .btn.btn-primary:hover {
        background: #03a3e7;
    }
    .table-title .btn {		
        font-size: 13px;
        border: none;
    }
    .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
    }
    .table-title .btn span {
        float: left;
        margin-top: 2px;
    }
    .table-title {
        color: #fff;
        background: #4b5366;		
        padding: 16px 25px;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
        padding: 12px 15px;
        vertical-align: middle;
    }
    table.table tr th:first-child {
        width: 60px;
    }
    table.table tr th:last-child {
        width: 80px;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
        /* background-color: #fcfcfc; */
    }
    table.table-striped.table-hover tbody tr:hover {
        /* background: #f5f5f5; */
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td a {
        font-weight: bold;
        color: #566787;
        display: inline-block;
        text-decoration: none;
    }
    table.table td a:hover {
        color: #2196F3;
    }
    table.table td a.view {        
        width: 30px;
        height: 30px;
        color: #2196F3;
        border: 2px solid;
        border-radius: 30px;
        text-align: center;
    }
    table.table td a.view i {
        font-size: 22px;
        margin: 2px 0 0 1px;
    }   
    table.table .avatar {
        border-radius: 50%;
        vertical-align: middle;
        margin-right: 10px;
    }
    table {
        counter-reset: section;
    }

    .count:before {
        counter-increment: section;
        content: counter(section);
    }
    

</style>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>