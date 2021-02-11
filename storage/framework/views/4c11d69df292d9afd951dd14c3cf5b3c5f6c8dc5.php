<?php 

	//Services
    $serviceData   = App\Models\Modules::leftjoin('category','category.modules_id','modules.id')
                        ->leftjoin('sub_category','sub_category.category_id','category.id')
                        ->leftjoin('sub_category_values','sub_category_values.sub_category_id','sub_category.id')
                        ->leftjoin('input_fields','input_fields.id','sub_category_values.input_fields_id')
                        ->select('sub_category.id as sub_category_id', 'input_fields.slug_name as slug_name', 'sub_category_values.sub_category_value as sub_category_value')
                        ->where('modules.slug', 'services')
                        ->where('category.slug','content')
                        ->orderBy('sub_category_id', 'ASC')
                        ->get();

    $serviceList = [];
    foreach( $serviceData as $key => $value )
    {
        $serviceList[ $value->sub_category_id ][ 'sub_category_id' ]     =  $value->sub_category_id;
        $serviceList [ $value->sub_category_id ][ $value->slug_name ]    =  $value->sub_category_value;
    }

	$footerData   = App\Models\Modules::leftjoin('category','category.modules_id','modules.id')
                            ->leftjoin('sub_category','sub_category.category_id','category.id')
                            ->leftjoin('sub_category_values','sub_category_values.sub_category_id','sub_category.id')
                            ->leftjoin('input_fields','input_fields.id','sub_category_values.input_fields_id')
                            ->select('sub_category.id as sub_category_id', 'input_fields.slug_name as slug_name', 'sub_category_values.sub_category_value as sub_category_value')
                            ->where('category.slug','footer')
                            ->orderBy('sub_category_id', 'ASC')
                            ->get();

        $footer = [];
        foreach( $footerData as $key => $value )
        {
            $footer[ 'sub_category_id' ] = $value->sub_category_id;
            $footer[ $value->slug_name ] = $value->sub_category_value;
        }
 ?>

<footer class="main-footer" style="background-image:url(<?php echo e($footer['image1']); ?>)">
	<div id="particles-js"></div>
	<div class="auto-container">
		
		<!--Upper Box-->
		<div class="upper-box">
			<ul class="list-style-one clearfix">
				<li><span class="icon flaticon-pin "></span><?php echo e($footer['input2']); ?></li>
				<li><span class="icon flaticon-envelope-1"></span>Email us : <br> <?php echo e($footer['input3']); ?></li>
				<li><span class="icon flaticon-technology-2"></span>Call us : <br> <?php echo e($footer['input4']); ?></li>
			</ul>
		</div>
		
		<!--Widgets Section-->
		<div class="widgets-section">
			<div class="row clearfix">
				
				<!--big column-->
				<div class="big-column col-md-6 col-sm-12 col-xs-12">
					<div class="row clearfix">
						
						<!--Footer Column-->
						<div class="footer-column col-md-7 col-sm-6 col-xs-12">
							<div class="footer-widget logo-widget">
								<div class="logo">
									<a href="<?php echo e(route('frontend_home')); ?>" class="img-responsive"><img src="<?php echo e(asset('frontend/images/logo-small.png')); ?>" alt="" title=""></a>
								</div>
								<div class="text"><?php echo e($footer['input5']); ?></div>
								<ul class="social-icon-two">
									<li><a href="<?php echo e($footer['input6']); ?>"><span class="fa fa-instagram"></span></a></li>
									<li><a href="<?php echo e($footer['input7']); ?>"><span class="fa fa-linkedin-square"></span></a></li>
									<li><a href="<?php echo e($footer['input8']); ?>"><span class="fa fa-facebook-square"></span></a></li>
									<!--<li><a href="#"><span class="fa fa-skype"></span></a></li>-->
								</ul>
							</div>
						</div>
						
						<!--Footer Column-->
						<div class="footer-column col-md-5 col-sm-6 col-xs-12">
							<div class="footer-widget links-widget">
								<h2>Quick Links</h2>
								<div class="widget-content">
									<ul class="list">
										<li><a href="<?php echo e(route('frontend_about')); ?>">About Us</a></li>
										<li><a href="<?php echo e(route('frontend_services')); ?>">Services</a></li>
										<li><a href="<?php echo e(route('frontend_projects')); ?>">Projects</a></li>
										<li><a href="#contact">Contact Us</a></li>
										<li><a href="#">Get an Appointment</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!--big column-->
				<div class="big-column col-md-6 col-sm-12 col-xs-12">
					<div class="row clearfix">
						
						<!--Footer Column-->
						<div class="footer-column col-md-6 col-sm-6 col-xs-12">
							<div class="footer-widget links-widget">
								<h2>Our Services</h2>
								<div class="widget-content">
									<ul class="list">
										<?php $__currentLoopData = $serviceList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                        <li><a href="<?php echo e(route('service_detail', $service['sub_category_id'])); ?>"><?php echo e($service['title']); ?></a></li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
								</div>
							</div>
						</div>
						
						<!--Footer Column-->
						<div class="footer-column col-md-6 col-sm-6 col-xs-12">
							<div class="footer-widget newsletter-widget">
								<h2>Newsletter</h2>
								<div class="widget-content">
									<div class="text">Get our offers & News in your inbox</div>
									<!--Emailed Form-->
									<div class="emailed-form">
										<form method="post" action="<?php echo e(route('send-mail')); ?>">
											<?php echo e(csrf_field()); ?>

											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Email address" required>
												<button type="submit" class="theme-btn">Subscribe now</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--Footer Bottom-->
	<div class="footer-bottom">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="column col-md-6 col-sm-12 col-xs-12">
					<div class="copyright">Copyright &copy; Adventor  2020. All rights reserved. </div>
				</div>
				<!-- <div class="column col-md-6 col-sm-12 col-xs-12">
						<div class="created">Created by: ThemeArc</div>
				</div> -->
			</div>
		</div>
	</div>
</footer>