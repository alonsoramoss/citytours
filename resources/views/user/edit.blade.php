<x-app-web-layout>
    <x-slot name='title'>
        Actualizar Usuario
    </x-slot>
    <div class="container mt-5">
        @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
        @endif
        
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Editar Usuario</h4>
                    <a href="{{ url('users') }}" class="btn btn-primary float-end">Atrás</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url('users/'.$user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="fw-semibold">Nombre</label>
                        <input type="text" name='name' class="form-control" value="{{ $user->name }}">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="fw-semibold">Correo</label>
                        <input type="text" name='email' class="form-control" value="{{ $user->email }}">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="fw-semibold">Contraseña</label>
                        <input type="password" name='password' class="form-control" value="{{ $user->password }}">
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="d-grid d-md-flex justify-content-md-end mt-3">
                        <button type="submit" class="px-5 fw-semibold btn btn-warning">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-web-layout>
