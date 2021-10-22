<!DOCTYPE html>
<html lang="en">
<head>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Two grids demo</title>

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
   // {x: 0, y: 10, width: 12, height: 2,name:"Hylde"},                
   // {x: 0, y: 20, width: 12, height: 2,name:"M-Box"},
   // {x: 0, y: 30, width: 12, height: 2,name:"Bøjlestang"},
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



    </script>

    <style type="text/css">
             .grid-stack-item-content {
            color: #2c3e50;
            text-align: center;
            background-color: #9caabc;
        }

       .grid-stack-item {
            background-color: #9caabc;
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
        border:1px solid #ddd;
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
</head>
<body>





    <div class="container-fluid">
        <h1>Simplify Your Project</h1>
      <div class="" style="position: relative;display:flex;">
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

    
          <div id="capture" class="grid_container">
            <div class="gmCalculatorDrawingRenderedFixtures" style="width:100%">
              <div class="item" style="width:65%;">
                <div class="gmCalculatorDrawingRenderedFixturesHeader">
                  <center>
                  <h1>Project Simple</h1>
                </center>
                </div>
                <div class="item-content">
                  <div class="grid-stack grid-stack-6 sub">
                    <div class="grid-stack-item" data-gs-x="0" style="background-color: #576574;" data-gs-y="0" data-gs-width="12" data-gs-height="5"><div class="grid-stack-item-content" style="background-color: #576574;"><h3 style="color:white ;">Menu</h3></div></div>

                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="6" data-gs-width="12" data-gs-height="5" style="background-color: #576574;"><div class="grid-stack-item-content" style="background-color: #576574;"><h3 style="color:white ;">Side Bar</h3></div></div>
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="9" data-gs-width="12" data-gs-height="6"  style="background-color: #8395a7;"><div class="grid-stack-item-content" style="background-color: #8395a7;"><h3 style="color:white ;">Footer</h3></div></div>
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="11" data-gs-width="12" data-gs-height="10"  style="background-color: #c8d6e5;">
                      <div class="grid-stack-item-content"  style="background-color: #c8d6e5;"><h3 style="color:white ;">Body</h3>
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
                     <div class="grid-stack-item" data-gs-x="0" data-gs-y="0" data-gs-width="12" data-gs-height="6"  style="background-color: #576574;">
                        <div class="grid-stack-item-content" style="background-color: #576574;"><span class="remove">X</span><h3 style="color:white ;">Menu</h3></div>
                      </div>
                      <div class="grid-stack-item" data-gs-x="0" data-gs-y="6" data-gs-width="12" data-gs-height="7" style="background-color: #8395a7;">
                        <div class="grid-stack-item-content" style="background-color: #8395a7;"><span class="remove">X</span><h3 style="color:white ;">Side Bar</h3></div>
                      </div>
                      <div class="grid-stack-item" data-gs-x="0" data-gs-y="9" data-gs-width="12" data-gs-height="5"  style="background-color: #c8d6e5;">
                        <div class="grid-stack-item-content" style="background-color: #c8d6e5;"><span class="remove">X</span><h3 style="color:white ;">Body</h3></div>
                      </div>
                      <div class="grid-stack-item" data-gs-x="0" data-gs-y="11" data-gs-width="12" data-gs-height="10">
                        <div class="grid-stack-item-content">hello
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

                    <div class="grid-stack-item" data-gs-x="0" style="background-color: #00A1DB;" data-gs-y="0" data-gs-width="12" data-gs-height="5">
                      <div class="grid-stack-item-content" style="background-color: #00A1DB;">
                        <span>Button</span>
                        <span class="remove">X</span>
                      </div>
                    </div>
                    <div class="grid-stack-item" data-gs-x="0" style="background-color: #feca57;" data-gs-y="6" data-gs-width="12" data-gs-height="2">
                      <div class="grid-stack-item-content"  style="background-color: #feca57;"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span><span class="remove">X</span></div>
                    </div>
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="9" data-gs-width="12" style="background-color: #ff6b6b;" data-gs-height="10">
                      <div class="grid-stack-item-content" style="background-color: #ff6b6b;"><span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</span><span class="remove">X</span></div>
                    </div>
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="11" data-gs-width="12" data-gs-height="15" style="background-color: #00d2d3;">
                      <div class="grid-stack-item-content"  style="background-color: #00d2d3;">, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        <span class="remove">X</span>
                      </div>
                    </div>

                    <div class="grid-stack-item" data-gs-x="0" style="background-color: #00A1DB;" data-gs-y="0" data-gs-width="12" data-gs-height="5">
                      <div class="grid-stack-item-content" style="background-color: #00A1DB;">
                        <span>Button</span>
                        <span class="remove">X</span>
                      </div>
                    </div>
                    <div class="grid-stack-item" data-gs-x="0" style="background-color: #feca57;" data-gs-y="6" data-gs-width="12" data-gs-height="2">
                      <div class="grid-stack-item-content"  style="background-color: #feca57;"><span>Text</span><span class="remove">X</span></div>
                    </div>
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="9" data-gs-width="12" style="background-color: #ff6b6b;" data-gs-height="3">
                      <div class="grid-stack-item-content" style="background-color: #ff6b6b;"><span>Text</span><span class="remove">X</span></div>
                    </div>
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="11" data-gs-width="12" data-gs-height="5" style="background-color: #00d2d3;">
                      <div class="grid-stack-item-content"  style="background-color: #00d2d3;">Text
                        <span class="remove">X</span>
                      </div>
                    </div>

                  </div>
                  </div>
              </div>
            </div>
          </div>
    </div>



</body>
</html>
