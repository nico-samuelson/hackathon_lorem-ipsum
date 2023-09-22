<?php

namespace App\Models;

use App\Models\ModelUtils;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produk extends Model
{
    use HasFactory;
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=[
        'nama',
        'harga',
        'deskripsi',
        'foto',
    ]; 

    /**
     * Rules that applied in this model
     *
     * @var array
     */
    public static function validationRules()
    {
        return [
            'nama' => 'required|string',
            'harga' => 'required|string',
            'deskripsi' => 'required|string',
            'foto' => 'required|string',
        ];
    }

    /**
     * Messages that applied in this model
     *
     * @var array
     */
    public static function validationMessages()
    {
        return [
            'nama.required' => 'Tolong masukkan Nama!',
            'nama.string' => 'Nama harus berupa string!',
            'harga.required' => 'Tolong masukkan Harga!',
            'harga.string' => 'Harga harus berupa string!',
            'deskripsi.required' => 'Tolong masukkan Deskripsi!',
            'deskripsi.string' => 'Deskripsi harus berupa string!',
            'foto.required' => 'Tolong masukkan Foto!',
            'foto.string' => 'Foto harus berupa string!',
        ];
    }

    /**
     * Filter data that will be saved in this model
     *
     * @var array
     */
    public function resourceData($request)
    {
        return ModelUtils::filterNullValues([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto,
        ]);
    }


    /**
     * Controller associated with this model
     *
     * @var string
     */

    public function controller()
    {
        return 'App\Http\Controllers\ProdukController';
    }

    /**
    * Relations associated with this model
    *
    * @var array
    */
    public function relations()
    {
        return [];
    }

    /**
    * Space for calling the relations
    *
    *
    */
}
