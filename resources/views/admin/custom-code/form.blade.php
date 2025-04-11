<div class="card">
    <div class="card-header">
        <h3 class="card-title">Código Personalizado</h3>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <form action="{{ route('admin.update-custom-code') }}" method="POST">
            @csrf
            @method('PUT')
            
            <h4 class="mb-3">CSS</h4>
            
            <div class="form-group">
                <label for="css_head">CSS en el &lt;head&gt;</label>
                <textarea class="form-control" id="css_head" name="css_head" rows="6">{{ $customCode->css_head ?? '' }}</textarea>
                <small class="form-text text-muted">Este código CSS se incluirá en la sección &lt;head&gt; de todas las páginas.</small>
            </div>
            
            <div class="form-group mt-4">
                <label for="css_body">CSS antes del &lt;/body&gt;</label>
                <textarea class="form-control" id="css_body" name="css_body" rows="6">{{ $customCode->css_body ?? '' }}</textarea>
                <small class="form-text text-muted">Este código CSS se incluirá justo antes del cierre de la etiqueta &lt;/body&gt; de todas las páginas.</small>
            </div>
            
            <h4 class="mt-5 mb-3">JavaScript</h4>
            
            <div class="form-group">
                <label for="js_head">JavaScript en el &lt;head&gt;</label>
                <textarea class="form-control" id="js_head" name="js_head" rows="6">{{ $customCode->js_head ?? '' }}</textarea>
                <small class="form-text text-muted">Este código JavaScript se incluirá en la sección &lt;head&gt; de todas las páginas.</small>
            </div>
            
            <div class="form-group mt-4">
                <label for="js_body">JavaScript antes del &lt;/body&gt;</label>
                <textarea class="form-control" id="js_body" name="js_body" rows="6">{{ $customCode->js_body ?? '' }}</textarea>
                <small class="form-text text-muted">Este código JavaScript se incluirá justo antes del cierre de la etiqueta &lt;/body&gt; de todas las páginas.</small>
            </div>
            
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>

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
        
        // Get values from textareas
        const cssHeadValue = document.getElementById('css_head').value || '';
        const cssBodyValue = document.getElementById('css_body').value || '';
        const jsHeadValue = document.getElementById('js_head').value || '';
        const jsBodyValue = document.getElementById('js_body').value || '';
        
        // Initialize CodeMirror editors with values
        const cssHeadEditor = CodeMirror.fromTextArea(document.getElementById('css_head'), cssOptions);
        const cssBodyEditor = CodeMirror.fromTextArea(document.getElementById('css_body'), cssOptions);
        const jsHeadEditor = CodeMirror.fromTextArea(document.getElementById('js_head'), jsOptions);
        const jsBodyEditor = CodeMirror.fromTextArea(document.getElementById('js_body'), jsOptions);
        
        // Set the values
        cssHeadEditor.setValue(cssHeadValue);
        cssBodyEditor.setValue(cssBodyValue);
        jsHeadEditor.setValue(jsHeadValue);
        jsBodyEditor.setValue(jsBodyValue);
        
        // Ensure form submission includes CodeMirror values
        document.querySelector('form').addEventListener('submit', function() {
            cssHeadEditor.save();
            cssBodyEditor.save();
            jsHeadEditor.save();
            jsBodyEditor.save();
        });
    }
</script>
@endpush
