@extends('welcome')

@section('titulo', 'Listar Livros')

@section('corpo')
<p style="text-align: right">
    <a href="/novo" class="btn btn-success">Adicionar Livro</a>
</p>
<hr />
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Páginas</th>
            <th>Autor</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        @foreach($livros as $livro)
        <tr>
            <td>{{ $livro->id }}</td>
            <td>{{ $livro->titulo }}</td>
            <td>{{ $livro->paginas }}</td>
            <td>{{ $livro->autor }}</td>
            <td>{{ $livro->categoria }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection