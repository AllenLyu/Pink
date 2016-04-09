
<script type="text/javascript" src="../../public/js/jquery-2.2.3.min.js"></script>

<h1>{{$mdd->name}}</h1>
@foreach($pois as $poi)
    <a href="hotel/poi={{$poi->poiid}}"> <h1>{{$poi->name}}</h1></a>
    <p>{{$poi->desc}}</p>
    <img style="width: 800px;height: 600px" src="{{$poi->pic}}">
@endforeach