<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Surat Keterangan Kelahiran - {{ $birthRecord->baby_name }}</title>
    <style>
        @page {
            margin: 0.5cm;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            color: #1a1a1a;
            line-height: 1.5;
            margin: 0;
            padding: 40px;
        }
        .border-outer {
            border: 2px solid #000;
            padding: 2px;
            height: 95%;
        }
        .border-inner {
            border: 1px solid #000;
            padding: 40px;
            height: 100%;
        }
        .header {
            text-align: center;
            margin-bottom: 25px;
            border-bottom: 3px double #000;
            padding-bottom: 15px;
        }
        .header h1 {
            text-transform: uppercase;
            margin: 0;
            font-size: 22px;
            letter-spacing: 1px;
        }
        .header p {
            margin: 5px 0;
            font-size: 13px;
            font-style: italic;
        }
        .doc-title {
            text-align: center;
            margin: 25px 0;
        }
        .doc-title h2 {
            text-decoration: underline;
            text-transform: uppercase;
            margin: 0;
            font-size: 18px;
        }
        .doc-title p {
            margin: 5px 0;
            font-size: 13px;
        }
        .content-section {
            margin-bottom: 20px;
        }
        .opening-text {
            margin-bottom: 15px;
            text-align: justify;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        table td {
            padding: 5px 0;
            vertical-align: top;
            font-size: 14px;
        }
        .label {
            width: 30%;
        }
        .separator {
            width: 3%;
        }
        .value {
            width: 67%;
            font-weight: bold;
        }
        .section-divider {
            margin: 15px 0 10px 0;
            font-weight: bold;
            text-decoration: underline;
            font-size: 14px;
        }
        .footer-sign {
            margin-top: 40px;
            width: 100%;
        }
        .sign-box {
            width: 40%;
            text-align: center;
            font-size: 14px;
        }
        .sign-space {
            height: 80px;
        }
        .sign-name {
            font-weight: bold;
            text-decoration: underline;
        }
        .watermark {
            position: absolute;
            top: 45%;
            left: 20%;
            transform: rotate(-45deg);
            font-size: 80px;
            color: rgba(200, 200, 200, 0.2);
            z-index: -1;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="border-outer">
        <div class="border-inner">
            <div class="watermark">KLINIK BIDAN</div>
            
            <!-- Kop Surat -->
            <div class="header">
                <h1>KLINIK PRATAMA BIDAN MANDIRI</h1>
                <p>Izin Praktek No: 445/001/SIPB/2024</p>
                <p>Jl. Kesehatan Raya No. 123, Jakarta Selatan | Telp: (021) 1234-5678</p>
            </div>

            <!-- Judul Dokumen -->
            <div class="doc-title">
                <h2>SURAT KETERANGAN KELAHIRAN</h2>
                <p>Nomor: {{ $birthRecord->birth_certificate_number ?? '... / SKK / ' . date('Y') }}</p>
            </div>

            <div class="content-section">
                <p class="opening-text">
                    Yang bertanda tangan di bawah ini, Bidan Penanggung Jawab pada Klinik Pratama Bidan Mandiri, menerangkan dengan sebenarnya bahwa pada:
                </p>

                <table>
                    <tr>
                        <td class="label">Hari / Tanggal</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $birthRecord->birth_date->isoFormat('dddd, D MMMM Y') }}</td>
                    </tr>
                    <tr>
                        <td class="label">Waktu / Jam</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $birthRecord->birth_time }} WIB</td>
                    </tr>
                    <tr>
                        <td class="label">Tempat Kelahiran</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $birthRecord->birth_place }}</td>
                    </tr>
                </table>

                <p class="section-divider">Telah lahir seorang anak :</p>
                <table>
                    <tr>
                        <td class="label">Nama Bayi</td>
                        <td class="separator">:</td>
                        <td class="value" style="text-transform: uppercase; font-size: 16px;">{{ $birthRecord->baby_name }}</td>
                    </tr>
                    <tr>
                        <td class="label">Jenis Kelamin</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $birthRecord->gender === 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Berat Badan</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $birthRecord->baby_weight ?? '-' }} Gram</td>
                    </tr>
                    <tr>
                        <td class="label">Panjang Badan</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $birthRecord->baby_length ?? '-' }} Cm</td>
                    </tr>
                </table>

                <p class="section-divider">Dari Orang Tua :</p>
                <table>
                    <tr>
                        <td class="label">Nama Ibu</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $birthRecord->mother_name }}</td>
                    </tr>
                    <tr>
                        <td class="label">NIK Ibu</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $birthRecord->mother_nik }}</td>
                    </tr>
                    <tr>
                        <td class="label">Nama Ayah</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $birthRecord->father_name }}</td>
                    </tr>
                    <tr>
                        <td class="label">NIK Ayah</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $birthRecord->father_nik }}</td>
                    </tr>
                    <tr>
                        <td class="label">Alamat</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $birthRecord->mother_address ?? '-' }}</td>
                    </tr>
                </table>

                <p class="opening-text" style="margin-top: 20px;">
                    Demikian Surat Keterangan Kelahiran ini dibuat dengan sebenar-benarnya untuk dapat dipergunakan sebagaimana mestinya, terutama sebagai rujukan pengurusan Akta Kelahiran.
                </p>
            </div>

            <!-- Tanda Tangan -->
            <table class="footer-sign">
                <tr>
                    <td style="width: 60%;"></td>
                    <td class="sign-box">
                        <p>Jakarta, {{ date('d F Y') }}</p>
                        <p>Bidan Penanggung Jawab,</p>
                        <div class="sign-space"></div>
                        <p class="sign-name">( ........................................ )</p>
                        <p>SIPB: 445/001/SIPB/2024</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
