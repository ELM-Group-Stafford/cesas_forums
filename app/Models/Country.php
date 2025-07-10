<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'country_id', 'country_name', 'created_at', 'updated_at', 'region_id',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
	
	public function assets()
    {
        return $this->morphedByMany(Asset::class, 'countryable');
    }
    public function congresses()
    {
        return $this->morphedByMany(Congress::class, 'countryable');
    }
    public function courses()
    {
        return $this->morphedByMany(Course::class, 'countryable');
    }
    public function literature_reviews()
    {
        return $this->morphedByMany(LiteratureReview::class, 'countryable');
    }
    public function podcast_episodes()
    {
        return $this->morphedByMany(PodcastEpisode::class, 'countryable');
    }
    public function podcast_playlists()
    {
        return $this->morphedByMany(PodcastPlaylist::class, 'countryable');
    }
    public function publications()
    {
        return $this->morphedByMany(Publication::class, 'countryable');
    }
    public function resources()
    {
        return $this->morphedByMany(Resource::class, 'countryable');
    }
    public function webinars()
    {
        return $this->morphedByMany(Webinar::class, 'countryable');
    }
}
