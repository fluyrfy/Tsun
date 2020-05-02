@extends('layouts.start')

@section('content')
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        <p></p>
    </div>
    @endif
    <div>
        <div id="title">
            用餐方式 
        </div>               
        <p>                
            <div id="form1">
                <form>
                    <p>
                    <a href="/eatin"><input type="button" value="內用" style="width:120px;height:40px;border:2px #9999FF dashed;background-color:white;"></a>
                    <p>
                    <a href="外帶店家.html"><input type="button" value="外帶" style="width:120px;height:40px;border:2px #9999FF dashed;background-color:white;"></a>
                    <p>
                    <a href="填寫地址.html"><input type="button" value="外送" style="width:120px;height:40px;border:2px #9999FF dashed;background-color:white;"></a>
                </form>
            </div> 
    </div>
    
@endsection
