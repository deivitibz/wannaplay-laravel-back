@extends('layouts.app')
{{-- @extends('layouts.sidebar') --}}

@section('content')
<div class="row w-80">
    <div class="col-8">
        <h4> Lista de Jugadores</h4>
    </div>

    <div class="col-4">
        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Añadir nuevo partido</span></a>
        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>
    </div>
</div>
{{-- <div class="row">
    <div class="col">
        <table class="table table-dark table-striped table-hover d-inline-table">
            <tbody>
                <tr>
                <th scope="col">
                    <span class="custom-checkbox">
                        <input type="checkbox" id="selectAll">
                        <label for="selectAll"></label>
                    </span>
                </th>
                <th class="text-center" scope="col">NOMBRE</th>
                <th class="text-center" scope="col">APELLIDO</th>
                <th class="text-center" scope="col">NIVEL</th>
                <th class="text-center" scope="col">POSICION</th>
                <th class="text-center" scope="col">RANKING</th>
                <th class="text-center" scope="col">ACCIONES</th>
                </tr>
                @foreach ($jugadores as $jugador)

                <tr>
                    <th scope="row">
                    <span class="custom-checkbox">
                        <input type="checkbox" id="{{$jugador->id}}" name="options[]" value="{{$jugador->id}}">
                        <label for="checkbox1"></label>
                    </span>
                    </th>
                    <td class="text-center">{{$jugador->nombre}}</td>
                    <td class="text-center">{{$jugador->apellido}}</td>
                    <td class="text-center">{{$jugador->nivel}}</td>
                    <td class="text-center">{{$jugador->posicion}}</td>
                    <td class="text-center">{{$jugador->ranking}}</td>
                    <td class="d-flex justify-content-around">
                        <a href="#editEmployeeModal" data-toggle="modal"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#deleteEmployeeModal" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> --}}





 {{--           <div class="row py-3 bg-secondary">

                <div class="col d-flex align-items-center">
                    <h4> Lista de Jugadores</h4>
                </div>

                <div class="col d-flex justify-content-around">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Añadir nuevo partido</span></a>
                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>
                </div> --}}


{{--
            <div class="row">
                <table class="table table-dark table-striped table-hover d-inline-table">
                    <tbody>
                      <tr>
                        <th scope="col">
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th class="text-center" scope="col">NOMBRE</th>
                        <th class="text-center" scope="col">APELLIDO</th>
                        <th class="text-center" scope="col">NIVEL</th>
                        <th class="text-center" scope="col">POSICION</th>
                        <th class="text-center" scope="col">RANKING</th>
                        <th class="text-center" scope="col">ACCIONES</th>
                      </tr>
                        @foreach ($jugadores as $jugador)

                      <tr>
                          <th scope="row">
                            <span class="custom-checkbox">
                                <input type="checkbox" id="{{$jugador->id}}" name="options[]" value="{{$jugador->id}}">
                                <label for="checkbox1"></label>
                            </span>
                          </th>
                          <td class="text-center">{{$jugador->nombre}}</td>
                          <td class="text-center">{{$jugador->apellido}}</td>
                          <td class="text-center">{{$jugador->nivel}}</td>
                          <td class="text-center">{{$jugador->posicion}}</td>
                          <td class="text-center">{{$jugador->ranking}}</td>
                          <td class="d-flex justify-content-around">
                              <a href="#editEmployeeModal" data-toggle="modal"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                              <a href="#deleteEmployeeModal" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> --}}
        </div>
    </div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Añadir Jugador</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" class="form-control" name="nombre" required>
					</div>
					<div class="form-group">
						<label>Apellido</label>
						<input type="email" class="form-control" name="apellido" required>
					</div>
					<div class="form-group">
						<label>Nivel</label>
						<textarea class="form-control" name="nivel" required></textarea>
					</div>
					<div class="form-group">
						<label>Posicion</label>
						<input type="text" class="form-control" name="posicion" required>
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
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Editar Jugador</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" class="form-control" name="nombre" required>
					</div>
					<div class="form-group">
						<label>Apellido</label>
						<input type="email" class="form-control" name="apellido" required>
					</div>
					<div class="form-group">
						<label>Nivel</label>
						<textarea class="form-control" name="nivel" required></textarea>
					</div>
					<div class="form-group">
						<label>Posicion</label>
						<input type="text" class="form-control" name="posicion" required>
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

@endsection

@section('scripts')

@endsection
