# 🔑 santriSTEM Deployment - Credentials Checklist

**Fill this out before deploying!**

---

## 🌐 Hosting Information

**Hosting Provider:** [ ] Hostinger  [ ] Rumahweb  [ ] Other: _____________

**cPanel URL:**
```
https://________________________________:2083
```

**cPanel Username:**
```
_____________________________________________
```

**cPanel Password:**
```
_____________________________________________
```

---

## 🌍 Domain Information

**Primary Domain:**
```
https://_____________________________________
```

**Is domain already pointed to server?** [ ] Yes  [ ] No

**If No, Nameservers needed:**
```
ns1._________________________________________
ns2._________________________________________
```

---

## 🗄️ Database Credentials

**Database Host:** (usually `localhost`)
```
_____________________________________________
```

**Database Name:** (created in cPanel - MySQL Databases)
```
_____________________________________________
Example: username_santristem
```

**Database Username:**
```
_____________________________________________
Example: username_dbuser
```

**Database Password:**
```
_____________________________________________
```

**Database Port:** (usually `3306`)
```
_____________________________________________
```

---

## 📁 FTP/SFTP Information

**FTP Host:**
```
ftp._________________________________________ or IP: _______________
```

**FTP Username:**
```
_____________________________________________
```

**FTP Password:**
```
_____________________________________________
```

**FTP Port:** (21 for FTP, 22 for SFTP)
```
_____________________________________________
```

---

## 📧 Email/SMTP Configuration (Optional)

**SMTP Host:**
```
_____________________________________________
Example: smtp.gmail.com or mail.yourdomain.com
```

**SMTP Port:**
```
_____ (587 for TLS, 465 for SSL)
```

**SMTP Username:**
```
_____________________________________________
```

**SMTP Password:**
```
_____________________________________________
```

**SMTP Encryption:** [ ] TLS  [ ] SSL  [ ] None

---

## 🔐 Laravel Environment Variables

After deployment, these will go in your `.env` file:

```env
APP_NAME="santriSTEM"
APP_ENV=production
APP_KEY=                              # Generate with: php artisan key:generate
APP_DEBUG=false
APP_URL=https://your-domain-here.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email@domain.com
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

---

## 🔗 SSH Access (Optional - if available)

**SSH Host:**
```
_____________________________________________
```

**SSH Port:**
```
_____ (usually 22)
```

**SSH Username:**
```
_____________________________________________
```

**SSH Password or Key Path:**
```
_____________________________________________
```

---

## 📊 Additional Services (Optional)

### Google Analytics (for tracking visitors)

**Tracking ID:**
```
G-___________________________________________
```

### Google Maps API (if adding maps)

**API Key:**
```
_____________________________________________
```

---

## 📝 Contact Information for Support

**Your Name:**
```
_____________________________________________
```

**Email:**
```
_____________________________________________
```

**Phone:**
```
_____________________________________________
```

---

## ✅ Pre-Deployment Checklist

Before contacting hosting support, have ready:

- [ ] Domain name purchased
- [ ] Hosting account active
- [ ] cPanel access confirmed
- [ ] Database created in cPanel
- [ ] FTP credentials obtained
- [ ] SSL certificate requested (or using free Let's Encrypt)

---

## 🆘 Where to Get These Credentials

### **Hostinger:**
1. Login to Hostinger Dashboard
2. Go to **Hosting** → Your domain
3. Click **Manage**
4. cPanel: Click "Advanced" → Open cPanel
5. Database: cPanel → MySQL Databases
6. FTP: cPanel → FTP Accounts
7. Email: cPanel → Email Accounts

### **Rumahweb:**
1. Login to Rumahweb Client Area
2. Go to **Layanan Saya** → Hosting
3. Click **Manage Hosting**
4. cPanel: Look for cPanel login button
5. Database: Same as Hostinger (cPanel → MySQL Databases)
6. FTP: Same as Hostinger (cPanel → FTP Accounts)

### **Other Hosting:**
- Contact their support
- Ask for: "cPanel access, database creation, and FTP credentials"

---

## 🔒 Security Reminders

- ⚠️ **NEVER share these credentials publicly**
- ⚠️ **Use strong passwords** (mix of letters, numbers, symbols)
- ⚠️ **Store this file securely** (password manager recommended)
- ⚠️ **Delete this file from server** after deployment
- ⚠️ **Enable 2FA** on hosting account if available

---

## 📞 Hosting Support Contacts

**Hostinger Support:**
- Live Chat: Available 24/7 in dashboard
- Email: support@hostinger.com
- Knowledge Base: https://support.hostinger.com

**Rumahweb Support:**
- Live Chat: Available in client area
- Email: support@rumahweb.com
- WhatsApp: Check their website
- Phone: 0274-5305505

---

**Next Step:** Once you have all credentials, follow the **DEPLOYMENT_GUIDE.md** step by step!

**Last Updated:** November 4, 2025
