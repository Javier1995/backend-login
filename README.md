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
