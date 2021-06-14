<?php
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phone)) {
    $host = "localhost";
    $dbUsername = "id16530044_viper";
    $dbPassword = "2aEqN@&75ckHh|i/";
    $dbname = "id16530044_webnogo";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else{
        $SELECT = "SELECT email From accounts Where email = ? Limit 1";
        $INSERT = "INSERT Into accounts (username, password, gender, email, phone) values(?, ?, ?, ?, ?)";

        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssss", $username, $password, $gender, $email, $phone);
            $stmt->execute();
            header("Location: login.php?error=Registrasi Telah Berhasil");
            exit();
        } else {
            header("Location: registration.php?error=Email sudah ada");
            exit();
        }
        $stmt->close();
        $conn->close();
    }
} else{
    header("Location: registration.php?error=Email sudah ada");
    exit();
}

?>