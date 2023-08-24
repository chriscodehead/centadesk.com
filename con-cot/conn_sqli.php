<?php
$host_me = 'localhost';
/*$databasename_2 = 'howtcwnj_creativehubacademy_TTT';
$username_we = 'howtcwnj_creativehubacademy_TTT';
$password_co = '1187<phnjkhkdfhx2&&et@343#4'; */
$databasename_2 = 'howtcwnj_creativehubacademy_TTT';
$username_we = 'root';
$password_co = '';
$link = mysqli_connect($host_me, $username_we, $password_co) or header("location:404.html");
if (mysqli_select_db($link, $databasename_2)) {
} else {
	header("location:./404.html");
}
function dbpass()
{
	$server_ = 'localhost';
	/*$database_='howtcwnj_creativehubacademy_TTT';
	$user_='howtcwnj_creativehubacademy_TTT';
	$pass_='1187<phnjkhkdfhx2&&et@343#4'; */
	$database_ = 'howtcwnj_creativehubacademy_TTT';
	$user_ = 'root';
	$pass_ = '';
	$con = @mysqli_connect($server_, $user_, $pass_, $database_);
	return $con;
}
$k['con'] = dbpass();
function query_sql($query)
{
	global $k;
	$result = mysqli_query($k['con'], $query);
	return $result;
}
