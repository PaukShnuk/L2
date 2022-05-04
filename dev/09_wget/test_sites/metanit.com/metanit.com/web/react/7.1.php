<!DOCTYPE html>
<html >
<head>
<title>React | Создание пошаговой формы</title>
<meta charset="utf-8" />
<meta name="description" content="Создание пошаговой формы в React, переход по шагам, управление состоянием state и props, как разбить ввод данных на отдельные этапы в reactjs">
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
<h2>Создание пошаговой формы</h2><div class="date">Последнее обновление: 01.04.2022</div>

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

<p>Пошаговые формы позволяют разбить ввод данных на отдельные этапы. Рассмотрим, как сделать подобную форму. 
Допустим, пользователь вводит сначала имя, потом email-адрес и в конце пароль. И при этом пользователю последовательно отображаются 
форма ввода имени, затем форма ввода email и форма ввода пароля.</p>
<p>Для решения этой задачи определим следующую html-страницу:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;meta charset="utf-8" /&gt;
	&lt;title&gt;METANIT.COM&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;div id="app"&gt;&lt;/div&gt;
		  
	&lt;script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"&gt;&lt;/script&gt;
	&lt;script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"&gt;&lt;/script&gt;
	&lt;script src="https://unpkg.com/@babel/standalone/babel.min.js"&gt;&lt;/script&gt;
		  
	&lt;script type="text/babel"&gt;
		class UserForm extends React.Component {
		  constructor(props) {
			super(props)
			this.state = {
			  currentStep: 1,
			  username: "",
			  email:  "",
			  password: "", 
			}
		  }

		  handleChange = event =&gt; {
			const {name, value} = event.target
			this.setState({
			  [name]: value
			})    
		  }
		   
		  handleSubmit = event =&gt; {
			event.preventDefault()
			const { email, username, password } = this.state;
			alert(`Введенные данные: \nИмя: ${username} \nEmail: ${email} \nПароль: ${password}`)
		  }
		  
		  _next = () =&gt; {
			let currentStep = this.state.currentStep
			currentStep = currentStep &gt;= 2? 3: currentStep + 1
			this.setState({
			  currentStep: currentStep
			})
		  }
			
		  _prev = () =&gt; {
			let currentStep = this.state.currentStep
			currentStep = currentStep &lt;= 1? 1: currentStep - 1
			this.setState({
			  currentStep: currentStep
			})
		  }

		previousButton() {
		  let currentStep = this.state.currentStep;
		  if(currentStep !==1){
			return (
			  &lt;button type="button" onClick={this._prev}&gt;Назад&lt;/button&gt;
			)
		  }
		  return null;
		}

		nextButton(){
		  let currentStep = this.state.currentStep;
		  if(currentStep &lt;3){
			return (
			  &lt;button type="button" onClick={this._next}&gt;Вперед&lt;/button&gt;        
			)
		  }
		  return null;
		}
		
		sendButton(){
		  let currentStep = this.state.currentStep;
		  if(currentStep === 3){
			return (
				&lt;button&gt;Отправить&lt;/button&gt;      
			)
		  }
		  return null;
		}
	  
	  render() {    
		return (
		  &lt;div&gt;
		  &lt;h1&gt;Форма входа&lt;/h1&gt;
		  &lt;p&gt;Шаг {this.state.currentStep} &lt;/p&gt; 

		  &lt;form onSubmit={this.handleSubmit}&gt;
			&lt;UserNameStep
			  currentStep={this.state.currentStep} 
			  handleChange={this.handleChange}
			  username={this.state.username}
			/&gt;
			&lt;EmailStep
			  currentStep={this.state.currentStep} 
			  handleChange={this.handleChange}
			  email={this.state.email}
			/&gt;
			&lt;PasswordStep 
			  currentStep={this.state.currentStep} 
			  handleChange={this.handleChange}
			  password={this.state.password}
			/&gt;
			&lt;p&gt;
			{this.previousButton()}
			{this.nextButton()}
			{this.sendButton()}
			&lt;/p&gt;
		  &lt;/form&gt;
		  &lt;/div&gt;
		);
	  }
	}

	class UserNameStep extends React.Component {
	
		render() {
		  if (this.props.currentStep !== 1) {
			return null
		  } 
		  return(
			&lt;div&gt;
			  &lt;label&gt;Имя&lt;/label&gt;
			  &lt;input 
				name="username"
				type="text"
				placeholder="Введите имя"
				value={this.props.username}
				onChange={this.props.handleChange}
				/&gt;
			&lt;/div&gt;
		  );
		}
	}
	class EmailStep extends React.Component {
		render() {
			if (this.props.currentStep !== 2) {
				return null;
			} 
			return(
				&lt;div&gt;
				  &lt;label&gt;Email&lt;/label&gt;
				  &lt;input
					name="email"
					type="text"
					placeholder="Введите email"
					value={this.props.email}
					onChange={this.props.handleChange}
					/&gt;
				&lt;/div&gt;
			);
		}
	}


	class PasswordStep extends React.Component {
		render() {
		  if (this.props.currentStep !== 3) {
			return null
		  } 
		  return(
			&lt;div&gt;
			  &lt;label&gt;Пароль&lt;/label&gt;
			  &lt;input
				name="password"
				type="password"
				placeholder="Введите пароль"
				value={this.props.password}
				onChange={this.props.handleChange}
				/&gt;      
			&lt;/div&gt;
		  );
		}
	}

	ReactDOM.createRoot(
        document.getElementById("app")
    )
    .render(&lt;UserForm /&gt;);
	&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Рассмотрим, что тут опеделено. Прежде всего, отдельные этапы выделены в отдельные компоненты. Например, компонент для ввода имени:</p>
