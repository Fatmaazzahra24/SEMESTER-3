<!DOCTYPE html>
<html>
<head>
    <title>Form dengan Validasi Password (AJAX)</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<h2>Form Contoh dengan Validasi Password</h2>

<form id="myForm">
    <label for="buah">Pilih Buah:</label>
    <select name="buah" id="buah">
        <option value="apel">Apel</option>
        <option value="pisang">Pisang</option>
        <option value="mangga">Mangga</option>
        <option value="jeruk">Jeruk</option>
    </select>

    <br><br>

    <label for="password">Masukkan Password:</label>
    <input type="password" name="password" id="password" required>
    <small id="pesan" style="color:red;"></small>

    <br><br>

    <label>Pilih Warna Favorit:</label><br>
    <input type="checkbox" name="warna[]" value="merah"> Merah<br>
    <input type="checkbox" name="warna[]" value="biru"> Biru<br>
    <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

    <br>

    <label>Pilih Jenis Kelamin:</label><br>
    <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
    <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

    <br>
    <input type="submit" value="Submit">
</form>

<div id="hasil"></div>

<script>
$(document).ready(function () {
    $("#myForm").submit(function (e) {
        e.preventDefault(); 

        var password = $("#password").val();


        if (password.length < 8) {
            $("#pesan").text("Password minimal 8 karakter!");
            return; 
        } else {
            $("#pesan").text(""); 
        }

        var formData = $(this).serialize();

    
        $.ajax({
            url: "proses_lanjut.php", 
            type: "POST",
            data: formData,
            success: function (response) {
                $("#hasil").html(response);
            },
            error: function (xhr, status, error) {
                $("#hasil").html("<p style='color:red;'>Terjadi error: " + error + "</p>");
            }
        });
    });
});
</script>

</body>
</html>
