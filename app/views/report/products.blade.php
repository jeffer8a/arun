@extends('layout')

@section('content')

	<div class="container">
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Select date range</strong>
			</div>
			<div class="panel-body">
			    {{ Form::open(['route' => 'report/sellProducts', 'method' => 'POST', 'role' => 'search', 'class' => 'navbar-form navbar-left']) }}
			      <div class="form-group">
			        {{ Field::date('from') }}
			      </div>
			      <div class="form-group">
			        {{ Field::date('to') }}
			      </div>

			      <div class="form-group">
					{{ Field::select('chart', $type) }}
			      </div>
			      <button type="submit" class="btn btn-primary">Generate chart</button>
			    {{ Form::close() }}
			</div>
		</div>

@if(isset($chart))


		<center>
		<div style="width:80%">
			<div class="panel panel-default">
			<div class="panel-body">
			@foreach($data_list as $data)
				<span class="label" style="padding:5px; margin:4px; color:#000; background-color:rgba({{ $data['color']}}, 1)">{{$data['product']}}</span>
			@endforeach
			</div>
			</div>
			<div>
				<canvas id="canvas" height="350" width="600"></canvas>
			</div>
		</div>
		</center>


	
	<script>

		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels : [{{ $labels }}],
			datasets : [
				@foreach($data_list as $data)
				{
					label: "{{ $data['product'] }}",
					fillColor : "rgba({{ $data['color'] }},0.4)",
					strokeColor : "rgba({{ $data['color'] }},1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : [{{ $data['data'] }}]
				},
				@endforeach
				
				{}
			]

		}

	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myLine = new Chart(ctx).{{$chart}}(lineChartData, {
			responsive: true
		});
	}
	</script>

	@endif

</div>


@stop