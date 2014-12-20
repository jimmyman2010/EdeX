<?php
wp_enqueue_script('jquery-ui-accordion');
$output = $title = $interval = $el_class = $collapsible = $active_tab = '';
//
extract(shortcode_atts(array(
    'title' => '',
    'interval' => 0,
    'el_class' => '',
    'collapsible' => 'no',
    'active_tab' => '1'
), $atts));

$el_class = $this->getExtraClass($el_class);
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_accordion wpb_content_element ' . $el_class . ' not-column-inherit', $this->settings['base'], $atts );

$output .= "\n\t".'<!--div class="'.$css_class.'" data-collapsible='.$collapsible.' data-active-tab="'.$active_tab.'">'; //data-interval="'.$interval.'"
$output .= "\n\t\t".'<div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">';
$output .= wpb_widget_title(array('title' => $title, 'extraclass' => 'wpb_accordion_heading'));

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t\t".'</div> '.$this->endBlockComment('.wpb_wrapper');
$output .= "\n\t".'</div--> '.$this->endBlockComment('.wpb_accordion');

echo $output;
wp_enqueue_script( 'kinetic' );
wp_enqueue_style( 'flexslider' );
wp_enqueue_script( 'flexslider' );
wp_enqueue_script( 'spinning-wheel' );
?>

