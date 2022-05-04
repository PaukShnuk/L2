<!DOCTYPE html>
<html >
<head>
<title>Дополнительно о матрицах в WebGL</title>
<meta charset="utf-8" />
<meta name="description" content="Использование матриц для установки камеры в WebGL, операции с матрицами: вращение, перемещение, масштабирование">
<meta name="viewport" content="width=device-width">
<link href='//metanit.com/style35.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="container">

<div id="header">
<div id="logo">
<a class="logoTitle" href="/" title="На главную">METANIT.COM</a>
<div class="logoDefinition">Сайт о программировании</div> 
</div>

<div class="socbtns">
<ul>
<li><a title="Посмотреть меню" rel="nofollow" class="fa fa-lg fa-bars"></a></li>
<li><a href="//metanit.com/donations.php" title="Помощь сайту" rel="nofollow" class="fa fa-lg fa-usd"></a></li>
<li><a href="https://vk.com/metanit" title="Группа в ВКонтакте" rel="nofollow" class="fa fa-lg fa-vk"></a></li>
<li><a href="https://twitter.com/Eugene225" title="Твиттер" rel="nofollow" class="fa fa-lg fa-twitter"></a></li>
<li><a href="https://www.facebook.com/metanitcom"  rel="nofollow" class="fa fa-lg fa-facebook"></a></li>
<li><a href="https://www.youtube.com/user/Eugene22584/" title="Канал сайта на Youtube" rel="nofollow" class="fa fa-lg fa-youtube"></a></li>
<li><a href="https://t.me/metanit" title="Телеграмм" class="fa fa-lg fa-tel"></a></li>
<li><i id="toggle-theme" class="fa fa-lg fa-adjust"></i></li>
</ul>
</div>

<div id="search" class="transp">
<form action="https://www.google.ru" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-3716042175333627:1096498938" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" />
    <input type="submit" name="sa" value="Найти" />
  </div>
</form>
</div>
<div class="icon-vk"></div>
<div id="magnifying-glass"></div>

<div class="menuButton" id="menuButton">
	<span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</div>

<div id="menu" class="menu">
<ul class="mainmenu">
   <li><a href="//metanit.com/news/">Новости</a></li>
   <li><a href="//metanit.com/sharp/">C#</a></li>
   <li><a href="//metanit.com/java/">Java</a></li>
   <li><a href="//metanit.com/web/">WEB</a></li>
   <li><a href="//metanit.com/python/">Python</a></li>
   <li><a href="//metanit.com/cpp/">C/C++</a></li>
   <li><a href="//metanit.com/sql/">SQL</a></li>
   <li><a href="//metanit.com/nosql/mongodb/">MongoDB</a></li>
   <li><a href="//metanit.com/go/">Go</a></li>
   <li><a href="//metanit.com/visualbasic/tutorial/">VB.NET</a></li>
   <li><a href="//metanit.com/swift/tutorial/">Swift</a></li>
   <li><a href="//metanit.com/kotlin/">Kotlin</a></li>
   <li><a href="//metanit.com/dart/">Dart</a></li>
   <li><a href="//metanit.com/php/">PHP</a></li>
   <li><a href="//metanit.com/rust/">Rust</a></li>
   <li><a href="//metanit.com/f/">F#</a></li>
</ul>
</div>
</div>
<div id="content_right"> 
<div id="content_right_inner"> 
<div id="content_center"> 
<div id="menC" class="menC">
<div class="articleText" id="articleText">
<h2>Дополнительно о матрицах в WebGL</h2><div class="date">Последнее обновление: 1.11.2015</div>

<div class="socBlock">
<div class="share soctop">
<ul>
<li><a title="Поделиться в Вконтакте" rel="nofollow" class="fa fa-lg fa-vk"></a></li>
<li><a title="Поделиться в Одноклассниках" rel="nofollow" class="fa fa-lg fa-odnoklassniki"></a></li>
<li><a title="Поделиться в Твиттере" rel="nofollow" class="fa fa-lg fa-twitter"></a></li>
<li><a  rel="nofollow" class="fa fa-lg fa-facebook"></a></li>
</ul>
</div>

</div>

