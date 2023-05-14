

## MV LDCS

Laravel is a web application with flight management functions such as:

- Check-In
- Boarding
- Destination Management
- User Management 



## Setting up the project

To run the project, its best to use a local development software with php, mysql, and server capabilities. Reccommendation Xampp

1. Clone the github project (to htdocs if using xampp)
2. Go to the folder application using cd command on your cmd or terminal
3. Run composer install on your cmd or terminal
4. Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
5. Open your .env file and change the database name (DB_DATABASE), username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
6. Run php artisan key:generate
7. After that import the mysql database file in the 'DB' folder to the xampp php my admin database management studio.
8. Run php artisan serve and navigate to the provided local host ip 
