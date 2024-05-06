<!DOCTYPE html>
<html>
<head>
    <title>App Notaris</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="table-notaris"></div>

    <script>
    $(document).ready(function() {
        $.ajax({
            url: 'notaris.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Proses dan tampilkan data dalam bentuk tabel
                var html = '<table border="1">';
                html += '<tr><th>ID</th><th>Nama Notaris</th><th>Umur Notaris</th><th>Pengalaman</th><th>Alamat Notaris</th><th>Aksi</th></tr>';
                for (var i = 0; i < data.length; i++) {
                    html += '<tr>';
                    html += '<td>' + data[i].id + '</td>';
                    html += '<td>' + data[i].nama_notaris + '</td>';
                    html += '<td>' + data[i].umur_notaris + '</td>';
                    html += '<td>' + data[i].pengalaman + '</td>';
                    html += '<td>' + data[i].alamat_notaris + '</td>';
                    html += '<td><button class="delete-btn" data-id="' + data[i].id + '">Hapus</button></td>';
                    html += '</tr>';
                }
                html += '</table>';
                $('#table-notaris').html(html);
            }
        });
    });
    </script>
</body>
</html>