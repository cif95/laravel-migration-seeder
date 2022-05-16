@extends('layouts.app')

@section('title', 'Train Info')

@section('content')
	<section id="train-detail">
		<div class="container primary">
			<div class="train bold">
				<h5>Departure {{ date('d-m-Y', strtotime($train->departure_date)) }} </h5>
				<h6 class="italic">Company: {{ $train->company }}</h6>
				<p>From {{ $train->departure_station }} at {{ date('H:i', strtotime($train->departure_time)) }}</p>
				<h5>Arrival: </h5>
				<p>{{ $train->arrival_station }} {{ date('H:i', strtotime($train->arrival_time)) }}</p>
				<p>Train n.{{ $train->train_code }}</p>
				<p>{{ $train->wagons }} wagons</p>
				<p>{{ ($train->is_onScheduled) ? 'On time' : 'Delay'}}</p>
				<p class="text-secondary">{{ ($train->is_cancelled) ? 'Cancelled' : 'Confirmed'}}</p>				
			</div>
			<a class="btn primary" href="{{ route('trains') }}">Back to Trains</a>
		</div>
	</section>
@endsection