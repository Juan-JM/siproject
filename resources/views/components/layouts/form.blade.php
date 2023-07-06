<x-layouts.app :title="$title">
  <div class="container mt-4">
    <h2 class="p-2 p-sm-3 mt-2 d-inline">{{ $title }}</h2>
    <form action="{{ $route }}" method="POST">
      @csrf
      @method($method)
      <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 d-flex container-fluid shadow-lg mt-4 m-0 rounded py-3" style="border: 1px solid #E0E0E0;">
        {{ $slot }}    
      </div>
      <div class="container d-flex justify-content-between mt-4">
        <button type="submit" class="btn btn-success px-2 px-sm-5">Guardar</button>
        <a href="{{ $btnSecondaryRoute }}" type="button" class="btn btn-secondary px-2 px-sm-5">{{ $btnSecondaryText }}</a>
      </div>
    </form>
  </div>
</x-layouts.app>