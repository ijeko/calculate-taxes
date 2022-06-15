Для запуска:

docker-compose build
docker-compose up -d

Api endpoint: GET api/delivery/cost (application/json)

Пример запроса:

{
    "service": "russian_post",
    "weight": 1
}

доступные сервисы russian_post , dhl
