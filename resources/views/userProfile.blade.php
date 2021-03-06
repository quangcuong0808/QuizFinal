<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="{{asset('Se2015/Se2015-firebase-master/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('Se2015/Se2015-firebase-master/css/animate.min.css')}}" />
		<link rel="stylesheet" href="{{asset('Se2015/Se2015-firebase-master/css/profile.css')}}" />

		<script src="{{asset('Se2015/Se2015-firebase-master/js/system/jquery.min.js')}}"> </script>
		<script src="{{asset('Se2015/Se2015-firebase-master/js/system/bootstrap.min.js')}}"> </script>
		<script src="{{asset('Se2015/Se2015-firebase-master/js/system/angular.min.js')}}"> </script>
		<script src="{{asset('Se2015/Se2015-firebase-master/js/system/angular-animate.min.js')}}"> </script>
		<script src="{{asset('Se2015/Se2015-firebase-master/js/system/firebase.js')}}"> </script>
		<script src="{{asset('Se2015/Se2015-firebase-master/js/system/wow.min.js')}}"> </script>
		<script src="{{asset('Se2015/Se2015-firebase-master/js/system/angularfire.min.js')}}"> </script>

		<script src="{{asset('Se2015/Se2015-firebase-master/js/userProfile.js.php')}}"> </script>
    </head>
	
    <body ng-app="Quiz" ng-controller="UserProfile" class="container-fluid">
	
		<div id="userTab" class="container-fluid wow fadeInDown">
			@{{name}}
		</div>
		
		<div class="container-fluid wow fadeInDown">
			<p class="input-user"> Your name: </p>
			<input class="form-control" type="text" ng-model="name">
			<p class="input-user"> New password: </p>
			<input class="form-control" type="password" ng-model="newPassword">
			<p class="input-user"> Retype new password: </p>
			<input class="form-control" type="password" ng-model="newPasswordCompare">
			<p class="input-user" ng-show="newPassword"> Enter your current password: </p>
			<input class="form-control" type="password" ng-model="currentPassword" ng-show="newPassword">
			<p class="input-user"> Total score: @{{ score }} </p>
			<p class="input-user"> Test taken: @{{score/10}} </p>
			<a href="http://localhost:69/QuizFinal/public/" class="pull-left btn btn-user"> Return </a>
			<button class="pull-right btn btn-user" ng-click="submit()" ng-show="loaded"> Submit changes </button>
			<button class="center-block btn btn-user" ng-click="clear()"> Clear </button>
		</div>

    </body>
</html>
