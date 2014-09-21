(function() {
	var app = angular.module('creepl', []);
	
	var url = '/get_user_reviews_ajax.php';
		
	app.controller('ProfileController', function() {
		
		// get from facebook login
		this.viewer = '000X11';
		
		this.profile = dummyProfile;
		
		this.friends = [
			{
				fbid: '000X11'
			}
		];
		
		this.review;
		
		// initialize to viewer
		function loadProfile() {
			
			var profile = loadUser(this.viewer);
 			
 			for (var i=0; i<profile.reviews.length; i++) {
 				profile.reviews[i] = loadUser(profile.reviews[i].afbid);
 			}
 			
		};
		
		function loadUser(fbid) {
			
			var promise = $.get(url, {
				ufbid: fbid
			});
			
			var profile = promise.success(function(data) {
				return data;
			});
			
			promise.fail(function(data) {
				console.log("fail");
			});
			
			return profile;
		}
		
		this.canReview = function() {
			
			// ensure the profile is not of the viewer
			if (this.viewer === this.profile.prim_user.fbid) {
				return false;
			}
			
			// ensure the profile is friends with the viewer
			for(var i=0; i<this.friends.length; i++) {
				
				if (this.friends[i].fbid === this.viewer) {
					
					// ensure the viewer has not already written a review for this profile
					for (var j=0; j<this.profile.reviews.length; j++) {
						
						if (this.profile.reviews[j].afbid === this.viewer) {
							this.review = this.profile.reviews[j];
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
	
	app.controller('ReviewController', function() {
		
		this.addReview = function(profile, review) {
			
			var promise = $.post('post_review', {
				ufbid: profile.prim_user.fbid,
				afbid: review.afbid,
				review: review.review,
				rating: review.rating
			});
			
			promise.success(function(data) {
				window.location.reload();
			});
			
			promise.fail(function(data) {
				console.log("fail");
			});
		};
	});
	
	var dummyProfile = {
		prim_user: {
			fbid: '902810754',
			fname: 'Jason',
			lname: 'Libbey',
			email: 'jelgt2011@gmail.com'
		},
		reviews: [
			{
				afbid: '902810754',
				review: 'AYE BB WANT SUM FUK',
				upvotes: 2,
				downvotes: 4,
				rating: 5
			}
		]
	};
	
})();
