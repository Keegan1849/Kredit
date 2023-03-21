<html>
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="scripts/style.css">
        <link rel="stylesheet" href="scripts/style2.css">
        <link rel="stylesheet" href="scripts/uploadbutton.css">

    </head>
    <body class="bgImg">

     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark stickyNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="explore.php">Kredit</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="explore.php">Explore</a></li>
                        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="favorites.php">Favorites</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
         <!-- End Navigation-->
         <div id="container">
  <form method="post" enctype="multipart/form-data" novalidate="" class="box has-advanced-upload">
    <div class="box-input">
      <svg x="0px" y="0px" viewBox="0 0 64 62" style="enable-background:new 0 0 64 62;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#fff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
</style>
<g id="spa-launch">
	<path class="st0" d="M33,27.1h-8c0,0-2-6-2-12c0-8,6-14,6-14s6,6,6,14C35,21.1,33,27.1,33,27.1z"/>
	<line class="st0" x1="29" y1="17.1" x2="29" y2="27.1"/>
	<polyline class="st0" points="25,27.1 17,27.1 17,23.1 23.1,17.1 	"/>
	<polyline class="st0" points="33,27.1 41,27.1 41,23.1 34.9,17.1 	"/>
	<path class="st0" d="M18,41.2c0.5-5.7,5.2-10.1,11-10.1c5.1,0,9.3,3.4,10.6,8.1"/>
	<path class="st0" d="M48,41.1c-0.2-3.4-3.1-6-6.5-6c-1.2,0-2.4,0.3-3.3,0.9"/>
	<path class="st0" d="M42.3,47.1c0,0-1-4-6-4"/>
	<path class="st0" d="M26.3,43.1c-3-1-4,2-4,2s-3-2-5,0s-1,4-1,4"/>
	<path class="st0" d="M9,46.1c-0.8-0.6-1.9-1-3-1c-2.8,0-5,2.2-5,5s2.2,5,5,5h46c2.8,0,5-2.2,5-5c0-5-4-9-9-9
		c-0.9,0-1.8,0.1-2.6,0.4"/>
	<path class="st0" d="M18.8,37.9c-1.1-0.5-2.4-0.8-3.8-0.8c-4.6,0-8.5,3.5-8.9,8"/>
</g>
</svg>
      <input type="file" name="files[]" id="file" class="box-file" data-multiple-caption="{count} files selected" multiple="">
      <label for="file"><strong>Choose a file</strong><span class="box-dragndrop"> or drag it here</span>.</label>
      <button type="submit" class="button">Upload</button>
    </div>

    <div class="box-uploading">Uploading…</div>
    <div class="box-success">Done! <a href="https://css-tricks.com/examples/DragAndDropFileUploading//?submit-on-demand" class="box-restart" role="button" data-unsp-sanitized="clean">Upload more?</a></div>
    <div class="box-error">Error! <span></span>. <a href="https://css-tricks.com/examples/DragAndDropFileUploading//?submit-on-demand" class="box-restart" role="button" data-unsp-sanitized="clean">Try again!</a></div>
    <input type="hidden" name="ajax" value="1"></form>

</div>

    </body>
    <script src="scripts/upload.js"></script>

</html>