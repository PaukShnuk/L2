<!DOCTYPE html>
<html >
<head>
<title>Angular | Reactive Forms</title>
<meta charset="utf-8" />
<meta name="description" content="Подход Data-Driven к работе с формами в Angular, реактивные формы (Reactive Forms), создание своих валидаторов, классы FormGroup и FormControl">
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
<h2>Reactive Forms</h2><div class="date">Последнее обновление: 04.11.2021</div>

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

<p>В прошлых темах был описан подход Template-Driven, который концентрировался вокруг шаблона компонента: для работы с формой и ее элементами в шаблоне компонента 
к элементам html применялись директивы NgModel и NgForm, правила валидации задавались в тегах элементов с помощью атрибутов required и pattern. 
Но есть альтернативный подход - использование реактивных форм (Reactive Forms). Рассмотрим, в чем он заключается.</p>
<p>При подходе Reactive Forms для формы создается набор объектов FormGroup и FormControl. Сама форма и ее подсекции представляют класс FormGroup, а отдельные элементы ввода - 
класс FormControl. Например, базовое создание формы:</p>
<pre class="brush:ts;">
myForm : FormGroup = new FormGroup();
</pre>
<p>Добавляем в форму элементы:</p>
<pre class="brush:ts;">
myForm : FormGroup = new FormGroup({
			
	"userName": new FormControl(),
	"userEmail": new FormControl(),
	"userPhone": new FormControl()
});
</pre>
<p>Здесь определено три элемента: userName, userEmail и userPhone.</p>
<p>Объект FormControl может иметь различные формы определения. 
(Подробнее можно посмотреть в <a href="https://angular.io/api/forms/FormControl" rel="nofollow">документации</a>). В частности, 
в качестве первого параметра можно передавать значение по умолчанию для элемента, а в качестве второго параметра - набор валидаторов:<p>
<pre class="brush:ts;">
myForm : FormGroup = new FormGroup({
			
	"userName": new FormControl("Tom", Validators.required),
	"userEmail": new FormControl("", [
				Validators.required, 
				Validators.email
	]),
	"userPhone": new FormControl("", Validators.pattern("[0-9]{10}")) 
});
</pre>
<p>Здесь к элементам применяется ряд валидаторов. Валидатор <code>Validators.required</code> требует обязательного наличия значения. Валидатор <code>Validators.email</code> 
проверяет, представляет ли введенная строка электронный адрес. Валидатор <code>Validators.pattern("[0-9]{10}")</code> поверяет на соответствие регулярному 
выражению. Все встроенные валидаторы можно посмотреть в <a href="https://angular.io/docs/ts/latest/api/forms/index/Validators-class.html" rel="nofollow">документации</a>. 
Если валидаторов несколько, то они заключаются в массив.</p>
<p>Для привязки объекта myForm к конкретному элементу формы применяется атрибут <code>formGroup</code>:</p>
<pre class="brush:xml;">&lt;form [formGroup]="myForm" &gt;</pre>
<p>Кроме того, необходимо связать объекты FormControl с элементами ввода с помощью атрибута <code>formControlName</code>:</p>
<pre class="brush:xml;">&lt;input name="name" formControlName="userName" /&gt;</pre>
<p>Данный элемент будет связан с объектом <code>"userName": new FormControl("Tom")</code>.</p>
<p>Теперь рассмотрим, как эти объекты будут взаимодействовать с шаблоном компонента. Для этого определим следующий компонент:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
import { FormGroup, FormControl, Validators} from '@angular/forms';
  
@Component({
    selector: 'my-app',
    styles: [`
        input.ng-touched.ng-invalid {border:solid red 2px;}
        input.ng-touched.ng-valid {border:solid green 2px;}
    `],
    template: `&lt;form [formGroup]="myForm" novalidate (ngSubmit)="submit()"&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Имя&lt;/label&gt;
                        &lt;input class="form-control" name="name" formControlName="userName" /&gt;
                         
                        &lt;div class="alert alert-danger"
                            *ngIf="myForm.controls['userName'].invalid && myForm.controls['userName'].touched"&gt;
                            Не указано имя
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Email&lt;/label&gt;
                        &lt;input class="form-control" name="email" formControlName="userEmail" /&gt;
                         
                        &lt;div class="alert alert-danger"
                            *ngIf="myForm.controls['userEmail'].invalid && myForm.controls['userEmail'].touched"&gt;
                            Некорректный email
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Телефон&lt;/label&gt;
                        &lt;input class="form-control" name="phone" formControlName="userPhone" /&gt;
                        &lt;div class="alert alert-danger"
                            *ngIf="myForm.controls['userPhone'].invalid && myForm.controls['userPhone'].touched"&gt;
                            Некорректный номер телефона
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;button class="btn btn-default" [disabled]="myForm.invalid"&gt;
                            Отправить
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/form&gt;`
})
export class AppComponent { 
  
    myForm : FormGroup;
    constructor(){
        this.myForm = new FormGroup({
             
            "userName": new FormControl("Tom", Validators.required),
            "userEmail": new FormControl("", [
                                Validators.required, 
                                Validators.email 
                            ]),
            "userPhone": new FormControl("", Validators.pattern("[0-9]{10}")) 
        });
    }
     
    submit(){
        console.log(this.myForm);
    }
}
</pre>
<p>Для отображения ошибок валидации здесь используется блоки div, в которых определены выражения типа</p>
<pre class="brush:ts;">*ngIf="myForm.controls['userName'].invalid && myForm.controls['userName'].touched"&gt;</pre>
<p>С помощью выражений <code>myForm.controls['userName']</code> мы можем обратиться к нужному элементу формы и получить его состояние или значение. 
В данном случае если значение поля ввода невалидно, и при этом поле ввода уже получало фокус, то отображается ошибка валидации.</p>
<p>Но чтобы все это заработало, необходимо импортировать модуль ReactiveFormsModule. Для этого изменим модуль приложения AppModule:</p>
<pre class="brush:ts;">
import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule }   from '@angular/forms';
import { AppComponent }   from './app.component';

import { ReactiveFormsModule }   from '@angular/forms';
@NgModule({
    imports:      [ BrowserModule, FormsModule, ReactiveFormsModule],
    declarations: [ AppComponent],
    bootstrap:    [ AppComponent ]
})
export class AppModule { }
</pre>
<img src="./pics/5.6.png" alt="Data-Driven подход в Angular 13" />
<h3>Определение валидаторов</h3>
<p>Кроме использования встроенных валидаторов мы также можем определять свои валидаторы. К примеру, определим в классе компонента валидатор:</p>
<pre class="brush:ts;">
export class AppComponent { 
 
	myForm : FormGroup;
	constructor(){
		this.myForm = new FormGroup({
			
			"userName": new FormControl("Tom", [Validators.required, this.userNameValidator]),
			"userEmail": new FormControl("", [
								Validators.required, 
								Validators.email
							]),
			"userPhone": new FormControl()
		});
	}
    submit(){
        console.log(this.myForm);
    }
	// валидатор
	userNameValidator(control: FormControl): {[s:string]:boolean}|null{
		
		if(control.value==="нет"){
			return {"userName": true};
		}
		return null;
	}
}
</pre>
<p>По сути валидатор представляет обычный метод - в данном случае метод <code>userNameValidator</code>. В качестве параметра он принимает элемент формы, к 
которому этот валидатор применяется, а на выходе возвращает объект, где ключ - строка, а значение равно true.</p>
<p>В данном случае проверяем, если значение равно строке "нет", то возвращаем объект <code>{"userName": true}</code>. Значение true указывает, что 
элемент формы не прошел валидацию. Если же все нормально, то возвращаем null.</p>
<p>Затем этот валидатор добавляется к элементу:</p>
<pre class="brush:ts;">"userName": new FormControl("Tom", [Validators.required, this.userNameValidator])</pre>
<p>И в случае если в поле для ввода имени будет введено значение "нет", то данное поле не пройдет валидацию:</p>
<img src="./pics/5.7.png" alt="Создание валидатора в Angular 13" />
<h3>Массивы элементов и FormArray</h3>
<p>Некоторые элементы на форме могут относиться к одному и тому же признаку. Например, в анкете пользователя могут попросить указать номера телефоно, которыми он владеет. 
Их может быть несколько, но они будут представлять один и тот же признак - "номера телефонов". То есть логично было бы объединить все поля для ввода номеров телефонов в массив. 
И в Angular мы легко можем реализовать подобную возможность с помощью класса <span class="b">FormArray</span>.</p>
<p>Итак, изменим код компонента AppComponent следующим образом:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
import { FormGroup, FormControl, Validators, FormArray} from '@angular/forms';
 
