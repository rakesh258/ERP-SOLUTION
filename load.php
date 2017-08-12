 <!DOCTYPE html>
 <html>
<head>
<link rel="stylesheet" type="text/css" href="load_style.css">
<script src="myScript.js"></script>

<script type="text/javascript">
$(document).ready(function(){
 $("#load").click(function(){
  alert('hi');
  loadmore();
 });
});

function loadmore()
{
 var val = document.getElementById("result_no").value;
 $.ajax({
 type: 'post',
 url: 'fetch.php',
 data: {
  getresult:val
 },
 success: function (response) {
  var content = document.getElementById("result_para");
  content.innerHTML = content.innerHTML+response;

  // We increase the value by 2 because we limit the results by 2
  document.getElementById("result_no").value = Number(val)+2;
 }
 });
}
</script>

</head>

<body>

<center>
 <p id="heading">Load More</p>
 <div id="content">
  <div id="result_para">
  <?php
 $link = mysqli_connect('localhost','root','root','login_info');
 //$database = mysqli_select_db('login_info');

  
  $select = mysqli_query($link,"SELECT sno,name FROM login3 limit 0,2");
  while($row = mysqli_fetch_array($select))
  {
   echo "<p class='result'>".$row['sno']."<br>".$row['name']."</p>";
  }
  ?>
  <input type="hidden" id="result_no" value="2">
  <input type="button" id="load" value="Load More Results">
  </div>
 </div>
</center>

</body>
</html>