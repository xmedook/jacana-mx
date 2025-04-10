<?php

namespace App\Admin\Controllers;

use App\Models\Department;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DepartmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Department';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Department());

        $grid->column('model', __('Model'));
        $grid->column('title_es', __('Title es'));
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
        $show = new Show(Department::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('model', __('Model'));
        $show->field('image', __('Image'));
        $show->field('title_es', __('Title es'));
        $show->field('title_en', __('Title en'));
        $show->field('meters', __('Meters'));
        $show->field('units', __('Units'));
        $show->field('units_available', __('Units available'));
        $show->field('content_es', __('Content es'));
        $show->field('content_en', __('Content en'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Department());

        $form->text('model', __('Model'));
        $form->image('image', __('Image'));
        $form->image('big_image', __('Imagen grande'));
        $form->text('title_es', __('Title es'));
        $form->text('title_en', __('Title en'));
        $form->text('meters', __('Meters'));
        $form->number('units', __('Units'));
        $form->text('units_available', __('Units available'));
        $form->ckeditor('content_es', __('Content es'));
        $form->ckeditor('content_en', __('Content en'));

        return $form;
    }
}
