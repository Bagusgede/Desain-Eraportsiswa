<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <title>Dashboard</title>
</head>

<body>
<div class="uk-position-relative">

    <nav class="uk-navbar-container" uk-navbar="dropbar: true">

        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav">
                <li>
                    <a  style="font-size:20px;" href="#">Kelas</a>
                    <div class="uk-navbar-dropdown">
                        <ul  style="font-size:20px;"  class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">Kontrol Data Siswa</a></li>
                            <li><a href="#">Buat Rapot</a></li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a  style="font-size:20px;" href="#">Mapel</a>
                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                        <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                            <div>
                                <ul style="font-size:20px;" class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Cari Siswa</a></li>
                                    <li><a href="#">Input Nilai</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

        

    <div class="uk-navbar-dropbar"></div>

</div>




</body>

</html>