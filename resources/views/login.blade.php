@extends('layout')

@section('content')
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Авторизация</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Логин">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name ="re_password" class="form-control" placeholder="Повторите пароль">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Запомнить меня
					</div>
					<div class="form-group">
						<input type="submit" value="Войти" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Еще не зарегистрированы?<a href="/reg">Регистрация</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Забыли пароль?</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
<script src="js/login.js"></script>
