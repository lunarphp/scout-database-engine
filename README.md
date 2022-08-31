# Laravel Scout Database Engine

Out-of-the-box Laravel Scout provides a database driver, but it is very limited. If you want to truly be able to search any data in MySQL or PostgreSQL then you'll need a search index table.

This package introduces an Eloquent model called `SearchIndex`. It will index the information set to be searched using Laravel Scout and there is no limitation, E.g. you could happily index and search on aggregate data.

## Installation

```sh
composer require getcandy/scout-database-engine
php artisan migrate
```

## TODO

- [ ] Eloquent model & migration
- [ ] GitHub Actions https://kirschbaumdevelopment.com/insights/laravel-github-actions
- [ ] Indexing & Artisan command
- [ ] Searching
- [ ] Where clauses and soft deletes
- [ ] Database table in config
- [ ] MySQL & PostgreSQL specific config	
