(function($){
  $(function(){

      $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );
	 $('.dropdown-button').dropdown({
	  inDuration: 300,
	  outDuration: 225,
	  constrain_width: false, // Does not change width of dropdown to that of the activator
	  hover: false, // Activate on hover
	  gutter: 0, // Spacing from edge
	  belowOrigin: false, // Displays dropdown below the button
	  alignment: 'left' // Displays dropdown with edge aligned to the left of button
	}

  );
	  $(document).ready(function(){
      $('.slider').slider({full_width: true});
      $('.slider').slider('pause');
      
      

  
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space

