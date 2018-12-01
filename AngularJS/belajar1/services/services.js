angular.module('services',[])
	.value('message', 'Halo Duniaaaaa')
	.value('bilangan', 7)
	.factory('persegi', ['bilangan', function(bilangan){
		return bilangan*bilangan;
	}])
	.service('perkalian', ['bilangan', Perkalian])
	.provider('pesan', [function(){
		var text = null;
		this.setText = function (textString){
			text = textString;
		};
		this.$get = [function(){
			return new showPesan(text);
		}];
	}])
	.constant('msgText', 'Hello constant, constant bisa di inject di config. Tapi value tidak bisa.');