<div class="container clearfix">
    <div class="wheel" id="wheel"></div>
    <div class="flexslider">
        <ul class="slides">
            <li class="item" data-identifier="0">
                <h3>Education Export <br/>Services 0</h3>
                <h4>Reseearch Support <br/>& Analytics</h4>
                <p>Mauris viverra, nisl nec auctor laoreet, lacus justo consectetur lorem, sed faucibus elit elit ut tortor. Vestibulum rhoncus fringilla est, ut aliquam quam convallis sit amet. Mauris tempor dolor at tortor euismod, a commodo tellus elementum. Etiam consectetur mi quam, eu auctor ex auctor nec. Morbi finibus dolor vitae ultrices iaculis. Suspendisse ex elit, lacinia ut porttitor vel, laoreet a sem. Nulla volutpat suscipit egestas.</p>
                <a href="javascript:void(0);" class="more">Learn more</a>
            </li>
            <li class="item" data-identifier="1">
                <h3>Education Export <br/>Services 1</h3>
                <h4>Reseearch Support <br/>& Analytics</h4>
                <p>Mauris viverra, nisl nec auctor laoreet, lacus justo consectetur lorem, sed faucibus elit elit ut tortor. Vestibulum rhoncus fringilla est, ut aliquam quam convallis sit amet. Mauris tempor dolor at tortor euismod, a commodo tellus elementum. Etiam consectetur mi quam, eu auctor ex auctor nec. Morbi finibus dolor vitae ultrices iaculis. Suspendisse ex elit, lacinia ut porttitor vel, laoreet a sem. Nulla volutpat suscipit egestas.</p>
                <a href="javascript:void(0);" href="javascript:void(0);" class="more">Learn more</a>
            </li>
            <li class="item" data-identifier="2">
                <h3>Education Export <br/>Services 2</h3>
                <h4>Reseearch Support <br/>& Analytics</h4>
                <p>Mauris viverra, nisl nec auctor laoreet, lacus justo consectetur lorem, sed faucibus elit elit ut tortor. Vestibulum rhoncus fringilla est, ut aliquam quam convallis sit amet. Mauris tempor dolor at tortor euismod, a commodo tellus elementum. Etiam consectetur mi quam, eu auctor ex auctor nec. Morbi finibus dolor vitae ultrices iaculis. Suspendisse ex elit, lacinia ut porttitor vel, laoreet a sem. Nulla volutpat suscipit egestas.</p>
                <a href="javascript:void(0);" class="more">Learn more</a>
            </li>
            <li class="item" data-identifier="3">
                <h3>Education Export <br/>Services 3</h3>
                <h4>Reseearch Support <br/>& Analytics</h4>
                <p>Mauris viverra, nisl nec auctor laoreet, lacus justo consectetur lorem, sed faucibus elit elit ut tortor. Vestibulum rhoncus fringilla est, ut aliquam quam convallis sit amet. Mauris tempor dolor at tortor euismod, a commodo tellus elementum. Etiam consectetur mi quam, eu auctor ex auctor nec. Morbi finibus dolor vitae ultrices iaculis. Suspendisse ex elit, lacinia ut porttitor vel, laoreet a sem. Nulla volutpat suscipit egestas.</p>
                <a href="javascript:void(0);" class="more">Learn more</a>
            </li>
            <li class="item" data-identifier="4">
                <h3>Education Export <br/>Services 4</h3>
                <h4>Reseearch Support <br/>& Analytics</h4>
                <p>Mauris viverra, nisl nec auctor laoreet, lacus justo consectetur lorem, sed faucibus elit elit ut tortor. Vestibulum rhoncus fringilla est, ut aliquam quam convallis sit amet. Mauris tempor dolor at tortor euismod, a commodo tellus elementum. Etiam consectetur mi quam, eu auctor ex auctor nec. Morbi finibus dolor vitae ultrices iaculis. Suspendisse ex elit, lacinia ut porttitor vel, laoreet a sem. Nulla volutpat suscipit egestas.</p>
                <a href="javascript:void(0);" class="more">Learn more</a>
            </li>
            <li class="item" data-identifier="5">
                <h3>Education Export <br/>Services 5</h3>
                <h4>Reseearch Support <br/>& Analytics</h4>
                <p>Mauris viverra, nisl nec auctor laoreet, lacus justo consectetur lorem, sed faucibus elit elit ut tortor. Vestibulum rhoncus fringilla est, ut aliquam quam convallis sit amet. Mauris tempor dolor at tortor euismod, a commodo tellus elementum. Etiam consectetur mi quam, eu auctor ex auctor nec. Morbi finibus dolor vitae ultrices iaculis. Suspendisse ex elit, lacinia ut porttitor vel, laoreet a sem. Nulla volutpat suscipit egestas.</p>
                <a href="javascript:void(0);" class="more">Learn more</a>
            </li>
            <li class="item" data-identifier="6">
                <h3>Education Export <br/>Services 6</h3>
                <h4>Reseearch Support <br/>& Analytics</h4>
                <p>Mauris viverra, nisl nec auctor laoreet, lacus justo consectetur lorem, sed faucibus elit elit ut tortor. Vestibulum rhoncus fringilla est, ut aliquam quam convallis sit amet. Mauris tempor dolor at tortor euismod, a commodo tellus elementum. Etiam consectetur mi quam, eu auctor ex auctor nec. Morbi finibus dolor vitae ultrices iaculis. Suspendisse ex elit, lacinia ut porttitor vel, laoreet a sem. Nulla volutpat suscipit egestas.</p>
                <a href="javascript:void(0);" class="more">Learn more</a>
            </li>
            <li class="item" data-identifier="7">
                <h3>Education Export <br/>Services 7</h3>
                <h4>Reseearch Support <br/>& Analytics</h4>
                <p>Mauris viverra, nisl nec auctor laoreet, lacus justo consectetur lorem, sed faucibus elit elit ut tortor. Vestibulum rhoncus fringilla est, ut aliquam quam convallis sit amet. Mauris tempor dolor at tortor euismod, a commodo tellus elementum. Etiam consectetur mi quam, eu auctor ex auctor nec. Morbi finibus dolor vitae ultrices iaculis. Suspendisse ex elit, lacinia ut porttitor vel, laoreet a sem. Nulla volutpat suscipit egestas.</p>
                <a href="javascript:void(0);" class="more">Learn more</a>
            </li>
            <li class="item" data-identifier="8">
                <h3>Education Export <br/>Services 8</h3>
                <h4>Reseearch Support <br/>& Analytics</h4>
                <p>Mauris viverra, nisl nec auctor laoreet, lacus justo consectetur lorem, sed faucibus elit elit ut tortor. Vestibulum rhoncus fringilla est, ut aliquam quam convallis sit amet. Mauris tempor dolor at tortor euismod, a commodo tellus elementum. Etiam consectetur mi quam, eu auctor ex auctor nec. Morbi finibus dolor vitae ultrices iaculis. Suspendisse ex elit, lacinia ut porttitor vel, laoreet a sem. Nulla volutpat suscipit egestas.</p>
                <a href="javascript:void(0);" class="more">Learn more</a>
            </li>
            <li class="item" data-identifier="9">
                <h3>Education Export <br/>Services 9</h3>
                <h4>Reseearch Support <br/>& Analytics</h4>
                <p>Mauris viverra, nisl nec auctor laoreet, lacus justo consectetur lorem, sed faucibus elit elit ut tortor. Vestibulum rhoncus fringilla est, ut aliquam quam convallis sit amet. Mauris tempor dolor at tortor euismod, a commodo tellus elementum. Etiam consectetur mi quam, eu auctor ex auctor nec. Morbi finibus dolor vitae ultrices iaculis. Suspendisse ex elit, lacinia ut porttitor vel, laoreet a sem. Nulla volutpat suscipit egestas.</p>
                <a href="javascript:void(0);" class="more">Learn more</a>
            </li>
        </ul>
    </div>
</div>
<script>
</script>