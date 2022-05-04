<!DOCTYPE html>
<html >
<head>
<title>React | Упаковка файлов и Webpack</title>
<meta charset="utf-8" />
<meta name="description" content="Упаковка файлов и Webpack в React, компиляция с помощью Babel">
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
<h2>Упаковка файлов и Webpack</h2><div class="date">Последнее обновление: 02.04.2022</div>

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

<img src="https://metanit.com/metanit-front.jpg" id="jmw" style="cursor:pointer;" />
</div>

<p>В прошлых темах весь код приложения был сосредоточен в одном файле, но в реальности, как правило, 
отдельные компоненты будут размещаться в отдельных файлах. Это упростит разработку и позволит использовать компоненты в других проектах. 
Однако для веб-страницы лучше, чтобы количество файлов было как можно меньше.</p>
<p>Кроме того, в прошлой теме (да и в ряде других предыдущих тем) мы сталкиваемся с еще одной проблемой - компиляция кода JSX в обычный Javascript 
на лету занимает некоторое время. Соответственно лучше, если бы у нас был сразу скомпилирован код Javascript до загрузки веб-страницы.</p>
<p>Обе эти проблемы нам поможет решить Webpack. <span class="b">Webpack</span> представляет популярный упаковщик модулей, который позволяет автоматизировать создание из нескольких файлов один.</p>
<p>Для работы с Webpack создадим новый проект. Для этого определим новый каталог <span class="b">webpackapp</span>. Прежде всего сразу 
установим все необходимые пакеты, которые будут использоваться в проекте. Для этого определим добавим в проект следующий файл <span class="b">package.json</span>:</p>
<pre class="brush:js;">
{
  "name": "searchapp",
  "description": "A React.js project using Webpack",
  "version": "1.0.0",
  "author": "metanit.com",
  "scripts": {
    "dev": "webpack serve",
    "build": "webpack"
  },
  "dependencies": {
    "react": "18.0.0",
    "react-dom": "18.0.0"
  },
  "devDependencies": {
    "@babel/cli": "7.17.0",
    "@babel/core": "7.17.0",
    "@babel/preset-react": "7.16.0",
    "babel-loader": "8.2.0",
    "webpack": "5.70.0",
    "webpack-cli": "4.9.0",
    "webpack-dev-server": "4.7.0"
  }
}
</pre>
<p>Среди зависимостей в секции "dependencies" здесь определены две библиотеки - react и react-dom. Эти модули содержат функционал библиотеки 
React.js, который будет необходим для работы приложения.</p>
<p>В секции "devDependencies" определены те модули, которые потребуются только при разработке приложения.</p>
<p>Так как для компиляции из jsx в js необходим компилятор babel, то вначале определяются соотетстующие модули. Модуль "@babel/core" - это 
основной модуль компилятора. Для загрузки файлов в webpack необходимы загрузчики, которые собственно и определяют правила загрузки и обработки файлов. 
Для загрузки файлов добавляется модуль "babel-loader". И этот модуль будет использовать другой модуль - "@babel/preset-react", который необходим 
для работы в связке с React.js и файлами jsx.</p>
<p>Так как для сборки мы будем использовать Webpack, то в конце добавляется модуль "webpack". Чтобы упростить разработку, добавлен еще один модуль 
- "webpack-dev-server", который позволяет динамически запускать проект.</p>
<p>Кроме того, в секции scripts определены две команды: dev и build. Команда dev предназначена для нужд разработки и позволяет на лету сгенерировать файл сборки и 
запустить проект. Команда build позволяет сгенерировать файл сборки, и затем этот файл может использоваться в production.</p>
<p>Далее добавим в проект новую веб-страницу <span class="b">index.html</span>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;meta charset="utf-8" /&gt;
	&lt;title&gt;Webpack в React&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;div id="app"&gt;&lt;/div&gt;
	&lt;script src="public/bundle.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь, предполагается, что вся функциональность будет находиться в файле по пути "public/bundle.js". Пока этого файла нет, но далее мы его создадим с помощью webpack.</p>
<p>Затем определим в каталоге проекта новую папку <span class="b">app</span>, в этой папке будут находиться собственно файлы приложения.</p>
<p>Для компонентов в папке <span class="b">app</span> создадим подкаталог <span class="b">components</span>. Далее в подкаталог components 
добавим новый файл <span class="b">header.jsx</span>:</p>
<pre class="brush:js;">
const React = require("react");
 
