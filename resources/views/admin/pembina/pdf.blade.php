<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Pdf</title>
        <body>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>
  
            <div style="font-family:Arial; font-size:12px;">
                <center><h2>Data Member</h2></center>  
            </div>
            <br>
            <table class="tg">
              <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>tingkatan</th>
                        <th>kelas</th>
                        <th>jurusan</th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach($Pelatih as $datas)
                        <tr>
                            <td>{{ $datas->id }}</td>
                            <td>{{ $datas->nama_pel }}</td>
                            <td>{{ $datas->JK }}</td>
                            <td>{{ $datas->alamat_pel }}</td>
                            <td>{{ $datas->id_sabuk }}</td>
                            <td>{{ $datas->kelas }}</td>
                            <td>{{ $datas->jurusan }}</td>
                    @endforeach
                </tbody>
            </table>
        </body>
    </head>
</html>