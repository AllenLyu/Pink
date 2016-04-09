<script type="text/javascript" src="../../public/js/jquery-2.2.3.min.js"></script>
@foreach($mdds as $mdd)

    <a href="poi/mdd={{$mdd->mddid}}"> <h1>{{$mdd->name}}</h1></a>
    <p>{{$mdd->desc}}</p>
    <img src="{{$mdd->pic}}">

@endforeach