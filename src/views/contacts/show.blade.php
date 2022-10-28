@extends('inspire::app')
@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-dark text-white text-capitalize">
                Contactar a:  {{ $contact->name }} {{ $contact->surname }}
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('inspire.contacts.store') }}">
                    <div class="row">
                         <div class="mb-3 col-md-6">
                             <label for="name" class="form-label">Nombres</label>
                             <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" disabled>
                         </div>
                         <div class="mb-3 col-md-6">
                             <label for="surname" class="form-label">Apellidos</label>
                             <input type="text" class="form-control" id="surname" name="surname" value="{{ $contact->surname }}" disabled>
                         </div>
                    </div>
                    <div class="row">
                         <div class="mb-3 col-md-6">
                             <label for="phone" class="form-label">Telefono</label>
                             <input type="number" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}" disabled>
                         </div>
                         <div class="mb-3 col-md-6">
                             <label for="email" class="form-label">Correo</label>
                             <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" disabled>
                         </div>
                    </div>
                     <input type="hidden" class="form-control" id="alert" name="alert" value="1">
                     <button type="submit" class="btn btn-primary">Contactar</button>
                </form>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header bg-dark text-white text-capitalize">
                Veces contactadas
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Medio de contacto</th>
                        <th scope="col">Encuentro</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>5 junio del 2022</td>
                        <td>Otto</td>
                        <td>llamada</td>
                        <td>reunion programada para el 10 octubre</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>29 julio del 2022</td>
                        <td>Thornton</td>
                        <td>whatsaap</td>
                        <td>reunion programada para el 10 octubre</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>3 octubre del 2022</td>
                        <td>Thornton</td>
                        <td>correo</td>
                        <td>reunion programada para el 10 octubre</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
