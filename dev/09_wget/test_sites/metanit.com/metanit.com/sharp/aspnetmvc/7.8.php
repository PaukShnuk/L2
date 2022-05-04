<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core MVC и C# | Управление выводом хелпера</title>
<meta charset="utf-8" />
<meta name="description" content="Управление выводом tag-хелперов в ASP.NET Core MVC и C#, создание html-элемента, атрибуты хелпера, метод SuppressOutput">
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
<h2>Управление выводом хелпера</h2><div class="date">Последнее обновление: 04.04.2022</div>

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

<p>Для управления выводом tag-хелпера применяется объект <span class="b">TagHelperOutput</span>, который передается в качестве параметра в метод <span class="b">Process/ProcessAsync</span> tag-хелпера. 
Его свойства позволяют управлять генерацией элемента html:</p>
<ul>
<li><p><span class="b">TagName</span>: указывает, какой элемент html будет создаваться вместо тега хелпера</p></li>
<li><p><span class="b">TagMode</span>: устанавливает формат создаваемого элемента (с одним или с двумя тегами)</p></li>
<li><p><span class="b">Attributes</span>: представляет коллекцию атрибутов, устанавливаемых у создаваемого элемента html</p></li>
<li><p><span class="b">Content</span>: представляет содержимое генерируемого элемента html в виде объекта TagHelperContent</p></li>
<li><p><span class="b">PreContent</span>: представляет содержимое, которое устанавливается перед создаваемым элементом html</p></li>
<li><p><span class="b">PostContent</span>: представляет содержимое, которое устанавливается после создаваемого элемента html</p></li>
<li><p><span class="b">PreElement</span>: представляет html-элемент, который добавляется перед создаваемым элементом html</p></li>
<li><p><span class="b">PostElement</span>: представляет html-элемент, который добавляется после создаваемого элемента html</p></li>
</ul>
<h3>Закрытие элемента</h3>
<p>Элементы html могут состоять из двух тегов (открывающего и закрывающего), либо из одного тега (открывающегося или самозакрывающегося). С помощью свойства 
<span class="b">TagMode</span> мы можем регулировать закрытие элемента. Оно принимает одно из значений перечисления <span class="b">TagMode</span>:</p>
<ul>
<li><p><code>StartTagAndEndTag</code>: элемент имеет оба тега</p></li>
<li><p><code>SelfClosing</code>: элемент содержит самозакрывающийся тег</p></li>
<li><p><code>StartTagOnly</code>: элемент имеет только открывающий тег</p></li>
</ul>
<p>По умолчанию при создании элемента применяется тот же режим закрытия тега, который использовался при его использовании. Например, если мы не устанавливаем 
содержимое внутри tag-хелпера, то нет смысла определять для него оба тега. Например, определим следующий tag-хелпер:</p>
<pre class="brush:c#;">
public class TimerTagHelper : TagHelper
{
	public override void Process(TagHelperContext context, TagHelperOutput output)
	{
		output.TagName = "div";
		output.TagMode = TagMode.StartTagAndEndTag;
		output.Content.SetContent($"Текущее время: {DateTime.Now.ToString("HH:mm:ss")}");
	}
}
</pre>
<p>И теперь мы сможем использовать только один тег:</p>
<pre class="brush:xml;">&lt;timer /&gt;</pre>
<h3>Управление контентом</h3>
<p>Для управления контентом применяется свойство <span class="b">Content</span>, представляющее объект <span class="b">TagHelperContent</span>, у которого можно 
выделить следующие методы:</p>
<ul>
<li><p><span class="b">SetContent(text)</span>: устанавливает текстовое содержимое элемента</p></li>
<li><p><span class="b">SetHtmlContent(html)</span>: устанавливает вложенный html-код элемента</p></li>
<li><p><span class="b">Append(text)</span>: добавляет к текстовому содержимому элемента некоторый текст</p></li>
<li><p><span class="b">AppendHtml(html)</span>: добавляет к внутреннему коду элемента некоторый код html</p></li>
<li><p><span class="b">Clear()</span>: очищает элемент</p></li>
</ul>
<p>Так, выше уже использовался метод <code>output.Content.SetContent()</code>.</p>
<p>С помощью дополнительных свойств PreElement/PostElement/PreContent/PostContent, который также представляют объект <span class="b">TagHelperContent</span>, 
можно управлять контентом вокруг элемента. Например, изменим класс хелпера:</p>
<pre class="brush:c#;">
public class TimerTagHelper : TagHelper
{
	public override void Process(TagHelperContext context, TagHelperOutput output)
	{
		output.TagName = "div";
		output.TagMode = TagMode.StartTagAndEndTag;
		// элемент перед тегом
		output.PreElement.SetHtmlContent("&lt;h4&gt;Дата и время&lt;/h4&gt;");
		// элемент после тега
		output.PostElement.SetHtmlContent($"&lt;div&gt;Дата: {DateTime.Now.ToString("dd/MM/yyyy")}&lt;/div&gt;");

		output.Content.SetContent($"Время: {DateTime.Now.ToString("HH:mm:ss")}");
	}
}
</pre>
<p>В итоге в данном случае тег <code>&lt;timer /&gt;</code> будет преобразован в следующий набор элементов:</p>
<pre class="brush:xml;">
&lt;h4&gt;Дата и время&lt;/h4&gt;
&lt;div&gt;Время: 20:34:42&lt;/div&gt;
&lt;div&gt;Дата: 07.12.2019&lt;/div&gt;
</pre>
<h3>Установка атрибутов</h3>
<p>Свойство <span class="b">Attributes</span> позволяет устанавливать атрибуты генерируемого элемента. Оно представляет объект 
<span class="b">TagHelperAttributeList</span>, который управляет атрибутами с помощью ряда методов. Некоторые из них:</p>
<ul>
<li><p><span class="b">Add(string name, object value)</span>: добавляет атрибут с именем name и значением value</p></li>
<li><p><span class="b">RemoveAll(string name)</span>: удаляет все атрибуты с именем name</p></li>
<li><p><span class="b">SetAttribute(string name, object value)</span>: устанавливает для атрибута с именем name значение value</p></li>
<li><p><span class="b">Clear()</span>: удаляет все атрибуты</p></li>
</ul>
<p>Для примера установим стиль и класс элемента:</p>
<pre class="brush:c#;">
public class TimerTagHelper : TagHelper
{
	public override void Process(TagHelperContext context, TagHelperOutput output)
	{
		output.TagName = "div";
		output.TagMode = TagMode.StartTagAndEndTag;
		output.Attributes.SetAttribute("style", "color:red;");
		output.Attributes.SetAttribute("class", "timer");
		output.Content.SetContent($"{DateTime.Now.ToString("HH:mm:ss")}");
	}
}
</pre>
<p>В итоге из тега:</p>
<pre class="brush:xml;">&lt;timer /&gt;</pre>
<p>сгенерирована следующая разметка:</p>
<pre class="brush:xml;">
&lt;div style="color:red;" class="timer"&gt;20:57:26&lt;/div&gt;
</pre>
<h3>Атрибуты тега</h3>
<p>Мы можем не только управлять атрибутами создаваемых html-элементов, но и определять для тег-хелперов свои атрибуты. Через атрибуты мы можем передать из вне 
в класс хелпера некоторые значения. В самом классе можно получить переданные значения с помощью публичных свойств. Например, добавим 
возможность установки цвета элемента и возможность выбора, надо ли выводить секунды:</p>
<pre class="brush:c#;">
public class TimerTagHelper : TagHelper
{
	public bool SecondsIncluded { get; set; }
	public string? Color { get; set; }
	public override void Process(TagHelperContext context, TagHelperOutput output)
	{
		var now = DateTime.Now;
		var time = String.Empty;
		if (SecondsIncluded)    // если true добавляем секунды
			time = now.ToString("HH:mm:ss");
		else
			time = now.ToString("HH:mm");

		output.TagName = "div";
		output.TagMode = TagMode.StartTagAndEndTag;
        // устанавливаем цвет, если свойство Color не равно null
        if(Color != null) output.Attributes.SetAttribute("style", $"color:{Color};");

		output.Content.SetContent(time);
	}
}
</pre>
<p>Используем этот хелпер в представлении:</p>
<pre class="brush:xml;">
&lt;timer color="navy" seconds-included="true" /&gt;
&lt;timer color="#0984e3" seconds-included="true" /&gt;
&lt;timer color="#ff7675" /&gt;
&lt;timer /&gt;
</pre>
<img src="./pics/7.15.png" alt="Атрибуты в TagHelpers в ASP.NET Core MVC и C#" />
<p>Во время выполнения приложения из атрибутов будут передаваться значения соответствующим свойствам. Соответствие идет по имени. 
Но надо отметить, что если атрибут тега или сам тег в названии содержит дефисы в качестве разделителей, то название соответствующего тегу 
свойства состоит из нескольких частей и каждая из этих частей начинается с заглавной буквы. Например, атрибуту <code>seconds-included</code> 
будет соответствовать свойство <code>SecondsIncluded</code>.</p>
<p>Кроме того, мы можем не указывать атрибуты в теге, тогда свойства хелпера получат значения по умолчанию, как в случае выше. Но если в случае 
выше это не критично, то в других конкретных случаях это может сыграть важную роль, и на этот случае можно проверять значения свойств перед использованием.</p>

