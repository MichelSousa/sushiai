
<?php 

     $id = $_POST['post_id'];
 

	 include "model/model.php";
	 
	 $model =new Model();
	 $model->ConectaDB();
	 
	 $sql=" SELECT * FROM 
	          wp_posts 
            WHERE  
             post_title <> 'Rascunho automático' AND post_title <>'img-exemple' ";
            
       $url =  'http://'.$_SERVER['SERVER_NAME'];
       
    


      $sql2 = "SELECT 
                 p.ID, 
                 p.post_name,
                 p.post_title,
                 p.post_content
              FROM wp_posts AS p,
                   wp_term_relationships AS r
       
              WHERE p.ID = r.object_ID  
             
              
              AND r.term_taxonomy_id = '2' 
              
              ORDER BY p.post_date DESC
              ";

	 $result2 =$model->SelecionarDados($sql2);

	 


	?>
  <div class="container">
  	  <a  class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span style="position:absolute;right:50px !important;" class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
  <div class="col-lg-12"> 


	<!-- Carousel
    ================================================== -->
    <div class="single" >

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
     
      <div class="carousel-inner" role="listbox" style="
      background:#D4D2D3;   background: none repeat scroll 0 0 rgba(212, 210, 211, 0.6);
      text-align:center,-webkit-border-radius:15px;
	-moz-border-radius:15px;
	border-radius:15px;float: left;">
        <div class="item active">
          
          <div class="container">
       

             <h1>teste</h1>
              <img class="img-responsive"  style="width:400px !important;height:200px !important" alt="img-exemple" src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/img-exemple.png">
 				      <p>d odio dui. Cras justo odio, dapibus acd odio dui. Cras justo odio, 
	              	dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
	             	d odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula 
	         	 </p>
              
	        
             <span> 
                <img title="voltar" style="position:relative;top:0;" class="img-responsive voltar"  alt="img-exemple" src="<?php echo $url?>/sushiai/wp-content/themes/sushiai/img/voltar.png"></span>
          
          </div>
        </div>
<?php	
	foreach($result2 as $rows)
	
	{?>
        <div class="item">
          
          <div class="container">

           <h1><?php echo $rows['post_title']?></h1>
               <img class="attachment-blog wp-post-image"  style="text-align:center;width:479px !important;height:215px !important" alt="img-exemple" src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/img-exemple.png">
	         

              
	           <p><?php echo $rows['post_content']?></p>
	           <span> 
	            	<img title="voltar" style="position:relative;top:0;" class="img-responsive voltar"  alt="img-exemple" src="<?php echo $url?>/sushiai/wp-content/themes/sushiai/img/voltar.png"></span>
            
          </div>
        </div>
     	<?php } ?>   
      </div>
     
    </div><!-- /.carousel -->
 </div><!-- /.single -->
		


<script>
 var v= jQuery.noConflict() 
		 
		   v(document).ready(function(){
 b("#postCarousel,.setas").css({display:"none"})


    v(".voltar").click(function(){

			     b("#postCarousel,.setas").css({display:"block"})
				  b(".wpblog").css({display:"none"})
			  })
		 })	  
</script>


</div>
</div>



