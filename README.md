# Personal Portfolio — lxngvr

A personal portfolio website showcasing my background, technical skills, projects, and learning journey as an Informatics student.

## About the Project

This project is my personal space to document my growth in technology and software development. It presents my academic background, technical interests, selected projects, and ongoing learning journey.

As an Informatics student, I am particularly interested in data science, machine learning, and data engineering. Through this portfolio, I aim to showcase my work, explore new technologies, and continuously develop my technical skills.

## Tech Stack

- **Backend:** PHP 8.3+, Laravel 13
- **Frontend:** Tailwind CSS 4
- **Build Tool:** Vite 7
- **Additional Framework:** Filament 5
- **Package Managers:** Composer and npm

## Features

- **Personal Introduction** — An overview of my background and interests.
- **Education & Experience** — Academic background and relevant experiences.
- **Skills & Technologies** — A showcase of technical skills and tools.
- **Project Showcase** — Selected projects and development work.
- **Contact Form** — A way to get in touch through the portfolio website.

*Note: The feature list should reflect the current implementation of the website.*

## Getting Started

Follow these steps to run the project locally.

### Prerequisites

Make sure you have the following installed:

- PHP 8.3 or later
- Composer
- Node.js and npm
- A database supported by Laravel

### Installation

**1. Clone the repository**

```bash
git clone https://github.com/lxngvr/myportofolio.git
cd myportofolio
```

**2. Install PHP dependencies**

```bash
composer install
```

**3. Configure the environment**

```bash
cp .env.example .env
php artisan key:generate
```

Update the database configuration in your `.env` file according to your local environment.

**4. Run database migrations**

```bash
php artisan migrate
```

**5. Install frontend dependencies**

```bash
npm install
```

**6. Start the development servers**

Open a terminal and run:

```bash
composer run dev
```

This starts the Laravel development server and the Vite development process using the project's configured development script.

**7. Open the website**

Visit:

```text
http://localhost:8000
```

## Project Structure

```text
myportofolio/
├── app/          # Application logic and controllers
├── bootstrap/    # Framework bootstrap files
├── config/       # Application configuration
├── database/     # Migrations, factories, and seeders
├── public/       # Public assets and entry point
├── resources/    # Frontend resources and views
├── routes/       # Application routes
├── storage/      # Logs and generated application files
├── tests/        # Automated tests
├── composer.json # PHP dependencies and scripts
├── package.json  # Frontend dependencies and scripts
└── vite.config.js
```

## Development

To compile frontend assets for production:

```bash
npm run build
```

To run the application's automated tests:

```bash
composer test
```

## Project Status

This portfolio is a work in progress. I will continue improving its design, content, functionality, and overall user experience as I gain new knowledge and build more projects.

## Connect with Me

- **GitHub:** [@lxngvr](https://github.com/lxngvr)
- **Portfolio Repository:** [myportofolio](https://github.com/lxngvr/myportofolio)

---

*Built with curiosity, consistency, and a passion for continuous learning.*
