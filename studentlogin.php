<!DOCTYPE html>
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
    margin-left: 420px;
    height: 800px; 
    overflow: hidden;
}
</style>
</head>
<body>

<div class="container">

<header>
   <h1>STUDENT LOGIN</h1>
</header>
  
<article>
<form action="connect.php" method="post">
<P><input type="text" name="user" placeholder="Name:"><br> </P>
<P> <input type="password" name="pass" placeholder="Password:"><br> </P>

<p><img src="captcha.php" /><br> </p>
<p> Enter Captcha: </p>
<p> <input type="text" name="captcha"> </p>

<input type="submit" name="login" value="Log In">
</form>
<p> <a href="#"> Not yet registered?Register Now <p>  
</article>

<footer>Copyright &copy; ERP solutions</footer>

</div>

</body>
</html>
