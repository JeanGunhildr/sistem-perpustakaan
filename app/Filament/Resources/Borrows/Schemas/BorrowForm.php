<?php

namespace App\Filament\Resources\Borrows\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BorrowForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('borrower_id')->relationship('borrower', 'name')->required(),
                Select::make('book_id')->relationship('book', 'title')->required(),
                Toggle::make('has_returned')
                    ->required(),
            ]);
    }
}
