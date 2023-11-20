<?php
if(isset($_POST['sub'])){

    include "conn.php";

    $fname = $_POST['fname'];
    $iname = $_POST['iname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $stmt = $db->prepare("INSERT INTO custm(fname,iname,email,age,date)
                                        VALUES(:f,:l,:e,:a,now())");
    $stmt->execute(array(
        'f'=> $fname,
        'l'=> $iname,
        'e'=> $email,
        'a'=> $age,

    ));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    const myElement = document.getElementById("f");
    function esslam(){
        document.write("hello " + myElement)
    }
</script>
</head>
<body>
    
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name='fname' id="f" ><br>
    <input type="text" name='iname' ><br>
    <input type="text" name='email' ><br>
    <input type="number" name='age' ><br>
    <input type="submit" name='sub' onclick ="esslam()"><br>
</form>
</body>


</html>
