document.getElementById("in_fras").innerHTML =
'<div class="ui-grid-b">'
+'<div class="ui-block-a"><div class="ui-bar-b" style="background-color:transparent;border-color:transparent;"></div></div>'
+'<div class="ui-block-b"><div class="ui-bar-b" style="background-color:transparent;border-color: transparent;">'
+'<center><h1 >УПРАЖНЕНИЯ</h1></center><div id="frase"><div id="menu" style="display:none;"></div></div>'
+'</div>'
+'</div>'
+'<div class="ui-block-c"><div class="ui-bar-b" style="background-color:transparent;border-color: transparent;"></div></div>'
+'<div class="ui-block-a"><div class="ui-bar ui-bar-a" style="background-color:transparent;border-color:transparent;">'
+'</div></div>'
+'<div class="ui-block-b"><div class="ui-bar ui-bar-a" style="background-color:rgba(34, 221, 196, 0.48);height: 100%;position: static; border-color:  transparent; ">'
+'<CENTER>'
+'<div id="slider1" >'
+'<button id="prev" class="btn btn-primary" style="display:none" >prev</button>'
+'<div id="answer1"></div>'
+'<button id="ask">Подсказка!</button>'
+'<div id="box">'
+'<h2>'
+'<div id="demo"><div id="demo1"></div><div id="demo2"></div>  <div id="demo3"></div>'
+'<div id="box15"></div>'
+'</div>'
+'</h2>'
+'</div>'
+'<center><h2><input id="enter"  style="display:none"/>'
+'</h2></center>'
+'<h5 style="display:none">Введите слово на английском языке &dArr;<br>'
+'<h3 style="display:none"></h3>'
+'<button id="next" >Итак, приступим!</button>'
+'<button id="next1" >Итак, приступим!</button>'
+'</div>'
+'<div id="my_ans" >'
+'<div id="answer" style="display:none"></div>'
+'<div id="answer2" style="display:none"></div>'
+'</div>'
+'<button id="add" style="display:none">добавить для повторения!</button>'
+'<div id="add2"></div>'
+'</CENTER>'
+'</div>'
+'</div>'
+'<div class="ui-block-c"><div class="ui-bar ui-bar-a" style="background-color:transparent;border-color: transparent;">'
+'</div>'
+'</div>'
+'</div>'
+'<div class="ui-grid-b">'
+'<div class="ui-block-a"><div class="ui-bar-x" style="background-color:transparent;border-color: transparent;"></div></div>'
+'<div class="ui-block-b"><div class="ui-bar-x" style="background-color:transparent;border-color:transparent;"></div></div>'
+'<div class="ui-block-c"><div class="ui-bar-x" style="background-color:transparent;border-color:transparent;"></div></div>'
+'</div>'
;
document.getElementById("menu").innerHTML =
'<div id="box7">'
+'<div id="box2">menu</div>'
+'</div>'
+'<div id="box1" style="display: none">'
+'<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block"; '
+'position: static; margin-bottom: 5px; *width: 180px;">'
+'<li class="dropdown-submenu" id="lapt">'
+'<a href="#">Слова</a>'
+'<ul class="dropdown-menu" id="sub">'
+'      <li><a tabindex="-1" href="English_words.html" rel="external" >Английские слова</a>'
+'	   <li><a tabindex="-1" href="Frasal_ver.html"  rel="external">Фразовые глаголы</a></li>'
+'</ul>'
+'</li>'
+'<li class="dropdown-submenu" id="lapt">'
+'<a href="#">Предлоги</a>'
+'<ul class="dropdown-menu" id="sub">'
+'      <li><a tabindex="-1" href="Peposition.html" rel="external">Предлоги</a></li>'
+'</ul>'
+'</li>'
+'<li class="dropdown-submenu" id="lapt">'
+'<a href="#">Окружающая среда</a>'
+'<ul class="dropdown-menu" id="sub">'
+'      <li><a tabindex="-1" href="Environmental.html" rel="external">Экология</a></li>'
+'</ul>'
+'</li>'
+'<li class="dropdown-submenu" id="lapt">'
+'<a href="#">Интервью</a>'
+'<ul class="dropdown-menu" id="sub">'
+'      <li><a tabindex="-1" href="Interview.html" rel="external">Слова и фразы</a></li>'
+'</ul>'
+'</li>  '
+' <li class="dropdown-submenu" id="lapt">'
+'<a href="#">География</a>'
+'<ul class="dropdown-menu" id="sub">'
+'      <li><a tabindex="-1" href="Geography.html" rel="external">Слова и фразы</a></li>'
+'</ul>'
+'</li> '
+'<li class="dropdown-submenu" id="lapt">'
+'<a href="#">Космос</a>'
+'<ul class="dropdown-menu" id="sub">'
+'      <li><a tabindex="-1" href="Spice.html" rel="external">Слова и фразы</a></li>'
+'</ul>'
+'</li> '

+' <li class="dropdown-submenu" id="moz_mob">'
+'<a href="English_words.html" rel="external" >Английские слова</a>'
+'</li> '
+' <li class="dropdown-submenu" id="moz_mob">'
+'<a href="Frasal_ver.html" rel="external" >Фразовые глаголы</a>'
+'</li> '

+' <li class="dropdown-submenu" id="moz_mob">'
+'<a href="Peposition.html" rel="external" >Предлоги</a>'
+'</li> '

