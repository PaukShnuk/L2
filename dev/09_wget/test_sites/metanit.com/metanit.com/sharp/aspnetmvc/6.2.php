<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core MVC и C# | HTML-хелперы элементов форм</title>
<meta charset="utf-8" />
<meta name="description" content="Встроенные HTML-хелперы форм в ASP.NET Core MVC и C#, Html.BeginForm, Html.TextBox, GetEnumSelectList, Html.DropDownList">
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
<h2>HTML-хелперы элементов форм</h2><div class="date">Последнее обновление: 29.03.2022</div>

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

<p>Хотя мы можем создать любой необходимый хелпер, но в большинстве случаев нам не придется писать свои хелперы, 
потому что фреймворк MVC уже предоставляет большой набор встроенных html-хелперов, которые позволяют генерировать ту или иную разметку, например, код элеметов форм.</p>
<h3>Хелпер Html.BeginForm</h3>
<p>Пусть в контроллере определены две версии одного метода Create- для методов POST и GET, например:</p>
<pre class="brush:c#;">
[HttpGet]
public IActionResult Create() =&gt; View();
        
[HttpPost]
public string Create(string name, int age) =&gt; $"{name} - {age}";
</pre>
<p>В представлении для метода Create для создания формы ввода данных для последующей их отправки на post-версию метода Create 
мы вполне можем использовать стандартные элементы html, например:</p>
<pre class="brush:xml;">
&lt;form method="post" action="~/Home/Create"&gt;
    &lt;p&gt;
        &lt;label&gt;Имя&lt;/label&gt;&lt;br /&gt;
        &lt;input type="text" name="name" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label&gt;Возраст&lt;/label&gt;&lt;br /&gt;
        &lt;input type="number" name="age" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;input type="submit" value="Отправить" /&gt;
    &lt;/p&gt;
