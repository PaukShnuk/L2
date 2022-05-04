<!DOCTYPE html>
<html >
<head>
<title>Работа с формами</title>
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
<h2>Работа с формами</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/aspnet5/">Руководство по ASP.NET Core</a></p><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Хотя мы можем сами написать любой требуемый хелпер, но фреймворк MVC уже предоставляет большой набор встроенных html-хелперов, которые 
позволяют генерировать ту или иную разметку, главным образом, для работы с формами. Поэтому в большинстве случаев не придется создавать свои хелперы, и можно будет воспользоваться встроенными.</p>
<h3>Хелпер Html.BeginForm</h3>
<p>Для создания форм мы вполне можем использовать стандартные элементы html, например:</p>
<pre class="brush:xml;">
&lt;form method="post" action="/Home/Buy"&gt;
    &lt;input type="hidden" value="@ViewBag.BookId" name="BookId" /&gt;
    &lt;table&gt;
        &lt;tr&gt;&lt;td&gt;&lt;p&gt;Введите свое имя &lt;/p&gt;&lt;/td&gt;
            &lt;td&gt;&lt;input type="text" name="Person" /&gt; &lt;/td&gt;&lt;/tr&gt;
        &lt;tr&gt;&lt;td&gt;&lt;p&gt;Введите адрес :&lt;/p&gt;&lt;/td&gt;
			&lt;td&gt;&lt;input type="text" name="Address" /&gt; &lt;/td&gt;&lt;/tr&gt;
        &lt;tr&gt;&lt;td&gt;&lt;input type="submit" value="Отправить" /&gt; &lt;/td&gt;
				&lt;td&gt;&lt;/td&gt;&lt;/tr&gt;
    &lt;/table&gt;
&lt;/form&gt;
</pre>
<p>Это обычная html-форма, которая по нажатию на кнопку отправляет все введенные данные запросом POST на адрес /Home/Buy. 
Встроенный хелпер <span class="bb">BeginForm/EndForm</span> позволяет создать ту же самую форму:</p>
<pre class="brush:xml;">
@using(Html.BeginForm("Buy", "Home", FormMethod.Post))
{
    &lt;input type="hidden" value="@ViewBag.BookId" name="BookId" /&gt;
    &lt;table&gt;
        &lt;tr&gt;&lt;td&gt;&lt;p&gt;Введите свое имя &lt;/p&gt;&lt;/td&gt;
            &lt;td&gt;&lt;input type="text" name="Person" /&gt; &lt;/td&gt;&lt;/tr&gt;
        &lt;tr&gt;&lt;td&gt;&lt;p&gt;Введите адрес :&lt;/p&gt;&lt;/td&gt;
			&lt;td&gt;&lt;input type="text" name="Address" /&gt; &lt;/td&gt;&lt;/tr&gt;
        &lt;tr&gt;&lt;td&gt;&lt;input type="submit" value="Отправить" /&gt; &lt;/td&gt;
				&lt;td&gt;&lt;/td&gt;&lt;/tr&gt;
    &lt;/table&gt;
}
</pre>
<p>Метод <span class="bb">BeginForm</span> принимает в качестве параметров имя метода действия и имя контроллера, а также тип запроса. 
Данный хелпер создает как открывающий тег <code>&lt;form&gt;</code>, так и закрывающий тег <code>&lt;/form&gt;</code>. Поэтому при рендеринге представления в 
выходной поток у нас получится тот же самый html-код, что и с применением тега form. Поэтому оба способа идентичны.</p>
<p>Здесь есть один момент. Если у нас в контроллере определены две версии одного метода - для методов POST и GET, например:</p>
<pre class="brush:c#;">
[HttpGet]
public ActionResult Buy()
{
    return View();
}

