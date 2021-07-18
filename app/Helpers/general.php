<?php

if ( ! function_exists('_lang')){
	function _lang($string=''){
		
		//Get Target language
		$target_lang = '';
		if(company_id() !=''){
			$target_lang = get_company_option('language');
		}
		
		if($target_lang == ''){
			$target_lang = get_option('language');
		}
		

		if($target_lang == ''){
			$target_lang = "language";
		}
		
		if(file_exists(resource_path() . "/language/$target_lang.php")){
			include(resource_path() . "/language/$target_lang.php"); 
		}else{
			include(resource_path() . "/language/language.php"); 
		}
		
		if (array_key_exists($string,$language)){
			return $language[$string];
		}else{
			return $string;
		}
	}
}

if ( ! function_exists('d_lang')){
	function d_lang($string=''){
		
		//Get Target language
		$target_lang = get_option('language');

		if(company_id() !=''){
			$target_lang = get_company_option('language');
		}

		if($target_lang == ""){
			$target_lang = "language";
		}
		
		if(file_exists(resource_path() . "/language/$target_lang.php")){
			include(resource_path() . "/language/$target_lang.php"); 
		}else{
			include(resource_path() . "/language/language.php"); 
		}
		
		if (array_key_exists($string,$language)){
			return $language[$string];
		}else{
			return $string;
		}
	}
}


if ( ! function_exists('startsWith')){
	function startsWith($haystack, $needle)
	{
		 $length = strlen($needle);
		 return (substr($haystack, 0, $length) === $needle);
	}
}


if ( ! function_exists('create_option')){
	function create_option($table,$value,$display,$selected="",$where=NULL){
		$options = "";
		$condition = "";
		if($where != NULL){
			$condition .= "WHERE ";
			foreach( $where as $key => $v ){
				$condition.=$key."'".$v."' ";
			}
		}

		$query = DB::select("SELECT $value, $display FROM $table $condition");
		foreach($query as $d){
			if( $selected!="" && $selected == $d->$value ){   
				$options.="<option value='".$d->$value."' selected='true'>".ucwords($d->$display)."</option>";
			}else{
				$options.="<option value='".$d->$value."'>".ucwords($d->$display)."</option>";
			} 
		}
		
		echo $options;
	}
}

if ( ! function_exists('get_table')){
	function get_table($table,$where=NULL) 
	{
		$condition = "";
		if($where != NULL){
			$condition .= "WHERE ";
			foreach( $where as $key => $v ){
				$condition.=$key."'".$v."' ";
			}
		}
		$query = DB::select("SELECT * FROM $table $condition");
		return $query;
	}
}


if ( ! function_exists('user_count')){
	function user_count($user_type) 
	{
		$count = \App\User::where("user_type",$user_type)
						->selectRaw("COUNT(id) as total")
						->first()->total;
	    return $count;
	}
}

if ( ! function_exists('has_permission')){
	function has_permission($name, $user_id) 
	{
		$permission = DB::table('permissions')
		          ->where('permission', $name)
		          ->where('user_id', $user_id)
				  ->get();
	    if ( ! $permission->isEmpty() ) {
		   return true;
		}
		return false;
	}
}


if ( ! function_exists('get_logo')){
	function get_logo() 
	{
		$logo = get_option("logo");
		if($logo ==""){
			return asset("public/images/company-logo.png");
		}
		return asset("public/uploads/$logo"); 
	}
}

if ( ! function_exists('get_company_logo')){
	function get_company_logo() 
	{
		$logo = get_company_option("company_logo");
		if($logo ==""){
			return asset("public/images/company-logo.png");
		}
		return asset("public/uploads/company/$logo"); 
	}
}

if ( ! function_exists('sql_escape')){
	function sql_escape($unsafe_str) 
	{
		if (get_magic_quotes_gpc())
		{
			$unsafe_str = stripslashes($unsafe_str);
		}
		return $escaped_str = str_replace("'", "", $unsafe_str);
	}
}

if ( ! function_exists('get_option')){
	function get_option($name, $optional="") 
	{
		$setting = DB::table('settings')->where('name', $name)->get();
	    if ( ! $setting->isEmpty() ) {
		   return $setting[0]->value;
		}
		return $optional;

	}
}

if ( ! function_exists('get_company_option')){
	function get_company_option($name, $optional='') 
	{
		$setting = DB::table('company_settings')
					->where('name', $name)
					->where('company_id', company_id())
					->get();
					
	    if ( ! $setting->isEmpty() ) {
		   return $setting[0]->value;
		}
		return $optional;

	}
}


