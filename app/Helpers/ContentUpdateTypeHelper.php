<?php

namespace App\Helpers;

use App\Models\Congress;
use App\Models\Course;
use App\Models\LiteratureReview;
use App\Models\PodcastEpisode;
use App\Models\Publication;
use App\Models\Resource;
use App\Models\Webinar;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;

class ContentUpdateTypeHelper
{
    public const PUBLICATION = 'publication';
    public const CONGRESS = 'congress';
    public const PODCAST_EPISODE = 'podcast_episode';
    public const COURSE = 'course';
    public const RESOURCE = 'resource';
    public const WEBINAR = 'webinar';
    public const LITERATURE_REVIEW = 'literature_review';

    public static function classMap(): array
    {
        return [
            self::PUBLICATION => Publication::class,
            self::CONGRESS => Congress::class,
            self::PODCAST_EPISODE => PodcastEpisode::class,
            self::COURSE => Course::class,
            self::RESOURCE => Resource::class,
            self::WEBINAR => Webinar::class,
            self::LITERATURE_REVIEW => LiteratureReview::class,
        ];
    }

    public static function routeMap(): array
    {
        return [
            self::PUBLICATION => 'publications.show',
            self::CONGRESS => 'congresses.show',
            self::PODCAST_EPISODE => 'podcasts.episodes.show',
            self::COURSE => 'courses.show',
            self::RESOURCE => 'resources.show',
            self::WEBINAR => 'webinars.show',
            self::LITERATURE_REVIEW => 'literature-reviews.show',
        ];
    }

    public static function getUpdateableClasses(): Collection
    {
        return collect(static::classMap())
            ->filter(function ($class) {
                if (Gate::has('provideContentUpdateEmails', $class) === false) {
                    return true;
                }

                return Gate::allows('provideContentUpdateEmails', $class);
            });
    }
}