<pre class="brush:xml;">
class UserNameStep extends React.Component {
	
		render() {
		  if (this.props.currentStep !== 1) {
			return null
		  } 
		  return(
			&lt;div&gt;
			  &lt;label&gt;Имя&lt;/label&gt;
			  &lt;input 
				name="username"
				type="text"
				placeholder="Введите имя"
				value={this.props.username}
				onChange={this.props.handleChange}
				/&gt;
			&lt;/div&gt;
		  );
		}
	}
</pre>
<p>Каждый компонент-этап получает через props номер текущего этапа (<code>this.props.currentStep</code>), отображаемое значение (в случае с UserNameStep это <code>this.props.username</code>) и 
функцию обработчика события ввода <code>this.props.handleChange</code>. Все эти данные будут передаваться из главного компонента.</p>
<p>Главный компонент UserForm будет хранить в state все вводимые данные:</p>
<pre class="brush:js;">
class UserForm extends React.Component {
	constructor(props) {
		super(props)
		this.state = {
			currentStep: 1,
			username: "",
			email:  "",
			password: "", 
		}
	}
</pre>
<p>С помощью свойства <code>currentStep</code> будет отслеживаться текущий этап. По умолчанию это первый этап.</p>
<p>Для обработки ввода определен один общий обработчик, поскольку в данному случае ввод для всех трех компонентов выглядит однотипным:</p>
<pre class="brush:js;">
handleChange = event =&gt; {
			const {name, value} = event.target
			this.setState({
			  [name]: value
			})    
		  }
</pre>
<p>Через <code>name</code> получаем название поля ввода (атрибут <code>name</code>). И тут важно, что оно соответствует 
названию свойства из <code>state</code>, для ввода которого оно используется. Поэтому мы сможем использовать выражение <code>[name]: value</code> для 
установки свойства в state.</p>
<p>Тем не менее мы могли бы также определить отдельные обработчики для каждого поля, особенно на том случай, когда для каждого поля потребовалась 
какая-то своя изощренная валидация.</p>
<p>Когда пользователь закончит ввод и нажмет на кнопку условной отправки, будет срабатывать другой обработчик:</p>
<pre class="brush:js;">
handleSubmit = event =&gt; {
	event.preventDefault()
	const { email, username, password } = this.state;
	alert(`Введенные данные: \nИмя: ${username} \nEmail: ${email} \nПароль: ${password}`)
}
</pre>
<p>Здесь просто выводим введенные данные в окне сообщения.</p>
<p>Кроме того, для перехода по шагам вперед-назад определены две дополнительные функции:</p>
<pre class="brush:js;">
_next = () =&gt; {
	let currentStep = this.state.currentStep
	currentStep = currentStep &gt;= 2? 3: currentStep + 1
	this.setState({
		currentStep: currentStep
	})
}		
_prev = () =&gt; {
	let currentStep = this.state.currentStep
	currentStep = currentStep &lt;= 1? 1: currentStep - 1
	this.setState({
		currentStep: currentStep
	})
}
</pre>
<p>В данном случае просто переключаем текущий шаг, учитывая, что у нас всего 3 этапа.</p>
<p>Для управления перехода по шагам определены три дополнительные функции, которые в зависимости от текущего шага возвращают кнопки:</p>
<pre class="brush:js;">
previousButton() {
	let currentStep = this.state.currentStep;
	if(currentStep !==1){
		return (
			&lt;button type="button" onClick={this._prev}&gt;Назад&lt;/button&gt;
		)
	}
	return null;
}
nextButton(){
	let currentStep = this.state.currentStep;
	if(currentStep &lt;3){
		return (
			&lt;button type="button" onClick={this._next}&gt;Вперед&lt;/button&gt;        
		)
	}
	return null;
}
sendButton(){
	let currentStep = this.state.currentStep;
	if(currentStep === 3){
		return (
			&lt;button&gt;Отправить&lt;/button&gt;      
		)
	}
	return null;
}
</pre>
<p>И в конце в функции <code>render()</code> главного компонента все это выводится на html-страницу:</p>
<pre class="brush:xml;">
render() {    
	return (
		&lt;div&gt;
		&lt;h1&gt;Форма входа&lt;/h1&gt;
		&lt;p&gt;Шаг {this.state.currentStep} &lt;/p&gt; 

		&lt;form onSubmit={this.handleSubmit}&gt;
		&lt;UserNameStep
			  currentStep={this.state.currentStep} 
			  handleChange={this.handleChange}
			  username={this.state.username}
		/&gt;
		&lt;EmailStep
			  currentStep={this.state.currentStep} 
			  handleChange={this.handleChange}
			  email={this.state.email}
		/&gt;
		&lt;PasswordStep 
			  currentStep={this.state.currentStep} 
			  handleChange={this.handleChange}
			  password={this.state.password}
		/&gt;
		&lt;p&gt;
			{this.previousButton()}
			{this.nextButton()}
			{this.sendButton()}
			&lt;/p&gt;
		&lt;/form&gt;
		&lt;/div&gt;
	);
}
</pre>
<p>Визуально это будет выглядеть следующим образом. Сначала отображается форма для ввода имени:</p>
<img src="./pics/7.1.png" alt="Multistep from in React" />
<p>Далее по нажатию на кнопку происходит переход к форме ввода email:</p>
<img src="./pics/7.2.png" alt="Пошаговая форма ввода в React" />
<p>И в конце отображается форма ввода пароля с кнопкой отправки, по нажатию на которую отображается окно с введенными данными:</p>
<img src="./pics/7.3.png" alt="Этапы ввода на форме в React" />
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


<div class="nav"><p><a href="./6.4.php">Назад</a><a href="./">Содержание</a><a href="./2.8.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 7.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 7.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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