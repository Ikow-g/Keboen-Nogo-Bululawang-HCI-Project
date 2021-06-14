<?php
session_start();

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: login.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{
        $host = "localhost";
        $dbUsername = "id16530044_viper";
        $dbPassword = "2aEqN@&75ckHh|i/";
        $dbname = "id16530044_webnogo";

        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else{
            $sql = "SELECT * FROM accounts WHERE username='$uname' AND password='$pass'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $uname && $row['password'] === $pass){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['gender'] = $row['gender'];
                    $_SESSION['phone'] = $row['phone'];
                    header("Location: index.php");
                    exit();
                }else{
                    header("Location: login.php?error=Incorrect Username or Password");
                    exit();
                }
            }else{
                header("Location: login.php?error=Incorrect Username or Password");
                exit();
            }
        }
    }
}else{
    header("Location: login.php");
    exit();
}

?>