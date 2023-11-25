<?php 
    function CommentFind($select = ['*'],$where = 1){
        return find("comments",$select,$where);
    }
    function CommentInsert($data=[]){
        return insert("comments",$data);
    }
    function CommentAll($select = ['*'],$where = 1){
        return all("comments",$select, $where);
    }
    function CommentDelete($id){
        return delete("comments",$id);
    }
?>