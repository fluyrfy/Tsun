@extends('layouts.start')

@section('content')
        <div id="marquee">
            <strong><marquee>村食堂線上點餐系統</marquee></strong>
        </div>

        <p>
            <img src="/images/dish.png" width="150px" height="150px">
            <p>
                <div>
                    <form>
                        <p>
                            <a href="{{ route('order.eatin' )}}"><input type="button" value="開始點餐"
                            style="width:120px;height:40px;border:2px #9999FF dashed;background-color:white;"></a>
                        <p>
                            <a href="{{ route('pages.news' )}}"><input type="button" value="最新消息"
                            style="width:120px;height:40px;border:2px #9999FF dashed;background-color:white;"></a>
                        <p>
                            <a href="new.html"><input type="button" value="聯絡店家"
                            style="width:120px;height:40px;border:2px #9999FF dashed;background-color:white;"></a>
                    </form>
                </div>
@endsection
