<?php
$module_name = basename( __DIR__ );
$group_{$module_name} = "bkt_{$module_name}_" . md5( $module_name );

return array(
    $group_{$module_name} => array(
        'key' => $group_{$module_name},
        'name' => $module_name,
        'label' => __('FAQs', BKT_MODULAR_THEME_LANG_DOMINE),
        'display' => 'block',
        'sub_fields' => array_merge(
            array(
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'content' ),
                    'label' => __('Content', BKT_MODULAR_THEME_LANG_DOMINE),
                    'name' => '',
                    'aria-label' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'left',
                    'endpoint' => 0,
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'title' ),
                    'name' => mod_acf_fieldname( $module_name, 'title' ),
                    'label' => __('Títle', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => 3,
                    'new_lines' => '',
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'subtitle' ),
                    'name' => mod_acf_fieldname( $module_name, 'subtitle' ),
                    'label' => __('Subtítle', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => 1,
                    'new_lines' => '',
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'text' ),
                    'label' => __('Text', BKT_MODULAR_THEME_LANG_DOMINE),
                    'name' => 'text',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 0,
                    'delay' => 0,
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'faqs' ),
                    'name' => mod_acf_fieldname( $module_name, 'faqs' ),
                    'label' => __('FAQs', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => mod_acf_fieldkey( $module_name, 'faq_question' ),
                    'min' => 1,
                    'max' => 0,
                    'layout' => 'row',
                    'button_label' => __('Add faq', BKT_MODULAR_THEME_LANG_DOMINE),
                    'sub_fields' => array(
                        array(
                            'key' => mod_acf_fieldkey( $module_name, 'faq_question' ),
                            'label' => __('Question', BKT_MODULAR_THEME_LANG_DOMINE),
                            'name' => 'faq_question',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 1,
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
                        array(
                            'key' => mod_acf_fieldkey( $module_name, 'faq_answer' ),
                            'label' => __('Answer', BKT_MODULAR_THEME_LANG_DOMINE),
                            'name' => 'faq_answer',
                            'type' => 'wysiwyg',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'tabs' => 'all',
                            'toolbar' => 'full',
                            'media_upload' => 0,
                            'delay' => 0,
                        ),
                    ),
                ),
            ),
            styles_options($module_name, array('container','top','bottom','aligment')),
        ),
        'min' => '',
        'max' => '',
    )
);
