@extends('layouts/main')

<div class="container mt-5">
    <h2>Actualizar usuario</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                  <form action=" {{route('update', $item->id )}} " method="POST">
                    @csrf
                    @method('PUT')
                    <label for="name">Escribe el nombre</label>
                    <input type="text" name="name" id="name" class="form-control" required value=" {{ $item->name }} ">
                    <button class="btn btn-warning mt-3">Actualizar</button>
                    <a href="{{route('index')}}" class="btn btn-danger mt-3"><i class="fa-solid fa-backward"></i> Cancelar</a>
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