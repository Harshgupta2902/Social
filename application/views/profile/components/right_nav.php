<div class="col-lg-4">

        <div class="row g-4">

          <!-- Card START -->
          <div class="col-md-6 col-lg-12">
            <div class="card">
              <div class="card-header border-0 pb-0">
                <h5 class="card-title">About</h5>
                <!-- Button modal -->
              </div>
              <!-- Card body START -->
              <div class="card-body position-relative pt-0">
                <p>He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy.</p>
                <!-- Date time -->
                <ul class="list-unstyled mt-3 mb-0">
                <?php 
                    // Assuming $user is the array containing user data
                    $dateOfBirth = DateTime::createFromFormat('d-m-Y', $userData[0]['date_of_birth']);
                    $formattedDateOfBirth = $dateOfBirth->format('F j, Y');
                ?>
                  <li class="mb-2"> <i class="bi bi-calendar-date fa-fw pe-1"></i> Born: <strong> <?= $formattedDateOfBirth ?> </strong> </li>
                  <li class="mb-2"> <i class="bi bi-heart fa-fw pe-1"></i> Status: <strong> Single </strong> </li>
                  <li> <i class="bi bi-envelope fa-fw pe-1"></i> Email: <strong> <?= $userData[0]['email'] ?> </strong> </li>
                </ul>
              </div>
              <!-- Card body END -->
            </div>
          </div>
          <!-- Card END -->

          <!-- Card START -->
          <div class="col-md-6 col-lg-12">
            <div class="card">
              <!-- Card header START -->
              <div class="card-header d-flex justify-content-between border-0">
                <h5 class="card-title">Experience</h5>
                <a class="btn btn-primary-soft btn-sm" href="#!"> <i class="fa-solid fa-plus"></i> </a>
              </div>
              <!-- Card header END -->
              <!-- Card body START -->
              <div class="card-body position-relative pt-0">
                <!-- Experience item START -->
                <div class="d-flex">
                  <!-- Avatar -->
                  <div class="avatar me-3">
                    <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/logo/08.svg" alt=""> </a>
                  </div>
                  <!-- Info -->
                  <div>
                    <h6 class="card-title mb-0"><a href="#!"> Apple Computer, Inc. </a></h6>
                    <p class="small">May 2015 – Present Employment Duration 8 mos <a class="btn btn-primary-soft btn-xs ms-2" href="#!">Edit </a></p>
                  </div>
                </div>
                <!-- Experience item END -->

                <!-- Experience item START -->
                <div class="d-flex">
                  <!-- Avatar -->
                  <div class="avatar me-3">
                    <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/logo/09.svg" alt=""> </a>
                  </div>
                  <!-- Info -->
                  <div>
                    <h6 class="card-title mb-0"><a href="#!"> Microsoft Corporation </a></h6>
                    <p class="small">May 2017 – Present Employment Duration 1 yrs 5 mos <a class="btn btn-primary-soft btn-xs ms-2" href="#!">Edit </a></p>
                  </div>
                </div>
                <!-- Experience item END -->

                <!-- Experience item START -->
                <div class="d-flex">
                  <!-- Avatar -->
                  <div class="avatar me-3">
                    <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/logo/10.svg" alt=""> </a>
                  </div>
                  <!-- Info -->
                  <div>
                    <h6 class="card-title mb-0"><a href="#!"> Tata Consultancy Services. </a></h6>
                    <p class="small mb-0">May 2022 – Present Employment Duration 6 yrs 10 mos <a class="btn btn-primary-soft btn-xs ms-2" href="#!">Edit </a></p>
                  </div>
                </div>
                <!-- Experience item END -->

              </div>
              <!-- Card body END -->
            </div>
          </div>
          <!-- Card END -->
          
          <!-- Card START -->
          <div class="col-md-6 col-lg-12">
            <div class="card">
              <!-- Card header START -->
              <div class="card-header d-sm-flex justify-content-between border-0">
                <h5 class="card-title">Photos</h5>
                <a class="btn btn-primary-soft btn-sm" href="#!"> See all photo</a>
              </div>
              <!-- Card header END -->
              <!-- Card body START -->
              <div class="card-body position-relative pt-0">
                <div class="row g-2">
                  <!-- Photos item -->
                  <div class="col-6">
                    <a href="assets/images/albums/01.jpg" data-gallery="image-popup" data-glightbox="">
                      <img class="rounded img-fluid" src="assets/images/albums/01.jpg" alt="">
                    </a>
                  </div>
                  <!-- Photos item -->
                  <div class="col-6">
                    <a href="assets/images/albums/02.jpg" data-gallery="image-popup" data-glightbox="">
                      <img class="rounded img-fluid" src="assets/images/albums/02.jpg" alt="">
                    </a>
                  </div>
                  <!-- Photos item -->
                  <div class="col-4">
                    <a href="assets/images/albums/03.jpg" data-gallery="image-popup" data-glightbox="">
                      <img class="rounded img-fluid" src="assets/images/albums/03.jpg" alt="">
                    </a>
                  </div>
                  <!-- Photos item -->
                  <div class="col-4">
                    <a href="assets/images/albums/04.jpg" data-gallery="image-popup" data-glightbox="">
                      <img class="rounded img-fluid" src="assets/images/albums/04.jpg" alt="">
                    </a>
                  </div>
                  <!-- Photos item -->
                  <div class="col-4">
                    <a href="assets/images/albums/05.jpg" data-gallery="image-popup" data-glightbox="">
                      <img class="rounded img-fluid" src="assets/images/albums/05.jpg" alt="">
                    </a>
                    <!-- glightbox Albums left bar END  -->
                  </div>
                </div>
              </div>
              <!-- Card body END -->
            </div>
          </div>
          <!-- Card END -->


          <?php if (!empty($followersList) && $followersCount != 0) { ?>
          <!-- Card START -->
          <div class="col-md-6 col-lg-12">
            <div class="card">
              <!-- Card header START -->
              <div class="card-header d-sm-flex justify-content-between align-items-center border-0">
                <h5 class="card-title">Friends <span class="badge bg-danger bg-opacity-10 text-danger"><?php echo $followersCount ?></span></h5>
                <?php if ($followersCount > 5): ?>
                    <a class="btn btn-primary-soft btn-sm" href="#!">See all friends</a>
                <?php endif; ?>
              </div>
              <!-- Card header END -->
              <!-- Card body START -->
              <div class="card-body position-relative pt-0">
                <div class="row g-3">

                <?php 
                $limitedFollowersList = array_slice($followersList, 0, 4);
                
                foreach ($limitedFollowersList as $followersList) { ?>
                  <div class="col-6">
                    <!-- Friends item START -->
                    <div class="card shadow-none text-center h-100">
                      <!-- Card body -->
                      <div class="card-body p-2 pb-0">
                        <div class="avatar avatar-story avatar-xl">
                          <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt=""></a>
                        </div>
                        <h6 class="card-title mb-1 mt-3"> <a href="#!"><?= $followersList['first_name'] . ' '. $followersList['surname'] ?> </a></h6>
                        <!-- <p class="mb-0 small lh-sm">16 mutual connections</p> -->
                      </div>
                      <!-- Card footer -->
                      <div class="card-footer p-2 border-0">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Send message"> <i class="bi bi-chat-left-text"></i> </button>
                        <button class="btn btn-sm btn-danger" onclick="UnfollowUser(<?= $followersList['id'] ?>)" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove friend"> <i class="bi bi-person-x"></i> </button>
                      </div>
                    </div>
                  </div>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

                  <script >
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

                <?php } ?>
                  


                </div>
              </div>
              <!-- Card body END -->
            </div>
          </div>
          <!-- Card END -->
            <?php }  ?>
          
        </div>

      </div>