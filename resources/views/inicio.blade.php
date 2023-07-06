<x-layouts.app title="Inicio">
	{{-- <x-store-input-text name="nombre"/> --}}
	<div class="container-fluid">
		<div class="d-flex align-items-center">
    <h2 class="p-2 p-sm-3 mt-2 d-inline">Usuarios</h2>
		<a href="" type="button" class="ms-1">
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
			</svg>
		</a>
		</div>
		<div class="table-responsive mx-0 mx-sm-3">
		<table class="table">
			<thead class="table-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Primero</th>
				<th scope="col">Último</th>
				<th scope="col">Opciones</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Mark</td>
				<td>Otto</td>
				<td class="d-flex">
        <a href="" type="button" class="me-2">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
					</svg>  
        </a>
        <form action="" class="d-inline">
					<button class="border-0 bg-transparent">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-trash3-fill" viewBox="0 0 16 16">
						<path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
          </svg>
					</button>
        </form>
				</td>
      </tr>
      <tr>
				<th scope="row">2</th>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
      </tr>
      <tr>
				<th scope="row">3</th>
				<td colspan="2">Larry the Bird</td>
				<td>@twitter</td>
      </tr>
			</tbody>
    </table>
		</div>
  </div>
</x-layouts.app>

