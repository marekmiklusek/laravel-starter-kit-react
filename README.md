# 🚀 Laravel React Starter Kit

[Laravel's official React starter kit](https://laravel.com/docs/13.x/starter-kits#react) enhanced with development workflow tools, code quality standards, and additional developer experience improvements.

Built with **Inertia.js**, **React**, **Tailwind CSS**, and **Laravel Wayfinder**.

## 📦 Bundled Packages

Beyond Laravel's default React stack, this kit ships pre-configured with:

- [marekmiklusek/database-backup](https://github.com/marekmiklusek/database-backup): automated MySQL backups to local storage or Google Drive ([setup](#-database-backups))
- [marekmiklusek/laravel-slack-errors](https://github.com/marekmiklusek/laravel-slack-errors): unhandled exception notifications to Slack ([setup](#-slack-error-notifications))

## 📋 Requirements

- PHP: see the `php` constraint in [`composer.json`](composer.json)
- Composer
- Node.js & NPM
- MySQL (or your preferred database)

## 🚀 Quick Start

> [!NOTE]
> - In `config/database.php`, `'engine' => 'InnoDB',` is used as the default for both `mysql` and `mariadb` connections.
> - In `config/essentials.php`, models are unguarded by default via `Unguard::class => true`. This allows mass assignment without explicitly defining `$fillable` properties. You can change this setting if you prefer to use guarded models.

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

#### 💾 Database Backups

The starter kit ships with [marekmiklusek/database-backup](https://github.com/marekmiklusek/database-backup) for automated MySQL backups. The config is already published to `config/database-backup.php`, no `vendor:publish` needed.

Backups are stored locally on the `local` disk in `storage/app/private/database-backups`, and old backups are cleaned up automatically after **14 days**.

A daily backup is already scheduled in `routes/console.php`:

```php
Schedule::command('db-backup:run')
    ->dailyAt('02:00')
    ->onOneServer()
    ->runInBackground();
```

Run it manually at any time:

```bash
php artisan db-backup:run      # create a backup
php artisan db-backup:cleanup  # delete backups older than the retention period
```

Adjust the disk, directory, filename pattern, retention period, and mail notifications in `config/database-backup.php`. To back up to Google Drive instead of (or alongside) local storage, add a `google` disk to `config/filesystems.php` and set `storage.disk`. See the [package README](https://github.com/marekmiklusek/database-backup) for the full Google Drive setup guide.

#### 📢 Slack Error Notifications

The starter kit ships with [marekmiklusek/laravel-slack-errors](https://github.com/marekmiklusek/laravel-slack-errors), which sends unhandled exceptions to a Slack channel through an incoming webhook. No changes to `bootstrap/app.php` or the exception handler are needed.

Create an incoming webhook for your Slack app, choose the channel, and add the URL to `.env` (the keys are already present in `.env.example`):

```env
SLACK_ERRORS_ENABLED=true             # default, set to false to disable notifications entirely
SLACK_ERRORS_WEBHOOK_URL=your_webhook_url
SLACK_ERRORS_ENVIRONMENTS=production  # comma-separated list, wildcards allowed
```

Send a test message to verify the webhook (it ignores the environment filter):

```bash
php artisan slack-errors:test
```

To change the mention, throttling, or ignored exceptions, publish the config to `config/slack-errors.php`:

```bash
php artisan vendor:publish --tag=slack-errors-config
```

> [!TIP]
> Nothing is sent while `SLACK_ERRORS_WEBHOOK_URL` is empty, and only the environments listed in `SLACK_ERRORS_ENVIRONMENTS` report, so local development stays quiet. Exceptions in your app's `dontReport` are never sent.

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

### 🔐 Authentication

#### Creating Users

Users are created via Artisan:

```bash
php artisan user:create
```

The command prompts for the name, email address and password, validating each answer right away. Created users have their email marked as verified.

## 🌍 Localization

The starter kit ships with full multilingual support. **English** (`en`) and **Czech** (`cs`) are included out of the box, and every user-facing string in the React frontend goes through the translator.

### 🔧 Switching the Locale

Set the locale in your `.env` file:

```env
APP_LOCALE=cs
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=cs_CZ
```

After saving, the entire UI (auth pages, settings, dashboard, navigation, validation messages) renders in the selected language. No build step is needed for translation changes; the JSON dictionary is loaded server-side per request.

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

## 🏛️ Architecture

The kit enforces a small set of architecture rules. They are written down for AI agents in `.ai/guidelines/architecture.md` and enforced by PHPStan and Pest, so a violation fails `composer test`.

### 🧱 Layers

| Layer | Location | Create with |
|---|---|---|
| Actions (writes and business logic) | `app/Actions` | `php artisan make:action "{Name}" --no-interaction` |
| Queries (reads) | `app/Queries` | `php artisan make:query "{Name}" --no-interaction` |
| DTOs (structured data between layers) | `app/Dtos` | `php artisan make:dto "{Name}" --no-interaction` |

Controllers, commands, jobs and listeners only validate input, call actions and queries, and return a response.

### 🔎 PHPStan Rules

Custom rules live in `tests/PHPStan/Rules` and run with `composer test:types`. Every error message starts with the rule ID and says how to fix it.

| ID | Rule |
|---|---|
| Q1 | Query classes only read data |
| T1 | No side effects (HTTP, API clients, jobs, events, mail, notifications) inside `DB::transaction()` |
| D1 | Actions and queries never take or return associative arrays, API clients in `app/Services` never return them |
| C1 | Cache, rate limiter and signed URL expirations are Carbon expressions (`now()->addMinutes(15)`) |
| A1 | Database writes only in actions |
| R1 | Database reads only in query classes |
| P1 | A private method duplicated across actions is extracted into its own action |

Two rules are configurable in `phpstan.neon`:

```neon
services:
    -
        class: Tests\PHPStan\Rules\SideEffectCallDetector
        arguments:
            sideEffectClasses:
                - App\Services\ShoptetClient
    -
        class: Tests\PHPStan\Rules\ArrayInsteadOfDtoRule
        arguments:
            apiResponseNamespaces:
                - App\Services
```

- `sideEffectClasses`: your API clients, so T1 also catches their calls inside a transaction
- `apiResponseNamespaces`: where your API clients live, so D1 checks their return values

### ✅ Conventions

Checked by `tests/Unit/ArchTest.php` and `tests/Unit/CodingConventionsTest.php`:

- Tests mirror `app/`: `app/Http/Controllers/Settings/ProfileController.php` is tested in `tests/Feature/Http/Controllers/Settings/ProfileControllerTest.php`, and every action, query, command, controller, middleware, Livewire component, job, listener, service and model has its own test file
- Objects are named after their class (`CreateUser $createUser`), dates by meaning (`CarbonInterface $orderedAt`)
- `app/Actions`, `app/Dtos` and `app/Enums` are flat, ambiguous class names (`Config`, `Item`, `Service`, ...) are not allowed
- Validation rules always have both `min:` and `max:`
- No mocks in tests and no single-letter variables

Money is never a `float`. Amounts are stored as integers in the smallest unit (cents) and formatted as decimals only for display.

## 🤖 AI Guidelines

The kit uses [Laravel Boost](https://github.com/laravel/boost) to generate `CLAUDE.md` (Claude Code) and `AGENTS.md` (Codex) from one source:

- `.ai/guidelines/architecture.md`: the kit's architecture rules with the same IDs as the PHPStan errors
- `.ai/guidelines/php/core.blade.php`: overrides Boost's PHP guideline (no descriptive comments, type-only PHPDoc)

Kit rules take precedence over conflicting advice in Boost skills. Never edit `CLAUDE.md` or `AGENTS.md` directly. Change the guidelines and regenerate them:

```bash
php artisan boost:update
```

`boost:update` also runs automatically after `composer update`.

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

This starter kit includes Pest 5 with browser testing capabilities. Create browser tests in `tests/Browser/`:

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
