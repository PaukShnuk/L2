<!DOCTYPE html>
<html >
<head>
<title>Xamarin Forms | Стилизация с помощью CSS</title>
<meta charset="utf-8" />
<meta name="description" content="Стилизация с помощью CSS в Xamarin Forms, допустимые селекторы и стилевые свойства">
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
<h2>Стилизация с помощью CSS</h2><div class="date">Последнее обновление: 12.01.2021</div>

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

<p>Начиная с версии 3.0 в Xamarin Forms для стилизации элементов управления можно использовать стили CSS (почти так же, как в HTML). Правда, при использовании CSS в 
Xamarin Forms есть ряд особенностей и ограничений.</p>
<p>Итак, возьмем проект Xamarin Forms и добавим в главный проект решения файл css (в Visual Studio элемент <span class="b">Style Sheet</span>). Допустим, он будет называться 
<span class="b">mystyles.css</span>:</p>
<img src="./pics/css1.png" alt="CSS в Xamarin Forms" />
<p>После добавления файла убедимся, что для в окне свойств в поле <span class="b">Build Action</span> задано значение <span class="b">EmbeddedResource</span> 
(хотя при добавлении файла css такая установка должна происходить по умолчанию):</p>
<img src="./pics/css2.png" alt="Использование CSS в Xamarin Forms" />
<p>Определим в файле страницы MainPage.xaml следующий интерфейс:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;ContentPage xmlns="http://xamarin.com/schemas/2014/forms"
             xmlns:x="http://schemas.microsoft.com/winfx/2009/xaml"
             x:Class="HelloApp.MainPage"&gt;
    
    &lt;ContentPage.Resources&gt;
        &lt;StyleSheet Source="/mystyles.css" /&gt;
    &lt;/ContentPage.Resources&gt;

    &lt;StackLayout&gt;
        &lt;Label x:Name="header" StyleId="header" Text="Words"/&gt;
        &lt;Label Text="apple" StyleClass="english" /&gt;
        &lt;Label Text="яблоко" StyleClass="russian" /&gt;
        &lt;Label Text="house" StyleClass="english" /&gt;
        &lt;Label Text="дом" StyleClass="russian" /&gt;
        &lt;Label Text="bread" StyleClass="english" /&gt;
        &lt;Label Text="хлеб" StyleClass="russian" /&gt;
    &lt;/StackLayout&gt;

&lt;/ContentPage&gt;
</pre>
<p>Файл стилей css подключается на страницу как обычный ресурс с помощью элемента <span class="b">StyleSheet</span>. У этого элемента устанавливается 
атрибут <span class="b">Source</span>, который указывается на путь к файлу css. В данном случае файл css расположен в корневой папке главного 
проекта, поэтому прописываем путь "/mystyles.css".</p>
<p>Для установки стилей в CSS могут использоваться различные селекторы, в том числе классы и идентификаторы. Для этого для каждого визуального элемента начиная с 
Xamarin Forms 3.0 были добавлены два атрибута. Свойство <span class="b">StyleId</span> позволяет задать идентификатор для элемента (в html это 
атрибут id), а свойство <span class="b">StyleClass</span> задает название класса элемента (в html ему соответствует атрибут class). При этом не 
стоит путать свойства Style и StyleClass: к css относится только последнее.</p>
<p>Определим в файле mystyles.css следующее содержимое:</p>
<pre class="brush:css;">
^contentpage {
    background-color: lightcyan;
}

stacklayout {
    margin: 15;
    padding: 10;
}

label {
    color: black;
}

#header {
    font-size: 32;
    font-weight:bold;
}

.english {
    font-weight: bold;
    font-size: large;
    color: darkblue;
}

.russian {
    font-size:medium;
}

