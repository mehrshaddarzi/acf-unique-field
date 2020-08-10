<?php

/**
 * @see https://www.advancedcustomfields.com/resources/creating-a-new-field-type/
 * @example https://github.com/AdvancedCustomFields/acf-field-type-template
 */
class ACF_Field_Unique_ID extends acf_field
{
    /**
     * Initialize the field.
     */
    public function __construct()
    {
        $this->name = 'unique_id';
        $this->label = __('unique id', 'acf-unique-field');
        $this->category = 'basic';
        parent::__construct();
    }

    /**
     * Render the HTML field.
     *
     * @param array $field The field data.
     */
    public function render_field($field)
    {
        if (empty($field['value'])) {
            printf(
                '<input type="hidden" name="%s" value="%s" readonly>#',
                esc_attr($field['name']),
                esc_attr($field['value'])
            );
        } else {
            printf(
                '<input type="text" name="%s" value="%s" readonly>',
                esc_attr($field['name']),
                esc_attr($field['value'])
            );
        }
    }

    /**
     * Define the unique ID if one does not already exist.
     *
     * @param string $value The field value.
     * @param int $post_id The post ID.
     * @param array $field The field data.
     *
     * @return string The filtered value.
     */
    public function update_value($value, $post_id, $field)
    {

        if (!empty($value)) {
            return $value;
        }

        return uniqid();
    }
}

new ACF_Field_Unique_ID();