<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core | HTML-хелперы элементов форм</title>
<meta charset="utf-8" />
<meta name="description" content="Встроенные HTML-хелперы форм в ASP.NET Core, Html.BeginForm, Html.TextBox, GetEnumSelectList, Html.DropDownList">
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
<h2>HTML-хелперы элементов форм</h2><div class="date">Последнее обновление: 30.11.2019</div>

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
public IActionResult Create()
{
	return View();
}
[HttpPost]
public IActionResult Create(string name, int age)
{
	return Content($"{name} - {age}");
}
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
<pre class="brush:c#;">@Html.TextBox("Price","", new { type="number" })</pre>
<p>В качестве второго параметра устанавливает значение по умолчанию (здесь пустая строка). Третий параметр в виде анонимного объекта позволяет задать 
ряд атрибутов генерируемого html-элемента. Так, в данном случае мы указываем, что поле будет числовое, так как по умолчанию создаваемое поле расценивается как текстовое, то есть 
с атрибутом <code>type="text"</code>.</p>
<p>В итоге мы получим практически аналогичный результат:</p>
<img src="./pics/htmlhelper2.png" alt="текстовые поля в asp.net core" />
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
<pre class="brush:xml;">@Html.TextArea("text", "привет мир", 5, 50, null)</pre>
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
<p><code>@Html.Password("UserPassword", "val")</code></p>
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
<img src="./pics/htmlhelper3.png" alt="Html.RadioButton в ASP.NET Core" />
<h4>Html.CheckBox</h4>
<p><code>Html.CheckBox</code> применяется для создания элемента флажка или checkbox. Например, следующий код:</p>
<pre class="brush:c#;">@Html.CheckBox("Enable", false)</pre>
<p>будет генерировать следующий HTML:</p>
<pre class="brush:xml;">
&lt;input id="Enable" name="Enable" type="checkbox" value="true"&gt;
&lt;input name="Enable" type="hidden" value="false"&gt;
</pre>
<p>Фактически создается два элемента - собственно флажок и скрытое поле, которое обычно помещается в конец формы и используется для отслеживания изменений значения флажка.</p>
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
&lt;select id="phone" name="phone"&gt;&lt;option value=""&gt;Выберите пользователя&lt;/option&gt;
&lt;option&gt;Tom&lt;/option&gt;
&lt;option&gt;Sam&lt;/option&gt;
&lt;option&gt;Bob&lt;/option&gt;
&lt;option&gt;Alice&lt;/option&gt;
&lt;/select&gt;
</pre>
<p>Объект <code>SelectListItem</code> имеет свойства <code>Text</code> (отображаемый текст), <code>Value</code> (само значение, которое может не 
совпадать с текстом) и <code>Selected</code>. Теперь более сложный пример. Выведем в список коллекцию элементов User:</p>
<pre class="brush:c#;">
public class User
{
    public int Id { get; set; }
    public string Name { get; set; }
    public int Age { get; set; }
}
</pre>
<p>В контроллере передадим список объектов User через ViewBag:</p>
<pre class="brush:c#;">
public IActionResult Create()
{
    List&lt;User&gt; users = new List&lt;User&gt;
    {
        new User {Id=1, Name="Tom", Age=35 },
		new User {Id=2, Name="Alice", Age=29 },
		new User {Id=3, Name="Sam", Age=36 },
		new User {Id=4, Name="Bob", Age=31 },
	};
	ViewBag.Users = new SelectList(users, "Id", "Name");
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
using System.ComponentModel.DataAnnotations;

namespace HtmlHelpersApp.App_Code
{
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
}
</pre>
<p>Тогда в представлении мы сможем вывести выпадающий список значений из этого перечисления:</p>
<pre class="brush:c#;">
@using HtmlHelpersApp.App_Code

@using (Html.BeginForm("Create", "Home", FormMethod.Post))
{
    @Html.DropDownList("daytime", Html.GetEnumSelectList(typeof(TimeOfDay)))
    &lt;br /&gt;
    &lt;p&gt;
        &lt;input type="submit" value="Отправить" /&gt;
    &lt;/p&gt;
}
</pre>
<img src="./pics/htmlhelper4.png" alt="Список из enum в ASP.NET Core" />
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


<div class="nav"><p><a href="./9.1.php">Назад</a><a href="./">Содержание</a><a href="./9.3.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в ASP.NET Core</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/1.1.php">ASP.NET Core - новая эпоха в развитии ASP.NET</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/1.2.php">Начало работы с ASP.NET Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/1.3.php">Проект ASP.NET Core в Visual Studio for Mac</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы ASP.NET Core</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.13.php">Запуск приложения. Класс Program</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.1.php">Класс Startup</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.2.php">Конвейер обработки запроса и middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.3.php">Методы Use, Run и делегат RequestDelegate</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.22.php">Методы Map и MapWhen</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.4.php">Создание компонентов middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.18.php">Конвейер обработки запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.21.php">IWebHostEnvironment и окружение</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.5.php">Статические файлы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.14.php">Работа со статическими файлами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/17.1.php">Обработка ошибок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.6.php">Работа с HTTPS</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Сервисы и Dependency Injection</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/6.1.php">Сервисы и метод ConfigureServices</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.19.php">Создание своих сервисов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/6.4.php">Передача зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/6.2.php">Жизненный цикл зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.20.php">Применение сервисов в middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/6.5.php">Singleton-объекты и scoped-сервисы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Конфигурация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.6.php">Основы конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.16.php">Нефайловые провайдеры конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.12.php">Файловые провайдеры конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.23.php">Объединение конфигураций и установка сервиса IConfiguration</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.17.php">Работа с конфигурацией</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.15.php">Создание провайдера конфгурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.9.php">Проекция конфигурации на классы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/6.3.php">Передача конфигурации через IOptions</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Состояние приложения. Куки. Сессии</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.11.php">HttpContext.Items</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.25.php">Куки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.26.php">Сессии</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Логгирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.10.php">Ведение лога и ILogger</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.29.php">Фабрика логгера и провайдеры логгирования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.28.php">Конфигурация и фильтрация логгирования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.27.php">Создание провайдера логгирования</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Маршрутизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.1.php">Основы маршрутизации в ASP.NET Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.12.php">RouterMiddleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.2.php">Определение маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.4.php">Работа с маршрутами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.3.php">Ограничения маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.7.php">Создание ограничений маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.8.php">Создание своего маршрута</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. ASP.NET Core MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/3.1.php">Введение в ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/3.6.php">Добавление MVC в пустой проект</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/3.2.php">Первое приложение. Добавление моделей и базы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/3.3.php">Создание контроллера и инициализатора базы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/3.4.php">Добавление методов контроллера и представлений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/3.5.php">Добавление мастер-страницы и стилизации</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Контроллеры</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.1.php">Контроллеры и их действия</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.2.php">Передача данных в контроллер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.3.php">Результаты действий</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.4.php">ContentResult и JsonResult</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.5.php">Переадресация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.6.php">Отправка статусных кодов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.7.php">Отправка файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.8.php">Переопределение контроллеров</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.9.php">Контекст контроллера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.10.php">Передача зависимостей в контроллер</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 10. Представления</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.1.php">Введение в представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.2.php">Движок представлений Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.3.php">Передача данных в представление</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.4.php">Мастер-страницы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.9.php">Файл _ViewImports.cshtml</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.5.php">Частичные представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.7.php">Внедрение зависимостей в представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.8.php">Работа с формами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.10.php">Создание движка представлений</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 11. Маршрутизация в ASP.NET Core MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.5.php">Маршрутизация в MVC с помощью конечных точек</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.13.php">Маршрутизация с помощью RouterMiddleware. Метод UseMvc</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.6.php">Атрибуты маршрутизации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.9.php">Области</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 12. Модели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/8.1.php">Модели в ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/8.2.php">Модели представления View Model</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/8.3.php">Привязка модели</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/8.4.php">Передача данных в контроллер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/8.5.php">Управление привязкой</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/8.6.php">Создание привязчика модели</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 13. HTML-хелперы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/9.1.php">Создание HTML-хелперов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/9.2.php">HTML-хелперы элементов форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/9.3.php">Строго типизированные хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/9.4.php">Шаблонные хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/9.5.php">Генерация ссылок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.11.php">URL-хелперы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 14. Tag-хелперы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.1.php">Введение в tag-хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.2.php">AnchorTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.3.php">LinkTagHelper и ScriptTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.4.php">Tag-хелперы форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.6.php">EnvironmentTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.7.php">CacheTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.8.php">Создание tag-хелперов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.10.php">Управление выводом tag-хелпера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.11.php">Контекст хелпера и получение зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.12.php">Атрибут HtmlTargetElement</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.9.php">Tag-хелперы и сложные объекты и коллекции</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 15. View Component</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.6.php">Определение компонента представлений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.11.php">Передача данных в View Component</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.12.php">Генерация контента в View Component</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.13.php">ViewViewComponentResult и представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.14.php">Асинхронные операции в View Component</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.15.php">ViewComponentContext</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 16. Метаданные и валидация модели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/19.1.php">Основы валидации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/19.2.php">Атрибуты валидации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/19.3.php">Валидация на стороне сервера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/19.4.php">Валидация на стороне клиента</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.5.php">Tag-хелперы валидации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/19.5.php">Создание атрибута валидации. Самовалидация модели</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/19.6.php">Аннотации данных</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 17. Работа с данными в Entity Framework в MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.1.php">Подключение и создание базы данных в Entity Framework Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.2.php">Операции с моделями. Создание и вывод</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.3.php">Операции с моделями. Редактирование и удаление</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.4.php">Сортировка</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.5.php">Создание tag-хелпера сортировки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.6.php">Фильтрация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.7.php">Постраничная навигация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.8.php">Tag-хелпер для постраничной навигации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.9.php">Объединение сортировки, фильтрации и пагинации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.10.php">Tag-хелпер пагинации с сортировкой и фильтрацией</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 18. Razor Pages</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.1.php">Введение в Razor Pages</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.2.php">Добавление RazorPages в пустой проект</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.3.php">Обработка запросов. Передача форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.4.php">Привязка свойств RazorPage к параметрам запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.5.php">Параметры маршрутов в Razor Pages</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.6.php">Обработчики страницы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.7.php">Возвращение результата</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.8.php">Переадресация и создание ссылок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.9.php">Подключение к базе данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.10.php">Создание и вывод объектов из базы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.11.php">Изменение и удаление в базе данных</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 19. Web API</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.1.php">Введение в Web API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.2.php">Создание контроллера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.3.php">Тестирование контроллера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.4.php">Создание клиента для WEB API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.5.php">Валидация в Web API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.6.php">Content negotiation</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 20. Фильтры</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.1.php">Введение в фильтры</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.5.php">Передача параметров в фильтры и установка зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.2.php">Фильтры ресурсов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.3.php">Фильтры действий</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.4.php">Фильтры результатов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/17.2.php">Фильтры исключений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.7.php">Фильтры RazorPages</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 21. Аутентификация и авторизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.1.php">Аутентификация на основе куки. Часть 1</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.2.php">Аутентификация на основе куки. Часть 2</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.3.php">Авторизация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.4.php">ClaimPrincipal и объекты Claim</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.5.php">Авторизация по ролям</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.6.php">Авторизация на основе Claims</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.7.php">Пример авторизации на основе Claims</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.8.php">Создание ограничений для политики авторизации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.7.php">JWT-токены</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 22. ASP.NET Core Identity</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.1.php">Введение в ASP.NET Core Identity</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.11.php">Основные классы в ASP.NET Core Identity</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.2.php">Добавление Identity в проект с нуля</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.3.php">Регистрация и создание пользователей в Identity</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.4.php">Авторизация пользователей в Identity</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.7.php">Управление пользователями</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.8.php">Изменение пароля</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.9.php">Валидация пароля</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.10.php">Валидация пользователя</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.13.php">Управление ролями</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.12.php">Инициализация БД ролями и пользователями</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 23. Клиентская разработка</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/13.6.php">Бандлинг и минификация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/13.7.php">Менеджер Libman</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/13.5.php">Пакетный менеджер NPM</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/13.1.php">Gulp</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/13.2.php">Grunt</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/13.4.php">Препроцессоры Less и Sass</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 24. Поизводительность и кэширование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/14.1.php">Кэширование с помощью MemoryCache</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/14.2.php">Атрибут ResponseCache</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/14.3.php">Сжатие ответа</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/14.4.php">Кэширование статических файлов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 25. Сервер и публикация приложения</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.7.php">Сервер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/20.1.php">Публикация на IIS</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/20.2.php">Установка приложения в виде службы Windows</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 26. Тестирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/22.1.php">Введение в юнит-тесты</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/22.2.php">Создание проекта юнит-тестов. Добавление xUnit</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/22.3.php">Создание юнит-тестов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/22.4.php">Фреймворк Moq и moq-объекты</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/22.5.php">Тестирование контроллера</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 27. URL Rewriting</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/24.1.php">Введение в URL Rewriting</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/24.2.php">Правила IIS для URL Rewriting</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/24.3.php">Применение правил для Apache</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/24.4.php">Создание правил URL Rewriting</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 28. Глобализация и локализация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.1.php">Определение культуры</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.2.php">RequestLocalizationMiddleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.3.php">Локализация строк. IStringLocalizer</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.4.php">Ресурсы и локализация в контроллерах</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.5.php">Локализация представлений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.6.php">Локализация аннотаций данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.7.php">Переключение языка приложения</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.8.php">Общие ресурсы локализации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.9.php">Хранение ресурсов в базе данных</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 29. SignalR Core</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.1.php">SignalR Core. Первое приложение</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.2.php">Создание и конфигурация хабов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.3.php">Клиент javascript</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.4.php">Контекст хаба, подключение и отключение клиентов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.5.php">Взаимодействие с клиентами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.6.php">IHubContext</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.7.php">Отправка сложных объектов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.8.php">Аутентификация и авторизация на основе куки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.9.php">Аутентификация и авторизация с помощью токенов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.10.php">Пользователи</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.11.php">Группы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.12.php">Клиент на Xamarin Forms</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 30. CORS и кросс-доменные запросы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/31.1.php">Начало работы с CORS</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/31.2.php">Конфигурация CORS</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/31.3.php">Политики CORS</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/31.5.php">Глобальная и локальная настройка CORS</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/31.4.php">CORS в MVC</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 31. Dapper</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/26.1.php">Работа с Dapper в ASP.NET Core</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 32. Работа с MongoDB</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/27.1.php">Создание проекта и подключение MongoDB</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/27.2.php">Чтение и добавление данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/27.3.php">Редактирование, удаление и работа с изображениями</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 33. React.JS</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/25.1.php">Подключение React в ASP.NET Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/25.2.php">Взаимодействие React.JS и ASP.NET Core</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 34. Сервисы gRPC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/32.1.php">Введение в gRPC</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 35. Дополнительные статьи</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/21.1.php">Отправка email в ASP.NET Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/21.3.php">Загрузка файлов на сервер</a></span></li>
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
	
	$("li:contains('Глава 13.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 13.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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