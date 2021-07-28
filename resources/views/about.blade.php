@extends('layouts.app')
@section('title', 'Our awesome home page title')
@section('maincontent')
		<!-- BANNER -->
		<div class="blog_banner">
			<div class="container">
				<div class="blog_banner_info">
					<div class="blog_banner_info_title pad_b20">
						<h2>About Us</h2>
					</div>
					<div class="blog_title_btm">
						<ul class="blog_title_btm_ul dis_flx">
							<li>
								<a href="/">
									Home<i class="fa fa-angle-right"></i>
								</a>
							</li>
							<li>
								<a href="/contact">
									Contact
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- BANNER -->

		<!-- BODY -->
		<div class="about_us_page">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-11 col-lg-10">
						<div class="about_us_sec">
							<h2 class="about_us_sec_h2">ABOUT US</h2>
							<h4 class="about_us_sec_h4">What we do with the information we gather</h4>
							<p class="about_us_sec_text">This usually works very well for most image classification tasks because we have huge image datasets like ImageNet that cover a good portion of possible image space—and usually, weights learned from it are transferable to custom image classification tasks. Moreover, the pretrained networks are readily available off the shelf, thus facilitating the process.</p>
							<p class="about_us_sec_text">However, this approach will not work well if the distribution of images in your task is drastically different from the images that the base network was trained on. For example, if you are dealing with grayscale images generated by a medical imaging device, transfer learning from ImageNet weights will not be that effective and you will need more than a couple of thousand labeled images for training your network to satisfactory performance.</p>
							<p class="about_us_sec_text">Unsupervised pre-training. AlexNet was trained for rotation classification using extensive data augmentation for 63 epochs. We used the hyperparameters documented by Rotnet in their paper.</p>
							<div class="about_list">
								<h4 class="about_us_sec_h4">What list you have</h4>
								<ul class="about_us_sec_ul">
									<li>Dataset. It is composed of 128K labeled examples, half of which are for training and the other half for validation. Furthermore, we are provided 512K unlabeled images. The data contains 1,000 classes in total.</li>
									<li>Unsupervised pre-training. AlexNet was trained for rotation classification using extensive data augmentation for 63 epochs. We used the hyperparameters documented by Rotnet in their paper.</li>
									<li>Classifier training. Features were extracted from the fourth convolution layer, and three fully connected layers were appended to it. These layers were randomly initialized and trained with a scheduled decreasing learning rate, and early stopping was implemented to stop training.</li>
								</ul>
							</div>
							<p class="about_us_sec_text">However, this approach will not work well if the distribution of images in your task is drastically different from the images that the base network was trained on. For example, if you are dealing with grayscale images generated by a medical imaging device, transfer learning from ImageNet weights will not be that effective and you will need more than a couple of thousand labeled images for training your network to satisfactory performance.</p>
							<p class="about_us_sec_text">This usually works very well for most image classification tasks because we have huge image datasets like ImageNet that cover a good portion of possible image space—and usually, weights learned from it are transferable to custom image classification tasks. Moreover, the pretrained networks are readily available off the shelf, thus facilitating the process.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- BODY -->

@endsection
