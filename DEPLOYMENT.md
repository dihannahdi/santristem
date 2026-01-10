# santriSTEM Deployment Guide

## ✅ Hero Button Fix
The hero buttons are now clickable! The issue was the wave SVG overlay blocking clicks.

**Fix applied:**
- Added `pointer-events-none` to the wave SVG
- Added `relative z-10` to button container

## 🚀 Vercel Deployment

### ⚠️ Important Limitations
Laravel on Vercel has significant constraints:
- **No persistent database**: SQLite file resets on each deployment
- **No file uploads persist**: Images must be in build
- **Read-only filesystem**: Can't write logs/cache to disk
- **Limited PHP runtime**: Only vercel-php@0.7.1 supported

### Recommended Alternatives
For production Laravel apps:
1. **Laravel Cloud** (official, launching soon)
2. **Laravel Forge** + VPS (DigitalOcean, AWS)
3. **Railway.app** (supports MySQL/PostgreSQL)
4. **PlanetScale** (serverless MySQL) + Vercel
5. **Heroku** with ClearDB addon

### Deploy to Vercel (Demo Only)

#### Prerequisites
```powershell
# 1. Vercel CLI installed ✅
vercel --version

# 2. Login to Vercel
vercel login
```

#### Step 1: Setup Environment Variables on Vercel
```powershell
# Add these on Vercel Dashboard or via CLI:
vercel env add APP_KEY production
# Paste your APP_KEY from .env

vercel env add DB_CONNECTION production
# Enter: sqlite

vercel env add APP_NAME production
# Enter: santriSTEM
```

#### Step 2: Deploy
```powershell
# Deploy to production
vercel --prod

# Or deploy to preview
vercel
```

#### Step 3: Post-Deployment Setup
Since database doesn't persist, you'll need to:
1. Use an external database (MySQL on PlanetScale, etc.)
2. Or embed seeded data into the build
3. Or use Vercel's KV/Postgres addons

### Files Created
- ✅ `vercel.json` - Vercel configuration
- ✅ `api/index.php` - Entry point for Vercel PHP runtime
- ✅ `.vercelignore` - Exclude unnecessary files

### Database Options for Vercel

#### Option 1: PlanetScale (Recommended)
```powershell
# 1. Create free account at planetscale.com
# 2. Create database
# 3. Get connection string
# 4. Update .env:
DB_CONNECTION=mysql
DB_HOST=<your-host>.psdb.cloud
DB_PORT=3306
DB_DATABASE=<your-db>
DB_USERNAME=<your-username>
DB_PASSWORD=<your-password>
DB_SSL_CA=/etc/ssl/certs/ca-certificates.crt
MYSQL_ATTR_SSL_CA=/etc/ssl/certs/ca-certificates.crt
```

#### Option 2: Vercel Postgres
```powershell
# Install Vercel Postgres integration
vercel env pull

# Update config/database.php to use Vercel Postgres
```

#### Option 3: Supabase
```powershell
# 1. Create project at supabase.com
# 2. Get PostgreSQL connection string
# 3. Update .env
DB_CONNECTION=pgsql
DB_HOST=<your-project>.supabase.co
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=<your-password>
```

### Deployment Checklist
- [ ] Hero buttons fixed ✅
- [ ] Build assets compiled (`npm run build`) ✅
- [ ] Environment variables set on Vercel
- [ ] Database solution chosen (PlanetScale/Supabase/etc.)
- [ ] Gallery photos committed to repo ✅
- [ ] vercel.json configured ✅
- [ ] api/index.php created ✅
- [ ] Test locally before deploying
- [ ] Deploy with `vercel --prod`

### Quick Deploy (If using embedded SQLite - NOT RECOMMENDED)
```powershell
# This will work but data resets on each deployment!
vercel --prod
```

### Better: Deploy with External Database
```powershell
# 1. Setup PlanetScale database
# 2. Add connection to Vercel env vars
vercel env add DB_HOST production
vercel env add DB_USERNAME production
vercel env add DB_PASSWORD production
vercel env add DB_DATABASE production

# 3. Deploy
vercel --prod

# 4. Run migrations on Vercel (if needed)
# SSH into deployment and run:
# php artisan migrate --force
```

## 📝 Next Steps
1. Choose database solution
2. Configure environment variables
3. Test deployment
4. Setup custom domain (optional)

## 🔗 Useful Links
- Vercel Dashboard: https://vercel.com/dashboard
- PlanetScale: https://planetscale.com
- Supabase: https://supabase.com
- Laravel Forge: https://forge.laravel.com
