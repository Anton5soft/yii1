<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="callForm">
    <form class"call">
    <div>
        <label for="projectname" >Наименование проекта :</label>
        <input type="text" id="projectname" name="projectname" />
    </div>
    <br />
    <p>Пакет ссылок на основании конфигурации области поиска</p>
    <div>
    <label for="call" >Запрос :</label>
    <input type="text" id="call" name="call" />
    </div>
    <div>
    <label for="sll" >sll :</label>
    <input type="text" id="sll" name="sll" />
    </div>
    <div>
    <label for="sspn" >sspn:</label>
    <input type="text" id="sspn" name="sspn" />
    </div>
    <div>
    <label for="z" >z:</label>
    <input type="text" id="z" name="z" />
    </div>
    <div>
    <label for="results" >results:</label>
    <input type="text" id="results" name="results" />
    </div>
    <div>
    <label for="step" >шаг:</label>
    <input type="text" id="step" name="step" />
    </div>
    <input type="submit" value="submit" class="submit" />
    </form>

    <div class="test"></div>
</div>

<div id="grid"></div>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>