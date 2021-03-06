<?php    namespace Bakery\Managers;

class CustomerManager extends BaseManager{
	public function getRules()
	{
		$rules = [
			'full_name' 		=> 'required',
			//'email'				=> 	'required|email|unique:customers,email,'.$this->entity->id,
			'email'				=> 	'required',
			//'password' => 'required|confirmed',
			//'password_confirmation' => 'required',
			'invoice_address' 	=> 'required',
			'delivery_address' 	=> 'required',
			'phone_number' 		=> 'required',
			'register_number' 	=> 'required',
			'payment_period' => 'required'
		];
		
		return $rules;
	}
}


?>