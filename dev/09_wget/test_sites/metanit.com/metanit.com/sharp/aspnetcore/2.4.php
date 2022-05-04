<!DOCTYPE html>
<html >
<head>
<title>Angular в ASP.NET Core | CRUD и маршрутизация. Часть 2</title>
<meta charset="utf-8" />
<meta name="description" content="Создание CRUD интерфейса с системой маршрутизации в Angular и ASP.NET Core Web API. Определение функционала">
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
<h2>CRUD и маршрутизация. Часть 2</h2><div class="date">Последнее обновление: 18.02.2020</div>

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

<p>Продолжим работу с проектом из прошлой темы. И теперь в папке <span class="ii">ClientApp/src/app</span> определим файл <span class="b">product-form.component.ts</span>:</p>
<pre class="brush:ts;">
import { Component, Input } from '@angular/core';
import { Product } from './product';
@Component({
    selector: "product-form",
    templateUrl: './product-form.component.html'
})
export class ProductFormComponent {
    @Input() product: Product;
}
</pre>
<p>Этот компонент будет представлять форму (добавления или редактирования), данные которой будет представлять объект Product. Сам объект Product 
будет передаваться компоненту из вне. Поэтому к переменной компонента, которая будет хранить добавляемый или редактируемый объект Product, 
применяется декоратор <code>@Input</code>.</p>
<p>Этот компонент будет использовать файл <span class="b">product-form.component.html</span>, который определяет форму для ввода значений объекта Product. Поэтому добавим 
данный файл в папку <span class="ii">ClientApp/src/app</span> и определим в нем следующий код:</p>
<pre class="brush:xml;">
&lt;div class="form-group"&gt;
    &lt;label&gt;Модель&lt;/label&gt;
    &lt;input type="text" [(ngModel)]="product.name" class="form-control" /&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
    &lt;label&gt;Производитель&lt;/label&gt;
    &lt;input type="text" [(ngModel)]="product.company" class="form-control" /&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
    &lt;label&gt;Цена&lt;/label&gt;
    &lt;input type="number" [(ngModel)]="product.price" class="form-control" /&gt;
&lt;/div&gt;
</pre>
<p>Этот компонент будет использоваться при добавлении и редактировании. И теперь добавим в папку <span class="ii">ClientApp/src/app</span> новый 
файл <span class="b">product-create.component.ts</span>, который будет хранит компонент добавления нового объекта:</p>
<pre class="brush:ts;">
import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { DataService } from './data.service';
import { Product } from './product';

@Component({
    templateUrl: './product-create.component.html'
})
export class ProductCreateComponent {

    product: Product = new Product();    // добавляемый объект
    constructor(private dataService: DataService, private router: Router) { }
    save() {
        this.dataService.createProduct(this.product).subscribe(data =&gt; this.router.navigateByUrl("/"));
    }
}
</pre>
<p>Этот компонент добавляет новый объект Product. Добавление производится в методе save с помощью метода createProduct у сервиса DataService. 
После добавления с помощью метода <code>router.navigateByUrl()</code> производится программный переход на корень приложения.</p>
<p>И также добавим в папку <span class="ii">ClientApp/src/app</span> файл <span class="b">product-create.component.html</span>, который будет использоваться этим компонентом:</p>
<pre class="brush:xml;">
&lt;div&gt;
    &lt;h2&gt;Добавление нового товара&lt;/h2&gt;
    &lt;product-form [(product)]="product"&gt;&lt;/product-form&gt;
    &lt;div class="form-group"&gt;
        &lt;input type="button" value="Сохранить" (click)="save()" class="btn btn-success" /&gt;
        &lt;a routerLink="/" class="btn btn-warning"&gt;Отмена&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
