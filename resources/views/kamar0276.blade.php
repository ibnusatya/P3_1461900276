<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Data pasien </title>
    <style>
            table {
                border-collapseL collapse;
                border-spacing: 0;
                widthL 100%;
                border: 1px solid #ddd;
            }
            thead{
                background-color: #f2f2f2;
            }
            th, tr{
                text-align: left;
                padding: 8px;
            }
            tr:nth=child(even){bacground-color: #f2f2f2}.tambah{
                padding: 8px 16px :
                text-decoration:non;
            }
    </style>
</head>

<body>
    <div style="overflow-x: auto">

        <a class="tambah" href="{{ route('data.create') }}"> Tambah Data</a>

        <h1>Pasien</h1>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php?>
                    @foreach (@pasien)
                    <tr>
                        <td>{{@pasien->id}}</td>
                        <td>{{@pasien->nama}}</td>
                        <td>{{@pasien->alamat}}</td>
                        <td>
                            <a href=""> Edit </a>
                            <a href=""> Hapus </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        <h1>Dokter</h1>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php?>
                    @foreach (@pdokter)
                    <tr>
                        <td>{{@dokter->id}}</td>
                        <td>{{@dokter->nama}}</td>
                        <td>{{@dokter->jabatan}}</td>
                        <td>
                            <a href=""> Edit </a>
                            <a href=""> Hapus </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>