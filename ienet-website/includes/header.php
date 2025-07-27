<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'IeNet - Professional IT Services, Web Development, Cybersecurity, and Digital Solutions'; ?>">
    <meta name="keywords" content="<?php echo isset($meta_keywords) ? $meta_keywords : 'IT services, web development, cybersecurity, hosting, digital marketing, software development'; ?>">
    <title><?php echo isset($page_title) ? $page_title . ' - IeNet' : 'IeNet - Professional IT Services & Solutions'; ?></title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/style.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $base_url; ?>assets/images/favicon.ico">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' - IeNet' : 'IeNet - Professional IT Services'; ?>">
    <meta property="og:description" content="<?php echo isset($meta_description) ? $meta_description : 'Professional IT services including web development, cybersecurity, hosting, and digital solutions.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo isset($canonical_url) ? $canonical_url : 'https://ienet.com'; ?>">
    
    <!-- Schema.org markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "IeNet",
        "url": "https://ienet.com",
        "description": "Professional IT Services and Digital Solutions",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-XXX-XXX-XXXX",
            "contactType": "Customer Service"
        }
    }
    </script>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="<?php echo $base_url; ?>" style="color: white; text-decoration: none;">IeNet</a>
                </div>
                <nav>
                    <ul>
                        <li><a href="<?php echo $base_url; ?>">Home</a></li>
                        <li><a href="<?php echo $base_url; ?>pages/about/">About Us</a></li>
                        <li><a href="<?php echo $base_url; ?>pages/services/">Services</a></li>
                        <li><a href="<?php echo $base_url; ?>pages/testimonials/">Testimonials</a></li>
                        <li><a href="<?php echo $base_url; ?>pages/blog/">Blog</a></li>
                        <li><a href="<?php echo $base_url; ?>pages/contact/">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <?php if (isset($breadcrumbs) && !empty($breadcrumbs)): ?>
    <div class="breadcrumb">
        <div class="container">
            <nav class="breadcrumb-nav" aria-label="Breadcrumb">
                <?php foreach ($breadcrumbs as $index => $crumb): ?>
                    <?php if ($index > 0): ?>
                        <span class="breadcrumb-separator">›</span>
                    <?php endif; ?>
                    
                    <?php if (isset($crumb['url']) && $crumb['url']): ?>
                        <a href="<?php echo $crumb['url']; ?>"><?php echo htmlspecialchars($crumb['title']); ?></a>
                    <?php else: ?>
                        <span class="current"><?php echo htmlspecialchars($crumb['title']); ?></span>
                    <?php endif; ?>
                <?php endforeach; ?>
            </nav>
        </div>
    </div>
    <?php endif; ?>