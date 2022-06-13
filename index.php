<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex" />
  <title>Email Signature</title>

  <script src="js/jquery.min.js"></script>
  <script src="js/croppie.js"></script>
  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
  <link rel="stylesheet" href="css/croppie.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link
    href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu" />
  <link href="css/clean-blog.css" rel="stylesheet">
  <link href="css/all.min.css" rel="stylesheet">

</head>

<body>
  <!-- Page Header -->
  <header class="masthead" style="background-color: #0c8382">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Email Signature</h1>
            <span class="subheading">New email signature creation site</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>You can prepare your signature by filling in the fields below!</p>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Your Name</label>
            <input type="text" class="form-control" name="fname" placeholder="Your Name" id="yourname" required
              data-validation-required-message="Please enter your name.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Your Surname</label>
            <input type="text" class="form-control" name="lname" placeholder="YOUR SURNAME" id="yoursurname" required
              data-validation-required-message="Please enter your last name.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Your Position</label>
            <input type="text" class="form-control" name="title" placeholder="Your Position" id="unvaniniz" required
              data-validation-required-message="Please enter your title.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Email address" id="youremail" required
              data-validation-required-message="Please enter your email address." value="@nematullo.com">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Phone Number</label>
            <input type="tel" class="form-control" placeholder="Phone Number" id="yourphone" required
              data-validation-required-message="Please enter your phone number.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls" style="display: inline-block;">
            <label>Upload photo</label>
            <label class="btn btn-primary btn-file" style="width: 175px;">
              Upload photo <input type="file" name="upload_image" id="upload_image" style="display: none;">
            </label>
          </div>
        </div>
        <br>
        <button onclick="myFunction()" class="btn btn-primary">Prepare Email Signature</button>
        </form>
      </div>
    </div>
  </div>





  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <hr>
        <!-- Pager -->
        <div class="clearfix" align="center">


          <table id="kopy" width="522" border="0" cellspacing="0" cellpadding="0" class="mobile-view"
            style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
            <tbody>
              <tr style="background: #0c8382">
                <td width="522" valign="top" align="left" class="clump">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0"
                    style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                    <tbody>
                      <tr>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0"
                          style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                          <tr>
                            <!-- Add your Signature image -->
                            <td style="padding:10px 0 0 10px;">
                              <div id="uploaded_image"
                                style="display:inline-block; border:0; outline:none; width: 70px; height: 70px;"></div>
                            </td>
                            <td style='padding:12.75pt 7.5pt 0cm 0cm'>
                              <p align=right style='text-align:right;margin:0;'><a href="https://www.nematullo.com"><img
                                    src="images/neo-logo.png" alt="Nematullo" border="0"
                                    style="display:inline-block; border:0; outline:none;" /></a></p>
                            </td>
                          </tr>
                        </table>
                      </tr>
                      <tr style="background: #0c8382">
                        <!-- Name or Title -->
                        <td
                          style="font-family:'Ubuntu', sans-serif, Arial; font-size:18px; line-height:24px; font-weight:700; color:#ffffff; padding:10px 0 0 10px;">
                          <strong><span id="yname"></span> <span id="ysurname"></span></strong></td>
                      </tr>
                      <tr style="background: #0c8382">
                        <!-- job title or subtitle -->
                        <td
                          style="font-family:'Ubuntu', sans-serif, Arial; font-size:13px; line-height:14px; font-weight:400; color:#ffffff; padding:0 0 0 10px;">
                          <span style=" display: inline-block; white-space: nowrap;" id="unviz"></span> </td>
                      </tr>
                      <tr style="background: #0c8382">
                        <td style="padding:20px 12px 18px 12px;">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0"
                            style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                            <tr>
                              <!-- Phone number -->
                              <td class="clump" nowrap="nowrap"
                                style="padding-right: 10px; font-family:'Ubuntu', sans-serif, Arial; font-size:12px; line-height:24px; font-weight:700; color:#ffffff; letter-spacing:1px;">
                                <span style="color:#0c5460; font-weight:900; font-size:14px;">M:</span> <a id="ayphone"
                                  href="tel:9999" style="text-decoration:none; color:#ffffff;"><span
                                    style=" display: inline-block; white-space: nowrap;" id="yphone"></span> </a></td>
                              <!-- Phone number -->
                              <td class="clump" nowrap="nowrap"
                                style="padding-right: 10px; font-family:'Ubuntu', sans-serif, Arial; font-size:12px; line-height:24px; font-weight:700; color:#ffffff; letter-spacing:1px;">
                                <span style="color:#0c5460; font-weight:900; font-size:14px;">T:</span> <a
                                  href="tel:+359999009999" style="text-decoration:none; color:#ffffff;">+999 999
                                  9999 </a></td>
                              <!-- Email address -->
                              <td class="clump" nowrap="nowrap"
                                style="padding-right: 10px; font-family:'Ubuntu', sans-serif, Arial; font-size:12px; line-height:24px; font-weight:700; color:#ffffff; letter-spacing:1px;">
                                <span style="color:#0c5460; font-weight:900; font-size:14px;">E:</span><a id="ayemail"
                                  style="text-decoration:none; color:#ffffff;" href=""> <span
                                    style=" display: inline-block; white-space: nowrap;" id="yemail"></span> </a></td>
                            </tr>
                          </table>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0"
                            style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                            <tr>
                              <!-- Address -->
                              <td class="clump"
                                style="font-family:'Ubuntu', sans-serif, Arial; font-size:12px; line-height:24px; font-weight:700; color:#ffffff; letter-spacing:1px;">
                                <span style="color:#0c5460; font-weight:900; font-size:14px;">A:</span> Andijan, Uzbekistan
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0"
                            style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                            <tr style="background: #f5f5f5">
                              <!-- social network URLs -->
                              <td>
                                <a href="https://www.facebook.com"><img
                                    src="images/social_icon_dark_facebook.png" alt="Facebook" width="35" border="0"
                                    style="display:inline-block; border:0; outline:none;" /></a>
                                <a href="https://twitter.com"><img src="images/social_icon_dark_twitter.png"
                                    alt="Twitter" width="35" border="0"
                                    style="display:inline-block; border:0; outline:none;" /></a>
                                <a href="https://www.linkedin.com"><img
                                    src="images/social_icon_dark_linkedin.png" alt="LinkedIN" width="35" border="0"
                                    style="display:inline-block; border:0; outline:none;" /></a>
                                <a href="https://www.instagram.com"><img
                                    src="images/social_icon_dark_instagram.png" alt="Instagram" width="35" border="0"
                                    style="display:inline-block; border:0; outline:none;" /></a>
                              </td>
                              <td style='background:whitesmoke;padding:0cm 7.5pt 0cm 0cm'>
                                <p align=right style='text-align:right;line-height:18.0pt;margin:0;'><span
                                    style='font-family:Ubuntu, sans-serif, Arial; font-size:11.5pt;letter-spacing:.75pt;color:#0c8382;text-decoration:none;text-underline:none'><a
                                      href="https://www.nematullo.com" style="text-decoration:none; color:#0c8382;">
                                      <strong>nematullo.com</strong></a></span></p>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>

          <hr>

          <button class="btn btn-primary" data-clipboard-target="#kopy">Copy Signature</button>

        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/nematullo/">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted"> &copy; by Nematullo</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/clipboard.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>

<div id="uploadimageModal" class="modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cut and Upload Photo </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 text-center">
            <div id="image_demo" style="width:350px; margin-top:30px"></div>
          </div>
          <div class="col-md-4" style="padding-top:30px;">
            <br />
            <br />
            <br />
            <button class="btn btn-success crop_image">Upload photo</button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>