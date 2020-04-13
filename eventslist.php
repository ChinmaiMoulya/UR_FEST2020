<?php
session_start();
?>
<style>
    @font-face {
  font-family: Ubuntu-Bold;
  src: url('fonts/ubuntu/Ubuntu-Bold.ttf'); 
}
    #back{
        background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }   
    p,a{
        font-family: Ubuntu-Bold;
        font-size: 20px;
        color:mediumvioletred;
    }
    .text-muted{
        font-size: 17px;
    }
    .card-body{
        background-color:#d6e5fa; 
    }
</style>
<body>
<div id="back">
<?php
    include "styles.php";
    $b=$_GET['branch'];
    $cse=array("CODE ROYALE","PAPER PRESENTATION","POSTER PRESENTATION","TECHNICAL QUIZ","CROSS WORD PUZZLE","CRYPT YOUR MIND","MINUTE TO WIN IT","TECHNOTHON","GOOGLE MASTER","TECH SYNONYM","TECHNICAL JAM","DATA VISUALIZATION WITH R","BUG SMASH CODE","BUILD THE WEB","GUESSTIMATE");
    $ece=array("CIRCUITRIX","ELECTROSPECTION","TECHNE PARADY","MYSTERY BUSTERS","PAPER PRESENTATION","POSTER PRESENTATION","PROJECT EXHIBITION","TECHNICAL QUIZ");
    $eee=array("TECHNICAL QUIZ","PAPER PRESENTATION","POSTER PRESENTATION","PROJECT EXHIBITION","ELECTRICAL TECHNOLOGY TODAY");
    $mech=array("TECHNICAL QUIZ","PAPER PRESENTATION","POSTER PRESENTATION","PROJECT EXHIBITION","JET ROCKETS");
    $civil=array("3DMODELLING MANIA","BEST DESIGNER","BEST CONCRETE MAKER","PAPER PRESENTATION","TECHNICAL QUIZ","POSTER PRESENTATION","PROJECT EXHIBITION","AUTOCAD","CLAY MODELLING");
    $clubs=array("BEST BUSINESS IDEA","SMART ALLAC","MAD ADS","CRAZY BRAINS","LITERARY LADDER");
    $cul=array("TELUGU AMMAYI","DANCING","DUBSMASH","RANGOLI","SHORT FILM","SINGING","SPOT PHOTOGRAPHY","TALKTHON");
    $dip=array("TECHNICAL QUIZ","PAPER PRESENTATION","POSTER PRESENTATION","PROJECT EXHIBITION","BLACK BOX(ECE)");
    $ems=array("phase 1","phase 2","phase 3","phase 4");
    $kaya=array("SEMINAR","PAPER PRESENTATION","POSTER PRESENTATION","QUIZ","SMART CITY PICTURE SPEAKS");
    $usearr=array();
    if($b=="CSE-IT"){
        $usearr=$cse;$_SESSION["em"]=null;
    }
    else if($b=="ECE"){
        $usearr=$ece;$_SESSION["em"]=null;
    }
    else if($b=="EEE"){
        $usearr=$eee;$_SESSION["em"]=null;
    }
    else if($b=="MECH"){
        $usearr=$mech;$_SESSION["em"]=null;
    }
    else if($b=="CIVIL"){
        $usearr=$civil;$_SESSION["em"]=null;
    }
    else if($b=="CLUBS"){
        $usearr=$clubs;$_SESSION["em"]=null;
    }
    else if($b=="DIPLOMA"){
        $usearr=$dip;
        $_SESSION["em"]=null;
    }
    else if($b=="CULTURAL"){
        $usearr=$cul;
        $_SESSION["em"]=null;
    }
    else if($b=="ENGINEERS KA MAHASANGRAM"){
        $usearr=$ems;
        $_SESSION["em"]=1;
    }
    else if($b=="SHOWCASING SMART CITIES"){
        $usearr=$kaya;
        $_SESSION["em"]=null;
    }
    $lena=sizeof($usearr);
    ?>
    <br><br>
    <main role="main">
     <div class="album py-5">
        <div class="container">

          <div class="row">
    <?php
        for($i=0;$i<$lena;$i++){
            echo "<div class='col-md-4'>
              <div class='card mb-4 shadow-sm'>
                <div class='card-body'>
                    <blockquote class=b'lockquote'>
                  <p class='card-text'>$usearr[$i]</p>
                    </blockquote>
                  <div class='d-flex justify-content-between align-items-center'>
                    <div class='btn-group'>
                      <a class='btn btn-sm btn-outline-success' target='_top' href='$b/$usearr[$i].php' type='button'>View Details</a>
                    </div>
                    <small class='text-muted'>Registration fee:";
            if($b!="SHOWCASING SMART CITIES")
            {
                if($b=="CLUBS")
                {
                    if($usearr[$i]=="SMART ALLAC")
                    {
                        echo "30/-";
                    }
                    else
                    {
                        echo "100/-";
                    }
                    
                }
                else if($b=="ENGINEERS KA MAHASANGRAM"){
                    if($usearr[$i]=="phase 1"){
                        echo "100/-";
                    }
                    else{
                        echo "0/-";
                    }
                }
                else
                {
                    echo "100/-";
                }
                
            }
            else
            {
                echo "0/-";
            }
            if($b!="CULTURAL"){
                if($usearr[$i]!="phase 4"){
                echo "<br>~3rd";}
                else{
                    echo "<br>~4th";
                }
            }
            else{
                echo "<br>4th";}
            echo " Jan</small>
                  </div>
                </div>
              </div>
            </div>";
        }
    ?>
               </div>
        </div>
      </div>

    </main>
</div>
</body>