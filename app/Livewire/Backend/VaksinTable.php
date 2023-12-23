<?php

namespace App\Livewire\Backend;

use App\Models\PasienVaksin;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ComponentColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\MultiSelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;

class VaksinTable extends DataTableComponent {
    public string $tableName = 'pasien_vaksin';
    public array $pasien = [];

    public $columnSearch = [
        'alamat' => null,
    ];

    public function configure(): void {
        $this->setPrimaryKey('id');
        //$this->setDebugEnabled();;
        //$this->setReorderEnabled();
        $this->setReorderDisabled();
        $this->setSearchDisabled();
        $this->setHideReorderColumnUnlessReorderingEnabled();
        $this->setSecondaryHeaderTrAttributes(function ($rows) {
            return [
                'class' => 'bg-gray-100',
            ];
        });
        $this->setSecondaryHeaderTdAttributes(function (Column $column, $rows) {
            if ($column->isField('id')) {
                return ['class' => 'text-red-500'];
            }

            return ['default' => true];
        });
        $this->setFooterTrAttributes(function ($rows) {
            return ['class' => 'bg-gray-100'];
        });
        $this->setFooterTdAttributes(function (Column $column, $rows) {
            if ($column->isField('name')) {
                return ['class' => 'text-green-500'];
            }

            return ['default' => true];
        });

        $this->setHideBulkActionsWhenEmptyEnabled();

        //$this->setColumnSelectDisabled();
    }

    public function columns(): array {
        return [
            /*  Column::make('Order', 'sort')
                ->sortable()
                ->collapseOnMobile()
                ->excludeFromColumnSelect(), */
            Column::make('No', 'id')
                //->sortable()
                ->setSortingPillTitle('Key')
                ->setSortingPillDirections('0-9', '9-0')
                ->format(fn($value, $row, Column $column) => "<center>$value</center>")
                ->html(),
            Column::make('Nama Anak', 'nama_lengkap_anak')
                /* ->sortable(function (Builder $query, string $direction) {
                    return $query->orderBy('nama_lengkap_anak', $direction); // Example, ->sortable() would work too.
                }) */
                ->searchable()
                //->secondaryHeader($this->getFilterByKey('nama_anak'))
                ,
            Column::make('Alamat', 'alamat')
                /* ->sortable(function (Builder $query, string $direction) {
                    return $query->orderBy('alamat', $direction); // Example, ->sortable() would work too.
                }) */
                ->searchable()
                //->secondaryHeader($this->getFilterByKey('alamat'))
                ,
            Column::make('Vaksin', 'vaksin')
                ->unclickable()
                ->searchable(),
            Column::make('Schedule', 'schedule')
                ->format(fn ($value, $row, Column $column) => date('d/m/Y', strtotime($value)))
                //->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make('No. Handphone', 'no_hp')
                //->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make('Registrasi', 'created_at')
                ->format(fn ($value, $row, Column $column) => date('d/m/Y', strtotime($value)))
                //->sortable()
                ->searchable()
                ->collapseOnTablet(),
            ButtonGroupColumn::make('Actions')
                ->unclickable()
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('My Link 1')
                        ->title(fn ($row) => 'Link 1')
                        ->location(fn ($row) => 'https://' . $row->id . 'google1.com')
                        ->attributes(function ($row) {
                            return [
                                'target' => '_blank',
                                'class' => 'underline text-blue-500',
                            ];
                        }),
                    LinkColumn::make('My Link 2')
                        ->title(fn ($row) => 'Link 2')
                        ->location(fn ($row) => 'https://' . $row->id . 'google2.com')
                        ->attributes(function ($row) {
                            return [
                                'class' => 'underline text-blue-500',
                            ];
                        }),
                    LinkColumn::make('My Link 3')
                        ->title(fn ($row) => 'Link 3')
                        ->location(fn ($row) => 'https://' . $row->id . 'google3.com')
                        ->attributes(function ($row) {
                            return [
                                'class' => 'underline text-blue-500',
                            ];
                        }),
                ]),
        ];
    }

    public function filters(): array {
        return [
            TextFilter::make('Nama Anak')
                ->config([
                    'maxlength' => 10,
                    'placeholder' => 'Cari Nama Anak',
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('nama_lengkap_anak', 'like', '%' . $value . '%');
                })
                ,
            TextFilter::make('Alamat')
                ->config([
                    'maxlength' => 100,
                    'placeholder' => 'Cari Alamat',
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('alamat', 'like', '%' . $value . '%');
                })
                //->hiddenFromMenus()
                ,
            TextFilter::make('Vaksin')
                ->config([
                    'maxlength' => 100,
                    'placeholder' => 'Cari Vaksin',
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('vaksin', 'like', '%' . $value . '%');
                })
                ->hiddenFromMenus(),

            /*   MultiSelectFilter::make('Tags')
                ->options(
                    []
                )->filter(function (Builder $builder, array $values) {
                    $builder->whereHas('tags', fn ($query) => $query->whereIn('tags.id', $values));
                })
                ->setFilterPillValues([
                    '3' => 'Tag 1',
                ]), */
            /* SelectFilter::make('E-mail Verified', 'email_verified_at')
                ->setFilterPillTitle('Verified')
                ->options([
                    '' => 'Any',
                    'yes' => 'Yes',
                    'no' => 'No',
                ])
                ->filter(function (Builder $builder, string $value) {
                    if ($value === 'yes') {
                        $builder->whereNotNull('email_verified_at');
                    } elseif ($value === 'no') {
                        $builder->whereNull('email_verified_at');
                    }
                }), */
            /*  SelectFilter::make('Active')
                ->setFilterPillTitle('User Status')
                ->setFilterPillValues([
                    '1' => 'Active',
                    '0' => 'Inactive',
                ])
                ->options([
                    '' => 'All',
                    '1' => 'Yes',
                    '0' => 'No',
                ])
                ->filter(function (Builder $builder, string $value) {
                    if ($value === '1') {
                        $builder->where('active', true);
                    } elseif ($value === '0') {
                        $builder->where('active', false);
                    }
                })
                ->hiddenFromAll(), */
            DateFilter::make('Tanngal Registrasi')
                ->config([
                    'min' => '2020-01-01',
                    'max' => '2021-12-31',
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->whereRaw("date(created_at) = '$value'");
                }),
            DateFilter::make('Tanggal Schedule')
                ->filter(function (Builder $builder, string $value) {
                    $builder->whereRaw("date(schedule) = '$value'");
                }),
        ];
    }

    public function builder(): Builder {
        return PasienVaksin::query();
    }

    public function bulkActions(): array {
        return [
            'activate' => 'Activate',
            'deactivate' => 'Deactivate',
            'export' => 'Export',
        ];
    }

    public function export() {
        $users = $this->getSelected();

        $this->clearSelected();

        //return Excel::download(new UsersExport($users), 'users.xlsx');
    }

    public function activate() {


        $this->clearSelected();
    }

    public function deactivate() {


        $this->clearSelected();
    }

    public function reorder($items): void {
        foreach ($items as $item) {
        }
    }
}
