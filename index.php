
<!DOCTYPE html>
<html lang="ja">
  <?php require('./assets/head.html'); ?>
  <body>
    <?php include ('./assets/menu.html'); ?>
    <style type="text/css">
      #article {
        margin: 4em;
      }
      .click:hover {
        letter-spacing: .3em;
        transition: letter-spacing .5s;
      }
    </style>
    <div class="ui main text container" id="article">
      <?php
        if(isset($_GET['page'])) {
          $page = $_GET['page'];
        } else {
          $page = "home";
        }
        include("./source/$page.html");
       ?>
    </div>
    <script type="text/javascript">
      $('<?php echo "#${page}" ?>')
        .addClass('active')
      ;
      $('title')
        .prepend("<?php echo "${page}" ?> | ")
      ;
    </script>
  </body>
</html>
