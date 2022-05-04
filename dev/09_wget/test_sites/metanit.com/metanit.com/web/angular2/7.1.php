<!DOCTYPE html>
<html >
<head>
<title>Angular | Маршрутизация</title>
<meta charset="utf-8" />
<meta name="description" content="Маршрутизация в Angular, определение и обработка маршрутов, их сопоставление с классами компонентов,">
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
<h1>Маршрутизация</h1><h2>Определение маршрутов</h2><div class="date">Последнее обновление: 04.11.2021</div>

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

<p>Маршрутизация позволяет сопоставлять запросы к приложению с определенными ресурсами внутри приложения.</p>
<p>Ключевым для работы маршрутизации является модуль <span class="b">RouterModule</span>, который располагается в пакете <span class="b">@angular/router</span>. Поэтому при работе с маршрутизацией 
этот пакет должен быть указан в списке зависимостей в файле <span class="ii">package.json</span>:</p>
<pre class="brush:js;">
{
    "name": "helloapp",
    "version": "1.0.0",
    "description": "First Angular 13 Project",
    "author": "Eugene Popov &lt;metanit.com&gt;",
    "scripts": {
        "ng": "ng",
		"start": "ng serve",
		"build": "ng build"
    },
    "dependencies": {
        "@angular/router": "~13.0.0",
        // остальные пакеты
    },
    "devDependencies": {
         
        // остальные пакеты
    }
}
</pre>
<p>Для определения маршрутов возьмем базовую структуру приложения:</p>
<img src="./pics/7.16.png" alt="RouterModule в Angular" />
<p>Для работы с маршрутизацией в первую очередь стоит определить базовый адрес приложения. Для этого возьмем веб-страницу <span class="b">index.html</span> 
и добавим в секцию <code>&lt;head&gt;</code> элемент <code>&lt;base&gt;</code>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;base href="/" /&gt;
    &lt;title&gt;Hello Angular 13&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;my-app&gt;Загрузка...&lt;/my-app&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В качестве базового адреса будет рассматриваться корень приложения.</p>
<p>Каждый маршрут сопоставляется с определенным компонентом. Поэтому добавим в проект ряд компонентов. Так, добавим в папку <span class="ii">src/app</span> 
новый файл <span class="b">home.component.ts</span>:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
 
@Component({
    selector: 'home-app',
    template: `&lt;h3&gt;Главная&lt;/h3&gt;`
})
export class HomeComponent { }
</pre>
<p>Этот простенький компонент выводит обычный заголовок.</p>
<p>Далее добавим в папку <span class="ii">src/app</span> новый файл <span class="b">about.component.ts</span>:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
 
@Component({
    selector: 'about-app',
    template: `&lt;h3&gt;О сайте&lt;/h3&gt;`
})
export class AboutComponent { }
</pre>
<p>И также добавим еще один файл <span class="b">not-found.component.ts</span>:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
 
@Component({
    selector: 'not-found-app',
    template: `&lt;h3&gt;Страница не найдена&lt;/h3&gt;`
})
export class NotFoundComponent { }
</pre>
<h3>RouterModule и добавление маршрутов</h3>
<p>Итак, кроме главного компонента AppComponent в проекте определено еще три компонента, каждый из которых просто выводит некоторый заголовок. Для 
каждого из этих компонентов мы можем определить свой маршрут. Для этого изменим код модуля AppModule:</p>
<pre class="brush:ts;">
import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import {Routes, RouterModule} from '@angular/router';

import { AppComponent }   from './app.component';
import { AboutComponent }   from './about.component';
import { HomeComponent }   from './home.component';
import { NotFoundComponent }   from './not-found.component';

// определение маршрутов
const appRoutes: Routes =[
	{ path: '', component: HomeComponent},
	{ path: 'about', component: AboutComponent},
	{ path: '**', component: NotFoundComponent }
];

@NgModule({
    imports:      [ BrowserModule, RouterModule.forRoot(appRoutes)],
    declarations: [ AppComponent, HomeComponent, AboutComponent, NotFoundComponent],
    bootstrap:    [ AppComponent ]
})
export class AppModule { }
</pre>
<p>Во-первых, здесь импортируются модуль маршрутизации RouterModule и класс Routes, представляющий коллекцию маршрутов:</p>
<pre class="brush:ts;">import {Routes, RouterModule} from '@angular/router';</pre>
<p>Далее определяется сам набор маршрутов:</p>
<pre class="brush:ts;">
const appRoutes: Routes =[
	{ path: '', component: HomeComponent},
	{ path: 'about', component: AboutComponent},
	{ path: '**', component: NotFoundComponent }
];
</pre>
<p>Здесь определено три маршрута, каждый из которых будет обрабатываться отдельным компонентом. Для указания маршрута применяется параметр <code>path</code>. 
Например, путь "about" будет представлять запрос типа "http://localhost:3000/about" и будет обрабатываться классом AboutComponent.</p>
<p>Если запрос не содержит никаких сегментов, например, просто имя домена "http://localhost:3000/", то такой запрос будет сопоставляться с путем "" (пустая строка) и 
будет обрабатываться компонентом HomeComponent.</p>
<p>Если приложение получит запрос, который не подходит ни под один из выше определенных маршрутов, то он будет сопоставляться с шаблоном "**", где две звездочки представляют 
любой путь.</p>
<p>Чтобы применить маршруты, они передаются в метод <code>RouterModule.forRoot(appRoutes)</code>:</p>
<pre class="brush:ts;">imports: [ BrowserModule, RouterModule.forRoot(appRoutes)],</pre>
<p>Метод <code>RouterModule.forRoot()</code> возвращает модуль, который содержит сконфигурированный 
сервис <span class="b">Router</span>. Когда приложение загружается, Router выполняет начальную навигацию по текущему URL, который стоит в адресной строке браузера.</p>
<h3>RouterOutlet</h3>
<p>Мы определили три разных компонента для разных маршрутов, однако в качестве главного компонента выступает AppComponent. Этот компонент выступает в качестве 
контейнера для остальных компонентов, которые будут обслуживать запросы к приложению.</p>
<p>Но чтобы можно было внедрить в AppComponent тот компонент, который обрабатывает запрос, необходимо использовать элемент RouterOutlet. 
Для этого изменим код AppComponent:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
 
@Component({
    selector: 'my-app',
    template: `&lt;div&gt;
					&lt;h1&gt;Маршрутизация в Angular 13&lt;/h1&gt;
					&lt;router-outlet&gt;&lt;/router-outlet&gt;
			   &lt;/div&gt;`
})
export class AppComponent {}
</pre>
<p>На место элемента <code>&lt;router-outlet&gt;</code> будет рендериться компонент, выбранный для обработки запроса.</p>
<p>Запустим приложение. По умолчанию приложение запускается без сегментов, поэтому запрос обрабатывает HomeComponent:</p>
<img src="./pics/7.1.png" alt="Маршруты в Angular" />
<p>Перейдем по пути "localhost:xxxx/about":</p>
<img src="./pics/7.2.png" alt="Routes в Angular" />
<p>При переходе к любому другому адресу сработает компонент NotFoundComponent:</p>
<img src="./pics/7.3.png" alt="Маршрутизация в Angular" />
<h3>URL Matching и порядок маршрутов</h3>
<p>Когда будет выполняться переход по определенному пути, например, "/about", система маршрутизации сопоставляет последовательно URL запроса с 
параметрами path у каждого маршрута. Данный процесс называется url matching. В частности, система маршрутизации сопоставит  url "/about" с маршрутом <code>{ path: 'about', component: AboutComponent}</code>. 
И компонент AboutComponent будет выбран для обработки запроса по пути <code>/about</code>.</p>
<p>Но при определении маршрутов следует учитывать их порядок. Вполне возможно, что под определенный запрос будет соответствовать сразу несколько маршрутов. 
В этом случае запрос будет обрабатываться первым из них. Другие же маршруты не будут учитываться. Например, если мы изменим порядок маршрутов:</p>
<pre class="brush:ts;">
const appRoutes: Routes =[
	{ path: '**', component: NotFoundComponent },
	{ path: '', component: HomeComponent},
	{ path: 'about', component: AboutComponent}
];
</pre>
<p>То в этом случае запрос <code>/about</code> будет обрабатываться первым маршрутом, поскольку он соответствует запросу <span class="ii">/about</span> 
(путь '**' соответствует любому набору символов). Поэтому маршрут</p>
<pre class="brush:ts;">{ path: '**', component: NotFoundComponent }</pre>
<p>лучше определить последним - для всех тех запросов, которые не будут соответствовать ни одному из выше определенных маршрутов.</p>
<h3>Переадресация</h3>
<p>Вполне возможно, что по какому-то маршруту мы захотим сделать переадресацию по другому пути. Например, в случае, если нужного маршрута для запроса не найдено, 
мы можем переадресовать на главную страницу:</p>
<pre class="brush:ts;">
const appRoutes: Routes =[
	{ path: '', component: HomeComponent},
	{ path: 'about', component: AboutComponent},
	{ path: '**', redirectTo: '/'}
];
</pre>
<p>Для переадресации указываем параметр <span class="b">redirectTo</span>. Его значение представляет путь переадресации. В данном случае слеш указывает на 
первый маршрут или на главную страницу.</p>
<p>Также мы можем задать критерий соответствия строки запроса маршруту с помощью параметра <span class="b">pathMatch</span>:</p>
<pre class="brush:ts;">
const appRoutes: Routes =[
	{ path: '', component: HomeComponent},
	{ path: 'about', component: AboutComponent},
	{ path: 'contact', redirectTo: '/about', pathMatch:'full'},
	{ path: '**', redirectTo: '/'}
];
</pre>
<p>Значение <code>pathMatch:'full'</code> указывает, что запрошенный адрес должен полностью соответствовать маршруту, то есть должно быть полное соответствие. 
Например, запрос <span class="ii">/contact</span> полностью соотвествует маршруту <code>{ path: 'contact', redirectTo: '/about', pathMatch:'full'}</code>, 
поэтому будет выполняться переадресация на адрес <span class="ii">/about</span>.</p>
<p>А запрос <span class="ii">/contact/5</span> не будет соответствовать этому маршруту, так как после "contact" идут другие сегменты.</p>
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


<div class="nav"><p><a href="./6.5.php">Назад</a><a href="./">Содержание</a><a href="./7.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в  Angular</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/1.1.php">Что такое Angular. Первый проект</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/1.4.php">Построение проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/1.2.php">Первое приложение</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы Angular</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.1.php">Компоненты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.2.php">Модули</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.3.php">Загрузка приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.4.php">Стили и шаблоны компонента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.5.php">Привязка данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.6.php">Работа с компонентами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.7.php">Взаимодействие между компонентами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.10.php">Привязка к событиям дочернего компонента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.8.php">Жизненный цикл компонента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.9.php">Шаблонные переменные, ViewChild, ContentChild</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.11.php">Взаимодействие между модулями</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Директивы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/3.1.php">ngClass и ngStyle</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/3.2.php">Создание атрибутивных директив</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/3.3.php">Взаимодействие с пользователем, HostListener и HostBinding</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/3.4.php">Получение параметров в директивах</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/3.5.php">Структурные директивы ngIf, ngFor, ngSwitch</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/3.6.php">Создание структурных директив</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Сервисы и dependency injection</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/4.1.php">Сервисы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/4.2.php">Внедрение сервиса в другой сервис</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/4.4.php">Опциональные сервисы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/4.3.php">Один сервис для всех компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/4.5.php">Иерархия сервисов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Работа с формами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/5.1.php">Модуль FormsModule и директива NgModel</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/5.2.php">Получение и изменение модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/5.3.php">Состояние модели и валидация</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/5.4.php">Директива NgForm</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/5.5.php">Reactive Forms</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. HTTP и взаимодействие с сервером</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/6.1.php">HttpClient и отправка запросов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/6.2.php">Объект Observable и библиотека RxJS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/6.3.php">Обработка ошибок</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/6.4.php">Отправка данных в запросе</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/6.5.php">POST-запросы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.2.php">Создание ссылок</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.3.php">Параметры маршрута</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.4.php">Параметры строки запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.5.php">Программная навигация</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.6.php">Дочерние маршруты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.7.php">Guards</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Pipes</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/8.1.php">Работа с pipes</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/8.2.php">Создание своих pipes</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/8.3.php">Pure и Impure Pipes</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/8.4.php">AsyncPipe</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Дополнительные статьи</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/9.1.php">Webpack</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/9.2.php">Grid и CRUD-операции</a></span></li>
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