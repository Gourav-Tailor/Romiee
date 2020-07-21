<html>
<body bgcolor=#20afdf>
<head>
<meta name="viewport" content="width=device-width , user-scalable=no">
<?php
error_reporting(0);
?>

<style>
sbar{ position: fixed;
      top: 2px;
      left: 0%;
      width: 100%;
      height: 42px;
      background-color: #469cb9;
      z-index: 3;
    }
sbas{ position: relative;
      height: auto;
      width: 100%
    }
.div {
  font-size: 20px;
  background-color:  white;
  width: 80%;
  height: 40px;
  border-radius: 2px 2px 2px 2px;
  box-shadow: 0px 2px 0px 0px #469cb9;
    -webkit-transform: scaleX(1.04); 
  -moz-transform: scaleX(1.04);
  border-style: none;
  text-decoration: none;
 
  }
.div1 {position: relative;
  left: 15%;
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
  background: none;
  text-align: center;
}
durb {
   position: relative;
   right: 1%;
   top: 0%;
   border-style: none;
     border-radius: 0px 0px 0px 0px;
  float: right;
  width: auto;
  height: auto; 
  text-align: left;
}
nav {
   position: relative;
   right: 0%;
   top: 0%;
   float:left;
      border-style: none;
        border-radius: 5px;
  font-size: 10px;
  width: 100%;
  height: auto; 
  background: none;
  text-align: center;
    padding-top: 8px;
    padding-bottom: 8px;
    transform: scaleX(1.045); 

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
    line-height: 40%;
  text-align: left;
}
</style>
</head>
<sbar>
<input type="text" id="myInput" onkeyup="myFunction()" div class="div div1" maxlength="50" placeholder=" Romiee :Search videos....">
</sbar>
<sbas><br></sbas>
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
<a href='watch-mo.php?id=",$lust[$g][1],"' style='color:#20afdf'>
<imma1>
<img src='logo/",$lust[$g][1],"' width='auto' height='210px'>
<durb>
<h style='color:white;background:none;font-size:15px;align:right;margin-right:0%'>",$lust[$g][4],"</h>
</durb>
</imma1>
<imma2>
<p style='color:white;font-size:14px;text-align:left;margin-left:20px'><b>",$lust[$g][1],"</b></p>
<p style='color:white;font-size:12px;text-align:left;margin-left:20px'>",$lust[$g][2]," • ",$lust[$g][0]," views • ",$lust[$g][3],"</p>
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

