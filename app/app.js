(function() {
	var app = angular.module('creepl', []);
	
	var url = '/get_user_reviews_ajax.php';
		
	app.controller('ProfileController', function() {
		
		// get from facebook login
		this.viewer = '000X11';
		
		this.profile = dummyData;
		
		this.friends = ['nobody'];
		
		// initialize to viewer
		this.loadProfile = function(FBID) {
			
			var profile;
			
			var promise = $.get(url, {
    			UFID: FBID
 			});
 			
 			profile = promise.success(function(data) {
 				return data;
 			});
 			
 			promise.fail(function(data) {
 				console.log("fail");
 			});
 			
 			console.log(profile);
 			return profile;
		};
		
		this.canReview = function() {
			
			// ensure the profile is not of the viewer
			if (this.viewer === this.profile.prim_user.FBID) {
				return false;
			}
			
			// ensure the profile is friends with the viewer
			for(var i=0; i<this.friends.length; i++) {
				
				if (this.friends[i].FBID === this.viewer) {
					
					// ensure the viewer has not already written a review for this profile
					for (var j=0; j<this.profile.reviews.length; j++) {
						
						if (this.profile.reviews[j].AFBID === this.viewer) {
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
		
		this.review = {};
		
		this.addReview = function(profile) {
			profile.reviews.push(this.review);
			this.review = {};
		};
	});
	
	var dummyData = {
		prim_user: {
			FBID: '902810754',
			CRID: '902810754',
			FNAME: 'Jason',
			LNAME: 'Libbey',
			EMAIL: 'jelgt2011@gmail.com'
		},
		reviews: [
			{
				AFBID: '902810754',
				REVIEW: 'AYE BB WANT SUM FUK',
				UPVOTES: 2,
				DOWNVOTES: 4,
				RATING: 5
			}
		]
	};
	
})();
