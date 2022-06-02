@extends('layouts.main', ['activePage'=>'users', 'titlePage' => 'Detalles del Usuario'])

@section('content')
<div class="content">
    <div class="container-fulid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Usuarios</h4>
                                <p class="card-category">Vista detallada del usuario {{ $user->name }}</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <div class="author">
                                                        <a href="*">
                                                            <img src="{{ asset('/img/defaultavatar.png') }}" alt="image" class="avatar">
                                                            <h5 class="title mt-3">{{ $user->name }}</h5>
                                                        </a>
                                                        <p class="description">
                                                             Adminitrador  <br>
                                                             {{ $user->email }}  <br>
                                                             {{ $user->created_at }}  <br>
                                                        </p>
                                                    </div>
                                                </p>
                                                <div class="card-description">
                                                       Lorem ipsum dolor   
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="button-container">
                                                    <a href="{{route('users.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                    <a href="*" class="btn btn-sm btn-twitter">Editar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection