<?php
include 'config2.php';
$sql = "SELECT * FROM tbl_interprestation ORDER BY rand()";
$result = $db->query($sql);
$data = array();
while ($row = $result->fetch_object()) $data[] = $row;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MBTI Test</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <style>
        h2,
        h1,
        li,
        p,
        th,
        h5,
        a {
            font-family: 'Poppins', sans-serif;
        }
        ;

        header {
            background-color: mediumturquoise;
        }
    </style>
</head>

<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Selamat datang di MBTI Test</h1>
                        <p>Cari tahu tipe kepribadianmu dari 16 tipe kepribadian yang ada. Tapi silahkan untuk login terlebih dahulu</p>
                        <a href="login.php" class="btn btn-primary">Masuk</a>
                        <a href="register.php" class="btn btn-success">Daftar</a>
                    </div>
                    <div class="col-md-4">
                        <!-- <img class="img img-responsive" src="img/connect.png" /> -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-2">Myers-Briggs Type Indicator</h1>
                    <p class="lead">Tes 16 Kepribadian merupakan tes psikologi (psikotes) yang terinspirasi oleh teori tipologi. Teori tersebut diusulkan oleh Carl Gustav Jung melalui buku Psychological Types pada tahun 1921. Teori ini kemudian dikembangkan kembali oleh Isabel Briggs Myers and Katharine C. Briggs sekitar awal tahun 1940.</p><br>
                    <p class="lead">Psikotes ini dirancang untuk mengukur kecerdasan individu, bakat, dan tipe kepribadian seseorang. Tes ini juga dipakai untuk mengetahui karakter kepribadian karyawan perusahaan agar dapat ditempatkan pada bidang-bidang yang membuat potensi karyawan tersebut optimal. Dalam Tes 16 Kepribadian ini, ada 4 dimensi kecenderungan sifat dasar manusia: </p><br>
                    <ul>
                        <li>
                            <p class="lead">Dimensi pemusatan perhatian: Introvert (I) vs. Ekstrovert (E)</p>
                        </li>
                        <li>
                            <p class="lead">Dimensi memahami informasi dari luar : Sensing (S) vs. Intuition (N)</p>
                        </li>
                        <li>
                            <p class="lead">Dimensi menarik kesimpulan & keputusan : Thinking (T) vs. Feeling (F)</p>
                        </li>
                        <li>
                            <p class="lead">Dimensi pola hidup : Judging (J) vs. Perceiving (P)</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="containe fluid">


                <div class="row">
                    <div class="col-md-3 mb-3">
                        <a href="https://tes.anthonykusuma.com/16-kepribadian/intj" class="btn btn-primary btn-lg btn-block">INTJ</a>
                    </div>

                    <div class="col-md-3 mb-3">
                        <a href="https://tes.anthonykusuma.com/16-kepribadian/entj" class="btn btn-primary btn-lg btn-block">ENTJ</a>
                    </div>

                    <div class="col-md-3 mb-3">
                        <a href="https://tes.anthonykusuma.com/16-kepribadian/intp" class="btn btn-primary btn-lg btn-block">INTP</a>
                    </div>

                    <div class="col-md-3 mb-3">
                        <a href="https://tes.anthonykusuma.com/16-kepribadianold" class="btn btn-primary btn-lg btn-block">ENTP</a>
                    </div>



                    <div class="col-md-3 mb-3">
                        <a href="https://tes.anthonykusuma.com/16-kepribadianold" class="btn btn-primary btn-lg btn-block">ISFJ</a>
                    </div>

                    <div class="col-md-3 mb-3">
                        <a href="https://tes.anthonykusuma.com/16-kepribadian/isfp" class="btn btn-primary btn-lg btn-block">ISFP</a>
                    </div>

                    <div class="col-md-3 mb-3">
                                <a href="https://tes.anthonykusuma.com/16-kepribadian/esfj" class="btn btn-primary btn-lg btn-block">ESFJ</a>
                    </div>

                    <div class="col-md-3 mb-3">
                                <a href="https://tes.anthonykusuma.com/16-kepribadian/esfp" class="btn btn-primary btn-lg btn-block">ESFP</a>
                    </div>


                    <div class="col-md-3 mb-3">
                                <a href="https://tes.anthonykusuma.com/16-kepribadian/istj" class="btn btn-primary btn-lg btn-block">ISTJ</a>
                    </div>

                    <div class="col-md-3 mb-3">
                                <a href="https://tes.anthonykusuma.com/16-kepribadian/istp" class="btn btn-primary btn-lg btn-block">ISTP</a>
                    </div>

                    <div class="col-md-3 mb-3">
                                <a href="https://tes.anthonykusuma.com/16-kepribadian/estj" class="btn btn-primary btn-lg btn-block">ESTJ</a>
                    </div>

                    <div class="col-md-3 mb-3">
                                <a href="https://tes.anthonykusuma.com/16-kepribadian/estp" class="btn btn-primary btn-lg btn-block">ESTP</a>
                    </div>

                    <div class="col-md-3 mb-3">
                                <a href="https://tes.anthonykusuma.com/16-kepribadian/infj" class="btn btn-primary btn-lg btn-block">INFJ</a>
                    </div>

                    <div class="col-md-3 mb-3">
                                <a href="https://tes.anthonykusuma.com/16-kepribadian/infp" class="btn btn-primary btn-lg btn-block">INFP</a>
                    </div>

                    <div class="col-md-3 mb-3">
                                <a href="https://tes.anthonykusuma.com/16-kepribadianold" class="btn btn-primary btn-lg btn-block">ENFJ</a>
                    </div>

                    <div class="col-md-3 mb-3">
                                <a href="https://tes.anthonykusuma.com/16-kepribadianold" class="btn btn-primary btn-lg btn-block">ENFP</a>
                    </div>

                </div>
            </div>


        </div>
    </section>
</body>

</html>