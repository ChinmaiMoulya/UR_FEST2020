<link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <title>yoUR Fest 2020</title>

<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<link rel='stylesheet' href='css/events.css'>
<style>
    @font-face {
  font-family: Ubuntu-Bold;
  src: url('../fonts/ubuntu/Ubuntu-Bold.ttf'); 
}
    .mbtn
{
    text-align: center;
}
    #bodyback{
       
    }
    *{
        font-family: Ubuntu-Bold;
    }
    #evbigname{
font-family: 'Lobster', cursive;
        font-size: 115px;
    }
</style>
<div id='bodyback'>
    <div id='body1'>
        <?php
        if(isset($_REQUEST['branch'])){
            $branch=$_REQUEST['branch'];
        }else{
            $branch="CSE-IT";
        }
            include 'topbar1.php';
        ?>
        <br>
        <div id="evchange">
        <p id='evbigname'>Event Details</p>
            <div class="mbtn">  
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
             <div class="btn-group" role="group" aria-label="Basic example">
       <input type="submit" class="btn btn-secondary btn-group-lg" name="branch" value="CULTURAL">
      <button type="button" class="btn btn-secondary btn-group-lg" onclick="ch1page();">DIPLOMA</button>
                 
    </div>
            
    <div class="btn-group" role="group" aria-label="Basic example">
      <input type="submit" class="btn btn-success btn-group-lg" name="branch" value="SHOWCASING SMART CITIES">
            </div>
    </form>  
            </div>
    
        </div>
    </div>
    <br><br>
    <div id='body2'>
        <?php
        echo "
        <iframe height='98.7%' width='100%' frameborder='0' src='eventslist.php?branch=$branch' name='elist'></iframe>";
            ?>
        
    </div>
</div>
<script>
    /*
setInterval(function(){
    jQuery("#evchange").load("evchange.php");
},1000);*/
    function ch1page(){
        location.replace("events.php?branch=DIPLOMA");
    }
</script>