# SantriSTEM Website - Implementation Guide

## Quick Start Commands

```powershell
# Navigate to project
cd "c:\Users\user\Documents\santristem web"

# Install Tailwind CSS
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p

# Install Alpine.js and other frontend dependencies
npm install alpinejs
npm install swiper
npm install aos

# Build assets
npm run build

# Start development server
php artisan serve
```

## Step-by-Step Implementation

### Phase 1: Foundation Setup ✅

1. **Laravel Installation** ✅
   - Laravel 12 installed
   - Database configured (SQLite for development)
   - Base migrations run

2. **Tailwind CSS Configuration** (NEXT)
   ```js
   // tailwind.config.js
   module.exports = {
     content: [
       "./resources/**/*.blade.php",
       "./resources/**/*.js",
     ],
     theme: {
       extend: {
         colors: {
           primary: {
             50: '#f0fdf4',
             100: '#dcfce7',
             500: '#22c55e',
             600: '#16a34a',
             700: '#15803d',
             900: '#14532d',
           },
           secondary: {
             50: '#eff6ff',
             500: '#3b82f6',
             600: '#2563eb',
             700: '#1d4ed8',
           },
           accent: {
             400: '#fbbf24',
             500: '#f59e0b',
             600: '#d97706',
           }
         },
         fontFamily: {
           sans: ['Inter', 'sans-serif'],
           heading: ['Poppins', 'sans-serif'],
         },
       },
     },
   }
   ```

3. **Alpine.js Setup**
   ```js
   // resources/js/app.js
   import Alpine from 'alpinejs'
   window.Alpine = Alpine
   Alpine.start()
   ```

### Phase 2: Database Schema

Run migrations in order:

```powershell
php artisan make:migration create_programs_table
php artisan make:migration create_events_table  
php artisan make:migration create_event_registrations_table
php artisan make:migration create_partner_schools_table
php artisan make:migration create_testimonials_table
php artisan make:migration create_gallery_table
php artisan make:migration create_posts_table
php artisan make:migration create_contact_messages_table
php artisan make:migration create_volunteers_table
```

### Phase 3: Models & Controllers

```powershell
# Create Models
php artisan make:model Program -mc
php artisan make:model Event -mc
php artisan make:model EventRegistration -mc
php artisan make:model PartnerSchool -mc
php artisan make:model Testimonial -mc
php artisan make:model Gallery -mc
php artisan make:model Post -mc
php artisan make:model ContactMessage -mc
php artisan make:model Volunteer -mc

# Create Controllers
php artisan make:controller HomeController
php artisan make:controller ProfileController
php artisan make:controller ProgramController
php artisan make:controller CommunityController
php artisan make:controller ContactController
php artisan make:controller GalleryController
```

### Phase 4: Routes Structure

```php
// routes/web.php
Route::get('/', [HomeController::class, 'index'])->name('home');

// Profile
Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/about', [ProfileController::class, 'about'])->name('profile.about');
    Route::get('/team', [ProfileController::class, 'team'])->name('profile.team');
});

// Programs
Route::prefix('programs')->group(function () {
    Route::get('/', [ProgramController::class, 'index'])->name('programs.index');
    Route::get('/{program:slug}', [ProgramController::class, 'show'])->name('programs.show');
});

// Events
Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('events.index');
    Route::get('/{event:slug}', [EventController::class, 'show'])->name('events.show');
    Route::post('/{event}/register', [EventController::class, 'register'])->name('events.register');
});

// Community
Route::get('/community', [CommunityController::class, 'index'])->name('community.index');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// CTAs
Route::post('/volunteer/apply', [VolunteerController::class, 'apply'])->name('volunteer.apply');
Route::post('/school/partner', [PartnerSchoolController::class, 'apply'])->name('school.partner');
```

### Phase 5: Blade Components

Create reusable components:

```powershell
php artisan make:component Hero
php artisan make:component ProgramCard
php artisan make:component Testimonial
php artisan make:component StatCounter
php artisan make:component CtaButton
php artisan make:component Navigation
php artisan make:component Footer
```

### Phase 6: Content Seeding

```powershell
php artisan make:seeder ProgramSeeder
php artisan make:seeder EventSeeder
php artisan make:seeder TestimonialSeeder
php artisan make:seeder PartnerSchoolSeeder
php artisan make:seeder GallerySeeder
```

### Phase 7: Image Optimization

