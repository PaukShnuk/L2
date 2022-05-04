<!DOCTYPE html>
<html >
<head>
<title>Краткий обзор jQuery в ASP.NET MVC</title>
<meta charset="utf-8" />
<meta name="description" content="Краткий обзор использования jQuery в ASP.NET MVC 4">
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
<h2>Краткий обзор jQuery</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/aspnet5/">Руководство по ASP.NET Core</a></p><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Библиотека jQuery предназначена прежде всего для удобного поиска и манипулирования элементами на веб-странице. При нахождении определенного элемента 
с помощью jQuery можно повесить на него обработчики событий, анимировать, скрыть или, наоборот, отобразить, создать для элемента интерактивное 
взаимодействие с пользователем, изменить его стили и т.д. И даже если вы не работали раньше с jQuery, ее освоение не составит особых трудностей. 
Для более подробного ознакомления с данной библиотекой можно обратиться к руководству <a href="//metanit.com/web/jquery/">Изучаем jQuery</a>. 
Здесь же я представлю краткий обзор возможностей библиотеки.</p>
<h3>Функция jQuery</h3>
<p>Функция <code>jQuery</code> позволяет использовать всю мощь библиотеки jQuery. Данная функция (<code>jQuery</code>) в качестве псевдонима 
имеет знак <code>$</code> (так как символ <code>$</code> легко набрать на клавиатуре, и он представляет действительное имя функции, которое 
можно употреблять в JavaScript). Поэтому следующие записи функции <code>jQuery</code> будут идентичны:</p>
<pre class="brush:js;">
jQuery(document).ready(function(){
  // здесь код анонимной функции
});
</pre>
<pre class="brush:js;">
$(function(){
  // здесь код анонимной функции
});
</pre>
<pre class="brush:js;">
$(document).ready(function(){
  // здесь код анонимной функции
});
</pre>
<p>Все три вышеописанных случая идентичны и срабатывают сразу после загрузки веб-страницы. Весь остальной функционал помещается внутрь 
функции <code>jQuery</code>. И поскольку данная функция осуществляет выборку и модификацию элементов, то для нее иногда необходимо, чтобы вся веб-страница была 
уже загружена. Поэтому скрипт данной функции или ссылку на файл скрипта помещают обычно в самый низ веб-страницы.</p>
<h3>Селекторы jQuery</h3>
<p>Для выборки из структуры страницы нужных элементов используются <span class="ii">селекторы</span>.</p>
<h5>Основные селекторы jQuery</h5>
<table class="tab">
<tr class="tabhead"><td><p>Шаблон селектора</p></td><td><p>Значение</p></td><td><p>Пример</p></td></tr>
<tr><td><p>$("Element")</p></td><td><p>Выбирает все элементы с данным именем тега</p></td>
<td><p><code>$("p")</code> выбирает все теги <code>p</code>. <br><code>$("ul")</code> выбирает все элементы <code>ul</code></p></td></tr>
<tr><td><p>$("#id")</p></td><td><p>Выбирает элемент с определенным значением id</p></td>
<td><p>Так, в следующем коде:</p>
<pre>
<span class="bb">&lt;div id="box1"&gt;&lt;/div&gt;</span>
&lt;div id="box2"&gt;&lt;/div&gt;</pre>
<p>селектор <code>$("#box1")</code> выбирает элемент, помеченный жирным</p></td></tr>
<tr><td><p>$(".className")</p></td><td><p>Выбирает все элементы с определенным значением атрибута class</p></td>
<td><p>Допустим, у нас следующий код:</p>
<pre><span class="bb">&lt;div class="apple"&gt;&lt;/div&gt;
&lt;div class="apple"&gt;&lt;/div&gt;</span>
&lt;div class="orange"&gt;&lt;/div&gt;
&lt;div class="banana"&gt;&lt;/div&gt;</pre>
<p>то селектор <code>$(".apple")</code> выбирает все элементы, помеченные жирным</p></td></tr>
<tr><td><p>$("selector1,selector2,selectorN")</p></td><td><p>Выбирает элементы, которые соответствуют данным селекторам</p></td>
<td><p>Если у нас следующий код:</p>
<pre><span class="bb">&lt;div class="apple"&gt;&lt;/div&gt;
&lt;div class="apple"&gt;&lt;/div&gt;
&lt;div class="orange"&gt;&lt;/div&gt;</span>
&lt;div class="banana"&gt;&lt;/div&gt;</pre>
<p> то селектор <code>$(".apple, .orange")</code> выберет элементы, выделенные жирным</p></td></tr>
</table>
<p>Например:</p>
<pre class="brush:js;">
$(function () {
    $(".results").css("top", "20px");
});
</pre>
<p>Сначала мы получаем элемент, у которого class имеет значение <span class="bb">results</span> (<code>&lt;div class="results"&gt;&lt;/div&gt;</code>), а потом с помощью функции 
<code>css</code> устанавливаем определенное значение для его свойства <code>top</code>. 
Причем если у нас на странице несколько элементов, у которых <code>class="results"</code>, то селектор вернет весь набор из этих элементов. И к каждому 
из элементов данного набора будет применено преобразование.</p>
<p>Выше в таблице показан лишь небольшой базовый список селекторов. Полный же список селекторов вы можете найти на сайте 
<a href="//metanit.com/web/html5/5.2.php">Селекторы CSS</a></p>
<h3>Фильтры jQuery</h3>
<p>В дополнение к селекторам применяются фильтры. Можно выделить следующий набор базовых фильтров:</p>
<table class="tab">
<tr class="tabhead"><td><p>Фильтр</p></td><td><p>Значение</p></td></tr>
<tr><td><p>:eq(n)</p></td><td><p>Выбирает n-й элемент выборки (нумерация начинается с нуля)</p></td></tr>
<tr><td><p>:even</p></td><td><p>Выбирает элементы с четными номерами</p></td></tr>
<tr><td><p>:odd</p></td><td><p>Выбирает элементы с нечетными номерами</p></td></tr>
<tr><td><p>:first</p></td><td><p>Выбирает первый элемент выборки</p></td></tr>
<tr><td><p>:last</p></td><td><p>Выбирает последний элемент выборки</p></td></tr>
<tr><td><p>:gt(n)</p></td><td><p>Выбирает все элементы с номером, большим n</p></td></tr>
<tr><td><p>:lt(n)</p></td><td><p>Выбирает все элементы с номером, меньшим n</p></td></tr>
<tr><td><p>:header</p></td><td><p>Выбирает все заголовки (h1, h2, h3)</p></td></tr>
<tr><td><p>:not(селектор)</p></td><td><p>Выбирает все элементы, которые не соответствуют селектору, указанному в скобках</p></td></tr>
</table>
<p>Например, если у нас на странице несколько элементов, у которых <code>class="results"</code>, а нам надо выбрать только первый, то мы можем 
применить следующие выражения: <code>$(".results:first")</code> или <code>$(".results:eq(0)")</code></p>
<p>Специальный род фильтров - фильтры контента обеспечивают доступ к элементам, имеющим определенное содержимое:</p>
<table class="tab">
<tr class="tabhead"><td><p>Фильтр</p></td><td><p>Значение</p></td></tr>
<tr><td><p>:contains('content')</p></td><td><p>Получает все элементы, которые содержат <code>content</code></p></td></tr>
<tr><td><p>:has('селектор')</p></td><td><p>Получает все элементы, которые содержат хотя бы один дочерний элемент, соответствующий селектору</p></td></tr>
<tr><td><p>:empty</p></td><td><p>Получает все элементы, которые не имеют дочерних элементов</p></td></tr>
<tr><td><p>:first-child</p></td><td><p>Получает все элементы, которые являются первыми дочерними элементами в своих родителях</p></td></tr>
<tr><td><p>:last-child</p></td><td><p>Получает все элементы, которые являются последними дочерними элементами в своих родителях</p></td></tr>
<tr><td><p>:nth-child(n)</p></td><td><p>Получает все элементы, которые являются n-ными элементами в своих родителях (нумерация идет с единицы)</p></td></tr>
<tr><td><p>:only-child</p></td><td><p>Получает все элементы, которые являются единственными дочерними элементами в своих родителях</p></td></tr>
<tr><td><p>:parent</p></td><td><p>Получает все элементы, которые имеют, как минимум, один дочерний элемент</p></td></tr>
</table>
<p>Например, если мы хотим получить все элементы, содержащие текст <code>asp.net mvc</code>, мы можем применить следующее выражение: <code>$(':contains("asp.net mvc")')</code></p>
<p>И завершая обзор фильтров, следует упомянуть о фильтрах форм, которые позволяют получить определенные элементы html-форм:</p>
<table class="tab">
<tr class="tabhead"><td><p>Фильтр</p></td><td><p>Значение</p></td></tr>
<tr><td><p>button</p></td><td><p>Получает все элементы <code>button</code> и элементы <code>input</code> с типом <code>button</code></p></td></tr>
<tr><td><p>:checkbox</p></td><td><p>Получает все элементы <code>checkbox</code></p></td></tr>
<tr><td><p>:checked</p></td><td><p>Получает все отмеченные элементы <code>checkbox</code> и <code>radio</code></p></td></tr>
<tr><td><p>:disabled</p></td><td><p>Получает все элементы, которые отключены</p></td></tr>
<tr><td><p>:enabled</p></td><td><p>Получает все элементы, которые включены</p></td></tr>
<tr><td><p>:input</p></td><td><p>Получает все элементы <code>input</code></p></td></tr>
<tr><td><p>:password</p></td><td><p>Получает все элементы <code>password</code></p></td></tr>
<tr><td><p>:radio</p></td><td><p>Получает все элементы <code>radio</code></p></td></tr>
<tr><td><p>:reset</p></td><td><p>Получает все элементы <code>reset</code></p></td></tr>
<tr><td><p>:selected</p></td><td><p>Получает все отмеченные элементы <code>option</code></p></td></tr>
<tr><td><p>:submit</p></td><td><p>Получает все элементы <code>input</code> с типом <code>submit</code></p></td></tr>
<tr><td><p>:text</p></td><td><p>Получает все элементы <code>input</code> с типом <code>text</code></p></td></tr>
</table>
<p>Мы можем комбинировать в одном выражении несколько селекторов и фильтров: <code>$('.results:odd:has('img')')</code>. В данном случае 
мы выбираем все нечетные элементы с <code>class="results"</code>, которые содержат элементы <code>img</code>, то есть изображения.</p>
<h3>События jQuery</h3>
<p>jQuery предоставляет специальные методы для распространенных событий, как например, <code>click</code> или <code>submit</code>. Мы можем повесить свои обработчики 
для событий <code>mouseover</code> (наведение мыши) или <code>keydown</code>(нажатие клавиатуры) на любой элемент веб-страницы.</p>
<p>Например, обработчик нажатия мыши на элемент с <code>id="bg"</code> мог бы выглядеть следующим образом.</p>
<pre class="brush:js;">
$("#bg").mousedown (function (e) {}});
</pre>
<p>Или для примера обработаем нажатие клавиши:</p>
<pre class="brush:js;">
$(document).keydown(function(e){
	// если нажата клавиша вверх
	 if (e.which==38) 
	 {
		// поднимаем некоторый элемент на 5 пикселей вверх
		var top = parseInt($("#paddleB").css("top"));
		$("#paddleB").css("top", top-5);  
	}
});
</pre>
<h3>Методы jQuery</h3>
<p>Как говорилось выше, jQuery выполняет две основные задачи - поиск элементов и их изменение. Если для поиска предназначены селекторы и фильтры, то 
для манипуляции над элементами используются методы. Эти методы позволяют изменять внешний вид элемента, анимировать его, перемещать в структуре 
элементов DOM. Это методы довольно многочисленны, поэтому рассмотрим лишь вкратце:</p>
<table class="tab">
<tr class="tabhead"><td><p>Метод</p></td><td><p>Описание</p></td></tr>
<tr><td><p>addClass('someClass')</p></td><td><p>Добавляет для выбранного элемента класс <code>someClass</code></p></td></tr>
<tr><td><p>removeClass('someClass')</p></td><td><p>Удаляет для выбранного элемента класс <code>someClass</code></p></td></tr>
<tr><td><p>toggleClass('someClass')</p></td><td><p>Переключает для выбранного элемента класс <code>someClass</code> - если его нет, он добавляется, а если он есть - то удаляется</p></td></tr>
<tr><td><p>css('свойство', 'значение')</p></td><td><p>Устанавливает для указанного свойства выбранного элемента указанное значение (<code>$("#paddleB").css("top",25);</code>)</p></td></tr>
<tr><td><p>append('новый элемент')</p></td><td><p>Вставляет внутрь выбранного элемента новый элемент в качестве последнего дочернего (<code>$("#results").append('&lt;li&gt;Новый элемент списка&lt;/li&gt;');</code>)</p></td></tr>
<tr><td><p>prepend('новый элемент')</p></td><td><p>Вставляет внутрь выбраного элемента новый элемент в качестве первого дочернего</p></td></tr>
<tr><td><p>empty()</p></td><td><p>Удаляет все дочерние элементы у выбранного элемента</p></td></tr>
<tr><td><p>remove()</p></td><td><p>Удаляет элемент из структуры элементов DOM</p></td></tr>
<tr><td><p>attr('атрибут','значение')</p></td><td><p>Устанавливает для атрибута новое значение</p></td></tr>
<tr><td><p>removeAttr('атрибут')</p></td><td><p>Удаляет атрибут у выбранных элементов</p></td></tr>
<tr><td><p>children()</p></td><td><p>Получает все дочерние элементы у выбранных элементов</p></td></tr>
<tr><td><p>parent()</p></td><td><p>Получает все родительские элементы у выбранных элементов</p></td></tr>
<tr><td><p>parent()</p></td><td><p>Получает все родительские элементы у выбранных элементов</p></td></tr>
<tr><td><p>hide()</p></td><td><p>Скрывает выбранные элементы</p></td></tr>
<tr><td><p>show()</p></td><td><p>Отображает выбранные элементы</p></td></tr>
<tr><td><p>toggle()</p></td><td><p>Скрывает видимые элементы и отображает невидимые</p></td></tr>
<tr><td><p>animate()</p></td><td><p>Анимирует элемент</p></td></tr>
</table>
<p>Например, стандартный прием, когда по наведению курсора мыши на изображение, оно увеличивается в размерах, а после отвода курсора - уменьшается:</p>
<pre class="brush:js;">
$(function () {
    $("img").mouseover(function () {
        $(this).animate({ height: '+=20', width: '+=20' });
    });
	$("img").mouseout(function () {
        $(this).animate({ height: '-=20', width: '-=20' });
    });
});
</pre>
<p>Сначала при помощи селектора мы выбираем все элементы <code>img</code>, затем вешаем на них обработчик наведения курсора <code>mouseover</code>. 
Обработчик события наведения мыши в качестве аргумента принимает анонимную функцию, которая срабатывает при наведении курсора.</p>
<p>В этой функции с помощью ключевого слова <code>this</code> мы получаем элемент, на который мы наводим курсор, а затем с помощью функции 
<code>animate</code> мы устанавливаем свойства, которые будут анимироваться при наведении курсора.</p>
<p>Подобным образом работаем второй обработчик <code>mouseout</code>. В итоге при наведении курсора изображение увеличится, а при потере изображением фокуса 
курсора, оно вернется в первоначальные размеры.</p>
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


<div class="nav"><p><a href="10.1.php">Назад</a><a href="./">Содержание</a><a href="10.3.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 10.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 10.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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