@extends('base.base')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Cadastro de Alunos</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="text-center mb-5">
                    <img src="{{asset('/images/search-student.png')}}" height="48" class='mb-4'>
                    <h3>Cadastro de Alunos</h3>
                    <p></p>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nome</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="Nome completo"
                                            name="fname-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Last Name</label>
                                        <input type="text" id="last-name-column" class="form-control" placeholder="Last Name"
                                            name="lname-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">City</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Country</label>
                                        <input type="text" id="country-floating" class="form-control" name="country-floating"
                                            placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Company</label>
                                        <input type="text" id="company-column" class="form-control" name="company-column"
                                            placeholder="Company">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Email</label>
                                        <div class="position-relative">

                                        <input type="email" id="email-id-column" class="form-control" name="email-id-column"
                                            placeholder="Email">
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>                                    </div>
                                </div>

                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Mobile</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Mobile" id="mobile-id-icon">
                                                <div class="form-control-icon">
                                                    <i data-feather="phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                </div>
                             
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Salvar</button>
                                    <button type="reset" class="btn btn-danger  me-1 mb-1">Limpar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>

</section>
@endsection