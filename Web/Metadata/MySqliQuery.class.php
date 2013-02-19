<?php

class MysqliQuery{
    public static function formatInsertSqlQuery($table,$keyarray,$valuearray){
        
        if(empty($table)){
            echo "未指定数据表名";
            return null;
        }
        if(empty($keyarray)||empty($valuearray)){
            return null;
        }
        
        $key_string = implode(',',$keyarray);
        $value_string = implode(',',$valuearray);

        $sql = 'INSERT INTO {$table} ({$key_string}) VALUES ({$value_string})';
        
        return $sql;
    }
    public static function formatSelectSqlQuery($table,$keyarray,$wherearray,$orderarray,$grouparray,$order,$limit){
        

        $sql = 'SELECT';
        return $sql;
    }
    public static function formatUpdateSqlQuery($table,$keyarray,$valuearray,$wherearray,$limit){
        if(empty($table)){
            echo "未指定数据表名";
            return null;
        }
        if(empty($keyarray)||empty($valuearray)){
            return null;
        }

        

        $sql = 'UPDATE {$table} SET ';
        return $sql;
    }
    public static function formatDeleteSqlQuery($table,$keyarray,$wherearray,$limit){
        
        $sql = '';
        return $sql;
    }

    private function _formatWhereSql($wherearray){
        
    }
    
    private function _formatOrderBySql($orderarray){
        
    }
    private function _formatGroupBySql($grouparray){
        
    }
}


