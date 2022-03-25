@extends('/layouts.main')

@section('title', 'Entrar')

@section('content')

<div id="entrar-container" class='col-md-6 offset-md-3'>
    <h1>Seja Bem-vindo!</h1>
    <form action="/" method="POST">
       
        <div class="form-group  mb-2">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" required>
        </div>

       
        <div class="form-group mb-4">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Sua senha" required>
        </div>
       
        <a href="#" class="my-btn">Entrar</a>

    </form>
</div>

@endsection