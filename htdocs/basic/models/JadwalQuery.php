<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jadwal]].
 *
 * @see Jadwal
 */
class JadwalQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Jadwal[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jadwal|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
