@foreach($pois as $poi)
    <a href="hotel/poi?poi={{$poi->poiid}}"> <h1>{{$poi->name}}</h1></a>
    {{--<h1 id="line" onclick="showBucket({{$poi->poiid}})">add to my line</h1>--}}
    {{--<h1 id="favor" onclick="addFavor({{$poi->poiid}},2)">add to favor</h1>--}}
    <p>{{$poi->desc}}</p>
    <img style="width: 800px;height: 600px" src="{{$poi->pic}}">
@endforeach