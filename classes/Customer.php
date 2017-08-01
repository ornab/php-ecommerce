 <?php 
         
        $filepath = realpath(dirname(__FILE__));
        include_once ($filepath.'/../lib/Database.php');
        include_once ($filepath.'/../helpers/Format.php');
?>
<?php
class Customer{
   private $db; 
   private $fm;
    
    public function __construct(){
       
     $this->db = new Database();
     $this->fm = new Format();
    }
    public function customerRegistration($data){
         $name        = mysqli_real_escape_string($this->db->link, $data['name']);
         $address       = mysqli_real_escape_string($this->db->link, $data['address']);
         $city        = mysqli_real_escape_string($this->db->link, $data['city']);
         $country        = mysqli_real_escape_string($this->db->link, $data['country']);
         $zip          = mysqli_real_escape_string($this->db->link, $data['zip']);
         $phone        = mysqli_real_escape_string($this->db->link, $data['phone']);
         $email        = mysqli_real_escape_string($this->db->link, $data['email']);
         $pass       = mysqli_real_escape_string($this->db->link, md5($data['pass']));
         
        
           if($name == "" || $address == "" || $city == "" || $country == "" || $zip == "" || $phone == "" || $email == "" || $pass == ""){
            
            $msg = "<span class='error'> Fields must not be empty</span>";
            return $msg;
        }
        $mailquery = "select * from tbl_customer where email='$email' limit 1";
        $mailchk =$this->db->select($mailquery);
        if($mailchk !=false){
            $msg = "<span class='error'>Email already exists!</span>";
            return $msg;
        }
        
        else{
            $query = "insert into tbl_customer(name,address,city,country,zip,phone,email,pass) values('$name','$address','$city','$country','$zip','$phone','$email','$pass')";
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                $msg = "<span class='success'>Customer data inserted successfully!</span>";
                return $msg;
            }
            else{
                $msg = "<span class='error'>Customer data NOT inserted !</span>";
                return $msg;
            }
        }
        
    }
    
    public function customerLogin($data){
        $email        = mysqli_real_escape_string($this->db->link, $data['email']);
         $pass       = mysqli_real_escape_string($this->db->link, md5($data['pass']));
        if(empty($email) || empty($pass)){
             $msg = "<span class='error'> Fields must not be empty</span>";
            return $msg;
        }
        $query ="select * from tbl_customer where email ='$email' and pass ='$pass'";
        $result =$this->db->select($query);
        if($result !=false){
            $value = $result->fetch_assoc();
            Session::set("cusLogin",true);
            Session::set("cmrId",$value['id']);
            Session::set("cmrName",$value['name']);
            header("location:cart.php");
        }
        else{
            $msg = "<span class='error'>Email or Password not matched!</span>";
                return $msg;
        }
    }
    public function getCustomerData($id){
         $query = "select * from tbl_customer  where id='$id'";
          $result = $this->db->select($query);
          return $result;
    }
     public function customerUpdate($data,$cmrId){
         
         $name        = mysqli_real_escape_string($this->db->link, $data['name']);
         $address       = mysqli_real_escape_string($this->db->link, $data['address']);
         $city        = mysqli_real_escape_string($this->db->link, $data['city']);
         $country        = mysqli_real_escape_string($this->db->link, $data['country']);
         $zip          = mysqli_real_escape_string($this->db->link, $data['zip']);
         $phone        = mysqli_real_escape_string($this->db->link, $data['phone']);
         $email        = mysqli_real_escape_string($this->db->link, $data['email']);
         
         
        
           if($name == "" || $address == "" || $city == "" || $country == "" || $zip == "" || $phone == "" || $email == "" ){
            
            $msg = "<span class='error'> Fields must not be empty</span>";
            return $msg;
        }
      
        
        else{
         
            $query = "update tbl_customer
            set
            name    ='$name', 
            address ='$address', 
            city    ='$city', 
            country ='$country', 
            zip     ='$zip', 
            phone   ='$phone', 
            email   ='$email' 
            
            where id='$cmrId'";
            $updated_row = $this->db->update($query);
            if($updated_row){
                       $msg = "<span class='success'>Customer data updated successfully!</span>";
                return $msg;
            }
            else{
                $msg = "<span class='error'>customer data NOT updated !</span>";
                return $msg;
            }
            }
     }
    
}
?>