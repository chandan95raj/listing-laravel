    <div class="utf_dashboard_content"> 
      <div id="titlebar" class="dashboard_gradient">
        <div class="row">
          <div class="col-md-12">
            <h2>Messages</h2>
            <nav id="breadcrumbs">
              <ul>
                <li><a href="{{ url('/admin') }}">Home</a></li>
                <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                <li>Messages</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-12 col-md-12">
          <div class="utf_dashboard_list_box margin-top-0">
            <h4 class="gray"><i class="fa fa-envelope-o"></i> Messages</h4>
            <div class="utf_user_messages_block">
              <ul>
                <li class="unread"> 
					<a href="{{ url('/admin/messages-details') }}">
					  <div class="utf_message_user online"><img src="{{asset('public/admin/images/user_avatar.jpg')}}" alt="user_avatar" /></div>
					  <div class="utf_message_headline_item">
						<div class="utf_message_headline_text">
						  <h5>John Doe <i>New</i></h5>
						  <span><i class="fa fa-clock-o"></i> Jan 05, 2022 - 8:52 am</span>  
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt...</p>
					  </div>
					</a> 
				</li>
                <li class="unread"> 
					<a href="{{ url('/admin/messages-details') }}">
					  <div class="utf_message_user online"><img src="{{asset('public/admin/images/user_avatar_02.jpg')}}" alt="user_avatar" /></div>
					  <div class="utf_message_headline_item">
						<div class="utf_message_headline_text">
						  <h5>John Doe <i>New</i></h5>
						  <span><i class="fa fa-clock-o"></i> Jan 05, 2022 - 8:52 am</span>  
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt...</p>
					  </div>
					</a> 
				</li>
                <li> 
					<a href="{{ url('/admin/messages-details') }}">
					  <div class="utf_message_user online"><img src="{{asset('public/admin/images/user_avatar_03.jpg')}}" alt="user_avatar" /></div>
					  <div class="utf_message_headline_item">
						<div class="utf_message_headline_text">
						  <h5>John Doe <i>New</i></h5>
						  <span><i class="fa fa-clock-o"></i> Jan 05, 2022 - 8:52 am</span>  
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt...</p>
					  </div>
					</a> 
				</li>
                <li> 
					<a href="{{ url('/admin/messages-details') }}">
					  <div class="utf_message_user"><img src="{{asset('public/admin/images/user_avatar_04.jpg')}}" alt="user_avatar" /></div>
					  <div class="utf_message_headline_item">
						<div class="utf_message_headline_text">
						  <h5>John Doe</h5>
						  <span><i class="fa fa-clock-o"></i> Jan 05, 2022 - 8:52 am</span>  
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt...</p>
					  </div>
					</a> 
				</li>
                <li> 
					<a href="{{ url('/admin/messages-details') }}">
					  <div class="utf_message_user"><img src="{{asset('public/admin/images/user_avatar_01.jpg')}}" alt="user_avatar" /></div>
					  <div class="utf_message_headline_item">
						<div class="utf_message_headline_text">
						  <h5>John Doe</h5>
						  <span><i class="fa fa-clock-o"></i> Jan 05, 2022 - 8:52 am</span>    
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt...</p>
					  </div>
					</a> 
				</li>
              </ul>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="utf_pagination_container_part margin-top-30 margin-bottom-0">
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
<!-- Wrapper / End --> 