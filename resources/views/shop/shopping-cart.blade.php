<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>購物車</title>
    <link rel="stylesheet" href="/css/購物車.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("li").hide();
        $("ul").click(function(){
            $("li").toggle();
        });
    });

</script>
</head>

<body>
    @if(Session::has('cart'))
        <div class="container">
            <div class="item_header">
                <div class="item_detail">商品</div>
                <div class="price">單價</div>
                <div class="count">數量</div>
                <div class="amount">總計</div>
                <div class="operate"></div>
            </div>
            @foreach($products as $product)
                <div class="container">
                    <div class="item_header item_body">
                        <div class="item_detail">
                            <img src={{$product['item']['imagePath']}} width="110" height="70">
                            <div class="name">{{$product['item']['title']}}</div>
                        </div>
                        <div class="price"><span>$</span>{{$product['item']['price']}}</div>
                        <div class="count">{{$product['qty']}}</div>
                        <div class="amount"><span>$</span>{{$product['price']}}</div>
                        <div class="operate">
                            <ul>點這裡編輯
                                <li><a href="{{route('product.reduceByOne', ['id' => $product['item']['id']])}}">數量減一</a></li>
                                <li><a href="{{route('product.remove', ['id' => $product['item']['id']])}}">刪除</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            <div style="width:100%;text-align:center"><p><strong>總計金額 : ${{$totalPrice}}</strong></p></div>
            <div style="width:100%;text-align:center">
                <p>
                    <a href="{{route('order.eatin')}}"><input type="button" value="回到點餐畫面" style="width:120px;height:40px;border:2px rgb(55, 103, 148) dashed;font-family: Microsoft JhengHei;background-color:white;"></a>
                    <a href="{{route('checkout')}}"><input type="button" value="結帳" style="width:120px;height:40px;border:2px rgb(241, 11, 11) dashed;font-family: Microsoft JhengHei;background-color:white;"></a>
                </p>
            </div>
            
        </div>
        {{-- <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                             <span class="badge">{{$product['qty']}}</span>
                            <strong>{{$product['item']['title']}}</strong>
                            <span class="label label-success">{{$product['price']}}</span>
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
                <strong>Total: {{$totalPrice}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div> --}}
    @else
        <center>
            <div class="container">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h2>您未選購任何商品！</h2>
                    <a href="{{route('order.eatin')}}"><input type="button" value="回到點餐畫面" style="width:120px;height:40px;border:2px rgb(55, 103, 148) dashed;font-family: Microsoft JhengHei;background-color:white;"></a>
                </div>
            </div>
        </center>
    @endif
</body>

</html>
