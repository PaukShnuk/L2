<!DOCTYPE html>
<html >
<head>
<title>React | Refs</title>
<meta charset="utf-8" />
<meta name="description" content="Атрибут Ref в React и получение значений форм, разделение формы на компоненты">
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
<h2>Refs</h2><div class="date">Последнее обновление: 01.04.2022</div>

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

<p>В прошлой теме рассматривалось, как обновлять значение при вводе с помощью обработчика события change. 
Но есть и другой способ получения введенных данных, который заключается в использовании атрибута <span class="b">ref</span>.</p>
<p>Атрибут ref может применяться к любому элементу веб-страницы. После установки атрибута в коде React мы сможем ссылать на этот элемент. Например:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Формы в React&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;&lt;/div&gt;
        
    &lt;script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"&gt;&lt;/script&gt;
    &lt;script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://unpkg.com/@babel/standalone/babel.min.js"&gt;&lt;/script&gt;
        
    &lt;script type="text/babel"&gt;
    class UserForm extends React.Component {
        constructor(props) {
            super(props);
            this.handleSubmit = this.handleSubmit.bind(this);
			this.nameField = React.createRef();
        }
        handleSubmit(e) {
            e.preventDefault();
			console.log(this.nameField);
            var name = this.nameField.current.value;
            alert("Имя: " + name);
        }
        render() {
            return &lt;form onSubmit={this.handleSubmit}&gt;
                        &lt;input ref={this.nameField} /&gt;
                        &lt;input type="submit" value="Отправить" /&gt;
                    &lt;/form&gt;;
      }
    }
    ReactDOM.createRoot(
        document.getElementById("app")
    )
    .render(
        &lt;UserForm /&gt;
    );
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Для создания ссылок <code>ref</code> применяется функция <span class="b">React.createRef()</span>. В данном случае это происходит в конструкторе:</p>
<pre class="brush:js;">this.nameField = React.createRef();</pre>
<p>Затем созданную ссылку можно прикрепить к какому-нибудь элементу на html-странице. Для этого применяется применяется атрибут <code>ref</code>, 
которому в фигурных скобках передается ссылка.</p>
<pre class="brush:js;">&lt;input ref={this.nameField} /&gt;</pre>
<p>Далее в коде мы сможем ссылаться на этот элемент, в том числе получать его значения, с помощью выражения <span class="b">this.nameField.current</span>.</p>
<img src="./pics/3.3.png" alt="Ref в React" />
<p>Единственный минус в этом случае, то что мы не можем установить значение по умолчанию с помощью стандартного атрибута <span class="b">value</span>: при использовании атрибута 
<span class="b">value</span> опять же придется задавать обработчик события change, как в прошлой теме. Альтернативой данному подходу служит применение 
специального атрибута <span class="b">defaultValue</span>, который задает для поля ввода значение по умолчанию:</p>
<pre class="brush:xml;">
render() {
	return &lt;form onSubmit={this.handleSubmit}&gt;
				&lt;input defaultValue="Tom" ref={this.nameField}  /&gt;
				&lt;input type="submit" value="Отправить" /&gt;
			&lt;/form&gt;;
}
</pre>
<h3>Рефакторинг формы</h3>
<p>Возьмем форму из прошлой темы и разделим ее на компоненты с применением атрибута ref:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Формы в React&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;&lt;/div&gt;
      
    &lt;script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"&gt;&lt;/script&gt;
    &lt;script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://unpkg.com/@babel/standalone/babel.min.js"&gt;&lt;/script&gt;
      
    &lt;script type="text/babel"&gt;
    class NameField extends React.Component {
        constructor(props) {
            super(props);
            var isValid = this.validate(props.value);
            this.state = {value: props.value, valid: isValid};
            this.onChange = this.onChange.bind(this);
        }
        validate(val){
            return val.length&gt;2;
        }
        onChange(e) {
            var val = e.target.value;
            var isValid = this.validate(val);
            this.setState({value: val, valid: isValid});
        }
        render() {
            var color = this.state.valid===true?"green":"red";
            return &lt;p&gt;
                &lt;label&gt;Имя:&lt;/label&gt;&lt;br /&gt;
                &lt;input type="text" value={this.state.value} onChange={this.onChange} style={{borderColor:color}} /&gt;
            &lt;/p&gt;;
        }   
    }
    class AgeField extends React.Component {
       
        constructor(props) {
            super(props);
            var isValid = this.validate(props.value);
            this.state = {value: props.value, valid: isValid};
            this.onChange = this.onChange.bind(this);
        }
        validate(val){
            return val&gt;=0;
        }
        onChange(e) {
            var val = e.target.value;
            var isValid = this.validate(val);
            this.setState({value: val, valid: isValid});
        }
        render() {
            var color = this.state.valid===true?"green":"red";
            return &lt;p&gt;
                &lt;label&gt;Возраст:&lt;/label&gt;&lt;br /&gt;
                &lt;input type="number" value={this.state.value} onChange={this.onChange} style={{borderColor:color}} /&gt;
            &lt;/p&gt;;
        }   
    }
     
    class UserForm extends React.Component {
        constructor(props) {
            super(props);
            this.handleSubmit = this.handleSubmit.bind(this);
			this.nameField = React.createRef();
			this.ageField = React.createRef();
        }
        handleSubmit(e) {
            e.preventDefault();
            var name = this.nameField.current.state.value;
            var age = this.ageField.current.state.value;
            if(this.nameField.current.state.valid && this.ageField.current.state.valid){
                alert(`Имя: ${name} Возраст: ${age}`);
            }
        }
 
        render() {
            return (
                &lt;form onSubmit={this.handleSubmit}&gt;
                &lt;NameField value="" ref={this.nameField} /&gt;
                &lt;AgeField value="5" ref={this.ageField} /&gt;
                &lt;input type="submit" value="Отправить" /&gt;
            &lt;/form&gt;
        );
      }
    }
    ReactDOM.createRoot(
        document.getElementById("app")
    )
    .render(
        &lt;UserForm /&gt;
    );
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Вначале в конструкторе компонента UserForm создаем две ссылки:</p>
<pre class="brush:xml;">
this.nameField = React.createRef();
this.ageField = React.createRef();
</pre>
<p>Затем для обращения к вложенным компонентам у каждого устанавливается атрибут ref:</p>
<pre class="brush:xml;">
&lt;NameField value="" ref={this.nameField} /&gt;
&lt;AgeField value="5" ref={this.ageField} /&gt;
</pre>
<p>И в дальнейшем по значению атрибута мы можем ссылаться на эти компоненты, в том числе получать их состояние:</p>
<pre class="brush:js;">
handleSubmit(e) {
	e.preventDefault();
	var name = this.nameField.current.state.value;
	var age = this.ageField.current.state.value;
	if(this.nameField.current.state.valid && this.ageField.current.state.valid){
		alert(`Имя: ${name} Возраст: ${age}`);
	}
}
</pre>
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


<div class="nav"><p><a href="./3.3.php">Назад</a><a href="./">Содержание</a><a href="./6.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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