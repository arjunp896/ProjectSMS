<?php
$hostname = "127.0.0.1";
$username = "root";
$password= "";
$dbname="projectsms";

$connection = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