&lt;/form&gt;
</pre>
<p>Это обычная html-форма, которая по нажатию на кнопку отправляет все введенные данные запросом POST на адрес /Home/Create. 
Встроенный хелпер <span class="b">BeginForm/EndForm</span> позволяет создать ту же самую форму:</p>
<pre class="brush:xml;">
@using(Html.BeginForm("Create", "Home", FormMethod.Post))
{
    &lt;p&gt;
        &lt;label&gt;Имя&lt;/label&gt;&lt;br /&gt;
        &lt;input type="text" name="name" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label&gt;Возраст&lt;/label&gt;&lt;br /&gt;
        &lt;input type="number" name="age" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;input type="submit" value="Отправить" /&gt;
    &lt;/p&gt;
}
</pre>
<p>Метод <span class="b">BeginForm</span> принимает в качестве параметров имя метода действия и имя контроллера, а также тип запроса. 
Данный хелпер создает как открывающий тег <code>&lt;form&gt;</code>, так и закрывающий тег <code>&lt;/form&gt;</code>. Поэтому при рендеринге представления в 
выходной поток у нас получится тот же самый html-код, что и с применением тега form. Поэтому оба способа идентичны.</p>
<p>Но вызов страницы с формой и отправка формы осуществляется одним и тем же действием (как в нашем случае действием Create), то в этом случае можно не указывать в 
хелпере <code>Html.BeginForm</code> параметры:</p>
<pre class="brush:xml;">
@using(Html.BeginForm())
{
    .............
}
</pre>
<h3>Ввод информации</h3>
<p>В предыдущем примере вместе с хелпером Html.BeginForm использовались стандартные элементы html. Однако набор html-хелперов содержит также 
хелперы для ввода информации пользователем. В MVC определен широкий набор хелперов ввода практически для каждого html-элемента. Что выбрать - 
хелпер или стандартный элементы ввода html, уже решает сам разработчик.</p> 
<p>Вне зависимости от типа все базовые html-хелперы используют как минимум два параметра: первый параметр применяется для установки значений 
для атрибутов <code>id</code> и <code>name</code>, а второй параметр - для установки значения атрибута <code>value</code></p>
<h4>Html.TextBox</h4>
<p>Хелпер <code>Html.TextBox</code> генерирует тег <code>input</code> со значением атрибута <code>type</code> равным <code>text</code>. 
Хелпер <code>TextBox</code> используют для получения ввода пользователем информации. Так, перепишем предыдущую форму  с заменой полей ввода на хелпер 
Html.TextBox:</p>
<pre class="brush:xml;">
@using (Html.BeginForm("Create", "Home", FormMethod.Post))
{
    &lt;p&gt;
        &lt;label&gt;Имя&lt;/label&gt;&lt;br /&gt;
        @Html.TextBox("Name")
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label&gt;Возраст&lt;/label&gt;&lt;br /&gt;
        @Html.TextBox("Age","", new { type="number" })
    &lt;/p&gt;
    &lt;p&gt;
        &lt;input type="submit" value="Отправить" /&gt;
    &lt;/p&gt;
}
</pre>
<p>Хелпер позволяет установить ряд дополнительных параметров с помощью перегружженных версий. Так, вызов хелпера:</p>
<pre class="brush:c#;">@Html.TextBox("Age","", new { type="number" })</pre>
<p>В качестве второго параметра устанавливает значение по умолчанию (здесь пустая строка). Третий параметр в виде анонимного объекта позволяет задать 
ряд атрибутов генерируемого html-элемента. Так, в данном случае мы указываем, что поле будет числовое, так как по умолчанию создаваемое поле расценивается как текстовое, то есть 
с атрибутом <code>type="text"</code>.</p>
<p>В итоге мы получим практически аналогичный результат:</p>
<img src="./pics/6.2.png" alt="текстовые поля в asp.net core mvc и c#" />
<h4>Html.Label</h4>
<p>Хелпер <code>Html.Label</code> создает элемент <code>&lt;label/&gt;</code>, а передаваемый в хелпер параметр определяет значение атрибута 
<code>for</code> и одновременно текст на элементе. Перегруженная версия хелпера позволяет определить значение атрибута <code>for</code> и 
текст на метке независимо друг от друга. Например, объявление хелпера <code>Html.Label("Name", "Имя")</code> создает следующую разметку:</p>
<pre class="brush:xml;">&lt;label for="Name"&gt;Имя&lt;/label&gt;</pre>
<p>Элемент <code>label</code> представляет простую метку, предназначенную для прикрепления информации к элементам ввода, например, к текстовым полям. 
Атрибут <code>for</code> элемента <code>label</code> должен содержать id ассоциированного элемента ввода. Если пользователь нажимает на 
метку, то браузер автоматически передает фокус связанному с этой меткой элементу ввода.</p>
<h4>Html.TextArea</h4>
<p>Хелпер <code>TextArea</code> используется для создания элемента 
<code>&lt;textarea&gt;</code>, который представляет многострочное текстовое поле. Результатом выражения <code>@Html.TextArea("text", "привет мир")</code></p>
<p>будет следующая html-разметка:</p>
<pre class="brush:xml;">
&lt;textarea cols="20" id="text" name="text" rows="2"&gt;привет мир
&lt;/textarea&gt;
</pre>
<p>Обратите внимание, что хелпер декодирует помещаемое в него значение, в том числе и html-теги, (все хелперы декодируют значения моделей 
и значения атрибутов). Другие версии хелпера <code>TextArea</code> позволяют указать число строк и столбцов, определяющих размер текстового поля.</p>
<pre class="brush:c#;">@Html.TextArea("text", "привет мир", 5, 50, null)</pre>
<p>Этот хелпер сгенерирует следующую разметку:</p>
<pre class="brush:xml;">&lt;textarea cols="50" id="text" name="text" rows="5"&gt;привет мир&lt;/textarea&gt;</pre>
<h4>Html.Hidden</h4>
<p>Хелпер <span class="b">Html.Hidden</span> генерирует скрытое поле. Например, следующий вызов хелпера:</p>
<p><code>@Html.Hidden("UserId", "2")</code></p>
<p>сгенерирует разметку:</p>
<pre class="brush:xml;">
&lt;input id="UserId" name="UserId" type="hidden" value="2" /&gt;
</pre>
<h4>Html.Password</h4>
<p><code>Html.Password</code> создает поле для ввода пароля. Он похож на хелпер <code>TextBox</code>, но вместо 
введенных символов отображает маску пароля. Следующий код:</p>
<pre class="brush:c#;">@Html.Password("UserPassword", "val")</pre>
<p>генерирует разметку:</p>
<pre class="brush:xml;">
&lt;input id="UserPassword" name="UserPassword" type="password" value="val" /&gt;
</pre>
<h4>Html.RadioButton</h4>
<p>Для создания переключателей применяется хелпер <code>Html.RadioButton</code>. Он генерирует элемент <code>input</code> со значением <code>type="radio"</code>. 
Для создания группы переключателей, надо присвоить всем им одно и то же имя (свойство <code>name</code>):</p>
<pre class="brush:xml;">
@Html.RadioButton("color", "red")
&lt;span&gt;красный&lt;/span&gt; &lt;br /&gt;
@Html.RadioButton("color", "blue")
&lt;span&gt;синий&lt;/span&gt; &lt;br /&gt;
@Html.RadioButton("color", "green", true)
&lt;span&gt;зеленый&lt;/span&gt;
</pre>
<p>Этот код создает следующую разметку:</p>
<pre class="brush:xml;">
&lt;input id="color" name="color" type="radio" value="red" /&gt;
&lt;span&gt;красный&lt;/span&gt; &lt;br /&gt;
&lt;input id="color" name="color" type="radio" value="blue" /&gt; 
&lt;span&gt;синий&lt;/span&gt; &lt;br /&gt;
&lt;input checked="checked" id="color" name="color" type="radio" value="green" /&gt;
&lt;span&gt;зеленый&lt;/span&gt;
</pre>
<img src="./pics/6.3.png" alt="Html.RadioButton в ASP.NET Core MVC и C#" />
<h4>Html.CheckBox</h4>
<p><code>Html.CheckBox</code> применяется для создания элемента флажка или checkbox. Например, следующий код:</p>
<pre class="brush:c#;">@Html.CheckBox("Enable", false)</pre>
<p>будет генерировать следующий HTML:</p>
<pre class="brush:xml;">
&lt;input id="Enable" name="Enable" type="checkbox" value="true"&gt;
</pre>
<h4>Html.DropDownList</h4>
<p>Хелпер <span class="b">Html.DropDownList</span> создает выпадающий список, то есть элемент <code>&lt;select /&gt;</code>. 
Для генерации такого списка нужна коллекция объектов <code>SelectListItem</code>, которые представляют элементы списка. 
Можно создать коллекцию объектов <code>SelectListItem</code> или использовать хелпер <code>SelectList</code>. Этот хелпер просматривает объекты 
<code>IEnumerable</code> и преобразуют их в последовательность объектов <code>SelectListItem</code>. 
Так, следующий код:</p>
<pre class="brush:c#;">
@Html.DropDownList("user", new SelectList(new string[] { "Tom", "Sam", "Bob", "Alice" }), "Выберите пользователя")
</pre> 
генерирует следующую разметку:</p>
<pre class="brush:xml;">
&lt;select id="user" name="user"&gt;&lt;option value=""&gt;Выберите пользователя&lt;/option&gt;
&lt;option&gt;Tom&lt;/option&gt;
&lt;option&gt;Sam&lt;/option&gt;
&lt;option&gt;Bob&lt;/option&gt;
&lt;option&gt;Alice&lt;/option&gt;
&lt;/select&gt;
</pre>
<p>Объект <code>SelectListItem</code> имеет свойства <code>Text</code> (отображаемый текст), <code>Value</code> (само значение, которое может не 
совпадать с текстом) и <code>Selected</code>. Теперь более сложный пример. Выведем в список коллекцию элементов User:</p>
<pre class="brush:c#;">
public record class User(int Id, string Name, int Age);
</pre>
<p>В контроллере передадим список объектов User через ViewBag:</p>
<pre class="brush:c#;">
public IActionResult Create()
{
    var users = new List&lt;User&gt;
    {
        new User(1, "Tom", 37),
        new User(2, "Alice", 33),
        new User(3, "Sam", 28),
        new User(4, "Bob", 41),
    };
    ViewBag.Users = new Microsoft.AspNetCore.Mvc.Rendering.SelectList(users, "Id", "Name");
    return View();
}
</pre>
<p>Здесь мы создаем объект SelectList, передавая в его конструктор набор значений (список users), название свойства модели User, 
которое будет использоваться в качестве значения (Id), и название свойства модели User, которое будет использоваться для отображения в списке. 
В данном случае необязательно устанавливать два разных свойства, можно было и одно установить и для значения и отображения.</p>
<p>Тогда в представлении мы можем так использовать этот SelectList:</p>
<pre class="brush:xml;">
@Html.DropDownList("userid", ViewBag.Users as SelectList)
</pre>
<p>И при рендеринге представления все элементы SelectList добавятся в выпадающий список</p>
<h4>Html.ListBox</h4>
<p>Хелпер <code>Html.ListBox</code>, также как и <code>DropDownList</code>, создает элемент <code>&lt;select /&gt;</code>, 
но при этом делает возможным множественное выделение элементов (то есть для атрибута <code>multiple</code> устанавливается значение <code>multiple</code>). 
Для создания списка, поддерживающего множественное выделение, вместо <code>SelectList</code> можно использовать класс <code>MultiSelectList</code>:</p>
<pre class="brush:xml;">
@Html.ListBox("users", new MultiSelectList(new string[] { "Tom", "Sam", "Bob", "Alice" }))
</pre>
<p>Этот код генерирует следующую разметку:</p>
<pre class="brush:xml;">
&lt;select id="users" multiple="multiple" name="users"&gt;
&lt;option&gt;Tom&lt;/option&gt;
&lt;option&gt;Sam&lt;/option&gt;
&lt;option&gt;Bob&lt;/option&gt;
&lt;option&gt;Alice&lt;/option&gt;
&lt;/select&gt;
</pre>
<h4>Html.GetEnumSelectList</h4>
<p>Для создания выпадающего списка по перечислению применяется хелпер <span class="b">Html.GetEnumSelectList</span>. Допустим, у нас есть следующее перечисление:</p>
<pre class="brush:c#;">
using System.ComponentModel.DataAnnotations; // для атрибута Display

public enum TimeOfDay
{
    [Display(Name ="Утро")]
    Morning,
    [Display(Name = "День")]
    Afternoon,
    [Display(Name = "Вечер")]
    Evening,
    [Display(Name = "Ночь")]
    Night
}
</pre>
<p>Тогда в представлении мы сможем вывести выпадающий список значений из этого перечисления:</p>
<pre class="brush:c#;">
@using MvcApp

@using (Html.BeginForm("Create", "Home", FormMethod.Post))
{
    @Html.DropDownList("daytime", Html.GetEnumSelectList(typeof(TimeOfDay)))
    &lt;br /&gt;
    &lt;p&gt;
        &lt;input type="submit" value="Отправить" /&gt;
    &lt;/p&gt;
}
</pre>
<img src="./pics/6.4.png" alt="Список из enum в ASP.NET Core MVC и C#" />

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


<div class="nav"><p><a href="./6.1.php">Назад</a><a href="./">Содержание</a><a href="./6.3.php">Вперед</a></p></div></div>
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