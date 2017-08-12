<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 260px;
    margin: 0;
    padding: 1em;
}

article {
    padding: 100px;
    margin-left: 407px;
    height: 800px; 
    overflow: hidden;
}
</style>
</head>
<body>
<div class="container">

<header>
   <h1>REGISTRATION FORM</h1>
</header>
<article>
<form name="registration" method="post" action="newreg.php">

USERNAME: <br> <input type="text" name="username" value=""><br>
PASSWORD: <br> <input type="password" name="password" value=""></br>
NAME:<br> <input type="text" name="pname" value=""></br>
EMAIL:<br> <input type="text" name="email" value=""></br>
MOBILE:<br> <input type="integer" name="mobile" value=""></br>
POSTAL CODE:<br> <input type="integer" name="post" value=""></br>
<br><input type="submit" name="login" value="Student-submit">
<input type="submit" name="login1" value="Faculty-submit"></br>
</article>
<footer>Copyright &copy; ERP solutions</footer>

</div>

</body>
</html>

  