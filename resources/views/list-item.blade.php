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
    <!-- Modal -->
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir este item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Sim</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                </div>
            </div>
        </div>
    </div>   <!-- /.modal -->

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
        <h3 class="page-header">Visualizar Atleta {{$atleta->name}}</h3>
        <div class="row">
            <div class="col-md-4">
                <p><strong>Nome</strong></p>
                <p>{{$atleta->name}}</p>
            </div>
            <div class="col-md-4">
                <p><strong>Email</strong></p>
                <p>{{$atleta->email}}</p>
            </div>
            <div class="col-md-4">
                <p><strong>Senha</strong></p>
                <p>*********</p>
            </div>
            <div class="col-md-3">
                <p><strong>Endereco</strong></p>
                <p>{{$atleta->endereco}}</p>
            </div>
            <div class="col-md-3">
                <p><strong>Bairro</strong></p>
                <p>{{$atleta->bairro}}</p>
            </div>
            <div class="col-md-3">
                <p><strong>Cidade</strong></p>
                <p>{{$atleta->cidade}}</p>
            </div>
            <div class="col-md-3">
                <p><strong>CEP</strong></p>
                <p>{{$atleta->cep}}</p>
            </div>
        </div>
        <hr />
        <!-- Botões -->
        <div id="actions" class="row">
            <div class="col-md-12">
                <a href="{{route('atleta.edit', $atleta->id)}}" class="btn btn-primary">Editar</a>  
                <form style="display: inline-block;" method="POST" action="{{route('atleta.destroy', $atleta->id)}}"                                                        
                    data-toggle="tooltip" data-placement="top" title="Excluir" onsubmit="return confirm('Confirma exclusão?')">
                        {{method_field('DELETE')}}{{ csrf_field() }}                                                
                        <button type="submit" class="btn btn-danger">Excluir</button>
                </form>              
                <!-- link ativar o modal e exibir a div#delete-modal
                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal">Excluir</a> -->
                <a href="{{URL::asset('/')}}" class="btn btn-default">Fechar</a>
            </div>
        </div>         
    </div>

    <!-- scripts -->
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>