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
        function connect(){
            $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
            if (!$this->conn){
                die("Connection failed: ".$this->conn);
            }else{
                echo "kết nối thành công";   
            } 

        }
        function insert($table,)
        function select($table,$where){
            $sql = "SELECT * FROM $table where $where ;";
            $select = $this->conn->query($sql);
               $rows =  mysqli_fetch_assoc($select);
                if ($select == true){
                        echo " thành công";
                    } else {
                        echo " k thành công".$this->conn->error;
                    } 
                    return $rows;  
        }     
    // }      
    $db = new dbconnect();
    $db->connect();
    // $table = 'user';
    // $where = 'id = 1';
    // $rows = $db->select($table,$where);
    // var_dump($rows);
    // foreach($rows as $row){
    //     var_dump($row);
    //     echo "<br>";
    }
?>    