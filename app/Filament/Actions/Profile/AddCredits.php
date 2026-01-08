<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Actions\Profile;

<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
=======
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Modules\Xot\Contracts\ProfileContract;

class AddCredits extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->translateLabel()
            ->action(
                function (ProfileContract $record, array $data): void {
                    dddx([$data, $record]);

                    // $user = $record->user;
                    // $profile_data = Arr::except($record->toArray(), ['id']);
                    // if (null == $user) {
                    //     $user_class = XotData::make()->getUserClass();
                    //     /** @var \Modules\Xot\Contracts\UserContract */
                    //    $user = $user_class::firstWhere(['email' => $record->email]);
                    // }

                    // if (null == $user) {
                    //     $user = $record->user()->create($profile_data);
                    // }
                    // $user->profile()->save($record);

                    // $user->update(
                    //     [
                    //         'password' => Hash::make($data['new_password']),
                    //     ]
                    // );
                    Notification::make()->success()->title('Add credit successfully.');
                }
            )
<<<<<<< HEAD
            ->schema([
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->schema([
=======
            ->form([
>>>>>>> a12f125f4a (.)
=======
            ->schema([
>>>>>>> b93ef594b4 (.)
=======
            ->form([
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                TextInput::make('credits')
                    ->numeric()
                    ->required(),
            ])
            ->label('')
            ->icon('heroicon-o-currency-dollar')
            ->tooltip('Add Credits')
            ->modalDescription('Inserisci la quantità di crediti da aggiungere')
            ->modalHeading('Aggiungi Crediti')
            // ->requiresConfirmation()
            ->modalSubmitActionLabel('Aggiungi');
    }

    public static function getDefaultName(): ?string
    {
        return 'addCredits';
    }
}
