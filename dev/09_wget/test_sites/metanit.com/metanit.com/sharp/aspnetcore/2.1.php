<!DOCTYPE html>
<html >
<head>
<title>Angular в ASP.NET Core | Маршрутизация</title>
<meta charset="utf-8" />
<meta name="description" content="Маршрутизация в Angular и ASP.NET Core, добавление маршрутов, router-outlet, создание ссылок и routerLink, параметры маршрута">
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
<h1>Маршрутизация</h1><h2>Управление маршрутами</h2><div class="date">Последнее обновление: 18.02.2020</div>

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

<p>Маршрутизация позволяет сопоставлять запросы к приложению с определенными ресурсами внутри приложения. Рассмотрим, как использовать 
маршрутизацию Angular в связке с ASP.NET Core. Возьмем, к примеру приложение из прошлой темы:</p>
<img src="./pics/1.7.png" alt="ASP.NET Core 3 и Angular 9" />
<p>В частности, в проекте определен контроллер ProductController:</p>
<pre class="brush:c#;">
using System.Collections.Generic;
using System.Linq;
using Microsoft.AspNetCore.Mvc;
using HelloAngularApp.Models;

namespace HelloAngularApp.Controllers
{
    [ApiController]
    [Route("api/products")]
    public class ProductController : Controller
    {
        ApplicationContext db;
        public ProductController(ApplicationContext context)
        {
            db = context;
            if (!db.Products.Any())
            {
                db.Products.Add(new Product { Name = "iPhone X", Company = "Apple", Price = 79900 });
                db.Products.Add(new Product { Name = "Galaxy S8", Company = "Samsung", Price = 49900 });
                db.Products.Add(new Product { Name = "Pixel 2", Company = "Google", Price = 52900 });
                db.SaveChanges();
            }
        }
        [HttpGet]
        public IEnumerable&gt;Product&lt; Get()
        {
            return db.Products.ToList();
        }

        [HttpGet("{id}")]
        public Product Get(int id)
        {
            Product product = db.Products.FirstOrDefault(x =&lt; x.Id == id);
            return product;
        }

        [HttpPost]
        public IActionResult Post(Product product)
        {
            if (ModelState.IsValid)
            {
                db.Products.Add(product);
                db.SaveChanges();
                return Ok(product);
            }
            return BadRequest(ModelState);
        }

        [HttpPut]
        public IActionResult Put(Product product)
        {
            if (ModelState.IsValid)
            {
                db.Update(product);
                db.SaveChanges();
                return Ok(product);
            }
            return BadRequest(ModelState);
        }

        [HttpDelete("{id}")]
        public IActionResult Delete(int id)
        {
            Product product = db.Products.FirstOrDefault(x =&lt; x.Id == id);
            if (product != null)
            {
                db.Products.Remove(product);
                db.SaveChanges();
            }
            return Ok(product);
        }
    }
}
</pre>
<p>И в папке <span class="b">ClientApp/src/app</span> в файле <span class="b">data.service.ts</span> определен сервис, который отправляет 
запрос к этому контроллеру:</p>
<pre class="brush:ts;">
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Product } from './product';

@Injectable()
export class DataService {

    private url = "/api/products";

    constructor(private http: HttpClient) {
    }

    getProducts() {
        return this.http.get(this.url);
    }

    createProduct(product: Product) {
        return this.http.post(this.url, product);
    }
    updateProduct(product: Product) {

        return this.http.put(this.url, product);
    }
    deleteProduct(id: number) {
        return this.http.delete(this.url + '/' + id);
    }
}
</pre>
<p>Вначале добавим в папку <span class="b">ClientApp/src/app</span> новый файл <span class="b">product-detail.component.ts</span>, который будет 
выводить данные об одном товаре:</p>
<pre class="brush:ts;">
import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { DataService } from './data.service';
import { Product } from './product';

@Component({
    templateUrl: './product-detail.component.html',
    providers: [DataService]
})
export class ProductDetailComponent implements OnInit {

    id: number;
    product: Product;
    loaded: boolean = false;

    constructor(private dataService: DataService, activeRoute: ActivatedRoute) {
        this.id = Number.parseInt(activeRoute.snapshot.params["id"]);
    }

