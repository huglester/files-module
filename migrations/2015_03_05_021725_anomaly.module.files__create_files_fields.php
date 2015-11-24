<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleFilesCreateFilesFields
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyModuleFilesCreateFilesFields extends Migration
{

    /**
     * The module fields.
     *
     * @var array
     */
    protected $fields = [
        'name'          => 'anomaly.field_type.text',
        'slug'          => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name'
            ]
        ],
        'adapter'       => [
            'type'   => 'anomaly.field_type.addon',
            'config' => [
                'type'   => 'extensions',
                'search' => 'anomaly.module.files::adapter.*'
            ]
        ],
        'folder'        => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\FilesModule\Folder\FolderModel'
            ]
        ],
        'disk'          => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\FilesModule\Disk\DiskModel'
            ]
        ],
        'entry'         => 'anomaly.field_type.polymorphic',
        'description'   => 'anomaly.field_type.textarea',
        'allowed_types' => 'anomaly.field_type.tags',
        'keywords'      => 'anomaly.field_type.tags',
        'title'         => 'anomaly.field_type.text',
        'extension'     => 'anomaly.field_type.text',
        'width'         => 'anomaly.field_type.text',
        'height'        => 'anomaly.field_type.text',
        'mime_type'     => 'anomaly.field_type.text',
        'size'          => 'anomaly.field_type.integer'
    ];

}
