<!DOCTYPE html>
<html >
<head>
<title>Angular | Первое приложение</title>
<meta charset="utf-8" />
<meta name="description" content="Создание первого приложения на Angular, введение в работу фреймворка, определение компонентов и модулей">
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
<h2>Первое приложение на Angular</h2><div class="date">Последнее обновление: 04.11.2021</div>

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

<p>В предыдущей теме были рассмотрены начальная информация об Angular и установка необходимых инструментов и настройка конфигурации для работы с фреймворком. Теперь же 
создадим первое приложение.</p>
<p>Для написания приложений нам потребуется обычный текстовый редактор, хотя можно использовать специальные среды программирования, как Visual Studio, 
Netbeans, WebStorm и другие.</p>
<p>Кроме того, для запуска приложения Angular потребуется веб-сервер. В качестве веб-сервера опять же можно использовать множество различных серверов - 
Apache, IIS, NodeJS и т.д. В данном случае мы будем опираться на NodeJS.</p>
<p>Итак, создадим на жестком диске папку приложения. Путь она будет называться <span class="b">purchaseapp</span>. В этой папке создадим новый файл 
<span class="b">package.json</span> со следующим содержимым:</p>
<pre class="brush:js;">
{
  "name": "purchaseapp",
  "version": "1.0.0",
  "description": "First Angular 13 Project",
  "author": "Eugene Popov metanit.com",
  "scripts": {
    "ng": "ng",
    "start": "ng serve",
    "build": "ng build"
  },
  "dependencies": {
    "@angular/common": "~13.0.0",
    "@angular/compiler": "~13.0.0",
    "@angular/core": "~13.0.0",
    "@angular/forms": "~13.0.0",
    "@angular/platform-browser": "~13.0.0",
    "@angular/platform-browser-dynamic": "~13.0.0",
    "@angular/router": "~13.0.0",
    "rxjs": "~7.4.0",
    "zone.js": "~0.11.4"
  },
  "devDependencies": {
    "@angular-devkit/build-angular": "~13.0.0",
    "@angular/cli": "~13.0.0",
    "@angular/compiler-cli": "~13.0.0",
    "@types/node": "~16.11.0",
    "typescript": "~4.4.4"
  }
}
</pre>
<p>Также добавим в папку проекта новый файл <span class="b">tsconfig.json</span>:</p>
<pre class="brush:js;">
{
  "compileOnSave": false,
  "compilerOptions": {
    "baseUrl": "./",
    "sourceMap": true,
    "declaration": false,
    "downlevelIteration": true,
    "experimentalDecorators": true,
    "module": "esnext",
    "moduleResolution": "node",
    "target": "es2020",
    "typeRoots": [
      "node_modules/@types"
    ],
    "lib": [
      "es2020",
      "dom"
    ]
  },
	"files": [
		"src/main.ts",
		"src/polyfills.ts"
	],
	"include": [
		"src/**/*.d.ts"
	]
}
</pre>
<p>Как было уже описано в прошлой теме, файл <span class="ii">package.json</span> устанавливает пакеты и зависимости, которые будут использоваться проектом.</p>
<p>Файл <span class="ii">tsconfig.json</span> устанавливает конфигурацию для компилятора TypeScript.</p>
<p>Для сборки проекта будем использовать Angular CLI, поэтому также определим в папке проекта файл <span class="b">angular.json</span>:</p>
<pre class="brush:js;">
{
  "version": 1,
  "projects": {
    "purchaseapp": {
      "projectType": "application",
      "root": "",
      "sourceRoot": "src",
      "architect": {
        "build": {
          "builder": "@angular-devkit/build-angular:browser",
          "options": {
            "outputPath": "dist/purchaseapp",
            "index": "src/index.html",
            "main": "src/main.ts",
            "polyfills": "src/polyfills.ts",
            "tsConfig": "tsconfig.json",
            "aot": true
          }
        },
        "serve": {
          "builder": "@angular-devkit/build-angular:dev-server",
          "options": {
            "browserTarget": "purchaseapp:build"
          }
        }
      }
    }},
  "defaultProject": "purchaseapp"
}
</pre>
<p>После создания этих трех файлов в папке проекта откроем командную строку (терминал) и перейдем в ней к папке проекта с помощью команды cd:</p>
<div class="console">
<pre class="consoletext">
C:\WINDOWS\system32&gt;cd C:\angular\purchaseapp
</pre>
</div>
<p>И затем выполним команду <code>npm install</code>, которая установит все необходимые модули:</p>
<div class="console">
<pre class="consoletext">
C:\angular\purchaseapp&gt;npm install
</pre>
</div>
<p>После выполнения этой команды в папке проекта должна появиться подпапка <span class="ii">node_modules</span>, которая содержит все используемые 
зависимости и пакеты.</p>
<p>Затем создадим в папке проекта каталог <span class="b">src</span>, а в этом каталоге определим папку <span class="b">app</span>.</p>
<p>В каталог <span class="ii">src/app</span> добавим новый файл, который назовем <span class="b">app.component.ts</span> и который будет иметь следующий код:</p>
<pre class="brush:ts;">
import { Component } from '@angular/core';
	
class Item{
	purchase: string;
	done: boolean;
	price: number;
	
	constructor(purchase: string, price: number) {
 
        this.purchase = purchase;
        this.price = price;
		this.done = false;
    }
}

