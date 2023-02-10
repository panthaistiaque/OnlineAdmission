@extends('layouts.app')
@section('title', 'Welcome to Restaurant')
@section('content')
  <div id = "bootstrap-touch-slider" class = "carousel bs-slider slide  control-round indicators-line" data-ride = "carousel" data-pause = "hover" data-interval = "5000">
    <!-- Indicators -->
    <ol class = "carousel-indicators">
      <li data-target = "#bootstrap-touch-slider" data-slide-to = "0" class = "active"></li>
      <li data-target = "#bootstrap-touch-slider" data-slide-to = "1"></li>
      <li data-target = "#bootstrap-touch-slider" data-slide-to = "2"></li>
      <li data-target = "#bootstrap-touch-slider" data-slide-to = "3"></li>
      <li data-target = "#bootstrap-touch-slider" data-slide-to = "4"></li>
      <li data-target = "#bootstrap-touch-slider" data-slide-to = "5"></li>
    </ol>
    <!-- Wrapper For Slides -->
    <div class = "carousel-inner" role = "listbox">
      <!-- Second Slide -->
      <div class = "item active">
        <!-- Slide Background -->
        <img src = "/uploads/sliderimgs/{{isset($slider_photos[0])?$slider_photos[0]['photo'] : ''}}" onerror = "this.src='img/no-image.png'" alt = "Bootstrap
        Touch Slider" class = "slide-image"/>
        <div class = "bs-slider-overlay"></div>
        <!-- Slide Text Layer -->
        <div class = "slide-text slide_style_left">
          <h1 data-animation = "animated flipInX"> Welcome to Oil Free Kitchen</h1><br>
          <a href = "/menus/1" target = "_blank" class = "btn btn-default" data-animation = "animated fadeInUp">Order Now</a>
          <a href = "/menus/1" target = "_blank" class = "btn btn-primary" data-animation = "animated fadeInDown">Healthy Blog</a>
        </div>
      </div>
      <!-- End of Slide -->
      <!-- Third Slide -->
      <div class = "item">
        <!-- Slide Background -->
        <img src = "/uploads/sliderimgs/{{isset($slider_photos[1])?$slider_photos[1]['photo'] : ''}}" onerror = "this.src='img/no-image.png'" alt =
        "OilFreeKitchen" class = "slide-image"/>
        <div class = "bs-slider-overlay"></div>
        <div class = "container">
          <div class = "row">
            <!-- Slide Text Layer -->
            <div class = "slide-text slide_style_left">
              <h1 data-animation = "animated zoomInRight">Healthy Breakfast</h1><br>
              <a href = "/menus/1" target = "_blank" class = "btn btn-default" data-animation = "animated fadeInLeft">Order Now</a>
              <a href = "/blog" target = "_blank" class = "btn btn-primary" data-animation = "animated fadeInRight">Healty Blog</a>
            </div>
          </div>
        </div>
      </div>
      <div class = "item">
        <!-- Slide Background -->
        <img src = "/uploads/sliderimgs/{{isset($slider_photos[2])?$slider_photos[2]['photo'] : ''}}" onerror = "this.src='img/no-image.png'" alt =
        "OilFreeKitchen" class = "slide-image"/>
        <div class = "bs-slider-overlay"></div>
        <div class = "container">
          <div class = "row">
            <!-- Slide Text Layer -->
            <div class = "slide-text slide_style_left">
              <h1 data-animation = "animated zoomInRight">Healthy Lunch & Dinner</h1><br>
              <a href = "/menus/1" target = "_blank" class = "btn btn-default" data-animation = "animated fadeInLeft">Order Now</a>
              <a href = "/blog" target = "_blank" class = "btn btn-primary" data-animation = "animated fadeInRight">Healty Blog</a>
            </div>
          </div>
        </div>
      </div>
      <div class = "item">
        <!-- Slide Background -->
        <img src = "/uploads/sliderimgs/{{isset($slider_photos[3])?$slider_photos[3]['photo'] : ''}}" onerror = "this.src='img/no-image.png'" alt =
        "Bootstrap Touch Slider" class = "slide-image"/>
        <div class = "bs-slider-overlay"></div>
        <!-- Slide Text Layer -->
        <div class = "slide-text slide_style_right">
          <h1 data-animation = "animated zoomInLeft">Healthy Diet</h1>
          <h6 style="color:#FFF" data-animation = "animated fadeInRight"><span style="background-color:#0000007a">Price will be Based on Diet plan</span></h6>
          <a href = "/menus/1" target = "_blank" class = "btn btn-default" data-animation = "animated fadeInLeft">Order Now</a>
          <a href = "/menus/1" target = "_blank" class = "btn btn-primary" data-animation = "animated fadeInRight">Healty Blog</a>
        </div>
      </div>
      <div class = "item">
        <!-- Slide Background -->
        <img src = "/uploads/sliderimgs/{{isset($slider_photos[4])?$slider_photos[4]['photo'] : ''}}" onerror = "this.src='img/no-image.png'" alt =
        "OilFreeKitchen" class = "slide-image"/>
        <div class = "bs-slider-overlay"></div>
        <div class = "container">
          <div class = "row">
            <!-- Slide Text Layer -->
            <div class = "slide-text slide_style_left">
              <h1 data-animation = "animated zoomInRight">Disease Based</h1>
              <h6 style="color:#FFF" data-animation = "animated fadeInLeft"><span style="background-color:#0000007a">Test report is mandatory</span></h6>
              <a href = "/menus/1" target = "_blank" class = "btn btn-default" data-animation = "animated fadeInLeft">Order Now</a>
              <a href = "/blog" target = "_blank" class = "btn btn-primary" data-animation = "animated fadeInRight">Healty Blog</a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- End of Slide -->
      <!-- Third Slide -->
      <div class = "item">
        <!-- Slide Background -->
        <img src = "/uploads/sliderimgs/{{isset($slider_photos[5])?$slider_photos[5]['photo'] : ''}}" onerror = "this.src='img/no-image.png'" alt =
        "OilFreeKitchen" class = "slide-image"/>
        <div class = "bs-slider-overlay"></div>
        <div class = "container">
          <div class = "row">
            <!-- Slide Text Layer -->
            <div class = "slide-text slide_style_left">
              <h1 data-animation = "animated zoomInRight">Moms Food</h1><br>
              <a href = "/menus/1" target = "_blank" class = "btn btn-default" data-animation = "animated fadeInLeft">Order Now</a>
              <a href = "/blog" target = "_blank" class = "btn btn-primary" data-animation = "animated fadeInRight">Healty Blog</a>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Slide -->
    </div><!-- End of Wrapper For Slides -->
    <!-- Left Control -->
    <a class = "left carousel-control" href = "#bootstrap-touch-slider" role = "button" data-slide = "prev">
      <span class = "fa fa-angle-left" aria-hidden = "true"></span>
      <span class = "sr-only">Previous</span>
    </a>
    <!-- Right Control -->
    <a class = "right carousel-control" href = "#bootstrap-touch-slider" role = "button" data-slide = "next">
      <span class = "fa fa-angle-right" aria-hidden = "true"></span>
      <span class = "sr-only">Next</span>
    </a>
  </div> <!-- End  bootstrap-touch-slider Slider -->

  <div id = "post-547" class = "container post-547 page type-page status-publish hentry">
    <div class = "row vincent_no_sidebar vincent_images_circle">
      <div class = "col-md-12">
        <div class = "vincent_tiny">
          <div class = "vc_row-full-width vc_clearfix"></div>
          <div data-vc-full-width = "true" data-vc-full-width-init = "false" class = "vc_row wpb_row vc_row-fluid vc_custom_1492087869655 vincent_corners_bottom vc_row-has-fill">
            <div class = "wpb_column vc_column_container vc_col-sm-4">
              <div class = "vc_column-inner ">
                <div class = "wpb_wrapper">
                  <div class = "vincent_vc_iconbox  vincent_js_bg_color" data-bgcolor = "transparent">
                    <div class = "vincent_iconbox_icon_cont icon_align_center">
                      <img src = "img/icon_1.png" alt = ""/>
                    </div>
                    <div class = "vincent_iconbox_heading_cont heading_align_center">
                      <h6 style="color:#FFF" class = "vincent_js_color" data-color = "#121618">
                        Quality Foods
                      </h6>
                    </div>
                    <div class = "vincent_iconbox_text_cont text_heading_center">
                      <p class = "vincent_js_color" data-color = "#121618">Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class = "wpb_column vc_column_container vc_col-sm-4">
              <div class = "vc_column-inner ">
                <div class = "wpb_wrapper">
                  <div class = "vincent_vc_iconbox  vincent_js_bg_color" data-bgcolor = "transparent">
                    <div class = "vincent_iconbox_icon_cont icon_align_center">
                      <img src = "img/icon_3.png" alt = ""/>
                    </div>
                    <div class = "vincent_iconbox_heading_cont heading_align_center">
                      <h6 style="color:#FFF" class = "vincent_js_color" data-color = "#121618">
                        Fastest Delivery
                      </h6>
                    </div>
                    <div class = "vincent_iconbox_text_cont text_heading_center">
                      <p class = "vincent_js_color" data-color = "#121618">Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class = "wpb_column vc_column_container vc_col-sm-4">
              <div class = "vc_column-inner ">
                <div class = "wpb_wrapper">
                  <div class = "vincent_vc_iconbox  vincent_js_bg_color" data-bgcolor = "transparent">
                    <div class = "vincent_iconbox_icon_cont icon_align_center">
                      <img src = "img/heart-outline.png" alt = ""/>
                    </div>
                    <div class = "vincent_iconbox_heading_cont heading_align_center">
                      <h6 style="color:#FFF" class = "vincent_js_color" data-color = "#121618">
                        Healthy Foods
                      </h6>
                    </div>
                    <div class = "vincent_iconbox_text_cont text_heading_center">
                      <p class = "vincent_js_color" data-color = "#121618">A healthy foods can be good for your heart as well as your waistline.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class = "vc_row-full-width vc_clearfix"></div>
          <div class = "vc_row wpb_row vc_row-fluid">
            <div class = "wpb_column vc_column_container vc_col-sm-12">
              <div class = "vc_column-inner ">
                <div class = "wpb_wrapper">
                  <h2 style = "text-align: center" class = "vc_custom_heading vc_custom_1489677499653">Hot Sales</h2>
                  <div class = "vc_row wpb_row vc_inner vc_row-fluid vc_custom_1489743420906">
                    @foreach($menu_items as $menu_item)
                      <div class = "wpb_column vc_column_container vc_col-sm-3">
                        <div class = "vc_column-inner ">
                          <div class = "wpb_wrapper">
                            <div class = "woocommerce ">
                              <ul class = "products columns-2">
                                <li class = "post-583 product type-product status-publish has-post-thumbnail product_cat-pizzas product_tag-pizza first instock shipping-taxable purchasable product-type-simple">
                                  <a href = "/menu/{{$menu_item['id']}}" class = "woocommerce-LoopProduct-link
                                  woocommerce-loop-product__link">
                                    <img width = "300" height = "300" src = "/uploads/items/{{$menu_item['photo']}}" onerror = "this.src='img/no-image.png'"/>
                                    <h2 class = "woocommerce-loop-product__title">{{$menu_item['name']}}</h2>
                                    <p class = "vincent_prod_excerpt">
                                      {{sizeof($menu_item['description']) > 0 ? $menu_item['description'] : 'No Description
                                      Available'}}
                                    </p>
                                    <span class = "price"><span class = "woocommerce-Price-amount amount"><span class = "woocommerce-Price-currencySymbol">৳</span>{{$menu_item['price']}}</span></span>
                                    <div class = "vincent_ingredients_field">
                                      <span>Salmon, walnut pesto</span>
                                    </div>
                                  </a>
                                  <a href = "#" data-quantity = "1" class = "button product_type_simple add_to_cart_button
                                  ajax_add_to_cart" data-product_id = "583" data-product_sku = "A599-C" aria-label = "Add &ldquo;Carbonara&rdquo; to your cart" rel = "nofollow">Add to cart</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div data-vc-full-width = "true" data-vc-full-width-init = "false" class = "vc_row wpb_row vc_row-fluid
          vc_custom_1489744065436 vc_row-has-fill">
            <div class = "wpb_column vc_column_container vc_col-sm-6">
              <div class = "vc_column-inner vc_custom_1489743552413">
                <div class = "wpb_wrapper">
                  <h1 style = "color: #121618;text-align: left" class = "vc_custom_heading vc_custom_1489743693917">We Are Legend</h1>
                  <h6 style = "color: #121618;line-height: 32px;text-align: left" class = "vc_custom_heading vc_custom_1489743721499">Yes, we are the one and only Proponent of “oil Free Foods” in Bangladesh. And we started catering and home delivery service for perfect, safe, healthy, and delicious oil free food for the first time ever in Bangladesh.</h6>
                  <div class = "wpb_single_image wpb_content_element vc_align_left  vc_custom_1489743761202">
                    <figure class = "wpb_wrapper vc_figure">
                      <div class = "vc_single_image-wrapper   vc_box_border_grey">
                        <img width = "212" height = "9" src = "img/separator.png" class = "vc_single_image-img attachment-full" alt = ""/>
                      </div>
                    </figure>
                  </div>
                  <div class = "wpb_text_column wpb_content_element ">
                    <div class = "wpb_wrapper">
                      <p>
                        <span style = "color: #121618"> For better health benefits of health conscious people it’s a great breakthrough and a social revolution as well. ‘Oil Free Kitchen’ of “SAAOL HEART CENTER BANGLADESH” wants to change Bangladeshi people’s unhygienic food habit of risky oily foods. That’s why “Oil Free Kitchen” wants to provide you your desired ‘oil less food’ at your doorstep for your daily needs and events as well. For safety of health there is no alternative to 'oil free kitchen.</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class = "wpb_column vc_column_container vc_col-sm-6">
              <div class = "vc_column-inner vc_custom_1489743877394" style = "text-align: center;">
                <div class = "wpb_wrapper">
                  <img src = "img/chefff.png" style = "max-height: 520px;"/>
                </div>
              </div>
            </div>
          </div>
          <div class = "vc_row-full-width vc_clearfix"></div>
          <div>
            <div class = "container res-nav-tabs" id = "homeVue" xmlns:v-bind = "http://www.w3.org/1999/xhtml">
              <h2 style = "text-align: center" class = "vc_custom_heading vc_custom_1489677499653">Our Menu</h2>
              <br/>
              <div class = "panel-heading">
                <ul class = "nav nav-tabs">
                  @foreach($menu_categories as $menu_category)
                    <li @if($menu_category['id'] == 1) class = "active" @endif>
                      <a href = "#{{$menu_category['name']}}" data-toggle =
                      "tab">{{$menu_category['name']}}</a></li>
                  @endforeach
                </ul>
              </div>
              <div class = "panel-body">
                <div class = "tab-content">
                  @foreach($menu_categories as $menu_category)
                    <div class = "tab-pane fade @if($menu_category['id'] == 1) in active @endif " id = "{{$menu_category['name']}}">
                      <div id = "post-727" class = "container post-727 page type-page status-publish hentry">
                        <div class = "row vincent_no_sidebar vincent_images_circle">
                          <div class = "col-md-12 vincent_content">
                            <div class = "vincent_tiny">
                              <div class = "vc_row wpb_row vc_row-fluid">
                                <div class = "wpb_column vc_column_container vc_col-sm-12">
                                  <div class = "vc_column-inner ">
                                    <div class = "wpb_wrapper">
                                      <div class = "pm_vc_product_listing  vc_custom_1490179648642">
                                        <div class = "vincent_prod_output_container vincent_prod_listing_15327891289743 columns_4 view_type_1">
                                          @foreach($menu_category['menu_items_table'] as $menu_item)
                                            <div class = "vincent_prod_list_item">
                                              <div class = "vincent_prod_item_wrapper">
                                                <div class = "vincent_prod_list_image_cont">
                                                  <div class = "vincent_prod_list_image_wrapper">
                                                    <a href = "#" class = "vincent_prod_image_link">
                                                      <span class = "vincent_prod_list_overlay"></span>
                                                      <img src = "/uploads/items/{{$menu_item['photo']}}" onerror = "this
                                                      .src='img/no-image.png'" alt = "">
                                                    </a>
                                                    <p class = "product woocommerce add_to_cart_inline " style = "border: none;">
                                        <span class = "woocommerce-Price-amount amount"><span class =
                                          "woocommerce-Price-currencySymbol">৳</span>{{$menu_item['price']}}</span>
                                                      <a href = "#" class = "button product_type_simple add_to_cart_button" aria-label = "Add “{{$menu_item['name']}}” to your cart" @click = "addOrderItem({{$menu_item}})">Add to cart</a>
                                                      <a href = "/cart" class = "added_to_cart wc-forward" title = "View cart">View cart</a>
                                                    </p>
                                                  </div>
                                                </div>
                                                <h5>
                                                  <a href = "/menu/{{$menu_item['id']}}">{{$menu_item['name']}}</a>
                                                </h5>
                                                <p class = "vincent_prod_list_excerpt">
                                                  {{sizeof($menu_item['description']) > 0 ? $menu_item['description'] : 'No
                                                  Description Available'}}
                                                </p>
                                                <div class = "vincent_prod_list_price">
                                                  <p class = "product woocommerce add_to_cart_inline " style = "border: none;">
                                                    <span class = "woocommerce-Price-amount amount"><span class = "woocommerce-Price-currencySymbol">৳</span>{{$menu_item['price']}}</span>
                                                    <a href = "/" data-quantity = "1" class = "button product_type_simple add_to_cart_button" aria-label = "Add “” to your cart" rel = "nofollow">Add to cart</a>
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                          @endforeach
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
                  @endforeach
                </div>
              </div>
            </div>
            {{--<div data-vc-full-width = "true" data-vc-full-width-init = "false" class = "vc_row wpb_row vc_row-fluid vc_custom_1490193190451 vc_row-has-fill">
              <div class = "wpb_column vc_column_container vc_col-sm-12">
                <div class = "vc_column-inner ">
                  <div class = "wpb_wrapper">
                    <h6 style = "color: #121618;text-align: center" class = "vc_custom_heading vc_custom_1490178054254">Not just a pizza, but Lifestyle</h6>
                    <h1 style = "color: #121618;text-align: center" class = "vc_custom_heading vc_custom_1490178109710">Something From the Blog</h1>
                    <div class = "wpb_single_image wpb_content_element vc_align_center  vc_custom_1490178142567">
                      <figure class = "wpb_wrapper vc_figure">
                        <div class = "vc_single_image-wrapper   vc_box_border_grey">
                          <img width = "212" height = "9" src = "http://pixel-mafia.com/demo/wordpress-themes/vincent/wp-content/uploads/sites/3/2017/02/separator_dark.png" class = "vc_single_image-img attachment-full" alt = ""/>
                        </div>
                      </figure>
                    </div>
                    <div class = "wpb_text_column wpb_content_element  vc_custom_1490192700497">
                      <div class = "wpb_wrapper">
                        <p style = "text-align: center">
                          <span style = "color: #121618">And yes, we’re pizza people. But we’re also human people, we lead with our hearts, we believe in giving back to the global community. Join us, welcome to Our Blog!</span>
                        </p>
                      </div>
                    </div>
                    <div class = "vincent_element_wrap vincent_element_blog blog_type_simple   vc_custom_1491481430133 columns_4">
                      <div class = "vincent_blog_wrapper ">
                        <div class = "simple_post_item">
                          <div class = "vincent_post_wrapper vincent_js_color" data-color = "#121618">
                            <div class = "vincent_post_date">
                              April 6, 2017
                            </div>
                            <h5 class = "vincent_post_title vincent_js_color" data-color = "#121618">
                              Healsy Food for healthy body
                            </h5>
                            <div class = "vincent_post_excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit donec vel venenatis purus fusce pretium...
                            </div>
                            <a class = "vincent_simple_post_read_more_button"
                                href = "http://pixel-mafia.com/demo/wordpress-themes/vincent/2017/04/06/healsy-food-for-healthy-body-4/"
                                data-color = "#121618"
                                data-hover = "#ffffff"
                                data-bg-color = "transparent"
                                data-bg-hover = "#121618"
                                data-border-color = "#121618"
                                data-border-hover = "#121618"
                            >
                              Read More
                              <i class = "fa fa-angle-right"></i>
                            </a>
                          </div>
                        </div>
                        <div class = "simple_post_item">
                          <div class = "vincent_post_wrapper vincent_js_color" data-color = "#121618">
                            <div class = "vincent_post_date">
                              April 6, 2017
                            </div>
                            <h5 class = "vincent_post_title vincent_js_color" data-color = "#121618">
                              food design trends 2016
                            </h5>
                            <div class = "vincent_post_excerpt">
                              Consectetur adipiscing elit donec vel venenatis purus fusce pretium enim amet faucibus bibendum,...
                            </div>
                            <a class = "vincent_simple_post_read_more_button"
                                href = "http://pixel-mafia.com/demo/wordpress-themes/vincent/2017/04/06/food-design-trends-2016-6/"
                                data-color = "#121618"
                                data-hover = "#ffffff"
                                data-bg-color = "transparent"
                                data-bg-hover = "#121618"
                                data-border-color = "#121618"
                                data-border-hover = "#121618"
                            >
                              Read More
                              <i class = "fa fa-angle-right"></i>
                            </a>
                          </div>
                        </div>
                        <div class = "simple_post_item">
                          <div class = "vincent_post_wrapper vincent_js_color" data-color = "#121618">
                            <div class = "vincent_post_date">
                              April 6, 2017
                            </div>
                            <h5 class = "vincent_post_title vincent_js_color" data-color = "#121618">
                              3 Ingredient Fettuccine Alfredo
                            </h5>
                            <div class = "vincent_post_excerpt">
                              Elit donec vel venenatis purus fusce pretium amet faucibus bibendum, ligula augue accumsan...
                            </div>
                            <a class = "vincent_simple_post_read_more_button"
                                href = "http://pixel-mafia.com/demo/wordpress-themes/vincent/2017/04/06/3-ingredient-fettuccine-alfredo/"
                                data-color = "#121618"
                                data-hover = "#ffffff"
                                data-bg-color = "transparent"
                                data-bg-hover = "#121618"
                                data-border-color = "#121618"
                                data-border-hover = "#121618"
                            >
                              Read More
                              <i class = "fa fa-angle-right"></i>
                            </a>
                          </div>
                        </div>
                        <div class = "simple_post_item">
                          <div class = "vincent_post_wrapper vincent_js_color" data-color = "#121618">
                            <div class = "vincent_post_date">
                              April 6, 2017
                            </div>
                            <h5 class = "vincent_post_title vincent_js_color" data-color = "#121618">
                              Kitchen Essentials Giveaway!
                            </h5>
                            <div class = "vincent_post_excerpt">
                              Fusce pretium enim amet faucibus bibendum, ligula augue accumsan magna, eget congue nibh est...
                            </div>
                            <a class = "vincent_simple_post_read_more_button"
                                href = "http://pixel-mafia.com/demo/wordpress-themes/vincent/2017/04/06/kitchen-essentials-giveaway/"
                                data-color = "#121618"
                                data-hover = "#ffffff"
                                data-bg-color = "transparent"
                                data-bg-hover = "#121618"
                                data-border-color = "#121618"
                                data-border-hover = "#121618"
                            >
                              Read More
                              <i class = "fa fa-angle-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>--}}
            <div data-vc-full-width = "true" data-vc-full-width-init = "true" class = "vc_row wpb_row vc_row-fluid vc_custom_1492087869655  vincent_corners_bottom vc_row-has-fill" style = "margin-bottom:0px!important">
              <div class = "wpb_column vc_column_container vc_col-sm-12">
                <div class = "vc_column-inner ">
                  <div class = "wpb_wrapper">
                    <h2 style = "color: #121618;text-align: center" class = "vc_custom_heading vc_custom_1490178109710">Our Services</h2>
                    <div class = "wpb_single_image wpb_content_element vc_align_center  vc_custom_1490178142567">
                      <figure class = "wpb_wrapper vc_figure">
                        <div class = "vc_single_image-wrapper   vc_box_border_grey">
                          <img width = "212" height = "9" src = "http://d3jdqrr9zagk0s.cloudfront.net/demo/wordpress-themes/vincent/wp-content/uploads/sites/3/2017/02/separator_dark.png" class = "vc_single_image-img attachment-full" alt = "">
                        </div>
                      </figure>
                    </div>
                    <div class = " vc_col-sm-4">
                      <div class = "vc_column-inner ">
                        <div class = "wpb_wrapper">
                          <div class = "vincent_vc_iconbox  vincent_js_bg_color" data-bgcolor = "transparent">
                            <div class = "vincent_iconbox_icon_cont icon_align_center">
                              <img src = "img/icon_3.png" alt = ""/>
                            </div>
                            <div class = "vincent_iconbox_heading_cont heading_align_center">
                              <h6 style="color:#FFF" class = "vincent_js_color" data-color = "#121618">
                                Catering Services
                              </h6>
                            </div>
                            <div class = "vincent_iconbox_text_cont text_heading_center">
                              <p class = "vincent_js_color" data-color = "#121618">Whether it’s an in-house staff party, meeting, training, seminar, workshop, dealers’ meet up, annual general meeting or convention of any size and anywhere in the city, we are always armed with the right weaponry required to make your food journey a fabulous one.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class = "wpb_column vc_column_container vc_col-sm-4">
                      <div class = "vc_column-inner ">
                        <div class = "wpb_wrapper">
                          <div class = "vincent_vc_iconbox  vincent_js_bg_color" data-bgcolor = "transparent">
                            <div class = "vincent_iconbox_icon_cont icon_align_center">
                              <img src = "img/icon_phone.png" alt = ""/>
                            </div>
                            <div class = "vincent_iconbox_heading_cont heading_align_center">
                              <h6 style="color:#FFF" class = "vincent_js_color" data-color = "#121618">
                                Call to Order
                              </h6>
                            </div>
                            <div class = "vincent_iconbox_text_cont text_heading_center">
                              <p class = "vincent_js_color" data-color = "#121618">Call us for more information about our catering services.
                                <b>01781 950 544</b></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class = "wpb_column vc_column_container vc_col-sm-4">
                      <div class = "vc_column-inner ">
                        <div class = "wpb_wrapper">
                          <div class = "vincent_vc_iconbox  vincent_js_bg_color" data-bgcolor = "transparent">
                            <div class = "vincent_iconbox_icon_cont icon_align_center">
                              <img src = "img/icon_1.png" alt = ""/>
                            </div>
                            <div class = "vincent_iconbox_heading_cont heading_align_center">
                              <h6 style="color:#FFF" class = "vincent_js_color" data-color = "#121618">
                                Social Event Catering
                              </h6>
                            </div>
                            <div class = "vincent_iconbox_text_cont text_heading_center">
                              <p class = "vincent_js_color" data-color = "#121618">Life is full of occasions and celebrations. Scrumptious food makes these events long-lasting. YES, we proudly deliver super delicious food and fabulous service.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{--<div>
              <div data-vc-full-width = "true" data-vc-full-width-init = "false" class = "vc_row wpb_row vc_row-fluid vc_custom_1490193190451 vc_row-has-fill">
                <div class = "wpb_column vc_column_container vc_col-sm-12">
                  <div class = "vc_column-inner ">
                    <div class = "wpb_wrapper">
                      <h6 style = "color: #121618;text-align: center" class = "vc_custom_heading vc_custom_1490178054254">-</h6>
                      <h1 style = "color: #121618;text-align: center" class = "vc_custom_heading vc_custom_1490178109710">Blog</h1>
                      <div class = "wpb_single_image wpb_content_element vc_align_center  vc_custom_1490178142567">
                        <figure class = "wpb_wrapper vc_figure">
                          <div class = "vc_single_image-wrapper   vc_box_border_grey">
                            <img width = "212" height = "9" src = "http://pixel-mafia.com/demo/wordpress-themes/vincent/wp-content/uploads/sites/3/2017/02/separator_dark.png" class = "vc_single_image-img attachment-full" alt = ""/>
                          </div>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @include('blog.article')
            </div>--}}
            <div class = "vc_row-full-width vc_clearfix"></div>
            <div data-vc-full-width = "true" data-vc-full-width-init = "false" class = "wpb_row vc_row-fluid vc_row-has-fill">
              <div class = "wpb_column vc_column_container vc_col-sm-12">
                <div class = "vc_column-inner ">
                  <div class = "wpb_wrapper" style = "margin-bottom:60px!important">
                    <h6 style = "color: #121618;line-height: 32px;text-align: center" class = "vc_custom_heading
                    vc_custom_1488274086651">Not just a restaurant, but Lifestyle</h6>
                    <h1 style = "color: #121618;text-align: center" class = "vc_custom_heading vc_custom_1488274124209">Our Clients say</h1>
                    <div class = "wpb_single_image wpb_content_element vc_align_center  vc_custom_1488274147294">
                      <figure class = "wpb_wrapper vc_figure">
                        <div class = "vc_single_image-wrapper   vc_box_border_grey">
                          <img width = "212" height = "9" src = "http://pixel-mafia.com/demo/wordpress-themes/vincent/wp-content/uploads/sites/3/2017/02/separator_dark.png" class = "vc_single_image-img attachment-full" alt = ""/>
                        </div>
                      </figure>
                    </div>
                    <div class = "vincent_testimonials_slider vincent_owlCarousel owl-carousel owl-theme  vc_custom_1488277086560" data-autoplay = "true" data-speed = "5000">
                      @foreach($cilent_says as $cilent_say)
                        <div class = "vincent_testimonials_item ">
                          <div class = "vincent_testimonials_item_inner">
                            <p class = "vincent_testimonials_content vincent_js_color" data-color = "#121618">
                              {{$cilent_say['writings']}}
                            </p>
                            <div class = "vincent_testimonials_author_cont vincent_js_color" data-color = "#121618">
                              <img src = "/uploads/sliderimgs/{{$cilent_say['photo']}}" onerror = "this.src='img/no-image.png'" alt = "" class = "vincent_testimonials_img"/>
                              <span class = "vincent_testimonial_author">{{$cilent_say['name']}}</span>
                              <br>
                              <span class = "vincent_author_position">{{$cilent_say['address']}}</span>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-vc-full-width = "true" data-vc-full-width-init = "true" class = "vc_row wpb_row vc_row-fluid vc_custom_1490193190451 vc_row-has-fill" style = "position: relative; left: -61.5px; box-sizing: border-box; width: 1293px; padding-left: 61.5px; padding-right: 61.5px;margin-bottom:0px!important">
              <div class = "wpb_column vc_column_container vc_col-sm-12">
                <div class = "vc_column-inner ">
                  <div class = "wpb_wrapper">
                    <h6 style = "color: #121618;text-align: center" class = "vc_custom_heading vc_custom_1490178054254">Not just a restaurant, but Lifestyle</h6>
                    <h1 style = "color: #121618;text-align: center" class = "vc_custom_heading vc_custom_1490178109710">Something For Your Healthy Life</h1>
                    <div class = "wpb_single_image wpb_content_element vc_align_center  vc_custom_1490178142567">
                      <figure class = "wpb_wrapper vc_figure">
                        <div class = "vc_single_image-wrapper   vc_box_border_grey">
                          <img width = "212" height = "9" src = "http://d3jdqrr9zagk0s.cloudfront.net/demo/wordpress-themes/vincent/wp-content/uploads/sites/3/2017/02/separator_dark.png" class = "vc_single_image-img attachment-full" alt = "">
                        </div>
                      </figure>
                    </div>
                    <div class = "wpb_text_column wpb_content_element  vc_custom_1490192700497">
                      <div class = "wpb_wrapper">
                        <p style = "text-align: center">
                          <span style = "color: #121618">And yes, we’re people. But we’re also human people, we lead with our hearts, we believe in giving back to the global community. Join us, welcome to Our Blog!</span>
                        </p>
                      </div>
                    </div>
                    @include('blog.article2')
                  </div>
                </div>
              </div>
            </div>
            <div class = "vc_row-full-width vc_clearfix"></div>
            {{--<div class = "vc_row wpb_row vc_row-fluid">
              <div class = "wpb_column vc_column_container vc_col-sm-12">
                <div class = "vc_column-inner " style = "padding-top: 95px;">
                  <div class = "wpb_wrapper">
                    <h1 style = "text-align: center" class = "vc_custom_heading vc_custom_1490195034270">Subscribe for Our Newsletter</h1>
                    <div class = "wpb_text_column wpb_content_element  vc_custom_1490195643194">
                      <div class = "wpb_wrapper">
                        <p style = "text-align: center"></p>
                        <div class = "wpcf7">
                          {!! Form::open(['route' => ['newsletter.subscribe'], 'id'=>'newsletterForm', 'v-on:submit.prevent =
                          "onNewsletterFormSubmit"', 'class' => 'wpcf7-form']) !!}
                          <div class = "vincent_subscribe_form">
                            <div class = "vincent_form_wrapper">
                            <span class = "wpcf7-form-control-wrap your-name">
                              <input type = "text" name = "email" size = "40" class = "wpcf7-form-control wpcf7-text
                              wpcf7-validates-as-required" aria-required = "true" aria-invalid = "false" placeholder = "Enter
                              Your Email" required v-model = "newsletter.email"/></span><br/>
                              <button type = "submit" class = "wpcf7-form-control wpcf7-submit button_submit" v-bind:disabled =
                              "isSubmitBtnDisabled">Submit&nbsp;<i v-bind:class = "[isSubmitBtnDisabled ? 'fa fa-spinner fa-spin' :
                            'fa fa-flash']" aria-hidden = "true"></i>
                              </button>
                            </div>
                            <div class = "statusDiv">
                              <div v-bind:class = "[statusDivClass]" v-for = "statusMsgs in statusMsgforSubmit">
                                <button type = 'button' class = 'close' data-dismiss = 'alert' aria-hidden = 'true'>&times;</button>
                                <p v-html = "statusMsgs"></p>
                              </div>
                            </div>
                          </div>
                          {!! Form::close() !!}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>--}}
          </div>
          <div data-vc-full-width = "true" data-vc-full-width-init = "false" data-vc-stretch-content = "true" class = "vc_row wpb_row vc_row-fluid vc_row-no-padding">
            <div class = "wpb_column vc_column_container vc_col-sm-12">
              <div class = "vc_column-inner ">
                <div class = "wpb_wrapper">
                  <div class = "vincent_vc_custom_map  vc_custom_1493727406488 vincent_js_height" data-height = "470">
                    <script src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAk642gPer5tw4ANVC3Aj6FzwjDkYgjEgc"></script>
                    <script>
                        function initialize(){
                            var styleArray = [
                                {
                                    "featureType" : "all",
                                    "elementType" : "labels.text.fill",
                                    "stylers"     : [
                                        {
                                            "saturation" : 36
                                        },
                                        {
                                            "color" : "#000000"
                                        },
                                        {
                                            "lightness" : 40
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "all",
                                    "elementType" : "labels.text.stroke",
                                    "stylers"     : [
                                        {
                                            "visibility" : "on"
                                        },
                                        {
                                            "color" : "#000000"
                                        },
                                        {
                                            "lightness" : 16
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "all",
                                    "elementType" : "labels.icon",
                                    "stylers"     : [
                                        {
                                            "visibility" : "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "administrative",
                                    "elementType" : "geometry.fill",
                                    "stylers"     : [
                                        {
                                            "color" : "#35383d"
                                        },
                                        {
                                            "lightness" : "0"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "administrative",
                                    "elementType" : "geometry.stroke",
                                    "stylers"     : [
                                        {
                                            "color" : "#000000"
                                        },
                                        {
                                            "lightness" : 17
                                        },
                                        {
                                            "weight" : 1.2
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "administrative",
                                    "elementType" : "labels",
                                    "stylers"     : [
                                        {
                                            "visibility" : "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "administrative.country",
                                    "elementType" : "all",
                                    "stylers"     : [
                                        {
                                            "visibility" : "simplified"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "administrative.country",
                                    "elementType" : "geometry",
                                    "stylers"     : [
                                        {
                                            "visibility" : "simplified"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "administrative.country",
                                    "elementType" : "labels.text",
                                    "stylers"     : [
                                        {
                                            "visibility" : "simplified"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "administrative.province",
                                    "elementType" : "all",
                                    "stylers"     : [
                                        {
                                            "visibility" : "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "administrative.locality",
                                    "elementType" : "all",
                                    "stylers"     : [
                                        {
                                            "visibility" : "simplified"
                                        },
                                        {
                                            "saturation" : "-100"
                                        },
                                        {
                                            "lightness" : "30"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "administrative.neighborhood",
                                    "elementType" : "all",
                                    "stylers"     : [
                                        {
                                            "visibility" : "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "administrative.land_parcel",
                                    "elementType" : "all",
                                    "stylers"     : [
                                        {
                                            "visibility" : "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "landscape",
                                    "elementType" : "all",
                                    "stylers"     : [
                                        {
                                            "visibility" : "simplified"
                                        },
                                        {
                                            "gamma" : "0.00"
                                        },
                                        {
                                            "lightness" : "74"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "landscape",
                                    "elementType" : "geometry",
                                    "stylers"     : [
                                        {
                                            "color" : "#000000"
                                        },
                                        {
                                            "lightness" : 20
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "landscape",
                                    "elementType" : "geometry.fill",
                                    "stylers"     : [
                                        {
                                            "color" : "#35383d"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "landscape.man_made",
                                    "elementType" : "all",
                                    "stylers"     : [
                                        {
                                            "lightness" : "3"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "poi",
                                    "elementType" : "all",
                                    "stylers"     : [
                                        {
                                            "visibility" : "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "poi",
                                    "elementType" : "geometry",
                                    "stylers"     : [
                                        {
                                            "color" : "#000000"
                                        },
                                        {
                                            "lightness" : 21
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "poi.government",
                                    "elementType" : "geometry.fill",
                                    "stylers"     : [
                                        {
                                            "color" : "#ff0000"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "road",
                                    "elementType" : "geometry",
                                    "stylers"     : [
                                        {
                                            "visibility" : "simplified"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "road.highway",
                                    "elementType" : "geometry.fill",
                                    "stylers"     : [
                                        {
                                            "color" : "#2a2d32"
                                        },
                                        {
                                            "lightness" : "0"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "road.highway",
                                    "elementType" : "geometry.stroke",
                                    "stylers"     : [
                                        {
                                            "color" : "#000000"
                                        },
                                        {
                                            "lightness" : 29
                                        },
                                        {
                                            "weight" : 0.2
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "road.arterial",
                                    "elementType" : "geometry",
                                    "stylers"     : [
                                        {
                                            "color" : "#000000"
                                        },
                                        {
                                            "lightness" : 18
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "road.arterial",
                                    "elementType" : "geometry.fill",
                                    "stylers"     : [
                                        {
                                            "color" : "#2a2d32"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "road.local",
                                    "elementType" : "geometry",
                                    "stylers"     : [
                                        {
                                            "color" : "#000000"
                                        },
                                        {
                                            "lightness" : 16
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "road.local",
                                    "elementType" : "geometry.fill",
                                    "stylers"     : [
                                        {
                                            "color" : "#2a2d32"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "transit",
                                    "elementType" : "geometry",
                                    "stylers"     : [
                                        {
                                            "color" : "#000000"
                                        },
                                        {
                                            "lightness" : 19
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "transit",
                                    "elementType" : "geometry.fill",
                                    "stylers"     : [
                                        {
                                            "color" : "#35383d"
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "water",
                                    "elementType" : "geometry",
                                    "stylers"     : [
                                        {
                                            "color" : "#000000"
                                        },
                                        {
                                            "lightness" : 17
                                        }
                                    ]
                                },
                                {
                                    "featureType" : "water",
                                    "elementType" : "geometry.fill",
                                    "stylers"     : [
                                        {
                                            "color" : "#272a2f"
                                        }
                                    ]
                                }
                            ];
                            var myLatlng   = new google.maps.LatLng(23.746849, 90.401669);
                            var point1     = new google.maps.LatLng(23.746849, 90.401669);
                            var icon       = "img/marker-01.png"
                            var mapOptions = {
                                zoom        : 16,
                                scrollwheel : false,
                                center      : myLatlng,
                                mapTypeId   : google.maps.MapTypeId.ROADMAP,
                                styles      : styleArray
                            };
                            var map        = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
                            var marker     = new google.maps.Marker({
                                position : point1,
                                map      : map,
                                title    : 'Oil Free Kitchen!',
                                icon     : icon
                            });
                        }

                        google.maps.event.addDomListener(window, "load", initialize);
                    </script>
                    <div id = "map-canvas" class = "canvas_map_container"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class = "vc_row-full-width vc_clearfix"></div>
        </div>
        <div class = "vincent_subtiny">
        </div>
        <div class = "vincent_comments_cont">
        </div>
      </div>
    </div>
  </div>
  <script>
      new Vue({
          el      : '#homeVue',
          data    : {
              cart                : JSON.parse(window.localStorage.getItem('cart')) && JSON.parse(window.localStorage
                  .getItem('cart')).items && _.size(JSON.parse(window.localStorage
                  .getItem('cart')).items) > 0 ? JSON.parse(window.localStorage
                  .getItem('cart')) : {
                  items : {},
              },
              totalItems          : 0,
              totalPrice          : 0.00,
              isSubmitBtnDisabled : false,
              statusMsgforSubmit  : [],
              statusDivClass      : 'alert-json-error',
              newsletter          : {
                  email : ''
              },
          },
          methods : {
              /**
               *-----------------------------------------------------
               *| Show Edit Student Modal:
               *|----------------------------------------------------
               */
              addOrderItem : function (data){
                  //window.localStorage.removeItem('cart');
                  //window.localStorage.clear();
                  console.log('addOrderItem: ', data, JSON.parse(window.localStorage.getItem('cart')), this.cart);
                  if (this.cart.items[data.id]) {
                      this.cart.items[data.id].push({
                          id    : data.id,
                          name  : data.name,
                          price : data.price,
                          photo : data.photo
                      });
                  } else {
                      this.cart.items[data.id] = [
                          {
                              id    : data.id,
                              name  : data.name,
                              price : data.price,
                              photo : data.photo
                          }
                      ];
                  }
                  this.totalItems = 0;
                  this.totalPrice = 0.00;
                  for (var key in this.cart.items) {
                      if (this.cart.items.hasOwnProperty(key)) {
                          this.totalItems = this.totalItems + this.cart.items[key].length;
                          for (let i = 0; i < this.cart.items[key].length; i++) {
                              this.totalPrice = parseFloat(this.totalPrice) + parseFloat(this.cart.items[key][i].price);
                          }
                      }
                  }
                  console.log('cart: ', this.cart.items, this.totalItems, this.totalPrice);
                  //console.log('size: ', _.size(this.cart.items));
                  //console.log('size: ', _.keys(this.cart.items).length);
                  document.getElementById("totalItems_1").innerHTML = this.totalItems;
                  document.getElementById("totalItems_2").innerHTML = this.totalItems;
                  document.getElementById("totalPrice_1").innerHTML = this.totalPrice;
                  window.localStorage.setItem('cart', JSON.stringify(this.cart));
                  console.log('cart: ', JSON.parse(window.localStorage.getItem('cart')));
                  $.notify({
                      icon    : "notifications",
                      message : data.name + " added to Cart"
                  }, {
                      type      : 'success',
                      timer     : 2500,
                      z_index   : 2000,
                      placement : {
                          from  : 'top',
                          align : 'right',
                      }
                  });
              }, /*onNewsletterFormSubmit : function (event){
                  console.log('onNewsletterFormSubmit: ');
                  var _this = this;
                  try {
                      _this.isSubmitBtnDisabled = true;
                      _this.statusMsgforSubmit  = [];
                      _this.statusDivClass      = 'alert-json-error';
                      $.validate({});
                      if (!$('#newsletterForm').isValid('', '', true)) {
                          _this.isSubmitBtnDisabled = false;
                          _this.statusMsgforSubmit.push("Form is Invalid, please check your inputs.");
                      } else {
                          console.log('onFormSubmit: ', event.target.action, '\n: ',);
                          axios({
                              method       : 'POST',
                              url          : "",
                              data         : {
                                  _token     : "",
                                  newsletter : _this.newsletter,
                              },
                              responseType : 'json'
                          }).then(function (response){
                              console.log('response: ', response);
                              _this.isSubmitBtnDisabled = false;
                              if (response.data.statusText == 'OK') {
                                  _this.statusDivClass = 'alert-json-success';
                                  _this.statusMsgforSubmit.push(response.data.message);
                                  _this.addPayment = {};
                                  $('#newsletterForm')[0].reset();
                                  event.target.payment_photo.value = "";
                                  $.notify({
                                      icon    : "notifications",
                                      message : response.data.message
                                  }, {
                                      type      : 'success',
                                      timer     : 2500,
                                      z_index   : 2000,
                                      placement : {
                                          from  : 'top',
                                          align : 'right',
                                      }
                                  });
                              } else if (response.data.statusText == 'Unprocessable Entity' && response.data.type && response.data.type == 'Validator') {
                                  $.each(response.data.message, function (key, value){
                                      _this.statusMsgforSubmit.push(value[0])
                                  });
                              } else {
                                  _this.statusMsgforSubmit.push("Failed to perform operation.<br/>");
                                  _this.statusMsgforSubmit.push(response.data.statusText);
                              }
                          }).catch(function (error){
                              console.log('catch-error: ', error);
                              _this.isSubmitBtnDisabled = false;
                              _this.statusMsgforSubmit.push("Failed to perform operation.<br/>");
                              if (error.response) {
                                  _this.statusMsgforSubmit.push(error.response.statusText);
                              } else if (error.request) {
                                  _this.statusMsgforSubmit.push(error.request);
                              } else {
                                  _this.statusMsgforSubmit.push(error.message);
                              }
                          });
                      }
                  } catch (err) {
                      console.log('err: ', err);
                      setTimeout(function (){
                          _this.isSubmitBtnDisabled = false;
                          _this.statusDivClass      = 'alert-json-error';
                          _this.statusMsgforSubmit  = [];
                          _this.statusMsgforSubmit.push(err.message);
                      }, 700);
                  }
              },*/
          },
      });
  </script>
@endsection