<!DOCTYPE html>
<html >
<head>
<title>Kotlin | Перегрузка операторов</title>
<meta charset="utf-8" />
<meta name="description" content="Перегрузка операторов в языке программирования Kotlin, операции инкремента и декремента, функция invoke">
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
<h2>Перегрузка операторов</h2><div class="date">Последнее обновление: 26.12.2021</div>

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

<p>Kotlin позволяет определить для типов ряд встроенных операторов. Для определения оператора 
для типа определяется функция с ключевым словом <span class="b">operator</span>:</p>
<pre class="brush:kt;">operator fun название_оператора([параметры_оператора]) : возвращаемый_тип{
	// действия функции оператора
}</pre>
<p>После ключевого слова <span class="b">fun</span> идет название оператора и далее скобки. Если оператор бинарный, то в скобках указывается параметр оператора. 
После скобок через двоеточие указывается возвращаемый тип.</p>
<p>Рассмотрим простейший пример. Допустим, у нас есть класс Counter, который представляет некоторый счетчик:</p>
<pre class="brush:kt;">class Counter(var value: Int)</pre>
<p>Свойство <code>value</code> собственно хранит значение счетчика.</p>
<p>И допустим, у нас есть два объекта класса Counter - два счетчика, которые мы хотим сравнивать или складывать на основании их свойства value, используя стандартные операции сравнения и сложения:</p>
<pre class="brush:kt;">
val counter1 = Counter(5)
val counter2 = Counter(7)

val result = counter1 &gt; counter2;
val counter3: Counter = counter1 + counter2;
</pre>
<p>Но на данный момент ни операция сравнения, ни операция сложения для объектов Counter не доступны. Эти операции могут использоваться для ряда 
встроенных типов. Например, по умолчанию мы можем складывать числовые значения, но как складывать объекты классов, которые создаются непосредственно разработчиком, 
компилятор не знает. И для этого нам надо выполнить перегрузку нужных нам операторов:</p>
<pre class="brush:kt;">
fun main(){
    val counter1 = Counter(5)
    val counter2 = Counter(7)

    val counter1IsGreater = counter1 &gt; counter2
    val counter3: Counter = counter1 + counter2
	
    println(counter1IsGreater)  // false
    println(counter3.value)     // 12
}

class Counter(var value: Int){

    operator fun compareTo(counter: Counter) : Int{
        return this.value - counter.value
    }
    operator fun plus(counter: Counter): Counter {
        return Counter(this.value + counter.value)
    }
}
</pre>
<p>Переопределение операторов предполагает переопределение соответствующих этим операторам функций. Например, операция сравнения</p>
<pre class="brush:kt;">counter1 &gt; counter2</pre>
<p>транслируется в функцию</p>
<pre class="brush:kt;">counter1.compareTo(counter2) &gt; 0</pre>
<p>То есть, если левый операнд (counter1) операции больше чем правый операнд (counter2), то функция оператора должна возвращать число больше 0. 
И в данном случае мы можем просто вычесть из <code>counter1.value</code> значение <code>counter2.value</code>, чтобы определить, больше ли counter1 чем 
counter2:</p>
<pre class="brush:kt;">
operator fun compareTo(counter: Counter) : Int{
	return this.value - counter.value
}
</pre>
<p>Оператор сложения + транслируется в 
функцию <span class="b">plus()</span>. Параметр этой функции представляет правый операнд операции. Левый операнд доступен через ключевое слово <span class="b">this</span>:</p>
<pre class="brush:kt;">
operator fun plus(counter: Counter): Counter {
    Counter(this.value + counter.value)
}
</pre>
<p>Возвращаемое значение операции сложения может быть любым, но в данном случае мы предполагаем, что это будет также объект Counter.</p>
<p>Операторы могут быть определены как в виде функций класса, так и в виде функций расширений. А это значит, что мы можем переопределить операторы 
даже для встроенных типов:</p>
<pre class="brush:kt;">
fun main(){
    val counter1 = Counter(5)
    val counter2 = Counter(3)

    val counter3: Counter = counter1 + counter2

    val counter4: Counter = 33 + counter1
    
    println(counter3.value)     // 8
    println(counter4.value)     // 38
}

class Counter(val value: Int)

operator fun Counter.plus(counter: Counter): Counter {
    return Counter(this.value + counter.value)
}

operator fun Int.plus(counter: Counter): Counter {
    return Counter(this + counter.value)
}
</pre>
<p>Здесь для класса Counter определена опрерация сложения с помощью функции расширения. Но кроме того, здесь также определен оператор сложения и для встроенного 
типа Int - в данном случае в качестве правого операнда будет передаваться объект Counter и результатом операции также будет объект Counter:</p>
<pre class="brush:kt;">
operator fun Int.plus(counter: Counter): Counter {
    return Counter(this + counter.value)
}
</pre>
<p>Благодаря этому мы также сможем складывать объекты Int и Counter:</p>
<pre class="brush:kt;">
val counter4: Counter = 33 + counter1
</pre>
<p>Рассмотрим, какие операторы мы можем переопределить</p>
<h3>Унарные операторы</h3>
<table class="tab">
<tr class="tabhead"><td><p>Операция</p></td><td><p>Транслируется в</p></td></tr>
<tr><td><p><code>+a</code></p></td><td><p><code>a.unaryPlus()</code></p></td></tr>
<tr><td><p><code>-a</code></p></td><td><p><code>a.unaryMinus()</code></p></td></tr>
<tr><td><p><code>!a</code></p></td><td><p><code>a.not()</code></p></td></tr>
</table>
<p>Например, переопределение операции унарного минуса</p>
<pre class="brush:kt;">
fun main(){
    val counter1 = Counter(5)
    val counter2 = -counter1

    println(counter2.value)     // -5
}

class Counter(var value: Int){

    operator fun unaryMinus(): Counter{
        return Counter(-value)
    }
}
</pre>
<h3>Инкремент/декремент</h3>
<table class="tab">
<tr class="tabhead"><td><p>Операция</p></td><td><p>Транслируется в</p></td></tr>
<tr><td><p><code>++a / a++</code></p></td><td><p><code>a.inc()</code></p></td></tr>
<tr><td><p><code>--a / a--</code></p></td><td><p><code>a.dec()</code></p></td></tr>
</table>
<p>Следует отметить, что эти операторы не должны именять текущий объект, к которому применяется операция инкремента/декремента, а должны 
возвращать новый объект этого типа. Например:</p>
<pre class="brush:kt;">
fun main(){
    var counter1 = Counter(5)
    var counter2 = counter1++

    println(counter1.value)     // 6
    println(counter2.value)     // 5

    var counter3 = ++counter1
    println(counter1.value)     // 7
    println(counter3.value)     // 7
}

class Counter(var value: Int){

    operator fun inc(): Counter{
        return Counter(value + 1)
    }
    operator fun dec(): Counter{
        return Counter(value - 1)
    }
}
</pre>
<p>При операции постфиксного инкремента (<code>counter1++</code>) компилятор сначала создает временную переменную, в которую сохраняет текущий объект. Затем текущий объект замещает значением, полученным 
из функции <code>inc()</code>. В качестве результата операции возвращается значение временной переменной:</p>
<pre class="brush:kt;">
var counter1 = Counter(5)
var counter2 = counter1++	// counter2 получает старое значение объекта counter1 из временной переменной

println(counter1.value)     // 6
println(counter2.value)     // 5
</pre>
<p>При префиксном инкременте (<code>++counter1</code>) компилятор возвращает новое значение, полученное из функции <code>inc()</code>:</p>
<pre class="brush:kt;">
println(counter1.value)     // 6

var counter3 = ++counter1
println(counter1.value)     // 7
println(counter3.value)     // 7
</pre>
<p>Те же правила касаются и префиксного/постфиксного декремента.</p>
<h3>Бинарные арифметические операторы</h3>
<table class="tab">
<tr class="tabhead"><td><p>Операция</p></td><td><p>Транслируется в</p></td></tr>
<tr><td><p><code>a + b</code></p></td><td><p><code>a.plus(b)</code></p></td></tr>
<tr><td><p><code>a - b</code></p></td><td><p><code>a.minus(b)</code></p></td></tr>
<tr><td><p><code>a * b</code></p></td><td><p><code>a.times(b)</code></p></td></tr>
<tr><td><p><code>a / b</code></p></td><td><p><code>a.div(b)</code></p></td></tr>
<tr><td><p><code>a % b</code></p></td><td><p><code>a.rem(b)</code></p></td></tr>
<tr><td><p><code>a..b</code></p></td><td><p><code>a.rangeTo(b)</code></p></td></tr>
</table>
<p>Пример операции сложения:</p>
<pre class="brush:kt;">
fun main(){
    val counter1 = Counter(5)
    val counter2 = Counter(25)
    val counter3: Counter = counter1 + counter2
    println(counter3.value)     // 30

    val counter4: Counter = counter1 + 4
    println(counter4.value)     // 9
}

