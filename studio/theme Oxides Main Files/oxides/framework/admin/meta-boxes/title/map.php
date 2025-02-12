<?php

$title_meta_box = oxides_edge_add_meta_box(
    array(
        'scope' => array('page', 'portfolio-item', 'post'),
        'title' => 'Title',
        'name' => 'title-meta'
    )
);

    oxides_edge_add_meta_box_field(
        array(
            'name' => 'edgtf_show_title_area_meta',
            'type' => 'select',
            'default_value' => '',
            'label' => 'Show Title Area',
            'description' => 'Disabling this option will turn off page title area',
            'parent' => $title_meta_box,
            'options' => array(
                '' => '',
                'no' => 'No',
                'yes' => 'Yes'
            ),
            'args' => array(
                "dependence" => true,
                "hide" => array(
                    "" => "",
                    "no" => "#edgtf_edgtf_show_title_area_meta_container",
                    "yes" => ""
                ),
                "show" => array(
                    "" => "#edgtf_edgtf_show_title_area_meta_container",
                    "no" => "",
                    "yes" => "#edgtf_edgtf_show_title_area_meta_container"
                )
            )
        )
    );

    $show_title_area_meta_container = oxides_edge_add_admin_container(
        array(
            'parent' => $title_meta_box,
            'name' => 'edgtf_show_title_area_meta_container',
            'hidden_property' => 'edgtf_show_title_area_meta',
            'hidden_value' => 'no'
        )
    );

        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_predefined_size',
                'type' => 'selectblank',
                'default_value' => '',
                'label' => 'Predefined Size',
                'description' => 'Choose title predefined size for Title Area (Font and Height)',
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    'small' => 'Small',
                    'large' => 'Large'
                )
            )
        );

        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_animation_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => 'Animations',
                'description' => 'Choose an animation for Title Area',
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    '' => '',
                    'no' => 'No Animation',
                    'right-left' => 'Text right to left',
                    'left-right' => 'Text left to right'
                )
            )
        );

        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_vertial_alignment_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => 'Vertical Alignment',
                'description' => 'Specify title vertical alignment',
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    '' => '',
                    'header_bottom' => 'From Bottom of Header',
                    'window_top' => 'From Window Top'
                )
            )
        );

        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_content_alignment_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => 'Horizontal Alignment',
                'description' => 'Specify title horizontal alignment',
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    '' => '',
                    'left' => 'Left',
                    'center' => 'Center',
                    'right' => 'Right'
                )
            )
        );

        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_text_hide',
                'type' => 'select',
                'default_value' => 'no',
                'label' => 'Hide Title Text',
                'description' => 'Enabling this option will hide title text',
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    'no' => 'No',
                    'yes' => 'Yes',
                )
            )
        );

        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_text_color_meta',
                'type' => 'color',
                'label' => 'Title Color',
                'description' => 'Choose a color for title text',
                'parent' => $show_title_area_meta_container
            )
        );


        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_background_color_meta',
                'type' => 'color',
                'label' => 'Background Color',
                'description' => 'Choose a background color for Title Area',
                'parent' => $show_title_area_meta_container
            )
        );

        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_hide_background_image_meta',
                'type' => 'yesno',
                'default_value' => 'no',
                'label' => 'Hide Background Image',
                'description' => 'Enable this option to hide background image in Title Area',
                'parent' => $show_title_area_meta_container,
                'args' => array(
                    "dependence" => true,
                    "dependence_hide_on_yes" => "#edgtf_edgtf_hide_background_image_meta_container",
                    "dependence_show_on_yes" => ""
                )
            )
        );

        $hide_background_image_meta_container = oxides_edge_add_admin_container(
            array(
                'parent' => $show_title_area_meta_container,
                'name' => 'edgtf_hide_background_image_meta_container',
                'hidden_property' => 'edgtf_hide_background_image_meta',
                'hidden_value' => 'yes'
            )
        );

        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_background_image_meta',
                'type' => 'image',
                'label' => 'Background Image',
                'description' => 'Choose an Image for Title Area',
                'parent' => $hide_background_image_meta_container
            )
        );

        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_background_image_responsive_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => 'Background Responsive Image',
                'description' => 'Enabling this option will make Title background image responsive',
                'parent' => $hide_background_image_meta_container,
                'options' => array(
                    '' => '',
                    'no' => 'No',
                    'yes' => 'Yes'
                ),
                'args' => array(
                    "dependence" => true,
                    "hide" => array(
                        "" => "",
                        "no" => "",
                        "yes" => "#edgtf_edgtf_title_area_background_image_responsive_meta_container, #edgtf_edgtf_title_area_height_meta"
                    ),
                    "show" => array(
                        "" => "#edgtf_edgtf_title_area_background_image_responsive_meta_container, #edgtf_edgtf_title_area_height_meta",
                        "no" => "#edgtf_edgtf_title_area_background_image_responsive_meta_container, #edgtf_edgtf_title_area_height_meta",
                        "yes" => ""
                    )
                )
            )
        );

        $title_area_background_image_responsive_meta_container = oxides_edge_add_admin_container(
            array(
                'parent' => $hide_background_image_meta_container,
                'name' => 'edgtf_title_area_background_image_responsive_meta_container',
                'hidden_property' => 'edgtf_title_area_background_image_responsive_meta',
                'hidden_value' => 'yes'
            )
        );

            oxides_edge_add_meta_box_field(
                array(
                    'name' => 'edgtf_title_area_background_image_parallax_meta',
                    'type' => 'select',
                    'default_value' => '',
                    'label' => 'Background Image in Parallax',
                    'description' => 'Enabling this option will make Title background image parallax',
                    'parent' => $title_area_background_image_responsive_meta_container,
                    'options' => array(
                        '' => '',
                        'no' => 'No',
                        'yes' => 'Yes',
                        'yes_zoom' => 'Yes, with zoom out'
                    )
                )
            );


        oxides_edge_add_meta_box_field(
            array(
                'name' => 'oxides_edge_title_area_border',
                'type' => 'select',
                'default_value' => '',
                'label' => 'Enable Bottom Border on Title',
                'description' => 'Enabling this option will place border on the bottom of Title',
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    '' => '',
                    'no' => 'No',
                    'yes' => 'Yes'
                ),
                'args' => array(
                    "dependence" => true,
                    "hide" => array(
                        "" => "",
                        "no" => "#edgtf_edgtf_title_area_border_container",
                        "yes" => ""
                    ),
                    "show" => array(
                        "" => "#edgtf_edgtf_title_area_border_container",
                        "no" => "",
                        "yes" => "#edgtf_edgtf_title_area_border_container"
                    )
                )
            )
        );

        $title_area_border_container = oxides_edge_add_admin_container(
            array(
                'parent' => $show_title_area_meta_container,
                'name' => 'edgtf_title_area_border_container',
                'hidden_property' => 'oxides_edge_title_area_border',
                'hidden_value' => 'no'
            )
        );

        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_border_color',
                'type' => 'color',
                'label' => 'Border Color',
                'description' => 'Choose a color for Bottom Border on Title Area',
                'parent' => $title_area_border_container
            )
        );

        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_border_width',
                'type' => 'text',
                'label' => 'Border Width',
                'description' => 'Set a width for Bottom Border on Title Area',
                'parent' => $title_area_border_container,
                'args' => array(
                    'col_width' => 2,
                    'suffix' => 'px'
                )
            )
        );

        oxides_edge_add_meta_box_field(array(
            'name' => 'edgtf_title_area_height_meta',
            'type' => 'text',
            'label' => 'Height',
            'description' => 'Set a height for Title Area',
            'parent' => $show_title_area_meta_container,
            'args' => array(
                'col_width' => 2,
                'suffix' => 'px'
            )
        ));

        oxides_edge_add_meta_box_field(array(
            'name' => 'edgtf_title_area_subtitle_meta',
            'type' => 'text',
            'default_value' => '',
            'label' => 'Subtitle Text',
            'description' => 'Enter your subtitle text',
            'parent' => $show_title_area_meta_container,
            'args' => array(
                'col_width' => 6
            )
        ));

        oxides_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_subtitle_color_meta',
                'type' => 'color',
                'label' => 'Subtitle Color',
                'description' => 'Choose a color for subtitle text',
                'parent' => $show_title_area_meta_container
            )
        );