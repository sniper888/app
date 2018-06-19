<?php

namespace App\Models;

/**
 * Példa Varos model
 *
 * PHP version 7.0
 */
class Blog extends \Core\Model {

    //adatbázis tábla neve
    public static function tableName() {
        return 'blog';
    }

    public static function postMent($post, $id = null) {
        $db = static::getDB();
        if ($id !== null) {
            $sql = "UPDATE " . static::tableName() . " SET cim=" . $db->quote($post['cim']) . ", rovidleiras=" . $db->quote($post['rovidleiras']) . ", leiras=" . $db->quote($post['leiras']) . ", kep=" . $db->quote($post['kep']) . ", datum=" . $db->quote($post['datum']) . " WHERE id=" . $db->quote($id);
        } else {
            $sql = "INSERT INTO " . static::tableName() . " (cim,rovidleiras,leiras,kep,datum) VALUES "
                    . "(" . $db->quote($post['cim']) . "," . $db->quote($post['rovidleiras']) . "," . $db->quote($post['leiras']) . "," . $db->quote($post['kep']) . "," . $db->quote($post['datum']) . ")";
        }
        $stmt = $db->query($sql);
        return $stmt->rowCount() > 0;
    }

    public static function postTorol($id) {
        $db = static::getDB();
        $stmt = $db->query("DELETE FROM " . static::tableName() . " WHERE id = " . $db->quote($id));
    }

}
