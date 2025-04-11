<?php

namespace App\Admin\Controllers;

use App\Models\CustomCode;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
use Encore\Admin\Facades\Admin;

class CustomCodeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Custom CSS/JS';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomCode());

        $grid->column('id', __('ID'))->sortable();
        $grid->column('custom_css', __('Custom CSS'))->display(function ($value) {
            return $value ? '<span class="label label-success">Yes</span>' : '<span class="label label-default">No</span>';
        });
        $grid->column('custom_js', __('Custom JS'))->display(function ($value) {
            return $value ? '<span class="label label-success">Yes</span>' : '<span class="label label-default">No</span>';
        });
        $grid->column('is_active', __('Active'))->switch();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show->field('custom_css', __('Custom CSS'))->unescape()->as(function ($css) {
            return $css ? '<pre>' . htmlentities($css) . '</pre>' : '';
        });
        $show->field('custom_js', __('Custom JS'))->unescape()->as(function ($js) {
            return $js ? '<pre>' . htmlentities($js) . '</pre>' : '';
        });
        $show->field('is_active', __('Active'))->as(function ($active) {
            return $active ? 'Yes' : 'No';
        });
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
        $form = new Form(new CustomCode());

        $form->textarea('custom_css', __('Custom CSS'))
            ->rows(10)
            ->help('Enter custom CSS code to be injected into the head section of all pages.')
            ->attribute(['id' => 'custom_css_editor']);
            
        $form->textarea('custom_js', __('Custom JS'))
            ->rows(10)
            ->help('Enter custom JavaScript code to be injected into the head section of all pages.')
            ->attribute(['id' => 'custom_js_editor']);
            
        $form->switch('is_active', __('Active'))
            ->default(true)
            ->help('Enable or disable this custom code.');

        // Add CodeMirror for syntax highlighting
        Admin::script($this->initCodeMirrorScript());

        return $form;
    }

    /**
     * Initialize CodeMirror for syntax highlighting.
     *
     * @return string
     */
    protected function initCodeMirrorScript()
    {
        return <<<EOT
        $(document).ready(function() {
            // Load CodeMirror resources if not already loaded
            if (typeof CodeMirror === 'undefined') {
                $('head').append('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/codemirror.min.css">');
                $('head').append('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/theme/monokai.min.css">');
                
                $.getScript('https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/codemirror.min.js', function() {
                    $.getScript('https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/css/css.min.js');
                    $.getScript('https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/javascript/javascript.min.js', function() {
                        initEditors();
                    });
                });
            } else {
                initEditors();
            }
            
            function initEditors() {
                if (document.getElementById('custom_css_editor')) {
                    var cssEditor = CodeMirror.fromTextArea(document.getElementById('custom_css_editor'), {
                        lineNumbers: true,
                        mode: 'css',
                        theme: 'monokai',
                        indentUnit: 2,
                        tabSize: 2,
                        lineWrapping: true,
                        autoCloseBrackets: true
                    });
                }
                
                if (document.getElementById('custom_js_editor')) {
                    var jsEditor = CodeMirror.fromTextArea(document.getElementById('custom_js_editor'), {
                        lineNumbers: true,
                        mode: 'javascript',
                        theme: 'monokai',
                        indentUnit: 2,
                        tabSize: 2,
                        lineWrapping: true,
                        autoCloseBrackets: true
                    });
                }
            }
        });
EOT;
    }
}
