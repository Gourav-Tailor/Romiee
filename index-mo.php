<html>
<body bgcolor=	#469cb9 >
<head>
<meta name="viewport" content="width=device-width , user-scalable=no">
<?php
error_reporting(0);
?>

<style>
info{ position: relative;
      top: 0px;
      height: 400px;
      width: 100%;
        padding-bottom: 20px;
    }
video { 
  -webkit-transform: scaleX(1.04); 
  -moz-transform: scaleX(1.04);
  z-index: 4;
  top: 0px;
  position: fixed;
  }

boxx {
 position: relative;
  font-size: 10px;
  float: right;
  width: 100%;
  height: auto; 
  background: none;
  text-align: left;
  padding-bottom: 20px;
}
noxx {
 position: relative;
  font-size: 15px;
  float: right;
  width: 60%;
  height: auto; 
  text-align: left;
      line-height: 40%;
}
.dropdown-button {
    background-color: white;
    color: black;
    padding: 8px 28px;
    font-size: 14px;
    border-radius: 10px 10px 10px 10px;
    border:0;
}
   video,video:active ,video:focus{ outline: none;}
   video::cue {
     background: #469cb9;
     color: white;
   }
   video::cue(b) {
     color: red;
   }
</style>
</head>
<info><br><br><br><br><br><br><br><br><br>><br><br></info><video width='100%' height='auto' poster='logo/' autoplay="autoplay" muted controlsList="nodownload" loop>
      <source src='Ads.mp4' type='video/mp4'>
  <source src='Ads.webm' type='video/webm'>
  Your browser does not support the video tag.
</video>
<hr>
<form>
<button type="submit" formaction="result-mo.php" method="get" class="dropdown-button dropdown">Search(video)</button>
<button type="button" onclick="alert('We defineatly going to help you! Contact us: 7073727480 | www.mail.romiee.com')" class="dropdown-button">Help?</button>
<button type="button" onclick="alert('Currently this video not available for download!')" class="dropdown-button dropdown">Download It</button>
</form>
<hr>
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
                      echo "
<a href='watch-mo.php?id=",$lust[$g][1],"' style='color:black'><boxx>
<img src='logo/",$lust[$g][1],"' width='150px' height='95px'><noxx><p style='color:white;text-align:left;margin-left:10px'><b>",$lust[$g][1],"</b></p>
<p style='color:white;font-size:10px;margin-left:10px'>",$lust[$g][2],"</p>
<p style='color:white;font-size:10px;margin-left:10px'>",$lust[$g][0]," views•",$lust[$g][3],"</p>
</noxx></boxx>
</a>
";
}
?>
<script>
         
         window.oncontextmenu = function(event) {
     event.preventDefault();
     event.stopPropagation();
     return false;
};
</script>

</body>
</html>
