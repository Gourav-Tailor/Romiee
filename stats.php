<html>
<body>
<script>
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
    
window.location.replace("stats-mo.php");
}
</script>
<head>
<meta name="viewport" content="width=device-width,user-scalable=no">
<meta charset="UTF-8">
<link href="styleo.css" rel="stylesheet" type="text/css">
<?php
error_reporting(0);
session_start();
      $t3 = time();
      $_SESSION['time3'] = $t3 - $_SESSION['timein'];
?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
plota {
   position: absolute;
   right: 0px;
   top: 153px;
  font-size: 10px;
  float: right;
  width: 40%;
  height: 1000px; 
  background: none;
}
tabu {
   position: absolute;
   left: 0px;
   top: 153px;
  font-size: 10px;
  float: right;
  width: 60%;
  height: 1210px; 
  background: #469cb9;
  text-align: center;
}

svg text{display:none;}
svg g:hover text {display:block;}

</style>

</head>

<heado>
<a href="index.php" style='color:white;text-decoration:none'><h1 style="font-size:60px;color:white;text-align:left;margin-left:2%;letter-spacing:-5px">[_] Romiee</a></h1>
</heado>

<tabu>
<h2>Data About Videos</h2>
<table>
  <tr>
    <th>Video Title[Duration]</th>
    <th>Channel</th>
    <th>Total Hit(views)</th>
  </tr>
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

$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
if(!$pageWasRefreshed){
$time3 = $_SESSION['time3'];
$time2 = $_SESSION['time2'];
$time1 = $_SESSION['time1'];
$timeo = $time3 + $time2 + $time1;
if($timeo < 60){ $timef= $timeo."sec"; }
                   else { $timef= $timeo/60;
                      $timef = $timef."min";}
                     }
else { 
$time3 = 0;
$time2 = 0;
$time1 = 0;
$timef = '0 sec';
    }
                 
$tota = 0;
$axe = 45*$mo;
rsort($lust,SORT_REGULAR);
           for($g=0;$g<$mo;$g++){
                                 echo "<tr><td>",$lust[$g][1]," [",$lust[$g][4],"]</td>";
                                 echo "<td>",$lust[$g][2],"</td>";
                                 echo "<td>",$lust[$g][0],"</td></tr>";
                                 $tota = $tota + $lust[$g][0];
                                 
           }

                              echo "<tr><td></td>
                               <td>TOTAL</td>
                               <td>$tota</td></tr>
                                 <tr>
                                 
    <th>Your Video watch Time</th>
    <th>Search Time</th>
    <th>Total Time On Romiee</th>
  </tr>";
  
         echo "<tr><td>$time1 sec</td>
                               <td>$time2 sec</td>
                               <td>$timef</td></tr>
                               </table>
                                </tabu>
                                <plota>
                                  <svg height='$axe' width='$axe'>";
                                         
?> 
<?php
$cx = 0;
$cy = 0;

                 for($g=0;$g<$mo;$g++){         $r = ($lust[$g][0] /$tota)*$axe;
                                                $cx = ($cx + $r);
                                                $cy = $cy + $r;
                                                $toltext = $lust[$g][1];
                                 echo "<g><circle cx='$cx' cy='$cy' r='$r' fill='#20afdf'  stroke='black' stroke-width='0.5' data-label='Test-Label'></circle>
                                       <text cx='$cx' cy='$cy'>$toltext</text></g>";
                                                
                                 }
                                
?>

</svg>
<hr> 
<?php

$ttime  = $time1 + $time2 + $time3;
if($ttime != 0){ $spo1 = $axe/3;
                 $spo2 = $spo1*2;
                 $p1 = (($ttime-$time1)/$ttime)*$axe ;
                 $p2 = (($ttime-$time2)/$ttime)*$axe ;
             }
             else { echo "<h1 style='font-size:50px;text-align:center'>Sorry!you erased the data</h1>";}

      echo "<svg height='$axe' width='$axe'>";
      echo "<polyline points='0 $axe,$spo1 $p1,$spo2 $p2,$axe 0' style='fill:none;stroke:black;stroke-width:3' />";
      echo "</svg> ";
?>
<hr>
</plota>
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
      session_unset();
      session_destroy();
?>
</body>
</html>