@Component({
    selector: 'my-app',
    styles: [`
        input.ng-touched.ng-invalid {border:solid red 2px;}
        input.ng-touched.ng-valid {border:solid green 2px;}
    `],
    template: `&lt;form [formGroup]="myForm" novalidate (ngSubmit)="submit()"&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Имя&lt;/label&gt;
                        &lt;input class="form-control" name="name" formControlName="userName" /&gt;
						
						&lt;div class="alert alert-danger" 
							*ngIf="myForm.controls['userName'].invalid && myForm.controls['userName'].touched"&gt;
							Не указано имя
						&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Email&lt;/label&gt;
                        &lt;input class="form-control" name="email" formControlName="userEmail" /&gt;
						
						&lt;div class="alert alert-danger" 
							*ngIf="myForm.controls['userEmail'].invalid && myForm.controls['userEmail'].touched"&gt;
							Некорректный email
						&lt;/div&gt;
                    &lt;/div&gt;
					&lt;div formArrayName="phones"&gt;
						&lt;div class="form-group" *ngFor="let phone of getFormsControls()['controls']; let i = index"&gt;
							&lt;label&gt;Телефон&lt;/label&gt;
							&lt;input class="form-control" formControlName="{{i}}" /&gt;
						&lt;/div&gt;
					&lt;/div&gt;
                    &lt;div class="form-group"&gt;
						&lt;button class="btn btn-default" (click)="addPhone()"&gt;
							Добавить телефон
						&lt;/button&gt;
                        &lt;button class="btn btn-default" [disabled]="myForm.invalid"&gt;
							Отправить
						&lt;/button&gt;
                    &lt;/div&gt;
                &lt;/form&gt;`
})
export class AppComponent { 
 
	myForm : FormGroup;
	constructor(){
		this.myForm = new FormGroup({
			
			"userName": new FormControl("Tom", [Validators.required]),
			"userEmail": new FormControl("", [
								Validators.required, 
								Validators.email 
							]),
			"phones": new FormArray([
				new FormControl("+7", Validators.required)
			])
		});
	}
	getFormsControls() : FormArray{
        return this.myForm.controls['phones'] as FormArray;
    }
	addPhone(){
		(&lt;FormArray&gt;this.myForm.controls["phones"]).push(new FormControl("+7", Validators.required));
	}
    submit(){
        console.log(this.myForm);
    }
}
</pre>
<p>Теперь поля для ввода телефонных номеров представляют массив:</p>
<pre class="brush:ts;">
"phones": new FormArray([
		new FormControl("+7", Validators.required)
])
</pre>
<p>Массив или FormArray хранит набор объектов FormControl. И в данном случае добавляется один такой объект.</p>
<p>Чтобы можно было динамически при необходимости добавлять новые объекты, в классе компонента предусмотрен метод <code>addPhone()</code>:</p>
<pre class="brush:ts;">
addPhone(){
	(&lt;FormArray&gt;this.myForm.controls["phones"]).push(new FormControl("+7", Validators.required));
}
</pre>
<p>В этой сложной конструкции мы сначала получаем объект формы через выражение <code>this.myForm.controls["phones"]</code>, затем приводим его к типу 
FormArray. И далее как и в обычный массив добавляем через метод push новый элемент.</p>
<p>Для упрощения получения массива элементов ввода здесь также определен метод <code>getFormsControls()</code>, который возвращает объект FormArray:</p>
<pre class="brush:ts;">
getFormsControls() : FormArray{
        return this.myForm.controls['phones'] as FormArray;
    }
