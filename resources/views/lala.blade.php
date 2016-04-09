{{--<script type="text/javascript" src="../../public/js/jquery.js"></script>--}}
<script type="text/javascript" src="../../public/js/jquery-2.2.3.min.js"></script>
    <div>
        <table id="tab" border="1" cellspacing="1" style="background-color:#a0c6e5">
        @foreach($comments as $comment)
            <tr>
                <td>{{$comment->name}}</td>
                <td>{{$comment->star}}fen</td>
                <td>{{$comment->content}}</td>
                <td>{{$comment->time}}</td>
                <td>{{$comment->title}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    <div>
        comment:<input id="comment" style="margin-top: 10px">
        title:<input id="title" style="margin-top: 10px">
        star:<input id="star" style="margin-top: 10px">
        <button id="sub" type="button">click me</button>
    </div>
    <script>
        $('#sub').click(function(){
            comment = $('#comment').val();
            title = $('#title').val();
            star = $('#star').val();
            data = {
                        comment:comment,
                        title :title,
                        star :star};
            if(comment&&title&&star)
            {
                $.get("bbs/ins",data,function(data){
                    if(data['cid']!=0)
                    {
                        var tr = '<tr>'+
                                '<td>'+data['name']+'</td>'+
                                '<td>'+star+'fen</td>'+
                                '<td>'+comment+'</td>'+
                                '<td>'+'JustNow'+'</td>'+
                                '<td>'+title+'</td>'+
                                '</tr>';
                        $('#tab').append(tr);
                    }
                    else{
                        alert("insert Fail!");
                    }
                });
            }else {
                alert("please complete you comment!");
            }
//            alert(1);
        });

    </script>