<div style="margin-top:23px;margin-left:5px;">
<style>
.footer-adaptive { width: 300px; height: 250px; }
@media(min-width: 480px) { .footer-adaptive { width: 468px; height: 60px; } }
@media(min-width: 760px) { .footer-adaptive { width: 728px; height: 90px;  } }
@media(min-width: 1000px) { .footer-adaptive { width: 468px; height: 60px;  } }
@media(min-width: 1122px) { .footer-adaptive{ width: 728px; height: 90px;} }
@media(min-width: 1400px) { .footer-adaptive { width: 970px; height: 90px;} }
</style>
<!-- footer_adaptive -->
<ins class="adsbygoogle footer-adaptive"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="9659512088"></ins>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<p>В предыдущем примере была опробована лишь небольшая толика возможных операций с матрицами, однако показан общий принцип использования, 
который во многих случаях будет оставаться неизменным.</p>
<h3>Установка камеры</h3>
<p>Чтобы прочувствовать, что у нас не прямоугольник, а куб, в предыдущем примере мы повернули этот самый куб на определенное количество градусов 
и еще сместили его по оси Z. Но есть еще и другая стратегия. Мы можем не куб поворачивать или перемещать, а можно устанавливать камеру в определенное 
место и направлять ее определенным образом, вращать и т.д. То есть можно менять не свойства объекта, а свойства точки обзора.</p>
<p>Для установки камеры в библиотеке glMatrix используется функция <code>mat4.lookAt(matrix, eye, center, up)</code>. Она принимает следующие параметры:</p>
<ul>
<li><p><span class="bb">matrix</span>: матрица модели, которая меняется от изменения свойств камеры</p></li>
<li><p><span class="bb">eye</span>: позиция камеры</p></li>
<li><p><span class="bb">center</span>: точка, на которую направлена камера</p></li>
<li><p><span class="bb">up</span>: вектор вертикальной ориентации</p></li>
</ul>
<p>Посмотрим на примере. Для этого используем пример из прошлого параграфа, изменив так только одну функцию setupWebGL():</p>
<pre class="brush:js;">
function setupWebGL()
{
	gl.clearColor(0.0, 0.0, 0.0, 1.0); 	
	gl.clear(gl.COLOR_BUFFER_BIT); 	
				
	gl.viewport(0, 0, gl.viewportWidth, gl.viewportHeight);
	mat4.perspective(pMatrix, Math.PI/2, gl.viewportWidth / gl.viewportHeight, 0.1, 100.0);
	mat4.identity(mvMatrix);
	mat4.lookAt(mvMatrix, [2, 0,-2], [0,0,0], [0,1,0]);	
}
</pre>
<p>Здесь никакого вращения или перемещения. Камера устанавливается в точку пространства с координатами (2, 0,-2) и направлена на точку пространства 
(0, 0, 0). Направить камеру можно на любую точку пространства. И затем устанавливается вектор вертикальной ориентации.</p>
<img src="pics/5.5.png" />
<h3>Операции с матрицами</h3>
<p>Мы уже рассмотрели выше две операции с матрицами - перемещение и вращение.</p>
<p>Для перемещения применяется метод <code>mat4.translate(output, input, vec)</code>, где output - итоговая выходная матрица, которая получается после 
перемещения матрицы input на трехмерный вектор vec. Например, <code>mat4.translate(mvMatrix, mvMatrix,[0, 0, -2.0]);</code> - перемещение матрицы mvMatrix 
на 2.0 назад по оси Z.</p>
<p>Для вращения применяется метод <code>mat4.rotate(output, input, rad, axis)</code>, где output - также итоговая матрица, которая получается поворотом 
матрицы input на угол rad (в радианах) вокруг оси axis. Например, <code>mat4.rotate(mvMatrix, mvMatrix, Math.PI/2, [1, 0, 0])</code> - здесь мы поворачиваем 
матрицу mvMatrix на 90 градусов вокруг оси X.</p>
<p>Мы можем не указывать вектор, а воспользоваться специальными методами: <code>mat4.rotateX(output, input, rad)</code>, <code>mat4.rotateY(output, input, rad)</code> 
и <code>mat4.rotateZ(output, input, rad)</code></p>
<p>Кроме этих операций мы можем применить масштабирование с помощью метода <code>mat4.scale(output, input, vec)</code>. Вектор vec указывает масштаб, 
на который изменяются значения матрицы input. Например, <code>mat4.scale(mvMatrix, mvMatrix, [0.5, 1, 1])</code> - здесь мы сжимаем значения 
объекта по оси Х, то есть уменьшаем ширину в 2 раза.</p>
<div style="margin-top:25px;clear:both;">
<style>
.metanit-rect { width: 300px; height: 250px; }
@media(min-width: 500px) { .metanit-rect { width: 336px; height: 280px; } }
@media(min-width: 760px) { .metanit-rect { width: 728px; height: 90px;  } }
@media(min-width: 1000px) { .metanit-rect { width: 336px; height: 280px;  } }
@media(min-width: 1122px) { .metanit-rect{ width: 728px; height: 90px;} }
@media(min-width: 1400px) { .metanit-rect{ width: 970px; height: 90px;} }
</style>
<!-- metanit_rect -->
<ins class="adsbygoogle metanit-rect"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="3119477283"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>


