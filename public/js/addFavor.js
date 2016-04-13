/**
 * Created by allenlyu on 4/10/16.
 */
function addFavor(id,type)
{
    data={id:id,type:type};
    $.get('favor/add',data,function(data){
        if (data)
        {
            alert("add to favor success!");
        }
    })
}


function cancleFavor(idfavor)
{
    $.get('favor/cancle',{idfavor:idfavor},function(data)
    {
        if (data)
        {
            alert('cancle success!');
        }
    })
}