# 🚀 Laravel React Starter Kit

[Laravel's official React starter kit](https://laravel.com/docs/12.x/starter-kits#react) enhanced with development workflow tools, code quality standards, and additional developer experience improvements from [laravel-starter-kit](https://github.com/marekmiklusek/laravel-starter-kit). ✨

Built with **Inertia.js v2**, **React 19**, **Tailwind CSS v4**, and **Laravel Wayfinder**.

## 📋 Requirements

- PHP >= 8.4.0
- Composer
- Node.js & NPM
- MySQL (or your preferred database)

## 🚀 Quick Start

> [!NOTE]
> In `config/database.php`, `'engine' => 'InnoDB',` is used as the default for both `mysql` and `mariadb` connections.

### 📦 Installation

Create a new Laravel React project:

```bash
composer create-project marekmiklusek/laravel-starter-kit-react --prefer-dist app-name
```

Run the automated setup script:

```bash
composer setup
```

This command will:
1. Install PHP dependencies via Composer
2. Create `.env` file from `.env.example` (if not exists)
3. Generate application key
4. Run database migrations
5. Install NPM dependencies
6. Build frontend assets

### ⚙️ Additional Setup

#### 🔧 Environment Configuration

After running `composer setup`, configure your `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

#### 🌐 Browser Testing Setup (Optional)

If you plan to use Pest's browser testing capabilities, install Playwright:

```bash
npm install playwright
npx playwright install
```

This installs the necessary browser binaries for running browser tests.

## 💻 Development

### 🖥️ Running the Development Server

Start all development services concurrently:

```bash
composer dev
```

This starts:
- **Laravel development server** (port 8000) - Your Inertia + React application
- **Queue listener** - Background job processing
- **Vite dev server** - Hot Module Replacement for React/CSS/JS

Your application will be available at `http://localhost:8000` 🎉

#### SSR Mode

To run with server-side rendering:

```bash
composer dev:ssr
```

## 🌍 Localization

The starter kit ships with full multilingual support. **English** (`en`) and **Czech** (`cs`) are included out of the box, and every user-facing string in the React frontend goes through the translator.

### 🔧 Switching the Locale

Set the locale in your `.env` file:

```env
APP_LOCALE=cs
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=cs_CZ
```

After saving, the entire UI — auth pages, settings, dashboard, navigation, validation messages — renders in the selected language. No build step is needed for translation changes; the JSON dictionary is loaded server-side per request.

### 📁 Language Files

```
lang/
├── en.json              # English UI strings (key → translation)
├── cs.json              # Czech UI strings
├── en/
│   ├── auth.php         # Laravel auth messages
│   ├── pagination.php
│   ├── passwords.php
│   └── validation.php   # Laravel validation messages
└── cs/
    ├── auth.php
    ├── pagination.php
    ├── passwords.php
    └── validation.php
```

`*.json` holds the application-level strings keyed by their English source text (Laravel's idiomatic JSON translation format). The PHP files cover Laravel's framework-level messages.

### ⚛️ Using Translations in React

The current locale and translations dictionary are shared as Inertia props by `HandleInertiaRequests`. Use the `useTranslations` hook in any component:

```tsx
import { useTranslations } from '@/hooks/use-translations';

export default function MyComponent() {
    const __ = useTranslations();

    return <h1>{__('Welcome')}</h1>;
}
```

The hook also supports `:placeholder` interpolation:

```tsx
__('Hello :name', { name: 'Marek' });
```

### ➕ Adding a New Language

1. Create `lang/{locale}.json` with the same keys as `lang/en.json`.
2. Create `lang/{locale}/` and translate `auth.php`, `pagination.php`, `passwords.php`, `validation.php`.
3. Set `APP_LOCALE={locale}` in `.env`.

## 🔍 Code Quality

### 🧹 Linting & Formatting

Fix code style issues:

```bash
composer lint
```

This runs:
- Rector (PHP refactoring)
- Laravel Pint (PHP formatting)
- ESLint & Prettier (frontend formatting)

### 🧪 Testing

Run the full test suite:

```bash
composer test
```

This includes:
- Type coverage (100% minimum)
- Code coverage (100% required)
- Unit and feature tests (Pest)
- Code style validation
- Static analysis (PHPStan)

### 🌐 Browser Testing

This starter kit includes Pest 4 with browser testing capabilities. Create browser tests in `tests/Browser/`:

```php
it('displays the login page', function () {
    $page = visit('/login');

    $page->assertSee(__('Log in to your account'))
        ->assertNoJavascriptErrors();
});
```

## 📜 Available Scripts

### 🎼 Composer Scripts

- `composer setup` - Initial project setup
- `composer dev` - Run all development services
- `composer dev:ssr` - Run with server-side rendering
- `composer lint` - Fix code style issues
- `composer test` - Run full test suite
- `composer test:unit` - Run Pest tests only
- `composer test:types` - Run PHPStan analysis
- `composer test:type-coverage` - Check type coverage
- `composer test:lint` - Validate code style
- `composer ci:check` - Run all CI checks (lint, format, types, tests)

### 📦 NPM Scripts

- `npm run dev` - Start Vite dev server
- `npm run build` - Build for production
- `npm run build:ssr` - Build for production with SSR
- `npm run lint` - Fix frontend lint issues
- `npm run lint:check` - Check frontend lint issues
- `npm run format` - Format frontend code with Prettier
- `npm run format:check` - Check frontend formatting
- `npm run types:check` - Check TypeScript types

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
