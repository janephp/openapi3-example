<?php

declare(strict_types=1);

class FactProxy extends \CatFacts\Api\Model\Fact
{
    public function __properties(): array
    {
        return [
            '_id' => & $this->id,
            '__v' => & $this->v,
            'user' => & $this->user,
            'text' => & $this->text,
            'updatedAt' => & $this->updatedAt,
            'sendDate' => & $this->sendDate,
            'deleted' => & $this->deleted,
            'source' => & $this->source,
            'used' => & $this->used,
            'type' => & $this->type,
        ];
    }
}
