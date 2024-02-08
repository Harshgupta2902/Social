<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from social.webestica.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 11:03:10 GMT -->
<head>
    <?php $this->load->view('home/static/head') ?>
</head>
<body>

<?php $this->load->view('home/static/header') ?>


<!-- **************** MAIN CONTENT START **************** -->
<main>
	
	<!-- Container START -->
	<div class="container">
		<div class="row g-4">

			
		<?php $this->load->view('home/components/side_nav') ?>

			<!-- Main content START -->
			<div class="col-md-8 col-lg-6 vstack gap-4">


			<?php $this->load->view('home/components/stories') ?>
			<?php $this->load->view('home/components/share_feed') ?>

				

				<!-- Card feed item START -->
				<div class="card">
					<!-- Card header START -->
					<div class="card-header border-0 pb-0">
						<div class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-story me-2">
									<a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt=""> </a>
								</div>
								<!-- Info -->
								<div>
									<div class="nav nav-divider">
										<h6 class="nav-item card-title mb-0"> <a href="#!"> Lori Ferguson </a></h6>
										<span class="nav-item small"> 2hr</span>
									</div>
									<p class="mb-0 small">Web Developer at Webestica</p>
								</div>
							</div>
							<!-- Card feed action dropdown START -->
							<div class="dropdown">
								<a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- Card feed action dropdown menu -->
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction">
									<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
								</ul>
							</div>
							<!-- Card feed action dropdown END -->
						</div>
					</div>
					<!-- Card header END -->
					<!-- Card body START -->
					<div class="card-body">
						<p>I'm thrilled to share that I've completed a graduate certificate course in project management with the president's honor roll.</p>
						<!-- Card img -->
						<img class="card-img" src="assets/images/post/3by2/01.jpg" alt="Post">
						<!-- Feed react START -->
						<ul class="nav nav-stack py-3 small">
							<li class="nav-item">
								<a class="nav-link active" href="#!" data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-custom-class="tooltip-text-start" data-bs-title="Frances Guerrero<br> Lori Stevens<br> Billy Vasquez<br> Judy Nguyen<br> Larry Lawson<br> Amanda Reed<br> Louis Crawford"> <i class="bi bi-hand-thumbs-up-fill pe-1"></i>Liked (56)</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
							</li>
							<!-- Card share action START -->
							<li class="nav-item dropdown ms-sm-auto">
								<a class="nav-link mb-0" href="#" id="cardShareAction" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
								</a>
								<!-- Card share action dropdown menu -->
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction">
									<li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
								</ul>
							</li>
							<!-- Card share action END -->
						</ul>
						<!-- Feed react END -->

						<!-- Add comment -->
						<div class="d-flex mb-3">
							<!-- Avatar -->
							<div class="avatar avatar-xs me-2">
								<a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt=""> </a>
							</div>
							<!-- Comment box  -->
							<form class="nav nav-item w-100 position-relative">
								<textarea data-autoresize class="form-control pe-5 bg-light" rows="1" placeholder="Add a comment..."></textarea>
								<button class="nav-link bg-transparent px-3 position-absolute top-50 end-0 translate-middle-y border-0" type="submit">
									<i class="bi bi-send-fill"> </i>
								</button>
							</form>
						</div>
						<!-- Comment wrap START -->
						<ul class="comment-wrap list-unstyled">
							<!-- Comment item START -->
							<li class="comment-item">
								<div class="d-flex position-relative">
									<!-- Avatar -->
									<div class="avatar avatar-xs">
										<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt=""></a>
									</div>
									<div class="ms-2">
										<!-- Comment by -->
										<div class="bg-light rounded-start-top-0 p-3 rounded">
											<div class="d-flex justify-content-between">
												<h6 class="mb-1"> <a href="#!"> Frances Guerrero </a></h6>
												<small class="ms-2">5hr</small>
											</div>
											<p class="small mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
										</div>
										<!-- Comment react -->
										<ul class="nav nav-divider py-2 small">
											<li class="nav-item">
												<a class="nav-link" href="#!"> Like (3)</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#!"> Reply</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#!"> View 5 replies</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- Comment item nested START -->
								<ul class="comment-item-nested list-unstyled">
									<!-- Comment item START -->
									<li class="comment-item">
										<div class="d-flex">
											<!-- Avatar -->
											<div class="avatar avatar-xs">
												<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt=""></a>
											</div>
											<!-- Comment by -->
											<div class="ms-2">
												<div class="bg-light p-3 rounded">
													<div class="d-flex justify-content-between">
														<h6 class="mb-1"> <a href="#!"> Lori Stevens </a> </h6>
														<small class="ms-2">2hr</small>
													</div>
													<p class="small mb-0">See resolved goodness felicity shy civility domestic had but Drawings offended yet answered Jennings perceive.</p>
												</div>
												<!-- Comment react -->
												<ul class="nav nav-divider py-2 small">
													<li class="nav-item">
														<a class="nav-link" href="#!"> Like (5)</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#!"> Reply</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<!-- Comment item END -->
									<!-- Comment item START -->
									<li class="comment-item">
										<div class="d-flex">
											<!-- Avatar -->
											<div class="avatar avatar-story avatar-xs">
												<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt=""></a>
											</div>
											<!-- Comment by -->
											<div class="ms-2">
												<div class="bg-light p-3 rounded">
													<div class="d-flex justify-content-between">
														<h6 class="mb-1"> <a href="#!"> Billy Vasquez </a> </h6>
														<small class="ms-2">15min</small>
													</div>
													<p class="small mb-0">Wishing calling is warrant settled was lucky.</p>
												</div>
												<!-- Comment react -->
												<ul class="nav nav-divider py-2 small">
													<li class="nav-item">
														<a class="nav-link" href="#!"> Like</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#!"> Reply</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<!-- Comment item END -->
								</ul>
								<!-- Load more replies -->
								<a href="#!" role="button" class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center mb-3 ms-5" data-bs-toggle="button" aria-pressed="true">
									<div class="spinner-dots me-2">
										<span class="spinner-dot"></span>
										<span class="spinner-dot"></span>
										<span class="spinner-dot"></span>
									</div>
									Load more replies 
								</a>
								<!-- Comment item nested END -->
							</li>
							<!-- Comment item END -->
							<!-- Comment item START -->
							<li class="comment-item">
								<div class="d-flex">
									<!-- Avatar -->
									<div class="avatar avatar-xs">
									<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt=""></a>
									</div>
									<!-- Comment by -->
									<div class="ms-2">
										<div class="bg-light p-3 rounded">
											<div class="d-flex justify-content-between">
												<h6 class="mb-1"> <a href="#!"> Frances Guerrero </a> </h6>
												<small class="ms-2">4min</small>
											</div>
											<p class="small mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
										</div>
										<!-- Comment react -->
										<ul class="nav nav-divider pt-2 small">
											<li class="nav-item">
												<a class="nav-link" href="#!"> Like (1)</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#!"> Reply</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#!"> View 6 replies</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<!-- Comment item END -->
						</ul>
						<!-- Comment wrap END -->
					</div>
					<!-- Card body END -->
					<!-- Card footer START -->
					<div class="card-footer border-0 pt-0">
						<!-- Load more comments -->
						<a href="#!" role="button" class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center" data-bs-toggle="button" aria-pressed="true">
							<div class="spinner-dots me-2">
								<span class="spinner-dot"></span>
								<span class="spinner-dot"></span>
								<span class="spinner-dot"></span>
							</div>
							Load more comments 
						</a>
					</div>
					<!-- Card footer END -->
				</div>
				<!-- Card feed item END -->

				<!-- Card feed item START -->
				<div class="card">
					<!-- Card header START -->
					<div class="card-header">
						<div class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar me-2">
									<a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/logo/12.svg" alt=""> </a>
								</div>
								<!-- Info -->
								<div>
									<h6 class="card-title mb-0"><a href="#!"> Bootstrap: Front-end framework </a></h6>
									<a href="#!" class="mb-0 text-body">Sponsored <i class="bi bi-info-circle ps-1" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="You're seeing this ad because your activity meets the intended audience of our site."></i> </a>
								</div>
							</div>
							<!-- Card share action START -->
							<div class="dropdown">
								<a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardShareAction2" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- Card share action dropdown menu -->
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction2">
									<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
								</ul>
							</div>
							<!-- Card share action START -->
						</div>
					</div>
					<!-- Card header START -->
					
					<!-- Card body START -->
					<div class="card-body">
						<p class="mb-0">Quickly design and customize responsive mobile-first sites with Bootstrap.</p>
					</div>
					<img src="assets/images/post/3by2/02.jpg" alt="">
					<!-- Card body END -->
					<!-- Card footer START -->
					<div class="card-footer border-0 d-flex justify-content-between align-items-center">
						<p class="mb-0">Currently v5.1.3 </p>
						<a class="btn btn-primary-soft btn-sm" href="#"> Download now </a>
					</div>
					<!-- Card footer END -->

				</div>
				<!-- Card feed item END -->

				<!-- Card feed item START -->
				<div class="card">
					<!-- Card header START -->
					<div class="card-header border-0 pb-0">
						<div class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar me-2">
									<a href="#"> <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt=""> </a>
								</div>
								<!-- Info -->
								<div>
									<h6 class="card-title mb-0"> <a href="#"> Judy Nguyen </a></h6>
										<div class="nav nav-divider">
											<p class="nav-item mb-0 small">Web Developer at Webestica</p>
											<span class="nav-item small" data-bs-toggle="tooltip" data-bs-placement="top" title="Public"> <i class="bi bi-globe"></i> </span>
										</div>
								</div>
							</div>
							<!-- Card share action START -->
							<div class="dropdown">
								<a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardShareAction3" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- Card share action dropdown menu -->
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction3">
									<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
								</ul>
							</div>
							<!-- Card share action END -->
						</div>
					</div>
					<!-- Card header START -->
					<!-- Card body START -->
					<div class="card-body">
						<p>I'm so privileged to be involved in the <a href="#!">@bootstrap </a>hiring process! Interviewing with their team was fun and I hope this can be a valuable resource for folks! <a href="#!"> #inclusivebusiness</a> <a href="#!"> #internship</a> <a href="#!"> #hiring</a> <a href="#"> #apply </a></p>
						<!-- Card feed grid START -->
						<div class="d-flex justify-content-between">
							<div class="row g-3">
								<div class="col-6">
									<!-- Grid img -->
									<a class="h-100" href="assets/images/post/1by1/03.jpg" data-glightbox data-gallery="image-popup">
										<img class="rounded img-fluid" src="assets/images/post/1by1/03.jpg" alt="Image">
									</a>
								</div>
								<div class="col-6">
									<!-- Grid img -->
									<a href="assets/images/post/3by2/01.jpg" data-glightbox data-gallery="image-popup">
										<img class="rounded img-fluid" src="assets/images/post/3by2/01.jpg" alt="Image">
									</a>
									<!-- Grid img -->
									<div class="position-relative bg-dark mt-3 rounded">
										<div class="hover-actions-item position-absolute top-50 start-50 translate-middle z-index-9">
											<a class="btn btn-link text-white" href="#"> View all </a>
										</div>
										<a href="assets/images/post/3by2/02.jpg" data-glightbox data-gallery="image-popup">
											<img class="img-fluid opacity-50 rounded" src="assets/images/post/3by2/02.jpg" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Card feed grid END -->
						
						<!-- Feed react START -->
						<ul class="nav nav-stack py-3 small">
							<li class="nav-item">
								<a class="nav-link active text-secondary" href="#!"> <i class="bi bi-heart-fill me-1 icon-xs bg-danger text-white rounded-circle"></i> Louis, Billy and 126 others </a>
							</li>
							<li class="nav-item ms-sm-auto">
								<a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
							</li>
						</ul>
						<!-- Feed react END -->

						<!-- Feed react START -->
						<ul class="nav nav-pills nav-pills-light nav-fill nav-stack small border-top border-bottom py-1 mb-3">
							<li class="nav-item">
								<a class="nav-link mb-0 active" href="#!"> <i class="bi bi-heart pe-1"></i>Liked (56)</a>
							</li>
							<!-- Card share action menu START -->
							<li class="nav-item dropdown">
								<a href="#" class="nav-link mb-0" id="cardShareAction4" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
								</a>
									<!-- Card share action dropdown menu -->
									<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction4">
									<li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
								</ul>
							</li>
							<!-- Card share action menu END -->
							<li class="nav-item">
								<a class="nav-link mb-0" href="#!"> <i class="bi bi-send-fill pe-1"></i>Send</a>
							</li>
						</ul>
						<!-- Feed react START -->
					
						<!-- Comment wrap START -->
						<ul class="comment-wrap list-unstyled">
							<!-- Comment item START -->
							<li class="comment-item">
								<div class="d-flex">
									<!-- Avatar -->
									<div class="avatar avatar-xs">
										<a href="#"> <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt=""> </a>
									</div>
									<div class="ms-2">
										<!-- Comment by -->
										<div class="bg-light rounded-start-top-0 p-3 rounded">
											<div class="d-flex justify-content-between">
												<h6 class="mb-1"> <a href="#!"> Frances Guerrero </a></h6>
												<small class="ms-2">5hr</small>
											</div>
											<p class="small mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
										</div>
										<!-- Comment rect -->
										<ul class="nav nav-divider py-2 small">
											<li class="nav-item">
												<a class="nav-link" href="#!"> Like (3)</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#!"> Reply</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#!"> View 5 replies</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- Comment item nested START -->
								<ul class="comment-item-nested list-unstyled">
									<!-- Comment item START -->
									<li class="comment-item">
										<div class="d-flex">
											<!-- Avatar -->
											<div class="avatar avatar-xs">
												<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt=""></a>
											</div>
											<!-- Comment by -->
											<div class="ms-2">
												<div class="bg-light p-3 rounded">
													<div class="d-flex justify-content-between">
														<h6 class="mb-1"> <a href="#!"> Lori Stevens </a> </h6>
														<small class="ms-2">2hr</small>
													</div>
													<p class="small mb-0">See resolved goodness felicity shy civility domestic had but Drawings offended yet answered Jennings perceive.</p>
												</div>
												<!-- Comment rect -->
												<ul class="nav nav-divider py-2 small">
													<li class="nav-item">
														<a class="nav-link" href="#!"> Like (5)</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#!"> Reply</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<!-- Comment item END -->
									<!-- Comment item START -->
									<li class="comment-item">
										<div class="d-flex">
											<!-- Avatar -->
											<div class="avatar avatar-xs">
												<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt=""></a>
											</div>
											<!-- Comment by -->
											<div class="ms-2">
												<div class="bg-light p-3 rounded">
													<div class="d-flex justify-content-between">
														<h6 class="mb-1"> <a href="#!"> Billy Vasquez </a> </h6>
														<small class="ms-2">15min</small>
													</div>
													<p class="small mb-0">Wishing calling is warrant settled was lucky.</p>
												</div>
												<!-- Comment rect -->
												<ul class="nav nav-divider py-2 small">
													<li class="nav-item">
														<a class="nav-link" href="#!"> Like</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#!"> Reply</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
								<!-- Load more replies -->
								<a href="#!" role="button" class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center mb-3 ms-5" data-bs-toggle="button" aria-pressed="true">
									<div class="spinner-dots me-2">
										<span class="spinner-dot"></span>
										<span class="spinner-dot"></span>
										<span class="spinner-dot"></span>
									</div>
									Load more replies 
								</a>
							</li>
							<!-- Comment item END -->
							<!-- Comment item START -->
							<li class="comment-item">
								<div class="d-flex">
									<!-- Avatar -->
									<div class="avatar avatar-xs">
									<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt=""></a>
									</div>
									<!-- Comment by -->
									<div class="ms-2">
										<div class="bg-light p-3 rounded">
											<div class="d-flex justify-content-center">
												<h6 class="mb-1"> <a href="#!"> Frances Guerrero </a> </h6>
												<small class="ms-2">4min</small>
											</div>
											<p class="small mb-0">Congratulations:)</p>
											<div class="card p-2 border border-2 rounded mt-2 shadow-none">
												<img src="assets/images/elements/12.svg" alt="">
											</div>
										</div>
										<!-- Comment rect -->
										<ul class="nav nav-divider pt-2 small">
											<li class="nav-item">
												<a class="nav-link" href="#!"> Like (1)</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#!"> Reply</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#!"> View 6 replies</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<!-- Comment item END -->
						</ul>
						<!-- Comment wrap END -->
					</div>
					<!-- Card body END -->
					<!-- Card footer START -->
					<div class="card-footer border-0 pt-0">
						<!-- Load more comments -->
						<a href="#!" role="button" class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center" data-bs-toggle="button" aria-pressed="true">
							<div class="spinner-dots me-2">
								<span class="spinner-dot"></span>
								<span class="spinner-dot"></span>
								<span class="spinner-dot"></span>
							</div>
							Load more comments 
						</a>
					</div>
					<!-- Card footer END -->
				</div>
				<!-- Card feed item END -->

				<!-- Card feed item START -->
				<div class="card">
					<!-- Card header START -->
					<div class="card-header border-0 pb-0">
						<div class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar me-2">
									<a href="#"> <img class="avatar-img rounded-circle" src="assets/images/logo/13.svg" alt=""> </a>
								</div>
								<!-- Title -->
								<div>
									<h6 class="card-title mb-0"> <a href="#!"> Apple Education </a></h6>
									<p class="mb-0 small">9 November at 23:29</p>
								</div>
							</div>
							<!-- Card share action menu -->
							<a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardShareAction5" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots"></i>
							</a>
							<!-- Card share action dropdown menu -->
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction5">
								<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
								<li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
								<li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
								<li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
							</ul>
						</div>
							<!-- Card share action END -->
					</div>
					<!-- Card header START -->

					<!-- Card body START -->
					<div class="card-body pb-0">
						<p>Find out how you can save time in the classroom this year. Earn recognition while you learn new skills on iPad and Mac. Start  recognition your first Apple Teacher badge today!</p>
						<!-- Feed react START -->
						<ul class="nav nav-stack pb-2 small">
							<li class="nav-item">
								<a class="nav-link active text-secondary" href="#!"> <i class="bi bi-heart-fill me-1 icon-xs bg-danger text-white rounded-circle"></i> Louis, Billy and 126 others </a>
							</li>
							<li class="nav-item ms-sm-auto">
								<a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
							</li>
						</ul>
						<!-- Feed react END -->
					</div>
					<!-- Card body END -->
					<!-- Card Footer START -->
					<div class="card-footer py-3">
						<!-- Feed react START -->
						<ul class="nav nav-fill nav-stack small">
							<li class="nav-item">
								<a class="nav-link mb-0 active" href="#!"> <i class="bi bi-heart pe-1"></i>Liked (56)</a>
							</li>
							<!-- Card share action dropdown START -->
							<li class="nav-item dropdown">
								<a href="#" class="nav-link mb-0" id="cardShareAction6" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
								</a>
								<!-- Card share action dropdown menu -->
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction6">
									<li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
								</ul>
							</li>
							<!-- Card share action dropdown END -->
							<li class="nav-item">
								<a class="nav-link mb-0" href="#!"> <i class="bi bi-send-fill pe-1"></i>Send</a>
							</li>
						</ul>
						<!-- Feed react END -->
					</div>
					<!-- Card Footer END -->
				</div>
				<!-- Card feed item END -->

				<!-- Card feed item START -->
				<div class="card">
					<!-- Card header START -->
					<div class="card-header d-flex justify-content-between align-items-center border-0 pb-0">
						<h6 class="card-title mb-0">People you may know</h6>
						<button class="btn btn-sm btn-primary-soft"> See all </button>
					</div>      
					<!-- Card header START -->

					<!-- Card body START -->
					<div class="card-body">
						<div class="tiny-slider arrow-hover">
							<div class="tiny-slider-inner ms-n4" data-arrow="true" data-dots="false" data-items-xl="3" data-items-lg="2" data-items-md="2" data-items-sm="2" data-items-xs="1" data-gutter="12" data-edge="30">
								<!-- Slider items -->
								<div> 
									<!-- Card add friend item START -->
									<div class="card shadow-none text-center">
										<!-- Card body -->
										<div class="card-body p-2 pb-0">
											<div class="avatar avatar-xl">
												<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt=""></a>
											</div>
											<h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed </a></h6>
											<p class="mb-0 small lh-sm">50 mutual connections</p>
										</div>
										<!-- Card footer -->
										<div class="card-footer p-2 border-0">
											<button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
										</div>
									</div>
									<!-- Card add friend item END -->
								</div>
								<div>
									<!-- Card add friend item START -->
									<div class="card shadow-none text-center">
										<!-- Card body -->
										<div class="card-body p-2 pb-0">
											<div class="avatar avatar-story avatar-xl">
												<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt=""></a>
											</div>
											<h6 class="card-title mb-1 mt-3"> <a href="#!"> Larry Lawson </a></h6>
											<p class="mb-0 small lh-sm">33 mutual connections</p>
										</div>
										<!-- Card footer -->
										<div class="card-footer p-2 border-0">
											<button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
										</div>
									</div>
									<!-- Card add friend item END -->
								</div>
								<div>
									<!-- Card add friend item START -->
									<div class="card shadow-none text-center">
										<!-- Card body -->
										<div class="card-body p-2 pb-0">
											<div class="avatar avatar-xl">
												<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt=""></a>
											</div>
											<h6 class="card-title mb-1 mt-3"> <a href="#!"> Louis Crawford </a></h6>
											<p class="mb-0 small lh-sm">45 mutual connections</p>
										</div>
										<!-- Card footer -->
										<div class="card-footer p-2 border-0">
											<button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
										</div>
									</div>
									<!-- Card add friend item END -->
								</div>
								<div>
									<!-- Card add friend item START -->
									<div class="card shadow-none text-center">
										<!-- Card body -->
										<div class="card-body p-2 pb-0">
											<div class="avatar avatar-xl">
												<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt=""></a>
											</div>
											<h6 class="card-title mb-1 mt-3"> <a href="#!"> Dennis Barrett </a></h6>
											<p class="mb-0 small lh-sm">21 mutual connections</p>
										</div>
										<!-- Card footer -->
										<div class="card-footer p-2 border-0">
											<button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
										</div>
									</div>
									<!-- Card add friend item END -->
								</div>
							</div>
						</div>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Card feed item END -->

				<!-- Card feed item START -->
				<div class="card">
					<!-- Card header START -->
					<div class="card-header border-0 pb-0">
						<div class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar me-2">
									<a href="#"> <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt=""> </a>
								</div>
								<!-- Title -->
								<div>
									<h6 class="card-title mb-0"> <a href="#!"> All in the Mind </a></h6>
									<p class="mb-0 small">9 November at 23:29</p>
								</div>
							</div>
							<!-- Card share action menu -->
							<a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardShareAction7" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots"></i>
							</a>
							<!-- Card share action dropdown menu -->
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction7">
								<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
								<li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
								<li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
								<li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
							</ul>
						</div>
							<!-- Card share action END -->
					</div>
					<!-- Card header START -->

					<!-- Card body START -->
					<div class="card-body pb-0">
						<p>How do you protect your business against cyber-crime?</p>
						 <div class="vstack gap-2">
							 <!-- Feed poll item -->
							<div>
								<input type="radio" class="btn-check" name="poll" id="option">
								<label class="btn btn-outline-primary w-100" for="option">We have cybersecurity insurance coverage</label>
							</div>
							<!-- Feed poll item -->
							<div>
								<input type="radio" class="btn-check" name="poll" id="option2">
								<label class="btn btn-outline-primary w-100" for="option2">Our dedicated staff will protect us</label>
							</div>
							<!-- Feed poll item -->
							<div>
								<input type="radio" class="btn-check" name="poll" id="option3">
								<label class="btn btn-outline-primary w-100" for="option3">We give regular training for best practices</label>
							</div>
							<!-- Feed poll item -->
							<div>
								<input type="radio" class="btn-check" name="poll" id="option4">
								<label class="btn btn-outline-primary w-100" for="option4">Third-party vendor protection</label>
							</div>
					 </div> 

					 <!-- Feed poll votes START -->
						<ul class="nav nav-divider mt-2 mb-0">
							<li class="nav-item">
								<a class="nav-link" href="#">263 votes</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">2d left</a>
							</li>
						</ul>
						<!-- Feed poll votes ED -->

						<!-- Feed react START -->
						<ul class="nav nav-stack pb-2 small mt-4">
							<li class="nav-item">
								<a class="nav-link active text-secondary" href="#!"> <i class="bi bi-heart-fill me-1 icon-xs bg-danger text-white rounded-circle"></i> Louis, Billy and 126 others </a>
							</li>
							<li class="nav-item ms-sm-auto">
								<a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
							</li>
						</ul>
						<!-- Feed react END -->
					</div>
					<!-- Card body END -->
					<!-- Card Footer START -->
					<div class="card-footer py-3">
						<!-- Feed react START -->
						<ul class="nav nav-fill nav-stack small">
							<li class="nav-item">
								<a class="nav-link mb-0 active" href="#!"> <i class="bi bi-heart pe-1"></i>Liked (56)</a>
							</li>
							<!-- Card share action dropdown START -->
							<li class="nav-item dropdown">
								<a href="#" class="nav-link mb-0" id="feedActionShare6" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
								</a>
								<!-- Card share action dropdown menu -->
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="feedActionShare6">
									<li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
								</ul>
							</li>
							<!-- Card share action dropdown END -->
							<li class="nav-item">
								<a class="nav-link mb-0" href="#!"> <i class="bi bi-send-fill pe-1"></i>Send</a>
							</li>
						</ul>
						<!-- Feed react END -->
					</div>
					<!-- Card Footer END -->
				</div>
				<!-- Card feed item END -->

				<!-- Card feed item START -->
				<div class="card">
					<!-- Card header START -->
					<div class="card-header border-0 pb-0">
						<div class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar me-2">
									<a href="#"> <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt=""> </a>
								</div>
								<!-- Title -->
								<div>
									<h6 class="card-title mb-0"> <a href="#!"> All in the Mind </a></h6>
									<p class="mb-0 small">9 November at 23:29</p>
								</div>
							</div>
							<!-- Card share action menu -->
							<a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardShareAction10" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots"></i>
							</a>
							<!-- Card share action dropdown menu -->
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction10">
								<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
								<li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
								<li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
								<li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
							</ul>
						</div>
							<!-- Card share action END -->
					</div>
					<!-- Card header START -->

					<!-- Card body START -->
					<div class="card-body pb-0">
						<p>How do you protect your business against cyber-crime?</p>
						<div class="card card-body mt-4">
							<!-- Title -->
							<div class="d-sm-flex justify-content-sm-between align-items-center">
								<span class="small">16/20 responded</span>
								<span class="small">Results not visible to participants</span>
							</div>

							<!-- Results -->
							<div class="vstack gap-4 gap-sm-3 mt-3">
								<!-- Option 1 result START -->
								<div class="d-flex align-items-center justify-content-between">
									<!-- Progress bar -->
									<div class="overflow-hidden w-100 me-3">
										<div class="progress bg-primary bg-opacity-10 position-relative" style="height: 30px;">
											<div class="progress-bar bg-primary bg-opacity-25" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
											</div>
											<span class="position-absolute pt-1 ps-3 fs-6 fw-normal text-truncate w-100">We have cybersecurity insurance coverage </span>
										</div>
									</div>
									<div class="flex-shrink-0">25%</div>
								</div>
								<!-- Option 1 result END -->

								<!-- Option 2 result START -->
								<div class="d-flex align-items-center justify-content-between">
									<!-- Progress bar -->
									<div class="overflow-hidden w-100 me-3">
										<div class="progress bg-primary bg-opacity-10 position-relative" style="height: 30px;">
											<div class="progress-bar bg-primary bg-opacity-25" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
											</div>
											<span class="position-absolute pt-1 ps-3 fs-6 fw-normal text-truncate w-100">Our dedicated staff will protect us</span>
										</div>
									</div>
									<div class="flex-shrink-0">15%</div>
								</div>
								<!-- Option 2 result END -->

								<!-- Option 3 result START -->
								<div class="d-flex align-items-center justify-content-between">
									<!-- Progress bar -->
									<div class="overflow-hidden w-100 me-3">
										<div class="progress bg-primary bg-opacity-10 position-relative" style="height: 30px;">
											<div class="progress-bar bg-primary bg-opacity-25" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
											</div>
											<span class="position-absolute pt-1 ps-3 fs-6 fw-normal text-truncate w-100">We give regular training for best practices</span>
										</div>
									</div>
									<div class="flex-shrink-0">10%</div>
								</div>
								<!-- Option 3 result END -->

								<!-- Option 4 result START -->
								<div class="d-flex align-items-center justify-content-between">
									<!-- Progress bar -->
									<div class="overflow-hidden w-100 me-3">
										<div class="progress bg-primary bg-opacity-10 position-relative" style="height: 30px;">
											<div class="progress-bar bg-primary bg-opacity-25" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
											</div>
											<span class="position-absolute pt-1 ps-3 fs-6 fw-normal text-truncate w-100">Third-party vendor protection</span>
										</div>
									</div>
									<div class="flex-shrink-0">55%</div>
								</div>
								<!-- Option 4 result END -->
							</div>
						</div>

						<!-- Feed poll votes START -->
						<ul class="nav nav-divider mt-2 mb-0">
							<li class="nav-item">
								<a class="nav-link" href="#">263 votes</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">2d left</a>
							</li>
						</ul>
						<!-- Feed poll votes ED -->

						<!-- Feed react START -->
						<ul class="nav nav-stack pb-2 small mt-4">
							<li class="nav-item">
								<a class="nav-link active text-secondary" href="#!"> <i class="bi bi-heart-fill me-1 icon-xs bg-danger text-white rounded-circle"></i> Louis, Billy and 126 others </a>
							</li>
							<li class="nav-item ms-sm-auto">
								<a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
							</li>
						</ul>
						<!-- Feed react END -->
					</div>
					<!-- Card body END -->
					<!-- Card Footer START -->
					<div class="card-footer py-3">
						<!-- Feed react START -->
						<ul class="nav nav-fill nav-stack small">
							<li class="nav-item">
								<a class="nav-link mb-0 active" href="#!"> <i class="bi bi-heart pe-1"></i>Liked (56)</a>
							</li>
							<!-- Card share action dropdown START -->
							<li class="nav-item dropdown">
								<a href="#" class="nav-link mb-0" id="feedActionShare8" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
								</a>
								<!-- Card share action dropdown menu -->
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="feedActionShare8">
									<li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
								</ul>
							</li>
							<!-- Card share action dropdown END -->
							<li class="nav-item">
								<a class="nav-link mb-0" href="#!"> <i class="bi bi-send-fill pe-1"></i>Send</a>
							</li>
						</ul>
						<!-- Feed react END -->
					</div>
					<!-- Card Footer END -->
				</div>
				<!-- Card feed item END -->
				

				<!-- Card feed item START -->
				<div class="card">
					<!-- Card header START -->
					<div class="card-header">
						<div class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar me-2">
									<a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/logo/11.svg" alt=""> </a>
								</div>
								<!-- Info -->
								<div>
									<h6 class="card-title mb-0"> <a href="#!"> Webestica </a></h6>
									<p class="small mb-0">9 December at 10:00 </p>
								</div>
							</div>
							<!-- Card share action START -->
							<div class="dropdown">
								<a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardShareAction8" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- Card share action dropdown menu -->
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction8">
									<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
								</ul>
							</div>
							<!-- Card share action START -->
						</div>
					</div>
					<!-- Card header START -->
					
					<!-- Card body START -->
					<div class="card-body">
						<p class="mb-0">The next-generation blog, news, and magazine theme for you to start sharing your content today with beautiful aesthetics! This minimal & clean Bootstrap 5 based theme is ideal for all types of sites that aim to provide users with content. <a href="#!"> #bootstrap</a> <a href="#!"> #webestica </a> <a href="#!"> #getbootstrap</a> <a href="#"> #bootstrap5 </a></p>
					</div>
					<!-- Card body END -->
					<a href="#!"> <img src="assets/images/post/3by2/03.jpg" alt=""> </a>
					<!-- Card body START -->
					<div class="card-body position-relative bg-light">
						<a href="#!" class="small stretched-link">https://blogzine.webestica.com</a>
						<h6 class="mb-0 mt-1">Blogzine - Blog and Magazine Bootstrap 5 Theme</h6>
						<p class="mb-0 small">Bootstrap based News, Magazine and Blog Theme</p>
					</div>
					<!-- Card body END -->

					<!-- Card Footer START -->
					<div class="card-footer py-3">
						<!-- Feed react START -->
						<ul class="nav nav-fill nav-stack small">
							<li class="nav-item">
								<a class="nav-link mb-0 active" href="#!"> <i class="bi bi-heart pe-1"></i>Liked (56)</a>
							</li>
							<li class="nav-item">
								<a class="nav-link mb-0" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
							</li>
							<!-- Card share action dropdown START -->
							<li class="nav-item dropdown">
								<a href="#" class="nav-link mb-0" id="feedActionShare7" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
								</a>
								<!-- Card share action dropdown menu -->
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="feedActionShare7">
									<li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
								</ul>
							</li>
							<!-- Card share action dropdown END -->
							<li class="nav-item">
								<a class="nav-link mb-0" href="#!"> <i class="bi bi-send-fill pe-1"></i>Send</a>
							</li>
						</ul>
						<!-- Feed react END -->
					</div>
					<!-- Card Footer END -->

				</div>
				<!-- Card feed item END -->

				<!-- Story START -->
				<div>
					<h6 class="mb-3">Suggested stories </h6>
					<div class="tiny-slider arrow-hover overflow-hidden">
						<div class="tiny-slider-inner ms-n4" data-arrow="true" data-dots="true" data-loop="false" data-autoplay="false" data-items-xl="4" data-items-lg="3" data-items-md="3" data-items-sm="3" data-items-xs="2" data-gutter="12" data-edge="24">

							<!-- Slider items -->
							<div>
								<!-- Card START -->
								<div class="card card-overlay-bottom border-0 position-relative h-150px" style="background-image:url(assets/images/post/1by1/02.jpg); background-position: center left; background-size: cover;">
									<div class="card-img-overlay d-flex align-items-center p-2">
										<div class="w-100 mt-auto">
											<!-- Name -->
											<a href="#!" class="stretched-link text-white small">Judy Nguyen</a>
										</div>
									</div>
								</div>
								<!-- Card END -->
							</div>

							<!-- Slider items -->
							<div>
								<!-- Card START -->
								<div class="card card-overlay-bottom border-0 position-relative h-150px" style="background-image:url(assets/images/post/1by1/03.jpg); background-position: center left; background-size: cover;">
									<div class="card-img-overlay d-flex align-items-center p-2">
										<div class="w-100 mt-auto">
											<!-- Name -->
											<a href="#!" class="stretched-link text-white small">Samuel Bishop</a>
										</div>
									</div>
								</div>
								<!-- Card END -->
							</div>

							<!-- Slider items -->
							<div>
								<!-- Card START -->
								<div class="card card-overlay-bottom border-0 position-relative h-150px" style="background-image:url(assets/images/post/1by1/04.jpg); background-position: center left; background-size: cover;">
									<div class="card-img-overlay d-flex align-items-center p-2">
										<div class="w-100 mt-auto">
											<!-- Name -->
											<a href="#!" class="stretched-link text-white small">Carolyn Ortiz</a>
										</div>
									</div>
								</div>
								<!-- Card END -->
							</div>

							<!-- Slider items -->
							<div>
								<!-- Card START -->
								<div class="card card-overlay-bottom border-0 position-relative h-150px" style="background-image:url(assets/images/post/1by1/05.jpg); background-position: center left; background-size: cover;">
									<div class="card-img-overlay d-flex align-items-center p-2">
										<div class="w-100 mt-auto">
											<!-- Name -->
											<a href="#!" class="stretched-link text-white small">Amanda Reed</a>
										</div>
									</div>
								</div>
								<!-- Card END -->
							</div>

							<!-- Slider items -->
							<div>
								<!-- Card START -->
								<div class="card card-overlay-bottom border-0 position-relative h-150px" style="background-image:url(assets/images/post/1by1/01.jpg); background-position: center left; background-size: cover;">
									<div class="card-img-overlay d-flex align-items-center p-2">
										<div class="w-100 mt-auto">
											<!-- Name -->
											<a href="#!" class="stretched-link text-white small">Lori Stevens</a>
										</div>
									</div>
								</div>
								<!-- Card END -->
							</div>

							<!-- Slider items -->
							<div>
								<!-- Card START -->
								<div class="card card-overlay-bottom border-0 position-relative h-150px" style="background-image:url(assets/images/post/1by1/06.jpg); background-position: center left; background-size: cover;">
									<div class="card-img-overlay d-flex align-items-center p-2">
										<div class="w-100 mt-auto">
											<!-- Name -->
											<a href="#!" class="stretched-link text-white small">Joan Wallace</a>
										</div>
									</div>
								</div>
								<!-- Card END -->
							</div>
						</div>
					</div>
				</div>
				<!-- Story END -->

				<!-- Card feed item START -->
				<div class="card">
					<!-- Card header START -->
					<div class="card-header border-0 pb-0">
						<div class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-story me-2">
									<a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt=""> </a>
								</div>
								<!-- Info -->
								<div>
									<div class="nav nav-divider">
										<h6 class="nav-item card-title mb-0"> <a href="#!"> Joan Wallace </a></h6>
										<span class="nav-item small"> 1day</span>
									</div>
									<p class="mb-0 small">12 January at 12:00</p>
								</div>
							</div>
							<!-- Card feed action dropdown START -->
							<div class="dropdown">
								<a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction2" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- Card feed action dropdown menu -->
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction2">
									<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
								</ul>
							</div>
							<!-- Card feed action dropdown END -->
						</div>
					</div>
					<!-- Card header END -->
					<!-- Card body START -->
					<div class="card-body pb-0">
						<p>Comfort reached gay perhaps chamber his <a href="#!">#internship</a>  <a href="#!">#hiring</a> <a href="#!">#apply</a> </p>
					</div>
						<!-- Card img -->
						<div class="overflow-hidden fullscreen-video w-100">

							<!-- HTML video START -->
							<div class="player-wrapper overflow-hidden">
								<video class="player-html" controls crossorigin="anonymous" poster="assets/images/videos/poster.jpg">
									<source src="assets/images/videos/video-feed.mp4" type="video/mp4">
								</video>
							</div>
							<!-- HTML video END -->
					
							<!-- Plyr resources and browser polyfills are specified in the pen settings -->
						</div>
						<!-- Feed react START -->
						<div class="card-body pt-0">
							<ul class="nav nav-stack py-3 small">
								<li class="nav-item">
									<a class="nav-link active" href="#!"> <i class="bi bi-hand-thumbs-up-fill pe-1"></i>Liked (56)</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
								</li>
								<!-- Card share action START -->
								<li class="nav-item dropdown ms-sm-auto">
									<a class="nav-link mb-0" href="#" id="cardShareAction9" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
									</a>
									<!-- Card share action dropdown menu -->
									<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction9">
										<li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
										<li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
										<li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
										<li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
									</ul>
								</li>
								<!-- Card share action END -->
							</ul>
							<!-- Feed react END -->

							<!-- Add comment -->
							<div class="d-flex mb-3">
								<!-- Avatar -->
								<div class="avatar avatar-xs me-2">
									<a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt=""> </a>
								</div>

								<!-- Comment box  -->
								<form class="input-group">
									<textarea data-autoresize class="form-control me-2 bg-light rounded" rows="1" placeholder="Add a comment..."></textarea>
									<button class="btn btn-primary mb-0 rounded" type="submit">Post</button>
								</form>
							</div>
							<!-- Comment wrap START -->
							<ul class="comment-wrap list-unstyled mb-0">
								<!-- Comment item START -->
								<li class="comment-item">
									<div class="d-flex">
										<!-- Avatar -->
										<div class="avatar avatar-xs">
											<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt=""></a>
										</div>
										<div class="ms-2">
											<!-- Comment by -->
											<div class="bg-light rounded-start-top-0 p-3 rounded">
												<div class="d-flex justify-content-between">
													<h6 class="mb-1"> <a href="#!"> Frances Guerrero </a></h6>
													<small class="ms-2">5hr</small>
												</div>
												<p class="small mb-0">Preference any astonished unreserved Mrs.</p>
											</div>
											<!-- Comment react -->
											<ul class="nav nav-divider py-2 small">
												<li class="nav-item">
													<a class="nav-link" href="#!"> Like (3)</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#!"> Reply</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#!"> View 5 replies</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- Comment item nested START -->
									<ul class="comment-item-nested list-unstyled">
										<!-- Comment item START -->
										<li class="comment-item">
											<div class="d-flex">
												<!-- Avatar -->
												<div class="avatar avatar-xs">
													<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt=""></a>
												</div>
												<!-- Comment by -->
												<div class="ms-2">
													<div class="bg-light p-3 rounded">
														<div class="d-flex justify-content-between">
															<h6 class="mb-1"> <a href="#!"> Lori Stevens </a> </h6>
															<small class="ms-2">2hr</small>
														</div>
														<p class="small mb-0">Dependent on so extremely delivered by. Yet ﻿no jokes worse her why.</p>
													</div>
													<!-- Comment react -->
													<ul class="nav nav-divider py-2 small">
														<li class="nav-item">
															<a class="nav-link" href="#!"> Like (5)</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="#!"> Reply</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<!-- Comment item END -->
									</ul>
									<!-- Comment item nested END -->
								</li>
								<!-- Comment item END -->
							</ul>
							<!-- Comment wrap END -->
						</div>
						<!-- Card body END -->
						<!-- Card footer START -->
						<div class="card-footer border-0 pt-0">
							<!-- Load more comments -->
							<a href="#!" role="button" class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center" data-bs-toggle="button" aria-pressed="true">
								<div class="spinner-dots me-2">
									<span class="spinner-dot"></span>
									<span class="spinner-dot"></span>
									<span class="spinner-dot"></span>
								</div>
								Load more comments 
							</a>
						</div>
						<!-- Card footer END -->
				</div>
					<!-- Card feed item END -->

					<!-- Load more button START -->
					<a href="#!" role="button" class="btn btn-loader btn-primary-soft" data-bs-toggle="button" aria-pressed="true">
						<span class="load-text"> Load more </span>
						<div class="load-icon">
							<div class="spinner-grow spinner-grow-sm" role="status">
								<span class="visually-hidden">Loading...</span>
							</div>
						</div>
					</a>
					<!-- Load more button END -->

			</div>
			<!-- Main content END -->

			<?php $this->load->view('home/components/right_nav') ?>
		</div> <!-- Row END -->
	</div>
	<!-- Container END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php $this->load->view('home/components/chat') ?>


