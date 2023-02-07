<?php
class Database{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "testing";

    private $conn = false;
    private $result = array();
    private $mysql = "";
    public function __construct(){
        if(!$this->conn)
        {
            $this->mysql = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            $this->conn=true;
      
            if($this->mysql->connect_error)
            {
                array_push($this->result, $this->mysql->connect_error);
                
            }
        }
    } 
   //Function to INSERT from the database
    public function insert($table,$params=array()){
        if($this->tableExist($table)){
            echo "<pre>";
            print_r($params);
            $table_columns = implode(',', array_keys($params));
            $table_value = implode("','", $params);
           $sql1 = "INSERT INTO $table($table_columns) VALUES('$table_value')";
            $result = $this->mysql->query($sql1);
            if($result){
                array_push($this->result, $this->mysql->insert_id);
                return true;    
            }else{
                array_push($this->result, $this->mysql->error);
                return false; 
            }

        }else{
            return false;
        }

    }
    //Function to UPDATE from the database
    public function update($table,$params=array(),$where=null){
        if($this->tableExist($table)){
            $args = array();
            foreach ($params as $key => $value) {
                $args[] = "$key = '$value'";
            }
            // echo "<pre>";
            // print_r($args);
             $sql = "UPDATE $table SET " .implode(',',$args);
            if ($where != null) {
                $sql .=" WHERE $where";
            }
            // echo $sql;
            $updres = $this->mysql->query($sql);
            if($updres){
                array_push($this->result, $this->mysql->affected_rows);
            }else {
                array_push($this->result, $this->mysql->error);
            }
        }
    }
    //Function to DELETE from the database
    public function delete($table,$where=null){
        if($this->tableExist($table)){
            $sql = "DELETE FROM $table";
            if($where!=null){
                $sql .= " WHERE $where";
            }
            // echo $sql;
            if($this->mysql->query($sql)){
                array_push($this->result, $this->mysql->affected_rows);
            }else{
                array_push($this->result, $this->mysql->error);
            }
        }
    }
    //Function to SELECT from the database
    public function select($table,$rows="*",$join=null,$where=null,$order=null,$limit=null){
        if ($this->tableExist($table)) {
            $sqls = "SELECT $rows FROM $table";
            if($join!= null){
                $sqls .= "JOIN $join";
            }
            if($where != null){
                $sqls = " WHERE $where";
            }
            if($order != null){
                $sqls = "ORDER $order";
            }
            if($limit != null){
                $sqls = "LIMIT 0 $limit";
            }
            echo $sqls;
            $query = $this->mysql->query($sqls);
        if($query){
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
        }else{
            array_push($this->result, $this->mysql->error);
        }
        }else{

        }

    }
    public function sql($sql){
        $query = $this->mysql->query($sql);
        if($query){
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
        }else{
            array_push($this->result, $this->mysql->error);
        }
    }

    private function tableExist($table){
        $sql="SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb = $this->mysql->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows==1){
                return true;
            }else{
                array_push($this->result, $table . "does not exist in the databse");
                return false;
            }
        }
    }
    public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
    }
    public function __destruct(){
        if($this->conn){
            if($this->mysql->close()){
                $this->conn= false;
                
            }
        }else{
           
        }
    }
}
?>