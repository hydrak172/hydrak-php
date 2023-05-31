<?php
    class BaseModel{
        // chuyen private thanh protected de cac thang con co the access vao thang cha
        protected $connect;

        public function __construct(){
            require_once './Core/Database.php';
            $db = new Database;
            $this->connect = $db->connect();
        }

        public function all($table = 'note'){
            $sql = "SELECT * FROM $table"; // Truy xuat vao table in database
            $results = mysqli_query($this->connect, $sql); // Lay duoc kq trong database
            $datas=[];

            //dung php de doc ra tung row trong database
            while($row=mysqli_fetch_assoc($results)){
                $datas[] = $row;
            }
            return $datas;
        }
        public function find($table, $id){
            $sql = "SELECT * FROM $table WHERE id = $id";
            $results = mysqli_query($this->connect, $sql);
            $data = mysqli_fetch_assoc($results);
            return $data;
        } 

        public function store($arrayData,$table = 'note'): string{

            $columns=implode(',',array_keys($arrayData));

            $arrayValues=array_map(function($item){return "'".$item."'";},array_values($arrayData));

            $values=implode(',',$arrayValues);

            $sql = "INSERT INTO $table ($columns) VALUES ($values)";

            $check= mysqli_query($this->connect ,$sql);

            return $check;
        }   
        public function delete($id,$table='note'){
            $sql = "DELETE FROM $table WHERE id =$id ";
            return mysqli_query($this->connect,$sql);
        } 


        function updateNew($arrayData,$table ='note',$id){
            $list=[];
    
            foreach($arrayData as $key =>$value){
                $list[]="$key='".$value."'";
            }
            $listData = implode(',',$list);
     
            $sql = "UPDATE $table set $listData where id=$id"; 

            return mysqli_query($this->connect,$sql);
        } 

        public function checkUserExists($table,$email):bool{
            $sql = "SELECT * FROM $table WHERE email = '$email'";
            $query = mysqli_query($this->connect,$sql);
            $rows = mysqli_num_rows($query);
            return $rows > 0 ? true : false ;  
        }
    }
?>