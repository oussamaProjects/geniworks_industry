<!DOCTYPE html>
<html>
<head>
    <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<style>
     .box{
        padding: 20px;
        display: none;
        margin-top: 20px;
        border: 1px solid #000;
    }
    .red{ background: #ff0000; }
    .green{ background: #00ff00; }
    .blue{ background: #0000ff; }
    .choose{background: #ffffff;}
</style>
    <div>
        <select>
            <option value="choose">Choose Color</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>
    </div>
    <div class="choose box">You have to select <strong>any one option</strong> so i am here</div>
    <div class="red box">You have selected <strong>red option</strong> so i am here</div>
    <div class="green box">You have selected <strong>green option</strong> so i am here</div>
    <div class="blue box">You have selected <strong>blue option</strong> so i am here</div>
<script>
    
    $(document).ready(function(){
        $("select").change(function(){
            $( "select option:selected").each(function(){
                if($(this).attr("value")=="red"){
                    $(".box").hide();
                    $(".red").show();
                }
                if($(this).attr("value")=="green"){
                    $(".box").hide();
                    $(".green").show();
                }
                if($(this).attr("value")=="blue"){
                    $(".box").hide();
                    $(".blue").show();
                }
                if($(this).attr("value")=="choose"){
                    $(".box").hide();
                    $(".choose").show();
                }
            });
        }).change();
    });
</script>
</body>
</html>