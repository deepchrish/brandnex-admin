  </div><!-- .main-wraper -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--Custom JavaScript -->
  <script src="js/custom.js"></script>
<!-- check multiple checkbox START-->
  <script>
    function checkAll(ele) {
      var checkboxes = document.getElementsByTagName('input');
      if (ele.checked) {
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = true;
          }
        }
      } else {
        for (var i = 0; i < checkboxes.length; i++) {
          console.log(i)
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = false;
          }
        }
      }
    }
  </script>
  <!-- check multiple checkbox END-->
  </body>
  </html>
