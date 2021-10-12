<?php error_reporting (E_ALL ^ E_NOTICE);
/*****************************************************************
Created :01/10/2021
Author : worapot bhilarbutra (pros.ake)
E-mail : worapot.bhi@gmail.com
Website : https://www.vpslive.com
Copyright (C) 2021-2025, VPS Live Digital togethers all rights reserved.
*****************************************************************/





	// Mysql Version 
	$db_config=array(
		"host"=>"localhost",
		"user"=>"root",
		"pass"=>"",
		"dbname"=>"office",
		"charset"=>"utf8"
	);
	




date_default_timezone_set("Asia/Bangkok");

$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android= stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS= stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
$status=true;

if( $iPod || $iPhone ){
$status=false;
        //were an iPhone/iPod touch -- do something here
}else if($iPad){
$status=false;
        //were an iPad -- do something here
}else if($Android){
$status=false;
        //were an Android device -- do something here
}else if($webOS){
$status=false;
        //were a webOS device -- do something here
	}
	if($status==true){
//	header( 'Location: http://sws.bemy.life/' ) ;
	}

// Display Error ,0=none display,1=display
@ini_set('display_errors', '1');
@set_time_limit(0);

// MySQL Table
$tableLag 							= 	"jie_lag";
$tableAdmin 						= 	"jie_admin_user";
$tableAdminMenu 					= 	"jie_admin_menu";
$tableMessage 						= 	"jie_message";
$tableMember 						= 	"jie_member";
$tableMemberAddress					= 	"jie_member_address";
$tableMailMessage 					= 	"jie_mail_message";
$tableWebMil 						= 	"jie_mail_message";
$tableWebMenu 						= 	"jie_web_menu";

$tableContents 						= 	"tb_contents_detail";
$tableCustomers						= 	"tb_customers";

$tableProvince						=	"province";
$tableAmphur						=	"amphur";
$tableDistrict						=	"district";

$tablePage 							= 	"jie_page";
$tablePageDetail 					= 	"jie_page_detail";
$tableSetting						= 	"jie_setting";



// All config
$cfgDefaultPerPage = 5;
$cfgOtherRowPerPage = 15;



// Session
if(substr_count($_SERVER["SCRIPT_NAME"],"/") == 1){
	session_name("swcms");
}

session_start();


if(empty($_SESSION['file_upload'])) $_SESSION['file_upload'] = array();


// Connect MySQL
$conn = @new mysqli($db_config["host"], $db_config["user"], $db_config["pass"], $db_config["dbname"]);
$conn->set_charset($db_config["charset"]);






if($_SESSION["lang"] ==""){
	$_SESSION["lang"] ="_th";
}
if($_GET['lang'] != "" ){
	unset($_SESSION["lang"]);
	if($_GET['lang']=="th"){$_SESSION["lang"] ="_th";}else{$_SESSION["lang"] ="_eng";}
}




?>
