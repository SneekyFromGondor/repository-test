<x-app-layout>

<div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
	<h1 class="uppercase text-center text-3xl font-bold">Raza: {{$raza->nombre}}</h1>

	@foreach($viajes as $v)
		<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
			@if($v->image)
				<img class="w-full h-72 object-cover object-center" src="{{ Storage::url($v->image->url) }}">
			@else
				<img class="w-full h-72 object-cover object-center" src="">
			@endif
			<!----<img class="w-full h-72 object-cover object-center" src="">---->
			<div class="px-6 py-4">
				<h1 class="font-bold text-xl mb-2"><a href="{{route('viajes.show', $v)}}">{{$v->destino}}</a></h1>
				<div class="text-gray-700 text-base">
					{{$v->descripcion}}
				</div>
			</div>

			<div class="px-6 pt-4 pb-2">
				<a href="#" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">etiqueta)?</a>
			</div>
		</article>
	@endforeach
	<div class="mt-4">{{$viajes->links()}}</div>
</div>

</x-app-layout>