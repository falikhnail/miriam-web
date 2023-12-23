<?php


namespace App\Helper;

use Illuminate\Support\Str;

class StringHelper {
    public static  function formatNoPonsel(string $noPonsel) {
        if (Str::contains($noPonsel, '-')) {
            $noPonsel = Str::replace('-', '', $noPonsel);
        }
        if (Str::startsWith($noPonsel, '+')) {
            $noPonsel = Str::replaceFirst('+', '', $noPonsel);
        }
        if (Str::contains($noPonsel, ' ')) {
            $noPonsel = Str::replace(' ', '', $noPonsel);
        }
        if (Str::startsWith($noPonsel, '0')) {
            $noPonsel = Str::replaceFirst('0', '62', $noPonsel);
        }
        if (Str::startsWith($noPonsel, '620')) {
            $noPonsel = '62' . substr($noPonsel, 3);
        }
        if (!Str::startsWith($noPonsel, '62')) {
            $noPonsel = '62' . $noPonsel;
        }

        return $noPonsel;
    }
}
