<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .ktp-container {
            width: 650px; 
            height: 350px; 
            padding: 20px;
            background-color: #e6f3ff;
            border: 2px solid #000;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .ktp-table {
            width: 100%;
            border-collapse: collapse;
        }
        .header {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            padding-bottom: 12px;
        }

        .ktp-table th, .ktp-table td {
            padding: 3px;
            font-size: 14px;
        }

        .ktp-table th {
            text-align: left;
            font-weight: bold;
            width: 30%;
        }
        .ktp-table td {
            text-align: left;
        }
       
        .footer {
            position: absolute;
            top: 80px;
            right: 20px;
            font-size: 12px;
            text-align: center;
        }
        
        .footer img{
            width: 80px;
            height: 100px;
            display: block;
            margin: 0 auto 10px;
        }
    </style>
</head>
<body>
    <div class="ktp-container">
        <div class="header">PROVINSI JAWA TIMUR<br>KABUPATEN MOJOKERTO</div>
        <table class="ktp-table">
            <tr>
                <th>NIK</th>
                <td>: 224176000823113</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>: AMELIA WAHYU SAFITRI</td>
            </tr>
            <tr>
                <th>Tempat/Tgl Lahir</th>
                <td>: MOJOKERTO, 23-11-2003</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>: PEREMPUAN</td>
                <th>Gol. Darah</th>
                <td>: B-</td> 
            </tr>
            <tr>
                <th>Alamat</th>
                <td>: JL. HAYAM WURUK No.27</td>
            </tr>
            <tr>
                <th style="padding-left: 20px;">RT/RW</th>
                <td>: 006/002</td>
            </tr>
            <tr>
                <th style="padding-left: 20px;">Kel/Desa</th>
                <td>: MOJOSARI</td>
            </tr>
            <tr>
                <th style="padding-left: 20px;">Kecamatan</th>
                <td>: MOJOSARI</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>: ISLAM</td>
            </tr>
            <tr>
                <th>Status Perkawinan</th>
                <td>: BELUM KAWIN</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>: PELAJAR/MAHASISWA</td>
            </tr>
            <tr>
                <th>Kewarganegaraan</th>
                <td>: WNI</td>
            </tr>
            <tr>
                <th>Berlaku Hingga</th>
                <td>: SEUMUR HIDUP</td>
            </tr>
        </table>
        <div class="footer">
            <img src ="pict.jpg">
            <div>MOJOKERTO</div>
            <div>07-02-2022</div>
        </div>
    </div>
</body>
</html>
