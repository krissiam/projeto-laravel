@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h3>
                Testes
            </h3>
            <a href="/teste/create" class = "btn btn-success"><i class="fa fa-plus fa-md" aria-hidden="true"></i> Novo</a>
        </div>
        <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
            <thead>
                <th>nome</th>
                <th>actions</th>
            </thead>
            <tbody>
                @foreach($testes as $teste) 
                <tr>
                    <td>{!!$teste->nome!!}</td>
                    <td>
                        <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/teste/{!!$teste->id!!}'><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                        <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/teste/{!!$teste->id!!}/edit'><i class="fa fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/teste/{!!$teste->id!!}/deleteMsg" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
        {!! $testes->render() !!} 
    </div>
</div>
</section>
@endsection