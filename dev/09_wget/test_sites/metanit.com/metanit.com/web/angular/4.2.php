<!DOCTYPE html>
<html >
<head>
<title>Управление маршрутом и отключение кэширования в AngularJS</title>
<meta charset="utf-8" />
<meta name="description" content="Управление маршрутом и отключение кэширования в AngularJS">
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
<h2>Управление маршрутом и отключение кэширования</h2><div class="date">Последнее обновление: 27.04.2017</div>

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

<p>С помощью сервиса <b>$route</b> мы можем управлять текущим маршрутом. Сервис $route имеет несколько свойств и методов, позволяющих управлять маршрутом:</p>
<ul>
<li><p><code>current</code>: возвращает объект, который содержит информацию о текущем маршруте</p></li>
<li><p><code>reload()</code>: перезагружает представление для текущего маршрута</p></li>
<li><p><code>routes</code>: возвращает коллекцию маршрутов, определенных через $routeProvider</p></li>
</ul>
<p>Чтобы зафиксировать переход от одного маршрута к другому, мы можем обрабатывать события, определенные в сервисе $route:</p>
<ul>
<li><p><code>$routeChangeStart</code>: событие срабатывает перед изменением маршрута</p></li>
<li><p><code>$routeChangeSuccess</code>: событие срабатывает после изменения маршрута</p></li>
<li><p><code>$routeUpdate</code>: событие срабатывает при обновлении маршрута</p></li>
<li><p><code>$routeChangeError</code>: срабатывает, если маршрут не может быть изменен</p></li>
</ul>
<p>Как мы можем использовать данные возможности? В прошлых темах у нас было разграничение на два контроллера: QuestionController выводит все 
вопросы, а AnswerController выводит форму с добавлением вопроса и отправляет данные на определенный адрес. Но если после добавления данных мы 
переключимся обратно на список ответов, то мы увидим только те ответы, которые были раньше, даже если мы перезапишем файл json. Данные кэшируются, и браузер вместо повторной загрузки 
просто берет данные из кэша. Попробуем изменить данное поведение.</p>
<p>Для этого изменим код модуля приложения в файл <i>app.js</i>:</p>
<pre class="brush:js;">
var questApp = angular.module('questApp', ["ngRoute"])
    .config(function($routeProvider){
        $routeProvider.when('/question',
        {
            templateUrl:'views/question.html',
            controller:'QuestionController'
        });
        $routeProvider.when('/answer',
        {
            templateUrl:'views/answer.html',
            controller:'AnswerController'
        });
        $routeProvider.otherwise({redirectTo: '/question'});
}).run(function($rootScope, $templateCache) {
	$rootScope.$on('$routeChangeStart', function(event, next, current) {
		if (typeof(current) !== 'undefined'){
			$templateCache.remove(current.templateUrl);
		}
	});
}); 
</pre>
<p>Метод <code>run</code> выполняет начальную инициализацию модуля. Кэширование шаблонов управляет сервис <code>$templateCache</code>, поэтому мы его передаем 
в качестве параметра. Кроме того, нам надо установать обработчик события <code>$routeChangeStart</code>. Его установка производится с помощью метода 
<code>$rootScope.$on()</code>. Использование $rootScope позволит применять обработчик при изменениях по всему модулю, вне зависимости от контроллера. 
В данном случае будет обрабатываться событие <code>$routeChangeStart</code>, возникающее до изменения маршрута.</p>
<p>Обработчик события может принимать три параметра: <code>event</code> (данные о событии), <code>next</code> (маршрут, на который осуществляется переход) 
и <code>current</code> (текущий маршрут, с которого осуществляется переход).</p>
<p>В самой функции обработчика удаляется кэширование для маршурта, на который осуществляется переход (<code>$templateCache.remove(current.templateUrl);</code>).</p>
<p>Данная конструкция удаляет кэширование для всех маршрутов, но у нас по сути пока 2 маршрута, и удалять кэширование надо только для маршрута, который отображает 
ответы на вопрос. То есть эффективнее было бы локализовать действие обработчика события <code>$routeChangeStart</code>.</p>
<p>Итак, уберем метод <code>run</code> из определения модуля:</p>
<pre class="brush:js;">
var questApp = angular.module('questApp', ["ngRoute"])
    .config(function($routeProvider){
        $routeProvider.when('/question',
        {
            templateUrl:'views/question.html',
            controller:'QuestionController'
        });
        $routeProvider.when('/answer',
        {
            templateUrl:'views/answer.html',
            controller:'AnswerController'
        });
        $routeProvider.otherwise({redirectTo: '/question'});
});
</pre>
<p>И изменим контроллер AnswerController:</p>
<pre class="brush:js;">
questApp.controller('AnswerController',
    function AnswerController($scope, $http, $location, $templateCache){
		
	$scope.$on('$routeChangeStart', function(event, next, current) {
		if (typeof(current) !== 'undefined'){
			$templateCache.remove(next.templateUrl);
			console.log(next);
			console.log(current);
		}
	});
    $scope.save = function (answer, answerForm){
        if(answerForm.$valid){
                
			$http.post("postAnswer.php", answer).then(function success() {
				$location.path("question");
			});
        }
    };
})
</pre>
<p>Обработка события на уровне контроллера практически ничем не отличается, за исключением использования объекта <code>$scope</code> вместо $routeScope.</p>
<p>Кроме того, здесь также устанавливается зависимость для сервиса <span class="b">$location</span>. Данный сервис нужен нам для перехода 
по определенному маршруту. Переход осуществляется с помощью метода <code>$location.path([маршрут])</code></p>
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


<div class="nav"><p><a href="4.1.php">Назад</a><a href="./">Содержание</a><a href="4.3.php">Вперед</a></p></div></div>
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