+' <li class="dropdown-submenu" id="moz_mob">'
+'<a href="Environmental.html" rel="external" >Экология</a>'
+'</li> '

+' <li class="dropdown-submenu" id="moz_mob">'
+'<a href="Interview.html" rel="external" >Интервью</a>'
+'</li> '

+' <li class="dropdown-submenu" id="moz_mob">'
+'<a href="Geography.html" rel="external" >География</a>'
+'</li> '

+' <li class="dropdown-submenu" id="moz_mob">'
+'<a href="Spice.html" rel="external" >Космос</a>'
+'</li> '

+' <li class="dropdown-submenu" id="submenu1">'
+'<a href="your_menu.html" rel="external" id="submenu2">Упражнения</a>'
+'</li> '
+'		</ul>'
+'</div>'
;
$(document).ready(function(){
$("#exer").mouseover(function(){
$('h2').slideDown("slow");
});
$("#next,#next1").one("mouseover", function(){
$(this).text('Follow me!');
});
$("#next,#next1").click(function(){
$("#answer").css({'font-size':'2rem', 'color':'green'});
$("#prev,h3,h5,#elem,#enter,#ask,#demo,#menu").show(1000);
$("#demo2").show(1100);	
$("#next,#next1").css({'font-size':'1.2rem','background-color':'SkyBlue', 'width': '6rem', 'height': '3.6rem','margin-top':'1rem'}).text('next');
$('#box2').css('background-color','rgb(6 59 66 / 72%)');
});
$("input").focus(function(){
$(this).css("background-color", "pink");
});
$("#enter").one("mouseup", function(){
$('#add').show(500);
});
$('h1').hover(function ()
{ $(this).text("EXERCISES") .css({'color':'#a9ff00'});
}, function() {
$(this).text("УПРАЖНЕНИЯ").css({'color':'#35e5f7'});
});
$("#box2").click(function(){
$('#box1').toggle(1000);
});
});
var arr5 = [];
initSlider(arr1, '#slider1');
function initSlider(texts, selector) {
var parent = document.querySelector(selector);
var elem = parent.querySelector('#elem');
var prev = parent.querySelector('#prev');
var next = parent.querySelector('#next');
var next1 = parent.querySelector('#next1');
var i = 0;
next.addEventListener('click', function () {
i++;
{if (i == texts.length)
{i = 0; }
{  
{
document.getElementById("demo1").innerHTML =arr1[i];
document.getElementById("demo2").innerHTML =arr2[i];
document.getElementById("demo3").innerHTML =arr3[i];
document.getElementById("box").style.background = '#67ff0099';  
function nE()
{document.getElementById("next").innerHTML = 'next';
document.getElementById("enter").style.display='block';
document.getElementById("answer").innerHTML='';
document.getElementById("answer2").innerHTML='';
enter.value='';
}
nE();
}	
}		}});
next1.addEventListener('click', function () {
i++;
{if (i == texts.length)
{i = 0; }
{  
{document.getElementById("demo2").innerHTML =arr2[i];
document.getElementById("box").style.background = '#67ff0099';  
nE();
}	
}		}});
let check = document.querySelector('#enter');
function eM(event) {
{if ((arr4[i] == enter.value)||(arr4[i]==enter.value.toLowerCase()))
{document.getElementById("enter").innerHTML=arr4[i];
document.getElementById("answer").style.display='block';
document.getElementById("answer").innerHTML='Ответ верный !';
document.getElementById("answer2").style.display='none';
}
{if ((arr4[i]!=enter.value)||(arr4[i].toLowerCase()!= enter.value))
{document.getElementById("answer2").style.display='block';
document.getElementById("answer").style.display='none';
document.getElementById("answer2").innerHTML='Введите верный ответ';
}
}
}}
enter.addEventListener("touchstart", eM); 
enter.addEventListener("mouseout", eM); 
let answer1 = document.querySelector('#ask');
function move(event) {
setTimeout(function(){
document.getElementById("answer1").innerHTML=arr4[i];
document.getElementById("ask").innerHTML='Help!';
event.target.style.color = "green";
}, 200);
}
ask.addEventListener("touchstart", move); 
ask.addEventListener("mousemove", move);    
function leave(event) {setTimeout(function(){
event.target.style.color = "white";
document.getElementById("ask").innerHTML='Помощь!';
document.getElementById("answer1").innerHTML='';
}, 400);
}
ask.addEventListener("mouseleave", leave); 
ask.addEventListener("touchstart", leave); 
prev.addEventListener('click', function() {
i--;
if (i == -1) 
{i = texts.length - 1;}
{document.getElementById("demo1").innerHTML =arr1[i];
document.getElementById("demo2").innerHTML =arr2[i];
document.getElementById("demo3").innerHTML =arr3[i];
document.getElementById("answer").innerHTML='';
document.getElementById("answer2").innerHTML='';
enter.value='';
} 
})
}
var txt = "";
let add = document.querySelector('#add');
add.addEventListener('click', function (event) 
{
for (let i=0; i<arr1.length;i++)
{if (arr4[i]==enter.value)
arr5.push(arr4[i]+' - '+arr2[i]+'<br/>');	}
document.getElementById("add2").innerHTML=(arr5.join(""));
document.getElementById("answer1").innerHTML='';
});
