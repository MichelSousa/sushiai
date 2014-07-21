 var b= jQuery.noConflict() 
		 
		   b(document).ready(function(){
		     
			b(".leia").click(function(){
			  
			  var post_id = b(this).attr("id");
			  
			  b(".wpblog").css({display:"block"})
			  b("#postCarousel,.setas").css({display:"none"})
			   
			      b.ajax({
				  
				  data:{post_id:post_id},
				  url:"<?php echo get_bloginfo('template_url')?>/blog-post.php",
				  type:"post",
				 
				  
				  success:function(data){
				  
				      b(".wpblog").html(data);
					  
		
				  }, 
				  
				  error:function(){
				    alert("erro")
				  }
				  
				  })
			  })
		   
		     
		   
		   })