<!-- Column -->
<div class="col-md-9 m-md-auto p-0">

  <!-- Session flash -->
  <div class="text-success">
    <?php echo $this->session->flashdata('email_sent'); ?>
  </div><br>

  <!-- Card -->
  <div class="card bg-light">
    <div class="card-body">

      <!-- Table -->
      <table class="table table-borderless css-serial">
        <thead>
          <tr>
            <th></th> <!-- Auto increment -->
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Joined date</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user) : ?>
            <tr class="border-top">
              <td></td>
              <td><?php echo $user['username']; ?></td>
              <td><?php echo $user['email']; ?></td>
              <td><?php echo $user['joined']; ?>
            </tr>
            <tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <!-- Table /end -->

      </div>
    </div>
    <!-- Card /end -->

  </div>
  <!-- Column /end -->
  