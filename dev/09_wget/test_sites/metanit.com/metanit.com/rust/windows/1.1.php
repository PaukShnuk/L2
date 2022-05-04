<!DOCTYPE html>
<html >
<head>
<title>Rust и Windows 10 | Первое графическое приложение на Rust для Windows 10</title>
<meta charset="utf-8" />
<meta name="description" content="Первое графическое приложение на Rust для Windows 10, проект Rust for Windows, запуск приложения, установка визуального интерфейса">
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
<h1>Графические приложения на Rust для Windows 10</h1><h2>Первое приложение</h2><div class="date">Последнее обновление: 15.06.2021</div>

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

<p>В этой серии статей мы рассмотрим создание графических приложений на языке Rust для ОС Windows. В настоящее время есть ряд проектов и библиотек, которые позволяют создавать графические приложения. В данном случае мы будем воспользуемся проектом 
<span class="b">Rust for Windows</span>, который официально развивается компанией Microsoft и который позволяет использовать любые Windows API 
(в том числе Win32 API или Windows 10 API). Официальный репозиторий проекта на github - <a href="https://github.com/microsoft/windows-rs" rel="nofollow">https://github.com/microsoft/windows-rs</a>.</p>
<h3>Установка инструментария</h3>
<p>Что нам потребуется для разработки графических приложений для Windows на языке Rust? Естественно у нас должен быть установлен сам компилятор Rust. 
Также необходио загузить либо <a href="https://visualstudio.microsoft.com/visual-cpp-build-tools/" rel="nofollow">Microsoft C++ Build Tools</a>, 
либо <a href="https://visualstudio.microsoft.com/downloads/" rel="nofollow">Microsoft Visual Studio</a> (например, можно выбрать бесплатный выруск Community).</p>
<p>Вне зависимости от того, какую именно из этих двух программ мы выбрали, при установке нам надо отметить следующие опции:</p>
<ul>
<li><p><span class="b">.NET desktop development</span> / <span class="b">Разработка классических приложений .NET</span></p></li> 
<li><p><span class="b">Desktop development with C++</span> / <span class="b">Разработка классических приложений на C++</span></p></li> 
<li><p><span class="b">Universal Windows Platform development</span> / <span class="b">Разработка классических приложений для универсальной платформы Windows</span></p></li> 
</ul>
<img src="./pics/1.1.png" alt="Rust for Windows" />
<h3>Создание проекта</h3>
<p>Выберем для проекта какой-нибудь каталог для проекта и перейдем к нему в командной строке с помощью команды <span class="b">cd</span>. Например, в моем 
случае для проект будет располагаться в папке <code>C:\rust\windows</code>.</p>
<p>Далее с помощью команды </p>
<div class="console"><pre class="consoletext">cargo new hello</pre></div>
<p>Создадим в этой папке новый проект с названием "hello".</p>
<img src="./pics/1.2.png" alt="Rust for Windows - создание проекта Cargo" />
<p>В папке созданного проекта найдем файл <span class="b">Cargo.toml</span> и откроем его. Добавим в него ссылку на библиотеку (а точнее crate) 
<span class="b">windows</span>, которая и представляет проект <code>Rust for Windows</code>:</p>
<pre class="brush:rs;">
[package]
name = "hello"
version = "0.1.0"
authors = ["Eugene &lt;metanit22@mail.ru&gt;"]
edition = "2018"

[dependencies]
windows = "0.11.0"

