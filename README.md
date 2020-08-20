# Laravel Line Login

1. Setup laravel project with auth template

    ~~~bash
    laravel new newproject
    cd newproject
    composer require laravel/ui
    php artisan ui vue --auth
    npm install && npm run dev
    # require socialite and line driver
    composer require laravel/socialite
    composer require socialiteproviders/line
    # modify *.env* DB connection string for your's before db migrate
    php artisan migrate
    ~~~

2. Go [https://developers.line.biz/en/](https://developers.line.biz/en/) to register line login service, and get channel_id, channel_secret, and set callback url there.

3. Add channel_id and channel_secret to *.env* file like below:
   
   ~~~bash
   LINE_CLIENT_ID=1234567890
   LINE_CLIENT_SECRET=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
   LINE_REDIRECT_URI=http://127.0.0.1:8000/line/login/callback
   ~~~

4. Design login, register logic bla bla bla...