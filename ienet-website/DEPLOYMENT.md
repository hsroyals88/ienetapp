# IeNet Website Deployment Guide

This guide will help you deploy the IeNet website to various hosting environments.

## 📋 Prerequisites

- Web server with PHP 7.4+ support
- Apache or Nginx web server
- MySQL database (optional, for future dynamic features)
- SSL certificate (recommended)

## 🚀 Deployment Options

### Option 1: Shared Hosting (cPanel/DirectAdmin)

1. **Download the repository**
   ```bash
   git clone https://github.com/yourusername/ienet-website.git
   ```

2. **Upload files**
   - Compress the entire project folder
   - Upload via File Manager or FTP
   - Extract to your domain's public_html folder

3. **Set permissions**
   - Ensure PHP files have 644 permissions
   - Set directories to 755 permissions

4. **Configure domain**
   - Point your domain to the uploaded folder
   - Ensure PHP is enabled

### Option 2: VPS/Dedicated Server

1. **Clone repository**
   ```bash
   cd /var/www/html
   git clone https://github.com/yourusername/ienet-website.git
   cd ienet-website
   ```

2. **Set up Apache Virtual Host**
   ```apache
   <VirtualHost *:80>
       ServerName ienet.com
       ServerAlias www.ienet.com
       DocumentRoot /var/www/html/ienet-website
       
       <Directory /var/www/html/ienet-website>
           AllowOverride All
           Require all granted
       </Directory>
       
       ErrorLog ${APACHE_LOG_DIR}/ienet_error.log
       CustomLog ${APACHE_LOG_DIR}/ienet_access.log combined
   </VirtualHost>
   ```

3. **Enable site and restart Apache**
   ```bash
   sudo a2ensite ienet.conf
   sudo systemctl restart apache2
   ```

### Option 3: Nginx Configuration

```nginx
server {
    listen 80;
    server_name ienet.com www.ienet.com;
    root /var/www/html/ienet-website;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

## 🔒 SSL Configuration

### Let's Encrypt (Free SSL)

```bash
# Install Certbot
sudo apt install certbot python3-certbot-apache

# Get SSL certificate
sudo certbot --apache -d ienet.com -d www.ienet.com

# Auto-renewal
sudo crontab -e
# Add: 0 12 * * * /usr/bin/certbot renew --quiet
```

## 🔧 .htaccess Configuration

Create `.htaccess` in the root directory:

```apache
# Enable URL rewriting
RewriteEngine On

# Force HTTPS
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# Remove www (optional)
RewriteCond %{HTTP_HOST} ^www\.(.*)$ [NC]
RewriteRule ^(.*)$ https://%1/$1 [R=301,L]

# Security headers
<IfModule mod_headers.c>
    Header always set X-Content-Type-Options nosniff
    Header always set X-Frame-Options DENY
    Header always set X-XSS-Protection "1; mode=block"
    Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains"
</IfModule>

# Cache static files
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
    ExpiresByType image/png "access plus 1 month"
    ExpiresByType image/jpg "access plus 1 month"
    ExpiresByType image/jpeg "access plus 1 month"
    ExpiresByType image/gif "access plus 1 month"
</IfModule>

# Compress files
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/xml
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE application/xml
    AddOutputFilterByType DEFLATE application/xhtml+xml
    AddOutputFilterByType DEFLATE application/rss+xml
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE application/x-javascript
</IfModule>
```

## 🗂️ File Permissions

Set correct permissions for security:

```bash
# Set directory permissions
find /var/www/html/ienet-website -type d -exec chmod 755 {} \;

# Set file permissions
find /var/www/html/ienet-website -type f -exec chmod 644 {} \;

# Set ownership
sudo chown -R www-data:www-data /var/www/html/ienet-website
```

## 📊 Performance Optimization

### 1. Enable Gzip Compression
Already included in .htaccess above

### 2. Optimize Images
- Compress images before uploading
- Use WebP format when possible
- Implement lazy loading

### 3. Minify CSS/JS
```bash
# Install minification tools
npm install -g clean-css-cli uglify-js

# Minify CSS
cleancss -o assets/css/style.min.css assets/css/style.css

# Minify JS
uglifyjs assets/js/main.js -o assets/js/main.min.js
```

### 4. Enable Caching
Already configured in .htaccess above

## 🔍 SEO Configuration

### 1. Robots.txt
Create `robots.txt` in root:

```
User-agent: *
Allow: /

Sitemap: https://ienet.com/sitemap.xml
```

### 2. Sitemap.xml
Generate and upload sitemap.xml with all pages

### 3. Google Analytics
Add tracking code to header.php

## 🔐 Security Checklist

- [ ] SSL certificate installed
- [ ] Security headers configured
- [ ] File permissions set correctly
- [ ] .htaccess security rules active
- [ ] PHP version updated
- [ ] Regular backups scheduled
- [ ] Firewall configured
- [ ] Admin access secured

## 📈 Monitoring

### 1. Google Search Console
- Submit sitemap
- Monitor search performance
- Check for crawl errors

### 2. Google Analytics
- Track user behavior
- Monitor conversion goals
- Analyze traffic sources

### 3. Performance Monitoring
- Use GTmetrix or PageSpeed Insights
- Monitor uptime
- Check server response times

## 🆘 Troubleshooting

### Common Issues

1. **PHP errors**
   - Check PHP version compatibility
   - Review error logs
   - Verify file permissions

2. **CSS/JS not loading**
   - Check file paths
   - Verify .htaccess rules
   - Clear browser cache

3. **Page not found errors**
   - Verify .htaccess configuration
   - Check file structure
   - Ensure mod_rewrite is enabled

### Log Locations
- Apache: `/var/log/apache2/error.log`
- Nginx: `/var/log/nginx/error.log`
- PHP: `/var/log/php_errors.log`

## 📞 Support

For deployment issues or questions:
- Email: support@ienet.com
- Documentation: Check README.md
- Issues: GitHub repository issues section

---

**Happy Deploying! 🚀**