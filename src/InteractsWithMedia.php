<?php

// namespace Saravanan\MediaLibrary;

// use DateTimeInterface;
// use Illuminate\Database\Eloquent\Relations\MorphMany;
// use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Http\File;
// use Illuminate\Support\Arr;
// use Illuminate\Support\Collection;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Str;
// use Spatie\MediaLibrary\Conversions\Conversion;
// use Spatie\MediaLibrary\MediaCollections\Events\CollectionHasBeenCleared;
// use Spatie\MediaLibrary\MediaCollections\Exceptions\InvalidBase64Data;
// use Spatie\MediaLibrary\MediaCollections\Exceptions\InvalidUrl;
// use Spatie\MediaLibrary\MediaCollections\Exceptions\MediaCannotBeDeleted;
// use Spatie\MediaLibrary\MediaCollections\Exceptions\MediaCannotBeUpdated;
// use Spatie\MediaLibrary\MediaCollections\Exceptions\MimeTypeNotAllowed;
// use Spatie\MediaLibrary\MediaCollections\Exceptions\UnreachableUrl;
// use Spatie\MediaLibrary\MediaCollections\FileAdder;
// use Spatie\MediaLibrary\MediaCollections\FileAdderFactory;
// use Spatie\MediaLibrary\MediaCollections\MediaCollection;
// use Spatie\MediaLibrary\MediaCollections\MediaRepository;
// use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait InteractsWithMedia
{

    public array $mediaCollections = [];

    public function media()
    {
        return $this->morphMany(Media::class, 'subject');
    }

    public function addMediaFromRequest(string $key)
    {
    }


    public function addAllMediaFromRequest()
    {
    }

    public function addMediaFromUrl(string $url)
    {
    }


    public function getMediaCollection(string $collectionName = 'default'): ?MediaCollection
    {
        $this->registerMediaCollections();

        return collect($this->mediaCollections)
            ->first(fn (MediaCollection $collection) => $collection->name === $collectionName);
    }


    public function addMediaCollection(string $name)
    {
        $mediaCollection = new MediaCollection($name);

        $this->mediaCollections[] = $mediaCollection;

        return $mediaCollection;
    }

    public function registerMediaCollections()
    {
    }
}
