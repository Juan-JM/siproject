<x-layouts.app :title="$title">
  	<div class="container-fluid">
		<div class="d-flex align-items-center mt-4">
    		<h2 class="p-2 p-sm-3 d-inline">{{ $title }}</h2>
			<a href="{{ $routeCreate }}" type="button" class="ms-1" title="Agregar {{ $tooltip }}">
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
			</svg>
			</a>
		</div>
		<div class="table-responsive mx-0 mx-sm-3">
		<table class="table align-middle">
			<thead class="table-dark">
				<tr>
				<th scope="col">#</th>
				@foreach ($headers as $header)
				<th scope="col">{{ $header }}</th>
				@endforeach
				<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				{{ $slot }}
			</tbody>
    	</table>
		<div class="d-flex justify-content-md-end">
			{!! $data->links() !!}
		</div>
		</div>
	</div>
</x-layouts.app>
