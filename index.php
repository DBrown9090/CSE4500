<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'head.php';
  
  $json_file = file_get_contents('my_data.json');
  $json_data = json_decode($json_file, true);
  
  
  ?>
  <body data-bs-spy="scroll" data-bs-target="#navbar-example3" style="position:relative" >
    <div class="left-nav">
      <nav id="navbar-example3" class="navbar vertical-center flex-column center">
        <nav class="nav flex-column">
          <a class="nav-link" href="#about">About</a>
          <a class="nav-link" href="#education">Education</a>
          <a class="nav-link" href="#experience">Experience</a>
          <a class="nav-link" href="#skills">Education</a>
          <a class="nav-link" href="#interests">Experience</a>
        </nav>
      </nav>
    </div>
    <div data-bs-offset="0" tabindex="0">
      <div id="about" class="content-item">
        <div class="vertical-center">
          <h1><?php echo $json_data['first-name'], ' <span class="text-primary">', $json_data['last-name'], '</span>'; ?></h1>
          <div class="subheading">
            <?php echo $json_data['address'], ' - ', $json_data['phone'], ' - ', $json_data['email']; ?>
          </div>
          <p><?php echo $json_data['introduction']; ?></p>
        </div>
      </div>
      <hr>
      <div id="education" class="content-item">
        <div class="vertical-center">
          <h4>Education</h4>
          <?php foreach($json_data['education'] AS $experience) { ?>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="flex-grow-1">
                <h3 class="mb-0"><?php echo $experience['title']; ?></h3>
                <div class="subheading mb-3"><?php echo $experience['uni']; ?></div>
				<p><?php echo $experience['description']; ?></p>
              </div>
              <div class="flex-shrink-0">
                <span class="text-primary"><?php echo $experience['period']; ?></span>
              </div>
            </div>
          <?php  } ?>
        </div>
      </div>
      <hr>
      <div id="experience" class="content-item">
        <div class="vertical-center">
          <h4>Experience</h4>
          <?php foreach($json_data['experience'] AS $experience) { ?>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="flex-grow-1">
                <h3 class="mb-0"><?php echo $experience['title']; ?></h3>
                <div class="subheading mb-3"><?php echo $experience['employer']; ?></div>
                <p><?php echo $experience['description']; ?></p>
              </div>
              <div class="flex-shrink-0">
                <span class="text-primary"><?php echo $experience['period']; ?></span>
              </div>
            </div>
          <?php  } ?>
        </div>
      </div>
      <hr>
      <div id="skills" class="content-item">
        <div class="vertical-center">
          <h4>Skills</h4>
          <p><?php echo $json_data['skills']; ?></p>
        </div>
      </div>
      <hr>
      <div id="interests" class="content-item">
        <div class="vertical-center">
          <h4>Interests</h4>
          <p><?php echo $json_data['interests']; ?></p>
        </div>
      </div>
      <hr>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>