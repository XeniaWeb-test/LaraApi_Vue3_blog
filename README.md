## Oksana Bürki

<https://xeniaweb.ch>

### About this project

XeniaWeb Project - Laravel 10 (API) Vite Vue.js Tailwind (SPA)
##

### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Docker
### Add alias for sail 
```sh
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

### Start containers
```sh
sail up -d
```

### Stop containers
```sh
sail down
```

## Frontend
```sh
npm run build
npm run dev
```

### Refresh Database
```sh
./vendor/bin/sail artisan migrate:fresh --force
./vendor/bin/sail artisan db:seed --force
```
