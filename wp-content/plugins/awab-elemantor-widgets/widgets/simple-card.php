<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor  Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Awab_Elemantor_Card_Widgets extends \Elementor\Widget_Base
{

	/**
	 * Get widget name.
	 *
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'card';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve oEmbed widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title()
	{
		return esc_html__('Simple Card', 'awab-ele-widgets');
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve oEmbed widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon()
	{
		return 'eicon-header';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url()
	{
		return 'https//:mohamed-tarek.top';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the  widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories()
	{
		return ['general'];
	}


	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the  widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords()
	{
		return ['card', 'awab'];
	}

	/**
	 * Register  widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls()
	{

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__('Content', 'awab-ele-widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		//add card title control
		$this->add_control(
			'card_title',
			[
				'label' => esc_html__('Card Title', 'awab-ele-widgets'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__('Your Card Title Here', 'awab-ele-widgets'),
			]
		);

		//add card textarea control
		$this->add_control(
			'card_discription',
			[
				'label' => esc_html__('Card Description', 'awab-ele-widgets'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'placeholder' => esc_html__('Your Card Description Here', 'awab-ele-widgets'),
			]
		);

		$this->end_controls_section();


		//start style controls

		$this->start_controls_section(
			'style_content_section',
			[
				'label' => esc_html__('Style', 'awab-ele-widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//code for style option

		//add card title control
		$this->add_control(
			'title_option',
			[
				'label' => esc_html__('Title Option', 'awab-ele-widgets'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'sperator' => 'before',

			]
		);

		//add card title color

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__('Color', 'awab-ele-widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#f00',
				'selectors' => [
					'{{WRAPPER}} .card_title' => 'color: {{VALUE}};',
				],
			]
		);
		//add card title topgraphy

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .card_title',
			]
		);



		//add card discription control
		$this->add_control(
			'discription_option',
			[
				'label' => esc_html__('Discription Option', 'awab-ele-widgets'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'sperator' => 'before',

			]
		);

		//add card discription color

		$this->add_control(
			'discription_color',
			[
				'label' => esc_html__('Color', 'awab-ele-widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#f00651',
				'selectors' => [
					'{{WRAPPER}} .card_decription' => 'color: {{VALUE}};',
				],
			]
		);

		//add card discription topgraphy

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'discriotion_typography',
				'selector' => '{{WRAPPER}} .card_decription',
			]
		);

		$this->end_controls_section();
	}


	/**
	 * Render oEmbed widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render()
	{

		$settings = $this->get_settings_for_display();

		//get value output
		$card_title = $settings['card_title'];
		$card_description = $settings['card_discription'];
?>

		<!-- start rendring output -->
		<div class="card">
			<h3 class="card_title"> <?php echo $card_title ?> </h3>
			<p class="card_decription"> <?php echo $card_description ?></p>
		</div>
		<!-- finish rendring output -->

<?php


	}
}
