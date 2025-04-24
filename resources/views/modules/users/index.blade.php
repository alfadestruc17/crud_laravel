@extends('layouts/main')

@section('contenido')
    <div class="container mt-5">
        <h2>Crud con laravel </h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('create') }}" class="btn btn-primary">
                            <i class="fa-solid fa-user-plus"></i> Agregar
                        </a>
                        <hr>
                        <table class="table table-sm bordered text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                    
                                
                                <tr>
                                    <td>{{ $item->id }} </td>
                                    <td>{{ $item->name }} </td>
                                    <td>
                                        <form action=" {{ route('destroy', $item->id) }} " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href=" {{ route('show', $item->id )}} " class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                                            <a href=" {{ route('edit', $item->id )}} " class="btn btn-warning"><i class="fa-solid fa-user-pen"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-user-minus"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td>No hay datos en las tablas</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            </thead>
                        </table>
                        <div class="justify-content-end">
                            {{ $items->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
