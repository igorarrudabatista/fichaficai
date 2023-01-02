@extends('base.base')
@section('content')

@can('usuario')
Oieeeeeeeeeeehjeuheduehdujehushduhdu
@elsecan('admin')
Olá Admin =
@endcan

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Lista de Alunos</h3>
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
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome do Aluno</th>
                            <th>Categoria</th>
                            <th>Escola</th>
                            <th>Situação</th>
                            <th>Data de Abertura</th>
                            <th>Data de Tramitação</th>
                            <th>Editar</th>
                            <th>Visualizar Ficha</th>
                            <th>Tramitar</th>
                            <th>Tramitar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>João Gandão</td>
                            <td>Infração</td>
                            <td>EE Nome da Escola do Aluno</td>
                            <td><span class="badge bg-success"> Resolvido pela Escola</span> </td>
                            <td>13/10/2022 </td>
                            <td>13/11/2022 </td>
                            <td>Editar </td>
                            <td>Ver </td>
                            <td>Tramitar</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>João Gandão</td>
                            <td>Infração</td>
                            <td>EE Nome da Escola do Aluno</td>
                            <td><span class="badge bg-danger"> Não Tramitado</span> </td>
                            <td>13/10/2022 </td>
                            <td>13/11/2022 </td>
                            <td>Editar </td>
                            <td>Ver </td>
                            <td>Tramitar</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>João Gandão</td>
                            <td>Infração</td>
                            <td>EE Nome da Escola do Aluno</td>
                            <td><span class="badge bg-success"> Resolvido pela Escola</span> </td>
                            <td>13/10/2022 </td>
                            <td>13/11/2022 </td>
                            <td>Editar </td>
                            <td>Ver </td>
                            <td>Tramitar</td>
                            <td>
                                <span class="badge bg-danger">Inactive</span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>João Gandão</td>
                            <td>Infração</td>
                            <td>EE Nome da Escola do Aluno</td>
                            <td><span class="badge bg-danger"> Não Tramitado</span> </td>
                            <td>13/10/2022 </td>
                            <td>13/11/2022 </td>
                            <td>Editar </td>
                            <td>Ver </td>
                            <td>Tramitar</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>

         
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                      
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>


@endsection