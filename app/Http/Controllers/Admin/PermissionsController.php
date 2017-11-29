<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission as Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\ResourceController as Controller;
use App\Http\Controllers\Traits\PermissionValidationTrait;

class PermissionsController extends Controller
{
    use PermissionValidationTrait;

    /**
     * The controller resource route name.
     *
     * @var string
     */
    protected $route = 'permissions';

    /**
     * Whether the resource is private.
     *
     * @var boolean
     */
    protected $private = true;

    /**
     * Model class.
     *
     * @var class
     */
    protected $model = Model::class;
}