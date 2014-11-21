<<<<<<< HEAD
<?php



namespace Bakery\Repositories;

use Illuminate\Database\Query\Expression as raw;
=======
<?php    namespace Bakery\Repositories;

>>>>>>> a9be94725565da93483ae462162a3f6d17656327
use Bakery\Entities\Order;
use Bakery\Entities\Status;

class OrderRepo extends BaseRepo {

	public function getModel()
	{
		return new Order;
	}

	public function getList()
	{
		return Order::orderBy('id','DESC')->paginate(12);
	}
	
	public function newOrder()
	{
		$order = new Order();
		return $order;
	}

	public function getLast()
	{
		$order = Order::orderBy('id', 'DESC')->first();
		return $order;
	}
<<<<<<< HEAD
=======

	public function customer(){
		return $this->belongsTo('Bakery\Entities\Customer');
	}
>>>>>>> a9be94725565da93483ae462162a3f6d17656327

	public function status($status){
		
		$orders = Order::with('status','customer')
		->join('status','orders.id', '=' ,'status.order_id')
		->where('status.id','=',
			new raw('(select `id` from `status` 
				where `order_id` = `orders`.`id` order by `id` desc limit 1)'))
		->where('status.status', '=' , $status)
		->paginate(12);
		return $orders;
	}
}

?>