@extends('inspire::app')

@section('content')
    <div class="container mt-4">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">CODIGO</th>
                <th scope="col">NOMBRES</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">CORREO</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->surname }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->email }}</td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
