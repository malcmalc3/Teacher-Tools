<?php $title = "test menu"; include 'header.php';?>

<p>Directly from Bootstrap -- their CSS</p>
<p>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-target
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>

<p>Doing my own CSS</p>
<p>
	<button class="button" type="button" data-toggle="collapse" data-target="#menuLink" aria-expanded="false" aria-controls="menuLink">
	Button with data-target
	</button>
</p>
<div class="collapse" id="menuLink">
	<div class="sub-button">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>
</div>

<nav>
	<ul>
		<li class="accordion-link" data-toggle="collapse" data-target="#subLink" aria-expanded="false" aria-controls="subLink"><a href="#">link</a>
			<ul class="collapse" id="subLink">
				<li class="accordion-sub-link"><a href="#">sub-link</a></li>
			</ul>
		</li>
	</ul>
</nav>

<?php include 'footer.php';?>