    ngOnInit() {
        if (this.id)
            this.dataService.getProduct(this.id)
                .subscribe((data: Product) =&gt; { this.product = data; this.loaded = true; });
    }
}
</pre>
<p>Здесь мы предполагаем, что этому компоненту через параметр маршрута будет передаваться идентификатор товара, информацию о котором надо отобразить. 
В конструкторе через объект типа <span class="b">ActivatedRoute</span> (<code>activeRoute.snapshot.params["id"]</code>) мы можем получить значение id товара и сохранить его в переменную. 
В данном случае параметр маршрута будет также называться "id".</p>
<p>Затем в методе <code>ngOnInit()</code> отправляем серверу запрос, в который передаем ранее полученный id, и в качетве ответа от сервера 
получаем нужный нам товар. А с помощью дополнительной переменной <code>loaded</code> мы можем указать, что данные загружены.</p>
<p>Для вывода информации о товаре компонент будет использовать файл <span class="b">product-detail.component.html</span>. Поэтому добавим этот файл в 
папку <span class="b">ClientApp/src/app</span> и определим в нем следующее содержимое:</p>
<pre class="brush:xml;">
&lt;div *ngIf="loaded"&gt;
    &lt;h2&gt;Модель {{product.id}}&lt;/h2&gt;
    &lt;div&gt;
        &lt;p&gt;&lt;b&gt;Модель:&lt;/b&gt; {{product.name}}&lt;/p&gt;
        &lt;p&gt;&lt;b&gt;Производитель:&lt;/b&gt; {{product.company}}&lt;/p&gt;
        &lt;p&gt;&lt;b&gt;Цена:&lt;/b&gt; {{product.price}}&lt;/p&gt;
        &lt;p&gt;&lt;a routerLink="/" class="nav-link"&gt;К списку моделей&lt;/a&gt;&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
<p>Если данные загружены с сервера (то есть переменная loaded равна true), то будут выводиться данные о товаре.</p>
<p>В конце файла определена ссылка на корень приложения. Чтобы привязать ссылку к определенному адресу внутри приложения Angular, 
у элемента ссылки устанавливается атрибут <code>routerLink</code>, который указывает на нужный адрес. В данном случае в качестве адреса применяется 
"/", то есть корневой адрес приложения, по которому будет выводиться список товаров.</p>
<p>Теперь добавим в папку <span class="b">ClientApp/src/app</span> новый файл <span class="b">product-list.component.ts</span>, который будет 
собственно и будет представлять список товаров:</p>
<pre class="brush:ts;">
import { Component, OnInit } from '@angular/core';
import { DataService } from './data.service';
import { Product } from './product';

@Component({
    templateUrl: './product-list.component.html',
    providers: [DataService]
})
export class ProductListComponent implements OnInit {

    products: Product[]; 
    constructor(private dataService: DataService) { }

    ngOnInit() {
        this.dataService.getProducts().subscribe((data: Product[]) =&gt; this.products = data);
    }
}
</pre>
<p>При загрузке компонента будут загружаться данные с сервера с помощью метода <code>this.dataService.getProducts()</code>. 
Для вывода данных определим в той же папке файл <span class="b">product-list.component.html</span>:</p>
<pre class="brush:xml;">
&lt;h2&gt;Список моделей&lt;/h2&gt;
&lt;table class="table table-striped"&gt;
    &lt;tbody&gt;
        &lt;tr *ngFor="let p of products"&gt;
            &lt;td&gt;&lt;a [routerLink]="['product', p.id]" class="nav-link"&gt;{{p?.name}}&lt;/a&gt;&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
