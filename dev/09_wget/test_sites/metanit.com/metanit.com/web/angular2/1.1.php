<!DOCTYPE html>
<html >
<head>
<title>Angular | Введение и начало работы</title>
<meta charset="utf-8" />
<meta name="description" content="Введение,основные особенности и начало работы с Angular 13, роль языка TypeScript, конфигурация проекта, установка Angluar CLI, первое приложение">
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
<h1>Введение в Angular</h1><h2>Что такое Angular. Первый проект</h2><div class="date">Последнее обновление: 04.11.2021</div>

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

<p>Angular представляет фреймворк от компании Google для создания клиентских приложений. Прежде всего он нацелен на разработку SPA-решений (Single Page Application), то есть одностраничных приложений. В этом плане Angular является 
наследником другого фреймворка AngularJS. В то же время Angular это не новая версия AngularJS, а принципиально новый фреймворк.</p>
<p>Angular предоставляет такую функциональность, как двустороннее связывание, позволяющее динамически изменять данные в одном месте интерфейса при 
изменении данных модели в другом, шаблоны, маршрутизация и так далее.</p>
<p>Одной из ключевых особенностей Angular является то, что он использует в качестве языка программирования TypeScript. Поэтому перед началом работы 
рекомендуется ознакомиться с основами данного языка, про которые можно прочитать <a href="../typescript/">здесь</a>.</p>
<p>Но мы не ограничены языком TypeScript. При желании можем писать приложения на Angular с помощью таких языков  как Dart или JavaScript. Однако TypeScript все таки 
является основным языком для Angular.</p>
<p>Последняя версия Angular -  Angular 13 вышла в ноябре 2021 года. Официальный репозиторий фреймворка на гитхабе: <a href="https://github.com/angular/angular" rel="nofollow">https://github.com/angular/angular</a>. 
Там вы можете найти сами исходные файлы, а также некоторую дополнительную информацию.</p>
<h3>Начало работы c Angular</h3>
<p>Для работы с Angular необходимо установить сервер <span class="b">Node.js</span> и пакетный менеджер <span class="b">npm</span>, если они отсутствуют 
на рабочей машине. При этом особого какого-то знания для работы с NodeJS и npm не требуется. Для установки можно использовать <a href="https://nodejs.org/en/" rel="nofollow">программу установки node.js</a>. 
Вместе с сервером она также установит и npm.</p>
<p>Следует учитывать, что Angluar 13 поддерживает те версии node.js, которые в текущий момент находятся в статусе "Active LTS" или "Maintenance LTS". На момент написания данной статьи это версии от 14 и 16. 
Проверить статус определенной версии node.js можно по адресу: <a href="https://nodejs.org/en/about/releases/" rel="nofollow">https://nodejs.org/en/about/releases/</a>. Поэтому, если Node.js уже ранее был установлен, 
но имеет более старую или, наоборот новую, но еще не поддерживаемую версию, то лучше его обновить.</p>
<p>То же самое касается и npm. Если версия слишком старая или, наоборот, одна из последних, то Angular может ее не поддерживать. При работе с Angular лучше полагаться на 
ту версию npm, которая устанавливается вместе с LTS-версией Node.js.</p>
<p>После установки необходимых инструментов создадим простейшее приложение. Для этого определим на жестком диске папку приложения. Путь она будет называться 
<span class="b">helloapp</span>.</p>
<h3>Установка Angular CLI</h3>
<p>Для компиляции приложения мы будем использовать инфрастуктуру Angular CLI. Angular CLI упрощает создание приложения, его компиляцию. Angular CLI распространяется как пакет npm, 
поэтому для его использования его необходимо сначала установить. Для установки Angular CLI откроем консоль/командную строку и выполним в ней следующую команду:</p>
<div class="console">
<pre class="consoletext">npm install -g @angular/cli</pre>
</div>
<p>Данная команда установит пакет <code>@angular/cli</code> в качестве глобального модуля, поэтому в последующем при создании новый проектов Angular 
его не потребуется устанавливать заново.</p>
<p>Ту же команду можно использовать для обновления Angluar CLI при выходе новой версии фреймворка. Проверить версию CLI можно в командной строке/консоли 
с помощью команды:</p>
<div class="console">
<pre class="consoletext">ng version</pre>
</div>
<h3>Установка пакетов. Package.json</h3>
<p>В папке проекта создадим новый файл <span class="b">package.json</span> со следующим содержимым:</p>
<pre class="brush:js;">
{
  "name": "helloapp",
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
<p>Данный файл устанавливает пакеты и зависимости, которые будут использоваться проектом. В секции dependencies в основном определяются пакеты angular, которые необходимы приложению для 
работы. В секции devDependencies прописаны только те пакеты, которые будут использоваться для разработки. В частности, это пакеты для работы с языком typescript 
(так как мы будем писать код приложения на языке TypeScript), а также пакеты, необходимые для компиляции приложения с помощью инфраструктуры Angular CLI.</p>
<p>В секции "scripts" описаны используемые команды. В частности, команда <code>ng serve</code> запускает простенький веб-сервер для тестирования 
приложения и само приложение. А команда <code>ng build</code> компилирует приложение.</p>
<p>Затем откроем командную строку (терминал) и перейдем в ней к папке проекта с помощью команды cd:</p>
<div class="console">
<pre class="consoletext">
C:\WINDOWS\system32&gt;cd C:\angular\helloapp
</pre>
</div>
<p>И затем выполним команду <code>npm install</code>, которая установит все необходимые модули:</p>
<div class="console">
<pre class="consoletext">
C:\angular\helloapp&gt;npm install
</pre>
</div>
<img src="./pics/1.10.png" alt="Установка пакетов в package.json в Angluar 11" /> 
<p>После выполнения этой команды в папке проекта должна появиться подпапка <span class="b">node_modules</span>, которая содержит все используемые 
зависимости и пакеты.</p>
<h3>Определение приложения</h3>
<p>Затем создадим в папке проекта подпапку, которую назовем <span class="b">src</span> - она будет содержать все исходные файлы. И далее в папке src 
создадим подкаталог <span class="b">app</span>.</p>
<h3>Создание компонента Angular</h3>
<p>Компоненты представляют основные строительные блоки приложения Angular. Каждое приложение Angular имеет как минимум один компонент. 
Поэтому создадим в папке <span class="b">src/app</span> новый файл, который назовем <span class="b">app.component.ts</span> и в котором определим следующий код компонента:</p>
<pre class="brush:ts;">
import { Component } from '@angular/core';
	
@Component({
    selector: 'my-app',
    template: `&lt;label&gt;Введите имя:&lt;/label&gt;
				 &lt;input [(ngModel)]="name" placeholder="name"&gt;
				 &lt;h1&gt;Добро пожаловать {{name}}!&lt;/h1&gt;`
})
export class AppComponent { 
	name= '';
}
</pre>
<p>В начале файла определяется директива <span class="b">import</span>, которая импортирует функциональность модуля 
<code>angular/core</code>, предоставляя доступ к функции декоратора <code>@Component</code>.</p>
<p>Далее собственно идет функция-декоратор <code>@Component</code>, которая ассоциирует метаданные с классом компонента AppComponent. В этой функции, во-первых, 
определяется параметр <code>selector</code> или селектор css для HTML-элемента, который будет представлять компонент. Во-вторых, здесь определяется параметр 
<code>template</code> или шаблон, который указывает, как надо визуализировать компонент. В этом шаблоне задана двусторонняя привязка с помощью выражений 
<code>[(ngModel)]="name"</code> и <code>{{name}}</code> к некоторой модели name.</p>
<p>И в конце собственно экспортируется класс компонента AppComponent, в котором как раз определяется переменная name - в данном случае это пустая строка.</p>
<h3>Создание модуля приложения</h3>
<p>Приложение Angular состоит из модулей. Модульная структура позволяет легко подгружать и задействовать только те модули, которые непосредственно необходимы. 
И каждое приложение имеет как минимум один корневой модуль. Поэтому создадим в папке <span class="b">src/app</span> новый файл, который назовем <span class="b">app.module.ts</span> со следующим содержимым:</p>
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
<p>Этот модуль, который в данном случае называется AppModule, будет входной точкой в приложение.</p>
<p>С помощью директив <span class="b">import</span> здесь импортируется ряд нужных нам модулей. Прежде всего, это модуль NgModule. Для работы с браузером также 
требуется модуль BrowserModule. Так как наш компонент использует элемент input или элемент формы, то также подключаем модуль FormsModule. И далее импортируется созданный ранее компонент.</p>
<h3>Запуск приложения</h3>
<p>Теперь нам надо указать Angular, как запускать наше приложение. Для этого создадим в папке <span class="b">src</span> (на уровень выше, чем расположены файлы 
app.component.ts и app.module.ts) файл <span class="b">main.ts</span> со следующим содержимым:</p>
<pre class="brush:ts;">
import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { AppModule } from './app/app.module';
const platform = platformBrowserDynamic();
platform.bootstrapModule(AppModule);
</pre>
<p>Этот код инициализирует платформу, которая запускает приложение, и затем использует эту платформу для загрузки модуля AppModule.</p>
<p>Также в папке <span class="b">src</span> определим еще один файл, который назовем <span class="b">polyfills.ts</span> со следующим кодом:</p>
<pre class="brush:ts;">
// zone используется angular
import 'zone.js/dist/zone';
</pre>
<p>Данный файл определяет полифилы - инструменты, которые необходимы для поддержки приложения на Angular различными браузерами.</p>
<h3>Создание главной страницы</h3>
<p>Далее определим в папке <span class="b">src</span> главную страницу <span class="b">index.html</span> приложения:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Hello Angular&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;my-app&gt;Загрузка...&lt;/my-app&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>А в элементе body определен элемент <code>&lt;my-app&gt;</code>, в который собственно и будет загружаться приложение.</p>
<h3>Определение конфигурации</h3>
<p>Поскольку для определения кода приложения применяется язык TypeScript, поэтому также создадим в корневой папке проекта новый файл <span class="b">tsconfig.json</span>:</p>
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
<p>Данный файл определяет настройки для компилятора TypeScript. Опция "compilerOptions" устанавливает параметры компиляции. А опция "files" 
определяет компилируемые файлы. В нашем случае это файл приложения - main.ts, который подтягивает все остальные файлы приложения, и файл полифилов polyfills.ts.</p>
<h3>Angular.json</h3>
<p>Для компиляции приложения мы будем использовать Angular CLI, поэтому нам надо описать поведение CLI с помощью файла angular.json. Итак, добавим в 
<span class="b">корневую папку проекта</span> новый файл <span class="b">angular.json</span> и определим в нем следующее содержимое:</p>
<pre class="brush:js;">
{
  "version": 1,
  "projects": {
    "helloapp": {
      "projectType": "application",
      "root": "",
      "sourceRoot": "src",
      "architect": {
        "build": {
          "builder": "@angular-devkit/build-angular:browser",
          "options": {
            "outputPath": "dist/helloapp",
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
            "browserTarget": "helloapp:build"
          }
        }
      }
    }},
  "defaultProject": "helloapp"
}
</pre>
<p>Вкратце пройдемся по структуре файле. Вначале определяется параметр <code>version</code>. Он определяет версию конфигурации проекта.</p>
<p>Далее идет секция <code>projects</code>, которая определяет настройки для каждого проекта. В нашем случае у нас только один проект, 
который называется по названию каталога проекта - helloapp.</p>
<p>Проект определяет следующие опции:</p>
<ul>
<li><p><code>projectType</code>: тип проекта. Значение "application" указывает, что проект будет представлять приложение, которое можно будет 
запускать в браузере</p></li>
<li><p><code>root</code>: указывает на папку файлов проекта относительно рабочей среды. Пустое значение соответствует корневой папке проекта, так как в данном случае 
рабочая среда и каталог проекта совпадают</p></li>
<li><p><code>sourceRoot</code>: определяет корневую папку файлов с исходным кодом. В нашем случае это папка src, где собственно определены все файлы приложения</p></li>
<li><p><code>architect</code>: задает настройки для построения проекта. В файле package.json определены команды <code>build</code> и <code>serve</code>, и для 
каждой из этих команд в секции architect заданы свои настройки.</p>
<p>Для каждой команды задается параметр <code>builder</code>, который определяет инструмент для построения проекта. Так, для команды "build" 
задано значение "@angular-devkit/build-angular:browser" - данный билдер для построения использует сборщик пакетов webpack. А 
для команды "serve" задано значение "@angular-devkit/build-angular:dev-server" - данный билдер запускает веб-сервер и развертывает на нем скомпилированное приложение.</p></li>
<p>Параметр <code>options</code> задает параметры построения файлов. Для команды "build" здесь определены следующие опции:</p>
<ul>
<li><p><code>outputPath</code>: путь, по которому будет публиковаться скомпилированное приложение</p></li>
<li><p><code>index</code>: путь к главной странице приложения</p></li>
<li><p><code>main</code>: путь к главному файлу приложения, где собственно запускается приложение Angular</p></li>
<li><p><code>polyfills</code>: путь к файлу полифилов</p></li>
<li><p><code>tsConfig</code>: путь к файлу конфигурации TypeScript</p></li>
<li><p><code>aot</code>: указывает, будет ли использоваться компиляция AOT (Ahead-Of-Time) (предварительная компиляция перед выполнением). В данном случае значение <code>true</code> означает, 
что она используется</p></li>
</ul>
<p>Для команды "serve" указана только одна опцияя - <code>browserTarget</code>, которая содержит ссылку на конфигурацию для команды build - "helloapp:build". 
То есть по сути эта команда использует ту же конфигурацию, что и команда build.</p></li>
<li><p>Последняя опция <code>defaultProject</code> указывает на проект по умолчанию. В данном случае это наш единственный проект.</p></li>
</ul>
<p>Если мы используем TypeScript для работы с Angular и Angular CLI для компиляции, то эти файлы package.json, tsconfig.json и angular.json фактически будут присутствовать в каждом проекте. И их можно переносить из проекта в 
проект с минимальными изменениями. Например, в файле angular.json вместо названия проекта "helloapp" будет соответствующее название проекта. В файле package.json можно будет задать какие-то другие версии пакетов, если предыдущие версии устарели. Можно будет изменить название проекта, версию. 
Можно подправить настройки TypeScript или Angular CLI, но в целом общая организация будет той же.</p>
<p>В итоге у нас получится следующая структура проекта:</p>
<img src="./pics/1.4.1.png" alt="Angular 13 структура проекта" />
<h3>Запуск проекта</h3>
<p>И теперь, когда все готово, мы можем запустить проект. Для этого в командной строке (терминале) перейдем к папке проекта с помощью команды <span class="ii">cd</span> 
и затем выполним команду <span class="ii">ng serve</span>:</p>
<div class="console">
<pre class="consoletext">
C:\WINDOWS\system32&gt;cd C:\angular\helloapp
C:\angular\helloapp&gt;ng serve --open
</pre>
</div>
<img src="./pics/1.7.png" alt="Angluar CLI и Angluar 12" />
<p>Консольный вывод проинформирует нас, какие файлы какого размера созданы. Кроме того, мы сможем увидеть адрес, по которому запущен тестовый веб-сервер - 
по умолчанию это "http://localhost:4200/". Если мы передаем команде флаг <code>--open</code>, как в случае выше, то Angular CLI автоматически 
открывае браузер с запущенным приложением. И мы можем обратиться к приложению:</p>
<img src="./pics/1.1.png" alt="Начало работы с Angular 13" />
<p>Введем в текстовое поле какое-нибудь имя, и оно тут же отобразится в заголовке.</p>
<p>Важно отметить, что пока приложение запущено, мы можем поменять код, и Angular CLI почти моментально перекомпилирует и перезапустит приложение.</p>
<p>Стоит отметить, что консоль может быть скрыта после запуска приложения, но тем не менее оно будет запущено, и мы сможем к нему обращаться. А при изменениях произойдет его перекомпиляция.</p>

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


<div class="nav"><p><a href="./">Содержание</a><a href="./1.4.php">Вперед</a></p></div></div>
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