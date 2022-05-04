<!DOCTYPE html>
<html >
<head>
<title>Angular | Webpack</title>
<meta charset="utf-8" />
<meta name="description" content="Сборка модулей и приложения Angular 13 с помощью Webpack 5, настройка webpack.config.js">
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
<h1>Дополнительные статьи</h1><h2>Webpack</h2><div class="date">Последнее обновление: 04.11.2021</div>

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

<p>Webpack представляет популярный инструмент для сборки модулей в один файл. В предыдущих статьях для создания приложения Angular использовалась инфраструктура 
Angular CLI. Однако в реальности при построении проекта Angular CLI применяет Webpack. Кроме того, Webpack является довольно распространенным 
инструментом веб-разработки. Теперь рассмотрим, как мы можем собирать проект с помощью Webpack без Angular CLI. Отмечу, что в данном случае 
мы будем использовать именно версию Webpack 5, которая немного отличается в плане конфигурации от предыдущих версий.</p>
<p>Для использования Webpack создадим новый проект. Определим в проекте новый файл <span class="b">package.json</span>:</p>
<pre class="brush:js;">
{
  "name": "webpackapp",
  "version": "1.0.0",
  "author": "Eugene Popov &lt;metanit.com&gt;",
  "scripts": {
    "dev": "webpack serve",
    "build": "webpack"
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
    "@types/node": "~15.0.3",
    "angular2-template-loader": "~0.6.2",
    "css-loader": "~6.5.0",
    "file-loader": "~6.2.0",
    "html-loader": "~3.0.0",
    "html-webpack-plugin": "~5.5.0",
    "mini-css-extract-plugin": "~2.4.3",
    "raw-loader": "~4.0.2",
    "ts-loader": "~9.2.6",
    "typescript": "~4.4.4",
    "webpack": "~5.61.0",
    "webpack-cli": "~4.9.1",
    "webpack-dev-server": "~4.4.0"
  }
}
</pre>
<p>Секция <span class="b">devDependencies</span> содержит определение пакетов <code>typescript</code>, <code>webpack</code> и <code>webpack-dev-server</code>, которые потребуются 
при разработке, а также кучу пакетов, которые предназначены, главным образом, для загрузки тех или иных типов файлов.</p>
<p>В секции <span class="b">scripts</span> определены две команды. Первая команда "dev" будет запускать тестовый веб-сервер webpack-dev-server, который в свою очередь будет запускать приложение.</p>
<p>Вторая команда "build" потребуется для компиляции всех необходимых сборок из разрозненных модулей.</p>
<p>И также добавим в папку проекта для управления конфигурацией typescript файл <span class="b">tsconfig.json</span>:</p>
<pre class="brush:js;">
{
    "compilerOptions": {
      "target": "es2020",
      "module": "es2020",
      "moduleResolution": "node",
      "sourceMap": true,
      "emitDecoratorMetadata": true,
      "experimentalDecorators": true,
      "lib": [ "es2020", "dom" ],
      "noImplicitAny": true,
      "suppressImplicitAnyIndexErrors": true,
      "typeRoots": [
        "node_modules/@types/"
      ]
    },
    "exclude": [
        "node_modules"
    ]
  }
</pre>
<p>В командной строке/терминале перейдем к папке проекта и выполним команду <span class="b">npm install</span> для установки всех зависимостей:</p>
<div class="console"><pre class="consoletext">npm install</pre></div>
<p>Теперь собственно определим файлы приложения. Для этого создадим в проекте каталог <span class="b">src</span>. В этот каталог поместим 
файл <span class="b">index.html</span>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;base href="/"&gt;
        &lt;title&gt;Angular и Webpack&lt;/title&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;my-app&gt;Загрузка...&lt;/my-app&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Это собственно страница веб-приложения, она не содержит подключения никаких скриптов, так как скрипты будут вставлять при сборке через webpack.</p>
<p>Затем в папке src создадим новый файл <span class="b">polyfills.ts</span>:</p>
<pre class="brush:ts;">
import 'zone.js/dist/zone';
</pre>
<p>Это полифил, который необходим для поддержки приложения всеми стандартными браузерами.</p>
<p>Далее в папке src определим папку <span class="b">app</span>. Определим в каталоге <span class="ii">src/app</span> новый файл 
<span class="b">app.component.ts</span> с простеньким компонентом:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';

@Component({
    selector: 'my-app',
    template: `&lt;h2&gt;Hello Angular! Welcome Webpack!&lt;/h2&gt;`
})
export class AppComponent { }
</pre>
<p>Также добавим в каталог <span class="ii">src/app</span> файл модуля <span class="b">app.module.ts</span>:</p>
<pre class="brush:ts;">
import {NgModule} from '@angular/core';
import {BrowserModule} from '@angular/platform-browser';
import {FormsModule} from '@angular/forms';
import {AppComponent} from './app.component';

