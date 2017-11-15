var Login = function () {

        //main function to initiate the module
        init: function () {
            // init background slide images
		    $.backstretch([
		        $themeUrl+"/assets/pages/media/bg/1.jpg",
		        $themeUrl+"/assets/pages/media/bg/2.jpg",
		        $themeUrl+"/assets/pages/media/bg/3.jpg",
		        $themeUrl+"/assets/pages/media/bg/4.jpg"
		        ], {
		          fade: 1000,
		          duration: 8000
		    	}
        	);
        }

}();

jQuery(document).ready(function() {
    Login.init(); 
});
