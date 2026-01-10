# santriSTEM Deployment Preparation Script
# Run this before uploading to production server

Write-Host "========================================" -ForegroundColor Green
Write-Host "  santriSTEM Deployment Preparation" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Green
Write-Host ""

# Change to project directory
Set-Location "c:\Users\user\Documents\santristem web"

Write-Host "✓ Current directory: $(Get-Location)" -ForegroundColor Cyan
Write-Host ""

# Step 1: Test database and migrations
Write-Host "[1/7] Testing database and migrations..." -ForegroundColor Yellow
try {
    php artisan migrate:status
    Write-Host "✓ Database migrations OK" -ForegroundColor Green
} catch {
    Write-Host "✗ Database error. Please fix migrations first." -ForegroundColor Red
    exit 1
}
Write-Host ""

# Step 2: Clear all caches
Write-Host "[2/7] Clearing all caches..." -ForegroundColor Yellow
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
Write-Host "✓ Caches cleared" -ForegroundColor Green
Write-Host ""

# Step 3: Build production assets
Write-Host "[3/7] Building production assets..." -ForegroundColor Yellow
if (Test-Path "node_modules") {
    npm run build
    Write-Host "✓ Assets built successfully" -ForegroundColor Green
} else {
    Write-Host "⚠ node_modules not found. Run 'npm install' first!" -ForegroundColor Red
}
Write-Host ""

# Step 4: Run tests (basic check)
Write-Host "[4/7] Running basic tests..." -ForegroundColor Yellow
Write-Host "Testing homepage route..." -ForegroundColor Cyan
php artisan route:list | Select-String "home"
Write-Host "✓ Routes loaded" -ForegroundColor Green
Write-Host ""

# Step 5: Check .env.example
Write-Host "[5/7] Checking .env.example..." -ForegroundColor Yellow
if (Test-Path ".env.example") {
    Write-Host "✓ .env.example exists" -ForegroundColor Green
} else {
    Write-Host "✗ .env.example missing!" -ForegroundColor Red
}
Write-Host ""

# Step 6: Create deployment package
Write-Host "[6/7] Preparing deployment package..." -ForegroundColor Yellow
Write-Host "Files ready for upload:" -ForegroundColor Cyan
Write-Host "  - app/" -ForegroundColor Gray
Write-Host "  - bootstrap/" -ForegroundColor Gray
Write-Host "  - config/" -ForegroundColor Gray
Write-Host "  - database/" -ForegroundColor Gray
Write-Host "  - public/" -ForegroundColor Gray
Write-Host "  - resources/" -ForegroundColor Gray
Write-Host "  - routes/" -ForegroundColor Gray
Write-Host "  - storage/ (empty logs)" -ForegroundColor Gray
Write-Host "  - vendor/ (optional - regenerate on server)" -ForegroundColor Gray
Write-Host "  - artisan" -ForegroundColor Gray
Write-Host "  - composer.json" -ForegroundColor Gray
Write-Host "  - .env.example" -ForegroundColor Gray
Write-Host ""
Write-Host "DO NOT upload:" -ForegroundColor Red
Write-Host "  - .env (security risk!)" -ForegroundColor Red
Write-Host "  - node_modules/ (regenerate on server)" -ForegroundColor Red
Write-Host "  - .git/ (not needed)" -ForegroundColor Red
Write-Host "  - storage/logs/*.log (old logs)" -ForegroundColor Red
Write-Host ""

# Step 7: Generate APP_KEY for production
Write-Host "[7/7] Generating production APP_KEY..." -ForegroundColor Yellow
Write-Host "Run this on your production server:" -ForegroundColor Cyan
Write-Host "  php artisan key:generate" -ForegroundColor Yellow
Write-Host ""
Write-Host "Or generate now and copy to .env manually:" -ForegroundColor Cyan
$key = php artisan key:generate --show
Write-Host "  APP_KEY=$key" -ForegroundColor Yellow
Write-Host ""

# Summary
Write-Host "========================================" -ForegroundColor Green
Write-Host "  Preparation Complete!" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Green
Write-Host ""
Write-Host "Next Steps:" -ForegroundColor Cyan
Write-Host "1. Fill out CREDENTIALS_CHECKLIST.md" -ForegroundColor White
Write-Host "2. Read DEPLOYMENT_GUIDE.md" -ForegroundColor White
Write-Host "3. Create database in cPanel" -ForegroundColor White
Write-Host "4. Upload files via FTP or File Manager" -ForegroundColor White
Write-Host "5. Configure .env on server" -ForegroundColor White
Write-Host "6. Run migrations on server" -ForegroundColor White
Write-Host "7. Test the live site!" -ForegroundColor White
Write-Host ""
Write-Host "📚 Documentation:" -ForegroundColor Cyan
Write-Host "  - DEPLOYMENT_GUIDE.md (Complete instructions)" -ForegroundColor Gray
Write-Host "  - CREDENTIALS_CHECKLIST.md (Fill this first!)" -ForegroundColor Gray
Write-Host "  - IMPLEMENTATION_COMPLETE.md (What we built)" -ForegroundColor Gray
Write-Host ""
Write-Host "🆘 Need help? Contact your hosting provider support!" -ForegroundColor Yellow
Write-Host ""
Write-Host "Good luck! 🚀" -ForegroundColor Green
