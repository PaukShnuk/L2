<!DOCTYPE html>
<html >
<head>
<title>Трехмерная графика (Silverlight)</title>
<meta charset="utf-8" />
<meta name="description" content="Введение в трехмерную графику и работу с XNA в Silverlight, принципы работы трехмерного приложения и объект DrawingSurface">
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
<h2>Настройка среды и начало работы</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Одной из отличительных особенностей WPF при работе с графикой была поддержка 3D. Однако в отличие от WPF в Silverlight долгое время отсутствовала 
подобная функциональность. Но в Silverlight 5 была добавлена частичная поддержка XNA 4.0, которая позволила разработчикам также работать и с 
трехмерной графикой.</p>
<p>Однако перед началом работы с 3D надо отметить некоторые ограничения. Так, как было сказано, была добавлена частичная поддержка XNA, то 
есть вы знакомы с XNA, то вы не сможете реализовать в проекте на Silverlight 5 абсолютно все. Например, Silverlight 5 поддерживает только режим 
Reach. Также Silverlight поддерживает только модель <span class="bb">Shader Model 2.0</span>, но не поддерживает Shader Model 3.0.</p>
<h4>Настройка проекта для работы с 3D</h4>
<p>Чтобы работать с 3D, нам надо настроить проект. Во-первых, добавим в него все необходимые сборки, которые нам потребуются:</p>
<ul>
	<li><p><span class="bb">System.Windows.Xna.dll</span>. Включает такие ключевые классы, как DrawingSurface и DrawEventArgs</p></li>
	<li><p><span class="bb">Microsoft.Xna.Framework.dll</span>. Содержит классы, используемые при работе с трехмерной графикой</p></li>
	<li><p><span class="bb">Microsoft.Xna.Framework.Graphics.dll</span>. Содержит общие структуры и классы, например, Color и Rectangle</p></li>
	<li><p><span class="bb">Microsoft.Xna.Framework.Graphics.Extensions.dll</span>. Включает различные расширения для работы с графикой</p></li>
	<li><p><span class="bb">Microsoft.Xna.Framework.Graphics.Shaders.dll</span>. Включает классы для работы с эффектами, в  частности, PixelShader и VertexShader</p></li>
	<li><p><span class="bb">Microsoft.Xna.Framework.Math.dll</span>. Содержит ряд вспомогательных классов для вычислений и разных математических опереций, 
	в том числе над матрицами.</p></li>
</ul>
<p>При работе с 3D используется аппаратное ускорение, поэтому нам надо его включить. Для этого нам надо установить в html-страничке, 
которая запускает наше приложение параметр <span class="bb">EnableGPUAcceleration</span> в <span class="bb">true</span>:</p>
<pre class="brush:xml;">&lt;object data="data:application/x-silverlight-2," type="application/x-silverlight-2" width="100%" height="100%"&gt;
		  &lt;param name="source" value="3DSLApplication.xap"/&gt;
		  &lt;param name="onError" value="onSilverlightError" /&gt;
		  &lt;param name="background" value="white" /&gt;
		  &lt;param name="minRuntimeVersion" value="5.0.61118.0" /&gt;
		  &lt;param name="autoUpgrade" value="true" /&gt;
		  &lt;param name="EnableGPUAcceleration" value="true" /&gt;
		  &lt;a href="http://go.microsoft.com/fwlink/?LinkID=149156&v=5.0.61118.0" style="text-decoration:none"&gt;
 			  &lt;img src="http://go.microsoft.com/fwlink/?LinkId=161376" alt="Get Microsoft Silverlight" style="border-style:none"/&gt;
		  &lt;/a&gt;
	    &lt;/object&gt;&lt;iframe id="_sl_historyFrame" style="visibility:hidden;height:0px;width:0px;border:0px"&gt;&lt;/iframe&gt;&lt;/div&gt;
</pre>
<h3>Начало работы и DrawingSurface</h3>
<p>В основе работы с 3D-графикой в Silverlight лежит класс <b>DrawingSurface</b>. Он представляет обычный элемент Silverlight, обеспечивающий 
рендеринг графики.</p>
<p>Этот класс содержит событие <span class="bb">Draw</span>, которое возникает, когда система готова к отрисовке следующего кадра. В обработчике этого события 
происходит обновление матриц и отрисовка графических примитивов.</p>
<p>Добавим в элемент Grid новый элемент DrawingSurface:</p>
<pre class="brush:xml;">
    &lt;Grid x:Name="LayoutRoot" Background="White"&gt;
        &lt;DrawingSurface Width="400" Height="300" Draw="DrawingSurface_Draw" /&gt;
    &lt;/Grid&gt;
