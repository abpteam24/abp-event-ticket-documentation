<?php
	/**
	 * Plugin Name: ABP Event Ticket -  Documentation
	 * Plugin URI:
	 * Description: ABP Event Ticket -  Documentation
	 * Version: 1.0
	 * Author: abpteam
	 * Author URI: http://www.abp-team.com/
	 * Text Domain: abpet_documentation
	 * Domain Path: /languages
	 * WC requires at least: 8.0.0
	 * *  WC tested up to: latest
	 */
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
	if ( ! class_exists( 'ABPET_Documentation' ) ) {
		class ABPET_Documentation {
			public function __construct() {
				include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
				if ( ! defined( 'ABPET_DOC_DIR' ) ) {
					define( 'ABPET_DOC_DIR', dirname( __FILE__ ) );
				}
				if ( ! defined( 'ABPET_DOC_URL' ) ) {
					define( 'ABPET_DOC_URL', plugins_url() . '/' . plugin_basename( dirname( __FILE__ ) ) );
				}
				add_shortcode( 'abpet-documentation', array( $this, 'do_documentation' ) );
				add_action( 'abpet_add_admin_menu_tab', array( $this, 'menu_tab' ) );
				add_action( 'abpet_load_documentation', array( $this, 'documentation' ) );
			}
			public function menu_tab( $active_tab ): void {
				?>
                <a href="<?php echo esc_url( ABPET_Function::build_url( 'documentation' ) ); ?>" class="_btn_info <?php echo esc_attr( $active_tab == 'documentation' ? 'abp_active' : '' ); ?>">
                    <span class="_mar_r_xxs">📚</span><?php esc_html_e( 'Documentation', 'abpet_documentation' ); ?>
                </a>
				<?php
			}
			public function do_documentation(): bool|string {
				ob_start();
				$this->documentation();

				return ob_get_clean();
			}
			public function documentation() {
				?>
                <div class="abpet_area documentation">
                    <div class="abp_container">
                        <div class="_abp_panel">
                            <!-- HEADER -->
                            <div class="_panel_head _fd_column">
                                <h3 class="_abp_color_11_mar_b_xs"><span class="_mar_r_xs">📘</span>Transport Booking Documentation</h3>
                                <i class="_abp_text_center">Transport Booking is a WooCommerce-based WordPress rental plugin that helps you manage property, equipment, availability, and bookings from a single unified dashboard. </i>
                            </div>
                            <div class="_panel_body_ov_initial">
                                <div class="abp_tabs tab_left">
                                    <!-- LEFT MENU -->
                                    <ul class="_abp_bg_light tab_lists">
                                        <li data-tabs-target="#abpet_getting_start"><span class="_mar_r_xs">🚀</span>Getting Started</li>
                                        <li data-tabs-target="#abpet_feature"><span class="_mar_r_xs">⭐</span> Features</li>
                                        <li data-tabs-target="#abpet_application"><span class="_mar_r_xs">📌</span> Applications</li>
                                        <li data-tabs-target="#abpet_menu_lists"><span class="_mar_r_xs">🧭</span> Menu Overview</li>
                                        <li data-tabs-target="#abpet_quick_menu"><span class="_mar_r_xs">⚡</span>Quick Menu</li>
                                        <!-- POST SECTION -->
                                        <li>
                                            <div class="_fj_between" data-collapse-target="#display_abpet_post" data-tabs-target="#abpet_post" data-open-icon="fas fa-minus" data-close-icon="fas fa-plus"> 📝 Post Management <span data-icon class="fas fa-plus"></span></div>
                                            <ul class="_abp_bg_5_pad_l" data-collapse="#display_abpet_post">
                                                <li data-tabs-target="#abpet_general">⚙️ General Settings</li>
                                                <li data-tabs-target="#abpet_property_price">💰 Properties & Pricing</li>
                                                <li data-tabs-target="#abpet_date">📅 Date Configuration</li>
                                                <li data-tabs-target="#abpet_additional">➕ Additional Services</li>
                                                <li data-tabs-target="#abpet_client_form">🧾 Client Forms</li>
                                                <li data-tabs-target="#abpet_tc">📜 Terms & Conditions</li>
                                                <li data-tabs-target="#abpet_faq">❓ FAQs</li>
                                                <li data-tabs-target="#abpet_tax">🧾 Tax Settings</li>
                                            </ul>
                                        </li>
                                        <li data-tabs-target="#abpet_properties"><span class="_mar_r_xs">🏠</span>Properties</li>
                                        <li data-tabs-target="#abpet_orders"><span class="_mar_r_xs">📦</span>Orders</li>
                                        <li data-tabs-target="#abpet_create_order"><span class="_mar_r_xs">➕</span>Add Order (PRO)</li>
                                        <!-- GLOBAL DATA -->
                                        <li>
                                            <div class="_fj_between" data-collapse-target="#display_abpet_global" data-tabs-target="#abpet_global_data" data-open-icon="fas fa-minus" data-close-icon="fas fa-plus">
                                                <div><span class="_mar_r_xs">🌐 </span>Global Data</div>
                                                <span data-icon class="fas fa-plus"></span>
                                            </div>
                                            <ul class="_abp_bg_5_pad_l" data-collapse="#display_abpet_global">
                                                <li data-tabs-target="#abpet_date_global"><span class="_mar_r_xs">📅 </span>Dates</li>
                                                <li data-tabs-target="#abpet_additional_global"><span class="_mar_r_xs">💰</span>Additional services</li>
                                                <li data-tabs-target="#abpet_client_form_global"><span class="_mar_r_xxs">📋</span>Client Form</li>
                                                <li data-tabs-target="#abpet_tc_global"><span class="_mar_r_xxs">🤝</span>T&C</li>
                                                <li data-tabs-target="#abpet_faq_global"><span class="_mar_r_xs">❓</span>FAQ</li>
                                                <li data-tabs-target="#abpet_category_global"><span class="_mar_r_xxs">🏘️</span>Category</li>
                                                <li data-tabs-target="#abpet_location_global"><span class="_mar_r_xs">📍</span>Location</li>
                                                <li data-tabs-target="#abpet_brand_global"><span class="_mar_r_xs">🏷️ </span>Brands</li>
                                                <li data-tabs-target="#abpet_feature_global"><span class="_mar_r_xxs">🔗</span>Feature</li>
                                            </ul>
                                        </li>
                                        <!-- CONFIGURATION -->
                                        <li>
                                            <div class="_fj_between" data-collapse-target="#display_abpet_configuration" data-tabs-target="#abpet_configuration" data-open-icon="fas fa-minus" data-close-icon="fas fa-plus">
                                                <div><span class="_mar_r_xs">⚙️ </span>Configuration</div>
                                                <span data-icon class="fas fa-plus"></span>
                                            </div>
                                            <ul class="_abp_bg_5_pad_l" data-collapse="#display_abpet_configuration">
                                                <li data-tabs-target="#abpet_rental_forge"><span class="_mar_r_xs">🛠️ </span>Transport Booking</li>
                                                <li data-tabs-target="#abpet_pdf"><span class="_mar_r_xs">📄</span> PDF (PRO)</li>
                                                <li data-tabs-target="#abpet_booking_pdf"><span class="_mar_r_xs">📑</span> Order Lists PDF (PRO)</li>
                                                <li data-tabs-target="#abpet_csv"><span class="_mar_r_xs">📑</span> Order Lists CSV (PRO)</li>
                                                <li data-tabs-target="#abpet_email"><span class="_mar_r_xs">📧</span> E-mail (PRO)</li>
                                                <li data-tabs-target="#abpet_slider"><span class="_mar_r_xs">🖼️ </span>Slider</li>
                                                <li data-tabs-target="#abpet_contact"><span class="_mar_r_xs">☎️ </span>Contact Information</li>
                                                <li data-tabs-target="#abpet_css_value"><span class="_mar_r_xs">🎨</span> CSS Property</li>
                                            </ul>
                                        </li>
                                        <li data-tabs-target="#abpet_status"><span class="_mar_r_xs">🛡️</span> Status</li>
                                        <li data-tabs-target="#abpet_shortcode"><span class="_mar_r_xs">🔗</span> Shortcodes</li>
                                        <li data-tabs-target="#abpet_template"><span class="_mar_r_xs">🧩</span> Templating</li>
                                        <li data-tabs-target="#abpet_translate"><span class="_mar_r_xs">🌍</span>Translate</li>
                                    </ul>
                                    <!-- CONTENT -->
                                    <div class="tab_content">
										<?php
											require_once ABPET_DOC_DIR . '/inc/getting_start.php';
											require_once ABPET_DOC_DIR . '/inc/features.php';
											require_once ABPET_DOC_DIR . '/inc/application.php';
											require_once ABPET_DOC_DIR . '/inc/menu_lists.php';
											require_once ABPET_DOC_DIR . '/inc/quick_menu.php';
											/************************/
											require_once ABPET_DOC_DIR . '/inc/post_menu.php';
											require_once ABPET_DOC_DIR . '/inc/post_general.php';
											require_once ABPET_DOC_DIR . '/inc/post_property_price.php';
											require_once ABPET_DOC_DIR . '/inc/post_date.php';
											require_once ABPET_DOC_DIR . '/inc/post_additional.php';
											require_once ABPET_DOC_DIR . '/inc/post_client_form.php';
											require_once ABPET_DOC_DIR . '/inc/post_tc.php';
											require_once ABPET_DOC_DIR . '/inc/post_faq.php';
											require_once ABPET_DOC_DIR . '/inc/post_tax.php';
											/************************/
											require_once ABPET_DOC_DIR . '/inc/property_list.php';
											require_once ABPET_DOC_DIR . '/inc/order_list.php';
											require_once ABPET_DOC_DIR . '/inc/add_order.php';
											/************************/
											require_once ABPET_DOC_DIR . '/inc/global_data.php';
											require_once ABPET_DOC_DIR . '/inc/global_date.php';
											require_once ABPET_DOC_DIR . '/inc/global_additional.php';
											require_once ABPET_DOC_DIR . '/inc/global_client_form.php';
											require_once ABPET_DOC_DIR . '/inc/global_tc.php';
											require_once ABPET_DOC_DIR . '/inc/global_faq.php';
											require_once ABPET_DOC_DIR . '/inc/global_category.php';
											require_once ABPET_DOC_DIR . '/inc/global_location.php';
											require_once ABPET_DOC_DIR . '/inc/global_brand.php';
											require_once ABPET_DOC_DIR . '/inc/global_feature.php';
											/************************/
											require_once ABPET_DOC_DIR . '/inc/configuration.php';
											require_once ABPET_DOC_DIR . '/inc/configuration_rental_forge.php';
											require_once ABPET_DOC_DIR . '/inc/configuration_pdf.php';
											require_once ABPET_DOC_DIR . '/inc/configuration_order_list.php';
											require_once ABPET_DOC_DIR . '/inc/configuration_csv.php';
											require_once ABPET_DOC_DIR . '/inc/configuration_email.php';
											require_once ABPET_DOC_DIR . '/inc/configuration_slider.php';
											require_once ABPET_DOC_DIR . '/inc/configuration_contact.php';
											require_once ABPET_DOC_DIR . '/inc/configuration_css.php';
											/************************/
											require_once ABPET_DOC_DIR . '/inc/status.php';
											require_once ABPET_DOC_DIR . '/inc/shortcode.php';
											require_once ABPET_DOC_DIR . '/inc/templating.php';
											require_once ABPET_DOC_DIR . '/inc/translate.php';
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
			}
		}
		new ABPET_Documentation();
	}
