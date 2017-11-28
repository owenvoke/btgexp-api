<?php

namespace pxgamer\BTGExp\Traits;

/**
 * Trait CanPopulate
 */
trait CanPopulate
{
    /**
     * @param object $data
     * @return $this
     */
    public function populate($data)
    {
        foreach ($data as $name => $value) {
            $this->$name = $value;
        }

        return $this;
    }
}
