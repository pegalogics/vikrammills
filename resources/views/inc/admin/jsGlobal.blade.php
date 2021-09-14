<!--begin::Global Javascript Bundle(used by all pages)-->
<script src={{asset("assets_admin/plugins/global/plugins.bundle.js")}}></script>
<script src={{asset("assets_admin/js/scripts.bundle.js")}}></script>
<!--end::Global Javascript Bundle-->

  <!--begin::Page Custom Javascript(used by this page)-->
  <script src={{asset("assets/js/custom/widgets.js")}}></script>
  <script src={{asset("assets/js/custom/modals/create-account.js")}}></script>
  <script src={{asset("assets/js/custom/modals/upgrade-plan.js")}}></script>
  <script src={{asset("assets/js/custom/intro.js")}}></script>
  <!--end::Page Custom Javascript-->
  <!--end::Javascript-->

  <!-- jqeury cnd -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>

$(document).ready(function() {
  //on change input files
  $('input[type="file"]').change(function() {
    // display photo in output
    var output = $('.output');
    output.empty();
    var file = this.files[0];
    var fileName = file.name;
    path = "{{ url('/') }}/" + fileName;
    output.append('<img src="' + path + '" style="width:200px;height:auto"  />' );
   });
});
</script>
