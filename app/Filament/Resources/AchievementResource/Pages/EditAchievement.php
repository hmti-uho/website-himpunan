<?php

namespace App\Filament\Resources\AchievementResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\AchievementResource;
use App\Models\Achievement;

class EditAchievement extends EditRecord
{
    protected static string $resource = AchievementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    // Simpan path gambar lama sebelum proses update
    protected ?string $oldImagePath = null;

    protected function beforeSave(): void
    {
        // Ambil path gambar sebelum diupdate
        $this->oldImagePath = $this->record->getOriginal('image');
    }

    protected function afterSave(): void
    {
        // Hapus gambar lama hanya jika:
        // 1. Ada path gambar lama yang tersimpan
        // 2. Gambar lama berbeda dengan gambar baru
        if (
            $this->oldImagePath &&
            $this->oldImagePath !== $this->record->image
        ) {
            Storage::disk('public')->delete($this->oldImagePath);
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
