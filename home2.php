<?php
include('connect.php');
?>
<html>

<head>
    <title>E-CONNECT</title>
    <style>
        * {
            margin: 0%;


        }

        .body {
            background-image: url('11.jpg');
            background-size: cover;
        }

        .para {
            background-color: blue;
            font-family: bold;

            color: white;
            width: 1600px;
            height: 36px;
            padding-top: 20;
            padding-right: 10;
            padding-left: 10;
            border-left: none;
            margin-left: none;
            padding-bottom: 10;
        }

        .concept {
            font-size: 20;
            font-family: arial, san-serif;
            color: white;

        }

        .scroll {
            font-size: 20;
            color: black;
            width: 600;
        }

        .button1 {
            background-color: orange;
            font-family: bold;
            width: 100;
            height: 30;
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
    </style>
</head>

<body style="background-image:url('11.jpg'); background-size: cover; background-repeat: no-repeat;">
    <pre><span class= "para"><button onclick = "window.location.href ='home.html';" class="button2"><span>HOME</span></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <button onclick = "window.location.href ='gogreen2.php';" class="button2"><span>GOGREEN</span></button>&emsp;&emsp; <button onclick = "window.location.href ='healthcare22.php';" class="button2"><span>HEALTH CARE</span></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button onclick = "window.location.href ='carrerguide2.php';" class="button2"><span>CARRER GUIDE</span></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <button onclick = "window.location.href ='sports.php';" class="button2"><span>SPORTS</span></button> <button  onclick = "window.location.href ='referencecenter.html';"class="button3"><span>REFERENCE CENTER</span></button> </span></pre>
   

    <center>
        &emsp; &emsp;&emsp; <a class="concept">GOGREEN LIVE LONG<a href="gogreen.html">
                <marquee direction="right" class="scroll">Let's go view all</marquee>
            </a>
        </a>
        <pre>
<a href="gogreen.html"><img src="of1.jpg" width="200" height="200"/></a><cite>          </cite><a href="gogreen.html"><img src="og4.jpg" width="200" height="200"/></a> </a> <cite>            </cite><a href="gogreen.html"><img src="img_fod.jpg" width="200" height="200"/></a>
<a class="concept">HEALTHCARE<a href="carrerguide.html"><marquee direction="right" class="scroll">Let's go view all</marquee></a>
</a><pre>
  <a href="gogreen.html"><img src="health4.jpg" width="200" height="200"/></a><cite>          </cite><a href="gogreen.html"><img src="health3.jpg" width="200" height="200"/> </a> <cite>            </cite><a href="gogreen.html"><img src="health2.jpg" width="200" height="200"/></a>

  <a class="concept">DREAMS A PART<a href="carrerguide.html"><marquee direction="right" class="scroll">Let's go view all</marquee></a>
</a><pre>
  <a href="gogreen.html"><img src="career_bg.png" width="200" height="200"/></a><cite>          </cite><a href="gogreen.html"><img src="career2.jpg" width="200" height="200"/> </a> <cite>            </cite><a href="gogreen.html"><img src="career3.png" width="200" height="200"/></a>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a class="concept">ABLITIES AND CAPABILITIES<a href="sports.html"><marquee direction="right" class="scroll">Let's go view all</marquee></a>
</a><pre>
  <a href="sports.php"><img src="kabaddi.jpg" width="200" height="200"/></a><cite>          </cite><a href="sports.php"><img src="volleyball2.jpg" width="200" height="200"/> </a> <cite>           </cite><a href="sports.php"><img src="football2.jpg" width="200" height="200"/></a>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a class="concept">REFERENCECENTER<a href="referencecenter.html"><marquee direction="right" class="scroll">Let's go view all</marquee></a>
</a><pre>
  <a href="referencecenter.html"> <img src="be4.jpg" width="200" height="200"/></a><cite>          </cite><a href="referencecenter.html"><img src="reference2.png" width="200" height="200"/> </a> <cite>          </cite><a href="referencecenter.html"><img src="logo.jpg" width="200" height="200"/></a>
</center>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $comment = $_POST['comment'];


    $sql = "INSERT INTO `homecomment` ( `fullname`, `comment`) VALUES ('$fullname', '$comment')";
    $result = mysqli_query($conn, $sql) or die($conn);
}
?>

   
      
<div style="text-align: center;"><a name="section-1cmnt"></a><div class="cmmntclose"><style>#media print {.cmmntclose{display: none;}}</style>
  <div class="form-group"><br><h4 style="color:white ;">Post Your Suggestion</h4><p style="color:white">(If you have any comments / suggestions on the above content, please post them here)</p></div></div>
  <form action="" method="post" style="border:1px solid #ccc;">
    <div class="form-group row">
      <div class="col-sm-10">
        <input type="hidden" name="page" id="page" class="form-control">
      </div>
    </div>
    <div class="cmmntclose">
      <style>
        #media print {
          .cmmntclose{display: none;}
          }
          </style>
          <div class="form-group row">
            <label for="fullname" > FullName</label>
            <div class="col-sm-10">
              <input placeholder=" fullname" name="fullname" required="" type="text" id="fullname" value="" >
            </div>
          </div>
          
            <label for="fullname" class="register_label form-label col-form-label col-sm-2">Your Message</label>
         
      <div class="col-sm-12">
            <textarea rows="10" cols="30" placeholder="comment here.............. or mail to econnect@gmail.com" name="comment" required="" id="comment" ></textarea>
            
        </div>
        <div class="form-group row"><div class="col-sm-10 offset-sm-2">
              </div><button type="submit" style="background-color: aqua; border-radius: 20px; width: 180px; height: 50px; font-size: 36; font-family: bold;" fdprocessedid="xrkr1k">Submit</button>
          </div>
        </div>
      </form>
    </div>
</body>
</html>