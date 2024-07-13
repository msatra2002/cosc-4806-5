<?php require_once 'app/views/templates/headerPublic.php'?>
<style>
	@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap");

	*,
	*::before,
	*::after {
		margin: 0;
		padding: 0;

	}

	body {
		--color: rgba(30, 30, 30);
		--bgColor: rgba(245, 245, 245);
		min-height: 50vh;
		display: grid;
		align-content: center;
		gap: 2rem;

		font-family: "Poppins", sans-serif;
		color: var(--color);
		background: var(--bgColor);
	}

	h1 {
		text-align: center;
	}
</style>
<body>

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>LOG IN!</h1>
            </div>
        </div>
    </div>
	
		

<div class="row">
    <div class="col-sm-auto">
		<form action="/login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="username">Username</label>
				<input required type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input required type="password" class="form-control" name="password">					
			</div>
            <br>
		    <button type="submit" class="btn btn-secondary">Login</button>
		</fieldset>
		</form> 
			<a href="/create">Create an account</a>
	</div>
</div>
			</body>
    <?php require_once 'app/views/templates/footer.php' ?>
