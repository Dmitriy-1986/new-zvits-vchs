<?php
include 'config.php';

date_default_timezone_set("Europe/Kiev");
$year_month_day = date('Y-m-d H:i');

/* 
// BAT 
*/
if(isset($_POST['submit_bat'])) {

	$id =                             $_POST['id'];
	$number_bat =                     mysqli_real_escape_string($mysqli,$_POST['number_bat']);
	$name_user_bat =                  mysqli_real_escape_string($mysqli,$_POST['name_user_bat']);
	$name_user_bat_strip_tags =       strip_tags($name_user_bat);	
	$zmina_bat =                      mysqli_real_escape_string($mysqli,$_POST['zmina_bat']);
	$total_facts_bat =                mysqli_real_escape_string($mysqli,$_POST['total_facts_bat']);
	$name_carrier_bat =               mysqli_real_escape_string($mysqli,$_POST['name_carrier_bat']);
	$name_carrier_bat_strip_tags =    strip_tags($name_carrier_bat);
	$provedeno_perevirok_bat =        mysqli_real_escape_string($mysqli,$_POST['provedeno_perevirok_bat']);
	$skladeno_protokoliv_bat =        mysqli_real_escape_string($mysqli,$_POST['skladeno_protokoliv_bat']);
	$subyekty_yaki_vidmovylys_bat =   mysqli_real_escape_string($mysqli,$_POST['subyekty_yaki_vidmovylys_bat']);
	$provedeno_perevirok_zd_bat =     mysqli_real_escape_string($mysqli,$_POST['provedeno_perevirok_zd_bat']);
	$skladeno_protokoliv_zd_bat =     mysqli_real_escape_string($mysqli,$_POST['skladeno_protokoliv_zd_bat']);
	$illegal_carriers_checked_bat =   mysqli_real_escape_string($mysqli,$_POST['illegal_carriers_checked_bat']);
	$vidsutnist_litsenziyi_bat =      mysqli_real_escape_string($mysqli,$_POST['vidsutnist_litsenziyi_bat']);
	$vidsutnist_marshrutu_bat =       mysqli_real_escape_string($mysqli,$_POST['vidsutnist_marshrutu_bat']);
	$vidsutnist_masky_bat =           mysqli_real_escape_string($mysqli,$_POST['vidsutnist_masky_bat']);  

	$sql_bat = "INSERT INTO `bat` (		
		`number_bat`, 
		`name_user_bat`,
		`zmina_bat`,
		`total_facts_bat`,
		`name_carrier_bat`,
		`provedeno_perevirok_bat`,
		`skladeno_protokoliv_bat`,
		`subyekty_yaki_vidmovylys_bat`, 
		`provedeno_perevirok_zd_bat`, 
		`skladeno_protokoliv_zd_bat`, 
		`illegal_carriers_checked_bat`, 
		`vidsutnist_litsenziyi_bat`, 
		`vidsutnist_marshrutu_bat`, 
		`vidsutnist_masky_bat`,
		`date_bat`	
	) VALUES (
		'$number_bat',
		'$name_user_bat_strip_tags',
		'$zmina_bat',
		'$total_facts_bat',
		'$name_carrier_bat_strip_tags',
		'$provedeno_perevirok_bat',
		'$skladeno_protokoliv_bat',
		'$subyekty_yaki_vidmovylys_bat',
		'$provedeno_perevirok_zd_bat',
		'$skladeno_protokoliv_zd_bat',
		'$illegal_carriers_checked_bat',
		'$vidsutnist_litsenziyi_bat',
		'$vidsutnist_marshrutu_bat',
		'$vidsutnist_masky_bat',
		'$year_month_day'
	)";

	$result_bat = mysqli_query($mysqli, $sql_bat);
	if ($result_bat == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	}
}
//Вывод данных BAT на страницу admin.php
$result_bat = $mysqli->query("SELECT * FROM `bat` ORDER BY id DESC LIMIT 15");
// Удаление данных BAT
if(isset($_POST["id_bat"]))
{   
    $zvitsid_bat = $mysqli->real_escape_string($_POST["id_bat"]);	
    $sql_delete_bat = "DELETE FROM `bat` WHERE id = '$zvitsid_bat'";
    if($mysqli->query($sql_delete_bat)){        
        header("Location: admin.php");
    }else{
        echo "Ошибка: " . $conn->error;
    }
}
//Редактирование данных BAT
if (isset($_POST['edit-submit_bat'])) {
	$get_id_bat =                          $_GET['id'];
	$edit_number_bat =                     mysqli_real_escape_string($mysqli,$_POST['edit_number_bat']);
	$edit_name_user_bat =                  mysqli_real_escape_string($mysqli,$_POST['edit_name_user_bat']);	
	$edit_name_user_bat_strip_tags =       strip_tags($edit_name_user_bat);	
	$edit_zmina_bat =                      mysqli_real_escape_string($mysqli,$_POST['edit_zmina_bat']);
	$edit_total_facts_bat =                mysqli_real_escape_string($mysqli,$_POST['edit_total_facts_bat']);
	$edit_name_carrier_bat =               mysqli_real_escape_string($mysqli,$_POST['edit_name_carrier_bat']);
	$edit_name_carrier_bat_strip_tags =    strip_tags($edit_name_carrier_bat);	
	$edit_provedeno_perevirok_bat =        mysqli_real_escape_string($mysqli,$_POST['edit_provedeno_perevirok_bat']);
	$edit_skladeno_protokoliv_bat =        mysqli_real_escape_string($mysqli,$_POST['edit_skladeno_protokoliv_bat']);
	$edit_subyekty_yaki_vidmovylys_bat =   mysqli_real_escape_string($mysqli,$_POST['edit_subyekty_yaki_vidmovylys_bat']);
	$edit_provedeno_perevirok_zd_bat =     mysqli_real_escape_string($mysqli,$_POST['edit_provedeno_perevirok_zd_bat']);
	$edit_skladeno_protokoliv_zd_bat =     mysqli_real_escape_string($mysqli,$_POST['edit_skladeno_protokoliv_zd_bat']);
	$edit_illegal_carriers_checked_bat =   mysqli_real_escape_string($mysqli,$_POST['edit_illegal_carriers_checked_bat']);
	$edit_vidsutnist_litsenziyi_bat =      mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_litsenziyi_bat']);
	$edit_vidsutnist_marshrutu_bat =       mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_marshrutu_bat']);
	$edit_vidsutnist_masky_bat =           mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_masky_bat']);  
	$sql_edit_bat = "UPDATE bat SET 
		`number_bat`= '$edit_number_bat', 
		`name_user_bat`= '$edit_name_user_bat_strip_tags', 
		`zmina_bat`= '$edit_zmina_bat',
		`total_facts_bat`= '$edit_total_facts_bat',
		`name_carrier_bat`= '$edit_name_carrier_bat_strip_tags',
		`provedeno_perevirok_bat`= '$edit_provedeno_perevirok_bat',
		`skladeno_protokoliv_bat`= '$edit_skladeno_protokoliv_bat',
		`subyekty_yaki_vidmovylys_bat`= '$edit_subyekty_yaki_vidmovylys_bat',
		`provedeno_perevirok_zd_bat`= '$edit_provedeno_perevirok_zd_bat',
		`skladeno_protokoliv_zd_bat`= '$edit_skladeno_protokoliv_zd_bat',
		`illegal_carriers_checked_bat`= '$edit_illegal_carriers_checked_bat',
		`vidsutnist_litsenziyi_bat`= '$edit_vidsutnist_litsenziyi_bat',
		`vidsutnist_marshrutu_bat`= '$edit_vidsutnist_marshrutu_bat',
		`vidsutnist_masky_bat`= '$edit_vidsutnist_masky_bat',
		`date_bat` = '$year_month_day'
	WHERE 
	`bat`.`id` = '$get_id_bat';
	";
	
	$edit_bat = mysqli_query($mysqli, $sql_edit_bat);
	if ($edit_bat == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	} 
	
}
/* 
// TOR 
*/
$tor = 'ТОР';
if(isset($_POST['submit_tor'])) {
	$id =                             $_POST['id'];
	$name_user_tor =                  mysqli_real_escape_string($mysqli,$_POST['name_user_tor']);	
	$name_user_tor_strip_tags =       strip_tags($name_user_tor);	
	$zmina_tor =                      mysqli_real_escape_string($mysqli,$_POST['zmina_tor']);
	$total_facts_tor =                mysqli_real_escape_string($mysqli,$_POST['total_facts_tor']);
	$name_carrier_tor =               mysqli_real_escape_string($mysqli,$_POST['name_carrier_tor']);
	$name_carrier_tor_strip_tags =    strip_tags($name_carrier_tor);	
	$provedeno_perevirok_tor =        mysqli_real_escape_string($mysqli,$_POST['provedeno_perevirok_tor']);
	$skladeno_protokoliv_tor =        mysqli_real_escape_string($mysqli,$_POST['skladeno_protokoliv_tor']);
	$subyekty_yaki_vidmovylys_tor =   mysqli_real_escape_string($mysqli,$_POST['subyekty_yaki_vidmovylys_tor']);
	$provedeno_perevirok_zd_tor =     mysqli_real_escape_string($mysqli,$_POST['provedeno_perevirok_zd_tor']);
	$skladeno_protokoliv_zd_tor =     mysqli_real_escape_string($mysqli,$_POST['skladeno_protokoliv_zd_tor']);
	$illegal_carriers_checked_tor =   mysqli_real_escape_string($mysqli,$_POST['illegal_carriers_checked_tor']);
	$vidsutnist_litsenziyi_tor =      mysqli_real_escape_string($mysqli,$_POST['vidsutnist_litsenziyi_tor']);
	$vidsutnist_marshrutu_tor =       mysqli_real_escape_string($mysqli,$_POST['vidsutnist_marshrutu_tor']);
	$vidsutnist_masky_tor =           mysqli_real_escape_string($mysqli,$_POST['vidsutnist_masky_tor']); 

	$sql_tor = "INSERT INTO `tor` (	
		`name_user_tor`, 
		`zmina_tor`,
		`total_facts_tor`,
		`name_carrier_tor`,
		`provedeno_perevirok_tor`,
		`skladeno_protokoliv_tor`,
		`subyekty_yaki_vidmovylys_tor`, 
		`provedeno_perevirok_zd_tor`, 
		`skladeno_protokoliv_zd_tor`, 
		`illegal_carriers_checked_tor`, 
		`vidsutnist_litsenziyi_tor`, 
		`vidsutnist_marshrutu_tor`, 
		`vidsutnist_masky_tor`,
		`date_tor`		
	) VALUES (
		'$name_user_tor_strip_tags',
		'$zmina_tor',
		'$total_facts_tor',
		'$name_carrier_tor_strip_tags',
		'$provedeno_perevirok_tor',
		'$skladeno_protokoliv_tor',
		'$subyekty_yaki_vidmovylys_tor',
		'$provedeno_perevirok_zd_tor',
		'$skladeno_protokoliv_zd_tor',
		'$illegal_carriers_checked_tor',
		'$vidsutnist_litsenziyi_tor',
		'$vidsutnist_marshrutu_tor',
		'$vidsutnist_masky_tor',
		'$year_month_day'	
	)";

	$result_tor = mysqli_query($mysqli, $sql_tor);
	if ($result_tor == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	}
}
//Вывод данных TOR на страницу admin.php
$result_tor = $mysqli->query("SELECT * FROM `tor` ORDER BY id DESC LIMIT 15");
// Удаление данных TOR
if(isset($_POST["id_tor"]))
{   
    $zvitsid_tor = $mysqli->real_escape_string($_POST["id_tor"]);	
    $sql_delete_tor = "DELETE FROM `tor` WHERE id = '$zvitsid_tor'";
    if($mysqli->query($sql_delete_tor)){        
        header("Location: admin.php");
    }else{
        echo "Ошибка: " . $conn->error;
    }
}
//Редактирование данных TOR
if (isset($_POST['edit-submit_tor'])) {  

	$get_id_tor =                         $_GET['id'];
	$edit_name_user_tor =                  mysqli_real_escape_string($mysqli,$_POST['edit_name_user_tor']);	
	$edit_name_user_tor_strip_tags =       strip_tags($edit_name_user_tor);
	$edit_zmina_tor =                      mysqli_real_escape_string($mysqli,$_POST['edit_zmina_tor']);
	$edit_total_facts_tor =                mysqli_real_escape_string($mysqli,$_POST['edit_total_facts_tor']);
	$edit_name_carrier_tor =               mysqli_real_escape_string($mysqli,$_POST['edit_name_carrier_tor']);
	$edit_name_carrier_tor_strip_tags =    strip_tags($edit_name_carrier_tor);
	$edit_provedeno_perevirok_tor =        mysqli_real_escape_string($mysqli,$_POST['edit_provedeno_perevirok_tor']);
	$edit_skladeno_protokoliv_tor =        mysqli_real_escape_string($mysqli,$_POST['edit_skladeno_protokoliv_tor']);
	$edit_subyekty_yaki_vidmovylys_tor =   mysqli_real_escape_string($mysqli,$_POST['edit_subyekty_yaki_vidmovylys_tor']);
	$edit_provedeno_perevirok_zd_tor =     mysqli_real_escape_string($mysqli,$_POST['edit_provedeno_perevirok_zd_tor']);
	$edit_skladeno_protokoliv_zd_tor =     mysqli_real_escape_string($mysqli,$_POST['edit_skladeno_protokoliv_zd_tor']);
	$edit_illegal_carriers_checked_tor =   mysqli_real_escape_string($mysqli,$_POST['edit_illegal_carriers_checked_tor']);
	$edit_vidsutnist_litsenziyi_tor =      mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_litsenziyi_tor']);
	$edit_vidsutnist_marshrutu_tor =       mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_marshrutu_tor']);
	$edit_vidsutnist_masky_tor =           mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_masky_tor']);  

	$sql_edit_tor = "UPDATE tor SET 
		`name_user_tor`= '$edit_name_user_tor_strip_tags', 
		`zmina_tor`= '$edit_zmina_tor',
		`total_facts_tor`= '$edit_total_facts_tor',
		`name_carrier_tor`= '$edit_name_carrier_tor_strip_tags',
		`provedeno_perevirok_tor`= '$edit_provedeno_perevirok_tor',
		`skladeno_protokoliv_tor`= '$edit_skladeno_protokoliv_tor',
		`subyekty_yaki_vidmovylys_tor`= '$edit_subyekty_yaki_vidmovylys_tor',
		`provedeno_perevirok_zd_tor`= '$edit_provedeno_perevirok_zd_tor',
		`skladeno_protokoliv_zd_tor`= '$edit_skladeno_protokoliv_zd_tor',
		`illegal_carriers_checked_tor`= '$edit_illegal_carriers_checked_tor',
		`vidsutnist_litsenziyi_tor`= '$edit_vidsutnist_litsenziyi_tor',
		`vidsutnist_marshrutu_tor`= '$edit_vidsutnist_marshrutu_tor',
		`vidsutnist_masky_tor`= '$edit_vidsutnist_masky_tor',
		`date_tor` = '$year_month_day'
	WHERE 
	`tor`.`id` = '$get_id_tor';
	";
	
	$edit_tor = mysqli_query($mysqli, $sql_edit_tor);
	if ($edit_tor == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	} 
	
}
/* 
// VBDR 
*/
$vbdr = 'ВБДР';	
if(isset($_POST['submit_vbdr'])) {
	$id =                             $_POST['id'];
	$name_user_vbdr =                 mysqli_real_escape_string($mysqli,$_POST['name_user_vbdr']);
	$name_user_vbdr_strip_tags =      strip_tags($name_user_vbdr);
	$zmina_vbdr =                     mysqli_real_escape_string($mysqli,$_POST['zmina_vbdr']);
	$total_facts_vbdr =               mysqli_real_escape_string($mysqli,$_POST['total_facts_vbdr']);
	$name_carrier_vbdr =              mysqli_real_escape_string($mysqli,$_POST['name_carrier_vbdr']);
	$name_carrier_vbdr_strip_tags =   strip_tags($name_carrier_vbdr);
	$provedeno_perevirok_vbdr =       mysqli_real_escape_string($mysqli,$_POST['provedeno_perevirok_vbdr']);
	$skladeno_protokoliv_vbdr =       mysqli_real_escape_string($mysqli,$_POST['skladeno_protokoliv_vbdr']);
	$subyekty_yaki_vidmovylys_vbdr =  mysqli_real_escape_string($mysqli,$_POST['subyekty_yaki_vidmovylys_vbdr']);
	$provedeno_perevirok_zd_vbdr =    mysqli_real_escape_string($mysqli,$_POST['provedeno_perevirok_zd_vbdr']);
	$skladeno_protokoliv_zd_vbdr =    mysqli_real_escape_string($mysqli,$_POST['skladeno_protokoliv_zd_vbdr']);
	$illegal_carriers_checked_vbdr =  mysqli_real_escape_string($mysqli,$_POST['illegal_carriers_checked_vbdr']);
	$vidsutnist_litsenziyi_vbdr =     mysqli_real_escape_string($mysqli,$_POST['vidsutnist_litsenziyi_vbdr']);
	$vidsutnist_marshrutu_vbdr =      mysqli_real_escape_string($mysqli,$_POST['vidsutnist_marshrutu_vbdr']);
	$vidsutnist_masky_vbdr =          mysqli_real_escape_string($mysqli,$_POST['vidsutnist_masky_vbdr']); 

	$sql_vbdr = "INSERT INTO `vbdr` (
		`name_user_vbdr`, 
		`zmina_vbdr`,
		`total_facts_vbdr`,
		`name_carrier_vbdr`,
		`provedeno_perevirok_vbdr`,
		`skladeno_protokoliv_vbdr`,
		`subyekty_yaki_vidmovylys_vbdr`, 
		`provedeno_perevirok_zd_vbdr`, 
		`skladeno_protokoliv_zd_vbdr`, 
		`illegal_carriers_checked_vbdr`, 
		`vidsutnist_litsenziyi_vbdr`, 
		`vidsutnist_marshrutu_vbdr`, 
		`vidsutnist_masky_vbdr`,
		`date_vbdr`		
	) VALUES (
		'$name_user_vbdr_strip_tags',
		'$zmina_vbdr',
		'$total_facts_vbdr',
		'$name_carrier_vbdr_strip_tags',
		'$provedeno_perevirok_vbdr',
		'$skladeno_protokoliv_vbdr',
		'$subyekty_yaki_vidmovylys_vbdr',
		'$provedeno_perevirok_zd_vbdr',
		'$skladeno_protokoliv_zd_vbdr',
		'$illegal_carriers_checked_vbdr',
		'$vidsutnist_litsenziyi_vbdr',
		'$vidsutnist_marshrutu_vbdr',
		'$vidsutnist_masky_vbdr',
		'$year_month_day'	
	)";

	$result_vbdr = mysqli_query($mysqli, $sql_vbdr);
	if ($result_vbdr == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	}
}