@NgModule({
	imports:[BrowserModule, FormsModule],
	declarations: [AppComponent],
	bootstrap: [AppComponent]
})
export class AppModule{}
</pre>
<p>И в конце добавим в каталог <span class="ii">src</span> файл <span class="b">main.ts</span>:</p>
<pre class="brush:ts;">
import {platformBrowserDynamic} from '@angular/platform-browser-dynamic';
import {AppModule} from './app/app.module';

const platform = platformBrowserDynamic();
platform.bootstrapModule(AppModule);
</pre>
<p>То есть это все те файлы, которые присутствуют в стандартном проекте Angular.</p>
<p>И в завершении добавим в корневой каталог проекта файл <span class="b">webpack.config.js</span>, который будет содержать конфигурацию Webpack:</p>
<pre class="brush:js;">
const path = require('path');
const webpack = require('webpack');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
module.exports = {
    entry: {
        'polyfills': './src/polyfills.ts',
        'app': './src/main.ts'
      },
   output:{
       path: path.resolve(__dirname, 'dist'),     // путь к каталогу выходных файлов - папка public
       publicPath: '/',
       filename: '[name].[fullhash].js'
   },
   devServer: {
    historyApiFallback: true,
    port: 8081,
    open: true
  },
   resolve: {
    extensions: ['.ts', '.js']
  },
   module:{
       rules:[   //загрузчик для ts
           {
               test: /\.ts$/, // определяем тип файлов
               use: [
                {
                    loader: 'ts-loader',
                    options: { configFile: path.resolve(__dirname, 'tsconfig.json') }
                  } ,
                   'angular2-template-loader'
               ]
            }, {
              test: /\.html$/,
              loader: 'html-loader'
            },{
            test: /\.(png|jpe?g|gif|svg|woff|woff2|ttf|eot|ico)$/,
            loader: 'file-loader',
            options: {
              name: '[name].[fullhash].[ext]',
            }
          },{
            test: /\.css$/,
            exclude: path.resolve(__dirname, 'src/app'),
            use: [
              MiniCssExtractPlugin.loader,
              "css-loader"
            ]
          },{
            test: /\.css$/,
            include: path.resolve(__dirname, 'src/app'),
            loader: 'raw-loader'
          }
       ]
   },
   plugins: [
    new webpack.ContextReplacementPlugin(
        /angular(\\|\/)core/,
        path.resolve(__dirname, 'src'), // каталог с исходными файлами
      {} // карта маршрутов
    ),
    new HtmlWebpackPlugin({
      template: 'src/index.html'
    }),
    new MiniCssExtractPlugin({
      filename: "[name].css"
    }),
    new webpack.NoEmitOnErrorsPlugin(),
    new webpack.LoaderOptionsPlugin({
      htmlLoader: {
        minimize: false
      }
    })
  ]
}
</pre>
<p>Здесь определены шесть секций:</p>
<ul>
<li><p><code>entry</code>: определяет входные файлы для создания сборок</p></li>
<li><p><code>output</code>: определяет конфигурацию выходных файлов</p></li>
<li><p><code>devServer</code>: конфигурация веб-сервера для тестирования</p></li>
<li><p><code>resolve</code>: определяет, как будут обрабатываться файлы, если они не имеют расширений</p></li>
<li><p><code>module.rules </code>: определяет загрузчики, которые загружают модули</p></li>
<li><p><code>plugins</code>: определяет применяемые плагины</p></li>
</ul>
<h3>entry</h3>
<p>Прежде всего нам надо передать в Webpack исходные файлы, для которых будут создаваться сборки. В данном случае определяются исходные файлы для трех сборок:</p>
<pre class="brush:js;">
entry: {
    'polyfills': './src/polyfills.ts',
    'app': './src/main.ts'
  },
</pre>
<p>То есть сборки polyfills и app  указывают на все те файлы, которые были определены выше. Если эти файлы импортируют какие-то другие модули, то импортируемые пакеты также включаются в сборку.</p>
<h3>output</h3>
<p>В результате сборки мы должны получить некоторые выходные файлы, что определяется секцией output:</p>
<pre class="brush:js;">
output: {
		path: path.resolve(__dirname, 'dist'),
		publicPath: '/',
		filename: '[name].[fullhash].js'
},
</pre>
<p>Здесь указано, что сборки будут находиться в каталоге dist, и для них будут созданы файлы с названиями сборок. Плейсхолдер <code>[name]</code> будет передать название сборки, 
то есть polyfills или app. Кроме того, в название файла включается хеш-значение с помощью плейсхолдера <code>[fullhash]</code> на случай, если мы захотим пересоздать файл 
без изменения названия сборки.</p>

<h3>devServer</h3>
<p>Секция devServer определяют конфгурацию запускаемого веб-сервера, на котором будет развертываться тестируемое приложение:</p>
<pre class="brush:js;">
devServer: {
    historyApiFallback: true,
    port: 8081,
    open: true
  }
