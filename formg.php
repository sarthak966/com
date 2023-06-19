<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <!-- <img class="bg" src="bg.jpg" alt="IIT Kharagpur"> -->

    <?php 
    $server="localhost";
    $username="root";
    $password="";
    
    $con=mysqli_connect($server,$username,$password ,"name");

    
    
    if(!$con){
        die("connection failed");
    }
    $id="";

    if(isset($_GET['id'])){

        $id=$_GET['id'];
        
        }
    
    $n="comments";
    
    $sql="SELECT * FROM `$n`";
    $result=mysqli_query($con,$sql);
    // echo mysqli_num_rows($result);

    while($row = mysqli_fetch_assoc($result)){
        if($row['Id']==$id){
        echo "<h3 class='h'>".$row['Comment']."</h3>";
        echo "<br/>";
        }
}




    
    ?>

    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <?php
            $id="";
            if(isset($_GET['id'])){

                $id=$_GET['id'];
                
                }


            echo "<input type='hidden' name='id' value='$id'>"
            
            ?>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>