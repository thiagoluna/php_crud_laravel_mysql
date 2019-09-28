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
        <!-- Topo do container com 3 colunas -->        
        <div id="top" class="row">
            <div class="col-md-6">
                <h2>Atletas Cadastrados - {{$total}}</h2>
            </div>
            <!--
            <div class="col-md-6">
                <div class="input-group h2">
                    <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>
            -->
            <div class="col-md-6">
                <a href="{{URL::asset('add-atleta/')}}" class="btn btn-primary pull-right h2">Novo Item</a>
            </div>            
        </div> <!-- /#top -->
    
        <hr />
        <!-- Listagem dos itens do bd -->
        @if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            {{ session('message') }}
        </div>
        @endif
        <div id="list" class="row">
            <div class="table-responsive col-md-12">
                <table class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Endereço</th>
                            <th class="actions">Ações</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <!-- Listar dados do bd -->
                        @foreach($atletas as $atleta)
                        <tr>
                            <td>{{$atleta->id}}</td>
                            <td>{{$atleta->name}}</td>
                            <td>{{$atleta->email}}</td>
                            <td>{{$atleta->endereco}}</td>
                            <td class="actions">
                                <a class="btn btn-success btn-xs" href="{{route('atleta.show', $atleta->id)}}">Visualizar</a>
                                <a class="btn btn-warning btn-xs" href="{{route('atleta.edit', $atleta->id)}}">Editar</a>                                                                
                                <form style="display: inline-block;" method="POST" action="{{route('atleta.destroy', $atleta->id)}}"                                                        
                                    data-toggle="tooltip" data-placement="top" title="Excluir" onsubmit="return confirm('Confirma exclusão?')">
                                        {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                        <button type="submit" class="btn btn-danger btn-xs">Excluir</button>
                                </form>
                            </td>
                        </tr> 
                        @endforeach                                            
                    </tbody>
                </table>          
            </div>
        </div> <!-- /#listagem -->
    
        <!-- bottom contendo paginação -->
        <div id="bottom" class="row">
                <div class="col-md-12">
                    <ul class="pagination">
                        <li class="disabled"><a>&lt; Anterior</a></li>
                        <li class="disabled"><a>1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
                    </ul><!-- /.pagination -->
                </div>
            </div> <!-- /#bottom -->
    </div>  <!-- /#main -->

    <!-- scripts -->
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>