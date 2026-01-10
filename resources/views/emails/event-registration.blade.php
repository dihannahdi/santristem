<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran Event</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #059669 0%, #0d9488 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
        }
        .header p {
            margin: 10px 0 0;
            font-size: 14px;
            opacity: 0.9;
        }
        .content {
            padding: 30px 20px;
        }
        .greeting {
            font-size: 18px;
            font-weight: 600;
            color: #059669;
            margin-bottom: 15px;
        }
        .message {
            font-size: 15px;
            color: #555;
            margin-bottom: 25px;
        }
        .event-details {
            background-color: #f0fdf4;
            border-left: 4px solid #059669;
            padding: 20px;
            margin: 25px 0;
            border-radius: 4px;
        }
        .event-details h2 {
            margin: 0 0 15px;
            color: #059669;
            font-size: 22px;
        }
        .detail-item {
            display: flex;
            margin: 10px 0;
            align-items: flex-start;
        }
        .detail-label {
            font-weight: 600;
            color: #333;
            min-width: 120px;
            display: flex;
            align-items: center;
        }
        .detail-label::before {
            content: "•";
            color: #059669;
            font-weight: bold;
            margin-right: 8px;
            font-size: 20px;
        }
        .detail-value {
            color: #555;
        }
        .registration-info {
            background-color: #eff6ff;
            border: 1px solid #bfdbfe;
            border-radius: 6px;
            padding: 15px;
            margin: 20px 0;
        }
        .registration-info h3 {
            margin: 0 0 10px;
            color: #1e40af;
            font-size: 16px;
        }
        .registration-info p {
            margin: 5px 0;
            font-size: 14px;
            color: #475569;
        }
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #059669 0%, #0d9488 100%);
            color: white;
            padding: 14px 30px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            margin: 20px 0;
            text-align: center;
        }
        .footer {
            background-color: #f9fafb;
            padding: 25px 20px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }
        .footer p {
            margin: 5px 0;
            font-size: 13px;
            color: #6b7280;
        }
        .footer a {
            color: #059669;
            text-decoration: none;
        }
        .divider {
            height: 1px;
            background-color: #e5e7eb;
            margin: 25px 0;
        }
        .icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <h1>✅ Pendaftaran Berhasil!</h1>
            <p>santriSTEM - Memberdayakan Pendidikan STEM di Pesantren</p>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="greeting">
                Assalamu'alaikum {{ $registration->name }},
            </div>

            <div class="message">
                <p>Terima kasih telah mendaftar untuk mengikuti kegiatan <strong>santriSTEM</strong>. Pendaftaran Anda telah kami terima dengan baik.</p>
            </div>

            <!-- Event Details -->
            <div class="event-details">
                <h2>📅 Detail Kegiatan</h2>
                
                <div class="detail-item">
                    <div class="detail-label">Nama Kegiatan</div>
                    <div class="detail-value"><strong>{{ $event->title }}</strong></div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Tanggal</div>
                    <div class="detail-value">{{ \Carbon\Carbon::parse($event->event_date)->isoFormat('dddd, D MMMM Y') }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Waktu</div>
                    <div class="detail-value">{{ \Carbon\Carbon::parse($event->event_date)->format('H:i') }} WIB - Selesai</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Lokasi</div>
                    <div class="detail-value">{{ $event->location }}</div>
                </div>

                @if($event->registration_deadline)
                <div class="detail-item">
                    <div class="detail-label">Batas Pendaftaran</div>
                    <div class="detail-value">{{ \Carbon\Carbon::parse($event->registration_deadline)->isoFormat('D MMMM Y') }}</div>
                </div>
                @endif
            </div>

            <!-- Registration Info -->
            <div class="registration-info">
                <h3>📋 Data Pendaftaran Anda</h3>
                <p><strong>Nama:</strong> {{ $registration->name }}</p>
                <p><strong>Email:</strong> {{ $registration->email }}</p>
                <p><strong>Telepon:</strong> {{ $registration->phone }}</p>
                <p><strong>Asal Institusi:</strong> {{ $registration->institution }}</p>
                <p><strong>Status:</strong> {{ ucfirst($registration->role) }}</p>
            </div>

            <div class="divider"></div>

            <!-- Important Notes -->
            <div class="message">
                <h3 style="color: #059669; margin-bottom: 10px;">⚠️ Hal Penting</h3>
                <ul style="color: #555; padding-left: 20px;">
                    <li style="margin: 8px 0;">Harap simpan email ini sebagai bukti pendaftaran</li>
                    <li style="margin: 8px 0;">Informasi lebih lanjut akan kami kirimkan melalui email dan WhatsApp</li>
                    <li style="margin: 8px 0;">Jika ada perubahan, silakan hubungi kami segera</li>
                    <li style="margin: 8px 0;">Hadir <strong>15 menit sebelum</strong> acara dimulai</li>
                </ul>
            </div>

            <div class="divider"></div>

            <!-- CTA Button -->
            <center>
                <a href="{{ config('app.url') }}/events/{{ $event->slug }}" class="cta-button">
                    Lihat Detail Kegiatan
                </a>
            </center>

            <div class="message" style="text-align: center; margin-top: 20px;">
                <p>Sampai bertemu di acara! 🎉</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>santriSTEM</strong></p>
            <p>Fakultas MIPA Universitas Gadjah Mada</p>
            <p>
                Email: <a href="mailto:santristem@ugm.ac.id">santristem@ugm.ac.id</a> | 
                Website: <a href="{{ config('app.url') }}">{{ config('app.url') }}</a>
            </p>
            <p style="margin-top: 15px; font-size: 12px; color: #9ca3af;">
                Email ini dikirim otomatis, mohon tidak membalas email ini.<br>
                Jika ada pertanyaan, silakan hubungi kami melalui email atau WhatsApp.
            </p>
        </div>
    </div>
</body>
</html>
