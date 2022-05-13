@extends('layouts.app')

@section('title', 'Trains')

@section('content')
	<section id="trains">
		<div class="container primary">
			@foreach ($trains as $train)
				<div class="train bold">
					<div class="departure cell">
						<h4 class="text-secondary">{{ $train->departure_date }} </h4>
						<h6 class="italic">{{ $train->company }}</h6>
						<p>{{ $train->departure_station }}</p>
						<p class="text-secondary">
							{{ $train->departure_time }}
						</p> 
					</div>
					<div class="arrival cell">
						<h5>Arrival</h5>
						<p>{{ $train->arrival_station }} {{ $train->arrival_time }}</p>
					</div>
					<div class="info cell txt-smaller">
						<p>Train n.{{ $train->train_code }}</p>
						<p>{{ $train->wagons }} wagons</p>
						<p>{{ ($train->is_onScheduled) ? 'On time' : 'Delay'}}</p>
						<p class="text-secondary">{{ ($train->is_cancelled) ? 'Cancelled' : 'Confirmed'}}</p>
					</div>				
				</div>
			@endforeach
		</div>
	</section>
@endsection