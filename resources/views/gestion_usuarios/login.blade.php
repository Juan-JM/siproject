<x-layouts.root title="Login">
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5 d-none d-lg-block">
              <img src="{{ asset('img/city.svg') }}" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <h2 class="my-4">Iniciar Sesión</h2>
              <form action="{{ route('login') }}" method="POST">
                @csrf  
                
                <div class="form-floating mb-3">
                  <input name="nombre" value="{{ old('nombre') }}" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Nombre de usuario</label>
                </div>
      
                <!-- Password input -->
                <div class="form-floating mb-3">
                  <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                  <label for="floatingPassword">Contraseña</label>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input name="remember_token" class="form-check-input me-2" type="checkbox" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Recuerdame
                    </label>
                  </div>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
                </div>
      
              </form>
            </div>
          </div>
        </div>
        {{-- <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2023. All rights reserved.
          </div>
          <!-- Copyright -->
        </div> --}}
      </section>
</x-layouts.root>