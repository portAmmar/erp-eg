<?php
namespace Modules\Product\Enums;

enum ProductType
{
    case RawMaterial = 'raw_material';
    case FinishedGood = 'finished_good';
    case Service = 'service';
    case TradingGood = 'trading_good';

}