stacklayout label {
    font-family:Verdana;
}
</pre>
<p>Как и в обычном файле css, здесь стили задаются с помощью селекторов. В то же время было бы некорректным распространять свой опыт работы с css на xamarin, 
поскольку в данном случае есть ряд особенностей. Так, вначале идет селектор <code>^contentpage</code>. Он задает стили для элементов, которые находятся в 
элементе ContentPage. В стандартном CSS подобные селекторы не применяется, это является особенностью Xamarin.</p>
<p>Затем последовательно устанавливаются стили для элементов StackLayout и Label, а также для элементов с идентификатором header и классами english и russian.</p>
<p>В итоге страница будет выглядеть следующим образом:</p>
<img src="./pics/css3.png" alt="Стилизация в Xamarin Forms с помощью CSS" />
<p>Таким образом, подобно HTML в Xamarin можно подключать стили CSS, однако в то же время в Xamarin Forms есть немало ограничений на этот счет, о которых речь пойдет далее.</p>
<h3>Подключение файла стилей</h3>
<p>Подключать файл стилей CSS можно в XAML, либо через код C#.</p>
<p>В XAML файл CSS подключается как ресурс через элемент <span class="b">StyleSheet</span>, у которого атрибут Source принимает путь к файлу относительно корня главного проекта:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;ContentPage xmlns="http://xamarin.com/schemas/2014/forms"
             xmlns:x="http://schemas.microsoft.com/winfx/2009/xaml"
             x:Class="HelloApp.MainPage"&gt;
    
    &lt;ContentPage.Resources&gt;
        &lt;StyleSheet Source="/mystyles.css" /&gt;
    &lt;/ContentPage.Resources&gt;
	&lt;!-- содержимое страницы --&gt;

&lt;/ContentPage&gt;
</pre>
<p>Загрузка файла стилей коде C#:</p>
<pre class="brush:c#;">
using System.Reflection;
using Xamarin.Forms;
using Xamarin.Forms.StyleSheets;

namespace HelloApp
{
	public partial class MainPage : ContentPage
	{
		public MainPage()
		{
			InitializeComponent();

            this.Resources.Add(StyleSheet.FromResource
                    ("mystyles.css", IntrospectionExtensions.GetTypeInfo(typeof(MainPage)).Assembly ));
        }
	}
}
</pre>
<p>Поскольку файл стилей используется как ресурс, он добавляется в коллекцию ресурсов страницы с помощью метода <code>Resources.Add()</code>. 
Для загрузки самих стилей применяется метод <span class="b">StyleSheet.FromResource()</span>. Первый аргумент этого метода - путь к файлу стилй внутри проекта - 
в данном случае название файла, так как он располагается в корне проекта. А второй аргумент - сборка, которая содержит файл стилей.</p>
<h3>Определение стилей в XAML и коде C#</h3>
<p>В HTML с помощью тега style можно определять стили напрямую на странице, не используя сторонних файлов с расширением *.css. Также можно поступать и в Xamarin Forms. 
Определение стилей в XAML:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;ContentPage xmlns="http://xamarin.com/schemas/2014/forms"
             xmlns:x="http://schemas.microsoft.com/winfx/2009/xaml"
             x:Class="HelloApp.MainPage"&gt;

    &lt;ContentPage.Resources&gt;
        &lt;StyleSheet&gt;
            &lt;![CDATA[
            ^contentpage {
                background-color: lightcyan
            }

            stacklayout {
                margin: 15;
                padding: 10;
            }
            ]]&gt;
        &lt;/StyleSheet&gt;
    &lt;/ContentPage.Resources&gt;

	&lt;!-- содержимое страницы --&gt;
	
&lt;/ContentPage&gt;
</pre>
<p>Определение стилей в коде C#:</p>
<pre class="brush:c#;">
public partial class MainPage : ContentPage
{
    public MainPage()
    {
        InitializeComponent();

        using (var reader = new System.IO.StringReader("^contentpage { background-color: lightgray; }"))
        {
            this.Resources.Add(StyleSheet.FromReader(reader));
        }
    }
}
</pre>
<h3>Определение селекторов</h3>
<p>При определении стилей в Xamarin Forms в целом мы можем использовать большинство селекторов, которые принимаются в стандартном CSS. В тоже время есть некоторые отличия.</p>
<p>Список применяемых в Xamarin Forms селекторов:</p>
<ul>
<li><p><span class="b">*</span></p>
<p>Устанавливает стили для всех элементов</p>
</li>
<li><p><span class="b">element</span></p>
<p>Используя название типа элемента, мы можем применить к нему стили:</p>
<pre class="brush:css;">
stacklayout {
    margin: 20;
}
</pre>
</li>

<li><p><span class="b">^корневой_элемент</span></p>
<p>С помощью селектора <code>^корневой_элемент</code> можно определить стили для всех элементов, который расположены в данном элементе:</p>
<pre class="brush:css;">
^contentpage {
	background-color: green;
}
^stacklayout {
	color:red;
}
</pre>
<p>В данном случае для всех элементов в ContentPage устанавливается в качестве фона зеленый цвет, а для элементов в StackLayout - красный цвет для шрифта.</p>
</li>