</pre>
<p>В коде html предусматриваем вывод объектов из FormArray, возвращаемого методом <code>getFormsControls()</code>, на форму с помощью директивы "ngFor":</p>
<pre class="brush:ts;">
&lt;div formArrayName="phones"&gt;
	&lt;div class="form-group" *ngFor="let phone of getFormsControls()['controls']; let i = index"&gt;
		&lt;label&gt;Телефон&lt;/label&gt;
		&lt;input class="form-control" formControlName="{{i}}" /&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>

<p>При этом контейнер всех элементов ввода имеет директиву <span class="b">formArrayName="phones"</span>. А каждый элемент в качестве названия принимает его текущий индекс: 
<code>formControlName="{{i}}"</code>.</p>
<p>А кнопка "Добавить телефон" позволяет добавить на форму новое поле для ввода еще одного телефонного номера:</p>
<img src="./pics/5.8.png" alt="FormArray in Angular 13" />
<h3>FormBuilder</h3>
<p>Класс FormBuilder представляет альтернативный подход к созданию форм:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
import { FormGroup, FormControl, Validators, FormArray, FormBuilder} from '@angular/forms';
  
@Component({
    selector: 'my-app',
    styles: [`
        input.ng-touched.ng-invalid {border:solid red 2px;}
        input.ng-touched.ng-valid {border:solid green 2px;}
    `],
    template: `&lt;form [formGroup]="myForm" novalidate (ngSubmit)="submit()"&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Имя&lt;/label&gt;
                        &lt;input class="form-control" name="name" formControlName="userName" /&gt;
                         
                        &lt;div class="alert alert-danger"
                            *ngIf="myForm.controls['userName'].invalid && myForm.controls['userName'].touched"&gt;
                            Не указано имя
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Email&lt;/label&gt;
                        &lt;input class="form-control" name="email" formControlName="userEmail" /&gt;
                         
                        &lt;div class="alert alert-danger"
                            *ngIf="myForm.controls['userEmail'].invalid && myForm.controls['userEmail'].touched"&gt;
                            Некорректный email
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div formArrayName="phones"&gt;
                        &lt;div class="form-group" *ngFor="let phone of getFormsControls()['controls']; let i = index"&gt;
                            &lt;label&gt;Телефон&lt;/label&gt;
                            &lt;input class="form-control" formControlName="{{i}}" /&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;button class="btn btn-default" (click)="addPhone()"&gt;
                            Добавить телефон
                        &lt;/button&gt;
                        &lt;button class="btn btn-default" [disabled]="myForm.invalid"&gt;
                            Отправить
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/form&gt;`
})
export class AppComponent { 
  
    myForm : FormGroup;
    constructor(private formBuilder: FormBuilder){
     
        this.myForm = formBuilder.group({
             
            "userName": ["Tom", [Validators.required]],
            "userEmail": ["", [ Validators.required, Validators.email]],
            "phones": formBuilder.array([
                ["+7", Validators.required]
            ])
        });
    }
    getFormsControls() : FormArray{
        return this.myForm.controls['phones'] as FormArray;
    }
    addPhone(){
        (&lt;FormArray&gt;this.myForm.controls["phones"]).push(new FormControl("+7", Validators.required));
    }
    submit(){
        console.log(this.myForm);
    }
}
</pre>
<p>FormBuilder передается в качестве сервиса в конструктор. С помощью метода <code>group()</code> создается объект FormGroup. Каждый элемент передается 
в форму в виде обычного массива значений:</p>
<pre class="brush:ts;">"userName": ["Tom", [Validators.required]]</pre>
<p>Результат работы компонента будет аналогичным предыдущему.</p>
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


<div class="nav"><p><a href="./5.4.php">Назад</a><a href="./">Содержание</a><a href="./6.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 5.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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