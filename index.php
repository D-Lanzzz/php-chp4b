<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

$i = 1;

$siswa = [
    [
    "Lanzz Kun",
    "XII RPL 1",
    "Karangdadap"
    ],
    [
    "Marchel",
    "XII BB 1",
    "Petungkriyono"
    ],
    [
    "Djacuki",
    "XI TMO 5",
    "Kajen"
    ]
];

?>
<table border="1" cellspacing="0" cellpadding="5">
          <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Alamat</th>
          </tr>
          <?php foreach($siswa as $sw) : ?>
          <tr>
              <td><?= $i++ ?></td>
              <td><?= $sw[0] ?></td>
              <td><?= $sw[1] ?></td>
              <td><?= $sw[2] ?></td>
          </tr>
          <?php endforeach; ?>
      </table> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>