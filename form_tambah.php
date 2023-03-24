<!DOCTYPE html>
<html>

<head>
    <title>Form Mahasiswa</title>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.0/css/pikaday.css" integrity="sha512-NczlyJ1Xa4BykkoyWYxd5phPO50ajotBxQJDvmrsl0DR35AbiDV7987a7hWfCNyU9HeaNM1tDilHHR8yr+7P6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <h1> Silahkan isikan form data anda </h1>
    <form method="post" action="http://localhost/pwl/save.php"> <input type="text" name="tanggal" id="datepicker" placeholder="Tan ggal Bayar"> <input type="text" name="nama" placeholder="nama lengkap"> <input type="text" name="alamat" placeholder="alamat"> <input type="text" name="jumlah" placeholder="Jumlah Bayar" class="money">
        <div style="margin-top: 1em"><b>Status Pembayaran : </b></div>
        <div style="margin-top: 0; float:left"> <span><input type="radio" name="status_kredit" value="0"> <label for="Tunai">Tunai</label><br> </span> <span><input type="radio" name="status_kredit" value="1"> <label for="Kredit">Kredit</label><br> </span> </div>
        <div style="clear:both"></div>
        <button type="submit" style="margin-top: 20px">Simpan</button>
    </form>
</body>
<script>
    //format tanggal 
    var picker = new Pikaday({
        field: document.getElementById('datepicker'),
        format: 'D/M/YYYY',
        toString(date, format) { // you should do formatting based on the passed format, // but we will just return 'D/M/YYYY' for simplicity 
            const day = date.getDate();
            const month = date.getMonth() + 1;
            const year = date.getFullYear();
            return `${day}-${month}-${year}`;
        },
        parse(dateString, format) { // dateString is the result of `toString` method 
            const parts = dateString.split('/');
            const day = parseInt(parts[0], 10);
            const month = parseInt(parts[1], 10) - 1;
            const year = parseInt(parts[2], 10);
            return new Date(year, month, day);
        }
    });
</script>
<script type="text/javascript">
    // Jquery Dependency 
    $('.money').mask('000.000.000', {
        reverse: true
    });
</script>

</html>