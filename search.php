<?php


$link=mysqli_connect("localhost", "root", "root", "test_encomage_db");


//var_dump($_POST);
$primer = mysqli_query($link,"SELECT * FROM `users` WHERE `First name` LIKE '%$_POST[search]%'" );

$i3=0;
while($row=mysqli_fetch_row($primer)){
    
    $i3++;
    $row2[$i]=[$row];
    echo ('<tr id="row">');
    for($i2=0;$i2<=5;$i2++){
        
   echo ('<th><p>'.$row2[$i][0][$i2].'</p></th>');
   
   }
  echo ('<th id="edit"><h1 class=edit id=edit'.$i3.'>Edit</h1><h1 class=save id=save'.$i3.'>Save</h1></th>');
  
   echo ('</tr>');
}


?>