if ( ! function_exists('timezone_list'))
{

 function timezone_list() {
  $zones_array = array();
  $timestamp = time();
  foreach(timezone_identifiers_list() as $key => $zone) {
    date_default_timezone_set($zone);
    $zones_array[$key]['ZONE'] = $zone;
    $zones_array[$key]['GMT'] = 'UTC/GMT ' . date('P', $timestamp);
  }
  return $zones_array;
}

}

if ( ! function_exists('create_timezone_option'))
{

 function create_timezone_option($old="") {
  $option = "";
  $timestamp = time();
  foreach(timezone_identifiers_list() as $key => $zone) {
    date_default_timezone_set($zone);
	$selected = $old == $zone ? "selected" : "";
	$option .= '<option value="'. $zone .'"'.$selected.'>'. 'GMT ' . date('P', $timestamp) .' '.$zone.'</option>';
  }
  echo $option;
}

}


if ( ! function_exists( 'get_country_list' ))
{
    function get_country_list( $old_data='' ) {
		if( $old_data == "" ){
			echo file_get_contents( app_path().'/Helpers/country.txt' );
		}else{
			$pattern='<option value="'.$old_data.'">';
			$replace='<option value="'.$old_data.'" selected="selected">';
			$country_list=file_get_contents( app_path().'/Helpers/country.txt' );
			$country_list=str_replace($pattern,$replace,$country_list);
			echo $country_list;
		}
    }	
}

if ( ! function_exists('decimalPlace'))
{

 function decimalPlace($number, $currency = ''){
	if($currency != ''){
		return $currency.' '.number_format((float)$number, 2);
	}
    return number_format((float)$number, 2);
 }

}


if( !function_exists('load_language') ){
	function load_language($active=''){
		$path = resource_path() . "/language";
		$files = scandir($path);
		$options="";
		
		foreach($files as $file){
		    $name = pathinfo($file, PATHINFO_FILENAME);
			if($name == "." || $name == "" || $name == "language"){
				continue;
			}
			
			$selected = "";
			if($active == $name){
				$selected = "selected";
			}else{
				$selected = "";
			}
			
			$options .= "<option value='$name' $selected>".$name."</option>";
		        
		}
		echo $options;
	}
}

if( !function_exists('get_language_list') ){
	function get_language_list(){
		$path = resource_path() . "/language";
		$files = scandir($path);
		$array = array();
		
		foreach($files as $file){
		    $name = pathinfo($file, PATHINFO_FILENAME);
			if($name == "." || $name == "" || $name == "language"){
				continue;
			}
	
			$array[] = $name;
		        
		}
		return $array;
	}
}

if( !function_exists('process_string') ){

 function process_string($search_replace,$string){
   $result = $string;
   foreach($search_replace as $key=>$value){
		$result = str_replace($key,$value,$result);
   }
   return $result;
 }

}

if ( ! function_exists('company_id')){
	function company_id()
	{
		if(Auth::check()){
			if( Auth::user()->company_id != ''){	 
				return Auth::user()->company_id; 
			}else if(Auth::user()->company_id == '' && Auth::user()->user_type == 'admin'){
                return '';
			}else{ 
				return Auth::user()->id;
			}
		}
		return ''; 
	}
}

if ( ! function_exists('membership_validity')){
	function membership_validity()
	{
		if( Auth::user()->company_id != "" ){	 
			$membership = DB::table('users')
					      ->where('id', company_id())
					      ->first();
			return $membership->valid_to; 		  
		}else{
			$membership = DB::table('users')
					      ->where('id', Auth::user()->id)
					      ->first();
			return $membership->valid_to;
		} 	
	}
}

if ( ! function_exists('permission_list')){
	function permission_list()
	{
		  
		$permission_list =  \App\AccessControl::where("user_id", Auth::user()->id)
											  ->pluck('permission')->toArray();;   
		
	    return $permission_list;
	}
}

if ( ! function_exists('currency')){
	function currency()
	{ 
		return get_company_option("currency_symbol", Auth::user()->currency);
	}
}