//Вывод данных VBDR на страницу admin.php
$result_vbdr = $mysqli->query("SELECT * FROM `vbdr` ORDER BY id DESC LIMIT 15");
// Удаление данных TOR
if(isset($_POST["id_vbdr"]))
{   
    $zvitsid_vbdr = $mysqli->real_escape_string($_POST["id_vbdr"]);	
    $sql_delete_vbdr = "DELETE FROM `vbdr` WHERE id = '$zvitsid_vbdr'";
    if($mysqli->query($sql_delete_vbdr)){        
        header("Location: admin.php");
    }else{
        echo "Ошибка: " . $conn->error;
    }
}
//Редактирование данных VBDR
if (isset($_POST['edit-submit_vbdr'])) {  

	$get_id_vbdr =                         $_GET['id'];
	$edit_name_user_vbdr =                  mysqli_real_escape_string($mysqli,$_POST['edit_name_user_vbdr']);
	$edit_name_user_vbdr_strip_tags =       strip_tags($edit_name_user_vbdr);	
	$edit_zmina_vbdr =                      mysqli_real_escape_string($mysqli,$_POST['edit_zmina_vbdr']);
	$edit_total_facts_vbdr =                mysqli_real_escape_string($mysqli,$_POST['edit_total_facts_vbdr']);
	$edit_name_carrier_vbdr =               mysqli_real_escape_string($mysqli,$_POST['edit_name_carrier_vbdr']);
	$edit_name_carrier_vbdr_strip_tags =    strip_tags($edit_name_carrier_vbdr);
	$edit_provedeno_perevirok_vbdr =        mysqli_real_escape_string($mysqli,$_POST['edit_provedeno_perevirok_vbdr']);
	$edit_skladeno_protokoliv_vbdr =        mysqli_real_escape_string($mysqli,$_POST['edit_skladeno_protokoliv_vbdr']);
	$edit_subyekty_yaki_vidmovylys_vbdr =   mysqli_real_escape_string($mysqli,$_POST['edit_subyekty_yaki_vidmovylys_vbdr']);
	$edit_provedeno_perevirok_zd_vbdr =     mysqli_real_escape_string($mysqli,$_POST['edit_provedeno_perevirok_zd_vbdr']);
	$edit_skladeno_protokoliv_zd_vbdr =     mysqli_real_escape_string($mysqli,$_POST['edit_skladeno_protokoliv_zd_vbdr']);
	$edit_illegal_carriers_checked_vbdr =   mysqli_real_escape_string($mysqli,$_POST['edit_illegal_carriers_checked_vbdr']);
	$edit_vidsutnist_litsenziyi_vbdr =      mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_litsenziyi_vbdr']);
	$edit_vidsutnist_marshrutu_vbdr =       mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_marshrutu_vbdr']);
	$edit_vidsutnist_masky_vbdr =           mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_masky_vbdr']);  

	$sql_edit_vbdr = "UPDATE vbdr SET 
		`name_user_vbdr`= '$edit_name_user_vbdr_strip_tags', 
		`zmina_vbdr`= '$edit_zmina_vbdr',
		`total_facts_vbdr`= '$edit_total_facts_vbdr',
		`name_carrier_vbdr`= '$edit_name_carrier_vbdr_strip_tags',
		`provedeno_perevirok_vbdr`= '$edit_provedeno_perevirok_vbdr',
		`skladeno_protokoliv_vbdr`= '$edit_skladeno_protokoliv_vbdr',
		`subyekty_yaki_vidmovylys_vbdr`= '$edit_subyekty_yaki_vidmovylys_vbdr',
		`provedeno_perevirok_zd_vbdr`= '$edit_provedeno_perevirok_zd_vbdr',
		`skladeno_protokoliv_zd_vbdr`= '$edit_skladeno_protokoliv_zd_vbdr',
		`illegal_carriers_checked_vbdr`= '$edit_illegal_carriers_checked_vbdr',
		`vidsutnist_litsenziyi_vbdr`= '$edit_vidsutnist_litsenziyi_vbdr',
		`vidsutnist_marshrutu_vbdr`= '$edit_vidsutnist_marshrutu_vbdr',
		`vidsutnist_masky_vbdr`= '$edit_vidsutnist_masky_vbdr',
		`date_vbdr` = '$year_month_day'
	WHERE 
	`vbdr`.`id` = '$get_id_vbdr';
	";
	
	$edit_vbdr = mysqli_query($mysqli, $sql_edit_vbdr);
	if ($edit_vbdr == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	} 
	
}
/* 
// VMAZ 
*/
$vmaz = 'ВМАЗ';	
if(isset($_POST['submit_vmaz'])) {
	$id =                              $_POST['id'];
	$name_user_vmaz =                  mysqli_real_escape_string($mysqli,$_POST['name_user_vmaz']);
	$name_user_vmaz_strip_tags =       strip_tags($name_user_vmaz);
	$zmina_vmaz =                      mysqli_real_escape_string($mysqli,$_POST['zmina_vmaz']);
	$total_facts_vmaz =                mysqli_real_escape_string($mysqli,$_POST['total_facts_vmaz']);
	$name_carrier_vmaz =               mysqli_real_escape_string($mysqli,$_POST['name_carrier_vmaz']);
	$name_carrier_vmaz_strip_tags =    strip_tags($name_carrier_vmaz);
	$provedeno_perevirok_vmaz =        mysqli_real_escape_string($mysqli,$_POST['provedeno_perevirok_vmaz']);
	$skladeno_protokoliv_vmaz =        mysqli_real_escape_string($mysqli,$_POST['skladeno_protokoliv_vmaz']);
	$subyekty_yaki_vidmovylys_vmaz =   mysqli_real_escape_string($mysqli,$_POST['subyekty_yaki_vidmovylys_vmaz']);
	$provedeno_perevirok_zd_vmaz =     mysqli_real_escape_string($mysqli,$_POST['provedeno_perevirok_zd_vmaz']);
	$skladeno_protokoliv_zd_vmaz =     mysqli_real_escape_string($mysqli,$_POST['skladeno_protokoliv_zd_vmaz']);
	$illegal_carriers_checked_vmaz =   mysqli_real_escape_string($mysqli,$_POST['illegal_carriers_checked_vmaz']);
	$vidsutnist_litsenziyi_vmaz =      mysqli_real_escape_string($mysqli,$_POST['vidsutnist_litsenziyi_vmaz']);
	$vidsutnist_marshrutu_vmaz =       mysqli_real_escape_string($mysqli,$_POST['vidsutnist_marshrutu_vmaz']);
	$vidsutnist_masky_vmaz =           mysqli_real_escape_string($mysqli,$_POST['vidsutnist_masky_vmaz']); 

	$sql_vmaz = "INSERT INTO `vmaz` (	 
		`name_user_vmaz`, 
		`zmina_vmaz`,
		`total_facts_vmaz`,
		`name_carrier_vmaz`,
		`provedeno_perevirok_vmaz`,
		`skladeno_protokoliv_vmaz`,
		`subyekty_yaki_vidmovylys_vmaz`, 
		`provedeno_perevirok_zd_vmaz`, 
		`skladeno_protokoliv_zd_vmaz`, 
		`illegal_carriers_checked_vmaz`, 
		`vidsutnist_litsenziyi_vmaz`, 
		`vidsutnist_marshrutu_vmaz`, 
		`vidsutnist_masky_vmaz`,
		`date_vmaz`		
	) VALUES (
		'$name_user_vmaz_strip_tags',
		'$zmina_vmaz',
		'$total_facts_vmaz',
		'$name_carrier_vmaz_strip_tags',
		'$provedeno_perevirok_vmaz',
		'$skladeno_protokoliv_vmaz',
		'$subyekty_yaki_vidmovylys_vmaz',
		'$provedeno_perevirok_zd_vmaz',
		'$skladeno_protokoliv_zd_vmaz',
		'$illegal_carriers_checked_vmaz',
		'$vidsutnist_litsenziyi_vmaz',
		'$vidsutnist_marshrutu_vmaz',
		'$vidsutnist_masky_vmaz',
		'$year_month_day'		
	)";

	$result_vmaz = mysqli_query($mysqli, $sql_vmaz);
	if ($result_vmaz == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	}
}

