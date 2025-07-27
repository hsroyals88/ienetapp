<?php
// Services Overview Page Configuration
$base_url = '../../';
$page_title = 'Professional IT Services & Digital Solutions';
$meta_description = 'Comprehensive IT services including web development, cybersecurity, hosting, digital marketing, mobile app development, custom software, CRM/ERP, database management, data analytics, branding, and IT consulting.';
$meta_keywords = 'IT services, web development, cybersecurity, web hosting, digital marketing, mobile app development, custom software development, CRM ERP, database management, data analytics, business branding, graphics design, IT consulting';
$canonical_url = 'https://ienet.com/pages/services/';

// Breadcrumbs
$breadcrumbs = [
    ['title' => 'Home', 'url' => $base_url],
    ['title' => 'Services', 'url' => '']
];

include $base_url . 'includes/header.php';
?>

<main>
    <div class="container">
        <!-- Page Header -->
        <section class="page-header">
            <h1 class="page-title">Our Professional IT Services</h1>
            <p class="page-subtitle">
                Comprehensive technology solutions designed to drive your business forward. From web development and cybersecurity to digital marketing and custom software development - we deliver excellence across all domains.
            </p>
        </section>

        <!-- Services Overview -->
        <section class="content-section">
            <h2 class="text-center mb-3">Complete Range of IT Services</h2>
            <p class="text-center mb-3" style="color: #666; font-size: 1.1rem;">
                Our expert team delivers cutting-edge solutions across multiple technology domains to meet all your business needs.
            </p>
            
            <div class="services-grid">
                <!-- Website Design & Development -->
                <div class="service-card">
                    <div class="service-icon">🌐</div>
                    <h3 class="service-title">Website Design & Development</h3>
                    <p class="service-description">
                        Create stunning, responsive, and high-performing websites that drive conversions and enhance user experience. From custom UI/UX design to complex e-commerce platforms.
                    </p>
                    <ul class="service-features">
                        <li>Custom UI/UX Design & Prototyping</li>
                        <li>E-commerce Development & Integration</li>
                        <li>CMS Development & Customization</li>
                        <li>Progressive Web Apps (PWA)</li>
                        <li>Website Redesign & Optimization</li>
                        <li>Performance & Accessibility Optimization</li>
                    </ul>
                    <div class="nav-links">
                        <a href="website-design-development/ui-ux-design/" class="nav-link">UI/UX Design</a>
                        <a href="website-design-development/e-commerce-development/" class="nav-link">E-commerce</a>
                        <a href="website-design-development/cms-development/" class="nav-link">CMS Development</a>
                        <a href="website-design-development/progressive-web-apps/" class="nav-link">PWA</a>
                    </div>
                    <a href="website-design-development/" class="btn btn-primary">Explore All Services</a>
                </div>

                <!-- Web Hosting & Infrastructure -->
                <div class="service-card">
                    <div class="service-icon">🖥️</div>
                    <h3 class="service-title">Web Hosting & Infrastructure</h3>
                    <p class="service-description">
                        Reliable, secure, and scalable hosting solutions for businesses of all sizes. From shared hosting to enterprise-grade dedicated servers and cloud infrastructure.
                    </p>
                    <ul class="service-features">
                        <li>Shared & VPS Hosting Solutions</li>
                        <li>Dedicated Server Management</li>
                        <li>Cloud Hosting & Auto-scaling</li>
                        <li>Domain Registration & Management</li>
                        <li>SSL Certificates & Security</li>
                        <li>Backup & Disaster Recovery</li>
                    </ul>
                    <div class="nav-links">
                        <a href="web-hosting/shared-hosting/" class="nav-link">Shared Hosting</a>
                        <a href="web-hosting/vps-hosting/" class="nav-link">VPS Hosting</a>
                        <a href="web-hosting/cloud-hosting/" class="nav-link">Cloud Hosting</a>
                        <a href="web-hosting/dedicated-server-hosting/" class="nav-link">Dedicated Servers</a>
                    </div>
                    <a href="web-hosting/" class="btn btn-primary">Explore All Services</a>
                </div>

                <!-- Cybersecurity Solutions -->
                <div class="service-card">
                    <div class="service-icon">🔒</div>
                    <h3 class="service-title">Cybersecurity Solutions</h3>
                    <p class="service-description">
                        Comprehensive security services to protect your digital assets from evolving cyber threats. From vulnerability assessments to 24/7 security monitoring.
                    </p>
                    <ul class="service-features">
                        <li>Vulnerability Assessment & Testing</li>
                        <li>Penetration Testing & Security Audits</li>
                        <li>Managed Security Services (24/7)</li>
                        <li>Firewall & Endpoint Security</li>
                        <li>DDoS Protection & Mitigation</li>
                        <li>Network Security Monitoring</li>
                    </ul>
                    <div class="nav-links">
                        <a href="cybersecurity/vulnerability-assessment/" class="nav-link">Vulnerability Assessment</a>
                        <a href="cybersecurity/penetration-testing/" class="nav-link">Penetration Testing</a>
                        <a href="cybersecurity/managed-security-services/" class="nav-link">Managed Security</a>
                        <a href="cybersecurity/firewall-management/" class="nav-link">Firewall Management</a>
                    </div>
                    <a href="cybersecurity/" class="btn btn-primary">Explore All Services</a>
                </div>

                <!-- Digital Marketing & Promotion -->
                <div class="service-card">
                    <div class="service-icon">📈</div>
                    <h3 class="service-title">Digital Marketing & Promotion</h3>
                    <p class="service-description">
                        Strategic digital marketing services to boost your online presence, drive traffic, and increase conversions through data-driven campaigns.
                    </p>
                    <ul class="service-features">
                        <li>Content Marketing & Strategy</li>
                        <li>Email Marketing Automation</li>
                        <li>PPC Management & Optimization</li>
                        <li>SEO & Conversion Rate Optimization</li>
                        <li>Social Media & Influencer Marketing</li>
                        <li>Online Reputation Management</li>
                    </ul>
                    <div class="nav-links">
                        <a href="digital-marketing-promotion/content-marketing/" class="nav-link">Content Marketing</a>
                        <a href="digital-marketing-promotion/email-marketing/" class="nav-link">Email Marketing</a>
                        <a href="digital-marketing-promotion/ppc-management/" class="nav-link">PPC Management</a>
                        <a href="digital-marketing-promotion/conversion-rate-optimization/" class="nav-link">CRO</a>
                    </div>
                    <a href="digital-marketing-promotion/" class="btn btn-primary">Explore All Services</a>
                </div>

                <!-- Mobile App Development -->
                <div class="service-card">
                    <div class="service-icon">📱</div>
                    <h3 class="service-title">Mobile App Development</h3>
                    <p class="service-description">
                        Build powerful, user-friendly mobile applications for iOS and Android platforms using native, cross-platform, and hybrid development approaches.
                    </p>
                    <ul class="service-features">
                        <li>Native iOS & Android Development</li>
                        <li>Cross-Platform App Solutions</li>
                        <li>Hybrid App Development</li>
                        <li>App UI/UX Design & Testing</li>
                        <li>App Store Optimization (ASO)</li>
                        <li>Enterprise Mobile Solutions</li>
                    </ul>
                    <div class="nav-links">
                        <a href="mobile-app-development/ios-app-development/" class="nav-link">iOS Development</a>
                        <a href="mobile-app-development/android-app-development/" class="nav-link">Android Development</a>
                        <a href="mobile-app-development/cross-platform-app-development/" class="nav-link">Cross-Platform</a>
                        <a href="mobile-app-development/app-ui-ux-design/" class="nav-link">App UI/UX</a>
                    </div>
                    <a href="mobile-app-development/" class="btn btn-primary">Explore All Services</a>
                </div>

                <!-- Custom Software Development -->
                <div class="service-card">
                    <div class="service-icon">⚙️</div>
                    <h3 class="service-title">Custom Software Development</h3>
                    <p class="service-description">
                        Tailored software solutions designed to meet your unique business requirements. From enterprise applications to SaaS platforms and API development.
                    </p>
                    <ul class="service-features">
                        <li>Enterprise Software Solutions</li>
                        <li>SaaS Application Development</li>
                        <li>API Development & Integration</li>
                        <li>Legacy System Modernization</li>
                        <li>Cloud Application Development</li>
                        <li>DevOps & Software Testing</li>
                    </ul>
                    <div class="nav-links">
                        <a href="custom-software-development/enterprise-software-solutions/" class="nav-link">Enterprise Software</a>
                        <a href="custom-software-development/saas-application-development/" class="nav-link">SaaS Development</a>
                        <a href="custom-software-development/api-development-integration/" class="nav-link">API Development</a>
                        <a href="custom-software-development/cloud-application-development/" class="nav-link">Cloud Applications</a>
                    </div>
                    <a href="custom-software-development/" class="btn btn-primary">Explore All Services</a>
                </div>

                <!-- CRM & ERP Development -->
                <div class="service-card">
                    <div class="service-icon">🏢</div>
                    <h3 class="service-title">CRM & ERP Development</h3>
                    <p class="service-description">
                        Streamline your business processes with customized CRM and ERP systems. Integration, automation, and optimization for maximum efficiency.
                    </p>
                    <ul class="service-features">
                        <li>CRM & ERP Customization</li>
                        <li>System Integration & Data Migration</li>
                        <li>Workflow Automation</li>
                        <li>Third-Party API Integration</li>
                        <li>User Training & Support</li>
                        <li>Mobile CRM/ERP Solutions</li>
                    </ul>
                    <div class="nav-links">
                        <a href="crm-erp-development/crm-customization/" class="nav-link">CRM Customization</a>
                        <a href="crm-erp-development/erp-customization/" class="nav-link">ERP Customization</a>
                        <a href="crm-erp-development/workflow-automation/" class="nav-link">Workflow Automation</a>
                        <a href="crm-erp-development/data-migration/" class="nav-link">Data Migration</a>
                    </div>
                    <a href="crm-erp-development/" class="btn btn-primary">Explore All Services</a>
                </div>

                <!-- Database Management -->
                <div class="service-card">
                    <div class="service-icon">🗄️</div>
                    <h3 class="service-title">Database Management</h3>
                    <p class="service-description">
                        Professional database services including design, optimization, security, and management for SQL and NoSQL databases across all platforms.
                    </p>
                    <ul class="service-features">
                        <li>Database Design & Architecture</li>
                        <li>Performance Optimization</li>
                        <li>Backup & Recovery Solutions</li>
                        <li>Database Migration & Security</li>
                        <li>Data Warehousing</li>
                        <li>SQL & NoSQL Database Solutions</li>
                    </ul>
                    <div class="nav-links">
                        <a href="database-management/database-design-architecture/" class="nav-link">Database Design</a>
                        <a href="database-management/database-optimization/" class="nav-link">Optimization</a>
                        <a href="database-management/backup-recovery/" class="nav-link">Backup & Recovery</a>
                        <a href="database-management/database-security/" class="nav-link">Database Security</a>
                    </div>
                    <a href="database-management/" class="btn btn-primary">Explore All Services</a>
                </div>

                <!-- Data Analytics & BI -->
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3 class="service-title">Data Analytics & Business Intelligence</h3>
                    <p class="service-description">
                        Transform your data into actionable insights with advanced analytics, visualization, and business intelligence solutions for data-driven decisions.
                    </p>
                    <ul class="service-features">
                        <li>Business Intelligence Solutions</li>
                        <li>Data Visualization & Dashboards</li>
                        <li>Predictive Analytics & Machine Learning</li>
                        <li>Big Data Analytics</li>
                        <li>Real-time Analytics</li>
                        <li>Customer Analytics</li>
                    </ul>
                    <div class="nav-links">
                        <a href="data-analytics/business-intelligence-solutions/" class="nav-link">Business Intelligence</a>
                        <a href="data-analytics/data-visualization/" class="nav-link">Data Visualization</a>
                        <a href="data-analytics/predictive-analytics/" class="nav-link">Predictive Analytics</a>
                        <a href="data-analytics/big-data-analytics/" class="nav-link">Big Data</a>
                    </div>
                    <a href="data-analytics/" class="btn btn-primary">Explore All Services</a>
                </div>

                <!-- Business Branding -->
                <div class="service-card">
                    <div class="service-icon">🎨</div>
                    <h3 class="service-title">Business Branding & Identity</h3>
                    <p class="service-description">
                        Build a strong, memorable brand identity that resonates with your target audience through strategic branding, design, and messaging.
                    </p>
                    <ul class="service-features">
                        <li>Brand Strategy Development</li>
                        <li>Logo Design & Brand Guidelines</li>
                        <li>Corporate Identity Design</li>
                        <li>Brand Messaging & Voice</li>
                        <li>Rebranding Services</li>
                        <li>Brand Collateral Design</li>
                    </ul>
                    <div class="nav-links">
                        <a href="business-branding/brand-strategy-development/" class="nav-link">Brand Strategy</a>
                        <a href="business-branding/logo-design/" class="nav-link">Logo Design</a>
                        <a href="business-branding/corporate-identity-design/" class="nav-link">Corporate Identity</a>
                        <a href="business-branding/brand-guidelines/" class="nav-link">Brand Guidelines</a>
                    </div>
                    <a href="business-branding/" class="btn btn-primary">Explore All Services</a>
                </div>

                <!-- Graphics & Video Design -->
                <div class="service-card">
                    <div class="service-icon">🎬</div>
                    <h3 class="service-title">Graphics & Video Design</h3>
                    <p class="service-description">
                        Professional graphic design, video production, and animation services to create compelling visual content that engages your audience.
                    </p>
                    <ul class="service-features">
                        <li>Graphic Design & Branding</li>
                        <li>Video Production & Editing</li>
                        <li>2D/3D Animation</li>
                        <li>Motion Graphics & Explainer Videos</li>
                        <li>Infographic Design</li>
                        <li>Social Media Graphics</li>
                    </ul>
                    <div class="nav-links">
                        <a href="graphics-video-design/graphic-design/" class="nav-link">Graphic Design</a>
                        <a href="graphics-video-design/video-production/" class="nav-link">Video Production</a>
                        <a href="graphics-video-design/2d-3d-animation/" class="nav-link">Animation</a>
                        <a href="graphics-video-design/motion-graphics/" class="nav-link">Motion Graphics</a>
                    </div>
                    <a href="graphics-video-design/" class="btn btn-primary">Explore All Services</a>
                </div>

                <!-- IT Consulting -->
                <div class="service-card">
                    <div class="service-icon">💡</div>
                    <h3 class="service-title">IT Consulting & Strategy</h3>
                    <p class="service-description">
                        Strategic IT guidance and consulting services to help you make informed technology decisions, optimize infrastructure, and drive digital transformation.
                    </p>
                    <ul class="service-features">
                        <li>IT Strategy & Roadmapping</li>
                        <li>Cloud Consulting & Migration</li>
                        <li>Digital Transformation</li>
                        <li>IT Infrastructure Assessment</li>
                        <li>Business Process Optimization</li>
                        <li>Technology Implementation</li>
                    </ul>
                    <div class="nav-links">
                        <a href="it-consulting/it-strategy-consulting/" class="nav-link">IT Strategy</a>
                        <a href="it-consulting/cloud-consulting/" class="nav-link">Cloud Consulting</a>
                        <a href="it-consulting/digital-transformation/" class="nav-link">Digital Transformation</a>
                        <a href="it-consulting/technology-roadmapping/" class="nav-link">Technology Roadmapping</a>
                    </div>
                    <a href="it-consulting/" class="btn btn-primary">Explore All Services</a>
                </div>
            </div>
        </section>

        <!-- Why Choose Our Services -->
        <section class="content-section">
            <h2 class="text-center mb-3">Why Choose IeNet for Your IT Needs?</h2>
            <div class="feature-list">
                <div class="feature-item">
                    <h4>🎯 Comprehensive Solutions</h4>
                    <p>Full-stack IT services under one roof - from strategy and development to deployment and maintenance.</p>
                </div>
                <div class="feature-item">
                    <h4>🚀 Latest Technologies</h4>
                    <p>We leverage cutting-edge technologies and industry best practices to deliver future-ready solutions.</p>
                </div>
                <div class="feature-item">
                    <h4>👨‍💼 Expert Team</h4>
                    <p>Certified professionals with deep expertise across multiple technology domains and industries.</p>
                </div>
                <div class="feature-item">
                    <h4>🔄 Agile Methodology</h4>
                    <p>Iterative development approach ensuring faster delivery and continuous improvement.</p>
                </div>
                <div class="feature-item">
                    <h4>🛡️ Security-First Approach</h4>
                    <p>Security and compliance built into every solution from the ground up.</p>
                </div>
                <div class="feature-item">
                    <h4>📞 24/7 Support</h4>
                    <p>Round-the-clock technical support and maintenance to keep your systems running smoothly.</p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="cta-section">
            <h3>Ready to Start Your Next Project?</h3>
            <p>
                Let's discuss your requirements and create a customized solution that drives your business forward. 
                Our expert team is ready to help you achieve your technology goals.
            </p>
            <div>
                <a href="../contact/" class="btn btn-primary" style="background: white; color: #667eea; margin-right: 1rem;">Get Free Consultation</a>
                <a href="../about/" class="btn btn-secondary" style="border: 2px solid white; color: white;">Learn About Us</a>
            </div>
        </section>
    </div>
</main>

<?php include $base_url . 'includes/footer.php'; ?>