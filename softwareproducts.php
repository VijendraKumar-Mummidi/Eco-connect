
<?php
include('connect.php');
?>
<html>
<head>
<title>ADVERTISE</title>
<style>

*{
  margin: 0%;
  
    
    }
body {
background-image:url('homebg.jpg');
 background-size:cover;
}
.para {
background-color: blue;
font-family: bold;

  color: white;
width: 1600px ;
height: 36px ;
padding-top: 20;
padding-right: 25 ;
padding-left: 10 ;

padding-bottom: 10 ;
}

.concept  {
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
  background-color: #f41e1e;
  font-family: arial, san-serif;
  color: white; 

}
textarea::placeholder {
	  color: black;
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: red;
}

</style>
</head>
<body style="background-image:url('rs1.jpeg');">
<pre><span class= "para"><button onclick = "window.location.href ='review.php';" class="button2"><span>HOME</span></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;  <button onclick = "window.location.href ='softwareproducts.php';" class="button3"><span>SOFTWARE PRODUCTS</span></button>&emsp;&emsp; &emsp;&emsp; &emsp;&emsp; <button onclick = "window.location.href ='lecturer_signin.php';" class="button2"><span>LOGIN</span></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</span></pre>
   


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $comment = $_POST['comment'];


    $sql = "INSERT INTO `comment2` ( `comment`) VALUES ('$comment')";
    $result = mysqli_query($conn, $sql) or die($conn);
}
?>

   
      
<div><a name="section-1cmnt"></a><div class="cmmntclose"><style>#media print {.cmmntclose{display: none;}}</style>
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
         
          
            <label for="fullname" class="register_label form-label col-form-label col-sm-2" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;" >Your Rating for softwareproducts</label>
         
      <div class="col-sm-12">
     <p style="background-color: #FFFFFF; width:fit-content;" > <img src="whitestar.jpg" width="50" height="50"/> <img src="whitestar.jpg" width="50" height="50"/> <img src="whitestar.jpg" width="50" height="50"/> <img src="whitestar.jpg" width="50" height="50"/> <img src="whitestar.jpg" width="50" height="50"/></p>
      <br>
      
      <label style="font-size: 20px; color: black ; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> working properly:</label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label style="font-size: 20px; color: black ; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> performance:</label><br>
   
      <br>
      
      <textarea rows="3" cols="60" placeholder="comment here.............. " name="comment" required="" id="comment" ></textarea> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp; &emsp;&emsp;&emsp;<textarea rows="3" cols="60" placeholder="comment here.............. " name="comment" required="" id="comment" ></textarea>
     <br>
     <br>
     <label style="font-size: 20px; color: black ; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> power consumption:</label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <label style="font-size: 20px; color: black ; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> accuracy</label><br>
   
      <br>
      
      <textarea rows="3" cols="60" placeholder="comment here.............. " name="comment" required="" id="comment" ></textarea> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp; &emsp;&emsp;&emsp;<textarea rows="3" cols="60" placeholder="comment here.............. " name="comment" required="" id="comment" ></textarea>
     <br>
     <br>
      
      <label style="font-size: 20px; color: black ; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> input-output:</label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <label style="font-size: 20px; color: black ; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> integrity</label><br>
   
      <br>
      
      <textarea rows="3" cols="60" placeholder="comment here.............. " name="comment" required="" id="comment" ></textarea> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp; &emsp;&emsp;&emsp;<textarea rows="3" cols="60" placeholder="comment here.............. " name="comment" required="" id="comment" ></textarea>
     <br>
        <h3> OTHERS:</h3>  <textarea rows="7" cols="50" placeholder="comment here.............. " name="comment" required="" id="comment" ></textarea>
            
        </div>
        <div class="form-group row"><div class="col-sm-10 offset-sm-2">
              </div><button type="submit" style="background-color: aqua; border-radius: 20px; width: 180px; height: 50px; font-size: 36; font-family: bold;" fdprocessedid="xrkr1k">Submit</button>
          </div>
        </div>
      </form>
    </div>
</body>
</html>