<?php 
 //code is used to connect to your db; the Die function is used to indicate whether there is an error and what message to display
 $con = mysqli_connect("localhost","root","","registerdb") or die("Couldn't connect");
 // if it does not display anything then it has connected.
?>