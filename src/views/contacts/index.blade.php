@extends('inspire::app')

<style>
    /* 
    1 azul
    2 verde
    3 amarillo
    4 naranja
    5 rojo
    */
    .bg-1 { background: rgb(134, 134, 241); }
    .bg-2 { background: rgb(131, 248, 131); }
    .bg-3 { background: yellow; }
    .bg-4 { background: orange; }
    .bg-5 { background: rgb(255, 104, 104); }
    
</style>
@section('content')
    <div class="container mt-4">
        <a class="btn btn-sm btn-success" href="{{ route('inspire.contacts.create') }}">Crear Contacto</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">CODIGO</th>
                <th scope="col">NOMBRES</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">CORREO</th>
                <th scope="col">ACCION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $item)
                <tr class="bg-{{ $item->alert }}">
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->surname }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->email }}</td>
                    @if ( $item->alert == 5 )
                        <td> <button class="btn btn-sm btn-danger">Urgente</button> </td>
                    @elseif( $item->alert == 4 ) 
                        <td> <button class="btn btn-sm" style="background: rgb(214, 131, 29); color: white">Proximo</button> </td>
                    @else    
                        <td></td>
                    @endif
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
