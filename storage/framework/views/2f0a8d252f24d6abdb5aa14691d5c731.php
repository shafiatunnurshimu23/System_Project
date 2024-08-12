<div>
    <style>
        #blogs{
            padding: 40px 100px 0 100px;
        }

        #blogs .blog-box {
            /* display: flex; */
            align-items: center;
            width: 100%;
            margin-bottom: 70px;
        }

        #blogs .blog-img {
            /* width: 60%; */
            margin-right: 50px;
            align-content: center;
        }

        #blogs .blog-img img{
            /* width: 1000px; */
            width: 100%;
        }

        #blogs .blog-details {
            width: 50%;
            text-align: justify;
        }

        #blogs .blog-details h4{
            color: #555555;
            text-align: justify;
            font-weight: bold; 
        }

        #blogs .blog-details p{
            color: #555555;
            text-align: justify;
            padding: 20px 0 10px 0;
        }

        #page-header {
            background-image: url(<?php echo e(asset('asset/porduct-page-banner.png')); ?>);
            width: 100%;
            height: 30vh;
            background-size: cover;
            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            padding: 14px;
        }

        #page-header h1{
			font-weight: bold;
			font-size: 48px;
            color: rgb(50, 49, 49);
		}

    </style>
    
        

        <h2 style="font-weight: bold; padding: 50px 100px 20px 100px; text-align:center;"><?php echo e($blogs->title); ?></h2>
        <img src="<?php echo e(asset('asset/blogs')); ?>/<?php echo e($blogs->image); ?>" alt="" style="display: block; margin: 0 auto; ">
        <p style="padding: 0px 100px 20px 100px; text-align: justify;"><?php echo e($blogs->description); ?></p> 
        
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/eShop/resources/views/livewire/blog-details-component.blade.php ENDPATH**/ ?>