<li><p><span class="b">#id</span></p>
<p>Идентификатор элемента задается с помощью свойства <span class="b">StyleId</span>. Например, стили для идентификатора header:</p>
<pre class="brush:css;">
#header {
	color:red;
}
</pre></li>

<li><p><span class="b">.class</span></p>
<p>Класс элемента задается с помощью свойства <span class="b">StyleClass</span>. Например, стили для класса "english":</p>
<pre class="brush:css;">
.english {
    font-weight: bold;
    font-size: large;
    color: darkblue;
}
</pre></li>


<li><p><span class="b">element element</span></p>
<p>С помощью селектора типа <span class="b">родительский_элемент дочерний_элемент</span> можно задать стили для дочернего элемента, 
который располагается в определенном родительском элементе:</p>
<pre class="brush:css;">
stacklayout label {
    font-family:Verdana;
}
</pre>
<p>В данном случае задан стиль для элементов Label, которые располагаются в элементе StackLayout.</p>
<p>При этом дочерний элемент не обязательно должен располагаться напрямую в родительском элементе, например:</p>
<pre class="brush:xml;">
&lt;StackLayout&gt;
	&lt;Frame OutlineColor="Accent"&gt;
		&lt;Label Text="Xamarin Forms" /&gt;
	&lt;/Frame&gt;
&lt;/StackLayout&gt;
</pre>
</li>
<li><p><span class="b">element&gt;element</span></p>
<p>Если необходимо определим стиль только для прямых дочерних элементов, корый располагаются непосредственно в родительском элементе, то 
применяется конструкция <code>родительский_элемент&gt;дочерний_элемент</code>:</p>
<pre class="brush:css;">
stacklayout &gt; label {
    font-family:Verdana;
}
</pre>
</li>

<li><p><span class="b">element, element</span></p>
<p>Устанавливает стили для ряда элементов:</p>
<pre class="brush:css;">
label, button {
    background-color: green;
}
</pre>
<p>Устанавливает фон для кнопок и меток</p>
</li>

<li><p><span class="b">element+element</span></p>
<p>Устанавливает стили для элемента, который идет сразу за определенным элементом (оба элемента являются сестринскими):</p>
<pre class="brush:css;">
label+button {
    background-color: green;
}
</pre>
<p>Устанавливает фон для кнопки, которая располагается сразу после метки</p>
</li>

<li><p><span class="b">element~element</span></p>
<p>Устанавливает стили для элемента, который идет непосредственно перед определенным элементом (оба элемента являются сестринскими):</p>
<pre class="brush:css;">
label~button {
    background-color: green;
}
</pre>
<p>Устанавливает фон для кнопки, которая располагается перед элементами Label</p>
</li>
</ul>
<h3>Используемые стили</h3>
<p>Цель использования CSS - установить определенные стили для определенных элементов. В Xamarin Forms фактически это означает установку значений 
для свойств определенных объектов. Однако здесь есть много ограничений. Не для всех свойств объектов мы можем установить стили.</p>
<p>Какие стилевые свойства мы можем установить:</p>
<ul>
<li><p><span class="b">background-color<span></p>
<p>Представляет свойство <span class="b">BackgroundColor</span>. Применяется к элементу типа <span class="b">VisualElement</span></p>
<pre class="brush:css;">
background-color: lightblue;
</pre>
</li>

<li><p><span class="b">background-image<span></p>
<p>Представляет свойство <span class="b">BackgroundImage</span>. Применяется к элементу типа <span class="b">Page</span></p>
<pre class="brush:css;">
background-image: mypic.png;
</pre>
</li>

<li><p><span class="b">border-color<span></p>
<p>Представляет свойство <span class="b">BorderColor</span>. Применяется к элементам типа <span class="b">Button</span> и <span class="b">Frame</span></p>
<pre class="brush:css;">
border-color: #9acd32;
</pre>
</li>

<li><p><span class="b">border-width<span></p>
<p>Представляет свойство <span class="b">BorderWidth</span>. Применяется к элементу <span class="b">Button</span>. Принимает значение типа double:</p>
<pre class="brush:css;">
border-width: .5;
</pre>
</li>

