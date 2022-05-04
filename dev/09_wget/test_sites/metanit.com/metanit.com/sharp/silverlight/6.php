<!DOCTYPE html>
<html >
<head>
<title>Кисти и эффекты</title>
<meta charset="utf-8" />
<meta name="description" content="Использование кистей SolidColorBrush, LinearGradientBrush, RadialGradientBrush и др. для установки фона и цвета текста и применение эффектов BlurEffect и DropShadowEffect">
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
<h1>Кисти и эффекты</h1>
<h2>Кисти</h2>
<P>Рассматривая выше элементы и их свойства, были упомянуты такие свойства, как <span class="bb">Background</span> и <span class="bb">Foreground</span> и назначение им определенного цвета <span class="bb">Background="Blue"</span>. 
Но если посмотреть чуть глубже, то для установки цвета нам нужен объект класса System.Media.Brush. 
Значение "Blue" в данном случае является свойством класса Brushes, которое инкапсулирует объект SolidColorBrush. Например, в коде мы можем установить цвет так <span class="bb">button1.Background=Brushes.Blue</span></p>
<p>А класс <b>SolidColorBrush</b> является кистью или наследником класса Brush, с помощью которого, таким образом, можно устанавливать свойства <span class="bb">Background</span>, <span class="bb">Foreground</span> и <span class="bb">BorderBrush</span>.</p>
<p>WPF поддерживает целый ряд кистей:</p>
<ul>
<li><p><span class="bb">SolidColorBrush</span> заливает содержимое сплошным цветом</p></li>
<li><p><span class="bb">LinearGradientBrush</span> - градиентная кисть, представляет плавный переход от одного цвета к другому</p></li>
<li><p><span class="bb">RadialGradientBrush</span>- градиентная кисть, плавно распределяющая заданные цвета от центральной точки к внешним границам.</p></li>
<li><p><span class="bb">ImageBrush</span> в качестве заполнителя использует не цвет, а изображение</p></li>
<li><p><span class="bb">VideoBrush</span> в качестве заполнителя использует MediaElement, который проигрывает определенное видео на элементе.</p></li>
</ul>
<h3>SolidColorBrush</h3>
<p>Задает цвет для сплошной заливки:</p>
<pre class="brush:xml;">
        &lt;Button Height="30" Width="160" VerticalAlignment="Top"  Content="SolidColorBrush"&gt;
            &lt;Button.Background&gt;
                &lt;SolidColorBrush Color="Blue" Opacity="0.8"  /&gt;
            &lt;/Button.Background&gt;
            &lt;Button.Foreground&gt;
                &lt;SolidColorBrush Color="DarkBlue"/&gt;
            &lt;/Button.Foreground&gt;
        &lt;/Button&gt;
</pre>
<p>Использование SolidColorBrush  в коде:</p>
<pre class="brush: c#;">
button1.Background = new SolidColorBrush(Colors.Blue);
//или так - это цвет #cfffff
button1.Background = new SolidColorBrush(Color.FromRgb(207, 255, 255));</pre>
<h3>LinearGradientBrush</h3>
<p>Эта кисть создает плавный переход от одного цвета к другому. Для указания цвета и точек, от которых начинается переход, используется объект <span class="bb">GradientStop</span>. 
Его свойство <span class="bb">Color</span> указывает на цвет, а свойство <span class="bb">Offset</span>- на точку, с которой начинается переход.</p>
<pre class="brush:xml;">
&lt;Button Content="LinearGradientBrush" VerticalAlignment="Top" Width="150" Height="30"&gt;
                &lt;Button.Background&gt;
                    &lt;LinearGradientBrush StartPoint="0.5,1" EndPoint="0.5,0"&gt;
                        &lt;GradientStop Color="Black" Offset="0" /&gt;
                        &lt;GradientStop Color="White" Offset="1" /&gt;
                    &lt;/LinearGradientBrush&gt;
                &lt;/Button.Background&gt;
                &lt;Button.Foreground&gt;
                    &lt;LinearGradientBrush&gt;
                        &lt;GradientStop Color="Blue" Offset="1" /&gt;
                        &lt;GradientStop Color="Red" Offset="0.5" /&gt;
                        &lt;GradientStop Color="Yellow" Offset="0" /&gt;
                    &lt;/LinearGradientBrush&gt;
                &lt;/Button.Foreground&gt;
&lt;/Button&gt;
</pre>
<P>С помощью свойств StartPoint и EndPoint можно определить направление градиента, сделать горизонтальный градиент или градиент под углом.</P>
<h3>RadientGradientBrush</h3>
<p>Эта кисть заполняет элемент радиальным градиентом. Объект RadientGradientBrush также имеет коллекцию объектов <strong>GradientStop</strong>, задающих цвет и смещение. 
Кроме того, он позволяет задавать центр градиента с помощью свойства <span class="bb">GradientOrigin</span> </p>
<pre class="brush:xml;">
&lt;Button Content="RadialGradientBrush" VerticalAlignment="Top" Width="150" Height="30"&gt;
                &lt;Button.Background&gt;
                    &lt;RadialGradientBrush GradientOrigin="0.4,0.1"&gt;
                        &lt;GradientStop Color="Black" Offset="1" /&gt;
                        &lt;GradientStop Color="White" Offset="0" /&gt;
                    &lt;/RadialGradientBrush&gt;
                &lt;/Button.Background&gt;
                &lt;Button.Foreground&gt;
                    &lt;RadialGradientBrush Center="0.4,0.4"  SpreadMethod="Reflect"&gt;
                        &lt;GradientStop Color="Black" Offset="1" /&gt;
                        &lt;GradientStop Color="Yellow" Offset="0.2" /&gt;
                    &lt;/RadialGradientBrush&gt;                
                &lt;/Button.Foreground&gt;
