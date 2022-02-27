<x-app-layout>

<div class="container py-8">
	<h1 class="text-4xl font-bold text-gray-600">{{$viaje->destino}}</h1>

	<div class="text-lg text-gray-500 mb-2">
		(descripcion){{$viaje->descripcion}}
	</div>

	<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
		<div class="lg:col-span-2">
			<figure>
				@if($viaje->image)
				<img class="w-full h-80 object-cover object-center" src="{{ Storage::url($viaje->image->url) }}">
				@else
				<img class="w-full h-80 object-cover object-center" src="">
				@endif
			</figure>
			<div class="text-base text-gray-500 mt-4">aca podria ir otra descripcion o algo..</div>
		</div>

		<aside>
			<h1 class="text-2xl font-bold text-gray-600 mb-4">(raza)Mas en {{$viaje->raza->nombre}}</h1>
			<ul>
				@foreach($similares as $s)
					<li class="mb-4">
						<a class="flex" href="{{route('viajes.show', $s)}}">
							<!---<img class="w-36 h-20 object-cover object-center" src="">---->
							@if($s->image)
							    <img class="w-36 h-20 object-cover object-center" src="{{ Storage::url($s->image->url) }}">
							@else
								<img class="w-36 h-20 object-cover object-center" src="">
							@endif
							<span class="ml-2 text-gray-600">{{$s->destino}}</span>
						</a>
					</li>
				@endforeach
			</ul>
		</aside>
	</div>
</div>

</x-app-layout>