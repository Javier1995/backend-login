# INSTALLATION:

1. Install Docker 
2. If you have a Windows OS, you must install wsl v2 and a linux distribution (Example: Ubuntu, Linux Mint, Debian, etc.)
3. WLS v2 installation resource: https://docs.microsoft.com/en-us/windows/wsl/install
4. Once you have WSL v2 enabled and a distribution installed on your Windows OS, you need to move the project to the Linux distribution (\\wsl.localhost\Ubuntu\home\user)
5. Install `php8.2` in your OS 
6. Intall Composer and once you have installed run in the root directory of the project the command `composer install` to install the dependencies and packages in the vendor directory
7. Create the project configuration file using the `cp .env.example .env` command.
8. Execute `composer vm:start` command to run laravel sail
9. Execute  `composer app:install` command to install app
10. Access site at <http://localhost> *(:warning: in case another local site is using port 80 you will need to change it in env. file)*
11. Connect React app in  <http://localhost:300>



 ### Available Commands

This project uses custom scripts defined in the `composer.json` file to run common tasks such as managing the development environment, database, and application setup.

## Commands Table

| **Command**                 | **Description**                                                             | **Usage**                              |
|-----------------------------|-----------------------------------------------------------------------------|----------------------------------------|
| `vm:start`         | Starts the Docker development environment in the background.                | `composer vm:start`                   |
| `table:migrate`    | Runs the migrations to set up the database tables.                          | `composer table:migrate`              |
| `db:seed`          | Populates the database tables with initial data.                            | `composer db:seed`                    |
| `vm:stop`          | Stops the Docker containers associated with the development environment.    | `composer vm:stop`                    |
| `vm:restart`       | Restarts the Docker containers for the project.                             | `composer vm:restart`                 |
| `app:install`      | Automatically runs migrations and seeds the database.                       | `composer app:install`                |
| `app:send-daily-email` | Sends the daily email as configured in the application in laravel sail.                     | `./vendor/bin/sail artisan app:send-daily-email`       |
| `schedule:work` | Sends the daily email as configured in the application in laravel sail.                     | `./vendor/bin/sail artisan artisan schedule:work`       |

## Example Workflow

 **Start the environment:**
   ```bash
   composer vm:start
   ```
 **Run email command manually**
   ```bash
    ./vendor/bin/sail artisan app:send-daily-email
   ```

 **Run scheduled email for users at 00:00:00**
  ```bash
   ./vendor/bin/sail artisan artisan schedule:work
  ```

## Screenshots
 ### Task 1:
[Find the Year with Most People Alive](http://localhost:82/find-year-with-most-people-alive)
![task 1](screenshots/task1.png)

 ### Task 2:
[Blade task](http://localhost:82/user)
![task 1](screenshots/blade_lists.png)
Email needs to be run by using :   
  ```bash
   ./vendor/bin/sail artisan artisan schedule:work
  ```
![emails 2](screenshots/email.png)

[Login](http://localhost:82/login)
![Screenshot 2025-01-22 143438](https://github.com/user-attachments/assets/ddf8cbd7-2c4b-4cc5-9ca4-7934ddca434c)
[Register](http://localhost:82/register)
![Screenshot 2025-01-22 143446](https://github.com/user-attachments/assets/bdf978ec-1e1d-4aee-b6fa-37285ac51692)
[Products](http://localhost:82/products)
![Screenshot 2025-01-22 143430](https://github.com/user-attachments/assets/00b3abd6-8b30-4f20-b8ca-057c2103f6e6)
[Users](http://localhost:82/users)
![image](https://github.com/user-attachments/assets/547fd2ad-1c93-4abb-ab16-31cc21b6ccac)
[Edit User](http://localhost:82/users/1/edit)
![image](https://github.com/user-attachments/assets/d88e18ff-6ec2-4794-9627-a1bc9e5663eb)









