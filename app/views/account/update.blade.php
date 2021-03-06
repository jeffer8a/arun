@extends('layout')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6">


			<p>

				{{ Form::model($user, ['route' => 'update', 'method' => 'PUT', 'role' => 'form']) }}
				
				<legend> Update user </legend>

				<fieldset>
				
				{{ Form::hidden('id', $user->id ) }}

				{{ Field::text('full_name') }}

				{{ Field::email('email') }}

				{{ Field::text('address') }}

				{{ Field::text('phone_number') }}

				{{ Field::text('register_number') }}

				{{ Field::text('bank_account') }}

				{{ Field::password('password') }}

				{{ Field::password('password_confirmation') }}

				</fieldset>

				<div class="">
					<input type="submit" value="Update" class="btn btn-success">

					<a href="{{ route('profile') }}" class="btn btn-primary"> Go Back </a>
				</div>

				{{ Form::close() }}
			</p>


		</div>
	</div>
</div>


@endsection