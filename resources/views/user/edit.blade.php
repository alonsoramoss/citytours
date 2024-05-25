<x-app-web-layout>
    <x-slot name='title'>
        Actualizar Usuario
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                
                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif
                
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Users
                            <a href="{{ url('users') }}" class="btn btn-primary float-end">Atrás</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('users/'.$user->id.'/edit') }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name='name' class="form-control" value="{{ $user->name }}">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name='email' class="form-control" value="{{ $user->email }}">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name='password' class="form-control" value="{{ $user->password }}">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>
