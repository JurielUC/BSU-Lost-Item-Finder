<?php
$id = $_GET['id'];

$dbname = "db_batstateu";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to delete a record
$sql = "DELETE FROM tb_admin WHERE admin_id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: admin_admin-accounts.php');
    exit;
} else {
    echo "Error deleting record";
}
?>