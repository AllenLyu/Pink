<script type="text/javascript" src="/public/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="/public/js/addFavor.js"></script>
<div style="border: solid 1px">
    <h1>MY LINE</h1>
@foreach($builder as $item)
    <a href="my/line?bid={{$item->bid}}"> <h1>{{$item->name}}</h1></a>
@endforeach
</div>
<div style="border: solid 1px;margin-top: 10px">

<h1>mudidi shoucang</h1>

@foreach($mdds as $mdd)

    <a href="poi?mdd={{$mdd->mddid}}"> <h1>{{$mdd->name}}</h1></a>
    <h1 id="favor" onclick="cancleFavor({{$mdd->idfavor}})">cancle favor</h1>
    <p>{{$mdd->desc}}</p>
    <img src="{{$mdd->pic}}">

@endforeach
    </div>
<div style="border: solid 1px;margin-top: 10px">

<h1>poi shoucang</h1>

@foreach($pois as $poi)
    <a href="hotel/poi?poi={{$poi->poiid}}"> <h1>{{$poi->name}}</h1></a>
    {{--<h1 id="line" onclick="showBucket({{$poi->poiid}})">add to my line</h1>--}}
    {{--<h1 id="favor" onclick="addFavor({{$poi->poiid}},2)">add to favor</h1>--}}
        <h1 id="favor" onclick="cancleFavor({{$poi->idfavor}})">cancle favor</h1>
        <p>{{$poi->desc}}</p>
    <img style="width: 800px;height: 600px" src="{{$poi->pic}}">
@endforeach
</div>
<div style="border: solid 1px;margin-top: 10px">


<h1>jiudian shoucang</h1>
@foreach($hotels as $hotel)
    <h1>{{$hotel->name}}</h1>
    {{--<h1 id="line" onclick="showBucket({{$hotel->hotelid}})">add to my line</h1>--}}
    {{--<h1 id="favor" onclick="addFavor({{$hotel->hid}},3)">add to favor</h1>--}}
        <h1 id="favor" onclick="cancleFavor({{$hotel->idfavor}})">cancle favor</h1>
        {{--<p>{{$hotel->desc}}</p>--}}
    yuanjia{{$hotel->oriMoney}} now:{{$hotel->oriMoney*$hotel->discount*0.1}}
    <img style="width: 800px;height: 600px" src="{{$hotel->pic}}">
@endforeach

</div>


<div style="border: solid 1px;margin-top: 10px">


    <h1>gouwuche</h1>
    @foreach($carts as $cart)
        <h1>{{$cart->name}}</h1>
        {{--<h1 id="line" onclick="showBucket({{$cart->cartid}})">add to my line</h1>--}}
        {{--<h1 id="favor" onclick="addFavor({{$cart->hid}},3)">add to favor</h1>--}}
        {{--<h1 id="favor" onclick="cancleFavor({{$cart->idfavor}})">cancle favor</h1>--}}
        {{--<p>{{$cart->desc}}</p>--}}
        yuanjia{{$cart->oriMoney}} now:{{$cart->oriMoney*$cart->discount*0.1}}
        <img style="width: 800px;height: 600px" src="{{$cart->pic}}">
    @endforeach

</div>