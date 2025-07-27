<?php
// Website Design & Development Service Page Configuration
$base_url = '../../../';
$page_title = 'Website Design & Development Services';
$meta_description = 'Professional website design and development services including UI/UX design, e-commerce development, CMS solutions, progressive web apps, website redesign, and performance optimization.';
$meta_keywords = 'website design, web development, UI UX design, e-commerce development, CMS development, progressive web apps, website redesign, responsive web design, website optimization';
$canonical_url = 'https://ienet.com/pages/services/website-design-development/';

// Breadcrumbs
$breadcrumbs = [
    ['title' => 'Home', 'url' => $base_url],
    ['title' => 'Services', 'url' => '../'],
    ['title' => 'Website Design & Development', 'url' => '']
];

include $base_url . 'includes/header.php';
?>

<main>
    <div class="container">
        <!-- Page Header -->
        <section class="page-header">
            <h1 class="page-title">Website Design & Development</h1>
            <p class="page-subtitle">
                Create stunning, responsive, and high-performing websites that drive conversions and enhance user experience. From custom UI/UX design to complex e-commerce platforms and progressive web applications.
            </p>
        </section>

        <!-- Service Overview -->
        <section class="content-section">
            <div class="row">
                <div class="col-2">
                    <h2>Transform Your Digital Presence</h2>
                    <p>
                        In today's digital-first world, your website is often the first interaction customers have with your brand. Our comprehensive website design and development services ensure that first impression is not only memorable but also drives meaningful business results.
                    </p>
                    <p>
                        We combine creative design excellence with cutting-edge development technologies to create websites that are visually stunning, highly functional, and optimized for performance across all devices and platforms.
                    </p>
                </div>
                <div class="col-2">
                    <h3>Key Benefits</h3>
                    <ul class="service-features">
                        <li>Enhanced User Experience & Engagement</li>
                        <li>Improved Search Engine Rankings</li>
                        <li>Higher Conversion Rates</li>
                        <li>Mobile-First Responsive Design</li>
                        <li>Fast Loading & Performance Optimized</li>
                        <li>Scalable & Future-Ready Architecture</li>
                        <li>Security & Compliance Standards</li>
                        <li>Ongoing Support & Maintenance</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Sub-Services -->
        <section class="content-section">
            <h2 class="text-center mb-3">Our Website Development Services</h2>
            <p class="text-center mb-3" style="color: #666; font-size: 1.1rem;">
                Comprehensive web solutions tailored to your specific business needs and objectives.
            </p>
            
            <div class="services-grid">
                <!-- UI/UX Design -->
                <div class="service-card">
                    <div class="service-icon">🎨</div>
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-description">
                        Create intuitive, engaging, and conversion-focused user interfaces backed by thorough user experience research and testing.
                    </p>
                    <ul class="service-features">
                        <li>User Research & Journey Mapping</li>
                        <li>Wireframing & Interactive Prototyping</li>
                        <li>Visual Design & Brand Integration</li>
                        <li>Usability Testing & Optimization</li>
                        <li>Accessibility & Inclusive Design</li>
                        <li>Design System Creation</li>
                    </ul>
                    <div class="nav-links">
                        <a href="ui-ux-design/wireframing-prototyping/" class="nav-link">Wireframing</a>
                        <a href="ui-ux-design/user-journey-mapping/" class="nav-link">User Journey</a>
                        <a href="ui-ux-design/usability-testing/" class="nav-link">Usability Testing</a>
                        <a href="ui-ux-design/accessibility-design/" class="nav-link">Accessibility</a>
                    </div>
                    <a href="ui-ux-design/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- E-commerce Development -->
                <div class="service-card">
                    <div class="service-icon">🛒</div>
                    <h3 class="service-title">E-commerce Development</h3>
                    <p class="service-description">
                        Build powerful online stores with secure payment processing, inventory management, and features designed to maximize sales and customer satisfaction.
                    </p>
                    <ul class="service-features">
                        <li>Custom E-commerce Platforms</li>
                        <li>Payment Gateway Integration</li>
                        <li>Product Catalog Management</li>
                        <li>Shopping Cart & Checkout Optimization</li>
                        <li>Order Management Systems</li>
                        <li>Multi-currency & Multi-language</li>
                    </ul>
                    <div class="nav-links">
                        <a href="e-commerce-development/payment-gateway-integration/" class="nav-link">Payment Gateways</a>
                        <a href="e-commerce-development/product-catalog-management/" class="nav-link">Product Catalog</a>
                        <a href="e-commerce-development/shopping-cart-functionality/" class="nav-link">Shopping Cart</a>
                        <a href="e-commerce-development/order-management-system/" class="nav-link">Order Management</a>
                    </div>
                    <a href="e-commerce-development/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- CMS Development -->
                <div class="service-card">
                    <div class="service-icon">📝</div>
                    <h3 class="service-title">CMS Development</h3>
                    <p class="service-description">
                        Develop flexible content management systems that empower you to easily update and manage your website content without technical expertise.
                    </p>
                    <ul class="service-features">
                        <li>Custom CMS Solutions</li>
                        <li>WordPress Customization</li>
                        <li>Plugin & Module Development</li>
                        <li>Content Migration Services</li>
                        <li>User Role Management</li>
                        <li>SEO-Optimized Architecture</li>
                    </ul>
                    <div class="nav-links">
                        <a href="cms-development/wordpress-customization/" class="nav-link">WordPress</a>
                        <a href="cms-development/plugin-module-development/" class="nav-link">Plugin Development</a>
                        <a href="cms-development/content-migration/" class="nav-link">Content Migration</a>
                        <a href="cms-development/seo-optimization-tools/" class="nav-link">SEO Tools</a>
                    </div>
                    <a href="cms-development/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Website Redesign -->
                <div class="service-card">
                    <div class="service-icon">🔄</div>
                    <h3 class="service-title">Website Redesign</h3>
                    <p class="service-description">
                        Modernize your existing website with fresh design, improved functionality, and enhanced performance to better serve your evolving business needs.
                    </p>
                    <ul class="service-features">
                        <li>Comprehensive Site Audit</li>
                        <li>UI/UX Refresh & Modernization</li>
                        <li>Content Strategy & Revamp</li>
                        <li>Performance Optimization</li>
                        <li>Mobile Responsiveness</li>
                        <li>SEO & Conversion Improvements</li>
                    </ul>
                    <div class="nav-links">
                        <a href="website-redesign/site-audit-analysis/" class="nav-link">Site Audit</a>
                        <a href="website-redesign/ui-refresh/" class="nav-link">UI Refresh</a>
                        <a href="website-redesign/mobile-optimization/" class="nav-link">Mobile Optimization</a>
                        <a href="website-redesign/conversion-optimization/" class="nav-link">Conversion Optimization</a>
                    </div>
                    <a href="website-redesign/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Landing Page Design -->
                <div class="service-card">
                    <div class="service-icon">🎯</div>
                    <h3 class="service-title">Landing Page Design</h3>
                    <p class="service-description">
                        Create high-converting landing pages optimized for specific campaigns, products, or services with focused messaging and clear calls-to-action.
                    </p>
                    <ul class="service-features">
                        <li>Conversion-Focused Design</li>
                        <li>A/B Testing & Optimization</li>
                        <li>Lead Capture Forms</li>
                        <li>Fast Loading Performance</li>
                        <li>Mobile-Responsive Layouts</li>
                        <li>Analytics & Tracking Integration</li>
                    </ul>
                    <div class="nav-links">
                        <a href="landing-page-design/custom-layouts/" class="nav-link">Custom Layouts</a>
                        <a href="landing-page-design/ab-testing/" class="nav-link">A/B Testing</a>
                        <a href="landing-page-design/lead-capture-forms/" class="nav-link">Lead Capture</a>
                        <a href="landing-page-design/conversion-tracking/" class="nav-link">Conversion Tracking</a>
                    </div>
                    <a href="landing-page-design/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Responsive Web Design -->
                <div class="service-card">
                    <div class="service-icon">📱</div>
                    <h3 class="service-title">Responsive Web Design</h3>
                    <p class="service-description">
                        Ensure your website looks and functions perfectly across all devices and screen sizes with mobile-first responsive design principles.
                    </p>
                    <ul class="service-features">
                        <li>Mobile-First Design Approach</li>
                        <li>Cross-Device Compatibility</li>
                        <li>Flexible Grid Systems</li>
                        <li>Adaptive Images & Media</li>
                        <li>Touch-Friendly Navigation</li>
                        <li>Performance Optimization</li>
                    </ul>
                    <div class="nav-links">
                        <a href="responsive-web-design/mobile-optimization/" class="nav-link">Mobile Optimization</a>
                        <a href="responsive-web-design/flexible-grids/" class="nav-link">Flexible Grids</a>
                        <a href="responsive-web-design/adaptive-images/" class="nav-link">Adaptive Images</a>
                        <a href="responsive-web-design/cross-browser-compatibility/" class="nav-link">Cross-Browser</a>
                    </div>
                    <a href="responsive-web-design/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Progressive Web Apps -->
                <div class="service-card">
                    <div class="service-icon">⚡</div>
                    <h3 class="service-title">Progressive Web Apps (PWA)</h3>
                    <p class="service-description">
                        Build app-like web experiences that work offline, load instantly, and provide native app functionality through modern web technologies.
                    </p>
                    <ul class="service-features">
                        <li>Offline Functionality</li>
                        <li>Push Notifications</li>
                        <li>App-like User Experience</li>
                        <li>Fast Loading & Caching</li>
                        <li>Home Screen Installation</li>
                        <li>Background Synchronization</li>
                    </ul>
                    <div class="nav-links">
                        <a href="progressive-web-apps/offline-functionality/" class="nav-link">Offline Features</a>
                        <a href="progressive-web-apps/push-notifications/" class="nav-link">Push Notifications</a>
                        <a href="progressive-web-apps/app-like-experience/" class="nav-link">App Experience</a>
                        <a href="progressive-web-apps/home-screen-installation/" class="nav-link">Home Screen</a>
                    </div>
                    <a href="progressive-web-apps/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Website Maintenance & Support -->
                <div class="service-card">
                    <div class="service-icon">🔧</div>
                    <h3 class="service-title">Website Maintenance & Support</h3>
                    <p class="service-description">
                        Keep your website secure, updated, and performing optimally with comprehensive maintenance and technical support services.
                    </p>
                    <ul class="service-features">
                        <li>Regular Security Updates</li>
                        <li>Content Updates & Management</li>
                        <li>Performance Monitoring</li>
                        <li>Backup & Recovery Services</li>
                        <li>Bug Fixes & Troubleshooting</li>
                        <li>24/7 Technical Support</li>
                    </ul>
                    <div class="nav-links">
                        <a href="website-maintenance-support/security-updates/" class="nav-link">Security Updates</a>
                        <a href="website-maintenance-support/performance-monitoring/" class="nav-link">Performance Monitoring</a>
                        <a href="website-maintenance-support/regular-backups/" class="nav-link">Regular Backups</a>
                        <a href="website-maintenance-support/technical-support/" class="nav-link">Technical Support</a>
                    </div>
                    <a href="website-maintenance-support/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Accessibility Optimization -->
                <div class="service-card">
                    <div class="service-icon">♿</div>
                    <h3 class="service-title">Accessibility Optimization</h3>
                    <p class="service-description">
                        Ensure your website is accessible to all users, including those with disabilities, while meeting WCAG compliance standards.
                    </p>
                    <ul class="service-features">
                        <li>WCAG 2.1 Compliance</li>
                        <li>Screen Reader Compatibility</li>
                        <li>Keyboard Navigation Support</li>
                        <li>Color Contrast Optimization</li>
                        <li>Alternative Text Implementation</li>
                        <li>Accessibility Audits & Testing</li>
                    </ul>
                    <div class="nav-links">
                        <a href="accessibility-optimization/wcag-compliance/" class="nav-link">WCAG Compliance</a>
                        <a href="accessibility-optimization/screen-reader-support/" class="nav-link">Screen Reader</a>
                        <a href="accessibility-optimization/keyboard-navigation/" class="nav-link">Keyboard Navigation</a>
                        <a href="accessibility-optimization/color-contrast-adjustments/" class="nav-link">Color Contrast</a>
                    </div>
                    <a href="accessibility-optimization/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Website Performance Optimization -->
                <div class="service-card">
                    <div class="service-icon">🚀</div>
                    <h3 class="service-title">Website Performance Optimization</h3>
                    <p class="service-description">
                        Maximize your website's speed, performance, and search engine rankings through comprehensive optimization techniques and best practices.
                    </p>
                    <ul class="service-features">
                        <li>Page Speed Optimization</li>
                        <li>Image & Code Compression</li>
                        <li>Caching Implementation</li>
                        <li>CDN Integration</li>
                        <li>Database Optimization</li>
                        <li>Performance Audits & Monitoring</li>
                    </ul>
                    <div class="nav-links">
                        <a href="website-performance-optimization/image-compression/" class="nav-link">Image Compression</a>
                        <a href="website-performance-optimization/caching-implementation/" class="nav-link">Caching</a>
                        <a href="website-performance-optimization/cdn-integration/" class="nav-link">CDN Integration</a>
                        <a href="website-performance-optimization/performance-audits/" class="nav-link">Performance Audits</a>
                    </div>
                    <a href="website-performance-optimization/" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </section>

        <!-- Technologies & Tools -->
        <section class="content-section">
            <h2 class="text-center mb-3">Technologies & Platforms We Use</h2>
            <div class="feature-list">
                <div class="feature-item">
                    <h4>Frontend Technologies</h4>
                    <p>HTML5, CSS3, JavaScript, React, Vue.js, Angular, TypeScript, Sass/SCSS</p>
                </div>
                <div class="feature-item">
                    <h4>Backend Development</h4>
                    <p>PHP, Node.js, Python, .NET, Java, Ruby on Rails, Laravel, Express.js</p>
                </div>
                <div class="feature-item">
                    <h4>CMS Platforms</h4>
                    <p>WordPress, Drupal, Joomla, Shopify, Magento, WooCommerce</p>
                </div>
                <div class="feature-item">
                    <h4>E-commerce Solutions</h4>
                    <p>Shopify Plus, Magento Commerce, WooCommerce, BigCommerce, Custom Solutions</p>
                </div>
                <div class="feature-item">
                    <h4>Database Systems</h4>
                    <p>MySQL, PostgreSQL, MongoDB, SQLite, Redis, Firebase</p>
                </div>
                <div class="feature-item">
                    <h4>Cloud & Hosting</h4>
                    <p>AWS, Google Cloud, Azure, DigitalOcean, Cloudflare, Netlify</p>
                </div>
            </div>
        </section>

        <!-- Process -->
        <section class="content-section">
            <h2 class="text-center mb-3">Our Development Process</h2>
            <div class="feature-list">
                <div class="feature-item">
                    <h4>1. Discovery & Planning</h4>
                    <p>Requirements gathering, competitor analysis, technical specifications, and project roadmap creation.</p>
                </div>
                <div class="feature-item">
                    <h4>2. Design & Prototyping</h4>
                    <p>Wireframing, visual design, interactive prototypes, and user experience optimization.</p>
                </div>
                <div class="feature-item">
                    <h4>3. Development & Integration</h4>
                    <p>Frontend and backend development, third-party integrations, and functionality implementation.</p>
                </div>
                <div class="feature-item">
                    <h4>4. Testing & Quality Assurance</h4>
                    <p>Cross-browser testing, performance optimization, security testing, and bug fixes.</p>
                </div>
                <div class="feature-item">
                    <h4>5. Launch & Deployment</h4>
                    <p>Server setup, domain configuration, SSL implementation, and go-live support.</p>
                </div>
                <div class="feature-item">
                    <h4>6. Support & Maintenance</h4>
                    <p>Ongoing updates, security monitoring, performance optimization, and technical support.</p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="cta-section">
            <h3>Ready to Build Your Dream Website?</h3>
            <p>
                Let's create a website that not only looks amazing but also drives real business results. 
                Our team of expert designers and developers is ready to bring your vision to life.
            </p>
            <div>
                <a href="../../contact/" class="btn btn-primary" style="background: white; color: #667eea; margin-right: 1rem;">Start Your Project</a>
                <a href="../../about/" class="btn btn-secondary" style="border: 2px solid white; color: white;">Learn About Our Team</a>
            </div>
        </section>
    </div>
</main>

<?php include $base_url . 'includes/footer.php'; ?>