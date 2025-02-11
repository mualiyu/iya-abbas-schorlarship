<?php

namespace App\Exports;

use App\Models\ScholarshipApplication;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ApplicationsExport implements FromView
// FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return ScholarshipApplication::all();
    // }

    public function view(): View
    {
        return view('exports.applications', [
            'applications' => ScholarshipApplication::all()
        ]);
    }
}
