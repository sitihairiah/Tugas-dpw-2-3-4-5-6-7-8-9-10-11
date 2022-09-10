<?php


namespace App\Models\Produk;
namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserDetail;

class User extends Authenticatable
    
{
    protected $table = 'user';
    use  HasApiTokens, HasFactory, Notifiable;

   function detail(){
       return $this->hasOne(UserDetail::class, 'id_user');
   }

   function produk(){
       return $this->hasMany(Produk::class, 'id_user');
   }
   function getJeniskelaminStringAttribute(){
    return ($this->jenis_kelamin == 1) ? "Laki-laki" : "perempuan";
   }

   function setPasswordAttribute ($value){
    $this->atttributes['password'] = bcrypt ($value);
   }
   function setUsernameAttribute ($value){
    $this->atttributes['username'] = strtolower($value);
   }

}