class Counter(var value: Int){

    operator fun plus(counter: Counter): Counter{
        return Counter(value + counter.value)
    }
    operator fun plus(number: Int): Counter{
        return Counter(value + number)
    }
}
</pre>
<p>Здесь реализовано две версии оператора. Первая складывает объект Counter с другим объектом Counter. Вторая версия складывает объект Counter с целым числом.</p>
<h3>Операторы сравнения</h3>
<table class="tab">
<tr class="tabhead"><td><p>Операция</p></td><td><p>Транслируется в</p></td></tr>
<tr><td><p><code>a == b</code></p></td><td><p><code>a?.equals(b) ?: (b === null)</code></p></td></tr>
<tr><td><p><code>a != b</code></p></td><td><p><code>!(a?.equals(b) ?: (b === null))</code></p></td></tr>
<tr><td><p><code>a &gt; b</code></p></td><td><p><code>a.compareTo(b) &gt; 0</code></p></td></tr>
<tr><td><p><code>a &lt; b</code></p></td><td><p><code>a.compareTo(b) &lt; 0</code></p></td></tr>
<tr><td><p><code>a &gt;= b</code></p></td><td><p><code>a.compareTo(b) &gt;= 0</code></p></td></tr>
<tr><td><p><code>a &lt;= b</code></p></td><td><p><code>a.compareTo(b) &lt;= 0</code></p></td></tr>
</table>
<p>Для первых двух операторов (<span class="b">==</span> и <span class="b">!=</span>) необходимо переопределить функцию <span class="b">equals(value: Any?)</span>, 
которая должна иметь один параметр типа <span class="b">Any?</span> и возвращать значение <span class="b">Boolean</span></p>
<pre class="brush:kt;">
fun main(){
    val counter1 = Counter(5)
    val counter2 = Counter(5)
    val counter3 = Counter(7)

    println(counter1 == counter2)   // true
    println(counter1 == counter3)   // false
}
class Counter(var value: Int){

    override operator fun equals(counter: Any?): Boolean{
        if(counter is Counter) return this.value == counter.value
        return false
    }
}
</pre>
<p>В данном случае два объекта Counter равны, если равны значения их свойств value.</p>
<p>Для остальных операций сравнения реализуется функция <span class="b">compareTo()</span>, которая должна возвращать число - значение типа <span class="b">Int</span>. Если левый операнд больше правого, 
то возвращает число больше 0, если меньше, то возвращается число меньше 0. Если операнды равны, возвращается 0.</p>
<pre class="brush:kt;">
fun main(){
    val counter1 = Counter(5)
    val counter2 = Counter(4)
    val counter3 = Counter(7)

    println(counter1 &gt; counter2)   // true
    println(counter1 &gt; counter3)   // false
    println(counter1 &gt; 1)   // true
    println(counter1 &gt; 56)   // false
}
class Counter(var value: Int){

    operator fun compareTo(counter: Counter): Int{
        return this.value - counter.value
    }
    operator fun compareTo(number: Int): Int{
        return this.value - number
    }
}
</pre>
<h3>Операторы присвоения</h3>
<table class="tab">
<tr class="tabhead"><td><p>Операция</p></td><td><p>Транслируется в</p></td></tr>
<tr><td><p><code>a += b</code></p></td><td><p><code>a.plusAssign(b)</code></p></td></tr>
<tr><td><p><code>a -= b</code></p></td><td><p><code>a.minusAssign(b)</code></p></td></tr>
<tr><td><p><code>a *= b</code></p></td><td><p><code>a.timesAssign(b)</code></p></td></tr>
<tr><td><p><code>a /= b</code></p></td><td><p><code>a.divAssign(b)</code></p></td></tr>
<tr><td><p><code>a %= b</code></p></td><td><p><code>a.remAssign(b)</code></p></td></tr>
</table>
<p>Все функции операторов присвоения должны возвращать значение типа <span class="b">Unit</span>:</p>
<pre class="brush:kt;">
fun main(){
    val counter1 = Counter(5)
    val counter2 = Counter(4)
    val counter3 = Counter(7)

    counter1 += counter2
    println(counter1.value)   // 9

    counter3 += 3
    println(counter3.value)   // 10
}
class Counter(var value: Int){

