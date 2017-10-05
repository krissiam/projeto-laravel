@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h3>
                Inserir teste
            </h3>
        </div>
        <div class="box-body">
            <form method = 'POST' action = '{!!url("teste")!!}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="nome">nome</label>
                    <input id="nome" name = "nome" type="text" class="form-control">
                </div>
                <button class = 'btn btn-primary' type ='submit'>Inserir</button>
            </form>
        </div>
    </div>
</div>
</section>
@endsection