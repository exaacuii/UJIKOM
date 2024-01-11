<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="bs/bs1/css/bootstrap.min.css">
<body>
 <nav class="navbar bg-dark border-bottom border-body"  >
  <div class="container-fluid"  >
    <a class="navbar-brand" style="color:white" style="margin-left:250px" >KASIR ABDUL KASHR</a>
   
    
  </div>

</nav>
<div style="display: flex;">
<div class="d-flex flex-column flex-shrink-0 p-3 text-  white bg-dark" style="width: 240px; height: 600px" >
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="60" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">HOME</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use href="{{('home')}}"></use></svg>
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Products
        </a>  
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Customers
        </a>
      </li>
    </ul>
    <hr>
  </div>

  <h3>TAMBAH PRODUK</h3>

<div class="container">
    <form action="{{('produk')}}" method="POST" enctype="multipart/form-data">
    <div class="container">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
  <textarea class="form-control" name="namaproduk" rows="3"></textarea>
  <div class="container">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
  <textarea class="form-control" name="harga" rows="3"></textarea>
  <div class="container">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Stok</label>
  <textarea class="form-control" name="stok" rows="3"></textarea>

  <br>


  <button type="submit" class="btn btn-primary">Tambahkan</button>
</div>

</div>


</body>
</html>