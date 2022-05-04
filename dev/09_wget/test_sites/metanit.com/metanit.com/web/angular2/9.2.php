<!DOCTYPE html>
<html >
<head>
<title>Angular | Grid и CRUD-операции</title>
<meta charset="utf-8" />
<meta name="description" content="Создание грида на Angular с возможностью редактирования и удаления элементов, взаимодействие с сервером">
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
<h2>Grid и CRUD-операции</h2><div class="date">Последнее обновление: 04.11.2021</div>

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

<p>Рассмотрим, как мы можем создать с помощью Angular подобие грида для вывода данных и совместить его с базовыми операциями по управлению данными.</p>
<p>Вначале создадим новый каталог для нашего приложения. Пусть он называется <span class="b">gridapp</span>. Определим в проекте файл <span class="b">package.json</span>:</p>
<pre class="brush:js;">
{
  "name": "gridapp",
  "version": "1.0.0",
  "description": "Grid Angular 13 Project",
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
<p>И затем установим все пакеты с помощью команды <span class="b">npm install</span>.</p>
<p>Далее добавим в проект файл <span class="b">tsconfig.json</span> с конфигурацией TypeScript:</p>
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
<p>И также добавим в проект файл <span class="b">angular.json</span>:</p>
<pre class="brush:js;">
{
  "version": 1,
  "projects": {
    "gridapp": {
      "projectType": "application",
      "root": "",
      "sourceRoot": "src",
      "architect": {
        "build": {
          "builder": "@angular-devkit/build-angular:browser",
          "options": {
            "outputPath": "dist/gridapp",
            "index": "src/index.html",
            "main": "src/main.ts",
            "polyfills": "src/polyfills.ts",
            "tsConfig": "tsconfig.json",
            "assets": ["src/assets"],
            "aot": true
          }
        },
        "serve": {
          "builder": "@angular-devkit/build-angular:dev-server",
          "options": {
            "browserTarget": "gridapp:build"
          }
        }
      }
    }},
  "defaultProject": "gridapp"
}
</pre>
<p>Затем в проекте создадим папку <span class="b">src</span>. А в этой папке создадим каталог <span class="b">app</span> и в начале определим в нем файл 
<span class="b">user.ts</span>, который будет описывать используемые данные:</p>
<pre class="brush:ts;">
export class User{
    constructor(
        public _id: number,
        public name: string,
        public age: number) { }
}
</pre>
<p>Класс User представляет пользователя и содержит три общедоступных поля _id (уникальный идентификатор), name (имя) и age (возраст).</p>
<p>Все данные, описываемые классом User, будут храниться на сервере в базе данных. Поэтому нам необходим сервис для взаимодействия с сервером. И для 
этой цели в папке <span class="b">src/app</span> создадим новый файл <span class="b">user.service.ts</span>, в котором определим класс UserService:</p>
<pre class="brush:ts;">
import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {User} from './user';
    
@Injectable()
export class UserService{
    
    private url = "http://localhost:3000/api/users";
    constructor(private http: HttpClient){ }
       
    getUsers(){
        return this.http.get&lt;Array&lt;User&gt;&gt;(this.url);
    }
   
    createUser(user: User){
        const myHeaders = new HttpHeaders().set("Content-Type", "application/json");
        return this.http.post&lt;User&gt;(this.url, JSON.stringify(user), {headers: myHeaders}); 
    }
    updateUser(user: User) {
        const myHeaders = new HttpHeaders().set("Content-Type", "application/json");
        return this.http.put&lt;User&gt;(this.url, JSON.stringify(user), {headers:myHeaders});
    }
    deleteUser(id: string){
	
        return this.http.delete&lt;User&gt;(this.url + '/' + id);
    }
}
</pre>
<p>Для сервиса определен url для всех запросов. По этому url будет запущено приложение сервера. Оно может представлять любую серверную технологию: 
PHP, Node.js, ASP.NET. Для отправки запросов GET/POST/PUT/DELETE сервис использует соответствующие методы get()/post()/put()/delete() из объекта http.</p>
<p>Далее добавим в папку <span class="ii">src/app</span> файл компонента <span class="b">app.component.ts</span>:</p>
<pre class="brush:ts;">
import {TemplateRef, ViewChild} from '@angular/core';
import {Component, OnInit} from '@angular/core';
import {User} from './user';
import {UserService} from './user.service';
   
@Component({ 
    selector: 'my-app', 
    templateUrl: './app.component.html',
    providers: [UserService]
}) 
export class AppComponent implements OnInit {
    //типы шаблонов
    @ViewChild('readOnlyTemplate', {static: false}) readOnlyTemplate: TemplateRef&lt;any&gt;|undefined;
    @ViewChild('editTemplate', {static: false}) editTemplate: TemplateRef&lt;any&gt;|undefined;
       
    editedUser: User|null = null;
    users: Array&lt;User&gt;;
    isNewRecord: boolean = false;
    statusMessage: string = "";
       
    constructor(private serv: UserService) {
        this.users = new Array&lt;User&gt;();
    }
       
    ngOnInit() {
        this.loadUsers();
    }
       
    //загрузка пользователей
    private loadUsers() {
        this.serv.getUsers().subscribe((data: Array&lt;User&gt;) =&gt; {
                this.users = data; 
            });
    }
    // добавление пользователя
    addUser() {
        this.editedUser = new User("","",0);
        this.users.push(this.editedUser);
        this.isNewRecord = true;
    }
    
    // редактирование пользователя
    editUser(user: User) {
        this.editedUser = new User(user._id, user.name, user.age);
    }
    // загружаем один из двух шаблонов
    loadTemplate(user: User) {
        if (this.editedUser && this.editedUser._id === user._id) {
            return this.editTemplate;
        } else {
            return this.readOnlyTemplate;
        }
    }
    // сохраняем пользователя
    saveUser() {
        if (this.isNewRecord) {
            // добавляем пользователя
            this.serv.createUser(this.editedUser as User).subscribe(data =&gt; {
                this.statusMessage = 'Данные успешно добавлены',
                this.loadUsers();
            });
            this.isNewRecord = false;
            this.editedUser = null;
        } else {
            // изменяем пользователя
            this.serv.updateUser(this.editedUser as User).subscribe(data =&gt; {
                this.statusMessage = 'Данные успешно обновлены',
                this.loadUsers();
            });
            this.editedUser = null;
        }
    }
    // отмена редактирования
    cancel() {
        // если отмена при добавлении, удаляем последнюю запись
        if (this.isNewRecord) {
            this.users.pop();
            this.isNewRecord = false;
        }
        this.editedUser = null;
    }
    // удаление пользователя
    deleteUser(user: User) {
        this.serv.deleteUser(user._id).subscribe(data =&gt; {
            this.statusMessage = 'Данные успешно удалены',
            this.loadUsers();
        });
    }
}
</pre>
<p>Так как каждая строка грида может быть в двух состояниях - в режиме редактирования и в режиме просмотра, то соответственно определяем с помощью декоратора <span class="b">ViewChild</span> 
две переменных readOnlyTemplate and editTemplate, через которые мы будем ссылаться на используемые для строк шаблоны. 
Каждая переменная представляет тип <span class="b">TemplateRef | undefined</span>. <span class="b">TemplateRef</span> используется для создания вложенных представлений.</p>
<p>Для хранения редактируемого пользователя определена переменная editedUser, а для хранения списка пользователей - переменная users.</p>
<p>В методе ngOnInit вызывается метод <code>loadUsers</code>, в котором происходит загрузка данных с помощью сервиса UserService в список users.</p>
<p>В методе <code>addUser()</code> добавляется новый объект User. При этом добавляемый объект помещается в переменную editedUser и затем добавляется в массив users. И кроме того, 
для переменной <code>isNewRecord</code> устанавливается значение <code>true</code>. Это позволит идентифицировать в дальнейшем объект как именно как объект для добавления.</p>
<p>Метод <code>editUser()</code> получает объект User, который надо отредактировать, и передает его переменной editedUser.</p>
<p>Метод <code>loadTemplate()</code> позволяет загрузить для определенного объекта User нужный шаблон. То есть, как было сказано выше, строка грида может находиться в двух состояниях, и 
соответственно у нас будет два шаблона: для просмотра и для редактирования. Объект, для которого надо загрузить шаблон, передается в качестве параметра. 
И если определена переменная editedUser и ее свойство <code>_id</code> совпадает со значением свойства <code>_id</code> у того объекта, для которого надо загрузить шаблон, то выбирается шаблон для редактирования. Иначе же загружается шаблон для просмотра.</p>
<p>В методе <code>saveUser()</code> в зависимости от значения переменной isNewRecord данные отправляются на сервер либо через запрос типа POST (добавление нового объекта), 
либо через запрос типа PUT (редактирование объекта).</p>
<p>Метод <code>cancel()</code> сбрасывает редактирование.</p>
<p>И метод <code>deleteUser()</code> удаляет объект, отправляя через сервис UserService запрос к серверу.</p>
<p>И также добавим в проект в папку <span class="b">src/app</span> новый файл <span class="b">app.component.html</span>, который будет представлять шаблон для компонента AppComponent и который будет 
содержать следующий код:</p>
<pre class="brush:xml;">
&lt;h1&gt;Список пользователей&lt;/h1&gt;
&lt;input type="button" value="Добавить" class="btn btn-default" (click)="addUser()" /&gt;
&lt;table class="table table-striped"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;td&gt;Id&lt;/td&gt;
            &lt;td&gt;Имя&lt;/td&gt;
            &lt;td&gt;Возраст&lt;/td&gt;
            &lt;td&gt;&lt;/td&gt;
            &lt;td&gt;&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr *ngFor="let user of users"&gt;
            &lt;ng-template [ngTemplateOutlet]="loadTemplate(user)" 
                        [ngTemplateOutletContext]="{ $implicit: user}"&gt;
            &lt;/ng-template&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
&lt;div&gt;{{statusMessage}}&lt;/div&gt;
   
   
&lt;!--шаблон для чтения--&gt;
&lt;ng-template #readOnlyTemplate let-user&gt;
    &lt;td&gt;{{user._id}}&lt;/td&gt;
    &lt;td&gt;{{user.name}}&lt;/td&gt;
    &lt;td&gt;{{user.age}}&lt;/td&gt;
    &lt;td&gt;
        &lt;input type="button" value="Изменить" class="btn btn-default" (click)="editUser(user)" /&gt;
    &lt;/td&gt;
    &lt;td&gt;
        &lt;input type="button" value="Удалить" (click)="deleteUser(user)" class="btn btn-danger" /&gt;
    &lt;/td&gt;
&lt;/ng-template&gt;
  
&lt;!--шаблон для редактирования--&gt;
&lt;ng-template #editTemplate&gt;
    &lt;td&gt;
        &lt;input type="number" [(ngModel)]="editedUser._id" readonly disabled class="form-control" /&gt;
    &lt;/td&gt;
    &lt;td&gt;
        &lt;input type="text" [(ngModel)]="editedUser.name" class="form-control" /&gt;
    &lt;/td&gt;
    &lt;td&gt;
        &lt;input type="number" [(ngModel)]="editedUser.age" class="form-control" /&gt;
    &lt;/td&gt;
    &lt;td&gt;
        &lt;input type="button" value="Сохранить" (click)="saveUser()" class="btn btn-success" /&gt;
    &lt;/td&gt;
    &lt;td&gt;
        &lt;input type="button" value="Отмена" (click)="cancel()" class="btn btn-warning" /&gt;
    &lt;/td&gt;
&lt;/ng-template&gt;
</pre>
<p>С помощью директивы <span class="b">ngFor</span> для каждого объекта из массива users создается строку с 
нужным шаблоном. Для встраивания шаблона в строку применяется элемент <span class="b">ng-template</span>.</p>
<pre class="brush:xml;">
&lt;tr *ngFor="let user of users"&gt;
            &lt;ng-template [ngTemplateOutlet]="loadTemplate(user)" 
                        [ngTemplateOutletContext]="{ $implicit: user}"&gt;
            &lt;/ng-template&gt;
&lt;/tr&gt;
</pre>
<p>С помощью директивы <span class="b">ngTemplateOutlet</span> встраивается шаблон, который представляет объект TemplateRef. 
Эта директива привязана к методу <span class="b">loadTemplate()</span>, который определен в классе AppComponent и который возвращает определенный шаблон.</p>
<p>А свойство <span class="b">ngTemplateOutletContext</span> для передачи контекста в шаблон. 
С помощью параметра <span class="b">$implicit</span> задается передаваемый объект. В данном случае это объект user.</p>
<p>В конце файла определены два шаблона для строк грида: readOnlyTemplate и editTemplate. 
Для определения шаблонов Angular использует элемент <span class="b">ng-template</span>.</p>
<p>Шаблон <span class="b">readOnlyTemplate</span> отображает объект User в режиме для чтения. Он содержит кнопки для редактирования и удаления 
объекта. Шаблон <span class="b">editTemplate</span> определяет текстовые поля, которые привязаны к свойствам переменной editedUser из 
класса AppComponent. И также шаблон содержит кнопки для сохранения и отмены операции.</p>
<p>И также определим в папке <span class="b">src/app</span> файл модуля приложения <span class="b">app.module.ts</span>:</p>
<pre class="brush:ts;">
import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule }   from '@angular/forms';
import { HttpClientModule }   from '@angular/common/http';
import { AppComponent }   from './app.component';
@NgModule({
    imports:      [ BrowserModule, FormsModule, HttpClientModule],
    declarations: [ AppComponent ],
    bootstrap:    [ AppComponent ]
})
export class AppModule { }
</pre>
<p>В папке <span class="b">src</span> определим файл <span class="b">main.ts</span>:</p>
<pre class="brush:ts;">
import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { AppModule } from './app/app.module';
const platform = platformBrowserDynamic();
platform.bootstrapModule(AppModule);
</pre>
<p>Также добавим в папку <span class="ii">src</span> файл <span class="b">polyfills.ts</span>:</p>
<pre class="brush:ts;">
import 'zone.js/dist/zone';
</pre>
<p>И в конце определим в проекте в папке <span class="b">src</span> главную веб-страницу <span class="b">index.html</span>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Hello Angular&lt;/title&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
        &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;my-app&gt;Загрузка...&lt;/my-app&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В итоге весь проект будет выглядеть следующим образом:</p>
