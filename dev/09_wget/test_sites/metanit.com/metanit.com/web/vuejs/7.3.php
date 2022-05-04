<!DOCTYPE html>
<html >
<head>
<title>Vue.js | Vue-cli</title>
<meta charset="utf-8" />
<meta name="description" content="Использование Vue-cli для создания проекта приложения Vue.js, шаблоны проектов vue-cli, применение сборщика webpack">
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
<h2>Vue-cli</h2><div class="date">Последнее обновление: 05.10.2018</div>

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

<p><span class="b">Vue-cli</span> представляет инструмент для быстрого создания проектов под Vue.js. Такие проекты уже имеют некоторую готовую начальную структуру, 
установленную конфигурацию, в частности, конфигурацию для Webpack, а также ряд базовых файлов. Текущая верся cli 3.0.</p>
<p>Для использования vue-cli вначале его надо установить. Для в консоли или терминале нужно выполнить команду:</p>
<div class="console">
<pre class="consoletext">
npm install -g @vue/cli
</pre>
</div>
<p>Если ранее был установлен vue-cli других версий, например, 2.х или 1.х, то их предварительно надо удалить с помощью команды 
<code>npm uninstall vue-cli -g</code></p>
<p>Проверить текущую версию vue cli можно с помощью команды</p>
<div class="console">
<pre class="consoletext">
vue --version
</pre>
</div>
<p>После установки vue-cli создадим на жестком диске какую-нибудь папку, где будут находиться проекта Vue.js и с помощью команды cd перейдем к этой папке.</p>
<div class="console">
<pre class="consoletext">
cd C:\vuejs
</pre>
</div>
<p>Затем выполним в консоли следующую команду:</p>
<div class="console">
<pre class="consoletext">
vue create cliapp
</pre>
</div>
<p><code>cliapp</code> в данном случае это название создаваемого проекта, оно может быть произвольным.</p>
<p>После ввода команды консоль отобразит две опции для выбора:</p>
<img src="./pics/w6.png" alt="Vue.cli in Vue.js" />
<p>Здесь предоставляется на выбор две опции:</p>
<ul>
<li><p><code>default(babel, eslint)</code>: проект с настройками по умолчанию, который включает функциональность Babel и Eslint.</p></li>
<li><p><code>Manually select features</code>: это опция позволяет вручную выбрать компоненты, которые будут добавлены в проект.</p></li>
</ul>
<p>С помощью клавиш вверх-вниз можно перемещаться между опциями. К примеру выберем опцию <span class="b">Manually select features</span>. 
После этого нам надо будет отметить те компоненты, которые мы хотим включить в проект:</p>
<img src="./pics/w7.png" alt="Проект Vue.cli" />
<p>Опять же с помощью клавиш вверх-вниз можно перещаться между компонентами. Если надо выбрать все или, наоборот, снять 
выделение со всех, то можно использовать клавишу A.</p>
<p>К примеру, НЕ выберем ни одного компонента, чтобы создаваемый проект был предельно минималистичен, и нажмем на Enter.</p>
<p>Далее будет предложено указать, как будет храниться конфигурация:</p>
<img src="./pics/w9.png" alt="Конфигурация проекта Vue.cli" />
<p>Здесь доступны две опции:</p>
<ul>
<li><p><code>In dedicated config files</code>: хранение конфигурации в отдельных файлах.</p></li>
<li><p><code>In package json</code>: хранение всей конфигурации в package.json.</p></li>
</ul>
<p>Выберем опцию <span class="b">In package json</span>.</p>
<p>Далее будет предложено сохранить конфигурацию. И затем будет создан проект, который уже будет содержать базовую функциональность.</p>
<p>Созданный проект буде иметь следующую структуру:</p>
<img src="./pics/w10.png" alt="Проект Vue -cli 3.0" />
<p>Стоит отметить, что по умолчанию создается скрытый епозиторий git для проекта. Если он нам не нужен, то при создании проекта надо использовать флаг <span class="b">-n</span> (сокращение от --no-git):</p>
<div class="console"><pre class="consoletext">vue create -n cliapp</pre></div>
<p>Если мы обратимся к файлу package.json, то увидим, что он уже содержит определение команд для запуска и построения приложения:</p>
<pre class="brush:js;">
{
  "name": "cliapp",
  "version": "0.1.0",
  "private": true,
  "scripts": {
    "serve": "vue-cli-service serve",
    "build": "vue-cli-service build"
  },
  "dependencies": {
    "vue": "^2.5.17"
  },
  "devDependencies": {
    "@vue/cli-service": "^3.0.4",
    "vue-template-compiler": "^2.5.17"
  },
  "postcss": {
    "plugins": {
      "autoprefixer": {}
    }
  },
  "browserslist": [
    "&gt; 1%",
    "last 2 versions",
    "not ie &lt;= 8"
  ]
}
</pre>
<p>Так, в секции scripts определена команда "serve", которая, используя инфраструктуру CLI, запускает проект. Перейдем к этой папке и выполним 
эту команду в консоли:</p>
<img src="./pics/w11.png" alt="Запуск проекта Vue -cli 3.0" />
<p>Консоль отобразит адрес, по которому можн обратиться к запущенному проекту. Например, в моем случае это http://localhost:8081/.</p>
<p>Также стоит отметить, что доступен графический функционал для создания объекта. Для этого надо выполнить к консоли команду</p>
<div class="console"><pre class="consoletext">vue ui</pre></div>
<p>После этого в браузере откроется страница, где можно в графическом режиме создать новый проект</p>
<img src="./pics/w12.png" alt="Графическое создание проекта Vue-cli 3.0" />
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