//Вывод данных VMAZ на страницу admin.php
$result_vmaz = $mysqli->query("SELECT * FROM `vmaz` ORDER BY id DESC LIMIT 15");
// Удаление данных VMAZ
if(isset($_POST["id_vmaz"]))
{   
    $zvitsid_vmaz = $mysqli->real_escape_string($_POST["id_vmaz"]);	
    $sql_delete_vmaz = "DELETE FROM `vmaz` WHERE id = '$zvitsid_vmaz'";
    if($mysqli->query($sql_delete_vmaz)){        
        header("Location: admin.php");
    }else{
        echo "Ошибка: " . $conn->error;
    }
}
//Редактирование данных VMAZ
if (isset($_POST['edit-submit_vmaz'])) {  

	$get_id_vmaz =                          $_GET['id'];
	$edit_name_user_vmaz =                  mysqli_real_escape_string($mysqli,$_POST['edit_name_user_vmaz']);	
	$edit_name_user_vmaz_strip_tags =       strip_tags($edit_name_user_vmaz);
	$edit_zmina_vmaz =                      mysqli_real_escape_string($mysqli,$_POST['edit_zmina_vmaz']);
	$edit_total_facts_vmaz =                mysqli_real_escape_string($mysqli,$_POST['edit_total_facts_vmaz']);
	$edit_name_carrier_vmaz =               mysqli_real_escape_string($mysqli,$_POST['edit_name_carrier_vmaz']);
	$edit_name_carrier_vmaz_strip_tags =    strip_tags($edit_name_carrier_vmaz);
	$edit_provedeno_perevirok_vmaz =        mysqli_real_escape_string($mysqli,$_POST['edit_provedeno_perevirok_vmaz']);
	$edit_skladeno_protokoliv_vmaz =        mysqli_real_escape_string($mysqli,$_POST['edit_skladeno_protokoliv_vmaz']);
	$edit_subyekty_yaki_vidmovylys_vmaz =   mysqli_real_escape_string($mysqli,$_POST['edit_subyekty_yaki_vidmovylys_vmaz']);
	$edit_provedeno_perevirok_zd_vmaz =     mysqli_real_escape_string($mysqli,$_POST['edit_provedeno_perevirok_zd_vmaz']);
	$edit_skladeno_protokoliv_zd_vmaz =     mysqli_real_escape_string($mysqli,$_POST['edit_skladeno_protokoliv_zd_vmaz']);
	$edit_illegal_carriers_checked_vmaz =   mysqli_real_escape_string($mysqli,$_POST['edit_illegal_carriers_checked_vmaz']);
	$edit_vidsutnist_litsenziyi_vmaz =      mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_litsenziyi_vmaz']);
	$edit_vidsutnist_marshrutu_vmaz =       mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_marshrutu_vmaz']);
	$edit_vidsutnist_masky_vmaz =           mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_masky_vmaz']);  

	$sql_edit_vmaz = "UPDATE vmaz SET 
		`name_user_vmaz`= '$edit_name_user_vmaz_strip_tags', 
		`zmina_vmaz`= '$edit_zmina_vmaz',
		`total_facts_vmaz`= '$edit_total_facts_vmaz',
		`name_carrier_vmaz`= '$edit_name_carrier_vmaz_strip_tags',
		`provedeno_perevirok_vmaz`= '$edit_provedeno_perevirok_vmaz',
		`skladeno_protokoliv_vmaz`= '$edit_skladeno_protokoliv_vmaz',
		`subyekty_yaki_vidmovylys_vmaz`= '$edit_subyekty_yaki_vidmovylys_vmaz',
		`provedeno_perevirok_zd_vmaz`= '$edit_provedeno_perevirok_zd_vmaz',
		`skladeno_protokoliv_zd_vmaz`= '$edit_skladeno_protokoliv_zd_vmaz',
		`illegal_carriers_checked_vmaz`= '$edit_illegal_carriers_checked_vmaz',
		`vidsutnist_litsenziyi_vmaz`= '$edit_vidsutnist_litsenziyi_vmaz',
		`vidsutnist_marshrutu_vmaz`= '$edit_vidsutnist_marshrutu_vmaz',
		`vidsutnist_masky_vmaz`= '$edit_vidsutnist_masky_vmaz',
		`date_vmaz` = '$year_month_day'
	WHERE 
	`vmaz`.`id` = '$get_id_vmaz';
	";
	
	$edit_vmaz = mysqli_query($mysqli, $sql_edit_vmaz);
	if ($edit_vmaz == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	} 
	
}
/* 
// VROMDTP  
*/
$vromdtp = 'ВРОМДТП';	
if(isset($_POST['submit_vromdtp'])) {
	$id =                                 $_POST['id'];
	$name_user_vromdtp =                  mysqli_real_escape_string($mysqli,$_POST['name_user_vromdtp']);
	$name_user_vromdtp_strip_tags =       strip_tags($name_user_vromdtp);
	$zmina_vromdtp =                      mysqli_real_escape_string($mysqli,$_POST['zmina_vromdtp']);
	$total_facts_vromdtp =                mysqli_real_escape_string($mysqli,$_POST['total_facts_vromdtp']);
	$name_carrier_vromdtp =               mysqli_real_escape_string($mysqli,$_POST['name_carrier_vromdtp']);
	$name_carrier_vromdtp_strip_tags =    strip_tags($name_carrier_vromdtp);
	$provedeno_perevirok_vromdtp =        mysqli_real_escape_string($mysqli,$_POST['provedeno_perevirok_vromdtp']);
	$skladeno_protokoliv_vromdtp =        mysqli_real_escape_string($mysqli,$_POST['skladeno_protokoliv_vromdtp']);
	$subyekty_yaki_vidmovylys_vromdtp =   mysqli_real_escape_string($mysqli,$_POST['subyekty_yaki_vidmovylys_vromdtp']);
	$provedeno_perevirok_zd_vromdtp =     mysqli_real_escape_string($mysqli,$_POST['provedeno_perevirok_zd_vromdtp']);
	$skladeno_protokoliv_zd_vromdtp =     mysqli_real_escape_string($mysqli,$_POST['skladeno_protokoliv_zd_vromdtp']);
	$illegal_carriers_checked_vromdtp =   mysqli_real_escape_string($mysqli,$_POST['illegal_carriers_checked_vromdtp']);
	$vidsutnist_litsenziyi_vromdtp =      mysqli_real_escape_string($mysqli,$_POST['vidsutnist_litsenziyi_vromdtp']);
	$vidsutnist_marshrutu_vromdtp =       mysqli_real_escape_string($mysqli,$_POST['vidsutnist_marshrutu_vromdtp']);
	$vidsutnist_masky_vromdtp =           mysqli_real_escape_string($mysqli,$_POST['vidsutnist_masky_vromdtp']); 

	$sql_vromdtp = "INSERT INTO `vromdtp` (
		`name_user_vromdtp`, 
		`zmina_vromdtp`,
		`total_facts_vromdtp`,
		`name_carrier_vromdtp`,
		`provedeno_perevirok_vromdtp`,
		`skladeno_protokoliv_vromdtp`,
		`subyekty_yaki_vidmovylys_vromdtp`, 
		`provedeno_perevirok_zd_vromdtp`, 
		`skladeno_protokoliv_zd_vromdtp`, 
		`illegal_carriers_checked_vromdtp`, 
		`vidsutnist_litsenziyi_vromdtp`, 
		`vidsutnist_marshrutu_vromdtp`, 
		`vidsutnist_masky_vromdtp`,
		`date_vromdtp`		
	) VALUES (
		'$name_user_vromdtp_strip_tags',
		'$zmina_vromdtp',
		'$total_facts_vromdtp',
		'$name_carrier_vromdtp_strip_tags',
		'$provedeno_perevirok_vromdtp',
		'$skladeno_protokoliv_vromdtp',
		'$subyekty_yaki_vidmovylys_vromdtp',
		'$provedeno_perevirok_zd_vromdtp',
		'$skladeno_protokoliv_zd_vromdtp',
		'$illegal_carriers_checked_vromdtp',
		'$vidsutnist_litsenziyi_vromdtp',
		'$vidsutnist_marshrutu_vromdtp',
		'$vidsutnist_masky_vromdtp',
		'$year_month_day'			
	)";

	$result_vromdtp = mysqli_query($mysqli, $sql_vromdtp);
	if ($result_vromdtp == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	}
}
//Вывод данных VROMDTP на страницу admin.php
$result_vromdtp = $mysqli->query("SELECT * FROM `vromdtp` ORDER BY id DESC LIMIT 15");
// Удаление данных VROMDTP
if(isset($_POST["id_vromdtp"]))
{   
    $zvitsid = $mysqli->real_escape_string($_POST["id_vromdtp"]);	
    $sql_delete_vromdtp = "DELETE FROM `vromdtp` WHERE id = '$zvitsid'";
    if($mysqli->query($sql_delete_vromdtp)){        
        header("Location: admin.php");
    }else{
        echo "Ошибка: " . $conn->error;
    }
}
//Редактирование данных VROMDTP
if (isset($_POST['edit-submit_vromdtp'])) {  

	$get_id_vromdtp =                          $_GET['id'];
	$edit_name_user_vromdtp =                  mysqli_real_escape_string($mysqli,$_POST['edit_name_user_vromdtp']);
	$edit_name_user_vromdtp_strip_tags =       strip_tags($edit_name_user_vromdtp);	
	$edit_zmina_vromdtp =                      mysqli_real_escape_string($mysqli,$_POST['edit_zmina_vromdtp']);
	$edit_total_facts_vromdtp =                mysqli_real_escape_string($mysqli,$_POST['edit_total_facts_vromdtp']);
	$edit_name_carrier_vromdtp =               mysqli_real_escape_string($mysqli,$_POST['edit_name_carrier_vromdtp']);
	$edit_name_carrier_vromdtp_strip_tags =    strip_tags($edit_name_carrier_vromdtp);	
	$edit_provedeno_perevirok_vromdtp =        mysqli_real_escape_string($mysqli,$_POST['edit_provedeno_perevirok_vromdtp']);
	$edit_skladeno_protokoliv_vromdtp =        mysqli_real_escape_string($mysqli,$_POST['edit_skladeno_protokoliv_vromdtp']);
	$edit_subyekty_yaki_vidmovylys_vromdtp =   mysqli_real_escape_string($mysqli,$_POST['edit_subyekty_yaki_vidmovylys_vromdtp']);
	$edit_provedeno_perevirok_zd_vromdtp =     mysqli_real_escape_string($mysqli,$_POST['edit_provedeno_perevirok_zd_vromdtp']);
	$edit_skladeno_protokoliv_zd_vromdtp =     mysqli_real_escape_string($mysqli,$_POST['edit_skladeno_protokoliv_zd_vromdtp']);
	$edit_illegal_carriers_checked_vromdtp =   mysqli_real_escape_string($mysqli,$_POST['edit_illegal_carriers_checked_vromdtp']);
	$edit_vidsutnist_litsenziyi_vromdtp =      mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_litsenziyi_vromdtp']);
	$edit_vidsutnist_marshrutu_vromdtp =       mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_marshrutu_vromdtp']);
	$edit_vidsutnist_masky_vromdtp =           mysqli_real_escape_string($mysqli,$_POST['edit_vidsutnist_masky_vromdtp']);  

	$sql_edit_vromdtp = "UPDATE vromdtp SET 
		`name_user_vromdtp`= '$edit_name_user_vromdtp_strip_tags', 
		`zmina_vromdtp`= '$edit_zmina_vromdtp',
		`total_facts_vromdtp`= '$edit_total_facts_vromdtp',
		`name_carrier_vromdtp`= '$edit_name_carrier_vromdtp_strip_tags',
		`provedeno_perevirok_vromdtp`= '$edit_provedeno_perevirok_vromdtp',
		`skladeno_protokoliv_vromdtp`= '$edit_skladeno_protokoliv_vromdtp',
		`subyekty_yaki_vidmovylys_vromdtp`= '$edit_subyekty_yaki_vidmovylys_vromdtp',
		`provedeno_perevirok_zd_vromdtp`= '$edit_provedeno_perevirok_zd_vromdtp',
		`skladeno_protokoliv_zd_vromdtp`= '$edit_skladeno_protokoliv_zd_vromdtp',
		`illegal_carriers_checked_vromdtp`= '$edit_illegal_carriers_checked_vromdtp',
		`vidsutnist_litsenziyi_vromdtp`= '$edit_vidsutnist_litsenziyi_vromdtp',
		`vidsutnist_marshrutu_vromdtp`= '$edit_vidsutnist_marshrutu_vromdtp',
		`vidsutnist_masky_vromdtp`= '$edit_vidsutnist_masky_vromdtp',
		`date_vromdtp` = '$year_month_day'
	WHERE 
	`vromdtp`.`id` = '$get_id_vromdtp';
	";
	
	$edit_vromdtp = mysqli_query($mysqli, $sql_edit_vromdtp);
	if ($edit_vromdtp == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	} 
	
}

