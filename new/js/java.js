var countDownDate = new Date("nov 5, 2023 15:37:25").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("demo").innerHTML = days + "يوم " + hours + "ساعة "
  + minutes + "دقيقه " + seconds + "ثانية";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "لقد انتهى الوقت";
  }
}, 1000);



//برمجيه اختيار الرابح

const win =  document.querySelector("#winner");
const loader =  document.querySelector(".loader-con");


var myModal = new bootstrap.Modal(document.getElementById('Modal'), {
    Keyboard: false
})

win.addEventListener('click',function(){
    loader.style.display = 'block';

  setTimeout(function(){
    myModal.show();
   },3000);
});


