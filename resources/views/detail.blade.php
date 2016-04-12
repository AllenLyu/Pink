{{--<script type="text/javascript" src="../../public/js/jquery-2.2.3.min.js"></script>--}}
<script type="text/javascript" src="/public/js/jquery-2.2.3.min.js"></script>

@foreach($hotels as $hotel)

<a href="hotel/detail?id={{$hotel->hid}}"> <h1>{{$hotel->name}}</h1></a>
{{--<h1 id="line" onclick="showBucket({{$hotel->hotelid}})">add to my line</h1>--}}
{{--<h1 id="favor" onclick="addFavor({{$hotel->hid}},3)">add to cart</h1>--}}
{{--<p>{{$hotel->desc}}</p>--}}
yuanjia{{$hotel->oriMoney}} now:{{$hotel->oriMoney*$hotel->discount*0.1}}
<img style="width: 800px;height: 600px" src="{{$hotel->pic}}">



<div style="margin-top: 10px">
    <input id="starttime" type="datetime">
    <input id="endtime" type="datetime">
    <button onclick="addToCart({{$hotel->hid}})">add to cart</button>
</div>

@endforeach

<script>

    function addToCart(id)
    {
        startt = $('#starttime').val();
        endt = $('#endtime').val();
        data = {
            start:startt,
            end:endt,
            id:id
        };

        $.get('cart',data,function(data){
            if(data!=0)
            {
                alert('add to cart success!');
            }
        })
    }
</script>