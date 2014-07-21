var o= jQuery.noConflict() 
	o(document).ready(function(){
	
		   o('#myTab a').click(function (e) {
		  e.preventDefault()
		  o(this).tab('show')
		})
		
	


	})