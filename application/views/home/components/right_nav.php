<!-- Right sidebar START -->
<div class="col-lg-3">
   <div class="row g-4">
      <!-- Card follow START --> 

      <?php if (!empty($friends)) { ?>
         <div class="col-sm-6 col-lg-12">
            <div class="card">
               <!-- Card header START -->
               <div class="card-header pb-0 border-0">
                  <h5 class="card-title mb-0">Who to follow</h5>
               </div>
               <div class="card-body">
               <?php foreach ($friends as $friends) {
                  if ($friends['id'] == $_SESSION['userid']) {
                     continue;
                  }

                  $isFollowed = false;
                     foreach ($follows as $follow) {
                        if ($follow['user_id'] == $_SESSION['userid'] && $follow['follower_id'] == $friends['id']) {
                              $isFollowed = true;
                        }
                     }
               ?>
                  
                  <div class="hstack gap-2 mb-3">
                     <!-- Avatar -->
                     <div class="avatar">
                        <a href="<?= site_url('profile?username='.$friends['username']  ) ?>"><img class="avatar-img rounded-circle" src="<?= $friends['image']  ?>" alt=""></a>
                     </div>
                     <!-- Title -->
                     <div class="overflow-hidden">
                        <a class="h6 mb-0" href="#!"><?= $friends['first_name'] . ' '. $friends['surname'] ?> </a>
                        <p class="mb-0 small text-truncate">News anchor</p>
                     </div>
                     <?php if ($isFollowed == true) { ?>
                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" style="color: #0f6fec;" onclick="UnfollowUser(<?= $friends['id'] ?>)">
                              <i class="fa-solid fa-check" style="color: #0f6fec; "></i>
                        </a>
                     <?php } else { ?> 
                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#" onclick="followUser(<?= $friends['id'] ?>)">
                              <i class="fa-solid fa-plus"></i>
                        </a>
                     <?php } ?>
                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

                     <script>
                        function followUser(userId) {
                           // Send an AJAX request to the URL
                           $.ajax({
                                 url: "<?= base_url('Home/follow/') ?>" + userId,
                                 type: "GET",
                                 success: function(response) {
                                    // Change the icon to fa-check
                                    $("a[href='#'][onclick='followUser(" + userId + ")'] i").removeClass("fa-solid fa-plus").addClass("fa-solid fa-check");
                                    location.reload();

                                 },
                                 error: function(xhr, status, error) {
                                    // Handle error response, if needed
                                    console.error("Request failed");
                                 }
                           });
                        }

                        function UnfollowUser(userId) {
                           // Send an AJAX request to the URL
                           $.ajax({
                                 url: "<?= base_url('Home/unfollow/') ?>" + userId,
                                 type: "GET",
                                 success: function(response) {
                                    $("a[onclick='UnfollowUser(" + userId + ")'] i").removeClass("fa-solid fa-check").addClass("fa-solid fa-plus");
                                    window.location.reload();

                                 },
                                 error: function(xhr, status, error) {
                                    // Handle error response, if needed
                                    console.error("Request failed");
                                 }
                           });
                        }


                     </script>

                     
                  </div>
               <?php } ?>
                  
                  <div class="d-grid mt-3">
                     <a class="btn btn-sm btn-primary-soft" href="#!">View more</a>
                  </div>
               </div>
               <!-- Card body END -->
            </div>
         </div>

      <?php } ?>
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