[HttpPost]
public string Buy(Purchase purchase)
{
    ..............
    return "Спасибо за покупку книги";;
}
</pre>
<p>То есть фактически вызов страницы с формой и отправка формы осуществляется одним и тем же действием Buy. В этом случае можно не указывать в 
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
@using(Html.BeginForm("Buy", "Home", FormMethod.Post))
{
    &lt;input type="hidden" value="@ViewBag.BookId" name="BookId" /&gt;
    &lt;p&gt;Введите свое имя: &lt;/p&gt;
    @Html.TextBox("Person", "Введите имя")
    &lt;p&gt;Введите адрес :&lt;/p&gt;
    @Html.TextBox("Address", "Введите адрес")
    &lt;p&gt;&lt;input type="submit" value="Отправить" /&gt;&lt;/p&gt;
}
</pre>
<p>Мы получим тот же результат:</p>
<img src="mvcpics/4.5.png" alt="текстовые поля в asp.net mvc" />
<h4>Html.TextArea</h4>
<p>Хелпер <code>TextArea</code> используется для создания элемента 
<code>&lt;textarea&gt;</code>, который представляет многострочное текстовое поле. Результатом выражения <code>@Html.TextArea("text", "привет &lt;br/&gt; мир")</code></p>
<p>будет следующая html-разметка:</p>
<pre class="brush:xml;">
&lt;textarea cols="20" id="text" name="text" rows="2"&gt;привет &lt;br/&gt; мир
&lt;/textarea&gt;
</pre>
<p>Обратите внимание, что хелпер декодирует помещаемое в него значение,в  том числе и html-теги, (все хелперы декодируют значения моделей 
и значения атрибутов). Другие версии хелпера <code>TextArea</code> позволяют указать число строк и столбцов, определяющих размер текстового поля.</p>
<pre class="brush:xml;">@Html.TextArea("text", "привет &lt;br /&gt; мир", 5, 50, null)
</pre>
<p>Этот хелпер сгенерирует следующую разметку:</p>
<pre class="brush:xml;">&lt;textarea cols="50" id="text" name="text" rows="5"&gt;привет &lt;br /&gt; мир
&lt;/textarea&gt;
</pre>
<h4>Html.Hidden</h4>
<p>В примере с формой мы использовали скрытое поле <code>input type="hidden"</code>, вместо которого могли бы вполне использовать хелпер 
<code>Html.Hidden</code>. Так, следующий вызов хелпера:</p>
<p><code>@Html.Hidden("BookId", "2")</code></p>
<p>сгенерирует разметку:</p>
<pre class="brush:xml;">
&lt;input id="BookId" name="BookId" type="hidden" value="2" /&gt;
</pre>
<p>А при передачи переменной из ViewBag нам надо привести ее к типу string: <code>@Html.Hidden("BookId", @ViewBag.BookId as string)</code></p>
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
<img src="mvcpics/4.6.png" />
<h4>Html.CheckBox</h4>
<p><code>Html.CheckBox</code> может применяться для создания сразу двух элементов. Возьмем, к примеру, следующий код:</p>
<p><code>@Html.CheckBox("Enable", false)</code></p>
<p>Это выражение будет генерировать следующий HTML:</p>
<pre class="brush:xml;">
&lt;input id="Enable" name="Enable" type="checkbox" value="true" /&gt;
&lt;input name="Enable" type="hidden" value="false" /&gt;
</pre>
<p>То есть кроме собственно поля флажка, еще и генерируется скрытое поле. Зачем оно нужно? Дело в том, что браузер 
 посылает значение флажка только тогда, когда флажок выбран или отмечен. А скрытое поле гарантирует, что для элемента 
<code>Enable</code> будет установлено значение даже, если пользователь не отметил флажок.</p>
<h4>Html.Label</h4>
<p>Хелпер <code>Html.Label</code> создает элемент <code>&lt;label/&gt;</code>, а передаваемый в хелпер параметр определяет значение атрибута 
<code>for</code> и одновременно текст на элементе. Перегруженная версия хелпера позволяет определить значение атрибута <code>for</code> и 
текст на метке независимо друг от друга. Например, объявление хелпера <code>Html.Label("Name")</code> создает следующую разметку:</p>
<pre class="brush:xml;">&lt;label for="Name"&gt;Name&lt;/label&gt;</pre>
<p>Элемент <code>label</code> представляет простую метку, предназначенную для прикрепления информации к элементам ввода, например, к текстовым полям. 
Атрибут <code>for</code> элемента <code>label</code> должен содержать ID ассоциированного элемента ввода. Если пользователь нажимает на 
метку, то браузер автоматически передает фокус связанному с этой меткой элементу ввода.</p>
<h4>Html.DropDownList</h4>
<p>Хелпер <code>Html.DropDownList</code> создает выпадающий список, то есть элемент <code>&lt;select /&gt;</code>. 
Для генерации такого списка нужна коллекция объектов <code>SelectListItem</code>, которые представляют элементы списка. 
Объект <code>SelectListItem</code> имеет свойства <code>Text</code> (отображаемый текст), <code>Value</code> (само значение, которое может не 
совпадать с текстом) и <code>Selected</code>. 
Можно создать коллекцию объектов <code>SelectListItem</code> или использовать хелпер <code>SelectList</code>. Этот хелпер просматривает объекты 
<code>IEnumerable</code> и преобразует их в последовательность объектов <code>SelectListItem</code>. 
Так, код <code>@Html.DropDownList("countires", new SelectList(new string[] {"Russia","USA", "Canada","France"}),"Countries")</code> 
генерирует следующую разметку:</p>
<pre class="brush:xml;">
&lt;select id="countires" name="countires"&gt;&lt;option value=""&gt;Countries&lt;/option&gt;
&lt;option&gt;Russia&lt;/option&gt;
&lt;option&gt;USA&lt;/option&gt;
&lt;option&gt;Canada&lt;/option&gt;
&lt;option&gt;France&lt;/option&gt;
&lt;/select&gt;
</pre>
<p>Теперь более сложный пример. Выведем в список коллекцию элементов Book. В контроллере передадим этот список через ViewBag:</p>
<pre class="brush:c#;">
BookContext db = new BookContext();

