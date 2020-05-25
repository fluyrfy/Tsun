<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>購物車</title>
    <link rel="stylesheet" href="/css/購物車.css">
</head>

<body>
    @if(Session::has('cart'))
        <div class="container">
            <div class="item_header">
                <div class="name">商品</div>
                <div class="price">金額</div>
                <div class="count">數量</div>
                <div class="operate">編輯</div>
            </div>
            @foreach($products as $product)
                <div class="item_container">
                    <div class="item_header item_body">
                        <div class="name">{{$product['item']['title']}}</div>
                        <div class="price"><span>$</span>{{$product['price']}}</div>
                        <div class="count">{{$product['qty']}}</div>
                        <div class="operate">
                            <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                編輯 <span class="caret"></span>
                            </button>
                        </div>
                        <div class="delete">
                            <ul class="dropdown-menu">
                                <li><a href="{{route('product.reduceByOne', ['id' => $product['item']['id']])}}">數量減一</a></li>
                                <li><a href="{{route('product.remove', ['id' => $product['item']['id']])}}">刪除</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="item_container">
                <div class="item_header item_body">
                    <div style="width:450px;text-align:right"><strong>總計金額 : ${{$totalPrice}}{{--總金額--}}</strong></div>
                    <div style="width:400px;text-align:right"><a href="{{route('checkout')}}" type="button" class="btn btn-success">結帳</a></div>
                </div>
            </div>
            <div style="width:100%;text-align:center" class="btn btn-primary">
                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" onclick="location.href='{{route('order.eatin')}}'">
                    回到點餐畫面
                </button>
            </div>
        </div>
    @else
        <center>
            <div class="container">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h2>您未選購任何商品！</h2>
                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" onclick="location.href='{{route('order.eatin')}}'">
                        回到點餐畫面
                    </button>
                </div>
            </div>
        </center>
    @endif
</body>

</html>
