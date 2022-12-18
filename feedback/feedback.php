<?php include 'inc/header.php' ?>;
  

<?php
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
 
 
 // $feedback = [
  //   [
  //     'id ' => '1',
  //     'name' => 'Sofia Kun',
  //     'email' => 'sofiakun@gmail.com',
  //     'body' => 'I am okay with you'
  //   ],
  //   [
  //     'id ' => '2',
  //     'name' => 'Haruna Nagase',
  //     'email' => 'haruna@gmail.com',
  //     'body' => 'Yamete Kudasai'
  //   ],
  //   [
  //     'id ' => '',
  //     'name' => 'Sofia Jewel',
  //     'email' => 'sofiajewel@gmail.com',
  //     'body' => 'just an ordinary girl' 
  //   ],

  // ];

?>;
    <h2>Past Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p class="lead mt-3">There is no Feedback</p>
    <?php endif;?>

    <?php foreach($feedback as $item): ?>
      <div class="card my-3 w-75">
      <div class="card-body text-center">
        <?php echo $item['body']; ?>
        <div class="text-secondary mt-2">
          By <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
        </div>
      </div>
      </div>
    <?php endforeach;?>

   <?php include 'inc/footer.php' ?>;