@extends('welcome')

@section('titulo', 'Novo Livro')

@section('corpo')
<form method="POST" action="{{ action('LivroController@salvar') }}">
	{{ csrf_field() }}
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo"
               placeholder="Título do livro."
               required
               name="livros[titulo]" />
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor"
               placeholder="Autor do livro."
               required
               name="livros[autor]" />
    </div>
    <div class="form-group">
        <label for="paginas">Páginas</label>
        <input type="number" class="form-control" id="paginas"
               placeholder="Quantidade de páginas do livro."
               required
               name="livros[paginas]" />
    </div>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" id="categoria"
               placeholder="Categoria do livro."
               required
               name="livros[categoria]" />
    </div>
    <p style="text-align: right">
        <button type="submit" class="btn btn-success">Adicionar</button>
    </p>
</form>
@endsection