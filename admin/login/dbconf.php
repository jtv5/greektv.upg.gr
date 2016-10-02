<?php
//DATABASE CONNECTION VARIABLES
$config = parse_ini_file('../../gtv_db.ini');
$smtpuser = $config['smtpuser'];
$smtppass = $config['smtppass']; 
$host = $config['host']; // Host name
$username = $config['username']; // Mysql username
$password = $config['password']; // Mysql password
$db_name = $config['dbname']; // Database name

//DO NOT CHANGE BELOW THIS LINE UNLESS YOU CHANGE THE NAMES OF THE MEMBERS AND LOGINATTEMPTS TABLES

$tbl_prefix = ''; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables
$tbl_members = $tbl_prefix.'members';
$tbl_attempts = $tbl_prefix.'loginAttempts';
