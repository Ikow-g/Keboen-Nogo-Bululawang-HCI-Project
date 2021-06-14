<?php
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$ticket = $_POST['ticket'];

if (!empty($nama) || !empty($hp) || !empty($email) || !empty($ticket)) {

    $host = "localhost";
    $dbUsername = "id16530044_viper";
    $dbPassword = "2aEqN@&75ckHh|i/";
    $dbname = "id16530044_webnogo";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From database1 Where email = ? Limit 1";
        $INSERT = "INSERT Into database1 (nama, hp, email, ticket) values(?, ?, ?, ?)";
    
        $stmt = $conn ->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($resultemail);
        $stmt->store_result();
        $stmt->fetch();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sisi", $nama, $hp, $email, $ticket);
            $stmt->execute();
            header("Location: ticketorder.php?info=Order Ticket Berhasil");
        } else { 
            echo "Error";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All field are required";
    die();
}
?>