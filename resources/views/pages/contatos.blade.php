@extends('pages.modelo')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Contato</h1>
    <p class="col-md-8 fs-4">Nossa equipe esta a disposição para lhe auxiliara em qualquer dúvida. Entre em contato e retornaremos assim que possível.</p>
    
  </div>

<div id="myCarousel" class="carousel slide " data-bs-ride="carousel">
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div><!-- /.container --></div>
@endsection