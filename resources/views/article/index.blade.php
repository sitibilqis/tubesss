<div class="row justify-content-between my-3">
    <div class="col-3">
        <h2>Daftar Artikel</h2>
    </div>
    <div class="col-2">
        <a href="/add-article" class="btn btn-primary">Tambah Data</a>
    </div>
</div>

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Konten</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <td>{{ $article->title }}</td>
            <td>{{ $article->photo }}</td>
            <td>{{ $article->description }}</td>
            <td>{{ $article->content }}</td>
        </tr>
        @endforeach
    </tbody>
</table>