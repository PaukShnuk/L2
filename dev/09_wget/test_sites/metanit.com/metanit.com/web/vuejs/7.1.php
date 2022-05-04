<!DOCTYPE html>
<html >
<head>
<title>Vue.js | Компоненты в отдельных файлах и Webpack</title>
<meta charset="utf-8" />
<meta name="description" content="Помещение компонентов в отдельные файлы во Vue.js, сборка приложния с помощью Webpack, настройка конфигурации сборщика">
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
<h1>Организация и сборка приложения</h1><h2>Компоненты в отдельных файлах и Webpack</h2><div class="date">Последнее обновление: 05.10.2018</div>

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

<p>В предыдущих статьях все компоненты приложения Vue.js размещались в одном файле - веб-странице. Такой подход, возможно, будет прекрасно работать 
для небольших проектов. Однако в больших проектах этот подход менее оптимален. В частности, html-разметка компонента определяется в javascript, в итоге логика и конфигурация компонента спешивается с 
html-кодом. Также мы не можем определить стили, которые предназначены только для компонента. И, кроме того, мы не можем использовать различные инструменты 
для предобработки типа Pug, Babel, Webpack и т.д.</p>
<p>Другой способ, который более подходит для крупных проектов, представляет 
определение компонента в отдельном файле с расширением <span class="b">.vue</span>, который будет содержать логику javascript, html-разметку и стили компонента. 
Затем с помощью таких инструментов как Webpack или Browserify выполняется построение проекта и создается один общий файл javascript.</p>
<p>Прежде чем начать работу, необходимо установить node.js и npm и вообще иметь некоторые базовые знания по работе с npm. Для этого 
можно обратиться к <a href="https://metanit.com/web/nodejs/2.4.php">следующей статье</a>.</p>
<p>Итак, создадим новый проект. Для этого определим на жестком диске для проекта новую папку. Допустим, она будет называться <span class="b">firstapp</span>.</p>
<p>Определим в этой папке новый файл <span class="b">index.html</span>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt; 
&lt;html&gt; 
  &lt;head&gt; 
    &lt;meta charset="utf-8"&gt; 
    &lt;title&gt;Vue.js&lt;/title&gt; 
  &lt;/head&gt; 
  &lt;body&gt; 
    &lt;div id="app"&gt;&lt;/div&gt; 
    &lt;script src="dist/build.js"&gt;&lt;/script&gt; 
  &lt;/body&gt; 
&lt;/html&gt;
</pre>
<p>Блок div с id="app" будет представлять элемент, которые будет использоваться Vue, а весь код будет находиться в файле build.js.</p>
<p>Далее добавим в проект папку <span class="b">src</span>, которая будет содержать собственно код приложения. Затем в этой папке создадим новый файл 
<span class="b">App.vue</span>:</p>
<pre class="brush:xml;">
&lt;template&gt;
  &lt;div id="hello"&gt;
    &lt;h2&gt;{{message}}&lt;/h2&gt;
  &lt;/div&gt;
&lt;/template&gt;

&lt;script&gt;
export default {
  name: 'app',
  data () {
    return {
      message: 'Welcome to Vue.js'
    }
  }
}
&lt;/script&gt;

&lt;style&gt;
#hello {
  font-family: Verdana;
  color: navy;
}
&lt;/style&gt;
</pre>
<p>Этот файл будет представлять компонент App. Каждый компонент имеет три основные секции. Первая секция представляет шаблон компонента, который помещается в 
элемент <code>&lt;template&gt;</code>. Шаблон собственно и представляет разметку компонента.</p>
<p>Вторая секция, которая помещается в элемент <code>&lt;script&gt;</code>, представляет логику компонента. С помощью default определяются параметры компонента, 
а чтобы его можно было импортировать извне, применяется слово export.</p>
<p>Третья секция определяет стили компонента. В отличие от двух предыдущих секций, которые могут присутствовать в файле в одном экземпляре, секцию стилей 
можно определять в файле более одного раза.</p>
<p>Также добавим в папку <span class="b">src</span> файл <span class="b">main.js</span>:</p>
<pre class="brush:js;">
import Vue from 'vue'
import App from './App.vue'