Install Intervention Image:
```powershell
composer require intervention/image
```

Create image optimization service for gallery photos.

### Phase 8: Deploy to cPanel

1. **Upload Files**
   - Upload all files via cPanel File Manager or FTP
   - Place Laravel files in `public_html` or subdirectory

2. **Configure .htaccess**
   ```apache
   <IfModule mod_rewrite.c>
       RewriteEngine On
       RewriteRule ^(.*)$ public/$1 [L]
   </IfModule>
   ```

3. **Environment Configuration**
   - Copy `.env.example` to `.env`
   - Update database credentials
   - Set APP_URL to your domain
   - Generate new APP_KEY

4. **Database Migration**
   ```powershell
   php artisan migrate --force
   php artisan db:seed --force
   ```

5. **Optimize for Production**
   ```powershell
   composer install --optimize-autoloader --no-dev
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

## File Structure

```
santristem web/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php
│   │   │   ├── ProfileController.php
│   │   │   ├── ProgramController.php
│   │   │   ├── EventController.php
│   │   │   ├── CommunityController.php
│   │   │   ├── GalleryController.php
│   │   │   └── ContactController.php
│   │   └── Requests/
│   │       ├── VolunteerRequest.php
│   │       ├── SchoolPartnerRequest.php
│   │       └── ContactRequest.php
│   └── Models/
│       ├── Program.php
│       ├── Event.php
│       ├── EventRegistration.php
│       ├── PartnerSchool.php
│       ├── Testimonial.php
│       ├── Gallery.php
│       └── Post.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── app.blade.php
│   │   │   ├── navigation.blade.php
│   │   │   └── footer.blade.php
│   │   ├── components/
│   │   │   ├── hero.blade.php
│   │   │   ├── program-card.blade.php
│   │   │   ├── testimonial.blade.php
│   │   │   └── stat-counter.blade.php
│   │   ├── home.blade.php
│   │   ├── profile/
│   │   ├── programs/
│   │   ├── community/
│   │   ├── gallery/
│   │   └── contact/
│   ├── css/
│   │   └── app.css
│   └── js/
│       └── app.js
├── public/
│   └── images/
│       └── dokumentasi/
├── database/
│   ├── migrations/
│   └── seeders/
└── routes/
    └── web.php
```

## Content Strategy

### Homepage Sections

1. **Hero**
   - H1: "Memberdayakan Santri Melalui STEM"
   - Subheading: "Inisiatif Departemen Matematika UGM untuk meningkatkan literasi STEM di pesantren"
   - CTA: "Jadi Relawan" + "Pelajari Lebih Lanjut"

2. **Statistics**
   - Number of partner schools
   - Teachers trained
   - Santri reached
   - Years of operation

3. **Featured Programs**
   - Sarasehan Guru Matematika
   - Kuliah Sehari di UGM
   - Kunjungan Sekolah
   - Pembinaan Olimpiade

4. **Latest Activities**
   - Photos from dokumentasi folder
   - Event summaries
   - Read more links

5. **CTAs**
   - Be a Volunteer
   - Be a Participating School
   - Join Community

6. **Testimonials**
   - Teacher quotes
   - Santri experiences

7. **Partner Logos**
   - FMIPA UGM
   - Pergunu
   - RMI NU

### Key Messages

- "Menjembatani pendidikan agama dan modern"
- "Memberdayakan melalui pengetahuan"
- "Membangun pemimpin masa depan"
- "Dampak berbasis komunitas"

## Testing Checklist

- [ ] All pages responsive (mobile, tablet, desktop)
- [ ] Forms functional with validation
- [ ] Images optimized and loading properly
- [ ] Navigation working correctly
- [ ] CTAs directing to correct destinations
- [ ] Email notifications working
- [ ] Gallery lightbox functioning
- [ ] Browser compatibility (Chrome, Firefox, Safari, Edge)
- [ ] Accessibility (keyboard navigation, screen readers)
- [ ] Performance (Google Lighthouse > 90)

## Deployment Checklist

- [ ] All environment variables set
- [ ] Database migrated successfully
- [ ] Assets compiled for production
- [ ] Cache optimized
- [ ] SSL certificate installed
- [ ] Custom domain configured
- [ ] Email configured (SMTP)
- [ ] Backup system in place
- [ ] Analytics integrated
- [ ] Error monitoring setup

---

*Last Updated: November 4, 2025*
