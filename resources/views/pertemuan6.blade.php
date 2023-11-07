<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fontawesome.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap" rel="stylesheet">
    <script>
        function validateForm(){
            var nrp = document.getElementById("nrp");
            //var nama = document.getElementById("nama");

            //cek hanya yang invalid
            if (nrp.value == ""){
                nrp.focus(); //tergantung UX designer
                nrp.placeholder = "contoh : 5026221076"
                alert("NRP gapenting mass!!");
                alert("iya mass gapenting")
                return false;
            }
            // if (nama.value == ""){
            //     nama.focus(); //tergantung UX designer
            //     nama.placeholder = "contoh : Preshh"
            //     alert("Masukin namamu blok!");
            //     return false;
            // }

            if(isNaN(nrp.value) == true){
                nrp.focus();
                msg.innerHTML = "NRP itu angkaaa rekkkk!!";
                return false;
            }
            //harus 10 digit
            if(nrp.value.length != 10){
                nrp.focus();
                alert("NRP mu 10 digit blok! Kau isi "+ nrp.value.length + " digit");
                return false;
            }

        }
    </script>
</head>

<body>
    <div class="container">
        <div class="jumbotron">Form validasi adalah mencegah pengiriman data ke server bila ada yang invalid/tidak
            sesuai constraint database
        </div>
        <script>
            function validate()
            {
                console.log("baris 22");
                return false;

                console.log("baris 24");
                return true;

                console.log("baris 26");
                return false;
            }
        </script>
        <form action="https://chat.whatsapp.com/FfjGBzEh9Ep9booazI1PvB" method="get" onsubmit="return validateForm()">
            <!-- onsubmit = "return true"  maka bisa ke tujuan
                            "return false" maka akan stop, berhenti di form ini -->

            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="nrp">NRP :</label>
                <input type="text" class="form-control" id="nrp"><div id="msg" class="text-danger"></div>
            </div>
            <input type="submit" value="DAFTAR" class="btn btn-primary">
            <input type="reset" value="ULANGI" class="btn btn-warning">
        </form>
    </div>
</body>
