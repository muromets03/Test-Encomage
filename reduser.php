<?php

$link=mysqli_connect("localhost", "root", "root", "test_encomage_db");




$primer = mysqli_query($link,"UPDATE `users` SET `First Name`= '$_POST[first_name]' , `Last Name` = '$_POST[last_name]', `Email`= '$_POST[email]', `Create data`= '$_POST[create_data]', `Update data`= '$_POST[update_data]'  WHERE `id` = '$_POST[id]'");



?>