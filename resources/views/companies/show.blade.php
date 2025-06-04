<!DOCTYPE html>
<html lang="es">

<head>
  @include('partials.head')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="grid min-h-screen grid-rows-[1fr,auto,1fr] bg-gray-50">
  @include('partials.header')

  <main class="mx-auto w-full max-w-[1400px] px-4">
    <div class="bg-body-tertiary rounded-3 p-5 text-center">
      <span>NIT: {{ $company->nit }}</span>
      <h1 class="text-body-emphasis">{{ $company->name }}</h1>
      <ul class="list-group list-group-flush mb-4">
        <li class="list-group-item"><strong>Dirección:</strong> {{ $company->address }}</li>
        <li class="list-group-item"><strong>Teléfono:</strong> {{ $company->phone }}</li>
        <li class="list-group-item"><strong>NIT:</strong> {{ $company->nit }}</li>
        <li class="list-group-item">
          <strong>Estado:</strong>
          @if ($company->active)
            <span class="badge bg-success fs-6">Activa</span>
          @else
            <span class="badge bg-danger fs-6">Inactiva</span>
          @endif
        </li>
      </ul>
      <div class="d-inline-flex mb-5 gap-2">
        <a href="{{ route('companies.edit', $company) }}" class="btn btn-primary rounded-pill px-4" type="button">
          Editar
        </a>
        <a href="{{ route('companies.index') }}" class="btn btn-outline-secondary rounded-pill px-4" type="button">
          Volver
        </a>
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
</body>

</html>
