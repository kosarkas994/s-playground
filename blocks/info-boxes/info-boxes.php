<?php
$cols = get_field_object('columns');
$tab_cols = get_field_object('tab_columns');
$mob_cols = get_field_object('mob_columns');

$padding = get_field_object('padding');


$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class = 'st_block st_info_boxes';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

if ( ! empty( $cols ) ) {
    $class .=  ' ' . $cols['value'];
}
if ( ! empty( $tab_cols ) ) {
    $class .=  ' ' . $tab_cols['value'];
}
if ( ! empty( $mob_cols ) ) {
    $class .=  ' ' . $mob_cols['value'];
}

if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

?>

<div <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="container">
		<?php get_template_part('components/intro'); ?>
        <div class="st_info_boxes_inner">
        <?php
            // Columns repeater
            if( have_rows('info_boxes') ):

                while( have_rows('info_boxes') ) : the_row();

				$title = get_sub_field('title');
                $text = get_sub_field('text');
				$ib_image = get_sub_field('ib_image');
                $size = 'full'; ?>
                <div class="st_col column">
					<?php
					if( $ib_image ) {
						echo wp_get_attachment_image( $ib_image, $size, "", array( "class" => "ib_image" ) );
					} ?>
                   <h3 class="st_col_title"><?php echo $title; ?></h3>
                    <div class="st_col_text">
                        <?php echo $text; ?>
                    </div>
                    <?php get_template_part('components/buttons'); ?>
                </div>
                <?php endwhile;
            endif; ?>
        </div>
	</div>
</div>