</pre>
<p>Здесь выводится список объектов. Для каждого объекта выводится только значение поля name, которое заключено в ссылку. 
Данная ссылка указывает на определенный путь внутри приложения Angular, который определяется с помощью атрибута <code>[routerLink]</code>. 
При этом теперь этот атрибут фактически принимает массив компонентов, из которых будет создаваться путь. Для создания пути передается строка  
"product" и id элемента. То есть в итоге получатся пути типа "product/3" или "product/5". Предполагается, что при переходе по таким путям мы 
будет попадать на компонент ProductDetailComponent, который будет получать id и выводить информацию о товаре.</p>
<p>В итоге весь проект будет выглядеть следующим образом:</p><img src="./pics/2.6.png" alt="Routing in ASP.NET Core Web API and Angular" />
<p>Теперь изменим файл модуля <span class="b">app.module.ts</span>, в котором сопоставим компоненты с определенными маршрутами:</p>
<pre class="brush:ts;">
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { Routes, RouterModule } from '@angular/router';

import { AppComponent } from './app.component';
import { ProductListComponent } from './product-list.component';
import { ProductDetailComponent } from './product-detail.component';

// определение маршрутов
const appRoutes: Routes = [
    { path: '', component: ProductListComponent },
    { path: 'product/:id', component: ProductDetailComponent },
    { path: '**', redirectTo: '/' }
];

@NgModule({
    imports: [BrowserModule, FormsModule, HttpClientModule, RouterModule.forRoot(appRoutes)],
    declarations: [AppComponent, ProductListComponent, ProductDetailComponent],
    bootstrap: [AppComponent]
})
export class AppModule { }
</pre>
<p>Прежде всего здесь определены маршруты в виде объекта Route. Первый маршурт сопоставляется с корнем сайта и будет обрабатываться компонентом 
ProductListComponent:</p>
<pre class="brush:ts;">{ path: '', component: ProductListComponent }</pre>
<p>Второй маршрут будет сопоставляться с путем "product/id", где вместо id будет указан идентификатор товара. И такой маршрут будет 
обрабатываться компонентом ProductDetailComponent:</p>
<pre class="brush:ts;">{ path: 'product/:id', component: ProductDetailComponent }</pre>
<p>Для всех остальных путей ("**") будет идти переадресация на корень приложения.</p>
<p>И другой важный момент состоит в импорте всех нужных модулей:</p>
<pre class="brush:ts;">imports: [BrowserModule, FormsModule, HttpClientModule, RouterModule.forRoot(appRoutes)],</pre>
<p>и в добавлении всех ранее используемых компонентов:</p>
<pre class="brush:ts;">declarations: [AppComponent, ProductListComponent, ProductDetailComponent],</pre>
<p>Теперь изменим определение главного компонента AppComponent в файле <span class="b">app.component.ts</span>:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';

@Component({
    selector: 'app',
    templateUrl: './app.component.html'
})
export class AppComponent { }
</pre>
<p>И определим в файле <span class="b">app.component.html</span> следующий код:</p>
<pre class="brush:xml;">
&lt;div class="container body-content"&gt;
    &lt;router-outlet&gt;&lt;/router-outlet&gt;
&lt;/div&gt;
</pre>
<p>В элемент <code>&lt;router-outlet&gt;</code> как раз и будет загружаться выбранный для обработки маршрута компонент.</p>
<p>И еще один важный момент, который надо учитывать при работе с маршрутизацией: на веб-странице должен быть указан элемент base:</p>
<pre class="brush:xml;">
&lt;base href="/" /&gt;
</pre>
<p>В частности, веб-страница index.html, которая расположена в проекте в папке <span class="b">ClientApp/src</span> и которая загружается по умолчанию, должна содержать этот элемент:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;base href="/" /&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0" /&gt;
    &lt;title&gt;Angular in ASP.NET Core&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.main.css" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;app&gt;Загрузка...&lt;/app&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Запустим приложение, и по умолчанию будет идти запрос к корню приложения, а значит такой запрос будет обрабатываться компонентом ProductListComponent, 
который выведет список товаров:</p>
<img src="./pics/2.1.png" alt="Маршрутизация в Angular и ASP.NET Core" />
<p>Если мы перейдем по ссылке, которую представляет товар, то такой запрос будет обрабатываться компонентом ProductDetailComponent, и 
соответственно мы в браузере увидим информацию о товаре:</p>
<img src="./pics/2.2.png" alt="Routing in Angular и ASP.NET Core" />
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


<div class="nav"><p><a href="1.3.php">Назад</a><a href="./">Содержание</a><a href="2.3.php">Вперед</a></p></div></div>
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