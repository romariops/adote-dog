@extends('/layouts.main')

@section('title', 'Cadastre-se')

@section('content')

<div id="cadastro-container" class='col-md-6 offset-md-3'>
    <h1>Cadastre-se</h1>
    <h3 class="mb-4">Faça parte da nossa família!</h3>
    <form action="/usuario" method="POST">
        @csrf
        <div class="form-group mb-2">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" required>
        </div>

        <div class="form-group  mb-2">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" required>
        </div>

        <div class="row mb-4">
            <div class="form-group col">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite uma senha" required>
            </div>
        
            <div class="form-group col">
                <label for="repita-senha">Repita a Senha</label>
                <input type="password" class="form-control" id="repita-senha" name="repita-senha" placeholder="Repita a senha"
                data-match="#senha" data-match-error="Atenção! As senhas não estão iguais." required>    
            </div>
        </div>
        <button type="submit" class="my-btn">Quero me cadastrar</button>

    </form>
</div>

@endsection