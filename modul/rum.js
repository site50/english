var count = 0;
var a=2;
var draging=1;
var c = document.getElementById("prepos").children; 
var en = document.getElementById("enlg").children; 
for (var y=0,i=0,k=0; y<c.length,i<arr1.length,k<arr2.length; y++,i++,k++)
{c[y].innerHTML = arr1[i];
en[k].innerHTML = arr2[i]+'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+arr4[k];
if(arr4[k]==undefined)
{en[k].innerHTML = arr2[i];
}

$('#demo').hover(function(){
$(this).text("Move words in Russian into the area of words in English, equal in meaning");
$('#rum').css({'background-color':'white','color':'green'});
}, function() {
$(this).text("Перенесите слова на русском языке в область слов на английском языке, равных по смыслу");
$('#rum').css({'background-color':'green','color':'white'});
});
$(function() {
var divsDrag = $("#enlg > div");
var divsDrop = $("#prepos > div");
divsDrag.each(function(i, el) {
$(el).draggable();
divsDrop.eq(i).droppable({
accept: el,
hoverClass: "drags",
refreshPositions:true ,
drop: function() {	
$(this).addClass("ui-state-highlight")
.html( arr1[i]+'-'+arr2[i])
.animate({color: "green" }, 500 )
$(el).html(arr1[i]).hide(500);
if (divsDrop.eq(i).droppable)
{	
$('#rum').show(2000);
$('#demo').show(2000).html('<h2 style="color:green;">Правильный ответ</h2>'+'<div id="correct">'+ arr1[i]+'-'+arr2[i]+'</duv>');
$('#rum').css({'background':'coral'});
count++;
}			
if (count==c.length) {
count++;
$('#rum').show(1000);
$('#demo').html('<b><a href="your_menu.html" rel="external">Упражнение выполнено</a><br></br><a href="your_menu.html" rel="external">Переходи на другую страницу</a></b>');
$('#rum').css({'background-color':'white','color':'green'});
$("#demo").hover(function(){
$("#demo").html("<a href='your_menu.html' rel='external'><b>Exercise complete</a><br></br><a href='your_menu.html' rel='external'> Go to menu</b></a>");
}, function() {
$("#demo").html("<a href='your_menu.html' rel='external'><b>Упражнение выполнено </a><br></br><a href='your_menu.html' rel='external'>Переходи в меню</b></a>");
});
}    }	
})
})
});
}
