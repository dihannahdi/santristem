# 🚀 santriSTEM Website - Deployment Guide

## 📋 Overview

This guide will walk you through deploying the santriSTEM website to a production server (cPanel/Hostinger/Rumahweb).

---

## 🔑 Required Credentials & Information

### **You Need to Provide:**

1. **cPanel/Hosting Access:**
   - cPanel URL (e.g., `https://yourdomain.com:2083`)
   - cPanel username
   - cPanel password

2. **Domain Information:**
   - Your domain name (e.g., `santristem.ugm.ac.id` or `santristem.com`)
   - Is it already pointing to the server?

3. **Database Credentials (from cPanel):**
   - Database host (usually `localhost`)
   - Database name (e.g., `username_santristem`)
   - Database username (e.g., `username_dbuser`)
   - Database password

4. **Email/SMTP (Optional - for contact forms):**
   - SMTP host
   - SMTP port
   - SMTP username
   - SMTP password

---

## 📝 Pre-Deployment Checklist

### **On Your Local Machine:**

```powershell
# 1. Make sure all migrations are working
php artisan migrate:fresh --seed

# 2. Test the site locally
php artisan serve

# 3. Build production assets
npm run build

# 4. Verify all pages are working
# Visit: http://localhost:8000
```

✅ **Test these pages:**
- Homepage (/)
- Programs (/programs)
- Program Detail (/programs/sarasehan-guru-matematika)
- Gallery (/gallery)
- Contact (/contact)

---

## 🎯 Deployment Methods

### **Method 1: cPanel File Manager (Recommended for beginners)**

#### Step 1: Prepare Files

1. **Create a zip of your project:**
   ```powershell
   # Exclude unnecessary files
   # Create zip without: node_modules, .git, .env, storage/logs/*
   ```

2. **Files to include:**
   - ✅ All `app/` folder
   - ✅ All `bootstrap/` folder
   - ✅ All `config/` folder
   - ✅ All `database/` folder
   - ✅ All `public/` folder
   - ✅ All `resources/` folder
   - ✅ All `routes/` folder
   - ✅ All `storage/` folder (empty logs)
   - ✅ `artisan` file
   - ✅ `composer.json`
   - ✅ `package.json`
   - ✅ `.env.example`
   
3. **Files to EXCLUDE:**
   - ❌ `node_modules/` (too large)
   - ❌ `.git/` (version control)
   - ❌ `.env` (security)
   - ❌ `storage/logs/*` (old logs)
   - ❌ `vendor/` (will regenerate)

#### Step 2: Upload to cPanel

