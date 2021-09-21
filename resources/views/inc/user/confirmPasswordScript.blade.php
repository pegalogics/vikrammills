  <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
</script>
{{-- Password confirm --}}
<script>
  setInterval
    (function() {
        var
          password =
          $(
            '#password')
          .val();
        var
          confirmPassword =
          $(
            '#password_confirm')
          .val();
        if (
          confirmPassword !=
          ''
          ) {
          if (
            password !=
            confirmPassword
            ) {
            $('#password_confirm')
              .css(
                'border-color',
                'red'
                );
            //make #submit_button disable
            $('#submit_button').attr("disabled", true); //disable
            
          } else {
            $('#password_confirm')
              .css(
                'border-color',
                'green'
                );
            $('#submit_button').attr("disabled", false); //disable

          }
        }
      },
      1000
      );
</script>
