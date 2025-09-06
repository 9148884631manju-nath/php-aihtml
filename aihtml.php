<?php
//AUG. 2025
//AIHTML beta 0.1 
//Developed and code designed by Manjunath K, 9343945143
//coding-infi.in
namespace Aihtml;
class Aihtml{
 private $fileName='';
 private $errors=array("FILE READ ERROR");
 public function __construct($fileName){
  $this->fileName = $fileName;
 }
 public function readHtml(){
  $res="";$data=array();
  $error=$this->errors;
  if(file_exists($this->fileName))
  {
    $fo=fopen($this->fileName,"r");
    if($fo){
      while(!feof($fo)){
          $rf[]=rtrim(fgets($fo));
        }
      for($r=0;$r<count($rf);$r+=1)
      {
        $val = strspn($rf[$r]," ");       
        switch($val) 
        { 
        case 1: 
          echo "<h1>".$rf[$r]."</h1>"; 
        break;
        case 2: 
          echo "<h2>".$rf[$r]."</h2>";
        break;
        case 3: 
          echo "<h3>".$rf[$r]."</h3>";
        break;
        case 4: 
          echo "<h4>".$rf[$r]."</h4>";
        break;
        case 5: 
          echo "<h5>".$rf[$r]."</h5>";
        break;
        case 6: 
          $dotlist = explode("|",ltrim($rf[$r]));
          echo "<ul>";
          for($ol=0;$ol<count($dotlist);$ol+=1)
          {
            echo "<li>".$dotlist[$ol]."</li>";
          }
          echo "</ul>"; 
        break; 
        case 7:
          $ordlist = explode("|",ltrim($rf[$r]));
          echo "<ol>";
          for($ol=0;$ol<count($ordlist);$ol+=1)
          {
            echo "<li>".ltrim($ordlist[$ol])."</li>";
          }
          echo "</ol>"; 
        break;
        case 8: 
          $pst=explode("|",ltrim($rf[$r]));
          echo "<img class='pimg' src='".$pst[0]."' alt='".$pst[1]."' longdesc='".$pst[2]."' width='".$pst[3]."' height='".$pst[4]."' align='".$pst[5]."' />"; 
        break;
        case 9: 
          $ula=explode('|',$rf[$r]);
          echo $ula[0]."<a class='".$ula[4]."' href='".$ula[2]."' target='".$ula[3]."'>".$ula[1]."</a>".$ula[5];
          break; 
        case 10:
          $ifr=explode('|',$rf[$r]); ?><iframe src="<?= $ifr[0] ?>" frameborder="0" width="<?= $ifr[1] ?>" height="<?= $ifr[2] ?>"></iframe>
          <?php 
        break;
        default: 
        echo "<p>".$rf[$r]."</p>"; 
        break; 
        } 
      }
    }
    else
    {
      $res="File Read error or not found";
    }
  }
  else
  {
    $res = "File not found ".$this->fileName;
  }

  return $res;
 }
}
?>