new Vue({
  el: '#app',
  render: h =&gt; h(App)
})
</pre>
<p>Здесь объект Vue, с которого собственно и будет начинаться выполнение приложение. Объект Vue будет использовать элемент с id="app" - это тот элемент, 
который выше был определен на веб-странице index.html. С помощью функции render объект Vue будет производить рендеринг в этом элементе содержимого из 
компонента App. Естественно, чтобы использовать функциональность vue.js и компонента App, в начале файла определены функции импорта.</p>
<p>В частности, чтобы использовать компонент App, его необходимо импортировать:</p>
<pre class="brush:js;">import App from './App.vue'</pre>
<p>Подобным образом мы можем подключать другие компоненты.</p>
<p>В то же время можно заметить, что данный файл называется main.js, а на веб-странице подключается файл dist/build.js, который еще не создан. 
Для того, чтобы все файлы нашего приложения превратились в dist/build.js, мы будем использовать сборщик Webpack.</p>
<p>Для этого перейдем к корневой папке нашего проекта и создадим в ней файл <span class="b">package.json</span>, который будет определять все используемые зависимости:</p>
<pre class="brush:js;">
{
    "name": "firstapp",
    "description": "A first Vue.js project",
    "version": "1.0.0",
    "author": "Eugene &lt;metanit.com&gt;",
    "scripts": {
      "dev": "webpack-dev-server --hot --open",
      "build": "webpack"
    },
    "dependencies": {
      "vue": "^2.5.17"
    },
    "devDependencies": {
      "vue-loader": "^15.4.2",
      "vue-template-compiler": "^2.5.17",
      "css-loader": "^1.0.0",
      "webpack": "^4.20.0",
      "webpack-cli":"^3.1.2",
      "webpack-dev-server":"^3.1.9"
    }
  }
 </pre>
<p>Так как для работы приложения потребуется vue.js, то соответственно в секции dependencies определяется соответствующий пакет.</p>
<p>Еще ряд пакетов потребуются для построения приложения и в процессе разработки. Например, для сборки приложения будет использоваться пакет 
webpack.</p>
<p>Чтобы в процессе разработки динамически собирать приложение и запускать его на выполнение, потребуется пакет "webpack-dev-server".</p>
<p>Чтобы указать сборщику Webpack, как именно файла с расширением *.vue будут загружаться, необходим пакет "vue-loader". Но данный пакет сам использует еще 
две зависимости "vue-template-compiler" и "css-loader", поэтому их тоже надо установить.</p>
<p>Также для минимизации выходных файлов здесь устанавливается пакет плагина минимизации "uglifyjs-webpack-plugin".</p>
<p>Кроме того, в секции scripts определены две команды: dev и build. Команда dev предназначена для нужд разработки и позволяет на лету сгенерировать файл сборки и 
запустить проект. Этой команде передаются два параметра <code>--hot --open</code>. Параметр <code>--hot</code> позволяет задействовать 
плагин <span class="b">Hot Module Replacement</span>, который взаимодействует с vue-loader и позволяет производить повторный рендеринг для каждой модели Vue. 
Второй параметр <code>--open</code> запускает браузер для обращения к приложению.</p>
<p>Команда build позволяет сгенерировать файл сборки, и затем этот файл может использоваться в production.</p>
<p>И в конце определим для сборщика Webpack конфигурацию. Для этого создадим в корневой папке проекта файл <span class="b">webpack.config.js</span>:</p>
<pre class="brush:js;">
var path = require('path')
const VueLoaderPlugin = require('vue-loader/lib/plugin'); // плагин для загрузки кода Vue

module.exports = {
 entry: './src/main.js',
 output: {
   path: path.resolve(__dirname, './dist'),
   publicPath: '/dist/',
   filename: 'build.js'
 },
 module: {
   rules: [
     {
       test: /\.vue$/,
       loader: 'vue-loader'
     }, {
      test: /\.css$/,
      use: [
        'vue-style-loader',
        'css-loader'
      ]
    }
   ]
 },
 plugins: [
    new VueLoaderPlugin()
   ]
}
</pre>
<p>Вначале файла получаем функциональность модуля webpack или встроенного модуля path. Параметр <code>entry</code> устанавливает входную точку в приложение - 
это наш файл main.js.</p>
<p>Далее в секции output устанавливаем выходные параметры сборки.</p>
<p>Затем через секцию modules устанавливаем два правила для загрузки файлов. 
В частности, для файлов с расширением .vue будет применяться загрузчик vue-loader. Второе правило определяет загрузку стилей: для обычных файлов css будет использоваться 
загрузчик css-loader, а для кода css из файлов с расшиением .vue - загрузчик vue-style-loader.</p>
<p>И в конце в секции <code>plugins</code> добавляется плагин VueLoaderPlugin, с помощью которого будет загружаться код vue.</p>
<p>В итоге проект будет выглядеть следующим образом:</p>
<img src="./pics/w1.png" alt="Webpack во Vue.js" />
<p>Теперь, когда все готово, мы можем запустить проект. Для этого вначале с помощью команды <span class="b">cd</span> в консоли (или терминале) перейдем к папке корневой проекта firstapp.</p>
<p>Далее нам надо установить все зависимости, описанные в файле package.json. Для этого выполним в консоли команду <span class="b">npm install</span>.</p>
<p>Затем запустим проект, введя команду <span class="b">npm run dev</span>:</p>
<img src="./pics/w2.png" alt="Components single-file in Vue.js" />
<p>При выполнении последней команды мы увидим адрес, по которому запускается приложение. Обычно это http://localhost:8080. Мы можем ввести этот адрес в браузере:</p>
<img src="./pics/w3.png" alt="Webpack и single-file component in Vue.js" />
<p>Хотя мы запускаем приложение, но тем не менее в папке проекта мы не увидим никакого файла dist/build.js. Чтобы его сгенерировать, нам надо 
выполнить в консоли еще одну команду <span class="b">npm run build</span>.</p>
<h3>Разделение компонента на части</h3>
<p>В данном случае компонент App.vue представляет единое целое, которое отделено от остальных компонентов. В этом плане его уже проще развивать независимо 
от других частей приложения. Однако может сложиться ситуация когда, кода html или css станет довольно много, и опять же такой компонент будет сложно поддерживать. В этом случае мы можем 
разделить компонент на отдельные функциональные части - код javascript, разметку html и стили css.</p>
<p>В частности, создадим в проекте в той же папке, где располагается компонент App.vue, новый файл <span class="b">App.html</span> 
со следующим кодом:</p>
<pre class="brush:xml;">
&lt;div id="app"&gt;
    &lt;h2&gt;{{message}}&lt;/h2&gt;
