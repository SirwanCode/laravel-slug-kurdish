# 🚀 Kurdish Slug  

A simple and powerful Laravel package for generating **SEO-friendly Kurdish slugs** from Sorani and Kurmanji text.

It handles Kurdish-specific characters, Unicode normalization, Persian/Arabic character variants, and generates clean URL-friendly slugs for your Laravel applications.

## ✨ Features

* 🇹🇯 **Sorani Kurdish support**
*  🇹🇯  **Kurmanji Kurdish support**
* 🌐 Unicode-aware slug generation
* 🔗 Kurdish Unicode URL support
* 🧹 Removes unwanted characters automatically
* ⚡ Simple Laravel integration
* 🎯 Works with Laravel's `Str`-style workflow
* 📦 Composer package
* 🛠️ Easy to customize and extend

## 📦 Installation

Install the package using Composer:

```bash
composer require sirwancode/laravel-slug-kurdish
```

The package is automatically discovered by Laravel.

### Manual Service Provider Registration

If package discovery is disabled or you are using a Laravel version/configuration where automatic discovery is unavailable, register the service provider manually.

```php
SirwanCode\LaravelSlugKurdish\KuSlugServiceProvider::class,
```

## 🚀 Basic Usage

You can generate a Kurdish slug in sorani and kurmanji:

```php
use sirwancode\laravelslugkurdish\KuSlug;

$slugSorani =  KuSlug::sorani( '  سڵاو! كــوردستان   ');  
$slugKurmanji =  KuSlug::kurmanji( '   Silav, Kurdistan!   ');
 
```
   
if you need unique slug: 

```php
use sirwancode\laravelslugkurdish\KuSlug;

$slugSorani =  KuSlug::sorani( '  سڵاو! كــوردستان   ',true);  
$slugKurmanji =  KuSlug::kurmanji( '   Silav, Kurdistan!   ',true);
 
```

## 🛠️ Configuration

publish configuration file using following command:

```bash

php artisan  vendor:publish --provider='sirwancode\laravelslugkurdish\KuSlugServiceProvider'    --force

```

a KuSlug.php is added to config folder of your application ,the configuration can be customized according to your application's requirements.

## 📁 Package Structure

```text
laravel-slug-kurdish/
├── src/
│   ├── KuSlug.php
│   ├── KuSlugServiceProvider.php
│   ├── config.php 
├── composer.json
└── README.md
```

## 📋 Requirements

* PHP 8.2+
* Laravel 12+
* Composer

## ⭐ Support

If this package is useful to you, consider giving the repository a ⭐ on GitHub.

Your support helps improve Kurdish open-source software.

---

### Kurdish Laravel Tools

Built with ❤️ for **Kurdish developers and Laravel applications**.

**Sorani • Kurmanji • Laravel • PHP • Open Source**
