<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
<script data-main="./js/main.js" src="./js/lib/require.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  type="text/javascript"></script>
<script>
    $(document).ready(function(){
        var inputz = $('#z'); // наш инпут
        var a; // тут будел лежать текущее значение
        $('.plusz').click(function(){ // по клику на плюс
            a = inputz.val();  // получить текущее значение
            a++; // увеличить на 1
            inputz.attr('value',a); // вернуть инпуту
        });

        $('.minusz').click(function(){ // по клику на минус
            a = inputz.val();  // получить текущее значение
            a = (a<1)?0:a-1;
            inputz.attr('value',a); // вернуть инпуту
        });
        var input = $('#time'); // наш инпут
        var b; // тут будел лежать текущее значение
        $('.plus').click(function(){ // по клику на плюс
            b = input.val();  // получить текущее значение
            b++; // увеличить на 1
            input.attr('value',b); // вернуть инпуту
        });

        $('.minus').click(function(){ // по клику на минус
            b = input.val();  // получить текущее значение
            b = (b<1)?0:b-1;
            input.attr('value',b); // вернуть инпуту
        });
        var inputost = $('#ost'); // наш инпут
        var c; // тут будел лежать текущее значение
        $('.pluzost').click(function(){ // по клику на плюс
            c = inputost.val();  // получить текущее значение
            c++; // увеличить на 1
            inputost.attr('value',c); // вернуть инпуту
        });

        $('.minusost').click(function(){ // по клику на минус
            c = inputost.val();  // получить текущее значение
            c = (c<1)?0:c-1;
            inputost.attr('value',c); // вернуть инпуту
        });

    });
</script>
</html>
