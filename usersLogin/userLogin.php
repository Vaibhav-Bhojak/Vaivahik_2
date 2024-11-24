

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
<!-- <svg style="margin-top: -8rem; margin-left: 2.5rem; margin-right: 2.5rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#c19ac7" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->
</div>
    <div class="login">
        <div class="login-img">
            <img src="../img/copule_two.png" alt="">
        </div>
        <div class="login-info">
            <h1>LOGIN</h1>
            <form name="myform" action="userLogin.php" method="POST" onsubmit="return validateForm()">
                <!-- <label for="name">Name</label> -->
                <input type="text" name="name" id="name" placeholder="Name">
                <br>
                <br>
                <!-- <label for="email">E-mail</label> -->
                <input type="email" name="email" id="email" placeholder="E-mail">
                <br>
                <br>
                <!-- <label for="password">Pasword</label> -->
                <input type="password" name="password" id="password" placeholder="Password">
                <br>
                <br>
                <button type="submit" name="submit" id="submit">LOGIN</button> or
                <button type="submit" name="signup">SIGNUP</button>
            </form>
        </div>
    </div>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 2.5rem; margin-right: 2.5rem;" viewBox="0 0 1440 150"><path fill="#c19ac7" fill-opacity="1" d="M0,64L48,74.7C96,85,192,107,288,128C384,149,480,171,576,160C672,149,768,107,864,106.7C960,107,1056,149,1152,149.3C1248,149,1344,107,1392,85.3L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg> -->
    
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

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $sql = "SELECT `email` FROM `userlogin` WHERE `name` = '$name'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        $verify = implode(" ",$row);
    if($verify == $email){
        echo"done";
        header('location: bio.php');
    }
    else{
        echo"USER NOT FOUND";
    }
    }
}



else{
    echo"*ALL FIELD MUST BE FILLED";
    $err = "*ALL FIELD MUST BE FILLED";
}
}

// }
if(isset($_POST['signup'])){
    header('location: usersignup.php');
}

?>