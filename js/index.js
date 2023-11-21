var countDate;

try{
   var xhr = new XMLHttpRequest();
   xhr.open("GET", "proximo_torneio.php", true);

   xhr.onreadystatechange = function () {
       if (xhr.readyState == 4 && xhr.status == 200) {
           var resposta = JSON.parse(xhr.responseText);

           if (resposta.proximo_torneio) {
               countDate  = new Date(resposta.proximo_torneio);
           } else {
               console.log("Não há próximo torneio.");
           }
       }else{
         countDate = new Date('December 24, 2023 00:00:00');
       }
   };
   xhr.send();
}catch(e){
   //padrão próximo torneio
   countDate = new Date('December 24, 2023 00:00:00');
}


function setCountDate(data){
   countDate = data;
}

setInterval(function(){
   var restante = calcularTempoRestante(countDate);
   document.getElementById('day').innerText = restante.d;
   document.getElementById('hour').innerText = restante.h;
   document.getElementById('minute').innerText = restante.m;
   document.getElementById('second').innerText = restante.s;
})

function calcularTempoRestante(data) {
   var now = new Date().getTime();
   var gap = data.getTime() - now;

   var dias = Math.floor(gap / (1000 * 60 * 60 * 24));
   var horas = Math.floor((gap % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
   var minutos = Math.floor((gap % (1000 * 60 * 60)) / (1000 * 60));
   var segundos = Math.floor((gap % (1000 * 60)) / 1000);

   return {
       d: dias,
       h: horas,
       m: minutos,
       s: segundos
   };
}