<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class DataWarga extends Model
{
 protected $table = 'datawarga';
 protected $primaryKey = 'ID_Warga';
 public $timestamps = false;
 /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
 protected $fillable = [
 'Nama', 'Alamat','Tanggal_Lahir', 'No_Telepon'
 ];
 /**
 * The attributes excluded from the model's JSON form.
 *
 * @var array
 */
 protected $hidden = [];
}