<h3>Метод SuppressOutput</h3>
<p>Кроме свойств <span class="b">TagHelperOutput</span> имеет еще ряд методов, которые позволяют управлять выводом. Среди них надо отметить метод 
<span class="b">SuppressOutput()</span>, который позволяет не обрабатывать тег. То есть при применении этого метода тег не будет обрабатываться, и для него не будет создаваться никакой 
html-разметки на веб-странице. Так, изменим класс хелпера следующим образом:</p>
<pre class="brush:c#;">
public class TimerTagHelper : TagHelper
{
	public bool Condition { get; set; }
	public override void Process(TagHelperContext context, TagHelperOutput output)
	{
		if (!Condition)
		{
			output.SuppressOutput();
		}
		else
		{
			output.TagName = "div";
			output.TagMode = TagMode.StartTagAndEndTag;
			output.Content.SetContent($"{DateTime.Now.ToString("HH:mm:ss")}");
		}
	}
}
</pre>
<p>Здесь добавляется свойство Condition, которое хранит логическое значение true или false. А в методе Process в зависимости от его значения 
применяется метод <code>output.SuppressOutput()</code>, который прекращает обработку тега.</p>
<p>В этом случае в представлении мы можем определить следующий код:</p>
<pre class="brush:xml;">
&lt;timer condition="false" /&gt;
&lt;timer condition="true" /&gt;
</pre>
<p>Здесь свойству Condition соответствует атрибут condition, который принимает значение true или false. И поскольку в первом случае в 
атрибут condition передано значение false, для этого тега в классе будет применяться метод <code>output.SuppressOutput()</code>, 
поэтому вместо этого тега на веб-странице мы ничего не увидим.</p>
<h3>Передача сложных объектов</h3>
<p>Кроме простых свойств типа int или string в хелпер можно передавать сложные объекты. Например:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Razor.TagHelpers;

