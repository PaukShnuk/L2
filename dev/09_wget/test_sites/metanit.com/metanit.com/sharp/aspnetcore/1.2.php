<!DOCTYPE html>
<html >
<head>
<title>Angular в ASP.NET Core | Простейший CRUD интерфейс</title>
<meta charset="utf-8" />
<meta name="description" content="Определение простейшего CRUD интерфейса в Angular и ASP.NET Core, взаимодействие клиента и сервера, добавление, изменение и удаление данных">
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
<h2>Простейший CRUD интерфейс</h2><div class="date">Последнее обновление: 18.02.2020</div>

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

<p>Создадим приложение на ASP.NET Core в связке с Angular, которое будет реализовать простейший CRUD интерфейс, то есть выполнять базовые опреации 
по чтению, добавлению, изменению и удалению данных. За основу возьмем проект из прошлой темы:</p>
<img src="./pics/1.5.png" alt="Первый проект Angular в ASP.NET Core" />
<h3>Сервис Web API</h3>
<p>Вначале определим логику на стороне сервера. Для этого создадим в проекте новую папку <span class="b">Models</span>, которая будет содержать модели. 
Затем добавим в нее класс <span class="b">Product</span>:</p>
<pre class="brush:c#;">
public class Product
{
	public int Id { get; set; }
	public string Name { get; set; }	// название 
	public string Company { get; set; }	// производитель
	public int Price { get; set; }	// цена
}
</pre>
<p>Данный класс представляет данные о товарах, которые будут храниться в базе данных.</p>
<p>Для работы с БД добавим в проект через Nuget пакет <span class="b">Microsoft.EntityFrameworkCore.SqlServer</span>. И затем в папке Models определим класс контекста данных 
<span class="b">ApplicationContext</span>:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;

namespace HelloAngularApp.Models
{
    public class ApplicationContext : DbContext
    {
        public ApplicationContext(DbContextOptions&lt;ApplicationContext&gt; options) 
            : base(options)
        { 
			Database.EnsureCreated();
		}

