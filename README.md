## Install
    - git clone https://github.com/udamuri/pasar20
    - cd pasar20
    - composer install
    - linux cp .env.example .env
    - php artisan key:generate
    - The key will be written automatically in your .env file.
## vendor publish
    - php artisan vendor:publish
    - select 0 ([] Publish files from all providers and tags listed below)
## rajaonkit api setting (.env)
    - RAJA_ONGKIR_URL=https://api.rajaongkir.com/starter/
    - RAJA_ONGKIR_KEY="set api key disini"
## url
    - http://127.0.0.1:8000/ (looping)
    - http://127.0.0.1:8000/rajaongkir (rajaongkir)
## Dev
    - php artisan serve

