
<?php

class DatabaseClass  
{  
    private $host = "localhost";  
    private $username = "root"; 
    private $password = ""; 
    private $db = "interviewmanagementsystem"; 
    
    public  function __construct()  
    {  
        mysql_connect($this -> host, $this -> username, $this -> password) or die(mysql_error("database"));  
        mysql_select_db($this -> db) or die(mysql_error("database"));  
    }  
    
    // this method used to execute mysql query  
    
    protected function query_executed($sql)  
    {  
        $c = mysql_query($sql);  
        return $c;  
    }  
    
    public function get_rows($fields, $id = NULL, $tablename = NULL)  
    {  
        $cn = !emptyempty($id) ? " WHERE $id " : " ";  
        $fields = !emptyempty($fields) ? $fields : " * ";  
        $sql = "SELECT $fields FROM $tablename $cn";  
        $results = $this - > query_executed($sql);  
        $rows = $this - > get_fetch_data($results);  
        return $rows;  
    }  
    
    protected  function get_fetch_data($r)  
    {  
        $array = array();  
        while ($rows = mysql_fetch_assoc($r))  
        {  
            $array[] = $rows;  
        }  
        return $array;  
    }  
}  

?>