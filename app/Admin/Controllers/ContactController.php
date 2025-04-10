<?php

namespace App\Admin\Controllers;

use App\Models\Contact;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact());

        $grid->column('name', __('Nombre'))->display(function ($name) {
            return "<a href='/admin/contacts/{$this->id}'>$name</a>";
        });
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Telefono'));
        $grid->column('message', __('Mensaje'));
        $grid->column('medio', __('Medio'));
        $grid->column('interesado', __('Interesado en'));
        $grid->column('created_at', __('Created at'));

        $grid->export(function ($export) {
            $export->filename('jacana-contacts');
            $export->originalValue(['id', 'name', 'email', 'phone', 'message', 'medio', 'interesado', 'created_at']);
        });

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
        $show = new Show(Contact::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Nombre'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Telefono'));
        $show->field('message', __('Mensaje'));
        $show->field('medio', __('Medio'));
        $show->field('interesado', __('Interesado en'));
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
        $form = new Form(new Contact());
        $form->text('name', __('Nombre'));
        $form->text('email', __('Email'));
        $form->text('phone', __('Telefono'));
        $form->textarea('message', __('Mensaje'));
        $form->text('medio', __('Medio'));
        $form->text('interesado', __('Interesado'));

        return $form;
    }
}
