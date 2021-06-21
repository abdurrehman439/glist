   <?php
    $i = 0;
    if (!empty(getReview($post_id, $type))) {
        foreach (getReview($post_id, $type) as $key => $value) { ?>
           <section>
               <?php if ($i == 0) { ?>
                   <h2>Reviews</h2>
               <?php } ?>

               <div class="review">
                   <div class="image">

                       <div class="bg-transfer"><img src="<?php echo base_url(); ?><?php echo $value['profile_picture']; ?>" alt=""></div>

                   </div>

                   <div class="description">

                       <figure>
                           <span class="name"><?php echo  $value['full_name'] ?></span><br>
                           <?php if($value['type'] != 1){ ?>
                           <div class="rating-passive" data-rating="<?php $rating_value = $value['rating_value'];
                                                                    echo   $rating_value / 2; ?>">

                               <span class="stars"></span>

                               <span class="reviews"><?php echo $value['rating_value']; ?></span>

                           </div>
                           <?php } ?>

                           <span class="date"><?php echo $value['created_at']; ?></span>

                       </figure>
                       <h3><?php echo $value['title']; ?></h3>
                       <p><?php echo $value['message']; ?></p>

                   </div>


               </div>
               <!--end review-->

           </section>

       <?php $i++;
        }
    } else { ?>
       <section>

           <h2>Reviews</h2>
           <div class="review">
               <div class="description">
                   No Review yet
               </div>
           </div>
       </section>
   <?php } ?>