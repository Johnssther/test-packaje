@extends('inspire::app')

<style>

    
    .contacts {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
    }
</style>
@section('content')
    <div class="container mt-4">
        <a class="btn btn-sm btn-success" href="{{ route('inspire.contacts.create') }}">Crear Contacto</a>

        <div class="contacts mt-3">
            @foreach ($contacts as $item)
                <div class="card">
                    <div class="card-body bg-{{ $item->alert }}">
                        <p class="text-bold" style="position: absolute; top:5px; right:5px;">{{ $item->id }}</p>
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted text-white">{{ $item->surname }}</h6>
                        <p class="card-text">{{ $item->phone }}</p>
                        <p class="card-text">{{ $item->email }}</p>
                        @if ( $item->alert == 5 )
                            <div> <button class="btn btn-sm btn-danger">Urgente</button> </div>
                        @elseif( $item->alert == 4 ) 
                            <div> <button class="btn btn-sm" style="background: rgb(214, 131, 29); color: white">Proximo</button> </div>
                        @else    
                            <div></div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
