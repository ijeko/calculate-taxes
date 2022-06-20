Для запуска:

docker-compose build
docker-compose up -d

Api endpoint метод GET (application/json): api/delivery/cost 

Пример запроса:

{
    "service": "russian_post",
    "weight": 1
}

доступные сервисы (string): russian_post , dhl
доступные характеристики посылки (float): weight