&lt;/div&gt;
</pre>
<p>В данном случае мы вынесли разметку html компонента в отдельный файл.</p>
<p>Также создадим в той же папке новый файл <span class="b">App.css</span>:</p>
<pre class="brush:css;">
#app {
    font-family: Verdana;
    color: navy;
}
</pre>
<p>И в ту же папку добавим новый файл <span class="b">App.js</span>:</p>
<pre class="brush:js;">
export default {
    name: 'app',
    data () {
      return {
        message: 'Welcome to Vue.js'
      }
    }
}
</pre>
<p>И теперь изменим код компонента <span class="b">App.vue</span>:</p>
<pre class="brush:xml;">
&lt;template src="./App.html"&gt;&lt;/template&gt;
&lt;style src="./App.css"&gt;&lt;/style&gt;
&lt;script src="./App.js"&gt;&lt;/script&gt;
</pre>
<p>То есть мы просто вынесли все части компонента в отдельные файлы. При этом в работе приложения ничего не изменится.</p>
<img src="./pics/w8.png" alt="Разделение компонента vue.js на части" />
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


<div class="nav"><p><a href="6.1.php">Назад</a><a href="./">Содержание</a><a href="7.3.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Основы Vue.js</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.1.php">Что такое Vue.js. Первое приложение</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.2.php">Объект Vue</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.3.php">Привязка данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.7.php">Шаблоны</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.4.php">Обработка событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.5.php">Двусторонняя привязка</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.6.php">Вычисляемые свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.8.php">Привязка классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.9.php">Привязка к стилям</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.10.php">Наблюдаемые свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.11.php">Работа с объектом Vue</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.12.php">refs и управление html-элементами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.13.php">Жизненный цикл Vue</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Условный рендеринг и работа с массивами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.1.php">Директива v-if</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.2.php">Директива v-show</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.3.php">v-for</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.4.php">Управление массивами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.5.php">Фильтрация и сортировка массива</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Работа с формами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.1.php">Элементы input и textarea</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.2.php">Флажки (Checkbox)</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.3.php">Переключатели (radiobutton)</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.4.php">Список select</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.5.php">Модификаторы</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Компоненты</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.1.php">Создание компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.2.php">Локальная и глобальная регистрация компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.3.php">Состояние и поведение компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.4.php">Разделяемое состояние компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.5.php">Props</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.6.php">Валидация props</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.7.php">Передача массивов и сложных объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.8.php">Родительские и дочерние компоненты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.9.php">Получение состояния вложенного компонента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.10.php">Однонаправленный поток данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.11.php">Создание событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.12.php">Изменение внешних массивов и объектов в компонентах</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.13.php">Передача функций обратного вызова в компоненты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.15.php">Взаимодействие между сестринскими компонентами. Шина событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.14.php">Миксины</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Слоты</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/5.1.php">Введение в слоты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/5.2.php">Именованные слоты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/5.3.php">Слоты с ограниченной областью видимости</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Фильтры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/6.1.php">Глобальные и локальные фильтры</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Организация и сборка приложения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/7.1.php">Компоненты в отдельных файлах и Webpack</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/7.3.php">Vue-cli</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.2.php">Навигация и ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.3.php">Параметры маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.4.php">Вложенные маршруты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.5.php">Именованные маршруты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.6.php">Именованные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.7.php">Переадресация</a></span></li>
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