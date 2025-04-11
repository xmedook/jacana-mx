<?php

namespace App\Admin\Controllers;

use App\Models\CustomCode;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class CustomCodeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Código Personalizado';

    /**
     * Index page.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        // Debug log
        \Log::info('CustomCodeController index method called');
        
        // Get the first record or create a new one
        $customCode = CustomCode::first();
        if (!$customCode) {
            $customCode = new CustomCode();
            $customCode->save();
            \Log::info('Created new CustomCode record with ID: ' . $customCode->id);
        } else {
            \Log::info('Found existing CustomCode record with ID: ' . $customCode->id);
        }
        
        try {
            // Create a simple content to test if the view is rendering
            return $content
                ->title($this->title)
                ->description('Administrar CSS y JavaScript personalizado')
                ->row('<h3>Código Personalizado</h3>')
                ->row(function ($row) use ($customCode) {
                    $row->column(12, $this->form()->edit($customCode->id));
                });
        } catch (\Exception $e) {
            \Log::error('Error in CustomCodeController index method: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'css_head' => 'nullable|string',
            'js_head' => 'nullable|string',
            'css_body' => 'nullable|string',
            'js_body' => 'nullable|string',
        ]);

        $customCode = CustomCode::findOrFail($id);
        $customCode->fill($request->all());
        $customCode->save();

        admin_toastr('Código personalizado guardado exitosamente', 'success');
        return redirect()->route('admin.custom-code.index');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomCode());

        $grid->column('id', __('ID'))->sortable();
        $grid->column('css_head', __('CSS Head'))->display(function ($code) {
            return "<pre style='max-height: 100px; overflow: auto;'>" . htmlspecialchars($code) . "</pre>";
        });
        $grid->column('js_head', __('JS Head'))->display(function ($code) {
            return "<pre style='max-height: 100px; overflow: auto;'>" . htmlspecialchars($code) . "</pre>";
        });
        $grid->column('css_body', __('CSS Body'))->display(function ($code) {
            return "<pre style='max-height: 100px; overflow: auto;'>" . htmlspecialchars($code) . "</pre>";
        });
        $grid->column('js_body', __('JS Body'))->display(function ($code) {
            return "<pre style='max-height: 100px; overflow: auto;'>" . htmlspecialchars($code) . "</pre>";
        });
        $grid->column('created_at', __('Creado'))->display(function ($date) {
            return date('d/m/Y H:i', strtotime($date));
        });
        $grid->column('updated_at', __('Actualizado'))->display(function ($date) {
            return date('d/m/Y H:i', strtotime($date));
        });

        $grid->filter(function($filter) {
            $filter->like('css_head', 'CSS Head');
            $filter->like('js_head', 'JS Head');
            $filter->like('css_body', 'CSS Body');
            $filter->like('js_body', 'JS Body');
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
        $show = new Show(CustomCode::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('css_head', __('CSS Head'))->unescape()->as(function ($code) {
            return "<pre style='max-height: 300px; overflow: auto;'>" . htmlspecialchars($code) . "</pre>";
        });
        $show->field('js_head', __('JS Head'))->unescape()->as(function ($code) {
            return "<pre style='max-height: 300px; overflow: auto;'>" . htmlspecialchars($code) . "</pre>";
        });
        $show->field('css_body', __('CSS Body'))->unescape()->as(function ($code) {
            return "<pre style='max-height: 300px; overflow: auto;'>" . htmlspecialchars($code) . "</pre>";
        });
        $show->field('js_body', __('JS Body'))->unescape()->as(function ($code) {
            return "<pre style='max-height: 300px; overflow: auto;'>" . htmlspecialchars($code) . "</pre>";
        });
        $show->field('created_at', __('Creado'));
        $show->field('updated_at', __('Actualizado'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CustomCode());

        $form->tab('CSS', function ($form) {
            $form->codeeditor('css_head', __('CSS en el &lt;head&gt;'))
                ->rules('nullable')
                ->help('Este código CSS se incluirá en la sección &lt;head&gt; de todas las páginas.');
            
            $form->codeeditor('css_body', __('CSS antes del &lt;/body&gt;'))
                ->rules('nullable')
                ->help('Este código CSS se incluirá justo antes del cierre de la etiqueta &lt;/body&gt; de todas las páginas.');
        });

        $form->tab('JavaScript', function ($form) {
            $form->codeeditor('js_head', __('JavaScript en el &lt;head&gt;'))
                ->rules('nullable')
                ->help('Este código JavaScript se incluirá en la sección &lt;head&gt; de todas las páginas.');
            
            $form->codeeditor('js_body', __('JavaScript antes del &lt;/body&gt;'))
                ->rules('nullable')
                ->help('Este código JavaScript se incluirá justo antes del cierre de la etiqueta &lt;/body&gt; de todas las páginas.');
        });

        // Disable the default action buttons
        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
            $tools->disableView();
        });

        $form->footer(function ($footer) {
            $footer->disableReset();
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
        });

        return $form;
    }
}
