<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'Siswa';
    protected $fillable = ['nama', 'kelas', 'alamat', 'foto'];

}
