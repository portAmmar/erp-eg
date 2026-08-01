<?php

namespace Modules\Product\DTOs;
use Modules\Enums\ProductType;
use Modules\Enums\ProductStatus;

class CreateProductDTO
{
    public function __construct(
        public string $sku,
        public string $name,
        public string $productType,
        public ?string $description = null,
        public string $status = ProductStatus::Draft
    ){}

    public function fromArray(array $data): self{
        return new self(
            sku: data['sku'],
            name: data['name'],
            productType: data['product_type'],
            description: data['description'],
            status: data['status']
        );
    }

    public function toArray(): array{
        return [
            'sku' => $this->sku,
            'name' => $this->name,
            'product_type' => $this->productType,
            'description' => $this->description,
            'status' => $this->status
        ];
    }
}
