# Running locally
```sh
docker build --tag freelegal-image .
docker run --name freelegal -d -e PORT=80 -p 20001:80 -v ${PWD}:/app freelegal-image
docker exec -it freelegal composer install
docker exec -it freelegal php artisan storage:link
docker exec -it freelegal php artisan migrate
docker exec -it freelegal php artisan db:seed
```

Enter in container with:
```sh
docker exec -it freelegal bash
```

Once inside run the following commands:
```sh
chown -R www-data: /app/storage
```

If you can't save any file, run the following command, outside the container:
```sh
sudo chown -R $USER <project_folder>
```
