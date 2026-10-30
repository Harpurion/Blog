1. Copy the HTTPS URL from the GitHub repository and clone it:
   `git clone https://github.com/Harpurion/Blog.git`
   `Set-Location Blog`

2. Install VS Code:
   `winget install --id Microsoft.VisualStudioCode -e`

3. Install Git, choose Git Bash as VS Code's default terminal, and set VS Code as Git's editor:
   `winget install --id Git.Git -e --source winget`
   `git config --global core.editor "code --wait"`

4. Install PHP 8.5:
   `winget install --id PHP.PHP.8.5 -e`

5. Open a new terminal after the installations.

6. Find the PHP executable:
   `where.exe php`

7. In the PHP installation folder, copy `php.ini-development` and rename the copy to `php.ini`.

8. Open `php.ini`, set `extension_dir = "ext"`, and enable these extensions by removing the leading semicolon:
   `extension=pdo_sqlite`, `extension=fileinfo`, `extension=openssl`, `extension=curl`, `extension=mbstring`.

9. Download and run the [Composer Windows installer](https://getcomposer.org/Composer-Setup.exe). Select the PHP installation from step 6 when asked.

10. Open the cloned Blog folder in VS Code, open a new terminal there, and install PHP packages:
    `composer install`

11. Install Bun with its PowerShell command:
    `powershell -c "irm https://bun.sh/install.ps1 | iex"`

12. Reopen the terminal in the Blog folder and install frontend packages:
    `bun i`

13. In VS Code, open Extensions and install the Laravel extension.

14. Create `.env` from the example and make the SQLite database file:
    `Copy-Item .env.example .env`
    `New-Item -ItemType File -Path database/database.sqlite`

15. Generate the application key:
    `php artisan key:generate`

16. Create the database tables and public storage link:
    `php artisan migrate`
    `php artisan storage:link`

    To generate sample articles and related data, run once:
    `php artisan db:seed`

17. Start the development environment:
    `composer run dev`

    Open http://127.0.0.1:8000 in your browser.
