PHP MVC with laravel
===

This setup from laravel , can run on cloud9.

### storage fix 
```bash
>> chmod -R o+w storage
```

### run migration to create sqlite db
```bash
>> php artisan migration:install
>> php artisan migrate
```

### setup local apache virtual host
```HTML
<VirtualHost *:80>
	ServerName url.hi.ch
	ServerAlias url.hi.ch
	DocumentRoot /srv/www_root/starwolf/url
	ErrorLog /var/log/apache2/starwolf/error_log
	CustomLog /var/log/apache2/starwolf/access_log combined
</VirtualHost>
```
### add the URL to your local hosts file - to find under: '/etc/hosts'
```HTML
	192.168.1.13	url.hi.ch
```