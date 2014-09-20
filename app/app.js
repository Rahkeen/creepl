(function() {
	var app = angular.module('creepl', []);
	
	app.controller('ProfileController', function() {
		this.viewer = '902859678';
		this.person = profile;
		
		this.canReview = function() {
			
			// ensure the profile is not of the viewer
			if (this.viewer === this.person.FacebookID) {
				return false;
			}
			
			// ensure the profile is friends with the viewer
			for(var i=0; i<this.person.friends.length; i++) {
				
				if (this.person.friends[i] === this.viewer) {
					
					// ensure the viewer has not already written a review for this profile
					for (var j=0; j<this.person.reviews.length; j++) {
						
						if (this.person.reviews[j].reviewer === this.viewer) {
							return false;
						}
					}
					
					// the viewer is friends and has not written a review for this profile
					return true;
				}
			}
			return false;
		};
	});
	
	var profile = {
		FacebookID: '000000000',
		nameFirst: 'Jason',
		nameLast: 'Libbey',
		email: 'jlibbey3@gatech.edu',
		friends: ['902810754', '902825262', '902859678'],
		reviews: [
			{
				reviewer: '902825262',
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
