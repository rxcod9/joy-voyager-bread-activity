<?php

namespace Joy\VoyagerBreadActivity\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'activities');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'activities',
                'display_name_singular' => __('joy-voyager-bread-activity::seeders.data_types.activity.singular'),
                'display_name_plural'   => __('joy-voyager-bread-activity::seeders.data_types.activity.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadActivity\\Models\\Activity',
                // 'policy_name'           => 'Joy\\VoyagerBreadActivity\\Policies\\ActivityPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadActivity\\Http\\Controllers\\VoyagerBreadActivityController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
