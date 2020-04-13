<?php
include "topbar.php";
?>
<head>
    <title>yoUR Fest 2020</title>
    <link rel="stylesheet" type="text/css" href="css/technical.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
</head>
<style>
    #tname{
font-family: 'Lobster', cursive;
                font-size: 115px;
        text-decoration: none;
    }
    .card-header{
        text-align: center;
        font-size: 15px;
        font-weight:700;
        color:white;
        font-family: Ubuntu-Bold;
        background-color: #e41749;
    }
    p{
        font-size: 20px;
        font-weight:500;
        color:midnightblue;
    }
    .blockquote-footer{
        font-size: 20px;
        font-weight:500;
        color:#e41749;
    }
    .ec{
        background-color: #f4511e;
        color: white;
    }
</style>
<body>
    <div id="depch">
    <h2 id="tname">yoUR Fest 2020</h2>
    </div> 
    <div class="mbtn" style="margin-top:3%;">  
        <form action="events.php" method="post">
    <div class="btn-group" role="group" aria-label="Basic example">
        
      <input type="submit" class="btn btn-danger btn-group-lg" name="branch" value="CSE-IT">
      <input type="submit" class="btn btn-danger btn-group-lg" name="branch" value="ECE">
      <input type="submit" class="btn btn-danger btn-group-lg" name="branch" value="EEE">
      <input type="submit" class="btn btn-danger btn-group-lg" name="branch" value="MECH">
        <input type="submit" class="btn btn-danger btn-group-lg" name="branch" value="CIVIL">
        <input type="submit" class="btn btn-danger btn-group-lg" name="branch" value="CLUBS">
    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
      <input type="submit" class="btn btn-info btn-group-lg" name="branch" value="ENGINEERS KA MAHASANGRAM">
    </div>
    </form>    
    </div>
    <div class="mbtn" style="margin-top:6px;">
        <form action="events.php" method="post">
          <div class="btn-group" role="group" aria-label="Basic example">
       <input type="submit" class="btn btn-secondary btn-group-lg" name="branch" value="CULTURAL">
      <button type="button" id="ec" class="btn btn-secondary btn-group-lg" onclick="ch1page();">DIPLOMA</button>
    </div>
       
           <div class="btn-group" role="group" aria-label="Basic example">
      <input type="submit" class="btn btn-success btn-group-lg" name="branch" value="SHOWCASING SMART CITIES">
            </div>
             </form>
        
    </div>
    <br>
    <?php
include "bottombar.php";
?>
    <div id="details">
        <h3 style="margin-top:3%;text-align:center;text-decoration:underline;color:#e41749;">COORDINATORS</h3>
        <table align="center" style="margin-top:2%;">    
        <tr>
        <td>
            <div class="card">
        <div class="card-header">CIVIL DEPARTMENT</div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>
                    K.Satya Sai - Student coordinator
                </p>
                <p>
                    17NG5A0106
                </p>
                  <footer class="blockquote-footer">
                       9666212209
                </footer>
            </blockquote>
        </div>
        </div>
        </td>
        <td>
            <div class="card">
        <div class="card-header">MECHANICAL DEPARTMENT</div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>
                    K.Sai Kumar - Student coordinator
                </p>
                <p>
                    17NG5A0330
                </p>
                  <footer class="blockquote-footer">
                       8464021321
                </footer>
            </blockquote>
        </div>
        </div>
        </td>
        <td>
            <div class="card">
        <div class="card-header">EEE DEPARTMENT</div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>
                    S.Ramu - Student coordinator
                </p>
                <p>
                    17NG5A0221
                </p>
                  <footer class="blockquote-footer">
                       7993939339
                </footer>
            </blockquote>
        </div>
        </div>
        </td>
        <td>
            <div class="card">
        <div class="card-header">ECE DEPARTMENT</div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>
                    GSN.Tendulkar - Student coordinator
                </p>
                <p>
                    16NG1A0461
                </p>
                  <footer class="blockquote-footer">
                       8639364651
                </footer>
            </blockquote>
        </div>
        </div>
        </td>
        </tr>  
        </table>
        <table align="center" style="margin-top:2%;">   
         <tr>
        <td><div class="card">
        <div class="card-header">CSE DEPARTMENT</div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>
                    G.Y.N.Satwik - Student coordinator
                </p>
                <p>
                    16NG1A0514
                </p>
                  <footer class="blockquote-footer">
                       7981138937
                </footer>
            </blockquote>
        </div>
        </div></td>
        <td><div class="card">
        <div class="card-header">IT DEPARTMENT</div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>
                    K.Pujitha - Student coordinator
                </p>
                <p>
                    16NG1A1220
                </p>
                  <footer class="blockquote-footer">
                       9014908888
                </footer>
            </blockquote>
        </div>
        </div></td>
        <td><div class="card">
        <div class="card-header">DIPLOMA</div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>
                    N.Durga Prasad - Student coordinator
                </p>
                <p>
                    17466-EC-232
                </p>
                  <footer class="blockquote-footer">
                       9014164840
                </footer>
            </blockquote>
        </div>
        </div></td>
        <td><div class="card">
        <div class="card-header">1st YEAR-Science &amp; Humanities</div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>
                    M.Hari Krishna - Student coordinator
                </p>
                <p>
                    19NG1A0478
                </p>
                  <footer class="blockquote-footer">
                       7995234473
                </footer>
            </blockquote>
        </div>
        </div></td>
        </tr>  
    </table>
    </div>
    
</body>
<script>
    setInterval(function(){
        jQuery("#depch1").load("dtchange.php");
    },1000);
    function ch1page(){
        location.replace("events.php?branch=DIPLOMA");
    }
    function ch2page(){
        location.replace("index.php");
    }
    
</script>