<!DOCTYPE html>
<html>
<head>
  <title></title>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://skywalkapps.github.io/bootstrap-dropmenu/stylesheets/bootstrap-dropmenu.min.css">
<style type="text/css">
  .dropdown-container-slidemorph {
  width: 300px;
  overflow: hidden;
  min-width: 0;
  max-width: none;
  transition: width .3s ease-in-out, height .3s ease-in-out;
}
.dropdown-container-slidemorph .dropdown-menu {
  min-width: auto;
  padding: 3px 0;
  -webkit-box-shadow: 0 0 0;
  box-shadow: 0 0 0;
}
.dropdown-container-slidemorph > .dropdown-menu > .dropdown-submenu {
  position: static;
}
.dropdown-container-slidemorph > .dropdown-menu > .dropdown-submenu > .dropdown-menu {
  display: block;
  top: -3px;
  right: 0;
  left: auto;
  border: 0;
  transform: translate(100%, 0);
  transition: transform .3s ease-in-out;
}
.dropdown-container-slidemorph > .dropdown-menu > .dropdown-submenu.open > ul {
  visibility: visible;
  transform: translate(0, 0);
}
.dropdown-container-slidemorph .dropdown-submenu > a:after {
  top: 50%;
  right: 20px;
  margin: -4px 0 0 0;
  position: absolute;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\e080";
  font-size: 9.6px;
  color: #777777;
}
.dropdown-backlink {
  border-bottom: 1px solid #e5e5e5;
}
.dropdown-backlink > a {
  position: relative;
  white-space: nowrap!important;
}
.dropdown-backlink > a:before {
  position: absolute;
  left: 0;
  top: 50%;
  margin: -4px 4px 0 0;
  position: relative;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\e079" !important;
  font-size: 9.6px;
  color: #777777 !important;
  width: 14px;
}

.btn-link,
.btn-link:hover,
.btn-link:focus, 
.btn-link:active {
  color: #fff;
  text-decoration: none;
}
/* General styles to improve presentation */

.dropdown {
  margin-top: -150px;
  margin-left: -20px;
}
</style>
</head>
<body>
<!--
Follow me on https://twitter.com/koucik
My stuff: skywalkapps.github.io
-->
<div id="slideMorph" class="dropdown">
  <h3>Bootstrap Dropdown with sliding submenu</h3>
  <a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
  </a>

  <div class="dropdown-container dropdown-container-slidemorph">
    <ul class="dropdown-menu">

      <li class="dropdown-submenu">
        <a data-toggle="slideMorph" href="#" class="dropmenu-item">
          <span class="dropmenu-item-label">Displayed items</span>
          <span class="dropmenu-item-content">5</span>
        </a>

        <ul class="dropdown-menu dropdown-menu--selectable">
          <li><a href="#">5</a></li>
          <li class="selected"><a href="#">10</a></li>
          <li><a href="#">20</a></li>
          <li><a href="#">50</a></li>
          <li><a href="#">100</a></li>
          <li><a href="#">200</a></li>
        </ul>
      </li>

      <li class="dropdown-submenu">
        <a data-toggle="slideMorph" href="#" class="dropmenu-item">
          <span class="dropmenu-item-label">Columns</span>
          <span class="dropmenu-item-content">&hellip;</span>
        </a>

        <ul class="dropdown-menu dropdown-menu--selectable">
          <li class="selected"><a href="#">Name</a></li>
          <li class="selected"><a href="#">Occupation</a></li>
          <li class="selected"><a href="#">Nationality</a></li>
          <li class="selected"><a href="#">Age</a></li>
        </ul>
      </li>

      <li class="dropdown-submenu">
        <a data-toggle="slideMorph" href="#" class="dropmenu-item">
          <span class="dropmenu-item-label">Default order</span>
          <span class="dropmenu-item-content">Name</span>
        </a>

        <ul class="dropdown-menu dropdown-menu--selectable">
          <li class="selected"><a href="#">Name</a></li>
          <li><a href="#">Occupation</a></li>
          <li><a href="#">Nationality</a></li>
          <li><a href="#">Age</a></li>
        </ul>
      </li>

      <li class="dropdown-submenu">
        <a data-toggle="slideMorph" href="#" class="dropmenu-item">
          <span class="dropmenu-item-label">View</span>
          <span class="dropmenu-item-content">Normal</span>
        </a>

        <ul class="dropdown-menu dropdown-menu--selectable">
          <li><a href="#">Condensed</a></li>
          <li class="selected"><a href="#">Normal</a></li>
          <li><a href="#">Large</a></li>
        </ul>
      </li>

      <li>
        <a data-toggle="slideMorph" href="#" class="dropmenu-item">
          <span class="dropmenu-item-label">Table settings&hellip;</span>
        </a>
      </li>
    </ul>

  </div><!-- /dropdown-container -->

</div><!-- /dropdown -->
<script type="text/javascript">
  $('.dropdown-container-slidemorph .dropdown-submenu').each(function() {
  var self = $(this)

  var label = $('> a .dropmenu-item-label', this) ? $('> a .dropmenu-item-label', this).text() : $('> a', this).text()
  var backlink = $('<li class="dropdown-backlink"><a href="#">' + label + '</a></li>')

  $(this).find('ul').first().prepend(backlink)

  // Attach listeners to the back buttons
  $(this).find('> ul > li').on('click', function(e){
      e.preventDefault()
      e.stopPropagation()

      var self = $(this)
      var container = self.closest('.dropdown-submenu')
      var parentDropdown = container.closest('.dropdown-menu')

      if (!self.hasClass('dropdown-backlink')) {
        container.find('> a .dropmenu-item-content').text(self.text())
      }

      self.closest('.dropdown-container').css({
        'width': parentDropdown.outerWidth(),
        'height': parentDropdown.outerHeight()
      })

      container.removeClass('open')
   })

})

// Initialize menu width
$(document).on('shown.bs.dropdown', function(e) {
  var self = $(e.target)
  var container = self.find('.dropdown-container-slidemorph')
  var submenu = container.find('> .dropdown-menu').first()

  // Add dimensions only if they haven't been already set
  if (typeof container.attr('style') === typeof undefined) {
    self.find('.dropdown-container-slidemorph, .dropdown-container-slidemorph > .dropdown-menu').each(function() {
      $(this).css({
        'width': submenu.outerWidth(),
        'height': submenu.outerHeight()
      })
    })
  }
})

$('[data-toggle="slideMorph"]').on('click', function(e) {
  e.preventDefault()
  e.stopPropagation()

  var self = $(this)
  var container = self.parent()
  var parentDropdown = self.closest('.dropdown-menu')
  var submenu = container.find('.dropdown-menu')

  container.addClass('open')

  self.closest('.dropdown-container').css({
    'width': submenu.outerWidth(),
    'height': submenu.outerHeight()
  })
})

$('#slideMorph > .dropdown-toggle').click()
</script>
</body>
</html>