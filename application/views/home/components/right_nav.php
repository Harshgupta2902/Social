<!-- Right sidebar START -->
<div class="col-lg-3">
   <div class="row g-4">
      <!-- Card follow START -->
      <div class="col-sm-6 col-lg-12">
         <div class="card">
            <!-- Card header START -->
            <div class="card-header pb-0 border-0">
               <h5 class="card-title mb-0">Who to follow</h5>
            </div>
            <div class="card-body">
				<?php foreach ($friends as $friends) { ?>
					<div class="hstack gap-2 mb-3">
						<!-- Avatar -->
						<div class="avatar">
							<a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt=""></a>
						</div>
						<!-- Title -->
						<div class="overflow-hidden">
							<a class="h6 mb-0" href="#!"><?= $friends['first_name'] . ' '. $friends['surname'] ?> </a>
							<p class="mb-0 small text-truncate">News anchor</p>
						</div>
						<!-- Button -->
						<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i class="fa-solid fa-plus"> </i></a>
					</div>
				<?php } ?>
               
               <div class="d-grid mt-3">
                  <a class="btn btn-sm btn-primary-soft" href="#!">View more</a>
               </div>
            </div>
            <!-- Card body END -->
         </div>
      </div>
      <!-- Card follow START -->
      <!-- Card News START -->
      <div class="col-sm-6 col-lg-12">
         <div class="card">
            <!-- Card header START -->
            <div class="card-header pb-0 border-0">
               <h5 class="card-title mb-0">Today’s news</h5>
            </div>
            <!-- Card header END -->
            <!-- Card body START -->
            <div class="card-body">
               <!-- News item -->
               <div class="mb-3">
                  <h6 class="mb-0"><a href="blog-details.html">Ten questions you should answer truthfully</a></h6>
                  <small>2hr</small>
               </div>
               <!-- News item -->
               <div class="mb-3">
                  <h6 class="mb-0"><a href="blog-details.html">Five unbelievable facts about money</a></h6>
                  <small>3hr</small>
               </div>
               <!-- News item -->
               <div class="mb-3">
                  <h6 class="mb-0"><a href="blog-details.html">Best Pinterest Boards for learning about business</a></h6>
                  <small>4hr</small>
               </div>
               <!-- News item -->
               <div class="mb-3">
                  <h6 class="mb-0"><a href="blog-details.html">Skills that you can learn from business</a></h6>
                  <small>6hr</small>
               </div>
               <!-- Load more comments -->
               <a href="#!" role="button" class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center" data-bs-toggle="button" aria-pressed="true">
                  <div class="spinner-dots me-2">
                     <span class="spinner-dot"></span>
                     <span class="spinner-dot"></span>
                     <span class="spinner-dot"></span>
                  </div>
                  View all latest news
               </a>
            </div>
            <!-- Card body END -->
         </div>
      </div>
      <!-- Card News END -->
   </div>
</div>
<!-- Right sidebar END -->