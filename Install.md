
### 移行時のみ
@旧サーバー
SSL証明書の移動
```
sudo ls /etc/letsencrypt/live/
sudo cp /etc/letsencrypt/live/blog.miyawa-tarou.com-0001/privkey.pem /home/kamiyagi/tmp/b_privkey.pem
sudo cp /etc/letsencrypt/live/blog.miyawa-tarou.com-0001/fullchain.pem /home/kamiyagi/tmp/b_fullchain.pem
```

@移動
```
scp sakura:/home/kamiyagi/tmp/b_*.pem .
scp b_*.pem conoha:.
```

@新サーバー
```
mkdir /etc/letsencrypt/live/blog.miyawa-tarou.com-0001
mv b_privkey.pem /etc/letsencrypt/live/blog.miyawa-tarou.com-0001/privkey.pem
mv b_fullchain.pem /etc/letsencrypt/live/blog.miyawa-tarou.com-0001/fullchain.pem
```

### wordpressインストール

最新版のダウンロード
https://ja.wordpress.org/download/
```
wget https://ja.wordpress.org/latest-ja.zip
unzip latest-ja.zip
```
設置
```
mkdir /var/www/miyawa_blog
mv wordpress/ /var/www/miyawa_blog/
cd /var/www/miyawa_blog/wordpress
cp wp-config-sample.php wp-config.php
```

DB準備
```
create database `blog`;
GRANT ALL ON blog.* TO 'blog'@'localhost' IDENTIFIED BY 'Ads%6asf' WITH GRANT OPTION;
```

```
vim wp-config.php

DB設定
```

```
vim /etc/nginx/conf.d/blog.conf

nginx設定
```

```
nginx -t
service nginx restart
```

```
cd /var/www/miyawa_blog/wordpress/
chmod 777 wp-content
chown -R www-data *
```

画像のrenegerate
GD or imagemagickが必要
https://lightning.vektor-inc.co.jp/lightning-pro/setting/others/regenerate-thumbnails

テーマのインストール
https://github.com/miyawa-tarou/blog_miyawa_theme