<?php
require_once("auth.php");
if (isset($_POST['d'])) {
  $a = $b = array();
  for ($i = 1; $i <= 60; $i++) {
    $a[$i] = isset($_POST['d'][$i]) && $_POST['d'][$i] == 1 ? 1 : 0;
    $b[$i] = isset($_POST['d'][$i]) && $_POST['d'][$i] == 2 ? 1 : 0;
  }
  $E=($a[1]+$b[2]+$a[3]+$b[4]+$a[5]+$b[6]+$a[7]+$b[8]+$a[9]+$b[10]+$a[11]+$b[12]+$a[13]+$b[14]+$a[15])/15;
  $I=($b[1]+$a[2]+$b[3]+$a[4]+$b[5]+$a[6]+$b[7]+$a[8]+$b[9]+$a[10]+$b[11]+$a[12]+$b[13]+$a[14]+$b[15])/15;

  // $I = ($b[3] + $b[6] + $b[8] + $b[12] + $b[17] + $b[20] + $b[26] + $b[27] + $b[28] + $b[32] + $b[42] + $b[49] + $b[53] + $b[55] + $b[59]) / 15;
  // $E = ($a[3] + $a[6] + $a[8] + $a[12] + $a[17] + $a[20] + $a[26] + $a[27] + $a[28] + $a[32] + $a[42] + $a[49] + $a[53] + $a[55] + $a[59]) / 15;

  $S=($a[16]+$b[17]+$a[18]+$b[19]+$a[20]+$b[21]+$a[22]+$b[23]+$a[24]+$b[25]+$a[26]+$b[27]+$a[28]+$b[29]+$a[30])/15;
  $N=($b[16]+$a[17]+$b[18]+$a[19]+$b[20]+$a[21]+$b[22]+$a[23]+$b[24]+$a[25]+$b[26]+$a[27]+$b[28]+$a[29]+$b[30])/15;

  // $S = ($a[4] + $a[7] + $a[13] + $a[14] + $a[16] + $a[19] + $a[23] + $a[29] + $a[30] + $a[33] + $a[35] + $a[37] + $a[38] + $a[40] + $a[41]) / 15;
  // $N = ($b[4] + $b[7] + $b[13] + $b[14] + $b[16] + $b[19] + $b[23] + $b[29] + $b[30] + $b[33] + $b[35] + $b[37] + $b[38] + $b[40] + $b[41]) / 15;

  $T=($a[31]+$b[32]+$a[33]+$b[34]+$a[35]+$b[36]+$a[37]+$b[38]+$a[39]+$b[40]+$a[41]+$b[42]+$a[42]+$b[44]+$a[45])/15;
  $F=($b[31]+$a[32]+$b[33]+$a[34]+$b[35]+$a[36]+$b[37]+$a[38]+$b[39]+$a[40]+$b[41]+$a[42]+$b[43]+$a[44]+$b[45])/15;

  // $T = ($a[1] + $a[2] + $a[9] + $a[11] + $a[18] + $a[22] + $a[24] + $a[45] + $a[46] + $a[47] + $a[50] + $a[51] + $a[54] + $a[56] + $a[58]) / 15;
  // $F = ($b[1] + $b[2] + $b[9] + $b[11] + $b[18] + $b[22] + $b[24] + $b[45] + $b[46] + $b[47] + $b[50] + $b[51] + $b[54] + $b[56] + $b[58]) / 15;

  $J=($a[46]+$b[47]+$a[48]+$b[49]+$a[50]+$b[51]+$a[52]+$b[53]+$a[54]+$b[55]+$a[56]+$b[57]+$a[58]+$b[59]+$a[60])/15;
  $P=($b[46]+$a[47]+$b[48]+$a[49]+$b[50]+$a[51]+$b[52]+$a[53]+$b[54]+$a[55]+$b[56]+$a[57]+$b[58]+$a[59]+$b[60])/15;

  // $J = ($a[5] + $a[10] + $a[15] + $a[21] + $a[25] + $a[31] + $a[34] + $a[36] + $a[39] + $a[43] + $a[44] + $a[48] + $a[52] + $a[57] + $a[60]) / 15;
  // $P = ($b[5] + $b[10] + $b[15] + $b[21] + $b[25] + $b[31] + $b[34] + $b[36] + $b[39] + $b[43] + $b[44] + $b[48] + $b[52] + $b[57] + $b[60]) / 15;

  $resultStr = ($E > $I ? 'E' : 'I') . ($S > $N ? 'S' : 'N') . ($T > $F ? 'T' : 'F') . ($J > $P ? 'J' : 'P');

  include 'config2.php';
  $sql = "SELECT * FROM tbl_interprestation WHERE symbol='{$resultStr}' ";
  $result = $db->query($sql);
  $data = $result->fetch_object();

?>

  <!doctype html>
  <html>

  <head>
    <title>MBTI Result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
      h2,
      h1,
      li,
      h3,
      h5 {
        font-family: 'Poppins', sans-serif;
      }
    </style>

  </head>

  <body>
    <div class="container-fluid">
      <header>
        <nav class="navbar navbar-light bg-default mb-2">
        </nav>
      </header>

      <div class="card mb-2">
        <div class="card-header bg-primary text-light">

          </style>
          <h2 class="text-center fw-bolder"><?php echo $data->symbol; ?></h2>
          <h5 class="text-center fw-bolder"><?php echo $data->short; ?></h5>
        </div>

        <div class="card-body mb-4">
          <div class="text-center">

            <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />

            <h3><?php echo $_SESSION["user"]["name"] ?></h3>
            <p><?php echo date('l, d-m-Y, H:i:s'); ?></p>
          </div>

            <h2 class="fw-bolder">Deskripsi</h2>
            <ul>
              <li><?php echo implode('</li><li>', explode('.', $data->description)); ?></li>
            </ul>

            <h2 class="fw-bolder"> Saran Pengembangan</h2>

            <ul>
              <li><?php echo implode('</li><li>', explode('.', $data->improvement)); ?></li>
            </ul>

            <h2 class="fw-bolder">Saran Profesi</h2>

            <ul>
              <li><?php echo implode('</li><li>', explode(',', $data->profession)); ?></li>
            </ul>

            <h3 class="fw-bolder">Pasangan/Partner</h3>

            <ul>
              <li><?php echo $data->partner; ?></li>
            </ul>

            
          </div">

        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>

  </html>
<?php
}
