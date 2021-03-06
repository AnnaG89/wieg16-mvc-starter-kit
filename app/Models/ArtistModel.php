<?php

namespace App\Models;


class ArtistModel extends Model {
    protected $table = 'artists';

    /*
    protected $name;

     *
     * @return mixed
     *
    public function getName()
    {
        return $this->name;
    }

     *
     * @param mixed $name
     *
    public function setName($name)
    {
        $this->name = $name;
    }*/

    public function getRelatedArtworks($id) {
        return $this->getRelated('artwork', 'artist_id', $id);
    }
}