
<!-- Static navbar -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="navbar navbar-default navbar-fixed-top">
	<div class="text-right"></div>
	<div class="container">
		<div class="navbar-header">

			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Bobiltreff</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Startside</a></li>

				{if (isset($smarty.session.loggedIn))}
					{if ($smarty.session.loggedIn)}
							{if ($smarty.session.isAdmin)}
								<li><a href="admin.php">Treff til godkjenning</a></li>
								<li><a href="">Rediger treff</a></li>
								<li><a href="register.php">Opprett Bruker</a></li>
						{else}
							<li><a href="">Registrer Nyt</a></li>
						{/if}
					{/if}
						<li><a href="logout.php">Logg ut</a></li>
				{else}
					{foreach key=key from=$regionListe item=region}
					<li><a href="visRegion.php?regionId={$region->getId()}">Region {$region->getRegionnavn()}</a></li>
					{/foreach}
					<li><a href="Login.php">Logg inn</a></li>
				{/if}
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>
<br />