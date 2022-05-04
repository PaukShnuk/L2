<!DOCTYPE html>
<html >
<head>
<title>Использование шейдеров в WPF/Silverlight</title>
<meta charset="utf-8" />
<meta name="description" content="Создание и использование шейдеров в WPF/Silverlight с помощью языка шейдеров HLSL">
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
<h1>Использование шейдеров в WPF и Silverlight</h1>
<h2>Часть 2. Создание и использование шейдеров</h2><div class="date">Последнее обновление: 29.05.2012</div>

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

<p>Хотя мы можем создавать и свои шейдеры, некоторые распространенные эффекты уже реализованы и являются частью фреймворка. К ним в частности, в 
инфраструктуре WPF и Silverlight уже реализованы эффект размытия (класс BlurEffect) и эффект тени (класс DropShadowEffect). Поэтому, если требуется 
создать эффект размытия, то, возможно, имеет смысл воспользоваться встроенным эффектом.</p>
<p>Итак, создадим новое приложение Silverlight. Для этого откроем Visual Web Developer 2010 Express и выберем в меню New Project (Создать проект). 
В списке шаблонов проекта выберем шаблон Silverlight Application</p>
<img src="artpics/14.4.jpg" />
<p>При создании нового приложения уберем галочку с поля, чтобы все настройки были следующие:</p>
<img src="artpics/14.5.jpg" />
<p>Добавим в приложение элемент Image, к изображению на котором мы будем применять эффект, и добавим кнопку, после нажатия которой и будет применяться 
эффект:</p>
<pre class="brush:xml;">
&lt;UserControl x:Class="SilverlightShaders.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
    mc:Ignorable="d"
    d:DesignHeight="250" d:DesignWidth="300"&gt;

    &lt;Grid x:Name="LayoutRoot" Background="White"&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition Height="4*" /&gt;
            &lt;RowDefinition Height="*" /&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;Image x:Name="Image1" Grid.Row="0" Source="bronz.jpg" /&gt;
        &lt;Button x:Name="Button1" Grid.Row="1" Content="Applay Effect" Width="120" Height="30" Click="Button1_Click" /&gt; 
    &lt;/Grid&gt;
&lt;/UserControl&gt;
</pre>
<p>В обработчике нажатия кнопки <code>Button1_Click</code> для начала установим для изображения эффект размытия:</p>
<pre class="brush:c#;">
        private void Button1_Click(object sender, RoutedEventArgs e)
        {
            System.Windows.Media.Effects.BlurEffect blurEffect = new System.Windows.Media.Effects.BlurEffect();
            blurEffect.Radius = 10;
            Image1.Effect = blurEffect;
        }
</pre>
<p>Запустим приложения на выполнение.</p> 
<table>
<tr><td><p>Если до нажатия на кнопку у нас было такое изображение</p></td><td><p>То после нажатия оно будет следующим</p></td></tr>
<tr><td><img src="artpics/14.6.jpg" /></td><td><img src="artpics/14.7.jpg" /></td></tr>
</table>
<p>Эффект сработал. Но это вообщем-то была прелюдия. Использовать встроенные эффекты не так интересно, поэтому перейдем к самому созданию эффекта.</p>
<p>Чтобы создать свой эффект нам надо вначале создать текстовый файл и внести в него код шейдера на языке HLSL. Затем этот файл компилируется при помощи 
компилятора fxc.exe в бинарную форму и добавляется в качестве ресурса в проект WPF или Silverlight. Но даже после этого нам еще надо будет написать 
класс-обертку, чтобы мы могли использовать наш эффект в приложении, также как BlurEffect.</p>
<p>Для начала реализуем самый простой эффект - эффект инверсии цветов. Добавим в проект простой текстовый файл и назовем его invertcolor.txt. 
Затем добавим в него следующий код:</p>
<pre  class="brush:c#;">
sampler2D InputTexture;
float4 main(float2 uv : TEXCOORD) : COLOR
{
    float4 color = tex2D(InputTexture, uv); 
	float4 invertedcolor = float4(color.a-color.rgb,color.a);
    return invertedcolor; 
}
</pre>
<p>Что данный код делает? Во-первых, переменная <span class="bb">InputTexture</span>, являющаяся объектом <strong>sampler2D</strong>, у нас будет представлять текстуру или наше изображение 
в элементе Image1.</p>
<p>Далее у нас идет функция main, которая возвращает значение типа float4. float4 представляет массив значений с плавающей точкой. Например, 
мы можем определить объект float4 и инициализировать его значение с помощью следующей строки:
<code>float4 color = float4(1, 0, 0, 1);</code>. В нашем случае значение float4 будет нести цвет пикселя в виде float4(red, green, blue, alpha)</p>
<p>TEXCOORD и COLOR - это семантики шейдера. TEXCOORD представляет координаты текстуры, а COLOR - цвет.</p>
<p>Затем функция <span class="bb">tex2D</span> считывает двухмерную текстуру, и мы производим интертирование цвета.</p>
<p>Код написан, и мы можем скомпилировать шейдер. Для этого зайдем в меню Пуск и среди программ выберем <span class="bb">Microsoft DirectX SDK (June 2010)-&gt;
Microsoft DirectX Command Prompt</span>. В открывшейся консоли введем следующую строку:</p>
<p><code>fxc /T ps_2_0 /E main /Fo output.ps invertcolor.txt</code></p>
<p>После этого компилятор fxc.exe скопилирует нам файл output.ps:</p>
<img src="artpics/14.8.jpg" />
<p>Небольшое примечание. Поскольку по умолчанию в Visual Studio используется кодировка UTF, и если вы набираете hlsl-код в Visual Studio, 
то потом может произойти ошибка компиляции. Чтобы такого не происходило, надо кодировку файла изменить на <span class="ii">UTF without BOM</span>.</p>
<p>Теперь добавим в проект файл output.ps и убедимся, что для него для свойства Bild Action установлено значение Resource:</p>
<img src="artpics/14.9.jpg" />
<h4>Создание класса-обертки</h4>
<p>Теперь уже перейдем к шарпу. Для использования нашего шейдера, нужно создать класс, унаследованный от базового класса <strong>ShaderEffect</strong>. 
Класс-обертка (назовем его <span class="bb">InvertEffect</span>) будет иметь следующий код:</p>
<pre class="brush:c#;">
    public class InvertEffect : ShaderEffect
    {
        private PixelShader pixelShader = new PixelShader();

        public InvertEffect()
        {
            pixelShader.UriSource = new Uri("/SilverlightShaders;component/output.ps", UriKind.Relative);
            this.PixelShader = pixelShader;
            this.UpdateShaderValue(InputProperty);
        }

        public static readonly DependencyProperty InputProperty = ShaderEffect.RegisterPixelShaderSamplerProperty("Input",
            typeof(InvertEffect), 0);

        public Brush Input
        {
            get 
            {
                return ((Brush)this.GetValue(InputProperty));
            }
            set 
            {
                this.SetValue(InputProperty, value);
            }
        }
    }
