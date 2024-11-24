<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../style/userLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
      rel="stylesheet"
    />
</head>
<body>
<div class="svgg"></div>
<!-- <svg style="margin-top: -8rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300"><path fill="#c19ac7" fill-opacity="1" d="M0,160L30,165.3C60,171,120,181,180,208C240,235,300,277,360,288C420,299,480,277,540,266.7C600,256,660,256,720,245.3C780,235,840,213,900,218.7C960,224,1020,256,1080,272C1140,288,1200,288,1260,266.7C1320,245,1380,203,1410,181.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg> -->
</div>
    <div class="login">
        <div class="login-img">
            <img src="../img/copule_two.png" alt="">
        </div>
        <div class="login-info">
            <h1>SIGNUP</h1>
            <form action="usersignup.php" method="POST">
                <!-- <label for="name">Name</label> -->
                <input type="text" name="name" id="name" placeholder="Enter your name here...">
                <br>
                <br>
                <!-- <label for="email">E-mail</label> -->
                <input type="email" name="email" id="email" placeholder="Enter your E-mail here...">
                <br>
                <br>
                <!-- <label for="password">Pasword</label> -->
                <input type="password" name="password" id="password" placeholder="Enter your password here...">
                <br>
                <br>
                <button type="submit" name="submit" id="submit">SIGNUP</button> or
                <button type="submit" name="login">LOGIN</button>
            </form>
        </div>
    </div>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150"><path fill="#c19ac7" fill-opacity="1" d="M0,64L48,74.7C96,85,192,107,288,128C384,149,480,171,576,160C672,149,768,107,864,106.7C960,107,1056,149,1152,149.3C1248,149,1344,107,1392,85.3L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg> -->
    
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vaivahik";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Error ! We cannot connect to the server".mysqli_connect_error());
}

else{
    echo"<script>console.log('Connected to server')</script>";
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($_POST['name'])){
        $error = "*ALL FIELD MUST BE FILLED";
    }
    // echo $name , $email , $password;
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $sql = "INSERT INTO `userlogin` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Data Uploaded";
        header('location: userLogin.php');
    }
    else{
        echo "<script>alert('Data not Uploaded')</script>";
    }
}

else{
    echo"*ALL FIELD MUST BE FILLED";
    $err = "*ALL FIELD MUST BE FILLED";
}
}

if(isset($_POST['login'])){
    header('location: userLogin.php');
}


?>