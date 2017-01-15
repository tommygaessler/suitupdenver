<?php include('header.php');?>
<main>

  <div class="row">
    <div class="full_column">

      <hr>

      <h1>Help Us Out</h1>

      <hr>

    </div>
  </div>



  <div class="row">
    <div class="one_half">

      <h2 class="center">Suit Donation</h2>



       <form class="form" action="contact.php" method="POST">
        <p style="color: #1D437F">Name</p>
        <input type="text" name="name" />
        <p style="color: #1D437F">Email</p>
        <input type="text" name="email" />
        <p style="color: #1D437F">How can we help you?</p>
        <textarea name="message" rows="6" cols="25"></textarea>
        <div class="buttonwrapper">
            <button type="submit" class="btn btn-primary button">Send</button>
        </div>
      </form>

    </div>
    <div class="one_half">

      <h2 class="center">Monetary Donation</h2>


      <div class="paypal">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="XPFBBGZX9F626">
          <input type="image" src="images/donate.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="10" height="26">
        </form>
      </div>
    </div>
  </div>

</main>
<?php include('footer.php');?>
