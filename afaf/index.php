<?php get_header(); ?>
<!-------------------------------------------finsh_header------------------------------------------------------->
<?php $query_egypt = new WP_Query( array( 'category_name' => 'egypt_news','posts_per_page' => 4 ) ); 

?>
<div class="container">
	<section class="main_posts text-center-sx">
		<div class="row">
			<div class="col-md-5">
				<a href="#"><img style="margin-bottom: 1px"  class="full-width" src="https://via.placeholder.com/450x250"></a>
				 <div class="info d-none d-lg-block">
	                <span>Local </span>
	                <p>It is a long looking at its layout The point<br> of using Lorem Ipsum</p>
                </div>
			</div>
			<div class="col-md-3 half_img p-0 ">
					<a href="#"><img style="margin-bottom: 1px" class="p-0 full-width" src="https://via.placeholder.com/250x125"></a>
					<div class="half_img_info d-none d-lg-block">
					        <span>Local </span>
					        <p>It is a long looking at its layout<br> The point of using Lorem Ipsum</p>
		           </div>
							<a href="#"><img class="p-0 full-width" src="https://via.placeholder.com/250x125"></a>
					<div class="half_img_information d-none d-lg-block">
					            <span>Local </span>
					            <p>It is a long looking at its layout <br>The point of using Lorem Ipsum</p>
				    </div>
		   </div>
			<div class="col-md-4 p-0 m-0">
				<div style="width:350px;height: 250px; background-color: gray" class="d-none d-lg-block"></div>

			</div>
	   </div> <!--row--> 
	</section>
	<hr>
	<br>
<!-------------------------------------------finsh_main_post------------------------------------------------------>
	<section class="egypt-news">
		<h2 class="text-center-sx">EGYPT NEWS</h2>
		<div class="row">
            <?php if($query_egypt ->have_posts()){
    while($query_egypt->have_posts()){
        $query_egypt->the_post();?>

			<div class="col-md-3">
                <a href="#" class="f-l"><?php the_post_thumbnail('medium', ['class'=> 'img-responsive img-thumbnail']);?></a>
				<p><?php the_excerpt() ?></p>
            </div>
                <?php
                    }
            }else {
    echo 'no posts in egypt news';
}
            
            ?>
		</div>
	</section>
	<br>
<!-------------------------------------------finsh_egypt_news------------------------------------------------------>
	<section class="main_features">
		
		<div class="row">
			<div class="col-md-8">
				<hr>
				<h2 class="mt-1 text-center-sx"> FEATURES</h2>
				<div class="fearures text-center-sx">
                    <a href="#"><img class="text-center-sx" src="https://via.placeholder.com/350x250"></a>
                    <a href="#"><img class="text-center-sx" src="https://via.placeholder.com/350x250"></a>
				</div>
			</div>
			<div class="col-md-4">
				<hr>
				<h2 class="mt-1"> Top 5 Stores</h2>
				<div class="top_5">

					<ul class="list-unstyled">
						<li><span>1</span>rebid country slids pla pla </li>
						<li><span>2</span>rebid country slids pla pla </li>
						<li><span>3</span>rebid country slids pla pla </li>
						<li><span>4</span>rebid country slids pla pla </li>
						<li><span>5</span>rebid country slids pla pla </li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-------------------------------------------finsh_main_features--------------------------------------------------->


</div>
    
  
<?php get_footer();?>