public ActionResult Index()
{
    SelectList books = new SelectList(db.Books, "Author", "Name");
    ViewBag.Books = books;
    return View();
}
</pre>
<p>Здесь мы создаем объект SelectList, передавая в его конструктор набор значений для списка (db.Books), название свойства модели Book, 
которое будет использоваться в качестве значения (Author), и название свойства модели Book, которое будет использоваться для отображения в списке. 
В данном случае необязательно устанавливать два разных свойства, можно было установить одно и то же свойство и для значения, и для отображения.</p>
<p>Тогда в представлении мы можем так использовать этот SelectList:</p>
<pre class="brush:xml;">
@Html.DropDownList("Author", ViewBag.Books as SelectList)
</pre>
<p>И при рендеринге представления все элементы SelectList добавятся в выпадающий список</p>
<h4>Html.ListBox</h4>
<p>Хелпер <code>Html.ListBox</code>, также как и <code>DropDownList</code>, создает элемент <code>&lt;select /&gt;</code>, 
но при этом делает возможным множественное выделение элементов (то есть для атрибута <code>multiple</code> устанавливается значение <code>multiple</code>). 
Для создания списка, поддерживающего множественное выделение, вместо <code>SelectList</code> можно использовать класс <code>MultiSelectList</code>:</p>
<pre class="brush:xml;">
@Html.ListBox("countires", new MultiSelectList(new string[] {"Россия","США", "Китай","Индия"}))
</pre>
<p>Этот код генерирует следующую разметку:</p>
<pre class="brush:xml;">
&lt;select Length="9" id="countries" multiple="multiple" name="countires"&gt;
&lt;option&gt;Россия&lt;/option&gt;
&lt;option&gt;США&lt;/option&gt;
&lt;option&gt;Китай&lt;/option&gt;
&lt;option&gt;Индия&lt;/option&gt;
&lt;/select&gt;
</pre>
<p>С передачей одиночных значений на сервер все понятно, но как передать множественные значения? Допустим, у нас есть следующая форма:</p>
<pre class="brush:xml;">
@using (Html.BeginForm())
{
	@Html.ListBox("countries", 
			new MultiSelectList(new string[] { "Россия", "США", "Китай", "Индия" }))
    &lt;p&gt;&lt;input type="submit" value="Отправить" /&gt;&lt;/p&gt;
}
</pre>
<p>Тогда метод контроллера мог бы получать эти значения следующим образом:</p>
<pre class="brush:c#;">
[HttpPost]
public string Index(string[] countries)
{
    string result = "";
    foreach (string c in countries)
    {
        result += c;
        result += ";";
    }
    return "Вы выбрали: " + result;
}
</pre>
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


