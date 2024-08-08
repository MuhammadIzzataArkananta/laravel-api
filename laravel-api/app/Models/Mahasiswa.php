<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute as CastsAttribute;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $primaryKey = 'idmahasiswa';
    public $incrementing = true;

    protected $fillable = [
        'namamahasiswa',
        'nim',
        'alamat',
        'gender',
        'agama',
        'usia',
        'image',
    ];

    protected $casts = [
        'gender' => 'string',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) =>$image?  asset('/storage/mahasiswa/'.$image) : null
        );
    }
}
