@extends('layouts.app')
{{-- @extends('layouts.sidebar') --}}
@section('content')

    <div class="container-fluid">
        <div class="row py-3 bg-secondary">
            <div class="col-8 d-flex align-items-center">
                <h4> Lista de Partidos</h4>
            </div>
            <div class="col-4 d-flex justify-content-around">
                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                        class="material-icons">&#xE147;</i> <span>Añadir nuevo partido</span></a>
                <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                        class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>
            </div>
        </div>

        <div class="row d-flex flex-column">
            <ul class="list-group">
                @foreach ($partidos as $partido)
                    <li class="list-group-item d-flex">
                        <div id="fecha-hora" class="d-flex flex-column">
                            <p>Fecha</p>
                            <p>Hora</p>
                            <p>Pista</p>
                            <p>Niveles</p>
                        </div>
                        <div class="jugadores d-flex flex-row justify-content-around w-100 align-items-center text-center" >
                            <div id="jugador1">
                                <img class="img-fluid rounded-circle" src="https://picsum.photos/70/70" alt="">
                                <p>Nombre</p>
                                <p>Nivel</p>
                            </div>
                            <div id="jugador2">
                                <img class="img-fluid rounded-circle" src="https://picsum.photos/70/70" alt="">
                                <p>Nombre</p>
                                <p>Nivel</p>
                            </div>
                            <div id="jugador3">
                                <img class="img-fluid rounded-circle" src="https://picsum.photos/70/70" alt="">
                                <p>Nombre</p>
                                <p>Nivel</p>
                            </div>
                            <div id="jugador4">
                                <img class="img-fluid rounded-circle" src="https://picsum.photos/70/70" alt="">
                                <p>Nombre</p>
                                <p>Nivel</p>
                            </div>
                        </div>
                    </li>
            </ul>
            @endforeach
            <table class="table table-dark table-striped table-hover d-inline-table">
                <tbody>
                    <tr>
                        <th scope="col">
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th scope="col">DEPORTE</th>
                        <th scope="col">JUGADOR 1</th>
                        <th scope="col">JUGADOR 2</th>
                        <th scope="col">JUGADOR 3</th>
                        <th scope="col">JUGADOR 4</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">HORA</th>
                        <th scope="col">NIVEL</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                    @foreach ($partidos as $partido)

                        <tr>
                            <th scope="row">
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="{{ $partido->id }}" name="options[]"
                                        value="{{ $partido->id }}">
                                    <label for="checkbox1"></label>
                                </span>
                            </th>
                            <td>{{ ucfirst($partido->deporte) }}</td>
                            <td>{{ $jugadores->where('id', $partido->id_jugador_A1)->first()->nombre . ' ' . $jugadores->where('id', $partido->id_jugador_A1)->first()->apellido }}
                            </td>
                            <td>{{ $jugadores->where('id', $partido->id_jugador_A2)->first()->nombre . ' ' . $jugadores->where('id', $partido->id_jugador_A2)->first()->apellido }}
                            </td>
                            <td>{{ $jugadores->where('id', $partido->id_jugador_B1)->first()->nombre . ' ' . $jugadores->where('id', $partido->id_jugador_A1)->first()->apellido }}
                            </td>
                            <td>{{ $jugadores->where('id', $partido->id_jugador_B2)->first()->nombre . ' ' . $jugadores->where('id', $partido->id_jugador_A2)->first()->apellido }}
                            </td>
                            <td>{{ $partido->fecha }}</td>
                            <td>{{ $partido->hora }}</td>
                            <td>{{ $partido->niveles }}</td>
                            <td class="d-flex justify-content-around">
                                <a href="#editEmployeeModal" data-toggle="modal"><i class="fa fa-pencil"
                                        aria-hidden="true"></i></a>
                                <a href="#deleteEmployeeModal" data-toggle="modal"><i class="fa fa-trash"
                                        aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="/partidos">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Añadir Partido</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Deporte</label>
                            <select name="deporte">
                                <option value="padel">Padel</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jugador Equipo A</label>
                            <select name="jugador_a1">
                                @foreach ($jugadores as $jugador)
                                    <option value="{{ $jugador->id }}">{{ $jugador->nombre . ' ' . $jugador->apellido }}
                                    </option>
                                @endforeach
                            </select>
                            <label>Jugador Equipo A</label>
                            <select name="jugador_a2">
                                @foreach ($jugadores as $jugador)
                                    <option value="{{ $jugador->id }}">{{ $jugador->nombre . ' ' . $jugador->apellido }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" name="address"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('partidos') }}" id="editForm">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Partido</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="Hola">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" name="address"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- DELETE MODAL --}}
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">

        <div id="calendar"></div>
    </div>

@endsection

@section('scripts')

@endsection
