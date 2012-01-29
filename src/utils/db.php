<?php
class DB
{
	private $url, $user, $pass;
	function __construct()
	{
		$this->user = 'admin';
		$this->url = 'localhost';
		$this->pass = 'hobo1234';
		$this->connect();
	}
	
     function __destruct()
     {
         mysql_close();
     }        
    
    
   	function connect()
	{
		mysql_connect($this->url, $this->user, $this->pass) or die(mysql_error());
		mysql_select_db('hooked') or die(mysql_error());
	}
	
	function db_query($query)
	{
		//$clean_query = $this->sanitize($query);
		$result = mysql_query($query);
		return $result;
	}
	
	function db_fetch($result)
	{
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	public function sanitize($data)
	{
		// remove whitespaces (not a must though)
		$data = trim($data); 
		
		// apply stripslashes if magic_quotes_gpc is enabled
		if(get_magic_quotes_gpc())
		{
		$data = stripslashes($data);
		}
		
		// a mySQL connection is required before using this function
		$data = mysql_real_escape_string($data);
		
		return $data;
	}
	
}
   
?>