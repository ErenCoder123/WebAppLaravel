<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@foreach($pokemons as $entidade)
    <div class="container m-3 p-2">
        <div class="row">
            <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5>Pokemon: {{ $entidade->nome }}</h5>
                    <p>Tipo: {{ $entidade->tipo }}</p>
                    <p>Poder: {{ $entidade->pontos_de_poder }}</p>
                    <a class ="icon-link"  href="{{ url('pokemons/'.$entidade->id.'/editar') }}" >Edit</a>
                    <form action="{{ url('pokemons/'.$entidade->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div> 
            </div>
            
        </div>  
    </div>
@endforeach