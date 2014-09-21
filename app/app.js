(function() {
	var app = angular.module('creepl', []);
	
	var url = '/get_user_reviews_ajax.php';
		
	app.controller('ProfileController', function($scope) {
		
		$scope.controller = this;
		
		// get from facebook login
		this.viewer = '000X11';
		
		this.profile;
		
		this.friends = [
			{
				fbid: '000X11'
			}
		];
		
		this.review;
		
		// initialize to viewer
		function loadProfile() {
			
			var temp = "<?php echo 'hello'; ?>";
			
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
		};
		
		
		
		
		this.switchProfile = function(LOGGEDINUSER) {
			
			console.log(LOGGEDINUSER.fbid);
			this.profile.prim_user.fbid = LOGGEDINUSER.fbid;
		};
		
		this.canReview = function() {
			
			if (this.profile) {
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
			}
			
			return false;
		};
		
		return this;
	});
	
	app.controller('ReviewController', function() {
		
		this.addVote = function(profile, viewer, review, vote) {
			var promise = $.post('post_review_vote', {
				afbid: review.afbid,
				ufbid: profile.prim_user.fbid,
				vfbid: viewer.fbid,
				vote: vote,
				check: false
			});
		};
		
		this.isVoteable = function(profile, viewer, review) {
			var promise = $.post('post_review_vote', {
				afbid: review.afbid,
				ufbid: profile.prim_user.fbid,
				vfbid: viewer.fbid,
				check: true
			});
		};
		
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
	
})();
