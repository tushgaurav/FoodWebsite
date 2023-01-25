<?php
require "inc/header.php";
require "scripts/time.php";
require "scripts/food.php";

$meal = get_meal();
$mealTime = convert_time(strtolower($meal));
$mealRemainingTime = getMealRemainingTime($meal);

$menu = getMenu($meal);

$mealTime12 = convert24To12($mealTime);
?>

<!--  -->
<article class="main-display">
  <h1>Today's Menu</h1>
</article>

<article>
  <section class="info">
    <h1>
        <?php echo $meal; ?>
    </h1>
    <div class="time">
    <div class="minutes"><?php echo $mealRemainingTime; ?></div>
    <div class="hours">
      <?php echo $mealTime12; ?>
    </div>
      </div>
  </section>

<!--  -->

  <div class="card-container">
    <div class="card">
      <!-- <img src="https://images.unsplash.com/photo-1565511224465-3948cfdd6d2a?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NzQzODYxMTI&ixlib=rb-4.0.3&q=80" alt=""> -->
      <h1>Dish Name</h1>
      <h2><?php echo $menu; ?></h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum unde repellendus, ducimus illum numquam temporibus optio minus magnam quis veniam?</p>
      <div>
        <svg viewBox="0 0 320 512" width="100" title="angle-up">
  <path d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z" />
</svg>
        <svg viewBox="0 0 320 512" width="100" title="angle-down">
  <path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z" />
</svg>
        
      </div>
    </div>
    
</article>
    
  </div>
    
</body>
</html>