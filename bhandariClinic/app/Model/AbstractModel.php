<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AbstractModel extends Model
{
    public function map(array $data, Object $model = null)
    {
        if ([] === $data) {
            return false;
        }
//        if (!empty($model)) {
            $object = $model ?? $this;
//        }
        foreach($data as $column => $value) {
            if (in_array($column, $this->tableColumns)) {
                $object->$column = $value;
            }
        }
        return $object;
        echo "<pre>"; print_r($object); exit;
    }

    public function mapToModel(Object $model, array $data)
    {

    }
}
