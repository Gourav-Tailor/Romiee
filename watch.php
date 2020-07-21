<html>
<body bgcolor=#469cb9 >
<script>
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
    
window.location.replace("watch-mo.php");
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

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];



    echo "<video id='vidp' width='100%' height='700' poster='logo/$id' controlsList='nodownload' autoplay='autoplay' loop>
        <source src='videos/$id' type='video/mp4'>
  <source src='videos/$id' type='video/webm'>
  Your browser does not support the video tag.
</video>
<skipp>
<button onclick='playPause()' type='button'><b>HANG</b> ON</button>
</skipp>
<toll>
<p style='color:black;text-align:left;margin-left:20px;font-size:25px'><b>$id </b>|<sup><i>Title</i></sup></p>
</toll>";

$myfile = fopen("description/$id", "r") or die("Unable to open file!");
echo "<desc>
<p style='color:grey;text-align:right;margin-right:30px;font-size:20px'><b>Description</b>|<sup>words-",filesize("description/$id"),"</sup></p>
<p style='text-align:left;margin-left:5px;font-size:20px'>",fread($myfile,10000),"</p>
<p style='color:grey;text-align:right;margin-right:30px;font-size:15px;font-family:veranda'><b>Romiee|(c) Copyright 2018-20</b></p></desc>";
fclose($myfile);

}

?>
<?php
   if(isset($_GET['id'])){
    $idl = $_GET['id'];
     
 function replace_string_in_file($filename, $string_to_replace, $replace_with){
    $content=file_get_contents($filename);
    $content_chunks=explode($string_to_replace, $content);
    $content=implode($replace_with, $content_chunks);
    file_put_contents($filename, $content);
}
$filename="viewson.txt";
$i = 0;
$lines = file($filename);
$m = count($lines);
for($t=0;$t<$m;$t++){
if(strpos($lines[$i], $id) !== false){
    
    $ido = $i;
    break;
} 
else {$i++;}
}
$strlo = $lines[$ido];
$dirs = explode("//", $strlo);
$vova = $dirs[1];
$bova = $dirs[2];
$dura = $dirs[3];
$nova = $dirs[4];
$numba = number_format($nova);
$numba++;
$string_to_replace="$strlo";
$replace_with="$idl//$vova//$bova//$dura//$numba\n";
replace_string_in_file($filename, $string_to_replace, $replace_with);
echo "<hill>
<p style='color:black;text-align:left;margin-left:20px;font-size:20px;'> $numba |<sup><i> Views</i></sup></p>
</hill>";

}
?>

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
           if( $lust[$g][1] != $idl ){
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
}}
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

function playPause(){
var vid = document.getElementById("vidp");

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
<?php 
      $t1 = time();
      $_SESSION['time1'] = $t1 - $_SESSION['timein'];
      
?>
</body>
</html>

