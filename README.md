# Mindfulness App - Landing Page

## Project Overview

This repository contains the landing page for the Mindfulness app, a web-based application (in development and testing stages) designed to help divorced parents maintain mindfulness and emotional balance. This landing page serves as an introduction and showcase for the main application, which is developed and hosted separately.

The project is part of a research initiative sponsored by the National Institute of Mental Health (NIMH) to support high-risk divorced families.

## Features of the Landing Page

- Responsive design using Tailwind CSS
- Information about the main app's features and benefits
- Overview of the research backing the project
- Contact information for inquiries

## Technology Stack

- Frontend Framework: Laravel
- CSS Framework: Tailwind CSS
- Build Tool: Vite
- Development Utility: Concurrently

## Getting Started

### Prerequisites

- PHP 8.1+
- Composer
- Node.js and npm

### Installation

1. Clone the repository
   ```
   git clone [your-repo-url]
   ```

2. Install PHP dependencies
   ```
   composer install
   ```

3. Install JavaScript dependencies
   ```
   npm install
   ```

4. Copy the `.env.example` file to `.env` and configure your environment variables

5. Generate an application key
   ```
   php artisan key:generate
   ```

6. Compile assets
   ```
   npm run build
   ```

## Development

This project uses Concurrently to run multiple commands simultaneously. To start the development environment, use:

```
npm run serve
```

This command (defined in `package.json`) uses Concurrently to run both the Vite development server for hot-reloading of assets and the Laravel development server.

If you need to run commands separately, you can use:

```
npm run dev
```

and in another terminal:

```
php artisan serve
```

## Deployment

For production deployment:

1. Set your production environment variables in `.env`
2. Compile and minify assets:
   ```
   npm run build
   ```
3. Deploy the contents to your production server

## Relationship to Main App

This landing page is a separate entity from the main application. It serves as a public-facing introduction to the project. The main application, with its full feature set, is hosted and maintained in a separate repository.

## Contributing

As this is a landing page for a specific research project, we are not accepting public contributions at this time. For any suggestions or issues, please contact the project maintainers.

## Research Context

This landing page is part of a broader research initiative focused on supporting divorced families through mindfulness practices. The full application, which this page introduces, is being developed in collaboration with researchers and mental health professionals.

## Contact

For more information about the research project or the main application, please contact:

TODO - contact info

---

This landing page project is part of a grant-funded research initiative aimed at supporting divorced families through mindfulness practices.