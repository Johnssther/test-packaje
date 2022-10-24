@extends('inspire::app')
@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('inspire.contacts.store') }}">
                    <div class="row">
                         <div class="mb-3 col-md-6">
                             <label for="name" class="form-label">Nombres</label>
                             <input type="text" class="form-control" id="name" name="name">
                         </div>
                         <div class="mb-3 col-md-6">
                             <label for="surname" class="form-label">Apellidos</label>
                             <input type="text" class="form-control" id="surname" name="surname">
                         </div>
                    </div>
                    <div class="row">
                         <div class="mb-3 col-md-6">
                             <label for="phone" class="form-label">Telefono</label>
                             <input type="number" class="form-control" id="phone" name="phone">
                         </div>
                         <div class="mb-3 col-md-6">
                             <label for="email" class="form-label">Correo</label>
                             <input type="email" class="form-control" id="email" name="email">
                         </div>
                    </div>
                     <input type="hidden" class="form-control" id="alert" name="alert" value="2">
                     <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
            </div>
        </div>
    </div>
@endsection