<li><p><span class="b">color<span></p>
<p>Представляет свойство <span class="b">TextColor</span> (цвет текста). Применяется к элементам <span class="b">Button</span>, 
<span class="b">DatePicker</span>, <span class="b">Editor</span>, <span class="b">Entry</span>, <span class="b">Label</span>, 
<span class="b">Picker</span>, <span class="b">SearchBar</span>, <span class="b">TimePicker</span>.</p>
<pre class="brush:css;">
color: rgba(255, 0, 0, 0.3);
</pre>
</li>

<li><p><span class="b">direction<span></p>
<p>Соответствует свойству <span class="b">FlowDirection</span> (направление текста). Применяется к элементу <span class="b">VisualElement</span>. 
Допустимые значения: ltr, rtl, inherit.</p>
<pre class="brush:css;">
direction: rtl;
</pre>
</li>

<li><p><span class="b">font-family<span></p>
<p>Соответствует свойству <span class="b">FontFamily</span>. Применяется к элементам <span class="b">Button</span>, 
<span class="b">DatePicker</span>, <span class="b">Editor</span>, <span class="b">Entry</span>, <span class="b">Label</span>, 
<span class="b">Picker</span>, <span class="b">SearchBar</span>, <span class="b">TimePicker</span>, <span class="b">Span</span>.</p>
<pre class="brush:css;">
font-family: Consolas;
</pre>
</li>

<li><p><span class="b">font-size<span></p>
<p>Соответствует свойству <span class="b">FontSize</span>. Применяется к элементам <span class="b">Button</span>, 
<span class="b">DatePicker</span>, <span class="b">Editor</span>, <span class="b">Entry</span>, <span class="b">Label</span>, 
<span class="b">Picker</span>, <span class="b">SearchBar</span>, <span class="b">TimePicker</span>, <span class="b">Span</span>.</p>
<p>В качестве значения могут использоваться значения типа double или именованные размеры (small, large, medium).</p>
<pre class="brush:css;">
font-size: 12;
</pre>
</li>

<li><p><span class="b">font-style<span></p>
<p>Соответствует свойству <span class="b">FontStyle</span>. Применяется к элементам <span class="b">Button</span>, 
<span class="b">DatePicker</span>, <span class="b">Editor</span>, <span class="b">Entry</span>, <span class="b">Label</span>, 
<span class="b">Picker</span>, <span class="b">SearchBar</span>, <span class="b">TimePicker</span>, <span class="b">Span</span>.</p>
<p>Допустимые значения: bold (выделение жирным) и italic (выделение курсивом).</p>
<pre class="brush:css;">
font-style: bold;
</pre>
</li>

<li><p><span class="b">height<span></p>
<p>Соответствует свойству <span class="b">HeightRequest</span>. Применяется к элементу <span class="b">VisualElement</span>. 
Принимает значение типа double.</p>
<pre class="brush:css;">
height: 150;
</pre>
</li>

<li><p><span class="b">width<span></p>
<p>Соответствует свойству <span class="b">WidthRequest</span>. Применяется к элементу <span class="b">VisualElement</span>. 
Принимает значение типа double.</p>
<pre class="brush:css;">
width: 120;
</pre>
</li>

<li><p><span class="b">min-height<span></p>
<p>Соответствует свойству <span class="b">MinimumHeightRequest</span>. Применяется к элементу <span class="b">VisualElement</span>. 
Принимает значение типа double.</p>
<pre class="brush:css;">
min-height: 150;
</pre>
</li>

<li><p><span class="b">min-width<span></p>
<p>Соответствует свойству <span class="b">MinimumWidthRequest</span>. Применяется к элементу <span class="b">VisualElement</span>. 
Принимает значение типа double.</p>
<pre class="brush:css;">
min-width: 120;
</pre>
</li>


<li><p><span class="b">margin<span></p>
<p>Соответствует свойству <span class="b">Margin</span>. Применяется к элементу <span class="b">View</span>. 
Принимает значение типа Thickness.</p>
<pre class="brush:css;">
margin: 6 12;
</pre>
<p>Для установки внешних отступов элемента о одной из сторон контейнера также могут применяться следующие стили:</p>
<pre class="brush:css;">
margin-left: 3;
margin-top: 2;
margin-right: 1;
margin-bottom: 6;
</pre>
<p>Эти стилевые свойства также аналогичны свойству Margin, только устанавливают отступ для одной из сторон, а для остальных сторон устанавливается 
значение по умолчанию</p>
</li>