</pre>
<p>В нашем классе объявлено одно свойство зависимостей InputProperty. Оно и будет представлять те данные, которые потом будут подаваться на вход в 
пиксельный шейдер из растеризатора. И теперь мы готовы к применению нового эффекта. Изменим код обработчика нажатия кнопки следующим образом:</p>
<pre class="brush:c#;">
        private void Button1_Click(object sender, RoutedEventArgs e)
        {
            InvertEffect invertEffect = new InvertEffect();
            Image1.Effect = invertEffect;
        }
</pre>
<p>Запустим приложение, нажмем на кнопку, и наше изображение инвертирует все цвета:</p>
<img src="artpics/14.10.jpg" />
<p>И как и любой другой эффект, мы можем использовать наш эффект в xaml-коде:</p>
<pre class="brush:xml;">
&lt;UserControl x:Class="SilverlightShaders.MainPage"
    xmlns:local="clr-namespace:SilverlightShaders"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
    mc:Ignorable="d"
    d:DesignHeight="250" d:DesignWidth="300"&gt;

    &lt;Grid x:Name="LayoutRoot" Background="White"&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition Height="4*" /&gt;
            &lt;RowDefinition Height="*" /&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;Image x:Name="Image1" Grid.Row="0" Source="bronz.jpg"&gt;
            &lt;Image.Effect&gt;
                &lt;local:InvertEffect /&gt;
            &lt;/Image.Effect&gt;
        &lt;/Image&gt;
        &lt;Button x:Name="Button1" Grid.Row="1" Content="Applay Effect" Width="120" Height="30" Click="Button1_Click" /&gt; 
    &lt;/Grid&gt;
&lt;/UserControl&gt;
</pre>
<p>Мы использовали проект Silverlight, но то же самое относится и к WPF.</p>
<p>Очевидно, что чтобы создавать эффекты на основе шейдеров HLSL, надо знать сам язык HLSL или ориентироваться. Весь справочный материал по этому языку 
можно найти как всегда на msdn по адресу <a href="https://msdn.microsoft.com/en-us/library/windows/desktop/bb509561(v=vs.85).aspx" rel="nofollow">
https://msdn.microsoft.com/en-us/library/windows/desktop/bb509561(v=vs.85).aspx</a></p>
<P>Теперь создадим еще несколько эффектов. Сделаем эффект оттенков серого. Он будет похож на наш предыдущий эффект:</P>
<pre class="brush:c#;">
sampler2D input;
float4 main(float2 uv : TEXCOORD) : COLOR 
{
    float4 color = tex2D(input, uv);
	float gray = dot(color.rgb, float3(0.2126, 0.7152, 0.0722));
    return float4(gray, gray, gray, color.a); 
}
</pre>
<p>Здесь надо отметить функцию dot, которая возвращает скалярное произведение двух векторов типа float3. 
Мы также создаем класс эффекта и устанавливаем новый эффект для объекта Image1:</p>
<img src="artpics/14.11.jpg" />
<p>И еще один эффект - создание сепии:</p>
<pre  class="brush:c#;">
sampler2D Input;
float4 main(float2 uv : TEXCOORD) : COLOR 
{
	float4 TintColor = float4(0.9,0.7,0.3,1);
    float4 color = tex2D(Input, uv);
    float gray = dot(color.rgb, float3(0.2126, 0.7152, 0.0722)); 
    float4 grayColor = float4(gray, gray, gray, color.a);
	return grayColor * TintColor;
}
</pre>
<img src="artpics/14.12.jpg" />
<br><div class="nav"><a href="14.1.php">Часть 1. Введение. Шейдеры, HLSL и XAML</a></div>
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


</div>
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
<div class="menT" id="menT"><div class="navmenu"> 
<a href="//metanit.com/sharp/general.php">C# / Общее</a>
<a href="//metanit.com/sharp/mvc.php">ASP.NET</a>
<a href="//metanit.com/sharp/forms.php">Десктоп</a>
<a href="//metanit.com/sharp/ado.php">Базы данных</a>
</div></div>
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