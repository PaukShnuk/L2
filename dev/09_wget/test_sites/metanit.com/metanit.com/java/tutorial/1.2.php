<!DOCTYPE html>
<html >
<head>
<title>Java | Первая программа</title>
<meta charset="utf-8" />
<meta name="description" content="Начало работы с языком Java. Создание первой программы на Java с помощью командной строки. Сущность компиляции и выполнения программы. Объявление идентификаторов">
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
<h2>Первая программа на Java</h2><div class="date">Последнее обновление: 18.10.2021</div>

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

<img src="https://metanit.com/metanit-java.jpg" id="jma" style="cursor:pointer;" />
</div>

<p>Итак, после установки JDK создадим первое приложение на языке Java. Что необходимо для создания программы на Java? Прежде всего нам надо написать код программы, и для этого нужен текстовый редактор. 
Можно использовать любой текстовый редактор, например, Notepad++.</p>
<p>И чтобы превратить код программы в исполняемое приложение необходим компилятор. После установки JDK все файлы по умолчанию помещаются в каталог <span class="ii">C:\Program Files\Java\jdk-[номер_версии]</span> (при использовании ОС Windows). 
В моем случае это каталог <span class="ii">C:\Program Files\Java\jdk-17</span>. Если мы откроем в нем подкаталог <span class="ii">bin</span>, то мы сможем увидеть в нем ряд утилит. 
Нас прежде всего интересует утилита компилятора <span class="b">javac</span>. Чтобы скомпилировать класс программы, нам надо передать ее код этому компилятору.</p>
<img src="./pics/1.21.png" alt="Компилятор javac в Java" />
<p>Также следует отметить другую утилиту из этой папки - java.exe, которая позволяет запускать скомпилированную программу.</p>
<p>Итак, создадим на жестком диске какой-нибудь каталог, в котором будут располагаться файлы с исходным кодом на языке Java. Допустим, это будет каталог 
<span class="b">C:/Java</span>. Затем создадим в этом каталоге текстовый файл, который переименуем в <span class="b">Program.java</span>. 
Откроем этот файл в любом текстовом редакторе и наберем в нем следующую программу:</p>
<pre class="brush:java;">
public class Program{ 
     
    public static void main (String args[]){
         
        System.out.println("Hello Java!");
    }
}
</pre>
<p>Java является объектно-ориентированным языком, поэтому вся программа представляется в виде набора взаимодействующих классов. 
В данном случае определен один класс Program.</p>
<p>При определении класса вначале идет модификатор доступа <span class="b">public</span>, который указывает, что данный класс будет доступен 
всем, то есть мы сможем его запустить из командной строки. Далее идет ключевое слово 
<span class="b">class</span>, а затем название класса. То есть класс называется Program. После названия в фигурных скобках расположено содержимое класса.</p>
<p>Класс может содержать различные переменные и методы. В данном случае у нас объявлен один метод <span class="b">main</span>. 
Это главный метод в любой программе на Java, он является входной точкой программы и с него начинается все управление. Он обязательно 
должен присутствовать в программе.</p>
<p>Метод main также имеет модификатор <code>public</code>. Слово <code>static</code> указывает, что метод main - статический, а слово <code>void</code> - что он не возвращает никакого значения. Позже 
мы подробнее разберем, что все это значит.</p>
<p>Далее в скобках у нас идут параметры метода - <code>String args[]</code> - это массив args, который хранит значения типа <code>String</code>, то 
есть строки. В данном случае ни нам пока не нужны, но в реальной программе это те строковые параметры, которые передаются при запуске программы из 
командной строки.</p>
<p>После списка параметров в фигурных скобках идет тело метода - это собственно те инструкции, которые и будет выполнять метод. 
В данном случае фактически определени определена только одна инструкция - вывод на консоль некоторой строки. Для вывода на консоль используется встроенный метод 
<code>System.out.println()</code>. В этот метод передается выводимая строка. Каждая инструкция завершается точкой с запятой.</p>
<p>Теперь скомпилируем написанную программу. Откроем командную строку (в Windows) или терминал в Linux/MacOS и введем там соответствующие команды. Первым делом перейдем в каталог, где лежит наш файл с программой с помощью команды:</p>
<div class="console"><pre class="consoletext">cd C:\Java</pre></div>
<p>В данном случае файл находится в каталоге C:\Java.</p>
<img src="./pics/1.20.png" alt="Первая программа на Java 16" />
<p>Затем cкомпилируем программу с помощью команды</p>
<div class="console"><pre class="consoletext">C:\Java&gt;"C:\Program Files\Java\jdk-17\bin\javac" Program.java</pre></div>
<p>Обратите внимание, что весь путь к компилятору javac берется в кавычки, а затем через пробел идет название нашего файла, который содержит 
класс программы.</p>
<p>После этого программа компилируется в байт-код, и в каталоге C:\Java можно будет найти новый файл <span class="ii">Program.class</span>. 
Это и будет файл с байт-кодом программы. Теперь нам надо его запустить с помощью утилиты java:</p>
<div class="console"><pre class="consoletext">C:\Java&gt;"C:\Program Files\Java\jdk-17\bin\java" Program</pre></div>
<p>Здесь уже расширение у файла не надо использовать.</p>
<p>Для ОС Windows весь процесс будет выглядеть следующим образом:</p>
<img src="./pics/1.1.png" alt="Первая программа на Java" />
<h3>Добавление java в переменную Path</h3>
<p>Для компиляции приходится вводить полный путь к комилятору javac, что может быть сопряжено с ошибками при вводе, да и каждый раз вводить полный путь тоже неудобно. 
Чтобы в дальнейшем облегчить работу, добавим путь к JDK в переменную PATH в переменных среды. Если мы работаем в Windows, то для добавления переменной среды 
через поиск найдем найдем параметр <span class="b">Изменение системных переменных среды</span>. Для этого введем в поле поиска "Изменение системных переменных среды":</p>
<img src="./pics/1.16.png" alt="Переменные среды в Windows" />
<p>Выберем пункт <span class="b">Изменение системных переменных среды</span>. И сначала нам откроется окно "Свойства системы", где нажмем на кнопку 
<span class="b">Переменные среды</span>:</p>
<img src="./pics/1.24.png" alt="Системные переменные среды в Windows" />
<p>Затем нам откроется окно, где мы можем увидеть все переменные среды. 
(Также можно перейти через Параметры и пункт <span class="b">Система -&gt;Дополнительные параметры системы -&gt;Переменные среды</span>)</p>
<img src="./pics/1.22.png" alt="JAVA_HOME" />
<p>Здесь нам надо установить переменную <span class="b">JAVA_HOME</span>. Если этой переменной нет, то ее нужно создать. Однако если Java уже устанавливалась, отдельно или 
как необходимый компонент для других программ, то нередко при установки в переменных средах создается системная переменная "JAVA_HOME", 
которая может указывать на старую версию java. То в этом случае просто надо перемеустановить ее значение, чтобы она указаывала на новый sdk java.</p>
<p>Итак, допустим, у нас нет такой переменной, в этом случае нажмем на кноку "Создать" и в появившемся окне введем в поле имени переменной 
<span class="b">JAVA_HOME</span>, а в поле значения переменной - путь к sdk, то есть "C:\Program Files\Java\jdk-17\".</p>
<p>Если эта переменная уже есть, то выберем ее и нажмем на кнопку "Изменить" и также укажем для нее путь к новому SDK.</p>
<p>Выберем переменную Path для текущего пользователя и нажмем на кнопку "Изменить":</p>
<img src="./pics/1.18.png" alt="Добавление JDK в переменную PATH" />
<p>Затем отобразится окно со всеми путями, которые добавлены в переменную Path:</p>
<img src="./pics/1.19.png" />
<p>В этом окне нажмем на кнопку "Создать". После этого будет добавлена новая строка, в которую введем <span class="b">%JAVA_HOME%\bin</span>. В данном случае 
<code>%JAVA_HOME%</code> будет брать значение из переменной JAVA_HOME, то есть путь к Java SDK. А компонент <code>\bin</code> добавляет путь к папке 
bin в каталоге jdk. Таким образом, в переменные среды будет добавлен путь к компилятору javac и другим утилитам, которые располагаются в этой папке. После этого нажмем на OK.</p>
<p>После установки переменной Path перейдем к командной строке (в более старыъ версиях Windows может потребоваться перезауск командной строки). 
И после этого можно вводить только названия утилит без полных путей:</p>
<img src="./pics/1.2.png" alt="Использование классов в Java" />
<p>Кроме того, чтобы убедиться, что у нас задействована нужная версия java, мы можем ввести в консоли команду</p>
<div class="console"><pre class="consoletext">java -version</pre></div>
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


