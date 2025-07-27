# 🚀 GitHub Deployment Guide - IeNet Website

Complete guide to deploy your IeNet website to GitHub and various hosting platforms.

## 📋 **Quick Deployment Checklist**

- [ ] Create GitHub repository
- [ ] Push code to GitHub
- [ ] Enable GitHub Pages (for static preview)
- [ ] Configure custom domain (optional)
- [ ] Set up automated deployment
- [ ] Deploy to production hosting

---

## 🎯 **Step 1: Create GitHub Repository**

### **Option A: Using GitHub Website**

1. **Go to GitHub.com** and sign in
2. **Click "New repository"** (green button)
3. **Repository settings:**
   ```
   Repository name: ienet-website
   Description: Professional IT Services Website - Comprehensive service portfolio with responsive design and SEO optimization
   Visibility: Public (recommended) or Private
   ```
4. **Important:** Do NOT initialize with README, .gitignore, or license (we already have them)
5. **Click "Create repository"**

### **Option B: Using GitHub CLI** (if available)
```bash
gh repo create ienet-website --public --description "Professional IT Services Website"
```

---

## 🚀 **Step 2: Push to GitHub**

After creating the repository, run these commands:

```bash
# Add the remote repository (replace 'yourusername' with your GitHub username)
git remote add origin https://github.com/yourusername/ienet-website.git

# Push to GitHub
git push -u origin main
```

### **Alternative: SSH Method** (recommended for regular use)
```bash
# If you have SSH keys set up
git remote add origin git@github.com:yourusername/ienet-website.git
git push -u origin main
```

---

## 🌐 **Step 3: Enable GitHub Pages (Free Static Hosting)**

1. **Go to your repository** on GitHub
2. **Click "Settings"** tab
3. **Scroll to "Pages"** section
4. **Source:** Select "Deploy from a branch"
5. **Branch:** Select "main"
6. **Folder:** Select "/ (root)"
7. **Click "Save"**

### **Your website will be live at:**
```
https://yourusername.github.io/ienet-website/
```

### **Access URLs:**
- **Homepage:** `https://yourusername.github.io/ienet-website/preview.html`
- **Services:** `https://yourusername.github.io/ienet-website/pages/services/`
- **PHP Note:** GitHub Pages serves static files only, so use `.html` versions

---

## 🎯 **Step 4: Custom Domain Setup** (Optional)

### **Add Custom Domain to GitHub Pages:**

1. **In repository Settings > Pages**
2. **Custom domain:** Enter your domain (e.g., `ienet.com`)
3. **Save and wait for DNS verification**

### **Configure DNS Records:**
```dns
# For root domain (ienet.com)
A Record: @ → 185.199.108.153
A Record: @ → 185.199.109.153
A Record: @ → 185.199.110.153
A Record: @ → 185.199.111.153

# For www subdomain
CNAME Record: www → yourusername.github.io
```

---

## ⚙️ **Step 5: Automated Deployment Options**

### **A. GitHub Actions (Already Configured)**

The repository includes `.github/workflows/deploy.yml` for:
- ✅ **Automatic PHP validation**
- ✅ **File structure testing**
- ✅ **GitHub Pages deployment**
- 🔧 **FTP deployment** (configurable)
- 🔧 **SSH deployment** (configurable)

### **B. Configure FTP Deployment**

1. **Go to repository Settings > Secrets and Variables > Actions**
2. **Add secrets:**
   ```
   FTP_SERVER: your-server.com
   FTP_USERNAME: your-username
   FTP_PASSWORD: your-password
   ```
3. **Uncomment FTP section** in `.github/workflows/deploy.yml`

### **C. Configure SSH Deployment**

1. **Add SSH secrets:**
   ```
   HOST: your-server-ip
   USERNAME: your-ssh-username
   KEY: your-private-ssh-key
   ```
2. **Uncomment SSH section** in workflow file

---

## 🏭 **Step 6: Production Hosting Deployment**

### **A. Shared Hosting (cPanel/DirectAdmin)**

1. **Download from GitHub:**
   ```bash
   git clone https://github.com/yourusername/ienet-website.git
   ```