<div class="nav"><p><a href="4.6.php">Назад</a><a href="./">Содержание</a><a href="4.8.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в ASP NET MVC</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/1.1.php">Особенности платформы ASP.NET MVC</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/1.2.php">Начало работы с ASP.NET MVC 4</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Создание первого приложения на ASP.NET MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/2.1.php">Создание проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/2.2.php">Создание контроллера и представлений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/2.3.php">Стилизация приложения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Контроллеры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.1.php">Основы контроллеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.2.php">Методы действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.3.php">Получение входных данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.4.php">Результаты действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.7.php">ViewResult</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.8.php">Переадресация и отправка кодов статуса и ошибок</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.9.php">Отправка файлов в ASP.NET MVC</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.5.php">HttpContext. Контекст запроса. Куки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.6.php">Асинхронные контроллеры и методы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Представления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.1.php">Введение в представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.2.php">Строго типизированные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.3.php">Движок представлений и Razor</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.4.php">Мастер-страницы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.5.php">Частичные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.6.php">HTML-хелперы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.7.php">Работа с формами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.8.php">Строго типизированные хелперы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.1.php">Модели и БД</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.2.php">Подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.3.php">Шаблонные хелперы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.4.php">Редактирование модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.9.php">Добавление и удаление модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.5.php">Шаблоны формирования</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.6.php">Модели со сложной структурой</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.8.php">Работа со сложными моделями</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.10.php">Модели со связью многие-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.11.php">Работа с моделями со связью многие-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.7.php">Передача данных в контроллер</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.2.php">Работа с маршрутами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.3.php">Создание ограничений для маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.4.php">Генерация исходящих адресов URL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.5.php">Области (Areas)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.6.php">Создание собственного обработчика маршрутов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Метаданные и валидация модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.1.php">Аннотации данных для отображения свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.2.php">Основы валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.3.php">Атрибуты валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.4.php">Валидация модели в контроллере</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.5.php">Отображение ошибок валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.6.php">Создание собственной логики валидации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Фильтры в ASP NET MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.1.php">Фильтры. Введение.</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.2.php">Фильтры авторизации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.3.php">Фильтры исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.4.php">Фильтры действий и результатов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.5.php">Глобальные фильтры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.6.php">Дополнительные встроенные фильтры</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Привязка модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.1.php">Введение в привязку моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.2.php">DefaultModelBinder</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.3.php">Явная привязка модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.4.php">Поставщики значений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.5.php">Создание привязчика модели</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. jQuery и AJAX</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.1.php">Использование JavaScript/jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.2.php">Краткий обзор jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.3.php">Введение в AJAX</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.4.php">Ajax-Формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.5.php">Параметры объекта AjaxOptions</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.6.php">AJAX-ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.7.php">Формат JSON</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.8.php">AJAX-запросы с помощью jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.9.php">Работа с jQuery UI</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. Авторизация и аутентификация в MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.1.php">Введение в авторизацию и аутентификацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.2.php">Аутентификация Windows</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.3.php">Аутентификация форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.4.php" >Авторизация в MVC 4 и SimpleMembershipProvider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.5.php" >Настройка использования SimpleMembershipProvider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.6.php" >Использование универсальных провайдеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.7.php" >Web Site Administration Tool</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.8.php" >Создание своих провайдеров членства и ролей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.9.php" >Переопределение провайдера членства</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.10.php" >Переопределение провайдера ролей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.12.php" >Провайдер профилей и его переопределение</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.11.php" >OAuth-аутентификация</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. Web API</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/12.1.php" >Введение в Web API</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/12.2.php" >Создание и тестирование приложения Web API</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/12.3.php" >Создание представления для Web API</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Публикация приложения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.1.php" >Среда публикации и составные части приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.2.php" >Публикация на веб-сервере IIS</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.3.php" >Публикация на внешнем хостинге (на примере somee.com)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.4.php" >Добавление базы данных на хостинг somee.com</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.5.php" >Добавление файлов приложения на somee.com</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Мобильные приложения на ASP.NET MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.1.php" >Разработка мобильных приложений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.2.php" >Метатег Viewport</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.3.php" >Применение CSS в мобильных приложениях</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.4.php" >Создание мобильного приложения на ASP.NET MVC 4</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.5.php" >Режимы отображения DisplayMode</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Бандлы и минификация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/15.1.php" >Введение в бандлы и минификацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/15.2.php" >Создание бандлов. Библиотеки из CDN</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Мультиязычный сайт и локализация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/16.1.php" >Введение в мультиязычные сайты. Ресурсы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/16.2.php" >Логика мультиязычного сайта. Фильтр локализации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. Работа с SignalR</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/17.1.php" >Введение в SignalR</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/17.2.php" >Первое приложение с SignalR</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/17.3.php" >Persistent Connection API</a></span></li>
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