# Epetitions API 

Welcome to Epetitions API ! 

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction
Provide a brief introduction to your project. Explain its purpose, goals, and any relevant background information.

## Features
List the key features and functionalities of your project. Highlight what makes it unique and valuable.

## Installation
Provide step-by-step instructions on how to install and set up your project. Include any dependencies or prerequisites.

1. Add .env file provided by me
2. composer install
3. npm install
4. ./vendor/bin/sail up -d
5. ./vendor/bin/sail artisan migrate:fresh --seed
6. ./vendor/bin/sail composer install 
6. ./vendor/bin/sail npm install 
7. ./vendor/bin/sail npm run build
8. ./vendor/bin/sail npm run dev
9. Go to: http://localhost/register and register admin@mail.com:password
10. Login as admin
11. go to http://localhost:8080/ and login as: sail:password to check db
12. Done ...

If necessary grant privileges to user sail on mysql server:
Goto mysql-server exec on docker:
- Log in to MySQL
mysql -u root -p
(password)
- Create the user (if not already created)
CREATE USER 'sail'@'localhost' IDENTIFIED BY 'password';
- Grant all privileges to the user for the specific database
GRANT ALL PRIVILEGES ON e_petitions_db1.* TO 'sail'@'localhost';
- Flush privileges to apply changes
FLUSH PRIVILEGES;
exit;
- for migrations use always:
sail artisan migrate

## Usage
Explain how to use your project. Provide examples, code snippets, or screenshots to demonstrate its functionality.

## Contributing
Explain how others can contribute to your project. Include guidelines for submitting bug reports, feature requests, or pull requests.

## License
Specify the license under which your project is distributed. Include any necessary disclaimers or copyright notices.

## Contact
If you have any questions or need further assistance, feel free to contact us at [email@example.com](mailto:email@example.com).
