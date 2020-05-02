<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>購物車</title>
    <script src="https://unpkg.com/vue/dist/vue.min.js"></script>
    <link rel="stylesheet" href="購物車.css">

</head>

<body>
    <div id="app">
        <div class="container">
            <div class="item_header">
                <div class="item_detail">商品</div>
                <div class="price">單價</div>
                <div class="count">數量</div>
                <div class="amount">總計</div>
                <div class="operate">編輯</div>
            </div>
            <div class="item_container" v-for="(item, index) in itemList" :key="item.id">
                <div class="item_header item_body">
                    <div class="item_detail">
                        <img v-bind:src="item.imgUrl" alt="">
                        <div class="name">{{item.itemName}}</div>
                    </div>

                    <div class="price"><span>$</span>{{item.price}}</div>
                    <div class="count">
                        <button @click="handleSub(item)">-</button>
                        {{item.count}}
                        <button @click="handlePlus(item)">+</button>
                    </div>
                    <div class="amount">{{item.price * item.count}}</div>
                    <div class="operate">
                        <button @click="handledelete(index)">刪除</button>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <center>
        <div id="form1">
            <form>
                <p>
                    <a href="訂購資訊.html"><input type="button" value="下一步"
                            style="width:120px;height:40px;border:2px rgb(55, 103, 148) dashed;font-family: Microsoft JhengHei;background-color:white;"></a>
            </form>
        </div>
    </center>
</body>
<script src="購物車.js"></script>

</html>