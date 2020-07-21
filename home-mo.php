<html>
<body bgcolor=#20afdf>
<head>
<meta name="viewport" content="width=device-width , user-scalable=no">
<?php
error_reporting(0);
?>

<style>
div.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background-color: none;
  padding: 0px;
  font-size: 20px;
  z-index: 2;
}
.div {
  font-size: 20px;
  background-color:  white;
  width: 100%;
  height: 40px;
  border-radius: 10px 10px 10px 10px;
  box-shadow: 0px 0px 0px 0px #469cb9;
    -webkit-transform: scaleX(1.04); 
  -moz-transform: scaleX(1.04);
 
  }
.div1 {position: relative;
  left: 0px;
  top: 0px;
}

rbox {
   position: relative;
   left: 0px;
   top: 10px;
  font-size: 10px;
  float: right;
  width: 100%;
  height: 800px; 
  background: #469cb9;
  text-align: center;
  overflow: hidden;
}
nav {
   position: relative;
   right: 1%;
   top: 10px;
      border-style: ridge;
        border-radius: 4px;
  float: right;
  width: 100%;
  height: 105px; 
  background: none;
  text-align: right;
}
imma1 {
   position: absolute;
   left: 0%;
   top: 0px;
   border-style: none;
     border-radius: 4px;
  width: 30%;
  height: 100%; 
  text-align: right;
}
imma2 {
   position: absolute;
   right: 0%;
   top: 0px;
   border-style: none;
     border-radius: 4px;
  width: 70%;
  height: 100%; 
  background: none;

}
</style>
</head>
<div class="sticky">
<input type="text" id="myInput" onkeyup="myFunction()" div class="div div1" maxlength="50" placeholder=" Romiee :Search videos....">
</div>

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
<a href='watch-mo.php?id=",$lust[$g][1],"' style='color:black'>
<imma1>
<img src='logo/",$lust[$g][1],"' width='110px' height='100px'>
</imma1>
<imma2>
<p style='color:white;font-size:15px;text-align:left;margin-left:12px'><b>",$lust[$g][1],"</b></p>
<p style='color:white;font-size:10px;text-align:left;margin-left:12px'>",$lust[$g][2],"</p>
<p style='color:white;font-size:10px;text-align:left;margin-left:12px'>",$lust[$g][0]," views•",$lust[$g][3],"</p>
</imma2>
</a>
</nav>
";
}
?>

</rbox>
</section>
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

window.oncontextmenu = function(event) {
     event.preventDefault();
     event.stopPropagation();
     return false;
};
</script>
</body>
</html>

