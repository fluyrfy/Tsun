<html>
    <head>
        <title>
            訂單查詢
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/訂單查詢.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div id="main-container" class="container">
            <center>
                <div id="title">
                    <h1>訂單查詢</h1>   
                </div>  
                <p>
                <img src="/images/dish.png" width="150px" height="150px">
                </p>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @foreach ($orders as $order)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul>
                                @foreach ($order->cart->items as $item)
                                    <li class="list-group-item">
                                        <span class="badge">${{ $item['price'] }}</span>
                                        {{ $item['item']['title'] }} | {{ $item['qty'] }} 個
                                    </li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <strong>總金額： ${{ $order->cart->totalPrice}} </strong>
                        </div>

                            {{-- <tr style='background-color:#f5d6d6 ;Color:hsl(335, 35%, 49%);font-weight:bold'>
                            <td>訂單編號</td>
                            <td>下單時間</td>
                            <td>總金額</td>
                            <td>訂單狀態</td>
                            <td>操作</td>
                            </tr>

                            <tr><span style="font-size:14px"><td><a href="訂單詳細資料">202003201850</td>
                            <td>2020-03-20 18:50:04</td>
                            <td>NT$156</td>
                            <td>尚未完成</td>
                            <td><a href="取消訂單程序">取消訂單</a></td>
                            </span></tr> --}}
                            @endforeach 
                    </div>
                    
                </div>
                </div> 
                    
                                
                    
        </center>
        </div>        
    </body>
</html>
    
    



