<div class="row mbn-15">
    <div class="col-12 mb-15"><input type="text" class="form-control" placeholder="Summary"></div>
    <div class="col-12 mb-15"><textarea class="form-control summernote" placeholder="Description"></textarea></div>
    {!! $optional_fields !!}
</div>

<script type="text/javascript">
$('.summernote').summernote({
  height: 250,
});
</script>