<!-- Modal create Feed START -->
<div class="modal fade" id="modalCreateFeed" tabindex="-1" aria-labelledby="modalLabelCreateFeed" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<!-- Modal feed header START -->
			<div class="modal-header">
				<h5 class="modal-title" id="modalLabelCreateFeed">Create post</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<!-- Modal feed header END -->

			<!-- Modal feed body START -->
			<div class="modal-body">
				 <!-- Add Feed -->
				 <div class="d-flex mb-3">
					<!-- Avatar -->
					<div class="avatar avatar-xs me-2">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="">
					</div>
					<!-- Feed box  -->
					<form class="w-100">
						<textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="4" placeholder="Share your thoughts..." autofocus></textarea>
					</form>
				</div>
				<!-- Feed rect START -->
				<div class="hstack gap-2">
					<a class="icon-md bg-success bg-opacity-10 text-success rounded-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Photo"> <i class="bi bi-image-fill"></i> </a>
					<a class="icon-md bg-info bg-opacity-10 text-info rounded-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Video"> <i class="bi bi-camera-reels-fill"></i> </a>
					<a class="icon-md bg-danger bg-opacity-10 text-danger rounded-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Events"> <i class="bi bi-calendar2-event-fill"></i> </a>
					<a class="icon-md bg-warning bg-opacity-10 text-warning rounded-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Feeling/Activity"> <i class="bi bi-emoji-smile-fill"></i> </a>
					<a class="icon-md bg-light text-secondary rounded-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Check in"> <i class="bi bi-geo-alt-fill"></i> </a>
					<a class="icon-md bg-primary bg-opacity-10 text-primary rounded-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Tag people on top"> <i class="bi bi-tag-fill"></i> </a>
				</div>
				<!-- Feed rect END -->
			</div>
			<!-- Modal feed body END -->

			<!-- Modal feed footer -->
			<div class="modal-footer row justify-content-between">
				<!-- Select -->
				<div class="col-lg-3">
					<select class="form-select js-choice choice-select-text-none" data-position="top" data-search-enabled="false">
						<option value="PB">Public</option>
						<option value="PV">Friends</option>
						<option value="PV">Only me</option>
						<option value="PV">Custom</option>
					</select>
				<!-- Button -->
				</div>
				<div class="col-lg-8 text-sm-end">
					<button type="button" class="btn btn-danger-soft me-2"> <i class="bi bi-camera-video-fill pe-1"></i> Live video</button>
					<button type="button" class="btn btn-success-soft">Post</button>
				</div>
			</div>
			<!-- Modal feed footer -->

		</div>
	</div>
