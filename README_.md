# 研修用 - Docker開発環境構築

## 事前準備
### GitHubのSSHキーを設定
リポジトリをcloneやpushする時等に使うSSHキーを設定する。  
以下リンク先の手順通りに実施する。

・新しい SSH キーを生成して ssh-agent に追加する  
https://docs.github.com/ja/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent

・GitHub アカウントへの新しい SSH キーの追加  
https://docs.github.com/ja/authentication/connecting-to-github-with-ssh/adding-a-new-ssh-key-to-your-github-account

※登録した Passphrase（パスフレーズ）は忘れないように自分だけが見れる場所に保存しておきましょう

## Laravelの始め方
ドキュメントルート直下で.env.exampleをコピーして.envを作成。
```
cp .env.example .env
```

Laravel環境用のdocker-compose.ymlファイルがドキュメントルート直下にあるので、イメージをビルドしてコンテナを起動する。
```
docker-compose build
docker-compose up -d
```

コンテナに入ってcomposer install, migrateを実行して完了。
```
docker-compose exec app bash
composer install
php artisan migrate
exit
```

### 動作確認
http://localhost にアクセスしてLaravelのWelcome画面（Laravelのロゴと文字、Laravel関連ドキュメントへのリンク等）が表示されればOK。

### phpMyAdmin
http://localhost:8080 にアクセスしてphpMyAdminが正常に表示されればOK。

### その他
- コンテナを停止する場合はドキュメントルート直下で以下を実行。
```
$ docker-compose down
```