namespace MvcApp.TagHelpers
{
    public class TimerTagHelper : TagHelper
    {
        public StyleInfo? Style { get; set; }
        public override void Process(TagHelperContext context, TagHelperOutput output)
        {
            output.TagName = "div";
            output.TagMode = TagMode.StartTagAndEndTag;
            // формируем стиль
            string style = "";
            if (Style?.Color != null) style = $"color:{Style.Color};";
            if (Style?.FontSize != null) style = $"{style}font-size:{Style.FontSize}px;";
            if (Style?.FontFamily != null) style = $"{style}font-family:{Style.FontFamily};";

            output.Attributes.SetAttribute("style", style);
            output.Content.SetContent($"{DateTime.Now.ToString("HH:mm:ss")}");
        }
    }
    public class StyleInfo
    {
        public string? Color { get; set; }
        public int? FontSize { get; set; }
        public string? FontFamily { get; set; }
    }
}
</pre>
<p>Здесь хелпер хранит ссылку на объект StyleInfo, которые инкапсулирует стилевые свойства создаваемого элемента. Далее в представлении мы можем передать 
значения для этого свойства:</p>
<pre class="brush:xml;">
@using MvcApp.TagHelpers  @*пространство имен класса StyleInfo*@
@addTagHelper *, MvcApp

