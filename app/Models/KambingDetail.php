<?php

namespace App\Models;

use App\Models\ModelUtils;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class KambingDetail extends Model
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
        'member_id',
        'file_kontrak',
        'file_kontrak_signed',
        'status',
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
            'member_id' => 'required|uuid|exists:members,id',
            'file_kontrak' => 'required|string',
            'status' => 'required',
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
            'member_id.required' => 'Tolong masukkan Member ID!',
            'member_id.uuid' => 'Member ID harus berupa UUID!',
            'member_id.exists' => 'Member ID tidak ditemukan!',
            'file_kontrak.required' => 'Tolong masukkan File Kontrak!',
            'file_kontrak.string' => 'File Kontrak harus berupa string!',
            'status.required' => 'Tolong masukkan Status!',
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
            'member_id' => $request->member_id,
            'file_kontrak' => $request->file_kontrak,
            'status' => $request->status,
        ]);
    }


    /**
     * Controller associated with this model
     *
     * @var string
     */

    public function controller()
    {
        return 'App\Http\Controllers\KambingDetailController';
    }

    /**
    * Relations associated with this model
    *
    * @var array
    */
    public function relations()
    {
        return ['kambing', 'member'];
    }

    /**
    * Space for calling the relations
    *
    *
    */
    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function kambing()
    {
        return $this->belongsTo(Kambing::class);
    }
}