<img src="./pics/10.1.1.png" alt="Grid in Angular 13" />
<p>Для тестирования я определил приложение на node.js, которое для хранения данных использует бд mongodb:</p>
<pre class="brush:c#;">
const express = require("express");
const MongoClient = require("mongodb").MongoClient;
const objectId = require("mongodb").ObjectId;
    
const app = express();
const jsonParser = express.json();
  
const mongoClient = new MongoClient("mongodb://localhost:27017/");
  
let dbClient;
  
// настройка CORS
app.use(function(req, res, next) {
   res.header("Access-Control-Allow-Origin", "*");
   res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
   res.header("Access-Control-Allow-Methods", "GET, PATCH, PUT, POST, DELETE, OPTIONS");
   next();  // передаем обработку запроса дальше
 });
  
mongoClient.connect(function(err, client){
    if(err) return console.log(err);
    dbClient = client;
    app.locals.collection = client.db("usersdb").collection("users");
    app.listen(3000, function(){
        console.log("Сервер ожидает подключения...");
    });
});
  
app.get("/api/users", function(req, res){
         
    const collection = req.app.locals.collection;
    collection.find({}).toArray(function(err, users){
          
        if(err) return console.log(err);
        res.send(users)
    });
      
});
app.get("/api/users/:id", function(req, res){
         
    const id = new objectId(req.params.id);
    const collection = req.app.locals.collection;
    collection.findOne({_id: id}, function(err, user){
                
        if(err) return console.log(err);
        res.send(user);
    });
});
    
