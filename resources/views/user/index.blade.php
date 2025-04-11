<x-app-web-layout>
    <x-slot name='title'>
        Usuarios
    </x-slot>
    
    <div class="container mt-5">
        @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
        @endif
        
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Usuarios</h4>
                    <a href="{{ url('users/create') }}" class="btn btn-success float-end">Crear Usuario</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Contraseña</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->password}}</td>
                                <td>
                                    <div class="d-flex text-center justify-content-center">
                                        <a href=" {{ url('users/'.$item->id.'/edit')}}" class="btn btn-warning m-1 px-4">Editar</a>
                                        
                                        <form action="{{ url('users/'.$item->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar el usuario?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger m-1 px-3">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>
