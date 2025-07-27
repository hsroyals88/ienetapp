<?php
// Homepage Configuration
$base_url = './';
$page_title = 'Professional IT Services & Digital Solutions';
$meta_description = 'IeNet provides comprehensive IT services including web development, cybersecurity, hosting, digital marketing, mobile app development, and custom software solutions.';
$meta_keywords = 'IT services, web development, cybersecurity, web hosting, digital marketing, mobile app development, custom software, CRM, ERP, database management, data analytics, business branding, graphics design, IT consulting';
$canonical_url = 'https://ienet.com';

include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">Professional IT Services & Digital Solutions</h1>
            <p class="page-subtitle">
                Empowering businesses with cutting-edge technology solutions. From web development and cybersecurity to digital marketing and custom software - we deliver excellence in every project.
            </p>
            <div style="margin-top: 2rem;">
                <a href="pages/services/" class="btn btn-primary" style="margin-right: 1rem;">Explore Services</a>
                <a href="pages/contact/" class="btn btn-secondary">Get Started</a>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Main Services Overview -->
        <section class="content-section">
            <h2 class="text-center mb-3">Our Core Services</h2>
            <p class="text-center mb-3" style="color: #666; font-size: 1.1rem;">
                Comprehensive technology solutions designed to accelerate your business growth and digital transformation.
            </p>
            
            <div class="services-grid">
                <!-- Website Design & Development -->
                <div class="service-card">
                    <div class="service-icon">🌐</div>
                    <h3 class="service-title">Website Design & Development</h3>
                    <p class="service-description">
                        Create stunning, responsive websites that drive results. From UI/UX design to e-commerce solutions and performance optimization.
                    </p>
                    <ul class="service-features">
                        <li>Custom UI/UX Design</li>
                        <li>E-commerce Development</li>
                        <li>CMS Solutions</li>
                        <li>Progressive Web Apps</li>
                        <li>Website Maintenance</li>
                    </ul>
                    <a href="pages/services/website-design-development/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Web Hosting -->
                <div class="service-card">
                    <div class="service-icon">🖥️</div>
                    <h3 class="service-title">Web Hosting & Infrastructure</h3>
                    <p class="service-description">
                        Reliable, secure, and scalable hosting solutions. From shared hosting to dedicated servers and cloud infrastructure.
                    </p>
                    <ul class="service-features">
                        <li>Shared & VPS Hosting</li>
                        <li>Dedicated Servers</li>
                        <li>Cloud Hosting</li>
                        <li>Domain Management</li>
                        <li>SSL Certificates</li>
                    </ul>
                    <a href="pages/services/web-hosting/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Cybersecurity -->
                <div class="service-card">
                    <div class="service-icon">🔒</div>
                    <h3 class="service-title">Cybersecurity Solutions</h3>
                    <p class="service-description">
                        Protect your digital assets with comprehensive security services. From vulnerability assessments to 24/7 monitoring.
                    </p>
                    <ul class="service-features">
                        <li>Security Audits</li>
                        <li>Penetration Testing</li>
                        <li>Firewall Management</li>
                        <li>Endpoint Security</li>
                        <li>DDoS Protection</li>
                    </ul>
                    <a href="pages/services/cybersecurity/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Digital Marketing -->
                <div class="service-card">
                    <div class="service-icon">📈</div>
                    <h3 class="service-title">Digital Marketing & Promotion</h3>
                    <p class="service-description">
                        Boost your online presence and drive growth with strategic digital marketing campaigns and optimization.
                    </p>
                    <ul class="service-features">
                        <li>Content Marketing</li>
                        <li>Email Marketing</li>
                        <li>PPC Management</li>
                        <li>SEO Optimization</li>
                        <li>Social Media Marketing</li>
                    </ul>
                    <a href="pages/services/digital-marketing-promotion/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Mobile App Development -->
                <div class="service-card">
                    <div class="service-icon">📱</div>
                    <h3 class="service-title">Mobile App Development</h3>
                    <p class="service-description">
                        Build powerful mobile applications for iOS and Android. Native, cross-platform, and hybrid solutions.
                    </p>
                    <ul class="service-features">
                        <li>iOS App Development</li>
                        <li>Android Development</li>
                        <li>Cross-Platform Apps</li>
                        <li>App Store Optimization</li>
                        <li>Enterprise Solutions</li>
                    </ul>
                    <a href="pages/services/mobile-app-development/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Custom Software -->
                <div class="service-card">
                    <div class="service-icon">⚙️</div>
                    <h3 class="service-title">Custom Software Development</h3>
                    <p class="service-description">
                        Tailored software solutions for your unique business needs. From enterprise applications to SaaS platforms.
                    </p>
                    <ul class="service-features">
                        <li>Enterprise Software</li>
                        <li>SaaS Applications</li>
                        <li>API Development</li>
                        <li>Legacy Modernization</li>
                        <li>Cloud Applications</li>
                    </ul>
                    <a href="pages/services/custom-software-development/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- CRM & ERP -->
                <div class="service-card">
                    <div class="service-icon">🏢</div>
                    <h3 class="service-title">CRM & ERP Solutions</h3>
                    <p class="service-description">
                        Streamline your business processes with customized CRM and ERP systems designed for your workflow.
                    </p>
                    <ul class="service-features">
                        <li>CRM Customization</li>
                        <li>ERP Development</li>
                        <li>System Integration</li>
                        <li>Data Migration</li>
                        <li>Workflow Automation</li>
                    </ul>
                    <a href="pages/services/crm-erp-development/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Database Management -->
                <div class="service-card">
                    <div class="service-icon">🗄️</div>
                    <h3 class="service-title">Database Management</h3>
                    <p class="service-description">
                        Optimize your data infrastructure with professional database design, management, and optimization services.
                    </p>
                    <ul class="service-features">
                        <li>Database Design</li>
                        <li>Performance Optimization</li>
                        <li>Backup & Recovery</li>
                        <li>Data Migration</li>
                        <li>Security Management</li>
                    </ul>
                    <a href="pages/services/database-management/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Data Analytics -->
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3 class="service-title">Data Analytics & BI</h3>
                    <p class="service-description">
                        Transform your data into actionable insights with advanced analytics, visualization, and business intelligence.
                    </p>
                    <ul class="service-features">
                        <li>Business Intelligence</li>
                        <li>Data Visualization</li>
                        <li>Predictive Analytics</li>
                        <li>Big Data Solutions</li>
                        <li>Real-time Analytics</li>
                    </ul>
                    <a href="pages/services/data-analytics/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Business Branding -->
                <div class="service-card">
                    <div class="service-icon">🎨</div>
                    <h3 class="service-title">Business Branding</h3>
                    <p class="service-description">
                        Build a strong brand identity that resonates with your audience through strategic branding and design.
                    </p>
                    <ul class="service-features">
                        <li>Brand Strategy</li>
                        <li>Logo Design</li>
                        <li>Brand Guidelines</li>
                        <li>Corporate Identity</li>
                        <li>Rebranding Services</li>
                    </ul>
                    <a href="pages/services/business-branding/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- Graphics & Video -->
                <div class="service-card">
                    <div class="service-icon">🎬</div>
                    <h3 class="service-title">Graphics & Video Design</h3>
                    <p class="service-description">
                        Captivate your audience with professional graphics, animations, and video content that tells your story.
                    </p>
                    <ul class="service-features">
                        <li>Graphic Design</li>
                        <li>Video Production</li>
                        <li>2D/3D Animation</li>
                        <li>Motion Graphics</li>
                        <li>Infographic Design</li>
                    </ul>
                    <a href="pages/services/graphics-video-design/" class="btn btn-primary">Learn More</a>
                </div>

                <!-- IT Consulting -->
                <div class="service-card">
                    <div class="service-icon">💡</div>
                    <h3 class="service-title">IT Consulting</h3>
                    <p class="service-description">
                        Strategic IT guidance to help you make informed technology decisions and optimize your IT infrastructure.
                    </p>
                    <ul class="service-features">
                        <li>IT Strategy</li>
                        <li>Cloud Consulting</li>
                        <li>Digital Transformation</li>
                        <li>Technology Roadmapping</li>
                        <li>Process Optimization</li>
                    </ul>
                    <a href="pages/services/it-consulting/" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </section>

        <!-- Why Choose IeNet -->
        <section class="content-section">
            <h2 class="text-center mb-3">Why Choose IeNet?</h2>
            <div class="feature-list">
                <div class="feature-item">
                    <h4>🏆 Proven Expertise</h4>
                    <p>Years of experience delivering successful IT projects across various industries and technologies.</p>
                </div>
                <div class="feature-item">
                    <h4>🚀 Cutting-Edge Technology</h4>
                    <p>We stay ahead of technology trends to provide you with the most advanced and effective solutions.</p>
                </div>
                <div class="feature-item">
                    <h4>👥 Dedicated Support</h4>
                    <p>24/7 technical support and dedicated project managers ensure your success every step of the way.</p>
                </div>
                <div class="feature-item">
                    <h4>💰 Cost-Effective Solutions</h4>
                    <p>Competitive pricing without compromising on quality. We deliver maximum value for your investment.</p>
                </div>
                <div class="feature-item">
                    <h4>⚡ Fast Delivery</h4>
                    <p>Agile development methodologies ensure quick turnaround times without sacrificing quality.</p>
                </div>
                <div class="feature-item">
                    <h4>🔒 Security First</h4>
                    <p>Security is built into every solution we deliver, protecting your business and customer data.</p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="cta-section">
            <h3>Ready to Transform Your Business?</h3>
            <p>
                Let's discuss your project requirements and create a customized solution that drives your business forward. 
                Our expert team is ready to help you achieve your digital goals.
            </p>
            <div>
                <a href="pages/contact/" class="btn btn-primary" style="background: white; color: #667eea; margin-right: 1rem;">Get Free Consultation</a>
                <a href="pages/services/" class="btn btn-secondary" style="border: 2px solid white; color: white;">View All Services</a>
            </div>
        </section>
    </div>
</main>

<?php include 'includes/footer.php'; ?>