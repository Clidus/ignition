    <hr>

    <footer>
      Built on <a href="http://www.codeigniter.com/" target="_blank">CodeIgniter</a> and <a href="http://www.ignitionpowered.co.uk/" target="_blank">Ignition</a>.
    </footer>
  </div>

  <!-- Javascript-->
  <script src="/script/crushed/ignition.js"></script>
  <script>
    $(function() {
      <?php
          switch($pagetemplate)
          {
            case "BlogPost":
              echo "$('.textAreaAutoGrow').autogrow();";
              break;
            case "User":
              echo "$('.textAreaAutoGrow').autogrow();";
              echo "$('#navProfile').addClass('active');";
              break;
            case "Settings":
              echo "$('#dateFormat').val('" . $user->DateTimeFormat . "');";
              echo "$('#navSettings').addClass('active');";
              break;
            case "ImageUpload":
            case "Password":
              echo "$('#navSettings').addClass('active');";
              break;
          }
      ?>
    });
  </script>
</body>
</html>
