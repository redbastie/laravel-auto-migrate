# Laravel Auto Migrate

Automatic migrations for your Laravel models.

## Installation

Install via composer:

    composer require redbastie/laravel-auto-migrate

## How It Works

The `migrate:auto` command will automatically diff your database and apply the necessary changes via Doctrine.

## Usage

Specify a `migration` method in your Laravel model:

    class Vehicle extends Model
    {
        use HasFactory, FillsColumns;
    
        public function migration(Blueprint $table)
        {
            $table->id();
            $table->string('name');
            $table->timestamps();
        }
    }

Run the `migrate:auto` command:

    php artisan migrate:auto --fresh --seed

Note that `--fresh` and `--seed` are optional.

## Traditional Migrations

The `migrate:auto` command will run your traditional migration files before the automatic migration methods.
