<!DOCTYPE html>
<html >
<head>
<title>Angular в ASP.NET Core | Первый проект</title>
<meta charset="utf-8" />
<meta name="description" content="Создание первого проекта на Angular в связке с ASP.NET Core, конфигурация проекта, настройка TypeScript и Angular CLI, SpaServices">
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
<h1>Введение в ASP.NET Core и Angular</h1><h2>Первый проект на ASP.NET Core с Angular</h2><div class="date">Последнее обновление: 26.06.2020</div>

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

<p>В этом руководстве рассмотрим создание приложения на ASP.NET Core 3  в связке с Angular 10.</p>
<p>Вначале создадим проект на ASP.NET Core, который будет использовать Angular. Для проекта выберем шаблон <span class="b">Empty</span>, 
то есть пустой шаблон.</p>
<img src="./pics/1.1.png" alt="Angular in ASP.NET Core" />
<p>Пусть проект будет называться "HelloAngularApp". Стоит отметить, что Visual Studio предоставляет шаблон <span class="b">Angular</span>, который сразу же позволяет создать проект с некоторой 
базовой структурой и с уже настроенной конфигурацией на использование Angular. Но в данном случае выберем именно шаблон <span class="b">Empty</span>, 
чтобы полностью проконтроллировать процесс конфигурации и не создавать ничего лишнего.</p>
<p>По умолчанию новый проект ASP.NET Core не обладает никакой встроенной поддержкой работы с Angular. Один из способов работы с Angular в рамках проекта 
ASP.NET Core представляет пакет <span class="b">Microsoft.AspNetCore.SpaServices.Extensions</span> или проще говоря SpaServices. Поэтому вначале установим данный пакет через Nuget:</p>
<img src="./pics/1.14.png" alt="SpaServices и Angular в ASP.NET Core" />
<p>После добавления пакета создадим в проекте новую папку, 
которая будет называться <span class="b">ClientApp</span> и которая впоследствии будет хранить файлы и конфигурацию приложения Angular.</p>
<p>Далее добавим в только что созданную папку ClientApp новый файл 
<span class="b">package.json</span>, который представляет шаблон <span class="b">npm Configuration file</span>:</p>
<img src="./pics/1.2.png" alt="NPM and Angular in ASP.NET Core" />
<p>Изменим содержимое этого файла следующим образом:</p>
<pre class="brush:js;">
{
  "version": "1.0.0",
  "name": "asp.net",
  "private": true,
  "author": "Eugene Popov &lt;metanit.com&gt;",
  "scripts": {
    "ng": "ng",
    "start": "echo hello && ng serve",
    "build": "ng build"
  },
  "dependencies": {
    "@angular/common": "~10.0.0",
    "@angular/compiler": "~10.0.0",
    "@angular/core": "~10.0.0",
    "@angular/forms": "~10.0.0",
    "@angular/platform-browser": "~10.0.0",
    "@angular/platform-browser-dynamic": "~10.0.0",
    "@angular/router": "~10.0.0",
    "rxjs": "~6.5.5",
    "zone.js": "~0.10.3"
  },
  "devDependencies": {
    "@angular-devkit/build-angular": "~0.1000.0",
    "@angular/cli": "~10.0.0",
    "@angular/compiler-cli": "~10.0.0",
    "@types/node": "~14.0.14",
    "typescript": "~3.9.5"
  }
}
</pre>
<p>Здесь определены все необходимые пакеты фреймворка Angular, а также пакеты, которые помогут при разработке, в частности, TypeScript и Webpack.</p>
<p>Стоит отметить определение команды "start" в секции scripts: <code>"start": "echo hello && ng serve"</code>. Выполнение команды 
"echo" перед командой "ng serve", которая запускает сервер с приложением Angular, - это своего рода хак для решения проблемы, описанной в 
<a href="https://github.com/dotnet/aspnetcore/issues/17277" rel="nofollow">https://github.com/dotnet/aspnetcore/issues/17277</a>. 
Но в будущем, надеюсь, Microsoft исправит подобную ситуацию, и подобный зак больше не понадобится.</p>
<p>Также для избежания подобной ситуации я рекоммендую при отладке запускать проект по протоколу http, а не https.</p>
<p>Итак, сохраним файл и установим пакеты. Для этого в Visual Studio перейдем к окну <span class="b">Package Manager Console</span>. (Например, 
через пункт меню <span class="b">Tools -&gt; NuGet Package Manager -&gt; Package Manager Console</span>).</p>
<p>В этом окне сначала перейдем к папке, где находится файл package.json с помощью команды <span class="b">cd</span>. Поскольку в моем случае проект называется 
HelloAngularApp и соответственно располагается в папке HelloAngularApp, а файл package.json в рамках проекта располагается в папке ClientApp, 
то я ввожу команду</p>
<pre>cd HelloAngularApp/ClientApp</pre>
<p>Далее введем команду</p>
<pre>npm install</pre>
<img src="./pics/1.16.png" alt="npm install и загрузка пакетов в Visual Studio в Angular" />
<p>Также добавим в проект файл конфигурации TypeScript <span class="b">tsconfig.json</span>:</p>
<img src="./pics/1.3.png" alt="TypeScript в Angular и ASP.NET Core" />
<p>После добавления изменим содержимое файла следущим образом:</p>
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
    "target": "es2015",
    "typeRoots": [
      "node_modules/@types"
    ],
    "lib": [
      "es2018",
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
<p>Далее в каталоге <span class="b">ClientApp</span> создадим новую папку <span class="b">src</span>, которая будет хранить файлы приложения angular. В этой папке создадим каталог 
<span class="b">app</span>, в который добавим новый файл <span class="b">app.component.ts</span>:</p>
<img src="./pics/1.4.png" alt="Создание приложения Angular и ASP.NET Core" />
<p>В файле <span class="b">app.component.ts</span> определим код главного компонента приложения:</p>
<pre class="brush:ts;">
import { Component } from '@angular/core';
     
@Component({
    selector: 'app',
    template: `&lt;label&gt;Введите имя:&lt;/label&gt;
                 &lt;input [(ngModel)]="name" placeholder="name"&gt;
                 &lt;h2&gt;Добро пожаловать {{name}}!&lt;/h2&gt;`
})
export class AppComponent { 
    name= '';
}
</pre>
<p>Также в папку <span class="ii">ClientApp/src/app</span> добавим новый файл <span class="b">app.module.ts</span>, который будет представлять главный 
модуль приложения:</p>
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
<p>Далее в папку <span class="ii">ClientApp/src</span> добавим новый файл <span class="b">main.ts</span>, с которого будет начинатся загрузка приложения:</p>
<pre class="brush:ts;">
import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { enableProdMode } from '@angular/core';
import { AppModule } from './app/app.module';

enableProdMode();
const platform = platformBrowserDynamic();
platform.bootstrapModule(AppModule);
</pre>
<p>Кроме собственно загрузки приложения данный файл определяет код для перезапуска приложения с помощью Hot Module при изменениях в файлах с 
исходным кодом.</p>
<p>И также в папку <span class="ii">ClientApp/src</span> добавим файл <span class="b">polyfills.ts</span>:</p>
<pre class="brush:ts;">
import 'zone.js/dist/zone';
</pre>
<p>И также в папку <span class="b">ClientApp</span> добавим новый json-файл <span class="b">angular.json</span></p>
<img src="./pics/1.13.png" alt="Angular CLI in ASP.NET Core" />
<p>который будет определять конфигурацию Angular Cli:</p>
<pre class="brush:js;">
{
  "version": 1,
  "projects": {
    "helloangularapp": {
      "projectType": "application",
      "root": "",
      "sourceRoot": "src",
      "architect": {
        "build": {
          "builder": "@angular-devkit/build-angular:browser",
          "options": {
            "outputPath": "dist",
            "index": "src/index.html",
            "main": "src/main.ts",
            "polyfills": "src/polyfills.ts",
            "tsConfig": "tsconfig.json",
            "aot": true
          },
          "configurations": {
            "production": {
              "optimization": true,
              "outputHashing": "all",
              "sourceMap": false,
              "namedChunks": false,
              "vendorChunk": false,
              "buildOptimizer": true
            }
          }
        },
        "serve": {
          "builder": "@angular-devkit/build-angular:dev-server",
          "options": {
            "browserTarget": "helloangularapp:build"
          }
        }
      }
    }
  },
  "defaultProject": "helloangularapp"
}
</pre>
<p>Таким образом, все файлы будут компилироваться в две сборки - app.js и polyfills.js, которые будут располагаться в папке wwwroot/dist.</p>
<p>Теперь добавим в проект папку <span class="b">ClientApp/src</span> главную веб-страницу приложения - файл <span class="b">index.html</span>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;base href="/" /&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0" /&gt;
    &lt;title&gt;Angular in ASP.NET Core&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;app&gt;Загрузка...&lt;/app&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В итоге весь проект будет выглядеть следующим образом:</p>
<img src="./pics/1.5.png" alt="Первый проект Angular в ASP.NET Core" />
<p>И в конце изменим файл <span class="b">Startup.cs</span>:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Hosting;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Extensions.Hosting;
using Microsoft.AspNetCore.SpaServices.AngularCli;

namespace HelloAngularApp
{
    public class Startup
    {
        public void ConfigureServices(IServiceCollection services)
        {
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
<p>Прежде всего в методе <code>ConfigureServices()</code> вызывается метод <span class="b">AddSpaStaticFiles()</span>, который 
регистрирует сервис ISpaStaticFileProvider. Данный сервим позволяет обрабатывать статические файлы приложения Angular из определенного 
местоположения. Расположение файлов задается с помощью параметра <code>configuration.RootPath</code>. В данном случае это каталог 
<code>ClientApp/dist</code>, куда, как мы указали в файле angular.json, должны помещаться скомпилированные файлы. 
То есть данный сервис необходим нам, когда разработка завершена, файлы Angular на typescript скомпилированы в файлы javascript, а все приложение 
ASP.NET Core уже развернуто на сервере в режиме production.</p>
<p>Далее в методе <code>Configure()</code> добавляются соответствующие middleware, которые позволяют работать с приложением Angular.</p>
<p>Во-первых, если разработка закончена и приложение уже в состоянии развертывания, вызывается метод <span class="b">UseSpaStaticFiles()</span>, 
который позволяет направлять запросы к нашему приложению Angular.</p>
<p>Далее вызывается метод <span class="b">app.UseSpa()</span>, который позволяет в ответ на запросы отправлять веб-страницу по умолчанию (index.html). 
Этот middleware должен помещаться в конце конвейера.</p>
<p>В методе <code>app.UseSpa()</code>, если приложение находится в режиме разработки, в конвейер обработки запроса добавляется компонент 
<code>spa.UseAngularCliServer</code>. Этот компонент middleware позволяет настроить проект таким образом, что 
веб-сервер для приложения ASP.NET Core автоматически запускает сервер Angular CLI. Кроме того, UseAngularCliServer 
устанавливает прокси между сервером приложения ASP.NET Core и сервером приложения Angular. В качестве параметра метод принимает запускаемую команду 
из package.json. В данном случае это команда "start" (<code>"echo hello && ng serve"</code>), которая собственно и запускает веб-сервер Angular CLI.</p>
<p>То есть когда мы запустим проект ASP.NET Core на выполнение, фактически будут запущены два сервера с двумя приложениями, которые через прокси будут обмениваться 
данными. Если мы изменим код в файлах Angular, то моментально произойдет перекомпиляция файлов на typescript, и мы увидим результаты наших изменений 
в браузере. Однако если мы изменим код приложения ASP.NET Core (то есть код C#), тогда будет потребуется перекомпиляция и перезапуск всего 
приложения ASP.NET Core, что также перезапустит сервер с приложением Angular. Что, в конечном итоге, приведет к увеличению времени запуска и некоторому замедлению процесса разработки. 
Собственно это основной минус UseAngularCliServer. Хотя можно запускать отдельно оба сервера вручную.</p>
<p>Запустим проект на выполнение, в итоге Angular CLI скомпилирует приложение, с которым мы сможем взаимодействовать в рамках приложения ASP.NET Core:</p>
<img src="./pics/1.6.png" alt="Первое приложение на Angular в ASP.NET Core" />
<h3>Настройка публикации проекта</h3>
<p>Таким образом, мы можем совместить разработку приложения Angular и ASP.NET Core. Но, кроме этого, нам надо установить настроить 
конфигурацию проекта, чтобы при его публикации также были скомпилированы и включены в выходной пакет приложения ASP.NET Core 
файлы приложения Angular. Для этого отредактируем файл проекта ASP.NET Core. Например, в моем случае сейчас он выглядит следущим образом:</p>
<pre class="brush:xml;">
&lt;Project Sdk="Microsoft.NET.Sdk.Web"&gt;

  &lt;PropertyGroup&gt;
    &lt;TargetFramework&gt;netcoreapp3.1&lt;/TargetFramework&gt;
  &lt;/PropertyGroup&gt;

  &lt;ItemGroup&gt;
    &lt;None Remove="ClientApp\src\app\app.component.ts" /&gt;
    &lt;None Remove="ClientApp\src\app\app.module.ts" /&gt;
    &lt;None Remove="ClientApp\src\main.ts" /&gt;
    &lt;None Remove="ClientApp\src\polyfills.ts" /&gt;
  &lt;/ItemGroup&gt;

  &lt;ItemGroup&gt;
    &lt;PackageReference Include="Microsoft.AspNetCore.SpaServices.Extensions" Version="3.1.5" /&gt;
  &lt;/ItemGroup&gt;

  &lt;ItemGroup&gt;
    &lt;TypeScriptCompile Include="ClientApp\src\app\app.component.ts" /&gt;
    &lt;TypeScriptCompile Include="ClientApp\src\app\app.module.ts" /&gt;
    &lt;TypeScriptCompile Include="ClientApp\src\main.ts" /&gt;
    &lt;TypeScriptCompile Include="ClientApp\src\polyfills.ts" /&gt;
  &lt;/ItemGroup&gt;

&lt;/Project&gt;
</pre>
<p>Изменим его следующим образом:</p>
<pre class="brush:xml;">
&lt;Project Sdk="Microsoft.NET.Sdk.Web"&gt;

  &lt;PropertyGroup&gt;
    &lt;TargetFramework&gt;netcoreapp3.1&lt;/TargetFramework&gt;
    &lt;TypeScriptCompileBlocked&gt;true&lt;/TypeScriptCompileBlocked&gt;
    &lt;SpaRoot&gt;ClientApp\&lt;/SpaRoot&gt;
  &lt;/PropertyGroup&gt;

  &lt;ItemGroup&gt;
    &lt;Content Remove="$(SpaRoot)**" /&gt;
    &lt;None Remove="$(SpaRoot)**" /&gt;
    &lt;None Include="$(SpaRoot)**" Exclude="$(SpaRoot)node_modules\**" /&gt;
  &lt;/ItemGroup&gt;

  &lt;ItemGroup&gt;
    &lt;PackageReference Include="Microsoft.AspNetCore.SpaServices.Extensions" Version="3.1.5" /&gt;
  &lt;/ItemGroup&gt;

  &lt;Target Name="PublishRunWebpack" AfterTargets="ComputeFilesToPublish"&gt;
    &lt;Exec WorkingDirectory="$(SpaRoot)" Command="npm install" /&gt;
    &lt;Exec WorkingDirectory="$(SpaRoot)" Command="npm run build -- --prod" /&gt;

    &lt;ItemGroup&gt;
      &lt;DistFiles Include="$(SpaRoot)dist\**; $(SpaRoot)dist-server\**" /&gt;
      &lt;ResolvedFileToPublish Include="@(DistFiles-&gt;'%(FullPath)')" Exclude="@(ResolvedFileToPublish)"&gt;
        &lt;RelativePath&gt;%(DistFiles.Identity)&lt;/RelativePath&gt;
        &lt;CopyToPublishDirectory&gt;PreserveNewest&lt;/CopyToPublishDirectory&gt;
        &lt;ExcludeFromSingleFile&gt;true&lt;/ExcludeFromSingleFile&gt;
      &lt;/ResolvedFileToPublish&gt;
    &lt;/ItemGroup&gt;
  &lt;/Target&gt;
&lt;/Project&gt;
</pre>
<p>Теперь в узле <code>PropertyGroup</code> с помощью элемента <code>SpaRoot</code> устанавливается корневой каталог приложения Angular. То есть в данном случае это каталог ClientApp. 
С помощью узла <code>Target</code> устанавливаются настройки публикации. Например, элемент</p>
<pre class="brush:xml;">&lt;Exec WorkingDirectory="$(SpaRoot)" Command="npm run build -- --prod" /&gt;</pre>
<p>будет запускать команду <code>"npm run build -- --prod"</code>, которая будет компилировать приложение Angular.</p>
<p>Таким образом, после публикации в папке скомпилированного приложения мы сможем найти скомпилированные файлы приложения Angular:</p>
<img src="./pics/1.15.png" alt="Публикация приложения Angular в ASP.NET Core" />
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


<div class="nav"><p><a href="./">Содержание</a><a href="1.2.php">Вперед</a></p></div></div>
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