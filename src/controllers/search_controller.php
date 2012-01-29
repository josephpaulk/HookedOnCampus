<?php
/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 9:15 PM
 */
    ini_set('display_errors', 1); 
    ini_set('log_errors', 1); 
    ini_set('error_log', dirname(__FILE__) . '/error_log.txt'); 
    error_reporting(E_ALL); 

    require_once '../utils/db.php';

    $db = new DB();
    

    $bodytype = $_POST['bodytype'];
	$ethnicity = $_POST['ethnicity'];
	$faculty = $_POST['faculty'];
	$faculty = $_POST['hair'];
	$faculty = $_POST['height'];

    
    $db->sanitize($bodytype);
    $db->sanitize($ethnicity);
    $db->sanitize($faculty);
    $db->sanitize($hair);
	$db->sanitize($height);
    
	$query = 'SELECT user_id FROM userattributes WHERE (';
	$first = 0;
	if($bodytype){
		if($first){
			$first = 1;
		} else {
			$query.=',';
		}	
		$query.='bodytype_id = '.$bodytype;
	}
	if($ethnicity){
		if($first){
			$first = 1;
		} else {
			$query.=','
		}	
		$query.='ethnicity_id = '.$ethnicity;
	}
	if($hair){
		if($first){
			$first = 1;
		} else {
			$query.=',';
		}	
		$query.='hair_colour_id = '.$hair;
	}
	if($height){
		if($first){
			$first = 1;
		} else {
			$query.=',';
		}	
		$query.='height_id = '.$height;
	}
	$query.=')';

    $res = $db->db_query($query);
    
    $entry = $db->db_fetch($res);
    
    
    $redir = 'Location:../../profile.php?id='.$entry['user_id'];
    //echo $redir;
    header($redir);
?>