<li><p><span class="b">padding<span></p>
<p>Соответствует свойству <span class="b">Padding</span>. Применяется к элементу <span class="b">Layout</span>, <span class="b">Page</span>. 
Принимает значение типа Thickness.</p>
<pre class="brush:css;">
padding: 6 12;
</pre>
<p>Для установки отступов между элементами по одной стороне также могут применяться следующие стили:</p>
<pre class="brush:css;">
padding-left: 3;
padding-top: 2;
padding-right: 1;
padding-bottom: 6;
</pre>
<p>Эти стилевые свойства также аналогичны свойству Padding, только устанавливают отступ для одной из сторон, а для остальных сторон устанавливается 
значение по умолчанию</p>
</li>

<li><p><span class="b">text-align<span></p>
<p>Соответствует свойству <span class="b">HorizontalTextAlignment</span> (выравнивание текста). Применяется к элементам <span class="b">Entry</span>, <span class="b">EntryCell</span>, 
<span class="b">Label</span>, <span class="b">SearchBar</span>. 
Допустимые значения: left, right, center, start, end.</p>
<pre class="brush:css;">
text-align: right;
</pre>
</li>

<li><p><span class="b">visibility<span></p>
<p>Соответствует свойству <span class="b">IsVisible</span>. Применяется к элементу <span class="b">VisualElement</span>. 
Допустимые значения: true, visible, false, hidden, collapse.</p>
<pre class="brush:css;">
visibility: hidden;
</pre>
</li>

<li><p><span class="b">opacity<span></p>
<p>Соответствует свойству <span class="b">Opacity</span>. Применяется к элементу <span class="b">VisualElement</span>. 
Допустимые значения: true, visible, false, hidden, collapse.</p>
<pre class="brush:css;">
opacity: .3;
</pre>
</li>
</ul>
<h4>Margin и padding</h4>
<p>Ряд свойств: margin (а также margin-left, margin-right, margin-top, margin-bottom) и padding (padding-bottom, padding-left, 
padding-right, padding-top) принимают значение thickness. В реальности мы можем присвоить одно, два, три или четыре числовых значения:</p>
<ul>
<li><p>Одно значение задает отступ для всех сторон</p></li>
<li><p>Два значения задают отступы соответственно по вертикали и по горизонтали</p></li>
<li><p>Три значения задают соответственно верхний отступ, отступ по горизонтали (как справа, так и слева) и отступ снизу</p></li>
<li><p>Четыре значения задают соответственно отступ сверху, справа, снизу и слева</p></li>
</ul>
<p>Примеры:</p>
<pre class="brush:css;">
margin: 10;
margin: 20 10;
margin: 15 20 10;
margin: 45 15 20 10;
</pre>
<h4>Установка цвета</h4>
<p>Стилевые свойства <code>background-color</code>, <code>border-color</code> и <code>color</code> принимают значение цвета, которое можно задать 
различными способами:</p>
<ul>
<li><p>Предустановленные значения, например, <code>green</code>, <code>red</code> и т.д.</p></li>
<li><p>Шестнадцатеричные значения в форматах: #rgb, #argb, #rrggbb, #aarrggbb</p></li>
<li><p>Значения rgb, например, <code>rgb(255,0,0)</code>, <code>rgb(100%,0%,0%)</code>. Значения находятся в диапазонах 0-255 или 0%-100%.</p></li>
<li><p>Значения rgba, например, <code>rgba(255, 0, 0, 0.8)</code>,<code>rgba(100%, 0%, 0%, 0.8)</code>. Четвертое значение - прозрачность находится в 
диапазоне 0.0-1.0.</p></li>
<li><p>Значения hsl, например, <code>hsl(120, 100%, 50%)</code>. Значение h в диапазоне 0-360, а значения s и l в диапазоне 0%-100%.</p></li>
<li><p>Значения hsla, например, <code>hsla(120, 100%, 50%, .8)</code>. Последнее значение находится в диапазонах 0.0-1.0.</p></li>
</ul>
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


