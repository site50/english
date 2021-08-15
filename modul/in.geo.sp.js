count=0;
initSlider(arr1, '#slider1');
function initSlider(texts, selector) {
function fG(){
count++;
if ((count== texts.length )||(count== texts.length+texts.length)||(count== texts.length+texts.length+texts.length))
{
oF();
}
}
var parent = document.querySelector(selector);
var elem = parent.querySelector('#elem1');
var prev = parent.querySelector('#prev');
var next = parent.querySelector('#next');
var i = 0;
next.addEventListener('click', function () {
i++;
enter.value='';
$("#check").text( "введите слово" ).css('background','Tomato');
{if (i == texts.length)
{i = 0; }
elem.innerHTML = texts[i]; 
}
{if (elem.innerHTML == texts[i])
{
document.getElementById("demo1").innerHTML =arr2[i];
}}	
{fG();
}
});
        var fewF = function (event) {if ((arr1[i]==enter.value)||(arr1[i].toLowerCase() == enter.value.toLowerCase()))
				{
				$( '#check' ).text( "Ответ верный" ).css('background','green');
				$("#img").show(1000);
				}
				else {
				$("#input").show(1000);
				$( '#check' ).text( "Попробуйте еще раз" ).css('background','#d65b18');
				}
				}
				check.addEventListener('click', fewF, false);
				enter.addEventListener('keyup', fewF, false);

prev.addEventListener('click', function() {
i--;
if (i == -1) {
i = texts.length - 1;
}
elem.innerHTML = texts[i];
{if (elem.innerHTML == texts[i])
{
document.getElementById("demo1").innerHTML =arr2[i];
$("#check").text( "введите слово" ).css('background','Tomato');
enter.value='';
}}
{fG();}
});  
}
