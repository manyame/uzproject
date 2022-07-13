<?php session_start();
    require'connection.php';
 
    if(ISSET($_POST['login'])){
        if($_POST['username'] != "" || $_POST['password'] != ""){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "SELECT * FROM `personal_details` WHERE `surname`=? AND `email_address`=? ";
            $query_run = $dbh->prepare($query);
            $query_run->execute(array($username,$password));
            $row = $query_run->rowCount();
            $fetch = $query_run->fetch();
            if($row > 0) {
                $_SESSION['username']=$username;
                echo"<center><h5 class='text-success'>Login successfully</h5></center>";
                header("Location: WelcomeApplicant.php");
            } else{
                echo"<center><h5 class='text-danger'>Invalid username or password</h5></center>";
            }
        } 
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
            text-decoration: none;
            box-sizing: border-box;
            font-family: sans-serif;
            }

            body{
            background: #f5f6fa;
            }

            .login_form{
                padding: 300px;
                padding-top: 125px;

            }

            .login{
                background: rgb(5, 68, 104);
                color: #ffffff;
            }

            button{
                margin-left:430px;
            }
        </style>
    </head>
    <body>
        <form action="" method="POST" class="login_form">
            <fieldset class="login">
                <div >
                    <center>
                        <h3>WELCOME</h3>
                    <hr>
                    <label for"user">USERNAME</lable>
                    <input type="text" name="username" id="user">
                    <br><br>
                    <label for"pass">PASSWORD </label>
                    <input type="password" name="password" id="pass">
                    <br><br>
                    </center>
                    <button type="submit" name="login">LOGIN</button>
                    <hr>
                    <br><br>
                </div>
            </fieldset>
        </form>
    </body>
</html>