</div>
<!-- Modal create feed END -->

<!-- Modal create Feed photo START -->
<div class="modal fade" id="feedActionPhoto" tabindex="-1" aria-labelledby="feedActionPhotoLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<!-- Modal feed header START -->
			<div class="modal-header">
				<h5 class="modal-title" id="feedActionPhotoLabel">Add post photo</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<!-- Modal feed header END -->

				<!-- Modal feed body START -->
				<div class="modal-body">
				<!-- Add Feed -->
				<div class="d-flex mb-3">
					<!-- Avatar -->
					<div class="avatar avatar-xs me-2">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="">
					</div>
					<!-- Feed box  -->
					<form class="w-100">
						<textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="2" placeholder="Share your thoughts..."></textarea>
					</form>
				</div>

				<!-- Dropzone photo START -->
				<div>
					<label class="form-label">Upload attachment</label>
					<div class="dropzone dropzone-default card shadow-none" data-dropzone='{"maxFiles":2}'>
						<div class="dz-message">
							<i class="bi bi-images display-3"></i>
							<p>Drag here or click to upload photo.</p>
						</div>
					</div>
				</div>
				<!-- Dropzone photo END -->

				</div>
				<!-- Modal feed body END -->

				<!-- Modal feed footer -->
				<div class="modal-footer ">
					<!-- Button -->
						<button type="button" class="btn btn-danger-soft me-2" data-bs-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-success-soft">Post</button>
				</div>
				<!-- Modal feed footer -->
		</div>
	</div>
