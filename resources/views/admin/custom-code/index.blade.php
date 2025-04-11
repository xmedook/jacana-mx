@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">CSS y JS Personalizado</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('admin.custom-code.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <ul class="nav nav-tabs" id="custom-code-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="css-tab" data-toggle="tab" href="#css" role="tab" aria-controls="css" aria-selected="true">CSS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="js-tab" data-toggle="tab" href="#js" role="tab" aria-controls="js" aria-selected="false">JavaScript</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content mt-3" id="custom-code-content">
                            <div class="tab-pane fade show active" id="css" role="tabpanel" aria-labelledby="css-tab">
                                <div class="form-group">
                                    <label for="css_head">CSS en el &lt;head&gt;</label>
                                    <textarea class="form-control" id="css_head" name="css_head" rows="10">{{ $customCode->css_head ?? '' }}</textarea>
                                    <small class="form-text text-muted">Este código CSS se incluirá en la sección &lt;head&gt; de todas las páginas.</small>
                                </div>
                                
                                <div class="form-group mt-4">
                                    <label for="css_body">CSS antes del &lt;/body&gt;</label>
                                    <textarea class="form-control" id="css_body" name="css_body" rows="10">{{ $customCode->css_body ?? '' }}</textarea>
                                    <small class="form-text text-muted">Este código CSS se incluirá justo antes del cierre de la etiqueta &lt;/body&gt; de todas las páginas.</small>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="js" role="tabpanel" aria-labelledby="js-tab">
                                <div class="form-group">
                                    <label for="js_head">JavaScript en el &lt;head&gt;</label>
                                    <textarea class="form-control" id="js_head" name="js_head" rows="10">{{ $customCode->js_head ?? '' }}</textarea>
                                    <small class="form-text text-muted">Este código JavaScript se incluirá en la sección &lt;head&gt; de todas las páginas.</small>
                                </div>
                                
                                <div class="form-group mt-4">
                                    <label for="js_body">JavaScript antes del &lt;/body&gt;</label>
                                    <textarea class="form-control" id="js_body" name="js_body" rows="10">{{ $customCode->js_body ?? '' }}</textarea>
                                    <small class="form-text text-muted">Este código JavaScript se incluirá justo antes del cierre de la etiqueta &lt;/body&gt; de todas las páginas.</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Add syntax highlighting if CodeMirror is available
    if (typeof CodeMirror !== 'undefined') {
        const cssOptions = {
            mode: 'css',
            lineNumbers: true,
            theme: 'default'
        };
        
        const jsOptions = {
            mode: 'javascript',
            lineNumbers: true,
            theme: 'default'
        };
        
        CodeMirror.fromTextArea(document.getElementById('css_head'), cssOptions);
        CodeMirror.fromTextArea(document.getElementById('css_body'), cssOptions);
        CodeMirror.fromTextArea(document.getElementById('js_head'), jsOptions);
        CodeMirror.fromTextArea(document.getElementById('js_body'), jsOptions);
    }
</script>
@endpush