<p>Для определения формы здесь применяется компонент ProductFormComponent, а для сохранения объекта при нажатии на кнопку будет вызываться 
метод save.</p>
<p>Далее добавим в каталог <span class="ii">ClientApp/src/app</span> новый файл <span class="b">product-edit.component.ts</span>, 
который будет представлять компонент редактирования объекта:</p>
<pre class="brush:ts;">
import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { DataService } from './data.service';
import { Product } from './product';

@Component({
    templateUrl: './product-edit.component.html'
})
export class ProductEditComponent implements OnInit {

    id: number;
    product: Product;    // изменяемый объект
    loaded: boolean = false;

    constructor(private dataService: DataService, private router: Router, activeRoute: ActivatedRoute) {
        this.id = Number.parseInt(activeRoute.snapshot.params["id"]);
    }

    ngOnInit() {
        if (this.id)
            this.dataService.getProduct(this.id)
                .subscribe((data: Product) =&gt; {
                    this.product = data;
                    if (this.product != null) this.loaded = true;
                });
    }

    save() {
        this.dataService.updateProduct(this.product).subscribe(data =&gt; this.router.navigateByUrl("/"));
    }
}
</pre>
<p>Этот компонент с помощью системы маршрутизации будет получать id редактируемого объекта и вызывать у сервиса метод <code>getProduct()</code> 
для получения этого объекта.</p>
<p>С помощью метода <code>save()</code> измененный объект будет отправляться обратно на сервер, после чего будет выполняться программный переход на корень приложения, 
где будет выводиться список объектов.</p>
<p>И также добавим в папку <span class="ii">ClientApp/src/app</span> файл <span class="b">product-edit.component.html</span>, который будет представлять разметку компонента:</p>
<pre class="brush:xml;">
&lt;div *ngIf="loaded"&gt;
    &lt;h2&gt;Изменение данных о товаре&lt;/h2&gt;
    &lt;product-form [(product)]="product"&gt;&lt;/product-form&gt;
    &lt;div class="form-group"&gt;
        &lt;input type="button" value="Сохранить" (click)="save()" class="btn btn-success" /&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;a routerLink="/" class="nav-link"&gt;Назад к списку&lt;/a&gt;
</pre>
<p>Для редактирования здесь опять же используется форма, предоставляемая компонентом ProductFormComponent. А по нажатию на кнопку 
будет вызываться метод <code>save()</code>.</p>
<p>Затем определим в каталоге <span class="ii">ClientApp/src/app</span> файл <span class="b">product-list.component.ts</span>, который будет представлять 
компонент со списком объектов:</p>
<pre class="brush:ts;">
import { Component, OnInit } from '@angular/core';
import { DataService } from './data.service';
import { Product } from './product';

@Component({
    templateUrl: './product-list.component.html'
})
export class ProductListComponent implements OnInit {

    products: Product[]; 
    constructor(private dataService: DataService) { }

    ngOnInit() {
        this.load();
    }
    load() {
        this.dataService.getProducts().subscribe((data: Product[]) =&gt; this.products = data);
    }
    delete(id: number) {
        this.dataService.deleteProduct(id).subscribe(data =&gt; this.load());
    }
}
</pre>
<p>Этот компонент загружает все объекты из БД и кроме того определяет метод delete для удаления объекта по id.</p>
<p>Для этого компонента добавим в папку <span class="ii">ClientApp/src/app</span> файл <span class="b">product-list.component.html</span> со следующей разметкой:</p>
<pre class="brush:xml;">
&lt;div&gt;
    &lt;a routerLink="/create" class="nav-link"&gt;Добавить&lt;/a&gt;
&lt;/div&gt;
&lt;table class="table table-striped"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;td&gt;Модель&lt;/td&gt;
            &lt;td&gt;Производитель&lt;/td&gt;
            &lt;td&gt;Цена&lt;/td&gt;
            &lt;td&gt;&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr *ngFor="let p of products"&gt;
            &lt;td&gt;{{p?.name}}&lt;/td&gt;
            &lt;td&gt;{{p?.company}}&lt;/td&gt;
            &lt;td&gt;{{p?.price}}&lt;/td&gt;
            &lt;td&gt;
                &lt;a [routerLink]="['edit', p.id]" class="btn btn-sm btn-primary"&gt;Изменить&lt;/a&gt;
                &lt;button (click)="delete(p.id)" class="btn btn-sm btn-danger"&gt;Удалить&lt;/button&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
