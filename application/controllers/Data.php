<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		auth_force();
		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('crud.php',(array)$output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function schools()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('schools');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);
	}

	
		public function classes()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('classes');
			$crud->display_as('school_id','School Name');
			$crud->set_relation('school_id','schools','name');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);
	}

	public function students()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('students');
			$crud->set_relation('school_id','schools','name');
			$crud->set_relation('class_id','classes','name');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);
	}

	public function alot_card()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('card_allotment');
			$crud->set_relation('card_id','cards','card_no');
			$crud->set_relation('student_id','students','name');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);
	}

	public function machines()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('machines');
			// $crud->display_as('school_id','School Name');
			// $crud->set_relation('school_id','schools','name');
			$crud->field_type('status','hidden','disabled');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);
	}

	public function machine_allotment()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('machine_allotment');
			// $crud->display_as('school_id','School Name');
			$crud->set_relation('machine_id','machines','{name} - {identification}');
			$crud->set_relation('class_id','classes','name');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);
	}

	public function cards()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('cards');
			// $crud->display_as('school_id','School Name');
			$crud->set_relation('machine_id','machines','{identification}');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);
	}

	public function cardDirectEntry(){
		Models\Cards::create($_GET);
	}


	function stockMgnt($primary_key , $row)
	{
	  return site_url('data/updateStock/'.$primary_key);
	}

	public function addCategory()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('sms_category');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);
	}

  public function addGstRates()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('gst');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);
	}

	public function previous_bills()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('sms_bill');
			$crud->display_as('id','Invoice No');
			$crud->where('is_booking',false);
			$crud->add_action('View', '', 'billing/details','ui-icon-search');
			$crud->columns('id','party_name','bill_total','bill_date');
			$crud->unset_delete();
			$crud->unset_read();
			if($crud->getState()=='add')
				redirect('billing/create');
			// $crud->unset_add();
			$crud->unset_edit();
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);
	}


	public function pre_bookings()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('sms_bill');
			$crud->display_as('bill_total','Booking Amount');
			$crud->callback_delete(array($this,'delete_pre_bookings'));
			$crud->display_as('bill_date','Booking Date');
			$crud->where('is_booking', true);
			$crud->add_action('View', '', 'billing/pre_bookings','ui-icon-search');
			$crud->add_action('Print', '', 'billing/print_bill','ui-icon-print');
			$crud->columns('id','party_name','bill_total','bill_date');
			$crud->unset_read();
			if($crud->getState()=='add')
				redirect('billing/create');
			// $crud->unset_add();
			$crud->unset_edit();
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);
	}

	function delete_pre_bookings($primary_key){
		
		 $bill = Models\SmsBill::where('id',$primary_key)->with('billingItems')->first();
		
		 foreach ($bill->billingItems as $key => $v) {
		 	 $obj = Models\SmsTiles::where('id', $v->tile_id)->first();
		 	 $obj->stock = $obj->stock + $v->stock;
		 	 $obj->save();
		 }
	
		 Models\SmsBill::where('id',$primary_key)->delete();
		 Models\SmsBillingItems::where('bill_id',$primary_key)->delete();

		 return true;
		 
	}
	
	public function updateStock($record_id)
	{
		
		$tileRecord = Models\SmsTiles::select('name','category_id','stock','separate_tiles_stock')
																   ->with('category')
																   ->where('id', $record_id)->first();
																   
		$this->load->view('data/update-stock',[
			'tile_record' => $tileRecord,
			'id' => $record_id
			]);
	}

	public function saveUpdatedStock()
	{  
		
		$data = $_POST;

		$mainStock = $data['stock'];

  	$mainStock = $mainStock + $data['boxes_increment'] - $data['boxes_decrement'];

		// Convert main stock boxes to tiles	
		$mainStockTiles = $mainStock * $data['tiles_per_box'];

		$mainStockTiles = $mainStockTiles + $data['separate_tiles_stock'] + $data['tiles_increment'] - $data['tiles_decrement'];
		//Convert tiles to boxes

		$mainStock = (int)($mainStockTiles / $data['tiles_per_box']);
	
			
		$separate_tiles = $mainStockTiles % $data['tiles_per_box'];
    $update = Models\SmsTiles::where('id',$data['id'])->update([
    		'stock' => $mainStock,
    		'separate_tiles_stock' => $separate_tiles
    	]);	

    if(!$update){
    	failure('Unable to update stock');
    	redirect('data/updateStock/'.$data['id']);
    }
		
		success('Stock updated successfully');
		redirect('data/updateStock/'.$data['id']);

	}


	function on_update_encrypt_password_callback($post_array){
		if($post_array['password'] != '__DEFAULT_PASSWORD_'){
      $password=$post_array['password'];
			$hasher = new PasswordHash(
	    		$this->config->item('phpass_hash_strength', 'tank_auth'),
		    	$this->config->item('phpass_hash_portable', 'tank_auth')
			);

			$post_array['password'] = $hasher->HashPassword($password);
			$post_array['activated'] = 1;
			return $post_array;
		}

		unset($post_array['password']);
		return $post_array;
	}

	  function edit_password_callback($post_array){
		return '<input type="password" class="form-control" value="__DEFAULT_PASSWORD_" name="password" style="width:462px">';
	}


}
