$.ajax({
    url: 'notaris.php',
    dataType: 'json',
    success: function(data) {
        console.log(data); // Tampilkan data dalam konsol untuk memastikan pengambilan berhasil
    }
});