</pre>
<p>Значение <code>historyApiFallback: true</code> указывает, что будет использоваться HTML5 History API. Это может быть полезно, если приложение 
использует маршрутизацию.</p>
<p>Опция <code>port</code> указывает, что веб-сервер будет запускаться на порту 8081, то есть к приложению мы сможем обратиться по адресу 
localhost:8081.</p>
<p><code>open: true</code> указывает, что при запуске веб-сервера приложение будет автоматически открываться в веб-браузере.</p>

<h3>resolve </h3>
<p>При импорте файлов в модулях и компонентах мы можем не использовать расширение, например:</p>
<pre class="brush:ts;">import {User} from './user';</pre>
<p>Чтобы указать, что в подобных случаях мы будем иметь дело с файлами typescript или javascript, применяется секция resolve, в которой перечисляются расширения:</p>
<pre class="brush:js;">
resolve: {
    extensions: ['.ts', '.js']
}
 </pre>
<h3>module.rules</h3>
<p>Webpack понимает только файлы javascript, для всех остальных типов файлов - ts, css и т.д. необходимы специальные инструменты - загрузчики. В данном случае загрузчики определены 
только для файлов ts и html. Для загрузки файлов typescript применяются загрузчики <code>ts-loader</code> и <code>angular2-template-loader</code>:</p>
<pre class="brush:js;">
{
	test: /\.ts$/,
	use: [{
		loader: 'ts-loader',
        options: { configFile: path.resolve(__dirname, 'tsconfig.json') }
		},'angular2-template-loader'
	]
}
</pre>
<p><code>ts-loader</code> позволяет загружать код Typescript в соответствии с конфигурацией из файла tsconfig.json.</p>
<p><code>angular2-template-loader</code> загружает шаблоны и стили Angular.</p>
<p>Для загрузки файлов html, которые используются компонентами, применяется загрузчик <code>html-loader</code>:</p>
<pre class="brush:js;">
{
    test: /\.html$/,
    loader: 'html-loader'
}
</pre>
<p>Для загрузки различных изображений, шрифтов и прочих ресурсов применяется загрузчик <code>file-loader</code>:</p>
<pre class="brush:js;">
{
    test: /\.(png|jpe?g|gif|svg|woff|woff2|ttf|eot|ico)$/,
    loader: 'file-loader',
    options: {
              name: '[name].[fullhash].[ext]',
	}
}
</pre>
<p>Для использования css применяются два загрузчика:</p>
<pre class="brush:js;">
{
    test: /\.css$/,
    exclude: path.resolve(__dirname, 'src/app'),
	use: [
		MiniCssExtractPlugin.loader,
		"css-loader"
	]
},
{
    test: /\.css$/,
    include: path.resolve(__dirname, 'src/app'),
    loader: 'raw-loader'
}
</pre>
<h3>Плагины</h3>
<p>Для добавления в процесс сборки модулей допонительных инструментов и для дополнительной обработки модулей Webpack использует плагины.</p>
<p>Плагин <code>ContextReplacementPlugin</code> позволяет управлять путями к файлам вне зависимости используем мы Windows или Linux.</p>
<p><code>HtmlWebpackPlugin</code> позволяет автоматически внедрить создаваемые сборки javascript или css в файл html. Хотя мы можем и вручную определить подключение на веб-странцу скриптов и стилей.</p>
<p>Плагин <code>MiniCssExtractPlugin</code> извлекает css-файлы и добавляет в их название хеш-значение, как и в случае с js-файлами.</p>
<p>Плагин <code>NoEmitOnErrorsPlugin</code> останавливает дальнейшую сборку модулей, если произошла ошибка.</p>
<p>Плагин <code>LoaderOptionsPlugin</code> позволяет переопределить поведение других модулей.</p>
<h3>Запуск проекта</h3>
<p>В итоге проект будет выглядеть следующим образом:</p>
<img src="./pics/9.1.1.png" alt="Webpack 5 в Angular 13" />
<p>Теперь, когда все файлы готовы, мы можем запустить проект. Для этого перейдем к командной строке/терминале к каталогу проекта и выполним определенную в package.json команду</p>
<div class="console">
<pre class="consoletext">
npm run dev
</pre>
</div>
<p>По умолчанию webpack-dev-server запускает проект и обращается к нему в браузере:</p>
<img src="./pics/9.4.png" alt="Webpack-dev-server в Angular" />
<p>В данном случае проиходит сборка модулей в памяти. Если мы хотим непосредственно получить файлы сборок, то мы можем выполнить вторую команду из 
package.json:</p>
<div class="console">
<pre class="consoletext">
npm run build
</pre>
</div>
<img src="./pics/9.2.png" alt="Сборка в Webpack и Angular" />
<p>В итоге в проекте появится каталог <span class="b">dist</span>, в котором будут скомпилированные файлы:</p>
<img src="./pics/9.3.png" alt="Сборка в Webpack и Angular 13" />
<p>Это все файлы приложения, которые необходимы для работы. Нам же достаточно будет разместить их на каком-нибудь веб-сервере и обратиться к файлу index.html.</p>
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


<div class="nav"><p><a href="./8.4.php">Назад</a><a href="./">Содержание</a><a href="./9.2.php">Вперед</a></p></div></div>
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