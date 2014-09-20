(function() {
	var app = angular.module('creepl', []);
	
	app.controller('ProfileController', function() {
		this.viewer = 'George Burdell';
		this.person = profile;
		
		this.canReview = function() {
			for(var i=0; i<this.person.friends.length; i++) {
				if (this.person.friends[i] === this.viewer) {
					return true;
				}
				return false;
			}
		};
	});
	
	var profile = {
		nameFirst: 'George',
		nameLast: 'Burdell',
		email: 'gburdell3@gatech.edu',
		friends: ['Jason Libbey'],
		reviews: [
			{
				reviewer: 'some string ID',
				rating: '1 to 5 stars',
				body: 'omg becky look at her butt',
				upvotes: 'integer',
				downvotes: 'integer',
				funny: 'not really sure yet'
			},
		],
	};
	
	app.controller("ReviewController", function() {
		
		this.review = {};
		
		this.addReview = function(product) {
			products.review.push(this.review);
			this.review = {};
		};
	});
	
})();
