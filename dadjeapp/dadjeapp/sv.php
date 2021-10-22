<!DOCTYPE html>
<html>
<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.4.0/gridstack.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.5.0/lodash.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.4.0/gridstack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.4.0/gridstack.jQueryUI.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="https://unpkg.com/web-animations-js@2.3.1/web-animations.min.js"></script>
    <script src="https://unpkg.com/hammerjs@2.0.8/hammer.min.js"></script>
    <script src="https://unpkg.com/muuri@0.7.1/dist/muuri.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <title></title>
</head>

<body>

  <style>


.cf:before,
.cf:after {
    content: " ";
    
    display: table;

}
.cf:after {
    clear: both;
}
.half.left.cf > input {
    margin: 5px;
}
  </style>
<script>
      $(function () {
  var boardGrid = new Muuri('.gmCalculatorDrawingRenderedFixtures', {
        layout: {
          horizontal: false,
        },
        layoutDuration: 400,
        layoutEasing: 'ease',
        dragEnabled: true,
        dragSortInterval: 0,
        dragStartPredicate: {
          handle: '.gmCalculatorDrawingRenderedFixturesHeader'
        },
        dragReleaseDuration: 400,
        dragReleaseEasing: 'ease'
      });
  
  
  var toolboxitems = [
  //  {x: 0, y: 10, width: 12, height: 2,name:"Hylde"},                
   // {x: 0, y: 20, width: 12, height: 2,name:"M-Box"},
  //  {x: 0, y: 30, width: 12, height: 2,name:"Bøjlestang"},
   // {x: 0, y: 35, width: 12, height: 2,name:"Trådkurv"}
  ];
  $('.toolbox').gridstack({
    float: true,
    disableResize: false,
    height: toolboxitems * 2,
    cellHeight: 10,
    alwaysShowResizeHandle: false
  });
  var toolbox = $('.toolbox').data('gridstack');
  toolboxitems.forEach(function(node){
    toolbox.addWidget($('<div><div class="grid-stack-item-content">'+node.name+'<span class="remove">X</span></div></div>'),0,0,node.width,node.height,true);
  });
  var height = 750;
          var cmheight = 208;
          var holes = 65;
          var ratio = height / cmheight;
          var cellHeight = (cmheight / holes) * ratio;
          /*console.log(height);
          console.log(ratio);
          console.log(cellHeight);*/
          $('.sub').css('min-height',height+'px');
          
            $('.sub').each(function (index) {
                var grid = $(this).data('gridstack');
                $(this).gridstack({
                  float: true,
                  width:12,
                  height:holes,
                  cellHeight: cellHeight,
                  disableResize: false,
                  verticalMargin: 0,
                  acceptWidgets: '.grid-stack-item',
                  alwaysShowResizeHandle: false
                });
            });
            $('.grid-stack').on('click','.remove',function(){
                var grid = $(this).closest('.grid-stack').data('gridstack');
                grid.removeWidget($(this).closest('.grid-stack-item'));
            });
  
            var items = [
            //    {x: 0, y: 10, width: 12, height: 2},                
                
           //     {x: 0, y: 15, width: 12, height: 3},
                
           //     {x: 0, y: 20, width: 12, height: 2},
                
           //     {x: 0, y: 30, width: 12, height: 2},
                
           //     {x: 0, y: 35, width: 12, height: 2}
            ];

            $('.sub').each(function () {
                var grid = $(this).data('gridstack');
                items.forEach(function(node){
                  grid.addWidget($('<div class="grid-stack-item-content" data-gs-min-width="12"><span class="remove">X</span></div>'),
                        node.x, node.y, node.width, node.height,false,12);
                });
            });
            $('.grid-stack').on('added', function(event, items) {
              for (var i = 0; i < items.length; i++) {
                var item = items[i];
                console.log(item);
                //$(items[i].el).clone().appendTo($('.toolbox'));
                var toolbox = $('.toolbox').data('gridstack');
                var html = $(items[i].el).html();
                
              }
          });
          /*$('.sidebar .grid-stack-item').draggable({
                revert: 'invalid',
                handle: '.grid-stack-item-content',
                scroll: false,
                appendTo: 'body'
            });
           $('.sub').on( "drop", function( event, ui ) {
                $(ui.draggable).clone().css('left','inherit').css('top','inherit').appendTo($('.sidebar'));
                 $('.sidebar .grid-stack-item').draggable({
                   revert: 'invalid',
                   handle: '.grid-stack-item-content',
                   scroll: false,
                   appendTo: 'body'
                 });
           } );*/
  
});


