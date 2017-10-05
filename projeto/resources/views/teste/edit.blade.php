@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h3>
                Editar dados de teste
            </h3>
        </div>
        <div class="box-body">
            <form method = 'POST' action = '{!! url("teste")!!}/{!!$teste->
                id!!}/update'> 
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="nome">nome</label>
                    <input id="nome" name = "nome" type="text" class="form-control" value="{!!$teste->
                    nome!!}"> 
                </div>
                <button class = 'btn btn-primary' type ='submit'>Atualizar</button>
            </form>
        </div>
    </div>
</div>
</section>
@endsection