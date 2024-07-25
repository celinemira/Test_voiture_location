<php?

namespace App\Service;

class PriceEstimator
{
    public function estimatePrice(int $carYear, int $nbKm, int $nbDays): int
    {
        $basePrice = 50;
        $yearFactor = (date('Y') - $carYear) * 5;
        $kmFactor = $nbKm * 0.01;
        $daysFactor = $nbDays * 10;

        return $basePrice + $yearFactor + $kmFactor + $daysFactor;
    }
}
