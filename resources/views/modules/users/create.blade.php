@extends('layouts/main')

<div class="container mt-5">
    <h2>Agregar nuevo usuario</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                  <form action="{{route('store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <label for="name">Escribe el nombre</label>
                    <input type="text" name="name" id="name" class="form-control" required >
                    <button class="btn btn-primary mt-3">Agregar</button>
                    <a href="{{route('index')}}" class="btn btn-danger mt-3"> <i class="fa-solid fa-backward"></i> Cancelar</a>
                  </form>
                  <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const nameInput = document.getElementById('name');
                        nameInput.addEventListener('input', function () {
                            this.value = this.value.replace(/[0-9]/g, '');
                        });
                    });
                </script>
                
                </div>
              </div>
        </div>
    </div>
</div>