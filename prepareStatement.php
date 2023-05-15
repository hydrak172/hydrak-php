<?php 
    function prepareInsertyStatement($arrayData,$table='hydrak'){
                $columns=implode(',',array_keys($arrayData));
                $arrayValues=array_map(function($item){return "'".$item."'";},array_values($arrayData));
                $values=implode(',',$arrayValues);
                return "INSERT INTO $table ($columns) VALUES ($values)";
    }
    function prepareUpdateStatement($arrayData,$table ='hydrak',$id): string{
        $list=[];

        foreach($arrayData as $key =>$value){
            $list[]="$key='".$value."'";
        }
        $listData = implode(',',$list);

        return "UPDATE $table set $listData where id=$id";
    }
    function prepareDeleteStatement($table,$id):string{
        return "DELETE FROM $table WHERE id =$id ";
    }

    function prepareSelectStatement($table,$select=['"'],$orderByList=[]){
        $selectList=implode(',',$select);

        $list= [];
        foreach($orderByList as $key => $value){
            $list[]="$key $value";
        }
        $orderByList=implde('',$list);
        $sql="SELECT $selectList FROM $table";
        if(!empty($orderByList)){
            $sql .= "ORDER BY $orderByList";
        }
        return $sql;
    }
    function prepareFindStatement($table ,$id){
        return "SELECT * FROM $table WHERE id =$id";
        }
?>