2. **Upload via File Manager or FTP:**
   - Compress the project folder
   - Upload to `public_html` or domain folder
   - Extract files

3. **Set permissions:**
   - Files: 644
   - Directories: 755

### **B. VPS/Dedicated Server**

```bash
# SSH into your server
ssh user@your-server.com

# Navigate to web directory
cd /var/www/html

# Clone repository
git clone https://github.com/yourusername/ienet-website.git

# Set up Apache virtual host (see DEPLOYMENT.md)
sudo nano /etc/apache2/sites-available/ienet.conf

# Enable site
sudo a2ensite ienet.conf
sudo systemctl reload apache2
```

### **C. Cloud Platforms**

#### **Vercel (Recommended for Static)**
```bash
# Install Vercel CLI
npm i -g vercel

# Deploy
vercel --prod
```

#### **Netlify**
1. Connect GitHub repository
2. Build settings: None needed
3. Deploy directory: `/`

#### **Heroku (For PHP)**
```bash
# Add Procfile
echo "web: vendor/bin/heroku-php-apache2" > Procfile

# Deploy
git add . && git commit -m "Add Procfile"
git push heroku main
```

---

## 🔧 **Step 7: Post-Deployment Setup**

### **A. SSL Certificate**
```bash
# Let's Encrypt (free)
sudo certbot --apache -d ienet.com -d www.ienet.com
```

### **B. Performance Optimization**
- Enable Gzip compression
- Set up CDN (Cloudflare)
- Optimize images
- Minify CSS/JS

### **C. SEO Setup**
- Add Google Analytics
- Submit to Google Search Console
- Create sitemap.xml
- Set up robots.txt

### **D. Monitoring**
- Set up uptime monitoring
- Configure error logging
- Enable performance tracking

---

## 📊 **Deployment Status Dashboard**

After deployment, you'll have:

### **✅ GitHub Repository**
- Source code management
- Version control
- Collaboration tools
- Issue tracking

### **✅ GitHub Pages (Static Preview)**
- Free static hosting
- Custom domain support
- HTTPS enabled
- Global CDN

### **✅ Automated Deployment**
- GitHub Actions workflow
- Automatic testing
- Multiple deployment targets
- Error notifications

### **✅ Production Hosting**
- PHP support
- Database connectivity
- Custom domain
- SSL certificate

---

## 🎯 **Quick Commands Summary**

### **Initial Setup:**
```bash
# Create and push to GitHub
git remote add origin https://github.com/yourusername/ienet-website.git
git push -u origin main
```

### **Updates:**
```bash
# Make changes and push
git add .
git commit -m "Your update message"
git push origin main
```

### **Deploy to Server:**
```bash
# On your server
cd /var/www/html/ienet-website
git pull origin main
```

---

## 🌟 **Live URLs After Deployment**

### **GitHub Pages:**
- `https://yourusername.github.io/ienet-website/preview.html`

### **Custom Domain:**
- `https://ienet.com` (your production site)

### **Repository:**
- `https://github.com/yourusername/ienet-website`

---

## 🆘 **Troubleshooting**

### **Common Issues:**

1. **Push rejected:**
   ```bash
   git pull origin main --rebase
   git push origin main
   ```

2. **GitHub Pages not updating:**
   - Check Actions tab for build errors
   - Verify Pages settings
   - Clear browser cache

3. **PHP not working on GitHub Pages:**
   - Use static HTML versions
   - Consider Vercel or Netlify for PHP

4. **Custom domain not working:**
   - Verify DNS settings
   - Wait for propagation (24-48 hours)
   - Check HTTPS certificate

---

## 🎉 **Success!**

Your IeNet website is now:
- ✅ **Hosted on GitHub** with version control
- ✅ **Live on GitHub Pages** for preview
- ✅ **Ready for production** deployment
- ✅ **Automatically deployed** via GitHub Actions
- ✅ **SEO optimized** and mobile-ready
- ✅ **Professional** and client-ready

**🔗 Repository:** `https://github.com/yourusername/ienet-website`
**🌐 Live Preview:** `https://yourusername.github.io/ienet-website/preview.html`

---

**Need help? Check the issues section in your GitHub repository or refer to DEPLOYMENT.md for detailed hosting instructions.**