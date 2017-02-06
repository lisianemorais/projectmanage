<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>{{$titulo or "Painel Project Manager"}}</title>
    
     <!-- Latest compiled and minified CSS -->
        {!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')!!}
        <!-- Optional theme -->
        {!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css')!!}
        {!!Html::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')!!}
        {!!Html::style('assets/css/app.css')!!}
        {!!Html::style('assest/css/app-responsivo.css')!!}

        <!--JQuery-->
        {!!Html::script('assets/js/jquery-2.1.4.min.js')!!}
   

    <!--JQuery-->
    <script src="js/jquery.js"></script>
</head>
<body class="bg-padrao">

    <header>
        <h1 class="oculta">Painel Project Manager</h1>
    </header>

    <section class="painel">
        <h1 class="oculta">Painel Project Manager</h1>

        <div class="topo-painel col-md-12">
            <a href="" class="icon-acoes-painel">
                <i class="fa fa-expand"></i>
            </a>
            {!!HTML::image('assets/imgs/logo-projectmanager.png', 'ProjectManager', ['class' => 'logo-painel', 'title' => 'Project Manager'])!!}
            
            <select class="acoes-painel">
                <option value=""> Logado </option>
            </select>
        </div>
        <!--End Top-->

        <div class="clear"></div>


        <div class="menu-painel col-md-2">
            <ul class="menu-painel-ul">
                <li>
                    <a href="/"><i class="fa fa-tachometer"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('projetos.index')}}"><i class="fa fa-user-secret"></i> Projetos</a>
                </li>
                <li>
                    <a href="{{route('clientes.index')}}"><i class="fa fa-user"></i> Clientes </a>
                </li>
                <li>
                    <a href="{{route('users.index')}}"><i class="fa fa-users"></i> Usuários</a>
                </li>
                <li>
                    <a href="{{route('auth.logout')}}"><i class="fa fa-sign-out"></i> Sair</a>
                </li>
            </ul>
        </div>
        <!--End menu-->

        <section class="conteudo col-md-10">
            <div class="cont">
                @yield('content')
            </div>
        </section>
        <!--End Conteúdo-->
    </section>


    <!-- Latest compiled and minified JavaScript -->
     {!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')!!}
</body>
</html>