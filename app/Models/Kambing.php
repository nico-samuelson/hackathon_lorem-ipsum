<?php

namespace App\Models;

use App\Models\ModelUtils;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kambing extends Model
{
    use HasFactory;
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=[
        'gender',
        'tanggal_lahir',
        'no_kambing',
        'hamil',
    ]; 

    /**
     * Rules that applied in this model
     *
     * @var array
     */
    public static function validationRules()
    {
        return [
            'gender' => 'required|integer|in:0,1',
            'tanggal_lahir' => 'required|date',
            'no_kambing' => 'required|integer',
            'hamil' => 'required|integer|in:0,1',
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
            'gender.required' => 'Tolong masukkan Gender!',
            'gender.integer' => 'Gender dalam bentuk angka!',
            'gender.in' => 'Gender hanya bisa 0 atau 1!',
            'tanggal_lahir.required' => 'Tolong masukkan Tanggal Lahir!',
            'tanggal_lahir.date' => 'Tanggal Lahir dalam bentuk tanggal!',
            'no_kambing.required' => 'Tolong masukkan No Kambing!',
            'no_kambing.integer' => 'No Kambing dalam bentuk angka!',
            'hamil.required' => 'Tolong masukkan Hamil!',
            'hamil.integer' => 'Hamil dalam bentuk angka!',
            'hamil.in' => 'Hamil hanya bisa 0 atau 1!',
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
            'gender' => $request->gender,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_kambing' => $request->no_kambing,
            'hamil' => $request->hamil,
        ]);
    }


    /**
     * Controller associated with this model
     *
     * @var string
     */

    public function controller()
    {
        return 'App\Http\Controllers\KambingController';
    }

    /**
    * Relations associated with this model
    *
    * @var array
    */
    public function relations()
    {
        return ['kambing_details', 'checking_histories'];
    }

    /**
    * Space for calling the relations
    *
    *
    */
    public function kambing_details()
    {
        return $this->hasMany('App\Models\KambingDetail');
    }
    public function checking_histories()
    {
        return $this->hasMany('App\Models\CheckingHistory');
    }

}
