<!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan Kelahiran</title>
    <style>
        @page {
            margin: 0cm 0cm;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            margin-top: 3cm;
            margin-bottom: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
        }

        .container {
            width: 100%;
            /* padding: 20px; Remove padding as margins are handled by body */
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            /* Reduced from 30px */
            border-bottom: 2px solid black;
            padding-bottom: 10px;
            /* Reduced from 15px */
        }

        .title {
            font-size: 22px;
            /* Slightly reduced */
            font-weight: bold;
            margin-bottom: 5px;
        }

        .subtitle {
            font-size: 14px;
            /* Slightly reduced */
            margin-bottom: 5px;
        }

        .content {
            margin: 10px 20px;
            /* Reduced margins */
        }

        .row {
            margin-bottom: 5px;
            /* Reduced from 10px */
            display: block;
            /* Changed for PDF compatibility */
        }

        .label {
            width: 200px;
            /* Adjusted width */
            display: inline-block;
            font-weight: bold;
        }

        .value {
            display: inline-block;
        }

        .footer {
            margin-top: 30px;
            /* Reduced from 50px */
            text-align: right;
            margin-right: 30px;
        }

        .signature {
            margin-top: 60px;
            /* Reduced from 80px */
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <!-- <img src="{{ public_path('img/logo.png') }}" class="logo"> -->
            <div class="title">KLINIK SEHAT BERSAMA</div>
            <div class="subtitle">Jl. Raya Kesehatan No. 123, Kota Sehat</div>
            <div class="subtitle">Telp: (021) 12345678</div>
        </div>

        <div style="text-align: center; margin-bottom: 20px;">
            <h3 style="text-decoration: underline; margin: 0;">SURAT KETERANGAN KELAHIRAN</h3>
            <p style="margin: 5px 0;">Nomor: {{ $birthRecord->birth_certificate_number ?? '...../SKL/..../20....' }}</p>
        </div>

        <div class="content">
            <p style="margin-bottom: 10px;">Yang bertanda tangan di bawah ini menerangkan bahwa:</p>

            <p style="font-weight: bold; margin-top: 15px; margin-bottom: 5px;">TELAH LAHIR SEORANG BAYI</p>
            <div class="row"><span class="label">Pada Hari / Tanggal</span>:
                {{ \Carbon\Carbon::parse($birthRecord->birth_date)->translatedFormat('l, d F Y') }}
            </div>
            <div class="row"><span class="label">Pukul</span>:
                {{ \Carbon\Carbon::parse($birthRecord->birth_time)->format('H:i') }} WIB
            </div>
            <div class="row"><span class="label">Di</span>: {{ $birthRecord->birth_place }}</div>
            <div class="row"><span class="label">Jenis Kelamin</span>:
                {{ $birthRecord->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}
            </div>
            <div class="row"><span class="label">Berat Badan</span>:
                {{ number_format($birthRecord->baby_weight, 0, ',', '.') }} gram</div>
            <div class="row"><span class="label">Panjang Badan</span>: {{ $birthRecord->baby_length }} cm</div>
            <div class="row"><span class="label">Bernama</span>: <strong>{{ $birthRecord->baby_name }}</strong></div>

            <p style="font-weight: bold; margin-top: 15px; margin-bottom: 5px;">ANAK DARI</p>

            <p style="text-decoration: underline; margin-bottom: 5px;">IBU</p>
            <div class="row"><span class="label">Nama</span>: {{ $birthRecord->mother_name }}</div>
            <div class="row"><span class="label">NIK</span>: {{ $birthRecord->mother_nik }}</div>
            <div class="row"><span class="label">Alamat</span>: {{ $birthRecord->mother_address }}</div>

            <p style="text-decoration: underline; margin-top: 10px; margin-bottom: 5px;">AYAH</p>
            <div class="row"><span class="label">Nama</span>: {{ $birthRecord->father_name }}</div>
            <div class="row"><span class="label">NIK</span>: {{ $birthRecord->father_nik }}</div>
            <div class="row"><span class="label">Alamat</span>: {{ $birthRecord->father_address }}</div>

            @if($birthRecord->notes)
                <div style="margin-top: 15px; border: 1px solid #ccc; padding: 10px;">
                    <strong>Catatan Medis:</strong><br>
                    GPA: {{ $birthRecord->gpa }} <br>
                    Lingkar Kepala: {{ $birthRecord->head_circumference }} cm <br>
                    Lingkar Dada: {{ $birthRecord->chest_circumference }} cm
                </div>
            @endif
        </div>

        <div class="footer">
            <p>Kota Sehat, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
            <p>Penolong Kelahiran</p>
            <p class="signature">(_______________________)</p>
        </div>
    </div>
</body>

</html>