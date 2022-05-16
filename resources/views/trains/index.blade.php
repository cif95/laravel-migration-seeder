@extends('layouts.app')

@section('title', 'Trains')

@section('content')
	<section id="trains">
		<div class="container primary">
			@foreach ($trains as $train)
				<div class="train bold">
					<div class="departure cell">
						<h5>Departure</h5>
						<h4 class="text-secondary">
							{{ date('d-m-Y', strtotime($train->departure_date)) }} 
						</h4>
						<h6 class="italic">{{ $train->company }}</h6>
						<p>{{ $train->departure_station }}</p>
						<p class="text-secondary">
								{{ date('H:i', strtotime($train->departure_time)) }}
						</p> 
					</div>
					<div class="arrival cell">
						<h5>Arrival</h5>
						<p>{{ $train->arrival_station }} {{ date('H:i', strtotime($train->arrival_time)) }}</p>
					</div>
					<div class="info cell txt-smaller">
						<p>Train n.{{ $train->train_code }}</p>
						<p>{{ $train->wagons }} wagons</p>
						<p>{{ ($train->is_onScheduled) ? 'On time' : 'Delay'}}</p>
						<p class="text-secondary">{{ ($train->is_cancelled) ? 'Cancelled' : 'Confirmed'}}</p>
						<a href="{{ route('trains-detail', $id = $train->id) }}">View More</a>
					</div>				
				</div>
			@endforeach
			<div id="pagination">
				{{ $trains->links() }}
			</div>
		</div>
	</section>
@endsection