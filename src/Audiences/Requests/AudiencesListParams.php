<?php

namespace Courier\Audiences\Requests;

use Courier\Core\Json\JsonSerializableType;

class AudiencesListParams extends JsonSerializableType
{
    /**
     * @var ?string $cursor A unique identifier that allows for fetching the next set of audiences
     */
    public ?string $cursor;

    /**
     * @param array{
     *   cursor?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->cursor = $values['cursor'] ?? null;
    }
}