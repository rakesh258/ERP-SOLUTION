<!DOCTYPE html>
<html>
<head>

<title> ERP </title>
<style type="text/css">
		{ * margin: 0; padding: 0; }

		body
		{
			font-family: arial;
			background-color: #ebebeb;
		}
        #header
		{
			background-color: black;
			height: 100px;
			width: 100%;
		}

		
		#logoArea
		{
			height: 100px;
			width: 300px;
			float : left;
			background-image: url('images.jpeg');
			background-size: cover;
		}

		.container
		{
			width: auto;
			height: 700px;
			margin: 0 auto;
		}

		#navArea
		{
			width: 100px;
			height: 50px;
			float: right;
			padding-top: 30px;
		}

		#nav
		{
			list-style: none;
			

		}

		#nav a
		{
			color: white;
			text-decoration: none;
		}

		#nav li
		{
			float: right;
			margin: 20px;
			background-color: #252525;
			padding: 20px;
			border:1px solid silver;
			border-radius: 5px;
		}

		#nav li:hover
		{
			background-color: gray;
		}

		.page
		{
			background-color: white;
			padding: 20px;

		}

        footer {
        padding: 1em;
        color: white;
        background-color: black;
        clear: left;
        text-align: center;
	
	</style>
</head>
<body>

	<div id="header">
		<div class ="container">
			<div id="logoArea"> </div>
			<div id="navArea"></div>
			<ul id="nav">
				<a href="facultylogin.php"> <li> FACULTY LOGIN </li> </a>
				<a href="studentlogin.php"> <li> STUDENT LOGIN </li> </a>
				<a href="registration1.php"> <li> REGISTER NOW </li> </a>
				<a href="list_item.php"> <li>REGISTERED USER </li> </a>
			</ul>
		</div>
	</div>

	<div id="mainArea">
		<div class="container page">
			<h2> WELCOME TO ERP SOLUTION</h2> 
			<button type="button"
            onclick="document.getElementById('demo').innerHTML = Date()">
            Click me to display Date and Time.</button>
            <p id="demo"></p>
            
		</div>
	</div>

<footer>Copyright &copy; ERP solution</footer>
</body>
</html>

