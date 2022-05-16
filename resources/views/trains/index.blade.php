@extends('layouts.app')

@section('title', 'Trains')

@section('content')
	<section id="trains">
		<div class="container primary">
			@foreach ($trains as $train)
				<div class="train bold">
					<div class="departure cell">
						<h5>Departure</h5>
						<p class="text-secondary">
							Date: {{ date('d-m-Y', strtotime($train->departure_date)) }} 
						</p>
						<h6 class="italic">
							Company: {{ $train->company }}
						</h6>
						<p>Station: {{ $train->departure_station }}</p>
						<p class="text-secondary">
							Date: 
							{{ date('H:i', strtotime($train->departure_time)) }}
						</p> 
					</div>
					<div class="arrival cell">
						<div>
							<h5>Arrival</h5>
							<p>Station: {{ $train->arrival_station }}</p>
						</div>
						<p class="text-secondary">
							Time: {{ date('H:i', strtotime($train->arrival_time)) }}
						</p>
					</div>
					<div class="info cell txt-smaller">
						<h5>Train n.{{ $train->train_code }}</h5>
						<p>{{ $train->wagons }} wagons</p>
						<a class="btn secondary" href="{{ route('trains-detail', $id = $train->id) }}">Info</a>
					</div>				
				</div>
			@endforeach
			<div id="pagination">
				{{ $trains->links() }}
			</div>
		</div>
	</section>
@endsection