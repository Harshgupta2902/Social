<!-- Main Chat START -->
<div class="d-none d-lg-block">
	<!-- Button -->
	<a class="icon-md btn btn-primary position-fixed end-0 bottom-0 me-5 mb-5" data-bs-toggle="offcanvas" href="#offcanvasChat" role="button" aria-controls="offcanvasChat">
		<i class="bi bi-chat-left-text-fill"></i>
	</a>
	<!-- Chat sidebar START -->
	<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasChat">
		<!-- Offcanvas header -->
		<div class="offcanvas-header d-flex justify-content-between">
			<h5 class="offcanvas-title">Messaging</h5>
			<div class="d-flex">
				<!-- New chat box open button -->
				<a href="#" class="btn btn-secondary-soft-hover py-1 px-2">
					<i class="bi bi-pencil-square"></i>
				</a>
				<!-- Chat action START -->
				<div class="dropdown">
					<a href="#" class="btn btn-secondary-soft-hover py-1 px-2" id="chatAction" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-three-dots"></i>
					</a>
					<!-- Chat action menu -->
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="chatAction">
						<li><a class="dropdown-item" href="#"> <i class="bi bi-check-square fa-fw pe-2"></i>Mark all as read</a></li>
						<li><a class="dropdown-item" href="#"> <i class="bi bi-gear fa-fw pe-2"></i>Chat setting </a></li>
						<li><a class="dropdown-item" href="#"> <i class="bi bi-bell fa-fw pe-2"></i>Disable notifications</a></li>
						<li><a class="dropdown-item" href="#"> <i class="bi bi-volume-up-fill fa-fw pe-2"></i>Message sounds</a></li>
						<li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block setting</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#"> <i class="bi bi-people fa-fw pe-2"></i>Create a group chat</a></li>
					</ul>
				</div>
				<!-- Chat action END -->
				
				<!-- Close  -->
				<a href="#" class="btn btn-secondary-soft-hover py-1 px-2" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="fa-solid fa-xmark"></i>
				</a>

			</div>
		</div>
		<!-- Offcanvas body START -->
		<div class="offcanvas-body pt-0 custom-scrollbar">
			<!-- Search contact START -->
			<form class="rounded position-relative">
				<input class="form-control ps-5 bg-light" type="search" placeholder="Search..." aria-label="Search">
				<button class="btn bg-transparent px-3 py-0 position-absolute top-50 start-0 translate-middle-y" type="submit"><i class="bi bi-search fs-5"> </i></button>
			</form>
			<!-- Search contact END -->
			<ul class="list-unstyled">

				<!-- Contact item -->
				<li class="mt-3 hstack gap-3 align-items-center position-relative toast-btn" data-target="chatToast">
					<!-- Avatar -->
					<div class="avatar status-online">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
					</div>
					<!-- Info -->
					<div class="overflow-hidden">
						<a class="h6 mb-0 stretched-link" href="#!">Frances Guerrero </a>
						<div class="small text-secondary text-truncate">Frances sent a photo.</div>
					</div>
					<!-- Chat time -->
					<div class="small ms-auto text-nowrap"> Just now </div>
				</li>

				<!-- Contact item -->
				<li class="mt-3 hstack gap-3 align-items-center position-relative toast-btn" data-target="chatToast2">
					<!-- Avatar -->
					<div class="avatar status-online">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="">
					</div>
					<!-- Info -->
					<div class="overflow-hidden">
						<a class="h6 mb-0 stretched-link" href="#!">Lori Ferguson </a>
						<div class="small text-secondary text-truncate">You missed a call form Carolyn🤙</div>
					</div>
					<!-- Chat time -->
					<div class="small ms-auto text-nowrap"> 1min </div>
				</li>

				<!-- Contact item -->
				<li class="mt-3 hstack gap-3 align-items-center position-relative">
					<!-- Avatar -->
					<div class="avatar status-offline">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/placeholder.jpg" alt="">
					</div>
					<!-- Info -->
					<div class="overflow-hidden">
						<a class="h6 mb-0 stretched-link" href="#!">Samuel Bishop </a>
						<div class="small text-secondary text-truncate">Day sweetness why cordially 😊</div>
					</div>
					<!-- Chat time -->
					<div class="small ms-auto text-nowrap"> 2min </div>
				</li>

				<!-- Contact item -->
				<li class="mt-3 hstack gap-3 align-items-center position-relative">
					<!-- Avatar -->
					<div class="avatar">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="">
					</div>
					<!-- Info -->
					<div class="overflow-hidden">
						<a class="h6 mb-0 stretched-link" href="#!">Dennis Barrett </a>
						<div class="small text-secondary text-truncate">Happy birthday🎂</div>
					</div>
					<!-- Chat time -->
					<div class="small ms-auto text-nowrap"> 10min </div>
				</li>

				<!-- Contact item -->
				<li class="mt-3 hstack gap-3 align-items-center position-relative">
					<!-- Avatar -->
					<div class="avatar avatar-story status-online">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="">
					</div>
					<!-- Info -->
					<div class="overflow-hidden">
						<a class="h6 mb-0 stretched-link" href="#!">Judy Nguyen </a>
						<div class="small text-secondary text-truncate">Thank you!</div>
					</div>
					<!-- Chat time -->
					<div class="small ms-auto text-nowrap"> 2hrs </div>
				</li>

				<!-- Contact item -->
				<li class="mt-3 hstack gap-3 align-items-center position-relative">
					<!-- Avatar -->
					<div class="avatar status-online">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="">
					</div>
					<!-- Info -->
					<div class="overflow-hidden">
						<a class="h6 mb-0 stretched-link" href="#!">Carolyn Ortiz </a>
						<div class="small text-secondary text-truncate">Greetings from Webestica.</div>
					</div>
					<!-- Chat time -->
					<div class="small ms-auto text-nowrap"> 1 day </div>
				</li>

				<!-- Contact item -->
				<li class="mt-3 hstack gap-3 align-items-center position-relative">
					<!-- Avatar -->
					<div class="flex-shrink-0 avatar">
						<ul class="avatar-group avatar-group-four">
							<li class="avatar avatar-xxs">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-xxs">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-xxs">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
							</li>
							<li class="avatar avatar-xxs">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
							</li>
						</ul>
					</div>
					<!-- Info -->
					<div class="overflow-hidden">
						<a class="h6 mb-0 stretched-link text-truncate d-inline-block" href="#!">Frances, Lori, Amanda, Lawson </a>
						<div class="small text-secondary text-truncate">Btw are you looking for job change?</div>
					</div>
					<!-- Chat time -->
					<div class="small ms-auto text-nowrap"> 4 day </div>
				</li>

				<!-- Contact item -->
				<li class="mt-3 hstack gap-3 align-items-center position-relative">
					<!-- Avatar -->
					<div class="avatar status-offline">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="">
					</div>
					<!-- Info -->
					<div class="overflow-hidden">
						<a class="h6 mb-0 stretched-link" href="#!">Bryan Knight </a>
						<div class="small text-secondary text-truncate">if you are available to discuss🙄</div>
					</div>
					<!-- Chat time -->
					<div class="small ms-auto text-nowrap"> 6 day </div>
				</li>

				<!-- Contact item -->
				<li class="mt-3 hstack gap-3 align-items-center position-relative">
					<!-- Avatar -->
					<div class="avatar">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="">
					</div>
					<!-- Info -->
					<div class="overflow-hidden">
						<a class="h6 mb-0 stretched-link" href="#!">Louis Crawford </a>
						<div class="small text-secondary text-truncate">🙌Congrats on your work anniversary!</div>
					</div>
					<!-- Chat time -->
					<div class="small ms-auto text-nowrap"> 1 day </div>
				</li>

				<!-- Contact item -->
				<li class="mt-3 hstack gap-3 align-items-center position-relative">
					<!-- Avatar -->
					<div class="avatar status-online">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="">
					</div>
					<!-- Info -->
					<div class="overflow-hidden">
						<a class="h6 mb-0 stretched-link" href="#!">Jacqueline Miller </a>
						<div class="small text-secondary text-truncate">No sorry, Thanks.</div>
					</div>
					<!-- Chat time -->
					<div class="small ms-auto text-nowrap"> 15, dec </div>
				</li>

				<!-- Contact item -->
				<li class="mt-3 hstack gap-3 align-items-center position-relative">
					<!-- Avatar -->
					<div class="avatar">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt="">
					</div>
					<!-- Info -->
					<div class="overflow-hidden">
						<a class="h6 mb-0 stretched-link" href="#!">Amanda Reed </a>
						<div class="small text-secondary text-truncate">Interested can share CV at.</div>
					</div>
					<!-- Chat time -->
					<div class="small ms-auto text-nowrap"> 18, dec </div>
				</li>

				<!-- Contact item -->
				<li class="mt-3 hstack gap-3 align-items-center position-relative">
					<!-- Avatar -->
					<div class="avatar status-online">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="">
					</div>
					<!-- Info -->
					<div class="overflow-hidden">
						<a class="h6 mb-0 stretched-link" href="#!">Larry Lawson </a>
						<div class="small text-secondary text-truncate">Hope you're doing well and Safe.</div>
					</div>
					<!-- Chat time -->
					<div class="small ms-auto text-nowrap"> 20, dec </div>
				</li>
				<!-- Button -->
				<li class="mt-3 d-grid">
					<a class="btn btn-primary-soft" href="messaging.html"> See all in messaging </a>
				</li>

			</ul>
		</div>
		<!-- Offcanvas body END -->
	</div>
	<!-- Chat sidebar END -->

	<!-- Chat END -->

	<!-- Chat START -->
	<div aria-live="polite" aria-atomic="true" class="position-relative">
		<div class="toast-container toast-chat d-flex gap-3 align-items-end">

			<!-- Chat toast START -->
			<div id="chatToast" class="toast mb-0 bg-mode" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
				<div class="toast-header bg-mode">
					<!-- Top avatar and status START -->
					<div class="d-flex justify-content-between align-items-center w-100">
						<div class="d-flex">
							<div class="flex-shrink-0 avatar me-2">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
							</div>
							<div class="flex-grow-1">
								<h6 class="mb-0 mt-1">Frances Guerrero</h6>
								<div class="small text-secondary"><i class="fa-solid fa-circle text-success me-1"></i>Online</div>
							</div>
						</div>
						<div class="d-flex">
						<!-- Call button -->
						<div class="dropdown">
							<a class="btn btn-secondary-soft-hover py-1 px-2" href="#" id="chatcoversationDropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></a>               
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="chatcoversationDropdown">
								<li><a class="dropdown-item" href="#"><i class="bi bi-camera-video me-2 fw-icon"></i>Video call</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-telephone me-2 fw-icon"></i>Audio call</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash me-2 fw-icon"></i>Delete </a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-chat-square-text me-2 fw-icon"></i>Mark as unread</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-volume-up me-2 fw-icon"></i>Muted</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-archive me-2 fw-icon"></i>Archive</a></li>
								<li class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-flag me-2 fw-icon"></i>Report</a></li>
							</ul>
						</div>
						<!-- Card action END -->
						<a class="btn btn-secondary-soft-hover py-1 px-2" data-bs-toggle="collapse" href="#collapseChat" aria-expanded="false" aria-controls="collapseChat"><i class="bi bi-dash-lg"></i></a>        
						<button class="btn btn-secondary-soft-hover py-1 px-2" data-bs-dismiss="toast" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
					</div>
				</div>
				<!-- Top avatar and status END -->
					
				</div>
				<div class="toast-body collapse show" id="collapseChat">
					<!-- Chat conversation START -->
					<div class="chat-conversation-content custom-scrollbar h-200px">
						<!-- Chat time -->
						<div class="text-center small my-2">Jul 16, 2022, 06:15 am</div>
						<!-- Chat message left -->
						<div class="d-flex mb-1">
							<div class="flex-shrink-0 avatar avatar-xs me-2">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
							</div>
							<div class="flex-grow-1">
								<div class="w-100">
									<div class="d-flex flex-column align-items-start">
										<div class="bg-light text-secondary p-2 px-3 rounded-2">Applauded no discovery😊</div>
										<div class="small my-2">6:15 AM</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Chat message right -->
						<div class="d-flex justify-content-end text-end mb-1">
							<div class="w-100">
								<div class="d-flex flex-column align-items-end">
									<div class="bg-primary text-white p-2 px-3 rounded-2">With pleasure</div>
								</div>
							</div>
						</div>
						<!-- Chat message left -->
						<div class="d-flex mb-1">
							<div class="flex-shrink-0 avatar avatar-xs me-2">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
							</div>
							<div class="flex-grow-1">
								<div class="w-100">
									<div class="d-flex flex-column align-items-start">
										<div class="bg-light text-secondary p-2 px-3 rounded-2">Please find the attached</div>
										<!-- Files START -->
										<!-- Files END -->
										<div class="small my-2">12:16 PM</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Chat message left -->
						<div class="d-flex mb-1">
							<div class="flex-shrink-0 avatar avatar-xs me-2">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
							</div>
							<div class="flex-grow-1">
								<div class="w-100">
									<div class="d-flex flex-column align-items-start">
										<div class="bg-light text-secondary p-2 px-3 rounded-2">How promotion excellent curiosity😮</div>
										<div class="small my-2">3:22 PM</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Chat message right -->
						<div class="d-flex justify-content-end text-end mb-1">
							<div class="w-100">
								<div class="d-flex flex-column align-items-end">
									<div class="bg-primary text-white p-2 px-3 rounded-2">And sir dare view.</div>
									<!-- Images -->
									<div class="d-flex my-2">
										<div class="small text-secondary">5:35 PM</div>
										<div class="small ms-2"><i class="fa-solid fa-check"></i></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Chat time -->
						<div class="text-center small my-2">2 New Messages</div>
						<!-- Chat Typing -->
						<div class="d-flex mb-1">
							<div class="flex-shrink-0 avatar avatar-xs me-2">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
							</div>
							<div class="flex-grow-1">
								<div class="w-100">
									<div class="d-flex flex-column align-items-start">
										<div class="bg-light text-secondary p-3 rounded-2">
											<div class="typing d-flex align-items-center">
												<div class="dot"></div>
												<div class="dot"></div>
												<div class="dot"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Chat conversation END -->
					<!-- Chat bottom START -->
					<div class="mt-2">
						<!-- Chat textarea -->
						<textarea class="form-control mb-sm-0 mb-3" placeholder="Type a message" rows="1"></textarea>
						<!-- Button -->
						<div class="d-sm-flex align-items-end mt-2">
							<button class="btn btn-sm btn-danger-soft me-2"><i class="fa-solid fa-face-smile fs-6"></i></button>
							<button class="btn btn-sm btn-secondary-soft me-2"><i class="fa-solid fa-paperclip fs-6"></i></button>
							<button class="btn btn-sm btn-success-soft me-2"> Gif </button>
							<button class="btn btn-sm btn-primary ms-auto"> Send </button>
						</div>
					</div>
					<!-- Chat bottom START -->
				</div>
			</div>
			<!-- Chat toast END -->

			<!-- Chat toast 2 START -->
			<div id="chatToast2" class="toast mb-0 bg-mode" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
				<div class="toast-header bg-mode">
					<!-- Top avatar and status START -->
					<div class="d-flex justify-content-between align-items-center w-100">
						<div class="d-flex">
							<div class="flex-shrink-0 avatar me-2">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="">
							</div>
							<div class="flex-grow-1">
								<h6 class="mb-0 mt-1">Lori Ferguson</h6>
								<div class="small text-secondary"><i class="fa-solid fa-circle text-success me-1"></i>Online</div>
							</div>
						</div>
						<div class="d-flex">
						<!-- Call button -->
						<div class="dropdown">
							<a class="btn btn-secondary-soft-hover py-1 px-2" href="#" id="chatcoversationDropdown2" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></a>               
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="chatcoversationDropdown2">
								<li><a class="dropdown-item" href="#"><i class="bi bi-camera-video me-2 fw-icon"></i>Video call</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-telephone me-2 fw-icon"></i>Audio call</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash me-2 fw-icon"></i>Delete </a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-chat-square-text me-2 fw-icon"></i>Mark as unread</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-volume-up me-2 fw-icon"></i>Muted</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-archive me-2 fw-icon"></i>Archive</a></li>
								<li class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-flag me-2 fw-icon"></i>Report</a></li>
							</ul>
						</div>
						<!-- Card action END -->
						<a class="btn btn-secondary-soft-hover py-1 px-2" data-bs-toggle="collapse" href="#collapseChat2" role="button" aria-expanded="false" aria-controls="collapseChat2"><i class="bi bi-dash-lg"></i></a>        
						<button class="btn btn-secondary-soft-hover py-1 px-2" data-bs-dismiss="toast" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
					</div>
				</div>
				<!-- Top avatar and status END -->
					
				</div>
				<div class="toast-body collapse show" id="collapseChat2">
					<!-- Chat conversation START -->
					<div class="chat-conversation-content custom-scrollbar h-200px">
						<!-- Chat time -->
						<div class="text-center small my-2">Jul 16, 2022, 06:15 am</div>
						<!-- Chat message left -->
						<div class="d-flex mb-1">
							<div class="flex-shrink-0 avatar avatar-xs me-2">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="">
							</div>
							<div class="flex-grow-1">
								<div class="w-100">
									<div class="d-flex flex-column align-items-start">
										<div class="bg-light text-secondary p-2 px-3 rounded-2">Applauded no discovery😊</div>
										<div class="small my-2">6:15 AM</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Chat message right -->
						<div class="d-flex justify-content-end text-end mb-1">
							<div class="w-100">
								<div class="d-flex flex-column align-items-end">
									<div class="bg-primary text-white p-2 px-3 rounded-2">With pleasure</div>
								</div>
							</div>
						</div>
						<!-- Chat message left -->
						<div class="d-flex mb-1">
							<div class="flex-shrink-0 avatar avatar-xs me-2">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="">
							</div>
							<div class="flex-grow-1">
								<div class="w-100">
									<div class="d-flex flex-column align-items-start">
										<div class="bg-light text-secondary p-2 px-3 rounded-2">Please find the attached</div>
										<!-- Files START -->
										<!-- Files END -->
										<div class="small my-2">12:16 PM</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Chat message left -->
						<div class="d-flex mb-1">
							<div class="flex-shrink-0 avatar avatar-xs me-2">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="">
							</div>
							<div class="flex-grow-1">
								<div class="w-100">
									<div class="d-flex flex-column align-items-start">
										<div class="bg-light text-secondary p-2 px-3 rounded-2">How promotion excellent curiosity😮</div>
										<div class="small my-2">3:22 PM</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Chat message right -->
						<div class="d-flex justify-content-end text-end mb-1">
							<div class="w-100">
								<div class="d-flex flex-column align-items-end">
									<div class="bg-primary text-white p-2 px-3 rounded-2">And sir dare view.</div>
									<!-- Images -->
									<div class="d-flex my-2">
										<div class="small text-secondary">5:35 PM</div>
										<div class="small ms-2"><i class="fa-solid fa-check"></i></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Chat time -->
						<div class="text-center small my-2">2 New Messages</div>
						<!-- Chat Typing -->
						<div class="d-flex mb-1">
							<div class="flex-shrink-0 avatar avatar-xs me-2">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="">
							</div>
							<div class="flex-grow-1">
								<div class="w-100">
									<div class="d-flex flex-column align-items-start">
										<div class="bg-light text-secondary p-3 rounded-2">
											<div class="typing d-flex align-items-center">
												<div class="dot"></div>
												<div class="dot"></div>
												<div class="dot"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Chat conversation END -->
					<!-- Chat bottom START -->
					<div class="mt-2">
						<!-- Chat textarea -->
						<textarea class="form-control mb-sm-0 mb-3" placeholder="Type a message" rows="1"></textarea>
						<!-- Button -->
						<div class="d-sm-flex align-items-end mt-2">
							<button class="btn btn-sm btn-danger-soft me-2"><i class="fa-solid fa-face-smile fs-6"></i></button>
							<button class="btn btn-sm btn-secondary-soft me-2"><i class="fa-solid fa-paperclip fs-6"></i></button>
							<button class="btn btn-sm btn-success-soft me-2"> Gif </button>
							<button class="btn btn-sm btn-primary ms-auto"> Send </button>
						</div>
					</div>
					<!-- Chat bottom START -->
				</div>
			</div>
			<!-- Chat toast 2 END -->

		</div>
	</div>
	<!-- Chat END -->

</div>
 <!-- Main Chat END -->