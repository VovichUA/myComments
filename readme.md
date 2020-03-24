1. `cd path/to/locale/folder/myComments`
2. copy `.env.example` past `.env`
3. configure `.env`
4. run `docker-compose up -d --build`
5. run `docker-compose exec app composer install`
6. run `docker-compose exec app php artisan key:generate`
7. run `docker-compose exec app chmod 777 -R storage/`
8. run `docker-compose exec app php artisan config:clear`
9. run `docker-compose exec app php artisan migrate`
10. open [localhost:8000/comment](http://localhost:8001/comment)
