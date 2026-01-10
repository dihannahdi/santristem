# 🚀 DEPLOYMENT QUICK START

## ⚡ What You Need Right Now

### **1. Get These Credentials First**

Contact your hosting provider (Hostinger/Rumahweb) and get:

✅ **cPanel Login:**
- URL: `https://your-server.com:2083`
- Username: `____________`
- Password: `____________`

✅ **Your Domain:**
- Domain name: `https://____________`

That's it! Everything else can be created in cPanel.

---

## 📝 Step-by-Step (Simple Version)

### **Step 1: Login to cPanel** (2 minutes)

1. Go to your cPanel URL
2. Enter username and password
3. You're in!

### **Step 2: Create Database** (3 minutes)

1. Find "**MySQL Databases**" in cPanel
2. Create new database:
   - Name it: `santristem`
   - cPanel will make it: `username_santristem`
3. Create database user:
   - Username: `santristem_user`
   - Generate strong password
   - **WRITE DOWN THIS PASSWORD!**
4. Add user to database:
   - Select user
   - Select database
   - Grant **ALL PRIVILEGES**

✅ Done! Write down:
```
Database: username_santristem
Username: username_santristem_user
Password: [the password you generated]
```

### **Step 3: Upload Website Files** (10 minutes)

**Option A: Using cPanel File Manager** (Easier)

1. In cPanel, go to "**File Manager**"
2. Navigate to `public_html` folder
3. Click "**Upload**" button
4. Select these files from your computer:
   - All folders: `app`, `bootstrap`, `config`, `database`, `public`, `resources`, `routes`, `storage`
   - Files: `artisan`, `composer.json`, `.env.example`
5. Wait for upload to complete

**Option B: Using FileZilla** (If you prefer FTP)

1. Install FileZilla
2. In cPanel → FTP Accounts → Create FTP account
3. Connect with FileZilla
4. Upload same files as above

⚠️ **DO NOT UPLOAD:**
- `.env` file (security risk!)
- `node_modules` folder (too big)
- `.git` folder (not needed)

### **Step 4: Setup Environment** (5 minutes)

1. In cPanel File Manager, go to your Laravel folder
2. Find `.env.example` file
3. Right-click → Copy → Rename to `.env`
4. Right-click `.env` → Edit
5. Change these lines:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-actual-domain.com

DB_DATABASE=username_santristem
DB_USERNAME=username_santristem_user
DB_PASSWORD=your_database_password_here
```

6. Save file

### **Step 5: Generate Security Key** (2 minutes)

**Option A: If cPanel has Terminal:**
1. Open Terminal in cPanel
2. Run: `cd public_html` (or wherever Laravel is)
3. Run: `php artisan key:generate`

**Option B: If no Terminal:**
1. On your local computer, run: `php artisan key:generate --show`
2. Copy the output (starts with `base64:`)
3. Add it to your `.env` file on server:
   ```env
   APP_KEY=base64:paste_the_key_here
   ```

### **Step 6: Install Dependencies** (5 minutes)

In cPanel Terminal (or via SSH):

```bash
cd public_html
composer install --no-dev --optimize-autoloader
```

**If no Terminal/SSH:** The `vendor` folder is already in your upload, so skip this!

### **Step 7: Run Database Setup** (3 minutes)

**Option A: Via Terminal:**
```bash
php artisan migrate --force
php artisan db:seed --force
```

**Option B: Create a temporary file:**

1. Create file `setup.php` in your Laravel root:

```php
<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

echo "Running migrations...<br>";
$kernel->call('migrate', ['--force' => true]);
echo "✓ Migrations complete!<br><br>";

echo "Seeding database...<br>";
$kernel->call('db:seed', ['--force' => true]);
echo "✓ Database seeded!<br><br>";

echo "<strong>SUCCESS! Now DELETE this file immediately!</strong>";
```

2. Visit: `https://yourdomain.com/setup.php`
3. Wait for "SUCCESS!" message
4. **DELETE `setup.php` immediately!**

