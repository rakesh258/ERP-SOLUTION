<?php

session_start();

$link = mysqli_connect('localhost','root','root');
$database = mysqli_select_db($link,'login_info');


if (isset($_POST["login"]))
{

If($_REQUEST['username']=='' || $_REQUEST['password']=='' || $_REQUEST['pname']==''|| $_REQUEST['email']=='' || $_REQUEST['mobile']=='' || $_REQUEST['post']=='')
{
Echo "please fill the empty field.";
}
Else
{

$strsql="INSERT INTO login(username, password, pname, email, mobile,post) VALUES('".$_POST['username']."', '".$_POST['password']."', '".$_POST['pname']."', '".$_POST['email']."' ,'".$_POST['mobile']."' ,'".$_POST['post']."')";

//$strsql="Create Table avinash(name varchar(20),id int(10) )";






mysqli_query($link,$strsql) or die(mysqli_error($link));
echo "Successfully Registered";
}
}

else
{
	if (isset($_POST["login1"]))

	If($_REQUEST['username']=='' || $_REQUEST['password']=='' || $_REQUEST['pname']==''|| $_REQUEST['email']=='' || $_REQUEST['mobile']=='' || $_REQUEST['post']=='')

{
Echo "please fill the empty field.";
}
Else
{
$strsql="INSERT INTO login1(username, password, pname, email, mobile,post) VALUES('".$_POST['username']."', '".$_POST['password']."', '".$_POST['pname']."', '".$_POST['email']."' ,'".$_POST['mobile']."' ,'".$_POST['post']."')";


mysqli_query($link,$strsql) or die(mysqli_error($link));
echo "Successfully Registered";
}
}