<div class="nav"><p><a href="7.1.php">Назад</a><a href="./">Содержание</a><a href="8.1.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Основы Vue.js</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.1.php">Что такое Vue.js. Первое приложение</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.2.php">Объект Vue</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.3.php">Привязка данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.7.php">Шаблоны</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.4.php">Обработка событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.5.php">Двусторонняя привязка</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.6.php">Вычисляемые свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.8.php">Привязка классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.9.php">Привязка к стилям</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.10.php">Наблюдаемые свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.11.php">Работа с объектом Vue</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.12.php">refs и управление html-элементами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.13.php">Жизненный цикл Vue</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Условный рендеринг и работа с массивами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.1.php">Директива v-if</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.2.php">Директива v-show</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.3.php">v-for</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.4.php">Управление массивами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.5.php">Фильтрация и сортировка массива</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Работа с формами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.1.php">Элементы input и textarea</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.2.php">Флажки (Checkbox)</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.3.php">Переключатели (radiobutton)</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.4.php">Список select</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.5.php">Модификаторы</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Компоненты</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.1.php">Создание компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.2.php">Локальная и глобальная регистрация компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.3.php">Состояние и поведение компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.4.php">Разделяемое состояние компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.5.php">Props</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.6.php">Валидация props</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.7.php">Передача массивов и сложных объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.8.php">Родительские и дочерние компоненты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.9.php">Получение состояния вложенного компонента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.10.php">Однонаправленный поток данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.11.php">Создание событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.12.php">Изменение внешних массивов и объектов в компонентах</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.13.php">Передача функций обратного вызова в компоненты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.15.php">Взаимодействие между сестринскими компонентами. Шина событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.14.php">Миксины</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Слоты</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/5.1.php">Введение в слоты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/5.2.php">Именованные слоты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/5.3.php">Слоты с ограниченной областью видимости</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Фильтры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/6.1.php">Глобальные и локальные фильтры</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Организация и сборка приложения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/7.1.php">Компоненты в отдельных файлах и Webpack</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/7.3.php">Vue-cli</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.2.php">Навигация и ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.3.php">Параметры маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.4.php">Вложенные маршруты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.5.php">Именованные маршруты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.6.php">Именованные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.7.php">Переадресация</a></span></li>
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
	
	$("li:contains('Глава 7.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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