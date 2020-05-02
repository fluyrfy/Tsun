@extends('layouts.diningmethodbg')

@section('content')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
crossorigin="anonymous"></script>
<script src="/js/點餐.js"></script>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
<li>
  <a href="shopping-cart">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;購物車
    <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
  </a>
</li>
</nav>

<main role="main">
<div class="album py-5">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <center>
          <h1> </h1>
        </center>
      </div>
      <div class="col-md-12">
        <center>
          <h1>主餐</h1>
          <hr class="my-4">
        </center>
      </div>
    @foreach ($products->chunk(3) as $productChunk)
      @foreach ($productChunk as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{ $product->imagePath }}" width="100%" height="225">
            <div class="card-body">
              <p class="card-text title">{{ $product->title }}</p>
              <div class="clearfix">
              <div class="pull-left price">{{ $product->price }}元</div>
              <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button" >加入購物車</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @endforeach
      <div class="col-md-12">
        <center>
          <h1>湯品</h1>
          <hr class="my-4">
        </center>
      </div>
    </div>
  </div>
</main>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.2/dist/js/bootstrap.bundle.js"></script>
@endsection
