<?php
 $link = mysqli_connect('localhost','root','root','login_info');
 
 $item_per_page = 5;

 $no = $_POST['getresult'];
 $select = mysqli_query($link,"SELECT sno,name FROM login3");
 while($row = mysqli_fetch_array($select))
 {
  echo "<p class='result'>".$row['sno']."<br>".$row['name']."</p>";
 }
?>