if ( ! function_exists('current_day_income')){
	function current_day_income()
	{ 
	    $compan_id = company_id();
		$date = date("Y-m-d");
		
		$query = DB::select("SELECT IFNULL(SUM(amount),0) as total FROM transactions 
		WHERE trans_date='$date' AND dr_cr='cr' AND company_id='$compan_id'");
        return $query[0]->total;		
	}
}

if ( ! function_exists('current_day_expense')){
	function current_day_expense()
	{ 
	    $compan_id = company_id();
		$date = date("Y-m-d");
		
		$query = DB::select("SELECT IFNULL(SUM(amount),0) as total FROM transactions 
		WHERE trans_date='$date' AND dr_cr='dr' AND company_id='$compan_id'");
        return $query[0]->total;		
	}
}

if ( ! function_exists('current_month_income')){
	function current_month_income()
	{ 
	    $compan_id = company_id();
		$month = date('m');
		$year = date('Y');
		
		$monthly_income = \App\Transaction::selectRaw("IFNULL(SUM(amount),0) as total")
										   ->where("dr_cr","cr")
										   ->where("company_id",$compan_id)
										   ->whereMonth("trans_date",$month) 
										   ->whereYear("trans_date",$year) 														
										   ->first()->total;
        return 	$monthly_income;					
	}
}

if ( ! function_exists('current_month_expense')){
	function current_month_expense()
	{ 
	    $compan_id = company_id();
		$month = date('m');
		$year = date('Y');
		
		$monthly_expense = \App\Transaction::selectRaw("IFNULL(SUM(amount),0) as total")
											->where("dr_cr","dr")
											->where("company_id",$compan_id)
											->whereMonth("trans_date",$month) 
											->whereYear("trans_date",$year) 														
											->first()->total;
        return 	$monthly_expense;		
	}
}


if ( ! function_exists('get_financial_balance'))
{

 function get_financial_balance(){
   $company_id = company_id();
 
   $result = DB::select("SELECT b.*,((SELECT IFNULL(opening_balance,0) 
   FROM accounts WHERE id = b.id)+(SELECT IFNULL(SUM(amount),0) 
   FROM transactions WHERE dr_cr = 'cr' AND account_id = b.id))-(SELECT IFNULL(SUM(amount),0) 
   FROM transactions WHERE dr_cr = 'dr' AND account_id = b.id) as balance 
   FROM accounts as b WHERE b.company_id='$company_id'");
   return $result;

 }

}

if ( ! function_exists('invoice_status')){
	function invoice_status($status)
	{
		if($status == 'Unpaid'){
			return "<span class='label label-danger'>$status</span>"; 
		}else if($status == 'Paid'){
			return "<span class='label label-success'>$status</span>"; 
		}else if($status == 'Partially_Paid'){
			return "<span class='label label-info'>". str_replace('_',' ',$status)."</span>"; 
		}else if($status == 'Canceled'){
			return "<span class='label label-danger'>$status</span>"; 
		}
	}
}


if ( ! function_exists('payment_method')){
	function payment_method($pm, $company_id)
	{	
	   $payment_method = \App\PaymentMethod::where('name', $pm)->where("company_id",$company_id);
	   if($payment_method->exists()){
	      return $payment_method->first()->id;
	   }else{
		  $payment_method = new \App\PaymentMethod();
		  $payment_method->name = $pm;
		  $payment_method->company_id = $company_id;
		  $payment_method->save();
		  return $payment_method->id;
	   }
	}
}	

if ( ! function_exists('increment_invoice_number')){
	function increment_invoice_number()
	{
        $company_id = company_id();		
		$data = array();
        $data['value'] = get_company_option('invoice_starting') + 1; 
        $data['company_id'] = $company_id; 
        $data['updated_at'] = date('Y-m-d H:i:s');
        
        if(\App\CompanySetting::where('name', "invoice_starting")->where("company_id",$company_id)->exists()){				
           \App\CompanySetting::where('name','invoice_starting')
                         ->where("company_id",$company_id)
                         ->update($data);			
        }else{
           $data['name'] = 'invoice_starting'; 
           $data['created_at'] = date('Y-m-d H:i:s');
           \App\CompanySetting::insert($data); 
        }
	}
}

if ( ! function_exists( 'get_currency_symbol' ))
{
	function get_currency_symbol( $currency_code ) {
		include(app_path().'/Helpers/currency_symbol.php');
        
		if (array_key_exists($currency_code, $currency_symbols)){
			return html_entity_decode($currency_symbols[$currency_code], ENT_QUOTES, 'UTF-8');
		}
		return "";
		
	}
}
