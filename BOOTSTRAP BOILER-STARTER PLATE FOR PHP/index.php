<?php
// INITIALIZE DB FILE
include "db.php";
// INITIALIZE MAIN.PHP FILE
include "main.php";
// START HERE


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FONT AWESOME ICONS JS -->
  <script src="/vendor_libraries/font_awesome_icons/font_awesome_arjun_kit.js"></script>
  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="/vendor_libraries/bootstrap_4_5_2_min_files/css/bootstrap.min.css">
  <!-- LIGHTBOX IMAGE GALLERY VIEW LIBRARY CSS -->
  <link rel="stylesheet" href="/vendor_libraries/lightbox/css/ekko-lightbox.css">
  <!-- SLICK CAROUSEL LIBRARY CSS  -->
  <link rel="stylesheet" href="/vendor_libraries/slick/css/slick.css">
  <!-- SLICK CAROUSEL LIBRARY CSS 2  -->
  <link rel="stylesheet" href="/vendor_libraries/slick/css/slick-theme.css">
  <!-- ADD THE TITLE OF YOUR PROJECT HERE -->
  <title>PROJECT TITLE</title>
</head>

<body>
  <div class="container">
    <!-- START HERE -->




  </div>

  <!-- ******************************************* -->
  <!-- START OF BOOTSTRAP FILES -->
  <!-- ******************************************* -->

  <!-- BOOTSTRAP jQUERY JS -->
  <script src="/vendor_libraries/jquery/jquery-3.5.1.min.js"></script>
  <!-- BOOTSTRAP POPPER JS -->
  <script src="/vendor_libraries/bootstrap_4_5_2_min_files/js/popper.min.js"></script>
  <!-- BOOTSTRAP JS -->
  <script src="/vendor_libraries/bootstrap_4_5_2_min_files/js/bootstrap.min.js"></script>
  <!-- LIGHTBOX IMAGE GALLERY VIEW LIBRARY JS -->
  <script src="/vendor_libraries/lightbox/js/ekko-lightbox.min.js"></script>
  <script>
    // LIGHTBOX IMAGE GALLERY VIEW INIT
    // Lightbox Init
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });
  </script>
  <!-- SLICK CAROUSEL LIBRARY JS  -->
  <script src="/vendor_libraries/slick/js/slick.min.js"></script>
  <script>
    // SLICK TEXT CAROUSEL LIBRARY INIT
    // Slick Init
    $('.slider').slick({
      infinite: true,
      slideToShow: 1,
      slideToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
    });
  </script>
  <!-- CKEDITOR WYSIWYG TEXT EDITOR LIBRARY JS -->
  <script src="/vendor_libraries/ckeditor/ckeditor.js"></script>
  <script>
    let editor;
    ClassicEditor
      .create(document.querySelector('#editor'))
      .then(newEditor => {
        editor = newEditor;
      })
      .catch(error => {
        console.error(error);
      });
    // Assuming there is a <button id="save-changes">Save Changes</button> in your application.
    document.querySelector('#save-changes').addEventListener('click', () => {
      // Save all the written text data in editorData variable using editor.getData() method
      const editorData = editor.getData();
      // print/display the data in console.log
      console.log(editorData);
    });
  </script>

  <!-- ******************************************* -->
  <!-- END OF BOOTSTRAP FILES -->
  <!-- ******************************************* -->

  <!-- ADD CUSTOM JS FILES HERE -->
  <script src="/main.js"></script>

</body>

</html>