<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiseaseArea extends Model
{
    protected $fillable = [
        'speciality_id', 'area_name', 'active', 'created_at', 'updated_at',
    ];

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
    
	public function assets()
    {
        return $this->morphedByMany(Asset::class, 'disease_areaable');
    }
    public function congresses()
    {
        return $this->morphedByMany(Congress::class, 'disease_areaable');
    }
    public function courses()
    {
        return $this->morphedByMany(Course::class, 'disease_areaable');
    }
    public function literature_reviews()
    {
        return $this->morphedByMany(LiteratureReview::class, 'disease_areaable');
    }
    public function podcast_episodes()
    {
        return $this->morphedByMany(PodcastEpisode::class, 'disease_areaable');
    }
    public function podcast_playlists()
    {
        return $this->morphedByMany(PodcastPlaylist::class, 'disease_areaable');
    }
    public function publications()
    {
        return $this->morphedByMany(Publication::class, 'disease_areaable');
    }
    public function resources()
    {
        return $this->morphedByMany(Resource::class, 'disease_areaable');
    }
    public function webinars()
    {
        return $this->morphedByMany(Webinar::class, 'disease_areaable');
    }	
}
