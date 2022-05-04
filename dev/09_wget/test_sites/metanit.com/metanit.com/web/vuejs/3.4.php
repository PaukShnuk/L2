<!DOCTYPE html>
<html >
<head>
<title>Vue.js | Список select</title>
<meta charset="utf-8" />
<meta name="description" content="Список select во Vue.js, выпадающий список и список с множественным выбором, привязка к коллекции объектов">
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
<h2>Список select</h2><div class="date">Последнее обновление: 31.08.2017</div>

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

<p>Элемент select позволяет создать список с возможностью одиночного и множественного выбора.</p>
<h3>Список с одиночным выбором</h3>
<p>Выпадающий список с одиночным выбором можно привязать к свойству Vue, которое хранит выбранный элемент:</p>
<pre class="brush:xml;">
&lt;div id="app"&gt;
	&lt;select v-model="user"&gt;
		&lt;option&gt;Tom&lt;/option&gt;
		&lt;option&gt;Bob&lt;/option&gt;
		&lt;option&gt;Sam&lt;/option&gt;
	&lt;/select&gt;
	&lt;span&gt;Выбрано: {{user}}&lt;/span&gt;
&lt;/div&gt;
&lt;script src="https://unpkg.com/vue"&gt;&lt;/script&gt;
&lt;script&gt;
    var app = new Vue({
        el: '#app',
        data: {
			user:''
        }
    });
&lt;/script&gt;
</pre>
<img src="./pics/3.4.png" alt="Single select in Vue.js" />
<h3>Список с множественным выбором</h3>
<p>Список select с множественным выбором можно связать с массивом, в который попадут все выбранные значения:</p>
<pre class="brush:xml;">
&lt;div id="app"&gt;
	&lt;select v-model="users" multiple&gt;
		&lt;option&gt;Tom&lt;/option&gt;
		&lt;option&gt;Bob&lt;/option&gt;
		&lt;option&gt;Sam&lt;/option&gt;
		&lt;option&gt;Alice&lt;/option&gt;
	&lt;/select&gt;
	&lt;span&gt;Выбрано: {{users}}&lt;/span&gt;
&lt;/div&gt;
&lt;script src="https://unpkg.com/vue"&gt;&lt;/script&gt;
&lt;script&gt;
    var app = new Vue({
        el: '#app',
        data: {
			users:[]
        }
    });
&lt;/script&gt;
</pre>
<img src="./pics/3.5.png" alt="Multiple select in Vue.js" />
<h3>Привязка к массиву объектов</h3>
<p>Нередко источником для элементов списка служит массив, элементы которого нередко представляют сложные объекты. Для динамического создания списка из массива применяется директива 
<span class="b">v-for</span>, а для привязки значения к элементу списка - атрибут <code>v-bind:value</code>:</p>
<pre class="brush:xml;">
&lt;div id="app"&gt;
	&lt;select v-model="selectedUser"&gt;
		&lt;option v-for="user in users" v-bind:value="user.name"&gt;{{user.name}}&lt;/option&gt;
	&lt;/select&gt;
	&lt;span&gt;Выбрано: {{selectedUser}}&lt;/span&gt;
&lt;/div&gt;
&lt;script src="https://unpkg.com/vue"&gt;&lt;/script&gt;
&lt;script&gt;
    var app = new Vue({
        el: '#app',
        data: {
			users:[
				{name:'Tom', age:22},
				{name:'Bob', age:25},
				{name:'Sam', age:28},
				{name:'Alice', age:26}
			],
			selectedUser:''
        }
    });
&lt;/script&gt;
</pre>
<p>В данном случае в списке отображается значение свойства name объекта из массива и это же свойство name будет использоваться в качестве значения при выборе элемента. 
Однако мы можем выбирать и весь объект в целом:</p>
<pre class="brush:xml;">
&lt;div id="app"&gt;
	&lt;select v-model="selectedUser"&gt;
		&lt;option v-for="user in users" v-bind:value="user"&gt;{{user.name}}&lt;/option&gt;
	&lt;/select&gt;
	&lt;span v-if="selectedUser!==null"&gt;Выбрано: {{selectedUser.name}} - {{selectedUser.age}}&lt;/span&gt;
&lt;/div&gt;
&lt;script src="https://unpkg.com/vue"&gt;&lt;/script&gt;
&lt;script&gt;
    var app = new Vue({
        el: '#app',
        data: {
			users:[
				{name:'Tom', age:22},
				{name:'Bob', age:25},
				{name:'Sam', age:28},
				{name:'Alice', age:26}
			],
			selectedUser:null
        }
    });
&lt;/script&gt;
</pre>
<p>В данном случае выбранный объект из массива будет попадать в свойство selection.</p>
<img src="./pics/3.7.png" alt="Выбор объектов в списке select в Vue.js" />
<h3>Привязка к объектам в списке с множественным выбором</h3>
<p>Аналогично можно установить привязку к объектам в списке с множественным выбором. В этом случае выбранные элементы попадут в массив:</p>
<pre class="brush:xml;">
&lt;div id="app"&gt;
	&lt;select v-model="selectedUsers" multiple&gt;
         &lt;option v-for="user in users" v-bind:value="user"&gt;{{user.name}}&lt;/option&gt;
    &lt;/select&gt;
	&lt;h3&gt;Выбранные объекты&lt;/h3&gt;
	&lt;ul&gt;
		&lt;li v-for="user in selectedUsers"&gt;{{user.name}} - {{user.age}}&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
&lt;script src="https://unpkg.com/vue"&gt;&lt;/script&gt;
&lt;script&gt;
    var app = new Vue({
        el: '#app',
        data: {
			users:[
                {name:'Tom', age:22},
                {name:'Bob', age:25},
                {name:'Sam', age:28},
                {name:'Alice', age:26}
            ],
            selectedUsers:[]
        }
    });
&lt;/script&gt;
</pre>
<img src="./pics/3.6.png" alt="Динамический рендеринг в select в Vue.js" />
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


<div class="nav"><p><a href="3.3.php">Назад</a><a href="./">Содержание</a><a href="3.5.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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