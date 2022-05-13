@extends('layouts.app')

@section('title', 'Trains')

@section('content')
	<section id="trains">
		@foreach ($trains as $train)
			<div class="train">
				<span>{{ $train->departure_date }}</span>
				<span>{{ $train->company }}</span>
				<span>{{ $train->departure_station }}</span>
				<span>{{ $train->arrival_station }}</span>
				<span>{{ $train->departure_time }}</span>
				<span>{{ $train->arrival_time }}</span>
				<span>{{ $train->train_code }}</span>
				<span>{{ $train->wagons }}</span>
				<span>In orario: {{ ($train->is_onScheduled) ? 'Sì' : 'No'}}</span>
				<span>Status {{ ($train->is_cancelled) ? 'Cancellato' : 'Confermato'}}</span>
			</div>
		@endforeach
	</section>
@endsection