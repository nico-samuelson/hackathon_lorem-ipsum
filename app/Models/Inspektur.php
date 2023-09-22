<?php

namespace App\Models;

use App\Models\ModelUtils;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Inspektur extends Model
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
        'no_hp',
        'email',
        'username',
        'password',
        'foto_ktp',
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
            'nama' => 'required|string',
            'no_hp' => 'required|string',
            'email' => 'required|string',
            'username' => 'required|string',
            'password' => 'required|string',
            'foto_ktp' => 'required|string',
            'status' => 'required|integer|in:0,1',
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
            'no_hp.required' => 'Tolong masukkan No HP!',
            'no_hp.string' => 'No HP harus berupa string!',
            'email.required' => 'Tolong masukkan Email!',
            'email.string' => 'Email harus berupa string!',
            'username.required' => 'Tolong masukkan Username!',
            'username.string' => 'Username harus berupa string!',
            'password.required' => 'Tolong masukkan Password!',
            'password.string' => 'Password harus berupa string!',
            'foto_ktp.required' => 'Tolong masukkan Foto KTP!',
            'foto_ktp.string' => 'Foto KTP harus berupa string!',
            'status.required' => 'Tolong masukkan Status!',
            'status.integer' => 'Status harus berupa integer!',
            'status.in' => 'Status harus berupa 0 atau 1!',
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
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'foto_ktp' => $request->foto_ktp,
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
        return 'App\Http\Controllers\InspekturController';
    }

    /**
    * Relations associated with this model
    *
    * @var array
    */
    public function relations()
    {
        return ['checking_histories'];
    }

    /**
    * Space for calling the relations
    *
    *
    */
    public function checking_histories()
    {
        return $this->hasMany(CheckingHistory::class);
    }
}
