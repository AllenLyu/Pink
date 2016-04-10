<script type="text/javascript" src="../../public/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="../../public/js/addFavor.js"></script>
<div style="display: block">
    <h1>{{$poi->name}}</h1>
    @foreach($hotels as $hotel)
        <h1>{{$hotel->name}}</h1>
        {{--<h1 id="line" onclick="showBucket({{$hotel->hotelid}})">add to my line</h1>--}}
        <h1 id="favor" onclick="addFavor({{$hotel->hid}},3)">add to favor</h1>
        {{--<p>{{$hotel->desc}}</p>--}}
        yuanjia{{$hotel->oriMoney}} now:{{$hotel->oriMoney*$hotel->discount*0.1}}
        <img style="width: 800px;height: 600px" src="{{$hotel->pic}}">
    @endforeach
</div>