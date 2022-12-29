# Laravel Auth

## Requirements 
- php >=8.0
- laravel/ui ^4.1

## Installations

#### Install the composer package

After a fresh laravel installation, run;

```
composer require kometsoft/laravel-auth
```

#### Run install command

```
php artisan auth:install
```

## Datatables



### Usage

Publis the datatables-buttons config file
```
php artisan vendor:publish --tag=datatables-buttons
```

Change the stub path in datatables-buttons.php
```
/*
* Set Custom stub folder
*/
'stub' => '/stubs/datatables',
```

Pages with datatable should look like this.
```php
@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Users</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@vite(['resource/js/datatables/app.js'])
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
```
