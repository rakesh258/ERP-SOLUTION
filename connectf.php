<?php
session_start();

$link = mysqli_connect('localhost','root','root');
$database = mysqli_select_db($link,'login_info');

$user = $_POST['fname'];
$pass = $_POST['fpass'];

if (isset($_POST["login1"]))
{
    if($_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
      {
       $query = "SELECT * FROM login1 WHERE username = '". mysqli_real_escape_string($link,$user) ."' AND password = '". mysqli_real_escape_string($link,$pass) ."'" ;
       $result = mysqli_query($link,$query);
       
       // For check name and password
       if (mysqli_num_rows($result) == 1) 
        {
          echo "pass"; //Pass, do something
        } 
         else 
        {
          echo "fail"; //Fail
        }
      }
      else
       {
        die("Wrong Code Entered");
       }

   }
   else
   {
       echo "Empty input Login In"; // empty $_POST["submit2"]
   }