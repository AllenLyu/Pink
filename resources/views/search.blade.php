
<script type="text/javascript" src="/public/js/jquery-2.2.3.min.js"></script>
mudidi<input id="mdd">
jiage<input id="price">
leibie<input id="person">
kaojinjingdian?<input id="nextpoi">
<button onclick="getData()">start</button>
<div style="border: solid 1px;margin-top: 20px" id="container" >

</div>
<script>
    function getData()
    {
        data = {
            mddid:$('#mdd').val(),
            price:$('#price').val(),
            person:$('#person').val(),
            poi:$('#nextpoi').val()
        }
        $.get('search/data',data,function(data){
            data = JSON.parse(data);
            if(data)
            {
                var po = '<div>';
                for (var i=0;i<data['poi'].length;i++)
                {
                    poi = data['poi'][i];
                    po+='<a href='+poi['poiid']+'><h1>'+poi['name']+'</h1></a>'+
                                    '<image height="300px" src="'+poi['pic']+'" width="300px"'
                }
                po+= '</div>';



                var ho = 'jiudianshoucang<div>';
                for (var i=0;i<data['hotels'].length;i++)
                {
                    hotels = data['hotels'][i];
                    po+='<a href='+hotels['hid']+'><h1>'+hotels['name']+'</h1></a>'+
                            '<image height="300px" src="'+hotels['pic']+'" width="300px"'
                }
                po+= '</div>';
//                console.log(po);
                $('#container').append(po);
                $('#container').append(ho);
            }
        })
    }
</script>