html2canvas(document.querySelector("#capture")).then(canvas => {
    document.body.appendChild(canvas)
});

    </script>

    <style type="text/css">
             .grid-stack-item-content {
            color: #2c3e50;
            text-align: center;
            background-color: #;
        }

       .grid-stack-item {
            background-color: #;
        }

        .grid-stack-item-removing {
            opacity: 0.5;
        }
        .sidebar {
            background: rgba(0, 255, 0, 0.1);
            height: 150px;
            padding: 25px 0;
            text-align: center;
        }
      .skabcontainer{
        display: flex;
    position: relative;
            width: 100%;
    height: 100%;
      }
      .skab {
        display: flex;
        position: absolute;
        width: 100%;
      }
      .skab-item{
        position:absolute;
      }
      
        .sidebar .grid-stack-item {
          background: rgba(0, 255, 0, 0.8);
          margin:10px;
           /* width: 100px;
            height: 100px;
            border: 2px dashed green;
            text-align: center;
            line-height: 100px;
            z-index: 10;
            
            cursor: default;
            display: inline-block;*/
        }
      /*.row {
        height:750px;
      }*/
      .grid_container{
        position: relative;
        display:flex;
      }
      .gmCalculatorDrawingRenderedFixtures {
        
      }
      .item {
        position:absolute;
        border:1px solid ;
        background-color:white;
      }
      .item-content{
      }
      .toolbox .remove {
        display:none;
      }
      .remove {
        float:right;
      }
        .sidebar .grid-stack-item .grid-stack-item-content {
            background: none;
        }
      ._container-fluid{
        position:relative;
        display:flex;
        width: 100%; height: 100%;
      }
    </style>



    

<script>
$(document).ready(function(){

$('#id').click(function(){
var id=$(this).val();

$.post('function.php',{id:id},function(data)
{
 alert(successfully)
})
});

});
</script>

<button name="simpleproject" id="id" class="btn btn-success" style="position: relative;" href="javascript:void(0);" onClick="generate(),addfavourite();">Save</button>
<input id="btn-Preview-Image" type="button" value="Preview"/>
   
    <br/>
    <h3>Preview :</h3>
    <div id="previewImage">
    </div>
    <img src="" id="pic" alt="">

<div id="wrapper" style="position: flex; width: 100%; height: 1000px">
  <div  id="html-content-holder" class="container-fluid">
        <h1>Simplify Your Project</h1>
        <!--<button name="simpleproject" id="id" class="btn btn-success" style="position: relative;" href="javascript:void(0);" onClick="generate(),addfavourite();">Save</button>-->

<script>
var element = $("#html-content-holder");
var getCanvas;
    $("#btn-Preview-Image").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
                document.getElementById("pic").value = getCanvas;
             }
         });
    });
