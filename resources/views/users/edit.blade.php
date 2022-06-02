@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Editar datos de usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{  route('users.update', $user->id)  }}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Editar datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" value="{{  $user->name  }}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" value="{{  $user->email  }}" >
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña si desea cambiarla">
                                </div>
                            </div>
                        </div>
                        <!--footer-->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="sumit" class="btn btn-sm btn-primary mr-3">Actualizar</button>
                            <a href="{{route('users.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
                            <!-- <a href="{{route('users.index')}}" class="btn btn-sm btn-primary mr-3">Actualizar</a> -->
                        </div>
                        <!--end footer -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection