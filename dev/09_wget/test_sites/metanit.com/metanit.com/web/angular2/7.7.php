<!DOCTYPE html>
<html >
<head>
<title>Angular | Guards</title>
<meta charset="utf-8" />
<meta name="description" content="Guards и ограничение маршрутизации в Angular, применение интерфейсов CanActivate и CanDeactivate">
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
<h2>Guards</h2><div class="date">Последнее обновление: 04.11.2021</div>

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

<p>Guards позволяют ограничить навигацию по определенным маршрутам. Например, если для доступа к определенному ресурсу требуется наличие аутентификации или наличие 
каких-то других условий, в зависимости от которых мы можем предоставить пользователю доступ, а можем и не предоставить. То есть guards защищают доступ к ресурсу, 
собственно поэтому данные элементы и названы так: "guards", что с английского можно перевести как "защитники".</p>
<h3>CanActivate</h3>
<p>CanActivate представляет один из типов guards, который позволяет управлять доступом к ресурсу при маршрутизации. Так, возьмем для примера базовый проект приложения:</p>
<img src="./pics/7.19.png" alt="Guard in Angular" />
<p>Добавим в папку <span class="ii">src/app</span> для примера пару компонентов. Первый компонент поместим в файл <span class="b">home.component.ts</span>:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
 
@Component({
    selector: 'home-app',
    template: `&lt;h3&gt;Главная&lt;/h3&gt;`
})
export class HomeComponent { }
</pre>
<p>И также добавим файл <span class="b">about.component.ts</span>:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
 
@Component({
    selector: 'about-app',
    template: `&lt;h3&gt;О сайте&lt;/h3&gt;`
})
export class AboutComponent {  }
</pre>
<p>Допустим, мы хотим ограничить доступ к компоненту AboutComponent. Для этого добавим в папку <span class="ii">src/app</span> новый файл <span class="b">about.guard.ts</span>:</p>
<pre class="brush:ts;">
import {CanActivate, ActivatedRouteSnapshot, RouterStateSnapshot} from "@angular/router";
import {Observable} from "rxjs";

export class AboutGuard implements CanActivate{

	canActivate(route: ActivatedRouteSnapshot, state: RouterStateSnapshot) : Observable&lt;boolean&gt; | boolean{
		
		return confirm('Вы уверены, что хотите перейти?');
	}
}
</pre>
<p>Класс AboutGuard реализует интерфейс CanActivate, а именно его метод <code>canActivate()</code>. Этот метод получает два параметра - объекты 
<span class="b">ActivatedRouteSnapshot</span> и <span class="b">RouterStateSnapshot</span>, которые содержат информацию о запросе. 
<a href="https://angular.io/docs/ts/latest/api/router/index/ActivatedRouteSnapshot-interface.html" rel="nofollow">ActivatedRouteSnapshot</a> 
позволяет получить различную информацию из запроса, в том числе параметры маршрута и строки запроса. Например, если бы в маршруте использовался параметр id, то мы могли бы его здесь получить:</p>
<pre class="brush:ts;">
canActivate(route: ActivatedRouteSnapshot, state: RouterStateSnapshot) : Observable&lt;boolean&gt; | boolean{
		
		// получаем id
		//console.log(route.params['id']);
		
		// остальной код
	}
</pre>

<p>Результат метода - логическое значение, либо 
логическое значение, обернутое в объект Observable. Если AboutGuard разрешает переход, то метод <code>canActivate()</code> должен возвращать true. Если доступ запрещен, 
то метод возвращает false.</p>
<p>Для тестирования обоих ситуаций здесь вызывается метод <code>confirm()</code>, который отображает диалоговое окно с выбором. Если пользователь нажмет на кнопку отмены, то метод confirm 
возвратит false. Если же пользователь подтвердит действие, то будет возвращено значение true.</p>
<p>Определим в файле <span class="b">app.component.ts</span> ссылки для перехода к компонентам:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
  
@Component({
    selector: 'my-app',
    template: `&lt;div&gt;
                    &lt;h1&gt;Маршрутизация в Angular 13&lt;/h1&gt;
					&lt;nav&gt;
                        &lt;a routerLink=""&gt;Главная&lt;/a&gt;
                        &lt;a routerLink="/about"&gt;О сайте&lt;/a&gt;
                    &lt;/nav&gt;
                    &lt;router-outlet&gt;&lt;/router-outlet&gt;
               &lt;/div&gt;`
})
export class AppComponent {}
</pre>
<p>А в главном модуле приложения установим маршруты:</p>
<pre class="brush:ts;">
import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
 
import {Routes, RouterModule} from '@angular/router';
 
import { AppComponent }   from './app.component';
import { AboutComponent }   from './about.component';
import { HomeComponent }   from './home.component';
import { AboutGuard }   from './about.guard';
 
// определение маршрутов
const appRoutes: Routes =[
    { path: '', component: HomeComponent},
    { path: 'about', component: AboutComponent, canActivate: [AboutGuard]}
];
 
@NgModule({
    imports:      [ BrowserModule, RouterModule.forRoot(appRoutes)],
    declarations: [ AppComponent, HomeComponent, AboutComponent],
	providers: 	  [AboutGuard],
    bootstrap:    [ AppComponent ]
})
export class AppModule { }
</pre>
<p>Чтобы ограничить доступ по маршруту "/about", в определении этого маршрута прописывается параметр <code>canActivate: [AboutGuard]</code>.</p>
<p>Кроме того, AboutGuard должен быть указан в списке провайдеров модуля:</p>
<pre class="brush:ts;">providers: [AboutGuard]</pre>
<p>В итоге при попытке перехода по маршруту "/about", отобразится диалоговое окно с подтверждением перехода.</p>
<img src="./pics/7.14.png" alt="Guards in Angular" />
<h3>CanDeactivate</h3>
<p>CanDeactivate также позволяет управлять переходами. Он предназначен для таких, к примеру, случаев когда пользователь вводит какие-то данные. Однако 
не сохраняет их и покидает страницу. В этом случае мы могли бы выдать пользователю какое-либо предупреждение или окно с подтверждением перехода, 
чтобы избежать потери введенных данных.</p>
<p>То есть, если сравнивать с CanActivate, CanActivate проверяет возможность перехода на определенный компонент, а CanDeactivate 
проверяет возможность ухода с определенного компонента.</p>
<p>Для примера добавим в папку <span class="ii">src/app</span> новый файл <span class="b">exit.about.guard.ts</span>:</p>
<pre class="brush:ts;">
import {CanDeactivate} from "@angular/router";
import {Observable} from "rxjs";

export interface ComponentCanDeactivate{
	canDeactivate: () =&gt; boolean | Observable&lt;boolean&gt;;
}

export class ExitAboutGuard implements CanDeactivate&lt;ComponentCanDeactivate&gt;{

	canDeactivate(component: ComponentCanDeactivate) : Observable&lt;boolean&gt; | boolean{
		
		return component.canDeactivate ? component.canDeactivate() : true;
	}
}
</pre>
<p>ExitAboutGuard должен реализовать метод <code>canDeactivate()</code> интерфейса CanDeactivate. Этот метод собственно и управляет уходом с компонента и переходом на другой компонент.</p>
<p>Для управления навигацией в этот метод передается компонент, с которого осуществляется переход. Благодаря этому мы можем учитывать состояние компонента при переходе. 
Но передаваемый параметр должен реализовать определенный интерфейс - в данном случае ComponentCanDeactivate. Выше определен этот интерфейс:</p>
<pre class="brush:ts;">
export interface ComponentCanDeactivate{
	canDeactivate: () =&gt; boolean | Observable&lt;boolean&gt;;
}
</pre>
<p>Название интерфейса не столь важно, главное, чтобы он определял метод <code>canDeactivate()</code>, который возвращает объект <code>boolean | Observable&lt;boolean&gt;</code>. 
Если нельзя осуществить переход, то возвращается значение false, иначе возвращается значение true. Это может быть просто логическое значение, либо же логическое значение, обернутое в 
объект Observable.</p>
<p>Допустим, мы хотим управлять навигацией с компонента AboutComponent. В этом случае класс AboutComponent должен реализовать интерфейс ComponentCanDeactivate:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
import {ComponentCanDeactivate} from './exit.about.guard';
import {Observable} from "rxjs";
 
@Component({
    selector: 'about-app',
    template: `&lt;h3&gt;О сайте&lt;/h3&gt;
				&lt;button class="btn btn-default" (click)="save()"&gt;Сохранить&lt;/button&gt;
				&lt;a routerLink=""&gt;На главную&lt;/a&gt;
				`
})
export class AboutComponent implements ComponentCanDeactivate { 
	saved: boolean = false;
	save(){
		this.saved = true;
	}
	
	canDeactivate() : boolean | Observable&lt;boolean&gt;{
	
		if(!this.saved){
			return confirm("Вы хотите покинуть страницу?");
		}
		else{
			return true;
		}
	}
}
</pre>
<p>Для имитации функционала в класс AboutComponent добавлено свойство <code>saved</code>, которое указывает, сохранены ли данные. С помощью метода <code>save()</code>, 
который вызывается по нажатию на кнопку, мы можем управлять значением этой переменной. К примеру, нажали на кнопку, значит данные сохранены, и свойство saved равно 
true.</p>
<p>Далее в классе AboutComponent реализуем метод <code>canDeactivate()</code>. Этот метод и будет вызываться в ExitAboutGuard. Поэтому в этом методе мы можем проверить 
состояние компонента и решить, стоит ли делать переход, надо ли выполнить какие-то дополнительные действия и т.д.</p>
<p>В данном случае, если <code>this.saved == false</code> (то есть условно, если данные не сохранены), то выводим диалоговое окно для подтверждения действия.</p>
<p>Чтобы задействовать ExitAboutGuard, изменим модуль AppModule:</p>
<pre class="brush:ts;">
import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
 
import {Routes, RouterModule} from '@angular/router';
 
import { AppComponent }   from './app.component';
import { AboutComponent }   from './about.component';
import { HomeComponent }   from './home.component';
import { AboutGuard }   from './about.guard';
import {ExitAboutGuard} from './exit.about.guard';
 
const appRoutes: Routes =[
    { path: '', component: HomeComponent},
    { 
		path: 'about', 
		component: AboutComponent, 
		canActivate: [AboutGuard],
		canDeactivate: [ExitAboutGuard]
	}
];
 
@NgModule({
    imports:      [ BrowserModule, RouterModule.forRoot(appRoutes)],
    declarations: [ AppComponent, HomeComponent, AboutComponent],
	providers: 	  [ AboutGuard, ExitAboutGuard],
    bootstrap:    [ AppComponent ]
})
export class AppModule { }
</pre>
<p>Во-первых, в определении маршрута добавляется параметр</p>
<pre class="brush:ts;">canDeactivate: [ExitAboutGuard]</pre>
<p>Во-вторых, сам класс ExitAboutGuard добавляется в список провайдеров:</p>
<pre class="brush:ts;">providers: [ AboutGuard, ExitAboutGuard],</pre>
<p>И теперь при попытки ухода с компонента AboutComponent (если saved == false), мы увидим диалоговое окно для подтверждения перехода:</p>
<img src="./pics/7.15.png" alt="CanDeactivate Guard in Angular 2" />
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


<div class="nav"><p><a href="./7.6.php">Назад</a><a href="./">Содержание</a><a href="./8.1.php">Вперед</a></p></div></div>
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