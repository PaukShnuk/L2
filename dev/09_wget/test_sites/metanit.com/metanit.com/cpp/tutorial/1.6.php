<!DOCTYPE html>
<html >
<head>
<title>С++ | Первая программа на MacOS. Компилятор Clang</title>
<meta charset="utf-8" />
<meta name="description" content="Компилятор clang++. Первая программа на языке С++ на Mac OS, установка Xcode Command Line Tools">
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
<h2>Первая программа на MacOS. Компилятор Clang</h2><div class="date">Последнее обновление: 27.02.2022</div>

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

<p>Одним из наиболее популярных компиляторов C++ на MacOS является компилятор <span class="b">Clang</span>. Для работы с clang в MacOS необходимо установить утилиту  
<span class="b">Xcode Command Line Tools</span>. Самой простой способ установить эту утилиту - установить сам XCode, с которым автоматически устанавливается 
и Xcode Command Line Tools.</p>
<p>Итак, определим в файловой системе каталог для исходных файлов с кодом на С++ и создадим в нем новый файл <span class="b">hello.cpp</span> со следующим кодом:</p>
<pre class="brush:cpp;">
#include &lt;iostream&gt;        		// подключаем заголовочный файл iostream

int main()							// определяем функцию main
{									// начало функции
	std::cout &lt;&lt; "Hello Metanit.com!";	// выводим строку на консоль
	return 0;						// выходим из функции
}									// конец функции
</pre>
<p>И это тот же код, что был в случае с Windows и Linux, потому что программы на С++ на уровне исходного кода в большей степени обладают переносимостью.</p>
<p>Для вывода строки на консоль необходимо подключить нужный функционал. Для этого в начале файла идет строка</p>
<pre class="brush:cpp;">#include &lt;iostream&gt;</pre> 
<p>Данная строка представляет директиву препроцессора, которая позволяет подключить библиотеку iostream. Эта библиотека нужна для вывода строки на консоль.</p>
<p>Далее идет определение функции <span class="b">main</span>. Функция main должна присутствовать в любой программе на С++, с нее 
собственно и начинается выполнение приложения.</p>
<p>Функция main состоит из четырех элементов:</p>
<ul>
<li><p><span class="b">Тип возвращаемого значения</span>. В данном случае это тип <span class="b">int</span>. Этот тип указывает, что функция должна 
возвращать целое число.</p></li>
<li><p><span class="b">Имя функции</span>. В данном случае функция называется main.</p></li>
<li><p><span class="b">Список параметров</span>. После имени функции в скобках идет список параметров. Но в данном случае скобки пустые, то есть 
функция main не принимает параметров.</p></li>
<li><p><span class="b">Тело функции</span>. После списка параметров в фигурных скобках идет тело функции. Здесь и определяются собственно те 
действия, которые выполняет функция main.</p>
<pre class="brush:cpp;">
{
	std::cout &lt;&lt; "Hello Metanit.com!\n";
	return 0;
}</pre></li>
</ul>
<p>В теле функции происходит вывод строки на консоль. Для обращения к консоли используется стандартный поток вывода <span class="b">std::cout</span>. 
С помощью оператора <span class="b">&lt;&lt;</span> в этот поток (в данном случае фактически на консоль) передается строка символов, которую надо вывести на консоль, то есть "Hello World!". 
В конец строки добавлена специальная управляющая последовательность "\n", которая позволит после вывода текста перевести курсор на новую строку.</p>
<p>В функции осуществляем выход из функции с помощью оператора <span class="b">return</span>. Так как функция должна возвращать целое число, то после return указывается число 0. 
Ноль используется в качестве индикатора успешного завершения программы.</p>
<p>После каждой инструкции в языке C++ ставятся точка с запятой.</p>
<img src="pics/macos1.png" alt="Первая программа на C++ на MacOS" />
<p>Перейдем к терминалу и вначале с помощью команды cd перейдем к каталогу, где расположен файл с исходным кодом.</p>
<p>Далее для компиляции программы введем команду:</p>
<div class="console"><pre class="consoletext">clang++ hello.cpp -o hello</pre></div>
<p>Вначале идет указание компилятора - <span class="b">clang++</span>. После через пробел указывается имя файла с исходным кодом, который будет компилировать компилятор, то есть, в данном случае, 
файл <span class="b">hello.cpp</span></p>
<p>Кроме имени файла с исходным кодом компилятору передается параметр <code> -o hello</code>. Он указывает, что мы хотим скомпилировать файл по имени hello. 
Если этот параметр не передать, то будет создан файл с именем по умолчанию - a.out.</p>
<p>В итоге после выполнения выше приведенной команды в папке с файлом hello.cpp появится скомпилированный файл, который будет называться 
<span class="b">hello</span>. И мы сможем его запустить с помощью следующей команды:</p>
<div class="console"><pre class="consoletext">./hello</pre></div>
<p>И на консоль будет выведена строка "Hello Metanit.com!".</p>
<img src="pics/macos2.png" alt="Компиляция программы на C++ в Clang на MacOS" />
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