/* Task */
if(isset($_POST['submit_task'])) {

	$title =  mysqli_real_escape_string($mysqli,$_POST['title']);
	$title_strip_tags =  strip_tags($title);
	$textarea =  mysqli_real_escape_string($mysqli,$_POST['textarea']);
	$textarea_strip_tags =  strip_tags($textarea);

	$sql_task = "INSERT INTO `task` (`id`, `title`, `txt`, `date`) VALUES (NULL, '$title_strip_tags', '$textarea_strip_tags', '$year_month_day')";

	$sql_result_task = mysqli_query($mysqli, $sql_task);
	if ($sql_result_task == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	}

}
$result_task = $mysqli->query("SELECT * FROM `task` ORDER BY id DESC");
// Удаление данных task
if(isset($_POST["id_task"]))
{   
    $task_string = $mysqli->real_escape_string($_POST["id_task"]);	
    $sql_delete_task = "DELETE FROM `task` WHERE id = '$task_string'";
    if($mysqli->query($sql_delete_task)){        
        header("Location: admin.php");
    }else{
        echo "Помилка: " . $conn->error;
    }
}
/* Редактирование данных Task*/
if (isset($_POST['edit-submit_task'])) {
	$get_id_task =   $_GET['id'];
	$edit_title =  mysqli_real_escape_string($mysqli,$_POST['edit-title']);
	$edit_title_strip_tags =  strip_tags($edit_title);
	$edit_textarea =      mysqli_real_escape_string($mysqli,$_POST['edit-textarea']);
	$edit_textarea_strip_tags =  strip_tags($edit_textarea);

	$sql_edit_task = "UPDATE task SET 
		`title` = '$edit_title_strip_tags', 
		`txt`   =  '$edit_textarea_strip_tags',
		`date`  = '$year_month_day'
	WHERE 
	`task`.`id` = '$get_id_task'";
	
	$edit_task = mysqli_query($mysqli, $sql_edit_task);
	if ($edit_task == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	} 
}

