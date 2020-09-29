<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Detailuslugis;

class Price extends Model
{
    protected $fillable = [
        'product_id','name','alter_name','price', 'description', 'discount','activ', 'sort'
    ];

    protected $table = 'prices';

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах
    public $timestamps = true;

    public function detail()
    {
        return $this->belongsTo(Detailuslugis::class,'detailuslugi_id');
    }

    public static function add($filds)
    {
        $usugi = new static;
        $usugi->fill($filds);
        $usugi->save();

        return $usugi;
    }

    public function edit($filds)
    {
        $this->fill($filds);
        $this->save($filds);

    }

    public function getFormatDateCreate()
    {
        return $this->created_at->format('d F Y H:i');
    }

    public function getFormatDateUpdate()
    {
        return $this->updated_at->format('d F Y H:i');
    }
}
