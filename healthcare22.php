<?php
include('connect.php');
?>
<html>

<html>

<head>
    <title>E-CONNECT</title>
    <style>
        * {
            margin: 0%;


        }

        body {
            background-image: url('health4.jpg');
            background-repeat: no-repeat;
            background-size: cover;

        }

        .body {
            background-image: url('b2c.jpg');
            background-size: cover;
        }

        .para {
            background-color: blue;
            font-family: bold;

            color: white;
            width: 1600px;
            height: 36px;
            padding-top: 20;
            padding-right: 25;
            padding-left: 10;

            padding-bottom: 10;
        }

        .concept {
            background-color: #f4511e;
            font-size: 20;
            font-family: arial, san-serif;
            color: white;

        }

        .scroll {
            font-size: 20;
            color: black;
            width: 600;
        }


        .button2 {
            border-radius: 10px;
            background-color: blue;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 1px;
            width: 150px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 0px;
        }

        .button2 span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button2 span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button2:hover span {
            padding-right: 20px;
        }

        .button2:hover span:after {
            opacity: 1;
            right: 0;

        }


        .button3 {
            border-radius: 10px;
            background-color: blue;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 1px;
            width: 350px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 0px;
        }

        .button3 span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button3 span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button3:hover span {
            padding-right: 20px;
        }

        .button3:hover span:after {
            opacity: 1;
            right: 0;

        }

        .label1 {
            font-size: 20;

            font-family: arial, san-serif;
            color: black;

        }

        .navbar {
            border-radius: 20px;
            background-color: white;
            border: none;
            overflow: hidden;
            transition: all 0.5s;
            cursor: pointer;
            margin: 0px;
            width: 46%;
            height: 16%;
        }

        .navbar a {
            text-align: center;
            float: right;
            font-size: 16px;
            color: white;

            padding: 14px 10px;
            text-decoration: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 20px;
            border: none;
            outline: none;
            color: #0cc2ef;
            padding: 14px 13px;
            background-color: #000000;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: red;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 14px 28px;
            font-size: 25px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <pre><span class= "para"><button onclick = "window.location.href ='home.html';" class="button2"><span>HOME</span></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <button onclick = "window.location.href ='gogreen.html';" class="button2"><span>GOGREEN</span></button>&emsp;&emsp; <button onclick = "window.location.href ='healthcare.html';" class="button2"><span>HEALTH CARE</span></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button onclick = "window.location.href ='carrerguide.html';" class="button2"><span>CARRER GUIDE</span></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <button onclick = "window.location.href ='sports.php';" class="button2"><span>SPORTS</span></button> <button  onclick = "window.location.href ='referencecenter.html';"class="button3"><span>REFERENCE CENTER</span></button> </span></pre>
    <br>
    <div style="display: flex; justify-content: space-between;">
        <h2>HELP:----</h2>
        <h2 style="height:20px; background-color: rgba(0, 255, 255, 0.395); font-size: xx-large; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; width: 200;">HEALTHZONE==></h2>
        <br>
    </div>
    <br>
    <div style="border-right: 2px  solid; display: flex;">

        <form action="" method="post" style="border: 2px  solid; padding:6%; background-color: #f5f4f451;">
            <p>
            <h3 class="label1">NECESSARY DATE : <input type="date" name="birthDate" style="width: 200px; height: 30px; background-color: #FFFFFF; font-size: 25px;"></h3>
            </p>


            <p>
                <label>
                    <h3 class="label1"> BLOODGROUP :</h3>

                    &emsp;&emsp;&emsp;&emsp;

                    <br>

                    <div class="navbar">

                        <div class="dropdown">
                            <button style="background-color: lime;" class="dropbtn" onclick="window.location.href='inter.html';"> REQUIRED BLOODGROUP
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div style="background-color:white" class="dropdown-content">
                                <a href="opositive.php">O-POSITIVE</a>
                                <a href="onegative.php">O-NEGATIVE</a>
                                <a href="bpositive.php">B-POSITIVE</a>
                                <a href="bnegative.php">B-NEGATIVE</a>
                                <a href="apositive.php">A-POSITIVE</a>
                                <a href="anegative.php">A-NEGATIVE</a>
                                <a href="abpositive.php">AB-POSITIVE</a>
                                <a href="abnegative.php">AB-NEGATIVE</a>

                            </div>
                        </div>
                    </div>
                    <br>

                    <h3>DESCRIPTION:--</h3>
                    <textarea name="bloodgroup" cols="40" rows="4"></textarea>

                    <br>
                </label>
            </p>
            <p>
                <button class="concept" type="submit">Submit</button>
            </p>
        </form>&emsp;




        <div>    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $comment = $_POST['comment'];


    $sql = "INSERT INTO `referencecenter` ( `comment`) VALUES ('$comment')";
    $result = mysqli_query($conn, $sql) or die($conn);
}
?>

   

  <div ><br><h4 style="color:indigo ;">Post Your Suggestion</h4><p style="color:indigo">(If you have any comments </p><p style="color:indigo">/ suggestions, please post them here)</p></div>
  <form action="" method="post" style="border: none;">
   
    
    <div >
        <style>
        #media print {
          .cmmntclose{display: none;}
          }
         </style>
        <textarea rows="10" cols="30" placeholder="comment here.............. or mail to econnect@gmail.com" name="comment" required="" id="comment" ></textarea>
            <br>
        <button type="submit" style="background-color: aqua; border-radius: 20px; width: 180px; height: 50px; font-size: 36; font-family: bold;" fdprocessedid="xrkr1k">Submit</button>
    </form>
    </div>
  
</body>

</html>