</div>
<!-- Modal create Feed photo END -->

<!-- Modal create Feed video START -->
<div class="modal fade" id="feedActionVideo" tabindex="-1" aria-labelledby="feedActionVideoLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
		 <!-- Modal feed header START -->
		 <div class="modal-header">
			<h5 class="modal-title" id="feedActionVideoLabel">Add post video</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<!-- Modal feed header END -->

			<!-- Modal feed body START -->
			<div class="modal-body">
			 <!-- Add Feed -->
			 <div class="d-flex mb-3">
				<!-- Avatar -->
				<div class="avatar avatar-xs me-2">
					<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="">
				</div>
				<!-- Feed box  -->
				<form class="w-100">
					<textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="2" placeholder="Share your thoughts..."></textarea>
				</form>
			</div>

			<!-- Dropzone photo START -->
			<div>
				<label class="form-label">Upload attachment</label>
				<div class="dropzone dropzone-default card shadow-none" data-dropzone='{"maxFiles":2}'>
					<div class="dz-message">
						<i class="bi bi-camera-reels display-3"></i>
								<p>Drag here or click to upload video.</p>
					</div>
				</div>
			</div>
			<!-- Dropzone photo END -->

		</div>
			<!-- Modal feed body END -->

			<!-- Modal feed footer -->
			<div class="modal-footer">
				<!-- Button -->
				<button type="button" class="btn btn-danger-soft me-2"><i class="bi bi-camera-video-fill pe-1"></i> Live video</button>
				<button type="button" class="btn btn-success-soft">Post</button>
			</div>
			<!-- Modal feed footer -->
		</div>
	</div>
