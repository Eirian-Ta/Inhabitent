	window.onscroll = function() {myFunction()};

	function myFunction() {
	    if (document.body.scrollTop > window.innerHeight || document.documentElement.scrollTop > window.innerHeight) {
	        document.getElementById("masthead").classList.remove("reverse-header");
	    } else {
	        document.getElementById("masthead").classList.add("reverse-header");
	    }
	}


