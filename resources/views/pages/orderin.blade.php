<html>
    <head>
        <title>
            訂單查詢
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/訂單查詢.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div id="main-container" class="container">
            <center>
                <div id="title">
                    訂單查詢 
                </div>  
                <p>
                <img src="/images/dish.png" width="150px" height="150px">
                <p>
                <table border="1" width="550" style="text-align:center;border:3px #FFD382 dashed;font-size:16px" cellpadding="10" border='1'>
                <div id="table1">                        
                            <tr style='background-color:#f5d6d6 ;Color:hsl(335, 35%, 49%);font-weight:bold'>
                            <td>訂單編號</td>
                            <td>下單時間</td>
                            <td>總金額</td>
                            <td>操作</td>
                            </tr>
                            @foreach ($orders as $order)
                            <tr><span style="font-size:14px"><td><a href="訂單詳細資料">{{ $order->id }}</td>
                            <td>{{ $order->time }}</td>
                            <td>NT$156</td>
                            <td><a href="取消訂單程序">取消訂單</a></td>
                            </span></tr>
                            @endforeach
                            
                </div>
                    
                </table>
            

        </center>
        </div>        
    </body>
</html>