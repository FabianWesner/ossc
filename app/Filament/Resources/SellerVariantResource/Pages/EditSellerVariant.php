<?php

namespace App\Filament\Resources\SellerVariantResource\Pages;

use App\Filament\Resources\SellerVariantResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSellerVariant extends EditRecord
{
    protected static string $resource = SellerVariantResource::class;

    public function getTitle(): string 
    {
        return 'Edit Variant "' . $this->record->name . '"';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function hasCombinedRelationManagerTabsWithContent(): bool
    {
        return true;
    }
}
