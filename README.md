# Sample Doctor / Patient CRM

### Acme HealthCare

ACME HealthCare is a simple Laravel 5.6 and VueJS 2.x application

## Simple Features!

The current codebase for simplicity sake, only showcases the following features:

- Sample Seed data that auto-populates the *Doctors* and *Patients* tables.
- A Simple Login form with a test account to view the Patients VueJS table component
- TDD Test that displays a sample Feature test that I would create that asserts that a Doctor can only view their own patients and not another doctor (Multi-tenancy). (ie. Using Laravel built-in *Policies*)
- A sample VueJS table component that is a wrapper for [Spaties Vue-JS-Component](https://github.com/spatie/vue-table-component) with a custom Modal
- A simple User Interface utilizing [TailwindCSS](https://tailwindcss.com) utility CSS framework

### Installation Instructions

Using either Homestead or Valet, you can install the application by the following:

```
git clone git@github.com:bmadigan/Acme-HealthCare.git
cd Acme-HealthCare
mv .env.example .env
```
> Update your own *.env* settings

```
composer install
php artisan migrate:refresh --seed
npm install && npm run dev
```
