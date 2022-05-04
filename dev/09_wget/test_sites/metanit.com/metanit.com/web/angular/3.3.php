<!DOCTYPE html>
<html >
<head>
<title>Сервис $q и promise-объекты</title>
<meta charset="utf-8" />
<meta name="description" content="Сервис $q и promise-объекты в AngularJS и их использования для выполнения асинхронных операций, deferred-объект и метод resolve">
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
<h2>Сервис $q и promise-объекты</h2><div class="date">Последнее обновление: 27.04.2017</div>

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

<p>Promise представляет результат выполения асинхронной операции. Promise-объект определяет методы, которые регистрируют функцию, вызываемую при завершении 
асинхронной операции. Переделаем предыдущий пример так, чтобы он 
использовал promise-объект и сервис $q. Файл с данными в формате json остается тем же самым. Вынесем все действия по загрузке данных в отдельный 
сервис. Пусть это будет файл <span class="b">dataService.js</span> со следующим содержимым:</p>
<pre class="brush:js;">
questApp.factory('dataService', function($http, $q){
	return{
		getData: function(){
			var deferred = $q.defer();
			$http({method: 'GET', url: 'question.json'}).
				then (function success(response) {
						deferred.resolve(response.data.question);
					},function error(response) {
						deferred.reject(response.status);
					}
				);
			
			return deferred.promise;
		}
	}
})
</pre>
<p>По сути этот сервис напоминает тот же, что делался в первой теме данной главы. В метод 
<code>questApp.factory</code> передаем название сервиса и функцию, принимающую два параметра - $http и $q. Далее в функции <code>getData</code> 
мы создаем deferred-объект: <code>var deferred = $q.defer();</code></p>
<p>Суть создания deferred-объекта заключается в том, что он раскрывает, во-первых, api по выполнению операций. А во-вторых, он содержит ассоциированный 
promise-объект, и через deferred-объект мы взаимодействуем с promise-объектом. Чтобы получить promise-объект, в самом конце функции используется следующее 
выражение <code>return deferred.promise</code>.</p>
<p>Если запрос увенчался успехом, то вызываем метод <code>deferred.resolve(data.question);</code>. Этот метод сопоставляет данные с promise-объектом. 
В результате вызов <code>return deferred.promise</code> вернет нам загруженные данные.</p>
<p>Если запрос прошел неудачно, вызывается метод <code>deferred.reject(status)</code></p>
<p>Контроллер у нас видоизменится следующим образом:</p>
<pre class="brush:js;">
questApp.controller('QuestionController', 
	function QuestionController($scope, dataService){
	
		var promiseObj=dataService.getData();
        promiseObj.then(function(value) { $scope.question=value; });
		
		$scope.voteUp = function (answer){
			answer.rate++;
		};
		$scope.voteDown = function (answer){
			answer.rate--;
		};
	}
)
</pre>
<p>Поскольку в вышеопределенном сервисе функция <code>getData</code> возвращает promise-объект, который в свою очередь содержит все загруженные 
данные, то мы можем просто присвоить эти данные: <code>var promiseObj=dataService.getData();</code></p>
<p>В тоже время важно понимать, что теперь <code>promiseObj</code> будет представлять не простой javascript-объект, а именно promise-объект, 
что накладывает некоторые ограничения на его использование.</p>
<p>Чтобы получить чистый javascript-объект, можно использовать функцию <code>promiseObj.then</code>, которая имеет следующий синтаксис: 
<code>then(successCallback, errorCallback, notifyCallback)</code></p>
<p>Параметр successCallback представляет функцию, которая выполняется при удачном завершении действия. Функция, передаваемая в качестве параметра 
<code>errorCallback</code>, наоборот, выполняется при неудачном завершении действия. И функция, представленная параметром 
<code>notifyCallback</code>, может выполняться в качестве индикатора выполнения действия.</p>
<p>В нашем случае мы использовали только первый параметр - функцию удачного выполнения действия, а в качестве параметра в нее передается уже непосредственно 
загруженный с сервера объект.</p>
<p>И в представлении index.html надо подключить созданный выше файл сервиса <span class="ii">dataService.js</span>:</p>
<pre class="brush:xml;">
&lt;!doctype html&gt;
&lt;html ng-app="questApp"&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;link rel="stylesheet" href="css/mystyles.css" /&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div  ng-controller="QuestionController"&gt;
&lt;div class="content"&gt;
&lt;div class="quest"&gt;
&lt;h3&gt;{{question.text}}&lt;/h3&gt;
&lt;p&gt;{{question.author}} &lt;/p&gt; &lt;p&gt;&lt;i&gt;{{question.date}}&lt;/i&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;h3&gt;Ответы&lt;/h3&gt;
&lt;div class="answers"&gt;
&lt;div ng-repeat="answer in question.answers | orderBy:sortparam" class="answer"&gt;
&lt;div class="vote"&gt;
    &lt;a class="vote-up" ng-click="voteUp(answer)"&gt;&lt;/a&gt;
    &lt;span class="rate"&gt;{{answer.rate}}&lt;/span&gt;
    &lt;a class="vote-down" ng-click="voteDown(answer)"&gt;&lt;/a&gt;
&lt;/div&gt;
&lt;b&gt;{{answer.text}}&lt;/b&gt;
&lt;p&gt;{{answer.author}}&lt;/p&gt;
&lt;p&gt;&lt;i&gt;{{answer.date}}&lt;/i&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;script src="js/lib/angular.min.js"&gt;&lt;/script&gt;
&lt;script src="js/app.js"&gt;&lt;/script&gt;
&lt;script src="js/dataService.js"&gt;&lt;/script&gt;
&lt;script src="js/controllers/QuestionController.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
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


<div class="nav"><p><a href="3.9.php">Назад</a><a href="./">Содержание</a><a href="3.4.php">Вперед</a></p></div></div>
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
				<li class="closed"><span class="folder">Глава 1. Введение в  AngularJS</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/angular/1.1.php">Что такое AngularJS</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/1.2.php">Первое приложение</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Основы AngularJS</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/angular/2.7.php">Модули</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.1.php">Контроллеры</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.18.php">Объект $scope</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.8.php">Директивы в AngularJS. ng-repeat</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.2.php">Привязка данных</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.9.php">Директивы шаблонов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.10.php">Директива ng-switch</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.11.php">Директивы стилизации и управления элементами</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.3.php">Обработка событий</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.4.php">Фильтры</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.5.php">Cоздание собственных фильтров</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.6.php">Валидация формы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.13.php">Работа со структурой DOM</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.12.php">Создание своих директив</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.14.php">Параметры директив</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.15.php">Шаблоны директив</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.16.php">Внедрение шаблонов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/2.17.php">Обработка выражений в директивах</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Сервисы</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/angular/3.1.php">Использование сервисов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/3.2.php">Сервис $http и ajax-запросы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/3.7.php">Настройка ajax-запросов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/3.8.php">Отправка данных</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/3.9.php">Передача параметров в запрос</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/3.3.php">Сервис $q и promise-объекты</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/3.4.php">Сервис $timeout</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/3.5.php">Cервисы для работы с DOM</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/3.6.php">Потенциально опасные данные</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Маршрутизация</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/angular/4.1.php">Представления и одностраничные приложения</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/4.2.php">Управление маршрутом и отключение кэширования</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/angular/4.3.php">Параметры маршрутов</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. Внедрение зависимостей</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/angular/5.1.php">Внедрение зависимостей и сервис $injector</a></span></li>
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