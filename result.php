<html>
<body bgcolor=#469cb9>
<head>
<meta name="viewport" content="width=device-width,user-scalable=no">
</head>
<script>
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
    
window.location.replace("result-mo.php");
}
</script>
<?php
error_reporting(0);
session_start();
?>

<style>
heado {
   position: relative;
   left: 0px;
   top: 0px;
  font-size: 10px;
  float: right;
  width: 100%;
  height: 152px; 
  background: 	linear-gradient(to bottom, #20afdf,#469cb9);
  text-align: left;
}
.div {
  font-size: 20px;

  background-color:  white;
  width: 25%;
  height: 40px;
  border-radius: 8px 2px 8px 2px;
 
  }
.div1 {position: absolute;
  right: 40%;
  top: 40%;
}

rbox {
   position: relative;
   left: 12%;
   top: 0px;
  font-size: 10px;
  float: left;
  width: 88%;
  height: 100%; 
  background: none;
  text-align: center;
  overflow: none;
}
nav {
   position: relative;
   right: 1%;
   top: 0%;
   float:left;
      border-style: none;
        border-radius: 5px;
  font-size: 10px;
  width: 350px;
  height: auto; 
  background: none;
  text-align: center;
    padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 50px;
    padding-left: 20px;
}
imma1 {
   position: relative;
   top: 0%;
   border-style: none;
     border-radius: 5px;
  float: top;
  width: 100%;
  height: auto; 
}
imma2 {
   position: relative;
   top: 0%;
   border-style: none;
     border-radius: 5px;
  float: bottom;
  width: 100%;
  height: auto; 
  background: none;
    line-height: 20%;
  text-align: left;
}
durb {
   position: relative;
   right: 0%;
   top: 0%;
   border-style: none;
     border-radius: 0px 0px 0px 0px;
  float: right;
  width: auto;
  height: auto; 
  text-align: left;
}
body {
  margin:0px;
  font-family:"Open Sans",sans-serif;
}
#context-menu {
  position:fixed;
  z-index:10000;
  width:150px;
  background: white;
  border-radius:5px;
  transform:scale(0);
  transform-origin:top left;
}
#context-menu.active {
  transform:scale(1);
  transition:transform 300ms ease-in-out;
}
#context-menu .item {
  padding:8px 10px;
  font-size:15px;
  color: black;
}
#context-menu .item:hover {
  background: #469cb9;
}
#context-menu .item i {
  display:inline-block;
  margin-right:5px;
}
#context-menu hr {
  margin:2px 0px;
  border-color:#469cb9;
}    
h1 {
  -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10+ and Edge */
  user-select: none; /* Standard syntax */
}
</style>
<heado>
<input type="text" id="myInput" onkeyup="myFunction()" div class="div div1" maxlength="50" placeholder=" Search videos....">

<a href="index.php" style='color:white;text-decoration:none'><h1 style="font-size:60px;color:white;text-align:left;margin-left:2%;letter-spacing:-5px">[_] Romiee</a></h1>
</heado>

<section id="myUL">
<rbox >

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
                     echo "<nav>
<a href='watch.php?id=",$lust[$g][1],"' style='color:#469cb9'>
<imma1>
<img src='logo/",$lust[$g][1],"' width='100%' height='200px'>
<durb>
<h style='color:white;background:none;font-size:15px;align:right;margin-right:4%'>",$lust[$g][4],"</h>
</durb>
</imma1>
<imma2>
<p style='color:white;font-size:20px;margin-left:20px'><b>",$lust[$g][1],"</b></p>
<p style='color:white;font-size:12px;margin-left:20px'>",$lust[$g][2],"</p>
<p style='color:white;font-size:12px;margin-left:20px'>",$lust[$g][0]," views•",$lust[$g][3],"</p>
</imma2>
</a>
</nav>
";
}
?>


</rbox>
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
<script>
function myFunction() {
    var input, filter, section, nav, p, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    section = document.getElementById("myUL");
    nav = section.getElementsByTagName("nav");
    for (i = 0; i < nav.length; i++) {
        p = nav[i].getElementsByTagName("p")[0];
        txtValue = p.textContent || p.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            nav[i].style.display = "";
        } else {
            nav[i].style.display = "none";
        }
    }
}
</script>
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
      $t2 = time();
      $_SESSION['time2'] = $t2 - $_SESSION['timein'];

?>
</body>
</html>

