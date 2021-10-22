<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/n33/jquery.poptrox/master/jquery.poptrox.js"></script>
  <title></title>
<style type="text/css">
  html, body {
  background: #333;
  color: #fff;
  margin: 0;
  padding: 0;
  text-align: center;
  font-family: Open Sans;
}

h1, h2 {
  font-weight: 200;
  padding: 0;
  color: #fff;
}

h1 {
  font-size: 40px;
  margin: 10px;
}

h2 {
  font-size: 18px;
  text-align: center;
  margin: 10px 0;
}

a {
  color: #ccc;
  font-size: 11px;
  display: inline-block;
  margin: 5px;
  vertical-align: middle;
  text-decoration: none;
  transition: opacity .1s;
}
a:hover {
  opacity: .7;
}

section:first-child {
  margin-top: 15px;
}

.devmount {
  position: fixed;
  bottom: 0;
  right: 0;
  height: 20px;
  line-height: 20px;
  text-decoration: none;
  font: 17px Arial;
  color: #fff;
  padding: 10px 40px 10px 0;
  margin-right: 10px;
  background: url(http://media.devmount.de/devmount_small_light.png) right center no-repeat;
  transition: background-position .3s, color .3s;
}
.devmount span {
  position: absolute;
  right: 3px;
  color: transparent;
  transition: inherit;
}
.devmount:hover {
  opacity: 1;
  background-position: left center;
  color: transparent;
}
.devmount:hover span {
  color: #fff;
}

</style>
</head>
<body>

<div id="gallery"> 
  <!-- Regular images -->
  <section>
    <!-- image 1--><a href="http://placehold.it/500/09f/fff.png"><img src="http://placehold.it/100/09f/fff.png&amp;text=image1" alt="" title="Just an image (#1)"/></a>
    <!-- image 2--><a href="http://placehold.it/500/0bf/fff.png"><img src="http://placehold.it/100/0bf/fff.png&amp;text=image2" alt="" title="Just an image (#2)"/></a>
    <!-- image 3--><a href="http://placehold.it/500/0df/fff.png"><img src="http://placehold.it/100/0df/fff.png&amp;text=image3" alt="" title="Just an image (#3)"/></a>
  </section>
  <section>
    <!-- YouTube: Must be in share format (http://youtu.be/xxxxxxxxxxx) --><a href="http://youtu.be/loGm3vT8EAQ" data-poptrox="youtube,800x480"><img src="http://placehold.it/100/CC181E/fff.png&amp;text=youtube" alt="" title="A YouTube Video"/></a>
    <!-- Vimeo: Must be in share format (https://vimeo.com/xxxxxxxx) --><a href="https://vimeo.com/22439234" data-poptrox="vimeo,800x480"><img src="http://placehold.it/100/69C8CE/fff.png&amp;text=vimeo" alt="" title="A Vimeo Video"/></a>
    <!-- Soundcloud: Must be in share format (https://api.soundcloud.com/tracks/xxxxxxxx) --><a href="https://api.soundcloud.com/tracks/93549370" data-poptrox="soundcloud"><img src="http://placehold.it/100/FF5500/fff.png&amp;text=soundcloud" alt="" title="A Soundcloud Track"/></a>
  </section>
  <section>
    <!-- IFRAME: Link straight to whatever page you want to open --><a href="#" data-poptrox="iframe,600x400"><img src="http://placehold.it/100/07f/fff.png&amp;text=iframe" alt="" title="An IFRAME"/></a>
    <!-- AJAX: Link to whatever content you want to pull in (must be on the same domain)  --><a href="#" data-poptrox="ajax,600x400"><img src="http://placehold.it/100/07f/fff.png&amp;text=ajax" alt="" title="AJAX content"/></a>
    <!-- Ignore: Use this if you want a particular thumbnail to just link out to something --><a href="https://www.jqueryscript.net" data-poptrox="ignore"><img src="http://placehold.it/100/07f/fff.png&amp;text=ignore" alt=""/></a>
  </section>
</div><a class="devmount" href="http://devmount.de" target="_blank">created by<span>devmount</span></a>
<script type="text/javascript">
  $(function() {
  $('#gallery').poptrox({
    usePopupCaption: true,
    usePopupNav: true,
    popupPadding: 0
  });
});
</script>
</body>
</html>