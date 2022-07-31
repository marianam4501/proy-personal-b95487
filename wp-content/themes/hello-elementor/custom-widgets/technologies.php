<?php
namespace Elementor;

class Technologies_Widget extends Widget_Base {

    public function get_name() {
        return 'technology';
    }

    public function get_title() {
        return 'Technology';
    }

    public function get_icon() {
        return 'eicon-image';
    }

    public function get_cathegories() {
        return [ 'basic' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_title',
            [
                'label' => __('Content', 'elementor'),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __('Imagen', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::MEDIA,
                'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __('Descripción', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Ingrese la descripción', 'elementor'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        //echo wp_get_attachment_image( $settings['image']['id'], 'thumbnail' );
        echo '<div id="technology-container"><img class="technology" src="' . esc_url( $settings['image']['url'] ) . '" alt=""></div>';
        echo '<div id="technology-text"><h5>' . $settings['description'] . '</h5></div>';
    }

    protected function _content_template() {

    }
} 