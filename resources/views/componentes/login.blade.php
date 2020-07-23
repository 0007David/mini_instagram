
@extends('layouts.app')

@section('class-login')
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" />
@endsection


@section('content')
<div class="wrapper fadeInDown">
		  <div id="formContent">
		    <!-- Tabs Titles -->
		    <!-- Icon -->
		    <div class="fadeIn first">
		    	<h4>Mini Instagram</h4>
		    	<p>Registrate para ver fotos y contenidos de tus amigos</p>
		      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
		    </div>

		    <!-- Login Form -->
		    <form>
		      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
		      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
              <!-- <input type="submit" class="fadeIn fourth" value="Log In"> -->
              <a type="submit" href="{{ url('/home') }} class="fadeIn fourth" >Log In</a>
              
		    </form>

		    <!-- Remind Passowrd -->
		    <div id="formFooter">
		      <a class="underlineHover" href="#">Forgot Password?</a>
		    </div>

		  </div>
	</div>
@endsection