<script src="{{ asset('backend/assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea.text-editor',
        height: 300,
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | formatselect | backcolor | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | help',

    });
</script>
