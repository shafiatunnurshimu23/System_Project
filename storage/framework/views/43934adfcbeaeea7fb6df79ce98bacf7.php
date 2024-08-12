<main id="main">

    <style>
        .category-banner {
            padding: 15px 0 0 0;
            display: flex;
        }

         /* Categories */
        .catg {
            margin-right: 20px;
            height: 60%;
            width: 15%;
            font-size: 16px;
            margin-left: 75px;
            background-color: #F7F7F7;
        }

        .cat-title {
            background-color: #1A2C4D;
            padding: 4px;
            font-weight: bold;
        }

        .cat-title p{
            font-size: 18px; 
            color: white; 
            text-style: bold;
        }

        .catg ul{
            padding: 10px 10px; 
            height: 325px; 
            overflow:auto;
            margin-top: 5px;
        }

        .catg ul li {
            list-style-type: none;
            list-style: none;
            font-weight: bold;
            padding: 0px;
            cursor: pointer;
            color: #1A2C4D;
            margin-top: -12px; 
            font-size: 14px;
        } 

        .catg ul li:hover {
            color: rgb(72, 193, 240);
        }

        hr {
            margin-top: -3px; 
            border-width: 2px;
        }

        .banner {
            margin-top: -10px;
        }        

        .size-class {
            max-width: 1050px;
        }

        @media (max-width:477px) {
            .catg {
                margin-right: 10px;
                width: 100px;
                font-size: 10px;
                margin-left: 10px;
                background-color: #F7F7F7;
                margin-top: -5px;
            }

            .cat-title {
                background-color: #1A2C4D;
                padding: 4px;
                font-weight: bold;
            }

            .cat-title p{
                font-size: 10px; 
                color: white; 
            }

            .catg ul{
                padding: 2px 2px; 
                height: 140px; 
                overflow:auto;
                /* margin-top: 20px; */
            }

            .catg ul li {
                list-style-type: none;
                list-style: none;
                padding: 0px;
                cursor: pointer;
                color: #1A2C4D;
                margin-top: -12px; 
                font-size: 8px;
            } 

            .catg ul li:hover {
                color: rgb(72, 193, 240);
            }

            hr {
                margin-top: -3px; 
                border-width: 2px;
            }

            .banner {
                margin-top: -15px;
            }        

            .size-class {
                max-width: 280px;
            }
        }
    </style>

     <!-- Category and Banner --> 
    <div class="category-banner">
        <!-- Categories-->
        <div class="catg">
            <div class="cat-title">
                <p style=""><i class="fas fa-bars"></i>  Categories</p>
            </div>

            <ul style="">
                <?php $__currentLoopData = $side_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $side_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('product.category', ['category_slug'=>$side_category->slug])); ?>"><li style="margin-top: -12px; font-size: 12px;"><?php echo e($side_category->name); ?></li></a>
                    <hr style="">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        
        <div class="banner" >
            <div class="wrap-main-slide size-class" style="">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                    <div class="item-slide">
                        <img src="<?php echo e(asset('asset/banner/banner_01.jpeg')); ?>" alt="" class="img-slide" >
                    </div>
                    <div class="item-slide">
                        <img src="<?php echo e(asset('asset/banner/banner_02.jpeg')); ?>" alt="" class="img-slide">
                    </div>
                    <div class="item-slide">
                        <img src="<?php echo e(asset('asset/banner/banner_03.jpeg')); ?>" alt="" class="img-slide">
                    </div>
                </div>
            </div>
  
        </div> 
    </div>  
  
        <!-- Banner Slider -->
        
        

    <div class="container">

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="<?php echo e(asset('asset/banner/short_banner_1.jpg')); ?>" alt="" ></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="<?php echo e(asset('asset/banner/short_banner_2.jpeg')); ?>" alt="" ></figure>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div>
            <style>
                /* Feature */
                #feature {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    flex-wrap: wrap;
                }

                #feature img {
                    /* width: 180px;
                    height: 90px; */
                }

                #feature .fe-box{
                    width: 235px;
                    height: 140px;
                    text-align: center;
                    margin-top: 20px;
                    padding: 3px 10px;
                    box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
                    border: 2px solid rgb(72, 193, 240);
                }

                #feature .fe-box.fe-box.fe-box.fe-box:hover{
                    box-shadow: 10px 10px 54px rgba(70, 62, 221, 0.1);
                }

                #feature .fe-box p{
                    font-size: 11px;
                    padding: 9px 8px 6px 8px;
                    line-height: 1;
                    color: #fafafa;
                    font-weight: bold;
                    background-color: #1A2C4D;
                    background-size: 240px;
                }
            </style>

            <!-- Features -->
            <section id="feature" class="section-p1">
                <div class="fe-box">
                    <img src="asset/fast-delivery.png" alt="">
                    <p>Delivery within 48 Hours</p>
                </div>
                
                <div class="fe-box">
                    <img src="asset/free-shiping.jpeg" alt=" ">
                    <p>FREE SHIP-ON ORDER OVER ৳3000</p>
                </div>
                <div class="fe-box">
                    <img src="asset/24_7.jpeg" alt="" >
                    <p>24/7 Support</p>
                </div>
                <div class="fe-box">
                    <img src="asset/gift.png" alt="" >
                    <p style="margin-top: 10px;">GIFT ON ORDER OVER ৳2500</p>
                </div>
        
            </section>
        </div>

        <!--On Sale-->
        <?php if($sproducts->count()>0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now()): ?>
            <div class="wrap-show-advance-info-box style-1 has-countdown">
                <h3 class="title-box">On Sale</h3>
                <div class="wrap-countdown mercado-countdown" data-expire="<?php echo e(Carbon\Carbon::parse($sale->sale_date)->format('Y/m/d h:m:s')); ?>"></div>
                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                    <?php $__currentLoopData = $sproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" title="<?php echo e($product->name); ?>">
                                    <figure><img src="<?php echo e(asset('asset/product_image')); ?>/<?php echo e($product->image); ?>" style="height: 220px;" alt="<?php echo e($product->name); ?>"></figure>
                                </a>

                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" class="product-name"><span><?php echo e($product->name); ?></span></a>
                                <div class="wrap-price"><ins><p class="product-price">$<?php echo e($product->sale_price); ?></p></ins><del><p class="product-price">$<?php echo e($product->regular_price); ?></p></del></div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        <?php endif; ?>

        
        <!--Featured Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Featured Products</h3>
            
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">						
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                <?php $__currentLoopData = $fproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" title="<?php echo e($product->name); ?>">
                                                <figure><img src="<?php echo e(asset('asset/product_image')); ?>/<?php echo e($product->image); ?>" style="height: 220px;" alt="<?php echo e($product->name); ?>"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">featured</span>
                                            </div>

                                        </div>
                                        <div class="product-info">
                                            <a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" class="product-name"><span><?php echo e($product->name); ?></span></a>
                                            <div class="wrap-price"><span class="product-price">$<?php echo e($product->regular_price); ?></span></div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </div>

        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="<?php echo e(asset('asset/banner/wide_banner_2.png')); ?>" style="height: 150px; width: 1170px;" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">						
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                <?php $__currentLoopData = $lproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" title="<?php echo e($product->name); ?>">
                                                <figure><img src="<?php echo e(asset('asset/product_image')); ?>/<?php echo e($product->image); ?>" style="height: 220px;" alt="<?php echo e($product->name); ?>"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            
                                        </div>
                                        <div class="product-info">
                                            <a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" class="product-name"><span><?php echo e($product->name); ?></span></a>
                                            <div class="wrap-price"><span class="product-price">$<?php echo e($product->regular_price); ?></span></div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </div>

        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Product Categories</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="<?php echo e(asset('asset/banner/wide_banner_3.png')); ?>" style="height: 150px; width: 1170px;" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="#category_<?php echo e($category->id); ?>" class="tab-control-item <?php echo e($key==0 ? 'active':''); ?>"><?php echo e($category->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="tab-contents">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-content-item <?php echo e($key==0 ? 'active':''); ?>" id="category_<?php echo e($category->id); ?>">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                               
                                    <?php
                                        $c_products = DB::table('products')->where('category_id', $category->id)->get()->take($no_of_products);
                                    ?>

                                    <?php $__currentLoopData = $c_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="<?php echo e(route('product.details', ['slug'=>$c_product->slug])); ?>" title="<?php echo e($c_product->name); ?>">
                                                    <figure><img src="<?php echo e(asset('asset/product_image')); ?>/<?php echo e($c_product->image); ?>" style="height: 220px;" alt="<?php echo e($c_product->name); ?>"></figure>
                                                </a>
                                                
                                            </div>
                                            <div class="product-info">
                                                <a href="<?php echo e(route('product.details', ['slug'=>$c_product->slug])); ?>" class="product-name"><span><?php echo e($c_product->name); ?></span></a>
                                                <div class="wrap-price"><span class="product-price">$<?php echo e($c_product->regular_price); ?></span></div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>		

    </div>

</main>
<?php /**PATH C:\xampp\htdocs\eShop\resources\views/livewire/home-component.blade.php ENDPATH**/ ?>