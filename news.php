<?php

class News extends db{

    public function getNews(){
        $parameters = array();
        $result = array();
        
        $stmt = $this->mysqli->prepare('SELECT * FROM news ORDER BY id DESC') or die ("Problem");
        $stmt->execute();
        $meta = $stmt->result_metadata();
        

        while ($field = $meta->fetch_field()){
            $parameters[] = &$row[$field->name];
        }

        call_user_func_array(array($stmt,'bind_result'),$parameters);

        while ($stmt->fetch()){
            $x = array();
            foreach ($row as $key => $val) {
                $x[$key]=$val;
            }
            $results[]=$x;
        }
        return $results;
    }

 public function getById($id){
        $parameters = array();
        $result = array();
        
        $stmt = $this->mysqli->prepare('SELECT * FROM news WHERE id = ? ') or die ("Problem");
        $stmt->bind_param('s',$id);
        $stmt->execute();
        $meta = $stmt->result_metadata();
        

        while ($field = $meta->fetch_field()){
            $parameters[] = &$row[$field->name];
        }

        call_user_func_array(array($stmt,'bind_result'),$parameters);

        while ($stmt->fetch()){
            $x = array();
            foreach ($row as $key => $val) {
                $x[$key]=$val;
            }
            $results[]=$x;
        }
        return $results;
    }
    

    
}