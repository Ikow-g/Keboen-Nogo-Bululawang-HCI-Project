<?php
session_start();
$con=mysqli_connect("localhost","id16530044_viper","2aEqN@&75ckHh|i/","id16530044_webnogo");

if(mysqli_connect_error()){
    echo"<script>
        alert('cannot connect to database');
        window.location.href='cart.php';
    </script>";//optional
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['purchase'])){
       $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
       if(mysqli_query($con,$query1)){
            $Order_Id=mysqli_insert_id($con);
            $query2="INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt){
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values){
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                    alert('Order Placed');
                    window.location.href='cart.php';
                </script>";//optional
            }else{
                echo"<script>
                    alert('SQL Query Prepare Error');
                    window.location.href='cart.php';
                </script>";//optional
            }
        }else{
            echo"<script>
                alert('SQL Error');
                window.location.href='cart.php';
            </script>";//optional
       }
    }
}


?>