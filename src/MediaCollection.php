<?php

class MediaCollection
{
    public string $name = '';
    public string $diskName = '';
    public $collectionSizeLimit = false;


    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function useDisk(string $diskName): self
    {
        $this->diskName = $diskName;

        return $this;
    }

    public function keepLatest(int $maximumNumberOfItemsInCollection): self
    {
        if ($maximumNumberOfItemsInCollection < 1) {
            throw new InvalidArgumentException("You should pass a value higher than 0. `{$maximumNumberOfItemsInCollection}` given.");
        }

        $this->collectionSizeLimit = $maximumNumberOfItemsInCollection;

        return $this;
    }
}
