(function() {
	var app = angular.module('creepl', []);
	
	var url = '/get_user_reviews_ajax.php';
		
	app.controller('ProfileController', function() {
		
		// get from facebook login
		this.viewer = '000X11';
		
		this.profile;
		
		this.friends;
		
		// initialize to viewer
		this.init = function() {
			
			console.log("test");
			
			var promise = $.get(url, {
    			UFID: this.viewer
 			})
 			.done(function() {
 				console.log("success");
 			})
 			.fail(function() {
 				console.log("fail");
 			})
 			.always(function() {
 				console.log("always");
 			});
 			//.success(handleSuccess).error(handleFailure);
 			
		};
		
		
		
		this.canReview = function() {
			
			// ensure the profile is not of the viewer
			if (this.viewer === this.person.prim_user.FBID) {
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
	
	app.controller('ReviewController', function() {
		
		this.review = {};
		
		this.addReview = function(product) {
			products.review.push(this.review);
			this.review = {};
		};
	});
	
	function handleSuccess(response, status) {
		console.log("success");
		return( response.data );
	};
	
	function handleFailure(response, status) {
		console.log("failure");
		if (
                        ! angular.isObject( response.data ) ||
                        ! response.data.message
                        ) {
 
                        return( $q.reject( "An unknown error occurred." ) );
 
                    }
 
                    // Otherwise, use expected error message.
                    return( $q.reject( response.data.message ) );
	};
	
})();
