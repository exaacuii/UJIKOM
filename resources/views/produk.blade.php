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
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
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
        <a href="{{('produk')}}}}" class="nav-link text-white">
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

  <div class="container">
      <h3 style="text-align: center;">PRODUK DER</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nama produk</th>
            <th scope="col">harga</th>
            <th scope="col">stok</th>
            
        
          </tr>
        </thead>
        <tbody>
         @foreach($produk as $produk)
          <tr>
            <td>{{$produk->produkid}}</td>
            <td>{{$produk->namaproduk}}</td>
            <td>{{$produk->harga}}</td>
            <td>{{$produk->stok}}</td>  
            <td>
              <a href="hapus_produk/{{$produk->produkid}}" class="btn btn-outline-danger">hapus</a>
              <a href="" class="btn btn-outline-danger">detail</a>  
            </td>
          </tr>
           @endforeach
         
            

        </tbody>
      </table>    
   </div>
</div>

</body>
</html>