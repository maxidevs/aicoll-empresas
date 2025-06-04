<!DOCTYPE html>
<html lang="es">

<head>
  @include('partials.head')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link
    href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.3.1/b-3.2.3/b-colvis-3.2.3/b-html5-3.2.3/r-3.0.4/datatables.min.css"
    rel="stylesheet" integrity="sha384-4eATK2O4yNiEV9wRCnt8BZ/HkefLqbFMgyLZ0dfv7SV+I2rJdR2ZEl/1Ipil+rRL"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="grid min-h-screen grid-rows-[1fr,auto,1fr] bg-gray-50">
  @include('partials.header')
  <main class="mx-auto w-full max-w-[1400px] px-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1>Lista de Empresas</h1>
      <a href="{{ route('companies.create') }}" class="btn btn-primary">Crear Empresa</a>
    </div>
    <table id="companyTable" class="table w-full">
      <thead>
        <tr>
          <td></td>
          <td>NIT</td>
          <td>Nombre</td>
          <td>Direccion</td>
          <td>Telefono</td>
          <td>Status</td>
          <td>Fecha Creacion</td>
          <td>Fecha Modificacion</td>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
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
  <script
    src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.3.1/b-3.2.3/b-colvis-3.2.3/b-html5-3.2.3/r-3.0.4/datatables.min.js"
    integrity="sha384-06KMLq9Ek+FkNuuAu9pHJLfuYCbsZVZ0/UKBlTJfOmfZOvVCrnxCg7YFRW/02n0Z" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
</body>

</html>
