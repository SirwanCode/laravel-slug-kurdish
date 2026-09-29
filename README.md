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

# 🚀 سلاگ کوردی  Slugê Kurdî

پاکێجێکی سادە و بەهێزی Laravel بۆ دروستکردنی **slug ـی کوردی گونجاو بۆ SEO** لە دەقی سۆرانی و کورمانجی.
ئەم پاکێجە پیتە تایبەتەکانی کوردی، ئاسایی‌کردنەوەی Unicode، جۆرە جیاوازەکانی پیتە فارسی و عەرەبییەکان مامەڵە لەگەڵ دەکات و **slug ـی پاک و گونجاو بۆ URL** بۆ ئەپلیکەیشنەکانی Laravel دروست دەکات.


Pakêteke hêsan û bihêz a Laravelê ji bo çêkirina **slugên Kurdî yên guncaw ji bo SEO** ji nivîsên Soranî û Kurmancî.



Ev paket bi tîpên taybet ên Kurdî, normalîzekirina Unicode û varyantên tîpên Farisî û Erebî re dixebite û **slugên paqij û guncaw ji bo URLê** ji bo sepanên Laravelê çêdike.


 

 
<div dir="rtl" align="right">

## 📦 دامەزراندن Sazkirin


پاکێجەکە بە Composer دابمەزرێنە:    Pakêtê bi Composer saz bike &nbsp;&nbsp;

</div>


    

```bash
composer require sirwancode/laravel-slug-kurdish
```


    


<div dir="rtl" align="right">

پاکێجەکە بە شێوەی خۆکار لەلایەن Laravel ـەوە دەناسرێتەوە.
    Pakêt bixweber ji aliyê Laravel ve tê nasîn.

</div>

   
 <div dir="rtl" align="right">
### تۆمارکردنی دەستی Service Provider 


  ئەگەر Package Discovery ناچالاک کراوە، یان وەشانی/ڕێکخستنی Laravel ـەکەت پشتگیری لە دۆزینەوەی خۆکار ناکات، Service Provider ـەکە بە دەستی تۆمار بکە.

Ger Package Discovery neçalak be, an jî guhertoya/veavakirina Laravelê te piştgiriyê ji bo dîtina bixweber neke, Service Provider bi destan tomar bike




</div>    


```php
SirwanCode\LaravelSlugKurdish\KuSlugServiceProvider::class,
```


<div dir="rtl" align="right">

## 🚀 بەکارهێنان              Bikaranîn   

دەتوانیت   سلاگ کوردی بە سۆرانی و کورمانجی دروست بکەیت:       Dikarî slugê Kurdî bi Soranî û Kurmancî çêkî

</div>



```php
use sirwancode\laravelslugkurdish\KuSlug;

$slugSorani =  KuSlug::sorani( '  سڵاو! كــوردستان   ');  
$slugKurmanji =  KuSlug::kurmanji( '   Silav, Kurdistan!   ');
 
```
   
 
ئەگەر پێویستت بە سلاگـێکی یەکتا هەیە:      Heke pêdiviya te bi slugê yekta heye 

     
       

```php
use sirwancode\laravelslugkurdish\KuSlug;

$slugSorani =  KuSlug::sorani( '  سڵاو! كــوردستان   ',true);  
$slugKurmanji =  KuSlug::kurmanji( '   Silav, Kurdistan!   ',true);
 
```


     
      
<div dir="rtl" align="right">

## 🛠️ ڕێکخستن       Veavakirin

 فایلی ڕێکخستن بە فەرمانی خوارەوە publish بکە:
Pelê veavakirinê bi fermana jêrîn publish bike

</div>
   

```bash

php artisan  vendor:publish --provider='sirwancode\laravelslugkurdish\KuSlugServiceProvider'    --force

```
   


فایلی KuSlug.php بۆ فۆڵدەری config ـی ئەپلیکەیشنەکەت زیاد دەکرێت، و دەتوانیت ڕێکخستنەکانی بەپێی پێداویستییەکانی ئەپلیکەیشنەکەت دەستکاری بکەیت.


Pelê KuSlug.php li peldanka config ya sepana te tê zêdekirin, û dikarî veavakirinên wê li gorî pêdiviyên sepana xwe biguherînî.

 


<div dir="rtl" align="right">

## 📁 پێکهاتەی پاکێج     Avahiya pakêtê 

 </div>




```text
laravel-slug-kurdish/
├── src/
│   ├── KuSlug.php
│   ├── KuSlugServiceProvider.php
│   ├── config.php 
├── composer.json
└── README.md
```
    







 
