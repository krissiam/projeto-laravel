@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h3>
                Dados de teste
            </h3>
        </div>
        <div class="box-body">
            <table class = 'table table-bordered'>
                <thead>
                    <th>Campo</th>
                    <th>Valor</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <b><i>nome : </i></b>
                        </td>
                        <td>{!!$teste->nome!!}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection