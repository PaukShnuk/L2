<!DOCTYPE html>
<html >
<head>
<title>Jetpack Compose | Первый проект</title>
<meta charset="utf-8" />
<meta name="description" content="Первый проект на Jetpack Compose на языке программирования Kotlin в среде разработки Android Studio">
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
<h2>Первый проект на Jetpack Compose</h2><div class="date">Последнее обновление: 09.10.2021</div>

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

<p>Итак, создадим первый проект с использованем тулкита Jetpack Compose. Для этого запустим среду Android Studio.</p>
<p>Если мы находимся в окне <span class="b">Welcome to Android Studio</span>, то для создания проекта нажмем на кнопку 
<span class="b">New Project</span>. Если в Android Studio уже открыт какой-то проект, то выберем в меню <span class="b">File -&gt; New -&gt; New Project</span>.</p>
<img src="./pics/1.1.png" alt="Создание проекта Jetpack Compose в Android Studio" />
<p>Далее в открывшемся окне шаблонов проекта выберем пункт <span class="b">Empty Compose Activity</span> и нажмем на кнопку <span class="b">Next</span>.</p>
<img src="./pics/1.2.png" alt="Создание проекта Jetpack Compose и Empty Compose Activity в Android Studio" />
<p>Затем нам откроется окно настроек проекта:</p>
<img src="./pics/1.3.png" alt="Создание проекта Kotlin и Jetpack Compose в Android Studio" />
<p>В этом окне мы можем установить начальные настройки проекта:</p>
<ul>
<li><p>В поле <span class="b">Name</span> вводится название приложения. Укажем в качестве имени название <span class="b">HelloApp</span></p></li>
<li><p>В поле <span class="b">Package Name</span> указывается имя пакета, где будет размещаться главный класс 
приложения. В данном случае для тестовых проектов это значение не играет ольшого значения, поэтому установим <span class="b">com.example.helloapp</span>.</p></li>
<li><p>В поле <span class="b">Save Location</span> установливается расположение файлов проекта на жестком диске. Можно оставить значение по умолчанию.</p></li>
<li><p>В поле <span class="b">Minimum SDK</span> указывается самая минимальная поддерживаемая версия SDK. Оставим значение по умолчанию - <span class="b">API 21: Android 5.0 
(Lollipop)</span>, которая означает, что наше приложение можно будет запустить начиная с Android 5.0, а это 94% устройств. На более старых устройствах запустить будет нельзя.</p>
<p>Стоит учитывать, что чем выше версия SDK, тем меньше диапазон поддерживаемых устройств.</p></li>
</ul>
<p>Далее нажмем на кнопку Finish, и Android Studio создаст новый проект:</p>
<img src="./pics/1.4.png" alt="Первый проект на Kotlin и Jetpack Compose в Android Studio" />
<p>Вначале вкратце рассмотрим структуру проекта, что он уже имеет по умолчанию</p>
<img src="./pics/1.5.png" alt="Структура проекта Jetpack Compose на Kotlin в Android Studio" />
<p>Проект Android может состоять из различных модулей. По умолчанию, когда мы создаем проект, создается один модуль - <span class="b">app</span>. 
Модуль по умолчанию включает три компонента:</p>
<ul>
<li><p><span class="b">manifests</span>: хранит файл манифеста <span class="b">AndroidManifest.xml</span>, который описывает конфигурацию приложения 
и определяет каждый из компонентов данного приложения.</p></li>
<li><p><span class="b">java</span>: хранит файлы кода на языке Kotlin, которые структурированы по отдельным пакетам. 
Так, в папке <code>com.example.helloapp</code> (название 
которого было указано на этапе создания проекта) имеется по умолчанию файл <span class="b">MainActivity.kt</span> с кодом на языке Kotlin, который представляет класс 
MainActivity, запускаемый по умолчанию при старте приложения</p>
<p>Также в этой папке определен подкаталог <span class="b">ui.theme</span>, который содержит ряд файлов на языке Kotlin: <span class="b">Color.kt</span>, 
<span class="b">Shape.kt</span>, <span class="b">Theme.kt</span> и <span class="b">Type.kt</span>, которые определяют ряд вспомогательных типов, функций, переменных, применяемых 
для создания графического интерфейса.</p></li>
<li><p><span class="b">res</span>: содержит используемые в приложении ресурсы. Все ресурсы разбиты на подпапки.</p>
<ul>
	<li><p>папка <span class="b">drawable</span> предназначена для хранения изображений, используемых в приложении</p> 
	<li><p>папки <span class="b">mipmap</span> содержат файлы изображений, которые предназначены для создания иконки приложения при различных разрешениях экрана.</p></li>
	<li><p>папка <span class="b">values</span> хранит различные xml-файлы, содержащие коллекции ресурсов - различных данных, которые применяются в приложении. По умолчанию здесь есть два файла и одна папка:</p>
	
	<ul>
	<li><p>файл <span class="b">colors.xml</span> хранит описание цветов, используемых в приложении</p> 
	<li><p>файл <span class="b">strings.xml</span> содержит строковые ресурсы, используемые в приложении</p></li>
	<li><p>папки <span class="b">themes</span> хранит две темы приложения - для светлую (дневную) и темную (ночную)</p></li>
</ul>
</li>
</ul>
</li>
</ul>
<p>Отдельный элемент <span class="b">Gradle Scripts</span> содержит ряд скриптов Gradle, которые используются при построении приложения.</p>
<p>Во всей этой структуре следует выделить файл MainActivity.kt, который открыт в Android Studio и который содержит логику приложения и собственно с него начинается выполнение 
приложения.</p>
<h3>Запуск проекта</h3>
<p>Теперь запустим созданный выше проект. Для запуска и тестирования проекта можно использовать как различные эмуляторы, так и реальные устройства. 
Для тестирования на реальном устройстве на нем должен быть включен <span class="b">режим разработчика</span>.
В моем случае я запущу проект на реальном устройстве.</p>
<p>Для запуска проекта нажмем на зеленую стрелочку на панели инструментов.</p>
<img src="./pics/1.6.png" alt="Запуск проекта Jetpack Compose на Kotlin в Android Studio" />
<p>И после успешного запуска на устройстве/емуляторе мы сможем насладиться надписью "Hello Android":</p>
<img src="./pics/1.7.png" alt="Первое приложение на Jetpack Compose и Kotlin в Android Studio" />
<h3>Возможные проблемы</h3>
<p>Наиболее распространненой проблемой при запуске проекта является несовместимость Gradle с выбранной средой JDK. Например, у нас на компьютере может быть установлено несколько 
версий JDK, и Gradle подхватывает не ту, которую надо. В этом случае часто встречается ошибка типа "Unsupported class file major version 61" (конкретный номер версии может изменяться):</p>
<img src="./pics/1.14.png" alt="Unsupported class file major version 61 in Android Studio" />
<p>Как правило, эта ошибка говорит о том, что используемая версия JDK выше поддерживаемой.</p>
<p>Ещ одна часто встречаемая ошибка - "Android Gradle plugin requires Java 11 to run":</p>
<img src="./pics/1.8.png" alt="Android Gradle plugin requires Java 11 to run  в Android Studio" />
<p>Как можно увидеть из сообщения об ошибке, для работы плагина Android Gradle, который собирает приложение, необходима Java 11. (В реальности это может быть JDK с версией выше 11).</p>
<p>В обоих случаях надо изменить версию JDK на поддерживаемую. Для этого перейдем в Android Studio к пункту меню <span class="b">File -&gt; Settigs</span>.</p>
<img src="./pics/1.9.png" alt="Android Gradle plugin requires Java 11 to run in Android Studio" />
<p>Затем в открывшемся окне настроек перейдем к пункту меню <span class="b">Build, Execution, Deployment -&gt; Build Tools -&gt; Gradle</span> и 
далее найдем поле <span class="b">Gradle JDK</span>, где изменим версию JDK. Она должна иметь версию 11 и выше. Как правило, вместе с Gradle устанавливается и поддерживаемая версия JDK - 
на данный момент это JDK 11. И ее можно выбрать в списке JDK:</p>
<img src="./pics/1.10.png" alt="Установка JDK для Gradle в Android Studio" />
<p>Наиболее оптимальный пункт для выбора версий JDK, которая идет вместе с Android Studio, называется <span class="b">Embedded JDK version...</span>. Как видно на скриншоте, это версия 11, но при последующих обновлениях 
Android Studio эта версия может измениться.</p>
<p>После сделанных изменений сначала нажмем на кнопку <span class="b">Apply</span>, а затем на кноку <span class="b">OK</span>. И повторим запуск проекта.</p>
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


<div class="nav"><p><a href="./1.1.php">Назад</a><a href="./">Содержание</a><a href="./1.3.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в jetpack</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/1.1.php">Что такое Jetpack Compose</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/1.2.php">Первый проект на Jetpack Compose</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/1.3.php">Создание визуального интерфейса</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Модификаторы и визуальный интерфейс</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/3.1.php">Что такое модификаторы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/3.2.php">Установка цвета</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/3.3.php">Установка размеров</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/3.4.php">Установка отступов и смещения</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/3.5.php">Создание прокрутки</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/3.6.php">Обработка нажатий</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Контейнеры компоновки</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/2.1.php">Box</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/2.2.php">Column</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/2.3.php">Row</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Взаимодействие с кодом Kotlin и состояние компонентов</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/5.1.php">Взаимодействие с кодом Kotlin</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/5.2.php">Введение в состояние компонентов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Визуальные компоненты</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.1.php">Text</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.2.php">Кнопка Button</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.3.php">Ввод текста, TextField и OutlinedTextField</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.7.php">Модификатор Modifier.toggleable</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.4.php">Checkbox</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.6.php">Выбираемый компонент и модификатор selectable</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.5.php">RadioButton</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.8.php">Иконки и компоненты IconButton и IconToggleButton</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.9.php">FloatingActionButton и ExtendedFloatingActionButton</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.10.php">Панели приложения TopAppBar и BottomAppBar</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.11.php">Scaffold</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.12.php">Всплывающие сообщения и Snackbar</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.13.php">Выдвижная панель drawer в Scaffold</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.14.php">Slider</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.15.php">Переключатель Switch</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.16.php">Диалоговые окна AlertDialog</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.17.php">Меню DropdownMenu</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.18.php">Индикаторы прогресса</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Ресурсы в Jetpack Compose</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/7.1.php">Ресурсы строк</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/7.2.php">Ресурсы dimension</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/7.3.php">Ресурсы Color</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Работа с изображениями</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/6.1.php">Компонент Image</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/6.2.php">Ресурсы изображений и ImageBitmap</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/6.3.php">Векторная графика и ImageVector</a></span></li>
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