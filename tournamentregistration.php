<?php
include('connect.php');
?>



<html>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f164;
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
        $name = $_POST['name'];
        $number = $_POST['number'];
        $venue = $_POST['venue'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $description = $_POST['description'];
        
            $sql = "INSERT INTO `register2` ( `name`, `number`, `venue`,`age`,`date`,`description`) VALUES ('$name', '$number', ' $venue', ' $age', ' $date', '$description')";
            $result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
            if($result){
            header("Location: sports.php");
            }else{
            exit();
            }

    }
    ?>

    <form action="" method="post" style="border:1px solid ; background-image: url('allsg.jpg');">
        <div class="container">
            <h1>TOURNAMENT REGISTRATION  </h1>
            <p>Please fill in this form to share details about the tournament.</p>
            <hr>

            <label for="name"><b>TOURNAMENTNAME</b></label>
            <input type="text" placeholder="ENTER TOURNMENT Name" id="name" name="name" required>

            <label for="number"><b>CONTACTNUMBER</b></label>
            <input type="text" placeholder="ENTER CONTACTDETAILS" id="number" name="number" required>

            <label for="venue"><b>VENUE</b></label>
            <input type="text"  placeholder="ENTER VENUE" id="venue" name="venue" required>
            <label for="age"><b>AGE LIMIT</b></label>
            <input type="text" placeholder="ENTER AGE LIMIT" id="age" name="age" required>
            <label for="date"><b>DATE OF OCCURANCE</b></label>
            <input type="date" style=" columns: 10; row-gap: 10;" placeholder="date" id="date" name="date" ><br>
            <label for="decription"><b>DESCRIPTION</b></label>
            <input type="text" style=" columns: 10; row-gap: 10;" placeholder="ENTER A BRIEF DETAILS" id="description" name="description" required>

            <label for="email"><b>EMAIL</b></label>
            <input type="text" placeholder="ENTER " id="email" name="email" required>



            
            <div class="clearfix">
                <button type="button" class="cancelbtn">CANCEL</button>
                <button type="submit" class="signupbtn">SUBMIT</button>
            </div>
        </div>
    </form>
    <div>
        <button class="back">Back>></button>
</body>

</html>