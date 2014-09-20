(function() {
	var app = angular.module('creepl', []);
	
	app.controller('ProfileController', function() {
		this.person = profile;
		this.reviews = reviews;
	});
	
	var profile = {
		nameFirst: 'George',
		nameLast: 'Burdell',
		email: 'gburdell3@gatech.edu',
		friends: ['everyone'],
	};
	
	var reviews = [
		
	];
})();
