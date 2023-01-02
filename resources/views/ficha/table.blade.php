@extends('base.base')
@section('content')



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Ficha</h3>
                <p class="text-subtitle text-muted">We use 'simple-datatables' made by @fiduswriter. You can check the full documentation <a href="https://github.com/fiduswriter/Simple-DataTables/wiki">here</a>.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">

              @foreach($ficha as $fichas) 

                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Id da Ficha</th>
                            <th>Categoria</th>
                            <th>Nome do Aluno</th>
                            <th>Escola</th>
                            <th>Situação</th>
                            <th>Data de Abertura</th>
                            <th>Editar</th>
                            <th>Visualizar Ficha</th>
                            <th>Tramitar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td>{{$fichas->id}}</td>
                           @foreach($ficha_categoria as $ficha_categorias) 
                           <td>{{$ficha_categorias->FichaCatNome}}</td>
                           @endforeach
                           
                            @foreach($ficha_aluno as $ficha_alunos) 
                            <td>{{$ficha_alunos->AlunoNome}}</td>
                            @endforeach


                           @foreach($ficha_escola as $ficha_escolas) 
                           <td>{{$ficha_escolas->EscolaNome}}</td>
                           @endforeach


                           
                           <td><span class="badge bg-warning"> Não Tramitada</span> </td>
                           <td>13/11/2022 </td>
                            <td>Editar </td>
                            <td>Ver </td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                      
                    </tbody>
                </table>
                @endforeach

            </div>
        </div>

    </section>
</div>


@endsection