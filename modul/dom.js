

$(document).ready(function(){
$("#next").click(function(){
$("#prev,h3,#elem, #demo").show(1500);
$("#next").css({'font-size':'1.3rem','background-color':'SkyBlue', 'width':'10rem', 'high':'3.7'});
$("#menu").show(500);
$('#next').text('next');
});
$("#box2").click(function(){
$('#box1').toggle(1000);
});});
var enter = document.querySelector('#enter');
var check = document.querySelector('#check');
enter.addEventListener('click', function (event) {
$( '#check' ).show(500);
setTimeout(function ()
{$( '#check' ).text( "введите слово" ).css('background','Tomato')
}, 500);
setTimeout(function ()
{$( '#check' ).text( "проверьте слово" ).css('background','#28a55a')
}, 2500);
});
function oF(){
$("#offer").show(700);
$("#box5").hide(700);
$("#offer").click(function(){
$("#offer").hide(700);
$("#box5").show(700);
});
}	
document.getElementById("menu").innerHTML =
'<div id="box7">'
+'<div id="box2">menu</div>'
+'</div>'
+'<div id="box1" style="display: none">'
+'<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block"; '
+'position: static; margin-bottom: 5px; *width: 180px;">'
+'<li class="dropdown-submenu">'
+'<a href="">Слова</a>'
+'<ul class="dropdown-menu" id="sub">'
+'      <li><a tabindex="-1" href="English_words.html" rel="external" >Английские слова</a>'
+'	   <li><a tabindex="-1" href="Frasal_ver.html"  rel="external">Фразовые глаголы</a></li>'
+'</ul>'
+'</li>'
+'<li class="dropdown-submenu">'
+'<a href="#">Предлоги</a>'
+'<ul class="dropdown-menu" id="sub">'
+'      <li><a tabindex="-1" href="Peposition.html" rel="external">Предлоги</a></li>'
+'</ul>'
+'</li>'
+'<li class="dropdown-submenu">'
+'<a href="#">Окружающая среда</a>'
+'<ul class="dropdown-menu" id="sub">'
+'      <li><a tabindex="-1" href="Environmental.html" rel="external">Экология</a></li>'
+'</ul>'
+'</li>'
+'<li class="dropdown-submenu">'
+'<a href="#">Интервью</a>'
+'<ul class="dropdown-menu" id="sub">'
+'      <li><a tabindex="-1" href="Interview.html" rel="external">Слова и фразы</a></li>'
+'</ul>'
+'</li>  '
+' <li class="dropdown-submenu">'
+'<a href="#">География</a>'
+'<ul class="dropdown-menu" id="sub">'
+'      <li><a tabindex="-1" href="Geography.html" rel="external">Слова и фразы</a></li>'
+'</ul>'
+'</li> '
+'<li class="dropdown-submenu">'
+'<a href="#">Космос</a>'
+'<ul class="dropdown-menu" id="sub">'
+'      <li><a tabindex="-1" href="Spice.html" rel="external">Слова и фразы</a></li>'
+'</ul>'
+'</li> '
+' <li class="dropdown-submenu" id="submenu1">'
+'<a href="your_menu.html" rel="external" id="submenu2">Упражнения</a>'
+'</li> '
+'		</ul>'
+'</div>'
;