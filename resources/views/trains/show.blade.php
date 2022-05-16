@extends('layouts.app')

@section('title', 'Train Info')

@section('content')
	<section id="train-detail">
		<a class="btn primary" href="{{ route('trains') }}">Back to Trains</a>
		<div class="container primary">
			<div class="train bold">
				<h4>Departure : {{ date('d-m-Y', strtotime($train->departure_date)) }} </h4>
				<p class="italic">Company: {{ $train->company }}</p>
				<p>
					From {{ $train->departure_station }} 
					at {{ date('H:i', strtotime($train->departure_time)) }}
				</p>
				<p>
					Arrival at {{ $train->arrival_station }}
					{{ date('H:i', strtotime($train->arrival_time)) }}
				</p>
				<p>Train n.{{ $train->train_code }}</p>
				<p>{{ $train->wagons }} wagons</p>
				<p>
					Schedule: {{ ($train->is_onScheduled) ? 'On time' : 'Delay'}}
				</p>
				<p class="text-secondary">
					Status: {{ ($train->is_cancelled) ? 'Cancelled' : 'Confirmed'}}
				</p>				
			</div>
		</div>
	</section>
@endsection