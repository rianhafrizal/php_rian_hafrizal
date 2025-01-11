<?php

$jml = $_GET['jml'];
$x= 0;
echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--)
{  
    //var_dump($a);
    $x = $x + $a;
    
    for ($y = $a; $y > 0; $y--)
  { 
    $x = $x+$y;
  
  }
  $nil = $x-$a;
  echo "</tr>\n";
  echo '<td colspan='."$jml".'> TOTAL : '."$nil".'</td>';
  echo "<tr>\n";
  $x=0;
  for ($b = $a; $b > 0; $b--)
  { 
    echo "<td> $b</td>";
  
  }


  echo "</tr>\n";

}
echo "</table>";

?>