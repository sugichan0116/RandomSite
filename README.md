# RandomSite

## For Editor

### 更新履歴

./source/history.json

を更新

### 作品追加

フォルダーを作成

例)2000年版
./source/works/2000/

このフォルダに
- data.json
- image.png
- image2.jpg
などを追加

さらに記事として管理ファイルに追加

./source/works/articles.json

### data.json
このファイルのフォーマット

---

~~~
  [
    {
      "name" : "友好祭 in 20XX",
      "src" : "https.onedrivelink",
      "works" : [
        {
          "name" : "this is a game",
          "image" : "ss.png",
          "meta" : "作者 : me",
          "text" : "これはゲームです",
          "extra" : "この作品が受け取った賞など"
        },
        {
          "name" : "game B",
          "image" : "gameb.png",
          "meta" : "作者 : you",
          "text" : "i made this game"
        }
      ]
    },
    {
      "name" : "白鷺祭 in 20XX",
      "src" : "http_this_is_a_link",
      "works" : [
        {
          "name" : "i doubt this is game",
          "image" : "id.jpg",
          "meta" : "作者 : us",
          "text" : "Fight"
        }
      ]
    }
  ]
~~~