@Component({
    selector: 'purchase-app',
    template: `&lt;div class="page-header"&gt;
        &lt;h1&gt; Список покупок &lt;/h1&gt;
    &lt;/div&gt;
    &lt;div class="panel"&gt;
        &lt;div class="form-inline"&gt;
            &lt;div class="form-group"&gt;
                &lt;div class="col-md-8"&gt;
                    &lt;input class="form-control" [(ngModel)]="text" placeholder = "Название" /&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;div class="col-md-6"&gt;
                    &lt;input type="number" class="form-control" [(ngModel)]="price" placeholder="Цена" /&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;div class="col-md-offset-2 col-md-8"&gt;
                    &lt;button class="btn btn-default" (click)="addItem(text, price)"&gt;Добавить&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;table class="table table-striped"&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                    &lt;th&gt;Предмет&lt;/th&gt;
                    &lt;th&gt;Цена&lt;/th&gt;
                    &lt;th&gt;Куплено&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr *ngFor="let item of items"&gt;
                    &lt;td&gt;{{item.purchase}}&lt;/td&gt;
                    &lt;td&gt;{{item.price}}&lt;/td&gt;
                    &lt;td&gt;&lt;input type="checkbox" [(ngModel)]="item.done" /&gt;&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
        &lt;/table&gt;
    &lt;/div&gt;`
})
export class AppComponent { 
	text: string = "";
    price: number = 0;
	
	items: Item[] = 
	[
        { purchase: "Хлеб", done: false, price: 15.9 },
        { purchase: "Масло", done: false, price: 60 },
        { purchase: "Картофель", done: true, price: 22.6 },
        { purchase: "Сыр", done: false, price:310 }
    ];
	addItem(text: string, price: number): void {
		
		if(text==null || text.trim()=="" || price==null)
			return;
        this.items.push(new Item(text, price));
    }
}
</pre>
<p>Первой строкой здесь импортируется функциональность компонента из angular/core.</p>
<p>Для работы нам потребуется вспомогательный класс Item. Этот класс содержит три поля: purchase (название покупки), done (сделана ли покупка) и price (ее цена).</p>
<p>В самом классе компонента определяется начальный список покупок, который будет выводиться на страницу:</p>
<pre class="brush:ts;">
items: Item[] = 
	[
        { purchase: "Хлеб", done: false, price: 15.9 },
        { purchase: "Масло", done: false, price: 60 },
        { purchase: "Картофель", done: true, price: 22.6 },
        { purchase: "Сыр", done: false, price:310 }
    ];
</pre>
<p>И также в классе определен метод добавления в этот список:</p>
<pre class="brush:ts;">
addItem(text: string, price: number): void {
		
	if(text==null || text.trim()=="" || price==null)
		return;
	this.items.push(new Item(text, price));
}
</pre>
<p>Для вывода покупок здесь определен большой шаблон. Вообще подобные большие шаблоны стоит выносить в отдельные файлы, чтобы сделать код компонента проще. Но в нашем 
случае пусть все пока будет определено в самом компоненте.</p>
<p>В самом шаблоне для вывода данных из массива items в таблицу предусмотрена директива:</p>
<pre class="brush:ts;">*ngFor="let item of items"</pre>
<p>Кроме того, сверху от таблицы расположена форма для ввода нового объекта Item. А к нажатию кнопки привязан метод <code>addItem()</code> компонента.</p>
<p>Чтобы задействовать этот компонент, добавим в каталог <span class="ii">src/app</span> файл модуля <span class="b">app.module.ts</span>:</p>
<pre class="brush:ts;">
import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule }   from '@angular/forms';
import { AppComponent }   from './app.component';
@NgModule({
    imports:      [ BrowserModule, FormsModule ],
    declarations: [ AppComponent ],
    bootstrap:    [ AppComponent ]
})
export class AppModule { }
</pre>
<p>Уровнем выше в каталоге <span class="ii">src</span> определим файл <span class="b">main.ts</span> для запуска проекта:</p>
<pre class="brush:ts;">
import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { AppModule } from './app/app.module';
const platform = platformBrowserDynamic();
platform.bootstrapModule(AppModule);
</pre>
<p>Также в каталоге <span class="ii">src</span> определим файл <span class="b">polyfills.ts</span>, который необходим для запуска приложения:</p>
<pre class="brush:ts;">
import 'zone.js/dist/zone';
</pre>
<p>В конце определим главную страницу <span class="b">index.html</span> в папке <span class="b">src</span>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Приложение покупок&lt;/title&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;purchase-app&gt;Загрузка...&lt;/purchase-app&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В итоге у нас получится следующая структура проекта:</p>
<img src="./pics/1.5.1.png" alt="Проект Angular и TypeScript" />
<p>Теперь запустим проект. Для этого в командной строке (терминале) перейдем к папке проекта и затем выполним команду <span class="ii">ng serve</span>:</p>
<div class="console">
<pre class="consoletext">
C:\angular\purchaseapp&gt;ng serve --open
</pre>
</div>
<p>После этого в веб-браузере обратимся к нашему приложению и увидем таблицу с покупками и форму для добавлени новой покупки:</p>
<img src="./pics/1.2.png" alt="Первое приложение на Angular 13" />
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


<div class="nav"><p><a href="./1.4.php">Назад</a><a href="./">Содержание</a><a href="./2.1.php">Вперед</a></p></div></div>
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