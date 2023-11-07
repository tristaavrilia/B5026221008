<html lang="en">
    <head>
        <title>Javascript</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;500;600;800&display=swap" rel="stylesheet">
        <script>
        function changeText() {
            var span = document.getElementById("output");
            var textBox = document.getElementById("textbox");
            textbox.style.color = "red"; //JS nggak sensitif UpperCase LowerCase sama aja
            textbox.style.fontSize = "13pt";
            textBox.style.fontFamily = "Comic Sans MS";
            span.className = "text-success"; //langsung ganti 1 class

            span.innerHTML = textbox.value;
            hadiah();
        }

        function hadiah() {
            alert("selamat anda mendapatkan 100 juta!");
        }

        </script>
    </head>

    <body>
        <div class="container-fluid">
            <center><button class="btn btn-primary" onclick="hadiah();">Klik Disini!</button></center>
            <br>
            <button onclick="changeText();" class="btn btn-success">Click me!</button>
            <span id="output" class="text-dark">replace me</span>
            <input id="textbox" type="text" class="form-control"/>
        </div>
    </body>
</html>
