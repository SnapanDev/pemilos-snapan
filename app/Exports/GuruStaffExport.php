<?php

namespace App\Exports;

use App\Http\Resources\GuruStaffCollection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GuruStaffExport implements FromCollection, WithHeadings
{
    public function __construct($collection)
    {
        $this->data = $collection;
    }

    /**
    * @return GuruStaffCollection
     */
    public function collection(): GuruStaffCollection
    {
        return new GuruStaffCollection($this->data);
    }

    public function headings(): array
    {
        return [
            'nama',
            'username',
            'password'
        ];
    }
}
