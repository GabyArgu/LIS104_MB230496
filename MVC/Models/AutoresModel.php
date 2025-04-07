<?php
require_once 'Model.php';
class AutoresModel extends Model{
    public function get($id=''){
        if($id==''){
            $query="SELECT * FROM autores";
            return $this->get_query($query);
        }
        else{
            $query="SELECT * FROM autores WHERE codigo_autor=:codigo";
            return $this->get_query($query,['codigo'=>$id]);
        }
    }

    public function insert($autor=array()){
        $query="INSERT INTO autores VALUES (:codigo_autor,:nombre_autor,:telefono)";
        return $this->set_query($query,$autor);
    }

    public function delete($id=''){
        $query="DELETE FROM autores WHERE codigo_autor=:codigo_autor";
        return $this->set_query($query,['codigo_autor'=>$id]);
    }

    public function update($autor=array()){
        $query="UPDATE autores SET nombre_autor=:nombre_autor, telefono=:telefono WHERE codigo_autor=:codigo_autor";
        return $this->set_query($query,$autor);
    }
}