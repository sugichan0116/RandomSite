
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
        $page = "./source/";
        $name = "";
        if(isset($_GET['page'])) {
          $page .= $name = $_GET['page'];
        } else {
          $page .= "home";
        }
        if(file_exists($page."/")) {
          $page = "./assets/workcontent.php";
          $name = "works";
        } else {
          $page .= ".html";
        }
        include($page);
       ?>
    </div>
    <script type="text/javascript">
      $('<?php echo "#${name}" ?>')
        .addClass('active')
      ;
      $('title')
        .prepend("<?php echo "${name}" ?> | ")
      ;
    </script>
  </body>
</html>
