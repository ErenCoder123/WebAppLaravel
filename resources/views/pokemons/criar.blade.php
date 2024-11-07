<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container-fluid">
    <form action="{{ url('pokemons') }}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="tipo" placeholder="Tipo" required></input>
        <input type="number" name="pontos_de_poder" placeholder="Pontos de Poder" required>
        <button type="submit" class="btn btn-primary">Salvar Pokemon</button>
    </form>
</div>