/* 
Обьявление на главной странице - announcement
*/

if(isset($_POST['submit_announcement'])) {

	$title_announcement =     mysqli_real_escape_string($mysqli,$_POST['title_announcement']);
	$title_announcement_strip_tags =  strip_tags($title_announcement);
	$textarea_announcement =  mysqli_real_escape_string($mysqli,$_POST['txt_announcement']);
	$textarea_announcement_strip_tags =  strip_tags($textarea_announcement);
	$sql_task = "INSERT INTO `announcement` (`id`, `title_announcement`, `txt_announcement`, `date_announcement`) VALUES (NULL, '$title_announcement_strip_tags', '$textarea_announcement_strip_tags', '$year_month_day')";

	$sql_result_task = mysqli_query($mysqli, $sql_task);
	if ($sql_result_task == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	}

}
// Удаление данных announcement
if(isset($_POST["id_announcement"]))
{   
    $announcement_string = $mysqli->real_escape_string($_POST["id_announcement"]);	
    $sql_delete_announcement = "DELETE FROM `announcement` WHERE id = '$announcement_string'";
    if($mysqli->query($sql_delete_announcement)){        
        header("Location: edit-announcemen.php");
    }else{
        echo "Помилка: " . $conn->error;
    }
}
/* Редактирование данных announcement*/
if (isset($_POST['edit-submit_announcement'])) {
	$get_id_announcement =   $_GET['id'];
	$edit_title_announcement =  mysqli_real_escape_string($mysqli,$_POST['edit-title-announcement']);
	$edit_title_announcement_strip_tags =  strip_tags($edit_title_announcement);
	$edit_textare_announcement =      mysqli_real_escape_string($mysqli,$_POST['edit-textarea-announcement']);
	$edit_textarea_announcement_strip_tags =  strip_tags($edit_textare_announcement);

	$sql_edit_announcement = "UPDATE `announcement` SET 
		`title_announcement` = '$edit_title_announcement_strip_tags', 
		`txt_announcement`   =  '$edit_textarea_announcement_strip_tags',
		`date_announcement`  = '$year_month_day'
	WHERE 
	`announcement`.`id` = '$get_id_announcement'";
	
	$edit_announcement = mysqli_query($mysqli, $sql_edit_announcement);
	if ($edit_announcement == false) {
		die('Помилка: ' .mysqli_error($mysqli));
	} 
}



/* 
Пагинация на главной странице
*/

// Поверка, есть ли GET запрос
if (isset($_GET['pageno'])) {
    // Если да то переменной $pageno присваиваем его
    $pageno = $_GET['pageno'];
} else { // Иначе
    // Присваиваем $pageno один
    $pageno = 1;
}
// Назначаем количество данных на одной странице
$size_page = 3;
// Вычисляем с какого объекта начать выводить
$offset = ($pageno-1) * $size_page;
// SQL запрос для получения количества элементов
$count_sql = "SELECT COUNT(*) FROM `announcement`";
// Отправляем запрос для получения количества элементов
$result = mysqli_query($mysqli, $count_sql);
// Получаем результат
$total_rows = mysqli_fetch_array($result)[0];
// Вычисляем количество страниц
$total_pages = ceil($total_rows / $size_page);
// Создаём SQL запрос для получения данных
$sql = "SELECT * FROM `announcement` ORDER BY id DESC LIMIT $offset, $size_page";
// Отправляем SQL запрос
$result_announcement = mysqli_query($mysqli, $sql);


/* Закройте соединение, как только оно становится ненужным */
mysqli_close($mysqli);
