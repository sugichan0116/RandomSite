<?php
  $dirPath = "./source/".$_GET['page']."/";
  $json = file_get_contents($dirPath."/data.json");
  $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
  $arr = json_decode($json, true);
  foreach ($arr as $fes) {
    $content = "";
    foreach ($fes['works'] as $work) {
      $work['image'] = $dirPath.$work['image'];
      if(array_key_exists('extra', $work) == false) {
        $work += array('extra' => "");
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
      <button class="ui huge positive right labeled icon button" onClick="window.open('{$fes['src']}')">
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
