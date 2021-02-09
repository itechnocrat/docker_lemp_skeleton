Переделано из [How To Set Up Laravel, Nginx, and MySQL with Docker Compose](https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose)  

Запуск одним из способов:  
```sh
docker-compose up --build
# or
docker-compose up -d --build
```

```sh
docker-compose exec db bash
mysql -u root -p

```
```mysql
show databases;
GRANT ALL ON laravel.* TO 'user_name'@'%' IDENTIFIED BY 'user_password';
FLUSH PRIVILEGES;
EXIT;
```
