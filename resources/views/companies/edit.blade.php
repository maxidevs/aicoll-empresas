<!DOCTYPE html>
<html lang="es">

<head>
  @include('partials.head')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="grid min-h-screen grid-rows-[1fr,auto,1fr] bg-gray-50">
  @include('partials.header')
  <main class="mx-auto w-full max-w-[1400px] px-4">
    <div class="card m-auto" style="max-width: 700px;">
      <div class="card-header bg-primary text-white">
        <h3 class="mb-0">Editar Empresa</h3>
      </div>
      <div class="card-body">
        <form id="form-edit" action="{{ route('companies.update', $company) }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $company->name }}">
          </div>
          <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $company->address }}">
          </div>
          <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $company->phone }}">
          </div>
          <div class="form-group">
            <label for="nit">NIT</label>
            <input type="text" class="form-control" id="nit" name="nit" value="{{ $company->nit }}">
          </div>
          <div class="form-group">
            <label for="active">Estado</label>
            <select class="form-control" id="active" name="active">
              <option value="1" {{ $company->active ? 'selected' : '' }}>Activa</option>
              <option value="0" {{ $company->active ? '' : 'selected' }}>Inactiva</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </main>
  <footer>
    <div class="mx-auto w-full max-w-6xl px-4">
      <p class="text-center text-white">
        © 2025 Max Jimenez - Aicoll Development Department
      </p>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