</script>

      <div class="" style="position: relative;display:flex;height:;">
            <div class="toolbox col-md-1">
              <!--<div class="grid-stack-item" data-gs-x="0" data-gs-y="0" data-gs-width="12" data-gs-height="2">
                <div class="grid-stack-item-content">Drag me 1<span class="remove">X</span></div>
              </div>
              <div class="grid-stack-item" data-gs-x="0" data-gs-y="2" data-gs-width="12" data-gs-height="2">
                <div class="grid-stack-item-content">Drag me 2<span class="remove">X</span></div>
              </div>
              <div class="grid-stack-item" data-gs-x="0" data-gs-y="2" data-gs-width="12" data-gs-height="2">
                <div class="grid-stack-item-content">Drag me 3<span class="remove">X</span></div>
              </div>
              <div class="grid-stack-item" data-gs-x="0" data-gs-y="2" data-gs-width="12" data-gs-height="2">
                <div class="grid-stack-item-content">Drag me 4<span class="remove">X</span></div>
              </div>-->
        </div>
      </div>
          <div class="grid_container">
            <div class="gmCalculatorDrawingRenderedFixtures" style="width:100%">
              <div class="item" style="width:65%;">
                <div class="gmCalculatorDrawingRenderedFixturesHeader">
                  <center>
                  <h1>Project Simple</h1>
                </center>
                </div>
                <div class="item-content">
                  <div class="grid-stack grid-stack-6 sub">
                    <div class="grid-stack-item" data-gs-x="0" style="border:1px solid #576574;background-color: white;" data-gs-y="0" data-gs-width="12" data-gs-height="5"><div class="grid-stack-item-content" style=""><h3 style="color: ;">Menu-1</h3></div></div>

                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="6" data-gs-width="12" data-gs-height="5" style="border:1px solid #576574;background-color: white;"><div class="grid-stack-item-content" style=""><h3 style="color: ;">Side Bar-1</h3></div></div>
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="9" data-gs-width="12" data-gs-height="6"  style="border:1px solid #576574;background-color: white;"><div class="grid-stack-item-content" style=""><h3 style="color: ;">Footer-1</h3></div></div>
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="11" data-gs-width="12" data-gs-height="10"  style="border:1px solid #576574;background-color: white;">
                      <div class="grid-stack-item-content"  style=""><h3 style="color: ;">Body-1</h3>
                        <span class="remove">X</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item" style="width:15%;">
                <div class="gmCalculatorDrawingRenderedFixturesHeader">
                  <center>
                  <h3>Components</h3>
                </center>
                </div>
                <div class="item-content">
                    <div class="grid-stack grid-stack-6 sub">
                     <div class="grid-stack-item" data-gs-x="0" data-gs-y="0"  border="1" data-gs-width="12" data-gs-height="6"  style="border:1px solid #576574;background-color: white;">
                        <div class="grid-stack-item-content" style=""><span class="remove">X</span><h3 style="color: ;">Menu-2</h3></div>
                      </div>
                      <div class="grid-stack-item" data-gs-x="0" data-gs-y="6" data-gs-width="12" data-gs-height="7" style="border:1px solid #576574;background-color: white;">
                        <div class="grid-stack-item-content" style=""><span class="remove">X</span><h3 style="color: ;">Side Bar-2</h3></div>
                      </div>
                      <div class="grid-stack-item" data-gs-x="0" data-gs-y="9" data-gs-width="12" data-gs-height="5"  style="border:1px solid #576574;background-color: white;">
                        <div class="grid-stack-item-content" style=""><span class="remove">X</span><h3 style="color: ;">Body-2</h3></div>
                      </div>
                      <div class="grid-stack-item" data-gs-x="0" data-gs-y="11" data-gs-width="12" data-gs-height="10">
                        <div class="grid-stack-item-content">Footer-2
                          <span class="remove">X</span>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="item" style="width:15%;">
                <div class="gmCalculatorDrawingRenderedFixturesHeader">
                  <center>
                  <h3>UI Elements</h3>
                </center>
                </div>
                <div class="item-content">
                  <div class="grid-stack grid-stack-6 sub">

                    <div class="grid-stack-item" data-gs-x="0" style="border:1px solid #00A1DB;background-color: white;" data-gs-y="0" data-gs-width="12" data-gs-height="5">
                      <div class="grid-stack-item-content" style="">
                        <h4>Button</h4>
                        <span class="remove">X</span>
                      </div>
                    </div>
                    <div class="grid-stack-item" data-gs-x="0" style="border:1px solid #feca57;background-color: white;" data-gs-y="6" data-gs-width="12" data-gs-height="2">
                      <div class="grid-stack-item-content"  style=""><h4>Title-1</h4><span class="remove">X</span></div>
                    </div>
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="9" data-gs-width="12" style="border:1px solid #ff6b6b;background-color: white;" data-gs-height="3">
                      <div class="grid-stack-item-content" style=""><h4>Title-2</h4><span class="remove">X</span></div>
                    </div>
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="11" data-gs-width="12" data-gs-height="5" style="border:1px solid #00d2d3;background-color: white;">
                      <div class="grid-stack-item-content"  style=""><h4>Button-1</h4>
                        <span class="remove">X</span>
                      </div>
                    </div>
                    <div class="grid-stack-item" data-gs-x="0" style="border:1px solid #576574;background-color: white;" data-gs-y="0" data-gs-width="12" data-gs-height="5">
                      <div class="grid-stack-item-content" style="">
                        <h4>Button-2</h4>
                        <span class="remove">X</span>
                      </div>
                    </div>




                    
                    <div class="grid-stack-item" data-gs-x="0" style="border:1px solid #576574;background-color: white;" data-gs-y="6" data-gs-width="12" data-gs-height="2">
                      <div class="grid-stack-item-content"  style=""><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span><span class="remove">X</span></div>
                    </div>
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="9" data-gs-width="12" style="border:1px solid #576574;background-color: white;" data-gs-height="10">
                      <div class="grid-stack-item-content" style=""><span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</span><span class="remove">X</span></div>
                    </div>
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="11" data-gs-width="12" data-gs-height="15" style="border:1px solid #00d2d3;background-color: white;">
                      <div class="grid-stack-item-content"  style="">, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        <span class="remove">X</span>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            <?php
    addfavourite();

    function addfavourite() {
      $cdb=mysqli_connect("localhost","root","","1115411geni5545work5sdb1115415");

    $newfav=$cdb->prepare("INSERT INTO favourites VALUES ('', 'qdqs');");
      $newfav->execute();

      if ($newfav===false) {
        echo "Add Error";
      }else{
        $res=$newfav->get_result();
        echo "Pic successfully Added";
      }
    }

    ?>

</body>

<script>
(function(exports) {
    function urlsToAbsolute(nodeList) {
        if (!nodeList.length) {
            return [];
        }
        var attrName = 'href';
        if (nodeList[0].__proto__ === HTMLImageElement.prototype || nodeList[0].__proto__ === HTMLScriptElement.prototype) {
            attrName = 'src';
        }
        nodeList = [].map.call(nodeList, function(el, i) {
            var attr = el.getAttribute(attrName);
            if (!attr) {
                return;
            }
            var absURL = /^(https?|data):/i.test(attr);
            if (absURL) {
                return el;
            } else {
                return el;
            }
        });
        return nodeList;
    }

    function screenshotPage() {
        var wrapper = document.getElementById('wrapper');
        html2canvas(wrapper, {
            onrendered: function(canvas) {
                canvas.toBlob(function(blob) {
                    saveAs(blob, 'simpleproject.png');
                });
            }
        });
    }

    function addOnPageLoad_() {
        window.addEventListener('DOMContentLoaded', function(e) {
            var scrollX = document.documentElement.dataset.scrollX || 0;
            var scrollY = document.documentElement.dataset.scrollY || 0;
            window.scrollTo(scrollX, scrollY);
        });
    }

    function generate() {
        screenshotPage();
    }
    exports.screenshotPage = screenshotPage;
    exports.generate = generate;
})(window);
</script>
</html>