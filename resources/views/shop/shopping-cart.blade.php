<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>購物車</title>
    <link rel="stylesheet" href="/css/購物車.css">

</head>

<body>
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                             <span class="badge">{{$product['qty']}}{{--數量--}}</span>
                            <strong>{{$product['item']['title']}}{{--食物名稱--}}</strong>
                            <span class="label label-success">{{$product['price']}}{{--價格--}}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                    編輯 <span class="caret"></span>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="{{route('product.reduceByOne', ['id' => $product['item']['id']])}}">Reduce by 1</a></li>
                                    <li><a href="{{route('product.remove', ['id' => $product['item']['id']])}}">Reduce All</a></li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{$totalPrice}}{{--總金額--}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif
</body>

</html>
