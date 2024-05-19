<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"


<script type="text/javascript">
var ctx = document.getElementById("chartjs_bar").getContext('2d');
var myChart = new CharacterData(ctx,{type:'bar',
data:{ labels:<?php echo json_encode($product_name);?>,
datasets:[{
    bacgroundColor:[
        "#5969ff",
        "#ff407b",
        "#25d5f2",
        "#ffc750",
        "#2ec551",
        "#7040fa",
        "#ff004e"
    ],
    data:<?php echo json_encode($sales);?>,
}]
},
options:{
    legend:{
        display:true,
        position:'bottom',

        labels:{
            fontColor: '#71748d',
            fontFamily: 'Circular Std Book',
            fontSize: 14,
        }
    },
}
});
</script>