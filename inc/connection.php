<?php  

$dsn = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "angelang_contact-page-portfolio";
$user = "angelang_user";
$pass = "l633,mF7Ysh&";
 
try {
    $db = new PDO("$dsn:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    echo "Unable to connect - ";
    echo $e->getMessage();
    exit;
}
?>
