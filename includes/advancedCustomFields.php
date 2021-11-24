
<?php

    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_617d6063e66ab',
            'title' => 'Felder für Sponsoren',
            'fields' => array(
                array(
                    'key' => 'field_617d617a44cce',
                    'label' => 'Sponsor URL',
                    'name' => 'sponsor_url',
                    'type' => 'text',
                    'instructions' => 'Bitte vollständige URL für die Verlinkung mit der Partnerwebsite eingeben.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'domi_sponsors_cpt',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));

endif;      
?>