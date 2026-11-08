<?php
/**
 * Plugin Name:       ABP Event Ticket - Documentation
 * Plugin URI:        https://abp-team.com/
 * Description:       Complete user documentation for the ABP Event Ticket plugin. Standalone and fully self-contained — render it on any page with the [abet-documentation] shortcode. No admin menu and no dependency on the main plugin's styles or classes.
 * Version:           1.0.4
 * Author:            ABPTEAM
 * Author URI:        https://abp-team.com/
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       abet_documentation
 * Domain Path:       /languages
 * Requires at least: 6.0
 * Requires PHP:      7.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!defined('ABET_DOC_VERSION')) {
    define('ABET_DOC_VERSION', '1.0.4');
}
if (!defined('ABET_DOC_DIR')) {
    define('ABET_DOC_DIR', dirname(__FILE__));
}
if (!defined('ABET_DOC_URL')) {
    define('ABET_DOC_URL', plugins_url('', __FILE__));
}
if (!defined('ABET_DOC_INC')) {
    define('ABET_DOC_INC', ABET_DOC_DIR . '/inc');
}

if (!class_exists('ABET_Documentation')) {
    class ABET_Documentation {

        private bool $rendered = false;

        public function __construct() {
            add_shortcode('abet-documentation', array($this, 'do_documentation'));
            add_action('wp', array($this, 'maybe_enqueue_assets'));
        }

        /* -------------------------------------------------------------
         * Bootstrapping
         * ----------------------------------------------------------- */
        public function enqueue_assets(): void {
            wp_enqueue_style('abet-doc', ABET_DOC_URL . '/assets/css/abet_doc.css', array(), ABET_DOC_VERSION);
            wp_enqueue_style('abet-doc-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), ABET_DOC_VERSION);
            wp_enqueue_script('abet-doc', ABET_DOC_URL . '/assets/js/abet_doc.js', array('jquery'), ABET_DOC_VERSION, true);
        }

        public function maybe_enqueue_assets(): void {
            if (is_admin() || $this->rendered) {
                return;
            }
            if ($this->page_uses_shortcode()) {
                $this->enqueue_assets();
            }
        }

        private function page_uses_shortcode(): bool {
            global $post, $wp_query;
            if ($post && is_object($post) && has_shortcode($post->post_content, 'abet-documentation')) {
                return true;
            }
            if ($wp_query && !empty($wp_query->posts)) {
                foreach ($wp_query->posts as $p) {
                    if (!empty($p->post_content) && has_shortcode($p->post_content, 'abet-documentation')) {
                        return true;
                    }
                }
            }
            return false;
        }

        /* -------------------------------------------------------------
         * Entry points
         * ----------------------------------------------------------- */

        public function do_documentation(): string {
            $this->rendered = true;
            $this->enqueue_assets();
            ob_start();
            $this->documentation();
            return (string) ob_get_clean();
        }

        /* -------------------------------------------------------------
         * Sections registry (grouped, ordered)
         * ----------------------------------------------------------- */

        private function get_sections(): array {
            return array(
                $this->tab('abet_getting_start', __('Getting Started', 'abet_documentation'), 'fas fa-rocket', 'getting_start.php', 'start intro welcome version'),
                $this->tab('abet_installation', __('Installation', 'abet_documentation'), 'fas fa-download', 'installation.php', 'install setup activate upload requirements woocommerce free pro'),
                $this->tab('abet_feature', __('Features', 'abet_documentation'), 'fas fa-star', 'features.php', 'feature list overview free pro'),
                $this->tab('abet_pro_features', __('PRO Features', 'abet_documentation'), 'fas fa-crown', 'pro_features.php', 'pro upgrade purchase pdf csv email discount partial payment cancel checkin statistics', true),
                $this->tab('abet_ticket_shortcode', __('PRO Ticket Lookup Shortcode', 'abet_documentation'), 'fas fa-ticket-alt', 'ticket_shortcode.php', 'pro abpet-ticket shortcode ticket pin lookup download view checkin login', true),
                $this->tab('abet_qr_code', __('PRO Ticket QR Codes', 'abet_documentation'), 'fas fa-qrcode', 'qr_code.php', 'pro qr code pdf ticket pin scan setup', true),
                $this->tab('abet_application', __('Applications', 'abet_documentation'), 'fas fa-thumbtack', 'application.php', 'use case concert conference festival workshop'),
                $this->tab('abet_menu_lists', __('Menu Overview', 'abet_documentation'), 'fas fa-list-ul', 'menu_lists.php', 'admin menu navigation dashboard'),
                $this->tab('abet_dashboard', __('Dashboard', 'abet_documentation'), 'fas fa-gauge-high', 'dashboard.php', 'dashboard overview stats quick actions'),
                array(
                    'id'       => 'event',
                    'label'    => __('Event Lists', 'abet_documentation'),
                    'icon'     => 'fas fa-calendar-star',
                    'overview' => 'abet_post',
                    'tabs'     => array(
                        $this->tab('abet_post', __('Overview', 'abet_documentation'), 'fas fa-layer-group', 'post_menu.php', 'overview list clone restore delete edit trash'),
                        $this->tab('abet_general', __('General Configuration', 'abet_documentation'), 'fas fa-rainbow', 'post_general.php', 'basic sale template sku icon capacity type organizer brand location'),
                        $this->tab('abet_ticket', __('Ticket & Price', 'abet_documentation'), '🎫', 'post_ticket.php', 'ticket price quantity min max reserve seat plan'),
                        $this->tab('abet_date', __('Date Configuration', 'abet_documentation'), '🗓️', 'post_date.php', 'date schedule periodic specific time picker select'),
                        $this->tab('abet_post_discount', __('Discount', 'abet_documentation'), 'fas fa-percent', 'post_discount.php', 'seasonal early bird event discount dates percent', true),
                        $this->tab('abet_post_partial_payment', __('Partial Payment', 'abet_documentation'), 'fas fa-coins', 'post_partial_payment.php', 'deposit balance event partial payment', true),
                        $this->tab('abet_timeline', __('Timeline', 'abet_documentation'), 'fas fa-timeline', 'post_timeline.php', 'timeline schedule activity'),
                        $this->tab('abet_additional', __('Additional Services', 'abet_documentation'), '💰', 'post_additional.php', 'additional service extra'),
                        $this->tab('abet_client_form', __('Attendee Form', 'abet_documentation'), '📋', 'post_client_form.php', 'client form field attendee'),
                        $this->tab('abet_tax', __('Tax', 'abet_documentation'), '🧾', 'post_tax.php', 'tax settings woocommerce'),
                        $this->tab('abet_faq', __('FAQs', 'abet_documentation'), '❓', 'post_faq.php', 'faq question answer'),
                        $this->tab('abet_tc', __('Terms & Conditions', 'abet_documentation'), '🤝', 'post_tc.php', 'terms conditions policy'),
                    ),
                ),
                $this->tab('abet_orders', __('Orders', 'abet_documentation'), 'fas fa-file-invoice', 'order_list.php', 'order list booking status filter'),
                $this->tab('abet_admin_tools', __('PRO Admin Booking Tools', 'abet_documentation'), 'fas fa-cart-plus', 'admin_tools.php', 'pro add order create edit booking admin attendee', true),
                $this->tab('abet_cancel_requests', __('PRO Cancel Requests', 'abet_documentation'), 'fas fa-ban', 'cancel_requests.php', 'pro cancellation customer approve reject cutoff', true),
                $this->tab('abet_checkin_statistics', __('PRO Check-in & Statistics', 'abet_documentation'), 'fas fa-chart-bar', 'checkin_statistics.php', 'pro check in attendee statistics session revenue', true),
                $this->tab('abet_seat_plan_manager', __('Ticket/Seat Plan', 'abet_documentation'), 'fas fa-chair', 'seat_plan.php', 'ticket type seat plan designer decor numbering'),
                array(
                    'id'       => 'configuration',
                    'label'    => __('Global Configuration', 'abet_documentation'),
                    'icon'     => 'fas fa-gear',
                    'overview' => 'abet_configuration',
                    'tabs'     => array(
                        $this->tab('abet_configuration', __('Overview', 'abet_documentation'), 'fas fa-gear', 'configuration.php', 'global configuration setting label woocommerce'),
                        $this->tab('abet_on_off', __('Feature ON/OFF', 'abet_documentation'), 'fa-solid fa-toggle-on', 'configuration_on_off.php', 'feature on off toggle'),
                        $this->tab('abet_global_date', __('Dates', 'abet_documentation'), 'fas fa-calendar-day', 'global_date.php', 'global date format buffer advance'),
                        $this->tab('abet_global_discount', __('PRO Global Discounts', 'abet_documentation'), 'fas fa-percent', 'global_discount.php', 'pro global seasonal early bird discount', true),
                        $this->tab('abet_global_partial_payment', __('PRO Partial Payments', 'abet_documentation'), 'fas fa-coins', 'global_partial_payment.php', 'pro global deposit due balance payment', true),
                        $this->tab('abet_pdf_settings', __('PRO Ticket PDF', 'abet_documentation'), 'fas fa-ticket-alt', 'configuration_pdf.php', 'pro ticket pdf logo background role pdf tools', true),
                        $this->tab('abet_order_pdf_settings', __('PRO Attendee List PDF', 'abet_documentation'), 'far fa-file-pdf', 'configuration_order_pdf.php', 'pro order list attendee pdf columns', true),
                        $this->tab('abet_csv_settings', __('PRO CSV Export', 'abet_documentation'), 'fas fa-file-csv', 'configuration_csv.php', 'pro csv export booking columns', true),
                        $this->tab('abet_email_settings', __('PRO Booking Email', 'abet_documentation'), 'far fa-envelope', 'configuration_email.php', 'pro email booking templates placeholders resend', true),
                        $this->tab('abet_global_additional', __('Additional Services', 'abet_documentation'), '💰', 'global_additional.php', 'global additional service'),
                        $this->tab('abet_global_client_form', __('Attendee Form', 'abet_documentation'), '📋', 'global_client_form.php', 'global client form'),
                        $this->tab('abet_global_location', __('Locations', 'abet_documentation'), 'fas fa-map-marker-alt', 'global_location.php', 'location map google loc_id'),
                        $this->tab('abet_global_category', __('Categories', 'abet_documentation'), 'fas fa-boxes-stacked', 'global_category.php', 'category cat_id'),
                        $this->tab('abet_global_organizer', __('Organizers', 'abet_documentation'), '🏢', 'global_organizer.php', 'organizer company org_id'),
                        $this->tab('abet_global_brand', __('Brands', 'abet_documentation'), '🏷️', 'global_brand.php', 'brand brand_id'),
                        $this->tab('abet_global_feature', __('Features Library', 'abet_documentation'), '🔗', 'global_feature.php', 'feature library'),
                        $this->tab('abet_global_speaker', __('Speakers', 'abet_documentation'), '🎤', 'global_speaker.php', 'speaker public figure'),
                        $this->tab('abet_global_faq', __('FAQ', 'abet_documentation'), '❓', 'global_faq.php', 'faq question answer'),
                        $this->tab('abet_global_tc', __('Terms & Conditions', 'abet_documentation'), '🤝', 'global_tc.php', 'terms conditions policy'),
                        $this->tab('abet_slider', __('Slider', 'abet_documentation'), 'fas fa-photo-video', 'configuration_slider.php', 'slider gallery'),
                        $this->tab('abet_contact', __('Contact Information', 'abet_documentation'), 'fas fa-id-card-alt', 'configuration_contact.php', 'contact company address phone email'),
                        $this->tab('abet_css_value', __('CSS Property', 'abet_documentation'), 'fas fa-drafting-compass', 'configuration_css.php', 'css color font size'),
                    ),
                ),
                $this->tab('abet_shortcode', __('Shortcodes', 'abet_documentation'), 'fas fa-code', 'shortcode.php', 'shortcode abpet-booking abpet-post abpet-gallery parameters'),
                $this->tab('abet_template', __('Templating', 'abet_documentation'), 'fas fa-puzzle-piece', 'templating.php', 'template override theme'),
                $this->tab('abet_translate', __('Translation', 'abet_documentation'), 'fas fa-language', 'translate.php', 'translation loco translate language'),
            );
        }

        private function tab(string $id, string $label, string $icon, string $file, string $keywords, bool $pro = false): array {
            return array(
                'id'       => $id,
                'label'    => $label,
                'icon'     => $icon,
                'file'     => $file,
                'keywords' => $keywords,
                'pro'      => $pro,
            );
        }

        /* -------------------------------------------------------------
         * Rendering
         * ----------------------------------------------------------- */

        public function documentation(): void {
            $sections  = $this->get_sections();
            $first_sec = $sections[0];
            $first_id  = isset($first_sec['tabs']) ? $first_sec['tabs'][0]['id'] : $first_sec['id'];
            ?>
            <div class="abet_doc" id="abet-documentation">
                <div class="abet_doc_container">
                    <div class="abet_doc_header">
                        <div class="abet_doc_brand">
                            <h1 class="abet_doc_title">
                                📘 <?php esc_html_e('ABP Event Ticket — Documentation', 'abet_documentation'); ?>
                                <span class="abet_doc_chip">v<?php echo esc_html(ABET_DOC_VERSION); ?></span>
                            </h1>
                            <p class="abet_doc_subtitle">
                                <?php esc_html_e('Free + PRO user guide — setup, event configuration, ticket and seat plans, PRO tools, orders, global configuration, shortcodes and templates.', 'abet_documentation'); ?>
                            </p>
                        </div>
                        <div class="abet_doc_search">
                            <span class="abet_doc_search_icon" aria-hidden="true">🔍</span>
                            <input type="search" class="abet_doc_search_input"
                                   placeholder="<?php esc_attr_e('Search documentation…', 'abet_documentation'); ?>"
                                   aria-label="<?php esc_attr_e('Search documentation', 'abet_documentation'); ?>" />
                            <button type="button" class="abet_doc_search_clear" aria-label="<?php esc_attr_e('Clear search', 'abet_documentation'); ?>">✕</button>
                            <button type="button" id="abet-doc-print" class="abet_doc_print" aria-label="<?php esc_attr_e('Print this page', 'abet_documentation'); ?>">🖨️ <?php esc_html_e('Print', 'abet_documentation'); ?></button>
                        </div>
                    </div>

                    <div class="abet_doc_legend">
                        <span class="abet_doc_legend_item"><span class="abet_doc_badge abet_doc_badge_free">FREE</span> <?php esc_html_e('Included in the free plugin', 'abet_documentation'); ?></span>
                        <span class="abet_doc_legend_item"><span class="abet_doc_badge abet_doc_badge_pro">PRO</span> <?php esc_html_e('Requires ABP Event Ticket PRO', 'abet_documentation'); ?></span>
                        <span class="abet_doc_legend_item"><?php esc_html_e('Use the sidebar to browse every section of the plugin.', 'abet_documentation'); ?></span>
                        <span class="abet_doc_legend_item"><?php esc_html_e('Tip: press “/” to focus search.', 'abet_documentation'); ?></span>
                    </div>

                    <div class="abet_doc_body">
                        <aside class="abet_doc_sidebar">
                            <ul class="abet_doc_nav" role="tablist" aria-label="<?php esc_attr_e('Documentation sections', 'abet_documentation'); ?>">
                                <?php
                                foreach ($sections as $section) {
                                    if (isset($section['tabs'])) {
                                        $this->render_nav_group($section, $first_id);
                                    } else {
                                        $this->render_nav_item($section, $first_id);
                                    }
                                }
                                ?>
                            </ul>
                        </aside>

                        <section class="abet_doc_main">
                            <div class="abet_doc_tabs tab_left">
                                <div class="abet_doc_panels">
                                    <?php
                                    $is_first_tab = true;
                                    foreach ($sections as $section) {
                                        $tabs = isset($section['tabs']) ? $section['tabs'] : array($section);
                                        foreach ($tabs as $tab) {
                                            $fragment = $this->render_fragment($tab['file']);
                                            if ($is_first_tab) {
                                                $fragment = $this->mark_first_panel_active($fragment);
                                                $is_first_tab = false;
                                            }
                                            echo $fragment; // phpcs:ignore WordPress.Security.EscapeOutput
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="abet_doc_no_results">
                                <div style="font-size:34px;margin-bottom:8px;">🕵️</div>
                                <strong><?php esc_html_e('No documentation found', 'abet_documentation'); ?></strong><br />
                                <?php esc_html_e('Try a different search term.', 'abet_documentation'); ?>
                            </div>
                            <div class="abet_doc_pager" data-doc-prev="<?php esc_attr_e('Previous', 'abet_documentation'); ?>" data-doc-next="<?php esc_attr_e('Next', 'abet_documentation'); ?>">
                                <a href="#abet-documentation" class="abet_doc_pager_card is-prev">
                                    <span class="abet_doc_pager_dir"></span>
                                    <span class="abet_doc_pager_title"></span>
                                </a>
                                <a href="#abet-documentation" class="abet_doc_pager_card is-next">
                                    <span class="abet_doc_pager_dir"></span>
                                    <span class="abet_doc_pager_title"></span>
                                </a>
                            </div>
                        </section>
                    </div>

                    <div class="abet_doc_footer">
                        <span class="abet_doc_footer_note">
                            📘 ABP Event Ticket — Documentation v<?php echo esc_html(ABET_DOC_VERSION); ?> ·
                            <span class="abet_doc_top" role="button" tabindex="0">↑ <?php esc_html_e('Back to top', 'abet_documentation'); ?></span>
                        </span>
                        <span>
                            <?php esc_html_e('User guide by', 'abet_documentation'); ?>
                            <a href="https://abp-team.com" target="_blank" rel="noopener">ABPTEAM</a>
                        </span>
                    </div>
                </div>
            </div>
            <?php
        }

        private function render_nav_group(array $group, string $first_id): void {
            $overview = $group['overview'] ?? null;
            $headless = !empty($group['headless']);

            echo '<li class="abet_doc_group">';

            if (!$headless) {
                $menu_id = 'abet_doc_grp_' . esc_attr($group['id']);
                ?>
                <div class="abet_doc_group_head"
                     data-collapse-target="#<?php echo esc_attr($menu_id); ?>"
                     <?php if ($overview) : ?>data-tabs-target="#<?php echo esc_attr($overview); ?>"<?php endif; ?>
                     aria-expanded="true">
                    <span class="abet_doc_group_icon" aria-hidden="true"><?php $this->render_icon($group['icon']); ?></span>
                    <span class="abet_doc_group_label"><?php echo esc_html($group['label']); ?></span>
                    <span class="abet_doc_group_toggle" aria-hidden="true"></span>
                </div>
                <ul class="abet_doc_group_menu" id="<?php echo esc_attr($menu_id); ?>" data-collapse="#<?php echo esc_attr($menu_id); ?>" role="group">
                <?php
            }

            foreach ($group['tabs'] as $tab) {
                $this->render_nav_item($tab, $first_id);
            }

            if (!$headless) {
                echo '</ul>';
            }
            echo '</li>';
        }

        private function render_nav_item(array $tab, string $first_id): void {
            $active = ($tab['id'] === $first_id) ? ' abet_doc_active' : '';
            ?>
            <li class="abet_doc_nav_item<?php echo esc_attr($active); ?>"
                data-tabs-target="#<?php echo esc_attr($tab['id']); ?>"
                data-doc-search="<?php echo esc_attr(strtolower($tab['label']) . ' ' . $tab['keywords']); ?>"
                role="tab">
                <span class="abet_doc_nav_icon" aria-hidden="true"><?php $this->render_icon($tab['icon']); ?></span>
                <span class="abet_doc_nav_label"><?php echo esc_html($tab['label']); ?></span>
                <?php if (!empty($tab['pro'])) : ?>
                    <span class="abet_doc_nav_badge"><span class="abet_doc_badge abet_doc_badge_pro">PRO</span></span>
                <?php endif; ?>
            </li>
            <?php
        }

        /* -------------------------------------------------------------
         * Fragment rendering
         * ----------------------------------------------------------- */

        private function mark_first_panel_active(string $html): string {
            return (string) preg_replace('/<div class="abet_doc_panel"(\s)/', '<div class="abet_doc_panel abet_doc_active"$1', $html, 1);
        }

        private function render_icon(string $icon): void {
            if (substr($icon, 0, 2) === 'fa') {
                echo '<i class="' . esc_attr($icon) . '"></i>';
            } else {
                echo '<span class="abet_doc_icon_emoji">' . esc_html($icon) . '</span>';
            }
        }

        private function render_fragment(string $file): string {
            $path = ABET_DOC_INC . '/' . $file;
            if (!is_readable($path)) {
                return '<div class="abet_doc_panel"><p>' . esc_html__('Documentation section not found.', 'abet_documentation') . '</p></div>';
            }
            ob_start();
            try {
                require $path;
                $html = (string) ob_get_clean();
            } catch (\Throwable $e) {
                ob_end_clean();
                return '<div class="abet_doc_panel"><p>' . esc_html__('Documentation section could not be rendered.', 'abet_documentation') . '</p></div>';
            }
            return $this->hydrate_images($html);
        }

        /**
         * The fragments lazy-load their screenshots through data-abet-doc-img with src="#".
         * Replace src="#" with the real image URL so screenshots always load even if the
         * parent plugin scripts are not available.
         */
        private function hydrate_images(string $html): string {
            if (false === strpos($html, 'src="#"')) {
                return $html;
            }
            return (string) preg_replace_callback(
                '#<([a-z][a-z0-9]*)\b([^>]*)data-abet-doc-img="([^"]+)"([^>]*)>(.*?)</\1>#is',
                function ($m) {
                    $url   = esc_url($m[3]);
                    $inner = preg_replace('/src="#"([^>]*>)/', 'src="' . $url . '"$1', $m[5], 1);
                    return '<' . $m[1] . $m[2] . 'data-abet-doc-img="' . $url . '"' . $m[4] . '>' . $inner . '</' . $m[1] . '>';
                },
                $html
            );
        }
    }
    new ABET_Documentation();
}
