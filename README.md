# Country List

Country List is a package for Laravel which lists all countries with names and ISO 3166-1 codes in all languages and data formats.


## Installation

Run `composer require MIESystems/country-list`.

Laravel 8 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

If you don't use auto-discovery, add the ServiceProvider to the `providers` array in `config/app.php`

```php
MIESystems\CountryList\CountryListServiceProvider::class,
```

If needed, add the following alias as well.

```php
'Countries' => MIESystems\CountryList\CountryListFacade::class,
```

## Usage

- Locale (en, en_US, fr, fr_CA...)
- Format (csv, flags.html, html, json, mysql.sql, php, postgresql.sql, sqlite.sql, sqlserver.sql, txt, xml, yaml)

Get all countries

```php
Route::get('/', function()
{
	return Countries::getList('en', 'json');
});
```

Get one country

```php
Route::get('/', function()
{
	return Countries::getOne('RU', 'en');
});
```
