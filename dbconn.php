<?php      
class dbconnect {
      public $host;
      public $user;
      public $pass;
      public $db;
      public $conn;

    public function __construct() {
        $this->host = "localhost";
        $this->user = "root";
        $this->db = "bits";
        $this->pass = "";
    }
    function connect() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$this->conn) {
            die("Connection failed: ". $this->conn);
        }else {
            echo "";   
        } 
    }       
    function select($table) {
        $sql = "SELECT * FROM $table ;";
        $select = $this->conn->query($sql);
        $rows =  mysqli_fetch_assoc($select);
        if ($select == true) {
          echo "thành công";
        } else {
            echo " k thành công". $this->conn->error;
        } 
        return $rows;  
    }
    function select1($table1,$where1) {
        $sql = "SELECT * FROM $table1 WHERE $where1;";
        $result = mysqli_query($this->conn, $sql);
        return $result;  
    }  
    function insert($table,$colum,$values) {
        $sql = "INSERT INTO $table ($colum) VALUES ($values);";
        $insert = $this->conn->query($sql);
        if ($insert == true) {
            echo " thành công";
        } else {
            echo " k thành công".$this->conn->error;
        }   
    }
    function update($table,$colum,$values,$where) {
        $sql = "UPDATE $table SET $colum = '$values' WHERE $where;";
        $update = $this->conn->query($sql);
        if ($update === TRUE) {
          echo " thành công";
        } else {
          echo " k thành công". $this->conn->error;
        }   
    }
    function delete($table,$where) {
        $sql = "DELETE FROM $table WHERE $where";
        $delete = $this->conn->query($sql);
        if ($delete === TRUE) {
          echo " thành công";
        } else {
          echo " k thành công". $this->conn->error;
        }   
    }
}   
?>
