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
    <p>Rubric</p>
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>

        <br />
    <p>Пакет ссылок на основании конфигурации области поиска</p>
    <div>
    <label for="call" >Входящая ссылка :</label>
    <input type="text" id="call" name="call" />
    </div>
    <div>
    <label for="dol" >протяженость по долготе :</label>
    <input type="text" id="dol" name="dol" />
    </div>
    <div>
    <label for="shir" >Протяженность по ширене:</label>
    <input type="text" id="shir" name="shir" />
    </div>
    <div>
    <label for="z" >Коффициент увелечения z:</label>
        <input type="text" id="z" value ="" />
        <div class="plusz" style=" display: inline-block; height: 20px; width: 20px; background-color: red;">+</div>
        <div class="minusz" style="display: inline-block; height: 20px; width: 20px; background-color: green; margin-right: 10px;">-</div>
    </div>
    <div>
    <label for="results" >Количество результатов:</label>
    <input type="text" id="results" name="results" />
    </div>
    <div>
    <label for="catcon" >Подключенный каталог:</label>
        <select name="Подключенный каталог:">
            <option value="man" id="catcon" name="catcon">men</option>
            <option value="women" id="catcon" name="catcon" selected="selected">women</option>
        </select>

    <label for="catost" >Каталог отзывов:</label>
    <select name="Каталог отзывов:">
    <option value="man" id="catost" name="catost">men</option>
    <option value="women" id="catost" name="catost" selected="selected">women</option>
    </select>
    </div>
    <div>
    <label for="newstart" >Повторный запуск через:</label>
        <input type="text" id="time" value ="" />
        <div class="plus" style=" display: inline-block; height: 20px; width: 20px; background-color: red;">+</div>
        <div class="minus" style="display: inline-block; height: 20px; width: 20px; background-color: green; margin-right: 10px;">-</div>
        <select name="newstart" size="1" id="newstart">
            <option value="01">Январь</option>
            <option value="02">Февраль</option>
            <option value="03">Март</option>
             <option value="04">Апрель</option>
            <option value="05">Май</option>
             <option value="06">Июнь</option>
             <option value="07">Июль</option>
             <option value="08">Август</option>
            <option value="09">Сентябрь</option>
             <option value="10">Октябрь</option>
             <option value="11">Ноябрь</option>
             <option value="12">Декабрь</option>
             </select>

        <label for="ost" >Время запуска:</label>
        <input type="text" id="ost" value ="03.00" />
        <div class="pluzost" style=" display: inline-block; height: 20px; width: 20px; background-color: red;">+</div>
        <div class="minusost" style="display: inline-block; height: 20px; width: 20px; background-color: green; margin-right: 10px;">-</div>
    </div>
    <div>
    <input type="submit" value="Сохранить" class="submit"/>
</div>
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