[build-dependencies]
windows = "0.11.0"
</pre>
<h3>Файл build.rs</h3>
<p>Теперь определим в папке проекта новый файл - <span class="b">build.rs</span>. Этот скрипт автоматически вызывается инфраструктурой Cargo непосредственно 
перед компиляцией приложения. Определим в этом файле следующее содержимое:</p>
<pre class="brush:rs;">
fn main() {
    windows::build! {
        Windows::ApplicationModel::Activation::*,
		Windows::UI::Xaml::Controls::TextBlock,
        Windows::UI::Xaml::*,
    };
}
</pre>
<p>Этот скрипт определяет те части Windows API, которые мы собираемся использовать в своем проекте. Они передаются в макрос <span class="b">windows::build!</span>. 
Windows имеет множество разных API, но не все они нам нужны. 
И тем больше мы включим в проект различных API, тем медленнее будет происходить сборка приложения.</p>
<p>В итоге при выполнении этого файла макрос <span class="b">windows::build!</span> создаст привязки к используемым компонентам Windows API. В частности, для создания и запуска приложения берем функциональность из модуля 
<code>Windows::ApplicationModel::Activation</code> и <code>Windows::UI::Xaml</code>. И так как в приложении мы будем использовать метку, которая будет выводить некоторый текст, 
то мы также подключаем соответствующий компонент (если точнее структуру) <code>Windows::UI::Xaml::Controls::TextBlock</code>.</p>
<p>И макрос 
<span class="b">windows::build!</span>, используя метаданные этих компонентов, сгенерирует соответствующие типы Rust или привязки. Причем даже если мы указываем 
только конкретный тип, а не весь модуль, как в случае с <code>Windows::UI::Xaml::Controls::TextBlock</code>, то макрос может включать дополнительные типы, если они необходимы 
для функционирования этого типа.</p>
<h3>Определение кода приложения</h3>
<p>Теперь перейдем к файлу <span class="b">main.rs</span>, который по умолчанию создается cargo в папке <span class="b">src</span> и который по умолчанию 
имеет следующий код:</p>
<pre class="brush:rs;">
fn main() {
    println!("Hello, world!");
}
</pre>
<p>Изменим этот код на следующий:</p>
<pre class="brush:rs;">
#![windows_subsystem = "windows"]

mod bindings {
    windows::include_bindings!();
}

use bindings::*;
use windows::*;

use bindings::{
    Windows::ApplicationModel::Activation::*, 
	Windows::UI::Xaml::Controls::TextBlock,
    Windows::UI::Xaml::*,
};

#[implement(
    extend Windows::UI::Xaml::Application,
    override OnLaunched
)]
struct MyApp();

#[allow(non_snake_case)]
impl MyApp {
    fn OnLaunched(&self, _: &Option&lt;LaunchActivatedEventArgs&gt;) -&gt; Result&lt;()&gt; {
        let window = Window::Current()?;
		
		let textBlock: TextBlock = TextBlock::new()?;
		textBlock.SetText("Hello Rust from Metanit.com")?;
		textBlock.SetFontSize(22.0)?;
		
        window.SetContent(textBlock)?;
        window.Activate()
    }
}


fn main() -&gt; Result&lt;()&gt; {
    initialize_mta()?;
    Application::Start(ApplicationInitializationCallback::new(|_| {
        MyApp().new()?;
        Ok(())
    }))
}
</pre>
<h3>Разбор кода</h3>
<p>В начале идет атрибут</p>
<pre class="brush:rs;">#![windows_subsystem = "windows"]</pre>
<p>Он указывает на используемую подсистему. Подсистема в свою очередь определяет, как ОС будет выполнять приложение. В реальности для этого атрибута 
есть два возможных значения: <code>windows</code> и <code>console</code>. Значение "windows" указывает, что это будет графическое приложение, и позволяет 
скрыть консоль. (Без этого атрибута наряду с графическим окном мы увидим консоль приложения)</p>
<p>Далее определяется модуль <code>bindings</code>, который выполняет макрос <span class="b">include_bindings</span>:</p>
<pre class="brush:rs;">
mod bindings {
    windows::include_bindings!();
}
</pre>
<p>Этот макрос добавляет сгенерированные привязки в текущий контекст. И через модуль <code>bindings</code> мы сможем обращаться к сгенерированным привязкам. 
(Если файлов с кодом много и во все надо добавлять определение данного модуля, то выполнение этого макроса можно вынести в отдельный файл)</p>
<p>Далее идут подключения модулей и их отдельной функциональности:</p>
<pre class="brush:rs;">
use bindings::*;
use windows::*;

