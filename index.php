<?php
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password ,"name");

if(!$con){
    die("connection failed");
}

$name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['desc'];

    $id=$_POST['id'];


$db="INSERT INTO `comments` (`sno`, `Comment`, `Id`, `date`) VALUES (NULL, '$name', '$id', current_timestamp());";

// echo $db;

if($con->query($db)==true){
    // echo "success";
    // header('location:formg.php');
}else{
    echo "failed";
}




}
?>
<?php
$id=$_POST['id'];
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>hhh</title>
</head>
<body>
    <form action='formg.php'>
        
            

        <input type='hidden' name='id' value='$id'>
        
        
    </form>

    <script>
        let frm=document.getElementsByTagName('form')[0];
        frm.submit();
    </script>
</body>
</html>

"

?>