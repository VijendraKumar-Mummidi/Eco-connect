<?php
include('connect.php');
?>


<!DOCTYPE html>
<html>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity: 1;
    }

    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    .cancelbtn,
    .signupbtn {
        float: left;
        width: 50%;
    }

    
    .container {
        padding: 16px;
    }

    
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    
    @media screen and (max-width: 300px) {

        .cancelbtn,
        .signupbtn {
            width: 100%;
        }
    }

    .back {
        background-color: rgb(0, 255, 4);
        font: 25px;
        color: #ffffff;
        padding: 14px 28px;
    }
</style>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $number = $_POST['number'];
       
        $email = $_POST['email'];
        $psw = $_POST['psw'];
       
        
            $sql = "INSERT INTO `register` ( `number`,  `email`, `psw`) VALUES ( '$number', ' $email', '$psw')";
            $result = mysqli_query($conn, $sql) or die($conn);
    
            if ($result) {
                header("Location: review.php");
                exit();
            }else{
                echo " Login Failed maybe already exists.??";
            }

    }
    ?>

    <form action="" method="post" style="border:1px solid #ccc">
        <div class="container">
            <h1>Login</h1>
            <p>Please fill in this form to login into your account.</p>
            <hr>

            <label for="number"><b>NUMBER</b></label>
            <input type="text" placeholder="Enter number" id="number" name="number" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" id="email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" id="psw" name="psw" required>



            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">LOGIN</button>
            </div>
        </div>
    </form>
   
</body>

</html>