use bindings::{
    Windows::ApplicationModel::Activation::*, 
	Windows::UI::Xaml::Controls::TextBlock,
    Windows::UI::Xaml::*,
};
</pre>
<h4>Создание объекта приложения</h4>
<p>Далее нам надо определить функционал приложения. Для представления приложения в библиотеке windows предназначена структура 
<span class="b">Windows::UI::Xaml::Application</span>. Однако нам надо определить какой-то свой функционал приложения, чтобы оно имело то поведение и те компоненты, 
которые нам нужны. И для этого необходимо изменить поведение данной структуры. 
Но стоит учесть, что язык Rust не поддерживает наследование. То есть мы не можем просто так взять и унаследовать 
один тип от другого, переопределив его некоторые функции. Однако в библиотеке <code>windows</code> есть атрибут 
<span class="b">windows::implement</span>, который позволяет применить для структур Rust функционал классов WinRT или 
любую комбинацию существующих интерфейсов COM и WinRT.</p>
<p>И в данном случае мы определяем структуру <code>MyApp</code>, которая и будет представлять приложение.</p>
<pre class="brush:rs;">
#[implement(
    extend Windows::UI::Xaml::Application,
    override OnLaunched
)]
struct MyApp();
</pre>
<p>Параметр <span class="b">extend</span> атрибута <code>implement</code> указывает, какой тип будет расширять структура. 
(В данном случае Windows::UI::Xaml::Application).</p>
<p>А параметр <span class="b">override</span> указывает, какой метод будет переопределять структура. Здесь это метод <code>OnLaunched()</code>, в котором мы можем 
задать визуальный интерфейс и логику приложения.</p>
<p>В реальности атрибут <code>implement</code> обернет структуру MyApp в объект COM/WinRT, который расширяет структуру Application, используя агрегацию.</p>
<p>Поскольку мы указали, что структура MyApp будет переопределять метод <code>OnLaunched()</code>, то нам его надо определить для MyApp. Этот метод запускается 
при старте приложения:</p>
<pre class="brush:rs;">
#[allow(non_snake_case)]
impl MyApp {
    fn OnLaunched(&self, _: &Option&lt;LaunchActivatedEventArgs&gt;) -&gt; Result&lt;()&gt; {
        let window = Window::Current()?;
		
		let textBlock: TextBlock = TextBlock::new()?;
		textBlock.SetText("Hello Rust from Metanit.com")?;
		textBlock.SetFontSize(22.0)?;
		
        window.SetContent(textBlock)?;
        window.Activate()
    }
}
</pre>
<p>Чтобы указать компилятору, что мы не хотим использовать стиль кода <code>snake_case</code>, применяется атрибут <code>#[allow(non_snake_case)]</code></p>
<p>В качестве второго параметра метод принимает объект <code>_: &Option&lt;LaunchActivatedEventArgs&gt;</code>, который предоставляет информацию о запуске приложения. 
Но поскольку нам этот параметр в данном случае не нужен, то в качестве его имени устанавливаем прочерк _.</p>
<p>В самом методе вначале получаем текущее окно приложения:</p>
<pre class="brush:rs;">let window = Window::Current()?;</pre>
<p>Далее создаем объект TextBlock, который представляет текстовую метку, с помощью метода <code>new()</code>:</p>
<pre class="brush:rs;">let textBlock: TextBlock = TextBlock::new()?;</pre>
<p>С помощью метода <code>SetText()</code> устанавливаем текст метки:</p>
<pre class="brush:rs;">
textBlock.SetText("Hello Rust from Metanit.com")?;
</pre>
<p>А с помощью метода <code>SetFontSize()</code> устанавливаем высоту шрифта</p>
<pre class="brush:rs;">
textBlock.SetFontSize(22.0)?;
</pre>
<p>Далее устанавливаем данный объект TextBlock в качестве содержимого окна и активируем окно:</p>
<pre class="brush:rs;">
window.SetContent(textBlock)?;
window.Activate()
</pre>
<h4>Функция main</h4>
<p>После определения приложения нам надо запустить его в функции main:</p>
<pre class="brush:rs;">
fn main() -&gt; Result&lt;()&gt; {
    initialize_mta()?;
    Application::Start(ApplicationInitializationCallback::new(|_| {
        MyApp().new()?;
        Ok(())
    }))
}
</pre>
<p>В начале идет вызов функции <code>initialize_mta()</code>, которая инициализирует COM.</p>
<p>Входной точкой в приложение является метод <span class="b">Application.Start()</span>. В качестве параметра он принимает объект 
<span class="b">Windows::UI::Xaml::ApplicationInitializationCallback</span>, который инициализирует приложение.</p>
<p>Для создания объекта <code>ApplicationInitializationCallback</code> применяется статическая функция <span class="b">ApplicationInitializationCallback::new()</span>, которая в 
качестве параметра принимает объект <code>FnMut(&Option&lt;ApplicationInitializationCallbackParams&gt;) -&gt; Result&lt;()&gt;</code>. 
То есть фактически мы можем передать в функцию <code>ApplicationInitializationCallback::new</code> мы можем передаеть функцию, которая принимает один параметр. 
В этой функции мы создаем объект структуры MyApp:</p>
<pre class="brush:rs;">MyApp().new()</pre>
<p>И после этого окно приложения отобразится на экране компьютера.</p>
<h3>Создание файла манифеста</h3>
<p>Поскольку мы использует API Windows 10, то просто скомпилировать exe и запустить его одним кликом не получится. Нам нужно определить файл манифеста приложения. 
Итак, в папке проекта создадим папку <span class="b">appx</span>. В этой папке определим файл <span class="b">AppxManifest.xml</span>:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;Package
  xmlns="http://schemas.microsoft.com/appx/manifest/foundation/windows10"
  xmlns:uap="http://schemas.microsoft.com/appx/manifest/uap/windows10"
  IgnorableNamespaces="uap"&gt;
  &lt;Identity
    Name="Metanit.Hello"
    Publisher="CN=Metanit.com"
    Version="1.0.0.0" /&gt;
  &lt;Properties&gt;
    &lt;DisplayName&gt;Windows 10 App in Rust&lt;/DisplayName&gt;
    &lt;PublisherDisplayName&gt;Metanit.com&lt;/PublisherDisplayName&gt;
    &lt;Logo&gt;StoreLogo.png&lt;/Logo&gt;
  &lt;/Properties&gt;
  &lt;Dependencies&gt;
    &lt;TargetDeviceFamily Name="Windows.Universal" MinVersion="10.0.0.0" MaxVersionTested="10.0.0.0" /&gt;
  &lt;/Dependencies&gt;
  &lt;Resources&gt;
    &lt;Resource Language="en-us" /&gt;
  &lt;/Resources&gt;
  &lt;Applications&gt;
    &lt;Application Id="App" Executable="hello.exe" EntryPoint="Hello.App"&gt;
      &lt;uap:VisualElements DisplayName="Windows 10 App in Rust" Description="Description"
        Square150x150Logo="Square150x150Logo.png" Square44x44Logo="Square44x44Logo.png" BackgroundColor="transparent"&gt;
      &lt;/uap:VisualElements&gt;
    &lt;/Application&gt;
  &lt;/Applications&gt;