&lt;timer style='new StyleInfo{Color="#c0392b", FontFamily="Verdana", FontSize=18}' /&gt;
&lt;timer style='new StyleInfo{Color="#2980b9", FontFamily="Arial", FontSize=18}' /&gt;
</pre>
<img src="./pics/7.16.png" alt="Атрибуты и свойства в Tag Helper в ASP.NET Core MVC и C#" />
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


<div class="nav"><p><a href="./7.7.php">Назад</a><a href="./">Содержание</a><a href="./7.9.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в ASP.NET Core MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/1.1.php">Фреймворк ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/1.2.php">Первый проект на ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/1.3.php">Добавление MVC в пустой проект</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Контроллеры</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.1.php">Контроллеры и их действия</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.2.php">Контекст контроллера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.3.php">Передача данных в контроллер через строку запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.4.php">Передача данных в контроллер через формы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.5.php">Результаты действий</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.6.php">ContentResult и JsonResult</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.7.php">Переадресация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.8.php">Отправка статусных кодов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.9.php">Отправка файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.10.php">Передача зависимостей в контроллер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.11.php">Переопределение контроллеров</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Представления</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.1.php">Введение в представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.2.php">Движок представлений Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.3.php">Передача данных в представление</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.4.php">Мастер-страницы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.5.php">Файл _ViewImports.cshtml</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.6.php">Частичные представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.7.php">Внедрение зависимостей в представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.8.php">Работа с формами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.9.php">Создание движка представлений</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Маршрутизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/4.1.php">Добавление маршрутизации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/4.2.php">Определение маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/4.3.php">Атрибуты маршрутизации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/4.4.php">Области</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Модели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.1.php">Модели в ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.2.php">Введение в определение и применение моделей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.3.php">Привязка модели</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.4.php">Управление привязкой</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.5.php">Создание привязчика модели</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. HTML-хелперы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.1.php">Создание HTML-хелперов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.2.php">HTML-хелперы элементов форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.3.php">Строго типизированные хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.4.php">Шаблонные хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.5.php">Генерация ссылок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.6.php">URL-хелперы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Tag-хелперы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.1.php">Введение в tag-хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.2.php">AnchorTagHelper. Создание ссылок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.3.php">LinkTagHelper и ScriptTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.4.php">Tag-хелперы форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.5.php">EnvironmentTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.6.php">CacheTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.7.php">Создание tag-хелперов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.8.php">Управление выводом tag-хелпера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.9.php">Контекст хелпера и получение зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.10.php">Атрибут HtmlTargetElement</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.11.php">Tag-хелперы и сложные объекты и коллекции</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. View Component</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.1.php">Определение компонента представлений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.2.php">Передача данных в View Component</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.3.php">Генерация контента в View Component</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.4.php">ViewComponentResult и представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.5.php">ViewComponentContext</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Метаданные и валидация модели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.1.php">Валидация модели на стороне сервера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.2.php">Валидация на стороне клиента</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.3.php">Атрибуты валидации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.4.php">Tag-хелперы валидации и стилизация ошибок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.5.php">Создание атрибута валидации. Самовалидация модели</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.6.php">Аннотации данных</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 10. Фильтры</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.1.php">Введение в фильтры</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.2.php">Область действия фильтров</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.3.php">Передача параметров в фильтры и установка зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.4.php">Фильтры ресурсов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.5.php">Фильтры действий</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.6.php">Фильтры результатов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.7.php">Фильтры исключений</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 11. Работа с данными в Entity Framework</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.1.php">Подключение Entity Framework Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.2.php">Добавление и вывод данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.3.php">Редактирование и удаление данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.4.php">Сортировка</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.5.php">Создание tag-хелпера сортировки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.6.php">Фильтрация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.7.php">Постраничная навигация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.8.php">Tag-хелпер для постраничной навигации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.9.php">Объединение сортировки, фильтрации и пагинации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.10.php">Tag-хелпер пагинации с сортировкой и фильтрацией</a></span></li>
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
	
	$("li:contains('Глава 7.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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