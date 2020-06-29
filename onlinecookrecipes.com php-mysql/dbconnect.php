<?php
if(!mysql_connect("localhost","ediznirun","edz115555"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("ponlinH7_dbediz"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>