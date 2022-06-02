@extends('layouts.main', ['activePage'=>'permissions', 'titlePage' => 'Permisos'])

@section('content')

<div class="content">
    <div class="container-fulid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Permisos</h4>
                                <p class="card-category">Permisos registrados</p>
                            </div>
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{  route('permissions.create')  }}" class="btn btn-sm btn-facebook">Añadir permiso</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            
                                            <th>Created_at</th>
                                            <th class="text-right">Acciones</th>
                                            
                                        </thead>
                                        <tbody>
                                            @forelse ($permissions as $permission)
                                                <tr>
                                                    <td>{{ $permission->id }}</td>
                                                    <td>{{ $permission->name }}</td>
                                                    
                                                    <td>{{ $permission->created_at }}</td>
                                                     
                                                </tr>
                                                @empty
                                                No hay permisos registrados
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer ml-auto">
                                {{ $permissions->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection