<?php
session_start();
include("db.php");
$msg="";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password =$_POST['password'];
    $_SESSION['username'] = $username;
    $sql = "SELECT id, email,username, password FROM tbl_user WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    

    if ($result->num_rows == 1) {
        $_SESSION['USER_ID']=$row['id'];
        $_SESSION['email'] = $row['email'];      
        header('Location:index.php');
    } else {
        
        $msg="Please enter Valid Details!";
        
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/0c9a88a792.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f0469db40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/loginout.css">
    <title>Todo - log in or sign up</title>
</head>
<body>
    <main>
        <div class="container-fluid content">
            <div class="container">
                <div class="row">
                    <div class="col-6 todo">
                        <img src="./images/todo.png" alt="todo" height="70px" width="70px" class="todo-img">
                        <span class="heading">Todo App</span>
                        <p class="para">Make your daily routine on Todo.</p>
                    </div>
                    <div class="col-6 ">
                        <form method="post" >
                            <div class="row">
                                <div class="col btn">
                                    <button type="submit" class="login"><i class="log-sin fa fa-sign-in" aria-hidden="true"></i> Login</button>
                                    <div class="box"></div>
                                    <button class="signup"><i class="use-pls fa fa-user-plus" aria-hidden="true"></i> <a id="link"  href="./signup.php">Sign up</a></button>
                                </div>
                            </div>
                            <div class="row username">
                                <div class="col">
                                        <label for="username" class="email">E-mail*</label><br/>
                                        <input type="email" id="useremail" name="email" class="input-email" title="Enter your e-mail" required/>
                                </div>
                            </div>
                            <div class="row password">
                                <div class="col">
                                    <label for="password" class="pass">Password*</label><br/>
                                    <input type="password" id="password" name="password" class="input-pass" min="8" title="Enter your password"/>
                                </div>
                            </div>
                            <div class="row login-btn">
                                <div class="col">
                                    <button type="submit" name="login" class="log-in">Login</button>
                                    <p class="forgot"><u><a href="#">Forgot your password?</a></u></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>