// Analísis y Desarrollo de Sistemas de Informción
//Ficha: 2252471
//Aprendiz: Angely Rojas Rodriguez
//Objetivo: Realizar ejercicios con jQuery

//Primer ejercicio
$('#Button').click(function(){
    var contents = prompt("What to put in Pandora's box?", "all evils");
    console.log("putting "+contents+" into Pandora's box");
    $('#pandora').html(contents);
});


//Segundo ejercicio
$('#Button2').click(function(){
var items = prompt("Horcruxes", "<li>the diary</li><li>the locket</li>");
$('#horcruxes').html(items);
});


//Tercer ejercicio
$('#Button3').click(function(){
$("#fig1").css("border","2px solid red");
$("#fig1").css("text-align","center");
$("#fig1").css("padding","10px");
$("#fig1 figcaption").css("background-color","gold");
});


//Cuarto ejercicio
$('#Button4').click(function(){
    $("#fig2 img").attr("src","Imagenes/ron.jpeg");
    $("#fig2 img").attr("alt","Ron Weasley");
    $("#fig2 figcaption").html("Ron Weasley as played by Rupert Grint");
});


//Quinto ejercicio
$('#Button5').click(function(){
    $("#fig3").hide();
});
$('#Button6').click(function(){
    $("#fig3").show();
});


//Sexto ejercicio
$('#Button7').click(function(){
$("#characters1 li").css("font-size","18px");   // matches 10 elts
$("#characters1 .gryffindor").css("color","red");  // matches 5 elts
$("#characters1 .slytherin").hide();    // matches 3 elts
});


//Septimo ejercicio
$('#Button8').click(function(){
    $("#fig4")
    .css("border","2px solid red")
    .css("text-align","center")
    .css("padding","10px");

});


//Octavo ejercicio
$('#Button9').click(function(){
    $("<li>")
    .html("Percy")
    .addClass("gryffindor")
    .css("text-decoration","line-through")
    .appendTo("#characters2");
});


//Noveno ejercicio
$('#Button10').click(function(){
    var d = new Date();
    $("h1").html("News for "+d.toLocaleDateString());  // insert date into H1
});


//Decimo ejercicio
$('#Button11').click(function(){
$(document).ready(function () {
    var d = new Date();
    $("h3").html("News for "+d.toLocaleDateString());
 });
});


//Onceavo ejercicio
$('#Button12').click(function(){
    $("#fig2a").removeClass("gryffindor");
    $("#fig2a").addClass("slytherin");
});