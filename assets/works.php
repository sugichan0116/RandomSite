<?php
  $dirPath = "./source/".$_GET['page']."/";
  $json = file_get_contents($dirPath."/data.json");
  $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
  $arr = json_decode($json, true);
  echo <<< EOT
  <h2 class="ui center aligned icon header">
    <i class="circular book icon"></i>
    Collection
  </h2>
  <div class="ui divider"></div>
EOT;
  foreach ($arr as $fes) {
    $content = "";

    $linkState = "positive";
    $linkAttr = <<<T
    onClick="window.open('{$fes['src']}')";
T;
    if(array_key_exists('src', $fes)) {
      $fes += array('src' => "" );
    }
    if($fes['src'] == "") {
      $linkState = "disable";
      $linkAttr = "";
    }

    foreach ($fes['works'] as $work) {
      $work['image'] = $dirPath.$work['image'];
      if(array_key_exists('text', $work) == false) {
        $work += array('text' => "");
      }
      if(array_key_exists('extra', $work) == false) {
        $work += array('extra' => "");
      }
      if(array_key_exists('tags', $work) == true) {
        $tagsText = "";
        $colors = array(
          "Game" => "red",
          "Music" => "blue",
          "Art" => "orange",
          "Service" => "green");
        foreach ($work['tags'] as $tag) {
          $color = "";
          foreach ($colors as $key => $value) {
            if($key == $tag) $color = $value;
          }
          $tagsText .= "<a class='ui tag ${color} label'>${tag}</a>  ";
        }
        $work['extra'] = $tagsText.$work['extra'];
      }
      $content .= <<<EOT
      <div class="item">
        <div class="image">
          <img src="{$work['image']}">
        </div>
        <div class="content">
          <a class="header">{$work['name']}</a>
          <div class="meta">
            <span>{$work['meta']}</span>
          </div>
          <div class="description">
            <p>{$work['text']}</p>
          </div>
          <div class="extra">
            {$work['extra']}
          </div>
        </div>
      </div>
EOT;
    }
    echo <<<DIV
    <div class="ui piled segment very padded">
      <h2>{$fes['name']}</h2>
      <button class="ui huge ${linkState} right labeled icon button" ${linkAttr}>
        <i class="right arrow icon"></i>
        DownLoad
      </button>
      <div class="ui divider"></div>
      <div class="ui items divided">
        ${content}
      </div>
    </div>
DIV;
  }
 ?>
