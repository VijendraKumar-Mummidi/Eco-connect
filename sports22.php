<?php
include('connect.php');
?>
<html>

<head>
  <title>ADVERTISE</title>
  <style>
    * {
      margin: 0%;


    }

    .body {
      background-image: url('jet.jpg');
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

    .button20 {
      border-radius: 10px;
      background-color: blue;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 28px;
      padding: 1px;
      width: 200px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 0px;
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

<body style="background-image:url('Fu.jpg');">
  <pre><span class= "para"><button onclick = "window.location.href ='home.html';" class="button2"><span>HOME</span></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <button onclick = "window.location.href ='gogreen.html';" class="button2"><span>GOGREEN</span></button>&emsp;&emsp; <button onclick = "window.location.href ='healthcare.html';" class="button2"><span>HEALTH CARE</span></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button onclick = "window.location.href ='carrerguide.html';" class="button2"><span>CARRER GUIDE</span></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <button onclick = "window.location.href ='sports.php';" class="button2"><span>SPORTS</span></button> <button  onclick = "window.location.href ='referencecenter.html';"class="button3"><span>REFERENCE CENTER</span></button> </span></pre>


  <center>
    <a class="concept">ABLITIES AND CAPABILITIES<a href="gogreen.html">
        <marquee direction="right" class="scroll">Let's go view all</marquee>
      </a>
    </a>
    <pre>
<span style="font-size: 20;">
<table border="10"  style=" font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
<tr>
  <th>TOURNAMENT NAME</th>
  <th>NUMBER</th>
 
  <th style="width:70%">DESCRIPTION</th>

</tr>
<?php
$sql = "SELECT * FROM `register` ORDER BY `created_at` DESC";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?= $row['name'] ?></td>
<td><?= $row['number'] ?></td>

<td><?= $row['bloodgroup'] ?></td>
  
</tr>
<?php
  }
} else {
?>

<tr>
  <td> - </td>
  <td> - </td>
  <td> - </td>
  <td> - </td>
  <td> - </td>
  <td> - </td>
    
  </tr><?php
      }
        ?>
      </table>
    </span>
</center>
<pre style="text-align: right;"><button onclick = "window.location.href ='tournamentregistration.php';" class="button20"><span>CREATENEW </span></button>
</body>
</html>