&lt;/Button&gt;</pre>
<p>Также RadientGradientBrush позволяет ограничить область градиента с помощью свойств <span class="bb">RadiusX</span> и <span class="bb">RadiusY</span></p>
<pre class="brush:xml;">
&lt;Ellipse Width="60" Height="60"&gt;
                &lt;Ellipse.Fill&gt;
                    &lt;RadialGradientBrush RadiusX="0.6" RadiusY="0.8" GradientOrigin="0.3,0.3"&gt;
                        &lt;GradientStop Color="Red" Offset="1" /&gt;
                        &lt;GradientStop Color="White" Offset="0" /&gt;
                    &lt;/RadialGradientBrush&gt;
                &lt;/Ellipse.Fill&gt;
&lt;/Ellipse&gt;</pre>

<h3>ImageBrush</h3>
<p>Эта кисть использует изображение в качестве фона. Источник устанавливается свойством <span class="bb">ImageSource</span>. Свойство <span class="bb">Stretch</span> задает способ заполнения элемента изображением - 
если оно равно <span class="bb">Fill</span> (по умолчанию), то изображение заполняет весь элемент, растягиваясь, если это нужно. Если Stretch="Uniform", то изображение масштабируется пропорционально размеру элемента и по краям могут образоваться пустые места, не заполненные изображением. </p>
<pre class="brush:xml;">
        &lt;Ellipse Width="120" Height="100"&gt;
            &lt;Ellipse.Fill&gt;
                &lt;ImageBrush ImageSource="bronz.jpg" /&gt;
            &lt;/Ellipse.Fill&gt;
        &lt;/Ellipse&gt;
</pre>
<img src="silpics/6.1.jpg" />
<h2>Эффекты</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Эффекты в Silverlight реализованы с помощью пиксельных шейдеров и представлены тремя классами: BlurEffect, DropShadowEffect и ShaderEffect. 
Эффекты изменяют отображение элементов в соответствии с логикой эффекта, применяя преобразования цвета к пикселям элемента.</p>
<h3>BlurEffect</h3>
<p>Этот эффект создает эффект размытия:</p>
<pre class="brush:xml;">
	&lt;Button VerticalAlignment="Top" Content="Blur Effect"&gt;
            &lt;Button.Effect&gt;
                &lt;BlurEffect Radius="2" /&gt;
            &lt;/Button.Effect&gt;
        &lt;/Button&gt;
        &lt;Ellipse Width="120" Height="100"&gt;
            &lt;Ellipse.Fill&gt;
                &lt;ImageBrush ImageSource="bronz.jpg" /&gt;
            &lt;/Ellipse.Fill&gt;
            &lt;Ellipse.Effect&gt;
                &lt;BlurEffect Radius="3" /&gt;
            &lt;/Ellipse.Effect&gt;
        &lt;/Ellipse&gt;
</pre>
<img src="silpics/6.2.jpg" />
<h3>DropShadowEffect</h3>
<p>Этот эффект позволяет создать эффект отбрасывания тени. Он имеет ряд свойств, позволяющих настроить отображение тени:</p>
<ul>
<li><p>Color - позволяет настроить цвет тени</p></li>
<li><p>BlurRadius - определяет размытие тени</p></li>
<li><p>Direction- определяет угол направления тени против часовой стрелки</p></li>
<li><p>Opacity - определяет прозрачность тени</p></li>
<li><p>ShadowDepth - определяет, как далеко (в пикселях, по умолчанию - 5) тень будет находиться от элемента</p></li>
</ul>
<pre class="brush:xml;">
	&lt;Button VerticalAlignment="Top" Content="Blur Effect"&gt;
            &lt;Button.Effect&gt;
                &lt;DropShadowEffect ShadowDepth="2"/&gt;
            &lt;/Button.Effect&gt;
        &lt;/Button&gt;
        &lt;Ellipse Width="120" Height="100"&gt;
            &lt;Ellipse.Fill&gt;
                &lt;ImageBrush ImageSource="bronz.jpg" /&gt;
            &lt;/Ellipse.Fill&gt;
            &lt;Ellipse.Effect&gt;
                &lt;DropShadowEffect /&gt;
            &lt;/Ellipse.Effect&gt;
        &lt;/Ellipse&gt;
        &lt;TextBlock  VerticalAlignment="Bottom" FontSize="14" HorizontalAlignment="Center" &gt;
            &lt;TextBlock.Effect&gt;
                &lt;DropShadowEffect ShadowDepth="3" /&gt;
            &lt;/TextBlock.Effect&gt;
            &lt;TextBlock.Text&gt;DropShadowEffect&lt;/TextBlock.Text&gt;
        &lt;/TextBlock&gt;
</pre>
<img src="silpics/6.3.jpg" />
<h3>ShaderEffect</h3>
<p>Этот эффект не имеет непосредственной реалиации, но при при его наследовании можно создать свои собственные эффекты. 
Как это сделать, смотрите соответствующую статью про <a href="//metanit.com/sharp/articles/14.1.php">Cоздание шейдеров в проектах Silverlight/WPF</a></p>
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


<div class="nav"><p><a href="5.php">Назад</a><a href="./">Содержание</a><a href="7.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава .')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава .')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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