### **Step 8: Set Permissions** (2 minutes)

In cPanel File Manager:

1. Select `storage` folder → Right-click → Permissions → Set to `775`
2. Select `bootstrap/cache` folder → Permissions → Set to `775`

### **Step 9: Setup .htaccess Redirect** (1 minute)

If Laravel is in a subfolder (like `public_html/santristem/`):

Create `.htaccess` in `public_html/`:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ santristem/public/$1 [L]
</IfModule>
```

### **Step 10: Install SSL & Force HTTPS** (3 minutes)

1. In cPanel → "**SSL/TLS Status**"
2. Click "**Run AutoSSL**" (free Let's Encrypt)
3. Wait 1-2 minutes
4. Done! Your site now has HTTPS

To force HTTPS, add to `public/.htaccess` (at the top):

```apache
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

---

## ✅ Test Your Website

Visit these pages to confirm everything works:

1. `https://yourdomain.com` → Homepage ✓
2. `https://yourdomain.com/programs` → Programs page ✓
3. `https://yourdomain.com/gallery` → Photo gallery ✓
4. `https://yourdomain.com/contact` → Contact form ✓

If all pages load correctly: **🎉 YOU'RE DONE!**

---

## 🐛 Quick Troubleshooting

### Problem: "500 Internal Server Error"

**Fix:**
```bash
# Set correct permissions
chmod -R 775 storage bootstrap/cache

# Clear caches
php artisan cache:clear
php artisan config:clear
```

### Problem: "Database connection refused"

**Fix:**
- Double-check `.env` file database credentials
- Make sure database user has ALL PRIVILEGES

### Problem: "APP_KEY is missing"

**Fix:**
- Run `php artisan key:generate`
- Or manually add APP_KEY to `.env`

### Problem: "404 on all pages"

**Fix:**
- Make sure `.htaccess` exists in `public/` folder
- Check mod_rewrite is enabled in cPanel

---

## 📞 Get Help

**Hostinger Support:**
- Live chat in dashboard (24/7)
- Very responsive!

**Rumahweb Support:**
- Phone: 0274-5305505
- Live chat available
- Email: support@rumahweb.com

**What to ask:**
"I'm deploying a Laravel website. Can you help me:
- Access cPanel Terminal
- Enable mod_rewrite
- Set folder permissions to 775
- Install SSL certificate"

---

## 📚 Full Documentation

For detailed instructions, see:
- **`DEPLOYMENT_GUIDE.md`** - Complete step-by-step
- **`CREDENTIALS_CHECKLIST.md`** - Fill this out first
- **`IMPLEMENTATION_COMPLETE.md`** - What was built

---

## ⏱️ Total Time Estimate

- ✅ Get credentials: 5 minutes
- ✅ Create database: 3 minutes
- ✅ Upload files: 10 minutes
- ✅ Configure .env: 5 minutes
- ✅ Setup database: 3 minutes
- ✅ Set permissions: 2 minutes
- ✅ Install SSL: 3 minutes

**Total: ~30 minutes** (if everything goes smoothly!)

---

## 🎯 The Three Files You Need

1. **This file** (`DEPLOYMENT_QUICKSTART.md`) - Read this first!
2. **`CREDENTIALS_CHECKLIST.md`** - Fill out your login info
3. **`DEPLOYMENT_GUIDE.md`** - Detailed instructions if you get stuck

---

## 🚀 Ready to Deploy?

1. ✅ I have cPanel access
2. ✅ I know my domain name
3. ✅ I've read this document
4. ✅ I'm ready to create the database

**Let's go!** Start with Step 1 above! 💪

---

**Last Updated:** November 4, 2025  
**Your Site:** santriSTEM - Memberdayakan Santri Melalui STEM  
**Current Status:** ✅ Development Complete, Ready to Deploy!
