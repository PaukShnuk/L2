<!DOCTYPE html>
<html >
<head>
<title>С | Компилятор GCC. Первая программа на Windows</title>
<meta charset="utf-8" />
<meta name="description" content="Компилятор GCC. Первая программа на языке Си на Windows, набор Mingw-w64 и его установка">
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
<h2>Компилятор GCC. Первая программа на Windows</h2><div class="date">Последнее обновление: 18.05.2017</div>

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

<p>Для создания программ на Си необходим текстовый редактор, с помощью которого можно набрать исходный код. И также необходим компилятор, 
который принимает файл с исходным кодом на Си и компилирует его в исполняемый файл.</p>
<p>В качестве компилятора мы будем использовать наиболее популярный на сегодня компилятор gcc, который доступен для разных платформ. Более подобному информацию о 
GCC можно получить на официальном сайте проекта <a href="https://gcc.gnu.org/" rel="nofollow">https://gcc.gnu.org/</a>.</p>
<p>Набор компиляторов GCC распространяется в различных версиях. Одной из наиболее популярных версий является пакет средств для разработки от 
некоммерческого проекта <a href="https://mingw-w64.org/doku.php" rel="nofollow">Mingw-w64</a>. Для установки соответствующего пакета компиляторов 
загрузим файл установщика по ссылке <a href="https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Personal%20Builds/mingw-builds/installer/mingw-w64-install.exe/download" rel="nofollow">https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Personal%20Builds/mingw-builds/installer/mingw-w64-install.exe/download</a></p>
<p>При запуске установщика откроется следующее окно:</p>
<img src="./pics/mingw1.png" alt="Установка пакета mingw-w64 на Windows" />
<p>Нажмем на кнопку <span class="b">Next &gt;</span> и перейдем к следующему шагу:</p>
<img src="./pics/mingw2.png" alt="Настройка установки mingw-w64 на Windows" />
<p>Если версия ОС 64-битная, то в поле <code>Architecture</code> следует выбрать пункт <span class="b">x86_64</span>. Остальные настройки 
оставим по умолчанию и нажмем на кнопку <span class="b">Next &gt;</span>. На следующем шаге укажем путь, по которому будет устанавливаться пакет:</p>
<img src="./pics/mingw3.png" alt="Настройка mingw-w64 на Windows 10" />
<p>Можно оставить настройки по умолчанию. И после перехода к следующему шагу собственно начнется установка.</p>
<p>После завершения установки на жестком диске по пути, которое было выбрано для установки, появятся все необходимые файлы компиляторов. 
В моем случае они находятся по пути <span class="ii">C:\Program Files (x86)\mingw-w64\i686-7.1.0-posix-dwarf-rt_v5-rev0\mingw32\bin</span>:</p>
<img src="./pics/mingw4.png" alt="Компилятор GCC на Windows" />
<p>В зависимости от версии пакета точный путь может отличаться, но в любом случае все файлы будут располагаться по тому пути, который был указан на шаге установки.</p>
<p>В частности, файл <span class="b">gcc.exe</span> как раз и будет представлять компилятор для языка Си.</p>
<p>Далее для упрощения запуска компилятора мы  можем добавить путь к нему в Переменные среды. Для этого перейдем к окну 
<span class="b">Система -&gt; Дополнительные параметры системы -&gt; Переменные среды</span>:</p>
<img src="./pics/mingw7.png" alt="Добавление GCC в переменные среды на Windows" />
<p>И добавим путь к компилятору:</p>
<img src="./pics/mingw5.png" />
<p>Итак, компилятор установлен, и теперь мы можем написать первую программу. Для этого потребуется любой текстовый редактор для набора исходного кода. 
Можно взять распространенный редактор Notepad++ или даже обычный встроенный Блокнот.</p>
<p>Итак, создадим на жестком диске папку для исходных файлов. А в этой папке создадим новый файл, который назовем <span class="b">hello.c</span>.</p>
<img src="./pics/mingw8.png" alt="Первая программа на Си" />
<p>В моем случае файл hello.c находится в папке C:\c.</p>
<p>Теперь определим в файле hello.c простейший код, который будет выводить строку на консоль:</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;		// подключаем заголовочный файл stdio.h
int main(void)					// определяем функцию main
{								// начало функции
	printf("Hello World! \n");	// выводим строку на консоль
	return 0;					// выходим из функции
}								// конец функции
</pre>
<p>Для вывода строки на консоль необходимо подключить нужный функционал. Для этого в начале файла идет строка</p>
<pre class="brush:c;">#include &lt;stdio.h&gt;</pre>
<p>Директива include подключает заголовочный файл stdio.h, который содержит определение функции printf, которая нужна для вывода строки на консоль.</p>
<p>Далее идет определение функции <span class="b">int main(void)</span>. Функция main должна присутствовать в любой программе на Си, с нее собственно и начинается 
выполнение приложения.</p>
<p>Ключевое слово <span class="b">int</span> в определении функции <code>int main(void)</code> говорит о том, что функция возвращает целое число. 
А слово void в скобках указывает, что функция не принимает параметров.</p>
<p> Тело функции main заключено в фигурные скобки {}. В теле функции происходит вывод строки на консоль с помощью функции printf, в которую передается выводимая строка "Hello world!".</p>
<p>В конце осуществляем выход из функции с помощью оператора <span class="b">return</span>. Так как функция должна возвращать целое число, то после return указывается число 0. 
Ноль используется в качестве индикатора успешного завершения программы.</p>
<p>После каждого действия в функции ставятся точка с запятой.</p>
<img src="./pics/mingw9.png" alt="Язык программирования Си в Notepad++" />
<p>Теперь скомпилируем этот файл. Для этого откроем командную строку Windows и вначале с помощью команды cd перейдем к папке с исходным файлом:</p>
<div class="console"><pre class="consoletext">cd C:\c</pre></div>
<p>Чтобы скомпилировать исходный код, необходимо компилятору gcc передать в качестве параметра файл hello.c:</p>
<div class="console"><pre class="consoletext">gcc hello.c</pre></div>
<p>После этого будет скомпилирован исполняемый файл, который в Windows по умолчанию называется a.exe. И мы можем обратиться к этому файлу, и в этом случае консоль выведет 
строку "Hello World!", собственно как и прописано в коде.</p>
<img src="./pics/mingw6.png" alt="Запуск компилятора GCC на Windows" />
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


<div class="nav"><p><a href="1.1.php">Назад</a><a href="./">Содержание</a><a href="1.3.php">Вперед</a></p></div></div>
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