    operator fun plusAssign(counter: Counter){
        this.value += counter.value
    }
    operator fun plusAssign(number: Int){
        this.value += number
    }
}
</pre>
<h3>Оператор in</h3>
<table class="tab">
<tr class="tabhead"><td><p>Операция</p></td><td><p>Транслируется в</p></td></tr>
<tr><td><p><code>a in b</code></p></td><td><p><code>b.contains(a)</code></p></td></tr>
<tr><td><p><code>a !in b</code></p></td><td><p><code>!b.contains(a)</code></p></td></tr>
</table>
<p>Как правило, под операндом <code>b</code> подразумевается некоторая коллекция, которая в качестве элемента может иметь операнд <code>a</code>:</p>
<pre class="brush:kt;">
fun main(){
    val tom = Person("Tom")
    val mike = Person("Mike")
    val bob = "Bob"
    val alice = "Alice"
    val jetBrains = Company(arrayOf(Person("Tom"), Person("Bob"), Person("Sam")))

    val tomInJetBrains = tom in jetBrains
    println(tomInJetBrains) // true

    val mikeInJetBrains = mike in jetBrains
    println(mikeInJetBrains) // false

    val bobInJetBrains = bob in jetBrains
    println(bobInJetBrains) // true

    val aliceInJetBrains = alice in jetBrains
    println(aliceInJetBrains) // false
}
class Person(val name:String)
class Company(private val personal: Array&lt;Person&gt;){
    operator fun contains(person: Person): Boolean{
        for (employee in personal) {
            if(employee.name == person.name) return true
        }
        return false
    }
    operator fun contains(personName: String): Boolean{
        for (employee in personal) {
            if(employee.name == personName) return true
        }
        return false
    }
}
</pre>
<p>В данном случае класс компании Company хранит в свойстве personal штат сотрудников в виде массива объекта Person. И класс Company реализует две версии 
оператора <span class="b">in</span>: одна версия для проверки наличия объекта Person в массиве, другая для проверки наличия объект Person, имя которого соответствует строке - 
условному имени сотрудника.</p>

