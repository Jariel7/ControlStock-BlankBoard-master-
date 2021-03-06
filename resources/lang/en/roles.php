<?php

return [

    'title' => 'Roles',
    'parent' => 'Access',
    'name' => 'role|roles',
    'list' => ':Title list',
    'add' => 'Add new :name',
    'edit' => 'Edit :name :Resource',
    'view' => 'View :name :Resource',

    'table' => [
      'id' => 'ID',
      'action' => 'Action',
      'name' => 'Name',
      'slug' => 'Slug',
      'description' => 'Description',
      'permissions' => 'Permissions',
      'status' => 'Status',
    ],

    'confirm-delete' => 'This action can be reverted. Are you sure?',
];
