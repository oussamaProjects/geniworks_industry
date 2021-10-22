<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
	/**
 * Credit to Sara Soueidan
 * @link https://github.com/SaraSoueidan/creative-list-effects/blob/master/css/styles-3.css
 */

.removed-item {
    -webkit-animation: removed-item-animation .8s cubic-bezier(.65,-0.02,.72,.29);
    -o-animation: removed-item-animation .8s cubic-bezier(.65,-0.02,.72,.29);
    animation: removed-item-animation .8s cubic-bezier(.65,-0.02,.72,.29)
}

@keyframes removed-item-animation {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0)
    }

    30% {
        opacity: 1;
        -webkit-transform: translateX(50px);
        -ms-transform: translateX(50px);
        -o-transform: translateX(50px);
        transform: translateX(50px)
    }

    80% {
        opacity: 1;
        -webkit-transform: translateX(-800px);
        -ms-transform: translateX(-800px);
        -o-transform: translateX(-800px);
        transform: translateX(-800px)
    }

    100% {
        opacity: 0;
        -webkit-transform: translateX(-800px);
        -ms-transform: translateX(-800px);
        -o-transform: translateX(-800px);
        transform: translateX(-800px)
    }
}

@-webkit-keyframes removed-item-animation {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    30% {
        opacity: 1;
        -webkit-transform: translateX(50px);
        transform: translateX(50px)
    }

    80% {
        opacity: 1;
        -webkit-transform: translateX(-800px);
        transform: translateX(-800px)
    }

    100% {
        opacity: 0;
        -webkit-transform: translateX(-800px);
        transform: translateX(-800px)
    }
}

@-o-keyframes removed-item-animation {
    0% {
        opacity: 1;
        -o-transform: translateX(0);
        transform: translateX(0)
    }

    30% {
        opacity: 1;
        -o-transform: translateX(50px);
        transform: translateX(50px)
    }

    80% {
        opacity: 1;
        -o-transform: translateX(-800px);
        transform: translateX(-800px)
    }

    100% {
        opacity: 0;
        -o-transform: translateX(-800px);
        transform: translateX(-800px)
    }
}
</style>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>@twitter</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      
      <tr class="item">
        <td>1</td>
        <td>Nour-Eddine</td>
        <td>ECH-CHEBABY</td>
        <th>@__chebaby</th>
        <td><button class="btn btn-danger deleteItem">Delete</button></td>
      </tr>
      
      <tr class="item">
        <td>2</td>
        <td>John</td>
        <td>Doe</td>
        <th>@johndoe</th>
        <td><button class="btn btn-danger deleteItem">Delete</button></td>
      </tr>
      
      <tr class="item">
        <td>3</td>
        <td>Jane</td>
        <td>Doe</td>
        <th>@janedoe</th>
        <td><button class="btn btn-danger deleteItem">Delete</button></td>
      </tr>
    </tbody>
  </table>
  
<script src="https://code.jquery.com/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<script type="text/javascript">
	$(document).ready(function() {
    
    var $deleteButton = $('.deleteItem');

    $deleteButton.on('click', function(event) {
    
        event.preventDefault();

        var $button = $(this);

        if(confirm('Are you sure about this ?')) {

            var $item = $button.closest('tr.item');

            $item.addClass('removed-item')

                .one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {

                    $(this).remove();
            });
        }
      
    });
    
});
</script>
</body>
</html>