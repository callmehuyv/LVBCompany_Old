<?php
	use app\models\User;
	use yii\helpers\Url;
	use yii\web\IdentityInterface;
	$this->title = 'Admin';
	$this->params['breadcrumbs'][] = $this->title;
?>
	<div class="container" id="admin_page">
		<h1>Welcome Admin</h1>
		<div class="row">
			<div class="col-md-2">
				<div class="wrap-item">
					<a href="<?= Url::to(['user/index']); ?>">
						<span class="glyphicon glyphicon-user"></span>
						<div>
							Users
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="wrap-item">
					<a href="#">
						<span class="glyphicon glyphicon-lock"></span>
						<div>
							Drivers
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="wrap-item">
					<a href="#">
						<span class="glyphicon glyphicon-road"></span>
						<div>
							Lines
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="wrap-item">
					<a href="#">
						<span class="glyphicon glyphicon-flag"></span>
						<div>
							Stations
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="wrap-item">
					<a href="#">
						<span class="glyphicon glyphicon-screenshot"></span>
						<div>
							Vehicles
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="wrap-item">
					<a href="#">
						<span class="glyphicon glyphicon-cog"></span>
						<div>
							Global Setting
						</div>
					</a>
				</div>
			</div>

		</div>
	</div>