<div class="nav"><p><a href="./1.3.php">Назад</a><a href="./">Содержание</a><a href="./1.4.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в С++</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.1.php">Язык программирования С++</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.2.php">Первая программа на Windows. Компилятор g++</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.3.php">Первая программа на Linux. Компилятор g++</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.6.php">Первая программа на MacOS. Компилятор Clang</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.4.php">Первая программа в Visual Studio</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.7.php">Первая программа в Qt Creator</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.5.php">Локализация и кириллица в консоли</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы языка программирования C++</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.1.php">Структура программы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.2.php">Переменные</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.3.php">Типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.4.php">Статическая типизация и преобразования типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.5.php">Константы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.6.php">Арифметические операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.7.php">Условные выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.8.php">Побитовые операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.9.php">Операции присваивания</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.10.php">Ввод и вывод в консоли</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.11.php">Пространства имен и using</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.12.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.13.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.14.php">Ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.15.php">Массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.16.php">Строки</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Функции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.1.php">Определение и объявление функций</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.2.php">Параметры функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.3.php">Передача аргументов по значению и по ссылке</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.4.php">Константные параметры</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.5.php">Оператор return и возвращение результата</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.6.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.7.php">Область видимости объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.8.php">Разделение программы на файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.9.php">Внешние объекты</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Указатели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.1.php">Что такое указатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.2.php">Операции с указателями</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.3.php">Арифметика указателей</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.4.php">Константы и указатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.5.php">Указатели и массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.6.php">Указатели в параметрах функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.7.php">Массивы в параметрах функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.8.php">Указатели на функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.9.php">Указатели на функции как параметры</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.10.php">Указатель на функцию как возвращаемое значение</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.11.php">Динамические объекты</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.12.php">Динамические массивы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.1.php">Определение классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.2.php">Конструкторы и инициализация объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.3.php">Объявление и определение функций класса</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.4.php">Управление доступом. Инкапсуляция</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.5.php">Дружественные функции и классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.6.php">Ключевое слово this</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.7.php">Статические члены класса</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.8.php">Структуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.9.php">Перечисления</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.10.php">Наследование</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.11.php">Виртуальные функции и их переопределение</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.12.php">Абстрактные классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.13.php">Деструктор</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.14.php">Перегрузка операторов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.15.php">Операторы преобразования типов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Исключения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/6.1.php">Обработка исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/6.2.php">Тип exception</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/6.3.php">Типы исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Последовательные контейнеры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.1.php">Типы последовательных контейнеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.2.php">Вектор</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.3.php">Итераторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.4.php">Операции с векторами</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.5.php">Array</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.6.php">List</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.7.php">Forward_list</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.8.php">Deque</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Потоки и система ввода-вывода</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/8.1.php">Базовые типы для работы с потоками</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/8.2.php">Файловые потоки. Открытие и закрытие</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/8.3.php">Чтение и запись текстовых файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/8.4.php">Переопределение операторов ввода и вывода</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Шаблоны</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/9.1.php">Шаблон класса</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/9.2.php">Шаблоны функций</a></span></li>
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
	
	$("li:contains('Глава 1.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 1.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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