<!DOCTYPE html>
<html >
<head>
<title>С | Объединения</title>
<meta charset="utf-8" />
<meta name="description" content="Объединения в языке программирования Си, ключевое слово union, варианты определения объединений и их использование">
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
<h2>Объединения</h2><div class="date">Последнее обновление: 03.06.2017</div>

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

<p>На структуры во многом похожи объединения. Объединения также хранят набор элементов, но в отличие от структуры все элементы объединения имеют нулевое смещение. 
А это значит, что разные элементы занимают в памяти один и тот же участок.</p>
<p>Для определения объединений применяется ключевое слово <span class="b">union</span> и следующий формальный синтаксис:</p>
<pre class="brush:c;">
union имя_объединения
{
	определения_элементов
};
</pre>
<p>Фактически объединение определяется точно также, как и структура, только вместо слова <span class="b">struct</span> используется ключевое слово 
<span class="b">union</span>.</p>
<p>Так, создадим простейшее объединение:</p>
<pre class="brush:c;">
union code
{
	int digit;
	char letter;
};
</pre>
<p>Объединение code хранит в одном и том же участки памяти объект int и объект char. Конкретный размер выделенной памяти будет зависеть от 
системы и реализации, но в общем случае это будет выглядеть примерно следующим образом:</p>
<img src="./pics/6.1.png" alt="Объединение union в языке программирования Си" />
<p>В этом случае объединение сode на большинстве платформ будет занимать 4 байта. Длина элементов, как здесь, может быть разной, и 
в этом случае размер объединения вычисляется по наибольшему элементу.</p>
<p>После определения объединения мы можем создать его переменную и присвоить ей какое-либо значение:</p>
<pre class="brush:c;">union code id;</pre>
<p>При определении переменной объединения мы ее можем сразу инициализировать, но стоит учитывать, что инициализировать мы можем только первый элемент объединения. 
В данном случае это элемент digit типа int, поэтому мы можем передать ему только целое число:</p>
<pre class="brush:c;">union code id = {120};</pre>
<p>Для обращения к элементам объединения, как и в случае со структурами, можно использовать операцию "точка":</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;

typedef union code
{
	int digit;
	char letter;
};

int main(void)
{
	union code id;
	id.digit = 120;
	printf("%d - %c \n", id.digit, id.letter);	// 120 - x
	printf("%d - %d \n", id.digit, id.letter);	// 120 - 120
	
	id.letter = 87;
	printf("%d - %c \n", id.digit, id.letter);	// 87 - W
	
	return 0;
}
</pre>
<p>Стоит отметить, что, так как оба элемента занимают одну и ту же память, то изменение одного из них приведет к изменению другого. Так так участок памяти один, и данные фактически одни и те же, 
только при обращении к <code>id.digit</code> данные интерпретируются как объект int, а при обращении к <code>id.letter</code> - как объект char.</p>
<p>С помощью оператора <span class="b">typedef</span> можно задать псевдоним для объединения:</p>
<pre class="brush:c;">
typedef union code
{
	int digit;
	char letter;
} secret_code;
</pre>
<p>Здесь псевдонимом является идентификатор <code>secret_code</code>, поэтому следующие определения переменных будут аналогичны:</p>
<pre class="brush:c;">
union code id = {22};
secret_code id2 = {22};
</pre>
<p>Также можно определять анонимные объединения:</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;

union
{
	int digit;
	char letter;
} id1, id2;		// переменные id1, id2

int main(void)
{
	id1.digit = 122;
	id2.digit = 84;
	printf("%d - %c \n", id1.digit, id1.letter);
	printf("%d - %c \n", id2.digit, id2.letter);
	
	return 0;
}
</pre>
<p>И как и со структурами, можно определять указатели на объединения. Для обращения к элементам объединения по указателю применяется тот же синтаксис, что и в случае со 
структурами:</p>
<pre class="brush:c;">
(* указатель_на_объединение).имя_элемента
указатель_на_объединение-&gt;имя_элемента
</pre>
<p>Используем указатели на объединения:</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;

union code
{
	int digit;
	char letter;
};

int main(void)
{
	union code id = {45};
	union code * p_id = &id;
	printf("%d \n", p_id-&gt;digit);	// 45
	p_id-&gt;digit= 89;
	printf("%d \n", id.digit);		// 89
	
	return 0;
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


<div class="nav"><p><a href="6.5.php">Назад</a><a href="./">Содержание</a><a href="6.7.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в С</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.1.php">Язык программирования С</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.2.php">Компилятор GCC. Первая программа на Windows</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.3.php">GCC. Первая программа на Linux</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.6.php">Clang. Первая программа на MacOS</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.4.php">Первая программа в Visual Studio</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.7.php">Первая программа в Qt Creator</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.5.php">Локализация и кириллица в консоли</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы языка Си</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.1.php">Структура программы на Си</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.2.php">Переменные</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.3.php">Типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.4.php">Консольный вывод. Функция printf</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.5.php">Константы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.6.php">Арифметические операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.7.php">Логические операции и операции отношения</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.8.php">Поразрядные операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.9.php">Операции присваивания</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.10.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.11.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.12.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.13.php">Введение в массивы и строки</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.14.php">Ввод в консоли. Функция scanf</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Препроцессор</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/3.1.php">Директива #include. Включение файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/3.2.php">Директива #define</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/3.3.php">Макросы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/3.4.php">Условная компиляция</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Функции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/4.1.php">Определение и описание функций</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/4.2.php">Передача параметров в функцию</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/4.3.php">Возвращение результата из функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/4.4.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/4.5.php">Область видимости переменных</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/4.6.php">Внешние объекты</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Указатели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.1.php">Что такое указатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.2.php">Операции с указателями</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.3.php">Арифметика указателей</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.4.php">Константы и указатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.5.php">Указатели и массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.6.php">Массивы указателей, строки и многоуровневая адресация</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.7.php">Указатели в параметрах функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.8.php">Динамическая память</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.9.php">Указатель как результат функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.10.php">Управление динамической памятью</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.11.php">Указатели на функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.12.php">Указатели на функции как параметры и результаты функций</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.13.php">Функции с переменным количеством параметров</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Структуры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.1.php">Определение структур</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.2.php">Структуры как элементы структур</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.3.php">Указатели на структуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.4.php">Массивы структур</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.5.php">Структуры и функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.6.php">Объединения</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.7.php">Битовые поля</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Ввод-вывод и работа с файлами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.1.php">Открытие и закрытие потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.2.php">Чтение и запись бинарных файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.3.php">Чтение и запись структур в файл</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.4.php">Чтение и запись текстовых файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.5.php">Форматируемый ввод-вывод</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.6.php">Позиционирование в потоке</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.7.php">Консольный ввод-вывод</a></span></li>
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