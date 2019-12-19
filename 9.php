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
            echo "";   
        } 
    }       
    // function insert($table,$colum,$values){
    //     $sql = "INSERT INTO $table ($colum) VALUES ($values);";
    //     $insert = $this->conn->query($sql);
    //     if ($insert == true){
    //         echo " thành công";
    //     } else {
    //         echo " k thành công".$this->conn->error;
    //     }   
    // }
    function select($table,$where){
        $sql = "SELECT * FROM $table WHERE $where;";
        $select = $this->conn->query($sql);
       $rows =  mysqli_fetch_assoc($select);
        if ($select == true){
                echo "";
            } else {
                echo " k thành công".$this->conn->error;
            } 
            return $rows;  
    }
    function select1($table1,$where1){
        $sql = "SELECT * FROM $table1 WHERE $where1;";
        $result = mysqli_query($this->conn, $sql);
        return $result;  
    }
    // function insert1($table1,$colum1,$values1){
    //     $sql = "INSERT INTO $table1 ($colum1) VALUES ($values1);";
    //     $insert1 = $this->conn->query($sql);
    //     if ($insert1 == true){
    //         echo " thành công";
    //     } else {
    //         echo " k thành công".$this->conn->error;
    //     }   
    // }
    // function select1($table1){
    //     $sql = "SELECT * FROM $table1";
    //     $select1 = $this->conn->query($sql);
    //    $rows =  mysqli_fetch_all($select1);
    //     if ($select1 == true){
    //             echo " thành công";
    //         } else {
    //             echo " k thành công".$this->conn->error;
    //         } 
    //         return $rows;  
    // }
    
    // function update($table,$colum1,$values1){
    //     $sql = "UPDATE $table SET $colum1 = $values1;";
    //     $update = $this->conn->query($sql);
    //     if ($update === TRUE){
    //     echo " thành công";
    //     } else {
    //     echo " k thành công". $this->conn->error;
    //     }   
    // }
    // function delete($table,$where){
    // $sql = "DELETE FROM $table WHERE $where";
    // $delete = $this->conn->query($sql);
    //     if ($delete === TRUE){
    //     echo " thành công";
    //     } else {
    //     echo " k thành công". $this->conn->error;
    //     }   
    // }
}      
    // $db = new dbconnect();
    // $db->connect();
    // $table = 'awards';
    // $colum = "employee,award,award1";
    // $values = "'Employee of The Month','Some detail of Award and more','Some detail of Award and more'";
    // $db->insert($table,$colum,$values);

    // $table = 'user';
    // $colum = "name,password";
    // $values = "'anhnguyen','123456'";
    // $db->insert($table,$colum,$values);

    // $table1 = 'experience';
    // $colum1 = "time,name,conten";
    // $values1 = "'2016-2019','CÔNG TY TOYODENSO','đã từng làm việc và có thêm kinh nghiêm về vận hành máy móc'";
    // $db->insert1($table1,$colum1,$values1);

    // $rows = $db->select1($table1,$table1);
    // var_dump($rows);

    // $table = 'education';
    // $colum = "time,school,conten";
    // $values = "'2014-2018','CĐ xây dựng công trình đô thị','Đã học 3 năm'";
    // $db->insert($table,$colum,$values);

    // $table = 'education';
    // $where = 'id=1';
    // $db->delete($table,$where);

    // $rows = $db->select($table);
    // var_dump($rows);
    // foreach($rows as $row){
    //     var_dump($row);
    //     echo "<br>";
    // }


?>