app.post("/api/users", jsonParser, function (req, res) {
        
    if(!req.body) return res.sendStatus(400);
        
    const userName = req.body.name;
    const userAge = req.body.age;
    const user = {name: userName, age: userAge};
        
    const collection = req.app.locals.collection;
    collection.insertOne(user, function(err, result){
                
        if(err) return console.log(err);
        res.send(user);
    });
});
     
app.delete("/api/users/:id", function(req, res){
         
    const id = new objectId(req.params.id);
    const collection = req.app.locals.collection;
    collection.findOneAndDelete({_id: id}, function(err, result){
                
        if(err) return console.log(err);    
        let user = result.value;
        res.send(user);
    });
});
    
app.put("/api/users", jsonParser, function(req, res){
         
    if(!req.body) return res.sendStatus(400);
    const id = new objectId(req.body._id);
    const userName = req.body.name;
    const userAge = req.body.age;
        
    const collection = req.app.locals.collection;
    collection.findOneAndUpdate({_id: id}, { $set: {age: userAge, name: userName}},
         {returnOriginal: false },function(err, result){
                
        if(err) return console.log(err);     
        const user = result.value;
        res.send(user);
    });
});
  
// прослушиваем прерывание работы программы (ctrl-c)
process.on("SIGINT", () =&gt; {
    dbClient.close();
    process.exit();
});
</pre>
<p>Подробнее про взаимодействие node.js и mongodb можно прочитать <a href="https://metanit.com/web/nodejs/6.5.php">здесь</a></p>
<p>Но естественно для приложения уровня сервера можно использовать любую другую технологию бекэнда: PHP, ASP.NET, Java и т.д.</p>
<p>Поле запуска приложения на сервере запустим приложение Angular. Если сервер возвратит какие-либо данные, то будут отображены в таблице с помощью шаблона 
readOnlyTemplate:</p>
<img src="./pics/10.2.png" alt="Grid с возможностью редактирования в Angular" />
<p>При нажатии на кнопку "Изменить" для редеринга строка используется шаблон editTemplate, и объект становится доступен для редактирования:</p>
<img src="./pics/10.3.png" alt="Таблица в Angular 13" />
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


<div class="nav"><p><a href="./9.1.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
	
	$("li:contains('Глава 9.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 9.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 9.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 9.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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