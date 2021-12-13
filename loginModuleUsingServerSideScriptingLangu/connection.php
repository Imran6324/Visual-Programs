<?php
if(!mysql_connect("Host_Name","User_Name","Password") || 
!mysql_select_db("Database_Name"))
{
 die(mysql_error());
}
?>