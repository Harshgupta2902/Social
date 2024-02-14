<header class="navbar-light fixed-top header-static bg-mode">

	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="<?php echo site_url('home') ?>">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto icon-md btn btn-light p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">

				<!-- Nav Search START -->
				<div class="nav mt-3 mt-lg-0 flex-nowrap align-items-center px-4 px-lg-0">
					<div class="nav-item w-100">
						<form class="rounded position-relative">
							<input class="form-control ps-5 bg-light" type="search" placeholder="Search..." aria-label="Search">
							<button class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y" type="submit"><i class="bi bi-search fs-5"> </i></button>
						</form>
					</div>
				</div>
				<!-- Nav Search END -->

				<ul class="navbar-nav navbar-nav-scroll ms-auto">
					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link active dropdown-toggle" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demo</a>
						<ul class="dropdown-menu" aria-labelledby="homeMenu">
							<li> <a class="dropdown-item active" href="index-2.html">Home default</a></li>
							<li> <a class="dropdown-item" href="index-classic.html">Home classic</a></li>
							<li> <a class="dropdown-item" href="index-post.html">Home post</a></li>
							<li> <a class="dropdown-item" href="index-video.html">Home video</a></li>
							<li> <a class="dropdown-item" href="index-event.html">Home event</a></li>
							<li> <a class="dropdown-item" href="landing.html">Landing page</a></li>
							<li> <a class="dropdown-item" href="app-download.html">App download</a></li>
							<li class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/" target="_blank">
									<i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Social!
								</a> 
							</li>
						</ul>
					</li>
					<!-- Nav item 2 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<li> <a class="dropdown-item" href="albums.html">Albums</a></li>
							<li> <a class="dropdown-item" href="celebration.html">Celebration</a></li>
							<li> <a class="dropdown-item" href="messaging.html">Messaging</a></li>
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend"> 
								<a class="dropdown-item dropdown-toggle" href="#!">Profile</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="my-profile.html">Feed</a> </li>
									<li> <a class="dropdown-item" href="my-profile-about.html">About</a> </li>
									<li> <a class="dropdown-item" href="my-profile-connections.html">Connections</a> </li>
									<li> <a class="dropdown-item" href="my-profile-media.html">Media</a> </li>
									<li> <a class="dropdown-item" href="my-profile-videos.html">Videos</a> </li>
									<li> <a class="dropdown-item" href="my-profile-events.html">Events</a> </li>
									<li> <a class="dropdown-item" href="my-profile-activity.html">Activity</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="events.html">Events</a></li>
							<li> <a class="dropdown-item" href="events-2.html">Events 2</a></li>
							<li> <a class="dropdown-item" href="event-details.html">Event details</a></li>
							<li> <a class="dropdown-item" href="event-details-2.html">Event details 2</a></li>
							<li> <a class="dropdown-item" href="groups.html">Groups</a></li>
							<li> <a class="dropdown-item" href="group-details.html">Group details</a></li>
							<li> <a class="dropdown-item" href="post-videos.html">Post videos</a></li>
							<li> <a class="dropdown-item" href="post-video-details.html">Post video details</a></li>
							<li> <a class="dropdown-item" href="post-details.html">Post details</a></li>
							<li> <a class="dropdown-item" href="video-details.html">Video details</a></li>
							<li> <a class="dropdown-item" href="blog.html">Blog</a></li>
							<li> <a class="dropdown-item" href="blog-details.html">Blog details</a></li>
							
							<!-- Dropdown submenu levels -->
							<li class="dropdown-divider"></li>
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
								<ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
									<!-- dropdown submenu open left -->
									<li class="dropdown-submenu dropstart">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
										<ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
								</ul>
							</li>
						</ul>
					</li>

					<!-- Nav item 3 Post -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account </a>
						<ul class="dropdown-menu" aria-labelledby="postMenu">
							<li> <a class="dropdown-item" href="create-page.html">Create a page</a></li>
							<li> <a class="dropdown-item" href="settings.html">Settings</a> </li>
							<li> <a class="dropdown-item" href="notifications.html">Notifications</a> </li>
							<li> <a class="dropdown-item" href="help.html">Help center</a> </li>
							<li> <a class="dropdown-item" href="help-details.html">Help details</a> </li>
							<!-- dropdown submenu open left -->
							<li class="dropdown-submenu dropstart">
								<a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
								<ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
									<li> <a class="dropdown-item" href="sign-in.html">Sign in</a> </li>
									<li> <a class="dropdown-item" href="sign-up.html">Sing up</a> </li>
									<li> <a class="dropdown-item" href="forgot-password.html">Forgot password</a> </li>
									<li class="dropdown-divider"></li>
									<li> <a class="dropdown-item" href="sign-in-advance.html">Sign in advance</a> </li>
									<li> <a class="dropdown-item" href="sign-up-advance.html">Sing up advance</a> </li>
									<li> <a class="dropdown-item" href="forgot-password-advance.html">Forgot password advance</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="error-404.html">Error 404</a> </li>
							<li> <a class="dropdown-item" href="offline.html">Offline</a> </li>
							<li> <a class="dropdown-item" href="privacy-and-terms.html">Privacy & terms</a> </li>
						</ul>
					</li>

					<!-- Nav item 4 Mega menu -->
					<li class="nav-item">
						<a class="nav-link" href="my-profile-connections.html">My network</a>
					</li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Nav right START -->
			<ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
				<li class="nav-item ms-2">
					<a class="nav-link bg-light icon-md btn btn-light p-0" href="messaging.html">
						<i class="bi bi-chat-left-text-fill fs-6"> </i>
					</a>
				</li>
				<li class="nav-item ms-2">
					<a class="nav-link bg-light icon-md btn btn-light p-0" href="settings.html">
						<i class="bi bi-gear-fill fs-6"> </i>
					</a>
				</li>
				<li class="nav-item dropdown ms-2">
					<a class="nav-link bg-light icon-md btn btn-light p-0" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
						<!-- <span class="badge-notif animation-blink"></span> -->
						<i class="bi bi-bell-fill fs-6"> </i>
					</a>
					<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0" aria-labelledby="notifDropdown">
						<div class="card">

						<?php if (empty($notifications)): ?>
							<div class="card-header d-flex justify-content-center align-items-center">
								<h6 class="m-0">No New Notifications</h6>
								<!-- <a class="small" href="#">Clear all</a> -->
							</div>
						<?php endif; ?>
						<?php if (count($notifications) > 1): ?>
							<div class="card-header d-flex justify-content-between align-items-center">
								<h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2"><?= count($notifications) ?> new</span></h6>
								<!-- <a class="small" href="#">Clear all</a> -->
							</div>
						<?php endif; ?>


							<div class="card-body p-0">
								<ul class="list-group list-group-flush list-unstyled p-2">
								<?php foreach ($notifications as $notification): ?>
									<?php if ($notification['type'] === 'Follow'): ?>
										<li>
										<?php if ($notification['status'] == 1): ?>
											<a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 mb-1 p-3">
												<div class="avatar text-center d-none d-sm-inline-block">
													<img class="avatar-img rounded-circle" src="<?= $notification['image'] ?>" alt="">
												</div>
												<div class="ms-sm-3">
													<div class="d-flex">
														<p class="small mb-2"><?= $notification['approved_message'] ?></p>
														<p class="small ms-3"><?= time_ago($notification['timestamp'])  ?></p>
													</div>
												</div>
											</a>
										<?php else: ?>
											<div class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3">
												<div class="avatar text-center d-none d-sm-inline-block">
													<img class="avatar-img rounded-circle" src="<?= $notification['image'] ?>" alt="">
												</div>
												<div class="ms-sm-3">
													<div class=" d-flex">
														<p class="small mb-2"><b><?= $notification['message'] ?></b></p>
														<p class="small ms-3 text-nowrap"><?= time_ago($notification['timestamp'])  ?></p>
													</div>
													<div class="d-flex">
													<button onclick="updateFollowStatus(<?php echo $notification['sender_id']; ?>, <?= $notification['id'] ?>)"  class="btn btn-sm py-1 btn-primary me-2">Accept</button>
														<button onclick="deleteRequest(<?php echo $notification['sender_id']; ?>, <?= $notification['id'] ?>)" class="btn btn-sm py-1 btn-danger-soft">Delete</button>
													</div>


													<script>
														function updateFollowStatus(followerId,notification_id) {
															
															$.ajax({
																type: 'GET',
																url: 'Home/update_follow_status/'+followerId + '/'+notification_id,
																success: function(response) {
																	// Handle success response
																	console.log('Follow status updated successfully.');
																	location.reload();
																},
																error: function(xhr, status, error) {
																	// Handle error response
																	console.error('Error updating follow status:', error);
																}
															});
														}

														function deleteRequest(followerId,notification_id) {
															
															$.ajax({
																type: 'GET',
																url: 'Home/deleteRequest/'+followerId + '/'+notification_id,
																success: function(response) {
																	// Handle success response
																	console.log('Follow status updated successfully.');
																	location.reload();
																},
																error: function(xhr, status, error) {
																	// Handle error response
																	console.error('Error updating follow status:', error);
																}
															});
														}
													</script>
												</div>
											</div>
										<?php endif; ?>

												
										</li>
									<?php elseif ($notification['type'] === 'Birthday'): ?>
										<li>
											<div class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3 position-relative">
												<div class="avatar text-center d-none d-sm-inline-block">
													<img class="avatar-img rounded-circle" src="<?= $notification['image'] ?>" alt="">
												</div>
												<div class="ms-sm-3 d-flex">
													<div>
														<p class="small mb-2">Wish <b><?= $notification['sender_name'] ?></b> a happy birthday (<?= date('M d', strtotime($notification['timestamp'])) ?>)</p>
														<button class="btn btn-sm btn-outline-light py-1 me-2">Say happy birthday 🎂</button>
													</div>
													<p class="small ms-3"><?= time_ago($notification['timestamp'])  ?></p>
												</div>
											</div>
										</li>
									<?php elseif ($notification['type'] === 'View'): ?>
										<li>
											<a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 mb-1 p-3">
												<div class="avatar text-center d-none d-sm-inline-block">
													<div class="avatar-img rounded-circle bg-success"><span class="text-white position-absolute top-50 start-50 translate-middle fw-bold">WB</span></div>
												</div>
												<div class="ms-sm-3">
													<div class="d-flex">
														<p class="small mb-2"><?= $notification['message'] ?></p>
														<p class="small ms-3"><?= time_ago($notification['timestamp'])  ?></p>
													</div>
												</div>
											</a>
										</li>
									<?php endif; ?>
								<?php endforeach; ?>

								<?php
									// Function to calculate time difference in a human-readable format
									function time_ago($timestamp) {
										$current_time = time();
										$notification_time = strtotime($timestamp);
										$time_diff = $current_time - $notification_time;

										$intervals = array(
											1             => 'second',
											60            => 'minute',
											3600          => 'hour',
											86400         => 'day',
											604800        => 'week',
											2592000       => 'month',
											31536000      => 'year'
										);

										foreach ($intervals as $seconds => $label) {
											$divider = $time_diff / $seconds;
											if ($divider >= 1) {
												$time_diff = round($divider);
												if ($time_diff > 1) {
													$label .= 's';
												}
												return $time_diff . ' ' . $label . ' ago';
											}
										}
									
										// If the loop completes without returning, return a default value
										return 'Just now'; // Or any default message you prefer
									}
								?>
								</ul>
							</div>

							<?php if (count($notifications) > 4): ?>
								<div class="card-footer text-center">
									<a href="#" class="btn btn-sm btn-primary-soft">See all incoming activity</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</li>
				<!-- Notification dropdown END -->

				<li class="nav-item ms-2 dropdown">
					<a class="nav-link btn icon-md p-0" href="<?php echo base_url('profile') ?>" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="avatar-img rounded-2" src="<?= $userData[0]['image'] ?>" alt="">
					</a>
					<ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3" aria-labelledby="profileDropdown">
						<!-- Profile info -->
						<li class="px-3">
							<div class="d-flex align-items-center position-relative">
								<!-- Avatar -->
								<div class="avatar me-3">
									<img class="avatar-img rounded-circle" src="<?= $userData[0]['image'] ?>" alt="avatar">
								</div>
								<div>
									<a class="h6 stretched-link" href="<?php echo base_url('profile') ?>"><?= $this->session->userdata('name') ?></a>
									<p class="small m-0">Web Developer</p>
								</div>
							</div>
							<a class="dropdown-item btn btn-primary-soft btn-sm my-2 text-center" href="<?php echo base_url('profile') ?>">View profile</a>
						</li>
						<!-- Links -->
						<li><a class="dropdown-item" href="settings.html"><i class="bi bi-gear fa-fw me-2"></i>Settings & Privacy</a></li>
						<li> 
							<a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
								<i class="fa-fw bi bi-life-preserver me-2"></i>Support
							</a> 
						</li>
						<li> 
							<a class="dropdown-item" href="docs/index.html" target="_blank">
								<i class="fa-fw bi bi-card-text me-2"></i>Documentation
							</a> 
						</li>
						<li class="dropdown-divider"></li>
						<li><a class="dropdown-item bg-danger-soft-hover" href="<?= site_url('logout') ?>"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
						<li> <hr class="dropdown-divider"></li>
						<!-- Dark mode options START -->
						<li>
							<div class="modeswitch-item theme-icon-active d-flex justify-content-center gap-3 align-items-center p-2 pb-0">
								<span>Mode:</span>
								<button type="button" class="btn btn-modeswitch nav-link text-primary-hover mb-0" data-bs-theme-value="light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Light">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
										<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
										<use href="#"></use>
									</svg>
								</button>
								<button type="button" class="btn btn-modeswitch nav-link text-primary-hover mb-0" data-bs-theme-value="dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Dark">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
										<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
										<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
										<use href="#"></use>
									</svg>
								</button>
								<button type="button" class="btn btn-modeswitch nav-link text-primary-hover mb-0 active" data-bs-theme-value="auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
										<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
										<use href="#"></use>
									</svg>
								</button>
							</div>
						</li> 
						<!-- Dark mode options END-->
					</ul>
				</li>
				<!-- Profile START -->
				
			</ul>
			<!-- Nav right END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>