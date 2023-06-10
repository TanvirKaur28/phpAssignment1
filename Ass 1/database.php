<?php
class Database{
    private $connection ;
    function __construct(){
        
$this->connect_db();
}
public function connect_db(){
    $this -> connection = mysqli_connect(hostname: '172.31.22.43', username:'Tanvir200539522', password:'LDvq_hfsF8',database:'Tanvir200539522');
    if(mysqli_connect_error()){
        die("Connection failed". mysqli_connect_error());
    }
}
    public function create($address,$name,$size,$email,$cheese,$toppings){
        $sql="INSERT INTO pizza (address,name,size,email,cheese,toppings) VALUES('$address','$name','$size','$email','$cheese','$toppings')";
    $result = mysqli_query($this->connection, $sql);
    if($result){
        return true;
    }else{
        return false;
    }
}   
public function sanitize($var) {
    $return = $this->connection->real_escape_string($var);
    return $return;
}
}
$database = new Database();
?>

