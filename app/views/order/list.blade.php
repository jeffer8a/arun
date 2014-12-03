@extends('layout')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">

  
  <h2>Orders List</h2>
  <p>

    
    {{ Form::open(['route' => 'orders/search', 'method' => 'POST', 'role' => 'search', 'class' => 'navbar-form navbar-left']) }}
      <div class="form-group">
        {{ Field::text('customer','',array('placeholder' => 'name')) }}
        {{ Field::date('delivery_date','',array('placeholder' => 'date')) }}
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{ route('orders/list') }}" class="btn btn-success">View all</a>
    {{ Form::close() }}

  </p>

  <table class="table table-striped table-bordered">
    <thead>
    <tr>
      <th>Order</th>
      <th>Customer</th>
      <th>Updated by</th>
      <th>Delivery date</th>
      <th>Status</th>
      <th>Payment</th>
      <th>Actions</th>
    </tr>
    </thead>
    <tbody>
  @foreach ($list as $order)
      <tr>
        <td>{{ Format::code($order->order_id) }}</td>
        <td>{{ $order->customer->full_name }}</td>
        <td>{{ $order->user->full_name }}</td>
        <td>{{ $order->delivery_date }}</td>
        <td>{{ $order->status }}</td>
        <td>

          @if($order->payment == 'pending payment')
          <a href="{{ route('order/paid', [$order->order_id])}}" class="btn btn-xs btn-danger">
            set as paid
          </a>
          @else
          <a href="{{ route('order/restore', [$order->order_id])}}" class="btn btn-xs btn-success">
            return payment
          </a>
          @endif

        </td>

        <td width="130">
          <div class="btn-group" role="group">
	          <a href="{{ route('orders/view', [$order->order_id])}}" class="btn btn-xs btn-primary">
	          see
	          </a>
	          <a href="{{ route('detail', [$order->order_id])}}" class="btn btn-xs btn-warning">
	          edit
	          </a>
            <a href="{{ route('invoice', [$order->order_id])}}" class="btn btn-xs btn-info">
            print
            </a>
          </div>
        </td>
      </tr>
  @endforeach
    </tbody>
  </table>

  {{ $list->links() }}





</div>
@stop