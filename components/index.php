<?php include '../components/head.php';?>
<body>
  <div class="bc-pageheader text-center">
    <a href="#"><h1 id="style-header" class="display-3"> <img src="./imgs/blue-logo-blockchain.svg" style="height: 100px;margin-bottom: 15px;"> Style Guide </h1></a>
  </div>

  <div class="container guide-items flex-column">
    <div class="flex-row">
      <a href="#buttons"><span class="ti-link"></span></a>
      <?php include 'buttons.php';?>
    </div>
    <hr>
    <div class="flex-row">
      <a href="#colors"><span class="ti-link"></span></a>
      <?php include 'colors.php';?>
    </div>
    <hr>
    <div class="flex-row">
      <a href="#fonts"><span class="ti-link"></span></a>
      <?php include 'fonts.php';?>
    </div>
    <hr>
    <div class="flex-row">
      <a href="#forms"><span class="ti-link"></span></a>
      <?php include 'forms.php';?>
    </div>
  </div>

  <script src="./js/plugins/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./js/app.js"></script>
</body>
