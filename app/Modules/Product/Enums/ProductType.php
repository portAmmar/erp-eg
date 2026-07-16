<?php
namespace Modules\Product\Enums;

enum ProductType
{
    case Draft = 'draft';
    case Active = 'active';
    case Discontinued = 'discontinued';
    case Obsolete = 'obsolete';

}
