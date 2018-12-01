angular.module('root', ['services'])
	.controller('index', ['$scope', 'message', function($scope, message){
		$scope.pesan = message;
	}])
	.controller('persegiluas', ['$scope', 'persegi', function($scope, persegi){
		$scope.luas = persegi;
	}])
	.controller('kali', ['$scope', 'perkalian', function($scope, perkalian){
		$scope.result = perkalian.pengali(11);
	}])
	// .config(['pesanProvider', function(pesanProvider){
	// 	pesanProvider.setText('Hai world');
	// }])
	.controller('psn', ['$scope', 'pesan', function($scope, pesan){
		$scope.msg = pesan.text;
	}])
	.config(['pesanProvider', 'msgText', function(pesanProvider, msgText){
		pesanProvider.setText(msgText);
	}])
	.controller('psnConstant', ['$scope', 'pesan', function($scope, pesan){
		$scope.msg = pesan.text;
	}]);