</pre>
<p>Вообще весь алгоритм создания трехмерной графики в Silverlight в общем случае может быть представлен следующим образом:</p>
<ol>
<li><p>Создание в XAML элемента DrawingSurface</p></li>
<li><p>Создание обработчика события Draw элемента DrawingSurface</p></li>
<li><p>Создание вершин трехмерного объекта</p></li>
<li><p>Создание объекта VertexBuffer и использование метода SetData для добавления данных о вершинах в буфер</p></li>
<li><p>Создание пиксельного (PixelShader) и вершинного шейдеров (VertexShader)</p></li>
<li><p>Если для вершинного шейдера необходимы матрицы, то создаем мировую матрицу, а также матрицы вида и проекции</p></li>
<li><p>Затем в обработчике события Draw надо прописать следующие моменты:</p>
	<ol>
		<li><p>Очистка графического устройства (класс GraphicsDevice) с помощью метода Clear</p></li>
		<li><p>Установка для графического устройства буфера вершин (VertexBuffer) с помощью метода SetVertexBuffer</p></li>
		<li><p>Установка для графического устройства вершинного шейдера (VertexShader) с помощью метода SetVertexShader</p></li>
		<li><p>Установка для графического устройства пиксельного шейдера (PixelShader) с помощью метода SetPixelShader</p></li>
		<li><p>Вызов DrawPrimitives</p></li>
		<li><p>В конце вызов метода InvalidateSurface, чтобы система знала, что пора опять вызывать данный обработчик</p></li>
		<li><p>Очистка графического устройства (класс GraphicsDevice) с помощью метода Clear</p></li>
	</ol>
</li>
<li><p>Вызов метода Invalidate</p></li>
</ol>
<h3>Координатная система</h3>
<p>В XNA используется правосторонняя координатная система, то есть ось Z при такой системе направлена на нас:</p>
<img src="silpics/14.1.png" />
<h3>Установка разрешений</h3>
<p>Прежде чем перейти к созданию первого 3d-приложения, надо затронуть тему разрешений. По умолчанию для приложений Silverlight блокируется 
доступ к аппаратному ускорению графики. Чтобы обойти блокировку, пользователь должен установить разрешения для приложения на вкладке Permissions 
(Разрешения). Кроме того, самое главное - пользователь должен знать, что ему надо сделать. Ведь, если мы просто создадим вращающийся куб и запустим 
приложение, мы ничего не увидим. Поэтому добавим в обработчик события запуска приложения Application_Startup следующий код:</p>
<pre class="brush:c#;">
       private void Application_Startup(object sender, StartupEventArgs e)
        {
            if (GraphicsDeviceManager.Current.RenderMode != RenderMode.Hardware)
            {
                string message;
                switch (GraphicsDeviceManager.Current.RenderModeReason)
                {
                    case RenderModeReason.Not3DCapable:
                        message = "Графическое устройство не поддерживает приложение";
                        break;
                    case RenderModeReason.GPUAccelerationDisabled:
                        message = "Для данного приложения не задано аппаратное ускорение графики";
                        break;
                    case RenderModeReason.TemporarilyUnavailable:
                        message = "Графическое устройство временно недоступно. Попробуйте перезагрузить страницу";
                        break;
                    case RenderModeReason.SecurityBlocked:
                        message =
                          "Выполните следующие действия для просмотра приложения:\n\n" +
                          "  1. Нажмите правой кнопкой мыши на страницу\n" +
                          "  2. Выберите 'Silverlight'\n" +
                          "     (Отобразится диалоговое окно конфигурации Silverlight)\n" +
                          "  3. Выберите вкладку Разрешения (Permissions)\n" +
                          "  4. Найдите в списке текущий сайт и измените его разрешения с  'Deny' на 'Allow'\n" +
                          "  5. Нажмите 'OK'\n" +
                          "  6. Перезагрузите страницу";
                        break;
                    default:
                        message = "Неизвестная ошибка";
                        break;
                }
            }
            else
            {
                this.RootVisual = new MainPage();
            }
        }
</pre>
<p>В случае возникновения соответствующих проблем на экране должно отобразится одно из прописанных нами сообщений, которое известит пользователя о 
его дальнейших действиях и проблеме.</p>
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


<div class="nav"><p><a href="13.php">Назад</a><a href="./">Содержание</a><a href="14.2.php">Вперед</a></p></div></div>
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
				<li class="closed"><span class="folder">Глава 1. Введение в Silverlight</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/1.1.php">Начало работы с Silverlight</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/1.2.php">Создание первого приложения</a></span></li>
					</ul>
				</li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/2.php">Глава 2. XAML в Silverlight</a></span></li>
				<li class="closed"><span class="folder">Глава 3. Компоновка</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/3.1.php">Стандартные элементы компоновки</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/3.2.php">Создание элемента компоновки</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Элементы управления</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.0.php">Обзор элементов управления</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.1.php">Элементы управления содержимым</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.2.php">Специальные контейнеры</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.3.php">Текстовые элементы в Silverlight</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.4.php">Управление списками в Silverlight</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.5.php">Элементы, основанные на диапазонах значений</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.6.php">Работа с датами в Silverlight</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.7.php">Работа с изображениями</a></span></li>
					</ul>
				</li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/5.php">Глава 5. Приложение и класс Application</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/6.php">Глава 6. Кисти и эффекты</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/7.php">Глава 7. Ресурсы</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/8.php">Глава 8. Стили</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/9.php">Глава 9. Привязка </a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/10.php">Глава 10. Шаблоны элементов управления</a></span></li>
				<li class="closed"><span class="folder">Глава 11. Анимации и трансформации</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/11.1.php">Анимации</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/11.2.php">Трансформации</a></span></li>
					</ul>
				</li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/12.php">Глава 12. Двухмерная графика</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/13.php">Глава 13. Работа с мультимедиа</a></span></li>
				<li class="closed"><span class="folder">Глава 14. Трехмерная графика</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/14.1.php">Настройка среды и начало работы</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/14.2.php">Создание первого 3D-приложения</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/14.3.php">Создание текстурированного куба</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/14.4.php">Silverlight 5 Toolkit</a></span></li>
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
	
	$("li:contains('Глава 14.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 14.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 14.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 14.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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