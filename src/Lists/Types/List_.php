<?php

namespace Courier\Lists\Types;

use Courier\Core\Json\JsonSerializableType;
use Courier\Core\Json\JsonProperty;

class List_ extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $created
     */
    #[JsonProperty('created')]
    public ?int $created;

    /**
     * @var ?int $updated
     */
    #[JsonProperty('updated')]
    public ?int $updated;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   created?: ?int,
     *   updated?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->created = $values['created'] ?? null;
        $this->updated = $values['updated'] ?? null;
    }
}