<h3>Операторы доступа по индексу</h3>
<table class="tab">
<tr class="tabhead"><td><p>Операция</p></td><td><p>Транслируется в</p></td></tr>
<tr><td><p><code>a[i]</code></p></td><td><p><code>a.get(i)</code></p></td></tr>
<tr><td><p><code>a[i, j]</code></p></td><td><p><code>a.get(i, j)</code></p></td></tr>
<tr><td><p><code>a[i_1, ..., i_n]</code></p></td><td><p><code>a.get(i_1, ..., i_n)</code></p></td></tr>
<tr><td><p><code>a[i] = b</code></p></td><td><p><code>a.set(i, b)</code></p></td></tr>
<tr><td><p><code>a[i, j] = b</code></p></td><td><p><code>a.set(i, j, b)</code></p></td></tr>
<tr><td><p><code>a[i_1, ..., i_n] = b</code></p></td><td><p><code>a.set(i_1, ..., i_n, b)</code></p></td></tr>
</table>
<p>Применим оператор доступа по индексу</p>
<pre class="brush:kt;">
fun main(){
    val jetBrains = Company(arrayOf(Person("Tom"), Person("Bob"), Person("Sam")))

    // получаем пользователей
    val firstPerson: Person? = jetBrains[0]
    println(firstPerson?.name) // Tom

    val fifthPerson: Person? = jetBrains[5]
    println(fifthPerson?.name) // null

    // устанавливаем пользователей
    jetBrains[0] = Person("Mike")
    println(jetBrains[0]?.name) // Mike
}
class Person(val name:String)
class Company(private val personal: Array&lt;Person&gt;){
    operator fun set(index: Int, person: Person){
        // если индекс есть в массиве personal
        if(index in personal.indices)
            personal[index] = person    // то переустанавливаем значение в массиве
    }
    operator fun get(index: Int): Person?{
        // если индекс есть в массиве personal
        if(index in personal.indices)
            return personal[index] // то возвращаем значение из массива
        return null // иначе возвращаем null
    }
}
</pre>
<p>В данном случае с помощью функций <code>get/set</code> опосредуется доступ к массиву personal в рамках объекта People. А благодаря операторам-индексаторам 
мы сможем использовать объект People как массив.</p>
<h3>Операторы вызова</h3>
<p>Операторы вызова в виде реализации функции <span class="b">invoke()</span> применяются для выполнения объекта на манер функции:</p>
<table class="tab">
<tr class="tabhead"><td><p>Операция</p></td><td><p>Транслируется в</p></td></tr>
<tr><td><p><code>a()</code></p></td><td><p><code>a.invoke()</code></p></td></tr>
<tr><td><p><code>a(i)</code></p></td><td><p><code>a.invoke(i)</code></p></td></tr>
<tr><td><p><code>a(i, j)</code></p></td><td><p><code>a.invoke(i, j)</code></p></td></tr>
<tr><td><p><code>a(i_1, ..., i_n)</code></p></td><td><p><code>a.invoke(i_1, ..., i_n)</code></p></td></tr>
</table>
<p>Применение:</p>
<pre class="brush:kt;">
fun main(){
    val message=Message()
    message("Hello Kotlin")		// Message text: Hello Kotlin
}
class Message(){
    operator fun invoke(text: String) {
        println("Message text: $text")
    }
}
</pre>
<p>Подобный оператор удобно использовать в качестве фабрики объекта:</p>
<pre class="brush:kt;">
fun main(){
    val message1=Message("Hello")
    val message2 = message1("World")
    val message3 = message2("!!!")
    println(message3.text)  // Hello World !!!
}
class Message(val text: String){
    operator fun invoke(addition: String) : Message {
        return Message("$text $addition")
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


<div class="nav"><p><a href="./5.5.php">Назад</a><a href="./">Содержание</a><a href="./5.6.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в язык Kotlin</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/1.1.php">Что такое Kotlin. Первая программа</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/1.2.php">Первая программа в IntelliJ IDEA</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы языка Kotlin</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.9.php">Структура программы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.1.php">Переменные</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.2.php">Типы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.10.php">Консольный ввод и вывод</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.4.php">Операции с числами</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.5.php">Условные выражения</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.6.php">Условные конструкции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.7.php">Циклы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.8.php">Диапазоны</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.3.php">Массивы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Функциональное программирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.1.php">Функции и их параметры</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.2.php">Переменное количество параметров. Vararg</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.3.php">Возвращение результата. Оператор return</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.4.php">Однострочные и локальные функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.5.php">Перегрузка функций</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.9.php">Тип функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.7.php">Функции высокого порядка</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.8.php">Анонимные функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.6.php">Лямбда-выражения</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.1.php">Классы и объекты</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.3.php">Конструкторы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.5.php">Пакеты и импорт</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.9.php">Наследование</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.6.php">Модификаторы видимости</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.2.php">Геттеры и сеттеры</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.10.php">Переопределение методов и свойств</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.11.php">Абстрактные классы и методы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.8.php">Интерфейсы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.7.php">Вложенные классы и интерфейсы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.12.php">Data-классы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.13.php">Перечисления enums</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.4.php">Делегирование</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.14.php">Анонимные классы и объекты</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Обобщения</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/6.1.php">Обобщенные классы и функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/6.2.php">Ограничения обобщений</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/6.3.php">Вариантность, ковариантность и контравариантность</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Дополнительные возможности ООП</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.2.php">Обработка исключений</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.1.php">Null и nullable-типы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.3.php">Преобразование типов</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.5.php">Функции расширения</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.8.php">Перегрузка операторов</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.6.php">Делегированные свойства</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.7.php">Scope-функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.4.php">Инфиксная нотация</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Коллекции и последовательности</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.1.php">Изменяемые и неизменяемые коллекции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.2.php">List</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.3.php">Set</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.4.php">Map</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.5.php">Последовательности</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.6.php">Отличие последовательности от коллекций Iterable</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.7.php">Фильтрация</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.8.php">Проверка элементов</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.9.php">Трансформации</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.10.php">Группировка</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.11.php">Сортировка</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.12.php">Агрегатные операции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.13.php">Сложение, вычитание и объединение коллекций</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.14.php">Получение части элементов</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.15.php">Получение отдельных элементов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. Корутины</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.1.php">Введение в корутины</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.2.php">Область корутины</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.3.php">launch и Job</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.4.php">Async, await и Deferred</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.7.php">Диспетчер корутины</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.5.php">Отмена выполнения корутин</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.6.php">Каналы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Асинхронные потоки</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.1.php">Введение в асинхронные потоки</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.2.php">Создание асинхронного потока</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.3.php">Операции с потоками</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.4.php">Функции count, take и drop. Количество элементов в потоке</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.5.php">Функции first, last, single</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.6.php">Преобразование данных. Функции map и transform</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.7.php">Фильтрация данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.8.php">Сведение данных. Функции reduce и fold</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.9.php">Объединение потоков</a></span></li>
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
	
	$("li:contains('Глава 6.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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