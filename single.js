var v= jQuery.noConflict() 
					 
					   v(document).ready(function(){
						
						 v(".single .item:first-child").attr("class","item active")
						 v(".leia").click(function(){
						 
						    v("#postCarousel,.setas").css({display:"none"});
							v(".wpblog").css({display:"block"})
							
							v(".attachment-blog-single").css({width:"479px",height:"215px"})
							
						   
						 })
					   
					})	 