
<?php

if(in_category(8)) {
  include "single-washer.php";
} else if(in_category(9)) {
  include "single-problem.php";
} else if(in_category(13)) {
  include "single-advice.php";
} else {
  include "single-service.php";
}
?>
