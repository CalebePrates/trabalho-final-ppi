var countDate = new Date('December 24, 2023 00:00:00').getTime();

setInterval(function(){
   var now = new Date().getTime();
   gap = countDate - now;



   var d = Math.floor(gap / (1000 * 60 * 60 * 24));
   var h = Math.floor((gap % (1000 * 60 * 60 * 24 )) / (1000 * 60 * 60));
   var m = Math.floor((gap % (1000 * 60 * 60)) / (1000 * 60));
   var s = Math.floor((gap % (1000 * 60)) / 1000);
 

   document.getElementById('day').innerText = d;
   document.getElementById('hour').innerText = h;
   document.getElementById('minute').innerText = m;
   document.getElementById('second').innerText = s;
})
