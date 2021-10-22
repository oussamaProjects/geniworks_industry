<head>
<script type="text/javascript">
    var a = 0;
    var add = function(valueToAdd){
        a += valueToAdd;
        document.getElementById('Value').innerHTML = a;

        if(a == 0) {
            document.getElementById('minus').disabled = true;
        } else {
            document.getElementById('minus').disabled = false;
        }
    }    

</script>

</head>

<body>
    Value:<span id="Value">0</span>
    <button type="button" id = add onclick="javascript:add(1)">+</button>
    <button type="button" id = minus onclick="javascript:add(-1)">-</button>


</body>