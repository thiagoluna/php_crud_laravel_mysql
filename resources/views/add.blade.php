<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD com Bootstrap + Laravel</title>
    <!-- Bootstrap -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CRUD com Bootstrap + Laravel</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Início</a></li>
            <li><a href="#">Opções</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Ajuda</a></li>
            </ul>
            </div>
        </div>
    </nav>
    
    <!-- Container Principal -->
    <div id="main" class="container-fluid" style="margin-top: 50px">
        <h3 class="page-header">Adiconar Atleta</h3>

        <!-- Área do Form-->
        <form method="post" action="{{route('atleta.store')}}">
            {{ csrf_field() }}
            <!-- area de campos do form -->
            <!-- 3 campos por linha -->
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="name" placeholder="Digite o valor" value="">
                </div>
                
                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Digite o valor" value="">
                </div>
                
                <div class="form-group col-md-4">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Digite o valor" value="">
                </div>
            </div>
            <!-- 4 campos por linha -->
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" placeholder="Digite o valor" value="">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" name="bairro" placeholder="Digite o valor" value="">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade" placeholder="Digite o valor" value="">
                    </div>                    

                    <div class="form-group col-md-3">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" name="cep" placeholder="Digite o valor" value="">
                    </div>
                </div>
            <hr />
            <div id="actions" class="row">
                <!-- Div col-md-12 ocupa toda largura no grid -->
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{URL::asset('/')}}" class="btn btn-default">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

    <!-- scripts -->
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>