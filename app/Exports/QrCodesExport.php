<?php

namespace App\Exports;

use App\Models\QrCode;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class QrCodesExport implements FromArray, WithHeadings
{
    protected $qrCodes;

    public function __construct($ids)
    {
        $this->qrCodes = QrCode::whereIn('id', $ids)->get();
    }

    public function headings(): array
    {
        return ['ID', 'Rock ID', 'Category', 'QR Code'];
    }

    public function array(): array
    {
        $rows = [];

        foreach ($this->qrCodes as $index => $qr) {
            $url = url('public/images/qr_code/' . $qr->rock_id . '.svg');

            $rows[] = [
                $index + 1,
                $qr->rock_id,
                $qr->categories->name ?? '-',
                '=HYPERLINK("' . $url . '","View QR")', // ✅ real Excel hyperlink
            ];
        }

        return $rows;
    }
}
