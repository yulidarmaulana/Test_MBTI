<?php
include 'config2.php';
$sql = "SELECT * FROM tbl_statements ORDER BY rand()";
$result = $db->query($sql);
$data = array();
while ($row = $result->fetch_object()) $data[] = $row;
?>

<!doctype html>
<html>

<head>
  <title>MBTI Test</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/jquery.steps.css" />

  <style>
    h2,
    h1,
    li,
    p,
    th {
      font-family: 'Poppins', sans-serif;
    }
  </style>

</head>

<body>

  <header>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <h1>Test MBTI</h1>
          <p>
            Di bawah ini ada 60 nomor. Masing-masing nomor memiliki dua pernyataan yang bertolak belakang (PERNYATAAN 1 & 2). Pilihlah salah satu pernyataan yang paling sesuai dengan diri Anda dengan men-check pada isian pada kolom yang sudah disediakan (KOLOM PILIHAN). Anda HARUS memilih salah satu yang dominan serta mengisi semua nomor.
          </p>
        </div>
      </div>
    </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
      
        <form action='result.php' method='post' id="form_pertanyaan">


          <div id="div_pertanyaan">
            <!-- Mulai dari sini -->

            <h3>Keyboard</h3>
            
            <section>

              <?php
              $no = 0;
              foreach ($data as $d) {
                $no++;
                echo "
                    <div class='card mb-2 p-2 pl-4 shadow'>
                      <div class=\"form-check\">
                        <input class=\"form-check-input required\" name='d[{$d->id}]' type=\"radio\" value=\"1\" id=\"1-" . $no . "\"  />
                        <label class=\"form-check-label\" for=\"1-" . $no . "\">
                          {$d->statement1}
                        </label>
                      </div>
                      
                      <div class=\"form-check\">
                        <input class=\"form-check-input required\" checked name='d[{$d->id}]' type=\"radio\" value=\"2\" id=\"2-" . $no . "\" />
                        <label class=\"form-check-label\" for=\"2-" . $no . "\">
                          {$d->statement2}
                        </label>
                      </div>

                    </div>
                          ";

                if ($no % 3 == 0) {
                  echo "
                        </section>

                        <!-- Pembatas -->

                        <h3>Keyboard</h3>
                        <section>    
                           ";
                }
              }
              ?>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  This is some text within a card body.
                </div>
              </div>

            </section>
          </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.steps.min.js"></script>
    <script src="js/jquery.validate.js"></script>

    <script>
      // console.log(a)

      $(document).ready(function() {
        var form = $("#form_pertanyaan");

        $("#div_pertanyaan").steps({
          headerTag: "h3",
          bodyTag: "section",
          transitionEffect: "slideLeft",
          // validasi required kalo ada inputan yang belum diisi
          onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
          },
          onFinishing: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
          },
          // submitnya pake ini
          onFinished: function(event, currentIndex) {
            localStorage.clear(); // hapus semua data di localstorage
            form.submit();
          }
        });

        $('ul[role="tablist"]').hide(); // sembunyikan tab yang ada di atas

        $('#form_pertanyaan .card-header').hide() // sembunyikan card-header
      });
    </script>

</body>

</html>