<?php

namespace App\Admin\Controllers;

use App\Models\Place;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PlaceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Place';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Place());
        $grid->column('id', __('Id'));
        $grid->column('place', __('Place'));
        $grid->column('title', __('Title'));
        $grid->column('position');
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Place::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Place());
        $form->select('place')->options([
            'terraza' => 'Terraza',
            'social' => 'Social',
            'wellness' => 'Wellness',
            'familiar' => 'Área Familiar',
            'patio' => 'Patio Central',
            'lobby' => 'Lobby',
            'estacionamiento' => 'Estacionamiento',
        ])->required();
        $form->text('title', __('Title'))->required();
        $form->image('image', __('Image'))->required();
        $form->number('position', __('Position'))->default(0);
        return $form;
    }
}
