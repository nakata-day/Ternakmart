// app/Models/AkunOwner.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunOwner extends Model
{
    use HasFactory;

    protected $table = 'akun_owners';
    protected $primaryKey = 'username_admin';
    protected $fillable = ['username_admin', 'password_admin'];
}