1. **Login to cPanel**
2. **Go to File Manager**
3. **Navigate to `public_html`** (or your domain's root folder)
4. **Upload the zip file**
5. **Extract the zip**
6. **Move Laravel files:**
   ```
   Laravel should be in: /home/username/laravel/
   OR directly in: /home/username/public_html/
   ```

#### Step 3: Setup Directory Structure

**Option A: Domain Root (Recommended)**
```
public_html/
├── santristem/          ← Laravel files here
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   └── public/          ← This needs to be accessible
└── .htaccess            ← Redirect to santristem/public
```

**Option B: Subdomain**
```
public_html/
├── santristem/
│   └── (all Laravel files)
```

#### Step 4: Create .htaccess Redirect

If Laravel is in a subfolder, create `.htaccess` in `public_html`:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ santristem/public/$1 [L]
</IfModule>
```

---

### **Method 2: FTP/SFTP (Using FileZilla)**

1. **Get FTP credentials from cPanel:**
   - cPanel → FTP Accounts → Create/View FTP account

2. **Connect via FileZilla:**
   - Host: `ftp.yourdomain.com` or server IP
   - Username: Your FTP username
   - Password: Your FTP password
   - Port: 21 (FTP) or 22 (SFTP)

3. **Upload files** (same structure as Method 1)

---

### **Method 3: Git Deployment (Advanced)**

```bash
# On server via SSH
cd /home/username/
git clone https://github.com/your-repo/santristem.git
cd santristem
composer install --optimize-autoloader --no-dev
npm install
npm run build
php artisan migrate --force
php artisan db:seed --force
```

---

## 🗄️ Database Setup

### **Step 1: Create Database in cPanel**

1. **Login to cPanel**
2. **Go to MySQL Databases**
3. **Create New Database:**
   - Database name: `santristem` (cPanel will prefix it)
   - Example result: `username_santristem`

4. **Create Database User:**
   - Username: `santristem_user`
   - Password: Generate strong password
   - Example result: `username_santristem_user`

5. **Add User to Database:**
   - Select user
   - Select database
   - Grant **ALL PRIVILEGES**

6. **Note down credentials:**
   ```
   DB_HOST=localhost
   DB_DATABASE=username_santristem
   DB_USERNAME=username_santristem_user
   DB_PASSWORD=your_generated_password
   ```

---

## ⚙️ Environment Configuration

### **Step 1: Create .env file**

1. **In cPanel File Manager:**
   - Navigate to Laravel root folder
   - Copy `.env.example` to `.env`

2. **Edit .env file:**

```env
APP_NAME="santriSTEM"
APP_ENV=production
APP_KEY=                          # Will generate later
APP_DEBUG=false                   # IMPORTANT: false in production
APP_URL=https://yourdomain.com    # Your actual domain

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=username_santristem
DB_USERNAME=username_santristem_user
DB_PASSWORD=your_database_password

# Mail Configuration (Optional)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"

# Session & Cache (use file for shared hosting)
SESSION_DRIVER=file
CACHE_DRIVER=file
QUEUE_CONNECTION=database
```

### **Step 2: Generate Application Key**

**Via cPanel Terminal (if available):**
```bash
cd /home/username/laravel
php artisan key:generate
```

**Via local machine (if no SSH):**
```powershell
# Run locally
php artisan key:generate --show

# Copy the key and manually add to .env:
APP_KEY=base64:your_generated_key_here
```

---

## 🔧 Post-Upload Configuration

### **Via SSH/Terminal (if available):**

```bash
# Navigate to Laravel directory
cd /home/username/laravel

# Install dependencies (if not included)
composer install --optimize-autoloader --no-dev

# Set correct permissions
chmod -R 775 storage bootstrap/cache
chown -R username:username storage bootstrap/cache

# Run migrations
php artisan migrate --force

# Seed database with initial data
php artisan db:seed --force

# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Generate optimized autoloader
composer dump-autoload --optimize
```

### **Via PHP Script (if no SSH access):**

Create `deploy.php` in Laravel root:

```php
<?php
// deploy.php - Run once then DELETE this file

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

// Run migrations
$kernel->call('migrate', ['--force' => true]);

// Seed database
$kernel->call('db:seed', ['--force' => true]);

// Cache config
$kernel->call('config:cache');
$kernel->call('route:cache');
$kernel->call('view:cache');

echo "Deployment complete! DELETE THIS FILE NOW!";
```

Access: `https://yourdomain.com/deploy.php`

**⚠️ IMPORTANT: Delete `deploy.php` after running!**

---

## 🔒 Security Setup

### **1. Set Correct Permissions:**

```bash
# Laravel directories
chmod -R 755 /home/username/laravel
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# Protect .env
chmod 644 .env
```

### **2. Secure .env file:**

Add to `.htaccess` in Laravel root:

```apache
<Files .env>
    Order allow,deny
    Deny from all
</Files>
```

### **3. Hide index.php (if showing):**

Edit `public/.htaccess`:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

### **4. Install SSL Certificate:**

1. **In cPanel → SSL/TLS Status**
2. **Run AutoSSL** (free Let's Encrypt)
3. **Or manually install** if you have a certificate

### **5. Force HTTPS:**

Add to `public/.htaccess` (top):

```apache
# Force HTTPS
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{HTTPS} off
    RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
</IfModule>
```

---

## 🧪 Testing Deployment

### **Test these URLs:**

1. ✅ **Homepage:** `https://yourdomain.com`
2. ✅ **Programs:** `https://yourdomain.com/programs`
3. ✅ **Gallery:** `https://yourdomain.com/gallery`
4. ✅ **Contact Form:** `https://yourdomain.com/contact`

### **Check for errors:**

```bash
# View Laravel logs
tail -f storage/logs/laravel.log
```

Or via cPanel File Manager:
- Navigate to `storage/logs/laravel.log`
- Download and check for errors

---

## 🐛 Common Issues & Solutions

### **Issue 1: 500 Internal Server Error**

**Solution:**
```bash
# Check permissions
chmod -R 775 storage bootstrap/cache

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Check logs
cat storage/logs/laravel.log
```

### **Issue 2: Database Connection Error**

**Solution:**
- Verify `.env` database credentials
- Check if database user has all privileges
- Test connection via cPanel phpMyAdmin

### **Issue 3: Missing CSS/JS**

**Solution:**
```bash
# Rebuild assets
npm run build

# Or upload from local build
# Upload public/build/ folder from your local machine
```

### **Issue 4: 404 on all pages except homepage**

**Solution:**
```apache
# Check .htaccess in public folder
# Enable mod_rewrite in cPanel
```

### **Issue 5: APP_KEY not set**

**Solution:**
```bash
php artisan key:generate
# Or manually add to .env
```

---

## 📊 Performance Optimization

### **1. Enable OPcache:**

In cPanel → Select PHP Version → Options:
- ✅ Enable opcache

### **2. Use Laravel Caching:**

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### **3. Optimize Composer:**

```bash
composer install --optimize-autoloader --no-dev
composer dump-autoload --optimize
```

### **4. Image Optimization:**

- Compress images in `public/images/`
- Use WebP format if possible
- Enable browser caching

### **5. Enable Gzip Compression:**

Add to `public/.htaccess`:

```apache
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript
</IfModule>
```

---

## 📧 Email Configuration (Optional)

### **Option 1: Gmail SMTP**

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
```

**Get Gmail App Password:**
1. Google Account → Security
2. 2-Step Verification → App Passwords
3. Generate password for "Mail"

### **Option 2: Hostinger/Rumahweb SMTP**

```env
MAIL_MAILER=smtp
MAIL_HOST=mail.yourdomain.com
MAIL_PORT=465
MAIL_USERNAME=noreply@yourdomain.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=ssl
```

---

## 🔄 Updating the Site

### **Method 1: Manual Update**

1. Make changes locally
2. Test locally
3. Upload changed files via FTP
4. Clear cache:
   ```bash
   php artisan cache:clear
   php artisan view:clear
   ```

### **Method 2: Git Pull (if using Git)**

```bash
cd /home/username/laravel
git pull origin main
composer install
npm install
npm run build
php artisan migrate
php artisan cache:clear
```

---

## 📋 Quick Reference

### **Important Paths:**

```
Laravel Root:    /home/username/laravel/
Public URL:      /home/username/laravel/public/
Storage:         /home/username/laravel/storage/
Logs:            /home/username/laravel/storage/logs/
.env file:       /home/username/laravel/.env
```

### **Essential Commands:**

```bash
# Clear caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Rebuild caches
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Database
php artisan migrate
php artisan db:seed
php artisan migrate:fresh --seed

# Generate key
php artisan key:generate
```

---

## ✅ Final Checklist

Before going live:

- [ ] Database created and configured
- [ ] `.env` file configured correctly
- [ ] APP_KEY generated
- [ ] APP_DEBUG=false
- [ ] APP_ENV=production
- [ ] Migrations run successfully
- [ ] Database seeded with initial data
- [ ] SSL certificate installed
- [ ] HTTPS forced
- [ ] File permissions set correctly
- [ ] All pages load without errors
- [ ] Contact form tested
- [ ] Gallery loads photos correctly
- [ ] Mobile responsive checked
- [ ] Browser compatibility tested
- [ ] Google Analytics added (optional)

---

## 🆘 Need Help?

### **Where to get credentials:**

1. **cPanel Access:** Contact your hosting provider (Hostinger/Rumahweb)
2. **Database Info:** Create in cPanel → MySQL Databases
3. **FTP Info:** cPanel → FTP Accounts
4. **Domain Info:** Check your domain registrar

### **Support Contacts:**

- **Hostinger Support:** https://hostinger.com/support
- **Rumahweb Support:** https://www.rumahweb.com/support
- **Laravel Docs:** https://laravel.com/docs

---

## 🎉 Success!

Once deployed, your santriSTEM website will be live at:

**🌐 https://yourdomain.com**

Features ready:
- ✅ Beautiful responsive homepage
- ✅ Program listings
- ✅ Photo gallery with 20+ photos
- ✅ Contact form
- ✅ Mobile-friendly design
- ✅ Fast and secure

**Congratulations! 🎊**

---

## 📝 Next Steps After Deployment

1. **Add Google Analytics** (optional)
2. **Submit sitemap to Google Search Console**
3. **Setup automated backups in cPanel**
4. **Monitor site performance**
5. **Update content regularly**

---

**Document Version:** 1.0
**Last Updated:** November 4, 2025
**Project:** santriSTEM Website
