<x-app-web-layout>
    <x-slot name='title'>
        Usuarios
    </x-slot>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Usuarios
                            <a href="{{ url('users/create') }}" class="btn btn-primary float-end">Add User</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Password</th>
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
                                        <div class="text-center">
                                            <a href=" {{ url('users/'.$item->id.'/edit')}}" class="btn btn-warning mx-2">Edit</a>
                                            
                                            <a href="{{ url('users/'.$item->id.'/delete') }}" class="btn btn-danger mx-1" 
                                                onclick="return confirm('¿Estás seguro de eliminar el usuario?')">
                                                Delete
                                            </a>
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
    </div>
</x-app-web-layout>





