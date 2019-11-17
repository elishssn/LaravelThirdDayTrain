
## Migration
    php artisan migrate --step

    php artisan migrate:status

## Ternary Operator

    $blog->user_id ? $blog->user->name : "Not belong to user"    
    
## Nak Push ke Repo
    git status

    git add .

    git commit -m "Commit Message"

    git push -u origin master
    
## Nak clone Project
    git clone https://url projectname

    cd projectname

    composer update

    cp .env.example .env
        Update APP NAME
        Update APP KEY
            php artisan key:generate
        Update DB 
            go to DB Manager
                create DB
    git remote set-url <remote-name> <remote-url>
    <remote-name> : origin
    <remote-url> : url repo kau
    
## Everytime changes made on env.
    php artisan config:clear
    php artisan cache:clear
