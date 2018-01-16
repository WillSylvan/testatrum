$(document).ready(function(){
	if ($('body').width() <= 900) {
		
	var button = document.getElementById('profile-menu');
	var actions = {
		1: function() {
			$( "#main-id" ).slideToggle( "slow", function() {
			});
			
			$( "#profils-added" ).slideToggle( "slow", function() {
			});
		},
		2: function() {
			$( "#main-id" ).slideToggle( "slow", function() {
			});
			
			$( "#profils-added" ).slideToggle( "slow", function() {
			});
		}
	};
	var counter = 0;
	button.onclick = function() {
		actions[counter = (counter % 2) + 1]();
	}
	}
});