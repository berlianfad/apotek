<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
//protected table untuk di isi kl nama model dan migration nya yang ga sesuai / beda
    protected $fillable = [
        'user_id',
        'medicines',
        'name_customer',
        'total_price',
    ];
//menegaskan tipe data dr migration , mengubah tipe data yang tidak ada , ubah d dalam casts
//casts untuk d pke pas pke array
    protected $casts = [
        'medicines' => 'array',
    ];

    public function user()
    {
        //menghubungkan ke primary key nya
        // dalam kurung merupakan nama model tempat penyimpanan dari PK nya si FK yang ada d model ini
        return $this->belongsTo
        (User::class);
        //primary key nya ada d dalam user
        //nama model, pke oop nama class nya user
        //belong untuk menghubungkan FK ke PK
        // PK ke FK hasOne or hasMany
    }
}
