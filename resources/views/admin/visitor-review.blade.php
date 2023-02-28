  <div class="utf_dashboard_content"> 
      <div id="titlebar" class="dashboard_gradient">
        <div class="row">
          <div class="col-md-12">
            <h2>Reviews</h2>
            <nav id="breadcrumbs">
              <ul>
                <li><a href="{{ url('/admin') }}">Home</a></li>
                <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                <li>Reviews</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-12 col-md-12">
          <div class="utf_dashboard_list_box margin-top-0">
			<div class="sort-by my_sort_by">
                <div class="utf_sort_by_select_item">
                  <select data-placeholder="All Listing Review" class="utf_chosen_select_single">
                    <option>All Listing Review</option>
				    <option>Burger House</option>
				    <option>Sandfields Silver</option>
                    <option>Beer Bar & Restaurant</option>
					<option>Vintage Italian</option>
					<option>Modern Apartment</option>
                  </select>
                </div>
            </div>
			<h4><i class="sl sl-icon-star"></i> Visitor Reviews</h4>
            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
              <div class="small_dialog_header">
                <h3>Reply to Review</h3>
              </div>
              <div class="utf_message_reply_block margin-top-0">
                <textarea cols="40" rows="3" placeholder="Your Message..."></textarea>
                <button class="button">Reply Message</button>
              </div>
            </div>
            <ul>
              <li>
                <div class="comments utf_listing_reviews dashboard_review_item">
                  <ul>
                    <li>
                      <div class="avatar"><img src="{{asset('public/admin/images/client-avatar1.jpg')}}" alt="" /></div>
                      <div class="utf_comment_content">
                        <div class="utf_arrow_comment"></div>
                        <div class="utf_by_comment">John Smith
                          <div class="utf_by_comment-listing">on <a href="#">The Lounge & Bar</a></div>
                          <span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2022 - 8:52 am</span>
                          <div class="utf_star_rating_section" data-rating="5"></div>
						  <a href="#small-dialog" class="rate-review popup-with-zoom-anim">Reply Review <i class="fa fa-reply"></i></a> 
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>						
					  </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="comments utf_listing_reviews dashboard_review_item">
                  <ul>
                    <li>
                      <div class="avatar"><img src="{{asset('public/admin/images/client-avatar2.jpg')}}" alt="" /> </div>
                      <div class="utf_comment_content">
                        <div class="utf_arrow_comment"></div>
                        <div class="utf_by_comment">John Smith
                          <div class="utf_by_comment-listing">on <a href="#">The Lounge & Bar</a></div>
                          <span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2022 - 8:52 am</span>
                          <div class="utf_star_rating_section" data-rating="4"></div>
						  <a href="#small-dialog" class="rate-review popup-with-zoom-anim">Reply Review <i class="fa fa-reply"></i></a> 
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>
						<div class="review-images utf_gallery_container"> 
							<a href="{{asset('public/admin/images/review-image-01.jpg')}}" class="utf_gallery"><img src="{{asset('public/admin/images/review-image-01.jpg')}}" alt=""></a> 
							<a href="{{asset('public/admin/images/review-image-02.jpg')}}" class="utf_gallery"><img src="{{asset('public/admin/images/review-image-02.jpg')}}" alt=""></a> 
							<a href="{{asset('public/admin/images/review-image-03.jpg')}}" class="utf_gallery"><img src="{{asset('public/admin/images/review-image-03.jpg')}}" alt=""></a>
							<a href="{{asset('public/admin/images/review-image-01.jpg')}}" class="utf_gallery"><img src="{{asset('public/admin/images/review-image-01.jpg')}}" alt=""></a> 
							<a href="{{asset('public/admin/images/review-image-02.jpg')}}" class="utf_gallery"><img src="{{asset('public/admin/images/review-image-02.jpg')}}" alt=""></a> 
							<a href="{{asset('public/admin/images/review-image-03.jpg')}}" class="utf_gallery"><img src="{{asset('public/admin/images/review-image-03.jpg')}}" alt=""></a>
						</div>                        
					  </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="comments utf_listing_reviews dashboard_review_item">
                  <ul>
                    <li>
                      <div class="avatar"><img src="{{asset('public/admin/images/client-avatar3.jpg')}}" alt="" /></div>
                      <div class="utf_comment_content">
                        <div class="utf_arrow_comment"></div>
                        <div class="utf_by_comment">John Smith
                          <div class="utf_by_comment-listing">on <a href="#">The Lounge & Bar</a></div>
                          <span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2022 - 8:52 am</span>
                          <div class="utf_star_rating_section" data-rating="5"></div>
						  <a href="#small-dialog" class="rate-review popup-with-zoom-anim">Reply Review <i class="fa fa-reply"></i></a> 
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>                        
					  </div>
                    </li>
                  </ul>
                </div>
              </li>
			  <li>
                <div class="comments utf_listing_reviews dashboard_review_item">
                  <ul>
                    <li>
                      <div class="avatar"><img src="{{asset('public/admin/images/client-avatar1.jpg')}}" alt="" /></div>
                      <div class="utf_comment_content">
                        <div class="utf_arrow_comment"></div>
                        <div class="utf_by_comment">John Smith
                          <div class="utf_by_comment-listing">on <a href="#">The Lounge & Bar</a></div>
                          <span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2022 - 8:52 am</span>
                          <div class="utf_star_rating_section" data-rating="5"></div>
						  <a href="#small-dialog" class="rate-review popup-with-zoom-anim">Reply Review <i class="fa fa-reply"></i></a> 
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>						
					  </div>
                    </li>
                  </ul>
                </div>
              </li>			  
            </ul>
          </div>          
          <div class="clearfix"></div>
          <div class="utf_pagination_container_part margin-top-30 margin-bottom-30">
            <nav class="pagination">
              <ul>
			    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                <li><a href="#" class="current-page">1</a></li>
                <li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
                <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
              </ul>
            </nav>
          </div>                   
        </div> 
		
		<div class="col-md-12">
          <div class="footer_copyright_part">Copyright © 2022 All Rights Reserved.</div>
        </div>
      </div>
    </div>
  </div>
</div>