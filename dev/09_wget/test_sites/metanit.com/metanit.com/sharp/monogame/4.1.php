<!DOCTYPE html>
<html >
<head>
<title>Координатная система. Камеры и матрицы в MonoGame</title>
<meta charset="utf-8" />
<meta name="description" content="">
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
<h1>Трехмерная графика</h1>
<h2>Координатная система. Камеры и матрицы</h2><div class="date">Последнее обновление: 14.11.2015</div>

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

<p>Одним из ключевых моментов при работе с трехмерной графикой является координатная система. Если в двухмерной графике используется координатная система из 
двух осей X и Y, то в трехмерной системе к ним добавляется еще и ось Z. При этом трехмерные координатные системы бывают двух видов: левосторонняя 
и правосторонняя. Направление оси Z (на нас или от нас) определяет тип координатной системы:</p>
<img src="pics/4.1.png" alt="Координатная система в MonoGame" />
<p>В MonoGame применяется правосторонняя координатная система, то есть ось Х направлена вправо, ось Y - вверх, а ось Z - на нас.</p>
<h3>Камера и матрицы</h3>
<p>Большое значение при проектировании трехмерных систем имеет камера. От ее положения будет зависеть отображение трехмерной сцены. А положение и 
прочие свойства камеры определяются матрицами.</p>
<p>В MonoGame мы будем работать с тремя матрицами:</p>
<ul>
<li><p><span class="b">Матрица вида</span>: определяет положение камеры в пространстве, ее направление и ориентацию.</p></li>
<li><p><span class="b">Матрица проекции</span>: преобразует трехмерные координаты сцены в двухмерные для отображения сцены на плоскости экрана.</p></li>
<li><p><span class="b">Мировая матрица</span>: используется для позиционирования объектов в трехмерной системе</p></li>
</ul>
<p>Однако нам не придется самим создавать полностью матрицы и определять все операции между, так как в нашем распоряжении уже есть класс <span class="b">Matrix</span>, 
который и выполняет основную работу.</p>
<p>Для создания матрицы вида применяется статический метод <span class="b">CreateLookAt</span> класса Matrix. Он возвращает объект Matrix и принимает следующие параметры:</p>
<ul>
<li><p><code>cameraPosition</code>: позиция камеры в виде объекта <code>Vector3</code></p></li>
<li><p><code>cameraTarget</code>: координата точки, на которую направлена камера, опять же в виде объекта Vector3</p></li>
<li><p><code>cameraUpVector</code>: вектор вертикальной ориентации камеры, также представляет объект Vector3</p></li>
</ul>
<p>Таким образом, все три параметра принимают объект <span class="b">Vector3</span> - трехмерный вектор, который состоит из трех координат - X, Y, Z:</p>
<pre class="brush:c#;">Vector3 vec = new Vector3(10, 20, 30);</pre>
<p>Для создания матрицы проекции мы можем использовать другой статический метод класса Matrix - <span class="b">CreatePerspectiveFieldOfView()</span>. 
Он также возвращает объект Matrix и принимает следующие параметры:</p>
<ul>
<li><p><code>fieldOfView</code>: угол обзора камеры в радианах</p></li>
<li><p><code>aspectRatio</code>: аспектное отношение ширины экрана к высоте</p></li>
<li><p><code>nearPlaneDistance</code>: расстояние от позиции камеры до ближней видимой точки</p></li>
<li><p><code>farPlaneDistance</code>: расстояние до самой дальней видимой точки</p></li>
</ul>
<p>Все четыре значения представляют объекты float. Создаваемая ими матрица в итоге формирует видимое пространство:</p>
<img src="pics/4.3.png" alt="Матрица проекции в MonoGame" />
<p>Видимое пространство определяет ту часть трехмерной сцены, которая будет отрисовываться на экране. Объекты внутри этой видимой части будут 
выводиться на экран, пока между ними и камерой не появятся другие, закрывающие их объекты. Объекты вне видимого пространства не 
будут отрисовываться.</p>
<p>Для создания мировой матрицы используется метод <span class="b">Matrix.CreateWorld()</span>, принимающий следующие параметры:</p>
<ul>
<li><p><code>position</code>: позиция объекта</p></li>
<li><p><code>forward</code>: вектор направления вперед</p></li>
<li><p><code>up</code>: вектор вертикальной ориентации, обычно имеет значение [0, 1, 0]</p></li>
</ul>
<p>Все три параметра представляют объект Vector3.</p>
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


<div class="nav"><p><a href="3.2.php">Назад</a><a href="./">Содержание</a><a href="4.2.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в платформу Monogame</span>
<ul><li><span class="file"><a href="//metanit.com/sharp/monogame/1.1.php">Что такое Monogame?</a></span></li>
<li><span class="file"><a href="//metanit.com/sharp/monogame/1.2.php">Установка MonoGame для Windows</a></span></li>
<li><span class="file"><a href="//metanit.com/sharp/monogame/1.3.php">Первое приложение</a></span></li>
<li><span class="file"><a href="//metanit.com/sharp/monogame/1.4.php">Игровой цикл</a></span></li>
</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Двухмерная графика</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/monogame/2.1.php">Добавление спрайтов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/monogame/2.2.php">Работа со спрайтами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/monogame/2.3.php">Наложение спрайтов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/monogame/2.4.php">Перемещение объектов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/monogame/2.5.php">Анимация спрайтов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/monogame/2.6.php">Обработка нажатий клавиатуры</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/monogame/2.7.php">Управление мышью</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/monogame/2.8.php">Столкновение спрайтов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/monogame/2.9.php">Отображение текста</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/monogame/2.10.php">Сенсорный ввод</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Работа со звуком</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/monogame/3.1.php">Добавление аудио в проект</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/monogame/3.2.php">Звуковые эффекты</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Трехмерная графика</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/monogame/4.1.php">Координатная система. Камеры и матрицы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/monogame/4.2.php">Создание камеры и матриц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/monogame/4.3.php">Графические примитивы, вершины и буферы вершин</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/monogame/4.4.php">Вращение, перемещение и масштабирование</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/monogame/4.5.php">Порядок преобразований матриц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/monogame/4.6.php">Графические примитивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/monogame/4.7.php">Построение куба и буфер индексов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/monogame/4.8.php">Текстурирование</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/monogame/4.9.php">3D-Модели</a></span></li>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 4.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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