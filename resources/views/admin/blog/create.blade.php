@extends('layouts.admin')

@section('articles')
active
@endsection

@section('title')
Articles
@endsection

@section('content')
<div class="col-xl-8 col-lg-8 col-md-8 d-flex flex-column mx-auto">
    <div class="card card-plain mt-2">
        <div class="card-header pb-0 text-left bg-transparent">
            <h3 class="font-weight-bolder text-info text-gradient text-center">Blog</h3>
            <p class="mb-0 text-center">Ajouter un article</p>
        </div>
        <div class="card-body">
            <form role="form" action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')

                <label>Titre</label>
                <div class="mb-3">
                    <input type="text" name="titre" class="form-control" placeholder="Le titre de votre article" aria-label="titre">
                </div>
                <label>Poster</label>
                <div class="mb-3">
                    <input type="file" name="poster" class="form-control">
                </div>
                <label>Contenu de l'article</label>
                <div class="mb-3">
                    {{-- <textarea type="description" name="description" class="form-control" placeholder="Contenu de votre article"></textarea> --}}
                    <textarea class="ckeditor form-control" name="description"></textarea>
                    {{-- <textarea rows="50" cols="40" class="tinymce-editor form-control" name="description"></textarea> --}}
                </div>
                <div class="text-center">
                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
{{-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script> --}}
<script>
    tinymce.init({
        selector: 'textarea'
        , plugins: 'advlist autolink lists link image charmap preview anchor pagebreak'
        , toolbar_mode: 'floating'
    , });

</script>
{{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 100,
            menubar: false
        });
    </script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
@endsection
