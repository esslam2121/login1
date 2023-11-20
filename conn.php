<?php
$dsn ="mysql:host=localhost;dbname=test";
$user = 'root';
$pass = "";
$lang = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);

try{
    $db = new PDO($dsn,$user,$pass,$lang);
    $db-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "تم";
}
catch(PDOEception $e){
    echo "حدث خطا" . $e->getLine();
}
?>


