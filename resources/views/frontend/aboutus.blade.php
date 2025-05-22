@extends('frontend.layouts.app')

@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="60" class="elementor elementor-60">
         <div class="elementor-element elementor-element-fde30d1 e-flex e-con-boxed e-con e-parent" data-id="fde30d1" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-0836b39 e-con-full e-flex e-con e-child"
					data-id="0836b39" data-element_type="container">
					<div class="elementor-element elementor-element-20f8d9a e-con-full e-flex e-con e-child"
						data-id="20f8d9a" data-element_type="container">
						<div class="elementor-element elementor-element-54dd56f elementor-invisible elementor-widget elementor-widget-heading"
							data-id="54dd56f" data-element_type="widget"
							data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
							data-widget_type="heading.default">
							<div class="elementor-widget-container">
                           <h2 class="elementor-heading-title elementor-size-default">About Us</h2>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-d508abc elementor-invisible elementor-widget elementor-widget-heading"
							data-id="d508abc" data-element_type="widget"
							data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
							data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h3 class="elementor-heading-title elementor-size-default">Learn more about our journey and commitment</h3>
							</div>
						</div>
                  </div>
               </div>
            </div>
         </div>

        @include('frontend.components.event_planning_success')

        <div style="margin:80px 0px">
            @include('frontend.components.event_services')
        </div>

         <div class="elementor-element elementor-element-ab8c470 e-flex e-con-boxed e-con e-parent" data-id="ab8c470" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-6a00793  elementor-widget elementor-widget-heading" data-id="6a00793 " data-element_type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                     <h4 class="elementor-heading-title elementor-size-default">Corporate Clients</h4>
                  </div>
               </div>
               <div class="elementor-element elementor-element-a42ab8c elementor-widget elementor-widget-image-carousel" data-id="a42ab8c" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;4&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:2000,&quot;slides_to_show_tablet&quot;:&quot;3&quot;,&quot;slides_to_show_mobile&quot;:&quot;2&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-image-carousel-wrapper swiper" role="region" aria-roledescription="carousel" aria-label="Image Carousel" dir="ltr">
                        <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                           <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="1 of 5">
                              <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="{{asset('assets/uploads/sites/2/2024/03/Frame-4.png')}}" alt="Frame (4)" /></figure>
                           </div>
                           <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="2 of 5">
                              <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="{{asset('assets/uploads/sites/2/2024/03/Frame-3.png')}}" alt="Frame (3)" /></figure>
                           </div>
                           <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="3 of 5">
                              <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="{{asset('assets/uploads/sites/2/2024/03/Frame-2.png')}}" alt="Frame (2)" /></figure>
                           </div>
                           <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="4 of 5">
                              <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="{{asset('assets/uploads/sites/2/2024/03/Frame-1.png')}}" alt="Frame (1)" /></figure>
                           </div>
                           <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="5 of 5">
                              <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="{{asset('assets/uploads/sites/2/2024/03/Frame.png')}}" alt="Frame" /></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-dd4f8fb e-flex e-con-boxed e-con e-parent" data-id="dd4f8fb" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-9518c8c e-con-full e-flex e-con e-child" data-id="9518c8c" data-element_type="container">
                  <div class="elementor-element elementor-element-d8359d2 e-flex e-con-boxed e-con e-child" data-id="d8359d2" data-element_type="container">
                     <div class="e-con-inner">
                        <div class="elementor-element elementor-element-a54713d elementor-invisible elementor-widget elementor-widget-heading" data-id="a54713d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                           <div class="elementor-widget-container">
                              <h2 class="elementor-heading-title elementor-size-default">Vision &amp; Mission</h2>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-166314d elementor-invisible elementor-widget elementor-widget-heading" data-id="166314d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="heading.default">
                           <div class="elementor-widget-container">
                              <h3 class="elementor-heading-title elementor-size-default">our mission is clear – to craft exceptional experiences that linger in hearts.</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-8fd81c7 e-con-full e-flex e-con e-child" data-id="8fd81c7" data-element_type="container">
                  <div class="elementor-element elementor-element-685ef5e e-con-full e-flex e-con e-child" data-id="685ef5e" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                     <div class="elementor-element elementor-element-e920f35 elementor-widget elementor-widget-elementskit-video" data-id="e920f35" data-element_type="widget" data-widget_type="elementskit-video.default">
                        <div class="elementor-widget-container">
                           <div class="ekit-wid-con" >
                              <div class="video-content" data-video-player="[]" data-video-setting="{&quot;videoVolume&quot;:&quot;horizontal&quot;,&quot;startVolume&quot;:0.8000000000000000444089209850062616169452667236328125,&quot;videoType&quot;:&quot;iframe&quot;,&quot;videoClass&quot;:&quot;mfp-fade&quot;}">
                                 <a class="ekit_icon_button glow-btn ekit-video-popup ekit-video-popup-btn" href="https://www.youtube.com/embed/VhBl3dHT5SY?feature=oembed?playlist=VhBl3dHT5SY&amp;mute=0&amp;autoplay=0&amp;loop=no&amp;controls=0&amp;start=0&amp;end=" aria-label="video-popup">
                                 <i aria-hidden="true" class="icon icon-play-button"></i>		</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-18a4985 e-con-full e-flex e-con e-child" data-id="18a4985" data-element_type="container">
                     <div class="elementor-element elementor-element-3307f6e e-con-full e-flex e-con e-child" data-id="3307f6e" data-element_type="container">
                        <div class="elementor-element elementor-element-3d6f242 e-con-full e-flex e-con e-child" data-id="3d6f242" data-element_type="container">
                           <div class="elementor-element elementor-element-e46afbd e-con-full e-flex e-con e-child" data-id="e46afbd" data-element_type="container">
                              <div class="elementor-element elementor-element-3f148dc elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="3f148dc" data-element_type="widget" data-widget_type="icon-box.default">
                                 <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                       <div class="elementor-icon-box-content">
                                          <h4 class="elementor-icon-box-title">
                                             <span  >
                                             exceptional experiences						</span>
                                          </h4>
                                          <p class="elementor-icon-box-description">
                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-element elementor-element-9b85308 e-con-full e-flex e-con e-child" data-id="9b85308" data-element_type="container">
                              <div class="elementor-element elementor-element-9683946 elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="9683946" data-element_type="widget" data-widget_type="icon-box.default">
                                 <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                       <div class="elementor-icon-box-content">
                                          <h4 class="elementor-icon-box-title">
                                             <span  >
                                             values of integrity						</span>
                                          </h4>
                                          <p class="elementor-icon-box-description">
                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-39c6906 e-con-full e-flex e-con e-child" data-id="39c6906" data-element_type="container">
                           <div class="elementor-element elementor-element-e05d609 e-con-full e-flex e-con e-child" data-id="e05d609" data-element_type="container">
                              <div class="elementor-element elementor-element-1690b19 elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="1690b19" data-element_type="widget" data-widget_type="icon-box.default">
                                 <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                       <div class="elementor-icon-box-content">
                                          <h4 class="elementor-icon-box-title">
                                             <span  >
                                             creativity Craft						</span>
                                          </h4>
                                          <p class="elementor-icon-box-description">
                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-element elementor-element-e5faba2 e-con-full e-flex e-con e-child" data-id="e5faba2" data-element_type="container">
                              <div class="elementor-element elementor-element-204995a elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="204995a" data-element_type="widget" data-widget_type="icon-box.default">
                                 <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                       <div class="elementor-icon-box-content">
                                          <h4 class="elementor-icon-box-title">
                                             <span  >
                                             client-centricity						</span>
                                          </h4>
                                          <p class="elementor-icon-box-description">
                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @include('frontend.components.counter')
		 @include('frontend.components.why_choose_us')
         <div class="elementor-element elementor-element-d4a4a28 e-flex e-con-boxed e-con e-parent" data-id="d4a4a28" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-5e34463 e-con-full e-flex e-con e-child" data-id="5e34463" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                  <div class="elementor-element elementor-element-9645ee3 elementor-widget elementor-widget-heading" data-id="9645ee3" data-element_type="widget" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Sustainability Commitment</h2>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-6b917f4 elementor-widget elementor-widget-heading" data-id="6b917f4" data-element_type="widget" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Learn about our commitment to sustainability.</h3>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-506e9f5 elementor-widget elementor-widget-text-editor" data-id="506e9f5" data-element_type="widget" data-widget_type="text-editor.default">
                     <div class="elementor-widget-container">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-1a30d04 elementor-align-left elementor-widget elementor-widget-button" data-id="1a30d04" data-element_type="widget" data-widget_type="button.default">
                     <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                           <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
                           <span class="elementor-button-content-wrapper">
                           <span class="elementor-button-icon">
                           <i aria-hidden="true" class="icon icon-arrow-right"></i>			</span>
                           <span class="elementor-button-text">Learn More</span>
                           </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-813b9b8 e-flex e-con-boxed e-con e-parent" data-id="813b9b8" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-57898e6 e-con-full e-flex e-con e-child" data-id="57898e6" data-element_type="container">
                  <div class="elementor-element elementor-element-45150d2 e-flex e-con-boxed e-con e-child" data-id="45150d2" data-element_type="container">
                     <div class="e-con-inner">
                        <div class="elementor-element elementor-element-82090f2 elementor-invisible elementor-widget elementor-widget-heading" data-id="82090f2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                           <div class="elementor-widget-container">
                              <h2 class="elementor-heading-title elementor-size-default">Meet Our Team</h2>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-a38a1cc elementor-invisible elementor-widget elementor-widget-heading" data-id="a38a1cc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="heading.default">
                           <div class="elementor-widget-container">
                              <h3 class="elementor-heading-title elementor-size-default">The Creative Minds Behind Our Events Organizer Team.</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-ff603a8 e-con-full e-flex e-con e-child" data-id="ff603a8" data-element_type="container">
                  <div class="elementor-element elementor-element-27e51d1 e-con-full e-flex e-con e-child" data-id="27e51d1" data-element_type="container">
                     <div class="elementor-element elementor-element-cad5bd7 e-con-full e-flex e-con e-child" data-id="cad5bd7" data-element_type="container">
                        <div class="elementor-element elementor-element-bc4f7aa e-con-full e-flex e-con e-child" data-id="bc4f7aa" data-element_type="container">
                           <div class="elementor-element elementor-element-3aedb89 e-con-full e-flex e-con e-child" data-id="3aedb89" data-element_type="container">
                              <div class="elementor-element elementor-element-0081d12 elementor-widget elementor-widget-elementskit-team" data-id="0081d12" data-element_type="widget" data-widget_type="elementskit-team.default">
                                 <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                       <div class="profile-image-card elementor-animation- ekit-team-img ekit-team-style-overlay text-center">
                                          <img decoding="async" src="{{ asset('assets/uploads/sites/2/elementor/thumbs/tv-presenter-in-formal-wear-makes-music-gesture-at-event-qkr6z58bt6mqp7w4h67nwllyacx7ajko15nqeu7a68.jpg') }}" title="TV presenter in formal wear makes music gesture at event" alt="TV presenter in formal wear makes music gesture at event" loading="lazy" />
                                          <div class="hover-area">
                                             <div class="profile-body">
                                                <h2 class="profile-title">
                                                </h2>
                                                <p class="profile-designation"></p>
                                             </div>
                                             <div class="profile-footer">
                                                <ul class="ekit-team-social-list">
                                                   <li class="elementor-repeater-item-98dae02">
                                                      <a href="https://facebook.com/" aria-label="Facebook">
                                                      <i aria-hidden="true" class="icon icon-facebook"></i>			</a>
                                                   </li>
                                                   <li class="elementor-repeater-item-0a9d575">
                                                      <a href="https://facebook.com/" aria-label="Twitter">
                                                      <i aria-hidden="true" class="icon icon-twitter"></i>			</a>
                                                   </li>
                                                   <li class="elementor-repeater-item-458aaba">
                                                      <a href="https://facebook.com/" aria-label="Pinterest">
                                                      <i aria-hidden="true" class="icon icon-pinterest"></i>			</a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-element elementor-element-6eb292e ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="6eb292e" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                                 <div class="elementor-widget-container">
                                    <div class="ekit-wid-con" >
                                       <!-- link opening -->
                                       <!-- end link opening -->
                                       <div class="elementskit-infobox text-center text- icon-lef-right-aligin elementor-animation-float   ">
                                          <div class="box-body">
                                             <h3 class="elementskit-info-box-title">
                                                Mrs. Jane Doe
                                             </h3>
                                             <p>Director</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-element elementor-element-efcae74 e-con-full e-flex e-con e-child" data-id="efcae74" data-element_type="container">
                              <div class="elementor-element elementor-element-77c5b63 elementor-widget elementor-widget-elementskit-team" data-id="77c5b63" data-element_type="widget" data-widget_type="elementskit-team.default">
                                 <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                       <div class="profile-image-card elementor-animation- ekit-team-img ekit-team-style-overlay text-center">
                                          <img decoding="async" src="{{ asset('assets/uploads/sites/2/elementor/thumbs/smiling-event-organizer-with-clipboard-talking-on-smartphone-near-festive-tables-in-banquet-hall-qkr6yxpmaicg4c71p2yncni9j9y9kyqtc4fukmifk0.56.delay')}}" title="smiling event organizer with clipboard talking on smartphone near festive tables in banquet hall" alt="smiling event organizer with clipboard talking on smartphone near festive tables in banquet hall" loading="lazy" />
                                          <div class="hover-area">
                                             <div class="profile-body">
                                                <h2 class="profile-title">
                                                </h2>
                                                <p class="profile-designation"></p>
                                             </div>
                                             <div class="profile-footer">
                                                <ul class="ekit-team-social-list">
                                                   <li class="elementor-repeater-item-98dae02">
                                                      <a href="https://facebook.com/" aria-label="Facebook">
                                                      <i aria-hidden="true" class="icon icon-facebook"></i>			</a>
                                                   </li>
                                                   <li class="elementor-repeater-item-0a9d575">
                                                      <a href="https://facebook.com/" aria-label="Twitter">
                                                      <i aria-hidden="true" class="icon icon-twitter"></i>			</a>
                                                   </li>
                                                   <li class="elementor-repeater-item-458aaba">
                                                      <a href="https://facebook.com/" aria-label="Pinterest">
                                                      <i aria-hidden="true" class="icon icon-pinterest"></i>			</a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-element elementor-element-d4fcd9f ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="d4fcd9f" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                                 <div class="elementor-widget-container">
                                    <div class="ekit-wid-con" >
                                       <!-- link opening -->
                                       <!-- end link opening -->
                                       <div class="elementskit-infobox text-center text- icon-lef-right-aligin elementor-animation-float   ">
                                          <div class="box-body">
                                             <h3 class="elementskit-info-box-title">
                                                Mr. John Doe
                                             </h3>
                                             <p>Manager</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-933fbbe e-con-full e-flex e-con e-child" data-id="933fbbe" data-element_type="container">
                        <div class="elementor-element elementor-element-f611bb0 elementor-widget elementor-widget-elementskit-team" data-id="f611bb0" data-element_type="widget" data-widget_type="elementskit-team.default">
                           <div class="elementor-widget-container">
                              <div class="ekit-wid-con">
                                 <div class="profile-image-card elementor-animation- ekit-team-img ekit-team-style-overlay text-center">
                                    <img decoding="async" src="{{ asset('assets/uploads/sites/2/elementor/thumbs/portrait-of-mature-business-woman-small-business-owner-organizing-events-parties-weddings-qkr6zm5f879wi77jqdiy5hc8zalt53fu3heh1ti728.jpg')}}" title="Portrait of mature business woman small business owner organizing events, parties, weddings" alt="Portrait of mature business woman small business owner organizing events, parties, weddings" loading="lazy" />
                                    <div class="hover-area">
                                       <div class="profile-body">
                                          <h2 class="profile-title">
                                          </h2>
                                          <p class="profile-designation"></p>
                                       </div>
                                       <div class="profile-footer">
                                          <ul class="ekit-team-social-list">
                                             <li class="elementor-repeater-item-98dae02">
                                                <a href="https://facebook.com/" aria-label="Facebook">
                                                <i aria-hidden="true" class="icon icon-facebook"></i>			</a>
                                             </li>
                                             <li class="elementor-repeater-item-0a9d575">
                                                <a href="https://facebook.com/" aria-label="Twitter">
                                                <i aria-hidden="true" class="icon icon-twitter"></i>			</a>
                                             </li>
                                             <li class="elementor-repeater-item-458aaba">
                                                <a href="https://facebook.com/" aria-label="Pinterest">
                                                <i aria-hidden="true" class="icon icon-pinterest"></i>			</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-2987b60 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="2987b60" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                           <div class="elementor-widget-container">
                              <div class="ekit-wid-con" >
                                 <!-- link opening -->
                                 <!-- end link opening -->
                                 <div class="elementskit-infobox text-center text- icon-lef-right-aligin elementor-animation-float   ">
                                    <div class="box-body">
                                       <h3 class="elementskit-info-box-title">
                                          Mrs. Cris John
                                       </h3>
                                       <p>Marketing</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-9ca77f6 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="9ca77f6" data-element_type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-button-wrapper">
                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
                        <span class="elementor-button-content-wrapper">
                        <span class="elementor-button-icon">
                        <i aria-hidden="true" class="icon icon-arrow-right"></i>			</span>
                        <span class="elementor-button-text">Discover Team</span>
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection
