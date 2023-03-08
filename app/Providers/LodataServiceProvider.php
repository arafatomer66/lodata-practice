<?php

namespace App\Providers;

use Flat3\Lodata\EntityType;
use Flat3\Lodata\Facades\Lodata;
use Flat3\Lodata\Helper\PropertyValue;
use Flat3\Lodata\Interfaces\EntitySet\CountableInterface;
use Flat3\Lodata\Interfaces\EntitySet\FilterableInterface;
use Flat3\Lodata\Interfaces\EntitySet\PagedInterface;
use Flat3\Lodata\Interfaces\EntitySet\SearchableInterface;
use Flat3\Lodata\Interfaces\EntitySet\SortableInterface;
use Flat3\Lodata\NavigationBinding;
use Flat3\Lodata\NavigationProperty;
use Flat3\Lodata\Type;
use Illuminate\Support\ServiceProvider;

class LodataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Create User entity type
        // $user = new EntityType('User')
        //     ->setKey(new DeclaredProperty('id', Type::int32()))
        //     ->addDeclaredProperty('name', Type::string())
        //     ->addDeclaredProperty('email', Type::string())
        //     ->addDeclaredProperty('created_at', Type::datetime())
        //     ->addDeclaredProperty('updated_at', Type::datetime());

        // // Add User entity type to the model
        // Lodata::add($user);

        // // Create Ticket entity type
        // $ticket = new EntityType('Ticket')
        //     ->setKey(new DeclaredProperty('id', Type::int32())) // Primary key
        //     ->addDeclaredProperty('title', Type::string())
        //     ->addDeclaredProperty('slug', Type::string())
        //     ->addDeclaredProperty('description', Type::string())
        //     ->addDeclaredProperty('user_id', Type::int32())
        //     ->addDeclaredProperty('created_at', Type::datetime())
        //     ->addDeclaredProperty('updated_at', Type::datetime());

        // // Add Ticket entity type to the model
        // Lodata::add($ticket)
    }
}

// http://127.0.0.1:8001/odata/Tickets?$filter=user_id%20eq%202
