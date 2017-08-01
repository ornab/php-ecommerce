 <?php 
         
        $filepath = realpath(dirname(__FILE__));
        include_once ($filepath.'/../lib/Database.php');
        include_once ($filepath.'/../helpers/Format.php');
?>
<?php
class Category{
   private $db; 
   private $fm;
    
    public function __construct(){
       
     $this->db = new Database();
     $this->fm = new Format();
    }
    
    public function catInsert($catName){
         $catName = $this->fm->validation($catName);
        
         $catName = mysqli_real_escape_string($this->db->link, $catName);
        if(empty($catName)){
            $msg = "<span class='error'>Category field must not be empty</span>";
            return $msg;
        }
        else{
            $query = "insert into tbl_category(catName) values('$catName')";
            $catinsert = $this->db->insert($query);
            if($catinsert){
                $msg = "<span class='success'>category inserted successfully!</span>";
                return $msg;
            }
            else{
                $msg = "<span class='error'>category NOT inserted !</span>";
                return $msg;
            }
        }
    }
    
    public function getAllCat(){
        $query = "select * from tbl_category order by catId desc";
        $result = $this->db->select($query);
        return $result;
    }
    public function getCatById($id){
        $query = "select * from tbl_category where catId = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    
    public function catUpdate($catName,$id){
        $catName = $this->fm->validation($catName);
        
         $catName = mysqli_real_escape_string($this->db->link, $catName);
         $id = mysqli_real_escape_string($this->db->link, $id);
        if(empty($catName)){
            $msg = "<span class='error'>Category field must not be empty</span>";
            return $msg;
        }
        else{
            $query = "update tbl_category set catName='$catName' where catId='$id'";
            $updated_row = $this->db->update($query);
            if($updated_row){
                       $msg = "<span class='success'>category updated successfully!</span>";
                return $msg;
            }
            else{
                $msg = "<span class='error'>category NOT updated !</span>";
                return $msg;
            }
            }
        }
    public function delCatById($id){
        $query = "delete from tbl_category where catId = '$id'";
        $deldata = $this->db->delete($query);
        if($deldata){
                 $msg = "<span class='success'>category deleted successfully!</span>";
                return $msg;
            }
            else{
                $msg = "<span class='error'>category NOT deleted !</span>";
                return $msg;
            }
    }
        
    }


?>