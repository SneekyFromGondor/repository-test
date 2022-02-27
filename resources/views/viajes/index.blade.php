<x-app-layout>

<div class="container">
	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
		@foreach($viajes as $v)
			<article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif " @if($v->image) style="background-image:url({{ Storage::url($v->image->url) }});" @else style="background-image:none;"@endif>
				<div class="w-full h-full px-8 flex flex-col justify-center">
					<div>
						<small class="inline-block px-3 h-6 bg-blue-600 rounded-full">{{$v->descripcion}}</small>
					</div>

					<h1 class="text-4xl text-black leading-8 font-bold">
						<a href="{{route('viajes.show', $v)}}">{{$v->destino}}</a>
					</h1>
				</div>
			</article>
		@endforeach
	</div>

	<div class="mt-4">
		{{$viajes->links()}}
	</div>
</div>
</x-app-layout>