        public DbSet&lt;Product&gt; Products { get; set; }
    }
}
</pre>
<p>Далее определим собственно ту логику, которая будет выполняться на сервере. Добавим в проект папку <span class="b">Controllers</span>. 
Затем в этой папке определим класс контроллера <span class="b">ProductController</span>:</p>
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
        public IEnumerable&lt;Product&gt; Get()
        {
            return db.Products.ToList();
        }

        [HttpGet("{id}")]
        public Product Get(int id)
        {
            Product product = db.Products.FirstOrDefault(x =&gt; x.Id == id);
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
            Product product = db.Products.FirstOrDefault(x =&gt; x.Id == id);
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
<p>Контроллер получает через конструктор констект данных и через него производит различные операции с данными из БД.</p>
<p>И изменим файл <span class="b">Startup.cs</span>:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Hosting;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Extensions.Hosting;
using Microsoft.AspNetCore.SpaServices.AngularCli;
using Microsoft.EntityFrameworkCore;
using HelloAngularApp.Models;

namespace HelloAngularApp
{
    public class Startup
    {
        public void ConfigureServices(IServiceCollection services)
        {
            string connectionString = "Server=(localdb)\\mssqllocaldb;Database=productsdb;Trusted_Connection=True;";
            services.AddDbContext&lt;ApplicationContext&gt;(options =&gt; options.UseSqlServer(connectionString));

            services.AddControllers();

            services.AddSpaStaticFiles(configuration =&gt;
            {
                configuration.RootPath = "ClientApp/dist";
            });
        }

        public void Configure(IApplicationBuilder app, IWebHostEnvironment env)
        {
            if (env.IsDevelopment())
            {
                app.UseDeveloperExceptionPage();
            }
            app.UseStaticFiles();
            if (!env.IsDevelopment())
            {
                app.UseSpaStaticFiles();
            }

            app.UseRouting();

            app.UseEndpoints(endpoints =&gt;
            {
                endpoints.MapControllers();
            });

            app.UseSpa(spa =&gt;
            {
                spa.Options.SourcePath = "ClientApp";
                
                if (env.IsDevelopment())
                {
                    spa.UseAngularCliServer(npmScript: "start");
                }
            });
        }
    }
}
</pre>
<p>Для работ с контроллером здесь добавляются соответствующие сервисы (<code>services.AddControllers()</code>). И также регистрируется контекст данных как сервис.</p>
<p>В методе Configure настраивается маршрутизация для контроллеров Web API (<code>endpoints.MapControllers()</code>).</p>

<h3>Модель данных</h3>
<p>После создания серверной части изменим клиентскую часть. В проекте в папке <span class="b">ClientApp/src/app</span> создадим файл 
<span class="b">product.ts</span>:</p>
<pre class="brush:ts;">
export class Product {
    constructor(
        public id?: number,
        public name?: string,
        public company?: string,
        public price?: number) { }
}
</pre>
<p>Этот класс аналогичен модели Product, которая используется на стороне сервера, и будет представлять используемые данные.</p>
<h3>Создание http-сервиса</h3>
<p>Также в папку <span class="b">ClientApp/src/app</span> добавим новый файл <span class="b">data.service.ts</span>:</p>
<pre class="brush:ts;">
import { Injectable } from '@angular/core';
import { HttpClient} from '@angular/common/http';
import { Product } from './product';

@Injectable()
export class DataService {

    private url = "/api/products";

    constructor(private http: HttpClient) {
    }

    getProducts() {
        return this.http.get(this.url);
    }
	
	getProduct(id: number) {
        return this.http.get(this.url + '/' + id);
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
<p>Здесь определен сервис, через который клиент будет взаимодействовать с сервером. Чтобы его можно было внедрять в другие классы, к этому сервису 
применяется декоратор <span class="b">@Injectable</span>.</p>
<p>Сервис определяет четыре метода для отправки данных на сервер различным 
методам контроллера ProductController. Поскольку этот контроллер будет запускаться по адресу "/api/products", то соответственно по этому адресу будут отправляться запросы. 
Для отправки запросов используется класс HttpClient из пакета @angular/common/http.</p>
<p>Чтобы получить все данные с сервера, выполняется метод <code>getProducts</code>:</p>
<pre class="brush:ts;">
getProducts() {
	return this.http.get(this.url);
}
</pre>
<p>Здесь вызывается метод <code>get</code> объекта HttpClient, в который передается адрес сервера.</p>
<p>В методе <code>createProduct()</code> отправляем новый объект Product на сервер.</p>
<pre class="brush:ts;">
createProduct(product: Product) {
	return this.http.post(this.url, product);
}
</pre>
<p>Метод <code>updateProduct()</code> получает через параметр измененный объект и отправляет его на сервер с помощью метода put класса HttpClient:</p>
<pre class="brush:ts;">
updateProduct(product: Product) {
	return this.http.put(this.url, product);
}
</pre>
<p>В метод put также передается адрес и отправляемый объект.</p>
<p>И в методе <code>deleteProduct()</code> производится удаление объекта по id:</p>
<pre class="brush:ts;">
deleteProduct(id: number) {
	return this.http.delete(this.url + '/' + id);
}
</pre>
<h3>Создание компонента</h3>
<p>Используем этот сервис. Для этого определим в папке <span class="b">ClientApp/src/app</span> следующий файл 
<span class="b">app.component.ts</span>:</p>
<pre class="brush:ts;">
import { Component, OnInit } from '@angular/core';
import { DataService } from './data.service';
import { Product } from './product';

@Component({
    selector: 'app',
    templateUrl: './app.component.html',
    providers: [DataService]
})
export class AppComponent implements OnInit {

    product: Product = new Product();   // изменяемый товар
    products: Product[];                // массив товаров
    tableMode: boolean = true;          // табличный режим

    constructor(private dataService: DataService) { }

    ngOnInit() {
        this.loadProducts(); 	// загрузка данных при старте компонента  
    }
	// получаем данные через сервис
    loadProducts() {
        this.dataService.getProducts()
            .subscribe((data: Product[]) =&gt; this.products = data);
    }
	// сохранение данных
    save() {
        if (this.product.id == null) {
            this.dataService.createProduct(this.product)
                .subscribe((data: Product) =&gt; this.products.push(data));
        } else {
            this.dataService.updateProduct(this.product)
                .subscribe(data =&gt; this.loadProducts());
        }
        this.cancel();
    }
    editProduct(p: Product) {
        this.product = p;
    }
    cancel() {
        this.product = new Product();
        this.tableMode = true;
    }
    delete(p: Product) {
        this.dataService.deleteProduct(p.id)
            .subscribe(data =&gt; this.loadProducts());
    }
    add() {
        this.cancel();
        this.tableMode = false;
    }
}
</pre>
<p>Для использования сервис DataService добавляется в свойстве <span class="b">providers</span>. И затем мы сможем получить этот сервис через конструктор класса AppComponent.</p>
<p>Класс компонента определяет три переменных. Переменная <code>product</code> представляет товар, который будет добавляться или 
редактироваться. Переменная <code>tableMode</code> представляет логическое значение, которое указывает, находимся ли мы в процессе добавления нового объекта или 
в процессе просмотра всех объектов в виде таблицы. А переменная<code>products</code> хранит все полученные с сервера данные.</p>
<p>В методе <code>OnInit()</code>, который выполняется при запуске компонента, будет выполняться начальная загрузка данных. Сама загрузка 
данных производится в методе <code>loadProducts()</code>. Здесь идет обращение к методу getProducts, который определен в сервисе. 
Запрос фактически выполняется после вызова функции <code>subscribe()</code>, в которой через параметр стрелочной функции получаем данные и 
передаем эти данные переменной products.</p>
<p>Метод <code>save()</code> сохраняет объект. Если id объекта не установлен, то мы имеем дело с добавлением нового объекта. В зависимости от того, 
что происходит - добавление или изменение вызывается определенный метод сервиса. Полученный с сервера при добавлении объект затем добавляется в массив products. 
При редактировании просто перезагружаем данные.</p>
<p>Метод <code>editProduct()</code> устанавливает редактируемый объект.</p>
<p>Метод <code>cancel()</code> сбрасывает состояние к начальному.</p>
<p>Метод <code>delete()</code> удаляет объект, вызывая соответствующий метод сервиса.</p>
<p>Метод <code>add()</code> изменяем режим и фактически переключает пользователя с просмотра объектов в виде таблицы на добавление нового объекта.</p>
<h3>Создание представления</h3>
<p>Класс AppComponent для определения визуальной части использует файл <span class="b">app.component.html</span>. Определим этот файл в папке 
<span class="b">ClientApp/src/app</span> и определим в нем следующее содержимое:</p>
<pre class="brush:xml;">
&lt;h1&gt;Список моделей&lt;/h1&gt;
&lt;input type="button" value="Добавить" class="btn btn-default" (click)="add()" /&gt;
&lt;table *ngIf="tableMode; else create" class="table table-striped"&gt;
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
            &lt;ng-template [ngIf]="product?.id != p.id" [ngIfElse]="edit"&gt;
                &lt;td&gt;{{p?.name}}&lt;/td&gt;
                &lt;td&gt;{{p?.company}}&lt;/td&gt;
                &lt;td&gt;{{p?.price}}&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary" (click)="editProduct(p)"&gt;Изменить&lt;/button&gt;
                    &lt;button class="btn btn-sm btn-danger" (click)="delete(p)"&gt;Удалить&lt;/button&gt;
                &lt;/td&gt;
            &lt;/ng-template&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;

&lt;!--шаблон для редактирования--&gt;
&lt;ng-template #edit&gt;
    &lt;td&gt;
        &lt;input type="text" [(ngModel)]="product.name" class="form-control" /&gt;
    &lt;/td&gt;
    &lt;td&gt;
        &lt;input type="text" [(ngModel)]="product.company" class="form-control" /&gt;
    &lt;/td&gt;
    &lt;td&gt;
        &lt;input type="number" [(ngModel)]="product.price" class="form-control" /&gt;
    &lt;/td&gt;
    &lt;td&gt;
        &lt;input type="button" value="Сохранить" (click)="save()" class="btn btn-sm btn-success" /&gt;
        &lt;input type="button" value="Отмена" (click)="cancel()" class="btn btn-sm btn-warning" /&gt;
    &lt;/td&gt;
&lt;/ng-template&gt;

&lt;!--шаблон для добавления--&gt;
&lt;ng-template #create&gt;
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
    &lt;div&gt;
        &lt;input type="button" value="Сохранить" (click)="save()" class="btn btn-success" /&gt;
        &lt;input type="button" value="Отмена" (click)="cancel()" class="btn btn-warning" /&gt;
    &lt;/div&gt;
&lt;/ng-template&gt;
</pre>
<p>В начале разметки определена кнопка, которая переключает режим страницы с просмотра данных на их добавление. Затем собственно идет таблица с данными. 
Причем таблица использует директиву <code>*ngIf="tableMode; else create"</code>, то есть если tableMode равна true, то отображается данный элемент table. 
Иначе вместо элемента table отображается разметка шаблона create, который определен в конце файла. Шаблон create содержит набор полей для ввода данных объекта Product. 
То есть с помощью кнопки мы можем переключаться с элемента table на шаблон create и обратно.</p>
<p>В таблице выводятся все данные, возвращаемые геттером products. При этом для каждой строки используется определенный шаблон:</p>
<pre class="brush:xml;">&lt;ng-template [ngIf]="product?.id != p.id" [ngIfElse]="edit"&gt;</pre>
<p>То есть если id объекта из переменной product НЕ равен id текущему объекту, то просто выводим данные. 
Если id обоих объектов равны, то вместо этого шаблона применяется шаблон edit, который определен в конце файла.</p>
<p>В какой ситуации id объектов будут равны? Для каждой строки определены две кнопки - для удаления и изменения. При нажатии на кнопку изменения 
переменной product передается тот объект, который мы хотим изменить. А это значит что id у данного объекта из таблицы равно id объекта из переменной product, 
поэтому для данного объекта применяется шаблон edit, который содержит поля для редактирования.</p>
<h3>Изменение модуля</h3>
<p>Чтобы взаимодействие с сервером заработало, изменим в папке <span class="b">ClientApp/src/app</span> файл <span class="b">app.module.ts</span> 
следующим образом:</p>
<pre class="brush:ts;">
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { AppComponent } from './app.component';

@NgModule({
    imports: [BrowserModule, FormsModule, HttpClientModule],
    declarations: [AppComponent],
    bootstrap: [AppComponent]
})
export class AppModule { }
</pre>
<p>Для выполнения запросов и работы с http здесь импортируется модуль HttpClientModule.</p>
<p>В итоге весь проект будет выглядеть следующим образом:</p>
<img src="./pics/1.7.png" alt="ASP.NET Core 3 и Angular 9" />
<p>Запустим проект, и мы увидим таблицу с данными:</p>
<img src="./pics/1.8.png" alt="CRUD в ASP.NET Core и Angular" />
<p>Если мы нажмем на кнопку изменения, то строка перейдет в режим редактирования:</p>
<img src="./pics/1.9.png" alt="Редактирование в ASP.NET Core и Angular" />
<p>При нажатии на кнопку добавления мы перейдем к форме добавления нового объекта:</p>
<img src="./pics/1.10.png" alt="Добавление данных в ASP.NET Core и Angular" />
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


<div class="nav"><p><a href="1.1.php">Назад</a><a href="./">Содержание</a><a href="1.3.php">Вперед</a></p></div></div>
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