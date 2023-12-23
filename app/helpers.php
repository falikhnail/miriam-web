<?php

/*
 * Global helpers file with misc functions.
 */
if (!function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name() {
        return config('app.name');
    }
}

if (!function_exists('date_interval')) {
    /**
     * Summary of date_interval
     * @param string $startDate format Y-m-d
     * @param int $addCount format Y-m-d
     * @param ?string $pcs format Y-m-d
     * @return array
     */
    function date_interval($startDate, $addCount, $pcs = 'days'): array {
        $begin = new DateTime($startDate);
        $end = new DateTime(date('Y-m-d', strtotime("+$addCount $pcs $startDate"))); // +2 days / +2 month ++

        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);

        $result = [];
        foreach ($period as $dt) {
            $result[] = $dt->format("Y-m-d");
        }

        return $result;
    }
}
