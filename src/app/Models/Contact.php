<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ];

    /**
     * このお問い合わせが属するカテゴリーを取得
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * genderの数値を日本語に変換（アクセサ）
     */
    public function getGenderLabelAttribute()
    {
        return match ($this->gender) {
            1 => '男性',
            2 => '女性',
            3 => 'その他',
        };
    }
}
