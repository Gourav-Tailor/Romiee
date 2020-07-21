<html>
<body  bgcolor=#469cb9 >
<head>
<meta name="viewport" content="width=device-width,user-scalable=no">
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

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    


    echo "<info><br><br><br><br><br><br><br><br><br>><br><br></info><video width='100%' height='auto' poster='logo/$id' autoplay='autoplay' controls controlsList='nodownload' loop>
        <source src='videos/$id' type='video/mp4'>
  <source src='videos/$id' type='video/webm'>
  Your browser does not support the video tag.
</video>
<p style='color:white;text-align:left;margin-left:10px;font-size:15px'><b>  $id </b>|<sup><i>Title</i></sup></p>";

$myfile = fopen("description/$id", "r") or die("Unable to open file!");
echo "
<p style='color:white;text-align:right;margin-right:10px;font-size:10px'><b>Description</b>|<sup>words-",filesize("description/$id"),"</sup></p>
<p style='color:white;text-align:left;margin-left:5px;font-size:10px'>",fread($myfile,500),"</p>";
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
$i = 0; $ido = 0;
$lines = file($filename);
$m = count($lines);
for($t=0;$t<$m;$t++){
if(strpos($lines[$i], $id) !== false){
    
    $ido = $i;
    break;
}
else{ $i++;}
}
$strlo = $lines[$ido];
$dirs = explode("//", $strlo);
$vova = $dirs[1];
$bova = $dirs[2];
$nova = $dirs[4];
$dura = $dirs[3];
$numba = number_format($nova);
$numba++;
$string_to_replace="$strlo";
$replace_with="$idl//$vova//$bova//$dura//$numba\n";
replace_string_in_file($filename, $string_to_replace, $replace_with);
echo "
<p style='color:white;text-align:right;margin-right:5px;font-size:10px;'><b> $numba </b>|<sup><i> Views</i></sup></p>";

}
?>
<hr>
<form>
<button type="submit" formaction="result-mo.php" method="get" class="dropdown-button dropdown">Search(video)</button>
<button type="button" onclick="alert('We defineatly going to help you! Contact us: 7073727480 | www.mail.romiee.com')" class="dropdown-button dropdown">Help?</button>
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
           if( $lust[$g][1] != $idl ){
                      echo "
<a href='watch-mo.php?id=",$lust[$g][1],"' style='color:black'><boxx>
<img src='logo/",$lust[$g][1],"' width='150px' height='95px'><noxx><p style='color:white;text-align:left;margin-left:10px'><b>",$lust[$g][1],"</b></p>
<p style='color:white;font-size:10px;margin-left:10px'>",$lust[$g][2],"</p>
<p style='color:white;font-size:10px;margin-left:10px'>",$lust[$g][0]," views•",$lust[$g][3],"</p>
</noxx></boxx>
</a>
";
}}
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
