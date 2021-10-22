<style>

.btnn {




  color: #fff;
  outline: none;
  letter-spacing: 1px;
  transition: all 0.5s;
}

.btnn.loading {


}
.btnn.loading:after {
  opacity: 1;
}

.btnn.finished {
  background-color: #16ba9a;


  color: #fff;
}
.btnn.finished:before {

  content: "✓";
  opacity: 1;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
  -webkit-animation: dropDown 0.3s 1 cubic-bezier(0.64, 0.57, 0.67, 3);
          animation: dropDown 0.3s 1 cubic-bezier(0.64, 0.57, 0.67, 3);
}

@-webkit-keyframes dropDown {
  0% {
    -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
    opacity: 1;
  }
}

@keyframes dropDown {
  0% {
    -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
    opacity: 1;
  }
}
p {
  color: #fff;
  margin: 10px;
}
p a {
  color: #16ba9a;
}


</style>
<script>
var btn = document.querySelector(".btnn");
var i = 0;
btn.onclick = function() {
    this.innerText = i;
    this.classList.remove("finished");
    this.classList.add("loading");

    var inter = setInterval(function() {
        btn.innerText = i++;
        btn.classList.remove('percent-' + (i - 1));
        btn.classList.add('percent-' + i);
        if (i === 100) {
            btn.classList.remove("loading");
            btn.classList.add("finished");
            btn.innerText = '';
            clearInterval(inter);
            i = 0;
            btn.classList.remove('percent-100');
        }
    }, 25);
}
</script>