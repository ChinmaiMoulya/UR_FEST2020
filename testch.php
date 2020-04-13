<link rel='stylesheet' type='text/css' href='css/bottombar.css'>
<?php
date_default_timezone_set('Asia/Calcutta');
$datetime1 = strtotime('04 Jan 2020 09:00:00');
$datetime2 = strtotime(date('d M Y H:i:s'));
$secs = $datetime1 - $datetime2;
$min = (int)($secs / 60);
$secs=$secs % 60;
$hours=(int)($min / 60);
$min=$min % 60;
$days=(int)($hours / 24);
$hours=$hours % 24;

echo "<nav class='navbar navbar-expand-lg navbar-light  bg-light'>
<div class='navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2'>
        <ul class='navbar-nav mr-auto'>
            <li class='nav-item active'>
                <a class='nav-link' id='textnavbar'>03-01-2020 <br>TECHNICAL</a>
            </li>
        </ul>
    </div>
    <div class='mx-auto order-0'>
        <a class='navbar-brand mx-auto' href='#' id='textnavbar1'><font color='#f4511e'>$days days</font>/<font color='#00695c'>$hours hours</font>/<font color='#283593'>$min minutes</font>/<font color='#c62828'>$secs seconds</font></a>
    </div>
    <div class='navbar-collapse collapse w-100 order-3 dual-collapse2'>
        <ul class='navbar-nav ml-auto'>
            <li class='nav-item'>
                <a class='nav-link' id='textnavbar'>04-01-2020 <br>CULTURAL</a>
            </li>
         </ul>
    </div>
</nav> ";
?>