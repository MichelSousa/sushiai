<?php 

 $id = $_POST['post_id'];
 

	 include "model/model.php";
	 
	 $model =new Model();
	 $model->ConectaDB();
	 $sql="SELECT * FROM wp_posts WHERE  ID = $id  AND post_title <> 'Rascunho automático' ";
	 $result = $model->SelecionarDados( $sql);
	 
	?>
  <div class="container">
  <div class="col-lg-12"> 
<?php	
	foreach($result as $rows)
	
	{?>
	    <h2><?php echo $rows['post_title']?></h2>
	    <p><?php echo $rows['post_content']?></p>
		
	<?php }
	
	  
	
	
?>	 

<script>
 var v= jQuery.noConflict() 
		 
		   v(document).ready(function(){

    v(".voltar").click(function(){
			     b("#postCarousel,.setas").css({display:"block"})
				  b(".wpblog").css({display:"none"})
			  })
		 })	  
</script>

<div class="leia voltar">Voltar para todos os posts</div>

</div>
</div>