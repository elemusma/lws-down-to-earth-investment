<?php

echo '<footer class="position-relative">';

echo wp_get_attachment_image(20,'full','',[
    'class'=>'position-absolute w-100 h-auto',
    'style'=>'bottom:0;left:0;object-fit:cover;'
]);

echo '<section class="" style="">';
echo '<div class="container">';
echo '<div class="row justify-content-between align-items-center" style="padding-bottom:175px;">';

echo '<div class="col-12">';
echo do_shortcode('[divider class="w-100" style="padding-bottom:50px;"]');
echo '</div>';

echo '<div class="col-md-4 text-white">';
echo '<a href="' . home_url() . '" title="Go back to the Home of Down to Earth Investments">';
echo '<div style="width:100%;pointer-events:none;padding-top:15px;">';
echo logoSVG();
echo '</div>';
echo '</a>';

echo '</div>';

echo '<div class="col-lg-6 col-md-8 col-12 d-md-flex justify-content-md-end justify-content-center text-center">';
echo '<a href="#get-cash" title="Get a Cash Offer" class="btn-main" style="">Get Started</a>';
echo '<a href="/about/" title="About Us" title="Go to the about page of Down to Earth Investments" class="btn-main white" style="">About Us</a>';
echo '</div>';
echo '</div>';

// echo '<div class="col-lg-3 col-md-4 col-6 text-white">';
// echo '</div>';

echo '<div class="row justify-content-between" style="padding-bottom:10px;">';
echo '<div class="col-md-9">';
echo companyCopyright();
echo '</div>';
echo '<div class="col-md-3">';
echo get_template_part('partials/si');
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';

// <!-- The first Modal -->
echo '<div id="mobileMenu" class="modal mobile-menu" style="z-index:100;">';
//   <!-- Modal content -->
echo '<div class="modal-content-menu modal-content" style="background:white;padding-top:50px;">';
echo '<span class="close" id="navMenuClose">&times;</span>';

// echo do_shortcode('[spacer style="height:25px;"]');

echo '<div style="width:100%;max-width:250px;">';
echo '<a href="' . home_url() . '" title="Go back to the Home of Down to Earth Investments">';
// echo wp_get_attachment_image(logoImg()['id'],'full','',[
//     'class'=>'w-100 h-auto',
// ]);
echo logoSVG();
echo '</a>';
echo '</div>';

echo '<div class="spacer" style="height:50px;"></div>';

wp_nav_menu(array(
    'menu' => 'Primary',
    'menu_class'=>'menu list-unstyled'
));

echo '<a class="btn-main small" href="#get-cash" title="Get Cash For Your Property" style="margin-left: 0;">Get Cash For Your Property</a>';

echo companyCopyright();

echo get_template_part('partials/si');

echo '</div>';
echo '</div>';
// end of mobile nav menu


// search menu modal
echo '<div id="searchMenu" class="modal" style="background:rgba(0,0,0,.8);">';
//   <!-- Modal content -->
echo '<div class="modal-content" style="background:transparent;border:none;">';
echo '<span class="close" id="navMenuClose">&times;</span>';

echo get_search_form();


echo '</div>';
echo '</div>';

echo '</footer>';

echo codeFooter();

wp_footer();

echo '</body>';
echo '</html>';
?>