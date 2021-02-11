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

<header class="main-header header-style-three">
	
	<!-- Header Top -->
	<div class="header-top">
		<div class="auto-container">
			<div class="inner-container clearfix">
				<!--Top Left-->
				
				<!--Top Right-->
			</div>
			
		</div>
	</div>
	<!-- Header Top End -->
	
	<!-- Main Box -->
	<div class="main-box">
		
		<div class="auto-container">
			<div class="outer-container clearfix">
				<!--Logo Box-->
				<div class="logo-box">
					<div class="logo"><a href="<?php echo e(route('frontend_home')); ?>"><img src="<?php echo e(asset('frontend/images/Decor-Logo-2.png')); ?>" alt=""></a></div>
				</div>
				
				<!--Nav Outer-->
				<div class="nav-outer clearfix">
					
					<!-- Main Menu -->
					<nav class="main-menu navbar navbar-expand-lg mb-0 pb-0">
						<div class="navbar-header">
							<!-- Toggle Button -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="navbar-collapse collapse clearfix">
							<ul class="navigation clearfix navbar-nav">
								<li class="nav-item">
									<a href="<?php echo e(route('frontend_about')); ?>">About Us</a>
								</li>

								<li class="dropdown">
									<a href="#">Services</a>
									<ul>
										<?php $__currentLoopData = $serviceList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                        <li><a href="<?php echo e(route('service_detail', $service['sub_category_id'])); ?>"><?php echo e($service['title']); ?></a></li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
								</li>
								
								<li class="nav-item">
									<a href="<?php echo e(route('frontend_projects')); ?>" >Projects</a>
								</li>
								<!--  <li class="nav-item">
										<a href="#">Clients</a>
								</li> -->
								<li class="nav-item">
									<a href="<?php echo e(route('blogs')); ?>">Upcoming Projects</a>
								</li>
							</ul>
						</div>
						
						
					</nav>
					<!-- Main Menu End-->
					
				</div>
				<!--Nav Outer End-->
				
			</div>
		</div>
	</div>
	
	<!--Sticky Header-->
	<div class="sticky-header">
		<div class="auto-container">
			<div class="sticky-inner-container clearfix">
				<!--Logo-->
				<div class="logo pull-left">
					<a href="<?php echo e(route('frontend_home')); ?>" class="img-responsive"><img src="<?php echo e(asset('frontend/images/logo-small.png')); ?>" alt="" title=""></a>
				</div>
				
				<!--Right Col-->
				<div class=" pull-right">
					<!-- Main Menu -->
					<nav class="main-menu navbar navbar-expand-lg mb-0 pb-0">
						<div class="navbar-header">
							<!-- Toggle Button -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="navbar-collapse collapse clearfix">
							<ul class="navigation clearfix navbar-nav">
								<li class="nav-item">
									<a href="<?php echo e(route('frontend_about')); ?>">About Us</a>
								</li>
								<li class="dropdown">
									<a href="#">Services</a>
									<ul>
										<?php $__currentLoopData = $serviceList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                        <li><a href="<?php echo e(route('service_detail', $service['sub_category_id'])); ?>"><?php echo e($service['title']); ?></a></li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
								</li>
								
								<li class="nav-item active">
									<a href="<?php echo e(route('frontend_projects')); ?>">Projects</a>
								</li>
								<!-- <li class="nav-item">
										<a href="#">Clients</a>
								</li> -->
								<li class="nav-item">
									<a href="<?php echo e(route('blogs')); ?>">Upcoming Projects</a>
								</li>
							</ul>
						</div>
						
						<div id="vertical">
							<div class="wrapper">
								<a href="tel:<?php echo e($footer['input4']); ?>" class="contact-phn"><span class="fa fa-2x fa-phone-square"></span></a>
								<!-- <div class="contact-btn"> -->
								<div class="contact-form">
									<span class="close-btn sidebar-modal-close-btn no-padding"><i class="flaticon-tick-1"></i></span>
									<ul class="stickybar">
										<li>Email Us: <a href="mailto:<?php echo e($footer['input3']); ?>"><?php echo e($footer['input3']); ?></a></li>
										<br>
										<li>Call Us: <a href="tel:<?php echo e($footer['input4']); ?>"><?php echo e($footer['input4']); ?></a></li>
										<br>
										<li>Address: <?php echo e($footer['input2']); ?></li>
									</ul>
								</div>
								
								<br>
								<a href="tel:<?php echo e($footer['input3']); ?>"><span class="fa fa-2x fa-envelope-square"></span></a>
								<br>
								<a href="<?php echo e($footer['input6']); ?>"><span class="fa fa-2x fa-instagram"></span></a>
								<br>
								<a href="<?php echo e($footer['input7']); ?>"><span class="fa fa-2x fa-linkedin-square"></span></a>
								<br>
								<a href="<?php echo e($footer['input8']); ?>"><span class="fa fa-2x fa-facebook-square"></span></a>
								
								<!-- <a href="#"><span class="fa fa-2x fa-skype"></span></a>
								<br> -->
								
							</div>
							<!-- </div> -->
							
						</div>
					</nav>
					<!-- Main Menu End-->
					
					<!--Outer Box-->
					
				</div>
				
			</div>
		</div>
	</div>
	<!--End Sticky Header-->
	
</header>