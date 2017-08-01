 <?php 
         
        $filepath = realpath(dirname(__FILE__));
        include_once ($filepath.'/../lib/Database.php');
        include_once ($filepath.'/../helpers/Format.php');
?>
<?php
class Brand{
   private $db; 
   private $fm;
    
    public function __construct(){
       
     $this->db = new Database();
     $this->fm = new Format();
    }
    
        public function brandInsert($brandName){
         $brandName = $this->fm->validation($brandName);
        
         $brandName = mysqli_real_escape_string($this->db->link, $brandName);
        if(empty($brandName)){
            $msg = "<span class='error'>Brand field must not be empty</span>";
            return $msg;
        }
        else{
            $query = "insert into tbl_brand(brandName) values('$brandName')";
            $brandinsert = $this->db->insert($query);
            if($brandinsert){
                $msg = "<span class='success'>Brand name inserted successfully!</span>";
                return $msg;
            }
            else{
                $msg = "<span class='error'>Brand name NOT inserted !</span>";
                return $msg;
            }
        }
    }
    
    public function getAllBrand(){
        $query = "select * from tbl_brand order by brandId desc";
        $result = $this->db->select($query);
        return $result;
    }
    
    
       public function getBrandById($id){
        $query = "select * from tbl_brand where brandId = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    
    public function brandUpdate($brandName,$id){
        $brandName = $this->fm->validation($brandName);
        
         $brandName = mysqli_real_escape_string($this->db->link, $brandName);
         $id = mysqli_real_escape_string($this->db->link, $id);
        if(empty($brandName)){
            $msg = "<span class='error'>Brand field must not be empty</span>";
            return $msg;
        }
        else{
            $query = "update tbl_brand set brandName='$brandName' where brandId='$id'";
            $updated_row = $this->db->update($query);
            if($updated_row){
                       $msg = "<span class='success'>Brand updated successfully!</span>";
                return $msg;
            }
            else{
                $msg = "<span class='error'>Brand NOT updated !</span>";
                return $msg;
            }
            }
        }
    
       public function delBrandById($id){
        $query = "delete from tbl_brand where brandId = '$id'";
        $deldata = $this->db->delete($query);
        if($deldata){
                 $msg = "<span class='success'>Brand Name deleted successfully!</span>";
                return $msg;
            }
            else{
                $msg = "<span class='error'>Brand Name NOT deleted !</span>";
                return $msg;
            }
    }
    
}
?>
    
   