&lt;/Package&gt;
</pre>
<p>При локальном развертывании приложения можно оставить все эти данные, как они определены здесь. Но при желании можно и изменить. Вкратце рассмотрим его структуру.</p>
<h4>Узел Identity</h4>
<p>Задает глобально уникальные идентификаторы приложения и содержит следующие свойства:</p>
<ul>
<li><p><span class="b">Name</span>: название пакета приложения. Представляет строку от 3 до 50 алфавитно-цифровых символов, точки и дефиса.</p></li>
<li><p><span class="b">Publisher</span>: создатель приложения. Должен начинаться с префикса <code>"CN="</code>. Может содержать от 1 до 8192 символов.</p></li>
<li><p><span class="b">Version</span>: версия приложения. Строка в формате <code>"Major.Minor.Build.Revision"</code></p></li>
</ul>
<h4>Узел Properties</h4>
<p>Описывает, как информация о приложении будет отображаться пользователю. Содержит следующие параметры:</p>
<ul>
<li><p><span class="b">DisplayName</span>: отображаемое имя приложения</p></li>
<li><p><span class="b">PublisherDisplayName</span>: отображаемое имя создателя приложения</p></li>
<li><p><span class="b">Logo</span>: путь к логотипу приложения</p></li>
</ul>
<h4>Dependencies</h4>
<p>Описывает зависимости приложения. Содержит элемент <code>&lt;TargetDeviceFamily&gt;</code>, который задает диапазон поддерживаемых устройств с помощью параметров:</p>
<ul>
<li><p><span class="b">Name</span>: название семейства устройств, которые поддерживают приложение</p></li>
<li><p><span class="b">MinVersion</span>: минимальная версия устройства</p></li>
<li><p><span class="b">MaxVersionTested</span>: максимальная версия</p></li>
</ul>
<h4>Узел Resources</h4>
<p>Определяет поддерживаемые языки с помощью вложеных элементов <code>&lt;Resource&gt;</code>. Первый элемент <code>&lt;Resource&gt;</code> 
задает язык приложения по умолчанию. Должен быть определен как минимум один язык.</p>
<h4>Узел Applications</h4>
<p>Определяет характеристики для каждого содержащегося в пакете приложения с помощью вложеных элементов <code>&lt;Application&gt;</code>.</p>
<p>Элемент <code>&lt;Application&gt;</code> имеет следующие атрибуты</p>
<ul>
<li><p><span class="b">Id</span>: уникальный идентификатор приложения внутри пакета</p></li>
<li><p><span class="b">Executable</span>: имя файла приложения (файл exe или dll). Поскольку созданный через cargo проект называется "hello", то по умолчанию 
он будет компилироваться в файл "hello.exe"</p></li>
<li><p><span class="b">EntryPoint</span>: использует свойства Executable и Id</p></li>
</ul>
<p>Также с помощью вложенного элемента <span class="b">uap:VisualElements</span> элемент <code>&lt;Application&gt;</code> определяет визуальные 
настройки приложения. А именно:</p>
<ul>
<li><p><span class="b">DisplayName</span>: отображаемое имя приложения - строка от 1 до 256 символов</p></li>
<li><p><span class="b">Description</span>: описание приложения - строка от 1 до 2048 символов</p></li>
<li><p><span class="b">BackgroundColor</span>: фоновый цвет в формате трехбайтного шестнадцатеричного значения, предваряемого символом "#", либо название цвета в виде строки.</p></li>
<li><p><span class="b">Square150x150Logo</span>: путь к логотипу величиной 150x150</p></li>
<li><p><span class="b">Square44x44Logo</span>: путь к логотипу величиной 44x144</p></li>
</ul>
<p>Поскольку здесь необходимо как минимум три файла изображения, то можно их загрузить ниже. Файл <span class="b">StoreLogo.png</span>:</p>
<img src="./pics/StoreLogo.png" />
<p>Файл <span class="b">Square150x150Logo.png</span>:</p>
<img src="./pics/Square150x150Logo.png" />
<p>Файл <span class="b">Square44x44Logo.png</span>:</p>
<img src="./pics/Square44x44Logo.png" />
<h3>Компиляция и установка приложения</h3>
<p>Для компиляции и установки приложения в папку проекта добавим новый файл <span class="b">register.cmd</span> со следующим содержимым:</p>
<pre class="brush:xml;">
cargo build
copy appx\* .\target\debug
cd .\target\debug
powershell -command "Add-AppxPackage -Register AppxManifest.xml"
cd ..\..\
</pre>
<p>Этот скрипт сначала компилирует приложение командой <code>cargo build</code>. Затем компирует содержимое из папки <code>appx</code> (то есть файл манифеста и изображения) 
в папку <code>\target\debug</code>, где будет располагаться скомилированный файл приложения. И затем выполняется команда "Add-AppxPackage", 
которая устанавливает приложения на локальном компьютере.</p>
<p>Таким образом, весь проект будет выглядеть следующим образом:</p>
<img src="./pics/1.3.png" alt="Графическое приложение Windows 10 на Rust" />
<p>Теперь, когда все готово, перейдем в командой строке к папке проекта и запустим в ней файл <span class="b">register.cmd</span>:</p>
<img src="./pics/1.4.png" alt="GUI Приложение Windows 10 на Rust" />
<p>В итоге в меню Пуск в Windows мы сможем увидеть наше приложение, которое там называется так, как было указано в файле манифеста - <code>Windows 10 App in Rust</code>:</p>
<img src="./pics/1.5.png" alt="GUI App Windows 10 in Rust" />
<p>Запустим его и увидим элемент TextBlock с надписью, которую мы определили в коде приложения:</p>
<img src="./pics/1.6.png" alt="Desktop App for Windows 10 in Rust" />
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


<div class="nav"><p><a href="./">Содержание</a><a href="./1.2.php">Вперед</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Графические приложения на Rust для Windows 10</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/windows/1.1.php">Первое приложение</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/windows/1.2.php">Обработка событий</a></span></li>
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
	$("li:contains('Глава 1.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 1.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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