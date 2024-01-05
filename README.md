# Running locally
```sh
docker build --tag paganois-image .
docker run --name paganois -d -e PORT=80 -p 20001:80 -v ${PWD}:/app paganois-image
docker exec -it paganois composer install
docker exec -it paganois php artisan storage:link
docker exec -it paganois php artisan migrate
docker exec -it paganois php artisan db:seed
```

Enter in container with:
```sh
docker exec -it paganois bash
```

Once inside run the following commands:
```sh
chown -R www-data: /app/storage
```

If you can't save any file, run the following command, outside the container:
```sh
sudo chown -R $USER <project_folder>
```

