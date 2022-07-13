<!DOCTYPE html>
<html>
<head>
    <style>
        *{
            list-style: none;
            text-decoration: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
           
        }
        body{
            background: rgb(2, 90, 100);
        }
         .wrapper .sidebar{
            background: rgb(5, 68, 104);
            color: #ffffff;
            position: fixed;
            top: 0;
            left: 0;
            width: 225px;
            height: 100%;
            padding: 20px 0;
            transition: all 0.5s ease;
        }
        .wrapper .sidebar .profile{
            margin-bottom: 30px;
            text-align: center;
        }

        .wrapper .sidebar .profile img{
            display: block;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto;
        }
        .wrapper .sidebar .profile h3{
            color: #ffffff;
            margin: 10px 0 5px: center;
        }

        .wrapper .sidebar .profile p{
            color: rgb(206, 240, 253);
            font-size: 14px;
        }

        .wrapper .sidebar ul li a{
            display: block;
            padding: 13px 30px;
            border-bottom: 1px solid #10558d;
            color: rgb(241, 237, 237);
            font-size: 16px;
            position: relative;
        }
    </style>
</head>
    <body>
        <div class="wrapper">

        <div class="sidebar">
            <div class="profile">
                <img src="images/logo.jpg" alt="UZ">
                <h3>UZ UNDERGRADUATE</h3>
                <p>Application</p>
            </div>
            <ul>
                <li>
                <a href="#">Admin Dashboard</a>
                <br><br><br><br>
                </li>
                <li>
                    <a href="./ApplicationForm.php">New Application</a>
                </li>
                <br>
                <li>
                <a href="./ApplicantLogin.php">Applicant Login</a>
                </li>
            </ul>

        </div>

        </div>
    </body>
</html>