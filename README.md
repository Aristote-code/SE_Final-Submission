# Mwarimu AI Project

Mwarimu AI is an educational project developed by Gahima Aristote (username: aristote-code), aiming to revolutionize the teaching experience by leveraging artificial intelligence. This project utilizes Laravel, a powerful PHP framework, for both backend and frontend development.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

Mwarimu AI project intends to provide an innovative approach to education by integrating AI technologies for educational purposes. Laravel is used both for the backend API development and frontend templating to create a seamless educational platform.

## Features

- User authentication and authorization.
- CRUD operations for managing educational content.
- User-friendly interface for content creation and management.

## Prerequisites

Before setting up the project, make sure you have the following prerequisites installed on your system:

- PHP (>=7.4)
- Composer
- Node.js
- npm
- MySQL or any other compatible database server

## Installation

1. Clone the repository:

```
git clone <repository_url>
```

2. Navigate to the project directory:

```
cd mwarimu-ai
```

3. Install PHP dependencies:

```
composer install
```

4. Install JavaScript dependencies:

```
npm install
```

5. Copy the `.env.example` file to `.env`:

```
cp .env.example .env
```

6. Generate the application key:

```
php artisan key:generate
```

7. Set up your database configuration in the `.env` file:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

8. Run the database migrations and seeders:

```
php artisan migrate --seed
```

## Usage

1. Compile frontend assets:

```
npm run dev
```

2. Start the Laravel development server:

```
php artisan serve
```

3. Access the application in your web browser at `http://localhost:8000`.

## Contributing

Contributions are welcome! If you want to contribute to this project.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