<div class="nav"><p><a href="5.2.php">Назад</a><a href="./">Содержание</a><a href="5.4.php">Вперед</a></p></div></div>
<div class="socBlock">
<div class="share socbottom">
<ul>
<li><a title="Поделиться в Вконтакте" rel="nofollow" class="fa fa-lg fa-vk"></a></li>
<li><a title="Поделиться в Одноклассниках" rel="nofollow" class="fa fa-lg fa-odnoklassniki"></a></li>
<li><a title="Поделиться в Твиттере" rel="nofollow" class="fa fa-lg fa-twitter"></a></li>
<li><a rel="nofollow" class="fa fa-lg fa-facebook"></a></li>
</ul>
</div>
</div>

<style>
.commentABl { margin: 25px 0px 15px 0px;}
@media(min-width: 860px) { .commentABl { margin: 35px 10px 15px 15px;  } }
</style>
<div class="commentABl" style="clear:both;">
<ins class="adsbygoogle metanit-rect"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="3119477283"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<script>const ap = 1845270558;</script>
<script async type='text/javascript' src='//metanit.com/js/lisrc4.js'></script>

<div id="disqus_thread" style="margin-left:8px;margin-right:8px;clear:both;"></div>
<script type="text/javascript">
var disqus_shortname = 'metanitcom';
(function() {
var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();
</script>

</div>
</div> 
<div id="menR" class="menR">
<style>
.meta-vert { width: 300px; height: 250px; }
@media(min-width: 500px) { .meta-vert { width: 336px; height: 280px; } }
@media(min-width: 1000px) { .meta-vert { width: 160px; height: 600px; } }
</style>
<!-- meta_vert -->
<ins class="adsbygoogle meta-vert"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="4596210485"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<style>
.dn {font-size:12.5px;margin:3px;}
.dh{font-weight:bold;margin-left:2px;}
</style>
<div class="dn">
<div class="dh">Помощь сайту</div>
<div class="dh">YooMoney</div>
<ul>
<li>410011174743222</li>
</ul>
<div class="dh">Перевод на карту</div>
<ul>
<li>Номер карты: 4048415020898850</li>
<li>Номер карты: 4890494751804113</li>
</ul>
</div>

</div>
</div>
</div> 
<div class="menT" id="menT"><ul id="browser" class="filetree"> 
				<li class="closed"><span class="folder">Глава 1. Введение в WebGL</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/1.1.php">Что такое WebGL?</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/1.2.php">Первая программа на WebGL</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Основы работы с WebGL</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.1.php">Создание контекста</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.2.php">Конвейер WebGL</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.3.php">Настройка буфера вершин и буфер индексов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.4.php">Установка атрибута для буфера вершин</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.5.php">Отрисовка в WebGL</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.6.php">gl.TRIANGLES</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.7.php">gl.TRIANGLE_STRIP</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.8.php">gl.TRIANGLE_FAN</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.9.php">Рисование линий</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.10.php">Установка Viewport</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Шейдеры</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/3.1.php">Введение в шейдеры</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/3.2.php">Использование шейдеров в программе</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/3.3.php">Основы GLSL</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Цвета в WebGL</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/4.1.php">Установка цвета вершины</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. Матрицы и создание 3D</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/5.1.php">Первый 3D-объект</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/5.2.php">Использование матриц glMatrix для создания 3D</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/5.3.php">Дополнительно о матрицах в WebGL</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/5.4.php">Окрашиваем куб</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 6. Анимация и пользовательский ввод</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/6.1.php">Анимация объектов. Вращающийся куб</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/6.2.php">Обработка пользовательского ввода</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 7. Текстурирование</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/7.1.php">Введение в текстурирование</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/7.2.php">Работа с координатами текстуры</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/7.3.php">Настройка текстурирования</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/7.4.php">Текстурирование 3D-объектов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/7.5.php">Множественное текстурирование</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 8. Освещение</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/8.1.php">Введение в освещение</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/8.2.php">Создание освещенного объекта по модели Фонга. Шейдеры</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/8.3.php">Модель отражения Фонга. Код JavaScript</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/8.4.php">Использование материалов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/8.5.php">Освещение Ламберта</a></span></li>
					</ul>
				</li>
	</ul></div>
<div id="footer">

<div class="bootomLinks">
<a href="https://vk.com/metanit" title="Присоединиться к группе вконтакте" rel="nofollow">
Вконтакте</a>|
<a href="https://twitter.com/Eugene225" title="Подписаться на твит-ленту" rel="nofollow">
Twitter</a>|
<a href="https://www.youtube.com/user/Eugene22584/" title="Подписаться на канал на youtube" rel="nofollow">
Канал сайта на youtube</a>|
<a href="//metanit.com/donations.php" rel="nofollow">Помощь сайту</a>
</div>
<p>Контакты для связи: metanit22@mail.ru</p>
<p>Copyright &copy; metanit.com, 2012-2022. Все права защищены.</p>
</div>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script>
const original = { open: XMLHttpRequest.prototype.open};
XMLHttpRequest.prototype.open = function (method, url) {
 
  if(url.includes("tempest.services.disqus.com")) return false;
  return original.open.apply(this, arguments);
};
</script>
<script type='text/javascript' src='//metanit.com/js/jquery.min.js'></script>
<script type='text/javascript' src='//metanit.com/js/jquery.treeview.min.js'></script>
<script type='text/javascript' src='//metanit.com/js/syntax12.js'></script>
<script type='text/javascript'>SyntaxHighlighter.all();</script>
<script>
$(function() { 
	$("#menuButton").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $('.mainmenu');
          if (mainmenu.hasClass('open')) { 
            mainmenu.removeClass('open');
          }
          else {
            mainmenu.addClass('open');
          }
        });
	$('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open');
			  $(this).children('span').removeClass('open');
			  $(this).children('span').addClass('close');
            }
            else {
              $(this).siblings('ul').addClass('open');
			  $(this).children('span').removeClass('close');
			  $(this).children('span').addClass('open');
            }
          });
  $("#toggle-theme").on("click", function() {
		if(document.documentElement.hasAttribute("theme")){
			document.documentElement.removeAttribute("theme");
			document.cookie="theme=1;expires=Mon, 19 Feb 2001 12:00:00 UTC;path=/;";
		}
		else{
			document.documentElement.setAttribute("theme", "dark");
			var expire = new Date();
			expire.setHours(expire.getHours() + 7);
			document.cookie="theme=1;expires=" + expire.toUTCString() + ";path=/;";
		}
	});
	$('#magnifying-glass').on('click', function() {
            if ($('#search').hasClass('transp')) {
              $('#search').removeClass('transp').show();
            }
            else {
              $('#search').addClass('transp').hide();
            }
          });
		  
	$('#browser').treeview();$('#navigation').treeview({persist: 'location',collapsed: true, unique: true});
	
	$("li:contains('Глава 5.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава .')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава .')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
	var url = "//metanit.com" + location.pathname;
	
	$('.file a[href="' + url + '"]').addClass('aMItem').parent().addClass('aMItem').closest('li.collapsable').find('span.folder').addClass('aMItem');
	
	$(".fa-bars").on('click', function() {
		$(".menT").toggleClass("menTOpened");
		$("#content_right_inner").toggleClass("contentRightInnerOpened");
	});

    $('#jma').on('click', function() {
            window.open("https://c"+"lck.r" +"u/en89y").focus();
          });
    $('#jmw').on('click', function() {
            window.open("https://c"+"lck.r"+"u/en89V").focus();
          });
	$(".share .fa-vk").attr('onclick','window.open("http://vk.com/share.php?url=' + window.location.href+'","Поделиться в ВКОНТАКТЕ","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-odnoklassniki").attr('onclick','window.open("https://connect.ok.ru/offer?url=' + window.location.href+'","Поделиться в Одноклассниках","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-twitter").attr('onclick','window.open("http://twitter.com/share?url=' + window.location.href+'","Поделиться в Твиттере","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-facebook").attr('onclick','window.open("http://www.facebook.com/sharer.php?u=' + window.location.href +'","Поделиться","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
});
</script>
<script>
window.onload= function(){
	setMenC();
};
window.onresize= function(){
	setMenC();
};

function setMenC(){
	if(window.innerWidth >859){
			
		var h = document.getElementById("articleText").clientHeight;
		document.getElementById("menT").style.maxHeight=h + "px";
	}
}
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-35780297-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-35780297-1');
</script>

<script async defer type="text/javascript" src="https://www.google.ru/coop/cse/brand?form=cse-search-box&amp;lang=ru"></script>
</body>
</html>