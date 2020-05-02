<html>

<head>
    <title>
        首頁
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div id="main-container" class="container">
        <center>
            <div id="marquee">
                <marquee>3月公休日期：3/15（日）、3/22（日）</marquee>
            </div>

            <p>
                <img src="/images/dish.png" width="150px" height="150px">
                <p>
                    <div>
                        <form>
                            <p>
                                <a href="/diningmethod"><input type="button" value="開始點餐"
                                        style="width:120px;height:40px;border:2px #9999FF dashed;background-color:white;"></a>
                                <p>
                                <a href="{{ route('users.signin')}}"><input type="button" value="會員中心"
                                        style="width:120px;height:40px;border:2px #9999FF dashed;background-color:white;"></a>
                                <p>
                                    <a href="new.html"><input type="button" value="最新消息"
                                        style="width:120px;height:40px;border:2px #9999FF dashed;background-color:white;"></a>
                        </form>
                    </div>



        </center>
    </div>
</body>

</html>