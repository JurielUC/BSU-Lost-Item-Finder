<?php
$id = $_GET['id'];

$dbname = "db_batstateu";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO tb_verifiedmsg SELECT * FROM tb_messages WHERE msgid = $id"; 
if ($conn->query($sql) === TRUE) {
    include 'delete_messages.php';
    mysqli_close($conn);
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>