<div class="nav"><p><a href="./9.3.php">Назад</a><a href="./">Содержание</a><a href="./9.5.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Xamarin и кросс-платформенная разработка</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/1.1.php">Введение в Xamarin. Установка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.1.php">Создание и настройка проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.2.php">Создание приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.5.php">Запуск на Android</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.6.php">Запуск на Windows 10</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.7.php">Первое приложение в Visual Studio for Mac</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.8.php">Запуск на iOS из Visual Studio</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Графический интерфейс в Xamarin Forms</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.3.php">Создание графического интерфейса</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.4.php">XAML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.9.php">Взаимодействие XAML и C#</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.12.php">Метод LoadFromXaml и загрузка XAML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.11.php">Расширения разметки XAML</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Контейнеры компоновки</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.1.php">Элементы компоновки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.2.php">StackLayout и ScrollView </a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.4.php">AbsoluteLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.5.php">RelativeLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.6.php">Контейнер Grid</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Элементы в Xamarin и их свойства</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.17.php">Позиционирование элементов на странице</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.18.php">Работа с цветом</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.19.php">Стилизация текста</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.7.php">Кнопки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.20.php">Текстовые поля</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.3.php">Контейнер Frame</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.23.php">BoxView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.9.php">Работа с изображениями. Элемент Image</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.10.php">Выбор даты и времени. DatePicker и TimePicker</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.11.php">Выпадающий список Picker</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.12.php">Stepper и Slider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.13.php">Переключатель Switch</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.14.php">TableView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.15.php">WebView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.8.php">Всплывающие окна</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.21.php">Таймеры</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Платформо-зависимый код</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/12.1.php">Класс Device</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/12.2.php">Платформозависимость в XAML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/12.3.php">DependencyService</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Ресурсы и стили</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/9.1.php">Концепция ресурсов в Xamarin Forms</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/9.2.php">Стили</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/9.3.php">Триггеры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/9.4.php">Стилизация с помощью CSS</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/9.5.php">Visual State Manager и визуальные состояния</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Привязка в Xamarin</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.1.php">Введение в привязку</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.4.php">BindableObject и BindableProperty</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.5.php">Объект Binding</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.6.php">Конвертеры значений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.7.php">Привязка к объектам. Интерфейс INotifyPropertyChanged</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. ListView и работа с данными</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.16.php">ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.8.php">DataTemplate и сложные объекты в ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.12.php">TextCell</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.13.php">Изображения в ListView. ImageCell и ViewCell</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.14.php">Создание класса ячейки для ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.9.php">ObservableCollection</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.15.php">Настройка внешнего вида ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.10.php">Группировка в ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.16.php">Производительность ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.11.php">Триггеры данных</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Навигация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/5.1.php">Основы навигации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/5.2.php">Стек навигации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/5.3.php">Передача данных при навигации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/5.4.php">Сообщения и MessagingCenter</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Типы страниц</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.22.php">TabbedPage. Страница с вкладками</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. Хранение данных. Файлы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/6.2.php">Свойство Properites</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/6.3.php">Настройки приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/6.1.php">Работа с файлами</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. MVVM</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.2.php">Паттерн Model-View-ViewModel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.3.php">Команды и взаимодействие с пользователем в MVVM</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/11.1.php">Пример MVVM</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/11.2.php">Контекстное меню</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Базы данных SQLite</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/7.2.php">Основные операции с SQLite</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/7.4.php">Асинхронное подключение к SQLite</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/7.3.php">Подключение к существующей базе данных</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Глобализация и локализация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/8.1.php">Добавление локализации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/8.2.php">Определение языковой культуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/8.3.php">Локализация XAML</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Взаимодействие с сервером</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/10.2.php">Подключение к сети</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/10.4.php">Создание веб-сервиса</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/10.5.php">Взаимодействие с веб-сервисом</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/10.6.php">Создание интерфейса для работы с веб-сервисом</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Визуальные компоненты ContentView</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/13.1.php">Создание визуальных компонентов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. Рендеринг элементов управления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/14.1.php">Создание нового элемента</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/14.2.php">Добавление свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/14.3.php">Добавление событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/14.4.php">Наследование элемента и рендерера</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 18. Работа с мультимедиа</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/15.1.php">Работа с камерой</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 19. FlexLayout</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/17.1.php">Свойство Direction. Направление элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/17.2.php">Свойство Wrap</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/17.3.php">Выравнивание строк и столбцов. AlignContent</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/17.4.php">Выравнивание элементов. JustifyContent</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/17.5.php">Свойство AlignItems</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/17.6.php">Прикрепляемые свойства</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 20. Realm</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/18.1.php">Основные операции с базой данных Realm</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 21. Entity Framework Core</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/19.1.php">Создание контекста данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/19.2.php">Основные операции данными</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 22. Flyout</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/20.1.php">Первое приложение с Shell</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/20.2.php">FlyoutItem</a></span></li>
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
	
	$("li:contains('Глава 6.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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