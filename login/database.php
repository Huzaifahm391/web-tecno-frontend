<?php  
    class database{
        private $connection;

        public function connect_db(){
            $this->connection = mysqli_connect('localhost','root','','project');
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            if(mysqli_connect_error()){
                die("<hr><br>Database Connection Failed<br>".mysqli_connect_error().mysqli_connect_errorno());
            }
        }
        function __construct(){
            $this->connect_db();
        }

        public function create($country,$mobile,$user,$pass,$email){
            $sql="INSERT INTO account(country_name,ph_nmbr,usr_name,pss,email) VALUES ('$country','$mobile','$user','$pass','$email')";
            $res=mysqli_query($this->connection, $sql);
            if($res){
                return true;
            }
   else{
                return false;
            }
        }

        public function read($id=null){
            $sql = "SELECT * FROM `account`";
            if($id){$sql .=" WHERE usr_name='$id'";}
            $res = mysqli_query($this->connection,$sql);
            return $res;
            }
        public function sanitize($var){
                $return=mysqli_real_escape_string($this->connection,$var);
                return $return;
                }
            
        }

       

    
    $database = new database();
    $database->connect_db();

?>