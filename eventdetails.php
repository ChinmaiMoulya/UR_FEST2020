<?php
session_start();
?>
<style>
    @font-face {
  font-family: ub;
  src: url('fonts/ubuntu/Ubuntu-Bold.ttf'); 
}
    #te{
        margin-top: 15%;
    font-size: 40px;
    text-align: center;
    color: white;
    font-family: ub;
}
</style>
<?php
if(isset($_GET['eventname'])){
    $ename=$_GET['eventname'];
    if($ename=="CSE/IT-CODE ROYAL"){
            echo "<script>location.replace('cse/CODE ROYAL.php');</script>";
    }
    else if($ename=="CIVIL-3DMODELLING MANIA"){
            echo "<script>location.replace('civil/3DMODELLING MANIA.php');</script>";
    }else if($ename=="CIVIL-AUTOCAD"){
            echo "<script>location.replace('civil/AUTOCAD.php');</script>";
    }else if($ename=="CIVIL-BEST CONCRETE MAKER"){
            echo "<script>location.replace('civil/BEST CONCRETE MAKER.php');</script>";
    }else if($ename=="CIVIL-CLAY MODELLING"){
            echo "<script>location.replace('civil/CLAY MODELLING.php');</script>";
    }else if($ename=="CIVIL-PAPER PRESENTATION"){
            echo "<script>location.replace('civil/PAPER PRESENTATION.php');</script>";
    }else if($ename=="CIVIL-POSTER PRESENTATION"){
            echo "<script>location.replace('civil/POSTER PRESENTATION.php');</script>";
    }else if($ename=="CIVIL-PROJECT EXHIBITION"){
            echo "<script>location.replace('civil/PROJECT EXHIBITION.php');</script>";
    }else if($ename=="CIVIL-TECHNICAL QUIZ"){
            echo "<script>location.replace('civil/TECHNICAL QUIZ.php');</script>";
    }else if($ename=="CIVIL-BEST DESIGNER"){
            echo "<script>location.replace('civil/BEST DESIGNER.php');</script>";
    }else if($ename=="CSE-IT-BUILD THE WEB"){
            echo "<script>location.replace('cse/BUILD THE WEB.php');</script>";
    }else if($ename=="CSE-IT-CATCH THE BUG"){
            echo "<script>location.replace('cse/CATCH THE BUG.php');</script>";
    }else if($ename=="CSE-IT-CROSS WORD PUZZLE"){
            echo "<script>location.replace('cse/CROSS WORD PUZZLE.php');</script>";
    }else if($ename=="CSE-IT-CRYPT YOUR MIND"){
            echo "<script>location.replace('cse/CRYPT YOUR MIND.php');</script>";
    }else if($ename=="CSE-IT-DATA VISUALIZATION WITH R"){
            echo "<script>location.replace('cse/DATA VISUALIZATION WITH R.php');</script>";
    }else if($ename=="CSE-IT-GOOGLE MASTER"){
            echo "<script>location.replace('cse/GOOGLE MASTER.php');</script>";
    }else if($ename=="CSE-IT-GUESSTIMATE"){
            echo "<script>location.replace('cse/GUESSTIMATE.php');</script>";
    }else if($ename=="CSE-IT-MINUTE TO WIN IT"){
            echo "<script>location.replace('cse/MINUTE TO WIN IT.php');</script>";
    }else if($ename=="CSE-IT-POSTER PRESENTATION"){
            echo "<script>location.replace('cse/POSTER PRESENTATION.php');</script>";
    }else if($ename=="CSE-IT-PAPER PRESENTATION"){
            echo "<script>location.replace('cse/POWER POINT.php');</script>";
    }else if($ename=="CSE-IT-TECH SYNONYM"){
            echo "<script>location.replace('cse/TECH SYNONYM.php');</script>";
    }else if($ename=="CSE-IT-TECHNICAL JAM"){
            echo "<script>location.replace('cse/TECHNICAL JAM.php');</script>";
    }else if($ename=="CSE-IT-TECHNICAL QUIZ"){
            echo "<script>location.replace('cse/TECHNICAL QUIZ.php');</script>";
    }else if($ename=="CSE-IT-TECHNOTHON"){
            echo "<script>location.replace('cse/TECHNOTHON.php');</script>";
    }else if($ename=="ECE-CIRCUITRIX"){
            echo "<script>location.replace('ece/CIRCUITRIX.php');</script>";
    }else if($ename=="ECE-ELECTROSPECTION"){
            echo "<script>location.replace('ece/ELECTROSPECTION.php');</script>";
    }else if($ename=="ECE-MYSTERY BUSTERS"){
            echo "<script>location.replace('ece/MYSTERY BUSTERS.php');</script>";
    }else if($ename=="ECE-PAPER PRESENTATION"){
            echo "<script>location.replace('ece/PAPER PRESENTATION.php');</script>";
    }else if($ename=="ECE-POSTER PRESENTATION"){
            echo "<script>location.replace('ece/POSTER PRESENTATION.php');</script>";
    }else if($ename=="ECE-PROJECT PRESENTATION"){
            echo "<script>location.replace('ece/PROJECT EXHIBITION.php');</script>";
    }else if($ename=="ECE-TECHNICAL QUIZ"){
            echo "<script>location.replace('ece/TECHNICAL QUIZ.php');</script>";
    }else if($ename=="DIPLOMA-BLACK BOX(ECE)"){
            echo "<script>location.replace('diploma/BLACK BOX(ECE).php');</script>";
    }else if($ename=="DIPLOMA-PAPER PRESENTATION"){
            echo "<script>location.replace('diploma/PAPER PRESENTATION.php');</script>";
    }else if($ename=="DIPLOMA-POSTER PRESENTATION"){
            echo "<script>location.replace('diploma/POSTER PRESENTATION.php');</script>";
    }else if($ename=="DIPLOMA-PROJECT EXHIBITION"){
            echo "<script>location.replace('diploma/PROJECT EXHIBITION.php');</script>";
    }else if($ename=="DIPLOMA-TECHNICAL QUIZ"){
            echo "<script>location.replace('diploma/TECHNICAL QUIZ.php');</script>";
    }else if($ename=="EEE-PAPER PRESENTATION"){
            echo "<script>location.replace('eee/PAPER PRESENTATION.php');</script>";
    }else if($ename=="EEE-POSTER PRESENTATION"){
            echo "<script>location.replace('eee/POSTER PRESENTATION.php');</script>";
    }else if($ename=="EEE-PROJECT EXHIBITION"){
            echo "<script>location.replace('eee/PROJECT EXHIBITION.php');</script>";
    }else if($ename=="EEE-TECHNICAL QUIZ"){
            echo "<script>location.replace('eee/TECHNICAL QUIZ.php');</script>";
    }else if($ename=="EEE-ELECTRICAL TECHNOLOGY TODAY"){
            echo "<script>location.replace('eee/ELECTRICAL TECHNOLOGY TODAY.php');</script>";
    }else if($ename=="MECH-PAPER PRESENTATION"){
            echo "<script>location.replace('mech/PAPER PRESENTATION.php');</script>";
    }else if($ename=="MECH-POSTER PRESENTATION"){
            echo "<script>location.replace('mech/POSTER PRESENTATION.php');</script>";
    }else if($ename=="MECH-PROJECT EXHIBITION"){
            echo "<script>location.replace('mech/PROJECT EXHIBITION.php');</script>";
    }else if($ename=="MECH-TECHNICAL QUIZ"){
            echo "<script>location.replace('mech/TECHNICAL QUIZ.php');</script>";
    }else if($ename=="MECH-JET ROCKETS"){
            echo "<script>location.replace('mech/JET ROCKETS.php');</script>";
    }else if($ename=="ENGINEERS KA MAHASANGRAM-phase 1"){
            echo "<script>location.replace('ems/phase 1.php');</script>";
    }
    else if($ename=="ENGINEERS KA MAHASANGRAM-phase 2"){
            echo "<script>location.replace('ems/phase 2.php');</script>";
    }
    else if($ename=="ENGINEERS KA MAHASANGRAM-phase 3"){
            echo "<script>location.replace('ems/phase 3.php');</script>";
    }
    else if($ename=="ENGINEERS KA MAHASANGRAM-phase 4"){
            echo "<script>location.replace('ems/phase 4.php');</script>";
    }
    else if($ename=="CLUBS-BEST BUSINESS IDEA"){
            echo "<script>location.replace('clubs/BEST BUSINESS IDEA.php');</script>";
    }else if($ename=="CLUBS-CRAZY BRAINS"){
            echo "<script>location.replace('clubs/CRAZY BRAINS.php');</script>";
    }else if($ename=="LITERARY LADDER"){
            echo "<script>location.replace('clubs/LITERARY LADDER.php');</script>";
    }else if($ename=="CLUBS-MAD ADS"){
            echo "<script>location.replace('clubs/MAD ADS.php');</script>";
    }else if($ename=="CLUBS-SMART ALLAC"){
            echo "<script>location.replace('clubs/SMART ALLAC.php');</script>";
    }
    
}
else{
    if(isset($_SESSION['em'])){
        echo "<p id='te'>Select any round!</p>";
    }
    else{
    echo "<p id='te'>Select any event!</p>";
    }
}
?>