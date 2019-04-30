<!doctype html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/thema.css" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/thema.css" rel="stylesheet">
    <script src="js/jQuery-2.2.0.mins.js" type="text/javascript"></script>
    <script src="pagify.js" type="text/javascript"></script>

    <script type='text/javascript'>
      $(document).ready(function() {
        $('#page_holder').pagify({
          pages: ['beranda', 'acara', 'lokasi', 'komentar'],
          animation: 'fadeIn',
          'default': 'beranda',
          cache: true
        });
      });
    </script>

    <title>Undangan Online</title>
  </head>

  <body>
    <div id='container'>
    <header>
      <h1>Nur Aini & Chairul Wafa</h1>
      <nav>
        <a class="button" href='#beranda'>Beranda</a>
        <a class="button" href='#acara'>Acara</a>
        <a class="button" href='#lokasi'>Lokasi</a>
        <a class="button" href='#komentar'>Komentar</a>
      </nav>
    </header>
    <div class="container">
    <div id='page_holder' />
    </div>
  </div>
    <br>
    <footer>
    <div class="container">
      Powered by Juanas Smith — Undangan Pernikahan Online — <?php include "file07.php" ; ?>
    </div>
  </footer>
  </body>
</html>
