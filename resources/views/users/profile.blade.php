@extends('layouts.start')

@section('content')
<div id="main-container" class="container">
    <center>
        <p>
        <img src="/images/dish.png" width="150px" height="150px">
        <p>
    <div id="form1">
        <form>
            <p>
            <a href="編輯個人資料.html"><input type="button" value="編輯個人資料" style="width:120px;height:40px;border:2px #9999FF dashed;background-color:white;"></a>
            <p>
            <a href="{{ route('pages.orderin')}}"><input type="button" value="訂單查詢" style="width:120px;height:40px;border:2px #9999FF dashed;background-color:white;"></a>
            <p>
            <a href="登出.html"><input type="button" value="登出" style="width:120px;height:40px;border:2px #9999FF dashed;background-color:white;"></a>
        </form>
    </div>       
    
    

</center>
</div>   
@endsection    