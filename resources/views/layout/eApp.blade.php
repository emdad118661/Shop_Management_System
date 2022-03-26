<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Management App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-info text-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Shop Management App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('customer.elist')}}">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/product/elist">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('voucher.elist')}}">Voucher</a>
        </li>
        <li class="nav-item ms-auto">
          <a class="nav-link active" aria-current="page" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </header>
    <main>
    @yield('content')
    </main>
    <footer class="text-center bg-info p-3">
        copyright©18-39032-3.student.aiub.edu
    </footer>
</body>
</html>