function Header(props){ return &lt;h2&gt;{props.text}&lt;/h2&gt;;}
 
module.exports = Header;
</pre>
<p>Данный компонент будет выполнять роль заголовка и будет получать извне через свойства отображаемый текст заголовка.</p>
<p>Поскольку для создания компонентов надо подключить основной модуль react:</p>
<pre class="brush:js;">const React = require("react");</pre>
<p>Для подключения других модулей здесь применяется функция <span class="b">require()</span>.</p>
<p>Аналогичный компонент в виде класса:</p>
<pre class="brush:js;">
const React = require("react");
 
class Header extends React.Component {
    constructor(props){
        super(props);
    }
    render() {
        return &lt;h2&gt;{this.props.text}&lt;/h2&gt;;
    }
}
 
module.exports = Header;
</pre>
<p>И также в каталог <span class="b">app/components</span> добавим новый компонент <span class="b">article.jsx</span>, который просто будет выводить неокторый текст:</p>
<pre class="brush:js;">
const React = require("react");
 
function Article(props){return &lt;div&gt;{props.content}&lt;/div&gt;;}
 
module.exports = Article;
</pre>
<p>Данный компонент по аналогии получает извне некоторые данные и применяет их при рендеринге.</p>
<p>Аналогичный компонент в виде класса:</p>
<pre class="brush:js;">
const React = require("react");
 
class Article extends React.Component{

    constructor(props){
        super(props);
    } 
    render() {
        return &lt;div&gt;{this.props.content}&lt;/div&gt;;
    }
}
 
module.exports = Article;
</pre>
<p>Далее в папке <span class="b">app</span> определим главный файл проекта <span class="b">app.jsx</span> - основной файл приложения:</p>
<pre class="brush:js;">
const ReactDOM = require("react-dom/client");
const React = require("react");
const Header = require("./components/header.jsx");
const Article = require("./components/article.jsx");
 
const header = "Рассказ";
const article = "После одного из заседаний N-ского мирового съезда судьи собрались в совещательной комнате, чтобы снять свои мундиры, минутку отдохнуть и ехать домой обедать.";
 
ReactDOM.createRoot(
    document.getElementById("app")
)
.render(
    &lt;div&gt;
        &lt;Header text={header} /&gt;
        &lt;Article content={article} /&gt;
    &lt;/div&gt;
);
</pre>
<p>Это собственно файл с кодом React, который будет загружать компоненты на веб-страницу.</p>
<p>Вначале импортируем оба компонента:</p>
<pre class="brush:js;">
const Header = require("./components/header.jsx");
const Article = require("./components/article.jsx");
</pre>
<p>Затем в функции <code>render()</code> производим рендеринг обоих компонентов, передавая им некоторые данные.</p>
<p>Для работы с webpack добавим в корневую папку проекта новый файл <span class="b">webpack.config.js</span>:</p>
<pre class="brush:js;">
const path = require("path");
  
