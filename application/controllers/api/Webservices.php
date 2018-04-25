 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Webservices extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();	

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        // $this->methods['user_get']['limit'] = 500; // 500 requests per hour per user/key
        // $this->methods['user_post']['limit'] = 100; // 100 requests per hour per user/key
        // $this->methods['user_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model('webservices/webservices_model'); 
    }
  
    
   
    
    function registration_post(){
        
        
        
        // array for JSON response
        //$response = array();
        
        // check for required fields
        $result1="Inserted Successfully";
        $user_detailes = json_decode(file_get_contents('php://input'),true);
        
        $message =$this->session->flashdata('message', 'EmailId already exists');
            
        
        // $pos = array_search($valToReplace, $array);
        $email= $user_detailes['email'];  
       
        //echo "<pre>";print_r($user_detailes); echo "</pre>";exit;
        $regtr = $this->public_model->search_mail_id_in_loginTB($email);
        if($regtr == 0){
        $response = array(
            'user_type' => isset($user_detailes['user_type']) ? ($user_detailes['user_type']) : "",
            'f_name' => isset($user_detailes['f_name']) ? ($user_detailes['f_name']) : "",
            'l_name' => isset($user_detailes['l_name']) ? ($user_detailes['l_name']) : "",
            'gender' => isset($user_detailes['gender']) ? ($user_detailes['gender']) : "",
            'dob' => isset($user_detailes['dob']) ? ($user_detailes['dob']) : "",
            'email' => isset($user_detailes['email']) ? ($user_detailes['email']) : "",
            'mobile' => isset($user_detailes['mobile']) ? ($user_detailes['mobile']) : "",
            'password' => isset($user_detailes['password']) ? (md5($user_detailes['password'])) : "",
        );
        
        $result = $this->webservices_model->insert_register_data($response);
        if ($result) {
            $this->response($response, 200); // 200 being the HTTP response code
        } else {
            $this->response(NULL, 404);
        }
        
        } 
        else {
            
          
            $this->response($message, 200); // 200 being the HTTP response code
                     }
       
        //file_put_contents("register.txt",print_r($rawdata,true));
        //echo "connected";
        /* if(sizeOf($user_detailes)>0){
            foreach($user_detailes as $users) { 
                print_r($users);exit;
                
                $response []= array(
                    
                    'user_id' => isset($users[0]['user_id']) ? ($users[0]['user_id']) : "",
                    'user_type' => isset($users[0]['user_type']) ? ($users[0]['user_type']) : "",
                    'f_name' => isset($users[0]['f_name']) ? ($users[0]['f_name']) : "",
                    'l_name' => isset($users[0]['l_name']) ? ($$users[0]['l_name']) : "",
                    'gender' => isset($users[0]['gender']) ? ($users[0]['gender']) : "",
                    'dob' => isset($users[0]['dob']) ? ($users[0]['dob']) : "",
                    'email' => isset($users[0]['email']) ? ($users[0]['email']) : "",
                    'mobile' => isset($users[0]['mobile']) ? ($users[0]['mobile']) : "",
                    'password' => isset($users[0]['password']) ? ($users[0]['password']) : "",
                    'profile_pic' => isset($users[0]['profile_pic']) ? ($users[0]['profile_pic']) : "",
                     
                    );
            }
            print_r($response);exit;
            $result = $this->webservices_model->insert_register_data($response);
            
            if ($result) {
                $this->response($result, 200); // 200 being the HTTP response code
            } else {
                $this->response(NULL, 404);
            }
        } else {
            $this->response(NULL, 404);
        } */
        //$result = $this->webservices_model->insert_register_data($user_detailes);
        
        
    }  
    
    
    function web_login_post(){
        
        // array for JSON response
        $response = array();
        $result="Login Successfull";
        $result2="you have entered wrong password";
        $result3="you have entered wrong email";
        $result5="you have entered wrong email and password";
        // check for required fields
        $user_detailes = json_decode(file_get_contents('php://input'),true);
        //file_put_contents("register.txt",print_r($rawdata,true));
        //echo "connected";
         $email= $user_detailes['email'];  
         $password= $user_detailes['password'];  
       
               
                /* $response = array(
                    
                    'email' =>isset($users[0]['email']) ? ($users[0]['email']) : "",
                    'password' => isset($users[0]['password']) ? ($users[0]['password']) : "",
                     
                ); */
                $password_check= $this->webservices_model->check_login_password($password);
                $email_check= $this->webservices_model->check_login_email($email);
                
                
                
                if ($email_check=='0' && $password_check=='0') {
                   
                    $this->response($result5, 200); // 200 being the HTTP response code
                }
               
                elseif ($password_check=='0') {
                    $this->response($result2, 200); // 200 being the HTTP response code
                }  
               
                elseif ($email_check=='0') {
                    $this->response($result3, 200); // 200 being the HTTP response code
                }  
                $result1 = $this->webservices_model->insert_login_data($email,$password);
                $total= $this->webservices_model->total_login_data($email);
                
                
                //print_r($result1); exit;
                if ($result1=='1') {
                    $this->response($total, 200); // 200 being the HTTP response code
                } else {
                    
                    $this->response($result5, 200);
                }
           
         
    }
     
     
	
	function get_address_by_id_get(){
	    
	    $user_id = $_GET['user_id'];
	    $response = array();
	    $result = $this->webservices_model->address_details($user_id);
	    
	   // $jsonObject = json_encode($result);
	    
	    if ($result) {
	        $json = array("status" => 1, "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	        
  	         
  	    } else {
  	        $json = array("status" =>" No Results Found", "info" => $result);
  	        header('Content-type: application/json');
  	        echo json_encode($json);
  	    }  
	    
	    
	    
	    
  	    
	  // echo json_encode($response);
	     
	    
	}
	 
	function get_service_offred_get(){
	    
	    
	    $response = array();
	    $result = $this->webservices_model->service_details();
	    
	    
	    if ($result) {
	        $json = array("status" => 1, "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	        
	        
	    } else {
	        $json = array("status" =>" No Results Found", "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	    }  
	    
	   /*  $jsonObject = json_encode($result);
	    // print_r($result);exit;
	    if ($jsonObject) {
	        $this->response($jsonObject, 200); // 200 being the HTTP response code
	    } else {
	        $this->response(NULL, 404);
	    } */
	    
	}
	
	function get_delivery_type_get(){
	    
	    
	    $response = array();
	    $result = $this->webservices_model->delivery_details();
	    
	    
	    if ($result) {
	        $json = array("status" => 1, "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	        
	        
	    } else {
	        $json = array("status" =>" No Results Found", "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	    }
	    
	    /*  $jsonObject = json_encode($result);
	     // print_r($result);exit;
	     if ($jsonObject) {
	     $this->response($jsonObject, 200); // 200 being the HTTP response code
	     } else {
	     $this->response(NULL, 404);
	     } */
	    
	}
	
	function get_item_cat_get(){
	    
	    
	    $response = array();
	    $result = $this->webservices_model->item_cat_details();
	    if ($result) {
	        $json = array("status" => 1, "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	        
	        
	    } else {
	        $json = array("status" =>" No Results Found", "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	    }  
	}
	
	function get_items_by_cat_get(){
	    
	    $item_cat = $_GET['item_cat'];
	    $response = array();
	    $result = $this->webservices_model->items_by_cat_details($item_cat);
	    
	    if ($result) {
	        $json = array("status" => 1, "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	        
	        
	    } else {
	        $json = array("status" =>" No Results Found", "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	    }  
	    
	}
	
	function get_detergents_get(){
	    
	    
	    $response = array();
	    $result = $this->webservices_model->detergent_details();
	    
	    if ($result) {
	        $json = array("status" => 1, "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	        
	        
	    } else {
	        $json = array("status" =>" No Results Found", "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	    }  
	    
	}
	
	
	function get_order_by_user_id_get(){
	    
	    $user_id = $_GET['user_id'];
	    $response = array();
	    $result = $this->webservices_model->order_by_user_id_details($user_id);
	    
	    if ($result) {
	        $json = array("status" => 1, "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	        
	        
	    } else {
	        $json = array("status" =>" No Results Found", "info" => $result);
	        header('Content-type: application/json');
	        echo json_encode($json);
	    }  
	    
	}
	
	
 
	 
	 


}