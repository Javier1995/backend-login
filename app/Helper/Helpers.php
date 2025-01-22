<?php
namespace App\Helper;


class Helpers {

    public static function findYearWithMostPeopleAlive(array $yearInRanges ): array {
        $yearEvents = [];

        foreach ($yearInRanges as $yearInrange) {
            $yearEvents[$yearInrange[0]] = ($yearEvents[$yearInrange[0]] ?? 0) + 1; // birthyear
            $yearEvents[$yearInrange[1] + 1] = ($yearEvents[$yearInrange[1] + 1] ?? 0) - 1; // death Year
        }
    
        ksort($yearEvents);
    
        $maxAlive = 0;
        $currentAlive = 0;
        $yearWithMaxAlive = [];
    
        foreach ($yearEvents as $year => $change) {
            $currentAlive += $change;
    
            if ($currentAlive > $maxAlive) {
                $maxAlive = $currentAlive;
                $yearWithMaxAlive = [$year]; //return the biggest year
            }
        }
        
        return $yearWithMaxAlive;
    }

}