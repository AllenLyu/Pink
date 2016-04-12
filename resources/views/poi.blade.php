
<script type="text/javascript" src="/public/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="/public/js/addFavor.js"></script>
<div style="display: block">
    <h1>{{$mdd->name}}</h1>
    @foreach($pois as $poi)
        <a href="hotel/poi?poi={{$poi->poiid}}"> <h1>{{$poi->name}}</h1></a>
        <h1 id="line" onclick="showBucket({{$poi->poiid}})">add to my line</h1>
        <h1 id="favor" onclick="addFavor({{$poi->poiid}},2)">add to favor</h1>
        <p>{{$poi->desc}}</p>
        <img style="width: 800px;height: 600px" src="{{$poi->pic}}">
    @endforeach
</div>
<div id="addLine" style="width: 500px;height: 500px;border: solid 1px;margin: 0 auto;display: none;position: absolute">
    <button onclick="$('#addLine').css('display','none'); $('#se').remove()">close</button>
    newline<input id="newBucket"><button onclick="addBucket()">addNewBucket</button>
    <button onclick="addLine()">add in!!</button>
</div>
<script>
//    $('#line').on('click',function(){
//
//    })
    function showBucket(id)
    {
        $.get('line/bucket',[],function(data){
//            alert(data);
            data = eval(data);
            var se = $('#se');
            if(se.length==0)
            {
                var ul='<div id="se"><input id="poi" value="'+id+'"style="display: none"><select id="chooser">';
                for(var i =0;i<data.length;i++) {
                    ul +=

                            '<option value="'+data[i]['bid']+'">' + data[i]['name'] + '</opinion>';
                }
                ul+='</select></div>';
                $('#addLine').append(ul);
                $('#addLine').css('display','block')
            }
        })
    }


    function addBucket()
    {
        var name = $('#newBucket').val();
        if(name)
        {
            $.get('line/newbucket',{name:name},function(data)
            {
                if(data)
                {
                    var op =  '<option value="'+data+'">' + name + '</opinion>';
                    $('#chooser').append(op);
                    alert("success!");
                }
            })
        }else {
            alert('complete you info!');
        }
    }

    function addLine()
    {
        data = {
            poi:$('#poi').val(),
            bid:$("#chooser  option:selected").val(),
        }

        $.get('line/addline',data,function(data)
        {
            if(data)
            {
                alert('success!');
            }
        })
    }
</script>