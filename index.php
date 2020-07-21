<html>
<body bgcolor=	#469cb9 >
<script>
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
    
window.location.replace("index-mo.php");
}
</script>

<head>
<meta name="viewport" content="width=device-width,user-scalable=no">
<meta charset="UTF-8">
<link href="styleo.css" rel="stylesheet" type="text/css">
</head>
<?php
error_reporting(0);
session_start();
?>


<plyr>


<video id="ads" width='100%' height='700' muted autoplay="autoplay" loop controlsList="nodownload">
        <source src='Ads.mp4' type='video/mp4'>
  <source src='Ads.webm' type='video/webm'>
</video>
<skipp>
<button onclick="playPause()" type="button"><b>HANG</b> ON</button>
<script>
function playPause(){
var vid = document.getElementById("ads");

                     if(vid.paused){
                     vid.play();
                     $('.pause-btn').show();
                     $('.play-btn').hide();
                     }
                     else{ vid.pause();
                          $('.play-btn').show();
                          $('.pause-btn').hide();
                         }
                   }

</script>
</skipp>
<toll>
<p style="color:black;text-align:left;margin-left:20px;font-size:25px"><b> About Romiee|</b><sup><i>Title</i></sup></p>


</toll>
<hill>
<p style="color:black;text-align:left;margin-left:30px;font-size:20px;"> Advertisment|<sup><i>About</sup></i></p>
</hill>


<desc>
<p style="color:grey;text-align:right;margin-right:30px;font-size:20px"><b>Description</b></p>
<p style="text-align:left;margin-left:5px;font-size:20px">This video gonaa give overview of this website and whats the mission of this website so watch it if you need to upload something on this
website.</p>
<p style="color:grey;text-align:right;margin-right:30px;font-size:15px;font-family:veranda"><b>Romiee | (c) Copyright 2018-20</b></p>
</desc>
</plyr>
<section>
<nav1>

<?php
                              $mo = 0;
                              $lust = array();
                             $filename=fopen("viewson.txt","r");
                             $fileo = file("viewson.txt");
                              for($x=0;$x<sizeof($fileo);$x++){ 
                                                             $lines = $fileo[$mo]; 
                                                           $dirs = explode("//", $lines);
                       $files = $dirs[0];
                       $vova = $dirs[1];
                       $nova = $dirs[4];
                       $bova = $dirs[2];
                       $dura = $dirs[3];
                       $mo++;
                                             $row = array("id"=>"$files");
                       $lust[$mo] = array($nova,$files,$vova,$bova,$dura);
                                                       
                                            }
?> 
<?php

  rsort($lust,SORT_REGULAR);
           for($g=0;$g<$mo;$g++){
                     echo "<nav2>
<a href='watch.php?id=",$lust[$g][1],"' style='color:black'>
<imma1>
<img src='logo/",$lust[$g][1],"' width='99%' height='105px'>
</imma1>
<imma2>
<p style='font-size:15px;margin-left:20px'><b>",$lust[$g][1],"</b></p>
<p style='font-size:12px;margin-left:20px'>",$lust[$g][2],"</p>
<p style='font-size:12px;margin-left:20px'>",$lust[$g][0]," views•",$lust[$g][3],"</p>
</imma2>
</a>
</nav2>
";
}
?>
</nav1>
</section>
<?php        $tomo = time();
             $dato = date("Y-m-d",$tomo);
             
       $ip = $_SERVER['REMOTE_ADDR'];     $cookie_name = $ip."Romiee-User";
       $ipc = explode(".", $ip);
       
       if($ipc[0]='157' && $ipc[1]='47' && $ipc[2]='141'){
                                                            $cookie_value = "JioMan"; }
       elseif($ipc[0]='192' && $ipc[1]='168'){
                                                            $cookie_value = "BSNLMan"; }
       
       else { $cookie_value = "Mastmola";}
       

       setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
       if(!isset($_COOKIE[$cookie_name])){
                                           
                                         
                               echo "<div id='context-menu'>
                                     <div class='item'>
                                      <i class='fa fa-cut'></i>user-$cookie_value";
                              echo "  </div>
                                     <div class='item'>
                                     <i class='fa fa-clone'></i> Copy
                                     </div>
                                     <div class='item'>
    <i class='fa fa-paste'></i> Paste
  </div>
  <div class='item'>
    <i class='fa fa-trash-o'></i> Delete
  </div>
  <hr>
  <div class='item'>
    <i class='fa fa-refresh'></i> $dato
  </div>
  <div class='item'>
    <i class='fa fa-times'></i> $ip
  </div>
</div>";}
?>
          

  
<heado>
<a href="index.php" style='color:white;text-decoration:none'><h1 style="font-size:60px;color:white;text-align:left;margin-left:2%;letter-spacing:-5px">[_] Romiee</a></h1>
<br>
<bill>
<form>
<button type="submit" formaction="result.php" method="get" ><b>Search</b></button>
 <button type="submit" formaction="stats.php" method="get" ><b>Stats</b></button>
<button type="button" onclick="alert('We defineatly going to help you! Contact us: 7073727480 | www.mail.romiee.com')" ><b>Help?</b></button>
</form>
</bill>
</heado>
<script>
window.addEventListener("contextmenu",function(event){
  event.preventDefault();
  var contextElement = document.getElementById("context-menu");
  contextElement.style.top = event.offsetY + "px";
  contextElement.style.left = event.offsetX + "px";
  contextElement.classList.add("active");
});
window.addEventListener("click",function(){
  document.getElementById("context-menu").classList.remove("active");
});


                                
</script>
<?php 
      $ti = time();
      $_SESSION['timein'] = $ti;
?>
</body>
</html>