<div class="nav"><p><a href="1.1.php">Назад</a><a href="./">Содержание</a><a href="1.5.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Java</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.1.php">Язык программирования Java</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.2.php">Первая программа на Java</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.5.php">Первая программа в IntelliJ IDEA</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.3.php">Первая программа в NetBeans</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.4.php">Первая программа в Eclipse</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы программирования на Java</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.11.php">Структура программы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.1.php">Переменные и константы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.12.php">Типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.9.php">Консольный ввод/вывод в Java</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.3.php">Арифметические операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.13.php">Поразрядные операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.14.php">Условные выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.15.php">Операции присваивания и приоритет операций</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.2.php">Преобразования базовых типов данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.5.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.6.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.4.php">Массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.7.php">Методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.16.php">Параметры методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.17.php">Оператор return. Результат метода</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.18.php">Перегрузка методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.8.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.10.php">Введение в обработку исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Классы. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.2.php">Пакеты</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.3.php">Модификаторы доступа и инкапсуляция</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.4.php">Статические члены и модификатор static</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.14.php">Объекты как параметры методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.12.php">Внутренние и вложенные классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.5.php">Наследование</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.6.php">Абстрактные классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.10.php">Иерархия наследования и преобразование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.7.php">Интерфейсы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.16.php">Интерфейсы в механизме обратного вызова</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.8.php">Перечисления enum</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.9.php">Класс Object и его методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.11.php">Обобщения (Generics)</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.17.php">Ограничения обобщений</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.15.php">Наследование и обобщения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.13.php">Ссылочные типы и клонирование объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.18.php">Records</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Обработка исключений</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/4.1.php">Оператор throws</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/4.2.php">Классы исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/4.3.php">Создание своих классов исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Коллекции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.1.php">Типы коллекций. Интерфейс Collection</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.2.php">Класс ArrayList и интерфейс List</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.7.php">Очереди и класс ArrayDeque</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.3.php">Класс LinkedList</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.4.php">Интерфейс Set и класс HashSet</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.5.php">SortedSet, NavigableSet, TreeSet</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.6.php">Интерфейсы Comparable и Comporator. Сортировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.8.php">Интерфейс Map и класс HashMap</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.9.php">Интерфейсы SortedMap и NavigableMap. Класс TreeMap</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.10.php">Итераторы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Потоки ввода-вывода. Работа с файлами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.1.php">Потоки ввода-вывода</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.3.php">Чтение и запись файлов. FileInputStream и FileOutputStream</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.2.php">Закрытие потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.4.php">Классы ByteArrayInputStream и ByteArrayOutputStream</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.5.php">Буферизованные потоки BufferedInputStream и BufferedOutputStream</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.6.php">Форматируемый вывод. PrintStream и PrintWriter</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.7.php">Классы DataOutputStream и DataInputStream</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.8.php">Чтение и запись текстовых файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.9.php">Буферизация символьных потоков. BufferedReader и BufferedWriter</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.10.php">Сериализация объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.11.php">Класс File. Работа с файлами и каталогами</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.12.php">Работа с ZIP-архивами</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.13.php">Класс Console</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Работа со строками</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/7.1.php">Введение в строки. Класс String</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/7.2.php">Основные операции со строками</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/7.3.php">StringBuffer и StringBuilder</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/7.4.php">Регулярные выражения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Лямбда-выражения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/9.1.php">Введение в лямбда-выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/9.2.php">Лямбды как параметры и результаты методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/9.3.php">Встроенные функциональные интерфейсы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Многопоточное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.1.php">Класс Thread</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.2.php">Создание и выполнение потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.4.php">Завершение и прерывание потока</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.3.php">Синхронизация потоков. Оператор synchronized</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.5.php">Взаимодействие потоков. Методы wait и notify</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.6.php">Семафоры</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.7.php">Обмен между потоками. Класс Exchanger</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.8.php">Класс Phaser</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.9.php">Блокировки. ReentrantLock</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.10.php">Условия в блокировках</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Stream API</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.1.php">Введение в Stream API</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.2.php">Создание потока данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.3.php">Фильтрация, перебор элементов и отображение</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.8.php">Сортировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.13.php">Получение подпотока и объединение потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.4.php">Методы skip и limit</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.11.php">Операции сведения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.5.php">Метод reduce</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.12.php">Тип Optional</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.6.php">Метод collect</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.7.php">Группировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.9.php">Параллельные потоки</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.10.php">Параллельные операции над массивами</a></span></li>
		</ul>
	</li><li class="closed"><span class="folder">Глава 11. Модульность</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/11.1.php">Создание модуля</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/11.2.php">Зависимые модули</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/11.3.php">Взаимодействие между модулями</a></span></li>
		</ul>
	</li>
	</li><li class="closed"><span class="folder">Глава 12. Дополнительные классы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/12.1.php">Математические вычисления и класс Math</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/12.2.php">Большие числа BigInteger и BigDecimal</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/12.3.php">Работа с датами. LocalDate</a></span></li>
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