</div>
<!-- Modal create Feed video END -->

<!-- Modal create events START -->
<div class="modal fade" id="modalCreateEvents" tabindex="-1" aria-labelledby="modalLabelCreateAlbum" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<!-- Modal feed header START -->
			<div class="modal-header">
				<h5 class="modal-title" id="modalLabelCreateAlbum">Create event</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<!-- Modal feed header END -->
			<!-- Modal feed body START -->
			<div class="modal-body">
				<!-- Form START -->
				<form class="row g-4">
					<!-- Title -->
					<div class="col-12">
						<label class="form-label">Title</label>
						<input type="email" class="form-control" placeholder="Event name here">
					</div>
					<!-- Description -->
					<div class="col-12">
						<label class="form-label">Description</label>
						<textarea class="form-control" rows="2" placeholder="Ex: topics, schedule, etc."></textarea>
					</div>
					<!-- Date -->
					<div class="col-sm-4">
						<label class="form-label">Date</label>
						<input type="text" class="form-control flatpickr" placeholder="Select date">
					</div>
					<!-- Time -->
					<div class="col-sm-4">
						<label class="form-label">Time</label>
						<input type="text" class="form-control flatpickr" data-enableTime="true" data-noCalendar="true" placeholder="Select time">
					</div>
					<!-- Duration -->
					<div class="col-sm-4">
						<label class="form-label">Duration</label>
						<input type="email" class="form-control" placeholder="1hr 23m">
					</div>
					<!-- Location -->
					<div class="col-12">
						<label class="form-label">Location</label>
						<input type="email" class="form-control" placeholder="Logansport, IN 46947">
					</div>
					<!-- Add guests -->
					<div class="col-12">
						<label class="form-label">Add guests</label>
						<input type="email" class="form-control" placeholder="Guest email">
					</div>
					<!-- Avatar group START -->
					<div class="col-12 mt-3">
						<ul class="avatar-group list-unstyled align-items-center mb-0">
							<li class="avatar avatar-xs">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-xs">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-xs">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-xs">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-xs">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-xs">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-xs">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
							</li>
							<li class="ms-3">
								<small> +50 </small>
							</li>
						</ul>
					</div>
					<!-- Upload Photos or Videos -->
					<!-- Dropzone photo START -->
					<div>
						<label class="form-label">Upload attachment</label>
						<div class="dropzone dropzone-default card shadow-none" data-dropzone='{"maxFiles":2}'>
							<div class="dz-message">
								<i class="bi bi-file-earmark-text display-3"></i>
								<p>Drop presentation and document here or click to upload.</p>
							</div>
						</div>
					</div>
					<!-- Dropzone photo END -->
				</form>
				<!-- Form END -->
			</div>
			<!-- Modal feed body END -->
			<!-- Modal footer -->
			<!-- Button -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger-soft me-2" data-bs-dismiss="modal"> Cancel</button>
				<button type="button" class="btn btn-success-soft">Create now</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal create events END -->

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/dist/tiny-slider.js"></script>
<script src="assets/vendor/OverlayScrollbars-master/js/OverlayScrollbars.min.js"></script>
<script src="assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="assets/vendor/glightbox-master/dist/js/glightbox.min.js"></script>
<script src="assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
<script src="assets/vendor/plyr/plyr.js"></script>
<script src="assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
<script src="assets/vendor/zuck.js/dist/zuck.min.js"></script>
<script src="assets/js/zuck-stories.js"></script>

<!-- Theme Functions -->
<script src="assets/js/functions.js"></script>


</body>

<!-- Mirrored from social.webestica.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 11:04:55 GMT -->
</html>