</pre>
<p>Здесь в табличном виде отображаются все загруженные объекты. Для каждого объекта определена ссылка, по нажатию на которую поизойдет переход 
к функционалу для редактирования выбранного объекта. Также для каждого объекта определена кнопка, по нажатию на которую будет выполняться метод <code>delete()</code>, 
который удалит выбранный объект.</p>
<p>Перед таблицей располагается ссылка на добавление нового объекта.</p>
<p>И в конце добавим в проект в папку <span class="ii">ClientApp/src/app</span> еще один файл <span class="b">not-found.component.ts</span>, 
который будет представлять компонент для несуществующих маршрутов:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';

@Component({
    template: '&lt;h2&gt;Not Found&lt;/h2&gt;'
})
export class NotFoundComponent {}
</pre>
<p>И зафиксируем все маршруты и сопоставим их с компонентами в файле <span class="b">app.module.ts</span>:</p>
<pre class="brush:ts;">
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { Routes, RouterModule } from '@angular/router';

import { AppComponent } from './app.component';
import { ProductListComponent } from './product-list.component';
import { ProductFormComponent } from './product-form.component';
import { ProductCreateComponent } from './product-create.component';
import { ProductEditComponent } from './product-edit.component';
import { NotFoundComponent } from './not-found.component';

import { DataService } from './data.service';

// определение маршрутов
const appRoutes: Routes = [
    { path: '', component: ProductListComponent },
    { path: 'create', component: ProductCreateComponent },
    { path: 'edit/:id', component: ProductEditComponent },
    { path: '**', component: NotFoundComponent }
];

@NgModule({
    imports: [BrowserModule, FormsModule, HttpClientModule, RouterModule.forRoot(appRoutes)],
    declarations: [AppComponent, ProductListComponent, ProductCreateComponent, ProductEditComponent,
        ProductFormComponent, NotFoundComponent],
    providers: [DataService], // регистрация сервисов
    bootstrap: [AppComponent]
})
export class AppModule { }
</pre>
<p>В данном случае путь "/create" будет сопоставляться с компонентом ProductCreateComponent, а путь "/edit/:id" - с компонентом ProductEditComponent. 
Маршрут по корневому пути будет обрабатываться компонентом ProductListComponent, а маршруты по остальным путям - компонентом NotFoundComponent.</p>
<p>В итоге проект будет выглядеть следующим образом:</p>
<img src="./pics/2.5.png" alt="CRUD с маршрутизацией в Angular 9 и ASP.NET Core Web API" />
<p>Запустим проект, и по умолчанию обращение будет идти к корню приложения, поэтому запрос будет обрабатываться компонентом 
ProductListComponent, и мы увидим список объектов:</p>
<img src="./pics/2.7.png" alt="List in CRUD Angular and ASP.NET Core" />
<p>А при нажатии на ссылку добавления или переходу к редактированию объекта откроется форма для ввода значений объекта:</p>
<img src="./pics/2.8.png" alt="Create and Edit in CRUD Angular and ASP.NET Core" />
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


<div class="nav"><p><a href="2.3.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в ASP.NET Core и Angular</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetcore/1.1.php">Первый проект на ASP.NET Core с Angular</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetcore/1.2.php">Простейший CRUD интерфейс</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetcore/1.3.php">Отправка запроса и получение ответа</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Маршрутизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetcore/2.1.php">Управление маршрутами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetcore/2.3.php">CRUD и маршрутизация. Часть 1</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetcore/2.4.php">CRUD и маршрутизация. Часть 2</a></span></li>
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
	
	$("li:contains('Глава 2.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 2.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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