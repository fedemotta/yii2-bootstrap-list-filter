Yii2 bootstrap list filter
==========================
[Bootstrap list filter](https://github.com/stefanocudini/bootstrap-list-filter) widget for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist fedemotta/yii2-bootstrap-list-filter "*"
```

or add

```
"fedemotta/yii2-bootstrap-list-filter": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :
```
<form role="form">
    <div class="form-group">
    <?=\fedemotta\bootstraplistfilter\BootstrapListFilter::widget(['list_selector'=>'#searchlist','options'=>['class'=>'form-control', 'placeholder'=>'Search...'], 'clientOptions'=>['itemChild'=>'span']]); ?>
    </div>
    <div id="searchlist" class="list-group">
        <a class="list-group-item" href="aquamarine.html"><span>aquamarine</span></a>
        <a class="list-group-item" href="blue.html"><span>blue</span></a>
        <a class="list-group-item" href="cyan.html"><span>cyan</span></a>
    </div>
</form>
 ```
   