<x-app-web-layout>
    <x-slot name='title'>
        Agregar Usuario
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                
                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif
                
                <div class="card">
                    <div class="card-header">
                        <h4>Add Users
                            <a href="{{ url('users') }}" class="btn btn-primary float-end">Atrás</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('users/create') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name='name' class="form-control" value="{{ old('name') }}">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name='email' class="form-control" value="{{ old('email') }}">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name='password' class="form-control" value="{{ old('password') }}">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>
