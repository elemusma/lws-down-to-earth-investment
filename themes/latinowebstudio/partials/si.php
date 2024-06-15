<?php 

if(socialIconsRepeater()) {
    echo '<div class="d-flex justify-content-lg-end justify-content-center align-items-center si" style="">';
    foreach(socialIconsRepeater() as $item) {
        $textarea = isset($item['svg-social-logos']) ? $item['svg-social-logos'] : '';
        $link = isset($item['opt-link-1']) ? $item['opt-link-1'] : '';

        echo '<a href="' . $link['url'] . '" title="' . $link['text'] . '" target="' . $link['target'] . '" class="social-icons" style="">';
        // echo '<div class="" style="">';
        echo $textarea;
        // echo '</div>';
        echo '</a>';
    }
    echo '</div>';
}

?>