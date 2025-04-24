@extends('layouts/main')
<div class="container mt-5">
    <h2>Mostrar información de: {{ $item->name }} </h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('index')}}" class="btn btn-danger mt-4"> <i class="fa-solid fa-backward"></i> Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>