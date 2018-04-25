 <?php
class Webservices_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function insert_register_data($response)
	{
	     return $vv = $this->db->insert('users',$response);
	   // print_r($vv);exit;
	    
	   // return true;
	}
	
	function insert_login_data($email,$password)
	{
	    
	    $this->db->select('*');
	    $this->db->from('users');
	    $this->db->like('email', $email);
	    $this->db->like('password', md5($password));
	    $query = $this->db->get();
	      return $query->num_rows();
	    
	   
	}
 
	
	function check_login_email($email)
	{
	    
	    $this->db->select('*');
	    $this->db->from('users');
	    $this->db->like('email', $email);
	    $query = $this->db->get();
	    return $query->num_rows();
	    
	    
	}
	
	function check_login_password($password)
	{
	    
	    $this->db->select('*');
	    $this->db->from('users');
	      $this->db->like('password', md5($password));
	    $query = $this->db->get();
	    return $query->num_rows();
	    
	    
	}
	
	function total_login_data($email)
	{
	    
	    $this->db->select('*');
	    $this->db->from('users');
	    $this->db->where('email', $email);
	    $query = $this->db->get();
	    return $query->result();
	    
	    
	}
	
	function search_mail_id_in_loginTB($email)
	{
	    $this->db->select('*');
	    $this->db->from('users');
	    $this->db->like('email', $email);
	    $query = $this->db->get();
	    return $query->num_rows();
	}
	
	 
	 
	 
	
	function login_details($phone,$password){
	    $password = md5($password);
	    $this->db->select('*');
	    $this->db->from('users');
	    $this->db->where('mobile',$phone);
	    $this->db->where('password',$password);
	    $this->db->where('is_active',1);
	    $this->db->where('is_delete',0);
	    $query = $this->db->get();
	    return $query->result();
	    
	    
	}
	
	function address_details($user_id){
	    
	    $this->db->select('*');
	    $this->db->from('address');
	    $this->db->where('user_id',$user_id);
	    $this->db->where('is_active',1);
	    $this->db->where('is_delete',0);
	    $query = $this->db->get();
	    return $query->result();
	    
	    
	}
	
	function service_details(){
	    
	    $this->db->select('*');
	    $this->db->from('service_offered');
	   	$query = $this->db->get();
	    return $query->result();
	    
	    
	}
	
	function delivery_details(){
	    
	    $this->db->select('*');
	    $this->db->from('delivery_type');
	    $query = $this->db->get();
	    return $query->result();
	    
	    
	}
	
	function items_by_cat_details($item_cat){
	    
	    $this->db->select('*');
	    $this->db->from('prices');
	    $this->db->join('service_offered', 'service_offered.service_id = prices.service_id', 'left');
	    $this->db->join('items', 'items.item_id = prices.item_id', 'left');
	    $this->db->join('item_cat', 'prices.item_cat = item_cat.item_cat_id', 'left');
	   // $this->db->group_by('user.place_id');
	    $this->db->where('prices.item_cat',$item_cat);
	    $query = $this->db->get();
	    return $query->result();
	    
	    
	}
	
	function order_by_user_id_details($user_id){
	    
	    $this->db->select('*');
	    $this->db->from('orders');
	    $this->db->join('ordererd_items','ordererd_items.order_id = orders.order_id', 'left');
	    //$this->db->join('items','ordererd_items.item_id = items.item_id', 'left');
	    $this->db->join('service_offered','service_offered.service_id = orders.service_id', 'left');
	    //$this->db->join('item_cat','items.item_cat = item_cat.item_cat_id', 'left');
	    //$this->db->join('ordererd_items', 'ordererd_items.order_id = orders.order_id', 'left');
	    
	    // $this->db->group_by('user.place_id');
	    $this->db->where('orders.user_id',$user_id);
	    $query = $this->db->get();
	    return $query->result();
	    
	    
	}
	
	
	function item_cat_details(){
	    
	    $this->db->select('*');
	    $this->db->from('item_cat');
	    $query = $this->db->get();
	    return $query->result();
	    
	    
	}
	
	function detergent_details(){
	    
	    $this->db->select('*');
	    $this->db->from('detergents');
	    $this->db->join('detergent_type','detergents.detergent_type = detergent_type.detergent_type_id' , 'left');
	    //$this->db->where('user_id',$user_id);
	    $query = $this->db->get();
	    return $query->result();
	    
	    
	}
	
	 
	 
	
	 

}