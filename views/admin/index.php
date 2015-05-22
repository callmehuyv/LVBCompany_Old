<?php
	$this->title = 'Admin Manager';
	$this->params['breadcrumbs'][] = $this->title;
?>
<center>

	<?php print_r(Yii::$app->user->identity); ?>
	<h1>Welcome Admin</h1>
	<p>This is admin page, we use this page to routes other admin function page!</p>
</center>
