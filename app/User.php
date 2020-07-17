<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $adus_uid
 * @property integer $adus_adcp_uid
 * @property int $adus_status
 * @property string $adus_first_names
 * @property string $adus_last_names
 * @property string $adus_email
 * @property string $adus_password
 * @property string $adus_create_date
 * @property string $adus_last_update_date
 * @property AdcpCompany $adcpCompany
 */
class User extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'adus_user';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'adus_uid';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['adus_adcp_uid', 'adus_status', 'adus_first_names', 'adus_last_names', 'adus_email', 'adus_password', 'adus_create_date', 'adus_last_update_date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function adcpCompany()
    {
        return $this->belongsTo('App\AdcpCompany', 'adus_adcp_uid', 'adcp_uid');
    }
}
