<?php
namespace Modules\Product\Enums;
enum ProductStatus
{


    case Draft = 'draft';
    case Active = 'active';
    case Discontinued = 'discontinued';
    case Obsolete = 'obsolete';

}
