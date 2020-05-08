/**
 * index.js
 * - All our useful JS goes here, awesome!
 */
let Nombre;
let Puntuacion = 0;

function GuardarNombre(){
  //localStorage.nombre = document.getElementById("txtNombre").value;
  Nombre=document.getElementById('txtNombre').value
  localStorage.setItem("NombreObtenido",Nombre);
}

function MostrarNombre(){
  //document.getElementById("lblSaludo").innerHTML = "¡Hola " + localStorage.nombre + "!";
  document.getElementById('lblSaludo').innerHTML = `Hola ${localStorage.getItem("NombreObtenido")}!`;
}

function MostrarSiguiente(){
  //SumarResultado(1);
  document.getElementById('steep-1').style.display = 'none';
  document.getElementById('steep-2').style.display = 'block';
}

function MostrarSiguiente2(){
  document.getElementById('steep-2').style.display = 'none';
  document.getElementById('steep-3').style.display = 'block';
}

function MostrarSiguiente3(){
  document.getElementById('steep-3').style.display = 'none';
  document.getElementById('steep-4').style.display = 'block';
}

function MostrarSiguiente4(){
  document.getElementById('steep-4').style.display = 'none';
  document.getElementById('steep-5').style.display = 'block';
}

function SumarResultado(Pregunta){
  let NumeroPregunta = Pregunta;
  switch (NumeroPregunta){
    case 1:
      let radio = document.getElementsByName('group1');
      let i;
      let valor;
      for (i = 0; i < radio.length; i++) {
        if(radio[i].checked){
          valor = radio[i].value;
        }
      }
      //alert (`valor= ${valor}`);
      if(valor === '1'){
        Puntuacion ++;
        //alert('La puntuacion es ' + Puntuacion);
      }
      break;
    case 2:
      let radio2 = document.getElementsByName('group1');
      let i2;
      let valor2;
      for (i2 = 0; i2 < radio2.length; i2++) {
        if(radio2[i2].checked){
          valor2 = radio2[i2].value;
        }
      }
      //alert (`valor= ${valor2}`);
      if(valor2 === '0'){
        Puntuacion ++;
      }
      break;
    case 3:
      let radio3 = document.getElementsByName('group1');
      let i3;
      let valor3;
      for (i3 = 0; i3 < radio3.length; i3++) {
        if(radio3[i3].checked){
          valor3 = radio3[i3].value;
        }
      }
      //alert (`valor= ${valor3}`);
      if(valor3 === '2'){
        Puntuacion ++;
      }
      break;
    case 4:
      let radio4 = document.getElementsByName('group1');
      let i4;
      let valor4;
      for (i4 = 0; i4 < radio4.length; i4++) {
        if(radio4[i4].checked){
          valor4 = radio4[i4].value;
        }
      }
      //alert (`valor= ${valor4}`);
      if(valor4 === '1'){
        Puntuacion ++;
      }
      break;
    case 5:
      let radio5 = document.getElementsByName('group1');
      let i5;
      let valor5;
      for (i5 = 0; i5 < radio5.length; i5++) {
        if(radio5[i5].checked){
          valor5 = radio5[i5].value;
        }
      }
      //alert (`valor= ${valor5}`);
      if(valor5 === '0'){
        Puntuacion ++;
      }
      break;
    default:
      alert('No se esta entrando')
  }
}

function SumarResultadoG(Pregunta){
  let NumeroPregunta = Pregunta;
  switch (NumeroPregunta){
    case 1:
      let radio = document.getElementsByName('group1');
      let i;
      let valor;
      for (i = 0; i < radio.length; i++) {
        if(radio[i].checked){
          valor = radio[i].value;
        }
      }
      //alert (`valor= ${valor}`);
      if(valor === '1'){
        Puntuacion ++;
        //alert('La puntuacion es ' + Puntuacion);
      }
      break;
    case 2:
      let radio2 = document.getElementsByName('group1');
      let i2;
      let valor2;
      for (i2 = 0; i2 < radio2.length; i2++) {
        if(radio2[i2].checked){
          valor2 = radio2[i2].value;
        }
      }
      //alert (`valor= ${valor2}`);
      if(valor2 === '2'){
        Puntuacion ++;
      }
      break;
    case 3:
      let radio3 = document.getElementsByName('group1');
      let i3;
      let valor3;
      for (i3 = 0; i3 < radio3.length; i3++) {
        if(radio3[i3].checked){
          valor3 = radio3[i3].value;
        }
      }
      //alert (`valor= ${valor3}`);
      if(valor3 === '0'){
        Puntuacion ++;
      }
      break;
    case 4:
      let radio4 = document.getElementsByName('group1');
      let i4;
      let valor4;
      for (i4 = 0; i4 < radio4.length; i4++) {
        if(radio4[i4].checked){
          valor4 = radio4[i4].value;
        }
      }
      //alert (`valor= ${valor4}`);
      if(valor4 === '1'){
        Puntuacion ++;
      }
      break;
    case 5:
      let radio5 = document.getElementsByName('group1');
      let i5;
      let valor5;
      for (i5 = 0; i5 < radio5.length; i5++) {
        if(radio5[i5].checked){
          valor5 = radio5[i5].value;
        }
      }
      //alert (`valor= ${valor5}`);
      if(valor5 === '2'){
        Puntuacion ++;
      }
      break;
    default:
      alert('No se esta entrando')
  }
}

function GuardarResultado(){
  localStorage.setItem("ResultadoFinal", Puntuacion);
}

function MostrarResultado(){
  document.getElementById('lblResultado').innerHTML = `${localStorage.getItem("ResultadoFinal")} de 5\n Puntos`;
}

function ReiniciarTrivia(){
  location.href="index.php";
}

/*function IniciarJuego(){
  location.href="index.html";
} */
//console.log(Nombre);