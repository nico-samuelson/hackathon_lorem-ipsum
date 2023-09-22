<?php

namespace App\Models;

use App\Models\ModelUtils;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CheckingHistory extends Model
{
    use HasFactory;
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=[
        'kambing_id',
        'inspektur_id',
        'status',
        'keterangan',
        'foto'
    ]; 

    /**
     * Rules that applied in this model
     *
     * @var array
     */
    public static function validationRules()
    {
        return [
            'kambing_id' => 'required|uuid|exists:kambings,id',
            'inspektur_id' => 'required|uuid|exists:inspekturs,id',
            'status' => 'required|integer|in:0,1',
            'keterangan' => 'nullable|string',
            'foto' => 'required|string'
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
            'kambing_id.required' => 'Tolong masukkan Kambing ID!',
            'kambing_id.uuid' => 'Kambing ID harus berupa UUID!',
            'kambing_id.exists' => 'Kambing ID tidak ditemukan!',
            'inspektur_id.required' => 'Tolong masukkan Inspektur ID!',
            'inspektur_id.uuid' => 'Inspektur ID harus berupa UUID!',
            'inspektur_id.exists' => 'Inspektur ID tidak ditemukan!',
            'status.required' => 'Tolong masukkan Status!',
            'status.integer' => 'Status harus berupa integer!',
            'status.in' => 'Status harus bernilai 0 atau 1!',
            'keterangan.string' => 'Keterangan harus berupa string!',
            'foto.required' => 'Tolong masukkan Foto!'
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
            'kambing_id' => $request->kambing_id,
            'inspektur_id' => $request->inspektur_id,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'foto' => $request->foto
        ]);
    }


    /**
     * Controller associated with this model
     *
     * @var string
     */

    public function controller()
    {
        return 'App\Http\Controllers\CheckingHistoryController';
    }

    /**
    * Relations associated with this model
    *
    * @var array
    */
    public function relations()
    {
        return ['kambings', 'inspektur'];
    }

    /**
    * Space for calling the relations
    *
    *
    */
    public function kambing()
    {
        return $this->belongsTo(Kambing::class);
    }
    public function inspektur()
    {
        return $this->belongsTo(Inspektur::class);
    }
}
