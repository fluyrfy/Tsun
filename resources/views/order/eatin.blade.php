@extends('layouts.diningmethodbg')

@section('content')
  @if (Session::has('success'))
    <center>
     <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    </center>
  @endif
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
          @if($product->id == "1" or $product->id == "2" or $product->id == "3" or $product->id == "4" or $product->id == "5" or $product->id == "6")
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
          @endif
        @endforeach
      @endforeach
        <div class="col-md-12">
          <center>
            <h1>湯品</h1>
            <hr class="my-4">
          </center>
        </div>
        @foreach ($products->chunk(3) as $productChunk)
          @foreach ($productChunk as $product)
            @if($product->id == "7" or $product->id == "8" or $product->id == "9")
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
            @endif
          @endforeach
        @endforeach
        <div class="col-md-12">
          <center>
            <h1>加購區</h1>
            <hr class="my-4">
          </center>
        </div>
      @foreach ($products->chunk(3) as $productChunk)
        @foreach ($productChunk as $product)
          @if($product->id == "10" or $product->id == "11" or $product->id == "12" or $product->id == "13" or $product->id == "14" or $product->id == "15")
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
          @endif
        @endforeach
      @endforeach
      </div>
    </div>
  </main>
  </div>
  </form>
@endsection
