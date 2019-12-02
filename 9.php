<?php      
class dbconnect {
      public $host;
      public $user;
      public $pass;
      public $db;
      public $conn;

    public function __construct(){
        $this->host = "localhost";
        $this->user = "root";
        $this->db = "bits";
        $this->pass = "";
    }
    function connect(){
        $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        if (!$this->conn){
            die("Connection failed: ".$this->conn);
        }else{
            echo "kết nối thành công";   
        } 
    }       
    function insert($table,$colum,$values){
        $sql = "INSERT INTO $table ($colum) VALUES ($values);";
        $insert = $this->conn->query($sql);
        if ($insert == true){
                echo " thành công";
            } else {
                echo " k thành công".$this->conn->error;
            }   
    }

    function select($table){
        $sql = "SELECT * FROM $table";
        $select = $this->conn->query($sql);
        $select = $this->conn->query($sql);
        if ($select == true){
                echo " thành công";
            } else {
                echo " k thành công".$this->conn->error;
            }   
    }

    function update($table,$colum1,$values1){
        $sql = "UPDATE $table SET $colum1 = $values1;";
        $update = $this->conn->query($sql);
        if ($update === TRUE){
        echo " thành công";
        } else {
        echo " k thành công". $this->conn->error;
        }   
    }
    function delete($table,$where){
    $sql = "DELETE FROM $table WHERE $where";
    $delete = $this->conn->query($sql);
        if ($delete === TRUE){
        echo " thành công";
        } else {
        echo " k thành công". $this->conn->error;
        }   
    }
}      
    $db = new dbconnect();
    $db->connect();
    $table = 'education';
    $colum = "time,school,conten";
    $values = "'2014-2108','cdxdctdt','nd'";
    $db->insert($table,$colum,$values);

    $table = 'education';
    $colum1 = "time";
    $values1 = "'2017'";
    $db->update($table,$colum1,$values1);

    $table = 'education';
    $where = 'id=1';
    $db->delete($table,$where);

    $table = 'education';
    $db->select($table);
?>






