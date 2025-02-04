<?php

namespace App\Filament\Seller\Resources\SellerProductResource\Pages;

use App\Filament\Seller\Resources\SellerProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSellerProducts extends ListRecords
{
    protected static string $resource = SellerProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
