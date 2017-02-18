@extends('layouts.main')

@section('content')
	@foreach($allCars as $car)
		
		<div class="carObject">
			<div>
				{{ $car->title }}
			</div>
			<div class='imagesWrap'>
				@if(isset($allImages))
					@foreach($allImages as $image)
						@if ($car->id === $image->carId)
							<img src="{{ $image->path }}" width="200" id="picture_{{ $image->id }}" class="image">
						@endif
					@endforeach
				@endif
			</div>
			<div>
				Dies ist Auto Nr. {{ $car->id }}
			</div>
		</div>
		
	@endforeach
@stop