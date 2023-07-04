
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
    <h1 class="text-body-emphasis">Ujian Pemrograman Web Sistem Informasi </h1>
    <hr class="col-3 col-md-2 mb-5">

    <div class="row g-5">
      <div class="col-md-6">
        <h2 class="text-body-emphasis">Form Input Artikel</h2>
        <p>Masukan data yang akan di proses</p>
        <form method="post" action="{{ site_url('Welcome/simpan') }}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <select class="form-control" name="username">
                  @foreach($avail_user as $user)
                  <option value="{{ $user->id }}">{{ $user->username }}</option>
                  @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Artikel</label>
                <textarea class="form-control" id="nama" name="artikel" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="{{site_url('Welcome/tampil')}}">Tampil</a>
        </form>
      </div>
    </div>
  </main>
  <footer class="pt-5 my-5 text-body-secondary border-top">
    Ujian Pemrograman Web 2023
  </footer>
</div>
</body>
</html>
