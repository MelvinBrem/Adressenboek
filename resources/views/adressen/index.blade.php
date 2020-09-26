@extends('layouts.app')

@section('content')
<head>
  <meta charset="UTF-8">
  <title>Adressenboek - index</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
  <div class="container mt-2">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Adressenboek</h2>
        </div>
        <div class="pull-right mb-2">
          <a class="btn btn-success" href="{{ route('adressen.create') }}"> Maak adres </a>
        </div>
      </div>
    </div>
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
  <table class="table table-bordered">
    <tr>
      <th>ID</th>
      <th>Naam</th>
      <th>Adres</th>
      <th width="280px">Action</th>
    </tr>
    @foreach($adressen as $adres)
    <tr>
      <td class="id">{{ $adres->id }}</td>
      <td class="naam">{{ $adres->naam }}</td>
      <td class="adres">{{ $adres->adres }}</td>
      <td>
      <form action="{{ route('adressen.destroy',$adres->id) }}" method="Post">
        <a class="btn btn-primary" href="{{ route('adressen.edit',$adres->id) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      </td>
    </tr>
    @endforeach
  </table>
</body>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
@endsection
