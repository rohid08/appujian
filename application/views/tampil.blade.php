
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Starter Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/starter-template/">

    

    

<link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
  </head>
  <body>
<div class="col-lg-8 mx-auto p-4 py-md-5">
  <main>
    <h1 class="text-body-emphasis">Ujian Pemrograman Web</h1>
    <hr class="col-3 col-md-2 mb-5">

    <div class="row g-5">
      <div class="col-md-6">
        <h2 class="text-body-emphasis">Tampil Input Data</h2>
        <table class="table table-bordered">
          <tr>
            <th>Username</th>
            <th>Artikel</th>
            <th>Created_at</th>
            <th>Update_at</th>
            <th>Aksi</th>
          </tr>
          @foreach($post_list as $post)
          <tr>
            <td>{{ $post->user->username }}</td>
            <td>{{ $post->artikel }}</td>
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->updated_at }}</td>
            <td><a href="{{ site_url('Welcome/hapus/'.$post->id)}}">Hapus</a> | <a href="{{ site_url('Welcome/ubah/'.$post->id) }}">Ubah</a></td>
          </tr>
          @endforeach
        </table>
        <a href="{{ site_url('Welcome/index') }}" class="btn btn-success">Tambah</a>
      </div>
    </div>
  </main>
  <footer class="pt-5 my-5 text-body-secondary border-top">
    Ujian Pemrograman Web 2023
  </footer>
</div>
</body>
</html>
