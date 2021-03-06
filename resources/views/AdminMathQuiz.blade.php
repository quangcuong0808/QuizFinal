<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="{{asset('Se2015/Se2015-firebase-master/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('Se2015/Se2015-firebase-master/css/animate.min.css')}}" />
		<link rel="stylesheet" href="{{asset('Se2015/Se2015-firebase-master/css/main.css')}}" />
		<link rel="stylesheet" href="{{asset('Se2015/Se2015-firebase-master/css/quiz.css')}}" />

		<script src="{{asset('Se2015/Se2015-firebase-master/js/system/jquery.min.js')}}"> </script>
		<script src="{{asset('Se2015/Se2015-firebase-master/js/system/bootstrap.min.js')}}"> </script>
		<script src="{{asset('Se2015/Se2015-firebase-master/js/system/angular.min.js')}}"> </script>
		<script src="{{asset('Se2015/Se2015-firebase-master/js/system/angular-animate.min.js')}}"> </script>

		<script src="{{asset('Se2015/Se2015-firebase-master/js/system/wow.min.js')}}"> </script>


		<script src="{{asset('Se2015/Se2015-firebase-master/js/main.js')}}"> </script>
		<script src="{{asset('Se2015/Se2015-firebase-master/js/math/quiz.js')}}"> </script>
    </head>
    <body ng-app="Quiz" class="container-fluid">
	
		<div id="LoginTab" ng-controller="LoginForm" class="container-fluid wow fadeInDown">
			<div class="row" ng-hide="loged">
				<div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
					<input type="email" class="form-control input-lg input-login" ng-model="username" placeholder="Email">
				</div>
				<div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
					<input type="password" class="form-control input-lg input-login" ng-model="password" placeholder="Password">
				</div>
				<button type="button" class="btn btn-lg btn-login col-lg-1 col-md-2 col-sm-6 col-xs-12" ng-click="LogIn()">Log in</button>
				<button type="submit" class="btn btn-lg btn-login col-lg-1 col-md-2 col-sm-6 col-xs-12" ng-click="Register()">Register</button>
			</div>
			<div class="row" ng-show="loged">
				<div class="col-lg-10 col-md-8 col-sm-6 col-xs-6">
					<p class="input-login"> Hi @{{ user.name }} </p>
				</div>
				<a href="userProfile.blade.php" class="btn btn-lg btn-login col-lg-1 col-md-2 col-sm-3 col-xs-3">Profile</a>
				<button type="button" class="btn btn-lg btn-login col-lg-1 col-md-2 col-sm-3 col-xs-3" ng-click="LogOut()">Log Out</button>
			</div>
		</div>
		
		<div ng-controller="QuestLibrary" class="container-fluid wow fadeInLeft" id="questionBoard">
			<div class="row" ng-show="editDB">
				<a href="{{asset('AdminEditQuiz')}}" class="btn btn-answer btn-lg col-lg-6 col-md-6 col-sm-12 col-xs-12">Edit question bank</a>
				<div class="btn btn-answer btn-lg col-lg-6 col-md-6 col-sm-12 col-xs-12" ng-click="takeTest()">Take test</div>
			</div>
			
			<div ng-show="publish && !editDB && loaded">
				<p class="question-style"> Question here </p>
				<div class="row">
					<div class="btn btn-answer col-lg-3 col-sm-6 col-xs-12" ng-repeat="ans in currentQuestion.answer" ng-click="select($index)" ng-class="{sel: $index == selected}"> 
						@{{ ans }}
					</div>
				</div>
				<div class="btn btn-answer marginTop pull-left" ng-click="ReturnQuiz()"> Return </div>
				<div class="btn btn-answer marginTop pull-right" ng-click="submitQuestion()"> Submit </div>
			</div>
			
			<div ng-show="!publish && !editDB && loaded">
				<p class="question-style"> Your score</p>
				<div ng-repeat="question in list">
					<p class="question-style"> </p>
					<p class="btn-answer col-lg-3 col-xs-6 col-xs-12" ng-repeat="ans in question.answer" 
						ng-class="{sel: $index == getSel($parent.$index),right: $index == getRight($parent.$index),good:$index == getRight($parent.$index) && $index == getSel($parent.$index) }">
					</p>
				</div>
				<div class="btn btn-login btn-lg col-lg-2 col-lg-offset-10 col-md-3 col-md-offset-9 col-sm-6 col-sm-offset-6 col-xs-12" ng-click="ReturnQuiz()"> Return </div>
			</div>
		</div>

    </body>
</html>
