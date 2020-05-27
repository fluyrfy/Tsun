<html>

<head>
    <title>
        訂購資訊
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/訂購資訊.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<script>
    // function changeDropdown()
    // {
    //     var state=document.getElementById("mySelect").value;
    //     if(state=="store"||state=="mobil")
    //     {
    //         document.getElementById("creditcard").style.visibility='hidden';
    //     }
    //     else
    //     {
    //         document.getElementById("creditcard").style.visibility='visible';
    //     }
    // }
    // item = document.getElementById("001")
    // item.addEventListener("click", (function()
    // {
    //     document.getElementById("creditcard").style.display="";
    // }));
    // $('#myselect').change(function() {
    // if($('#myselect option:selected').val() == "credit") {
    //     document.getElementById("creditcard").style.display="";
    // }

// });
    function showDiv(divId, element)
    {
        document.getElementById(divId).style.display = element.value == "credit" ? 'block' : 'none';
    }
</script>
<body>
    <div id="main-container" class="container">
        <div id="form1">
            <center>
                <font color="black" size="6">訂購資訊</font>
            </center>

            <form action="{{ route('checkout') }}" method="post">
                <b>
                    <p>
                        總金額：${{ $total }}
                    </p>
                    <p>
                        預計取餐時間：
                    </p>
                    <p>
                        <script language="javascript">
                            var Today = new Date();
                            document.write(Today.getFullYear() + " 年 " + (Today.getMonth() + 1) + " 月 " + Today.getDate() + " 日");
                        </script>

                        <select name="time">
                            　<option value="11">11</option>
                            　<option value="12">12</option>
                            　<option value="13">13</option>
                            <option value="17">17</option>
                            　<option value="18">18</option>
                            　<option value="19">19</option>
                        </select>時
                        <select name="time">
                            　<option value="00">00</option>
                            　<option value="05">05</option>
                            　<option value="10">10</option>
                            <option value="15">15</option>
                            　<option value="20">20</option>
                            　<option value="25">25</option>
                            <option value="30">30</option>
                            　<option value="35">35</option>
                            　<option value="40">40</option>
                            <option value="45">45</option>
                            　<option value="50">50</option>
                            <option value="55">55</option>
                        </select>分
                    </p>
                    <p>
                        <font color="red">(營業時間：11:00~14:00、17:00~20:00)</font>
                    </p>
                    <p>
                        外帶自備餐盒：
                        <select name="takeout">
                            　<option value="yes">是</option>
                            　<option value="no">否</option>
                        </select>
                    </p>
                    <p>
                        支付方式：
                        <select id="myselect" name="pay" onchange="showDiv('creditcard', this)">
                            　<option value="store">到店付款(現金/信用卡/行動支付)</option>
                            　<option id="001" value="credit">信用卡支付</option>
                            　<option value="mobile">行動支付</option>
                        </select>
                    </p>
                    <div  id="creditcard" class="row" style="display:none">
                        <div class="form-group">
                            <label for="name">姓名</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">住址</label>
                            <input type="text" id="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="card-name">持卡人姓名</label>
                            <input type="text" id="card-name" class="form-control" required>
                        </div>
                            <div class="form-group">
                                <label for="card-expiry-month">
                                    到期月
                                </label>
                                <input type="text" id="card-expiry-year" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="card-expiry-year">
                                    到期年
                                </label>
                                <input type="text" id="card-expiry-year" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="card-cvc">
                                    安全碼
                                </label>
                                <input type="text" id="card-cvc" class="form-control" required>
                            </div>
                    </div>
                    <p>
                        <input type="submit" value="確定">
                    </p>
                </b>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</body>

</html>