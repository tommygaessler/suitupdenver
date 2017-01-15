<?php include('header.php');?>
<main class="main">

  <div class="row">
    <div class="full_column">

      <hr>

      <h1>Contact Us</h1>

      <hr>

      <p>It's important to mention that Suit Up Denver is currently handled around the full-time careers of its members. Suit Up Denver does not currently have any paid or full-time employees. As such, a response may take a few days.</p>
      <p>In order to reach Suit Up Denver, please use the contact form below. We will do our best to get back with you as soon as possible.</p>

      <hr>

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
  </div>
</main>
<?php include('footer.php');?>