module.exports = {
    mode: "development",
    entry: "./app/app.jsx", // входная точка - исходный файл
    output:{
        path: path.resolve(__dirname, "./public"),     // путь к каталогу выходных файлов - папка public
        publicPath: "/public/",
        filename: "bundle.js"       // название создаваемого файла
    },
    devServer: {
     historyApiFallback: true,
     static: {
      directory: path.join(__dirname, "/"),
    },
     port: 8081,
     open: true
   },
    module:{
        rules:[   //загрузчик для jsx
            {
                test: /\.jsx?$/, // определяем тип файлов
                exclude: /(node_modules)/,  // исключаем из обработки папку node_modules
                loader: "babel-loader",   // определяем загрузчик
                options:{
                    presets:[ "@babel/preset-react"]    // используемые плагины
                }
            }
        ]
    }
}
</pre>
<p>Первой в конфигурации идет опция <code>mode</code>. Ее значение <code>"development"</code> указывает, что приложение находится в состоянии разработки.</p>
<p>В секции <code>entry: "./app/app.jsx"</code> указывается главный файл приложения.</p>
<p>Секция <span class="b">output</span> определяет конфигурацию для выходного файла - его папку и имя - public/bundle.js. Это тот файл, который будет подключаться 
на веб-страницу.</p>
<p>Секция <span class="b">devServer</span> определяют конфигурацию запускаемого веб-сервера, на котором будет развертываться тестируемое приложение. 
В частности, значение <code>historyApiFallback: true</code> указывает, что будет использоваться HTML5 History API. Это может быть полезно, если 
приложение использует маршрутизацию.</p>
<p>Опция <code>static</code> устанавает настройки для статических файлов. В данном случае эта секция нам нужна для установки каталога, где располагается файл 
<span class="b">index.html</span>. В частности, параметр <code>directory</code> указывает, где этот файл находится - в данном случае это корневой каталог проекта, 
поэтому применяется путь "/".</p>
<p>Опция <code>port</code> указывает, что веб-сервер будет запускаться на порту 8081, то есть к приложению мы сможем 
обратиться по адресу <code>http://localhost:8081</code>. А опция <code>open: true</code> указывает, что при запуске веб-сервера приложение будет автоматически открываться в веб-браузере.</p>
<p>И секция <span class="b">module</span> устанавливает набор загрузчиков, которые будут применяться для загрузки модулей. Здесь определен только один 
загрузчик - <span class="b">babel-loader</span>. Он будет применяться к файлам с расширением jsx и для обработки будет использовать плагины 
env и react.</p>
<p>В итоге структура проекта будет выглядеть следующим образом:</p>
<img src="./pics/1.9.png" alt="Webpack и Babel в React" />
<p>В командной строке/терминале перейдем к папке проекта и установим все этим пакеты с помощью команды</p>
<div class="console">
<pre class="consoletext">
npm install
</pre>
</div>
<img src="./pics/1.7.png" alt="Установка webpack в проект на React" />
<p>Затем выполним команду<p>
<div class="console">
<pre class="consoletext">
npm run dev
</pre>
</div>
<p>То есть в данном случае выполняем команду, которая определена в секции scripts и которая запускает приложение:</p>
<img src="./pics/1.8.png" alt="webpack в Node.js" />
<p>В итоге приложение автоматически будет запускаться в браузере:</p>
<img src="./pics/1.16.png" alt="Webpack 5 и React.js" />
<p>С этим приложением мы также можем работать, как и  предыдущих темах. Однако чтобы сгенерировать файл приложени - сборку, которая будет содержать код 
всех файлов, нам надо выполнить другую команду, которая опредена в секции scripts в файле package.json:</p>
<div class="console">
<pre class="consoletext">
npm run build
</pre>
</div>
<p>Эта команда по файлу <span class="b">app/app.jsx</span> создаст в проекте папку public, а в ней - новый файл <span class="b">bundle.js</span>. Это именно тот файл, который будет подключаться на веб-страницу.</p>
<p>То есть будет сгенерирован обычный файл с кодом javascript, который поддерживается всеми браузерами. И нам не понадобится ни компилятор Babel, 
ни какие-то другие файлы. Мы можем просто кинуть веб-страницу в веб-браузер, и приложение также будет работать.</p>
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


<div class="nav"><p><a href="./2.5.php">Назад</a><a href="./">Содержание</a><a href="./2.4.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в  React</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/1.1.php">Что такое React. Первое приложение</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/1.3.php">Основы JSX</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/1.6.php">Сервер. Node.js</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/1.4.php">Babel-cli</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/1.5.php">React Developer Tools</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы React</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/2.1.php">Рендеринг элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.2.php">Компоненты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.3.php">Props</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.5.php">События</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.9.php">Упаковка файлов и Webpack</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Состояние. Управление компонентами-классами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/2.4.php">State</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.6.php">Жизненный цикл компонента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.7.php">Управление ресурсами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/3.1.php">Работа с формами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/3.3.php">Валидация форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/3.2.php">Refs</a></span></li>
		</ul>
	</li>

	<li class="closed"><span class="folder">Глава 4. Хуки. Управление функциональными компонентами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/6.1.php">Введение в хуки</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/6.2.php">Хук useState</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/6.3.php">Хук useEffect</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/6.4.php">Хук useRef</a></span></li>
		</ul>
	</li>
<li class="closed"><span class="folder">Глава 5. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/4.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.2.php">Дочерние маршруты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.3.php">Создание ссылок</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.4.php">Параметры маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.5.php">Ссылки с параметрами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.6.php">Парсинг строки запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.7.php">Переадресация</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.8.php">React-router и webpack</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Flux и Redux</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/5.1.php">Flux</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/5.3.php">Redux</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Дополнительные статьи</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/7.1.php">Создание пошаговой формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.8.php">Поиск в списке и фильтрация</a></span></li>
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