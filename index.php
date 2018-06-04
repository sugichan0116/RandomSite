
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
          $page .= "enter";
        }
        if(file_exists($page."/")) {
          $page = "./assets/works.php";
          $name = "works";
        } else {
          $page .= ".html";
        }
        include($page);
       ?>
    </div>
    <?php
      if(isset($name) && $name != "") {

        print <<< EOT
        <script type="text/javascript">

          $('#${name}')
            .addClass('active')
          ;
          $('title')
            .prepend("${name} | ")
          ;
        </script>
EOT;
      }
     ?>

  </body>
</html>
