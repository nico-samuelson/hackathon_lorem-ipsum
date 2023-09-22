<?php

namespace App\Models;

use App\Models\ModelUtils;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    use HasFactory;
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=[
        'no_ktp',
        'nama',
        'alamat',
        'no_hp',
        'email',
        'username',
        'password',
        'foto_ktp',
    ]; 

    /**
     * Rules that applied in this model
     *
     * @var array
     */
    public static function validationRules()
    {
        return [
            'no_ktp' => 'required|string',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|integer',
            'email' => 'required|string',
            'username' => 'required|string',
            'password' => 'required|string',
            'foto_ktp' => 'required|string',
            'status' => 'required|integer',
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
            'no_ktp.required' => 'Tolong masukkan No KTP!',
            'no_ktp.string' => 'No KTP dalam bentuk string!',
            'nama.required' => 'Tolong masukkan Nama!',
            'nama.string' => 'Nama dalam bentuk string!',
            'alamat.required' => 'Tolong masukkan Alamat!',
            'alamat.string' => 'Alamat dalam bentuk string!',
            'no_hp.required' => 'Tolong masukkan No HP!',
            'no_hp.integer' => 'No HP dalam bentuk angka!',
            'email.required' => 'Tolong masukkan Email!',
            'email.string' => 'Email dalam bentuk string!',
            'username.required' => 'Tolong masukkan Username!',
            'username.string' => 'Username dalam bentuk string!',
            'password.required' => 'Tolong masukkan Password!',
            'password.string' => 'Password dalam bentuk string!',
            'foto_ktp.required' => 'Tolong masukkan Foto KTP!',
            'foto_ktp.string' => 'Foto KTP dalam bentuk string!',
            'status.required' => 'Tolong masukkan Status!',
            'status.integer' => 'Status dalam bentuk angka!',
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
            'no_ktp' => $request->no_ktp,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
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
        return 'App\Http\Controllers\MemberController';
    }

    /**
    * Relations associated with this model
    *
    * @var array
    */
    public function relations()
    {
        return [
            'kambing_details',
        ];
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
}
